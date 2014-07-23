<section class="story cf">
    <div class="titlestorysection">
        <div class="title">
            <?php the_title(); ?>
        </div>
        <div class="itempostbot">
            <span class="date"><?php echo get_the_date(); ?></span>&nbsp; | &nbsp;
            <span class="cat"><?php echo the_category(', '); ?></span>&nbsp; | &nbsp;
            <span class="commen"><?php echo get_comments_number($post->ID); ?></span>
        </div>
        <div class="dottedline"></div>
    </div>
    <div class="boxcontent cf">
	    <?php the_content(); ?>
        <?php if(get_the_tags()){ ?>
            <p><?php the_tags(); ?></p>
        <?php } ?>
    </div>
    <?php wp_link_pages(array(
        'before' => '<section class="story-pages"><p>' . __('Pages:', 'aletheme'),
        'after'	 => '</p></section>',
    )) ?>
</section>
