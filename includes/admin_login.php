<?php
include_once 'db_connect.php';
$email=$_POST["admin_email"];
$password=$_POST["admin_password"];
 
 
    $sqlSearchExistingAdmin="select * from admins where email='$email' and password='$password' ;";
    $results=mysqli_query($conn,$sqlSearchExistingAdmin);
    $resultcheck=mysqli_num_rows($results);
    
    if($resultcheck>0){
        session_start();
        $_SESSION["admin_email"]=$email;
        $_SESSION["admin_password"]=$password;
        header("Location:../admin_page.php");
    }
    else{
        header("Location:../index.php?state=wrng");
}

 
?>