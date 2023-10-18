<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap-5.3.1-dist/css/bootstrap.min.css">
</head>
<body style="background-color:#B6FFFA;">
@extends("layouts.app")

@section('content')
      <br>
      <br>
      <br>
      <br>   
      <br>
      <br>
      <br> 
  <div class="container">
      <form action="isi_pengaduan" method="POST" enctype="multipart/form-data">
      @method("POST")
      @csrf

     <div class="mb-3">
        <p>"Berikan pendapat Anda dengan jujur tentang apa yang Anda lihat"</p>

        <label for="exampleFormControlTextarea1" class="form-label" >Pesan Pengaduan</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Ketik Di sini....." name="isi_laporan"></textarea>
        @error("isi_laporan")
          <div>{{$message}}</div>
        @enderror
     </div>
     <br>
     <div class="input-group mb-3">
       <input type="file" class="form-control" id="inputGroupFile02">
       <label class="input-group-text" for="inputGroupFile02">Upload</label>
     </div>
  </div>
  <br>
  <br>
  <br>
  <div class="d-grid gap-2 col-6 mx-auto">
     <button class="btn btn-primary" type="submit">Kirim</button>
  </div>
</form>  
</div>
@endsection

<script src="bootstrap-5.3.1-dist/js/bootstrap.min.js"></script>
</body>
</html>    