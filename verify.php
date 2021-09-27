<!doctype html>
<html lang="en">

  <head>

    <!-- Required meta tags -->

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="icon" href="img/fav.png">

    <!-- Bootstrap CSS -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="./css/bpg-le-studio-02-caps.min.css">

    <link rel="stylesheet" href="./css/bpg-nino-elite-cond-caps.min.css">

    <link

  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"

  rel="stylesheet"

/>

<link rel="stylesheet" href="css/bpg-nino-elite-cond-caps.css">





    <title>კავკასიის უნივერსიტეტი</title>

  </head>

  <body>

    



    <div class="container" id="bg">

              

        <div class="bs-example">

            <nav class="navbar navbar-expand-md navbar-light bg-light">

                <a href="index.html" class="navbar-brand">

                    <img src="img/logo.png" height="100" alt="culogo">

                </a>

                <button type="button" class="navbar-toggler" id="cupage1" data-toggle="collapse" data-target="#navbarCollapse" target="_blank">

                    <a href="https://cu.edu.ge">CU</a>

                </button>



               

               

            </nav>

        </div>

        <div class="wrapper fadeInDown">

  <div id="formContent">

    <!-- Tabs Titles -->

    <!-- Tabs navs -->

                  <ul class="nav nav-tabs mb-3" id="ex1" role="tablist">
 <!-- Login Form -->

                                      
                                        <h1 class="fadeIn second align-self-center">
                                        
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
                                           
                                         </h1>

                                        



                                    <!-- Remind Passowrd -->
                    
                    
                  
                  </ul>

                                 

                                    

                                    

                                    



                                     

                                      

                                    

  </div>

</div>

    











<!--CONTAINER END -->  </div>



















    <!-- Optional JavaScript; choose one of the two! -->



    <!-- Option 1: Bootstrap Bundle with Popper -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>



    <!-- Option 2: Separate Popper and Bootstrap JS -->

    

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>



  </body>

</html>