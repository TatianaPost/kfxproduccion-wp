<?php
/**
 * Get current theme options
 * 
 * @return array
 */
function aletheme_get_options() {
	$comments_style = array(
		'wp'  => 'Aletheme Comments',
		'fb'  => 'Facebook Comments',
		'dq'  => 'DISQUS',
		'lf'  => 'Livefyre',
        'ws'  => 'WordPress Default',
		'off' => 'Disable All Comments',
	);

    $comments_style_gal = array(
        'ws'  => 'Gallery Aletheme Comments',
        'fb'  => 'Facebook Comments',
        'dq'  => 'DISQUS',
        'lf'  => 'Livefyre',
        'off' => 'Disable All Comments',
    );

    $color_style = array(
        '1'  => 'Color 1',
        '2'  => 'Color 2',
        '3'  => 'Color 3',
        '4'  => 'Color 4',
        '5'  => 'Color 5',
        '6'  => 'Color 6',
        '7'  => 'Color 7',
        '8'  => 'Color 8',
        '9'  => 'Color 9',
        '10'  => 'Color 10',
    );

    $headerfont = array_merge(ale_get_safe_webfonts(), ale_get_google_webfonts());

    $background_defaults = array(
        'color' => '',
        'image' => '',
        'repeat' => 'repeat',
        'position' => 'top center',
        'attachment'=>'scroll'
    );


    $headertype = array(
        'header-one' => 'Header type 1',
        'header-two' => 'Header type 2',
        'header-three' => 'Header type 3',
        'header-four' => 'Header type 4'
    );

	
	$imagepath =  ALETHEME_URL . '/assets/images/';
	
	$options = array();
		
	$options[] = array("name" => "Theme",
						"type" => "heading");

    $options[] = array( "name" => "Site Logo",
                        "desc" => "Upload or put the site logo link (Default logo size: 239-88px)",
                        "id" => "ale_sitelogo",
                        "std" => "",
                        "type" => "upload");

    $options[] = array( "name" => "Footer Logo",
                        "desc" => "Upload or put the footer logo link (Default logo size: 120-33px)",
                        "id" => "ale_footerlogo",
                        "std" => "",
                        "type" => "upload");

    $options[] = array( "name" => "Color Style",
                        "desc" => "Choose your color style. Or insert your custom one in the field below.",
                        "id" => "ale_color_style",
                        "std" => "1",
                        "type" => "select",
                        "options" => $color_style);

    $options[] = array( "name" => "First Site Color",
                        "desc" => "Change the first color, the default is #ffd71a",
                        "id" => "ale_site_color",
                        'std' => '',
                        'type' => 'color');

    $options[] = array( "name" => "Second Site Color",
                        "desc" => "Change the second color, the default is #333333",
                        "id" => "ale_site_color_two",
                        'std' => '#333333',
                        'type' => 'color');

    $options[] = array( 'name' => "Manage Background",
                        'desc' => "Select the background color, or upload a custom background image. Default background is the #f5f5f5 color",
                        'id' => 'ale_background',
                        'std' => $background_defaults,
                        'type' => 'background');

    $options[] = array( "name" => "Uplaod a favicon icon",
                        "desc" => "Upload or put the link of your favicon icon",
                        "id" => "ale_favicon",
                        "std" => "",
                        "type" => "upload");

	$options[] = array( "name" => "Comments Style",
						"desc" => "Choose your comments style. If you want to use DISQUS comments please install and activate this plugin from <a href=\"" . admin_url('plugin-install.php?tab=search&type=term&s=Disqus+Comment+System&plugin-search-input=Search+Plugins') . "\">Wordpress Repository</a>.  If you want to use Livefyre Realtime Comments comments please install and activate this plugin from <a href=\"" . admin_url('plugin-install.php?tab=search&type=term&s=Livefyre+Realtime+Comments&plugin-search-input=Search+Plugins') . "\">Wordpress Repository</a>.",
						"id" => "ale_comments_style",
						"std" => "wp",
						"type" => "select",
						"options" => $comments_style);

	$options[] = array( "name" => "AJAX Comments",
						"desc" => "Use AJAX on comments posting (works only with Ellen Comments selected).",
						"id" => "ale_ajax_comments",
						"std" => "1",
						"type" => "checkbox");

	$options[] = array( "name" => "Social Sharing",
						"desc" => "Enable social sharing for posts.",
						"id" => "ale_social_sharing",
						"std" => "1",
						"type" => "checkbox");

	$options[] = array( "name" => "Copyrights",
						"desc" => "Your copyright message.",
						"id" => "ale_copyrights",
						"std" => "",
						"type" => "editor");


    $options[] = array( "name" => "Typography",
                        "type" => "heading");

    $options[] = array( "name" => "Select the Heading Font from Google Library",
                        "desc" => "The default Font is - Allura",
                        "id" => "ale_headerfont",
                        "std" => "Allura",
                        "type" => "select",
                        "options" => $headerfont);

    $options[] = array( "name" => "Insert the Heading Font attribute",
                        "desc" => "The default attribute is - empty",
                        "id" => "ale_headerfontex",
                        "std" => "",
                        "type" => "text");

    $options[] = array( "name" => "Select the Body Font from Google Library",
                        "desc" => "The default Font is - Roboto",
                        "id" => "ale_bodyfont",
                        "std" => "Roboto",
                        "type" => "select",
                        "options" => $headerfont);

    $options[] = array( "name" => "Insert the Body Font attribute",
                        "desc" => "The default attribute is - :400,700,300",
                        "id" => "ale_bodyfontex",
                        "std" => ":400,700,300",
                        "type" => "text");

    $options[] = array( 'name' => "H1 Style",
                        'desc' => "Change the h1 style",
                        'id' => 'ale_h1sty',
                        'std' => array('size' => '36px','face' => 'Allura','style' => 'normal','color' => '#5f6062'),
                        'type' => 'typography');

    $options[] = array( 'name' => "H2 Style",
                        'desc' => "Change the h2 style",
                        'id' => 'ale_h2sty',
                        'std' => array('size' => '34px','face' => 'Allura','style' => 'normal','color' => '#5f6062'),
                        'type' => 'typography');

    $options[] = array( 'name' => "H3 Style",
                        'desc' => "Change the h3 style",
                        'id' => 'ale_h3sty',
                        'std' => array('size' => '32px','face' => 'Allura','style' => 'normal','color' => '#5f6062'),
                        'type' => 'typography');

    $options[] = array( 'name' => "H4 Style",
                        'desc' => "Change the h4 style",
                        'id' => 'ale_h4sty',
                        'std' => array('size' => '30px','face' => 'Allura','style' => 'normal','color' => '#5f6062'),
                        'type' => 'typography');

    $options[] = array( 'name' => "H5 Style",
                        'desc' => "Change the h5 style",
                        'id' => 'ale_h5sty',
                        'std' => array('size' => '28px','face' => 'Allura','style' => 'normal','color' => '#5f6062'),
                        'type' => 'typography');

    $options[] = array( 'name' => "H6 Style",
                        'desc' => "Change the h6 style",
                        'id' => 'ale_h6sty',
                        'std' => array('size' => '26px','face' => 'Allura','style' => 'normal','color' => '#5f6062'),
                        'type' => 'typography');

    $options[] = array( 'name' => "Body Style",
                        'desc' => "Change the body font style",
                        'id' => 'ale_bodystyle',
                        'std' => array('size' => '14px','face' => 'Roboto','style' => 'normal','color' => '#5f6062'),
                        'type' => 'typography');

    $options[] = array( "name" => "Home",
                        "type" => "heading");

    $options[] = array( "name" => "Slider slug",
                        "desc" => "Slider slug",
                        "id" => "ale_sliderslug",
                        "std" => "",
                        "type" => "text");

    $options[] = array( "name" => "Phone number",
                        "desc" => "Your phone number.",
                        "id" => "ale_phonenum",
                        "std" => "",
                        "type" => "text");

    $options[] = array( "name" => "Contact Email",
                        "desc" => "Your Contact Email",
                        "id" => "ale_conemail",
                        "std" => "",
                        "type" => "text");

    $options[] = array( "name" => "Address",
                        "desc" => "Your Address",
                        "id" => "ale_address",
                        "std" => "",
                        "type" => "text");

    $options[] = array( "name" => "Footer First Box Title",
                        "desc" => "Title for first footer menu box",
                        "id" => "ale_firstfooter",
                        "std" => "Information",
                        "type" => "text");

    $options[] = array( "name" => "Footer Second Box Title",
                        "desc" => "Title for second footer menu box",
                        "id" => "ale_secondfooter",
                        "std" => "Customer service",
                        "type" => "text");

    $options[] = array( "name" => "Footer Third Box Title",
                        "desc" => "Title for third footer menu box",
                        "id" => "ale_thirdfooter",
                        "std" => "Contacts",
                        "type" => "text");

	$options[] = array( "name" => "Social",
						"type" => "heading");

    $options[] = array( "name" => "Twitter",
                        "desc" => "Your twitter username.",
                        "id" => "ale_twi",
                        "std" => "",
                        "type" => "text");
	$options[] = array( "name" => "Facebook",
						"desc" => "Your facebook profile URL.",
						"id" => "ale_fb",
						"std" => "",
						"type" => "text");
    $options[] = array( "name" => "Google+",
                        "desc" => "Your google+ profile URL.",
                        "id" => "ale_gog",
                        "std" => "",
                        "type" => "text");
    $options[] = array( "name" => "Instagram",
                        "desc" => "Your instagram profile URL.",
                        "id" => "ale_inta",
                        "std" => "",
                        "type" => "text");
    $options[] = array( "name" => "Show RSS",
                        "desc" => "Check if you want to show the RSS icon on your site",
                        "id" => "ale_rssicon",
                        "std" => "1",
                        "type" => "checkbox");

	
	$options[] = array( "name" => "Facebook Application ID",
						"desc" => "If you have Application ID you can connect the blog to your Facebook Profile and monitor statistics there.",
						"id" => "ale_fb_id",
						"std" => "",
						"type" => "text");
	
	$options[] = array( "name" => "Enable Open Graph",
						"desc" => "The <a href=\"http://www.ogp.me/\">Open Graph</a> protocol enables any web page to become a rich object in a social graph.",
						"id" => "ale_og_enabled",
						"std" => "",
						"type" => "checkbox");


	
	$options[] = array( "name" => "Advanced Settings",
						"type" => "heading");
	
	$options[] = array( "name" => "Google Analytics",
						"desc" => "Please insert your Google Analytics code here. Example: <strong>UA-22231623-1</strong>",
						"id" => "ale_ga",
						"std" => "",
						"type" => "text");
	
	$options[] = array( "name" => "Footer Code",
						"desc" => "If you have anything else to add in the footer - please add it here.",
						"id" => "ale_footer_info",
						"std" => "",
						"type" => "textarea");

    $options[] = array( "name" => "Custom CSS Styles",
                        "desc" => "You can add here your styles. ex. .boxclass { padding:10px; }",
                        "id" => "ale_customcsscode",
                        "std" => "",
                        "type" => "textarea");

    $options[] = array( "name" => "Comments form on Gallery",
                        "desc" => "Check if you want to show the comments form on Gallery pages.",
                        "id" => "ale_commentongallery",
                        "std" => "1",
                        "type" => "checkbox");

    $options[] = array( "name" => "Comments Style on Gallery page",
                        "desc" => "Choose your comments style. If you want to use DISQUS comments please install and activate this plugin from <a href=\"" . admin_url('plugin-install.php?tab=search&type=term&s=Disqus+Comment+System&plugin-search-input=Search+Plugins') . "\">Wordpress Repository</a>.  If you want to use Livefyre Realtime Comments comments please install and activate this plugin from <a href=\"" . admin_url('plugin-install.php?tab=search&type=term&s=Livefyre+Realtime+Comments&plugin-search-input=Search+Plugins') . "\">Wordpress Repository</a>.",
                        "id" => "ale_gallerycomments_style",
                        "std" => "ws",
                        "class" => "hidden",
                        "type" => "select",
                        "options" => $comments_style_gal);

    $options[] = array( "name" => "Enable or Disable custom scrollbarr",
                        "desc" => "Check if you want to show the custom scrollbar",
                        "id" => "ale_sitecustomscrollbar",
                        "std" => "0",
                        "type" => "checkbox");

    $options[] = array( "name" => "Enable or Disable Pages Animated Transition",
                        "desc" => "Check if you want to show the transitions",
                        "id" => "ale_pageanimationtransition",
                        "std" => "0",
                        "type" => "checkbox");

    $options[] = array( "name" => "Enable or Disable the Skin Selector Box",
                        "desc" => "Check if you want to show the Skin Selector Box",
                        "id" => "ale_skinselector",
                        "std" => "0",
                        "type" => "checkbox");

    $options[] = array( "name" => "Sidebars",
                        "type" => "heading");

    $options[] = array( "name" => "Select Header type",
                        "desc" => "Select Header type",
                        "id" => "ale_headersitetype",
                        "std" => "header-one",
                        "type" => "select",
                        "options" => $headertype);

    $options[] = array( 'name' => "Sidebar style on Blog pages",
                        'desc' => "Select sidebar style",
                        'id' => 'ale_blogpages',
                        'std' => '1col-fixed',
                        'type' => 'images',
                        'options' => array(
                            '1col-fixed' => $imagepath . '1col.png',
                            '2c-l-fixed' => $imagepath . '2cl.png',
                            '2c-r-fixed' => $imagepath . '2cr.png')
                        );

    $options[] = array( 'name' => "Sidebar style on Gallery pages",
                        'desc' => "Select sidebar style",
                        'id' => 'ale_gallerypages',
                        'std' => '1col-fixed',
                        'type' => 'images',
                        'options' => array(
                            '1col-fixed' => $imagepath . '1col.png',
                            '2c-l-fixed' => $imagepath . '2cl.png',
                            '2c-r-fixed' => $imagepath . '2cr.png')
                        );

    $options[] = array( 'name' => "Sidebar style on Custom pages",
                        'desc' => "Select sidebar style",
                        'id' => 'ale_custompagespages',
                        'std' => '1col-fixed',
                        'type' => 'images',
                        'options' => array(
                            '1col-fixed' => $imagepath . '1col.png',
                            '2c-l-fixed' => $imagepath . '2cl.png',
                            '2c-r-fixed' => $imagepath . '2cr.png')
                        );
	
	return $options;
}

