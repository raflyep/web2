<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bilangan Genap Habis Dibagi 3</title>
</head>
<body>

<?php
// Inisialisasi variabel jumlah bilangan
$jumlah_bilangan = 0;

// Menampilkan judul
echo "<h2>Bilangan Genap Habis Dibagi 3</h2>";

// Menampilkan daftar bilangan
echo "<p>Bilangan genap yang habis dibagi 3:</p>";
echo "<ul>";

// Looping untuk menampilkan bilangan genap dan menghitung jumlahnya
for ($i = 2; $i <= 100; $i += 2) {
    if ($i % 3 === 0) {
        echo "<li>$i</li>";
        $jumlah_bilangan++;
    }
}

echo "</ul>";

// Menampilkan jumlah bilangan
echo "<p>Jumlah bilangan genap yang habis dibagi 3: $jumlah_bilangan</p>";
?>

</body>
</html>
