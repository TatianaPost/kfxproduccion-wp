<?php get_header(); ?>
<section class="singleblog wrapper cf">
    <div class="blogpostsgrid">
        <div id="post" class="pressgrid cf">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="post itemdiary cf">
                <?php echo get_the_post_thumbnail($post->ID,'diary-img'); ?>
                <div class="diarymask">
                    <div class="diatitle headerfont"><?php the_title(); ?></div>
                    <div class="diatext">
                        <div class="extext">
                            <p><?php echo ale_truncate(get_the_excerpt(),400); ?></p>
                        </div>
                        <div class="addite">
                        <?php if(ale_get_meta('dianame')){ echo "<strong>".ale_get_meta('diatit')."</strong>: ".ale_get_meta('dianame');} ?><br />
                        <?php if(ale_get_meta('diaageval')){ echo "<strong>".ale_get_meta('diaaga')."</strong>: ".ale_get_meta('diaageval');} ?><br />
                        <?php if(ale_get_meta('diadateval')){ echo "<strong>".ale_get_meta('diadate')."</strong>: ".ale_get_meta('diadateval');} ?><br />
                        </div>
                    </div>
                    <div class="diamore">
                        <a href="<?php the_permalink(); ?>" class="button"><?php _e('Read More','aletheme'); ?></a>
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