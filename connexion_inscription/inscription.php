<!DOCTYPE html>
<html lang="en">
<?php session_start(); ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style_css/inscription.css">
    <title>page test</title>
</head>
<body>

<style>

form{
    animation: apparition 1s;
    height: 400px;
}
input{
    font-size: 20px;
}
@keyframes apparition {
    from{
        transform: translateX(100px);
        opacity: 0;
    }
    to{
        transform: translateX(0px);
        opacity: 1;
    }
}
</style>

<div class="container">
<form action="" method="post">
<p>Bienvenue</p>
<input type="text" placeholder="Nom/Prenom" name="Nom"><br>
<input type="Email" placeholder="Email" name="Email">
<input type="text" placeholder="Ville" name="Ville"><br>
<input type="text" placeholder="Numero de telephone" name="Numero"><br>
<input type="password" placeholder="Mot de passe" name="Mp">
<input type="submit" value="S'inscrire" name="button"><br>
</form>

<div class="drop drop1"></div>
<div class="drop drop2"></div>

</div>
<?php
if(isset($_POST['button'])){
$_SESSION['nom']=$_POST['Nom'];
$_SESSION['ville']=$_POST['Ville'];
$_SESSION['email']=$_POST['Email'];
$_SESSION['numero']=$_POST['Numero'];
$_SESSION['mp']=$_POST['Mp'];
/*if (isset($_SESSION['nom']) && isset($_SESSION['ville']) && isset($_SESSION['email']) && isset($_SESSION['numero']) && isset($_SESSION['mp'])){
    echo 'cbn';
    
}*/

header("location: /Baby-sitter/parent/question1.php");
}
?>
</body>
</html>