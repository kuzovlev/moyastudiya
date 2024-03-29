<?php
/**
 * moyastudiya functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package moyastudiya
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'moyastudiya_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function moyastudiya_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on moyastudiya, use a find and replace
		 * to change 'moyastudiya' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'moyastudiya', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'moyastudiya' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'moyastudiya_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'moyastudiya_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function moyastudiya_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'moyastudiya_content_width', 640 );
}

add_action( 'after_setup_theme', 'moyastudiya_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function moyastudiya_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'moyastudiya' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'moyastudiya' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}

add_action( 'widgets_init', 'moyastudiya_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function moyastudiya_scripts() {


	wp_enqueue_script( 'moyastudiya-jquery', get_template_directory_uri() . '/js/jquery.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'moyastudiya-custom', get_template_directory_uri() . '/js/custom.js?212249', array(), false, true );
	wp_enqueue_script( 'moyastudiya-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'moyastudiya-accordion', get_template_directory_uri() . '/js/accordion.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'moyastudiya-bootstrap', get_template_directory_uri() . '/js/bootstrap.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'moyastudiya-lines', get_template_directory_uri() . '/js/lazy-line-painter-1.9.6.min.js', array(), _S_VERSION, true );
	//	wp_enqueue_script( 'moyastudiya-tween', get_template_directory_uri() . '/js/TweenMax.js', array(), _S_VERSION, true );
	wp_deregister_script('jquery');
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

add_action( 'wp_enqueue_scripts', 'moyastudiya_scripts' );

function prefix_add_footer_styles() {
	wp_enqueue_style( 'moyastudiya-style-fonts', get_template_directory_uri() . '/fonts/stylesheet.css?4', array(), _S_VERSION );
//	wp_enqueue_style( 'moyastudiya-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_style( 'moyastudiya-style-main', get_template_directory_uri() . '/css/style.css?28226', array(), false );
	wp_enqueue_style( 'moyastudiya-style-bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array(), _S_VERSION );
	wp_style_add_data( 'moyastudiya-style', 'rtl', 'replace' );
};
add_action( 'get_footer', 'prefix_add_footer_styles' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}
/**
 * Добавляем класс к пунктам меню
 */
//add_filter( 'nav_menu_css_class', 'special_nav_class', 10, 2 );
//function special_nav_class($classes, $item){
//		$classes[] = "nav-item";
//	return $classes;
//}
function add_additional_class_on_li( $classes, $item, $args ) {
	if ( isset( $args->add_li_class ) ) {
		$classes[] = $args->add_li_class;
	}

	return $classes;
}

add_filter( 'nav_menu_css_class', 'add_additional_class_on_li', 1, 3 );

function my_site_custom_languages_selector_template() {
	if ( function_exists( 'wpm_get_languages' ) ) {
		$languages = wpm_get_languages();
		$current   = wpm_get_language();

		$out = '<div class="b-language-selector">';

		foreach ( $languages as $code => $language ) {
			$toggle_url  = esc_url( wpm_translate_current_url( $code ) );
			$css_classes = 'b-language-selector-link ';

			if ( $code === $current ) {
				$css_classes .= 'b-language-selector-link--active';
			}

			$out .= '<a href="' . $toggle_url . '" class="' . $css_classes . '" data-lang="' . esc_attr( $code ) . '">';
			$out .= $language['name'];
			$out .= '</a>';
			$out .= '&nbsp;';
		}

		$out .= '</div>';

		return $out;
	}
}

add_action( 'init', 'processes_reg' ); // Использовать функцию только внутри хука init

function processes_reg() {
	$labels = array(
		'name'               => 'Процессы',
		'singular_name'      => 'Процесс', // админ панель Добавить->Функцию
		'add_new'            => 'Добавить этап',
		'add_new_item'       => 'Добавить новый этап', // заголовок тега <title>
		'edit_item'          => 'Редактировать этап',
		'new_item'           => 'Новый этап',
		'all_items'          => 'Все этапы',
		'view_item'          => 'Просмотр',
		'search_items'       => 'Найти этап',
		'not_found'          => 'Этапов не найдено',
		'not_found_in_trash' => 'В корзине нет этапов.',
		'menu_name'          => 'Процессы' // ссылка в меню в админке
	);
	$args   = array(
		'labels'        => $labels,
		'public'        => true,
		'show_ui'       => true, // показывать интерфейс в админке
		'has_archive'   => true,
		'menu_icon'     => get_stylesheet_directory_uri() . '/img/function_icon.png', // иконка в меню
		'menu_position' => 20, // порядок в меню
		'supports'      => array( 'title', 'editor', 'comments', 'author', 'thumbnail' )
	);
	register_post_type( 'processes', $args );
}

