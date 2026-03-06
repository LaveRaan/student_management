<?php
echo "<body style='background-color:pink'><body>";
session_start();
$student = $_POST['student_name'];
$activity = $_POST['activity_name'];
$date = $_POST['event_date'];
$level = $_POST['level'];
$remarks = $_POST['remarks'];

$data = [$student,$activity,$date,$level,$remarks];

$file = fopen("activities.csv","a");

fputcsv($file,$data);

fclose($file);

echo "<script>
alert('Activity Added Successfully');
window.location.href='add_activity.php';
</script>";

?>