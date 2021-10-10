<?php 
session_start();
    if(!isset($_SESSION['usuario'])){
        header("Location:../index.php");
    }
    else{
        if($_SESSION['usuario']=='oky'){
        }
    }
?>
<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <?php
                include("../scripts/estilos.php")
            ?>
            <title>Pokemon</title>
        </head>
        <body>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <a class="navbar-brand" href="#">List Pokemon</a>
                <div class="navbar-nav">
                    <a class="nav-link" href="/Pokemon/api/v2/pokemon.php">Home</a>
                    <a class="nav-link" href="/Pokemon/api/section/pokemons.php">Agg</a>
                    <a class="nav-link" href="/Pokemon/api/section/cerrar.php">Close</a>
                </div>
            </nav
