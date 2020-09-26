<?php

function portAddScripts()
{
    // CSS
    wp_enqueue_style('fonts', 'https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900', array(), '1.1', 'all');
    wp_enqueue_style('bootstrapicon', get_template_directory_uri() . '/css/open-iconic-bootstrap.min.css', array(), '1.1', 'all');
    wp_enqueue_style('animate', get_template_directory_uri() . '/css/animate.css', array(), '1.1', 'all');
    wp_enqueue_style('owlCarousel', get_template_directory_uri() . '/css/owl.carousel.min.css', array(), '1.1', 'all');

    wp_enqueue_style('owltheme', get_template_directory_uri() . '/css/owl.theme.default.min.css', array(), '1.1', 'all');

    wp_enqueue_style('magnificpopup', get_template_directory_uri() . '/css/magnific-popup.css', array(), '1.1', 'all');

    wp_enqueue_style('aos', get_template_directory_uri() . '/css/aos.css', array(), '1.1', 'all');

    wp_enqueue_style('ionicons', get_template_directory_uri() . '/css/ionicons.min.css', array(), '1.1', 'all');

    wp_enqueue_style('flaticons', get_template_directory_uri() . '/css/flaticon.css', array(), '1.1', 'all');

    wp_enqueue_style('icomoons', get_template_directory_uri() . '/css/icomoon.css', array(), '1.1', 'all');

    wp_enqueue_style('main', get_template_directory_uri() . '/css/style.css', array(), '1.1', 'all');


    // Scripts
    wp_enqueue_script('popper', get_template_directory_uri() . '/js/popper.min.js', array('jquery'), 1.1, true);
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), 1.1, true);

    wp_enqueue_script('waypoints', get_template_directory_uri() . '/js/jquery.waypoints.min.js', array('jquery'), 1.1, true);

    wp_enqueue_script('stellar', get_template_directory_uri() . '/js/jquery.stellar.min.js', array('jquery'), 1.1, true);

    wp_enqueue_script('carouselowl', get_template_directory_uri() . '/js/owl.carousel.min.js', array('jquery'), 1.1, true);

    wp_enqueue_script('magnific', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js', array('jquery'), 1.1, true);

    wp_enqueue_script('easing', get_template_directory_uri() . '/js/jquery.easing.1.3.js', array('jquery'), 1.1, true);

    wp_enqueue_script('aos', get_template_directory_uri() . '/js/aos.js', array('jquery'), 1.1, true);

    wp_enqueue_script('animateNumber', get_template_directory_uri() . '/js/jquery.animateNumber.min.js', array('jquery'), 1.1, true);

    wp_enqueue_script('scrollax', get_template_directory_uri() . '/js/scrollax.min.js', array('jquery'), 1.1, true);

    wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', array('jquery'), 1.1, true);
}
add_action('wp_enqueue_scripts', 'portAddScripts');
