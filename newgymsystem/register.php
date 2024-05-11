<?php
include_once("connections/connection.php");
$con = connection();

if(isset($_POST['login'])){
$name = $_POST['Name'];
$email = $_POST['Email'];
$password = $_POST['Password'];

$sql = "INSERT INTO `log_in` (`Name`, `Email`, `Password`)
 VALUES('$name','$email','$password')";

 $con->query($sql) or die ($con->error);

 echo header("Location: registration.php");
}
?>
