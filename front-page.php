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
        <div class="folding-cube-container">
            <div class="sk-folding-cube">
                <div class="sk-cube1 sk-cube"></div>
                <div class="sk-cube2 sk-cube"></div>
                <div class="sk-cube4 sk-cube"></div>
                <div class="sk-cube3 sk-cube"></div>
            </div>
        </div>
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
            <div class="header-container">
                <h3 class="section-header">News</h3>
            </div>
            <div class="news-post-wrapper fadein">
                <?php
                $args = array( 'numberposts' =>3, 'order' => 'DESC', 'orderby' => 'date');
                $myposts = get_posts( $args );
                foreach( $myposts as $post):
                setup_postdata($post);?>
                <div class="news-post-container">
                    <div class="news-date"><?php red_starter_posted_on(); ?></div>
                    <div class="front-news-image-container">
                            <div class="news-gradient"></div>
                            <div><?php the_post_thumbnail('small'); ?></div>
                    </div><!--front-news-image-container-->
                    <h1 class="news-title">
                        <a href="<?php the_permalink();?>"><?php the_title();?></a>
                    </h1>
                    <div class="news-excerpt-container">
                        <?php the_excerpt(10); ?>
                        <a href="<?php the_permalink() ?>" class="read-more-news"><span>Read More</span></a>
                    </div>
                </div><!--news-post-container-->
                <?php endforeach;
                wp_reset_postdata(); ?> 
            </div><!--news-post-wrapper-->
        </section>
        <div class="header-container">
            <h3 class="section-header">Artists</h3>
        </div>
        <section class="artist-section">
            <ul class="main-carousel">
                <?php 
                    $loop = new WP_query(array('post_type' => 'artist_post_type', 'posts_per_page' => -1)); 
                ?>
                <?php 
                    while ( $loop -> have_posts() ) : $loop -> the_post(); 
                ?>
                <li class="carousel-cell artist-list-item">
                    <a href="<?php the_permalink() ?>">
                        <h3 class="artist-header"><?php the_title(); ?></h3>
                        <div class="artist-image-container">
                            <?php the_post_thumbnail('full'); ?>
                        </div>
                    </a>
                <li>
                <?php 
                    endwhile; 
                ?>
            </ul>

        </section>




		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
