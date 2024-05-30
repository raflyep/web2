<?php
// Memulai sesi
session_start();

// Menghapus semua data sesi terkait keranjang belanja
unset($_SESSION['cart']);

// Redirect ke halaman konfirmasi
header('Location: confirm.php');
exit();
?>
