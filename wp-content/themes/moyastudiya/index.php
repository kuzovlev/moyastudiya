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
        <div id="video-bg">
            <div id="player"></div>
            <div id="thumbnail_container" class="thumbnail_container">
                <img class="thumbnail" id="thumbnail"/>
            </div>
            <a class="start-video"><img width="64" src="http://image.flaticon.com/icons/png/512/0/375.png"
                                        style="filter: invert(100%); -webkit-filter: invert(100%);"></a>
        </div>
    </section>

<?php
get_footer();
