<?php
// The message
$to = 'amitmadgi15@gmail.com';
$name = $_POST['Name'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= $name . "\r\n";
$headers .= $lastname  ."\r\n";
$headers .= $email . "\r\n";


// In case any of our lines are larger than 70 characters, we should use wordwrap()
$message = wordwrap($message, 70, "\r\n");

// Send
if(mail($to, $subject, $message, $headers)) {
echo '<script language="javascript">';
echo 'alert("Mail successfully sent")';
echo '</script>';}
else{
echo '<script language="javascript">';
echo 'alert("Due to some technical issues your mail was not sent. Please use the subscribe link. Sorry for the inconvinience")';
echo '</script>';}
echo "<br>";
//Email response 
header('Location: index.html');

?>