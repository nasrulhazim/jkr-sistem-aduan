<html>
<head>
<title>Odd or Even</title>
</head>
<body>
Enter two integers<br>
<form name="frmMark" method="get" action="">
Number 1:<input name="txtnum1" type="text">
<br>
Number 2:<input name="txtnum2" type="text">
<br>
<input name="btnSubmit" type="submit" value="Test Odd Even">
</form>

<?php
$num1 = $_GET['txtnum1'];
$num2 = $_GET['txtnum2'];

if (null != $num1 && null != $num2) {
    echo 'Output :<br>';
    echo "First number is $num1, second number is $num2<br>";

    if (0 == $num1 % 2) {//first number is even
        if (0 == $num2 % 2) {//and second number also even
            echo 'Both numbers are even.';
        } else { //second number is odd
            echo 'First number is even, second number is odd';
        }
    } else {//first number is odd
        if (0 != $num2 % 2) {//and second also odd
            echo 'Both numbers are odd.';
        } else { //second number even
            echo 'First number is odd, second number is even';
        }
    }
}
?>
</body>
</html>