<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Style.css">
    <title>Document</title>
</head>
<body class="page_fourni">
<?php
include_once '../includes/db_connect.php';
session_start();
echo $_SESSION["admin_email"];

$sql="select * from fournisseurs";
$results=mysqli_query($conn,$sql);
 
    echo"<table class='fourn_table'>";
    echo"<tr><th>email</th><th>nom</th><th>specialite</th><th>numero</th><th>contacter</th><th>suprimer</th>/tr>";
    while($row=mysqli_fetch_assoc($results)){
      
        echo"<tr>";
        echo "<td>".$row['email']."</td>";
        echo "<td>".$row['nom']."</td>";
        echo "<td>".$row['specialite']."</td>";
        echo "<td>".$row['numero']."</td>";
        echo "<td><button class='greenbtn'><a href='contact.php?fourn=".$row['nom']."&email=".$row['email']."'>contact</a></button></td>";
        echo "<td><button class='redbtn'>delete</button></td>";
        echo"</tr>";
    }
    
    echo"</table>";

 
 ?>     
</body>
</html>