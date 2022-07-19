<?php
/*
 * Template name: Контакты
 */
get_header(); ?>
<base target="_blank">
<section id="mobile-contacts">
    <div class="container contacts-title">
        <div class="row justify-content-md-center">
            <h1 class="text-white text-center col-md-8 col-sm-12 col-lg-6 col-xl-5 col-xs-12"><?= the_title() ?></h1>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-around">
            <div class="col-auto c-container">
                <div class="country-contacts country-ukraine">
                    <a href="https://goo.gl/maps/7ZhC8GmcEh4M3aVYA" class="city" style="display:block;" target="_blank"><?= get_field( 'ukr_city', 32 ) ?></a>
                    <a href="https://goo.gl/maps/7ZhC8GmcEh4M3aVYA" class="address" style="display:block;" target="_blank"><?= get_field( 'address_ukr', 32 ); ?></a>
                    <a href="tel:<?=get_field( 'telefon_ukr', 32 );?>" class="phone"><?= get_field( 'telefon_ukr', 32 ); ?></a>
                </div>
            </div>
            <div class="col-auto c-container">
                <div class="country-contacts country-poland">
                    <a href="https://goo.gl/maps/wApJkaYFGC7xC99F7" class="city" style="display:block;" target="_blank"><?= get_field( 'pol_city', 32 ) ?></a>
                    <a href="https://goo.gl/maps/wApJkaYFGC7xC99F7" class="address" style="display:block;" target="_blank"><?= get_field( 'address_pol', 32 ); ?></a>
                    <a href="tel:<?= get_field( 'telefon_pol', 32 );?>" class="phone"><?= get_field( 'telefon_pol', 32 ); ?></a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>
