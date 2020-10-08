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
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-KCXC4ZP');</script>
    <!-- End Google Tag Manager -->
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="p:domain_verify" content="b039ba3eeca54ed9979b5de7781b7bca"/>
<!--    <meta name="google-site-verification" content="SDhYObGQqSwMVsdvZPo0EmTqekSmgqC0wF7FW4Qcjg">-->
    <!--    <link rel="profile" href="https://gmpg.org/xfn/11">-->
    <script async src="https://use.fontawesome.com/f3f98404c8.js"></script>
	<?php wp_head(); ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
</head>

<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KCXC4ZP"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div class="vertical-centered-box">
    <div class="content">
        <div class="loader-circle"></div>
        <div class="loader-line-mask">
            <div class="loader-line"></div>
        </div>
    </div>
</div>
<div class="main-content">
    <header class="mt-3" id="header">
        <div class="featurebox col-md-12 col-sm-12 col-xs-12">
            <div class="row flex-nowrap justify-content-between align-items-center">
                <div class="navbar navbar-light d-none d-sm-block col-4">
                    <a class="navbar-brand header-brand" href="<?= get_home_url(); ?>"><?= get_bloginfo() ?></a>
                </div>
                <div class="col-4 text-center header-logo"style="z-index: 1000">
					<?= the_custom_logo() ?>
                </div>
                <nav class="navbar navbar-expand-md col-sm-4 col-xs-6 justify-content-end navigation nav-container">
                    <div class="burger-menu navbar-toggler" type="button" data-toggle="collapse"
                         data-target="#collapsibleNavbar">
                        <div class="container">
                            <div class="line" id="line0"></div>
                            <div class="line" id="line1"></div>
                            <div class="line" id="line2"></div>
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
						'items_wrap'      => '<ul class="navbar-nav lang-nav lang-menu">%3$s</ul>',
						'add_li_class'  => 'lang-menu_item'
					] ); ?>
                </nav>
            </div>
        </div>
    </header>
