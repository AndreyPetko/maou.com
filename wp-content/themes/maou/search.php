<?php get_header(); ?>
<div class="row">
    <div class="col-md-9">

        <div class="article">
            <div class="title">
                <p>Результаты поиска</p>

            </div>

            <div class="row">
          <!--       <div class="search-form ">
                <form role="search" method="get" id="searchform" class="searchform" action="/">
                    <input placeholder="Поиск" name="s" type="text">
                    <input type="submit" value="">

                </form>
                </div> -->
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
                <?php else: ?>
                    <div class="alert alert-error">Поиск не дал результатов</div>
                <?php endif;?>
            </div>
        </div>



    </div>
    <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>