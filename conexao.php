<?php

// Cria uma conexão com o servidor MySQL passando host, username e senha  

$dbHost = 'Localhost';
$dbUsername = 'root';
$dbPassord = '';
$dbName = 'studio_estetica';
  
 // Criar a conexão SQL  
 
 $conexao = new mysqli($dbHost,$dbUsername,$dbPassord,$dbName);
 
 
 //Teste de conexão 
 
if($conexao->connect_errno) {
  echo "ERRO! Na conexão com o Banco de Dados.";
 }
 else {
 echo "Conexão efetuada com sucesso!!";
}

?>