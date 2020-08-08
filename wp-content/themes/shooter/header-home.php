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
 <header class="header-home">
  <nav>
    <div class="nav-main">
      <div class="nav-logo">
        <p>Chel Shar</p>
      </div>
      <!-- <ul id="nav-ul"class="nav-ul">
        <li><a id="active" href="index.html">Главная</a></li>
        <li><a href="#">О нас</a></li>
        <li><a href="index2.html">Шары</a></li>
        <li><a href="#">Доставка</a></li>
        <li><a href="#">Контакты</a></li>
      </ul> -->
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
   <div class="header-logo">
     <div class="header-logo-text">
       <h1 class="header-h1">Chel Shar</h1>
       <p class="header-p">Воздушные шары от профессионалов своего дела</p>
     </div>
   </div>
 </header>