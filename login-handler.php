<?php
$name =$_POST['name'];
$visitor_email = $_POST['email'];
$message= $_POST['message'];

$email_form ='https://mohdyusufsaifi.github.io/Contact/Login%20page.html';
$email_subject="New idea association";
$email_body="User Name: $name.\n".
"User Email:$vistor_email.\n".
"User Message:$message.\n";
$to ="azeemsaifi38180@gmail.com";
$headers="From: $email_from\r\n";
$headers .="Reply-To: $visitor_email  \r\n";
mail($to,$email_subject,$email_body,$headers);
header("Location: Login page.html");
?>
