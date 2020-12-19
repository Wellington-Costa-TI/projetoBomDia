<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../libs/PHPMailer/src/Exception.php';
require '../libs/PHPMailer/src/PHPMailer.php';
require '../libs/PHPMailer/src/SMTP.php';

$nome = $_POST['nome'];
$endereco = $_POST['endereco'];
$numero = $_POST['numero'];
$observacao =$_POST['observacao'];
$imagem =$_POST['imagem'];

$mail = new PHPMailer();

$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';                 
$mail->SMTPAuth   = true;                                  
$mail->Username   = 'lepra.teste@gmail.com';                    
$mail->Password   = 'password';                               
$mail->SMTPSecure = 'tls';
$mail->Port       = 587;     

$mail->setFrom('teste@gmail.com', '$name');
$mail->addAddress('teste@gmail.com', 'nome_destinatário');
$mail->Subject = '$nome Contato';

$mail->isHTML(true);
$mail->Body = $observacao;

if($mail->send()){
    echo "Enviado com sucesso!!!";
}else{
    echo "Falha ao enviar e-mail".$mail->ErrorInfo;
}
