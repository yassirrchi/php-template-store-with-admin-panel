<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style.css">
    <title>Document</title>
</head>
<body class="adminlogin">
<a href="index.php"><button>go back</button></a>
<div class="Adminlogin_form ">
<form method="post" action="includes/admin_login.php" >
    <table>
        <tr>
         <td>Email:</td><td><input type="text" placeholder="email" name="admin_email" required ></td>
        </tr>
        <tr>
         <td>Mot de passe:</td><td><input type="text" placeholder="email"  name="admin_password" required></td>
        </tr>
       <tr><td><button type="submit" class="submitbn">Connectez</button></td> </tr>
    
</table>
    
 </form>
</div>
 <?php 
 if(isset($_GET['state'])){
 switch ($_GET['state']){
  
     case "loged":

        echo "<script type='text/javascript'>alert('connected');</script>";
        echo "<script> window.location = 'http://localhost:7882/php/ProjetEcom/admin.php'</script>";

     break;
     case "wrng":

        echo "<script type='text/javascript'>alert('email ou mot de passe incorrect');</script>";
        echo "<script> window.location = 'http://localhost:7882/php/ProjetEcom/admin.php'</script>";

     break;

     default:
 }
 }
 
 ?>
</body>
</html>