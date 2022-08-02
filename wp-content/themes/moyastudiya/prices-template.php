<?php
/*
 * Template name: Цены
 */
get_header(); ?>
<?
if ( wpm_get_language() === "ru" ):
	$priceAd = '$ кв/м';
elseif ( wpm_get_language() === "uk" ):
	$priceAd = '$ кв/м';
else:
	$priceAd = '$ sq/m';
endif;
?>
<?function getPost ($postNum){
    $package_object = get_field( $postNum );
    $post = get_post( $package_object->ID );
    $output =  apply_filters( 'the_content', $post->post_content );
    return $output;
}?>
<div class="container prices_main-content">
    <h1 class="price_title text-white">
		<? the_title() ?>
    </h1>
    <div data-accordion-group style="display: block; width: 100%">
        <div class="accordion package_container" data-accordion>
            <div data-control class="package_header">
                <div class="border_top"></div>
                <div class="col-md-4 package_name text-white">
                    <span><?= get_field( 'first_name' ); ?></span>
                </div>
                <div class="col-md-4 package_additional-text text-center">
					<?= get_field( "first_additional" ); ?>
                </div>
                <div class="col-md-4 package_price text-white text-right">
					<?= get_field( "first_price" ) . $priceAd; ?>
                </div>
            </div>
            <div data-content class="package_content text-white">
                <?=getPost('first_content');?>
            </div>
        </div>
        <div class="accordion package_container" data-accordion>
            <div data-control class="package_header">
                <div class="border_top"></div>
                <div class="col-md-4 package_name text-white">
                    <span><?= get_field( 'second_name' ); ?></span>
                </div>
                <div class="col-md-4 package_additional-text text-center">
					<?= get_field( "second_additional" ); ?>
                </div>
                <div class="col-md-4 package_price text-white text-right">
					<?= get_field( "second_price" ) . $priceAd; ?>
                </div>
            </div>
            <div data-content class="package_content text-white">
                <?=getPost('second_content');?>
            </div>
        </div>
        <div class="accordion package_container" data-accordion>
            <div data-control class="package_header">
                <div class="border_top"></div>
                <div class="col-md-4 package_name text-white">
                    <span><?= get_field( 'third_name' ); ?></span>
                </div>
                <div class="col-md-4 package_additional-text text-center">
					<?= get_field( "third_additional" ); ?>
                </div>
                <div class="col-md-4 package_price text-white text-right">
					<?= get_field( "third_price" ) . $priceAd; ?>
                </div>
            </div>
            <div data-content class="package_content text-white">
                <?=getPost('third_content');?>
            </div>
        </div>
    </div>
</div>
<?php
get_footer();
?>
