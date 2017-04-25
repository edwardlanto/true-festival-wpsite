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
				<h3>Media</h3>
			</div>
			<div class="gallery-list-container">
				<img src="<?php echo get_template_directory_uri(); ?>/images/escape-logo-marble.jpg" class="media-logo">
				<img src="<?php echo get_template_directory_uri(); ?>/images/party-background.jpg" class="media-background">
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
				<div class="archive-header-container">
					<h2 class="archive-header">Photos</h2>
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
			 <nav class="social">
            <ul>
                <li><a href="https://twitter.com/eescapecanada">Twitter <i class="fa fa-twitter"></i></a></li>
                <li><a href="https://www.facebook.com/electricescapeevents">Facebook <i class="fa fa-facebook"></i></a></li>
                <li><a href="https://www.youtube.com/channel/UC7pLTJmlcQbBGIoOR0BoXgw">Youtube <i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                <li><a href="https://www.instagram.com/electric_escape/">Instagram <i class="fa fa-instagram" aria-hidden="true"></i></a></li>
            </ul>
      		</nav>
			<section class="social-media-section">
				<div class="section-header">
					<h3>Social Media</h3>
				</div>
				<div class="sidebar">
					<div class="social-header-container">
						<h2 class="social-header">Instagram</h2>
						<i class="fa fa-instagram" aria-hidden="true"></i>
					</div>
					<?php get_sidebar(); ?>
				</div>
			</section>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