/**
 * Add custom scripts to Options Page
 */
function aletheme_options_custom_scripts() {
 ?>

<script type="text/javascript">
jQuery(document).ready(function() {
    jQuery('#ale_commentongallery').click(function() {
        jQuery('#section-ale_gallerycomments_style').fadeToggle(400);
    });
    if (jQuery('#ale_commentongallery:checked').val() !== undefined) {
        jQuery('#section-ale_gallerycomments_style').show();
    }
});
</script>

<?php
}

/**
 * Add Metaboxes
 * @param array $meta_boxes
 * @return array 
 */
function aletheme_metaboxes($meta_boxes) {
	
	$meta_boxes = array();

    $prefix = "ale_";

    $meta_boxes[] = array(
        'id'         => 'post_page_metabox',
        'title'      => 'Post Data',
        'pages'      => array( 'post', ), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        'fields' => array(
            array(
                'name' => 'Video Link',
                'desc' => 'You can put here the links from youtube.com, vimeo.com, blip.tv, dailymotion.com, flickr.com, smugmug.com, hulu.com, viddler.com, qik.com, revision3.com, photobucket.com, scribd.com, wordpress.tv, polldaddy.com, funnyordie.com, twitter.com, soundcloud.com, slideshare.net, instagram.com',
                'id'   => $prefix . 'videopostlink',
                'type'    => 'text',
            ),
        )
    );

    $meta_boxes[] = array(
        'id'         => 'home_page_metabox',
        'title'      => 'Home Options',
        'pages'      => array( 'page', ), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        'show_on'    => array( 'key' => 'page-template', 'value' => array('template-home-one.php'), ), // Specific post templates to display this metabox
        'fields' => array(
            array(
                'name' => 'Home Slider Slug',
                'desc' => 'Home page slider slug',
                'id'   => $prefix . 'homeslugslider',
                'type'    => 'text',
            ),
            array(
                'name' => 'Galleries per page',
                'desc' => 'Home page galleries num',
                'id'   => $prefix . 'galpergage',
                'type'    => 'text',
            ),
            array(
                'name' => 'About box button link',
                'desc' => 'Insert the link',
                'id'   => $prefix . 'aboutlink',
                'type'    => 'text',
            ),
        )
    );

    $meta_boxes[] = array(
        'id'         => 'homemore_page_metabox',
        'title'      => 'Home Options',
        'pages'      => array( 'page', ), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        'show_on'    => array( 'key' => 'page-template', 'value' => array('template-home-two.php'), ), // Specific post templates to display this metabox
        'fields' => array(
            array(
                'name' => 'About box button link',
                'desc' => 'Insert the link',
                'id'   => $prefix . 'aboutlink',
                'type'    => 'text',
            ),
            array(
                'name' => 'Home Slider Slug',
                'desc' => 'Home page slider slug',
                'id'   => $prefix . 'homeslugmore',
                'type'    => 'text',
            ),
            array(
                'name' => 'Galleries per page',
                'desc' => 'Home page galleries num',
                'id'   => $prefix . 'galpergagemore',
                'std' => '4',
                'type'    => 'text',
            ),
            array(
                'name' => 'Galleries Style',
                'desc' => 'Select 2 or 3 or 4 Columns',
                'id'   => $prefix . 'galhomemorestyle',
                'type'    => 'select',
                'options' => array(
                    array( 'name' => '2 Columns', 'value' => 'twocol', ),
                    array( 'name' => '3 Columns', 'value' => 'threecol', ),
                    array( 'name' => '4 Columns', 'value' => 'fourcol', ),
                ),
            ),
        )
    );

    $meta_boxes[] = array(
        'id'         => 'header_page_metabox',
        'title'      => 'Header Options',
        'pages'      => array( 'page', ), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        'show_on'    => array( 'key' => 'page-template', 'value' => array('template-header.php'), ), // Specific post templates to display this metabox
        'fields' => array(
            array(
                'name' => 'Select Sidebar type',
                'desc' => 'Select sidebar type',
                'id'   => $prefix . 'headerpagesidebar',
                'type'    => 'select',
                'options' => array(
                    array( 'name' => 'Hide Sidebar', 'value' => 'hideside', ),
                    array( 'name' => 'Left Sidebar', 'value' => 'leftside', ),
                    array( 'name' => 'Right Sidebar', 'value' => 'rightside', ),
                ),
            ),
            array(
                'name' => 'Select Header Type',
                'desc' => 'Select header type',
                'id'   => $prefix . 'headertype',
                'type'    => 'select',
                'options' => array(
                    array( 'name' => 'Header 1', 'value' => 'default', ),
                    array( 'name' => 'Header 2', 'value' => 'hdtwo', ),
                    array( 'name' => 'Header 3', 'value' => 'hdthree', ),
                    array( 'name' => 'Header 4', 'value' => 'hdfour', ),
                ),
            ),
        )
    );

    $meta_boxes[] = array(
        'id'         => 'homeone_page_metabox',
        'title'      => 'Home Options',
        'pages'      => array( 'page', ), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        'show_on'    => array( 'key' => 'page-template', 'value' => array('page-home.php'), ), // Specific post templates to display this metabox
        'fields' => array(
            array(
                'name' => 'About box button link',
                'desc' => 'Insert the link',
                'id'   => $prefix . 'aboutlink',
                'type'    => 'text',
            ),
            array(
                'name' => 'Blog posts on home',
                'desc' => 'Home page posts num',
                'id'   => $prefix . 'blogpergage',
                'type'    => 'text',
            ),

            array(
                'name' => 'Portfolio box. Image 1',
                'desc' => 'Image 1 (size 307-530px)',
                'id'   => $prefix . 'pimg1',
                'type'    => 'file',
            ),
            array(
                'name' => 'Portfolio box. Image 2',
                'desc' => 'Image 2 (size 632-265px)',
                'id'   => $prefix . 'pimg2',
                'type'    => 'file',
            ),
            array(
                'name' => 'Portfolio box. Image 3',
                'desc' => 'Image 3 (size 305-242px)',
                'id'   => $prefix . 'pimg3',
                'type'    => 'file',
            ),
            array(
                'name' => 'Portfolio box. Image 4',
                'desc' => 'Image 4 (size 305-242px)',
                'id'   => $prefix . 'pimg4',
                'type'    => 'file',
            ),
            array(
                'name' => 'Portfolio box. Category Title 1',
                'desc' => 'Category Title 1',
                'id'   => $prefix . 'pctit1',
                'type'    => 'text',
            ),
            array(
                'name' => 'Portfolio box. Category Title 2',
                'desc' => 'Category Title 2',
                'id'   => $prefix . 'pctit2',
                'type'    => 'text',
            ),
            array(
                'name' => 'Portfolio box. Category Title 3',
                'desc' => 'Category Title 3',
                'id'   => $prefix . 'pctit3',
                'type'    => 'text',
            ),
            array(
                'name' => 'Portfolio box. Category Title 4',
                'desc' => 'Category Title 4',
                'id'   => $prefix . 'pctit4',
                'type'    => 'text',
            ),
            array(
                'name' => 'Portfolio box. Description 1',
                'desc' => 'Description 1',
                'id'   => $prefix . 'pdesc1',
                'type'    => 'text',
            ),
            array(
                'name' => 'Portfolio box. Description 2',
                'desc' => 'Description 2',
                'id'   => $prefix . 'pdesc2',
                'type'    => 'text',
            ),
            array(
                'name' => 'Portfolio box. Description 3',
                'desc' => 'Description 3',
                'id'   => $prefix . 'pdesc3',
                'type'    => 'text',
            ),
            array(
                'name' => 'Portfolio box. Description 4',
                'desc' => 'Description 4',
                'id'   => $prefix . 'pdesc4',
                'type'    => 'text',
            ),
            array(
                'name' => 'Portfolio box. Link 1',
                'desc' => 'Link 1',
                'id'   => $prefix . 'plink1',
                'type'    => 'text',
            ),
            array(
                'name' => 'Portfolio box. Link 2',
                'desc' => 'Link 2',
                'id'   => $prefix . 'plink2',
                'type'    => 'text',
            ),
            array(
                'name' => 'Portfolio box. Link 3',
                'desc' => 'Link 3',
                'id'   => $prefix . 'plink3',
                'type'    => 'text',
            ),
            array(
                'name' => 'Portfolio box. Link 4',
                'desc' => 'Link 4',
                'id'   => $prefix . 'plink4',
                'type'    => 'text',
            ),


            array(
                'name' => 'Partners box. Image 1',
                'desc' => 'Image 1',
                'id'   => $prefix . 'ptimg1',
                'type'    => 'file',
            ),
            array(
                'name' => 'Partners box. Image 2',
                'desc' => 'Image 2',
                'id'   => $prefix . 'ptimg2',
                'type'    => 'file',
            ),
            array(
                'name' => 'Partners box. Image 3',
                'desc' => 'Image 3',
                'id'   => $prefix . 'ptimg3',
                'type'    => 'file',
            ),
            array(
                'name' => 'Partners box. Image 4',
                'desc' => 'Image 4',
                'id'   => $prefix . 'ptimg4',
                'type'    => 'file',
            ),
            array(
                'name' => 'Partners box. Image 5',
                'desc' => 'Image 5',
                'id'   => $prefix . 'ptimg5',
                'type'    => 'file',
            ),
            array(
                'name' => 'Partners box. Image 6',
                'desc' => 'Image 6',
                'id'   => $prefix . 'ptimg6',
                'type'    => 'file',
            ),
            array(
                'name' => 'Partners box. Image 7',
                'desc' => 'Image 7',
                'id'   => $prefix . 'ptimg7',
                'type'    => 'file',
            ),
            array(
                'name' => 'Partners box. Image 8',
                'desc' => 'Image 8',
                'id'   => $prefix . 'ptimg8',
                'type'    => 'file',
            ),
            array(
                'name' => 'Partners box. Link 1',
                'desc' => 'Link 1',
                'id'   => $prefix . 'ptlink1',
                'type'    => 'text',
            ),
            array(
                'name' => 'Partners box. Link 2',
                'desc' => 'Link 2',
                'id'   => $prefix . 'ptlink2',
                'type'    => 'text',
            ),
            array(
                'name' => 'Partners box. Link 3',
                'desc' => 'Link 3',
                'id'   => $prefix . 'ptlink3',
                'type'    => 'text',
            ),
            array(
                'name' => 'Partners box. Link 4',
                'desc' => 'Link 4',
                'id'   => $prefix . 'ptlink4',
                'type'    => 'text',
            ),
            array(
                'name' => 'Partners box. Link 5',
                'desc' => 'Link 5',
                'id'   => $prefix . 'ptlink5',
                'type'    => 'text',
            ),
            array(
                'name' => 'Partners box. Link 6',
                'desc' => 'Link 6',
                'id'   => $prefix . 'ptlink6',
                'type'    => 'text',
            ),
            array(
                'name' => 'Partners box. Link 7',
                'desc' => 'Link 7',
                'id'   => $prefix . 'ptlink7',
                'type'    => 'text',
            ),
            array(
                'name' => 'Partners box. Link 8',
                'desc' => 'Link 8',
                'id'   => $prefix . 'ptlink8',
                'type'    => 'text',
            ),

            array(
                'name' => 'Review 1',
                'desc' => 'Review 1',
                'id'   => $prefix . 'review1',
                'type'    => 'text',
            ),
            array(
                'name' => 'Review 2',
                'desc' => 'Review 2',
                'id'   => $prefix . 'review2',
                'type'    => 'text',
            ),
            array(
                'name' => 'Review 3',
                'desc' => 'Review 3',
                'id'   => $prefix . 'review3',
                'type'    => 'text',
            ),
            array(
                'name' => 'Review 4',
                'desc' => 'Review 4',
                'id'   => $prefix . 'review4',
                'type'    => 'text',
            ),
        )
    );

    $meta_boxes[] = array(
        'id'         => 'homeone_page_metabox',
        'title'      => 'Home Options',
        'pages'      => array( 'page', ), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        'show_on'    => array( 'key' => 'page-template', 'value' => array('template-home-three.php'), ), // Specific post templates to display this metabox
        'fields' => array(
            array(
                'name' => 'Home Top Slider Slug',
                'desc' => 'Home page slider slug',
                'id'   => $prefix . 'homeslugslidertop',
                'type'    => 'text',
            ),
            array(
                'name' => 'Home Bottom Slider Slug',
                'desc' => 'Home page slider slug',
                'id'   => $prefix . 'homeslugsliderbot',
                'type'    => 'text',
            ),
            array(
                'name' => 'Blog posts on home',
                'desc' => 'Home page posts num',
                'id'   => $prefix . 'blogpergage',
                'type'    => 'text',
            ),
        )
    );

    $meta_boxes[] = array(
        'id'         => 'blog_page_metabox',
        'title'      => 'Blog Page Options',
        'pages'      => array( 'page', ), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        'show_on'    => array( 'key' => 'page-template', 'value' => array('template-blog-two.php','template-blog-three.php','template-blog-four.php'), ), // Specific post templates to display this metabox
        'fields' => array(
            array(
                'name' => 'Select Sidebar Type',
                'desc' => 'Hide sidebar, Left sidebar or Right sidebar',
                'id'   => $prefix . 'sidebarblog',
                'type' => 'select',
                'options' => array(
                    array( 'name' => 'Hide Sidebar', 'value' => 'hideside', ),
                    array( 'name' => 'Left Sidebar', 'value' => 'leftside', ),
                    array( 'name' => 'Right Sidebar', 'value' => 'rightside', ),
                ),
            ),
        )
    );

    $meta_boxes[] = array(
        'id'         => 'gallery_page_metabox',
        'title'      => 'Gallery Page Options',
        'pages'      => array( 'page', ), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        'show_on'    => array( 'key' => 'page-template', 'value' => array('template-gallery-filter.php','template-gallery-three.php','template-gallery-four.php'), ), // Specific post templates to display this metabox
        'fields' => array(
            array(
                'name' => 'Select Sidebar Type',
                'desc' => 'Hide sidebar, Left sidebar or Right sidebar',
                'id'   => $prefix . 'sidebargallery',
                'type' => 'select',
                'options' => array(
                    array( 'name' => 'Hide Sidebar', 'value' => 'hideside', ),
                    array( 'name' => 'Left Sidebar', 'value' => 'leftside', ),
                    array( 'name' => 'Right Sidebar', 'value' => 'rightside', ),
                ),
            ),
        )
    );

    $meta_boxes[] = array(
        'id'         => 'contact_page_metabox',
        'title'      => 'Contact Page Options',
        'pages'      => array( 'page', ), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        'show_on'    => array( 'key' => 'page-template', 'value' => array('template-contact.php','template-contact-two.php'), ), // Specific post templates to display this metabox
        'fields' => array(
            array(
                'name' => 'Google Map',
                'desc' => 'Insert the html code',
                'id'   => $prefix . 'gomap',
                'type' => 'textarea_code',
            ),
        )
    );

    $meta_boxes[] = array(
        'id'         => 'about_page_metabox',
        'title'      => 'About Skills Options',
        'pages'      => array( 'page', ), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        'show_on'    => array( 'key' => 'page-template', 'value' => array('template-about.php'), ), // Specific post templates to display this metabox
        'fields' => array(
            array(
                'name' => 'Skills box Title',
                'desc' => 'Insert your box title...',
                'id'   => $prefix . 'abouttwoskills',
                'type'    => 'text',
            ),
            array(
                'name' => 'Skill One Title',
                'desc' => 'Insert your first skill title...',
                'id'   => $prefix . 'firstskill',
                'type'    => 'text',
            ),
            array(
                'name' => 'Skill One Percent',
                'desc' => 'Insert your first skill procent... ex. 80',
                'id'   => $prefix . 'firstskillper',
                'type'    => 'text',
            ),
            array(
                'name' => 'Skill Two Title',
                'desc' => 'Insert your second skill title...',
                'id'   => $prefix . 'secondskill',
                'type'    => 'text',
            ),
            array(
                'name' => 'Skill Two Percent',
                'desc' => 'Insert your second skill procent... ex. 80',
                'id'   => $prefix . 'secondskillper',
                'type'    => 'text',
            ),
            array(
                'name' => 'Skill Three Title',
                'desc' => 'Insert your third skill title...',
                'id'   => $prefix . 'thirdskill',
                'type'    => 'text',
            ),
            array(
                'name' => 'Skill Three Percent',
                'desc' => 'Insert your third skill procent... ex. 80',
                'id'   => $prefix . 'thirdskillper',
                'type'    => 'text',
            ),
            array(
                'name' => 'Skill Four Title',
                'desc' => 'Insert your fourth skill title...',
                'id'   => $prefix . 'fourthskill',
                'type'    => 'text',
            ),
            array(
                'name' => 'Skill Four Percent',
                'desc' => 'Insert your fourth skill procent... ex. 80',
                'id'   => $prefix . 'fourthskillper',
                'type'    => 'text',
            ),
        )
    );

    $meta_boxes[] = array(
        'id'         => 'aboutslider_page_metabox',
        'title'      => 'About Slider Options',
        'pages'      => array( 'page', ), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        'show_on'    => array( 'key' => 'page-template', 'value' => array('template-about.php', 'template-about-two.php'), ), // Specific post templates to display this metabox
        'fields' => array(
            array(
                'name' => 'Slider slug',
                'desc' => 'Insert your slider slug...',
                'id'   => $prefix . 'aboutsliderslug',
                'type'    => 'text',
            ),
        )
    );

    $meta_boxes[] = array(
        'id'         => 'diary_page_metabox',
        'title'      => 'Diaries Options',
        'pages'      => array( 'diary', ), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        'fields' => array(
            array(
                'name' => 'Name field title',
                'desc' => 'Insert your title...',
                'id'   => $prefix . 'diatit',
                'std'  => 'Model',
                'type'    => 'text',
            ),
            array(
                'name' => 'Name value',
                'desc' => 'Insert your value...',
                'id'   => $prefix . 'dianame',
                'std'  => '',
                'type'    => 'text',
            ),
            array(
                'name' => 'Age field title',
                'desc' => 'Insert your title...',
                'id'   => $prefix . 'diaaga',
                'std'  => 'Age',
                'type'    => 'text',
            ),
            array(
                'name' => 'Age value',
                'desc' => 'Insert your value...',
                'id'   => $prefix . 'diaageval',
                'std'  => '',
                'type'    => 'text',
            ),
            array(
                'name' => 'Date field title',
                'desc' => 'Insert your title...',
                'id'   => $prefix . 'diadate',
                'std'  => 'Published',
                'type'    => 'text',
            ),
            array(
                'name' => 'Date value',
                'desc' => 'Insert your value...',
                'id'   => $prefix . 'diadateval',
                'std'  => '',
                'type'    => 'text_date',
            ),
        )
    );

    $meta_boxes[] = array(
        'id'         => 'press_page_metabox',
        'title'      => 'Press Options',
        'pages'      => array( 'press', ), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        'fields' => array(
            array(
                'name' => 'Type field title',
                'desc' => 'Insert your title...',
                'id'   => $prefix . 'pretit',
                'std'  => 'Type',
                'type'    => 'text',
            ),
            array(
                'name' => 'Type value',
                'desc' => 'Insert your value...',
                'id'   => $prefix . 'pretypeval',
                'type'    => 'text',
            ),
            array(
                'name' => 'Date field title',
                'desc' => 'Insert your title...',
                'id'   => $prefix . 'predate',
                'std'  => 'Press Publish Date',
                'type'    => 'text',
            ),
            array(
                'name' => 'Date value',
                'desc' => 'Insert your value...',
                'id'   => $prefix . 'predateval',
                'type'    => 'text_date',
            ),
            array(
                'name' => 'Magazin field title',
                'desc' => 'Insert your title...',
                'id'   => $prefix . 'premag',
                'std'  => 'Magazine',
                'type'    => 'text',
            ),
            array(
                'name' => 'Magazin value',
                'desc' => 'Insert your value...',
                'id'   => $prefix . 'premagval',
                'type'    => 'text',
            ),
            array(
                'name' => 'Raiting field title',
                'desc' => 'Insert your title...',
                'id'   => $prefix . 'prerat',
                'std'  => 'Magazine Raiting',
                'type'    => 'text',
            ),
            array(
                'name' => 'Raiting value',
                'desc' => 'Insert your value...',
                'id'   => $prefix . 'preratval',
                'type'    => 'text',
            ),
        )
    );

    $meta_boxes[] = array(
        'id'         => 'model_page_metabox',
        'title'      => 'Models Page Options',
        'pages'      => array( 'model', ), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        'fields' => array(
            array(
                'name' => 'Model sub title',
                'desc' => 'Insert your sub title',
                'id'   => $prefix . 'modprof',
                'std'  => '',
                'type'    => 'text',
            ),
            array(
                'name' => 'Website box title',
                'desc' => 'Insert your title',
                'id'   => $prefix . 'modweb',
                'std'  => 'Website',
                'type'    => 'text',
            ),
            array(
                'name' => 'Website',
                'desc' => 'Insert your url',
                'id'   => $prefix . 'modwebsite',
                'std'  => '',
                'type'    => 'text',
            ),
            array(
                'name' => 'Personal Info box title',
                'desc' => 'Insert your title',
                'id'   => $prefix . 'modpers',
                'std'  => 'Personal Info',
                'type'    => 'text',
            ),
            array(
                'name' => 'Personal info',
                'desc' => 'Insert your data',
                'id'   => $prefix . 'modperinfo',
                'std'  => '',
                'type'    => 'wysiwyg',
                'options' => array(    'textarea_rows' => 5, )
            ),
            array(
                'name' => 'Social box title',
                'desc' => 'Insert your title',
                'id'   => $prefix . 'modsoc',
                'std'  => 'Social',
                'type'    => 'text',
            ),
            array(
                'name' => 'Facebook link',
                'desc' => 'Insert your link',
                'id'   => $prefix . 'modfb',
                'std'  => '',
                'type'    => 'text',
            ),
            array(
                'name' => 'Twitter link',
                'desc' => 'Insert your link',
                'id'   => $prefix . 'modtw',
                'std'  => '',
                'type'    => 'text',
            ),
            array(
                'name' => 'Google Plis link',
                'desc' => 'Insert your link',
                'id'   => $prefix . 'modgoo',
                'std'  => '',
                'type'    => 'text',
            ),
            array(
                'name' => 'Pinterest link',
                'desc' => 'Insert your link',
                'id'   => $prefix . 'modpin',
                'std'  => '',
                'type'    => 'text',
            ),
            array(
                'name' => 'Additional Information box title',
                'desc' => 'Insert your title',
                'id'   => $prefix . 'modadit',
                'std'  => 'Additional Information',
                'type'    => 'text',
            ),
            array(
                'name' => 'Additional Information',
                'desc' => 'Insert your data',
                'id'   => $prefix . 'modaddinfo',
                'std'  => '',
                'type'    => 'wysiwyg',
                'options' => array(    'textarea_rows' => 5, )
            ),
        )
    );

    $meta_boxes[] = array(
        'id'         => 'aboutslogos_page_metabox',
        'title'      => 'About Partners Options',
        'pages'      => array( 'page', ), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        'show_on'    => array( 'key' => 'page-template', 'value' => array('template-about-two.php'), ), // Specific post templates to display this metabox
        'fields' => array(
            array(
                'name' => 'Partners box title',
                'desc' => 'Insert your box title...',
                'id'   => $prefix . 'aboutparttit',
                'type'    => 'text',
            ),
            array(
                'name' => 'Partners box. Image 1',
                'desc' => 'Image 1',
                'id'   => $prefix . 'ptimg1',
                'type'    => 'file',
            ),
            array(
                'name' => 'Partners box. Image 2',
                'desc' => 'Image 2',
                'id'   => $prefix . 'ptimg2',
                'type'    => 'file',
            ),
            array(
                'name' => 'Partners box. Image 3',
                'desc' => 'Image 3',
                'id'   => $prefix . 'ptimg3',
                'type'    => 'file',
            ),
            array(
                'name' => 'Partners box. Image 4',
                'desc' => 'Image 4',
                'id'   => $prefix . 'ptimg4',
                'type'    => 'file',
            ),
            array(
                'name' => 'Partners box. Image 5',
                'desc' => 'Image 5',
                'id'   => $prefix . 'ptimg5',
                'type'    => 'file',
            ),
            array(
                'name' => 'Partners box. Image 6',
                'desc' => 'Image 6',
                'id'   => $prefix . 'ptimg6',
                'type'    => 'file',
            ),
            array(
                'name' => 'Partners box. Image 7',
                'desc' => 'Image 7',
                'id'   => $prefix . 'ptimg7',
                'type'    => 'file',
            ),
            array(
                'name' => 'Partners box. Image 8',
                'desc' => 'Image 8',
                'id'   => $prefix . 'ptimg8',
                'type'    => 'file',
            ),
            array(
                'name' => 'Partners box. Link 1',
                'desc' => 'Link 1',
                'id'   => $prefix . 'ptlink1',
                'type'    => 'text',
            ),
            array(
                'name' => 'Partners box. Link 2',
                'desc' => 'Link 2',
                'id'   => $prefix . 'ptlink2',
                'type'    => 'text',
            ),
            array(
                'name' => 'Partners box. Link 3',
                'desc' => 'Link 3',
                'id'   => $prefix . 'ptlink3',
                'type'    => 'text',
            ),
            array(
                'name' => 'Partners box. Link 4',
                'desc' => 'Link 4',
                'id'   => $prefix . 'ptlink4',
                'type'    => 'text',
            ),
            array(
                'name' => 'Partners box. Link 5',
                'desc' => 'Link 5',
                'id'   => $prefix . 'ptlink5',
                'type'    => 'text',
            ),
            array(
                'name' => 'Partners box. Link 6',
                'desc' => 'Link 6',
                'id'   => $prefix . 'ptlink6',
                'type'    => 'text',
            ),
            array(
                'name' => 'Partners box. Link 7',
                'desc' => 'Link 7',
                'id'   => $prefix . 'ptlink7',
                'type'    => 'text',
            ),
            array(
                'name' => 'Partners box. Link 8',
                'desc' => 'Link 8',
                'id'   => $prefix . 'ptlink8',
                'type'    => 'text',
            ),
        )
    );

    $meta_boxes[] = array(
        'id'         => 'aboutone_page_metabox',
        'title'      => 'About Team Options',
        'pages'      => array( 'page', ), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        'show_on'    => array( 'key' => 'page-template', 'value' => array('template-about.php'), ), // Specific post templates to display this metabox
        'fields' => array(

            array(
                'name' => 'Team box title',
                'desc' => 'Insert your team box title',
                'id'   => $prefix . 'meetteamtitle',
                'type'    => 'text',
            ),
            array(
                'name' => 'First Person Photo',
                'desc' => 'Upload first photo',
                'id'   => $prefix . 'firstphotoperson',
                'type'    => 'file',
            ),
            array(
                'name' => 'First Person Name',
                'desc' => 'Insert first person name',
                'id'   => $prefix . 'firstnameperson',
                'type'    => 'text',
            ),
            array(
                'name' => 'First Person Desc',
                'desc' => 'Insert first person description',
                'id'   => $prefix . 'firstprofperson',
                'type'    => 'text',
            ),

            array(
                'name' => 'Second Person Photo',
                'desc' => 'Upload second photo',
                'id'   => $prefix . 'secondphotoperson',
                'type'    => 'file',
            ),
            array(
                'name' => 'Second Person Name',
                'desc' => 'Insert second person name',
                'id'   => $prefix . 'secondnameperson',
                'type'    => 'text',
            ),
            array(
                'name' => 'Second Person Desc',
                'desc' => 'Insert second person description',
                'id'   => $prefix . 'secondprofperson',
                'type'    => 'text',
            ),

            array(
                'name' => 'Third Person Photo',
                'desc' => 'Upload third photo',
                'id'   => $prefix . 'thirdphotoperson',
                'type'    => 'file',
            ),
            array(
                'name' => 'Third Person Name',
                'desc' => 'Insert third person name',
                'id'   => $prefix . 'thirdnameperson',
                'type'    => 'text',
            ),
            array(
                'name' => 'Third Person Desc',
                'desc' => 'Insert third person description',
                'id'   => $prefix . 'thirdprofperson',
                'type'    => 'text',
            ),

            array(
                'name' => 'Fourth Person Photo',
                'desc' => 'Upload fourth photo',
                'id'   => $prefix . 'fourthphotoperson',
                'type'    => 'file',
            ),
            array(
                'name' => 'Fourth Person Name',
                'desc' => 'Insert fourth person name',
                'id'   => $prefix . 'fourthnameperson',
                'type'    => 'text',
            ),
            array(
                'name' => 'Fourth Person Desc',
                'desc' => 'Insert fourth person description',
                'id'   => $prefix . 'fourthprofperson',
                'type'    => 'text',
            ),
        )
    );
	
	return $meta_boxes;
}

