<?php
$db_host = "localhost"; 
$db_user = "root";
$db_pass = "";
$db_name = "db_biblioteca";

$conn = new mysqli(hostname: $db_host,username: $db_user,password: $db_pass,database: $db_name);

if ($conn->connect_error){
    die("conexão falhou: {$conn->connect_error}");
}
else {
    echo "Parabéns, a conexão ao banco de dados ocorreu normalmente!";
}