<?php
include_once("connections/connection.php");

$con = connection();
$id = $_GET['ID'];

$sql = "SELECT * from coach ORDER BY CoachID ASC";
$member = $con->query($sql) or die($con->error);
$row = $member->fetch_assoc();

if(isset($_POST["submit"])){
    $fname = $_POST['firstname'];
    $phone = $_POST['phone'];
    $add = $_POST['Address'];
    $gender = $_POST['Gender'];
    $dateapplied = $_POST['DateApplied'];
    $sql = "UPDATE coach SET FirstName = '$fname',Phone = '$phone',Address ='$add',Gender = '$gender',DateApplied = '$dateapplied'
    WHERE CoachID = '$id'";
    $con->query($sql) or die($con->error);
    echo header("Location: coach.php?id =".$id);
}
?>
<!DOCTYPE html>
<html>
    <head>
    <meta charset = "UTF-8">
    <Meta name ="viewport" content = "width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content ="ie=edge">
    <title>Update Page</title>
    <link rel = "stylesheet" href = "css/edit.css">
    <link rel="icon" href="img/Section 1.png" type="image/icon type">
    </head>
    <body>
        <div class = "heading">
            <span class=" title">Gym Management System</span>
            <div class="LOGO"><img class =" pic"src ="pics/Section 1.png"></div>
            <div class ="admin-pic">
                <img class = "admin" src="img/pics/user (1).png">
                <span class="ad">Admin</span>
        </div>
      <form class =" editform"action = "" method = "post">
          <label> First Name </label>
          <input type="text" name="firstname" id="firstname" value = "<?php echo $row['FirstName'];?>">
          <label> Phone </label>
          <input type="tel" name="phone" id="phone" value = "<?php echo $row['Phone'];?>">
          <label> Address </label>
          <input type="text" name="address" id="address" value = "<?php echo $row['Address'];?>">
          <label> Gender</label>
          <select name = "gender" id = "gender">
              <option value = "Male"<?php echo($row['Gender'] == "Male")? 'selected':'';?>>Male</option>
              <option value = "Female" <?php echo($row['Gender'] == "Female")? 'selected':'';?>>Female</option>
          </select>
          <label> Date Applied</label>
          <input type="date" name="DateApplied" id="DateApplied" value = "<?php echo $row['Date_Applied'];?>">

          <input type = "submit" name = "submit" value = "Submit Form">
      </form>
    </body>
</html>