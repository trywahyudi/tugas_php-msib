<?php
function cekLogin($username, $password) {
    // Check username and password
    if ($username === 'trywahyudi' && $password === 'wahyu2001') {
        // Redirect to admin.php if username and password are correct
        header('Location: admin.php');
        exit();
    } else {
        echo 'Login failed. Invalid username or password.';
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Landing Page</title>
</head>
<body>
    <h2>Welcome, Admin!</h2>
    <p>This is the landing page for the admin.</p>
</body>
</html>
