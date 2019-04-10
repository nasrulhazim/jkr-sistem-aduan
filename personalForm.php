<html>
<head><title>Personal info</title></head>
<body>
Key-in your Personal Info<br>
<form name="frmInfo" method="get" action="processPersonal.php">

Name<input name="txtName" type="text" ><br>

Email <input name="txtEmail" type="text" ><br>

Gender <input name="rGender" type="radio" value="male">male
<input name="rGender" type="radio" value="female">female<br>

Faculty <select name="cmbFaculty">
<option value="FTSI">Information & Science Tech</option>
<option value="FPM">Management & Muamalah</option>
<option value="FPPI">Islamic Studies</option>
<option value="FBK">Language & Communication</option>
</select>

<hr>
<input name="btnSubmit" type="submit" value="Send to Server">
<input name="btnReset" type="reset" value="Reset">
</form>
</body>
</html>