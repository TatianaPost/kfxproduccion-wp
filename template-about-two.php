<?php
/**
 * Template Name: Template About 2
 */
get_header(); ?>
<section class="singleblog aboutpagetwo cf">
    <div class="blogpostsgrid">
        <div class="wrapper cf">
            <div class="content wrapper cf">
                <div class="contacttop cf">
                <div class="leftsinglebox">
                    <div class="aboutpageslise slideabouttwo cf">
                        <div class="postslider">
                            <ul class="slides">
                                <?php $slider = ale_sliders_get_slider(ale_get_meta('aboutsliderslug'));  ?>
                                <?php if($slider):?>
                                <?php foreach ($slider['slides'] as $slide) : ?>
                                    <li>
                                        <figure>
                                            <?php if ($slide['image']) : ?>
                                                <?php if($slide['url']){ echo '<a href="'.$slide['url'].'">'; } ?><img src="<?php echo $slide['image'] ?>" alt="<?php echo $slide['title']; ?>" /><?php if($slide['url']){ echo '</a>'; } ?>
                                            <?php endif; ?>
                                            <?php if($slide['title']){ ?>
                                                <figcaption class="aboutpagetitleslide">
                                                    <?php echo '<div class="tito headerfont">'.$slide['title'].'</div>';  ?>
                                                </figcaption>
                                            <?php } ?>
                                        </figure>
                                    </li>
                                    <?php endforeach; ?>
                                <?php endif;?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="abatext">
                    <div class="titl">
                        <?php the_title(); ?>
                    </div>
                    <div>
                        <?php
                        if (have_posts()) : while (have_posts()) : the_post();
                            the_content();
                        endwhile; endif;
                        ?>
                    </div>
                </div>
            </div>
            </div>
        </div>
        <section class="partners">
            <div class="wrapper">
                <div class="linetop cf">
                    <div class="itempar">
                        <a href="<?php echo ale_get_meta('ptlink1'); ?>" target="_blank"><img src="<?php echo ale_get_meta('ptimg1'); ?>" alt="Partner"/> </a>
                    </div>
                    <div class="itempar">
                        <a href="<?php echo ale_get_meta('ptlink2'); ?>" target="_blank"><img src="<?php echo ale_get_meta('ptimg2'); ?>" alt="Partner"/> </a>
                    </div>
                    <div class="itempar">
                        <a href="<?php echo ale_get_meta('ptlink3'); ?>" target="_blank"><img src="<?php echo ale_get_meta('ptimg3'); ?>" alt="Partner"/> </a>
                    </div>
                    <div class="itempar">
                        <a href="<?php echo ale_get_meta('ptlink4'); ?>" target="_blank"><img src="<?php echo ale_get_meta('ptimg4'); ?>" alt="Partner"/> </a>
                    </div>
                </div>
                <div class="linebottom cf">
                    <div class="itempar">
                        <a href="<?php echo ale_get_meta('ptlink5'); ?>" target="_blank"><img src="<?php echo ale_get_meta('ptimg5'); ?>" alt="Partner"/> </a>
                    </div>
                    <div class="itempar">
                        <a href="<?php echo ale_get_meta('ptlink6'); ?>" target="_blank"><img src="<?php echo ale_get_meta('ptimg6'); ?>" alt="Partner"/> </a>
                    </div>
                    <div class="itempar">
                        <a href="<?php echo ale_get_meta('ptlink7'); ?>" target="_blank"><img src="<?php echo ale_get_meta('ptimg7'); ?>" alt="Partner"/> </a>
                    </div>
                    <div class="itempar">
                        <a href="<?php echo ale_get_meta('ptlink8'); ?>" target="_blank"><img src="<?php echo ale_get_meta('ptimg8'); ?>" alt="Partner"/> </a>
                    </div>
                </div>
            </div>
        </section>
    </div>
</section>
<?php get_footer(); ?>