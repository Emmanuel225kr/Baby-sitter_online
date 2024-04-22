<!DOCTYPE html>
<html lang="en">
<?php
session_start(); 
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style_css/recherche.css">
    <title>Recherche</title>
</head>
<body>

<style>
    .photo{
    border: 1px solid black;
    width: 60px;
    height: 60px;
    /* display: flex;
    justify-content: center;
    align-items: center;
    overflow: hidden; */

}

.photo img{
    height: 100%;
    width: 100%;
}

.aucune{
    text-align: center;
    font-family: "Inder-Regular";
}
</style>
    <div class="contenaire">
        <div class="demande">
            <div class="title"><h1 class="titre">Qui nous <br>garde</h1><div class="forme"></div></div>

            <div class="quand"><h2>Quand</h2>
            <div class="barre"></div></div>
            <form action="" method="post">
            <div class="form1">
                
            <select name="mois" id="">
                <option selected disabled>Mois</option>
                <option value="janvier">janvier</option>
                <option value="février">février</option>
                <option value="mars">mars</option>
                <option value="avril">avril</option>
                <option value="mai">mai</option>
                <option value="jun">jun</option>
                <option value="juillet">juillet</option>
                <option value="aout">aout</option>
                <option value="spetembre">spetembre</option>
                <option value="octobre">octobre</option>
                <option value="novembre">novembre</option>
                <option value="decembre">decembre</option>
            </select>
               <br>
            <select name="semaine" id="">
                <option selected disabled>semaine</option>
                <option value="semaine1">semaine1</option>
                <option value="semaine2">semaine2</option>
                <option value="semaine3">seamine3</option>
                <option value="semaine4">semaine4</option>
            </select>
            </div>
      
        
           
            <div class="k1">

            
                    <div class="jour"><h2>Jours</h2>
                        <div class="barre"></div></div>
                <div class="dv">
                    <div class="u1 "></div>
                   
            
                    <div class="u1 h1">lu</div>
                    <div class="u1 h1">mar</div>
                    <div class="u1 h1">mer</div>
                    <div class="u1 h1">jeu</div>
                    <div class="u1 h1">ven</div>
                    <div class="u1 h1">sam</div>
                    <div class="u1 h1">dim</div>
            
                    
                    <div class="u1 ">Matin</div>
                    
                    <div class="u1"><input type="checkbox" value="Lm" name="c1"></div>
                    <div class="u1"><input type="checkbox" value="Mm" name="c2"></div>
                    <div class="u1"><input type="checkbox" value="Mem" name="c3"></div>
                    <div class="u1"><input type="checkbox" value="Jm" name="c4"></div>
                    <div class="u1"><input type="checkbox" value="Vm" name="c5"></div>
                    <div class="u1"><input type="checkbox" value="Sm" name="c6"></div>
                    <div class="u1"><input type="checkbox" value="Dm" name="c7"></div>
                    
                    <div class="u1 ">apres midi</div>
                   
            
                    <div class="u1"><input type="checkbox" value="La" name="c8"></div>
                    <div class="u1"><input type="checkbox" value="Ma" name="c9"></div>
                    <div class="u1"><input type="checkbox" value="Ma" name="c10"></div>
                    <div class="u1"><input type="checkbox" value="Ja" name="c11"></div>
                    <div class="u1"><input type="checkbox" value="Va" name="c12"></div>
                    <div class="u1"><input type="checkbox" value="Sa" name="c13"></div>
                    <div class="u1"><input type="checkbox" value="Da" name="c14"></div>
            
                    <div class="u1 ">soir</div>
                    <div class="u1"><input type="checkbox" value="Ls" name="c15"></div>
                    <div class="u1"><input type="checkbox" value="Ms" name="c16"></div>
                    <div class="u1"><input type="checkbox" value="Mes" name="c17"></div>
                    <div class="u1"><input type="checkbox" value="Js" name="c18"></div>
                    <div class="u1"><input type="checkbox" value="Vs" name="c19"></div>
                    <div class="u1"><input type="checkbox" value="Ss" name="c20"></div>
                    <div class="u1"><input type="checkbox" value="Ds" name="c21"></div>
                    
            
            </div>
           
            
            </div>
            <div class="barre jour"></div>
            <div class="age"><h2>Age</h2>
            <div class="barre"></div></div>
        
                <div class="la"><label for="tentacles">Age</label>
                <input type="number" id="tentacles" name="age" min="16" max="40" />
            
            <input type="submit" value="soumettre" name="soumettre"></div>
        </form>
        </div>

        
<?php

// Récupération des infos pour le filtre

// include '../fichier_php/liaisons.php';
// require("../fichier_php/module.php");
// global $PDO;?>


<?php if(isset($_POST['soumettre'])):?>

    <?php if(!empty($_POST['mois']) && !empty($_POST['semaine']) && !empty($_POST['age'])){
    
    $_SESSION['mois']=$_POST['mois'];
        $_SESSION['semaine']=$_POST['semaine'];
        $_SESSION['age']=$_POST['age'];
 

    $filtre=[];
    $m=0;
        foreach ($_POST as $fil){
           
            if($fil!= $_POST['soumettre'] && $fil!= $_POST['mois'] && $fil!= $_POST['semaine'] && $fil!= $_POST['age']){
            $filtre[$m]=[$fil];
            $m+=1;
        }
        }
        // var_dump($filtre);

include '../fichier_php/liaisons.php';
require("../fichier_php/module.php");
global $PDO;

// Récupération les ids pour le filtre
$q=$PDO->prepare("SELECT Id_n FROM Disponibilité WHERE Mois=:m");
$q->execute(['m'=>$_SESSION['mois']]);
$result=$q->fetchAll();
// var_dump($result);

$id=[];
foreach ($result as $u){
    $id[]=$u;
} 
// var_dump($id);

?>
      <div class="ba1"></div>
<?php foreach($id as $i):
    // print_r($i);
    for($i=0;$i<=count($id);$i++){
        $o=$id[$i];
    }
    print_r($o);
    ?>
    
    <?php $r=filtre($filtre,$i,$_SESSION['mois']); 
    // echo $i;
    // var_dump($i);
    ?>

    <?php if ($r==1): ?>
  
        <?php $a=afff($i);
        ?>
        <div class="reponse">
        <div class="photo"><img src="<?= $a['Image']?>" alt=""></div>

        <h1>Nom: <span><?=$a['Nom']?></span></h1>
        <h1>Ville: <span><?= $a->Ville?></span></h1>
        <a href="../nounou/Profil.php?var=<?= $a->id_N?>">En savoir</a>
       
    </div>
    </div>
    
    <?php else: 

        continue;?>
    
    <?php endif ?>
<?php  endforeach;?> 


    <?php if($r==0):?>
        
    <h2 class="aucune">Aucun profil</h2>
            <div class="b2"></div>
    <?php endif ?>

<?php }?>


<?php endif ?>



        
        <!--div class="reponse">
            <div class="r1">
                <div class="photo"><img src="../Picture/OIP.jpeg" alt=""></div>

                <h1>Nom: <span>usermane</span></h1>
                <h1>Ville: <span>city</span></h1>
                <a href="#">En savoir</a>
               
            </div>
            <h2 class="aucune">Aucun profil</h2>
            <div class="b2"></div>
        </div>
    </div-->

   
</body>
</html>