<?php
include_once("connections/connection.php");
$con = connection();

$sql = "SELECT * from payment ORDER BY PaymentID ASC";
$member = $con->query($sql) or die($con->error);
$row = $member->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payments</title>
    <link rel ="icon" href="img/Section 1.png" type ="icon">
    <link rel ="stylesheet" href = "css/billing.css">
</head>
<body>
    <div class = "heading">
        <span>Payment</span>
        <h1>Gym Management System</h1>
        <a href ="dashboard.php" class="Back">Dashboard</a>
    </div>

    <div class="container">
        <table>
            <thead>
                <tr>
                    <th>Payment ID</th>
                    <th>Name</th>
                    <th>Payment Method</th>
                    <th>Membership Type</th>
                    <th>Payment Date</th>
                    <th>Amount</th>
                </tr>
            </thead>
            <tbody>
                <?php do{?>
                <tr>
                    <td><?php echo $row['PaymentID']; ?></td>
                    <td><?php echo $row['Name']; ?></td>
                    <td><?php echo $row['PaymentMethod']; ?></td>
                    <td><?php echo $row['MembershipType']; ?></td>
                    <td><?php echo $row['PaymentDate']; ?></td>
                    <td><?php echo $row['Amount'];?></td>
                </tr>
                <?php } while($row = $member->fetch_assoc())?>
        </table>
    </div>
</body>
</html>