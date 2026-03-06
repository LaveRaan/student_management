<?php
session_start();
$students = [];

$file = fopen("students.csv","r");

while(($row = fgetcsv($file)) !== FALSE){
$students[] = $row;
}

fclose($file);
?>

<!DOCTYPE html>
<html>
<head>

<title>View Students</title>
<link rel="stylesheet" href="students.css">
<script src="search.js"></script>

</head>

<body>

<h2>Student List</h2>
<div>
<input type="text" id="search" placeholder="Search student..." onkeyup="searchStudent()">
<button type="button"><a href="dashboard.php">Exit</a></button>
</div>

<table id="studentTable">

<colgroup>
<col span="1" style="background:#f2f2f2">
</colgroup>

<thead>
<tr>
<th>Name</th>
<th>Email</th>
<th>Age</th>
<th>Gender</th>
<th>Skills</th>
<th>Department</th>
<th>Date</th>
<th>Image</th>
<th>Comments</th>
</tr>
</thead>

<tbody>

<?php
foreach($students as $student){
echo "<tr>";

echo "<td>".$student[0]."</td>";
echo "<td>".$student[1]."</td>";
echo "<td>".$student[2]."</td>";
echo "<td>".$student[3]."</td>";
echo "<td>".$student[4]."</td>";
echo "<td>".$student[5]."</td>";
echo "<td>".$student[6]."</td>";

echo "<td><img src='uploads/".$student[7]."' width='60'></td>";

echo "<td>".$student[8]."</td>";

echo "</tr>";
}
?>

</tbody>

</table>

</body>
</html>