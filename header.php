<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package storefront
 */

?>


<!doctype html>
<html <?php language_attributes(); ?>>


<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2.0">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<?php do_action( 'storefront_before_site' ); ?>


<div id="page" class="hfeed site">

	<?php do_action( 'storefront_before_header' ); ?>
  <?php if ( is_home() || is_front_page() ): ?>
  <header id="masthead" class="site-header header header--top inview" role="banner">
  <?php elseif ( is_page('privacy') || is_page('transaction') ): ?>
  <header id="masthead" class="site-header header header--notes inview" role="banner">
  <?php else: ?>
  <header id="masthead" class="site-header header inview" role="banner">
  <?php endif; ?>
		<?php
		/**
		 * Functions hooked into storefront_header action
		 *
		 * @hooked storefront_header_container                 - 0
		 * @hooked storefront_skip_links                       - 5
		 * @hooked storefront_social_icons                     - 10
		 * @hooked storefront_site_branding                    - 20
		 * @hooked storefront_secondary_navigation             - 30
		 * @hooked storefront_product_search                   - 40
		 * @hooked storefront_header_container_close           - 41
		 * @hooked storefront_primary_navigation_wrapper       - 42
		 * @hooked storefront_primary_navigation               - 50
		 * @hooked storefront_header_cart                      - 60
		 * @hooked storefront_primary_navigation_wrapper_close - 68
		 */
		// do_action( 'storefront_header' );
		?>

    <div class="header__imgwrap">
      <?php if ( is_home() || is_front_page() ): ?>
      <ul class="header__slider header__img">
          <li class="header__slider__slide">
              <img class="header__img pc" src="<?php echo get_stylesheet_directory_uri(); ?>/images/common/top_1.jpg" alt="イメージ写真">
              <img class="header__img sp" src="<?php echo get_stylesheet_directory_uri(); ?>/images/common/top_1@sp.jpg" alt="イメージ写真">
          </li>
          <li class="header__slider__slide">
              <img class="header__img pc" src="<?php echo get_stylesheet_directory_uri(); ?>/images/common/top_7.jpg" alt="イメージ写真">
              <img class="header__img sp" src="<?php echo get_stylesheet_directory_uri(); ?>/images/common/top_7@sp.jpg" alt="イメージ写真">
          </li>
          <li class="header__slider__slide">
              <img class="header__img pc" src="<?php echo get_stylesheet_directory_uri(); ?>/images/common/top_8.jpg" alt="イメージ写真">
              <img class="header__img sp" src="<?php echo get_stylesheet_directory_uri(); ?>/images/common/top_8@sp.jpg" alt="イメージ写真">
          </li>
      </ul>
      <?php elseif ( is_page('menu') ): ?>
      <img class="header__img pc" src="<?php echo get_stylesheet_directory_uri(); ?>/images/common/top_2.jpg" alt="イメージ写真">
      <img class="header__img sp" src="<?php echo get_stylesheet_directory_uri(); ?>/images/common/top_2@sp.jpg" alt="イメージ写真">
      <?php elseif ( is_page('commit') ): ?>
      <img class="header__img pc" src="<?php echo get_stylesheet_directory_uri(); ?>/images/common/top_3.jpg" alt="イメージ写真">
      <img class="header__img sp" src="<?php echo get_stylesheet_directory_uri(); ?>/images/common/top_3@sp.jpg" alt="イメージ写真">
      <?php elseif ( is_page('event') ): ?>
      <img class="header__img pc" src="<?php echo get_stylesheet_directory_uri(); ?>/images/common/top_4.jpg" alt="イメージ写真">
      <img class="header__img sp" src="<?php echo get_stylesheet_directory_uri(); ?>/images/common/top_4@sp.jpg" alt="イメージ写真">
      <?php elseif ( is_page('news') ): ?>
      <img class="header__img pc" src="<?php echo get_stylesheet_directory_uri(); ?>/images/common/top_5.jpg" alt="イメージ写真">
      <img class="header__img sp" src="<?php echo get_stylesheet_directory_uri(); ?>/images/common/top_5@sp.jpg" alt="イメージ写真">
      <?php elseif ( is_page('company') ): ?>
      <img class="header__img pc" src="<?php echo get_stylesheet_directory_uri(); ?>/images/common/top_6.jpg" alt="イメージ写真">
      <img class="header__img sp" src="<?php echo get_stylesheet_directory_uri(); ?>/images/common/top_6@sp.jpg" alt="イメージ写真">
      <?php elseif ( is_woocommerce() || is_cart() || is_checkout() || is_account_page() || is_wc_endpoint_url() ): ?>
      <img class="header__img pc" src="<?php echo get_stylesheet_directory_uri(); ?>/images/common/top_6.jpg" alt="イメージ写真">
      <img class="header__img sp" src="<?php echo get_stylesheet_directory_uri(); ?>/images/common/top_6@sp.jpg" alt="イメージ写真">
      <?php else: ?>
      <img class="header__img pc" src="<?php echo get_stylesheet_directory_uri(); ?>/images/common/top_1.jpg" alt="イメージ写真">
      <img class="header__img sp" src="<?php echo get_stylesheet_directory_uri(); ?>/images/common/top_1@sp.jpg" alt="イメージ写真">
      <?php endif; ?>
    </div>
    <div class="header__logo">
    	<a href="/">
    		<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/common/logo.svg">
    	</a>
    </div>
    <div class="header__bubble">
      <?php
      if ( is_home() || is_front_page() ):
      $events = eo_get_events(array(
          'post_type' => 'event',
          'event_end_after'=>'today',
          'event_start_before'=>'today',
          'posts_per_page' => 1
      ));
      if($events):
      foreach($events as $event):

      $namecate = get_field('calender_1', $event_id = $event->ID);
      $nameshop = get_field('calender_2', $event_id = $event->ID) . 'にて';
      ?>
      <p class="header__bubble__txt header__bubble__txt--open mplus">本日は<br><?php echo $namecate; ?><br><?php echo $nameshop; ?><br>出店中！</p>
      <?php endforeach; ?>
      <?php else: ?>
      <p class="header__bubble__txt header__bubble__txt--close mplus">本日は<br>お休みです</p>
      <?php endif; ?>
      <?php elseif ( is_page('menu') ): ?>
      <p class="header__bubble__txt mplus">おしながき</p>
      <?php elseif ( is_page('commit') ): ?>
      <p class="header__bubble__txt mplus">こだわり</p>
      <?php elseif ( is_page('event') ): ?>
      <p class="header__bubble__txt mplus">イベント情報</p>
      <?php elseif ( is_page('news') ): ?>
      <p class="header__bubble__txt mplus">お知らせ</p>
      <?php elseif ( is_page('company') ): ?>
      <p class="header__bubble__txt mplus">会社情報</p>
      <?php elseif ( is_page('privacy') ): ?>
      <p class="header__bubble__txt mplus">プライバシー<br>ポリシー</p>
      <?php elseif ( is_page('transaction') ): ?>
      <p class="header__bubble__txt mplus">特定商取引法に<br>基づく表示</p>
      <?php elseif ( is_woocommerce() || is_cart() || is_checkout() || is_account_page() || is_wc_endpoint_url() ) : ?>
      <p class="header__bubble__txt mplus">オンライン<br>ショップ</p>
      <?php endif; ?>
    </div>

	</header><!-- #masthead -->

	<?php
	/**
	 * Functions hooked in to storefront_before_content
	 *
	 * @hooked storefront_header_widget_region - 10
	 * @hooked woocommerce_breadcrumb - 10
	 */
	do_action( 'storefront_before_content' );
	?>

	<div id="content" class="site-content" tabindex="-1">
		<div class="col-full">

		<?php
		do_action( 'storefront_content_top' );
