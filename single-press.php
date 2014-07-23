<?php get_header(); ?>
<section class="singleblog cf">
    <div id="post" class="blogpostsgrid pressgrid cf">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="wrapper singlepresspage">
                <div class="blogarchivetitle">
                    <h2><?php the_title(); ?></h2>
                </div>
                <div class="presscontent">
                    <?php the_content(); ?>
                </div>
            </div>
            <section class="fromblog">
                <div class="wrapper adidata sinadidata">
                    <?php if(ale_get_meta('pretypeval')) {?>
                        <strong><?php echo ale_get_meta('pretit'); ?></strong>: <?php echo ale_get_meta('pretypeval'); ?>
                    <?php } ?> &nbsp; &nbsp; &nbsp; /  &nbsp; &nbsp; &nbsp;
                    <?php if(ale_get_meta('predateval')) {?>
                        <strong><?php echo ale_get_meta('predate'); ?></strong>: <?php echo ale_get_meta('predateval'); ?>
                    <?php } ?> &nbsp; &nbsp; &nbsp; /  &nbsp; &nbsp; &nbsp;
                    <?php if(ale_get_meta('premagval')) {?>
                        <strong><?php echo ale_get_meta('premag'); ?></strong>: <?php echo ale_get_meta('premagval'); ?>
                    <?php } ?> &nbsp; &nbsp; &nbsp; /  &nbsp; &nbsp; &nbsp;
                    <?php if(ale_get_meta('preratval')) {?>
                        <strong><?php echo ale_get_meta('prerat'); ?></strong>: <?php echo ale_get_meta('preratval'); ?>
                    <?php } ?>
                </div>
            </section>
        <?php endwhile; else: ?>
        <?php ale_part('notfound')?>
        <?php endif; ?>
    </div>
</section>
<?php get_footer(); ?>