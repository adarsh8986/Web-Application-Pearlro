<?php

require_once 'vendor/autoload.php';
require_once 'vendor/class.phpmailer.php';

if(isset($_POST['email'])){

	if(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){

	//SHOW ERROR MSG IF EMAIL NOT VALID

	}
	else{
		$mail=new PHPMailer(true);
		
		$mail->SMTPSecure = 'ssl';
		
		$mail->setFrom("support@hostelguider.com","adarsh kumar");
		
		$mail->addAddress($_POST['email'],$_POST['name']);
		
		$mail->isHTML(true);
		
		$mail->Subject="demopurpos";
		
		$mail->Body="<h3>".$_POST['msg']."</h3>";
		
		
		if($mail->send()){
			echo "email sent";
		}
		else{
			echo "error";
		}
		
	}
}
?>
<html>
<head>
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.com">
</head>
<body style="background-color:grey">
<div class="w3-container w3-teal">
<h5 class="w3-center">Contact Us</h5>
<p>Please fill form to get touch....</p>
<form action="" method="POST">
<fieldset>
<legend>Your Detail</legend>
<br><br>
First Name:-<br/><br>
<input type="text"  name="name" /><br/><br><br>
Email Id:-<br><br>
<input type="text"  name="email" /><br/><br><br>
Your Message:-<br><br>
<textarea name="msg" rows="7" cols="30"></textarea>
<br><br><input type="submit" value="Contact Me"/><br/><br>
</fieldset>
</form>
</div>
</body>
</html>