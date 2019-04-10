<html>
<head>
<title>Convert KM to Meter dan Batu </title>
</head>
<body>
<?php
$kmvalue = $_GET['txtkm'];
//retrieve the value of KM

$meter = $kmvalue * 1000; // operation to convert to KM to Meter
$batu  = $kmvalue * 0.62; // operation to convert to KM to Batu

echo "Nilai $kmvalue km adalah bersamaan $meter meter <br>"; //display all the values
echo "Nilai $kmvalue km adalah bersamaan $batu batu"; //display?>
</body>
</html>