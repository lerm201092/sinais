<?php
include './include/header.php';?>

<!-- Parallax Effect -->
<script type="text/javascript">$(document).ready(function(){$('#parallax-pagetitle').parallax("50%", -0.55);});</script>

<section class="parallax-effect">
  <div id="parallax-pagetitle" style="background-image: url(./images/parallax/1900x911.gif);">
    <div class="color-overlay"> 
      <!-- Page title -->
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <ol class="breadcrumb">
              <li><a href="./index.html">Home</a></li>
              <li><a href="#">Pacientes</a></li>
              <li class="active">Requisitos</li>
            </ol>
            <h1>Requisitos</h1>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<div class="container">
  <div class="row"> 
      <div class="col-md-4 col-sm-12 espacios text-justify">
          <p>El área de Admisiones en la Clínica Sinais Vitais tiene como objetivo obtener datos para la identificación del paciente, así mismo, entregarle información que lo oriente acerca de los servicios que presta la clínica, de acuerdo a los convenios con las diferentes aseguradoras (EPS´s) responsables del pago; respetando sus derechos y haciendo un manejo eficiente de los recursos.</p>
          <p>Documentos básicos requeridos para el ingreso del paciente:</p>

      </div>
      <div class="col-md-4 col-sm-12 espacios text-justify">
          <img src="src/images/blog/requisitos_1.jpg" alt="Requisitos" class="img-fluid img-thumbnail">
      </div>
      <div class="col-md-4 col-sm-12 espacios text-justify">
          <img src="src/images/blog/requisitos_2.jpg" alt="Requisitos" class="img-fluid img-thumbnail">
      </div>
  </div>

  <div class="row"> 
      <div class="col-md-12 col-sm-12 espacios text-justify">
      <h3>Atención inicial de urgencias </h3>
      <p>Documento de identidad actualizado, de acuerdo a la edad del paciente:</p>
      <ul>
          <li>0 a 7 años Registro civil de nacimiento</li>
          <li>7 a 18 años Tarjeta de identidad</li>
          <li>18 años en adelante, cédula de ciudadanía</li>
      </ul>

      <p>Para la atención de ciudadanos extranjeros el paciente deberá presentar el documento de identidad expedido en su país de origen o los documentos que acrediten sur acceso al SGSSS.</p>

      <h3>Citas médicas por consulta externa</h3>
      <ul>
          <li>Documento de identidad. </li>
          <li>Autorización(es) o pre autorización(es) vigente(s) emitida(s) por su EPS.</li>
          <li>Orden médica de atención (No mayor a un mes de expedición).</li>
          <li>Cancelación del bono de atención.</li>
      </ul>

      <h3>Cirugía</h3>
      <ul>
          <li>Documento de identidad. </li>
          <li>Historia clínica del consultorio</li>
          <li>Orden médica del procedimiento solicitado.</li>
          <li>Autorización de procedimiento a realizar.</li>
          <li>Autorización del material quirúrgico y su respectiva orden médica</li>
      </ul>
  </div>
</div>
</div>

<?php
include './include/footer.php';
?>
