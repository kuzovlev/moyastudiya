<?php
/*
 * Template name: О нас
 */
get_header(); ?>
    <section id="about-us">
        <div class="container about-us_container">
            <div class="about-us-blocks_wrapper">
                <div class="col-md-6 text-white about-left-block">
                    <h1 class="ml10">
                        <span class="text-wrapper">
                            <span class="letters"><? the_title()?></span>
                        </span>
                    </h1>
                    <div class="about-us_text about_text_animate">
						<?= get_field( "main_text" ) ?>
                    </div>
                </div>
                <div class="col-md-5 about-right-block">
                    <div class="image-container">
                        <img src="<?= get_field( 'main_image' ) ?>" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="clients">
        <div class="container header-container">
            <h3 class="text-white about-header"><?= get_field( 'second_block_title' ); ?></h3>
        </div>
        <svg width="2559" height="65" viewBox="0 0 2559 65" fill="none" xmlns="http://www.w3.org/2000/svg"
             data-llp-composed="true" id="aboutUsLine" class="lazy-line-painter about-us-underline">
            <path d="M0.5 63.5H707.361H1321.75C1339.01 63.5 1353 49.5089 1353 32.25V32.25C1353 14.9911 1366.99 1 1384.25 1H2560.5"
                  data-llp-id="Vector2-0" data-llp-duration="750" data-llp-delay="0" style=""/>
        </svg>
        <div class="container">
            <div class="row">
                <div class="col-md-7 about-us_text">
					<?= get_field( 'second_text' ) ?>
                </div>
                <div class="col-auto"></div>
            </div>
        </div>
    </section>
    <section id="services">
        <div class="container">
            <h3 class="text-white">Наши услуги</h3>
            <div class="row">
				<?
				$posts = get_posts( array(
					'numberposts'      => 0,
					'category'         => 0,
					'orderby'          => 'date',
					'order'            => 'ASC',
					'include'          => array(),
					'exclude'          => array(),
					'meta_key'         => '',
					'meta_value'       => '',
					'post_type'        => 'services',
					'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
				) );

				foreach ( $posts as $post ) {
					setup_postdata( $post ); ?>
                    <div class="services-item">
                        <div class="col-md-5 services-title"><?= $post->post_title; ?></div>
                        <div class="col-md-7 services-text justify-content-end">
							<?= $post->post_content; ?>
                        </div>
                    </div>
				<? }
				wp_reset_postdata(); ?>


            </div>
        </div>
    </section>
    <section id="process">
        <div class="container">
            <h3 class="text-white">Этапы работы</h3>
            <p class="col-md-5 process-header_text">
				<?= get_field( "proc_text" ) ?>
            </p>
            <div class="row justify-content-between processes-wrapper">
				<? $posts = get_posts( array(
					'numberposts'      => 0,
					'category'         => 0,
					'orderby'          => 'date',
					'order'            => 'ASC',
					'include'          => array(),
					'exclude'          => array(),
					'meta_key'         => '',
					'meta_value'       => '',
					'post_type'        => 'processes',
					'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
				) );

				foreach ( $posts as $post ) {
					setup_postdata( $post ); ?>
                    <div class="process-container">
                        <div class="process-title"><?= $post->post_title; ?></div>
                        <div class="process-text">
							<?= $post->post_content; ?>
                            <div class="process-counter"></div>
                        </div>
                    </div>
				<? }
				wp_reset_postdata(); ?>
            </div>
        </div>
    </section>
<? get_footer();