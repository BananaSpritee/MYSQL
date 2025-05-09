<?php

$host = "localhost";
$user = "professor";
$pass = "professor123";
$db = "curso";

$conn = mysqli_connect($host, $user, $pass, $db);

$table = "carros";
$marca = "bmw";
$descricao = "x6";
$motor = "25";

$q = "INSERT INTO $table (`marca`,`descricao`,`motor`) VALUES ('$marca','$descricao','$motor')";

$conn -> query($q);
$conn -> close();