<?php /* Template Name: page d'accueil */ ?>

<?php get_header(); ?>

<div class="col-9">
  <div class="container">
    <div class="row mt-5">
      <div class="col-lg-3 col-6 col-md-4">
        <h2>Latest<span> Work</span></h2>
      </div>
      <div class="col-lg-9 col-6 col-md-8">
        <hr>
      </div>

      <div class="row">
        <?php
      $work = get_field("images");

      for ($i=0; $i < count($work); $i++){
      echo "<div class='col-md-3 col-6 img'>";
      echo "<img src = '".$work[$i]["image_lw"]."' class='img-fluid '/>";
      echo"</div>";
      }
      ?>
      </div>
    </div>


    <div class="container">
      <div class="row mt-5">
        <div class="col-lg-3 col-6 col-md-4">
          <h2>About<span> Paper</span></h2>
        </div>
        <div class="col-lg-9 col-6 col-md-8">
          <hr>
        </div>
      </div>
      <?php
    $about = get_field("about_t");
    echo'<p class="paragraphe1">'.$about.'</p>';
    ?>
      <div class="row">

        <?php $slide = get_field("image_slider"); ?>
        <div class="bd-example">
          <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">

            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="<?=$slide[0]["img_slider"]?>" class="d-block w-100" alt="...">
              </div>
              <?php
    
    for ($i=1; $i < count($slide); $i++){
      echo '<div class="carousel-item">
      <img src="'.$slide[$i]["img_slider"].'" class="d-block w-100" alt="...">
      </div>';
    }
    ?>
            </div>
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
              <?php
    
    for ($i=1; $i < count($slide); $i++){
      echo '<li data-target="#carouselExampleCaptions" data-slide-to="'.$i.'">';
    }
    ?>
            </ol>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row mt-5 mb-5">
          <div class="col-lg-6 col-6 col-md-6">
            <h2>This is an <span> awesome design</span></h2>
          </div>
          <div class="col-lg-6 col-6 col-md-6">
            <hr>
          </div>
        </div>
        <?php
      $paragraphe = get_field("texte_p");
      echo'<p class="paragraphe">'.$paragraphe.'</p>';
      ?>
      </div>
      <h4 class='text-uppercase mt-5'>this is a quote or <span>call to action</span></h2>
        <?php
      $quote = get_field("quote");

      for ($i=0; $i < count($quote); $i++){
      echo "<p>".$quote[$i]["texte_q"]."</p>";
      echo "<div class='d-flex justify-content-end'> <p class='details'>".$quote[$i]['details']."</p></div>";
      
      }
      ?>

        <?php get_footer(); ?>