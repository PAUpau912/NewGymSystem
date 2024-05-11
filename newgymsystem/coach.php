<?php
if(!isset($_SESSION)){
    session_start();
}
include_once("connections/connection.php");

$connection = connection();

$sql = "SELECT * from coach ORDER BY CoachID ASC";
$member = $connection->query($sql) or die($connection->error);
$row = $member->fetch_assoc();

?>
<!DOCTYPE html>
<html>
    <head>
    <meta charset = "UTF-8">
    <Meta name ="viewport" content = "width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content ="ie=edge">
    <title>Coach Page</title>
    <link rel = "icon" href=" img/Section 1.png" type ="icon">
    <link rel = "stylesheet" href = "css/coach.css">
    <link rel="icon" href="pics/Section 1.png" type="/project/image/icon type">
    </head>
    <body>
        <div class = "heading">
            <div></div>
            <h1>Gym Management System</h1>
            <a href ="dashboard.php" class="Back" >Dashboard</a>
        </div>
        <form action ="" method = "get">
            <a href = "addcoach.php" class ="Add">Add Member</a>
            <div>
                <input type = "text" name ="search" id = "search" size = "50" placeholder="Search">
                <button type = "submit" class="search" >Search</button>
            </div>
            <div></div>
        </form>
        <table>
            <thead>
                <tr>
                    <th>CoachID</th>
                    <th>First Name</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Gender</th>
                    <th>Date Applied</th>
                </tr>
            </thead>
            <tbody>
                <?php do{?>
                <tr>
                <td><?php echo $row['CoachID']; ?></td>
                    <td><?php echo $row['FirstName']; ?></td>
                    <td><?php echo $row['Phone'];?></td>
                    <td><?php echo $row['Address']; ?></td>
                    <td><?php echo $row['Gender']; ?></td>
                    <td><?php echo $row['Date_Applied']; ?></td>

                    <form action="editcoach.php" method = "post">
                        <input type ="hidden" name ="ID" id = "ID" value ="<?php echo $row['CoachID']?>">
                        <td><a class = "ID" href = "editcoach.php?ID=<?php echo $row["CoachID"];?>">Update</td>
                    </form>

                    <form action="deletecoach.php" method = "post">
                        <input type ="hidden" name ="id" id ="id" value ="<?php echo $row['CoachID']?>">
                        <td><a class ="delete" type ="submit" name = "delete" value = "Delete">Delete</a></td>
                    </form>
                </td>
                </tr>
            <?php }while ($row = $member->fetch_assoc())?>
            </tbody>
        </table>
    </body>
</html>