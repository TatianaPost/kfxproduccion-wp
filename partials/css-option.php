<?php
$ale_background = ale_get_option('background');
$ale_headerfont = ale_get_option('headerfont');
$ale_bodyfont = ale_get_option('bodyfont');
$ale_font = ale_get_option('bodystyle');
$ale_h1 = ale_get_option('h1sty');
$ale_h2 = ale_get_option('h2sty');
$ale_h3 = ale_get_option('h3sty');
$ale_h4 = ale_get_option('h4sty');
$ale_h5 = ale_get_option('h5sty');
$ale_h6 = ale_get_option('h6sty');
?>
<?php
if(ale_get_option('headerfontex')){ $headerfontex = ":".ale_get_option('headerfontex'); } else {$headerfontex="";}
if(ale_get_option('bodyfontex')){ $bodyfontex = ":".ale_get_option('bodyfontex'); } else {$bodyfontex="";}
if(ale_get_option('bodyfont') or ale_get_option('headerfont')){ echo "<link href='//fonts.googleapis.com/css?family=".ale_get_option('headerfont').$headerfontex."|".ale_get_option('bodyfont').$bodyfontex."' rel='stylesheet' type='text/css'>"; } else { echo "<link href=\"http://fonts.googleapis.com/css?family=PT+Sans|Arapey\" rel=\"stylesheet\" type=\"text/css\">"; } ?>
<style type='text/css'>
    body {
    <?php
    if($ale_background['color']){ echo "background-color:".$ale_background['color'].";"; } else { echo "background-color:#ffffff;"; }
    if($ale_background['image']){ echo "background-image: url(".$ale_background['image'].");"; };
    if($ale_background['repeat']){ echo "background-repeat:".$ale_background['repeat'].";"; };
    if($ale_background['position']){ echo "background-position:".$ale_background['position'].";"; };
    if($ale_background['attachment']){ echo "background-attachment:".$ale_background['attachment'].";"; };
    if($ale_font['size']){ echo "font-size:".$ale_font['size'].";"; };
    if($ale_font['style']){ echo "font-style:".$ale_font['style'].";"; };
    if($ale_font['color']){ echo "color:".$ale_font['color'].";"; };
    if($ale_font['face']){ $fontfamily =  str_replace ('+',' ',$ale_font['face']); echo "font-family:".$fontfamily.";"; };
    ?>
        font-weight: 300;
    }
    h1 {
    <?php
    if($ale_h1['size']){ echo "font-size:".$ale_h1['size'].";"; };
    if($ale_h1['style']){ echo "font-style:".$ale_h1['style'].";"; };
    if($ale_h1['color']){ echo "color:".$ale_h1['color'].";"; };
    if($ale_h1['face']){ $h1family =  str_replace ('+',' ',$ale_h1['face']); echo "font-family:".$h1family.";"; };
    ?>
    }
    h2 {
    <?php
    if($ale_h2['size']){ echo "font-size:".$ale_h2['size'].";"; };
    if($ale_h2['style']){ echo "font-style:".$ale_h2['style'].";"; };
    if($ale_h2['color']){ echo "color:".$ale_h2['color'].";"; };
    if($ale_h2['face']){ $h2family =  str_replace ('+',' ',$ale_h2['face']); echo "font-family:".$h2family.";"; };
    ?>
    }
    h3 {
    <?php
    if($ale_h3['size']){ echo "font-size:".$ale_h3['size'].";"; };
    if($ale_h3['style']){ echo "font-style:".$ale_h3['style'].";"; };
    if($ale_h3['color']){ echo "color:".$ale_h3['color'].";"; };
    if($ale_h3['face']){ $h3family =  str_replace ('+',' ',$ale_h3['face']); echo "font-family:".$h3family.";"; };
    ?>
    }
    h4 {
    <?php
    if($ale_h4['size']){ echo "font-size:".$ale_h4['size'].";"; };
    if($ale_h4['style']){ echo "font-style:".$ale_h4['style'].";"; };
    if($ale_h4['color']){ echo "color:".$ale_h4['color'].";"; };
    if($ale_h4['face']){ $h4family =  str_replace ('+',' ',$ale_h4['face']); echo "font-family:".$h4family.";"; };
    ?>
    }
    h5 {
    <?php
    if($ale_h5['size']){ echo "font-size:".$ale_h5['size'].";"; };
    if($ale_h5['style']){ echo "font-style:".$ale_h5['style'].";"; };
    if($ale_h5['color']){ echo "color:".$ale_h5['color'].";"; };
    if($ale_h5['face']){ $h5family =  str_replace ('+',' ',$ale_h5['face']); echo "font-family:".$h5family.";"; };
    ?>
    }
    h6 {
    <?php
    if($ale_h6['size']){ echo "font-size:".$ale_h6['size'].";"; };
    if($ale_h6['style']){ echo "font-style:".$ale_h6['style'].";"; };
    if($ale_h6['color']){ echo "color:".$ale_h6['color'].";"; };
    if($ale_h6['face']){ $h6family =  str_replace ('+',' ',$ale_h6['face']); echo "font-family:".$h6family.";"; };
    ?>
    }
    .headerfont,.ale-team .testititle {
        font-family: <?php if($ale_headerfont) { echo str_replace ('+',' ',$ale_headerfont);} ?>;
    }
    .bodyfont,.wpml-content {
        font-family: <?php if($ale_bodyfont) { echo str_replace ('+',' ',$ale_bodyfont);} ?>;
    }


