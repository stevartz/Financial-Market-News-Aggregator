<?php
//Checks whether user is in system, verifying it against the password hash
//It will also create a cookie and a session (not sure which one to use yet), storing the username and password
include './databaseConnect.php';
session_start();

if($_SERVER['REQUEST_METHOD']=='POST'){


    $username = $_POST['Log-username'];
    $password = $_POST['Log-password'];

    $username = mysqli_real_escape_string($conn,$username);
    $password = mysqli_real_escape_string($conn,$password);


    $authenticate_query = "SELECT * FROM users WHERE username='{$username}' ";
    $select_user_query = mysqli_query($conn, $authenticate_query);

    if(!$select_user_query){

        die("Query Failed". mysqli_error($conn));
    }

    while($row = mysqli_fetch_array($select_user_query)){
        $db_user_id = $row['id'];
        $db_username = $row['username'];
        $db_user_password = $row['password'];
    }


if($username !== $db_username && $password !== $db_user_password){
    echo "Invalid Username or Password";
}else if($username == $db_username && $password == $db_user_password ){

    $_SESSION['username'] = $db_username;
    $_SESSION['password'] = $db_user_password;

    echo "Login Successful"; 

    header('Location: ./home.php');

}

}


?>
