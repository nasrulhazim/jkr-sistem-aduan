<html>
<head>
<?php
$username=$_POST["txtUsername"]; //username is extracted from the querystring
$pword=$_POST["txtPassword"]; //password is extracted from the querystring
?>
<title>Display Info for <?php echo $username;?> </title>
</head>
<body>
<?php
$systemPassword="abc123";
if ($pword==$systemPassword){ //case 1: user password matches system password
    echo "Welcome to $username account...<br>";
}
else{ //case 2: user passwrod do not match system password
    echo "Password does not match...<br>";
}
?>
</body>
</html>