<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Style.css">

    <title>Document</title>
</head>
<body >
    <?php
    echo"<h1>contacter ".$_GET['fourn']."</h1>".$_GET['email'];
    echo"<form><table class='contact_fourn_form'><tr><td><h2>Contacter ".$_GET['email']."</h2></td></tr><tr><td>
    <textarea></textarea></td></tr><tr><td><input type='submit' value='envoyer' class='submitbn'/></td></tr></form>";
    
    ?>
</body>
</html>