<?php

include ("../includes/connect.php");

$category = $_POST['name'];

$sql = "INSERT INTO categories(name) VALUES('$category')";

$conn-> query($sql);

header ('location: productsshow.php');

?>