<?php
    $host = "localhost";
    $dbase = "pokeapi";
    $user = "root";
    $pss = "12345";
    
    try{
        $conn=new PDO("mysql:host=$host;dbname=$dbase",$user,$pss);
    }catch(Exception $exce){
        echo $exce->getMessage();
    }
$SSQL = $conn->prepare("SELECT DISTINCT id, nombre, imagen, habilidades FROM pokemons;");
$SSQL->execute();
$pokemons = $SSQL->fetchAll(PDO::FETCH_ASSOC);

?>