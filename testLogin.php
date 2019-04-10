<html>
<head><title>Test An Alphabet</title></head>
<body>

Enter a small alphabet<br>

<form name="frmChar" method="get" action = "">
<input name="txtchar" type="text">
<input name="btnSubmit" type="submit" value="Check Char">
</form>

<?php
if ($_GET['txtchar']!=NULL){
    if ($_GET['txtchar']=='a'){
        echo "The alphabet is 'a'<br>";
        }
    else{
    echo "The alphabet is NOT 'a'<br>";
    }
}

?>
</body>
</html>