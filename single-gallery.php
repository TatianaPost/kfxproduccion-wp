<?php get_header(); ?>
<section class="singleblog cf">
    <div class="wrapper">
        <div id="post" class="content singlegallerypage">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="bigsliderbox">
                    <div class="portfolioslider">
                        <ul class="slides">
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
                            if ( $attachments ) {
                                foreach ( $attachments as $attachment ) {
                                    echo "<li>".wp_get_attachment_image( $attachment->ID, 'gallery-big' )."</li>";
                                }
                            }
                            ?>
                        </ul>
                    </div>
                    <div class="fullscreetop">
                        <div class="logofull">
                            <h1>
                                <?php if(ale_get_option('sitelogo')){ ?>
                                <a href="<?php echo home_url(); ?>/" class="customlogo"><img src="<?php echo ale_get_option('sitelogo'); ?>" /></a>
                                <?php } else { ?>
                                <a href="<?php echo home_url(); ?>/" class="ellenlogo"><?php echo bloginfo('name'); ?></a>
                                <?php } ?>
                            </h1>
                        </div>
                        <div class="shareandclose">
                            <?php _e('SHARE','aletheme'); ?>:
                            <?php if (ale_get_option('social_sharing')) : ?>
                            <div class="sociallinksgal">
                                <a href="<?php echo ale_get_share('fb'); ?>" class="socic fbicon" onclick="window.open(this.href, 'Share on Facebook', 'width=600,height=300'); return false">Facebook</a> /
                                <a href="<?php echo ale_get_share('twi'); ?>" class="socic twiicon" onclick="window.open(this.href, 'Share on Twitter', 'width=600,height=300'); return false">Twitter</a> /
                                <a href="<?php echo ale_get_share('goglp'); ?>" class="socic gogicon" onclick="window.open(this.href, 'Share on Google+', 'width=600,height=300'); return false">Google+</a>
                            </div>
                            <?php endif; ?>
                            <a href="javascript:void(0)" class="closefull"></a>
                        </div>
                    </div>
                    <div class="bottomslidelist">
                        <div id="fullcarousel" class="flexslider">
                            <ul class="slides">
                                <?php
                                $args3 = array(
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
                                $attachments3 = get_posts( $args3 );
                                if ( $attachments3 ) {
                                    foreach ( $attachments3 as $attachment3 ) {
                                        echo "<li>".wp_get_attachment_image( $attachment3->ID, 'gallery-supermini' )."</li>";
                                    }
                                }
                                ?>
                            </ul>
                        </div>
                    </div>
                    <div class="portfoliotumbas">
                        <div class="closetumbabuton entertumba"></div>
                        <div class="cf"></div>
                        <div id="carousel">
                            <div class="scroll-pane">
                                <ul class="carslides">
                                    <?php
                                    $args2 = array(
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
                                    $attachments2 = get_posts( $args2 );
                                    if ( $attachments2 ) {
                                        foreach ( $attachments2 as $attachment2 ) {
                                            echo "<li>".wp_get_attachment_image( $attachment2->ID, 'gallery-minitumba' )."</li>";
                                        }
                                    }
                                    ?>
                                </ul>
                                <div class="cf"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="portfoliocontentbox">
                    <div class="singaltitle">
                        <?php echo the_title(); ?>
                    </div>
                    <div class="textblock">
                        <div><?php the_content(); ?></div>
                    </div>
                    <div class="buttonsportfolio cf">
                        <div class="enterfullscreen">
                            <span><?php _e('fullscreen','aletheme'); ?></span>
                        </div>
                        <div class="entertumba">
                            <span><?php _e('Thumbs','aletheme'); ?></span>
                        </div>
                        <div class="sharegallery">
                            <?php _e('SHARE','aletheme'); ?>:
                            <?php if (ale_get_option('social_sharing')) : ?>
                            <div class="sociallinksgal" style="">
                                <a href="<?php echo ale_get_share('fb'); ?>" class="socic fbicon" onclick="window.open(this.href, 'Share on Facebook', 'width=600,height=300'); return false">Facebook</a> /
                                <a href="<?php echo ale_get_share('twi'); ?>" class="socic twiicon" onclick="window.open(this.href, 'Share on Twitter', 'width=600,height=300'); return false">Twitter</a> /
                                <a href="<?php echo ale_get_share('goglp'); ?>" class="socic gogicon" style="margin-right: 0px;" onclick="window.open(this.href, 'Share on Google+', 'width=600,height=300'); return false">Google+</a>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php endwhile; else: ?>
            <?php ale_part('notfound')?>
            <?php endif; ?>
        </div>
    </div>
    <section class="fromblog">
        <div class="recentgaleries wrapper cf">
            <div class="posttitle">
                <h2><?php _e('Recent Galleries','aletheme'); ?></h2>
            </div>
            <div class="gallyitems">
                <?php
                query_posts('post_type=gallery&posts_per_page=4');
                if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <div class="itemrecentgal">
                        <figure class="tubmapost">
                            <a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail($post->ID,'gallery-minitumba'); ?></a>
                            <figcaption>
                                <a href="<?php the_permalink(); ?>"></a>
                            </figcaption>
                        </figure>
                        <div class="title"><a href="<?php the_permalink(); ?>"><?php echo ale_truncate(get_the_title(),25); ?></a></div>
                        <div class="date"><?php echo get_the_date(); ?></div>
                    </div>
                <?php endwhile; else: ?>
                    <?php ale_part('notfound')?>
                <?php endif; ?>
                <?php wp_reset_query(); ?>
            </div>
        </div>
    </section>
    <section class="commentsboxgallery wrapper">
        <?php if(ale_get_option('commentongallery') == 1){ ?>
            <h2 class="commentstit"><?php _e('Comments','aletheme'); ?></h2>
            <?php comments_template(); } ?>
    </section>
</section>
<?php get_footer(); ?>