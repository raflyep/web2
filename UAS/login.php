<?php

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nim = $_POST['nim'];
    $password = $_POST['password'];

    // Dummy credentials for demonstration purposes
    $valid_nim = '211011400964';
    $valid_password = 'admin';

    if ($nim == $valid_nim && $password == $valid_password) {
        $_SESSION['nim'] = $nim;
        header('Location: index.php');
        exit;
    } else {
        echo '<script>alert("Invalid nim or password."); window.location.href="login.php";</script>';
    }
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
</head>

<body>
    <h2>Login</h2>
    <form action="" method="post">
        <label for="nim">nim :</label>
        <input type="text" id="nim" name="nim" required>
        <br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <br><br>
        <button type="submit">Login</button>
    </form>
</body>

</html>