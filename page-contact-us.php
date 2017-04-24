<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
            <section class="main-section">
                <nav class="social">
                    <ul>
                        <li><a href="https://twitter.com/eescapecanada">Twitter <i class="fa fa-twitter"></i></a></li>
                        <li><a href="https://www.facebook.com/electricescapeevents">Facebook <i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://www.youtube.com/channel/UC7pLTJmlcQbBGIoOR0BoXgw">Youtube <i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                    </ul>
                </nav>
                <div class="header-container">
                    <h3 class="section-header">Contact Us</h3>
                </div><!--header-container-->
                <h2 class="question-header">Got a Question?</h2>
                <?php while ( have_posts() ) : the_post(); ?>
                <?php get_template_part( 'template-parts/content', 'page' ); ?>
                <?php endwhile; // End of the loop. ?>
            </section>
            <section class="contact-sidebar">
                <div class="location-content-container">
                    <div class="content-container">
                        <h3>Contact Us</h3>
                        <p>International Centre</p>
                        <p>Arrow Hall</p>
                        <p class="p-last-child">6900 Airport Road, Mississauga, ON, Canada</p>
                    </div><!--content-container-->
                </div><!--location-content-container-->
            <section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
