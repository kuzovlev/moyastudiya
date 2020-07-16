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
                <a class="navbar-brand text-white"><?= get_bloginfo() ?></a>
				<? $custom_logo__url = wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ), 'full' ); ?>
            </div>
            <div class="col-md-4">
				<?= the_custom_logo() ?>
            </div>
            <div class="navbar navbar-light col-md-4">
                <a class="navbar-brand text-white">Eng</a>
                <a class="navbar-brand text-white">Navbar</a>
            </div>
        </div>
    </div>
</header>
</body>
</html>
