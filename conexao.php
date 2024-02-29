<?php

$usuario = 'fernando';
$senha = 'Chidori1*';
$database = 'sistema_az'
$host = '189.51.195.92'

$mysqli = new $mysqli($host, $usuario, $senha, $database);

if($mysqli->error) {
    die("FALHA AO CONECTAR AO BANCO DE DADOS " . $mysqli->error);
}