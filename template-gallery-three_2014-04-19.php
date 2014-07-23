<?php
/**
 * Template Name: Gallery 3 Columns
 */
get_header();
//Set the page ID
$gallery_page_id = $post->ID; ?>
<style>
    .isotope-item {
        z-index: 2;
    }

    .isotope-hidden.isotope-item {
        pointer-events: none;
        z-index: 1;
    }
</style>
<section class="singleblog wrapper cf">
    <?php if(ale_get_meta('sidebargallery')=='leftside'){
    ale_part('gallery-left-sidebar');
} elseif(ale_get_meta('sidebargallery')=='rightside') {
    ale_part('gallery-right-sidebar');
} ?>
    <div class="galleryarchive <?php if(ale_get_meta('sidebargallery')=='hideside') { echo "fullwidth"; } elseif(ale_get_meta('sidebargallery')=='leftside'){ echo "leftsidebaron"; } elseif(ale_get_meta('sidebargallery')=='rightside') { echo "rightsidebaron"; } ?>">
        <div class="singlegallerytitle halfpartleft">
            <h2><?php the_title(); ?></h2>
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
        <div id="galcontainer" class="threecolumnsgaly cf">
            <?php
            query_posts('&post_type=gallery&posts_per_page=-1');
            if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="element <?php $terms = get_the_terms($post->id, 'gallery-category'); foreach($terms as $itcat) { echo $itcat->slug.' ';} ?>">
                    <figure class="tubmapost">
                        <?php echo get_the_post_thumbnail($post->ID, 'gallery-two'); ?>
                        <figcaption class="firstbg">
                            <a href="<?php the_permalink(); ?>" ></a>
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