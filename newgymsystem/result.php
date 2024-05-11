<?php
if(!isset($_SESSION)){
    session_start();
}
include_once("connections/connection.php");

$connection = connection();
$search = $_GET['search'];

$sql = "SELECT * from member WHERE FirstName LIKE '%$search%' || LastName LIKE '%$search%' ORDER BY MemberID ASC";
$member = $connection->query($sql) or die($connection->error);
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
            <h1>Member</h1>
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
                    <th>Member ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Gender</th>
                    <th>Birthday</th>
                    <th>Height</th>
                    <th>Weight</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Joining Date</th>
                </tr>
            </thead>
            <tbody>
                <?php do{?>
                <tr>
                    <td><?php echo $row['MemberID']; ?></td>
                    <td><?php echo $row['FirstName']; ?></td>
                    <td><?php echo $row['LastName']; ?></td>
                    <td><?php echo $row['Gender']; ?></td>
                    <td><?php echo $row['Birthday']; ?></td>
                    <td><?php echo $row['Height'];?></td>
                    <td><?php echo $row['Weight'];?></td>
                    <td><?php echo $row['Contact'];?></td>
                    <td><?php echo $row['Address'];?></td>
                    <td><?php echo $row['Joining_Date'];?></td>

                    <form action="edit.php" method = "post">
                        <input  type ="hidden" name ="Id" value ="<?php echo $row['MemberID']?>">
                        <td><a class ="ID" href = "edit.php?id=<?php echo $row["MemberID"];?>">Update</td>
                    </form>

                    <form action="delete.php" method = "post">
                        <input type ="hidden" name ="id" value ="<?php echo $row['MemberID']?>">
                        <td><a class ="delete" type ="submit" name = "delete" value = "Delete">Delete</a></td>
                    </form>
                </tr>
                <?php }while ($row = $member->fetch_assoc())?>
            </tbody>
        </table>
    </body>
</html>