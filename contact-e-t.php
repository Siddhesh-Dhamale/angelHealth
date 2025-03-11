<!DOCTYPE html>
<?php 
ob_start();
// require_once "vendor/autoload.php"; //PHPMailer Object 
    require "vendor/phpmailer/phpmailer/src/PHPMailer.php";
    // require "vendor/phpmailer/phpmailer/src/OAuth.php";
    require "vendor/phpmailer/phpmailer/src/SMTP.php";
    // require "vendor/phpmailer/phpmailer/src/POP3.php";
    require "vendor/phpmailer/phpmailer/src/Exception.php";

// echo "<pre>";
// echo "shankar";
// print_r($_POST);
// exit;

$fullname = 'shankar'; //AaXE5FjT
$mobile = '1234567890'; //yuH9dxD1
$email = 'shankar.crezvatic@gmail.com'; //XxPfAip9
// ID - admin@angelhealthcentre.com
// App Name - AngelHealthCentre
// App Password - hksvssleewscsdgm
// $mail = new PHPMailer; //From email address and name 
// $mail = new PHPMailer(); //From email address and name 
$mail = new PHPMailer\PHPMailer\PHPMailer();


//Enable SMTP debugging.
$mail->SMTPDebug = 2;  //3                         
//Set PHPMailer to use SMTP.
$mail->isSMTP();        
//Set SMTP host name                      
$mail->Host = "smtp.gmail.com";
//Set this to true if SMTP host requires authentication to send email
$mail->SMTPAuth = true;                      
//Provide username and password
$mail->Username = "admin@angelhealthcentre.com";             
$mail->Password = "hksvssleewscsdgm";                       
//If SMTP requires TLS encryption then set it
$mail->SMTPSecure = "tls";                       
//Set TCP port to connect to
$mail->Port = 587;  

$mail->From = "admin@angelhealthcentre.com"; 
$mail->FromName = "Angel Health Centre"; //To address and name 
// $mail->addAddress("shankar.crezvatic@gmail.com", "Shankar Panaskar");//Recipient name is optional
$mail->addAddress("shankar.crezvatic@gmail.com"); //Address to which recipient will reply 
// $mail->addAddress("admin@angelhealthcentre.com"); //Address to which recipient will reply 
// $mail->addReplyTo("admin@angelhealthcentre.com", "Reply"); //CC and BCC 
$mail->addCC("angelhealthcareclinic@gmail.com"); 
// $mail->addBCC("bcc@example.com"); //Send HTML or Plain Text email 
$mail->isHTML(true); 
$mail->Subject = "Book Appointment"; 
$mail->Body = "
<b>Hi, Angel Health Centre, </b>
</br>
<span>
<p><b> Full Name: </b> ".$fullname."</p>
<p><b> Mobile: </b> ".$mobile."</p>
<p><b> Email: </b> ".$email."</p>
</span>
";
$mail->AltBody = "This is the plain text version of the email content"; 
// $mail->send();
if($mail->send()){
?>
<script>
window.location.href = "https://angelhealthcentre.com/thank-you.php";
</script>
<?php 
}
    ?>
 

