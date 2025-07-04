<?php
  $email = $_REQUEST['email'] ; 
  $inquiryEmail = "abijur@me.com,jonathan.glynn@icloud.com,shalizadad@yahoo.com,info@wingsoverhaiti.net,sukismith@gmail.com" ;
  $body  =  "Email: $email\n";
  
  
   // send
if(!empty($email))
{
  mail( "$inquiryEmail","Wings Over Haiti Signup",
  $body, "From: $email" );
  header( "Location: index.php?source=signup" );
}
?>