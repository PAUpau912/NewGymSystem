<?php
if(!isset($_SESSION)){
    session_start();
}
include_once("connections/connection.php");

$con = connection();
$search = $_GET['search'];

$sql = "SELECT * from coach WHERE FirstName LIKE '%$search%' ORDER BY CoachID ASC";
$member = $con->query($sql) or die($con->error);
$row = $member->fetch_assoc();
?>
<!DOCTYPE html>
<html>
    <head>
    <meta charset = "UTF-8">
    <Meta name ="viewport" content = "width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content ="ie=edge">
    <title>Result Page</title>
    <link rel = "stylesheet" href = "css/member.css">
    <link rel="icon" href="img/Section 1.png" type="image/icon type">
    </head>
    <body>
        <div class = "heading">
            <div></div>
            <h1>Coach</h1>
            <a href ="dashboard.php" class="Back" >Dashboard</a>
        </div>
        <form action ="result.php" method = "get">
            <a href = "add.php" class ="Add">Add Member</a>
            <div>
                <input type = "text" name ="search" id = "search" size = "50" placeholder="Search">
                <button type = "submit" class="search" >Search</button>
            </div>
            <div></div>
        </form>
        <table>
            <thead>
                <tr>
                    <th>Coach ID</th>
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
                    <td><?php echo $row['Address'];?></td>
                    <td><?php echo $row['Gender'];?></td>
                    <td><?php echo $row['Date_Applied'];?></td>

                    <form action="edit.php" method = "post">
                        <input  type ="hidden" name ="Id" value ="<?php echo $row['CoachID']?>">
                        <td><a class ="ID" href = "edit.php?id=<?php echo $row["CoachID"];?>">Update</td>
                    </form>

                    <form action="delete.php" method = "post">
                        <input type ="hidden" name ="id" value ="<?php echo $row['CoachID']?>">
                        <td><a class ="delete" type ="submit" name = "delete" value = "Delete">Delete</a></td>
                    </form>
                </tr>
                <?php }while ($row = $member->fetch_assoc())?>
            </tbody>
        </table>
    </body>
</html>