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
            <h3 class="text-white">
	            <?
	            if ( wpm_get_language() === "ru" ):
		            echo 'Давайте познакомимся';
                elseif (wpm_get_language() === "uk" ):
		            echo "Давайте знайомитися";
	            else:
		            echo "Let's get acquainted";
	            endif;
	            ?>
            </h3>
        </div>
    </div>
    <?=do_shortcode('[contact-form-7 id="119" title="Contact form 1"]')?>
</section>
<footer>
    <div class="container">
        <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 text-white">
            <div class="my-0 mr-md-auto footer-logo">
				<?= the_custom_logo() ?>
            </div>
			<?php wp_nav_menu( [
				'menu'            => 'main_rus',
				'container'       => 'div',
				'container_class' => 'my-2 my-md-0 mr-md-3 foot_menu',
				'container_id'    => '',
				'items_wrap'      => '<ul class="navbar-nav d-block">%3$s</ul>',
			] ); ?>
        </div>
        <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 footer-information">
            <div class="my-0 mr-md-auto footer-information__left">
                <a class="m-xs-auto mr-md-3 d-xs-block d-md-inline-block"
                   href="mailto:<?= get_field( 'elektronnaya_pochta', 32 ) ?>"><?= get_field( 'elektronnaya_pochta', 32 ); ?></a>
                <a class="m-xs-auto mr-md-3 d-xs-block d-md-inline-block"
                   href="tel:<?= get_field( 'telefon', 32 ); ?>"><?= get_field( 'telefon', 32 ); ?></a>
                <p class="m-xs-auto mr-md-3 d-xs-block d-md-inline-block"><?= get_field( 'address', 32 ); ?></p>
            </div>
            <div class="my-2 my-md-0 mr-md-3 social-links">
                <a href="https://facebook.com/<?= get_field( 'facebook', 32 ); ?>" target="_blank">
                    <i class="fa fa-facebook-square" aria-hidden="true"></i>
                </a>
                <a href="https://instagram.com/<?= get_field( 'instagram', 32 ); ?>" target="_blank">
                    <i class="fa fa-instagram" aria-hidden="true"></i>
                </a>
            </div>
        </div>
    </div>
</footer>
</div>
<?php wp_footer(); ?>
<script src="https://cdn.jsdelivr.net/npm/vanilla-lazyload@17.1.0/dist/lazyload.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js"></script>
</body>
</html>
