<?php get_header(); ?>
<section class="singleblog wrapper cf">
    <div id="post" class="blogpostsgrid content">
        <div class="blogarchivetitle">
            <h2><?php _e('Error 404','aletheme'); ?></h2>
        </div>
        <div class="errorbox cf">
            <h1 style="font-size: 28px;"><?php _e('Error, Page not found','aletheme'); ?></h1>
            <p><?php _e('Sorry, but the page you\'re looking for has not found. Try checking the URL for errors, then hit the refresh<br /> button on your browser.','aletheme'); ?></p>
            <a href="<?php echo home_url();?>" class="gohomebut"><?php _e('Return to the homepage','aletheme'); ?></a>
            <div class="cf"></div>
        </div>
    </div>
</section>
<?php get_footer(); ?>