<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?> <?php if(ale_get_option('sitecustomscrollbar') == 1) { echo 'style="overflow:hidden;" data-scroll="scroll" '; } else { echo 'data-scroll="hidescroll"';} ?> <?php if(ale_get_option('pageanimationtransition') == 1) { echo 'data-pageani="1" '; } else { echo 'data-pageani="0"';} ?>> <!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
	<?php wp_head(); ?>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" title="no title" charset="utf-8">
</head>
<body <?php body_class(); ?> >
<div class="cf">
    <?php if(ale_get_option('headersitetype')=='header-one'){
        ale_part('header-one');
    } elseif(ale_get_option('headersitetype')=='header-two'){
        ale_part('header-two');
    } elseif(ale_get_option('headersitetype')=='header-three'){
        ale_part('header-three');
    } elseif(ale_get_option('headersitetype')=='header-four'){
        ale_part('header-four');
    } else {
        ale_part('header-one');
    }?>
</div>
    <div id="content-main" role="main" class="cf">