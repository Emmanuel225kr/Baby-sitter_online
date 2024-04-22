<!DOCTYPE html>
<html lang="en">
<?php session_start(); ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css parent/question1.css">
    <title>Inscription</title>
</head>
<body>
    <div class="content1">
        <div class="content2">
            <h1>Qui êtes-vous</h1>
            <form method="post">
            <input type="submit" value="Parent" name="Parent">
            <input type="submit" value="nounou" name="nounou">
            </form>
        </div>
    </div>
<?php  

if(isset($_POST['Parent'])){
$_SESSION['user']=$_POST['Parent'];
header("location: /Baby-sitter/parent/question2.php");
}
if(isset($_POST['nounou'])){
    echo'good';
    /*header("location: /Baby-sitter/parent/question2.php");*/
    }

?>
</body>
</html>