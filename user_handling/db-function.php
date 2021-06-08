
<?php


function register_prepare($conn, $username, $password){

  $query = "INSERT INTO `users` (`id`, `username`, `password`) VALUES (NULL, :username, :password)";
  $statement = $conn->prepare($query);
  
	$statement->bindValue(':username', $username);
	$statement->bindValue(':password', $password);
  
  return $statement;
}



function login_prepare($conn, $username){

  $query = "SELECT * FROM `users` WHERE `username`= :username";
  $statement = $conn->prepare($query);

	$statement->bindValue(':username', $username);
  
  return $statement;
}



function user_execute($statement){

  $result = $statement->execute();
  $statement->closeCursor();
 
  return $result;

}



?>