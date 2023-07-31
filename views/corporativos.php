<?php include '../templates/cabecera.php'; ?>
<div class="contTitEvent">
    <h2 class="titEvent">Corporativos</h2>
</div>
<div class="container"><br><br>
    <div class="row row-cols-1 row-cols-md-3 g-4 formTarjeta">
    <?php foreach($eventos as $unoPorUno) {
            if($unoPorUno['tipoEvento'] == "corporativo"){?>
            <div class="col">
                <div class="card h-100">
                    <img src="../assets/fotosEventos/<?php echo $unoPorUno['imagen']; ?>" class="card-img-top">
                    <div class="card-body">
                        <h4 class="card-title"><?php echo $unoPorUno['nombre']?></h4>
                        <p class="descripcionBoda ocultar card-text" id="descripcionBoda"> Descripción: <?php echo $unoPorUno['descripcion']?></p>
                        <a class="btnAmpliar btn btn-outline-secondary" id="btnAmpliar">Ver</a>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Fecha: <?php echo $unoPorUno['fechaE']?></small><br>
                        <small class="text-muted card-link">Créditos Imagen: <?php echo $unoPorUno['credito']?> </small>
                    </div>
                </div>
            </div>
    <?php }} ?>
    </div><br><br>    
</div>
<?php include '../templates/pie.php'; ?>
