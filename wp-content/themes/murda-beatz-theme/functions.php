<?php 

require_once('includes/wp_bootstrap_navwalker.php');
require_once('post-type/custom-post-type.php');

define('HOMELINK', site_url('/'));
define('PATH', get_template_directory_uri());
define('IMAGES', get_template_directory_uri()."/img" );


//Register menus
register_nav_menus( array(
	'primary_menu' => 'Primary Menu',
	'secondary_menu' => 'Secondary Menu',
) );

if ( function_exists( 'add_theme_support' ) ) {
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'custom-logo', array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    ) );
} 
function register_custom_widget_area() {
    register_sidebar(
                        array(
                        'id' => 'new-widget-area',
                        'name' => esc_html__( 'My new widget area', 'theme-domain' ),
                        'description' => esc_html__( 'A new widget area made for testing purposes', 'theme-domain' ),
                        'before_widget' => '<div id="%1$s" class="widget %2$s">',
                        'after_widget' => '</div>',
                        'before_title' => '<div class="widget-title-holder"><h3 class="widget-title">',
                        'after_title' => '</h3></div>'
                        )
    );
}
add_action( 'widgets_init', 'register_custom_widget_area' );

/*function themename_custom_logo_setup() {
 $defaults = array(
 'height'      => 100,
 'width'       => 400,
 'flex-height' => true,
 'flex-width'  => true,
 'header-text' => array( 'site-title', 'site-description' ),
 );
 add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'themename_custom_logo_setup' );*/

//Add styles and scripts
function kr_scripts() {
    

    //STYLES

    //wp_register_style( 'jquery-ui-css', 'https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css',array(), null  );   
    //wp_enqueue_style( 'jquery-ui-css' );

    wp_register_style( 'bootstrap', PATH.'/css/bootstrap.min.css',array(), null  );   
    wp_enqueue_style( 'bootstrap' );

    wp_register_style( 'animate', PATH.'/css/animate.min.css',array(), null  );   
    wp_enqueue_style( 'animate' );

    wp_register_style( 'hover', PATH.'/css/hover.min.css',array(), null  );   
    wp_enqueue_style( 'hover' );

    wp_register_style( 'owl', PATH.'/dist/assets/owl.carousel.min.css',array(), null  );   
    wp_enqueue_style( 'owl' );

    wp_register_style( 'default-owl', PATH.'/dist/assets/owl.theme.default.min.css',array(), null  );   
    wp_enqueue_style( 'default-owl' );

    wp_register_style( 'styles', get_stylesheet_uri(),array(), null  );   
    wp_enqueue_style( 'styles' );    



    wp_register_script( 'jquery-version', 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js', array('jquery'),null,true);
    wp_enqueue_script('jquery-version');

    /*wp_register_script( 'jquery-UI', 'https://code.jquery.com/ui/1.12.1/jquery-ui.js', array('jquery'),null,true);
    wp_enqueue_script('jquery-UI');*/

    wp_register_script( 'bootstrap', PATH.'/js/bootstrap.min.js', array('jquery'),null,true);
    wp_enqueue_script('bootstrap');

    
    wp_register_script( 'wow', PATH.'/js/wow.min.js', array('jquery'),null,true);
    wp_enqueue_script('wow');

    wp_register_script( 'owl', PATH.'/dist/owl.carousel.min.js', array('jquery'),null,true);
    wp_enqueue_script('owl');

    wp_register_script( 'app', PATH.'/js/apps.js', array('jquery'),null,true);
    wp_enqueue_script('app');
	
	
}
add_action( 'wp_enqueue_scripts', 'kr_scripts',1 );

//social media
function social_link_customizer_settings($wp_customize)
{
    $wp_customize->add_setting(
        'url_facebook',
        array(
            'default' => '',
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options'
        ),
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'url_facebook',
            array(
                'label'      => __('Url Facebook', 'textdomain'),
                'settings'   => 'url_facebook',
                'priority'   => 10,
                'section'    => 'title_tagline',
                'type'       => 'text',
            ),
        ),
    );

    //Twitter
    $wp_customize->add_setting(
        'url_twitter',
        array(
            'default' => '',
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options'
        ),
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'url_twitter',
            array(
                'label'      => __('Url Twitter', 'textdomain'),
                'settings'   => 'url_twitter',
                'priority'   => 10,
                'section'    => 'title_tagline',
                'type'       => 'text',
            ),

        ),
    );

    //song
    $wp_customize->add_setting(
        'url_song',
        array(
            'default' => '',
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options'
        ),
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'url_song',
            array(
                'label'      => __('Url Song', 'textdomain'),
                'settings'   => 'url_song',
                'priority'   => 10,
                'section'    => 'title_tagline',
                'type'       => 'text',
            ),

        ),
    );

    //Instagram
    $wp_customize->add_setting(
        'url_instagram',
        array(
            'default' => '',
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options'
        ),
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'url_instagram',
            array(
                'label'      => __('Url Instagram', 'textdomain'),
                'settings'   => 'url_instagram',
                'priority'   => 10,
                'section'    => 'title_tagline',
                'type'       => 'text',
            ),

        ),
    );

    //mail
    $wp_customize->add_setting(
        'url_personal_mail',
        array(
            'default' => '',
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options'
        ),
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'url_personal_mail',
            array(
                'label'      => __('Email', 'textdomain'),
                'settings'   => 'url_personal_mail',
                'priority'   => 10,
                'section'    => 'title_tagline',
                'type'       => 'text',
            ),

        ),
    );

    //spotify
    $wp_customize->add_setting(
        'url_spotify',
        array(
            'default' => '',
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options'
        ),
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'url_spotify',
            array(
                'label'      => __('Url Spotify', 'textdomain'),
                'settings'   => 'url_spotify',
                'priority'   => 10,
                'section'    => 'title_tagline',
                'type'       => 'text',
            ),

        ),
    );
}
add_action('customize_register', 'social_link_customizer_settings');

