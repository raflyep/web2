<?php

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Dummy credentials for demonstration purposes
    $valid_username = 'admin';
    $valid_password = 'admin';

    if ($username == $valid_username && $password == $valid_password) {
        $_SESSION['username'] = $username;
        header('Location: index.php');
        exit;
    } else {
        echo '<script>alert("Invalid username or password."); window.location.href="login.php";</script>';
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login Form</title>
    
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <form action="login.php" method="post" onsubmit="return validateForm()">
            <div class="input-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Login</button>
        </form>
    </div>

    <script>
        function validateForm() {
            const username = document.getElementById('username').value;
            const password = document.getElementById('password').value;

            if (username === '' || password === '') {
                alert('Both fields are required.');
                return false;
            }
            return true;
        }
    </script>
</body>
</html>
