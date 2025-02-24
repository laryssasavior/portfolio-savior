<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Coletando os dados do formulário e sanitizando
    $name = htmlspecialchars($_POST["name"]);
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $subject = htmlspecialchars($_POST["subject"]);
    $message = htmlspecialchars($_POST["message"]);

    // Verificando se os campos não estão vazios
    if (empty($name) || empty($email) || empty($subject) || empty($message)) {
        echo "Todos os campos são obrigatórios!";
        exit;
    }

    // Definindo o e-mail de destino
    $to = "empresasavior@gmail.com"; // Seu e-mail para receber as mensagens
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Criando o corpo do e-mail
    $email_body = "Nome: $name\n";
    $email_body .= "E-mail: $email\n";
    $email_body .= "Assunto: $subject\n\n";
    $email_body .= "Mensagem:\n$message\n";

    // Enviando o e-mail
    if (mail($to, $subject, $email_body, $headers)) {
        echo "Mensagem enviada com sucesso!";
    } else {
        echo "Erro ao enviar a mensagem. Tente novamente.";
    }
} else {
    echo "Acesso inválido.";
}
?>
