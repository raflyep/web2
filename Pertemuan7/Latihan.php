<?php
session_start();
    function menu($menu) {
        if ($menu == '1') {
            return include 'IFElse.php';
        } elseif ($menu == '2') {
            return include 'SwitchCase.php';
        } elseif ($menu == '3') {
            return include 'Looping.php';
        } elseif ($menu == '4') {
            return include 'Array.php';
        }
    }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Materi Pemrograman PHP</title>
</head>
<body>
<h1>Pilih Program Menu</h1>
    <ol>
        <li>Penggunaan IF</li>
        <li>Penggunaan Switch..CASE</li>
        <li>Penggunaan Looping</li>
        <li>Penggunaan Array</li>
    </ol>

    <form action="" method="POST">
        <input type="text" placeholder="masukkan Pilihan" name="menu">
        <input type="submit" name="pilih" value="Pilih">
        <input type="submit" name="reset" value="Reset">
    </form>
    <br>
    <br>
    <br>

</body>
</html>

    <?php 
    // Handling form submission
    if (isset($_POST['pilih'])) {
        // Set session variable for selected menu
        $_SESSION['menu'] = $_POST['menu'];
        // Call menu function to include respective PHP file
        menu($_POST['menu']);
    } else {
        // If session variable is not empty, include respective PHP file
        if (!empty($_SESSION['menu'])) {
            menu($_SESSION['menu']);
        }
    }

    // Reset session
    if (isset($_POST['reset'])) {
        session_destroy();
    }
?>
