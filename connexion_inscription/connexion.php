<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style_css/connexion.css">
    <title>page de connexion</title>
</head>
<body>

<style>

form{
    animation: apparition 1s;
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
<form action="#">
<p>Bienvenue</p>
<input type="Email" placeholder="Email"><br>
<input type="password" placeholder="Mot de passe"><br>
<input type="button" value="connexion"><br>
<a href="#">Mot de passe oublié</a>
<a href="inscription.php">S'inscrire</a>
</form>

<div class="drop drop1"></div>
<div class="drop drop2"></div>

</div>
</body>
</html>