<?php
$conn = mysqli_connect("localhost", "root", "", "uas");
// Cek koneksi
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

//add tim
if (isset($_POST['submit'])) {
    $tim = $_POST['tim'];
    $menang = $_POST['menang'];
    $seri = $_POST['seri'];
    $kalah = $_POST['kalah'];
    $poin = $_POST['poin'];

    $insert = mysqli_query($conn, "insert into klasemen (tim,menang,seri,kalah,poin) values('$tim','$menamg','$seri','$kalah','$poin')");
    if ($insert) {
        header('location:index.php');
    } else {
        echo 'gagal';
        header('location:index.php');
    }
}
?>
