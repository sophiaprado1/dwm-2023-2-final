<?php

// Define as credenciais para a conexão com o banco de dados
$usuario = 'root';
$senha = '';
$database = 'tbl_dwm';
$host = 'localhost';

// Cria uma nova conexão com o banco de dados
$mysqli = new mysqli($host, $usuario, $senha, $database);

// Verifica se houve algum erro na conexão
if ($mysqli->error) {
    // Encerra a execução do script e exibe uma mensagem de erro
    die("Falha ao conectar ao banco de dados:" . $mysqli->error);
}
