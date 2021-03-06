<?php
/*
 * Template name: Home 1
 */

get_header(); ?>
<section class="homepage cf">
    <section class="topfullslider cf">
		<?php putRevSlider("pagina-principal","homepage") ?> 
    </section>
    <section class="welcome wrapper cf">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="weltitle headerfont">
                <?php the_title(); ?>
            </div>
            <div class="weldesc">
                <?php the_content(); ?>
            </div>
         <?php endwhile; endif; ?>
    </section>
    <section class="fromblog">
        <div class="wrapper cf">
            <div class="titlefromblog">
                <div class="tit headerfont">
                    <?php _e('Repotajes<br />recientes','aletheme'); ?>
                </div>
                <div class="sliderarrows">
                    <div class="custom-direction-nav"></div>
                </div>
            </div>
            <div class="blogitems">
                <div class="recentblogslide">
                    <ul class="slides">
                        <?php wp_reset_query(); query_posts('&post_type=post&posts_per_page=9&post_status=publish&ignore_sticky_posts=1'); ?>
                        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                            <li>
                                <div class="itemblo">
                                    <figure class="tubmapost">
                                        <a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail($post->ID,'gallery-minitumba'); ?></a>
                                        <figcaption>
                                            <a href="<?php the_permalink(); ?>"></a>
                                        </figcaption>
                                    </figure>
                                    <div class="title"><a href="<?php the_permalink(); ?>"><?php echo ale_truncate(get_the_title(),25); ?></a></div>
                                    <div class="date"><?php echo get_the_date(); ?></div>
                                </div>
                            </li>
                        <?php endwhile; endif; ?>
                    </ul>
                </div>
            </div>

        </div>
    </section>
    <section class="portfoliocat">
        <div class="wrapper cf">
            <div class="titlebox headerfont">
                <?php _e('Testimonios','aletheme'); ?>
            </div>
            <?php wp_reset_query(); global $query_string; query_posts($query_string); ?>
            <div class="reviews cf">
                <div class="itemsrev cf">
                    <div class="rightrevpart cf">
                        <div class="leftrevpart"></div>
                        <div class="reviewslide">
                            <ul class="slides">
                                <li><?php echo ale_get_meta('review1'); ?></li>
                                <li><?php echo ale_get_meta('review2'); ?></li>
                                <li><?php echo ale_get_meta('review3'); ?></li>
                                <li><?php echo ale_get_meta('review4'); ?></li>
                            </ul>
                        </div>
                        <div class="revarrows">
                            <div class="rev-nav"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cf"></div>
            <div class="portfolioboxes">

                <div class="leftportbox">
                    <div class="portmask">
                        <a href="<?php echo ale_get_meta('plink1'); ?>"><img src="<?php echo ale_get_meta('pimg1'); ?>" alt="<?php echo ale_get_meta('pctit1'); ?>" /></a>
                        <div class="masking">
                            <a href="<?php echo ale_get_meta('plink1'); ?>"></a>
                            <div class="textdata">
                                <div class="title headerfont"><?php echo ale_get_meta('pctit1'); ?></div>
                                <div class="descr"><?php echo ale_get_meta('pdesc1'); ?></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="rightportbox">
                    <div class="topimg">
                        <div class="portmask">
                            <a href="<?php echo ale_get_meta('plink2'); ?>"><img src="<?php echo ale_get_meta('pimg2'); ?>" alt="<?php echo ale_get_meta('pctit2'); ?>" /></a>
                            <div class="masking">
                                <a href="<?php echo ale_get_meta('plink2'); ?>"></a>
                                <div class="textdata">
                                    <div class="title headerfont"><?php echo ale_get_meta('pctit2'); ?></div>
                                    <div class="descr"><?php echo ale_get_meta('pdesc2'); ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bottomimg cf">
                        <div class="portmask">
                            <a href="<?php echo ale_get_meta('plink3'); ?>"><img src="<?php echo ale_get_meta('pimg3'); ?>" alt="<?php echo ale_get_meta('pctit3'); ?>" /></a>
                            <div class="masking">
                                <a href="<?php echo ale_get_meta('plink3'); ?>"></a>
                                <div class="textdata">
                                    <div class="title headerfont"><?php echo ale_get_meta('pctit3'); ?></div>
                                    <div class="descr"><?php echo ale_get_meta('pdesc3'); ?></div>
                                </div>
                            </div>
                        </div>
                        <div class="portmask">
                            <a href="<?php echo ale_get_meta('plink4'); ?>"><img src="<?php echo ale_get_meta('pimg4'); ?>" alt="<?php echo ale_get_meta('pctit4'); ?>" /></a>
                            <div class="masking">
                                <a href="<?php echo ale_get_meta('plink4'); ?>"></a>
                                <div class="textdata">
                                    <div class="title headerfont"><?php echo ale_get_meta('pctit4'); ?></div>
                                    <div class="descr"><?php echo ale_get_meta('pdesc4'); ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>    
</section>
<?php get_footer(); ?>