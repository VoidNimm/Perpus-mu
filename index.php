<?php
    include 'koneksi.php';

    $query = "SELECT * FROM tb_daftar;";
    $sql = mysqli_query($conn, $query);
    $no = 0;

  //  while($result = mysqli_fetch_assoc ($sql));
  //   var_dump($result); 
    

?>



<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <!-- BAGIAN BOOTSTRAP -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
        
        <!-- FONT AWESOME -->
        <link rel="stylesheet" href="fontawesome/css/font-awesome.min.css">

        <title>Perpus mu</title>
    </head>
    <body>
        <!-- TEMPATNYA NAVBAR -->
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


            <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-header">
                        <h4>Cari buku anda </h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-7">

                                <form action="" method="GET">
                                    <div class="input-group mb-3" style="margin-left:15rem;">
                                        <input type="text" name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" class="form-control" placeholder="Search data">
                                        <button type="submit" class="btn btn-dark">Search</button>
                                    </div>
                                </form>
                                
                                <div style="margin-top: 2rem; margin-left:15rem;"><h4>Hasil Pencarian</h4></div>

            <div class="col-md-12" style="margin-left: 15rem;">
                <div class="card mt-4">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Judul</th>
                                    <th>Penerbit</th>
                                    <th>Tahun Terbit</th>
                                    <th>ISBN</th>
                                    <th>Jumlah</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $con = mysqli_connect("localhost","root","","db_perpus");
                                    if (!$con) {
                                      die("Connection failed: " . mysqli_connect_error());
                                  }

                                    if(isset($_GET['search']))
                                    {
                                        $filtervalues = $_GET['search'];
                                        $query = "SELECT * FROM tb_daftar WHERE CONCAT(judul,penerbit,tahunTerbit,isbn,jumlah) LIKE '%$filtervalues%' ";
                                        $query_run = mysqli_query($con, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $items)
                                            {
                                                ?>
                                                <tr>
                                                    <td><?= $items['judul']; ?></td>
                                                    <td><?= $items['penerbit']; ?></td>
                                                    <td><?= $items['tahunTerbit']; ?></td>
                                                    <td><?= $items['isbn']; ?></td>
                                                    <td><?= $items['jumlah']; ?></td>
                                                </tr>
                                                <?php
                                            }
                                        }
                                        else
                                        {
                                            ?>
                                                <tr>
                                                    <td colspan="4">No Record Found</td>
                                                </tr>
                                            <?php
                                        }
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>


        <div class="table-responsive" style="margin: 4rem 0 ;">
            <table class="table align-middle table-bordered table-hover table-dark">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>Judul Buku</th>
                  <th>Penerbit</th>
                  <th>Tahun Terbit</th>
                  <th>ISBN</th>
                  <th>Jumlah</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
              <?php
                  while($result = mysqli_fetch_assoc ($sql)){
              ?>
                  <tr>
                    <td> <center> 
                      <?php echo ++$no;?>
                    </center></td>
                    <td>
                      <?php echo $result['judul']; ?>
                    </td>
                    <td>
                      <?php echo $result['penerbit']; ?>
                    </td>
                    <td>
                    <?php echo $result['tahunTerbit']; ?>
                    </td>
                    <td><?php echo $result['isbn']; ?></td> 
                    <td><?php echo $result['jumlah']; ?></td>  
                    <td>
                      <a href="kelola.php?ubah=<?php echo $result['id_buku'];?>"  type="button" class="btn btn-success btn-sm">
                        <i class="fa fa-pencil ">Edit</i></a>

                      <a href="proses.php?hapus=<?php echo $result['id_buku'];?>" type="button" class="btn btn-danger btn-sm" onClick="return confirm('Apakah Anda yakin ingin hapus data?')">
                        <i class="fa fa-trash">Delete</i></a>
                    </td>
                  </tr>
                <?php  
                }
                ?>     
            </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>

            
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    </body>
</html>