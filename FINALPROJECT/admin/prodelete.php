<?php

include ('../includes/connect.php');

$newid = $_GET['del_id'];

$sql = "DELETE FROM products WHERE id = '$newid'";

if (mysqli_query($conn, $sql)) {
  header ('location: productsshow.php');
} else {
  echo "Not Deleted";
}



?>