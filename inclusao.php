<?php

session_start();

//Arquivo de conexão para o B.D.
include_once("conexao.php");


//Recebe variáveis do formulário $nome=$_POST['nome'];
$cliente1=$_POST['cliente1'];
$telefone=$_POST['telefone'];
$email=$_POST['email'];
$servico=$_POST['servico'];
$profissional=$_POST['profissional'];
$data=$_POST['data'];
$hora=$_POST['hora'];

//Teste de execução, após a execução, coloque rodos os echos nos comentários

 // echo "Cliente: $cliente <br>";
 // echo "Telefone: $telefone <br>";
//  echo "E-mail: $email <br>";
//  echo "Servicos: $servicos <br>";
//  echo "Profissional: $profissional <br>";
//  echo "Data: $data <br>";
//  echo "Hora: $hora <br>";
  
  //Assim que o teste for efetuado com sucesso, tire os demais códigos dos comentários
  
// Tirar espaço em branco das variáveis recebidas através do formulário

 

 //Inserir os dados do formulário no banco de dados
 
 

  // Retorono da declaração
  $result = mysqli_query($conexao, "INSERT INTO `cliente`(`cliente1`, `telefone`, `email`, `servico`, `profissional`, `data`, `hora`) values
  ('$cliente1','$telefone','$email','$servico','$profissional','$data','$hora')");
  
  //Se a nossa conexão retornou com uma Id, significa que os dados foram inseridos com Sucesso
  if(mysqli_insert_id($conexao)) {
    
    //msg de pós-envio de sucesso

    //O usuário permanecerá na mesma página assim que enviar o cadastro
    header("Location: agradecimento.html");
  } else { 
    $_SESSION['msg'] = "Erro ao Agendar Horário!";
    // Senão der certo o envio do cadastro, o usuário permanecerá na mesma página e, o session_start exibirá uma msg de erro
    header("Location: form_agendamento.php");
  }
?>