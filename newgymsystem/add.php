<?php
include_once("connections/connection.php");
$con = connection();

if(isset($_POST["submit"])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $gender = $_POST['gender'];
    $birthday = $_POST['birthday'];
    $height = $_POST['height']; 
    $weight = $_POST['weight'];
    $contact = $_POST['phone'];
    $address = $_POST['address'];
    $join = $_POST['joiningdate'];

    $sql = "INSERT INTO `member`(`FirstName`,`LastName`,`Gender`,`Birthday`,`Height`,`Weight`,`Contact`,`Address`,`Joining_Date`)
        VALUES ('$fname','$lname','$gender','$birthday','$height','$weight','$contact','$address','$join')";
        $conn->query($sql) or die($conn->error);
        echo header("Location: member.php");
}
?>
<!DOCTYPE html>
<html>
    <head>
    <meta charset = "UTF-8">
    <Meta name ="viewport" content = "width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content ="ie=edge">
    <title>Adding Member Page</title>
    <link rel = "stylesheet" href = "css/add.css">
    <link rel="icon" href="img/Section 1.png" type="image/icon type">
        <!-- link ng font -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Platypi:ital,wght@0,300..800;1,300..800&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    </head>
    <body>
        <!-- HEADING -->
        <div class = "heading">
            <img src ="img/Section 1.png">
            <span class=" title">Gym Management System</span>
            <a href ="dashboard.php" class="Back" >Dashboard</a>

        </div>
        <!-- FORM 1 -->
                <form class ="editform" action = "" method = "post">
                    <h3><strong>Personal Information</strong></h3>
                    <label>First Name</label>
                    <input type = "text" name ="fname" placeholder = "First Name" required>
                    <label>Last Name</label>
                    <input type = "text" name ="lname" placeholder = "Last Name" required>
                    <label>Gender</label>
                    <select name = "gender">
                        <option value = "Male">Male</option>
                        <option value = "Female">Female</option>
                    </select>
                    <label>Birthday</label>
                    <input type = "date" name ="birthday" required>
                    <label>Height</label>
                    <input type = "number" name ="height" placeholder = "in cm" min="55" max="200" required>
                    <label>Weight</label>
                    <input type = "number" name ="weight" placeholder = "in kg" min="44" max="150" required>
                    <label>Contact Number (09XX-XXXX-XXX or +63 9XX-XXXX-XXX)</label>
                    <input type="text" name="phone" pattern="[0-9]{4}-[0-9]{4}-[0-9]{3}" placeholder="09XX-XXXX-XXX or +63 9XX-XXXX-XXX" required>
                    <label>Address</label>
                    <input type = "text" name ="address" placeholder = "Address" required>
                    <label>Joining Date</label>
                    <input type = "date" name ="joiningdate" required>

                    <input type = "submit" name = "submit" value = "Submit">
                </form>
    </body>
</html>