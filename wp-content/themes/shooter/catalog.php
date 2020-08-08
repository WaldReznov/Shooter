<?php
/*
Template Name: Каталог
Template Post Type: post, page, product
*/
?>

<?php
get_header();
?>

<main>
   <section class="products">
    <div class="products-way">шары / <span class="span-way">наборы</span></div>
    <div class="products-block">
    <?// параметры по умолчанию
               $posts = get_posts( array(
                  'numberposts' => 0,
                  'post_type'   => 'catalog',
                  'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
               ) );

               foreach( $posts as $post ){
                  setup_postdata($post);
                  ?>
                     <!-- Это одна работа из портфолио-->
                     <a  href="<?the_permalink()?>" class="products-item">
                      <?the_post_thumbnail('spec_thumb')?>
                      <div class="products-shooter-text-name"><p><?the_field("nameshooter")?></p></div>
                      <div class="products-shooter-text-price"><p><?the_field("priceshooter")?></p></div>
                    </a>
                     <!-- конец работы из портфолио-->
                  <?
               }

               wp_reset_postdata(); // сброс?>
              
      
    </div>
   </section>
  </main>

<?php
get_footer();
?>