<?php
 if(isset($_POST["login"])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    if($username === 'admin'&& $password === 'admin'){
        header('Location: Dashboard.php');
  
    }else{header("Location: Admin.php?error=invalid");}
}
?>

<!DOCTYPE html>
<html lang = 'eng'>
    <head>
    <meta charset = "UTF-8">
    <Meta name ="viewport" content = "width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content ="ie=edge">
    <title>Admin</title>
    <link rel= "stylesheet" href="css/admin.css">
    <link rel="icon" href="img/Section 1.png" type="image/icon type">
    </head>
    <body>
        <!-- DEFAULT USERNAME AND PASSWORD IN TO ADMIN ONLY-->
        <div class = "heading">
            <div></div>
            <span>Admin</span>
            <a href ="landing.php">Back</a>
        </div>
        <div class = "loginpage">
            <form action = "" method = "post">
                <img src = "img/Section 1.png">
                <label>Username</label><br/>
                <input type = "text" name = "username" placeholder="Username"size = "25" required><br/>
                <label>Password</label><br/>
                <input type ="password" name = "password" placeholder ="Password" size = "25" required><br/>
                <button type = "submit" name = "login">Login</button>
            </form>
        </div>
        <div id="error-message">
        <?php
            if (isset($_GET['error']) && $_GET['error'] == 'invalid') {
                echo '<script>alert("Invalid username or password. Please try again.")</script>';
            }
        ?>
    </div>
    </body>
</html>