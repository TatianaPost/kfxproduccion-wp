<?php get_header(); ?>
<section class="singleblog wrapper cf">
    <?php if(ale_get_option('blogpages')=='2c-l-fixed'){
    ale_part('blog-left-sidebar');
} elseif(ale_get_option('blogpages')=='2c-r-fixed') {
    ale_part('blog-right-sidebar');
} ?>
    <div id="post" class="content <?php if(ale_get_option('blogpages')=='1col-fixed') { echo "fullwidth"; } elseif(ale_get_option('blogpages')=='2c-l-fixed'){ echo "leftsidebaron"; } elseif(ale_get_option('blogpages')=='2c-r-fixed') { echo "rightsidebaron"; } ?>">
        <div class="blogarchivetitle">
            <h2><?php echo single_cat_title("", false); ?></h2>
        </div>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php ale_part('posthead');?>
        <p style="text-align: center;">
            <a href="<?php echo wp_get_attachment_url($post->ID); ?>"><?php echo wp_get_attachment_image( $post->ID, 'full' ); ?></a>
        </p>
        <?php the_content(); ?>
        <footer>
            <nav class="prev-next-links cf">
                <span class="prev"><?php previous_image_link(false, __('Previous Image', 'aletheme')) ?></span> /
                <span class="next"><?php next_image_link(false, __('Next Image', 'aletheme')) ?></span>
            </nav>
        </footer>
        <?php ale_part('postfooter');?>
        <?php endwhile; else: ?>
        <?php ale_part('notfound')?>
        <?php endif; ?>
    </div>


</section>
<?php get_footer(); ?>