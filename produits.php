<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Style.css">

    <title>Document</title>
</head>
<body class="prod_bg">
<?php
include_once '../includes/db_connect.php';
session_start();
echo $_SESSION["admin_email"];

$sql="select * from produits";
$results=mysqli_query($conn,$sql);
$resultcheck=mysqli_num_rows($results);

if($resultcheck>0){
    echo"<table class='products_table'>";

    while($row=mysqli_fetch_assoc($results)){
        $url="../images/produits/".$row['image'];
        
    echo"<tr>";
        echo "<td>".$row['nom']."</td>";
        echo "<td><img class='product' src='$url'/></td>";
        echo "<td><button class='redbtn'>delete</button></td>";
    echo"</tr>";
  }


  echo"<tr>";
        echo "<td  ><button class='greenbtn' >ajouter un produit</button></td>";
    echo"</tr>";
    echo"</table>";
}
 ?>  
</body>
</html>