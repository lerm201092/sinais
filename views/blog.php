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
              <li><a href="blog.php">Blog</a></li>
            </ol>
            <h1>Blog</h1>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<div class="container-fluid">
  <div class="row"> 
    <div class="col-sm-12 espacios text-justify">
        <iframe src="https://clinicasinaisvitais.blogspot.com/" class="col-sm-12 espacios text-justify blog_h" frameborder="0"></iframe>
    </div>
  </div>
</div>

<?php
include './include/footer.php';
?>
