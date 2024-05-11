<?php
include_once("connections/connection.php");
$con = connection();

$sql = "SELECT * from attendance ORDER BY AttendanceID ASC";
$member =$con->query($sql) or die($con->error);
$row = $member->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance</title>
    <link rel = "icon" href ="img/Section 1.png" type ="icon">
    <link rel ="stylesheet" href="css/attend.css">
</head>
<body>
<div class = "heading">
        <span>Attendance</span>
        <h1>Gym Management System</h1>
        <a href ="dashboard.php" class="Back">Dashboard</a>
    </div>

    <div class = "container">
        <table>
            <thead>
                <tr>
                    <th>Attendance ID</th>
                    <th>Name</th>
                    <th>Session Name</th>
                    <th>Coach Name</th>
                    <th>Date</th>
                    <th>Time IN</th>
                    <th>Time OUT</th>
                </tr>
            </thead>
            <tbody>
            <?php do{?>
                <tr>
                    <td><?php echo $row['AttendanceID']; ?></td>
                    <td><?php echo $row['MemberName']; ?></td>
                    <td><?php echo $row['SessionName']; ?></td>
                    <td><?php echo $row['CoachName']; ?></td>
                    <td><?php echo $row['Date']; ?></td>
                    <td><?php echo $row['TimeIN'];?></td>
                    <td><?php echo $row['TimeOUT'];?></td>
                </tr>
                <?php } while($row = $member->fetch_assoc())?>
            </tbody>
        </table>
    </div>
</body>
</html>