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
<body style="background-color:#B6FFFA;">

  @extends("layouts.app")

  @section('content')
  <br>
  <br>
  <br>
  <center><h1 style="color:#687EFF">{{$judul}}</h1></center>
    <div class="container" style="margin-top: 2rem">
      <table  style="margin-top: 2rem;" class="table">
          <thead>
            <tr>
              <center><th scope="col" class="table-warning">Id_laporan</th></center>
              <th scope="col" class="table-warning">Tanggal Laporan</th>
              <th scope="col" class="table-warning">Isi Laporan</th>
              <th scope="col" class="table-warning">Gambar Bukti</th>
              <th scope="col" class="table-warning">Detail</th>
            </tr>
          </thead>
          <tbody>
            @foreach($pengaduan as $pengaduan)
            <tr>
              <center><th scope="row" class="table-info">{{$pengaduan->id_pengaduan}}</th></center>
              <td class="table-info">{{$pengaduan->tgl_pengaduan}}</td>
              <td class="table-info">{{$pengaduan->isi_laporan}}</td>
              <td class="table-info">{{$pengaduan->foto}}</td>
              <td class="table-info">
                <a href="/hapus-pengaduan/{{$pengaduan->id_pengaduan}}" class="btn btn-danger">hapus</a>
                <a href="/detail-pengaduan/{{$pengaduan->id_pengaduan}}" class="btn btn-primary">detail</a>
                <a href="/update_pengaduan/{{$pengaduan->id_pengaduan}}" class="btn btn-success">update</a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        <br>
        <br>

      <div class="d-grid gap-2 d-md-block">
          <a href="isi_pengaduan" class="btn btn-success" type="button" a href="isi_pengaduan ">Buat Pengaduan</a>
      </div>
    </div>
      <script src="bootstrap-5.3.1-dist/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="bootstrap-5.3.1-dist/css/bootstrap.min.css">
    </body>
</html>
