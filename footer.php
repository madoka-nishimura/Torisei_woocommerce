<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package storefront
 */

?>


		</div><!-- .col-full -->
	</div><!-- #content -->

	<?php do_action( 'storefront_before_footer' ); ?>

	<footer class="footer">
	    <div class="footer__wrap">

	        <div class="footer__block">
	            <div class="footer__logo">
	                <a href="<?php echo home_url('/'); ?>">
	                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/common/footer_logo.svg" alt="炭火焼とり清">
	                </a>
	            </div>
	            <p class="footer__access">福井県鯖江市鳥羽1丁目10-21 ザ・レジェンド202</p>
	            <p class="footer__add">
	                <span class="footer__add--tel"><a href="tel:0778427424">TEL 0778-42-7424</a></span>/<span class="footer__add--fax">FAX 0778-51-1029</span>
	            </p>
	        </div>

	        <div class="footer__contact sp">
	            <p class="footer__contact__txt">ご予約・お問い合わせはこちらから</p>
	            <p class="footer__contact__tel mplus">
	                <a class="footer__contact__a" href="tel:08002007424">0800-200-7424</a>
	            </p>
	        </div>

	        <div class="footer__block">
	            <nav class="footer__nav">
	                <ul class="footer__nav__list">
	                    <li class="footer__nav__item">
	                        <a class="footer__nav__txt" href="<?php echo home_url('/'); ?>">ホーム</a>
	                    </li>
	                </ul>
	                <ul class="footer__nav__list">
	                    <li class="footer__nav__item">
	                        <a class="footer__nav__txt" href="<?php echo home_url('/'); ?>menu/">おしながき</a>
	                    </li>
	                    <li class="footer__nav__item">
	                        <a class="footer__nav__txt" href="<?php echo home_url('/'); ?>commit/">こだわり</a>
	                    </li>
	                    <li class="footer__nav__item">
	                        <a class="footer__nav__txt" href="<?php echo home_url('/'); ?>event/">イベント情報</a>
	                    </li>
                        <li class="footer__nav__item footer__nav__item--shop sp">
                            <a class="footer__nav__txt" href="/">オンラインショップ</a>
                            <ul class="footer__nav__shop">
                                <li class="footer__nav__shop__item footer__nav__shop__item">
                                    <a class="footer__nav__shop__txt" href="<?php echo home_url('/'); ?>shop/">商品一覧</a>
                                </li>
                                <li class="footer__nav__shop__item footer__nav__shop__item">
                                    <a class="footer__nav__shop__txt" href="<?php echo home_url('/'); ?>cart/">ショッピングカート</a>
                                </li>
                                <li class="footer__nav__shop__item footer__nav__shop__item">
                                    <a class="footer__nav__shop__txt" href="<?php echo home_url('/'); ?>member/">会員ページ</a>
                                </li>
                                <li class="footer__nav__shop__item footer__nav__shop__item">
                                    <a class="footer__nav__shop__txt" href="<?php echo home_url('/'); ?>guide/">ご利用ガイド</a>
                                </li>
                            </ul>
                        </li>
	                    <li class="footer__nav__item">
	                        <a class="footer__nav__txt" href="<?php echo home_url('/'); ?>news/">お知らせ</a>
	                    </li>
	                    <li class="footer__nav__item">
	                        <a class="footer__nav__txt" href="<?php echo home_url('/'); ?>company/">会社情報</a>
	                    </li>
	                </ul>
                    <ul class="footer__nav__list pc">
                        <li class="footer__nav__item">
                          <p class="footer__nav__txt">オンラインショップ</p>
                        </li>
                        <li class="footer__nav__item footer__nav__item--thin">
                            <a class="footer__nav__txt" href="<?php echo home_url('/'); ?>shop/">商品一覧</a>
                        </li>
                        <li class="footer__nav__item footer__nav__item--thin">
                            <a class="footer__nav__txt" href="<?php echo home_url('/'); ?>cart/">ショッピングカート</a>
                        </li>
                        <li class="footer__nav__item footer__nav__item--thin">
                            <a class="footer__nav__txt" href="<?php echo home_url('/'); ?>member/">会員ページ</a>
                        </li>
                        <li class="footer__nav__item footer__nav__item--thin">
                            <a class="footer__nav__txt" href="<?php echo home_url('/'); ?>guide/">ご利用ガイド</a>
                        </li>
                    </ul>
                    <ul class="footer__nav__list">
                        <li class="footer__nav__item footer__nav__item--small">
                            <a class="footer__nav__txt" href="<?php echo home_url('/'); ?>transaction/">特定商取引法に基づく表示</a>
                        </li>
                        <li class="footer__nav__item footer__nav__item--small">
                            <a class="footer__nav__txt" href="<?php echo home_url('/'); ?>privacy/">プライバシーポリシー</a>
                        </li>
                    </ul>
	            </nav>
	        </div>

	        <div class="footer__copy">
	            <small>&copy; 2020 TORISEI ALL RIGHTS RESERVED.</small>
	        </div>

	    </div>
	</footer>

	<?php do_action( 'storefront_after_footer' ); ?>

