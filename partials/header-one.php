<header id="topheader" class="cf">
    <div class="headerbox cf">
        <div class="tophead"></div>
        <div class="logo">
            <h1>
                <?php if(ale_get_option('sitelogo')){ ?>
                <a href="<?php echo home_url(); ?>/" class="customlogo"><img src="<?php echo ale_get_option('sitelogo'); ?>" /></a>
                <?php } else { ?>
                <a href="<?php echo home_url(); ?>/" class="alelogo"><?php echo bloginfo('name'); ?></a>
                <?php } ?>
            </h1>
        </div>			
    </div>
    <div class="navigationtop">
        <nav id="topnav" class="wrapper cl-effect-21" role="navigation">
            <?php
            if ( has_nav_menu( 'header_menu' ) ) {
                wp_nav_menu(array(
                    'theme_location'=> 'header_menu',
                    'menu'			=> 'Header Menu',
                    'menu_class'	=> 'topmenu cf',
                    'walker'		=> new Aletheme_Nav_Walker(),
                    'container'		=> '',
                ));
            }
            ?>
        </nav>
        <nav id="mobilenav" class="wrapper" role="navigation">
            <?php
            if ( has_nav_menu( 'header_menu' ) ) {
                wp_nav_menu(array(
                    'theme_location'=> 'header_menu',
                    'menu'   => 'Header Menu',
                    'menu_class' => 'mobilemenu',
                    'container'  => '',
                    'items_wrap' => '<select id="%1$s" class="%2$s drop">%3$s</select>',
                    'indent_string' => '&ndash;&nbsp;',
                    'indent_after' => '',
                    'walker' => new Aletheme_Dropdown_Nav_Walker(),
                ));
            } ?>
        </nav>
    </div>
</header>