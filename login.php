<?php
// Password = nwA%**Oq5FQocvlkgTi3e
session_start();
ob_start();
if (isset($_POST['submit'])) {
    if ($_POST['password'] === 'nwA%**Oq5FQocvlkgTi3e') {
        $_SESSION['loggedIn'] = true;
        header("Location: users.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Capes - Api by Jacobtread</title>
    <link rel="stylesheet" type="text/css" href="assets/style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
<header><h1>Capes-api</h1></header>
<h1>Enter Your Password</h1>
<form action="" method="post">
    <input type="password" name="password" placeholder="">
    <button type="submit" name="submit">Login</button>
</form>
</body>
</html>