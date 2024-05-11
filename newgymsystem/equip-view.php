<?php
if(isset($_SESSION)){
    session_start();
}
include_once("connections/connection.php");

$con = connection();

$sql = "SELECT * from equipment ORDER BY EquipmentID ASC";
$member = $con->query($sql) or die($con->error);
$row = $member->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Equipment</title>
    <link rel = "icon" href ="img/Section 1.png" type ="icon type">
    <link rel ="stylesheet" href= "css/equip-view.css">
</head>
<body>
<header>
        <div class ="head-container">
            <img src ="img/Section 1.png">
            <h1>Equipment</h1>
            <a href = "Dashboard.php">Dashboard</a>
        </div>
    </header>
    
    <div>
    <table>
            <thead>
                <tr>
                    <th>Equipment ID</th>
                    <th>Name</th>
                    <th>Serial Number</th>
                    <th>Equipment Type</th>
                    <th>Condition Type</th>
                </tr>
            </thead>
            <tbody>
                <?php do{?>
                <tr>
                    <td><?php echo $row['EquipmentID']; ?></td>
                    <td><?php echo $row['Name']; ?></td>
                    <td><?php echo $row['SerialNumber']; ?></td>
                    <td><?php echo $row['EquipType']; ?></td>
                    <td><?php echo $row['ConditionType']; ?></td>
                </tr>
                <?php }while ($row = $member->fetch_assoc())?>
            </tbody>
        </table>
    </div>
</body>
</html>