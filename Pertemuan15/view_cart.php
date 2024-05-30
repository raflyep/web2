<?php
// Memulai sesi
session_start();

// Daftar barang yang tersedia
$products = [
    1 => 'Apple',
    2 => 'Banana',
    3 => 'Orange',
    4 => 'Mango'
];

// Mendapatkan isi keranjang dari sesi
$cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : [];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Keranjang Belanja</title>
</head>
<body>
    <h2>Keranjang Belanja</h2>
    <?php if (!empty($cart)) : ?>
        <table border="1">
            <thead>
                <tr>
                    <th>Nama Barang</th>
                    <th>Jumlah</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($cart as $productId => $quantity) : ?>
                    <tr>
                        <td><?php echo htmlspecialchars($products[$productId]); ?></td>
                        <td><?php echo htmlspecialchars($quantity); ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <p><a href="checkout.php">Checkout</a></p>
    <?php else : ?>
        <p>Keranjang belanja kosong.</p>
    <?php endif; ?>
    <p><a href="add_to_cart.php">Tambah Barang ke Keranjang</a></p>
</body>
</html>
