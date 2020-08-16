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
        <div id="video-bg" class="youtube" data-videoid="<?= get_field( "mainpage_video" ) ?>">
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
			'numberposts'      => 4,
			'category'         => 0,
			'orderby'          => 'date',
			'order'            => 'DESC',
			'include'          => array(),
			'exclude'          => array(),
			'meta_key'         => '',
			'meta_value'       => '',
			'post_type'        => 'post',
			'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
		) );

		foreach ( $posts as $post ) {
			setup_postdata( $post ); ?>
            <a href="<?= get_permalink() ?>" class="single-post">
                <img src="<? the_post_thumbnail_url(); ?>" alt="" class="single-post_image lazy">
                <div class="post-contents">
                    <h2 class="text-white post-title"><?= the_title() ?></h2>
                    <p class="post-text"><? the_field( 'additional_text' ); ?></p>
                </div>
                <div class="post-gradient"></div>
            </a>
			<?// формат вывода the_title() ...
		}
		wp_reset_postdata(); // сброс
		?>
        <a href="/moyastudiya/projects/" class="link-button">
            <?
            if ( wpm_get_language() === "ru" ):
	            echo 'Больше кейсов';
            else:
	            echo "More projects";
            endif;
            ?>
        </a>
    </section>
<?php if ( ! empty( get_field( 'what_do_title_1' ) ) || ! empty( get_field( 'what_do_title_2' ) ) || ! empty( get_field( 'what_do_title_3' ) ) ) { ?>
    <section id="activities">
        <div class="container">
            <div class="row justify-content-md-center">
                <h2 class="text-white">
	                <?
	                if ( wpm_get_language() === "ru" ):
		                echo 'Чем мы занимаемся?';
	                else:
		                echo "What are we doing?";
	                endif;
	                ?>

                </h2>
            </div>
        </div>
        <div class="activities-block">
            <div class="container activities-container">
                <div class="first-activity p-3 px-md-4 text-white">
					<?= get_field( 'what_do_title_1' ); ?>
                </div>
                <div class="second-activity p-3 px-md-4 text-white">
					<?= get_field( 'what_do_title_2' ); ?>
                </div>
                <div class="third-activity p-3 px-md-4 text-white">
					<?= get_field( 'what_do_title_3' ); ?>
                </div>
            </div>
            <svg class="mainpage-svg-lg" width="1440" height="230" viewBox="0 0 1440 230" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 77.5H486H503C530.614 77.5 553 99.8858 553 127.5V153V178.5C553 206.114 575.386 228.5 603 228.5H832.5C860.114 228.5 882.5 206.114 882.5 178.5V51C882.5 23.3858 904.886 1 932.5 1H1440.5"
                      stroke="#C99B69" stroke-width="2"/>
            </svg>
	        <svg class="mainpage-svg-sm" width="165" height="448" viewBox="0 0 165 448" fill="none" xmlns="http://www.w3.org/2000/svg">
		        <path d="M79.5 448L79.5 296.852L79.5 283.648C79.5 279.433 82.9174 276.015 87.133 276.015V276.015L153.5 276.015C159.023 276.015 163.5 271.538 163.5 266.015L163.5 183.54C163.5 178.017 159.023 173.54 153.5 173.54L11 173.54C5.47714 173.54 0.999988 169.063 0.999988 163.54L0.99998 0" stroke="#C99B69" stroke-width="2"/>
	        </svg>

        </div>
        <a href="/moyastudiya/projects/" class="link-button">
		    <?
		    if ( wpm_get_language() === "ru" ):
			    echo 'Больше о нас';
		    else:
			    echo "More about us";
		    endif;
		    ?>
        </a>
    </section>
	<?php
}
get_footer();
