@extends('layouts.nav')
@section('content')
<?php
if(isset($_POST["submit"])){
// Check if the "Sender's Email" input field is filled out
$email=$_POST['email'];
// Sanitize E-mail Address
$email =filter_var($email, FILTER_SANITIZE_EMAIL);
// Validate E-mail Address
$email= filter_var($email, FILTER_VALIDATE_EMAIL);
if (!$email){
echo "Invalid Sender's Email";
}
else{
$name=$_POST['name'];
$email=$_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// Send Mail By PHP Mail Function
mail("blancessanchez30@gmail.com", $name, $email,$subject, $message);
header('Location: contact.html');
}
}

?>
