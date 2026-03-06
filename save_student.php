<?php
echo "<body style='background-color:pink'><body>";
session_start();
$name = $_POST['name'];
$email = $_POST['email'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$skills = implode(",", $_POST['skills']);
$department = $_POST['department'];
$date = $_POST['date'];
$comments = $_POST['comments'];

$image = $_FILES['image']['name'];
$tmp = $_FILES['image']['tmp_name'];

$folder = "uploads/".$image;

/* upload folder check */

if(!is_dir("uploads")){
mkdir("uploads");
}

/* move file */

move_uploaded_file($tmp,$folder);

/* csv data */

$data = [$name,$email,$age,$gender,$skills,$department,$date,$image,$comments];

$file = fopen("students.csv","a");

fputcsv($file,$data);

fclose($file);

echo "<script>
alert('Student Added Successfully');
window.location.href='add_student.php';
</script>";

?>