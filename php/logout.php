
<?php
session_start();
?>



<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <title>Financial News Aggregator | Logout</title>
</head>
<body>


<section>
<div class="container">
    <div class=""col-md-8 col-sm-8 col-xs-12"">
        <div align="center">
            <div style="max-width: 35%; background-color: darkcyan;">
                <div>
                    <h1 style="color: white;">Have a nice day! </h1>
                </div>
            </div>
        </div>
    </div>
</div>
<section>

<?php

// Set session variables can be removed by specifying their element name to unset() function.
// A session can be completely terminated by calling the session_destroy() function.

if (count($_SESSION) > 0)     // Check if there are session variables
{   
   foreach ($_SESSION as $key => $value)
   {
      // Deletes the variable (array element) where the value is stored in this PHP.
      // However, the session object still remains on the server.    	
      unset($_SESSION[$key]);      
   }       
   session_destroy();     // complete terminate the session instance  
      
   // redirect to the login page immediately 
//    header('Location: login.php');

   // redirect with 5 seconds delay
   header('refresh:2; url=landing.html');
}

?>

</body>
</html>