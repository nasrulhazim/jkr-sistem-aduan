<html>
<head>
<title>Array</title>
</head>
<body>
<?php

$keretabossaya = 'nissan';
$kereta        = ['proton', 'produa', $keretabossaya];
$kereta[1]     = 'ford';

array_pop($kereta);
array_push($kereta, 'honda', 'toyota');
//echo $kereta[1]. "<br>";
//echo $kereta[2];

unset($kereta[0]);

foreach ($kereta as $result) {
    echo $result;
    echo '<br>';
}
?>

</body>
</html>