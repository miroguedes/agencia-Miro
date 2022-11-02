

<?php
include ('PHPMailer/class.phpmailer.php');

//Variaveis do formulário
$email_cliente 				= $_POST['email_cliente'];
$senha_email 				= $_POST['senha_email'];
$nome 						= $_POST['nome'];
$email_visitante 			= $_POST['email'];
$telefone 					= $_POST['telefone'];
$observacoes 				= $_POST['observacoes'];
$assunto 					= $_POST['assunto'];

//Tipo de email

if($_POST['tipo'] == 1)
{
	$tipos = 'email-ssl.com.br';
	$porta = 465;
	$segu  = 'ssl';
}
else
{
	$tipos = 'mail.exchangecorp.com.br';
	$porta = 587;
	$segu  = 'tls';
}


$mail = new PHPMailer;
$mail->setLanguage('br');                             // Habilita as saídas de erro em Português
$mail->CharSet='UTF-8';                               // Habilita o envio do email como 'UTF-8'

//$mail->SMTPDebug = 3;                               // Habilita a saída do tipo "verbose"

$mail->isSMTP();                                      // Configura o disparo como SMTP
$mail->Host = 'email-ssl.com.br';                     // Especifica o enderço do servidor SMTP da Locaweb
$mail->SMTPAuth = true;                               // Habilita a autenticação SMTP
$mail->Username = "contato@tagsmarketingdigital.com.br";   		          // Usuário do SMTP
$mail->Password = "@Manda262632";                  	  // Senha do SMTP
$mail->SMTPSecure = "$segu";                          // Habilita criptografia TLS | 'ssl' também é possível
$mail->Port = "$porta";                                 // Porta TCP para a conexão

$mail->From = "contato@tagsmarketingdigital.com.br";                		  // Endereço previamente verificado no painel do SMTP
$mail->FromName = 'Contato pelo site';              // Nome no remetente
$mail->addAddress("contato@tagsmarketingdigital.com.br 	");      	  // Acrescente um destinatário

$mail->isHTML(true);                                  // Configura o formato do email como HTML

$mail->Subject = 'Contato pelo site';
$mail->Body    = "<b>Nome:<b>$nome <br> <b>Email</b> $email_visitante <br> <b>Telefone:</b> $telefone<br>  Mensagem sobre <b>$assunto</b>: $observacoes<br> ";
//$mail->AltBody = 'Esse é o corpo da mensagem em formato "plain text" para clientes de email não-HTML';

if(!$mail->send()) {
    echo 'A mensagem não pode ser enviada';
    echo 'Mensagem de erro: ' . $mail->ErrorInfo;
} else {
	echo "<script>
alert('Mensagem enviada com sucesso! Em breve responderemos.');
window.location.href = 'http://www.tagsmarketingdigital.com.br/formulario';
</script>";
	
	//echo 'Mensagem enviada com sucesso';
}
echo "<a class='btn btn-danger' href='index.html'>Voltar</a>";
