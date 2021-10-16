<?php

// подключить стили и скрипты
add_action( 'wp_enqueue_scripts', 'style_theme' );
add_action( 'wp_footer', 'scripts_theme' );

function style_theme() {
    wp_enqueue_style( 'style-wemeet', get_stylesheet_uri());
	wp_enqueue_style( 'bootstrap.min', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
    wp_enqueue_style( 'owl.carousel.min', get_template_directory_uri() . '/assets/css/owl.carousel.min.css');
    wp_enqueue_style( 'magnific-popup', get_template_directory_uri() . '/assets/css/magnific-popup');
    wp_enqueue_style( 'font-awesome.min', get_template_directory_uri() . '/assets/css/font-awesome.min.css');
    wp_enqueue_style( 'themify-icons', get_template_directory_uri() . '/assets/css/themify-icons.css');
    wp_enqueue_style( 'nice-select', get_template_directory_uri() . '/assets/css/nice-select.css');
    wp_enqueue_style( 'flaticon', get_template_directory_uri() . '/assets/css/flaticon.css');
    wp_enqueue_style( 'animate', get_template_directory_uri() . '/assets/css/animate.css');
    wp_enqueue_style( 'slicknav', get_template_directory_uri() . '/assets/css/slicknav.css');
    wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.css');
    wp_enqueue_style( 'theme-default', get_template_directory_uri() . '/assets/css/theme-default.css');

    wp_enqueue_script( 'jquery');
    wp_enqueue_script( 'modernizr-3.5.0.min', get_template_directory_uri() . '/assets/js/vendor/modernizr-3.5.0.min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'jquery-1.12.4.min.js', get_template_directory_uri() . '/assets/js/vendor/jquery-1.12.4.min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'popper.min', get_template_directory_uri() . '/assets/js/popper.min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'bootstrap.min', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'owl.carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'isotope.pkgd', get_template_directory_uri() . '/assets/js/isotope.pkgd.min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'ajax-form', get_template_directory_uri() . '/assets/js/ajax-form.js', array(), '1.0.0', true );
    wp_enqueue_script( 'waypoints.min', get_template_directory_uri() . '/assets/js/waypoints.min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'jquery.counterup.min', get_template_directory_uri() . '/assets/js/jquery.counterup.min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'imagesloaded.pkgd.min', get_template_directory_uri() . '/assets/js/imagesloaded.pkgd.min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'scrollIt', get_template_directory_uri() . '/assets/js/scrollIt.js', array(), '1.0.0', true );
    wp_enqueue_script( 'jquery.scrollUp.min', get_template_directory_uri() . '/assets/js/jquery.scrollUp.min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'wow.min', get_template_directory_uri() . '/assets/js/wow.min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'nice-select.min', get_template_directory_uri() . '/assets/js/nice-select.min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'jquery.slicknav.min', get_template_directory_uri() . '/assets/js/jquery.slicknav.min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'jquery.magnific-popup.min', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'jquery.countdown', get_template_directory_uri() . '/assets/js/jquery.countdown.js', array(), '1.0.0', true );
    wp_enqueue_script( 'plugins', get_template_directory_uri() . '/assets/js/jquery.plugins.js', array(), '1.0.0', true );
   
    wp_enqueue_script( 'contact', get_template_directory_uri() . '/assets/js/contact.js', array(), '1.0.0', true );
    wp_enqueue_script( 'contact', get_template_directory_uri() . '/assets/js/jquery.ajaxchimp.min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'jquery.form', get_template_directory_uri() . '/assets/js/jquery.form.js', array(), '1.0.0', true );
    wp_enqueue_script( 'jquery.validate.min', get_template_directory_uri() . '/assets/js/jquery.validate.min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'mail-script', get_template_directory_uri() . '/assets/js/mail-script.js', array(), '1.0.0', true );
    wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0.0', true );



}