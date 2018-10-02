<?php
/**
 * Copyright 2018 all rights reserved Jacobtread
 * full ownership over said code contained in any file
 * containing and or referncing this licence goes to
 * Jacobtread. Code must not be used without permission
 * unless the code has been specified by Jacobtread
 * as public free to use code, If said code is used
 * without permsission Jacobtread is in full power /
 * right to remove, delete or take over ownership of
 * said abuser usage of the code. WARNING! if licence
 * is removed full ownership of all code is transfered
 * to Jacobtread1
 *
 * Created on 02/10/18 at 12:06 PM by Jacobtread
 *
 */
session_start();
ob_start();
if (!isset($_SESSION['loggedIn']) || !$_SESSION['loggedIn'])
    die("" . header("Location: login.php"));
if (isset($_POST['submit'])) {
    $cape = $_POST['cape'];
    $username = strtolower($_POST['username']);
    $json = json_decode(file_get_contents('users.json'), true);
    if (!isset($json[$username])) {
        $json[$username] = $cape;
        file_put_contents('users.json', json_encode($json, JSON_PRETTY_PRINT));
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
<form action="" method="post">
    <input type="text" name="username" placeholder="Username">
    <button type="submit" name="submit">Add</button>
    <select id="cape" name="cape" title="Cape" onchange="changeImage()">
        <option value="1.png">Choose A Cape</option>
        <?php
        $files = scandir('capes');
        unset($files[0], $files[1]);
        foreach ($files as $index => $file) {
            ?>
            <option value="<?php echo $file ?>"><?php echo $file ?></option>
            <?php
        }
        ?>

    </select>
</form>
<img id="preview" src="capes/1.png">
<script>
    function changeImage() {
        document.getElementById('preview').src = 'capes/' + document.getElementById('cape').value;
    }
</script>
</body>
</html>
