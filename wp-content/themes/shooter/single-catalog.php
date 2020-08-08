<?
/*
  Template Name: Страница элемента каталога
  Template Post Type: post, page, product
*/
?>

<?get_header();?>

  <main>
   <section class="products">
    <div class="products-way">шары / <span class="span-way">наборы</span></div>
    <div class="products-shooter">
      <img src="<?the_field("imageshooter")?>" alt="">
      <div class="products-shooter-text">
        <div class="products-shooter-text-name"><p><?the_field("nameshooter")?></p></div>
        <div class="products-shooter-text-price"><p><?the_field("priceshooter")?></p></div>
        <div class="products-shooter-text-item"><p><?the_field("description_shooter_first")?></p></div>
        <div class="products-shooter-text-item"><p><?the_field("description_shooter_second")?></p></div>
        <button class="button-modal order"><?the_field("action_button")?></button>
      </div>
    </div>
   </section>
  </main>

<?get_footer();?>