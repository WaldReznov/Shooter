<?php
  add_action('wp_enqueue_scripts','theme_styles');
	add_action('wp_enqueue_scripts','theme_scripts');
	add_action('after_setup_theme','nav_top');
	add_shortcode( 'baztag', 'baztag_func' );
	add_action( 'init', 'register_post_types' );
	add_theme_support( 'post-thumbnails' );

	function nav_top(){
		register_nav_menu('top', 'Меню в шапке');
		add_image_size( 'spec_thumb', 270, 340, true );
	}
	function theme_styles(){
		wp_enqueue_style('style', get_template_directory_uri().'/css/style.css');
	}

	function theme_scripts() {
		wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js');
		wp_enqueue_script( 'jquery' );
		wp_enqueue_script('newscript', get_template_directory_uri(). '/assets/script/script.js',null,null,true);
		add_shortcode( 'baztag', 'baztag_func' );
	}
	function baztag_func($content) {
		return "$content";
	}

  function register_post_types(){
	register_post_type('catalog', array(
		'label'  => null,
		'labels' => array(
			'name'               => 'Шар', // основное название для типа записи
			'singular_name'      => 'Шар', // название для одной записи этого типа
			'add_new'            => 'Добавить шар', // для добавления новой записи
			'add_new_item'       => 'Добавление шара', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование шара', // для редактирования типа записи
			'new_item'           => 'Новый шар', // текст новой записи
			'view_item'          => 'Смотреть шар', // для просмотра записи этого типа.
			'search_items'       => 'Искать шар', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Каталог', // название меню
		),
		'description'         => 'Это наши шары в каталоге',
		'public'              => true,
		'publicly_queryable'  => true, // зависит от public
		'exclude_from_search' => false, // завtrueисит от public
		'show_ui'             => true, // зависит от public
		'show_in_menu'        => true, // показывать ли в меню адмнки
		'show_in_admin_bar'   => true, // по умолчанию значение show_in_menu
		'show_in_nav_menus'   => true, // зависит от public
		'show_in_rest'        => true, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => 4,
		'menu_icon'           => 'dashicons-format-aside', 
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => array('title','editor','author','thumbnail','excerpt'), // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
    'taxonomies'          => array("description"),
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	) );
}
add_action( 'init', 'create_taxonomy' );

function create_taxonomy(){
	// список параметров: http://wp-kama.ru/function/get_taxonomy_labels
	register_taxonomy('description', array('catalog'), array(
		'label'                 => '', // определяется параметром $labels->name
		'labels'                => array(
			'name'              => 'Описание',
			'singular_name'     => 'Описание',
			'search_items'      => 'Найти описание',
			'all_items'         => 'Все описания',
			'view_item '        => 'Показать описания',
			'parent_item'       => 'Родительское описание',
			'parent_item_colon' => 'Родительское описание:',
			'edit_item'         => 'Изменить описание',
			'update_item'       => 'Обновить описание',
			'add_new_item'      => 'Добавить новое описание',
			'new_item_name'     => 'Новый пункт описания',
			'menu_name'         => 'Описание шаров',
		),
		'description'           => 'Навыки, которые использовались в работе над проектом', // описание таксономии
		'public'                => true,
		'publicly_queryable'    => null, // равен аргументу public
		'hierarchical'          => false,
		//'update_count_callback' => '_update_post_term_count',
    'rewrite'               => true,
    'show_in_menu'        => true, // показывать ли в меню адмнки
		'show_in_admin_bar'   => true, // по умолчанию значение show_in_menu
		'show_in_nav_menus'   => true, // зависит от public
		'show_in_rest'        => true, // добавить в REST API. C WP 4.7
	) );
  }