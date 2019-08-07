<?php
include './include/header.php';?>

<!-- Parallax Effect -->
<script type="text/javascript">$(document).ready(function(){$('#parallax-pagetitle').parallax("50%", -0.55);});</script>

<section class="parallax-effect">
  <div id="parallax-pagetitle" style="background-image: url(./src/images/parallax/1900x911.gif);">
    <div class="color-overlay"> 
      <!-- Page title -->
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <ol class="breadcrumb">
              <li><a href="./index.html">Home</a></li>
              <li><a href="servicios.php">Servicios</a></li>
              <li class="active">Hospitalización</li>
            </ol>
            <h1>Hospitalización</h1>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<div class="container">
  <div class="row"> 
    <div class="col-md-4 col-sm-12 espacios text-justify">   
        <p>La clínica cuenta con 105 camas de hospitalización, distribuidas en habitaciones unipersonales, bipersonales y tripersonales. Todas dotadas del confort y la seguridad necesarias para garantizar una estancia cálida con altos niveles de calidad.</p>

        <p><b>Hospitalización pediátrica:</b> la clínica cuenta con 24 camas y cómodas poltronas reclino maticas para el familiar acompañante.</p>
    </div>
    <div class="col-md-4 col-sm-12 espacios text-justify">   
      <img src="./src/images/blog/hospitalizacion_1.jpg" alt="Hospitalización" class="img-fluid img-thumbnail">
    </div>
    <div class="col-md-4 col-sm-12 espacios text-justify">   
      <img src="./src/images/blog/hospitalizacion_2.jpg" alt="Hospitalización" class="img-fluid img-thumbnail">
    </div>
  </div>
</div>

<?php
include './include/footer.php';
?>
