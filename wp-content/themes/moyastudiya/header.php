<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package moyastudiya
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--    <link rel="profile" href="https://gmpg.org/xfn/11">-->
    <script src="https://use.fontawesome.com/f3f98404c8.js"></script>
	<?php wp_head(); ?>
</head>

<body>
<div class="preloader-1">
    <div>Loading</div>
    <span class="line line-1"></span>
    <span class="line line-2"></span>
    <span class="line line-3"></span>
    <span class="line line-4"></span>
    <span class="line line-5"></span>
    <span class="line line-6"></span>
    <span class="line line-7"></span>
    <span class="line line-8"></span>
    <span class="line line-9"></span>
</div>
<div class="main-content">
    <header class="mt-3">
        <div class="featurebox col-md-12 col-sm-12 col-xs-12">
            <div class="row flex-nowrap justify-content-between align-items-center">
                <div class="navbar navbar-light d-none d-sm-block col-4">
                    <a class="navbar-brand text-white" href="<?= get_home_url(); ?>"><?= get_bloginfo() ?></a>
                </div>
                <div class="col-4">
					<?= the_custom_logo() ?>
                </div>
                <nav class="navbar navbar-expand-md col-sm-4 col-xs-6 justify-content-end navigation nav-container">
                    <div class="burger-menu navbar-toggler" type="button" data-toggle="collapse"
                         data-target="#collapsibleNavbar">
                        <div class="container">
                            <div class="line" id="line0"></div>
                            <div class="line" id="line1"></div>
                            <div class="line" id="line2"></div>
                            <div class="txt-container"><span>MENU</span></div>
                        </div>
                    </div>
					<?php wp_nav_menu( [
						'menu'            => 'main_rus',
						'container'       => 'div',
						'container_class' => 'main_rus collapse navbar-collapse main_mobile',
						'container_id'    => 'collapsibleNavbar',
						'items_wrap'      => '<ul class="navbar-nav">%3$s</ul>',
					] ); ?>
					<?php wp_nav_menu( [
						'menu'            => 'to_rus',
						'container'       => false,
						'container_class' => '',
//					'container_id'    => 'collapsibleNavbar',
						'items_wrap'      => '<ul class="navbar-nav lang-nav">%3$s</ul>',
					] ); ?>
                </nav>
            </div>
        </div>
    </header>
