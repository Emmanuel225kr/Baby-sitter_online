<?php
session_start(); 
//echo $_SESSION['nom'];



        extract($_POST);
        if(!empty($_SESSION['nom']) && !empty($_SESSION['ville']) && !empty($_SESSION['email']) && !empty($_SESSION['numero']) && !empty($_SESSION['mp']) && 
        !empty($_SESSION['user']) && !empty($_SESSION['nombre']) && !empty($_SESSION['Santé']) && !empty($_SESSION['Saissi'])){
            //echo 'good';
            $options=['cost'=> 12,];
            $mp=password_hash($_SESSION['mp'],PASSWORD_BCRYPT,$options);
        
        if($_SESSION['user']=="Parent"){
            include 'liaisons.php';
            global $PDO;
            $P=$PDO->prepare("INSERT INTO Parent(Nom_P,Ville_P,Numero_P,Email_P,Mp_P) VALUES (:N,:V,:N,:E,:M)");
            $P->execute([
                'N'=> $_SESSION['nom'],
                'V'=> $_SESSION['ville'],
                'N'=> $_SESSION['numero'],
                'E'=> $_SESSION['email'],
                'M'=> $mp
            ]);

            $P=$PDO->prepare("SELECT * FROM Parent");
            $P->execute();
            $result= $P->fetch();
            $_SESSION['id_P']= $result['id_P'];

            $P=$PDO->prepare("INSERT INTO Enfant(Nombre_E,Sante_E,information_E,id_P) VALUES (:N,:S,:i,:id)");
            $P->execute([
                'N'=> $_SESSION['nombre'],
                'S'=> $_SESSION['Santé'],
                'i'=> $_SESSION['Saissi'],
                'id'=> $_SESSION['id_P']
           
            ]);
            header("location: /Baby-sitter/parent/question7.php");
        }
    
            
        }

    
?>