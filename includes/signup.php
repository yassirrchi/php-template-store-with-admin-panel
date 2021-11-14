<?php
include_once 'db_connect.php';

$lastname=$_POST["signup_lname"];
$firstname=$_POST["signup_fname"];
$email=$_POST["signup_email"];
$password=$_POST["signup_password"];
$password2=$_POST["signup_password2"];
$phonenumber=$_POST["signup_pn"];
if(strcmp($password2, $password) !== 0){
    header("Location:../index.php?state=pswddoesntmtch");
    exit();
}
else{
    $sqlSearchExistingUser="select * from clients where email='$email' ;";
    $results=mysqli_query($conn,$sqlSearchExistingUser);
    $resultcheck=mysqli_num_rows($results);

    if($resultcheck>0){
    header("Location:../index.php?state=exstuser");
    exit();
    }
    else{

$sql="insert into clients (email,password,nom,prenom,num) VALUES('$email','$password','$lastname','$firstname','$phonenumber')";
mysqli_query($conn,$sql);
header ("Location:../index.php");
exit();
}

}
?>