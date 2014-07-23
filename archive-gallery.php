<?php get_header(); ?>
<section class="singleblog wrapper cf">
    <?php if(ale_get_option('gallerypages')=='2c-l-fixed'){
        ale_part('gallery-left-sidebar');
    } elseif(ale_get_option('gallerypages')=='2c-r-fixed') {
        ale_part('gallery-right-sidebar');
    } ?>
    <div class="galleryarchive <?php if(ale_get_option('gallerypages')=='1col-fixed') { echo "fullwidth"; } elseif(ale_get_option('gallerypages')=='2c-l-fixed'){ echo "leftsidebaron"; } elseif(ale_get_option('gallerypages')=='2c-r-fixed') { echo "rightsidebaron"; } ?>">
        <div class="singlegallerytitle">
            <h2><?php _e('The Gallery', 'aletheme'); ?></h2>
            <div class="backbut">
                <span class="gridbut selected"><?php _e('Grid','aletheme'); ?></span>
                <span class="listbut"><?php _e('List','aletheme'); ?></span>
            </div>
        </div>
        <div id="post" class="gallerycont cf gridstyle">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="post element tumba">
                    <figure class="gallyfig">
                        <?php echo get_the_post_thumbnail($post->ID, 'gallery-patrat'); ?>
                        <figcaption>
                            <a class="hovy" href="<?php the_permalink(); ?>"><span></span></a>
                            <div class="galleryitemdata">
                                <div class="title"><a href="<?php echo the_permalink(); ?>"><?php echo ale_truncate(get_the_title(),20); ?></a> </div>
                                <div class="text"><?php _e('Photos','aletheme'); ?>:
                                    <?php
                                    $args = array(
                                        'post_type' => 'attachment',
                                        'numberposts' => -1,
                                        'post_status' => null,
                                        'order'				=> 'ASC',
                                        'orderby'			=> 'menu_order ID',
                                        'meta_query'		=> array(
                                            array(
                                                'key'		=> '_ale_hide_from_gallery',
                                                'value'		=> 0,
                                                'type'		=> 'DECIMAL',
                                            ),
                                        ),
                                        'post_parent' => $post->ID
                                    );
                                    $attachments = get_posts( $args );

                                    echo count($attachments); ?>

                                    &nbsp;
                                    <?php _e('Comments','aletheme'); ?>: <?php echo get_comments_number($post->ID); ?></div>
                            </div>
                        </figcaption>
                    </figure>
                    <div class="rightgally">
                        <div class="catdiv">
                            <?php
                            _e('Category:','aletheme');
                            $current_category = wp_get_post_terms($post->ID, 'gallery-category', array("fields" => "all"));
                            foreach($current_category as $curcat){
                                echo ' '.$curcat->name.' &nbsp; ';
                            }
                            ?>
                            /&nbsp;
                            <?php _e('Posted on:','aletheme'); echo ' '.get_the_date(); ?>
                        </div>
                        <div class="gallyexcerpt cf">
                            <?php echo the_excerpt(); ?>
                        </div>
                        <div class="readmore cf">
                            <a href="<?php the_permalink(); ?>" class="button"><?php _e('Take a look','aletheme'); ?></a>
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