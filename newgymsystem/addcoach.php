<?php
include_once("connections/connection.php");
$con = connection();

if(isset($_POST["submit"])){
    $fname = $_POST['firstname'];
    $phone = $_POST['phone'];
    $add = $_POST['address'];
    $gender = $_POST['gender'];
    $dateapplied = $_POST['dateapplied'];
        $sql = "INSERT INTO `coach`(`FirstName`,`Phone`,`Gender`,`Address`,`Date_Applied`)
        VALUES ('$fname','$phone','$gender','$add','$dateapplied')";
        $con->query($sql) or die($con->error);
        echo header("Location: coach.php");
}
?>
<!DOCTYPE html>
<html>
    <head>
      <meta charset = "UTF-8">
      <Meta name ="viewport" content = "width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content ="ie=edge">
      <title>Adding Coach Page</title>
      <link rel = "stylesheet" href = "css/addcoach.css">
      <link rel="icon" href="pics/Section 1.png" type="image/icon type">
    </head>

        <body>
          <div class = "heading">
          <div class="LOGO"><img class =" pic"src ="img/Section 1.png"></div>
              <span class=" title">Gym Management System</span>
              <a href ="dashboard.php" class="Back" >Dashboard</a>
          </div>

          <form class="editform" method = "post">
            <label> First Name </label>
            <input type="text" name="firstname" id="firstname" placeholder="First Name" required>
            <label>Contact Number (09XX-XXXX-XXX or +63 9XX-XXXX-XXX)</label>
            <input type="text" name="phone" pattern="[0-9]{4}-[0-9]{4}-[0-9]{3}" placeholder="09XX-XXXX-XXX or +63 9XX-XXXX-XXX" required>
            <label>Address</label>
            <input type = "text" name ="address" placeholder = "Address" required>
            <label> Gender</label>
              <select name = "gender" id = "gender">
                <option value = "Male">Male</option>
                <option value = "Female">Female</option>
              </select>
            <label>Date Applied</label>
            <input type="date" name="dateapplied" id="dateapplied" required>
            <input type = "submit" name = "submit" value = "Submit">
          </form>
        </body>
</html>