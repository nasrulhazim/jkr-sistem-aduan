<html>
<head>
<title>Convert KM to Meter </title>
</head>
<body>
<?php
$kmvalue=$_GET["txtkm"]; 
//retrieve the value of KM

$meter=$kmvalue * 1000; // operation to convert to KM to Meter
echo "Nilai $kmvalue km adalah bersamaan $meter meter"; //display all the values
?>
</body>
</html>