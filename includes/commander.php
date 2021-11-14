<?php
include_once 'db_connect.php';
session_start();

$clientmail= $_SESSION["client_email"];
$clientpassword= $_SESSION["client_password"];
$quantite= $_POST['quantite'];
$produit= $_POST['produit'];




/**/




$sql="select * from clients where email='$clientmail' and password='$clientpassword'";
$results=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($results);
      
 
     $mail=$row['email'];
     $nom=$row['nom'];
     $prenom=$row['prenom'];
     $numero=$row['num'];
     $ville =$row['ville'];
    
    $sql="insert into commandes (produit, quantite,ville, numero, email, nom,prenom	) VALUES('$produit','$quantite','$ville','$numero','$mail','$nom','$prenom')";
mysqli_query($conn,$sql);
header ("Location: ../main.php");
    


?>