<?php
	//remetente
	$email = $_POST["email"];	
	//destinatário
	$to = "kelderdasilva10@gmail.com";
	//assunto do e-mail
	$assunto = "Contato do Site";
	//corpo da mensagem
	$mensagem = $_POST["mensagem"]." ".$_POST["nome"];
	//informações de cabeçalho
	$headers  = "MIME-Version: 1.0\n" ;
    $headers .= "Content-Type: text/html; charset=\"iso-8859-1\"\n";
	$headers .= 'From: ' . $email . "\r\n" .
    'Reply-To: ' . $email . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

	$status = mail($to, $assunto, $mensagem, $headers);

	if($status==true){
		print "Enviou o e-mail com sucesso! Aguarde nosso contato.";
	}else{
		print "Infelizmente não foi possível enviar o e-mail.";
	}

?>