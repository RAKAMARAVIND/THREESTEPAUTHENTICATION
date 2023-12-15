<?php	
	function sendOTP($email,$otp) {
		$to_mail = $email;
$subject = "Three step authentication";
$body = "please complete your biometric authentication using this link https://www.threestepauthentication.com";
$sender = "From: rakamaravind@gmail.com";
	
if(mail($to_mail, $subject, $body, $sender)){
    echo '<a href=""><h1><center>Complete your biometric authentication through the link sent to your registered email id in mobile phone</center></h1</a>';
}else{
    echo "Sorry, failed while sending mail!";
}
return 1;
		}
?>