<?php
get_header();
?>
<?php
$next_post = get_next_post( true, '' );
if ( ! empty( $next_post ) ) {
	?>
    <section id="our_projects">
		<?
		//	var_dump($next_post);
		$post = get_post( $next_post->ID );
		setup_postdata( $post ); ?>
        <a href="<?= get_permalink( $next_post->ID ) ?>" class="single-post">
            <img src="<? the_post_thumbnail_url( $next_post->ID ); ?>" alt="" class="single-post_image">
            <div class="post-contents">
                <h2 class="text-white post-title"><?= the_title() ?></h2>
                <p class="post-text"><? the_field( 'additional_text' ); ?></p>
            </div>
            <div class="post-gradient"></div>
        </a>
		<? wp_reset_postdata();
		?>
    </section>
<?php } else {
	$prev_post = get_previous_post( true, '' );
	$post      = get_post( $prev_post->ID );
	setup_postdata( $post ); ?>
    <section id="our_projects">
        <a href="<?= get_permalink( $next_post->ID ) ?>" class="single-post">
            <img src="<? the_post_thumbnail_url( $next_post->ID ); ?>" alt="" class="single-post_image">
            <div class="post-contents">
                <h2 class="text-white post-title"><?= the_title() ?></h2>
                <p class="post-text"><? the_field( 'additional_text' ); ?></p>
            </div>
            <div class="post-gradient"></div>
        </a>
    </section>
	<? wp_reset_postdata();
	?>
<?php } ?>
<?php
get_footer();