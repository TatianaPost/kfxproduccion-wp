<?php
/**
 * Template name: Header Type
 */?>
<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?> <?php if(ale_get_option('sitecustomscrollbar') == 1) { echo 'style="overflow:hidden;" data-scroll="scroll" '; } else { echo 'data-scroll="hidescroll"';} ?>> <!--<![endif]-->
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
<div class="cf">
<?php if(ale_get_meta('headertype')=='default'){
        ale_part('header-one');
    } elseif(ale_get_meta('headertype')=='hdtwo'){
        ale_part('header-two');
    } elseif(ale_get_meta('headertype')=='hdthree'){
        ale_part('header-three');
    } elseif(ale_get_meta('headertype')=='hdfour'){
        ale_part('header-four');
    } ?>
</div>
<div id="content-main" role="main" class="cf">
<section class="singleblog wrapper cf">
    <?php if(ale_get_meta('headerpagesidebar')=='leftside'){
        ale_part('cust-left-sidebar');
    } elseif(ale_get_meta('headerpagesidebar')=='rightside') {
        ale_part('cust-right-sidebar');
    } ?>
    <div id="post" class="blogpostsgrid content <?php if(ale_get_meta('headerpagesidebar')=='hideside') { echo "fullwidth"; } elseif(ale_get_meta('headerpagesidebar')=='leftside'){ echo "leftsidebaron"; } elseif(ale_get_meta('headerpagesidebar')=='rightside') { echo "rightsidebaron"; } ?>">
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