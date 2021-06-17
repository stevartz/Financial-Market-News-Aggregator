
<?php


include 'db-link.php';
include 'db-function.php';

if($_SERVER['REQUEST_METHOD']=='POST'){   

    $username = !empty($_POST['update-username']) ? trim($_POST['update-username']) : null;
    $password = !empty($_POST['update-password']) ? trim($_POST['update-password']) : null;
    $confirm_password = !empty($_POST['conf-password']) ? trim($_POST['conf-password']) : null;

    $statement = updateData($conn, $username, $password);
   $successful = user_execute($statement); 
 
   $stm = login_prepare($conn, $username);
   $res= $stm->execute();


   
   $c = $stm->rowCount() ;
   echo $c;
    if($stm->rowCount() > 0){
         
      echo "nnooooooo";

       echo "<script> document.getElementById('username_taken').innerHTML =
      'Username taken!' </script>";
        
    }else if($password == $confirm_password && $successful){
       
            session_start();

            $_SESSION['username'] =  $username;
           //$_SESSION['id'] =  $row[0]['id'];
           $_SESSION['password'] =  password_hash($password, PASSWORD_BCRYPT);

            header('Location: ./home.php');
            exit();

        } else {

            die('password mismatch');
            echo $$statement->errorInfo();
        }

}

?>
