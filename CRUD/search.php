<html>
    <head>
        <title>Cari Database</title>
    </head>
    <body>
        <h1>Searching Buku</h1>
        <form action="hasilsearch.php" method="post">
        <select name="kolom">
            <option value="id_buku">id_buku</option>
            <option value="judul_buku">judul_buku</option>
            <option value="penulis">penulis</option>
            <option value="jenis_buku">jenis_buku</option>
            <option value="gambar_buku">gambar_buku</option>
</select>

<input type ="text" type="text" name="cari">
<input type ="submit" value="cari">
</form>
</body>
</html>