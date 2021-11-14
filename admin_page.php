<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style.css">
    <title>Document</title>
</head>
<body class="admin_dashboard">
<?php
include_once 'includes/db_connect.php';
session_start();
if(!isset($_SESSION["admin_email"])){
    header("Location: index.php");
    exit();
}
echo $_SESSION["admin_email"];

 ?>
 <div>
     <table class="menu">
        
          
     <tr><td> <a href="pannel/clients.php"><img src="images/icons/clients.png" class="icons"/></a><h2>les clients</h2></td>
     <td><a href="pannel/fournisseurs.php"><img src="images/icons/fournisseur.png"/></a><h2> les fournisseurs</a></h2></td></tr>
     <tr><td><a href="pannel/produits.php"><img src="images/icons/products.png"/></a><h2> les produits </h2></td>
     <td><a href="pannel/commandes.php"><img src="images/icons/orders.png"/></a><h2> les commandes </h2> </td>
     </table>
 </div>
</body>
</html>