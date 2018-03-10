<?php
/*
*	PHP Mailer
*	Last Modified: October 7th
*/

if(isset($_POST['submit'])) {
$to 		= "alta.ski.cabin@gmail.com";
$subject 	= "Alta Cabin | New Contact From $email_field";
$name_field 	= $_POST['name'];
$email_field 	= $_POST['email'];
$phone_field 	= $_POST['phone'];
$message 	= $_POST['message'];
 
$body = "From: $name_field\n E-Mail: $email_field\n Phone: $phone_field\nMessage:\n $message";
mail($to, $subject, $body);
echo '
 <script language="javascript" type="text/javascript">
     <!--
     window.location="/?&s=thanks#simple2";
     // -->
 </script>
';
} else {
echo '
 <script language="javascript" type="text/javascript">
     <!--
     window.location="/?&s=error#simple2";
     // -->
 </script>
';
}
?>