<?php
get_header('home');
?>
<?if (have_posts()) {
    while (have_posts()) {
        the_post();
        ?>
    </article>
    <?php 
} // end while
} // end if
?>

<main>
   <section class="information">
    <img class="information-black"src="<?echo get_template_directory_uri();?>/img/black-white.png" alt="">
    <img class="information-brow"src="<?echo get_template_directory_uri();?>/img/black-brow.png" alt="">
    <div class="information-main">
      <div class="information-main-contain">
        <p class="information-main-text"> <span class="span-information">Chel-Shar</span> - это быстро развивающиеся компания, специализирующаяся на продажи воздушных, гелиевых, латексных, фольгированных шаров.</p>
        <p class="information-main-text">Красивые, высоко-качественные, красочные, без запаха и химического талька шарики по самым низким ценам в г.Челябинске. </p>
        <ul class="information-main-ul">
          <li>Мы работаем только на чистом гелии (без каких либо примесей), в наличие у нас имеются сертификаты качества.</li>
          <li>Используем только качественные, профессиональные шары зарубежного производителя.
          </li>
          <li>Используем собственную профессиональную обработку. Аналогов которой в  России нет. Именно поэтому наши шары летают от 3 дней до 7 месяцев. </li>
      </ul>
      </div>
    </div>
   </section>
   <section class="section-shooter">
     <div class="section-shooter-main">
         <img src="<?echo get_template_directory_uri();?>/img/shooter8.png" class="section-shooter-main-img-1" alt=""> 
         <p class="section-shooter-main-text-1">наборы</p>
         <img src="<?echo get_template_directory_uri();?>/img/shooter9.png" class="section-shooter-main-img-2" alt="">
         <p class="section-shooter-main-text-2">фонтаны</p>
         <img src="<?echo get_template_directory_uri();?>/img/shooter4.png" class="section-shooter-main-img-3" alt="">
         <p class="section-shooter-main-text-3">фольгированные цифры</p>
         <img src="<?echo get_template_directory_uri();?>/img/shooter7.png" class="section-shooter-main-img-4" alt="">
         <p class="section-shooter-main-text-4">фольгированные фигуры</p>
         <img src="<?echo get_template_directory_uri();?>/img/shooter6.png" class="section-shooter-main-img-5" alt="">
         <p class="section-shooter-main-text-5">звезды, сердца <br>круги без рисунка</p>
         <img src="<?echo get_template_directory_uri();?>/img/shooter2.png" class="section-shooter-main-img-6" alt="">
         <p class="section-shooter-main-text-6">шары без рисунка</p>
         <img src="<?echo get_template_directory_uri();?>/img/shooter3.png" class="section-shooter-main-img-7" alt="">
         <p class="section-shooter-main-text-7">звезды, сердца, <br>круги с рисунком</p>
         <img src="<?echo get_template_directory_uri();?>/img/shooter5.png" class="section-shooter-main-img-8" alt="">
         <p class="section-shooter-main-text-8">шары с рисунком</p>
         <img src="<?echo get_template_directory_uri();?>/img/shooter1.png" class="section-shooter-main-img-9" alt="">
         <p class="section-shooter-main-text-9">фотозоны</p>
     </div>
   </section>
   <section class="love">
     <div class="love-text">
      Собственное оборудование  для печати рисунков, надписей, логотипов на латексных и <br>
      фольгированных шарах.<br>
         У нас работают три курьера, поэтому мы выполняем доставки быстро, своевременно и любых объемов <br>
      от 1 до 1000 шаров.
      <img class="love-diamond"src="<?echo get_template_directory_uri();?>/img/diamond.png" alt="">
      Благодаря многолетней и упорной работе, <br>
      а это более чем 5 лет.<br>
       Мы успели заслужить репутацию честной, <br>добросовестной и надежной команды - это большое достижение! <br>
      Мы будем продолжать радовать Вас отменным качеством наших шаров! 
     </div>
     <img class="love-img"src="<?echo get_template_directory_uri();?>/img/love.png" alt="">
   </section>
   <section class="personal">
    <div class="personal-main">
      <div class="personal-main-text">
        <h2 class="personal-h2">Chel Shar</h2>
        <p class="personal-p personal-text">Работаем круглосуточно<br> 
          Самовывоз по предварительному заказу.
          Доставка 24/7. </p>
        <div class="personal-main-works">
          <div class="personal-people">
            <p class="personal-p personal-p-bold">
              Анна Филимонова 
            </p>
            <p class="personal-p">
              менеджер по заказам
              https://vk.com/chelshar_174
              89525282333
            </p>
          </div>
          <div class="personal-people">
            <p class="personal-p personal-p-bold">Анютка Андреевна Трофимова</p>
            <p class="personal-p">менеджер по рекламе  
              https://vk.com/nefegane </p>
          </div>
        </div>
      </div>
    </div>
   </section>
 </main>
<?php
get_footer();?>
