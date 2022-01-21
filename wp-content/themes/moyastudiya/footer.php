<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package moyastudiya
 */

?>
<section id="c-form">
    <div class="container">
        <div class="row justify-content-center">
            <h3 class="text-white form-header">
				<?
				if ( wpm_get_language() === "ru" ):
					echo 'Давайте познакомимся';
                elseif ( wpm_get_language() === "uk" ):
					echo "Давайте знайомитися";
				else:
					echo "Let's get acquainted";
				endif;
				?>
            </h3>
        </div>
    </div>
	<?= do_shortcode( '[contact-form-7 id="119" title="Contact form 1"]' ) ?>
</section>
<footer>
    <div class="container">
        <div class="d-flex flex-column flex-md-row align-items-md-center p-3 px-md-4 text-white top-footer-line">
            <div class="my-0 mr-md-auto ">
                <a class="m-xs-auto mr-md-3 d-xs-block d-md-inline-block email-foot-link"
                   href="mailto:<?= get_field( 'elektronnaya_pochta', 32 ) ?>"><?= get_field( 'elektronnaya_pochta', 32 ); ?></a>
            </div>
			<?php wp_nav_menu( [
				'menu'            => 'footer',
				'container'       => 'div',
				'container_class' => 'my-2 my-md-0 mr-md-3 foot_menu',
				'container_id'    => '',
				'items_wrap'      => '<ul class="navbar-nav d-block">%3$s</ul>',
			] ); ?>
        </div>
        <div class="d-flex flex-column flex-md-row align-items-md-center p-3 px-md-4 footer-information justify-content-between">
            <div class="my-2 my-md-0 mr-md-3 col-md-2 col-xs-12 footer-logo">
                <div class="col-6 logo-container"><?= the_custom_logo() ?></div>
                <div class="col-6 logo_soc-buttons" style="justify-content: space-evenly">
                    <a href="https://facebook.com/<?= get_field( 'facebook', 32 ); ?>" target="_blank">
                        <i class="fa fa-facebook-square" aria-hidden="true"></i>
                    </a>
                    <a href="https://instagram.com/<?= get_field( 'instagram', 32 ); ?>" target="_blank">
                        <i class="fa fa-instagram" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
            <div class="my-2 my-md-0 mr-md-4 col-xs-12  contacts">
                <p class="addr-Ukr"><?= get_field( 'ukr_city', 32 ).", ";?><?= get_field( 'address_ukr', 32 ); ?>
                </p>
                <a class="m-xs-auto mr-md-3 d-xs-block d-md-inline-block phone-Ukr"
                   href="tel:<?= get_field( 'telefon_ukr', 32 ); ?>">
					<?= get_field( 'telefon_ukr', 32 ); ?>
                </a>
            </div>
            <div class="my-2 my-md-0 mr-md-4 col-xs-12  contacts">
                <p><?= get_field( 'rus_city', 32 ).", ";?><?= get_field( 'address_rus', 32 ); ?>
                </p>
                <a class="m-xs-auto mr-md-3 d-xs-block d-md-inline-block "
                   href="tel:<?= get_field( 'telefon_rus', 32 ); ?>">
					<?= get_field( 'telefon_rus', 32 ); ?>
                </a>
            </div>
            <div class="my-2 my-md-0 mr-md-4 col-xs-12  contacts">
                <p><?= get_field( 'pol_city', 32 ).", ";?><?= get_field( 'address_pol', 32 ); ?>
                </p>
                <a class="m-xs-auto mr-md-3 d-xs-block d-md-inline-block "
                   href="tel:<?= get_field( 'telefon_pol', 32 ); ?>">
					<?= get_field( 'telefon_pol', 32 ); ?>
                </a>
            </div>
        </div>
    </div>
</footer>
<div id="btnTop" class="fixed-action-btn smooth-scroll" style="bottom: 45px; right: 24px;display: none;">
    <i class="fa fa-arrow-up to-top"></i>
</div>
</div>
<?php wp_footer(); ?>
<script src="https://cdn.jsdelivr.net/npm/vanilla-lazyload@17.1.0/dist/lazyload.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js"></script>
<script async defer src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
<script async src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
</body>
</html>
