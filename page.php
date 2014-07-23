<?php get_header(); ?>
<section class="singleblog wrapper cf">
    <?php if(ale_get_option('custompagespages')=='2c-l-fixed'){
        ale_part('cust-left-sidebar');
    } elseif(ale_get_option('custompagespages')=='2c-r-fixed') {
        ale_part('cust-right-sidebar');
    } ?>
    <div id="post" class="blogpostsgrid content <?php if(ale_get_option('custompagespages')=='1col-fixed') { echo "fullwidth"; } elseif(ale_get_option('custompagespages')=='2c-l-fixed'){ echo "leftsidebaron"; } elseif(ale_get_option('custompagespages')=='2c-r-fixed') { echo "rightsidebaron"; } ?>">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php ale_part('pagehead');?>
        <?php the_content(); ?>
        <div class="cf"></div>
        <?php ale_part('pagefooter');?>
        <?php endwhile; else: ?>
        <?php ale_part('notfound')?>
        <?php endif; ?>
    </div>
</section>
<?php get_footer(); ?>