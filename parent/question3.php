<!DOCTYPE html>
<html lang="en">
<?php session_start(); ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css parent/question3.css">
    <title>Inscription</title>
</head>
<body>
    <div class="content1">
        <div class="content2">
            <h1>Enfants</h1>
            <form method="post">
                <input type="submit" value="Allegie" name="Allegie">
                <input type="submit" value="handicap" name="Handicap">
               <input type="submit" value="rien a signaler" name="Ras">
            </form>
        </div>
        </form>
    </div>
    <?php    
    if(isset($_POST['Allegie'])){
$_SESSION['Santé']=$_POST['Allegie'];
header("location: /Baby-sitter/parent/question4.php");
}
if(isset($_POST['Handicap'])){
    $_SESSION['Santé']=$_POST['Handicap'];
    header("location: /Baby-sitter/parent/question4.php");
    }
if(isset($_POST['Ras'])){
        $_SESSION['Santé']=$_POST['Ras'];
        echo $_SESSION['Santé'];
        header("location: /Baby-sitter/parent/question4.php");
        }
?>
</body>
</html>