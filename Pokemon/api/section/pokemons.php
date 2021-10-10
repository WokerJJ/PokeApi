<?php 
    include("../template/cabecera.php");
    
    $textID = (isset($_POST['txtID']))?$_POST['txtID']:"";
    $textNombre = (isset($_POST['txtNombre']))?$_POST['txtNombre']:"";
    $textGolpe = (isset($_POST['txtGolpes']))?$_POST['txtGolpes']:"";
    $textImg = (isset($_FILES['txtImagen']['name']))?$_FILES['txtImagen']['name']:"";
    $accion = (isset($_POST['accion']))?$_POST['accion']:"";

    include("../config/conbd.php");
?>
<?php
switch($accion){
    case "agregar"; 
        $SSQL = $conn->prepare("INSERT INTO pokemons (id, nombre, imagen, habilidades) VALUES (:id, :nombre, :imagen, :habilidad)");
        $SSQL->bindParam(':id', $textID);
        $SSQL->bindParam(':nombre', $textNombre);
        $fecha = new DateTime();
        $nomarchi = ($textImg!="")?$fecha->getTimestamp()."_".$_FILES["txtImagen"]["name"]:"imagen.jpg";
        $tmpImagen=$_FILES["txtImagen"]["tmp_name"];
        if($tmpImagen!=""){
                $_GET['img'] = move_uploaded_file($tmpImagen,"../../images/".$nomarchi);
        }
        $SSQL->bindParam(':imagen', $textImg);
        $SSQL->bindParam(':habilidad', $textGolpe);
        $SSQL->execute();
        break;
    case "cancelar";
        break;
    case "Borrar";
        $SSQL = $conn->prepare("DELETE FROM pokemons WHERE id=:id");
        $SSQL->bindParam(':id', $textID);
        $SSQL->execute();
        break;
}
?>
<div class="container">
    <div class="row">
        <div class="col-md-7"><br><br>
            <form method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label>ID</label>
                    <input type="txt" class="form-control" name="txtID" placeholder="ID">
                </div>
                <div class="form-group">
                    <label>Nombre</label>
                    <input type="txt" class="form-control" name="txtNombre" placeholder="Nombre">
                </div>
                <div class="form-group">
                    <label>Golpes</label>
                    <input type="txt" class="form-control" name="txtGolpes" placeholder="Golpes">
                </div>
                <div class="form-group">
                    <label>Imagen</label>
                    <input type="file" class="form-control-file" name="txtImagen">
                </div>
                <div class="btn btn-block btn-lg" role="group">
                    <button type="submit" name="accion" value="agregar" class="btn btn-outline-dark">Agg</button>
                    <button type="submit" name="accion" value="cancelar" class="btn btn-outline-danger">Cancel</button>
                </div>
            </form>
        </div>
        <div class="col-md-5"><br>
            <aside>
                <table class="table table-dark table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Accion</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($pokemons as $pokemon){ ?>
                        <tr>
                            <th><?php echo $pokemon['id']; ?></th>
                            <td><?php echo $pokemon['nombre'];?></td>
                            <td>
                                <form method="post">
                                    <input type="hidden" name="txtID" value="<?php echo $pokemon['id']; ?>">
                                    <input class="btn btn-outline-danger" type="submit" name="accion" value="Borrar">
                                </form>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </aside>
        </div>
    </div>
</div>