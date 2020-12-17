<?php
// 子テーマ認識
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
  wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
  wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array('parent-style') );
}


/**
 * 外部ファイル読み込み
 */

// CSSファイル読み込み
function my_styles() {
    // font関係
    wp_enqueue_style(
        'google-fonts',
        '//fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c:wght@400;700;800&amp;family=Open+Sans:wght@400;700&amp;display=swap'
    );
    wp_enqueue_style( 
        'woocommerce-child-style',
        get_stylesheet_directory_uri() . '/assets/css/woocommerce/woocommerce.css'
    );

    // ページごとのスタイル
    if ( is_home() || is_front_page() ):
        wp_enqueue_style( 
            'index-style',
            get_stylesheet_directory_uri() . '/assets/css/index.css'
        );
    elseif ( is_page('menu') ):
        wp_enqueue_style( 
            'menu-style',
            get_stylesheet_directory_uri() . '/assets/css/menu.css'
        );
    elseif ( is_page('commit') ):
        wp_enqueue_style( 
            'commit-style',
            get_stylesheet_directory_uri() . '/assets/css/commit.css'
        );
    elseif ( is_page('event') ):
        wp_enqueue_style( 
            'event-style',
            get_stylesheet_directory_uri() . '/assets/css/event.css'
        );
    elseif ( is_page('news') ):
        wp_enqueue_style( 
            'news-style',
            get_stylesheet_directory_uri() . '/assets/css/news.css'
        );
    elseif ( is_page('company') ):
        wp_enqueue_style( 
            'company-style',
            get_stylesheet_directory_uri() . '/assets/css/company.css'
        );
    elseif ( is_page('privacy') ):
        wp_enqueue_style( 
            'privacy-style',
            get_stylesheet_directory_uri() . '/assets/css/privacy.css'
        );
    elseif ( is_page('guide') ):
        wp_enqueue_style( 
            'shop-style',
            get_stylesheet_directory_uri() . '/assets/css/shop.css'
        );
    endif;
}
add_action( 'wp_enqueue_scripts', 'my_styles' );

// JSファイル読み込み
function my_scripts() {
    // 共通
    wp_enqueue_script(
        'common-script',
        get_stylesheet_directory_uri() . '/assets/js/index.js'
    );
}
add_action( 'wp_enqueue_scripts', 'my_scripts' );


/**
 * レイアウト変更
 */

// サイドバー削除
function remove_storefront_sidebar() {
  remove_action( 'storefront_sidebar', 'storefront_get_sidebar', 10 );
}
add_action( 'get_header', 'remove_storefront_sidebar' );


/**
 * 共通部分変更
 */

// 単位を円に
function my_woocommerce_currency_symbol( $currency_symbol, $currency ) {
    if ( 'JPY' == $currency ) {
     return '円';

    } else {
     return $currency_symbol;
    }
}
add_filter( 'woocommerce_currency_symbol', 'my_woocommerce_currency_symbol', 10, 2 );


/**
 * 下層ページ部分変更
 */

// パンくずリスト　テキスト変更
add_filter( 'woocommerce_breadcrumb_defaults', 'wcc_change_breadcrumb_home_text' );
function wcc_change_breadcrumb_home_text( $defaults ) {
    $defaults['home'] = '炭火焼とり清';
    return $defaults;
}

add_filter( 'woocommerce_breadcrumb_defaults', 'wcc_change_breadcrumb_delimiter' );
function wcc_change_breadcrumb_delimiter( $defaults ) {
    $defaults['delimiter'] = ' &gt; ';
    return $defaults;
}


/**
 * checkout
 */

remove_action( 'woocommerce_checkout_order_review', 'woocommerce_order_review', 10 );

/**
 * 管理画面制御
 */

// 選択できるカテゴリを1つに絞る
function category_one_select() {
?>
<script type="text/javascript">
    jQuery(function($) {
        var categorydiv = $( '.categorydiv input[type=checkbox]' );
        categorydiv.click( function() {
            $(this).parents( '.categorydiv' ).find( 'input[type=checkbox]' ).prop('checked', false);
            $(this).prop( 'checked', true );
        });
        var inline_edit_col_center = $( '.inline-edit-col-center input[type=checkbox]' );
        inline_edit_col_center.click( function() {
            $(this).parents( '.inline-edit-col-center' ).find( 'input[type=checkbox]' ).prop( 'checked', false );
            $(this).prop( 'checked', true );
        });
        $('.categorychecklist>li:first-child, .cat-checklist>li:first-child').before('<p style="padding-top:5px;">カテゴリーは1つしか選択できません</p>');
    });
</script>
<?php
}
add_action( 'admin_print_footer_scripts', 'category_one_select' );

// 画像が自動でpタグで囲まれないようにする
function filter_ptags_on_images($content){
return preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
}
add_filter('the_content', 'filter_ptags_on_images');

// 画像の自動指定停止
add_filter( 'image_send_to_editor', 'remove_image_attribute', 10 );
add_filter( 'post_thumbnail_html', 'remove_image_attribute', 10 );
function remove_image_attribute( $html ){
    $html = preg_replace( '/(width|height)="\d*"\s/', '', $html );
    $html = preg_replace( '/class=[\'"]([^\'"]+)[\'"]/i', '', $html );
    return $html;
}

// 画像が勝手に圧縮されないようにする
add_filter( 'jpeg_quality', function( $arg ){ return 100; } );



?>