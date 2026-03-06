<?php
echo "<body style='background-color:pink'><body>";
session_start();
$student = $_POST['student_name'];
$rating = $_POST['rating'];
$msg = $_POST['message'];
$date = $_POST['date'];

$data = [$student,$rating,$msg,$date];

$file = fopen("feedback.csv","a");

fputcsv($file,$data);

fclose($file);

echo "<script>
alert('Activity Added Successfully');
window.location.href='add_feedback.php';
</script>";

?>