<?php
if(isset($_POST['submit'])) {
 echo "error; you need to submit the form!";
}

//	$name = $_POST['name'];
//	$email = $_POST['email'];
//	$message = $_POST['message'];

	//validate first
	/*if(empty($name)||empty($email))
	{
		echo "Please fill in Name and Email";
		exit;
	}
	 */
    // EDIT THE 2 LINES BELOW AS REQUIRED
	$email_from = 'muhdyazid171997@gmail.com';
    
    $email_subject = "Your email subject line";
	$email_body= "You have received a new message from the user $name. \n".
	"email address: $email\n".
	"Here is the message: $message".
	
 	$email_to = "muhdyazid171997@gmail.com";
	$headers = "From: $email \r\n";
	
	mail($email_to,$email_subject,$message,$headers);
	?>
	
	
	
	
	
	
