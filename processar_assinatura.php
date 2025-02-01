<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Coletando as informações do formulário
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $empresa = $_POST['empresa'];
    $plano = $_POST['plano'];

    // E-mail para onde será enviado
    $to = "rovaservicess@gmail.com";
    $subject = "Assinatura de Plano - Rova Services";

    // Corpo do e-mail
    $message = "
    Nome: $nome\n
    E-mail: $email\n
    Telefone: $telefone\n
    Empresa: $empresa\n
    Plano Selecionado: $plano\n
    ";

    // Cabeçalhos do e-mail
    $headers = "From: no-reply@rovaservices.com\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Enviar o e-mail
    if (mail($to, $subject, $message, $headers)) {
        echo "Sua assinatura foi realizada com sucesso!";
    } else {
        echo "Ocorreu um erro ao processar sua assinatura. Tente novamente.";
    }
}
?>
