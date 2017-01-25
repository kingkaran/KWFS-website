<?php ob_start();

if(isset($_POST['submit'])) {
	$to = "kingkaran302@gmail.com";
	$name = $_POST['name'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	$number = $_POST['number'];
	$quantity = $_POST['quantity'];
	$comments = $_POST['comments'];
	$breakfast = $_POST['breakfast'];

	if(empty($breakfast))
	{
		$breakfast = "NO";
	}

	$sendingMsg .= "Name: ".$name."\n";
	$sendingMsg .= "Meals: ".$quantity."\n";
	$sendingMsg .= "Breakfast: ".$breakfast."\n";
	$sendingMsg .= "Address: ".$address."\n";
	$sendingMsg .= "Phone number: ".$number."\n";
	$sendingMsg .= "Comments: ".$comments."\n";

	$sendingMsg2 .= "Hi ".$name,","."\n";
	$sendingMsg2 .= "Your order has been placed."."\n";
	$sendingMsg2 .= "Meals: ".$quantity."\n";
	$sendingMsg2 .= "Breakfast: ".$breakfast."\n";
	$sendingMsg2 .= "Thank you";


	$subject = $name." - Online order";
	$subject2 = "KW Food Services - Order confirmation";

	$headers = "From: ".$email;
	$headers2 = "From: ".$to;

	mail($to, $subject, $sendingMsg, $headers);
	mail($email, $subject2, $sendingMsg2, $headers2);

	header("Location: placed.html")

}

?>