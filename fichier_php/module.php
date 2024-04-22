<?php function aff(){
    
    if(require("liaisons.php")){
        
        $P=$PDO->prepare("SELECT * FROM Nounou ");
        $P->execute();
        $result=$P->fetchAll(PDO::FETCH_OBJ);

        return $result;
        $P->closeCursor();
}
}


function afff($i){
    
    if(require("../fichier_php/liaisons.php")){
        global $PDO;
        $P=$PDO->prepare("SELECT * FROM Nounou WHERE id_N=:I ");
        $P->execute([
            'I'=>(int)$i
        ]);
        $result=$P->fetch();

        return $result;
        $P->closeCursor();
}
}
function app($var1){
    
    if(require("../fichier_php/liaisons.php")){
        // extract($_GET);
       
        global $PDO;
        $P=$PDO->prepare('SELECT * FROM Nounou WHERE id_N=:v');
        $P->execute([
            'v'=>$var1
        ]);
        $result=$P->fetch();

        return $result;
        $P->closeCursor();
}
}

function filtre($f,$i,$m){
    include '../fichier_php/liaisons.php';
    global $PDO;
    $q=$PDO->prepare("SELECT semaine1 FROM Disponibilité WHERE Mois=:m and Id_n=:i");
$q->execute(['m'=>$m,
             'i'=>(int)$i
]);
$resul=$q->fetchAll();
    $m=0;
    $len=count($f);
var_dump($resul);
    foreach($resul as $id){
        foreach($f as $o){
            $y=strcomp($o,$id);
            if($y==0){
                $m+=1;
                continue 1;
            }
       
        }
    }

    if($m==$len){
        return true;
    }
    else{
        return false;
    }

}
?>