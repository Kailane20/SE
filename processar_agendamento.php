<?php

session_start();

//Arquivo de conexão para o B.D.
include_once("conexao.php");

if($_SERVER["REQUEST_METHOD"] == "POST") {
  //Recebe variáveis do formulário $nome=$_POST['nome'];
$servico=$_POST['servico'];
$funcionario=$_POST['funcionario'];
 

}

echo "servico: $servico <br>";
echo "profissional: $funcionario <br>";
 //Inserir os dados do formulário no banco de dados
 
  // Retorono da declaração
  //$result = mysqli_query($conexao, "INSERT INTO `cliente`(`servico`, `profissional`) values
  //('$servico','$profissional')");
  
  //Se a nossa conexão retornou com uma Id, significa que os dados foram inseridos com Sucesso
  //if(mysqli_insert_id($conexao)) {
    
    //msg de pós-envio de sucesso

    //O usuário permanecerá na mesma página assim que enviar o cadastro
   // header("Location: agradecimento.html");
  //} else { 
   // $_SESSION['msg'] = "Erro ao Agendar Horário!";
    // Senão der certo o envio do cadastro, o usuário permanecerá na mesma página e, o session_start exibirá uma msg de erro
 //   header("Location: Select_servi&prof.php");
 // }
?>