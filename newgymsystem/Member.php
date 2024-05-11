<?php
if(!isset($_SESSION)){
    session_start();
}
include_once("connections/connection.php");

$connection = connection();

$sql = "SELECT * from member ORDER BY MemberID ASC";
$member = $connection->query($sql) or die($connection->error);
$row = $member->fetch_assoc();

?>
<!DOCTYPE html>
<html>
    <head>
    <meta charset = "UTF-8">
    <Meta name ="viewport" content = "width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content ="ie=edge">
    <title>Member Page</title>
    <link rel = "stylesheet" href = "css/Member.css">
    <link rel="icon" href="img/Section 1.png" type="image/icon type">
    </head>
    <body>
        <!--HEADING-->
        <div class = "heading">
            <span>Member</span>
            <h1>Gym Management System</h1>
            <a href ="dashboard.php" class="Back" >Dashboard</a>
        </div>
        <!--CONTAINER PER MEMBER CLIENT-->

        <div class="CONT">
        <?php while ($row = $member->fetch_assoc()): ?>
            <div class="container">
                <div class="picture"></div>
                <div class="info">
                    <label>Name:</label>
                    <span><?php echo $row['FirstName']; ?></span>
                    <span><?php echo $row['LastName']; ?></span> <br>
                    <label>Gender:</label>
                    <span><?php echo $row['Gender']; ?></span><br>
                    <label>Birthday:</label>
                    <span><?php echo $row['Birthday']; ?></span><br>
                    <label>Height:</label>
                    <span><?php echo $row['Height']; ?></span><br>
                    <label>Weight:</label>
                    <span><?php echo $row['Weight']; ?></span> <br>
                    <label>Contact:</label>
                    <span><?php echo $row['Contact']; ?></span><br>
                    <label>Address:</label>
                    <span><?php echo $row['Address']; ?></span><br>
                </div>
                <div class="Buttons">
                    <form action="edit.php" method="post">
                        <input type="hidden" name="ID" value="<?php echo $row['MemberID']; ?>">
                        <input type="submit" class="ID" value="Edit">
                    </form>
                    <form action="delete.php" method="post">
                        <input type="hidden" name="id" value="<?php echo $row['MemberID']; ?>">
                        <input class="delete" type="submit" name="delete" value="Delete">
                    </form>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
    </body>
</html>