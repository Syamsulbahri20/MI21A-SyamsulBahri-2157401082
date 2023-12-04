
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>
<div class="kotak">

    <div class="row center">
        <div class="col mt-5">
            <div class="card-body">
                <h1 class="text-center">Login</h1> 
                <form action="/beranda" method="POST">
                    <p class="fst-italic text-danger">Silahkan Isi Data Terlebih Dahulu</p>
@csrf
<div class="mb-3">
    <label for="email" class="form-label">Email</label>
<input type="email" class="form-control" id="email" name="email">
</div>
<div class="mb-3">
<label for="password" class="form-label">Password</label>
<input type="password" class="form-control"> </input>
</div>
<div class="posisi">
    <button type="submit" class="btn btn-primary">Login</button>
    <a href="/" class="btn btn-secondary"> Kembali </a>
</div>
</form>
</div>
</div>



