<?php /* Template Name: Artists*/ ?>
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
				<div class="archive-header-container">
					    <h2 class="archive-header">Main Stage</h2>
				</div>
				<div class="artist-section-header">
					<h1 class="section-header">Main Stage</h1>
				</div>
				<section class="main-artists-wrapper">
					<ul class="main-artists-list">
					<?php
					$args  = array(
					'posts_per_page'  => -1,
					'category'        => 4,
					'orderby'         => 'post_date',
					'order'           => 'ASC',
					'post_type'       => 'artist_post_type' );
					$posts = get_posts($args);
					foreach ($posts as $post) :
					?>
					<div class="black-background">
						<li class="artist-list-item">
							<div class="flip-container">
								<div class="flip-cards">
									<div class="front-flip">
										<h3><?php the_title(); ?></h3>
										<div><?php the_post_thumbnail('large'); ?></div>
									</div><!--front-flip-->
									<div class="back-flip">
										<div>
											<?php the_post_thumbnail('large') ?>
											<i class="fa fa-facebook-square" aria-hidden="true"></i>
											<i class="fa fa-instagram" aria-hidden="true"></i>
											<i class="fa fa-twitter" aria-hidden="true"></i>
                            			</div>
										<div><?php the_post_thumbnail('large') ?></div>
									</div><!--back-flip-->
								</div><!--flip-cards-->
							</div><!--flip-container-->
						</li>
					</div>
					<?php endforeach; ?>
				</ul>
				</section>
				<div class="archive-header-container">
					<h2 class="archive-header">Fusion Stage</h2>
				</div>
				<div class="artist-section-header">
					<h1 class="section-header">Fusion Stage</h1>
				</div>
				<section class="secondary-artists-wrapper">
					<ul class="secondary-artists-list">
					<?php
					$args  = array(
					'posts_per_page'  => -1,
					'category'        => 5,
					'orderby'         => 'post_date',
					'order'           => 'ASC',
					'post_type'       => 'artist_post_type' );
					$posts = get_posts($args);
					foreach ($posts as $post) :
					?>
					<div class="black-background">
						<li class="artist-list-item">
							<div class="flip-container">
								<div class="flip-cards">
									<div class="front-flip">
										<h3><?php the_title(); ?></h3>
										<div><?php the_post_thumbnail('large'); ?></div>
									</div><!--front-flip-->
									<div class="back-flip">
										<div><?php the_post_thumbnail('large') ?></div>
										<div class="artist-icon-container">
											<i class="fa fa-facebook-square" aria-hidden="true"></i>
											<i class="fa fa-instagram" aria-hidden="true"></i>
											<i class="fa fa-twitter" aria-hidden="true"></i>
                            			</div>
									</div><!--back-flip-->
								</div><!--flip-cards-->
							</div><!--flip-container-->
						</li>
					</div>
					<?php endforeach; ?>
				</ul>
			</section>


		</main><!-- #main -->
	</div><!-- #primary -->

