<?php 

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];

require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

                             

$mail->isSMTP();                                      
$mail->Host = 'smtp.gmail.com';  
$mail->SMTPAuth = true;                               
$mail->Username = 'danilkurzik@gmail.com';                 
$mail->Password = '260903Asket';                           
$mail->SMTPSecure = 'ssl';                           
$mail->Port = 465;                                    
 
$mail->setFrom('danilkurzik@gmail.com', 'RunSmart');    
$mail->addAddress('olegokunev@bk.ru');     
  
$mail->isHTML(true);                                  

$mail->Subject = 'Данные';
$mail->Body    = '
		Пользователь оставил данные <br> 
	Имя: ' . $name . ' <br>
	Номер телефона: ' . $phone . '<br>
	E-mail: ' . $email . '';

if(!$mail->send()) {
    return false;
} else {
    return true;
}

?>