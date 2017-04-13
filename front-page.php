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
        <!--<div class="folding-cube-container">
            <div class="sk-folding-cube">
                <div class="sk-cube1 sk-cube"></div>
                <div class="sk-cube2 sk-cube"></div>
                <div class="sk-cube4 sk-cube"></div>
                <div class="sk-cube3 sk-cube"></div>
            </div>
        </div>-->
            <div class="hero-container">
                <img src="<?php echo get_template_directory_uri(); ?>/images/home-hero-image.jpg" class="home-hero">
                <a href="https://www.eventbrite.ca/e/true-north-music-festival-tickets-32441901601" class="general-button hero-button">Buy Tickets</a>
            </div><!--hero-container-->
            <div class="social-icons-container">
                <div>
                    <i class="fa fa-facebook" aria-hidden="true"></i>
                </div><!--facebook-->
                <div>
                    <i class="fa fa-twitter" aria-hidden="true"></i>
                </div><!--twitter-->
                <div>
                    <i class="fa fa-instagram" aria-hidden="true"></i>
                </div><!--instagram-->
                <div>
                    <i class="fa fa-calendar" aria-hidden="true"></i>
                </div><!--calendar-->
            </div><!--social-icons-cotnainer-->
        <section>
            <div class="header-container">
                <h3 class="section-header">News</h3>
            </div><!--section header-->
            <div class="news-post-wrapper fadein">
                <?php
                $args = array( 'numberposts' => 4, 'order' => 'DESC', 'orderby' => 'date');
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
                    </div><!--news-excerpt-container-->
                </div><!--news-post-container-->
                <?php endforeach;
                wp_reset_postdata(); ?> 
            </div><!--news-post-wrapper-->
        </section>
        <div class="header-container">
            <h3 class="section-header">Artists</h3>
        </div><!--header-container-->
        <section class="artist-section">
            <div class="archive-header-container">
                <a href="<?php echo get_post_type_archive_link('artist_post_type'); ?>" class="artist-button"><span class="artist-button-span">Full Lineup</span></a>
            </div><!--archive header container-->
            <ul class="main-carousel">
                <?php 
                    $loop = new WP_query(array('post_type' => 'artist_post_type', 'posts_per_page' => -1)); 
                ?>
                <?php 
                    while ( $loop -> have_posts() ) : $loop -> the_post(); 
                ?>
                <li class="carousel-cell artist-list-item">
                    <a href="<?php echo CFS()->get('artist_link');?>">
                        
                        <div class="artist-image-container">
                            <h3 class="artist-header"><?php the_title(); ?></h3>
                            <?php the_post_thumbnail('full'); ?>
                            <div class="artist-social"></div>
                        </div><!--artist-image-container-->
                    </a>
                    <div class="artist-content-container">
                        <p><?php echo the_content() ?></p>
                    </div><!--artist-content-container-->
                </li>
                <?php 
                    endwhile; 
                ?>
            </ul>
        </section>
        <section class="venue-section fadein">
            <h3 class="section-header">Venue</h3>
            <div class="map-content-container">
                <div class="location-marker-container">
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                    <h2>Location</h2>
                </div><!--location marker container-->
                <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2887.349470115585!2d-79.35678208442066!3d43.64089697912185!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89d4cb1edc1adaeb%3A0x7f0cc8bf3c3be45e!2s11+Polson+St%2C+Toronto%2C+ON+M5A+1A4!5e0!3m2!1sen!2sca!4v1491793278417" width="320" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div><!--map-->
                <div class="content-container">
                    <p>Ontario, Canada</p>
                    <p>11 Polson St</p>
                    <p>778-898-8165</p>
                </div>
            </div><!--map-content-container-->
        </section>
        <section class="gallery-section fadein">
            <h3 class="section-header">Gallery</h3>
            <span class="gallery-link-container">
                <a href="<?php echo get_post_type_archive_link('gallery_post_type')?>" class="gallery-link">See All Photos</a>
            </span>
            <ul class="gallery-list">
            <?php 
                $loop = new WP_query(array('post_type' => 'gallery_post_type', 'posts_per_page' => 4, 'orderby' => 'date')); 
            ?>
            <?php 
                while ( $loop -> have_posts() ) : $loop -> the_post(); 
            ?>
                <li class="gallery-image-container">
                    <div class="gallery-gradient"></div>
                    <?php the_post_thumbnail('full'); ?>
                </li>
            <?php 
                endwhile; 
            ?>
            </ul>
        </section>
        </main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
