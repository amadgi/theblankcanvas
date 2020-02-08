<?PHP
$name = $_POST["name"];
$email = $_POST["email"];
$to = "amitmadgi15@gmail.com";
$subject = "New Email Address for Mailing List";
$headers = "From: $email\n";
$message = "$name has subscribed to your Website.\n


Email Address: $email";
$user = "$email";
$usersubject = "Thank You";
$userheaders = "From: you@youremailaddress.com\n";
$usermessage = "Thank you for subscribing to our mailing list.";
mail($to,$subject,$message,$headers);
mail($user,$usersubject,$usermessage,$userheaders);
?>