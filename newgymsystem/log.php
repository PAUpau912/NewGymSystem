<?php
include_once("connections/connection.php");
$con = connection();

if(!isset($_SESSION)){
    session_start();
}

if (isset($_POST['submit'])) {
   
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Insert data into database
    $sql = "SELECT * FROM log_in WHERE email = '$email' 
    AND password = '$password'";
    $user = $con->query($sql) or die ($con ->error);
    $row = $user -> fetch_assoc(); 
    $total = $user->num_rows;

    if($total > 0){
        $_SESSION['UserLogin'] = $row['email'];
        $_SESSION['Access'] = $row['access'];
        echo header("Location: attendance.php");
    }
    else{
        header("Location: log.php?error=invalid");
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="css/log.css">
    <title>Log</title>
    <link rel="icon" href="img/Section 1.png" type="image/icon type">
</head>

<body>
    <!-- MAGCREATE PALANG ACCT-->
    <div class="container" id="container">
        <div class="form-container sign-up">
            <form action="register.php" method="post">
                <h1>Create Account</h1>
                <span>or use your email for registeration</span>
                <input type="text" name="Name" placeholder="Name">
                <input type="email" name="Email" id = "Email" placeholder="Email">
                <input type="password" name="Password" id = "Password" placeholder="Password">
                <input type = "submit" name = "login" value = "Login">
            </form>
        </div>
        <!-- MAY ACCT NA PUTA-->
        <div class="form-container sign-in">
            <form action="" method="post">
                <h1>Sign In</h1>
                <span>or use your email password</span>
                <input type="email" name="email" id ="email" placeholder="Email">
                <input type="password" name="password" id ="password" placeholder="Password">
                <input type ="submit" name ="submit" value = "Submit">
            </form>
            <div id="error-message">
        <?php
            if (isset($_GET['error']) && $_GET['error'] == 'invalid') {
                echo '<script>alert("Invalid username or password. Please try again.")</script>';
            }
        ?>
    </div>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Welcome Back!</h1>
                    <p>Enter your personal details to use all of site features</p>
                    <button class="hidden" id="login">Sign In</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Hello, Friend!</h1>
                    <p>Register with your personal details to use all of site features</p>
                    <button class="hidden" id="register">Sign Up</button>
                </div>
            </div>
        </div>
    </div>
    <a href="landing.php" class="back-button">
        <i class="fas fa-arrow-left"></i> Back
    </a>
    <script src="js/log.js"></script>
</body>

</html>