<?php
include 'koneksi.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Perpus mu.</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
      * {
  margin: 0px;
  padding: 0px;
  box-sizing: border-box;
  font-family: sans-serif;
}

.image-container {
  width: 100%;
  display: block;
  margin: -5px auto;
  position: relative;
}

.image-container img {
  width: 100%;
  height: 690px;
}

.overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 97%;
  backdrop-filter: blur(10px);
  background-color: rgba(0, 0, 0, 0.4);
  display: flex;
  justify-content: center;
  align-items: center;
}

.image-text {
  color: #fff;
  font-size: 50px;
  font-weight: bold;
  text-align: center;
  padding: 20px;
}

.judul h1 {
  color: #fff;
  font-size: 50px;
  font-weight: bold;
  text-align: center;
  padding: 20px;
}

.judul p {
  color: #fff;
  margin-left: 70px;
  font-size: 20px;
}

.text {
  justify-content: center;
  margin-left: 40px;
  flex-wrap: wrap;
  margin-top: 30px;
}

.text h2 {
  margin-right: 10px;
}

span {
  font-size: 2rem;
  font-weight: 50 ;
}
    </style>

  </head>
  <body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#" style="font-size: 1.7rem;">Perpus Mu.</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="index.php">Daftar buku</a>
        </li>
        <li class="nav-item">
        <a type="button" class="btn btn-dark" href="kelola.php">Tambah buku</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="image-container" style="margin-bottom: 20px;">
      <img src="https://images.unsplash.com/photo-1722231817416-c175af6924d8?q=80&w=1932&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="img-fluid" alt="">
     <div class="overlay">
     <h1 class="image-text">Perpus mu. <br> <span>Tempat terbaik untuk menemukan buku mu</span></h1> 
     </div>
    </div>
        <div class="container" style="font-size: 1.4rem; margin:6rem 3.5rem 1rem 3.5rem;">
        <h1>Perpus mu.</h1>
        <p>Buku adalah kumpulan lembaran-lembaran kertas yang disusun menjadi satu dan berisi tulisan, gambar, atau kombinasi keduanya.
           Buku biasanya memiliki tujuan tertentu, seperti untuk mendidik, menginformasikan, menghibur, atau mendokumentasikan sesuatu.</p>
           <a href="kelola.php" type="button" class="btn btn-dark" style="padding:15px;">
            <i class="fa fa-plus">
            </i>
            Tambah Buku mu</a>
        </div>


        <section id="Product" style="margin:5rem 0">
      <h1 style="margin:6rem 3.5rem 1rem 3.5rem; color: #222831;">Definitely This Week</h1>
      <div class="container">
        <div class="row text-center">
        </div>
        <div class="row">
          <div class="col-lg">
            <div class="card" style="margin:0 0 2rem 0">
            <img src="img/erin-song-IPBwd8NE6pQ-unsplash.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h6 class="card-text">Imagine</h6>
              <p>John Lennon</p>
              <p>1882</p>
            </div>
          </div>
        </div>
        <div class="col-lg">
          <div class="card" style="margin:0 0 2rem 0;">
          <img src="img/minha-baek-0j0CyLf7wbE-unsplash.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h6 class="card-text">Yellow Submarine</h6>
            <p>The Beatles</p>
            <p>1667</p>
          </div>
        </div>
      </div>
      <div class="col-lg">
        <div class="card" style="margin: 0 0 2rem 0;">
        <img src="img/daniel-k-cheung-B7N0IjiIJYo-unsplash.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h6 class="card-text">Legonnon</h6>
          <p>The Beatles</p>
          <p>1669</p>
        </div>
      </div>
    </div>
    <div class="col-lg">
      <div class="card" style="margin:0 0 2rem 0;">
      <img src="img/charanjeet-dhiman-ch_MUlBlPxw-unsplash.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h6 class="card-text">How to play guitar</h6>
        <p>John Lennon</p>
        <p>1979</p>
      </div>
    </div>
  </div>
  </div>
        <div class="row">
          <div class="col-lg">
            <div class="card" style="margin:0 0 2rem 0">
            <img src="img/erin-song-IPBwd8NE6pQ-unsplash.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h6 class="card-text">Imagine</h6>
              <p>John Lennon</p>
              <p>1882</p>
            </div>
          </div>
        </div>
        <div class="col-lg">
          <div class="card" style="margin:0 0 2rem 0;">
          <img src="img/minha-baek-0j0CyLf7wbE-unsplash.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h6 class="card-text">Yellow Submarine</h6>
            <p>The Beatles</p>
            <p>1667</p>
          </div>
        </div>
      </div>
      <div class="col-lg">
        <div class="card" style="margin: 0 0 2rem 0;">
        <img src="img/daniel-k-cheung-B7N0IjiIJYo-unsplash.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h6 class="card-text">Legonnon</h6>
          <p>The Beatles</p>
          <p>1669</p>
        </div>
      </div>
    </div>
    <div class="col-lg">
      <div class="card" style="margin:0 0 2rem 0;">
      <img src="img/charanjeet-dhiman-ch_MUlBlPxw-unsplash.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h6 class="card-text">How to play guitar</h6>
        <p>John Lennon</p>
        <p>1979</p>
      </div>
    </div>
  </div>
        </div>
      </div>
    </section>

    <footer class="bg-body-tertiary text-center text-lg-start" style="margin-top: 10rem;">
        <div class="text-center p-3" style="background-color: #E0E0E0; color: #222831;">
          +62 87860204908 ©2024 Copyright:
          <a href="http://localhost/web_perpus/home.php" style="color:#222831;">Perpus mu. Inc.</a>
        </div>
      </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>