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
 * Created on 02/10/18 at 11:35 AM by Jacobtread
 *
 */
ob_start();
$imgLoc = 'http://localhost/cape-api/capes/';
if (isset($_GET['username'])) {
    $username = $_GET['username'];
    if (!empty($username)) {
        $json = json_decode(file_get_contents('users.json'), true);
        $username = strtolower($username);
        if (isset($json[$username])) {
            header("Location: " . $imgLoc . $json[$username]);
        } else die();
    } else die();
} else die();