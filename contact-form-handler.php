<?php
if($_POST["submit"]){
$errors = '';
$myemail = 's.melanie.gasmen@redclayschools.com';//<-----Put Your email address here.
$name = $_POST['firstname'];
$email_address = $_POST['email'];
$message = $_POST['subject'];
$to = $myemail;
$email_subject = "Contact form submission: $name";
$email_body = "You have received a new message. ".
" Here are the details:\n Name: $name \n ".
"Email: $email_address\n Message \n $message";
$headers = "From: $myemail\n";
$headers .= "Reply-To: $email_address";
mail($to,$email_subject,$email_body,$headers);
header("Location:http://cabcallowayschool.org");
}
?>
