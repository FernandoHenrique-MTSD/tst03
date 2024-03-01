<?php

// Informações de login
$servername = "189.51.195.92";
$username = "fernando";
$password = "Chidori1*";
$dbname = "cadastroprodutos";

// Conexão com o banco de dados
$connection = new mysqli($servername, $username, $password, $dbname);

if ($connection->connect_error){
    die($connection->connect_error);
}

?>