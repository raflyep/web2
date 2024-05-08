<?php
// Ambil data dari form
$negara = $_POST['negara'];
$pertandingan = $_POST['pertandingan'];
$menang = $_POST['menang'];
$seri = $_POST['seri'];
$kalah = $_POST['kalah'];
$poin = $_POST['poin'];
$operator = $_POST['operator'];
$nim = $_POST['nim'];

// Format waktu saat ini
$date = date('d M Y H:i:s');

// Format data yang akan ditulis ke file
$data = "$negara|$pertandingan|$menang|$seri|$kalah|$poin\n";

// Tulis data ke file
$file = fopen('data.txt', 'a');
fwrite($file, $data);
fclose($file);

// Tampilkan output
echo "<h2><center>Data Group A Piala Asia Qatar U-23</center</h2>>";
echo "<p><center>Per $date</center></p>";
echo "<p>  $operator</p>";
echo "<p> $nim</p>";
echo "<table border='1' ";
echo "<tr><th>Negara</th><th>P</th><th>M</th><th>S</th><th>K</th><th>Poin</th></tr>";
$lines = file('data.txt', FILE_IGNORE_NEW_LINES);
foreach ($lines as $line) {
    list($negara, $pertandingan, $menang, $seri, $kalah, $poin) = explode('|', $line);
    echo "<tr><td>$negara</td><td>$pertandingan</td><td>$menang</td><td>$seri</td><td>$kalah</td><td>$poin</td></tr>";
}
echo "</table>";
?>
