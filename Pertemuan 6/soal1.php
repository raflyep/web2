<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luas Segitiga - Cara 1</title>
</head>
<body>
    <h2>Menghitung Luas Segitiga - Cara 1</h2>
    <?php
    // Definisikan array alas dan tinggi secara langsung
    $alas = array(10, 8, 12, 5, 7);
    $tinggi = array(6, 5, 9, 3, 8);

    // Fungsi untuk menghitung luas segitiga
    function hitung_luas_segitiga($alas, $tinggi) {
        $luas = 0.5 * $alas * $tinggi;
        return $luas;
    }

    // Hitung dan tampilkan luas segitiga untuk setiap pasang alas dan tinggi
    for ($i = 0; $i < count($alas); $i++) {
        $luas_segitiga = hitung_luas_segitiga($alas[$i], $tinggi[$i]);
        echo "<p>Luas segitiga ke-" . ($i+1) . ": " . $luas_segitiga . "</p>";
    }
    ?>
</body>
</html>
