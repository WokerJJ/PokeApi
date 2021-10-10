<?php
include("../api/config/conbd.php");
if($_POST){
    $_POST['user'] = $user;
    $_POST['contraseña'] = $pss;
    $SSQL = $conn->prepare("SELECT * FROM usuarios WHERE username = '$user' AND pass = '$pss'");
    $SSQL->execute();
    
    if(($_POST['user']==$user)&&($_POST['contraseña']==$pss)){
        $_SESSION['usuario'] = "ok";
        header('Location:../api/v2/pokemon.php'); 
    }else{
        $mensaje="Error: El usuario o contraseña son incorrectos";
    }
    
}

?>