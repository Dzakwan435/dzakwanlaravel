<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

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
  <h2>Halaman home</h2>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</body>
</html>