<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"> Masyarakat</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel"><img src="icon 1.png" alt=""></h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="hom"  >hom</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="login">Login </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="register">register </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="pengaduan"> Pengaduan <link rel="stylesheet" href="pengaduan.php"></a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#"> Tanggapan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="logout"> Logout</a>
            </li>
          </ul>
          <form class="d-flex mt-3" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </div>
  </nav>
  <script src="bootstrap-5.3.1-dist/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="bootstrap-5.3.1-dist/css/bootstrap.min.css">
</body>
</html>