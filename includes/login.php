<?php
include_once 'db_connect.php';
$email=$_POST["login_email"];
$password=$_POST["login_password"];
 
 
    $sqlSearchExistingUser="select * from clients where email='$email' and password='$password' ;";
    $results=mysqli_query($conn,$sqlSearchExistingUser);
    $resultcheck=mysqli_num_rows($results);
    
    if($resultcheck>0){
        session_start();
        $_SESSION["client_email"]=$email;
        $_SESSION["client_password"]=$password;
    header("Location:../main.php");
    }
    else{
        header("Location:../index.php?state=wrng");
}

 
?>