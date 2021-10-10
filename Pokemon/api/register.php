<?php
    include("../template/cabecera.php");
    include("../template/navegador.php");
    include("./scripts/estilos.php");

    if($_POST){
        if(isset($_POST['nameuser'])&&($_POST['username'])&&($_POST['gmail'])&&($_POST['pss']));
            include("./config/conbd.php");
            $textNombre = $_POST['nameuser'];
            $textUser = $_POST['username'];
            $textPas = $_POST['pss'];
            $textEmil = $_POST['gmail'];
            $SSQL = $conn->prepare("INSERT INTO usuarios (nombre, username, pass, email) VALUES (:nom, :user, :pas, :email)");
            $SSQL->bindParam(':nom', $textNombre);
            $SSQL->bindParam(':user', $textUser);
            $SSQL->bindParam(':pas', $textPas);
            $SSQL->bindParam(':email', $textEmil);
            $SSQL->execute();
            ?>
            <div class="alert alert-success" role="alert">
                you have been successfully registered
            </div>
            <?php
            
    }
?>
<header>
    <link rel="stylesheet" href="/scripts/estilo.css">
</header>
<aside class="col-md-7">
    <form method="POST" style="color: white;">
        <div class="form-group is-invalid">
            <label>Name</label>
            <input type="text" class="form-control" name="nameuser" required>
        </div>
        <div class="form-group">
            <label>Username</label>
            <input type="text" class="form-control" name="username" required>
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" name="gmail" required>
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" name="pss" required>
        </div>
        <button type="submit" class="btn btn-outline-primary">Send</button>
    </form>
</aside>