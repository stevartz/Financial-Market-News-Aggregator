
<?php

//session_start();
include 'db-link.php';
include 'db-function.php';

if($_SERVER['REQUEST_METHOD']=='POST'){   

    $username = !empty($_POST['username']) ? trim($_POST['username']) : null;
    $password = !empty($_POST['password']) ? trim($_POST['password']) : null;
    $confirm_password  = !empty($_POST['password']) ? trim($_POST['confirm_password']) : null;

    echo $username . "</br>";
    echo $_POST['password'] . "</br>";

    $statement = login_prepare($conn, $username);
    $successful = user_execute($statement); 


    if($statement->rowCount() > 0){
         
       echo "<script> document.getElementById('username_warning').innerHTML =
      'Username taken!' </script>";
      
      
      
      //echo "Username taken!"" ;
        
    }else if($password == $confirm_password){
       
        $statement = register_prepare($conn, $username, password_hash($password, PASSWORD_BCRYPT) );

        $successful = user_execute($statement); 
       
        if($successful){
            echo "Success: Login to continue"; "</br>";
            echo "Inserted into DB!";
            header('Location: ./home.php');
            exit();
        } else {

            die('password mismatch');
            echo $$statement->errorInfo();
        }
    
    } 

}

?>
