<h1>Hapus buku</h1>
<?php
    session_start();
    if(isset($_GET["id"])){
    include 'koneksi.php';

    $conn->query("DELETE FROM buku WHERE id_buku = ".$_GET["id"]);

    }
    header("proses_hapus.php");
    exit();
?>