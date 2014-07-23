<?php
/**
 * Template Name: Template About 1
 */
get_header(); ?>
<section class="singleblog cf">
    <div class="blogpostsgrid">
    <div class="content wrapper">
        <div class="contacttop cf">
            <div class="sliderabout aboutpageslise cf">
                <div class="postslider">
                    <ul class="slides">
                        <?php $slider = ale_sliders_get_slider(ale_get_meta('aboutsliderslug'));  ?>
                        <?php if($slider):?>
                        <?php foreach ($slider['slides'] as $slide) : ?>
                            <li>
                                <figure>
                                    <?php if ($slide['image']) : ?>
                                    <?php if($slide['url']){ echo '<a href="'.$slide['url'].'">'; } ?><img src="<?php echo $slide['image'] ?>" alt="<?php echo $slide['title']; ?>" /><?php if($slide['url']){ echo '</a>'; } ?>
                                    <?php endif; ?>
                                    <?php if($slide['title']){ ?>
                                        <figcaption class="aboutpagetitleslide">
                                           <?php echo '<div class="tito headerfont">'.$slide['title'].'</div>';  ?>
                                        </figcaption>
                                    <?php } ?>
                                </figure>
                            </li>
                            <?php endforeach; ?>
                        <?php endif;?>
                    </ul>
                </div>
                <div class="cf"></div>
            </div>
            <div class="aboutpagedatandskills">
                <div class="leftpart">
                    <div class="title">
                        <h2><?php the_title(); ?></h2>
                    </div>
                    <div>
                        <?php
                            if (have_posts()) : while (have_posts()) : the_post();
                                the_content();
                            endwhile; endif;
                        ?>
                    </div>
                    <div class="socialprofabout">
                        <strong>SOCIAL:</strong>
                        <?php if(ale_get_option('twi')){ echo '<a href="http://twitter.com/#!/'.ale_get_option('twi').'" rel="external" class="socic twiicon" >Twitter</a>'; } ?> /
                        <?php if(ale_get_option('fb')){ echo '<a href="'.ale_get_option('fb').'" rel="external" class="socic fbicon" >Facebook</a>'; } ?> /
                        <?php if(ale_get_option('gog')){ echo '<a href="'.ale_get_option('gog').'" rel="external" class="socic gogicon" >Google+</a>'; } ?> /
                        <?php if(ale_get_option('inta')){ echo '<a href="'.ale_get_option('inta').'" rel="external" class="socic intaicon" >Instagram</a>'; } ?>
                    </div>
                </div>
                <div class="rightpart">
                    <div class="title">
                        <h2><?php echo ale_get_meta('abouttwoskills'); ?></h2>
                    </div>
                    <ul class="skillul">
                        <?php if(ale_get_meta('firstskill')){ echo '<li><span class="skititle">'.ale_get_meta('firstskill').'</span><div class="skillline"><div class="countline firstbg" style="width:'.ale_get_meta('firstskillper').'%">'.ale_get_meta('firstskillper').'%</div></div></li>'; } ?>
                        <?php if(ale_get_meta('secondskill')){ echo '<li><span class="skititle">'.ale_get_meta('secondskill').'</span><div class="skillline"><div class="countline firstbg" style="width:'.ale_get_meta('secondskillper').'%">'.ale_get_meta('secondskillper').'%</div></div></li>'; } ?>
                        <?php if(ale_get_meta('thirdskill')){ echo '<li><span class="skititle">'.ale_get_meta('thirdskill').'</span><div class="skillline"><div class="countline firstbg" style="width:'.ale_get_meta('thirdskillper').'%"> '.ale_get_meta('thirdskillper').'%</div></div></li>'; } ?>
                        <?php if(ale_get_meta('fourthskill')){ echo '<li><span class="skititle">'.ale_get_meta('fourthskill').'</span><div class="skillline"><div class="countline firstbg" style="width:'.ale_get_meta('fourthskillper').'%">'.ale_get_meta('fourthskillper').'%</div></div></li>'; } ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <section class="fromblog cf">
        <div class="bottomaboutteam wrapper cf">
            <div class="title">
                <h2><?php echo ale_get_meta('meetteamtitle'); ?></h2>
            </div>
            <div class="teamphotos cf">
                <?php if(ale_get_meta('firstphotoperson')){ ?>
                    <div class="teamitem">
                        <figure class="tubmapost">
                            <img src="<?php echo ale_get_meta('firstphotoperson'); ?>" />
                            <figcaption class="firstbg cf">
                                <div class="name"><?php echo ale_get_meta('firstnameperson'); ?></div>
                                <div class="profession"><?php echo ale_get_meta('firstprofperson'); ?></div>
                            </figcaption>
                        </figure>
                    </div>
                <?php } ?>
                <?php if(ale_get_meta('secondphotoperson')){ ?>
                <div class="teamitem">
                    <figure class="tubmapost">
                        <img src="<?php echo ale_get_meta('secondphotoperson'); ?>" />
                        <figcaption class="firstbg cf">
                            <div class="name"><?php echo ale_get_meta('secondnameperson'); ?></div>
                            <div class="profession"><?php echo ale_get_meta('secondprofperson'); ?></div>
                        </figcaption>
                    </figure>
                </div>
                <?php } ?>
                <?php if(ale_get_meta('thirdphotoperson')){ ?>
                <div class="teamitem">
                    <figure class="tubmapost">
                        <img src="<?php echo ale_get_meta('thirdphotoperson'); ?>" />
                        <figcaption class="firstbg cf">
                            <div class="name"><?php echo ale_get_meta('thirdnameperson'); ?></div>
                            <div class="profession"><?php echo ale_get_meta('thirdprofperson'); ?></div>
                        </figcaption>
                    </figure>
                </div>
                <?php } ?>
                <?php if(ale_get_meta('fourthphotoperson')){ ?>
                <div class="teamitem">
                    <figure class="tubmapost">
                        <img src="<?php echo ale_get_meta('fourthphotoperson'); ?>" />
                        <figcaption class="firstbg cf">
                            <div class="name"><?php echo ale_get_meta('fourthnameperson'); ?></div>
                            <div class="profession"><?php echo ale_get_meta('fourthprofperson'); ?></div>
                        </figcaption>
                    </figure>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>
    </div>
</section>
<?php get_footer(); ?>