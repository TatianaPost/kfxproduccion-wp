<?php get_header(); ?>
<section class="singleblog cf">
    <div class="blogpostsgrid diariesboxpage">
        <div id="post" class="pressgrid wrapper cf">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="blogarchivetitle">
                <h2><?php the_title(); ?></h2>
            </div>
            <div class="gallydiary">
                <div class="postslider">
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
                                echo "<li id=\"".$attachment->ID."\">".wp_get_attachment_image( $attachment->ID, 'diary-img' )."</li>";
                            }
                        }
                        ?>
                    </ul>
                </div>
            </div>
            <div class="diarycontent">
                <?php the_content(); ?>
            </div>
        <?php endwhile; else: ?>
        <?php ale_part('notfound')?>
        <?php endif; ?>
    </div>
        <section class="fromblog">
            <div class="wrapper adidata sinadidata">
                <?php if(ale_get_meta('dianame')){ echo "<strong>".ale_get_meta('diatit')."</strong>: ".ale_get_meta('dianame');} ?> &nbsp; &nbsp; &nbsp; /  &nbsp; &nbsp; &nbsp;
                <?php if(ale_get_meta('diaageval')){ echo "<strong>".ale_get_meta('diaaga')."</strong>: ".ale_get_meta('diaageval');} ?> &nbsp; &nbsp; &nbsp; /  &nbsp; &nbsp; &nbsp;
                <?php if(ale_get_meta('diadateval')){ echo "<strong>".ale_get_meta('diadate')."</strong>: ".ale_get_meta('diadateval');} ?>

            </div>
        </section>
    </div>
</section>
<?php get_footer(); ?>