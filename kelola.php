<!DOCTYPE html>

<?php
    include 'koneksi.php';  
    $judul = ''; 
    $penerbit = ''; 
    $tahunTerbit = ''; 
    $isbn = ''; 
    $jumlah = '';

    if(isset($_GET['ubah'])){
        $id_buku = $_GET['ubah'];   
        
        $query = "SELECT * FROM tb_daftar WHERE id_buku = '$id_buku';";
        $sql = mysqli_query($conn, $query); 

        $result = mysqli_fetch_assoc($sql);

        $judul = $result['judul'];
        $penerbit = $result['penerbit'];
        $tahunTerbit = $result['tahunTerbit'];
        $isbn = $result['isbn'];
        $jumlah = $result['jumlah'];
    }
?>     
   

<html>
    <head>
        <meta charset="utf-8">
        <!-- BAGIAN BOOTSTRAP -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
        
        <!-- FONT AWESOME -->
        <link rel="stylesheet" href="fontawesome/css/font-awesome.min.css">

        <title>Perpus mu</title>
    </head>
    <body>
        <!-- TEMPATNYA NAVBAR -->
        <nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top" style="margin-bottom: 2rem;">
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
      </ul>
    </div>
  </div>
</nav>
        <div class="container">
        <form method="POST" action="proses.php" enctype="multipart/form-data">
    <input type="hidden" value="<?php echo $id_buku; ?>" name="id_buku">
    <div class="mb-3 row">
        <label for="judul" class="col-sm-2 col-form-label">Judul Buku</label>
        <div class="col-sm-10">
            <input required type="text" name="judul" class="form-control" id="judul" placeholder="Judul Buku" value="<?php echo $judul;?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="penerbit" class="col-sm-2 col-form-label">Penerbit</label>
        <div class="col-sm-10">
            <input required type="text" name="penerbit" class="form-control" id="penerbit" placeholder="Penerbit" value="<?php echo $penerbit;?>">
        </div>
    </div>

    <div class="mb-3 row">
        <label for="tahunTerbit" class="col-sm-2 col-form-label">Tahun Terbit</label>
        <div class="col-sm-10">
            <input required type="text" name="tahunTerbit" class="form-control" id="tahunTerbit" placeholder="Tahun Terbit" value="<?php echo $tahunTerbit;?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="isbn" class="col-sm-2 col-form-label">ISBN</label>
        <div class="col-sm-10">
            <input required type="text" name="isbn" class="form-control" id="isbn" placeholder="ISBN" value="<?php echo $isbn;?>">
        </div>
    </div>

    <div class="mb-3 row">
        <label for="jumlah" class="col-sm-2 col-form-label">Jumlah</label>
        <div class="col-sm-10">
            <input required type="text" class="form-control" id="jumlah" name="jumlah" placeholder="Jumlah buku" value="<?php echo $jumlah;?>">
        </div>
    </div>

    <div class="mb-3 row">
        <div class="col">
            <?php if(isset($_GET['ubah'])) { ?>     
                <button type="submit" name="aksi" value="edit" class="btn btn-dark">
                    <i class="fa fa-floppy-o" aria-hidden="true"></i> Simpan Perubahan
                </button>
            <?php } else { ?>    
                <button type="submit" name="aksi" value="add" class="btn btn-dark">
                    <i class="fa fa-floppy-o" aria-hidden="true"></i> Tambahkan
                </button>
            <?php } ?>
            <a href="index.php" type="button" class="btn btn-danger">
                <i class="fa fa-reply" aria-hidden="true"></i> Batal
            </a>
        </div>
    </div>
</form>

        </div>

        <footer class="bg-body-tertiary text-center text-lg-start" style="margin-top: 16.8rem;">
        <div class="text-center p-3" style="background-color: #E0E0E0; color: #222831;">
          +62 87860204908 ©2024 Copyright:
          <a href="http://localhost/web_perpus/home.php" style="color:#222831;">Perpus mu. Inc.</a>
        </div>
      </footer>

    </body>
</html>