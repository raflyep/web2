<?php 

    $hasil_perhitungan = 0;
    if (isset($_POST['submit'])) {
        switch ($_POST['operasi']) {
            case "+": 
                $hasil_perhitungan = $_POST['angka1'] + $_POST['angka2'];
                break;
            case "-": 
                $hasil_perhitungan = $_POST['angka1'] - $_POST['angka2'];
                break;
            case "*": 
                $hasil_perhitungan = $_POST['angka1'] * $_POST['angka2'];
                break;
            case "/": 
                $hasil_perhitungan = $_POST['angka1'] / $_POST['angka2'];
                break;
            case "%": 
                $hasil_perhitungan = $_POST['angka1'] % $_POST['angka2'];
                break;
            default: 
                $hasil_perhitungan = "Operasi Tidak Ditemukan";
                break;
        };
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penilaian Aritmatika</title>
</head>
<body>
        <form action="" method="POST">

            <input type="number" name="angka1">
            <select name="operasi" id="operasi">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
                <option value="%">%</option>
            </select>
            <input type="number" name="angka2">
            <input type="submit" name="submit" value="submit">
        </form>
    <section>
        <p>Hasil Dari Perhitungan Aritmatika adalah : <?= $hasil_perhitungan; ?></p>
    </section>
</body>
</html>