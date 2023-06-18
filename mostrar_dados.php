<?php
// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém os valores do formulário
    $servico = $_POST["servico"];
    $funcionario = $_POST["funcionario"];

    // Realiza as operações necessárias no banco de dados
    // ...

    // Exemplo de exibição da mensagem de sucesso
    echo "Agendamento realizado com sucesso!";
}
?>