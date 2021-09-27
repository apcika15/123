<?php 


$servername = "aptsik.xyz";

$username = "u1472449_default";

$password = "Mish@111";



// Create connection

$conn = new mysqli($servername, $username, $password,'u1472449_registrations');



// Return Success - Valid Email
$msg = 'Your account has been made, <br /> please verify it by clicking the activation link that has been send to your email.';

$hash = md5( rand(0,1000) ); // Generate random 32 character hash and assign it to a local variable.
// Example output: f4552671f8909587cf485ea990207f3b
$password = rand(1000,5000); // Generate random number between 1000 and 5000 and assign it to a local variable.
// Example output: 4568
$sql = "INSERT INTO users (username, password, email, hash) VALUES('$name', '$password', '$email', '$hash') ";

$to      = $email; // Send email to our user
$subject = 'Signup | Verification'; // Give the email a subject 
$message = '
  
Thanks for signing up!
Your account has been created, you can login with the following credentials after you have activated your account by pressing the url below.
  
------------------------
Username: '.$name.'
Password: '.$password.'
------------------------
  
Please click this link to activate your account:
http://www.yourwebsite.com/verify.php?email='.$email.'&hash='.$hash.'
  
'; // Our message above including the link
                      
$headers = 'From:noreply@yourwebsite.com' . "\r\n"; // Set from headers
mail($to, $subject, $message, $headers); // Send our email

 ?>