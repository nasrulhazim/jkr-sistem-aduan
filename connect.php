<?php
    //filename connect.php
    $dbserver="localhost";
    $dbuser="root";//not advisable
    $dbpassword="";//dont copy
    $dbname="ckepahan_ckemsia";
    $db=mysqli_connect($dbserver, $dbuser,
                    $dbpassword, $dbname);
    if($db==true){//makesure connect to db
        echo "DB Created";
    }
    else{//db not connected
        echo mysqli_error($db);//debug only
    }
?>