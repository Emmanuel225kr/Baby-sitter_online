<!DOCTYPE html>
<html lang="en">
<?php session_start(); ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css parent/question4.css">
    <title>Inscription</title>
</head>
<body>


<style>

textarea{
    padding: 10px;
}
</style>
    <div class="content1">
        <div class="content2">
            <h1>Parler nous un peu d'eux</h1>
            <form method="post">
          <div class="fiche">
            <textarea name="saissi" id="saissi" cols="30" rows="10" placeholder="10 ligne maximum"></textarea>
           <button type="submit" name="soumettre" value="ok">soumettre</button>
          </div>
        </div>
    </div>
    <?php if(isset($_POST['soumettre']) && isset($_POST['saissi'])){
$_SESSION['Saissi']=$_POST['saissi'];
header("location: /Baby-sitter/parent/question5.php");
}
?>
</body>
</html>