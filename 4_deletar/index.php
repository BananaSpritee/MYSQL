<?php

$host = "localhost";
$user = "professor";
$pass = "professor123";
$db = "curso";

$conn = mysqli_connect($host, $user, $pass, $db);

// Criar a tabela ---------------------------------------------------------------- //

$q = "DROP TABLE testepratico";

$conn -> query($q);
$conn -> close();