<?php
if( isset($_POST['ffn']) && isset($_POST['fm']) && isset($_POST['ft']) && isset($_POST['ft2']) ){
	$ffn = $_POST['ffn'];	
	$ft = $_POST['ft'];
	$ft2 = $_POST['ft2'];
	$fm = nl2br($_POST['fm']);

	
	
	$subject = 'Message from Dency Estate';
	
	$message = '                                  LIVE IN RIVIERA RÊVE

             Riviera Rêve is our newly launched residential development located in the heart of Dubai. It is comprised of studios, 1, 2 and 3 bedroom apartments, bringing you the best of beachside living, leisure and entertainment.  
	
	                               
            	Here is Response From Dency Estate 
            	
            	
	             Full Name:    
	             '.$ffn.'
	             
 
                 Contact Number  
                 '.$ft2.' 
                 
                 
                 Email Address   
                 '.$ft.'
                 
                 
                 Message of Client   
                 '.$fm.'
			 
 
	 ';
	
	
	
	
	require("class.smtp.php");
require("class.pop3.php");
if(!require("class.phpmailer.php")){
 echo 'File not included';
}
 $mail = new PHPMailer();
   
 $mail->IsSMTP();              // set mailer to use SMTP
  $mail->SMTPAuth = true;
  $mail = new PHPMailer;
  $mail->SMTPSecure='tls';
    // turn on SMTP authentication
 $mail->Host = "smtp.hostinger.com";  // specify main and backup server
 $mail->Port       =  587;  


 $mail->SMTPDebug  = false; 
        $mail->Username = "info@dency.estate";        // Make sure to replace this with your shell enabled user
        $mail->Password = "Dency*123";      // Make sure to use the proper password for your user
 
   
 //$mail->From = $email;
 $mail->FromName = $fn;
$mail->SetFrom("info@dency.estate", "Dency Estate");
$mail->AddAddress("info@dency.estate", "me");
$mail->AddReplyTo("info@dency.estate", "me");
   
 $mail->WordWrap = 50;                                 // set word wrap to 50 characters
 $mail->IsHTML(true);                                  // set email format to HTML
   
 $mail->Subject = $subject;
 $mail->Body    = $message;
      
	  
//if($mail->Send()){
  //echo "Message is sent thank you <p>";

 //}
 //else {
//	   header("location:https://kgrt.com.pk/index.html");
  //}
  
  
	

	
	//$headers = "From: $from\n";
//	$headers .= "MIME-Version: 1.0\n";
//	$headers .= "Content-type: text/html; charset=iso-8859-1\n";

	if( !$mail->Send() ){
		echo "The server failed to send the message. Please try again later.";
	} else {
		header("location:thanks.html");
	}
}
?>














