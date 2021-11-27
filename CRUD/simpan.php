<?php
    include './koneksi.php';

    $id_buku = $_POST['id_buku'];
    $judul_buku = $_POST['judul_buku'];
    $penulis = $_POST['penulis'];
    $jenis_buku = $_POST['jenis_buku'];
    $gambar_buku = $_POST['gambar_buku'];

    $sql = "INSERT INTO buku (id_buku, judul_buku, penulis, jenis_buku, gambar_buku) VALUES ('$id_buku','$judul_buku','$penulis','$jenis_buku','$gambar_buku')";
    if($conn->query($sql) === TRUE){
        echo "simpan berhasil <br>";
        echo "<a href='formulir.php'>Kembali</a><br>";
    }else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();

?>