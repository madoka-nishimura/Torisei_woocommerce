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
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

get_header();
?>

<?php
/**
 * Hook: woocommerce_archive_description.
 *
 * @hooked woocommerce_taxonomy_archive_description - 10
 * @hooked woocommerce_product_archive_description - 10
 */
do_action( 'woocommerce_archive_description' );
?>
<div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">
    <div class="shop">
        <div class="breadcrumb-area pc">
            <?php woocommerce_breadcrumb(); ?>
        </div>

        <?php
        $args = array(
            'post_type' => 'product',
            'posts_per_page' => -1
        );
        $loop = new WP_Query( $args );
        if ( $loop->have_posts() ) {
            while ( $loop->have_posts() ) : $loop->the_post();
                wc_get_template_part( 'content', 'product' );
            endwhile;
        } else {
            do_action( 'woocommerce_no_products_found' );
        }
        wp_reset_postdata();
        ?>
    </div>
  </main><!-- #main -->
</div><!-- #primary -->

<?php
do_action( 'storefront_sidebar' );
get_footer();