/**
 * Get image sizes for images
 * 
 * @return array
 */
function aletheme_get_images_sizes() {
	return array(

        'gallery' => array(
            array(
                'name'      => 'gallery-patrat',
                'width'     => 330,
                'height'    => 330,
                'crop'      => true,
            ),
            array(
                'name'      => 'gallery-minitumba',
                'width'     => 225,
                'height'    => 190,
                'crop'      => true,
            ),
            array(
                'name'      => 'gallery-supermini',
                'width'     => 160,
                'height'    => 110,
                'crop'      => true,
            ),
            array(
                'name'      => 'gallery-big',
                'width'     => 1000,
                'height'    => 9999,
                'crop'      => false,
            ),
            array(
                'name'      => 'gallery-two',
                'width'     => 500,
                'height'    => 330,
                'crop'      => true,
            ),
        ),

        'model' => array(
            array(
                'name'      => 'model-slide',
                'width'     => 480,
                'height'    => 9999,
                'crop'      => false,
            ),
            array(
                'name'      => 'model-tumba',
                'width'     => 110,
                'height'    => 110,
                'crop'      => true,
            ),
            array(
                'name'      => 'model-grid',
                'width'     => 320,
                'height'    => 400,
                'crop'      => true,
            ),
        ),
        'diary' => array(
            array(
                'name'      => 'diary-img',
                'width'     => 1000,
                'height'    => 350,
                'crop'      => true,
            ),
        ),
    );
}

