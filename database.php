<?php

//----------------connecting to data base---------------------------------

$servername = "localhost";
$username = "root";
$password = "rootpassword";

try {
    $conn = new PDO("mysql:host=$servername;dbname=shoutit", $username, $password);
    // set the PDO error mode to exception
   $connection =  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}


//---------------prepare query for reading data from database-----------------------------

$statement = $conn->prepare("SELECT * FROM shout order by id DESC ");
$statement->execute();
$shouts = $statement->fetchAll(PDO::FETCH_OBJ);



