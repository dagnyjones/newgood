<?php

include ("../includes/connect.php");

$email = $_POST['email'];
$msg = $_POST['msg'];

$sql = "INSERT INTO contact(email,msg) VALUES('$email', '$msg')";

$conn-> query($sql);

?>