</div><!-- #page -->


<div class="humb">

    <div class="humb__toggle">
        <a class="humb__toggle__a" href="<?php echo home_url('/'); ?>">
            <div class="humb__toggle__bars">
                <div class="humb__toggle__bar"></div>
                <div class="humb__toggle__bar"></div>
                <div class="humb__toggle__bar"></div>
            </div>
            <p class="humb__toggle__txt mplus humb__toggle__txt--open">MENU</p>
            <p class="humb__toggle__txt mplus humb__toggle__txt--close">CLOSE</p>
        </a>
    </div>
    
    <div class="humb__content">
        <div class="humb__content__wrap">
            <div class="humb__logo pc">
                <a href="<?php echo home_url('/'); ?>">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/common/footer_logo.svg" alt="炭火焼とり清">
                </a>
            </div>
            <nav class="humb__nav">
                <ul class="humb__nav__list">
                    <li class="humb__nav__item">
                        <a class="humb__nav__a" href="<?php echo home_url('/'); ?>menu/">
                            <div class="humb__nav__img">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/index/nav_1.svg" alt="イメージアイコン">
                            </div>
                            <p class="humb__nav__txt">おしながき</p>
                        </a>
                    </li>
                    <li class="humb__nav__item">
                        <a class="humb__nav__a" href="<?php echo home_url('/'); ?>commit/">
                            <div class="humb__nav__img">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/index/nav_2.svg" alt="イメージアイコン">
                            </div>
                            <p class="humb__nav__txt">こだわり</p>
                        </a>
                    </li>
                    <li class="humb__nav__item">
                        <a class="humb__nav__a" href="<?php echo home_url('/'); ?>event/">
                            <div class="humb__nav__img">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/index/nav_3.svg" alt="イメージアイコン">
                            </div>
                            <p class="humb__nav__txt">イベント<br>情報</p>
                        </a>
                    </li>
                    <li class="humb__nav__item">
                        <a class="humb__nav__a" href="<?php echo home_url('/'); ?>company/">
                            <div class="humb__nav__img">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/index/nav_4.svg" alt="イメージアイコン">
                            </div>
                            <p class="humb__nav__txt">オンライン<br class="sp">ショップ</p>
                        </a>
                    </li>
                    <li class="humb__nav__item humb__nav__item--new">
                        <a class="humb__nav__a" href="<?php echo home_url('/'); ?>news/">
                            <div class="humb__nav__img">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/index/nav_5.svg" alt="イメージアイコン">
                            </div>
                            <p class="humb__nav__txt">お知らせ</p>
                        </a>
                    </li>
                    <li class="humb__nav__item">
                        <a class="humb__nav__a" href="<?php echo home_url('/'); ?>company/">
                            <div class="humb__nav__img">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/index/nav_6.svg" alt="イメージアイコン">
                            </div>
                            <p class="humb__nav__txt">会社情報</p>
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="humb__contact">
                <p class="humb__contact__txt">ご予約・お問い合わせはこちらから</p>
                <p class="humb__contact__tel mplus">
                    <a class="humb__contact__a" href="tel:08002007424">0800-200-7424</a>
                </p>
            </div>
        </div>
    </div>
</div><!-- .humb -->

<?php
global $template;
$template_name = basename($template, '.php');
echo $template_name;
?>

<?php wp_footer(); ?>
</body>

</html>
