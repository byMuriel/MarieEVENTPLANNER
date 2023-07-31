<?php include '../templates/cabecera.php'; ?>
<div class="row">
    <section class="col-8 formTarjeta">
        <h2>Descubre</h2>
        <p class="labelFormulario">Somos expertos en la planificación y organización de eventos con altos estándares de calidad. Desde bodas y fiestas corporativas hasta eventos sociales, lanzamientos de productos y conferencias, abarcamos todo tipo de celebraciones. Nuestro principal enfoque es la satisfacción de nuestros clientes, y nos dedicamos a crear experiencias memorables que reflejen sus deseos y superen sus expectativas.</p>
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-interval="3000">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="../assets/images/bodas.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block translucido">
                        <h3 class="colorN">Bodas</h3>
                        <p>Hacemos de ese dia especial un dia inolvidable, lleno de hermosos recuerdos.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="../assets/images/eventosSociales.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block translucido">
                        <h3 class="colorN">Eventos Sociales</h3>
                        <p>Todo tipo de eventos sociales, fiestas corporativas, lanzamientos de productos y conferencias.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="../assets/images/bodaDestino.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block translucido">
                        <h3 class="colorN">Bodas Destino</h3>
                        <p>LLevamos tu boda al lugar que elijas.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
    <aside class="col-3 formTarjeta">
        <h2>¿Que buscas?</h2>
        <h3> ¿Que tipo de evento deseas? </h3>
        <ul class="botonesCont">
            <li class="botCont">
                <a href="corporativos.php" class="botText">Corporativos</a>
            </li>
            <li class="botCont">
                <a href="corporativos.php" class="botText">Conferencias</a>
            </li>
            <li class="botCont">
                <a href="bodas.php" class="botText">Bodas</a>
            </li>
            <li class="botCont">
                <a href="celebraciones.php" class="botText">Celebraciones</a>
            </li>
            <li class="botCont">
                <a href="corporativos.php" class="botText">Lanzamientos</a>
            </li>
        </ul>
    </aside>
</div>
<div class="row">
    <div class="col-1"></div>
    <article class="col-10 formTarjeta">
        <h3>Portofino es testigo de la union de Andrea Valentino y Mario Sepúlveda</h3>
        <h5>BODA</h5>
        <div>
            <img src="../assets/images/noviosPortofino.jpg" class="d-block w-100" alt="Andrea Valentino en el dia de su boda"
                title="Andrea Valentino Novia" />
        </div>
        <p class="labelFormulario">El pasado 15 de mayo como event planner, tuve la oportunidad de organizar la hermosa boda de Andrea 
            Valentino y Mario Sepúlveda en Portofino, Italia. Durante cuatro días, familiares y amigos cercanos se 
            reunieron para celebrar su amor. La ceremonia fue emotiva y encantadora, con vistas al mar. Después
            de una deliciosa cena, todos disfrutaron de una fiesta con una actuación especial de Luca Santello. 
            Fue un evento mágico y significativo, cada aspecto de esta hermosa celebración fue una muestra de amor 
            y felicidad, y estoy orgullosa de haber sido la encargada junto con mi equipo de hacer realidad sus 
            sueños en este día tan especial.</p>
    </article>
</div>
<?php include '../templates/pie.php'; ?>