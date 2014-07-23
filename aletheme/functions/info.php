<?php
//Theme Information Data
function aletheme_information_page(){ ?>
    <div class="wrap" id="aletheme-edit-slider-page">
        <h2><?php echo _e('Theme Information','aletheme'); ?></h2>
        <div id="optionsframework-metabox" class="metabox-holder">
            <div id="optionsframework" class="postbox">
                <h3><?php _e('General Information','aletheme'); ?></h3>
                <div class="page">
                    <ul>
                        <li><?php _e('WordPress Version','aletheme'); ?>: <b><?php echo get_bloginfo('version'); ?></b></li>
                        <li><?php _e('URL','aletheme'); ?>: <b><a href="<?php echo site_url(); ?>" target="_blank"><?php echo site_url(); ?></a></b></li>
                        <li><?php _e('Theme Version','aletheme'); ?>: <b><?php $ale_theme = wp_get_theme(); echo $ale_theme->get( 'Version' ); ?></b></li>
                        <li><?php _e('PHP Version','aletheme'); ?>: <b><?php echo phpversion(); ?></b></li>
                        <li><?php _e('MySQL server version','aletheme'); ?>: <b><?php echo  mysql_get_server_info(); ?></b></li>
                        <li><?php _e('Theme created date','aletheme'); ?>: <b>29 August 13</b></li>
                        <li><?php _e('Theme last update date','aletheme'); ?>: <b>22 April, 2014</b></li>
                    </ul>
                </div>
                <h3><?php _e('Installed Plugins','aletheme'); ?></h3>
                <div class="page">
                    <ul>
                        <?php foreach(get_option( 'active_plugins' ) as $plugin) { echo '<li>'.$plugin.'</li>'; } ?>
                    </ul>
                </div>
                <h3><?php _e('Changelog','aletheme'); ?></h3>
                <div class="page">
                    <b><i>Version 1.4 - 22/04/14</i></b><br />
                    <p class="greycolor">
                        - WordPress 3.9 Ready<br />
                        - Fixed the Shortcode tinymce icon issue<br />
                    </p>
                    <b><i>Version 1.3 - 17/01/14</i></b><br />
                    <p class="greycolor">
                        - WordPress 3.8 Ready<br>
                        - Added new section Theme Info in admin panel<br>
                        - Fixed child theme css styles support<br>
                        - Fixed child theme css styles issue<br>
                        - Fixed the toggle shortcode height issue<br>
                        - Fixed the issue with admin logo width on login page<br>
                        - Added an upload button and text specification into gallery box in Admin Panel<br>
                        - Fixed the issue with post type icons in WordPress 3.8<br>
                        - Fixed the issue with captions images responsiveness<br>
                        - Added options to use advanced google fonts attributes<br>
                        - Fixed the issue with sidebar enabled on blog pages<br>
                        - Fixed the issue with gallery slider images size<br>
                        - Added a logo.psd file in the download archive<br>
                        - Added an option for Model post type to add categories<br>
                        - Updated lang .po files<br>
                        - Added a xml WPML config file for multilingual better support<br>
                        - Fixed the testimonial shortcode external link issue<br>
                        - Added 10 color schemes<br>
                        - Added skin selector box and option to disable it in theme options<br>
                        - Updated nicescroll.js plugin and custom scroll style<br>
                    </p>
                    <b><i>Version 1.2 - 28/10/2013</i></b><br />
                    <p class="greycolor">
                        - Fixed bug with change colors in theme options panel<br>
                        - Added option to change title in footer menu boxes<br>
                        - Added child theme support<br>
                        - Added a child theme prototype archive<br>
                        - Updated button shortcode style<br>
                        - Made columns shortcode responsive<br>
                        - Added Services shortcode<br>
                        - Added Team shortcode<br>
                        - Added Testimonial shortcode<br>
                        - Added Partners shortcode<br>
                        - Added Google Maps shortcode<br>
                        - Added Divider shortcode<br>
                        - Updated Documentation.<br>
                        - Compatible with WorpdPress 3.7<br>
                        - Fixed bug on firefox and IE for Blog 3 columns archive page<br>
                        - Fixed bug with responsive home slider on mobile devices<br>
                        - Added option to enable or disable page animated transition<br>
                    </p>
                    <b><i>Version 1.1 - 01/09/2013</i></b><br />
                    <p class="greycolor">
                        - fixed the comment bug on gallery<br>
                        - optimized js scripts<br>
                        - optimized framework scripts<br>
                    </p>
                    <b><i>Version 1.0 - 29/08/13</i></b><br />
                    <p class="greycolor">
                        - Initial Release
                    </p>
                </div>
            </div>
        </div>
    </div>
<?php }