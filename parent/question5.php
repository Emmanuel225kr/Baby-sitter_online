<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css parent/question5.css">
    <title>Inscription</title>
</head>
<body>
    <div class="content1">
        <div class="content2">
            <h1>Notre site repose sur une politique stricte de securite et de confidencialité </h1>
            <form method="post">
                <a href="#">en savoir plus</a>
               <input type="submit" value="tout accepter" name="accepter">
            </form>
        </div>
    </div>
    <?php if(isset($_POST['accepter'])){

header("location: /Baby-sitter/parent/question6.php");
}
?>
</body>
</html>