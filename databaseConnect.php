<?php
//Initialize DB properties
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'financial_news_aggregator';

//Create connection to database
$conn = mysqli_connect($DATABASE_HOST,$DATABASE_USER,$DATABASE_PASS,$DATABASE_NAME);

//Error handling
if(mysqli_connect_errno()){
    echo "Failed to connect to DB- David Tran";
}
else{
    echo "Connected to DB!" . "</br>";
}
?>
