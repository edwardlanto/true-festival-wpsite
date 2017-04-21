<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
	<div class="page-container">
		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">
                <div class="news-page-background"></div>
				<?php if ( have_posts() ) : ?>
				<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
				<?php endif; ?>
                <div class="article-wrapper">
                    <div class="archive-header-container">
					    <h2 class="archive-header">News</h2>
				    </div>
                    <?php while ( have_posts() ) : the_post(); ?>
                    <article class="article-container">
                        <div class="image-title-container">
                            <?php the_post_thumbnail('large'); ?>
                            <h1 class="news-title"><?php the_title(); ?></h1>
                        </div>
                        <div class="dropdown-wrapper">
                            <div class="read-more-dropdown">
                            <h1 class="dropdown-button read-more">Read More</h1>
                            <div class="dropdown-container mobile-dropdown">
                                <p class="news-content"><?php the_content(); ?></p>
                            </div>
                        </div>
                    </article>
                    <?php endwhile; ?>
                </div>
				<?php the_posts_navigation(); ?>
				<?php else : ?>
				<?php get_template_part( 'template-parts/content', 'none' ); ?>
				<?php endif; ?>
                <?php get_footer(); ?>
			</main><!-- #main -->
		</div><!-- primary-->
	</div><!-- page-container -->

