<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">


			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<ul class="archive-gallery-list">
			<?php while ( have_posts() ) : the_post(); ?>
				<li class="gallery-image-container">
					<?php
						the_post_thumbnail('large');
					?>
				</li>
			<?php endwhile; ?>
			</ul>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
