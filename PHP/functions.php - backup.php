<?php
/**
 * modern-furniture-store-pro functions and definitions
 *
 * @package modern-furniture-store-pro
 */

if ( ! function_exists( 'modern_furniture_store_pro_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function modern_furniture_store_pro_setup() {
	$GLOBALS['content_width'] = apply_filters( 'modern_furniture_store_pro_content_width', 640 );
	if ( ! isset( $content_width ) ) $content_width = 640;
	load_theme_textdomain( 'modern-furniture-store-pro', get_template_directory() . '/languages' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_theme_support( 'custom-header' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );

	add_theme_support( 'custom-logo', array(
		'height'      => 300,
		'width'       => 300,
		'flex-height' => true,
	) );
	add_image_size('modern-furniture-store-pro-homepage-thumb',240,145,true);
	register_nav_menus( array(
		'primary'   => __( 'Primary Menu', 'modern-furniture-store-pro' ),
		'top'   => __( 'Top Menu', 'modern-furniture-store-pro' ),
	) );
	add_theme_support( 'custom-background', array(
		'default-color' => 'ffffff'
	) );
	add_editor_style( array( 'assets/css/editor-style.css') );
}
endif;
add_action( 'after_setup_theme', 'modern_furniture_store_pro_setup' );

/* Theme Font URL */
function modern_furniture_store_pro_font_url() {
	$font_url = '';
	$font_family = array();
	$font_family[] = 'PT Sans:300,400,600,700,800,900';
	$font_family[] = 'Roboto:400,700';
	$font_family[] = 'Roboto Condensed:400,700';
	$font_family[] = 'Open Sans';
	$font_family[] = 'Overpass';
	$font_family[] = 'Montserrat:300,400,600,700,800,900';
	$font_family[] = 'Playball:300,400,600,700,800,900';
	$font_family[] = 'Alegreya:300,400,600,700,800,900';
	$font_family[] = 'Julius Sans One';
	$font_family[] = 'Arsenal';
	$font_family[] = 'Slabo';
	$font_family[] = 'Lato';
	$font_family[] = 'Overpass Mono';
	$font_family[] = 'Source Sans Pro';
	$font_family[] = 'Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i';
	$font_family[] = 'Merriweather';
	$font_family[] = 'Rubik';
	$font_family[] = 'Lora';
	$font_family[] = 'Ubuntu';
	$font_family[] = 'Cabin';
	$font_family[] = 'Arimo';
	$font_family[] = 'Playfair Display';
	$font_family[] = 'Quicksand';
	$font_family[] = 'Padauk';
	$font_family[] = 'Muli';
	$font_family[] = 'Inconsolata';
	$font_family[] = 'Bitter';
	$font_family[] = 'Pacifico';
	$font_family[] = 'Indie Flower';
	$font_family[] = 'VT323';
	$font_family[] = 'Dosis';
	$font_family[] = 'Frank Ruhl Libre';
	$font_family[] = 'Fjalla One';
	$font_family[] = 'Oxygen';
	$font_family[] = 'Arvo';
	$font_family[] = 'Noto Serif';
	$font_family[] = 'Lobster';
	$font_family[] = 'Crimson Text';
	$font_family[] = 'Yanone Kaffeesatz';
	$font_family[] = 'Anton';
	$font_family[] = 'Libre Baskerville';
	$font_family[] = 'Bree Serif';
	$font_family[] = 'Gloria Hallelujah';
	$font_family[] = 'Josefin Sans';
	$font_family[] = 'Abril Fatface';
	$font_family[] = 'Varela Round';
	$font_family[] = 'Vampiro One';
	$font_family[] = 'Shadows Into Light';
	$font_family[] = 'Cuprum';
	$font_family[] = 'Rokkitt';
	$font_family[] = 'Vollkorn';
	$font_family[] = 'Francois One';
	$font_family[] = 'Orbitron';
	$font_family[] = 'Patua One';
	$font_family[] = 'Acme';
	$font_family[] = 'Satisfy';
	$font_family[] = 'Josefin Slab';
	$font_family[] = 'Quattrocento Sans';
	$font_family[] = 'Architects Daughter';
	$font_family[] = 'Russo One';
	$font_family[] = 'Monda';
	$font_family[] = 'Righteous';
	$font_family[] = 'Lobster Two';
	$font_family[] = 'Hammersmith One';
	$font_family[] = 'Courgette';
	$font_family[] = 'Permanent Marker';
	$font_family[] = 'Cherry Swash';
	$font_family[] = 'Cormorant Garamond';
	$font_family[] = 'Poiret One';
	$font_family[] = 'BenchNine';
	$font_family[] = 'Economica';
	$font_family[] = 'Handlee';
	$font_family[] = 'Cardo';
	$font_family[] = 'Alfa Slab One';
	$font_family[] = 'Averia Serif Libre';
	$font_family[] = 'Cookie';
	$font_family[] = 'Chewy';
	$font_family[] = 'Great Vibes';
	$font_family[] = 'Coming Soon';
	$font_family[] = 'Philosopher';
	$font_family[] = 'Days One';
	$font_family[] = 'Kanit';
	$font_family[] = 'Shrikhand';
	$font_family[] = 'Tangerine';
	$font_family[] = 'IM Fell English SC';
	$font_family[] = 'Boogaloo';
	$font_family[] = 'Bangers';
	$font_family[] = 'Fredoka One';
	$font_family[] = 'Bad Script';
	$font_family[] = 'Volkhov';
	$font_family[] = 'Shadows Into Light Two';
	$font_family[] = 'Marck Script';
	$font_family[] = 'Sacramento';
	$font_family[] = 'Poppins';
	$font_family[] = 'PT Serif';
	$query_args = array(
		'family'	=> urlencode(implode('|',$font_family)),
	);
	$font_url = add_query_arg($query_args,'//fonts.googleapis.com/css');
	return $font_url;
}

/* Theme enqueue scripts */
function modern_furniture_store_pro_scripts() {
	wp_enqueue_style( 'modern-furniture-store-pro-font', modern_furniture_store_pro_font_url(), array() );
	wp_enqueue_style( 'bootstrap-style', get_template_directory_uri().'/assets/css/bootstrap.min.css' );
	wp_enqueue_style( 'modern-furniture-store-pro-basic-style', get_stylesheet_uri() );
	wp_style_add_data( 'modern-furniture-store-pro-style', 'rtl', 'replace' );

	/* Inline style sheet */
	require get_parent_theme_file_path( '/inline_style.php' );
	wp_add_inline_style( 'modern-furniture-store-pro-basic-style',$custom_css );

	// Theme css
	if(is_front_page() || is_home()){
      wp_enqueue_style( 'home-page-style', get_template_directory_uri().'/assets/css/theme-css/home.css',true, null,'all');
      wp_add_inline_style( 'home-page-style',$custom_css );

    }else{
      wp_enqueue_style( 'other-page-style', get_template_directory_uri() . '/assets/css/theme-css/other-pages.css',true, null,'all');
      wp_add_inline_style( 'other-page-style',$custom_css );
    }
    if('post' == get_post_type() && is_home()){
      wp_enqueue_style( 'other-page-style', get_template_directory_uri() . '/assets/css/theme-css/other-pages.css',true, null,'all');
      wp_add_inline_style( 'other-page-style',$custom_css );
    }
    wp_enqueue_style( 'header-footer-style', get_template_directory_uri().'/assets/css/theme-css/header-footer.css',true, null,'all' );
    wp_enqueue_style( 'responsive-style', get_template_directory_uri().'/assets/css/theme-css/responsive.css',true, null,'screen and (max-width: 2000px) and (min-width: 320px)' );

    wp_add_inline_style( 'header-footer-style',$custom_css );
    wp_add_inline_style( 'responsive-media-style',$custom_css );

	if ( function_exists( 'is_amp_endpoint' ) && is_amp_endpoint() ) {
	    wp_enqueue_style( 'amp-style', get_template_directory_uri().'/assets/css/theme-css/amp-style.css',true, null,'all' );
	}else{
	    // wp_enqueue_style( 'animation-wow',get_template_directory_uri().'/assets/css/animate.css' );
	    wp_enqueue_style( 'animation-wow', get_template_directory_uri().'/assets/css/animation.css' );
	    wp_enqueue_style( 'aos',get_template_directory_uri().'/assets/css/aos.css' );
	    wp_enqueue_style( 'owl-carousel-style', get_template_directory_uri().'/assets/css/owl.carousel.css' );
	}
	wp_enqueue_style( 'animation-wow', get_template_directory_uri().'/assets/css/animation.css' );
	wp_enqueue_style( 'font-awesome', get_template_directory_uri().'/assets/css/fontawesome-all.css' );
	wp_enqueue_style( 'jquery.fancybox.min', get_template_directory_uri().'/assets/css/jquery.fancybox.min.css' );

	// wp_enqueue_style( 'masonry', get_template_directory_uri().'/assets/css/masonry-1.css' );

	wp_enqueue_script( 'vanimation-wow', get_template_directory_uri() . '/assets/js/wow.min.js', array('jquery'), true);
	wp_enqueue_script( 'animation-aos', get_template_directory_uri() . '/assets/js/aos.js', array( 'jquery' ) );
	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery.min.js', array('jquery'), true);
	wp_enqueue_script( 'tether', get_template_directory_uri() . '/assets/js/tether.js', array('jquery'), '',true);
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js',array('jquery'),'',true);
	wp_enqueue_script( 'owl-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.js',array('jquery'),'',true);
	wp_enqueue_script( 'smooth-scroll', get_template_directory_uri() . '/assets/js/SmoothScroll.js',array('jquery'),'',true);

	wp_enqueue_script( 'jquery.fancybox.min', get_template_directory_uri() . '/assets/js/jquery.fancybox.min.js', array('jquery'),'', true );

	// wp_enqueue_script( 'imagesloaded', get_template_directory_uri() . '/assets/js/imagesloaded.pkgd.min.js', array('jquery'),'', true );

	// wp_enqueue_script( 'isotope', get_template_directory_uri() . '/assets/js/isotope.pkgd.min.js', array('jquery'),'', true );

	// wp_enqueue_script( 'masonry', get_template_directory_uri() . '/assets/js/masonry-1.js', array('jquery'),'', true );

	wp_enqueue_script( 'modern-furniture-store-pro-customscripts', get_template_directory_uri() . '/assets/js/custom.js', array('jquery'),'', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'modern_furniture_store_pro_scripts' );

/* Implement the Custom Header feature. */
require get_parent_theme_file_path( '/inc/custom-header.php' );
/* Widget Sidebar */
require get_parent_theme_file_path('/inc/widget/widget-sidebar.php' );
/* Custom template tags for this theme. */
require get_parent_theme_file_path( '/inc/template-tags.php' );

/** Breadcrumb */
require get_parent_theme_file_path( 'inc/breadcrumbs.php');

/** Functions which enhance the theme by hooking into WordPress */
require get_parent_theme_file_path( 'inc/custom-functions.php');

/* Customizer additions. */
require get_parent_theme_file_path( '/inc/customize/customizer.php' );

require get_parent_theme_file_path( '/theme-wizard/config.php' );

/* URL DEFINES */
define('modern_furniture_store_pro_SITE_URL','https://www.themespride.com');

//social widget file
require get_parent_theme_file_path( '/inc/widget/socail-widget.php' );
//Contact Widget file
require get_parent_theme_file_path( '/inc/widget/contact-widget.php' );
//Contact Widget file
require get_parent_theme_file_path( '/inc/widget/about-us-widget.php' );

function sales_timer_countdown_product() {  

    global $product;

    $sale_date = get_post_meta( $product->get_id(), '_sale_price_dates_to', true );
    
    if ( ! empty( $sale_date ) ) {
        ?>
        <script>
            // Set the date we're counting down to
            var countDownDate = <?php echo $sale_date; ?> * 1000;

            // Update the count down every 1 second
            var x = setInterval(function() {
                // Get today's date and time
                var now = new Date().getTime();
                    
                // Find the distance between now and the count down date
                var distance = countDownDate - now;     
                    
                // Time calculations for days, hours, minutes and seconds
                var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                var seconds = Math.floor((distance % (1000 * 60)) / 1000);
                    
                // Output the result in an element with id="saleend"
                document.getElementById("saleend").innerHTML = "<div class='timer_blk'><span class='timer_days'>" + days + "</span><span class='smalltext'>Day</span>" + "</div>" + "   " +"<div class='timer_blk'><span class='timer_days'>" + hours + "</span><span class='smalltext'>Hrs</span>" + "</div>" + "   " + "<div class='timer_blk'><span class='timer_days'>" + minutes + "</span><span class='smalltext'>Min</span>" + "</div>" + "   " + "<div class='timer_blk'><span class='timer_days'>" + seconds + "</span><span class='smalltext'>Sec</spn" + "</div>";
                    
                // If the count down is over, write some text 
                if (distance < 0) {
                    clearInterval(x);
                    document.getElementById("saleend").innerHTML = "The sale for this product has EXPIRED";
                }
            }, 1000);
        </script>

        <!-- this is where the countdown is displayed -->
        <div id="saleend"></div>
        <?php
    }
}
add_action( 'woocommerce_after_add_to_cart_form', 'sales_timer_countdown_product', 20 );

// add_shortcode( 'sales_timer_shortcode', 'sales_timer_countdown_product' );