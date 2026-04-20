<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$mensagem_status = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = htmlspecialchars($_POST['nome']);
    $email_usuario = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $assunto = htmlspecialchars($_POST['assunto']);
    $conteudo = htmlspecialchars($_POST['conteudo']);

    $mail = new PHPMailer(true);

    try {
        // 1. Configurações do Servidor SMTP (Substitua pelos dados da sua hospedagem)
        $mail->isSMTP();
        $mail->Host       = 'mail.extencom.gru.br'; // Ex: smtp.hostinger.com
        $mail->SMTPAuth   = true;
        $mail->Username   = 'infraflow@extencom.gru.br';    // Seu e-mail completo
        $mail->Password   = 'SuaSe';    // A senha do e-mail
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; // Use ENCRYPTION_STARTTLS se a porta for 587
        $mail->Port       = 465;                         // 465 para SMTPS (SSL) ou 587 para STARTTLS

        // Tratamento de acentuação
        $mail->CharSet = 'UTF-8';

        // 2. Remetente e Destinatário
        // IMPORTANTE: O remetente DEVE ser o mesmo e-mail do Username para evitar bloqueios de Spam!
        $mail->setFrom('contato@seusite.com.br', 'InfraFlow - Site');
        
        // Para quem o e-mail vai chegar (o e-mail do Scrum Master ou da equipe)
        $mail->addAddress('pedro.clemonini@email-da-equipe.com.br', 'Equipe InfraFlow'); 
        
        // Adiciona o e-mail do cliente como "Responder Para" (Reply-To)
        $mail->addReplyTo($email_usuario, $nome);

        // 3. Conteúdo do E-mail
        $mail->isHTML(true); // Permite usar tags HTML no corpo do e-mail
        $mail->Subject = "Novo Contato via Site: $assunto";
        
        // Corpo do e-mail bem formatado
        $mail->Body    = "
            <h3>Novo contato recebido do site InfraFlow</h3>
            <p><strong>Nome:</strong> {$nome}</p>
            <p><strong>E-mail:</strong> {$email_usuario}</p>
            <p><strong>Assunto:</strong> {$assunto}</p>
            <hr>
            <p><strong>Mensagem:</strong><br>" . nl2br($conteudo) . "</p>
        ";

        // Corpo alternativo em texto puro (para clientes de e-mail antigos)
        $mail->AltBody = "Nome: {$nome} \nE-mail: {$email_usuario} \nAssunto: {$assunto} \n\nMensagem:\n{$conteudo}";

        // Envia o e-mail
        $mail->send();
        
        // Mensagem de sucesso (Mantendo o estilo Dark Mode do seu site)
        $mensagem_status = "<div class='bg-blue-500/20 border border-blue-500 text-blue-400 p-4 rounded-lg mb-6 font-medium text-center'>Solicitação sobre '$assunto' enviada com sucesso. A equipe técnica entrará em contato em breve!</div>";

    } catch (Exception $e) {
        // Mensagem de erro (útil para debugar o que deu errado com o SMTP)
        $mensagem_status = "<div class='bg-red-500/20 border border-red-500 text-red-400 p-4 rounded-lg mb-6 font-medium text-center'>Erro ao enviar a mensagem. Mailer Error: {$mail->ErrorInfo}</div>";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
...
