<?php
include_once("connections/connection.php");
$con = connection();

// Query to get the count of registered members
$sql = "SELECT COUNT(*) AS total_Coach FROM coach";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    // Fetch the count
    $row = $result->fetch_assoc();
    $totalCOACH = $row["total_Coach"];
} else {
    $totalCOACH = 0;
}
$con ->close();
?>
