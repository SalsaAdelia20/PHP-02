<?php
    include './koneksi.php';
    echo "<a href='formulir.php'>Tambah data</a><br>";

    $sql = "SELECT * FROM buku"; //siswa = nama table yang akan ditampilkan
    $result = $conn->query($sql);
    $a = 1;

    while($baris = mysqli_fetch_array($result)){
        echo "<br>";
        echo "$a";
        echo "<br>";
        echo "Judul_Buku : Minion 2 " . $baris[1] . "<br>";
        echo "Penulis : Brian Lynch" . $baris[2] . "<br>";
        echo "Jenis_Buku : Komik" . $baris[3] . "<br>";
        echo "Gambar_Buku : " . $baris[4] . "<br>"; 
        echo '<img src="Minion.png">';
        echo "<a href='ubah_data.php?id_buku=$baris[0]'>ubah &nbsp</a>";
        echo "<a href='hapus.php?id_buku=$baris[0]'>Hapus</a>";
        $a++;
    }
    $conn->close();//untuk menghentikan koneksi

?>