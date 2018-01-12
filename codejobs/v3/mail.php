<?php
/*
	$to = "ventas@gmail.com";
	$subject = "Test Mail";
	$message = "Hello! This is a simple email message."; 
	$from =  "edivaldo.martinez.moreno@gmail.com";
	$headers = "From: ".$from;
	mail($to, $subject, $message, $headers);
	echo "Mail Sent.";
*/

?>
<center><a href="index.php">inicio</a></center>


<form method="POST" action="mail.php">
	Email: <input type="text" name="email" /><br>
	Subject: <input type="text" name="subject"/><br>
	Message:<br>
	<textarea name="message" rows="15" cols="40"></textarea><br>
	<input type="submit" name="send" value="Send Email">
</form>
<?php
	if (isset($_POST["email"])) {
		$email = $$_POST["email"];
		$subject = $_POST["subject"];
		$message = $_POST["message"];

		mail("edivaldo.martinez.moreno@gmail.com", $subject, $message, "From:".$email);
		echo "Thank you";
	}else{
		?>
		<form method="POST" action="mail.php">
			Email: <input type="text" name="email" /><br>
			Subject: <input type="text" name="subject"/><br>
			Message:<br>
			<textarea name="message" rows="15" cols="40"></textarea><br>
			<input type="submit" name="send" value="Send Email">
		</form>
	<?php		
	}
?>