<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Style.css">
    <title>Document</title>
</head>
<body class="commandes_bg">
<?php

include_once '../includes/db_connect.php';
session_start();
 
$sql="select * from commandes";
$results=mysqli_query($conn,$sql);
$resultcheck=mysqli_num_rows($results);
 
if($resultcheck>0){
    echo"<table class='orders_table'>";
    echo "<tr><th>produit</th><th>quantite</th><th>ville</th><th>nom</th><th>prenom</th><th>numero</th><th>email</th><th>annuler</th></tr>";
    while($row=mysqli_fetch_assoc($results)){
        
    echo"<tr>";
      echo "<td>".$row['produit']."</td>"; 
      echo "<td>".$row['quantite']."</td>"; 
      echo "<td>".$row['ville']."</td>";
      echo "<td>".$row['nom']."</td>";
      echo "<td>".$row['prenom']."</td>";
      echo "<td>".$row['numero']."</td>"; 
      echo "<td>".$row['email']."</td>"; 
        
      echo "<td><button class='redbtn'>annuler</button></td>";  
         
    echo"</tr>";
  }
  
    echo"</table>";
}
else{
    echo"<h1>aucune commande</h1>";
}
 ?>  
</body>
</html>