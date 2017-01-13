

<div class="article-coments">
	<?php if (have_posts()) : while (have_posts()) : the_post();
	update_post_caches($posts); ?>
	<?php wp_list_comments('type=comment&callback=custom_comment'); ?>
<?php endwhile; endif; ?>
<?php //wp_list_comments(); ?>
</div>


<div class="leave-coment">

	<div class="article-coments-image">
	</div>
	<div class="leave-coment-right">
		<?php comment_form(); ?>
	</div>
</div>