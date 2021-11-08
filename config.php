<?php

$dbHost = 'localhost:3307';
$dbUsername = 'root';
$dbPassword = 'gola230162#work';
$dbName = 'courses_site';

$conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

/* if ($conexao->connect_errno) {
    echo "Erro";
} else {
    echo "Conexão efetuada";
}
 */