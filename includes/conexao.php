<?php
$host = 'localhost'; 
$user = 'root';      
$pass = '';         
$db = 'meus_jogos';  

$conexao = mysqli_connect($host, $user, $pass, $db);

if (!$conexao) {
    die("Erro na conexão: " . mysqli_connect_error());
}
