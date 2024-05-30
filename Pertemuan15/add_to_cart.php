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

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $productId = $_POST['product_id'];
    $quantity = $_POST['quantity'];

    // Menambah barang ke dalam keranjang
    if (isset($products[$productId])) {
        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = [];
        }
        if (isset($_SESSION['cart'][$productId])) {
            $_SESSION['cart'][$productId] += $quantity;
        } else {
            $_SESSION['cart'][$productId] = $quantity;
        }
    }

    // Redirect ke halaman keranjang belanja
    header('Location: view_cart.php');
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Barang ke Keranjang</title>
</head>
<body>
    <h2>Tambah Barang ke Keranjang</h2>
    <form method="post" action="add_to_cart.php">
        <label for="product_id">Pilih Barang:</label>
        <select id="product_id" name="product_id">
            <?php foreach ($products as $id => $name) : ?>
                <option value="<?php echo $id; ?>"><?php echo htmlspecialchars($name); ?></option>
            <?php endforeach; ?>
        </select>
        <br>
        <label for="quantity">Jumlah:</label>
        <input type="number" id="quantity" name="quantity" min="1" required>
        <br>
        <input type="submit" value="Tambah ke Keranjang">
    </form>
    <p><a href="view_cart.php">Lihat Keranjang Belanja</a></p>
</body>
</html>
