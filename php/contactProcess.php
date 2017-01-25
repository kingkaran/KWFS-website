<?php ob_start();

if(isset($_POST['submit'])) {
	$to = "kingkaran302@gmail.com";
	$name = $_POST['name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];
	
	$headers = "From: ".$email;

	$sending_msg = $message."\n"."\n"."Name: ".$name;
	
	mail($to, $subject, $sending_msg, $headers);

	header("Location: sent.html")

}

?>