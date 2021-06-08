<?php
//Checks whether user is in system, verifying it against the password hash
//It will also create a cookie and a session (not sure which one to use yet), storing the username and password
include 'db-link.php';
include 'db-function.php';

//session_start();

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $username =  !empty($_POST['Log-username']) ? $_POST['Log-username'] : null;
    $password =  !empty($_POST['Log-password']) ? $_POST['Log-password'] : null;

    $statement = login_prepare($conn, $username);
   // $statement = user_execute($statement); 
    $statement->execute();

    $count = $statement->rowCount();
    $row   =   $statement->fetchAll(PDO::FETCH_ASSOC);
    var_dump($row) . "</br>";

    if($count > 0  && !empty($row)) {
  
         if(password_verify($password, $row[0]['password'])){
    
        //   $_SESSION['username'] = $result['username'];
        //   $_SESSION['password'] = $result['password'];
    
           echo "Login Successful"; 
           header('Location: ./home.php');

            }
    
      }else {

          die("Incorrect username or password");

      }

}

?>
