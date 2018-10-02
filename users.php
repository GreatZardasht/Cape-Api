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
if (isset($_GET['remove'])) {
    $remove = $_GET['remove'];
    $json = json_decode(file_get_contents('users.json'), true);
    if (isset($json[$remove])) {
        unset($json[$remove]);
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
<header><h1>Capes-api</h1>
    <a class="add" href="add.php">Add User</a>
</header>
<table id="users">
    <tr>
        <th>User</th>
        <th>Cape</th>
        <th>Remove</th>
    </tr>
    <?php
    $json = json_decode(file_get_contents('users.json'));
    foreach ($json as $user => $cape) {
        ?>
        <tr>
            <td><?php echo $user ?></td>
            <td><img src="capes/<?php echo $cape ?>"></td>
            <td style="text-align: center"><a href="users.php?remove=<?php echo $user ?>">X</a></td>
        </tr>
        <?php
    }
    ?>
</table>
</body>
</html>
