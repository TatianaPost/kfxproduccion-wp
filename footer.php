    </div>
    <footer id="footer-main" role="contentinfo">
        <div class="topfooter">
            <div class="wrapper cf">
                <div class="footerlogo">
                    <?php if(ale_get_option('footerlogo')){ ?>
                        <h1 class="custfootlogo">
                            <a href="<?php echo home_url(); ?>"><img src="<?php echo ale_get_option('footerlogo'); ?>" /></a>
                        </h1>
                    <?php } else { ?>
                        <h1 class="fuuterimage">
                            <a href="<?php echo home_url(); ?>"><?php echo bloginfo('title'); ?></a>
                        </h1>
                    <?php } ?>
                </div>
                <div class="footertopmenu">
                    <nav id="footernav" class="cf" role="navigation">
                        <?php
                        if ( has_nav_menu( 'footertop_menu' ) ) {
                            wp_nav_menu(array(
                                'theme_location'=> 'footertop_menu',
                                'menu'			=> 'Footer Top Menu',
                                'menu_class'	=> 'footertopmenu cf',
                                'walker'		=> new Aletheme_Nav_Walker(),
                                'container'		=> '',
                            ));
                        }
                        ?>
                    </nav>
                </div>

            </div>
        </div>
        <div class="bottomfooter">
            <div class="wrapper cf">
                <div class="leftfooterpart">
                    <div class="footeritemmenu">
                        <div class="btit headerfont"><?php echo ale_get_option('firstfooter'); ?></div>
                        <div class="boxdata">
                            <nav id="footernavleft" class="cf" role="navigation">
                                <?php
                                if ( has_nav_menu( 'footerleft_menu' ) ) {
                                    wp_nav_menu(array(
                                        'theme_location'=> 'footerleft_menu',
                                        'menu'			=> 'Footer Left Menu',
                                        'menu_class'	=> 'footerleftmenu cf',
                                        'walker'		=> new Aletheme_Nav_Walker(),
                                        'container'		=> '',
                                    ));
                                }
                                ?>
                            </nav>
                        </div>
                    </div>
                    <div class="footeritemmenu">
                        <div class="btit headerfont"><?php echo ale_get_option('secondfooter'); ?></div>
                        <div class="boxdata">
                            <nav id="footernavright" class="cf" role="navigation">
                                <?php
                                if ( has_nav_menu( 'footerright_menu' ) ) {
                                    wp_nav_menu(array(
                                        'theme_location'=> 'footerright_menu',
                                        'menu'			=> 'Footer Right Menu',
                                        'menu_class'	=> 'footerrightmenu cf',
                                        'walker'		=> new Aletheme_Nav_Walker(),
                                        'container'		=> '',
                                    ));
                                }
                                ?>
                            </nav>
                        </div>
                    </div>
                    <div class="footeritemmenu">
                        <div class="btit headerfont"><?php echo ale_get_option('thirdfooter'); ?></div>
                        <div class="boxdata">
                            <div class="contactfooter">
                                <span class="phone"><?php echo ale_get_option('phonenum'); ?></span><br />
                                <span><?php echo ale_get_option('conemail'); ?></span><br />
                                <span><?php echo ale_get_option('address'); ?></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="rightfooterpart">

                    <div class="socialprof">
                        <?php if(ale_get_option('twi')){ echo '<a href="http://twitter.com/#!/'.ale_get_option('twi').'" rel="external" class="socic twiicon" >Twitter</a>'; } ?>
                        <?php if(ale_get_option('fb')){ echo '<a href="'.ale_get_option('fb').'" rel="external" class="socic fbicon" >Facebook</a>'; } ?>
                        <?php if(ale_get_option('gog')){ echo '<a href="'.ale_get_option('gog').'" rel="external" class="socic gogicon" >Google+</a>'; } ?>
                        <?php if(ale_get_option('inta')){ echo '<a href="'.ale_get_option('inta').'" rel="external" class="socic intaicon" >Instagram</a>'; } ?>
                        <?php if(ale_get_option('rssicon')){?><a href="<?php echo home_url(); ?>/feed" rel="external" class="socic rssicon">RSS</a><?php } ?>
                    </div>
                    <div class="cf"></div>
                    <?php if (ale_get_option('copyrights')) : ?>
                        <p class="copy"><?php echo ale_option('copyrights'); ?></p>
                    <?php else: ?>
                        <p class="copy">&copy; <?php _e('2013. Bonita. All rights reserved', 'aletheme')?></p>
                    <?php endif; ?>

                </div>
            </div>
        </div>
	</footer>

    <?php if(ale_get_option('skinselector') == "1") { ale_part('skinselector'); } ?>
<?php wp_footer(); ?>

</body>
</html>