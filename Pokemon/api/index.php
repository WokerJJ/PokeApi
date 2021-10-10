<?php
session_start();
    include("../api/config/conbd.php");
    include("../scripts/estilos.php");
    if($_POST){
        $textUser = (isset($_POST['usuario']))?$_POST['usuario']:"";
        $textPass = (isset($_POST['contraseña']))?$_POST['contraseña']:"";
        $SSQL = $conn->prepare("SELECT username, pass FROM usuarios");
        $SSQL->execute();
        $persona = $SSQL->fetchAll(PDO::FETCH_ASSOC);
        foreach($persona as $poke){
        
        if(($poke['username']==$textUser)&&($poke['pass']==$textPass)){
            $_SESSION['usuario'] = "ok";
            header('Location:../api/v2/pokemon.php'); 
        }else{
            $mensaje="Error: El usuario o contraseña son incorrectos";
        }
    }
        
    }
    
?>
<section>
    <aside>
    <br><h3 class="display-4">Log in with your account</h3><br>
    <?php if(isset($mensaje)){ ?>
        <div class="alert alert-danger" role="alert">
            <?php echo $mensaje;?>
        </div>
    <?php }?>
        <form method="POST" class="col-md-12">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="usuario" class="form-control" autocomplete="off">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="contraseña" class="form-control" id="exampleInputPassword1">
            </div>
            <button type="submit" class="btn btn-primary">Sign In</button>
            <a class="nav-link" href="register.php">Check in</a>
        </form>
    </aside>
</section>