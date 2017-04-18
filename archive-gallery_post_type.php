<?php /* Template Name: gallery_post_type*/ ?>

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
			<div class="section-header">
				<h3>Gallery</h3>
			</div>
			<div class="gallery-list-container">
				<ul class="archive-gallery-list">
				<?php $loop = new WP_Query( array( 'post_type' => 'gallery_post_type', 'posts_per_page' => -1 ) ); ?>
				<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
					<li class="gallery-image-container gallery-breakpoint">
						<?php
							the_post_thumbnail('large');
						?>
					</li>
				<?php endwhile; wp_reset_query(); ?>
				</ul><!--archive-gallery-list-->
			</div>
			<div class="popup-container">
				<div class="x-button"></div>
				<div class="gallery-popup-container"></div><!--gallery-popup-container-->
			</div><!--popup-container-->
			<section class="small-gallery-section">
				<div class="photos-header-container">
					<h2 class="photos-header">Photos</h2>
				</div>
				<div section class="small-gallery-container">
					<ul class="small-gallery-list">
					<?php $loop = new WP_Query( array( 'post_type' => 'gallery_post_type', 'posts_per_page' => -1 ) ); ?>
					<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
						<li class="small-gallery-item">
							<?php
								the_post_thumbnail('large');
							?>
						</li>
					<?php endwhile; wp_reset_query(); ?>
					</ul>
				</div><!--small-gallery-container-->
			</section>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
