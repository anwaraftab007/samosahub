<?php

$errors = ”;

$myemail = ‘naveenkumarnn223@gmail.com’;//<—–Put Your email address here. if(empty($_POST[‘name’]) ||

empty($_POST[’email’]) ||

empty($_POST[‘message’]))

{

$errors .= “\n Error: all fields are required”;

}

$name = $_POST[‘name’];

$email_address = $_POST[’email’];

$message = $_POST[‘message’];

if (!preg_match(

“/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i”, $email_address))

{

$errors .= “\n Error: Invalid email address”;

}

if( empty($errors))

{

$to = $myemail;

$email_subject = “Contact form submission: $name”;

$email_body = “You have received a new message. “.

” Here are the details:\n Name: $name \n “.

“Email: $email_address\n Message \n $message”;

$headers = “From: $myemail\n”;

$headers .= “Reply-To: $email_address”;

mail($to,$email_subject,$email_body,$headers);

//redirect to the ‘thank you’ page

header(‘Location: contact-form-thank-you.html’);

}

?>



<!--<?php-->
<!--     $name = $_POST['name'];-->
<!--     $email = $_POST['email'];-->
<!--     $number = $_POST['mobile'];-->
<!--     $subject = $_POST['subject'];-->
<!--     $msg = $_POST['msg'];-->

<!--     $to = "naveenkumarnn223@gmail.com";-->
<!--     $subject = "mail from samosahub";-->
<!--     $text = "Name = ".$name."\r\n .phone = ".$phone."\n". "wrote the follwing: "."\n\n".$msg;-->
<!--     $txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message . "\r\n number =" . $number ;-->
<!--     $headers = "From: noreply@samosahub.com" . "\r\n" .-->
<!--     if($email!=NULL){-->
<!--    mail($to,$subject,$txt,$headers);-->
<!--}-->

   //redirect
<!--header("Location:thankyou.html");-->
<!-- ?>-->
