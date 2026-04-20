<?php

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

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
<head>
    <meta charset="UTF-8">
    <title>Contato - InfraFlow</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-900 text-slate-300 pt-20 selection:bg-blue-500 selection:text-white">
    
    <nav class="fixed top-0 w-full bg-slate-900/95 backdrop-blur-sm border-b border-slate-800 z-50 p-4 flex justify-between items-center px-6 md:px-10 transition-all">
        <a href="index.php" class="flex items-center">
            <img src="public/logo.png" alt="Logo InfraFlow" class="h-10 md:h-12 w-auto object-contain">
        </a>
        <button id="menu-btn" class="block md:hidden text-blue-500 focus:outline-none">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
            </svg>
        </button>
        <div id="menu" class="hidden absolute top-full left-0 w-full bg-slate-900 border-b border-slate-800 flex-col items-center space-y-4 py-6 md:static md:w-auto md:bg-transparent md:border-none md:flex md:flex-row md:space-y-0 md:space-x-6 md:py-0 shadow-xl md:shadow-none">
            <a href="index.php" class="text-slate-300 font-medium hover:text-blue-400 transition">Home</a>
            <a href="quem-somos.php" class="text-slate-300 font-medium hover:text-blue-400 transition">Quem Somos</a>
            <a href="personas.php" class="text-slate-300 font-medium hover:text-blue-400 transition">Equipe</a>
            <a href="contato.php" class="text-blue-500 font-semibold hover:text-blue-400 transition">Contato</a>
        </div>
    </nav>

    <div class="max-w-2xl mx-auto mt-12 mb-20 bg-slate-800 p-8 md:p-10 rounded-2xl shadow-2xl border border-slate-700 border-t-4 border-t-blue-500 mx-6 md:mx-auto">
        <div class="text-center mb-8">
            <h2 class="text-3xl font-extrabold text-white mb-2">Iniciar Protocolo de Contato</h2>
            <p class="text-slate-400">Descreva seu cenário atual de infraestrutura ou dúvida técnica.</p>
        </div>
        
        <?= $mensagem_status ?>

        <form action="contato.php" method="POST" class="space-y-6">
            <div>
                <label class="block text-sm font-semibold text-slate-300 mb-2">Identificação (Nome Completo)</label>
                <input type="text" name="nome" required class="w-full bg-slate-900 border border-slate-700 text-white placeholder-slate-500 p-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition">
            </div>
            
            <div>
                <label class="block text-sm font-semibold text-slate-300 mb-2">E-mail Corporativo ou Acadêmico</label>
                <input type="email" name="email" required class="w-full bg-slate-900 border border-slate-700 text-white placeholder-slate-500 p-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition">
            </div>

            <div>
                <label class="block text-sm font-semibold text-slate-300 mb-2">Natureza da Solicitação</label>
                <select name="assunto" required class="w-full bg-slate-900 border border-slate-700 text-slate-300 p-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition appearance-none">
                    <option value="" disabled selected class="text-slate-500">Selecione o escopo...</option>
                    <option value="Dúvida">Dúvida Técnica Geral</option>
                    <option value="Orçamento">Análise / Orçamento de Consultoria</option>
                    <option value="Extensão">Demanda de Projeto de Extensão</option>
                </select>
            </div>

            <div>
                <label class="block text-sm font-semibold text-slate-300 mb-2">Descrição do Cenário</label>
                <textarea name="conteudo" required rows="5" class="w-full bg-slate-900 border border-slate-700 text-white placeholder-slate-600 p-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition" placeholder="Ex: Estamos precisando migrar nossos serviços locais para uma estrutura virtualizada com Proxmox..."></textarea>
            </div>

            <button type="submit" class="w-full bg-blue-600 text-white font-bold px-6 py-4 rounded-lg hover:bg-blue-500 focus:ring-4 focus:ring-blue-500/50 transition duration-300 shadow-lg shadow-blue-500/20">
                Submeter Solicitação
            </button>
        </form>
    </div>

    <script>
        const btn = document.getElementById('menu-btn');
        const menu = document.getElementById('menu');
        btn.addEventListener('click', () => {
            menu.classList.toggle('hidden');
            menu.classList.toggle('flex');
        });
    </script>
</body>
</html>
