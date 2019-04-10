<html>
<head>
<?php
$name    = $_GET['txtName'];
$email   = $_GET['txtEmail'];
$gender  = $_GET['rGender'];
$faculty = $_GET['cmbFaculty'];
?>
<title>Display Personal Info for <?php echo $name; ?></title></head>

<body>
<b>These are my personal details</b>
<hr>
My name is <?php echo $name; ?>.<br>
I am <?php echo $gender; ?>.<br>
I am a student of faculty <?php echo $faculty; ?>.<br>
Do contact me for any comment...<a href="mailto:<?php echo $email; ?>">
<?php echo $email; ?> </a>
</body>
</html>