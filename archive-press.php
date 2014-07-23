<?php get_header(); ?>
<section class="singleblog wrapper cf">
    <div class="blogpostsgrid">
        <div id="post" class="pressgrid cf">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="post itempress cf">
                    <figure class="tubmapost lefttumbpress">
                        <?php echo get_the_post_thumbnail($post->ID, 'gallery-two'); ?>
                        <figcaption class="firstbg">
                            <a href="<?php the_permalink(); ?>"></a>
                        </figcaption>
                    </figure>
                    <div class="rightpress">
                        <div class="pretitle">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </div>
                        <div class="adidata">
                            <?php if(ale_get_meta('pretypeval')) {?>
                                <strong><?php echo ale_get_meta('pretit'); ?></strong>: <?php echo ale_get_meta('pretypeval'); ?>
                            <?php } ?><br />
                            <?php if(ale_get_meta('predateval')) {?>
                                <strong><?php echo ale_get_meta('predate'); ?></strong>: <?php echo ale_get_meta('predateval'); ?>
                            <?php } ?><br />
                            <?php if(ale_get_meta('premagval')) {?>
                                <strong><?php echo ale_get_meta('premag'); ?></strong>: <?php echo ale_get_meta('premagval'); ?>
                            <?php } ?><br />
                            <?php if(ale_get_meta('preratval')) {?>
                                <strong><?php echo ale_get_meta('prerat'); ?></strong>: <?php echo ale_get_meta('preratval'); ?>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            <?php endwhile; else: ?>
            <?php ale_part('notfound')?>
            <?php endif; ?>
        </div>
    </div>
</section>
<?php get_footer(); ?>