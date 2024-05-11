<?php

include_once("connections/connection.php");
$con = connection();

$sql = "SELECT * from member ORDER BY MemberID ASC";
$member = $con->query($sql) or die($con->error);
$row = $member->fetch_assoc();

if(isset($_POST["submit"])){
    $id = $_GET['ID'];

    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $gender = $_POST['gender']; 
    $birthday = $_POST['birthday']; 
    $height = $_POST['height'];
    $weight = $_POST['weight'];   
    $phone = $_POST['phone'];
    $address = $_POST['address']; 
    $join = $_POST['joiningdate'];

    $sql = "UPDATE member SET FirstName = '$fname',LastName = '$lname',Gender = '$gender',Birthday = '$birthday',Height = '$height',Weight = '$weight',Phone= '$phone',Address = '$address',Joining_Date = '$join '
    WHERE MemberID = '$id'";
    $con->query($sql) or die($con->error);
    echo header("Location: member.php?id =".$id);
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
    <link rel="icon" href="pics/Section 1.png" type="image/icon type">
    </head>
    <body>
        <div class = "heading">
        <div class="LOGO"><img class =" pic"src ="img/Section 1.png"></div>
            <span class=" title">Gym Management System</span>
            <div class ="admin-pic"></div>
        </div>

        <form class =" editform"action = "" method = "post">
          <label> First Name </label>
          <input type="text" name="firstname" id="firstname" value = "<?php echo $row['FirstName'];?>">
          
          <label> Last Name </label>
          <input type="text" name="lastname" id="lastname" value = "<?php echo $row['LastName'];?>">
          
          <label> Gender</label>
          <select name = "gender" id = "gender">
              <option value = "Male"<?php echo($row['Gender'] == "Male")? 'selected':'';?>>Male</option>
              <option value = "Female" <?php echo($row['Gender'] == "Female")? 'selected':'';?>>Female</option>
          </select>
          <label>Birthday</label>
            <input type = "date" name ="birthday" required value = "<?php echo$row['Birthday'];?>">
          <label>Height</label>
            <input type = "number" name ="height" placeholder = "in cm" min="55" max="200" required value = "<?php echo $row['Height'];?>">
          <label>Weight</label>
            <input type = "number" name ="weight" placeholder = "in kg" min="44" max="150" required value = "<?php echo $row['Weight'];?>">
            <label>Contact Number (09XX-XXXX-XXX or +63 9XX-XXXX-XXX)</label>
            <input type="text" name="phone" pattern="[0-9]{4}-[0-9]{4}-[0-9]{3}" placeholder="09XX-XXXX-XXX or +63 9XX-XXXX-XXX" required value = "<?php echo $row['Contact'];?>">
            <label>Address</label>
            <input type = "text" name ="address" placeholder = "Address" required value = "<?php echo $row['Address'];?>">
            <label>Joining Date</label>
            <input type = "date" name ="joiningdate" required value = "<?php echo $row['Joining_Date'];?>">


          <input type = "submit" name = "submit" value = "Submit Form">

        </form>
    </body>
</html>