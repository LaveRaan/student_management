<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<title>Add Student</title>
<link rel="stylesheet" href="add_student.css">

</head>

<body>

<h2>Add Student</h2>

<form action="save_student.php" method="post" enctype="multipart/form-data" onsubmit="return validateForm()">

Name :
<input type="text" name="name" id="name"><br><br>

Email :
<input type="email" name="email" id="email"><br><br>

Age :
<input type="number" name="age" id="age"><br><br>

Gender :
<input type="radio" name="gender" value="Male"> Male
<input type="radio" name="gender" value="Female"> Female<br><br>

Skills :
<input type="checkbox" name="skills[]" value="HTML"> HTML
<input type="checkbox" name="skills[]" value="CSS"> CSS
<input type="checkbox" name="skills[]" value="PHP"> PHP<br><br>

Department :
<select name="department">
<option value="BCA">BCA</option>
<option value="MCA">MCA</option>
<option value="BSc">BSc</option>
<option value="MSc">MSc</option>
</optgroup>

</select><br><br>

Join Date :
<input type="date" name="date"><br><br>

Profile Image :
<input type="file" name="image"><br><br>

Comments :
<textarea name="comments"></textarea><br><br>

<input type="submit" value="Submit">
<input type="reset" value="Reset">
<button type="button"><a href="dashboard.php">Exit</a></button>
</a>

</form>
<script src="validate.js"></script>
</body>
</html>