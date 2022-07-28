<?php
/**
 * Header template
 *
 * The header is applied to all pages.
 *
 * @link URL
 *
 * @package WordPress
 * @subpackage happyhealthylife
 * @since happyhealthylife v1.0
 */
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Webscripting Assign 1</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <link href="<?php echo get_template_directory_uri(); ?>/css/custom.css" rel="stylesheet">

  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-md navbar-light bg-light p-3">
      <div class="container-fluid">
        <!-- logo portion -->
        <a class="navbar-brand " href="/home">Happy Healthy Life</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMob" aria-controls="navMob" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>


    <!-- <div class="d-flex flex-row-reverse"> -->
      <?php wp_nav_menu([
          'theme_location' => 'navbar-menu',
          'container_id' => 'navMob',
          'container_class' => 'collapse navbar-collapse',
          'menu_class' => 'navbar-nav mr-auto',
          'add_li_class' => 'nav-item',
          'add_link_class' => 'nav-link',
      ]); ?>

    </nav>
    
    