/**
 * Add post types that are used in the theme 
 * 
 * @return array
 */
function aletheme_get_post_types() {
	return array(
        'gallery' => array(
            'config' => array(
                'public' => true,
                'exclude_from_search' => true,
                'menu_position' => 20,
                'has_archive'   => true,
                'supports'=> array(
                    'title',
                    'comments',
                    'editor',
                    'thumbnail',
                    'page-attributes',
                ),
                'show_in_nav_menus'=> true,
            ),
            'singular' => 'Gallery',
            'multiple' => 'Galleries',
            'columns'    => array(
                'first_image',
            )
        ),

        'model' => array(
            'config' => array(
                'public' => true,
                'exclude_from_search' => true,
                'menu_position' => 20,
                'has_archive'   => true,
                'supports'=> array(
                    'title',
                    'editor',
                    'thumbnail',
                    'page-attributes',
                ),
                'show_in_nav_menus'=> true,
            ),
            'singular' => 'Model',
            'multiple' => 'Models',
            'columns'    => array(
                'first_image',
            )
        ),

        'press' => array(
            'config' => array(
                'public' => true,
                'exclude_from_search' => true,
                'menu_position' => 20,
                'has_archive'   => true,
                'supports'=> array(
                    'title',
                    'editor',
                    'thumbnail',
                    'page-attributes',
                ),
                'show_in_nav_menus'=> true,
            ),
            'singular' => 'Press',
            'multiple' => 'Press',
            'columns'    => array(
                'first_image',
            )
        ),

        'diary' => array(
            'config' => array(
                'public' => true,
                'exclude_from_search' => true,
                'menu_position' => 20,
                'has_archive'   => true,
                'supports'=> array(
                    'title',
                    'editor',
                    'thumbnail',
                    'page-attributes',
                ),
                'show_in_nav_menus'=> true,
            ),
            'singular' => 'Diary',
            'multiple' => 'Diaries',
            'columns'    => array(
                'first_image',
            )
        ),

    );
}

