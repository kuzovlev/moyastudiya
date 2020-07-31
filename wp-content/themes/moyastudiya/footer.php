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
                <a class="m-xs-auto mr-md-3 d-xs-block d-md-inline-block" href="mailto:<?=get_field('elektronnaya_pochta', 32)?>"><?=get_field('elektronnaya_pochta', 32);?></a>
                <a class="m-xs-auto mr-md-3 d-xs-block d-md-inline-block" href="tel:<?=get_field('telefon', 32);?>"><?=get_field('telefon', 32);?></a>
                <p class="m-xs-auto mr-md-3 d-xs-block d-md-inline-block"><?=get_field('address', 32);?></p>
            </div>
            <div class="my-2 my-md-0 mr-md-3 social-links">
                <a href="https://facebook.com/<?=get_field('facebook', 32);?>" target="_blank">
                    <i class="fa fa-facebook-square" aria-hidden="true"></i>
                </a>
                <a href="https://instagram.com/<?=get_field('instagram', 32);?>" target="_blank">
                    <i class="fa fa-instagram" aria-hidden="true"></i>
                </a>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>

</body>
</html>
