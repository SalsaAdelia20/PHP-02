<?php
include 'koneksi.php';
    session_start();
    $buku = $_GET["buku"];

    $sql = "SELECT * FROM buku WHERE id= ".$id_buku;
    $result = $conn->query($sql);

    $result = $conn->fetch_assoc();
    ?>

<form action="formulir.php" method="post";>
    <input type="hidden" name="id" value="<?php echo $result['id']?>">
    <table>
        <tr>
            <td>id_buku</td>
            <td>:</td>
            <td><input type="text" nama="id_buku" value="<?php echo $result['id_nama']?>"></td>
</tr>
        <tr>
            <td>judul_buku</td>
            <td>:</td>
            <td><input type="text" nama="judul_buku" value="<?php echo $result['judul_nama']?>"></td>
</tr>
        <tr>
            <td>penulis</td>
            <td>:</td>
            <td><input type="text" nama="penulis" value="<?php echo $result['penulis']?>"></td>
</tr>
        <tr>
            <td>jenis_buku</td>
            <td>:</td>
            <td><input type="text" nama="jenis_buku" value="<?php echo $result['jenis_nama']?>"></td>
</tr>
        <tr>
            <td>gambar_buku</td>
            <td>:</td>
            <td><input type="text" nama="gambar_buku" value="<?php echo $result['gambar_nama']?>"></td>
</tr>
</table>
<input type="submit" name="simpan" value="UBAH">
</form>
    