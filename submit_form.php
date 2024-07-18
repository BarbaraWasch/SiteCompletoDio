<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = htmlspecialchars($_POST['nome']);
    $email = htmlspecialchars($_POST['email']);
    $assunto = htmlspecialchars($_POST['assunto']);
    $mensagem = htmlspecialchars($_POST['mensagem']);

    // Aqui você pode adicionar o código para enviar o e-mail ou salvar as informações no banco de dados

    echo "Obrigado pelo seu contato, $nome. Nós responderemos em breve.";
}
?>
