<?php
include_once 'includes/db_connect.php';
 
?>

<!DOCTYPE html>
<html lang="en">
<head>  
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style.css">
  <title>main</title>
</head>


<body class="client_bg">
<a href="admin.php"><button>admin access</button></a>


<div class="login_form">
<form method="post" action="includes/login.php" >
    <table>
        <tr>
         <td>Email:</td><td><input type="text" placeholder="email" name="login_email" required></td>
        </tr>
        <tr>
         <td>Password:</td><td><input type="text" placeholder="password" name="login_password" required></td>
        </tr>
       <tr><td><button type="submit" class="submitbn">Connectez</button></td><td><p  onclick="ToggleForm()" >creez un compte?</p></td> </tr>
    
</table>
    
 </form>
</div>

<div class="signup_form hide ">
    <form method="post" action="includes/signup.php">
    <table class="form">
        <tr>
         <td>Nom:</td><td><input type="text" placeholder="nom" name="signup_lname" required></td>
        </tr>
        <tr>
         <td>Prenom:</td><td><input type="text" placeholder="prenom" name="signup_fname" required></td>
        </tr>
        <tr>
         <td>Email:</td><td><input type="text" placeholder="email" name="signup_email" required></td>
        </tr>
        <tr>
         <td>Password:</td><td><input type="text" placeholder="mots de passe" name="signup_password" required></td>
        </tr>
        <tr>
         <td>Confirm Password:</td><td><input type="text" placeholder="confirmez votre mot de passe" name="signup_password2" required></td>
        </tr>
        <tr>
         <td>Votre Numero de telephone</td><td><input type="text" placeholder="votre numero de telephone" name="signup_pn" required></td>
        </tr>
       <tr><td><button type="submit" class="submitbn" name="submitbtn">Creez un compte</button></td><td><p  onclick="ToggleForm()" class="switchbtn" >connectez vous ?</p></td> </tr>

</table>
    </form>
</div>
 <?php 
 if(isset($_GET['state'])){


 switch ($_GET['state']){
     case "pswddoesntmtch" :

        echo "<script type='text/javascript'>alert('password doesnt match');</script>";
        echo "<script> window.location = 'http://localhost:7882/php/ProjetEcom/index.php'</script>";

     break;
     case "exstuser":

        echo "<script type='text/javascript'>alert('this user already exist');</script>";
        echo "<script> window.location = 'http://localhost:7882/php/ProjetEcom/index.php'</script>";

     break;
     case "loged":

        echo "<script type='text/javascript'>alert('connected');</script>";
        echo "<script> window.location = 'http://localhost:7882/php/ProjetEcom/index.php'</script>";

     break;
     case "wrng":

        echo "<script type='text/javascript'>alert('email ou mot de passe incorrect');</script>";
        echo "<script> window.location = 'http://localhost:7882/php/ProjetEcom/index.php'</script>";

     break;

     default:
 
    }

    
 }
 
 ?>
<script src="Script.js"></script>
</body>
</html>