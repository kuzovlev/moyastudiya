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
        <div class="row flex-nowrap justify-content-between align-items-center">
            <div class="navbar navbar-light d-none d-sm-block col-4">
                <a class="navbar-brand text-white" href="<?= get_home_url(); ?>"><?= get_bloginfo() ?></a>
            </div>
            <div class="col-4">
				<?= the_custom_logo() ?>
            </div>
            <nav class="navbar navbar-expand-md col-4 row justify-content-end navigation">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-menu-button" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M0 1.5A1.5 1.5 0 0 1 1.5 0h8A1.5 1.5 0 0 1 11 1.5v2A1.5 1.5 0 0 1 9.5 5h-8A1.5 1.5 0 0 1 0 3.5v-2zM1.5 1a.5.5 0 0 0-.5.5v2a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-2a.5.5 0 0 0-.5-.5h-8zM14 7H2a1 1 0 0 0-1 1v5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V8a1 1 0 0 0-1-1zM2 6a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8a2 2 0 0 0-2-2H2z"/>
                        <path fill-rule="evenodd" d="M15 11H1v-1h14v1zM2 12.5a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5z"/>
                        <path d="M7.823 2.823l-.396-.396A.25.25 0 0 1 7.604 2h.792a.25.25 0 0 1 .177.427l-.396.396a.25.25 0 0 1-.354 0z"/>
                    </svg>
                </button>
				<?php wp_nav_menu( [
					'menu'            => 'main_rus',
					'container'       => 'div',
					'container_class' => 'main_rus collapse navbar-collapse',
					'container_id'    => 'collapsibleNavbar',
					'items_wrap'      => '<ul class="navbar-nav">%3$s</ul>',
				] ); ?>
                <pre class="text-white">
                    <?var_dump(wpm_get_languages());?>
                </pre>
            </nav>
        </div>
    </div>
</header>
</body>
</html>
