<?php
session_start();


?>



<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <title>Financial News Aggregator | Signup Response</title>
</head>
<body>


<section>
  <div class="container">
      <div class=""col-md-8 col-sm-8 col-xs-12"">
          <div align="center">
              <div style="max-width: 50%; background-color: darkcyan;">
                  <div>
                    <h1 style="color: white;">Congratulations! </h1>
                    <h2 style="color: white;">You've sucessfully signup! </h2>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>

<?php

$firstname = $_GET['firstname'];
$lastname = $_GET['lastname'];
$username = $_GET['username'];
$email = $_GET['email'];
$phone = $_GET['phone'];
$gender_option = $_GET['gender_option'];


if ( !empty($firstname) &&  !empty($lastname) &&  !empty($username ) &&  !empty($email)  && !empty($phone)  &&  !empty($gender_option) ) {
 
 
  $_SESSION['firstname'] =  $firstname;
  $_SESSION['lastname'] =  $lastname;
  $_SESSION['username'] =  $username;
  $_SESSION['email'] = $email;
  $_SESSION['phone'] = $phone;
  $_SESSION['gender_option'] = $gender_option;

  header('refresh:2; url=http://localhost/home.php');

  
}

?>

</body>
</html>