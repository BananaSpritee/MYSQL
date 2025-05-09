<?php

$host = "localhost";
$user = "professor";
$pass = "professor123";
$db = "curso";

$conn = mysqli_connect($host, $user, $pass, $db);

$sql = "SELECT * FROM carros";

// Execução da QUERY ------------------------------------------------------------- //

$result = $conn -> query($sql);

print_r($result);