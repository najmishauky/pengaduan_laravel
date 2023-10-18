<?php


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap-5.3.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="pengaduan.css">
</head>
<body>

  @extends("layouts.app")

  @section('content')
  <br>
  <br>
  <br>
  {{$judul}}
  
  @foreach($pengaduan as $pengaduan)
  <p>{{$pengaduan->nik}} - {{ $pengaduan->isi_laporan}}</p>
  @endforeach

    <div class="container" style="margin-top: 150px">
      <table class="table">
        <thead>
          <tr>
            
            <th scope="col"><center>nama</center></th>
            <th scope="col"><center>username</center></th>
            <th scope="col" style="text-align: center;">password</th>
            <th scope="col"><center>telp</center></th>
          </tr>
        </thead>
        
        
      </table>
      <div class="d-grid gap-2 d-md-block">
          <a href="isi_pengaduan.php" class="btn btn-success" type="button" a href="isi_pengaduan.php">Buat Pengaduan</a>
      </div>
    </div>
      <script src="bootstrap-5.3.1-dist/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="bootstrap-5.3.1-dist/css/bootstrap.min.css">
    </body>
</html>
