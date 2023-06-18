<?php

session_start();

//Arquivo de conexão para o B.D.
include_once("conexao.php");


//Recebe variáveis do formulário
$nome_adm=$_POST['nome_adm'];
$email_adm=$_POST['email_adm'];
$senha_adm=$_POST['senha_adm'];

//Teste de execução, após a execução, coloque rodos os echos nos comentários

  //echo "Administrador: $nome_adm <br>";
 // echo "E-mail: $email_adm <br>";
//  echo "Senha: $senha_adm <br>";

  
  //Assim que o teste for efetuado com sucesso, tire os demais códigos dos comentários
  
// Tirar espaço em branco das variáveis recebidas através do formulário

 

 //Inserir os dados do formulário no banco de dados
 
 

  // Retorono da declaração
$result = mysqli_query($conexao, "INSERT INTO `adm`(`nome_adm`, `email_adm`, `senha_adm`) values
('$nome_adm','$email_adm','$senha_adm')");
  
  //Se a nossa conexão retornou com uma Id, significa que os dados foram inseridos com Sucesso
if(mysqli_insert_id($conexao)) {
    
    //msg de pós-envio de sucesso

    //O usuário permanecerá na mesma página assim que enviar o cadastro
header("Location:form_adm.php");
 } else { 
 $_SESSION['msg'] = "Erro ao Agendar Horário!";
    // Senão der certo o envio do cadastro, o usuário permanecerá na mesma página e, o session_start exibirá uma msg de erro
header("Location: form_adm.php");
 }
?>