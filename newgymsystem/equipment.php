<?php
include_once("connections/connection.php");
$con = connection();

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $serial = $_POST['sn'];
    $type = $_POST['type'];
    $condition = $_POST['condition'];

    $sql = "INSERT INTO `equipment`(`Name`,`SerialNumber`,`EquipType`,`ConditionType`) 
    VALUES('$name','$serial','$type','$condition')";
    $con->query($sql) or die($con->error);
    echo header("equip-view.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Equipment</title>
    <link rel="icon" href="img/Section 1.png" type="image/icon type">
    <link rel = "stylesheet" href = "css/equip.css">
</head>
<body>
    <div class ="head-container">
        <img src ="img/Section 1.png">
        <h1>Equipment</h1>
        <a href ="dashboard.php">Dashboard</a>
    </div>

    <div class ="form_container">
        <form method = "post">
            <label>Equipment Name</label>
            <input type = "text" name ="name" placeholder="Equipment Name" size = 40 required><br>
            
            <label>Serial Number</label>
            <input type ="text" name ="sn" pattern="[A-Za-z]{2}-\d{4}" size = 40 placeholder="TM-1001"> <br>

            <label>Equipment Type</label>
            <select name ="type">
                <option>Cardiovascular Equipment</option>
                <option>Strength Training Equipment</option>
                <option>Functional Training Equipment:</option>
                <option>Flexibility and Mobility Equipment</option>
                <option>Accessories</option>
                <option>Cardio Group Equipment</option>
                <option>Recovery and Wellness Equipment</option>
                <option>Specialized Equipment:</option>
            </select><br>

            <label>Condition</label>
            <div>
                <input type ="radio" name = "condition" value ="New">
                <label>New</label>
            </div>
            <div>
                <input type ="radio" name = "condition" value ="Refurbished">
                <label>Refurbished</label>
            </div>
            <div>
                <input type ="radio" name = "condition" value ="Used">
                <label>Used(Good Condition)</label>
            </div>
            <div>
                <input type ="radio" name = "condition" value ="Used">
                <label>Used(Fair Condition)</label>
            </div>
            <div>
                <input type ="radio" name = "condition" value ="Defective">
                <label>Defective</label>
            </div>
            <input type ="submit" name ="submit" value ="Submit">
        </form>
    </div>
    <script src = "js/payment.js"></script>
</body>
</html>