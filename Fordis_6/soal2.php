<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luas Segitiga - Cara 2</title>
</head>
<body>
    <h2>Menghitung Luas Segitiga - Cara 2</h2>
    <form method="post">
        <?php
        // Fungsi untuk menghitung luas segitiga
        function hitung_luas_segitiga($alas, $tinggi) {
            $luas = 0.5 * $alas * $tinggi;
            return $luas;
        }

        // Array kosong untuk menyimpan alas dan tinggi
        $alas_input = array();
        $tinggi_input = array();

        // Input alas dan tinggi segitiga sebanyak 5 kali
        for ($i = 0; $i < 5; $i++) {
            echo "<label for='alas$i'>Alas segitiga ke-" . ($i+1) . ":</label>";
            echo "<input type='text' name='alas[]' id='alas$i'><br>";
            echo "<label for='tinggi$i'>Tinggi segitiga ke-" . ($i+1) . ":</label>";
            echo "<input type='text' name='tinggi[]' id='tinggi$i'><br><br>";
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $alas_input = $_POST['alas'];
            $tinggi_input = $_POST['tinggi'];

            // Hitung dan tampilkan luas segitiga untuk setiap pasang alas dan tinggi
            for ($i = 0; $i < count($alas_input); $i++) {
                $luas_segitiga = hitung_luas_segitiga($alas_input[$i], $tinggi_input[$i]);
                echo "<p>Luas segitiga ke-" . ($i+1) . ": " . $luas_segitiga . "</p>";
            }
        }
        ?>
        <input type="submit" value="Hitung">
    </form>
</body>
</html>
