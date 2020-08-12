<?php
/*
 * Template name: О нас
 */
get_header(); ?>
    <section id="about-us">
        <div class="container">
            <div class="row">
                <div class="col-md-7 text-white">
                    <h1>
						<? the_title() ?>
                    </h1>
                    <div class="about-us_text">
						<?= get_field( "main_text" ) ?>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="image-container">
                        <img src="<?= get_template_directory_uri() ?>/src/portrait.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="clients">
        <div class="container header-container">
            <h3 class="text-white"><?= get_field( 'second_block_title' ); ?></h3>
        </div>
        <svg width="1436" height="65" viewBox="0 0 1436 65" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M-1036 41.5967H-35.2335C-29.3922 41.5967 -26.8968 49.0198 -31.5519 52.5484V52.5484C-36.207 56.0769 -33.7116 63.5 -27.8703 63.5H123.361H782.906C800.165 63.5 814.156 49.5089 814.156 32.25V32.25C814.156 14.9911 828.147 1 845.406 1L1436 1"
                  stroke="#C99B69" stroke-width="2"/>
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
					'order'            => 'DESC',
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
            <div class="row justify-content-between">
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