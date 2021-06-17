
<?php


include 'db-link.php';
include 'db-function.php';

// header('Access-Control-Allow-Origin: http://localhost:4200');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: X-Requested-With, Content-Type, Origin, Authorization, Accept, Client-Security-Token, Accept-Encoding');
header('Access-Control-Max-Age: 1000');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS, DELETE, PUT');


// Retrieve data from the request
$postdata = file_get_contents("php://input");

// Process data
// (this example simply extracts the data and restructures them back)

// Extract json format to PHP array
$request = json_decode($postdata);


foreach ($request as $k => $v){
  $user_dataArray[strval($k)] = strval($v);

}



$firstname = $user_dataArray['firstname'];
$lastname = $user_dataArray['lastname'];
$username = $user_dataArray['username'];
$email = $user_dataArray['email'];
$phone = $user_dataArray['phone'];
$gender_option = $user_dataArray['gender_option'];
$password = $user_dataArray['password'];


    $statement = register_prepare($conn, $firstname, $lastname, $username, $email, $phone, $gender_option, password_hash($password, PASSWORD_BCRYPT) );
    $successful = user_execute($statement);  


    if($successful){
        
        echo json_encode(array('firstname' => $user_dataArray['firstname'], 'lastname' => $user_dataArray['lastname'], 
        'username' => $user_dataArray['username'], 'email' => $user_dataArray['email'], 
        'phone' => $user_dataArray['phone'], 'gender_option' => $user_dataArray['gender_option']));
   
    }else if ($statement->errorInfo()[1] == 1062){

  // echo json_encode("i'm here today");

        echo json_encode(array("feedback" => "Username taken!"));
      
    }
    //  } else {
    //     echo json_encode(array('feedback' => 'error'));
    




// if($_SERVER['REQUEST_METHOD']=='POST'){   

//     $username = !empty($_POST['username']) ? trim($_POST['username']) : null;
//     $password = !empty($_POST['password']) ? trim($_POST['password']) : null;
//     $confirm_password  = !empty($_POST['confirm_password']) ? trim($_POST['confirm_password']) : null;

//     echo $username . "</br>";
//     echo $_POST['password'] . "</br>";

//     $statement = login_prepare($conn, $username);
//     $successful = user_execute($statement); 

//     if($statement->rowCount() > 0){
         
//        echo "<script> document.getElementById('username_warning').innerHTML =
//       'Username taken!' </script>";
        
//     }else if($password == $confirm_password){
       
//         // $statement = register_prepare($conn, $username, password_hash($password, PASSWORD_BCRYPT)); 
//         // $successful = user_execute($statement); 
        
//         if($successful){
//             session_start();

//             $_SESSION['username'] =  $username;
//            //$_SESSION['id'] =  $row[0]['id'];
//            $_SESSION['password'] =  password_hash($password, PASSWORD_BCRYPT);

//             header('Location: ./home.php');
//             exit();

//         } else {

//             die('password mismatch');
//             echo $$statement->errorInfo();
//         }
    
//     } 

// }










?>
