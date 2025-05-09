<?php

$host = "localhost";
$user = "professor";
$pass = "professor123";
$db = "curso";

$conn = mysqli_connect($host, $user, $pass, $db);

// Criar a tabela ---------------------------------------------------------------- //

$q = "CREATE TABLE testepratico (nome VARCHAR(100), sobrenome VARCHAR(100))";

$conn -> query($q);
$conn -> close();