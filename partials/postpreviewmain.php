<header class="blogprev cf">

    <div class="boxer cf">
        <?php if (has_post_format('gallery') == false and has_post_format('image') == false and has_post_format('video') == false) : ?>
            <figure class="tubmapost">
                <?php echo get_the_post_thumbnail($post->ID, 'gallery-two'); ?>
                <?php if(!is_single()) { ?>
                    <figcaption class="firstbg">
                        <a href="<?php the_permalink(); ?>"></a>
                    </figcaption>
                <?php } ?>
            </figure>
        <?php endif; ?>
        <?php if (has_post_format('gallery')) : ?>
            <div class="postslider ta">
                <ul class="slides">
                    <?php foreach(ale_get_attached_images() as $image):?>
                        <li class="slimage"><?php echo wp_get_attachment_image($image->ID, 'gallery-two')?></li>
                    <?php endforeach;?>
                </ul>
            </div>
        <?php elseif (has_post_format('image')): ?>
            <figure class="tubmapost">
                <?php echo get_the_post_thumbnail($post->ID, 'gallery-two'); ?>
                <?php if(!is_single()) { ?>
                    <figcaption class="firstbg">
                        <a href="<?php the_permalink(); ?>"></a>
                    </figcaption>
                <?php } ?>
            </figure>
        <?php elseif (has_post_format('video')): ?>
            <div class="siglepostvide">
                <?php
                if(ale_get_meta('videopostlink')){
                    echo wp_oembed_get(ale_get_meta('videopostlink'), array('width'=>300));
                } else {
                    echo "Please, add the video link in the video field.";
                }
                ?>
            </div>
        <?php endif; ?>
    </div>
    <div class="itempostpre cf">
        <div class="posttitle">
            <a href="<?php the_permalink(); ?>"><?php the_title();?></a>
        </div>
        <div class="excertpbox">
            <?php echo ale_truncate(get_the_excerpt(),200); ?>
        </div>
        <div class="itempostbot">
            <span class="date"><?php echo get_the_date(); ?></span>&nbsp; | &nbsp;
            <span class="cat"><?php echo the_category(', '); ?></span>&nbsp; | &nbsp;
            <span class="commen"><?php echo get_comments_number($post->ID); ?></span>
        </div>
    </div>
</header>