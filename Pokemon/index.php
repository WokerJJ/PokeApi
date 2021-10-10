<?php
require_once("./home/home.php");

$objeto = new home();

$objeto->index();
$objeto->navegador();
$objeto->seccion();
unset($objeto);

?>