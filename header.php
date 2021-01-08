<!doctype html>
<html lang="fr">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

  <link rel="stylesheet" href="<?php echo get_stylesheet_uri();?>" <title><?php bloginfo('name');?> -

</head>

<body>

  <div class="container-fluid d-flex ">
    <div class="col-xl-2 col-md-3 col-3 bggrey vertical-nav">
      <div class='container d-flex justify-content-center '>
        <div class='row'>
          <div class="col-12 my-4 ">
            <img class="img-fluid mt-5" src="wp-content/uploads/2021/01/logo.png">
          </div>
        </div>
      </div>
      <div class="container d-flex justify-content-center firstMenu">
        <div class="row text-center">
          <?php
          wp_nav_menu( array(
          'container' =>'nav',
          'theme_location' => '',
          'menu_id' => '',
          'echo' => true,
          'before' => '',
          'after' => '',
          'link_before' => '',
          'link_after' => '',
          'depth' => 0,
          'items_wrap' => '%3$s',
          'walker' => '')
          );
          ?>
        </div>
      </div>
      <div class="container d-flex justify-content-center secondMenu ">
        <div class="row text-center">
          <nav>
            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-45">
              <a class="grey" href="#">About paper</a>
            </li>
            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-45">
              <a class="grey" href="#">Contact Me</a>
            </li>
            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-45">
              <a class="grey" href="#">Check out Twitter</a>
            </li>
            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-45">
              <a class="grey" href="#">Check out Facebook</a>
            </li>
          </nav>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-md-3 col-3">
    </div>