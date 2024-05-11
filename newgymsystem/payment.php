<?php
include_once("connections/connection.php");
$con = connection();

if((isset($_POST['submit']))){
    $name = $_POST['Name'];
    $method = $_POST['PaymentMethod'];
    $selected_plan = $_POST['MembershipType'];

    //DEFINE PRICE FOR EACH PLAN
    $prices = [
        'Silver' => 300,
        'Gold' => 600,
        'Platinum' => 1000
    ];

    // Get the price based on the selected plan
    $amount = $prices[$selected_plan];

    $sql = "INSERT INTO `payment`(`Name`,`PaymentMethod`,`MembershipType`,`Amount`)
        VALUES ('$name','$method','$selected_plan','$amount')";
        $con->query($sql) or die($con->error);
    echo header("Location: thankyou.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Page</title>
    <link rel = "stylesheet" href = "css/payment.css">
    <link rel="icon" href="img/Section 1.png" type="image/icon type">
 
</head>
<body>
    <div class = "heading">
        <div></div>
        <h1>Membership Payment</h1>
        <div></div>
        </div>
    </div>
    <!--FORM -->
    <div class = "container">
        <form method = "post">
            <div class = "info">
                <label>Full Name</label>
                <input type ="text" name ="Name" placeholder="Full Name" size ="60" required>
                <br>
                <label>Payment Method</label>
                <select name ="PaymentMethod">
                    <option>Cash</option>
                    <option>Card</option> 
                    <option>Gcash</option>
                    <option>Maya</option> 
                </select>
            </div>
            <!--MEMBERSHIP PLAN-->
            <div class = "Plan">
            <h2>Please select your Membership Plan:</h2><br>
                <div>
                    <img src="img/silver.png">
                    <input type="radio" id="plan" name="MembershipType"  value="Silver">
                    <label>Silver Plan</label>
                    <p>Php 300 good for 2 months</p>
                </div>
                <div>
                    <img src="img/gold.png">
                    <input type="radio" id="plan" name="MembershipType"  value="Gold">
                    <label>Gold Plan</label>
                    <p>Php 1000 good for 6 months</p>
                </div>
                <div>
                    <img src="img/platinum.png">
                    <input type="radio" id="plan" name="MembershipType"  value="Premium">
                    <label>Platinum Plan</label>
                    <p>Php 2000 good for 1 year</p>
                </div>
                <input type ="submit" name ="submit" value = "Submit">   
            </div>
        </form>
    </div>
    <script src = "js/payment.js"></script>
</body>
</html>