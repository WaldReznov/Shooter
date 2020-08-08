<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <?php wp_head(); ?>
</head>
<body id="body">
 <header>
  <nav class="background-static">
    <div class="nav-main">
      <div class="nav-logo">
        <p>Chel Shar</p>
      </div>
      <?
        wp_nav_menu( [
          'theme_location'  => 'top',
          'container'       => false, 
          'menu_class'      => 'nav-ul', 
          'menu_id'         => 'nav-ul',
        ] );
      ?>
      <div id="burger" class="menu-link">
        <span>

        </span>
      </div>
    </div>
  </nav>
 </header>