<?php if(ale_get_option('site_color')){ ?>
    .firstcolor,
    #topheader .navigationtop .cl-effect-21 > ul > li > a:hover,
    #topheader .navigationtop .cl-effect-21 > ul > li > a:focus,
    #topheader .navigationtop #topnav ul.topmenu > li.current-menu-item > a,
    .login-popup .close-btn:hover,
    .login-popup #additional-settings a {
        <?php if(ale_get_option('site_color')){ echo "color:".ale_get_option('site_color').";";}  ?>
    }
    a {
        <?php if(ale_get_option('site_color')){ echo "color:".ale_get_option('site_color').";";}  ?>
    }
    .secondcolor,#topnav a{
        <?php if(ale_get_option('site_color_two')){ echo "color:".ale_get_option('site_color_two').";";} ?>
    }
    .firstbg,.ale-toggle span.ui-icon,.ale-toggle .ui-state-active .ui-icon,
    button,
    input[type="button"],
    input[type="reset"],
    input[type="submit"],
    a.button {
        <?php if(ale_get_option('site_color')){ echo "background-color:".ale_get_option('site_color').";";} ?>
    }
    .topoutline,.fourthtop {
        <?php if(ale_get_option('site_color')){ echo "border-color:".ale_get_option('site_color').";";} ?>
    }
    blockquote {
        <?php if(ale_get_option('site_color')){ echo "border-right:6px solid ".ale_get_option('site_color').";";} ?>
    }
    #topheader .navigationtop .cl-effect-21 > ul > li > a::before,
    #topheader .navigationtop .cl-effect-21 > ul > li > a::after,
    #topheader .navigationtop #topnav ul.topmenu > li.current-menu-item > a:before,
    #topheader .navigationtop #topnav ul.topmenu > li.current-menu-item > a:after,
    .login-popup #form .submit .button,
    .tagcloud a:hover,
    .aletheme-flickr-widget li.picture,
    .aletheme-blog-widget ul li .entry-thumb,
    .aletheme-mostcommented-widget ul li .entry-thumb,
    .ale-service .iconbox {
        <?php if(ale_get_option('site_color')){ echo "background-color:".ale_get_option('site_color').";";}  ?>
    }
    .secondbg {
        <?php if(ale_get_option('site_color_two')){ echo "background-color:".ale_get_option('site_color_two').";";} ?>
    }


    input[type=text]:focus,
    input[type=email]:focus,
    input[type=url]:focus,
    input[type=search]:focus,
    input[type=password]:focus,
    textarea:focus {
        color:#ffffff;
        <?php if(ale_get_option('site_color_two')){ echo "background-color:".ale_get_option('site_color_two').";";} ?>
        <?php if(ale_get_option('site_color_two')){ echo "border-color:".ale_get_option('site_color_two').";";}?>
    }
    input[type=text],
    input[type=email],
    input[type=url],
    input[type=search],
    input[type=password],
    textarea {
        font-family: <?php if($ale_bodyfont) { echo str_replace ('+',' ',$ale_bodyfont);} ?>;
    }
    button,
    input[type="button"],
    input[type="reset"],
    input[type="submit"] {
        color:#ffffff;
        text-transform: none;
    }
    .tagcloud a {
        <?php if(ale_get_option('site_color_two')){ echo "background-color:".ale_get_option('site_color_two').";";} ?>
        color:#ffffff;
    }
    .jspDrag {
        <?php if(ale_get_option('site_color_two')){ echo "background-color:".ale_get_option('site_color_two').";";} ?>
    }
<?php } ?>

    .aletheme-blog-widget .entry-title, .aletheme-mostcommented-widget .entry-title {
        font-family: <?php if($ale_bodyfont) { echo str_replace ('+',' ',$ale_bodyfont);} ?>;
        font-size: 14px;
    }
    <?php if(ale_get_option('pageanimationtransition')=='1'){
        echo '.blogpostsgrid { visibility: hidden; animation-duration: 2.1s; -webkit-animation-duration: 2.1s; }';
        echo '.gallerycont,#galcontainer {visibility: hidden;}';
    } ?>
</style>