<!DOCTYPE html>
<html lang="en">
<?php session_start(); ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css parent/question2.css">
    <title>Inscription</title>
</head>
<body>
    <div class="content1">
    <form action="" method="post">
        <div class="content2">
            <h1>Nombre enfant</h1>
       
        <select name="name">
            <option selected disabled>Nombre enfant</option> 
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <option value="plus">plus de 10</option>
        </select>
       <!--button type="submit" name="soumettre" value="ok">soumettre</button-->
        <input type="submit" name="ok" value="soumettre" >
        
        </div>
        </form>
    </div>
   
    <?php  

if(isset($_POST['ok'])){
$_SESSION['nombre']=$_POST['name'];
/*if(isset($_SESSION['name'])){
    echo 'good';
}
else{
    echo'bad';
}
echo $_SESSION['name'];*/
header("location: /Baby-sitter/parent/question3.php");
}


?>
</body>
</html>