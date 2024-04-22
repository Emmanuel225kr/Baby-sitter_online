<?php
try
{
    $PDO=new PDO('mysql:host=localhost;dbname=Baby-sitter;charset=utf8','root','Admin#1234');
    echo 'good';
}
catch (Exception $P)
{
    echo('Erreur : ' .$P->getMessage() );
}
?>