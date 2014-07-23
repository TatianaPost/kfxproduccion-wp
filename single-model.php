<?php get_header(); ?>
    <section class="singleblog wrapper cf">
        <div class="blogpostsgrid">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="singlemodel">
                <div class="contacttop cf">
                    <div class="leftpart">
                        <div class="newsslider collectionslider">
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
                                        echo "<li id=\"".$attachment->ID."\">".wp_get_attachment_image( $attachment->ID, 'model-slide' )."</li>";
                                    }
                                }
                                ?>
                            </ul>
                        </div>
                        <div class="slidetumbik" id="carousel">
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
                                        echo "<li>".wp_get_attachment_image( $attachment->ID, 'model-tumba' )."</li>";
                                    }
                                }
                                ?>
                            </ul>
                        </div>

                    </div>
                    <div class="rightpart">
                        <div class="descr">
                            <h2><?php the_title(); ?></h2>
                            <?php the_content(); ?>
                        </div>
                        <div class="molink">
                            <h5><?php echo ale_get_meta('modweb'); ?>:</h5>
                            <div class="sitebo"><a href="<?php echo ale_get_meta('modwebsite'); ?>"><?php echo ale_get_meta('modwebsite'); ?></a></div>
                        </div>
                        <div class="infomod">
                            <h5><?php echo ale_get_meta('modpers'); ?>:</h5>
                            <div class="addinf">
                                <?php echo ale_get_meta('modperinfo'); ?>
                            </div>
                        </div>
                        <div class="socialmod">
                            <h5><?php echo ale_get_meta('modsoc'); ?>:</h5>
                            <div class="socci">
                                <?php if(ale_get_meta('modtw')){ echo '<a href="'.ale_get_meta('modtw').'" rel="external" class="socic twiicon" >Twitter</a>'; } ?> &nbsp; / &nbsp;
                                <?php if(ale_get_meta('modfb')){ echo '<a href="'.ale_get_meta('modfb').'" rel="external" class="socic fbicon" >Facebook</a>'; } ?> &nbsp; / &nbsp;
                                <?php if(ale_get_meta('modgoo')){ echo '<a href="'.ale_get_meta('modgoo').'" rel="external" class="socic gogicon" >Google+</a>'; } ?> &nbsp; / &nbsp;
                                <?php if(ale_get_meta('modpin')){ echo '<a href="'.ale_get_meta('modpin').'" rel="external" class="socic pinticon" >Pinterest</a>'; } ?>
                            </div>
                        </div>
                        <div class="addiinfo">
                            <h5><?php echo ale_get_meta('modadit'); ?>:</h5>
                            <div class="addyin" style="margin-bottom: 0;">
                                <?php echo ale_get_meta('modaddinfo'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endwhile; else: ?>
        <?php ale_part('notfound')?>
        <?php endif; ?>
        </div>
    </section>
<?php get_footer(); ?>