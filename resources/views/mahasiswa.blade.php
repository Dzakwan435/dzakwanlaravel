<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Mahasiswa</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="/"><img src="uinsu.jpg" alt="logo" width="50"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="mainNav">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item"><a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="/">home</a></li>
          <li class="nav-item"><a class="nav-link {{ Request::is('profile*') ? 'active' : '' }}" href="/profile">profile</a></li>
          <li class="nav-item"><a class="nav-link {{ Request::is('mahasiswa*') ? 'active' : '' }}" href="/mahasiswa">mahasiswa</a></li>
          <li class="nav-item"><a class="nav-link {{ Request::is('about*') ? 'active' : '' }}" href="/about">about</a></li>
        </ul>
      </div>
    </div>
  </nav>
<h2> halaman mahasiswa </h2>
  <div class="container mt-4">
    <div class="row">
      <div class="col-md-6">
        <div class="card card-black shadow-sm">
          <div class="card-header d-flex justify-content-between align-items-center" style="background:#D9D9D9;">
            <span class="h6 mb-0">Table Mahasiswa</span>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-striped table-bordered table-grey mb-2">
                <thead class="table-dark">
                  <tr>
                    <th style="width:60px">No</th>
                    <th>NIM</th>
                    <th>Nama</th>
                  </tr>
                </thead>
                <tbody id="tbodyMahasiswa">
                  <!-- data akan ditambahkan mahasiswa -->
                </tbody>
              </table>
            </div>

            <div class="d-flex justify-content-between align-items-center mt-3">
              <span id="jumlah" class="badge" style="background:#333; color:#fff;">Total: 0</span>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="card card-black shadow-sm">
          <div class="card-header" style="background:#D9D9D9;">
            <span class="h6 mb-0">Form Tambah Mahasiswa</span>
          </div>
          <div class="card-body card-grey">
            <form id="formMahasiswa" autocomplete="off">
              <div class="mb-3">
                <label for="nim" class="form-label">NIM</label>
                <input id="nim" type="text" class="form-control form-control-dark" required>
              </div>
              <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input id="nama" type="text" class="form-control form-control-dark" required>
              </div>
              <div class="d-grid gap-2">
                <button id="btnTambah" type="submit" class="btn">simpan</button>
              </div>
            </form>

            <hr style="border-color:#ff0000;">
          </div>
        </div>
      </div>
    </div>
  </div>

<script>
$(function(){
  let daftar = [];

  function escapeHtml(s){
    return String(s || '').replace(/[&<>"'\/]/g, c => ({'&':'&amp;','<':'&lt;','>':'&gt;','"':'&quot;',"'":'&#39;','/':'&#x2F;'})[c]);
  }

  function render(){
    const $tb = $('#tbodyMahasiswa').empty();
    daftar.forEach((m, i) => {
      const row = `<tr>
        <td>${i+1}</td>
        <td>${escapeHtml(m.nim)}</td>
        <td>${escapeHtml(m.nama)}</td>

      </tr>`;
      $tb.append(row);
    });
    $('#jumlah').text('Total: ' + daftar.length);
  }

  $('#formMahasiswa').on('submit', function(e){
    e.preventDefault();
    const nim = $.trim($('#nim').val());
    const nama = $.trim($('#nama').val());
    if(!nim || !nama){ alert('Isi NIM dan Nama.'); return; }

    if(daftar.some(x => x.nim === nim)){
      alert('NIM sudah ada.'); return;
    }

    daftar.push({ nim, nama });
    this.reset();
    render();
  });

  $(document).on('click', '.hapus', function(){
    const i = +$(this).data('i');
    if(confirm('Hapus data ini?')){ daftar.splice(i,1); render(); }
  });

  $(document).on('click', '.edit', function(){
    const i = +$(this).data('i');
    const m = daftar[i];
    $('#nim').val(m.nim);
    $('#nama').val(m.nama);

    daftar.splice(i,1);
    render();
    $('#nim').focus();
  });

  $('#hapusSemua').on('click', function(){
    if(confirm('Hapus semua data?')){ daftar = []; render(); }
  });

  $('#search').on('input', function(){
    const q = $(this).val().toLowerCase();
    $('#tbodyMahasiswa tr').each(function(){
      const nim = $(this).find('td:eq(1)').text().toLowerCase();
      const nama = $(this).find('td:eq(2)').text().toLowerCase();
      $(this).toggle(nim.indexOf(q) > -1 || nama.indexOf(q) > -1);
    });
  });


  daftar = [
    { nim: '0702231045', nama: 'Ahmad Fauzi' },
    { nim: '0702231047', nama: 'Siti Rahayu' }
  ];
  render();
});
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>