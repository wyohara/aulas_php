<?php
session_start();
$nome = $_POST["nome"];
$email = $_POST["email"];
$mensagem = $_POST["mensagem"];

require_once("PHPMailerAutoload.php");

$mail = new PHPMailer();
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com'; //smtp
$mail->Port = 587; //porta de envio
$mail->SMTPSecure = 'tls'; //protocolo de segurança
$mail->SMTPAuth = true; //autentificação
$mail->Username = "email"; // email da pessoa que envia
$mail->Password = "123456"; //senha do email que envia

$mail->setFrom("email", "nome"); //destinatário
$mail->addAddress("email"); // quem envia o email
$mail->Subject = "Email de contato da loja"; //titulo da mensagem
$mail->msgHTML("<html>de: {$nome}<br/>email: {$email}<br/>mensagem: {$mensagem}</html>"); // corpo da mensagem em html
$mail->AltBody = "de: {$nome}\nemail:{$email}\nmensagem: {$mensagem}"; // alternativa caso o receptor não aceite html

if($mail->send()) {
	$_SESSION["success"] = "Mensagem enviada com sucesso";
	header("Location: index.php");
} else {
	$_SESSION["danger"] = "Erro ao enviar mensagem " . $mail->ErrorInfo;
	header("Location: contato.php");
}
die();
