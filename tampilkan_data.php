<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Data Pemesanan</title>
<link rel="stylesheet" href="koleksi.css">
</head>
<body>

<div class="navbar">
    <a href="awal.html"><img src="logo.png" alt="Logo"></a>
    <a href="awal.html">Back</a>          
    <a href="about.html">About</a>
    <a href="kontak.html">Contact</a>
</div>

<div class="container">
    <h1>Data Pemesanan Buku</h1>

    <div class="data-pemesanan">
        <?php
        // Baca isi file data_pemesanan.txt
        $file_path = "data_pemesanan.txt";

        // Periksa apakah file ada
        if (file_exists($file_path)) {
            // Baca isi file baris per baris
            $lines = file($file_path);

            // Tampilkan setiap baris sebagai data pemesanan
            foreach ($lines as $line) {
                echo "<div class='pemesanan'>";
                echo nl2br(htmlspecialchars($line)); // Tampilkan baris dengan mengonversi karakter khusus
                echo "</div>";
            }
        } else {
            echo "Belum ada data pemesanan.";
        }
        ?>
    </div>

</div>

</body>
</html>