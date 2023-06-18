<?php

include_once("conexao.php");

if(isset($_POST['update']))
{
  $id = $_POST['id'];
  $cliente1 = $_POST['cliente1'];
  $telefone = $_POST['telefone'];
  $email = $_POST['email'];
  $servico = $_POST['servico'];
  $profissional = $_POST['profissional'];
  $data = $_POST['data'];
  $hora = $_POST['hora'];
  
  $sqlUpdate = "UPDATE cliente SET cliente1 = '$cliente1', telefone = '$telefone', email = '$email' , servico = '$servico', profissional = '$profissional', data = '$data', hora = '$hora' WHERE id = '$id'";
  
  $result = $conexao->query($sqlUpdate);
}
  header('Location: listar_clientes(adm).php');

?>