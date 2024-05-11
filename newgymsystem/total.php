<?php

include_once("connections/connection.php");
$con = connection();

$sql = "SELECT * from payment";
$result = $con->query($sql);
$totalPayments = 0;

if($result ->num_rows > 0){
    $totalAmount = 0;

    while ($row = $result->fetch_assoc()){
        $totalAmount += $row['Amount'];
    }
}else{
    $totalAmount = 0;
}
$con ->close();
?>