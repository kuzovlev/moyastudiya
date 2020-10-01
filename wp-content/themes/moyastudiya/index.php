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
        <div class="container header-mainpage">
            <div class="row justify-content-md-center">
                <h1 class="text-white text-center col-md-8 col-sm-12 col-lg-6 col-xl-5 col-xs-12">
					<?php echo get_bloginfo( 'description' ); ?>
                </h1>
            </div>
        </div>
        <div class="gif-container" data-src="<?=get_template_directory_uri()?>/images/moyastudiya_small.mp4">
            <div class="showreel-container" data-toggle="modal" data-target="#exampleModal">
                <p class="start-video"></p>
                <p class="start-video start-video_text">
			        <? if ( wpm_get_language() === "ru" ):
				        echo 'Смотреть шоурил';
			        elseif (wpm_get_language() === "uk" ):
				        echo "Дивитись відео";
			        else:
				        echo "Watch video";
			        endif; ?>
                </p>
            </div>
        </div>
<!--        <div style="padding-top: 50%; position: relative; overflow: hidden;" class="video-mainpage">-->
<!--            <iframe frameborder="0" allowfullscreen="" scrolling="no" allow="autoplay;fullscreen"-->
<!--                    src="https://onelineplayer.com/player.html?autoplay=false&autopause=false&muted=false&loop=true&url=https%3A%2F%2Fvimeo.com%2F458982550&poster=https%3A%2F%2Fmoyastudiya.com%2Fwp-content%2Fthemes%2Fmoyastudiya%2Fimages%2Fcover-image.png&time=false&progressBar=false&overlay=true&muteButton=true&fullscreenButton=false&style=light&quality=auto&playButton=true"-->
<!--                    style="position: absolute; height: 100%; width: 100%; left: 50%; top: 0px; max-width: 1087px; transform: translateX(-50%); border-radius: 20px;"></iframe>-->
<!--        </div>-->
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
                <img data-src="<? the_post_thumbnail_url(); ?>" alt="" class="single-post_image">
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
        <a href="/moyastudiya/projects/" class="link-button draw">
			<?
			if ( wpm_get_language() === "ru" ):
				echo 'Больше кейсов';
            elseif ( wpm_get_language() === "uk" ):
				echo "Більше проєктів";
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
                <h2 class="text-white activities-header">
					<?
					if ( wpm_get_language() === "ru" ):
						echo 'Чем мы занимаемся?';
                    elseif ( wpm_get_language() === "uk" ):
						echo "Чим ми займаємося?";
					else:
						echo "What are we doing?";
					endif;
					?>

                </h2>
            </div>
        </div>
        <div class="activities-block">
            <div class="star-1-overlay"></div>
            <div class="star-2-overlay"></div>
            <div class="star-3-overlay"></div>
            <div class="full-height-star-overlay"></div>
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
            <svg class="mainpage-svg-xxl lazy-line-painter" width="2560" height="230" viewBox="0 0 2560 230" fill="none"
                 xmlns="http://www.w3.org/2000/svg" data-llp-composed="true" id="Vectorxxl">
                <path d="M0.5 77.5H1053H1070C1097.61 77.5 1120 99.8858 1120 127.5V153V178.5C1120 206.114 1142.39 228.5 1170 228.5H1399.5C1427.11 228.5 1449.5 206.114 1449.5 178.5V51C1449.5 23.3858 1471.89 1 1499.5 1L2560 1"
                      data-llp-id="Vectorxxl-0" data-llp-duration="750" data-llp-delay="0" fill-opacity="0" style=""/>
            </svg>
            <svg class="mainpage-svg-xl lazy-line-painter" width="1920" height="230" viewBox="0 0 1920 230" fill="none"
                 xmlns="http://www.w3.org/2000/svg" data-llp-composed="true" id="Vector2000">
                <path d="M-31 77.5H726H743C770.614 77.5 793 99.8858 793 127.5V153V178.5C793 206.114 815.386 228.5 843 228.5H1072.5C1100.11 228.5 1122.5 206.114 1122.5 178.5V51C1122.5 23.3858 1144.89 1 1172.5 1H1936.5"
                      data-llp-id="Vector2000-0" data-llp-duration="750" data-llp-delay="0" fill-opacity="0" style=""/>
            </svg>
            <svg class="mainpage-svg-lg lazy-line-painter" width="1440" height="230" viewBox="0 0 1440 230" fill="none"
                 xmlns="http://www.w3.org/2000/svg" data-llp-composed="true" id="VectorLg">
                <path d="M0 77.5H486H503C530.614 77.5 553 99.8858 553 127.5V153V178.5C553 206.114 575.386 228.5 603 228.5H832.5C860.114 228.5 882.5 206.114 882.5 178.5V51C882.5 23.3858 904.886 1 932.5 1H1440.5"
                      data-llp-id="VectorLg-0" data-llp-duration="750" data-llp-delay="0" style=""/>
            </svg>
            <svg width="165" height="448" viewBox="0 0 165 448" fill="none" xmlns="http://www.w3.org/2000/svg"
                 data-llp-composed="true" id="Vector3" class="lazy-line-painter mainpage-svg-sm">
                <path d="M79.5 448L79.5 296.852L79.5 283.648C79.5 279.433 82.9174 276.015 87.133 276.015V276.015L153.5 276.015C159.023 276.015 163.5 271.538 163.5 266.015L163.5 183.54C163.5 178.017 159.023 173.54 153.5 173.54L11 173.54C5.47714 173.54 0.999988 169.063 0.999988 163.54L0.99998 0"
                      data-llp-id="Vector3-0" data-llp-duration="750" data-llp-delay="0" style=""/>
                <defs>
                    <linearGradient id="paint0_linear" x1="1" y1="-4.5" x2="1" y2="423.5"
                                    gradientUnits="userSpaceOnUse">
                        <stop stop-color="#C99B69" stop-opacity="0"/>
                        <stop offset="0.1875" stop-color="#C99B69"/>
                        <stop offset="0.84375" stop-color="#C99B69"/>
                        <stop offset="1" stop-color="#C99B69" stop-opacity="0"/>
                    </linearGradient>
                </defs>
            </svg>
            <svg width="194" height="292" viewBox="0 0 194 292" fill="none" xmlns="http://www.w3.org/2000/svg"
                 class="stars-overlay-small">
                <path fill-rule="evenodd" clip-rule="evenodd"
                      d="M18.3556 12.64L24 0.143555L16 11.28L8.00002 0.143555L13.6444 12.64L2.23653e-05 14L13.6444 15.36L8.00002 27.8564L16 16.72L24 27.8564L18.3556 15.36L32 14L18.3556 12.64ZM102.856 264L97.2121 276.496L110.856 277.856L97.2121 279.216L102.856 291.713L94.8565 280.576L86.8565 291.713L92.5009 279.216L78.8565 277.856L92.5009 276.496L86.8565 264L94.8565 275.136L102.856 264ZM177.856 140.28L169.856 129.144L175.501 141.64L161.856 143L175.501 144.36L169.856 156.856L177.856 145.72L185.856 156.856L180.212 144.36L193.856 143L180.212 141.64L185.856 129.144L177.856 140.28Z"
                      fill="#C99B69"/>
            </svg>
            <svg width="878" height="259" viewBox="0 0 878 259" fill="none" xmlns="http://www.w3.org/2000/svg"
                 class="stars-overlay-big">
                <path fill-rule="evenodd" clip-rule="evenodd"
                      d="M865.04 14.1987L864 0L862.96 14.1987L850.144 8L861.92 16L850.144 24L862.96 17.8013L864 32L865.04 17.8013L877.856 24L866.08 16L877.856 8L865.04 14.1987ZM15.36 89.6444L14 76L12.64 89.6444L0.143616 84L11.28 92L0.143616 100L12.64 94.3556L14 108L15.36 94.3556L27.8564 100L16.72 92L27.8564 84L15.36 89.6444ZM481 227L482.36 240.644L494.856 235L483.72 243L494.856 251L482.36 245.356L481 259L479.64 245.356L467.144 251L478.28 243L467.144 235L479.64 240.644L481 227Z"
                      fill="#C99B69"/>
            </svg>
        </div>
        <a href="/o-nas/" class="link-button draw">
			<?
			if ( wpm_get_language() === "ru" ):
				echo 'Больше о нас';
            elseif ( wpm_get_language() === "uk" ):
				echo "Більше про нас";
			else:
				echo "More about us";
			endif;
			?>
        </a>
    </section>
	<div class="modal-video video-background">
        <p class="close"></p>
		<video class="full-video" data-src="<?=get_template_directory_uri()?>/images/moyastudiya_small.mp4" autoplay></video>
	</div>
	<?php
}
get_footer();
