<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $selected_plan = $_POST['MembershipType'];

    // Define prices for each plan
    $prices = [
        'Silver' => 300,
        'Gold' => 600,
        'Platinum' => 1000
    ];

    // Get the price based on the selected plan
    $amount = $prices[$selected_plan];


    $sql = "INSERT INTO payment (MembershipType, Amount) VALUES ('$selected_plan', '$amount')";
    
    include_once("connections/connection.php");
    $con = connection();

    if ($con->query($sql) === TRUE) {
        echo header("Location: thankyou.php");
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }

    $con->close();
}
?>