add_action( 'init', 'services_reg' ); // Использовать функцию только внутри хука init

function services_reg() {
	$labels = array(
		'name'               => 'Услуги',
		'singular_name'      => 'Услуга', // админ панель Добавить->Функцию
		'add_new'            => 'Добавить услугу',
		'add_new_item'       => 'Добавить новую услугу', // заголовок тега <title>
		'edit_item'          => 'Редактировать услугу',
		'new_item'           => 'Новая услуга',
		'all_items'          => 'Все услуги',
		'view_item'          => 'Просмотр',
		'search_items'       => 'Найти услугу',
		'not_found'          => 'Услуг не найдено',
		'not_found_in_trash' => 'В корзине нет услуг.',
		'menu_name'          => 'Услуги' // ссылка в меню в админке
	);
	$args   = array(
		'labels'        => $labels,
		'public'        => true,
		'show_ui'       => true, // показывать интерфейс в админке
		'has_archive'   => true,
		'menu_icon'     => get_stylesheet_directory_uri() . '/img/function_icon.png', // иконка в меню
		'menu_position' => 21, // порядок в меню
		'supports'      => array( 'title', 'editor', 'comments', 'author', 'thumbnail' )
	);
	register_post_type( 'services', $args );
}

add_action( 'init', 'packages_reg' ); // Использовать функцию только внутри хука init

function packages_reg() {
	$labels = array(
		'name'               => 'Пакеты',
		'singular_name'      => 'Пакет', // админ панель Добавить->Функцию
		'add_new'            => 'Добавить пакет',
		'add_new_item'       => 'Добавить новую пакет', // заголовок тега <title>
		'edit_item'          => 'Редактировать пакет',
		'new_item'           => 'Новый пакет',
		'all_items'          => 'Все пакеты',
		'view_item'          => 'Просмотр',
		'search_items'       => 'Найти пакет',
		'not_found'          => 'Пакетов не найдено',
		'not_found_in_trash' => 'В корзине нет пакетов.',
		'menu_name'          => 'Пакеты услуг' // ссылка в меню в админке
	);
	$args   = array(
		'labels'        => $labels,
		'public'        => true,
		'show_ui'       => true, // показывать интерфейс в админке
		'has_archive'   => true,
		'show_in_rest'  => true,
		'menu_icon'     => get_stylesheet_directory_uri() . '/img/function_icon.png', // иконка в меню
		'menu_position' => 21, // порядок в меню
		'supports'      => array( 'title', 'editor')
	);
	register_post_type( 'packages', $args );
}

function image_full_width_shortcode_func( $attrs ) {
	$params = shortcode_atts( array(
		'first' => '',
		'lazy' => ''
	),
		$attrs );
	if ($params['lazy']=='lazy'){
		$lazyLoad = 'loading="lazy"';
	} else {
		$lazyLoad = '';
	}
	return "<div class='d-flex proj-one-img'><span data-fancybox='gallery' href='{$params['first']}'><img class='project_image full_width lazy' {$lazyLoad} src='{$params['first']}'></span></div>";
}

add_shortcode( 'full_wid_img', 'image_full_width_shortcode_func' );

function image_double_shortcode_func( $attrs ) {
	$params = shortcode_atts( array(
		'first'  => '',
		'second' => '',
		'lazy' => ''
	),
		$attrs );
	if ($params['lazy']=='lazy'){
		$lazyLoad = 'loading="lazy"';
	} else {
		$lazyLoad = '';
	}
	return "<div class='d-flex proj-two-img'><span data-fancybox='gallery' href='{$params['first']}'><img class='project_image half_width lazy' {$lazyLoad} src={$params['first']}'></span><span data-fancybox='gallery' href='{$params['second']}'><img class='lazy project_image half_width' {$lazyLoad} src={$params['second']}'></span></div>";
}

add_shortcode( 'double_img', 'image_double_shortcode_func' );