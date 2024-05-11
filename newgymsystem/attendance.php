<?php
if(!isset($_SESSION)){
    session_start();
} 
include_once("connections/connection.php");
$con = connection();

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $session = $_POST['sname'];
    $coach = $_POST['cname'];
    $date = $_POST['date'];
    $timein = $_POST['timein'];
    $timeout = $_POST['timeout'];
    
    $sql = "INSERT INTO `attendance`(`MemberName`,`SessionName`,`CoachName`,`Date`,`TimeIN`,`TimeOUT`)
    VALUES ('$name','$session','$coach','$date','$timein','$timeout')";
    $con->query($sql) or die($con->error);
    echo header("Location: attendance.php");

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance Page</title>
    <link rel ="stylesheet" href ="css/attendance.css">
    <link rel="icon" href="img/Section 1.png" type="image/icon type">
</head>
<body>
    <div class = "heading">
        <img src = "img/Section 1.png">
        <h1>Attendance</h1>
        <a href ="logout.php">Logout</a>
    </div>
    <div class ="container">
        <form method = "post">
            <label>Member Name</label>
            <input type = "text" name = "name" placeholder = "Full Name" size = 35 required><br>

            <label>Session Name</label>
            <input type = "text" name = "sname" placeholder= "Session Name" size = 35 required><br>

            <label>Coach Name</label>
            <input type = "text" name = "cname" placeholder = "Coach Name" size = 35 required><br>

            <label>Date</label>
            <input type = "date"  name = "date" required><br>

            <label>Time In</label>
            <input type = "time" name = "timein"  size = 35 required>

            <label>Time Out</label>
            <input type = "time" name = "timeout" size = 35 required><br>

            <input type ="submit" name ="submit" value = "Submit">
        </Form>
    </div>
</body>
</html>