<?php get_header(); ?>
<section class="singleblog wrapper cf">
    <?php if(ale_get_option('blogpages')=='2c-l-fixed'){
    ale_part('blog-left-sidebar');
} elseif(ale_get_option('blogpages')=='2c-r-fixed') {
    ale_part('blog-right-sidebar');
} ?>
    <div id="post" class="blogpostsgrid content <?php if(ale_get_option('blogpages')=='1col-fixed') { echo "fullwidth"; } elseif(ale_get_option('blogpages')=='2c-l-fixed'){ echo "leftsidebaron"; } elseif(ale_get_option('blogpages')=='2c-r-fixed') { echo "rightsidebaron"; } ?>">
        <div class="blogarchivetitle">
            <h2><?php _e('Archives','aletheme'); ?></h2>
        </div>
        <div class="isogridblog">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <?php ale_part('posthead');?>
                <?php ale_part('postpreviewmain' );?>
                <?php ale_part('postfooter');?>
            <?php endwhile; else: ?>
                <?php ale_part('notfound')?>
            <?php endif; ?>
        </div>
    </div>


</section>
<?php get_footer(); ?>