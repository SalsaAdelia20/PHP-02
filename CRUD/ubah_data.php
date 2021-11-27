<?php
    session_start();

    if(!isset($_GET["id"])){
        header("location:tampil.php");
        exit();
    }

    include 'koneksi.php';

    $id = $_GET["id"];

    $getData = $connn->query("SELECT * FROM buku WHERE id_buku = ".$id);

    if($getData->num_rows==0){
        header("location:tampil.php");
        exit();
    }

    $getData = $getData->fetch_assoc();

?>
    <form action="do_simpan.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?=$_GET["id"]?>">
        <table>
            <tr>
                <td>id_buku</td>
                <td>:</td>
                <td><input type="text" name="id_buku" value="<?=$getData['id_buku']?>"></td>
            </tr>
            <tr>
                <td>judul_buku</td>
                <td>:</td>
                <td><input type="text" name="judul_buku" value="<?=$getData['judul_buku']?>"></td>
            </tr>
            <tr>
                <td>penulis</td>
                <td>:</td>
                <td><textarea name="penulis"><?=$getData['penulis'];?></textarea></td>
            </tr>
            <tr>
                <td>jenis_buku</td>
                <td>:</td>
                <td><input type="text" name="jenis_buku" value="<?=$getData['jenis_buku']?>"></td>
            </tr>
            <tr>
                <td>gambar_buku</td>
                <td>:</td>
                <td><input type="text" name="gambar_buku" value="<?=$getData['gambar_buku']?>"></td>
            </tr>
                <td></td>
                <td></td>
                <td><button>SIMPAN</button></td>
</tr>
</table>
</form>
<?php
    if(isset($_SESSION["message"])){
        echo $_SESSION["message"];
        unset($_SESSION["message"]);
    }
?>