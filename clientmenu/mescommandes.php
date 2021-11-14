<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Style.css">
    <title>Document</title>
</head>
<body class="clients_page">
<?php

include_once '../includes/db_connect.php';
session_start();


$clientmail= $_SESSION["client_email"];
$clientpassword= $_SESSION["client_password"];

$sql="select * from commandes where email='$clientmail'";





$results=mysqli_query($conn,$sql);
$resultcheck=mysqli_num_rows($results);
 
if($resultcheck>0){
    echo"<table class='orders_table'>";
    echo "<tr><th>produit</th><th>quantite</th><th>annuler</th></tr>";
    while($row=mysqli_fetch_assoc($results)){
      $productName=  $row['produit'];
      $quantity=$row['quantite'];
    echo"<tr><form method='post' action='../includes/annulercommande.php'>";
      echo "<td><input type='text' value='$productName' name='prdctname'readonly/></td>"; 
      echo "<td><input type='text' value='$quantity' name='qtty' readonly/></td>"; 
      echo "<td><button class='redbtn' type='submit'>annuletr</button></td>";  
         
    echo"</form></tr>";
  }
  
    echo"</table>";
}
else{
 
        echo"<h1>aucune commande</h1>";
    
}
 ?>  
</body>
</html>