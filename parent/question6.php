<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css parent/question6.css">
    <title>Inscription</title>
</head>
<body>

    <div class="content1">
    
        <div class="content2">
        
            <h1>Pour votre première inscription vous bénéficier de 6Mois gratuit</h1>
            
            <div class="box1">
                <div class="box-">
                
                    <div class="type">Prémium </div>
                    <div class="price">10.000<span>fcfa</span><br> /Mois</div>
                    <button type="button" name="soumettre" value="ok">commencer</button>
                </div>
                <div class="box--">
                    <div class="type">Senior</div>
                    <div class="price">80.000<span>fcfa</span><br> /Ans</div>
                    <button type="button" name="soumettre" value="ok">commencer</button>
                
                </div>
            </div>
       
              <form action="" method="post"> <button type="submit" name="moisgratuit" value="okk">mois gratuit</button></form>  
           
                
        
        </div>
        
    </div>
    
    <?php 
    if(isset($_POST['moisgratuit'])){
        include '../fichier_php/inscription.php';

}
?>
</body>
</html>