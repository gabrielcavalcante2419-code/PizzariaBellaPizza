<?php
$host = 'bancodedadospizzaria.c5c8ea6m08um.us-east-1.rds.amazonaws.com';                
$usuario = 'admin';                  
$senha = 'mnbvcxzasdfghjkl';                        
$banco = 'modelo_bancodedados';
$port = '3306';


// Criando a conexão
$conn = new mysqli($host, $usuario, $senha, $banco, $port);

// Verificando se houve erro na conexão
if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}
?>


