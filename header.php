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
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-53513500-1', 'auto');
  ga('send', 'pageview');

</script>
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