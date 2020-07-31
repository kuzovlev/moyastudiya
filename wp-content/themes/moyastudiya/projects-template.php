<?php
/*
 * Template name: Проекты
 */
get_header();
$current_page = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1; // определяем текущую страницу блога
$args         = array(
	'posts_per_page' => get_option( 'posts_per_page' ),
	// значение по умолчанию берётся из настроек, но вы можете использовать и собственное
	'paged'          => $current_page
	// текущая страница
);
query_posts( $args );

$wp_query->is_archive = true;
$wp_query->is_home    = false; ?>
    <div class="container projects-title">
        <div class="row justify-content-md-center">
            <h1 class="text-white text-center col-md-8 col-sm-12 col-lg-6 col-xl-5 col-xs-12"><?= the_title() ?></h1>
        </div>
    </div>
    <section id="our_projects">
		<? while ( have_posts() ): the_post();
			?>
            <a href="<?= get_permalink() ?>" class="single-post">
                <img src="<? the_post_thumbnail_url(); ?>" alt="" class="single-post_image">
                <div class="post-contents">
                    <h2 class="text-white post-title"><?= the_title() ?></h2>
                    <p class="post-text"><? the_field( 'additional_text' ); ?></p>
                </div>
                <div class="post-gradient"></div>
            </a>
		<? endwhile; ?>
    </section>

<? if ( function_exists( 'wp_pagenavi' ) ) {
	wp_pagenavi();
} // функция постраничной навигации
get_footer();