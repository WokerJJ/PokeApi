<?php
    include("../template/cabecera.php");
    include("../config/conbd.php");
$SSQL = $conn->prepare("SELECT DISTINCT id, nombre, imagen, habilidades FROM pokemons;");
$SSQL->execute();
$pokemons = $SSQL->fetchAll(PDO::FETCH_ASSOC);
?>
<div class="container"><br>
    <?php foreach($pokemons as $pokemon){ ?><br>
<div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            <?php echo $pokemon['id']?>. <?php echo $pokemon['nombre']?>
        </button>
      </h2>
    </div>
    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body"><?php echo $pokemon['habilidades']?> <img src="/images/<?php echo $pokemon['imagen']?>" alt="" style="width: 100px; height: 100px;"></div>
    </div>
  </div>
  </div>
</div>
    <?php }?>
</div>

