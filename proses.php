<?php
    include 'koneksi.php';

    if(isset($_POST['aksi'])){
        if($_POST['aksi'] == "add"){

            $judul = $_POST['judul'];
            $penerbit = $_POST['penerbit'];
            $tahunTerbit = $_POST['tahunTerbit'];
            $isbn = $_POST['isbn'];
            $jumlah = $_POST['jumlah']; 

            $query = "INSERT INTO tb_daftar VALUES(null, '$judul', '$penerbit', '$tahunTerbit', '$isbn', '$jumlah')";
            $sql = mysqli_query($conn, $query);

            if($sql){
                header("location: index.php");
            } else {
                echo $query;
            }

            echo $judul." | ".$penerbit." | ".$tahunTerbit." | ".$isbn." | ".$jumlah;
            echo "<br> Tambah Data <a href='index.php'>[Home]</a>";

        } else if($_POST ['aksi'] == "edit"){
            $id_buku = $_POST['id_buku'];  // Pastikan variabel id_buku didefinisikan
            $judul = $_POST['judul'];
            $penerbit = $_POST['penerbit'];
            $tahunTerbit = $_POST['tahunTerbit'];
            $isbn = $_POST['isbn'];
            $jumlah = $_POST['jumlah'];

            $queryShow = "SELECT * FROM tb_daftar WHERE id_buku = $id_buku";
            $sqlShow = mysqli_query($conn, $queryShow);
            $result = mysqli_fetch_assoc($sqlShow);

            if($_FILES['foto']['name'] == ""){
                echo "kosong";
            } else {
                echo "ada isi";
            }

            $query = "UPDATE tb_daftar SET judul='$judul', penerbit='$penerbit', tahunTerbit='$tahunTerbit', isbn='$isbn', jumlah='$jumlah' WHERE id_buku='$id_buku'";
            $sql = mysqli_query($conn, $query);

            if($sql){
                header("location: index.php");
            } else {
                echo $query;
            }

            echo "Edit Data <a href='index.php'>[Home]</a>";
        }
    }

    if(isset($_GET['hapus'])){
        $id_buku = $_GET['hapus'];

        $queryShow = "SELECT * FROM tb_daftar WHERE id_buku = $id_buku";
        $sqlShow = mysqli_query($conn, $queryShow);
        $result = mysqli_fetch_assoc($sqlShow);

        $query = "DELETE FROM tb_daftar WHERE id_buku = '$id_buku'";
        $sql = mysqli_query($conn, $query);

        if($sql){
            header("location: index.php");
        } else {
            echo $query;
        }

        echo "Hapus Data <a href='index.php'>[Home]</a>";
    }
?>
