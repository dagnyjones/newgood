<?php

// $host = "localhost";
// $user = "dagny";
// $password = "123456";
// $dbname = "newgood";

$host = "dagnyjons.com.mysql";
$user = "dagnyjons_comnewgood";
$password = "123456";
$dbname = "dagnyjons_comnewgood";

// $conn = mysqli_connect($host, $user, $password, $dbname);

$conn = mysqli_connect('dagnyjons.com.mysql', 'dagnyjons_comnewgood', '123456', 'dagnyjons_comnewgood');

if (!$conn) {
  die ("Connection failed: " . mysqli_connect_error());
}

?>