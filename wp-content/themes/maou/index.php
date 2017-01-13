<?php get_header(); ?>
<div class="row">
	<div class="col-md-9">
		<div id="owl-demo" class="owl-carousel owl-theme">
		<?php 
			$images = getSliderImages();

			foreach ($images as $key => $image) {
				echo "<div class='item'><img src='";
				echo $image;
				echo "'></div>";
			}
		?>
			
		</div>
		<div class="information">
			<div class="row">

				<?php $the_query = new WP_Query('p=68'); ?>
				<?php while  ($the_query->have_posts() ) : $the_query->the_post(); ?>
					<h5><?php the_title(); ?></h5>
					<p><?php the_truncated_post( 320 ); ?></p>
				<?php endwhile; ?>
				<?php wp_reset_postdata();?>
				

				<div class="col-md-5">
				<?php showPostItemById(356, 'img') ?>
				</div>
				<div class="col-md-7">
					<h5><?php showPostItemById(356, 'title') ?> </h5>
					<p><?php showPostItemById(356, 'content') ?>  </p>
				</div>

			</div>
		</div>
		<div class="article">
			<div class="title">
				<p>Последние новости</p>
				<!-- <a href="/category/news/">
					<div class="title-button">
						Все новости
					</div>
				</a> -->
			</div>
			<div class="row">
				<?php if ( have_posts() ) : ?>
					<?php
					$id=3;
					$n=3;
					$recent = new WP_Query("cat=$id&showposts=$n"); 
					while($recent->have_posts()) : $recent->the_post();
					?>
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
	<div class="information">
		<div class="row">
			<div class="col-md-5">
				<?php showPostItemById(358, 'img') ?>
			</div>
			<div class="col-md-7">
				<h5><?php showPostItemById(358, 'title') ?> </h5>
				<p><?php showPostItemById(358, 'content') ?>  </p>
			</div>

		</div>
	</div>
	<div class="article">
		<div class="title">
			<p>Для родителей</p>
			<a href="http://school1selenga.ru/category/деятельность/dlya-vas-roditeli/">
				<div class="title-button">
					Все статьи
				</div>
			</a>
		</div>
		<div class="row">
			<?php if ( have_posts() ) : ?>
				<?php
				$id=26;
				$n=3;
				$recent = new WP_Query("cat=$id&showposts=$n"); 
				while($recent->have_posts()) : $recent->the_post();
				?>
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


</div>
<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>

</div>


<link rel="stylesheet" href="/wp-content/themes/maou/owl-carousel/owl.carousel.css">
<script src="/wp-content/themes/maou/owl-carousel/owl.carousel.js"></script>
<script src="/wp-content/themes/maou/js/form.js"></script>
</body>
</html>