<?php get_header(); ?>
    <?php 
        if ( have_posts() ) : the_post(); 
            $post_id = get_the_ID();
    ?>
        <section class="page-container clearfix">
            <div class="container">
                <div class="default-content">
                    <div class="postbox">
                        <h1><?php the_title(); ?></h1>
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>
<?php get_footer(); ?>