//Social Media
function social_media_area()
{

    $redes = '<div class="items_box justify-content-center justify-content-md-start justify-content-lg-start">';
    //Facebook
    if (get_theme_mod("url_facebook")) :
        $redes .= '<a href="' . get_theme_mod("url_facebook") . '">';
        $redes .= '<i class="fa fa-facebook" aria-hidden="true"></i>';
        $redes .= '</a>';
    endif;

    //Twitter
    if (get_theme_mod("url_twitter")) :
        $redes .= '<a href="' . get_theme_mod("url_twitter") . '">';
        $redes .= '<i class="fa fa-twitter" aria-hidden="true"></i>';
        $redes .= '</a>';
    endif;

    //Youtube
    if (get_theme_mod("url_song")) :
        $redes .= '<a href="' . get_theme_mod("url_song") . '">';
        $redes .= '<i class="fa fa-music" aria-hidden="true"></i>';
        $redes .= '</a>';
    endif;

    //Instagram
    if (get_theme_mod("url_instagram")) :
        $redes .= '<a href="' . get_theme_mod("url_instagram") . '">';
        $redes .= '<i class="fa fa-instagram" aria-hidden="true"></i>';
        $redes .= '</a>';
    endif;

        //email
    if (get_theme_mod("url_personal_mail")) :
        $redes .= '<a href="mailto:' . get_theme_mod("url_personal_mail") . '">';
        $redes .= '<i class="fa fa-envelope" aria-hidden="true"></i>';
        $redes .= '</a>';
    endif;

        //Instagram
    if (get_theme_mod("url_spotify")) :
        $redes .= '<a href="' . get_theme_mod("url_spotify") . '">';
        $redes .= '<i class="fa fa-spotify" aria-hidden="true"></i>';
        $redes .= '</a>';
    endif;

    $redes .= '</div>';



    return $redes;
}

add_action('kr_before_content', 'social_media_area');
