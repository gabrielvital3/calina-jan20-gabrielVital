<?php

$nome = $_POST['nome'];
$email = $_POST['email'];

$to = $email;
$subject = "CADASTRO EFETUADO";

$message = "Obrigado, $nome, por se cadastrar!";

$headers = "Content-Type:text/html; charset=UTF-8\n";
$headers .= "MIME-Version: 1.0";

mail($to,$subject,$message,$headers);

echo "<script language=javascript>alert( 'Email cadastrado!' );</script>";

header("Location: http://localhost/lp/");



?>