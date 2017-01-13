<?php get_header(); ?>

<div class="row">


	<div class="col-md-9">
		<?php if(have_posts()) : ?>
			<?php while(have_posts()) : the_post(); ?>

				<div class="row article article-category">
					<div class="breadcrumbs-line">
						<div class="breadcrumbs">
							<ul>
								<?php the_breadcrumb();?>
								
							</ul>
						</div>
						
					</div>
					<div class="title">
						<p><?php the_title(); ?></p>
						<div class="title-button">
							<?php the_date(); ?>
						</div>

					</div>
					<div class="article-content">
					<div class="author">
					Автор статьи: <?php the_author(); ?>
					</div>
					<div class="clear"></div>

						<?php the_content(); ?>
					</div>

				</div>

			<?php endwhile; ?>
		<?php endif; ?>



		<div class="article">
			<div class="title">
				<p>Похожие статьи</p>
				<!-- <a href="category.html">
					<div class="title-button">
						Все статьи
					</div>
				</a> -->
			</div>
			<div class="row">
				<?php
				$category = get_the_category(); 
				$catcat = $category[0]->cat_ID;
				$postidid = get_the_ID();
				
				?>
				<?php $news = new WP_query(); $news->query('showposts=5&cat='.$catcat.'&post__not_in[]='.$postidid.''); ?>
				<?php while ($news->have_posts()) : $news->the_post(); ?>
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
			</div>
		</div>
	</div>
	


	<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>