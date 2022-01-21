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
	<?php wp_head(); ?>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-TCHFJ52');</script>
    <!-- End Google Tag Manager -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-5F712GZ3N2"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-5F712GZ3N2');
    </script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-188185274-1">
    </script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-188185274-1');
    </script>
    <!-- Разметка JSON-LD, созданная Мастером разметки структурированных данных Google. -->
    <script type="application/ld+json">
        {
            "@context" : "http://schema.org",
            "@type" : "LocalBusiness",
            "name" : "MOYA Studiya",
            "image" : "https://moyastudiya.com/wp-content/uploads/2020/09/cropped-icon_small-1.png",
            "telephone" : "+380444660151",
            "telephone" : "+79957915311",
            "telephone" : "+48730059192",
            "email" : "moyastudiyaa@gmail.com",
            "address" : {
                "@type" : "PostalAddress",
                "streetAddress" : "Cурикова 3А",
                "addressLocality" : "Киев"
            }
            "address" : {
                "@type" : "PostalAddress",
                "streetAddress" : "Павелецкая набережная 2",
                "addressLocality" : "Москва"
            }
            "address" : {
                "@type" : "PostalAddress",
                "streetAddress" : "Palisadowa 20/22",
                "addressLocality" : "Варшава"
            }
        }
    </script>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="p:domain_verify" content="b039ba3eeca54ed9979b5de7781b7bca"/>
    <meta property="og:title" content="MOYA STUDIYA">
    <meta property="og:image" content="<img class=" redactor-autoparser-object="" src="https://moyastudiya.com/wp-content/uploads/2020/09/cropped-icon_small-1.png">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://moyastudiya.com/">
    <meta property="og:description" content="Новые решения в дизайне интерьера">
<!--    <meta name="google-site-verification" content="SDhYObGQqSwMVsdvZPo0EmTqekSmgqC0wF7FW4Qcjg">-->
    <!--    <link rel="profile" href="https://gmpg.org/xfn/11">-->
    <script async src="https://use.fontawesome.com/f3f98404c8.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
</head>

<body>
<!-- Google Tag Manager (noscript) -->
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TCHFJ52"
        height="0" width="0" style="display:none;visibility:hidden">
    </iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->
<div class="vertical-centered-box">
    <div class="content">
        <div class="loader-circle"></div>
        <div class="loader-line-mask">
            <div class="loader-line"></div>
        </div>
    </div>
</div>
<style>
    body header .mobile_phones {
        display: none;
    }
    @media screen and (max-width: 576px) {
        /*body header .to-fix-mobile{*/
        /*    position: fixed;*/
        /*    top: 20px;*/
        /*    background: url('/wp-content/themes/moyastudiya/src/main_back_2.png') repeat;*/
        /*    z-index: 9999;*/
        /*}*/
        header{
            background: url('/wp-content/themes/moyastudiya/src/main_back_2.png') repeat;
            background-size: 70%;
        }
        body header .mobile_phones {
            width:100%;
            color: #fff;
            display: block;
            text-align: center;
        }
        .header_fixed {
            position: fixed;
            left: 0;
            top: 0;
            width: 100%;
            z-index: 99999;
        }
    }
</style>
<div class="main-content">
    <header class="pt-3 pb-3" id="header">
        <div class="featurebox col-md-12 col-sm-12 col-xs-12 to-fix-mobile">
            <div class="row flex-nowrap justify-content-between align-items-center">
                <div class="navbar navbar-light d-none d-sm-block col-4">
                    <a class="navbar-brand header-brand" href="<?= get_home_url(); ?>"><?= get_bloginfo() ?></a>
                </div>
                <div class="col-4 text-center header-logo"style="z-index: 1">
					<?= the_custom_logo() ?>
                </div>
                <div class="mobile_phones col-sm-4 col-xs-6 justify-content-center">
                    <a class="m-xs-auto mr-md-3 d-xs-block d-md-inline-block phone-Ukr phone"
                        href="tel:<?= get_field( 'telefon_ukr', 32 ); ?>"
                        style="text-align: center;">
					    <?= get_field( 'telefon_ukr', 32 ); ?>
                    </a>
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
