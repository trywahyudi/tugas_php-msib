<!DOCTYPE html>
<html>
<head>
    <title>Form Login</title>
</head>
<body>
    <h2>Login Form</h2>
    <form action="form_login.php" method="post">
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username"><br>
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password"><br><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>

<?php
include('admin.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    cekLogin($username, $password);
}
?>
