<?php
//Checks whether user is in system, verifying it against the password hash
//It will also create a cookie and a session (not sure which one to use yet), storing the username and password
include 'db-link.php';
include 'db-function.php';

session_start();

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $username =  !empty($_POST['Log-username']) ? $_POST['Log-username'] : null;
    $password =  !empty($_POST['Log-password']) ? $_POST['Log-password'] : null;
    $attempt = $_POST['hidden'];


    $statement = login_prepare($conn, $username);
    $statement->execute();

    if($statement){
        session_start();
    }

    $count = $statement->rowCount();
    $row   =   $statement->fetchAll(PDO::FETCH_ASSOC);

    if($count > 0  && !empty($row)) {
  
         if(password_verify($password, $row[0]['password'])){
    
           $_SESSION['username'] =  $row[0]['username'];
         //  $_SESSION['id'] =  $row[0]['id'];
           $_SESSION['password'] =  $row[0]['password'];

            header('Location: ./home.php');

            }
    
      }else {

        
       echo "Incorrect username or password: attempt";



        // echo "<script> document.getElementById('password_warning').innerHTML =
        // 'Incorrect username or password: attempt '.' '.$attempt; </script>";

        //  die("Incorrect username or password");

      }

}

?>
