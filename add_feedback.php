<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>feedback form</title>
    <link rel="stylesheet" href="feedback_students.css">
</head>
<body><div>
        <form action="save_feedback.php" method="post">
            <h2>STUDENT FEEDBACK FORM</h2>
            NAME <input type="text" name="student_name"><br>
            Rating <select name="rating">
                <option value=" ">--Rating--</option>
                <option value="1">⭐</option>
                <option value="2">⭐⭐</option>
                <option value="3">⭐⭐⭐</option>
                <option value="4">⭐⭐⭐⭐</option>
                <option value="5">⭐⭐⭐⭐⭐</option>
            </select><br>
            Feedback Message<textarea name="message" required></textarea><br>
            Date<input type="date" name="date" required><br>
            <button type="submit">Submit</button>
        </form>
</div>

<h1>Students Feedbacks</h1>

<table class="feedback-table">
    <thead>
        <tr>
            <th>Student Name</th>
            <th>Rating</th>
            <th>Feedback Message</th>
            <th>Date</th>
        </tr>
    </thead>

    <tbody>
        <?php
        $file = fopen("feedback.csv","r");

        while(($data = fgetcsv($file)) !== FALSE)
        {
            echo "<tr>";
            echo "<td>".$data[0]."</td>";
            echo "<td>".$data[1]."</td>";
            echo "<td>".$data[2]."</td>";
            echo "<td>".$data[3]."</td>";
            echo "</tr>";
        }

        fclose($file);
        ?>
    </tbody>
</table>
</body>
</html>
