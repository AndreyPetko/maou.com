<?php get_header(); ?>
<div class="row">
	

	<div class="col-md-9">
		<div class="row article article-category">
			<div class="breadcrumbs-line">
				<div class="breadcrumbs">
					<ul>
						<?php the_breadcrumb();?>
					</ul>
				</div>
				
			</div>
			<div class="title">
				<p><?php single_cat_title() ?> </p>

			</div>
			
			<?php if ( have_posts() ) : ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<div class="col-sm-4 article-item">
						<a href="<?php the_permalink(); ?>">
							<p class="article-item-title"><?php the_title(); ?></p>

							<?php 
							if ( function_exists( 'add_theme_support' ) )
								the_post_thumbnail( array(250,9999), array('class' => 'img-school') ); 
							?>
						</a>
						<p class="article-date"><?php the_date(); ?></p>
						<p class="article-txt"><?php the_truncated_post( 220 ); ?></p>
						<div class="article-button">
							<a href="<?php the_permalink(); ?>">Читать дальше
							</a>
						</div>
					</div>
				<?php endwhile; ?>
			<?php endif;?>
			

		</div>


	</div>

	
	
	<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
</div>

<link rel="stylesheet" href="owl-carousel/owl.carousel.css">
<!-- <link rel="stylesheet" href="owl-carousel/owl.theme.css"> -->
<script src="owl-carousel/owl.carousel.js"></script>
</body>
</html>