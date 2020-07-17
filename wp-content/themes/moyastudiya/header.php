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
    <link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body>
<header class="mt-3">
    <div class="featurebox col-md-12 col-sm-12 col-xs-12">
        <div class="row">
            <div class="navbar navbar-light col-md-4">
                <a class="navbar-brand text-white" href="<?=get_home_url();?>"><?= get_bloginfo() ?></a>
            </div>
            <div class="col-md-4">
				<?= the_custom_logo() ?>
            </div>
            <div class="navbar navbar-light col-md-4 row justify-content-end">
	            <?php wp_nav_menu( [
		            'menu'       => 'main_rus',
		            'container'  => 'div',
		            'container_class' => 'main_rus',
		            'items_wrap' => '%3$s'
	            ] ); ?>
                <?
                    pll_the_languages(array('hide_current'=>1,
                                            'hide_if_no_translation' => 1,
                                            'display_names_as'=>'slug'));
                ?>
            </div>
        </div>
    </div>
</header>
</body>
</html>
