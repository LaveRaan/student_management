<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<title>Add Activity</title>
<link rel="stylesheet" href="activity.css">
</head>

<body>

<h2>Add Student Activity</h2>

<form action="save_activity.php" method="post">

Student Name
<input type="text" name="student_name" required>

Activity Name
<input type="text" name="activity_name" required>

Event Date
<input type="date" name="event_date" required>

Participation Level
<select name="level">

<option value="School">School</option>
<option value="District">District</option>
<option value="State">State</option>
<option value="National">National</option>

</select>

Remarks
<textarea name="remarks"></textarea>

<br>

<input type="submit" value="Save Activity">
<input type="reset" value="Reset">

<a href="dashboard.php">
<button type="button">Exit</button>
</a>

</form>
<h2>Students Activities</h2>

<table class="activity-table">
    <thead>
        <tr>
            <th>Student Name</th>
            <th>Activity</th>
            <th>Event Date</th>
            <th>Participation</th>
            <th>Remarks</th>
        </tr>
    </thead>

    <tbody>
        <?php
        $file = fopen("activities.csv","r");

        while(($data = fgetcsv($file)) !== FALSE)
        {
            echo "<tr>";
            echo "<td>".$data[0]."</td>";
            echo "<td>".$data[1]."</td>";
            echo "<td>".$data[2]."</td>";
            echo "<td>".$data[3]."</td>";
            echo "<td>".$data[4]."</td>";
            echo "</tr>";
        }

        fclose($file);
        ?>
    </tbody>
</table>
</body>
</html>