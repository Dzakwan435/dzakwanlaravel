<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>uts laravel</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
<nav class="navbar bg-body-tertiary fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">UTS Laravel</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">UTS laravel</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="produk">produk</a>
          </li>
        </ul>
        <form class="d-flex mt-3" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </div>
</nav>
<br>
<div class= "container my-5">
<h2> halaman tambah produk </h2>
<div class="container" style="margin-top: 80px;">
    <h2>Form tambah produk</h2>

    <form action="" class="row my-3">
        <div class="col-1 col-md-4 mb-1">
            <label for="kode_produk" class="form-label">Kode Produk</label>
            <input type="text" id="kode_produk" class="form-control" placeholder="Input Kode Produk">
        </div>
        <div class="col-1 col-md-4 mb-1">
            <label for="nama_produk" class="form-label">Nama Produk</label>
            <input type="text" id="nama_produk" class="form-control" placeholder="Input Nama Produk">
        </div>
        <div class="col-1 col-md-4 mb-1">
            <label for="jenis_produk" class="form-label">Jenis Produk</label>
            <select id="jenis_produk" class="form-control">
                <option selected value="">Pilih Produk</option>
            </select>
        </div>
        <div class="col-1 col-md-6 mb-1">
            <label for="harga_produk" class="form-label">Harga</label>
            <input type="text" id="harga_produk" class="form-control" placeholder="Input Harga">
        </div>
        <div class="col-1 col-md-6 mb-1 d-flex align-items-end">
            <button class="btn btn-success" style="width: 100%;">Simpan</button>
        </div>
    </form>
</div>
</div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>