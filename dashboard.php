<?php
session_start();

if(!isset($_SESSION['admin'])){
    header("Location: login.html");
    exit();
}

$studentCount = 0;
$feedbackCount = 0;

if(file_exists("students.csv")){
    $students = file("students.csv");
    $studentCount = count($students);
}

if(file_exists("feedback.csv")){
    $feedback = file("feedback.csv");
    $feedbackCount = count($feedback);
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Dashboard</title>
<link rel="stylesheet" href="dashboard.css">
</head>

<body>

<div class="header">
    <div class="hii">
<h2>🎊Welcome <?php echo $_SESSION['admin']; ?>💐</h2>
</div>
<a href="logout.php">Logout</a>
</div>


<div class="container">
<div class="card">
<div  class="circle-chart">
    <div class="inner-circle">
        <h3>Total<br> Students</h3>
        <p><?php echo $studentCount; ?></p>
    </div>
</div>
</div>

<div class="card">
<div  class="circle-chart">
    <div class="inner-circle">
        <h3>Total<br> Feedback</h3>
        <p><?php echo $feedbackCount; ?></p>
    </div>
</div>
</div>
</div>

<div class="menu-container">

<a href="add_student.php" class="menucard card1">
<div class="card-content">
<h2>Add Student</h2>
<p>Register Student</p>
</div>
<div class="icon">🎓</div>
</a>

<a href="view_students.php" class="menucard card2">
<div class="card-content">
<h2>View Students</h2>
<p>Student List</p>
</div>
<div class="icon">📋</div>
</a>

<a href="add_activity.php" class="menucard card3">
<div class="card-content">
<h2>Add Activity</h2>
<p>Record Activity</p>
</div>
<div class="icon">📝</div>
</a>

<a href="add_feedback.php" class="menucard card4">
<div class="card-content">
<h2>Add Feedback</h2>
<p>Student Feedback</p>
</div>
<div class="icon">💬</div>
</a>

</div>


</body>
</html>