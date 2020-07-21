<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package moyastudiya
 */

get_header();
?>
    <section class="section-main_top">
        <div class="container">
            <div class="row justify-content-md-center">
                <h1 class="text-white text-center col-md-8 col-sm-12 col-lg-6 col-xl-5 col-xs-12">
					<?php echo get_bloginfo( 'description' ); ?>
                </h1>
            </div>
        </div>
        <div id="video-bg" data-videoid="<?= get_field( "mainpage_video" ) ?>">
            <div id="player"></div>
            <div id="thumbnail_container" class="thumbnail_container">
                <img class="thumbnail" id="thumbnail"/>
            </div>
            <div class="showreel-container">
                <a class="start-video"></a>
                <a class="start-video start-video_text">
					<? if ( wpm_get_language() === "ru" ):
						echo 'Смотреть шоурил';
					else:
						echo "Watch video";
					endif; ?>
                </a>
            </div>
        </div>
    </section>
    <section id="our_projects">
        <?
        $posts = get_posts( array(
	        'numberposts' => 4,
	        'category'    => 0,
	        'orderby'     => 'date',
	        'order'       => 'DESC',
	        'include'     => array(),
	        'exclude'     => array(),
	        'meta_key'    => '',
	        'meta_value'  =>'',
	        'post_type'   => 'post',
	        'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
        ) );

        foreach( $posts as $post ){
	        setup_postdata($post);?>
            <a href="<?=get_permalink()?>" class="single-post">
	            <img src="<?the_post_thumbnail_url(); ?>" alt="" class="single-post_image">
	            <div class="post-contents col-4">
		            <h2 class="text-white post-title"><?=the_title()?></h2>
					<p class="post-text"><?the_field('additional_text');?></p>
	            </div>
                <div class="post-gradient"></div>
            </a>
            <?// формат вывода the_title() ...
        }

        wp_reset_postdata(); // сброс
        ?>
    </section>

<?php
get_footer();
