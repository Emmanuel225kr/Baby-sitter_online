<!DOCTYPE html>
<html lang="en">
<?php 

require("../fichier_php/module.php");
session_start(); 
extract($_GET);
$var1=(int)$var;

    $vart=app($var1);
    
    $_SESSION['nom']=$vart['Nom'];
    $_SESSION['age']=$vart['Age'];
    $_SESSION['ville']=$vart['Ville'];
    $_SESSION['image']=$vart['Image'];
    $_SESSION['description']=$vart['Description'];
    $_SESSION['theur']=$vart['Heure'];
    $_SESSION['tjour']=$vart['Jour'];


?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style_css/Profil.css">
    <link rel="stylesheet" href="../font_awesome/css/all.min.css">
    <title>Profil</title>
</head>
<body>


<style>
.u3{
    display: flex;
   width: 1000px;
}

</style>
    <div class="co">
    <header>
        <div class="bgd">
       <img src="<?=$_SESSION['image']?>" alt="" class="fond">
      <div class="contenu">
        <h1 class="h1"><?=$_SESSION['nom']?></h1>
        <div class="u1">
        <h2 class="Age"><span>Age</span> <br><?=$_SESSION['age']?> </h2>
        <div class="profil"><img src="<?=$_SESSION['image']?>" alt="" class="img"></div>
       <h2 class="Ville"><span> Ville</span> <br> <?=$_SESSION['ville']?> </h2>
    </div>
    </div>
       
    </div>
   
    </header>
    <main>
        <div class="desc">
            <div class="u2"><h1>description</h1>
            <div class="barre"></div></div>
            <div class="u3"><p><br><?=$_SESSION['description']?> </p></div>
        </div>
        <div class="note">
            <img src="../Picture/br1.png" alt="" class="img1">
        </div>
       <div class="u4">
        <h1><span  class="uz">Note</span>
            <br><span class="ua">5/5</span>
        </h1>
        <img src="../Picture/note.png" alt="">
       </div>
       <div class="service">

       </div>
       <div class="desc">
        <div class="u2"><h1>service</h1>
        <div class="barre"></div></div>
       <div class="service1">
        <div class="s1">
            <h1 class="ub"><?=$_SESSION['theur']?><span>fcfa</span>/heure</h1>
            <div class="butt" id="#ms"><a href="#ms"><span>Envoyer un <span class="q1">message</span></span></a></div>
        </div>
        <div class="s2">
            <h1  class="ub"><?=$_SESSION['tjour']?><span>fcfa</span>/jours</h1>
            <div class="butt" id="#ms"> <a href="#ms"><span>Envoyer un <span class="q1">message</span></a></div>
        </div>
       </div>
    </div>



    <div class="disp">
        <div class="D1">
            <h1 class="b14">Disponible <span>(Avril 3semaine)</span></h1>
            <div class="b12"></div>
        <div class="dv">
            <div class="u12 "></div>
            <div class="u12 h12">Lu</div>
            <div class="u12 h12">Mar</div>
            <div class="u12 h12">Mer</div>
            <div class="u12 h12">Jeu</div>
            <div class="u12 h12">Ven</div>
            <div class="u12 h12">Sam</div>
            <div class="u12 h12">Dim</div>

            <div class="u12 h127">Matin</div>
        
        <div class="u12"><img src="../font_awesome/Checked Checkbox.png" alt=""></div>
        <div class="u12"><img src="../font_awesome/Unchecked Checkbox.png" alt=""></div>
        <div class="u12"><img src="../font_awesome/Unchecked Checkbox.png" alt=""></div>
        <div class="u12"><img src="../font_awesome/Unchecked Checkbox.png" alt=""></div>
        <div class="u12"><img src="../font_awesome/Checked Checkbox.png" alt=""></div>
        <div class="u12"><img src="../font_awesome/Unchecked Checkbox.png" alt=""></div>
        <div class="u12"><img src="../font_awesome/Checked Checkbox.png" alt=""></div>

            <div class="u12 h127">Apres midi</div>
        
        <div class="u12"><img src="../font_awesome/Checked Checkbox.png" alt=""></div>
        <div class="u12"><img src="../font_awesome/Unchecked Checkbox.png" alt=""></div>
        <div class="u12"><img src="../font_awesome/Unchecked Checkbox.png" alt=""></div>
        <div class="u12"><img src="../font_awesome/Unchecked Checkbox.png" alt=""></div>
        <div class="u12"><img src="../font_awesome/Checked Checkbox.png" alt=""></div>
        <div class="u12"><img src="../font_awesome/Unchecked Checkbox.png" alt=""></div>
        <div class="u12"><img src="../font_awesome/Checked Checkbox.png" alt=""></div>

            <div class="u12 h127">soir</div>

        <div class="u12"><img src="../font_awesome/Checked Checkbox.png" alt=""></div>
        <div class="u12"><img src="../font_awesome/Unchecked Checkbox.png" alt=""></div>
        <div class="u12"><img src="../font_awesome/Unchecked Checkbox.png" alt=""></div>
        <div class="u12"><img src="../font_awesome/Unchecked Checkbox.png" alt=""></div>
        <div class="u12"><img src="../font_awesome/Checked Checkbox.png" alt=""></div>
        <div class="u12"><img src="../font_awesome/Unchecked Checkbox.png" alt=""></div>
        <div class="u12"><img src="../font_awesome/Checked Checkbox.png" alt=""></div>
        </div>
        <div class="b123"></div>
        <h1 class="b0">(Mise a jours Avril 2semain)</h1>
    </div>

    </div>

    <div class="dis" id="ms">
        <div class="cadre">
            
            <div class="chat">
                <div class="left">
                    <p>salut, je suis tu est nous voulons tu devrais, <br>je suis tu est nous voulons tu devrais</p>
                </div>
                <div class="rigth">
                    <p>salut, je suis tu est nous voulons tu devrais, <br>je suis tu est nous voulons tu devrais</p>
                </div>
            </div>
            <div class="n1">
            <textarea name="texte" cols="30" rows="10" class="ch1" placeholder="Ecrire"></textarea>
            <button type="submit" >
            <img src="../font_awesome/Vector.png" alt="" class="im12">
        </button>
        </div>
        
        </div>
      <div class="m1">  <a href="?var=ok">ajouter dans la liste d'attente</a></div>
    </div>
   
    </main>
    <div class="forme"></div>
    <div class="forme1"></div>

 
</div>

</body>
</html>