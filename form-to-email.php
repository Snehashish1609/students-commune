<?php
if(!isset($_POST['submit']))
{
	
	echo "error; you need to submit the form!";
}
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

//Validate first
if(empty($name)||empty($visitor_email)) 
{
    echo "Name and email are mandatory!";
    exit;
}

if(IsInjected($visitor_email))
{
    echo "Bad email value!";
    exit;
}

$email_from = 'capidb98@gmail.com';
$email_subject = "New Form submission";
$email_body = "You have received a new message from the user $name.\n Phone: $phone.\n".
    "Here is the message:\n $message\n".
    
$to = "studentscommune.wb@gmail.com";
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);
//done. redirect to thank-you page.

header('Location: home.php');


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