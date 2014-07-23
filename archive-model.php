<?php get_header(); ?>
    <section class="singleblog wrapper cf">
        <div class="blogpostsgrid">
            <div id="post" class="modelsgrid cf">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <div class="moditem post">
                        <figure class="gallyfig">
                            <a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail($post->ID, 'model-grid'); ?></a>
                            <figcaption>
                                <a class="hovy" href="<?php the_permalink(); ?>"><span></span></a>
                                <div class="moddara">
                                    <div class="modtit headerfont"><?php the_title(); ?></div>
                                    <div class="modtext"><?php echo ale_get_meta('modprof'); ?></div>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                <?php endwhile; else: ?>
                <?php ale_part('notfound')?>
                <?php endif; ?>
            </div>
        </div>
    </section>
<?php get_footer(); ?>