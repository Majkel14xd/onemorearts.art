<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     3.4.3
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header( 'shop' );
$background_img = get_theme_mod('modern_furniture_store_pro_inner_page_banner_bgimage');?>

<div class="title-box" style="background-image:url(<?php echo esc_url( $background_img); ?>)">
	<div class="container">
		<div class="above_title ">
			<header class="woocommerce-products-header">
				<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
					<h1 class="woocommerce-products-header__title page-title"><?php woocommerce_page_title(); ?></h1>
				<?php endif; ?>

				<?php if(get_theme_mod('modern_furniture_store_pro_site_breadcrumb_enable',true)){
	        	  	echo tp_breadcrumbs();
	        	} ?>

				<?php
				/**
				 * Hook: woocommerce_archive_description.
				 *
				 * @hooked woocommerce_taxonomy_archive_description - 10
				 * @hooked woocommerce_product_archive_description - 10
				 */
				do_action( 'woocommerce_archive_description' );
				?>
			</header>
		</div>
	</div>
</div>

<div class="shop">
<?php /**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
do_action( 'woocommerce_before_main_content' );

?>
	<div class="row">
		<div class="<?php if( get_theme_mod( 'modern_furniture_store_pro_shop_sidebar',true) != '') { ?><?php if( get_theme_mod( 'modern_furniture_store_pro_sidebar_size', '1/3 Size') == '1/3 Size') { ?>col-lg-9 col-md-8<?php } else { ?>col-lg-8 col-md-8 <?php } ?><?php } else { ?>col-lg-12 col-md-12 <?php } ?>">
			<?php

			if ( have_posts() ) {

				/**
				 * Hook: woocommerce_before_shop_loop.
				 *
				 * @hooked wc_print_notices - 10
				 * @hooked woocommerce_result_count - 20
				 * @hooked woocommerce_catalog_ordering - 30
				 */
				do_action( 'woocommerce_before_shop_loop' );

				woocommerce_product_loop_start();

				if ( wc_get_loop_prop( 'total' ) ) {
					while ( have_posts() ) {
						the_post();

						/**
						 * Hook: woocommerce_shop_loop.
						 *
						 * @hooked WC_Structured_Data::generate_product_data() - 10
						 */
						do_action( 'woocommerce_shop_loop' );

						wc_get_template_part( 'content', 'product' );
					}
				}

				woocommerce_product_loop_end();

				/**
				 * Hook: woocommerce_after_shop_loop.
				 *
				 * @hooked woocommerce_pagination - 10
				 */
				do_action( 'woocommerce_after_shop_loop' );
			} else {
				/**
				 * Hook: woocommerce_no_products_found.
				 *
				 * @hooked wc_no_products_found - 10
				 */
				do_action( 'woocommerce_no_products_found' );
			} ?>
		</div>
		<?php if(get_theme_mod('modern_furniture_store_pro_shop_sidebar',true)){ ?>
			<div class="<?php if( get_theme_mod( 'modern_furniture_store_pro_sidebar_size', '1/3 Size') == '1/3 Size') { ?>col-lg-3 col-md-4<?php } else { ?>col-lg-4 col-md-4 <?php } ?>">
				<?php if(is_active_sidebar('product-sidebar')){ ?>
					<div id="sidebar">
						<?php dynamic_sidebar('product-sidebar');?>
					</div>
				<?php }else{
				/**
				 * Hook: woocommerce_sidebar.
				 *
				 * @hooked woocommerce_get_sidebar - 10
				 */
				do_action( 'woocommerce_sidebar' );
				} ?>
			</div>
		<?php }?>
	</div>
	<?php

	/**
	 * Hook: woocommerce_after_main_content.
	 *
	 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
	 */
	do_action( 'woocommerce_after_main_content' );?>
</div>
<?php
get_footer( 'shop' );
