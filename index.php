<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package storefront
 */

get_header();
?>

<div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">

    <div class="index">

        <nav class="index__nav">
            <h2 class="index__ttl mplus sp inview">メニュー</h2>
            <ul class="index__nav__list inview">
                <li class="index__nav__item">
                    <a class="index__nav__a" href="<?php echo home_url('/'); ?>menu/">
                        <div class="index__nav__img">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/index/nav_1.svg" alt="">
                        </div>
                        <p class="index__nav__txt">おしながき</p>
                    </a>
                </li>
                <li class="index__nav__item">
                    <a class="index__nav__a" href="<?php echo home_url('/'); ?>commit/">
                        <div class="index__nav__img">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/index/nav_2.svg" alt="">
                        </div>
                        <p class="index__nav__txt">こだわり</p>
                    </a>
                </li>
                <li class="index__nav__item pc">
                    <a class="index__nav__a" href="<?php echo home_url('/'); ?>event/">
                        <div class="index__nav__img">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/index/nav_3.svg" alt="">
                        </div>
                        <p class="index__nav__txt">イベント<br>情報</p>
                    </a>
                </li>
                <li class="index__nav__item pc">
                    <a class="index__nav__a" href="<?php echo home_url('/'); ?>shop/">
                        <div class="index__nav__img">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/index/nav_4.svg" alt="">
                        </div>
                        <p class="index__nav__txt">オンライン<br>ショップ</p>
                    </a>
                </li>
                <?php
                $args = array(
                    'posts_per_page' => 1,
                    'post_type' => array('news','post'),
                    'post_status' => 'publish'
                );
                $posts = get_posts($args);
                foreach($posts as $post) :
                    setup_postdata($post)
                ?>
                <?php
                $days = 7; //Newを表示させたい期間の日数
                $today = date_i18n('U');
                $entry = get_the_time('U');
                $kiji = date('U',($today - $entry)) / 86400 ;
                if( $days > $kiji ):
                ?>
                <li class="index__nav__item index__nav__item--new pc">
                <?php
                else:
                ?>
                <li class="index__nav__item pc">
                <?php
                endif;
                ?>
                    <a class="index__nav__a" href="<?php echo home_url('/'); ?>news/">
                        <div class="index__nav__img">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/index/nav_5.svg" alt="">
                        </div>
                        <p class="index__nav__txt">お知らせ</p>
                    </a>
                </li>
                <?php
                endforeach;
                wp_reset_postdata();
                ?>
            </ul>
            <ul class="index__nav__list inview sp">
                                <li class="index__nav__item">
                    <a class="index__nav__a" href="<?php echo home_url('/'); ?>event/">
                        <div class="index__nav__img">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/index/nav_3.svg" alt="">
                        </div>
                        <p class="index__nav__txt">イベント<br>情報</p>
                    </a>
                </li>
                <li class="index__nav__item">
                    <a class="index__nav__a" href="<?php echo home_url('/'); ?>shop/">
                        <div class="index__nav__img">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/index/nav_4.svg" alt="">
                        </div>
                        <p class="index__nav__txt">オンライン<br>ショップ</p>
                    </a>
                </li>
                <?php
                $args = array(
                    'posts_per_page' => 1,
                    'post_type' => array('news','post'),
                    'post_status' => 'publish'
                );
                $posts = get_posts($args);
                foreach($posts as $post) :
                    setup_postdata($post)
                ?>
                <?php
                $days = 7; //Newを表示させたい期間の日数
                $today = date_i18n('U');
                $entry = get_the_time('U');
                $kiji = date('U',($today - $entry)) / 86400 ;
                if( $days > $kiji ):
                ?>
                <li class="index__nav__item index__nav__item--new">
                <?php
                else:
                ?>
                <li class="index__nav__item">
                <?php
                endif;
                ?>
                    <a class="index__nav__a" href="<?php echo home_url('/'); ?>news/">
                        <div class="index__nav__img">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/index/nav_5.svg" alt="">
                        </div>
                        <p class="index__nav__txt">お知らせ</p>
                    </a>
                </li>
                <?php
                endforeach;
                wp_reset_postdata();
                ?>
            </ul>
        </nav>
        
        <?php
        date_default_timezone_set('Asia/Tokyo');

        $events = eo_get_events(array(
            'post_type' => 'event',
            'event_end_after'=>'today',
            'event_start_before'=>'today',
            'posts_per_page' => 1
        ));

        if($events):
        ?>
        <section class="index__calendar index__calendar--open inview">
        <?php else: ?>
        <section class="index__calendar index__calendar--close inview">
        <?php endif; ?>
            <div class="index__calendar__cont">
                <h2 class="index__ttl mplus">出店カレンダー</h2>
                <div class="index__calendar__wrap">
                    <div class="index__calendar__box index__calendar__box--info">
                        <p class="index__calendar__today mplus">
                            <span class="index__calendar__today--year"><?php echo date('Y.'); ?></span>
                            <span class="index__calendar__today--month"><?php echo date('m.d'); ?></span>
                            <?php
                            //配列を使用し、要素順に(日:0〜土:6)を設定する
                            $week = [
                                '日', //0
                                '月', //1
                                '火', //2
                                '水', //3
                                '木', //4
                                '金', //5
                                '土', //6
                            ];

                            $date = date('w');

                            //日本語で曜日を出力
                            // echo $week[$date] . '曜';

                            ?>
                            <span class="index__calendar__today--week"><?php echo $week[$date] . '曜'; ?></span>
                        </p>
                        <div class="index__calendar__location">
                            <?php
                            if($events):
                            foreach($events as $event):

                            $namecate = get_field('calender_1', $event_id = $event->ID);
                            $nameshop = get_field('calender_2', $event_id = $event->ID) . 'にて';
                            ?>
                            <p class="index__calendar__location__txt">
                                本日は<br>
                                <span class="index__calendar__location--place"><?php echo $namecate; ?><br><?php echo $nameshop; ?></span>
                                <br>
                                出店中です！
                            </p>
                            <?php endforeach; ?>
                            <?php else: ?>
                            <p class="index__calendar__location__txt">
                                本日は<br>
                                お休みです
                            </p>
                            <?php endif; ?>
                        </div>
                        <div class="index__calendar__schedule sp">
                        <?php echo do_shortcode( '[eo_fullcalendar defaultView="month" titleformatweek="Y年Mj日" columnformatweek="D n/j" responsive="false" timeformat=""]' ) ?>
                        </div>
                        <div class="index__calendar__contact">
                            <p class="index__calendar__contact__txt">ご予約・お問い合わせはこちらから</p>
                            <p class="index__calendar__contact__tel mplus">
                                <a class="index__calendar__contact__a" href="tel:08002007424">0800-200-7424</a>
                            </p>
                        </div>
                    </div>
                    <div class="index__calendar__box index__calendar__box--schedule">
                        <div class="index__calendar__schedule pc">
                        <?php echo do_shortcode( '[eo_fullcalendar defaultView="month" titleformatweek="Y年Mj日" columnformatweek="D n/j"]' ) ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php if($events): ?>
            <div class="index__calendar__anime index__calendar__anime--open pc">
            <?php else: ?>
            <div class="index__calendar__anime index__calendar__anime--close pc">
            <?php endif; ?>
                <div class="index__calendar__anime--move">
                    <div class="index__calendar__anime--1">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/index/cale_1.svg" alt="">
                    </div>
                    <div class="index__calendar__anime--2">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/index/cale_2.svg" alt="">
                    </div>
                    <div class="index__calendar__anime--3">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/index/cale_4.svg" alt="">
                    </div>
                </div>
                <div class="index__calendar__anime--4">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/index/cale_5.svg" alt="">
                </div>
            </div>
        </section>

        <section class="index__pickup">
            <div class="index__pickup__wrap">
                <div class="index__pickup__box">
                    <div class="index__pickup__txtbox inview">
                        <div class="index__pickup__txtwrap">
                            <p class="index__pickup__copy">福井の絶品グルメ</p>
                            <h3 class="index__pickup__name">純けい</h3>
                            <p class="index__pickup__txt">ほどよい歯ごたえのある親モモを使い<br>噛めば噛むほど旨みあふれる純けい串です！</p>
                        </div>
                    </div>
                    <div class="index__pickup__img">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/index/pickup_1.png" alt="">
                    </div>
                </div>
                <div class="index__pickup__box">
                    <div class="index__pickup__img pc">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/index/pickup_2.png" alt="">
                    </div>
                    <div class="index__pickup__txtbox inview">
                        <div class="index__pickup__txtwrap">
                            <p class="index__pickup__copy">柔らかジューシー</p>
                            <h3 class="index__pickup__name">若どり</h3>
                            <p class="index__pickup__txt">やわらかい若どりモモ肉を使い<br>香ばしく、ふっくら旨みのある肉汁たっぷりの<br class="sp">若どり串です！</p>
                        </div>
                    </div>
                    <div class="index__pickup__img sp">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/index/pickup_2@sp.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="index__pickup__anime inview">
                <div class="index__pickup__anime--1">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/index/pickup_6.svg" alt="">
                </div>
                <div class="index__pickup__anime--2">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/index/pickup_7.svg" alt="">
                </div>
                <div class="index__pickup__anime--3">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/index/pickup_8.svg" alt="">
                </div>
            </div>
        </section>

        <section class="index__menu">
            <h2 class="index__ttl mplus inview">他の串もいかが？</h2>
            <ul class="index__menu__list inview">
                <li class="index__menu__item">
                    <div class="index__menu__img">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/menu/menu_3.png" alt="">
                    </div>
                    <h3 class="index__menu__name">ねぎま</h3>
                </li>
                <li class="index__menu__item">
                    <div class="index__menu__img">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/menu/menu_5.png" alt="">
                    </div>
                    <h3 class="index__menu__name">白</h3>
                </li>
                <li class="index__menu__item">
                    <div class="index__menu__img">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/menu/menu_7.png" alt="">
                    </div>
                    <h3 class="index__menu__name">とり皮</h3>
                </li>
            </ul>
            <div class="btn inview">
                <a href="<?php echo home_url('/'); ?>menu/">
                    <p class="btn__txt">おしながきについて詳しく見る</p>
                </a>
            </div>
        </section>

    </div><!-- .index -->

  </main><!-- #main -->
</div><!-- #primary -->

<?php
do_action( 'storefront_sidebar' );
get_footer();
