<?php

$servername = "aptsik.xyz";

$username = "u1472449_default";

$password = "Mish@111";



// Create connection

$conn = new mysqli($servername, $username, $password,'u1472449_aptsik');



// get the post records

$txtId = $_POST['txtId'];

$txtEmail = $_POST['txtEmail'];

$txtPassword = $_POST['txtPassword'];




// database insert SQL code

$sql = "INSERT INTO `tbl_login` (`id`, `fldId`, `fldEmail`, `fldPassword`) VALUES ('0', '$txtId', '$txtEmail', '$txtPassword')";





$rs = mysqli_query($conn, $sql);

  

if($rs)

{

  $to      = $txtEmail; // Send email to our user
$subject = 'რეგისტრაცია | ვერიფიკაცია'; // Give the email a subject 
$message = '
  
გმადლობთ რომ გაიარეთ რეგისტრაცია!
თქვენი ექაუნთი წარმატებით შეიქმნა, ანგარიშია აქტივაციის შემდეგ შეგიძლიათ გაიაროთ ავტორიზაცია ქვევით მითითებული მეილით და პაროლით.
  
------------------------
Username: '.$txtEmail.'
Password: '.$txtPassword.'
------------------------
  
დააკლიკეთ ქვევით მითითებულ ლინკს აქტივაციის გვერდზე გადასასვლელად:
http://www.aptsik.xyz/verify.php?email='.$txtEmail.'&hash='.$hash.'
  
'; // Our message above including the link
                      
$headers = 'From:noreply@aptsik.xyz' . "\r\n"; // Set from headers
mail($to, $subject, $message, $headers); // Send our email


}




?>

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
                                        echo "<b>საჭიროა სტუდენტის ვერიფიკაცია... </b> <br>";
                                        echo "შეამოწმეთ მეილი: <b>$txtEmail</b><br>";
                                        /*echo "<h1>შეამოწმეთ მეილი: <b>$txtEmail</b></h1>";*/


                                         ?>
                                         	<a class="underlineHover fadeIn second align-self-start" style="" href="index.html">უკან</a>

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