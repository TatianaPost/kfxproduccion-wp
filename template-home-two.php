<?php
/**
 * Template name: Home 3,4,5
 */

get_header(); ?>
<section class="homepage singleblog cf">
    <section class="topfullslider cf">
        <div class="newhomeslider wrapper">
            <ul class="slides">
                <?php $slider = ale_sliders_get_slider(ale_get_meta('homeslugmore'));  ?>
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
    </section>
    <section class="welcome wrapper cf">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="weltitle headerfont">
                <?php the_title(); ?>
            </div>
            <div class="weldesc">
                <?php the_content(); ?>
            </div>
            <?php if(ale_get_meta('aboutlink')){ ?>
                <div class="buttonabout">
                    <a href="<?php echo ale_get_meta('aboutlink'); ?>" class="button"><?php _e('Take a tour','aletheme'); ?></a>
                </div>
            <?php } ?>
        <?php endwhile; endif; ?>
    </section>
    <section class="fromblog">
        <div class="recentgallyhome wrapper cf">
            <div class="singlegallerytitle halfpartleft">
                <h2><?php _e('Recent from the Gallery', 'aletheme'); ?></h2>
            </div>
            <div class="filterbox halfpartright">
                <ul id="filters">
                    <li class="activefilter"><a href="#" data-filter="*" class="button"><?php _e('Show all', 'aletheme')?></a></li>
                    <?php $args = array(
                    'type'                     => 'gallery',
                    'child_of'                 => 0,
                    'parent'                   => '',
                    'orderby'                  => 'name',
                    'order'                    => 'ASC',
                    'hide_empty'               => 1,
                    'hierarchical'             => 1,
                    'exclude'                  => '',
                    'include'                  => '',
                    'number'                   => '',
                    'taxonomy'                 => 'gallery-category',
                    'pad_counts'               => false );

                    $categories = get_categories( $args );

                    foreach($categories as $cat){
                        echo '<li><a href="#" data-filter=".'.$cat->slug.'" class="button">'.$cat->name.'</a></li>';
                    }
                    ?>

                </ul>
            </div>
            <div class="cf"></div>
            <div id="galcontainer" class="<?php if(ale_get_meta('galhomemorestyle')=='twocol'){ echo "twocolumnsgaly";} elseif(ale_get_meta('galhomemorestyle')=='threecol'){ echo "threecolumnsgaly"; } elseif(ale_get_meta('galhomemorestyle')=='fourcol'){ echo "fourcolumnsgaly"; } ?> cf">
                <?php
                query_posts('&post_type=gallery&posts_per_page='.ale_get_meta('galpergagemore'));
                if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <div class="element <?php $terms = get_the_terms($post->id, 'gallery-category'); foreach($terms as $itcat) { echo $itcat->slug.' ';} ?>">
                        <figure class="tubmapost">
                            <?php echo get_the_post_thumbnail($post->ID, 'gallery-two'); ?>
                            <figcaption class="firstbg">
                                <a href="<?php the_permalink(); ?>" class="headerfont"></a>
                            </figcaption>
                        </figure>
                    </div>
                    <?php endwhile; else: ?>
                    <?php ale_part('notfound')?>
                    <?php endif;  wp_reset_query(); ?>
            </div>

        </div>
    </section>

</section>
<?php get_footer(); ?>