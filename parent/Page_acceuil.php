<!DOCTYPE html>
<?php
session_start(); 
require("../fichier_php/module.php");
$event=aff();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style_css/main1.css">
    <link rel="stylesheet" href="../font_awesome/css/all.min.css">
    <title>Baby-sitter</title>
</head>
<body>

<style>
.user{
    margin-top: 7px;
}

</style>
    <header>
        <nav>
            <div class="contaire_div">
<div class="user"><div class="g1"><span><?= $_SESSION['nom'];?></span><img src="../font_awesome/User.png" alt="" class="user-i"></div>
    <div class="selection">
        <div class="serviceAtt"><a href="../parent/service.php"> Service en attente</a></div>
        <div class="a1"></div>
        <div class="annonce"><a href="#">Annonce</a></div>
        
    </div>
</div>
<div class="Logo">
  
    <img src="../font_awesome/Logo.svg" alt="" class="logo">
   
</div>

<div class="menu">
    <ul>
        <li><a href="#service">Service</a></li>
        <li><a href="#Apropos">A propos</a></li>
        <li><a href="#Contact">Contacte</a></li>
    </ul>
</div>
<div class="rigth"><a href="#">se déconnecter</a><div class="bouton">Annonce</div></div>
</div>
        </nav>
<div class="sp">
    
    <p class="p">trouver une nounou à <span> proximité de chez vous</span></p>
    <h1><span></span> BABY-SITTER</h1>
    <p class="p1">VOS ENFANT NOTRE PRIORITE</p>
</div>
<div class="recherche">
    <div class="f1"></div>
    <h1><a href="Recherche.php">recherche</a></h1>
</div>
<div class="image"><img src="../Picture/pti.png" alt="" class="image" ></div>

    </header>

<main>
    <div class="bulle">
        <div class="forme" id="service"></div> <h1>SERVICE</h1></div>
        <div class="forme1"></div> 

    </div>
    <div class="content">
        <h2>NOS <br> PROFIL</h2>
        <div class="profit">
        <?php  foreach($event as $event1):?>
            <a href="../nounou/Profil.php?var=<?= $event1->id_N?>"><div class="p1"><img src="<?= $event1->Image?>" alt=""  class="miniature"> <div class="contr"><h1 class="h1"><?= $event1->Nom?><br><?= $event1->Ville?></h1><h2 class="h2">5/5</h2></div></div></a>
            <!-- <div class="p1"><img src="../Picture/léony.jpeg" alt=""  class="miniature"> <div class="contr"><h1 class="h1">valentine <br>yopougon</h1><h2 class="h2">4/5</h2></div></div>
            <div class="p1"><img src="../Picture/valentine.jpeg" alt=""  class="miniature"> <div class="contr"><h1 class="h1">ange <br>cocody</h1><h2 class="h2">4/5</h2></div></div> -->
            <?php  endforeach;?> 
        </div>
    </div>
   
    <div class="bulle">
        <div class="forme" id="Apropos"></div> <h1>A PROPOS</h1>
        

    <div class="apropos">
        <p class="notre">Notre mission vous permette vous parent de <img src="../Picture/Ellipse 9.png" alt="" class="El9">
        <br>trouver une nounou pour la garde de vos 
        <br> enfant, un site securisé fiable ergonomique
        <br>pour trouver ce que l’on cherche. <a href="#">En savoir plus</a></p>

        <p class="vous"><img src="../Picture/Ellipse 10.png" alt="" class="El10">Vous savez ce qui est le mieux pour vous - 
        <br>nous vous facilitons simplement la tâche</p>

        <p class="nous">Nous veillons à votre sécurité
        <br>Avec la vérification d'identité, les avis,les notes,commentaire et autre...</p>
    </div>

    </div>

</main>
<footer>
    <div class="footer" id="Contact">
        <span class="span">
        <h1>Babysits</h1>
       <p class="a">Comment ça marche
            <br>Aide
            <br>Conditions et confidentialité
            <br>Tarifs
            <br>Coordonnées de l'entreprise
            <br>Babysits pour les entreprises
            <br>Babysits Shop</p></span>

            <span class="span">
            <h1>Découvrir</h1>
           <p class="a">À propos de nous
                <br>Conseils et articles
                <br>Confiance & sécurité
                <br>Les normes communautaires
                <br>Partenaires
                <br>Babysits pour les Besoins spéciaux</p></span>
             
                <span class="span">
                <h1>Populaire</h1>
           <p class="a">Babysitter New York City
                <br>Babysitter Los Angeles (California)
                <br>Babysitter Brooklyn (New York)
                <br>Babysitter Chicago (Illinois)
                <br>Babysitter Houston (Texas)
                <br>Jobs de garde d'enfants</p></span>
        
                
    </div>
    <div class="contact"> <i class="fa-brands fa-facebook fa-2xl"></i>
        <i class="fa-brands fa-whatsapp fa-2xl"></i>
        <i class="fa-solid fa-phone fa-2xl"></i></div>
</footer>
<div class="ff"></div>
<div class="ff1"></div>
</body>
</html>