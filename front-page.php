  <?php /* Template Name: front-page*/ ?>
<div class ="top-home-bar">
</div>
  <?php
  /**
  * The template for displaying all pages.
  *
  * @package RED_Starter_Theme
  */

get_header(); ?>
	<div id="primary" class="content-area">
		  <main id="main" class="site-main" role="main">
            <div class="hero-container">
                <img src="<?php echo get_template_directory_uri(); ?>/images/home-hero-image.jpg" class="home-hero">
                <a href="#" class="general-button hero-button">Buy Tickets</a>
            </div><!--hero-container-->
            <div class="social-icons-container">
                <div>
                    <i class="fa fa-facebook" aria-hidden="true"></i>
                </div>
                <div>
                    <i class="fa fa-twitter" aria-hidden="true"></i>
                </div>
                <div>
                    <i class="fa fa-instagram" aria-hidden="true"></i>
                </div>
                <div>
                    <i class="fa fa-calendar" aria-hidden="true"></i>
                </div>
            </div>
        <section>
            <h3>Gallery</h3>
        </section>




		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
