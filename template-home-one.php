<?php
/**
 * Template name: Home 2
 */

get_header(); ?>
<section class="homepage singleblog cf">
    <section class="topfullslider cf">
        <div class="postsliderhome wrapper">
            <ul class="slides">
                <?php $slider = ale_sliders_get_slider(ale_get_meta('homeslugslider'));  ?>
                <?php if($slider):?>
                <?php foreach ($slider['slides'] as $slide) : ?>
                        <li>
                            <figure>
                                <img src="<?php echo $slide['image']; ?>" alt="<?php echo $slide['title']; ?>" />
                                <figcaption>
                                    <div class="sliderdata">
                                        <?php if($slide['title']){ ?>
                                            <div class="titleslide headerfont">
                                                <?php echo $slide['title']; ?>
                                            </div>
                                        <?php } ?>
                                        <?php if($slide['description']){ ?>
                                            <div class="descriptionslide">
                                                <?php echo $slide['description']; ?>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </figcaption>
                            </figure>
                        </li>
                    <?php endforeach; ?>
                <?php endif;?>
            </ul>
        </div>
        <div class="cf"></div>
    </section>
    <section class="fromblog">
        <div class="recentgallyhome wrapper">
            <div class="singlegallerytitle cf">
                <h2><?php _e('Recent from the Gallery', 'aletheme'); ?></h2>
                <div class="backbut">
                    <span class="gridbut selected"><?php _e('Grid','aletheme'); ?></span>
                    <span class="listbut"><?php _e('List','aletheme'); ?></span>
                </div>
            </div>

            <div id="post" class="gallerycont cf gridstyle">
                <?php query_posts('&post_type=gallery&posts_per_page='.ale_get_meta('galpergage')); if (have_posts()) : while (have_posts()) : the_post(); ?>
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
                <?php endif; wp_reset_query(); ?>
            </div>
        </div>
    </section>
    <section class="portfoliocat bothometext wrapper cf">
        <div class="titline headerfont">
            <h2><?php the_title(); ?></h2>
        </div>
        <div class="homewhitebox">
            <?php the_content(); ?>
            <div class="cf"></div>
            <div class="buttonabout cf">
                <a href="<?php echo ale_get_meta('aboutlink'); ?>" class="button"><?php _e('Take a tour','aletheme'); ?></a>
            </div>
        </div>
    </section>
</section>
<?php get_footer(); ?>