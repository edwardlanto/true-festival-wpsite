<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>
             <div class="header-container">
                <h3 class="section-header"><?php the_title(); ?></h3>
            </div><!--section header-->
            <div class="archive-header-container">
					<h2 class="archive-header"><?php the_title(); ?></h2>
				</div>
			<span class="image-container">
				<?php the_post_thumbnail('large'); ?>
                <div class="post-date-container">
                    <?php red_starter_posted_on(); ?>
                </div>
			</span>
			<div class="news-content-container">
				<?php the_content(); ?>
			</div>

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
