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
						<div id="doc-button">
							Нормативные документы
						</div>
					</div>
					<div class="title">
						<p><?php the_title(); ?></p>

					</div>
					<div class="article-content">

						<?php the_content(); ?>
					</div>

				</div>
			<?php endwhile; ?>
		<?php endif; ?>

		<div class="coments">
			<div class="coments-title">
				 <p>Комментарии</p>
			</div>
			<div class="coments-div">
<!-- 				<div class="coment-item">
					<div class="left-block">
						<div class="coment-name">
							Ирина
						</div>
						<div class="date">
							<p>10 октября 2016</p>
						</div>
					</div>
					<div class="coment-txt">
						<p>Donec rhoncus sapien vel nulla commodo semper. Maecenas ex dui, scelerisque vel ipsum sed, porttitor lobortis lacus. In hac habitasse platea dictumst. 
						</p>
					</div>
				</div>
				<div class="coment-item">
					<div class="left-block">
						<div class="coment-name">
							Ирина
						</div>
						<div class="date">
							<p>10 октября 2016</p>
						</div>
					</div>
					<div class="coment-txt">
						<p>Donec rhoncus sapien vel nulla commodo semper. Maecenas ex dui, scelerisque vel ipsum sed, porttitor lobortis lacus. In hac habitasse platea dictumst. 
						</p>
					</div>
				</div>
				<div class="coment-item">
					<div class="left-block">
						<div class="coment-name">
							Ирина
						</div>
						<div class="date">
							<p>10 октября 2016</p>
						</div>
					</div>
					<div class="coment-txt">
						<p>Donec rhoncus sapien vel nulla commodo semper. Maecenas ex dui, scelerisque vel ipsum sed, porttitor lobortis lacus. In hac habitasse platea dictumst. 
						</p>
					</div>
				</div> -->
			</div>
			<div class="add-coment">
				<div class="title">
					Добавить комментарий
				</div>
				<div class="form">
					<div class="form-left">
						<?php comments_template(); ?>
					</div>
				</div>
			</div>
		</div>


		<div class="article">
			<div class="title">
				<p>Похожие статьи</p>
				<a href="category.html">
					<div class="title-button">
						Все статьи
					</div>
				</a>
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
						<p class="article-date">10 октября 2016</p>
						<p><?php the_truncated_post( 320 ); ?></p>
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