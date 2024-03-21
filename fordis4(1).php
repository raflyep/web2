<!DOCTYPE html>
<html>
<head>
    <title>Deret Bilangan Ganjil Habis Dibagi 3</title>
</head>
<body>
    <h2>Deret Bilangan Ganjil Habis Dibagi 3</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Masukkan Nilai Awal: <input type="number" name="nilai_awal"><br>
        Masukkan Nilai Akhir: <input type="number" name="nilai_akhir"><br>
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Ambil nilai awal dan nilai akhir dari form
        $nilai_awal = $_POST['nilai_awal'];
        $nilai_akhir = $_POST['nilai_akhir'];

        // Inisialisasi variabel jumlah dan total
        $jumlah = 0;
        $total = 0;

        // Validasi nilai awal harus kurang dari nilai akhir
        if ($nilai_awal > $nilai_akhir) {
            echo "Nilai awal harus kurang dari nilai akhir.";
        } else {
            echo "Deret bilangan ganjil yang habis dibagi 3 dari $nilai_awal sampai $nilai_akhir:<br>";

            // Loop untuk menampilkan deret bilangan ganjil yang habis dibagi 3
            for ($i = $nilai_awal; $i <= $nilai_akhir; $i++) {
                if ($i % 2 != 0 && $i % 3 == 0) { // Cek bilangan ganjil dan habis dibagi 3
                    echo $i . ", ";
                    $jumlah++; // Menambah jumlah deret bilangan
                    $total += $i; // Menambah total deret bilangan
                }
            }

            echo "<br>";
            echo "Banyaknya deret bilangan: $jumlah<br>";
            echo "Jumlah dari deret bilangan: $total";
        }
    }
    ?>
</body>
</html>
