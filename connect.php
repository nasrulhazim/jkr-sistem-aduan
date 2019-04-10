<?php
    //filename connect.php
    $dbserver   = 'localhost';
    $dbuser     = 'root'; //not advisable
    $dbpassword = ''; //dont copy
    $dbname     = 'ckepahan_ckemsia';
    $db         = null;
    try {
        $db = mysqli_connect($dbserver, $dbuser, $dbpassword, $dbname);
        if (! $db) {
            throw new Exception('Unable to connect to server.', 1);
            exit;
        }
    } catch (Exception $e) {
        echo $e->getMessage();
        exit;
    }
