<?php
include './include/header.php';
include './include/banner.php';
?>

<style>
    .p-home{
        border:3px solid #75c5cf;
        border-radius : 50%;
        width: 80px;
        height : 80px;
        text-align: center;
        vertical-align: middle;
        padding : 20px 20px;
        margin : 0 auto;
        font-size: 24px;
        color: #75c5cf;
    }

    .p-home:hover{
        color: white;
        background: #75c5cf;
    }

    .texto-home{
        text-align: justify;
        margin-top:15px;
    }
/*     .container .row{
        margin-top:30px;
    } */

    .navbar-nav > li > a {
    padding: 25px 15px;
}

    .p-img{
        text-align: center;
    }
    .p-img img{
        width:60%;
        height: auto;
    }

    .titulo-seccion{
        font-size: 24px;
        font-weight: bold;
        color : #75c5cf;
        text-align:center;
        margin-bottom: 30px;
        margin-top: 15px;
    }
</style>

<!-- Primera Fila de Razones -->
<div class="container">
    <div class="row">
        <p class="titulo-seccion">Razones para escogernos</p>
    </div>
    <div class="row">
        <div class="col-md-4 divInfo">
            <p class="p-home">
                <span class="fa fa-users icon-home">
            </p>
            <p class="texto-home">Nuestro equipo de profesionales está integrado por profesionales del más alto nivel y experiencia</p>
        </div>
        <div class="col-md-4 divInfo">
            <p class="p-home">
                <span class="fa fa-building icon-home">
            </p>
            <p class="texto-home">Nuestras confortables y modernas instalaciones de 3 pisos, con más de 8000 metros de construcción, están equipadas con los más modernos equipos tecnológicos.</p>
        </div>
        <div class="col-md-4 divInfo">
            <p class="p-home">
                <span class="fa fa-hospital-o icon-home">
            </p>
            <p class="texto-home">Somos un referente como clínica especializada en mediana y alta complejidad en el área de influencia de Bosconia, Cesar.</p>
        </div>
    </div>
</div>

<!-- Segunda Fila de Razones -->

<div class="container">
    <div class="row">
        <div class="col-md-4 divInfo">
            <p class="p-home">
                <span class="fa fa-image icon-home">
            </p>
            <p class="texto-home">brindamos servicios de imagenología, tomografía axial y computarizada.  laboratorio clínico; un área Servicio Transfusional, servicio de Terapias Física – Respiratoria con equipos avanzados garantizando resultados confiables a sus usuarios.</p>
        </div>
        <div class="col-md-4 divInfo">
            <p class="p-home">
                <span class="fa fa-heartbeat icon-home">
            </p>
            <p class="texto-home">Tratamos tus URGENCIAS con prioridad.</p>
        </div>
        <div class="col-md-4 divInfo">
            <p class="p-home">
                <span class="	fa fa-user-md icon-home">
            </p>
            <p class="texto-home">Trabajamos con altos estándares de calidad para brindarte un trato personalizado y asegurando los resultados</p>
        </div>
    </div>
</div>

<div class="container"><hr></div>


<div class="container">
    <div class="row">
        <p class="titulo-seccion">Nuestros pacientes opinan</p>
    </div>
    <div class="row">
        <div class="col-md-4 divInfo">
            <p class="p-img">
                <img src="./src/images/testimonios/orlaida.png" alt="">
            </p>
            <p style="font-size:17px; text-align: center"><strong>Orlaida Cristina Guerra Álvarez<br>(Bosconia)</strong></p>
            <p class="texto-home"><i>“El trato ha sido muy bueno. La recuperación de mi hija ha sido muy rápida, y he quedado muy agradecida con los médicos y enfermeras. 100% recomendada”.</i></p>
        </div>
        <div class="col-md-4 divInfo">
            <p class="p-img">
            <img src="./src/images/testimonios/lina.png" alt="">
            </p>
            <p style="font-size:17px; text-align: center"><strong>Lina Luz Barrios Fontalvo<br>(Astrea)</strong></p>
            <p class="texto-home"><i>“Sorprendida con la Clínica, muy bonita y cómoda. Aquí le he han hecho todos los exámenes a mi hija. Dios les pague y que sigan sanando a la gente”.</i></p>
        </div>
        <div class="col-md-4 divInfo">
            <p class="p-img">
                <img src="./src/images/testimonios/leonela.png" alt="">
            </p>
            <p style="font-size:17px; text-align: center"><strong>Leonela Navarro<br>(Bosconia)</strong></p>
            <p class="texto-home"><i>“Todo ha sido espectacular, mi parto fue bien atendido y mi bebé en perfectas condiciones. Todos se han portado bien, no tengo queja”.</i></p>
        </div>
    </div>
</div>



<?php
include './include/footer.php';
?>
