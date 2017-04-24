<?php
if(!isset($_POST['submit']))
{
	//This page should not be accessed directly. Need to submit the form.
	echo "error; you need to submit the form!";
}
$name = $_POST['name'];
$reason = $_POST['reason'];
$email = $_POST['email'];
$message = $_POST['message'];

//Validate first
if(empty($name)||empty($email)||empty($reason)||empty($message))
{
    header('Location: ../pages/alerts/empty-fields');
		exit;
}

if(IsInjected($email))
{
	header('Location: ../pages/alerts/invalid-email');
	exit;
}

$email_from = "alert@mywebsite.com";//<== update the email address
$email_subject = "New Form submission";
$email_body = "Name: $name\nContact method: $email\nReason for contacting: $reason\n\n$message";

$to = "maxcrossi@outlook.com";//<== update the email address
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $email \r\n";
//Send the email!
mail($to,$email_subject,$email_body,$headers);
//done. redirect to home page.
header('Location: ../pages/alerts/submit-confirmation');


// Function to validate against any email injection attempts
function IsInjected($str)
{
  $injections = array('(\n+)',
              '(\r+)',
              '(\t+)',
              '(%0A+)',
              '(%0D+)',
              '(%08+)',
              '(%09+)'
              );
  $inject = join('|', $injections);
  $inject = "/$inject/i";
  if(preg_match($inject,$str))
    {
    return true;
  }
  else
    {
    return false;
  }
}

?> 