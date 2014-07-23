<?php
/**
 * Template name: Blog Full Width
 */
get_header(); ?>
    <section class="singleblog wrapper cf">
        <?php if(ale_get_meta('sidebarblog')=='leftside'){
            ale_part('blog-left-sidebar');
        } elseif(ale_get_meta('sidebarblog')=='rightside') {
            ale_part('blog-right-sidebar');
        } ?>
        <div id="post" class="blogpostsgrid fullwidthgrid content <?php if(ale_get_meta('sidebarblog')=='hideside') { echo "fullwidth"; } elseif(ale_get_meta('sidebarblog')=='leftside'){ echo "leftsidebaron"; } elseif(ale_get_meta('sidebarblog')=='rightside') { echo "rightsidebaron"; } ?>">
            <div class="blogarchivetitle">
                <h2><?php the_title(); ?></h2>
            </div>
            <div class="isogridblog">
                <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                query_posts('&post_type=post&paged='.$paged);
                if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <?php ale_part('posthead');?>
                    <?php ale_part('postpreview' );?>
                    <?php ale_part('postfooter');?>
                <?php endwhile; else: ?>
                    <?php ale_part('notfound')?>
                <?php endif; ?>
            </div>
        </div>


    </section>
<?php get_footer(); ?>