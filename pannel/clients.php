<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Style.css">
    <title>nos clients</title>
</head>
<body class="clients_page">
<?php
include_once '../includes/db_connect.php';
session_start();
echo $_SESSION["admin_email"];

$sql="select * from clients";
$results=mysqli_query($conn,$sql);
$resultcheck=mysqli_num_rows($results);
if($resultcheck>0){
    echo"<table class='clients_table'>";
    echo"<tr><th>email</th><th>nom</th><th>prenom</th><th>suprimer</th>/tr>";
    
    while($row=mysqli_fetch_assoc($results)){
        echo"<tr>";
        echo "<td>".$row['email']."</td>";
        echo "<td>".$row['nom']."</td>";
        echo "<td>".$row['prenom']."</td>";
        echo "<td><button class='redbtn'>delete</button></td>";
        echo"</tr>";
    }
    
    echo"</table>";
}
 ?>   
</body>
</html>