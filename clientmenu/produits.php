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

$sql="select * from produits";
$results=mysqli_query($conn,$sql);
$resultcheck=mysqli_num_rows($results);
$url="images/";
if($resultcheck>0){
    echo"<table class='products_table'>";
    while($row=mysqli_fetch_assoc($results)){
        $url="../images/produits/".$row['image'];
   
    

    echo"<tr><form action='../includes/commander.php' method='post'>";
        echo "<td><input type='text' name='produit' value='".$row['nom']." 'readonly='readonly'/>'</td>";
        echo "<td><img class='product' src='$url'/></td>";
        echo "<td><input type='number' name='quantite'/></td>";
        echo "<td><button type='submit' class='greenbtn'>Ajouter au panier</button></td>";
    echo"</form></tr>";
  }
  
    echo"</table>";
}
 ?>  
</body>
</html>