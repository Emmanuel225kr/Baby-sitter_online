<?php
    //$_SESSION['v']="";
    $v="";
    if(isset($_POST['B'])){
        extract($_POST);
        if(!empty($email) && !empty($mot_de_passe)){
            include 'connection.php';
            global $PDO;
            $P=$PDO->prepare("SELECT * FROM UTILISATEUR WHERE Email = :e");
            $P->execute([
                'e'=>$email
            ]);
            $result= $P->fetch();

            if ($result==true){
                $_SESSION['nom']=$result['Nom'];
                $_SESSION['S_id']=$result['id_UT'];
                $motpi=$result['Mot_de_pass'];
                
                if(password_verify($mot_de_passe,$motpi)){
                    header("location: welcom1.php");
                }
                else{
                     
                //$_SESSION['v']="Non reconnu";
                $v="Non reconnu";
                header("location: connexion.php"); 
                
                
                }
            }
        }

    }
?>