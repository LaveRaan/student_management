<?php
echo "<body style='background-color:pink'><body>";
session_start();
if(isset($_POST['submit']))
{

$name = $_POST['name'];
$rating = $_POST['rating'];
$message = $_POST['message'];
$date = $_POST['date'];

if($name != "" && $rating != "" && $message != "" && $date != "")
{

$file = fopen("feedback.csv","a");

$data = [$name,$rating,$message,$date];

fputcsv($file,$data);

fclose($file);

echo "<script>alert('Feedback Submitted Successfully')</script>";

}

else
{
echo "<script>alert('Please fill all fields')</script>";
}

}

?>