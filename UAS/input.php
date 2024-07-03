<?php

session_start();
require 'koneksi.php';
if (!isset($_SESSION['nim'])) {
    header('Location: login.php');
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UAS - Piala Klasemen EURO</title>
</head>

<body>
    <h2>Klasemen EURO 2024</h2>
    <form method="post">
        <label for="tim" id="tim">Nama Tim : </label>
        <input type="text" name="tim" id="tim" placeholder="Nama Tim">
        <br><br>
        <label for="menang" id="menang">Jumlah Menang : </label>
        <input type="text" name="menang" id="menang" placeholder="Jumlah menang">
        <br><br>
        <label for="seri" id="seri">Jumlah seri : </label>
        <input type="text" name="seri" id="seri" placeholder="Jumlah Seri">
        <br><br>
        <label for="kalah" id="kalah">Jumlah kalah : </label>
        <input type="text" name="kalah" id="kalah" placeholder="Jumlah Kalah">
        <br><br>
        <label for="poin" id="poin">Jumlah poin : </label>
        <input type="text" name="poin" id="poin" placeholder="Jumlah poin">
        <br><br>
        <button type="submit" name="submit">Kirim</button>

    </form>
</body>

</html>