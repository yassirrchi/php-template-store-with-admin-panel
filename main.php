<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style.css">
    <title>Nos produits</title>
</head>
<body class="client_page">
  
        <?php
        include_once 'includes/db_connect.php';
        session_start();
        echo $_SESSION["client_email"];
        ?>
   
    
    <table class="menu">
<tr>
    <td><a href="clientmenu/produits.php"><img src="images/icons/products.png"  /></a><h2>Nos Produits</h2></td>
    <td> <a href="clientmenu/mescommandes.php"><img src="images/icons/mescommandes.png" /></a><h2>Mes commandes</h2></td>
    
</tr>

    </table>
</body>
</html>