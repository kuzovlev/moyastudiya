<?php
get_header();
?>
<?php
$prev_post = get_previous_post( true, '' );?>
    <div class="container">
        <h1 class="post-header text-white text-center">
			<? the_title(); ?>
        </h1>
        <p class="post-text-head text-center"><? the_field( 'additional_text' ); ?></p>
		<? the_content(); ?>
    </div>
<?php if ( ! empty( $prev_post ) ) { ?>
    <section id="our_projects">
		<?
		$post      = get_post( $prev_post->ID );
		setup_postdata( $post ); ?>
        <section id="our_projects">
            <p class="neighbour_projects text-center">Следующий проект</p>
            <a href="<?= get_permalink( $prev_post->ID ) ?>" class="single-post">
                <img src="<? the_post_thumbnail_url( $prev_post->ID ); ?>" alt="" class="single-post_image">
                <div class="post-contents">
                    <h2 class="text-white post-title"><?= the_title() ?></h2>
                    <p class="post-text"><? the_field( 'additional_text' ); ?></p>
                </div>
                <div class="post-gradient"></div>
            </a>
        </section>
	    <? wp_reset_postdata();
	    ?>
    </section>
<?php } ?>
<?php
get_footer();