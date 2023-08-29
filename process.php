<?php
include 'database.php';

require "database.php";


if(isset($_POST['submit'])) {
    $user = $_POST['user'];
    $message = $_POST['message'];

    //set timezone
   date_default_timezone_set('Sweden/Stockholm');
   $time = date('h:i', time());
}

$data =
    [
        'user' => $user,
    'message' => $message,
    'time' => $time

    ];
if(!isset($user) || $user == '' || !isset($message)|| $message==''){
    $error = "please fill in name and message.";
    header("Location:index.php?error=".urlencode($error));
    exit();
}else {
    try {
        $sql = "INSERT INTO shout (user, message, time) VALUES (:user, :message, :time)";
        $instatement = $conn->prepare($sql);
        $instatement->execute($data);

        header("Location:index.php");
    } catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }

   // insertInto($user,$message,$time);
}