/**
 * Add taxonomies that are used in theme
 * 
 * @return array
 */
function aletheme_get_taxonomies() {
	return array(

        'gallery-category'    => array(
            'for'        => array('gallery'),
            'config'    => array(
                'sort'        => true,
                'args'        => array('orderby' => 'term_order'),
                'hierarchical' => true,
            ),
            'singular'    => 'Gallery Category',
            'multiple'    => 'Gallery Categories',
        ),

        'model-category'    => array(
            'for'        => array('model'),
            'config'    => array(
                'sort'        => true,
                'args'        => array('orderby' => 'term_order'),
                'hierarchical' => true,
            ),
            'singular'    => 'Model Category',
            'multiple'    => 'Model Categories',
        ),
    );
}

/**
 * Add post formats that are used in theme
 * 
 * @return array
 */
function aletheme_get_post_formats() {
	return array(
        'gallery','image','video','quote'
    );
}

/**
 * Get sidebars list
 * 
 * @return array
 */
function aletheme_get_sidebars() {
	$sidebars = array();
	return $sidebars;
}

/**
 * Predefine custom sliders
 * @return array
 */
function aletheme_get_sliders() {
	return array(
		'sneak-peek' => array(
			'title'		=> 'Sneak Peek',
		),
	);
}

/**
 * Post types where metaboxes should show
 * 
 * @return array
 */
function aletheme_get_post_types_with_gallery() {
	return array('post','gallery','inspiration');
}

/**
 * Add custom fields for media attachments
 * @return array
 */
function aletheme_media_custom_fields() {
	return array();
}