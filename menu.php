<?php
/*
Template Name: menu
*/

get_header();
?>

<div class="menu">
    <div class="menu__wrap inview">
        <ul class="menu__list">
            <li class="menu__item">
                <div class="menu__img">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/menu/menu_1.png" alt="イメージ写真">
                </div>
                <p class="menu__copy">福井の絶品グルメ</p>
                <h3 class="menu__name">純けい</h3>
                <p class="menu__txt">ほどよい歯ごたえのある親モモを使い、噛めば噛むほど旨みあふれる純けい串です。</p>
            </li>
            <li class="menu__item">
                <div class="menu__img">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/menu/menu_2.png" alt="イメージ写真">
                </div>
                <p class="menu__copy">柔らかジューシー</p>
                <h3 class="menu__name">若どり</h3>
                <p class="menu__txt">やわらかい若どりモモ肉を使い、香ばしく、ふっくら旨みのある肉汁たっぷりの若どり串です。</p>
            </li>
            <li class="menu__item">
                <div class="menu__img">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/menu/menu_3.png" alt="イメージ写真">
                </div>
                <p class="menu__copy">絶妙なバランス</p>
                <h3 class="menu__name">ねぎま</h3>
                <p class="menu__txt">肉汁たっぷりの若どりモモ肉と甘みのあるネギとの、絶妙なバランスのねぎま串です。</p>
            </li>
            <li class="menu__item">
                <div class="menu__img">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/menu/menu_5.png" alt="イメージ写真">
                </div>
                <p class="menu__copy">豚の旨み溢れる</p>
                <h3 class="menu__name">白</h3>
                <p class="menu__txt">豚の直腸の部分をふんだんに使い、旨み溢れる白串です。</p>
            </li>
            <li class="menu__item">
                <div class="menu__img">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/menu/menu_7.png" alt="イメージ写真">
                </div>
                <p class="menu__copy">2種類の美味しさ</p>
                <h3 class="menu__name">とり皮</h3>
                <p class="menu__txt">親鳥と若どりの2種類があり、コリコリ食感で旨みたっぷりのひね皮串、やわらかくジューシーな若皮串です。</p>
            </li>
            <li class="menu__item">
                <div class="menu__img">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/menu/menu_10.png" alt="イメージ写真">
                </div>
                <p class="menu__copy">鶏の旨みとコリコリ食感</p>
                <h3 class="menu__name">つくね</h3>
                <p class="menu__txt">コリコリ食感のあるジューシーで、鶏肉本来の旨みあるつくね串です。</p>
            </li>
            <li class="menu__item">
                <div class="menu__img">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/menu/menu_11.png" alt="イメージ写真">
                </div>
                <p class="menu__copy">鮮度抜群</p>
                <h3 class="menu__name">レバー</h3>
                <p class="menu__txt">鮮度抜群で、特有の臭みの少ない豚レバーを使用したレバー串です。</p>
            </li>
            <li class="menu__item">
                <div class="menu__img">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/menu/menu_12.png" alt="イメージ写真">
                </div>
                <p class="menu__copy">あっさりとした旨み</p>
                <h3 class="menu__name">鶏はらみ</h3>
                <p class="menu__txt">鶏肉の希少部位で、独自の歯ごたえのある食感で、あっさりとした旨みのある鶏はらみ串です。</p>
            </li>
            <li class="menu__item">
                <div class="menu__img">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/menu/menu_14.png" alt="イメージ写真">
                </div>
                <p class="menu__copy">外側さくっと噛めばジューシー</p>
                <h3 class="menu__name">豚バラ</h3>
                <p class="menu__txt">程よい厚みで豚バラの油が外側はさくっと、噛めばジューシーな豚バラ串です。</p>
            </li>
        </ul>
    </div>
</div>


<?php
do_action( 'storefront_sidebar' );
get_footer();
