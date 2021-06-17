
<?php


function register_prepare($conn, $firstname, $lastname, $username, $email, $phone, $gender_option, $password){

  $query = "INSERT INTO `users` (`id`,`firstname`,`lastname`, `username`, `email`, `phone`, `gender_option`, `password`) VALUES (NULL, :firstname, :lastname, :username, :email, :phone, :gender_option, :password)";
  $statement = $conn->prepare($query);
  
  $statement->bindValue(':firstname', $firstname);
  $statement->bindValue(':lastname', $lastname);
	$statement->bindValue(':username', $username);
  $statement->bindValue(':email', $email);
  $statement->bindValue(':phone', $phone);
  $statement->bindValue(':gender_option', $gender_option);
	$statement->bindValue(':password', $password);
  
  
  return $statement;
}



function login_prepare($conn, $username){

  $query = "SELECT * FROM `users` WHERE `username`= :username";
  $statement = $conn->prepare($query);

	$statement->bindValue(':username', $username);
  
  return $statement;
}



function updateData($conn, $username, $password){

   $query = "UPDATE `users` SET `password`=:password WHERE  `username`=:username ";

   $statement = $conn->prepare($query);
   
   $statement->bindValue(':username', $username);
   $statement->bindValue(':password', $password);

   return $statement;

  }

function user_execute($statement){

  $result = $statement->execute();
  $statement->closeCursor();
 
  return $result;

}



?>