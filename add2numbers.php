<html>
<head>
<title>Add 2 numbers </title>
</head>
<body>
<?php
$n1=$_GET["num1"]; //retrieve the first number
$n2=$_GET["num2"]; //retrieve the second number

//check so that both input are not blank
if ($n1!=NULL || $n2!=NULL){
    //if both are numbers
    if(ctype_digit($n1) && ctype_digit($n2)){
        echo "The first number is: $n1 <br>";
        echo "The second number is: $n2<br>";
        $hasil=$n1+$n2;
        echo " $n1 + $n2 = $hasil";
        }
    //if both are notnumbers
    else if(!ctype_digit($n1) && !ctype_digit($n2)){
        echo "The first and second number are not valid,<br>
        Please enter a number only";
        }
    //if the first input is not number
    else if(!ctype_digit($n1)){
        echo "The first number is not a digit <br>";
        echo "Please enter a number only";
        }
    //if the second input is not number
    else if(!ctype_digit($n2)){
        echo "The second is not a digit <br>";
        echo "Please enter a number only";
        }
    }
    else{//if both inputs are blanks
    echo "Please make sure to enter the both numbers<br>";
    }
?>
</body>
</html>