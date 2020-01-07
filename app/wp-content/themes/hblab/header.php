<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, user-scalable=no">

	<title>
		Techable（テッカブル） -海外・国内のネットベンチャー系ニュースサイト | Techable（テッカブル）は、国内外の最先端のスタートアップベンチャーを紹介するニュースサイトです。
	</title>

	<!-- favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri() . '/assets/images/meta/apple-touch-icon.png' ?>">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri() . '/assets/images/meta/favicon-32x32.png' ?>">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri() . '/assets/images/meta/favicon-16x16.png' ?>">
	<link rel="manifest" href="<?php echo get_template_directory_uri() . '/assets/images/meta/manifest.json' ?>">
	<link rel="mask-icon" href="<?php echo get_template_directory_uri() . '/assets/images/meta/safari-pinned-tab.svg' ?>" color="#5C52A8">
	<meta name="theme-color" content="#ffffff">

	<!-- fonts -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Rajdhani:400,600,700">

<!--	<script type="text/javascript" src="assets/js/style.min.js"></script>-->

	<?php wp_head(); ?>
</head>
<body class="is-toppage">

<!-- ▼ viewport -->
<div class="te-viewport">

	<!-- ▼ 追従小 header -->
	<header class="te-header-float">
		<!-- ▼ gnav -->
		<nav class="te-gnav">

			<p class="te-gnav__title">
				<a class="te-gnav__title__hit" href="https://techable.jp">
					<img src="<?php echo get_template_directory_uri() . '/assets/images/logo-grd.svg'?>" alt="TECHABLE"/>
				</a>
			</p>

			<ul class="te-gnav__list">
				<li class="te-gnav__list__item"><a class="te-gnav__list__item__hit" href="https://techable.jp/archives/tag/インタビュー" title="INTERVIEW">INTERVIEW</a></li>
				<li class="te-gnav__list__item"><a class="te-gnav__list__item__hit" href="https://techable.jp/archives/category/social-media" title="SOCIALMEDIA">SOCIALMEDIA</a></li>
				<li class="te-gnav__list__item"><a class="te-gnav__list__item__hit" href="https://techable.jp/archives/category/tech" title="TECH">TECH</a></li>
				<li class="te-gnav__list__item"><a class="te-gnav__list__item__hit" href="https://techable.jp/archives/category/mobile" title="MOBILE">MOBILE</a></li>
				<li class="te-gnav__list__item"><a class="te-gnav__list__item__hit" href="https://techable.jp/archives/category/marketing" title="MARKETING">MARKETING</a></li>
				<li class="te-gnav__list__item"><a class="te-gnav__list__item__hit" href="https://techable.jp/archives/category/enterprise" title="ENTERPRISE">ENTERPRISE</a></li>
				<li class="te-gnav__list__item"><a class="te-gnav__list__item__hit" href="https://techable.jp/archives/category/start-up" title="START UP">START UP</a></li>
				<li class="te-gnav__list__item"><a class="te-gnav__list__item__hit" href="https://techable.jp/archives/category/release/" title="RELEASE">RELEASE</a></li>
				<li class="te-gnav__list__item"><a class="te-gnav__list__item__hit" href="https://techable.jp/ranking" title="RANKING">RANKING</a></li>
			</ul>

			<div class="te-gnav__btn-search">
				<a class="te-gnav__btn-search__hit js-search-unit-trigger" href="#">
					<img src="<?php echo get_template_directory_uri() . '/assets/images/icon-search.svg'?>" alt="Search"/>
				</a>
			</div>

		</nav>
		<!-- △ gnav -->
	</header>
	<!-- △ 追従小 header -->


	<!-- ▼ search-modal -->
	<div class="te-search-modal">

		<div class="te-search-modal__btn-close">
			<a class="te-search-modal__btn-close__hit js-search-unit-trigger" href="#"></a>
		</div>

		<div class="te-search-modal__layout">

			<div class="te-search-modal__layout__search">

				<p class="te-search-modal__title te-lang-en-bold">SEARCH</p>
				<!-- ▼ search box -->
				<!-- ▼ search-box.php -->
				<div class="te-search-box">
					<div class="te-search-box__inner">
						<form role="search" method="get" class="search-form" action="https://techable.jp">
							<label class="te-search-input-label">
								<div class="te-search-input-label-icon">
									<img src="<?php echo get_template_directory_uri() . '/assets/images/icon-search.svg'?>" alt=""/>
								</div>
								<input class="te-search-input" type="search" value="" name="s" placeholder="Search Keywords...">
							</label>
							<!-- <input type="hidden" class="te-search-submit" value="" /> -->
						</form>
					</div>
				</div>
				<!-- △ search-box.php -->          <!-- △ search box -->

			</div>

			<div class="te-search-modal__layout__tags">
				<p class="te-search-modal__title" style="font-size:0.85em;">#注目のキーワード</p>

				<div class="te-search-modal__tags">
					<ul class="te-search-modal__tags__list">
						<li class="te-search-modal__tags__list__item">
							<a class="te-search-modal__tags__list__item__hit" href="https://techable.jp/archives/tag/kickstarter">
								Kickstarter                </a>
						</li>
						<li class="te-search-modal__tags__list__item">
							<a class="te-search-modal__tags__list__item__hit" href="https://techable.jp/archives/tag/indiegogo">
								Indiegogo                </a>
						</li>
						<li class="te-search-modal__tags__list__item">
							<a class="te-search-modal__tags__list__item__hit" href="https://techable.jp/archives/tag/%e3%82%a4%e3%83%b3%e3%82%bf%e3%83%93%e3%83%a5%e3%83%bc">
								インタビュー                </a>
						</li>
						<li class="te-search-modal__tags__list__item">
							<a class="te-search-modal__tags__list__item__hit" href="https://techable.jp/archives/tag/%e3%82%af%e3%83%a9%e3%82%a6%e3%83%89%e3%83%95%e3%82%a1%e3%83%b3%e3%83%87%e3%82%a3%e3%83%b3%e3%82%b0">
								クラウドファンディング                </a>
						</li>
						<li class="te-search-modal__tags__list__item">
							<a class="te-search-modal__tags__list__item__hit" href="https://techable.jp/archives/tag/iphone">
								iPhone                </a>
						</li>
						<li class="te-search-modal__tags__list__item">
							<a class="te-search-modal__tags__list__item__hit" href="https://techable.jp/archives/tag/android">
								Android                </a>
						</li>
						<li class="te-search-modal__tags__list__item">
							<a class="te-search-modal__tags__list__item__hit" href="https://techable.jp/archives/tag/facebook">
								Facebook                </a>
						</li>
						<li class="te-search-modal__tags__list__item">
							<a class="te-search-modal__tags__list__item__hit" href="https://techable.jp/archives/tag/ai">
								AI                </a>
						</li>
						<li class="te-search-modal__tags__list__item">
							<a class="te-search-modal__tags__list__item__hit" href="https://techable.jp/archives/tag/ios">
								iOS                </a>
						</li>
						<li class="te-search-modal__tags__list__item">
							<a class="te-search-modal__tags__list__item__hit" href="https://techable.jp/archives/tag/google">
								google                </a>
						</li>
					</ul>
				</div>
			</div>

		</div>

	</div>
	<!-- △ search-modal -->


	<!-- ▼ sp-header -->
	<header class="te-sp-header">

		<!-- ▼ header部分 -->
		<div class="te-sp-header__inner">
			<h1 class="te-sp-header__title">
				<a class="te-sp-header__title__hit" href="https://techable.jp">
					<img class="te-sp-header__title__g" src="<?= get_template_directory_uri() . '/assets/images/logo-grd.svg' ?>" alt="TECHABLE"/>
					<img class="te-sp-header__title__w" src="<?= get_template_directory_uri() . '/assets/images/logo-w.svg' ?>" alt="TECHABLE"/>
				</a>
			</h1>
			<div class="te-sp-header__btn-search">
				<a class="te-sp-header__btn-search__hit js-search-unit-trigger" href="#">
					<img src="<?= get_template_directory_uri() . '/assets/images/icon-search.svg' ?>" alt=""/>
				</a>
			</div>
			<div class="te-sp-header__btn-open-nav">
				<div class="te-sp-header__btn-open-nav__inner">
					<a class="js-open-sp-nav-trigger" href="#">
						<div class="icon">
							<div class="top"></div>
							<div class="mid"></div>
							<div class="bot"></div>
						</div>
					</a>
				</div>
			</div>
		</div>
		<!-- △ header部分 -->

		<!-- ▼ 展開部分 -->
		<nav class="te-sp-header__nav">
			<div class="te-sp-header__nav__head">

			</div>
			<div class="te-sp-header__nav__inner">
				<div class="te-sp-header__nav__content">

					<ul class="te-sp-header__nav__list">
						<li class="te-sp-header__nav__list__item">
							<a class="te-sp-header__nav__list__item__hit" href="https://techable.jp/archives/tag/インタビュー">
								<span class="te-sp-header__nav__list__item__label">INTERVIEW</span>
								<span class="te-sp-header__nav__list__item__label-sub">インタビュー</span>
							</a>
						</li>
						<li class="te-sp-header__nav__list__item">
							<a class="te-sp-header__nav__list__item__hit" href="https://techable.jp/archives/category/social-media">
								<span class="te-sp-header__nav__list__item__label">SOCIALMEDIA</span>
								<span class="te-sp-header__nav__list__item__label-sub">ソーシャルメディア</span>
							</a>
						</li>
						<li class="te-sp-header__nav__list__item">
							<a class="te-sp-header__nav__list__item__hit" href="https://techable.jp/archives/category/tech">
								<span class="te-sp-header__nav__list__item__label">TECH</span>
								<span class="te-sp-header__nav__list__item__label-sub">テック</span>
							</a>
						</li>
						<li class="te-sp-header__nav__list__item">
							<a class="te-sp-header__nav__list__item__hit" href="https://techable.jp/archives/category/mobile">
								<span class="te-sp-header__nav__list__item__label">MOBILE</span>
								<span class="te-sp-header__nav__list__item__label-sub">モバイル</span>
							</a>
						</li>
						<li class="te-sp-header__nav__list__item">
							<a class="te-sp-header__nav__list__item__hit" href="https://techable.jp/archives/category/marketing">
								<span class="te-sp-header__nav__list__item__label">MARKETING</span>
								<span class="te-sp-header__nav__list__item__label-sub">マーケティング</span>
							</a>
						</li>
						<li class="te-sp-header__nav__list__item">
							<a class="te-sp-header__nav__list__item__hit" href="https://techable.jp/archives/category/enterprise">
								<span class="te-sp-header__nav__list__item__label">ENTERPRISE</span>
								<span class="te-sp-header__nav__list__item__label-sub">エンタープライズ</span>
							</a>
						</li>
						<li class="te-sp-header__nav__list__item">
							<a class="te-sp-header__nav__list__item__hit" href="https://techable.jp/archives/category/start-up">
								<span class="te-sp-header__nav__list__item__label">STARTUP</span>
								<span class="te-sp-header__nav__list__item__label-sub">スタートアップ</span>
							</a>
						</li>
						<li class="te-sp-header__nav__list__item">
							<a class="te-sp-header__nav__list__item__hit" href="https://techable.jp/archives/category/release/">
								<span class="te-sp-header__nav__list__item__label">RELEASE</span>
								<span class="te-sp-header__nav__list__item__label-sub">リリース</span>
							</a>
						</li>
						<li class="te-sp-header__nav__list__item">
							<a class="te-sp-header__nav__list__item__hit" href="https://techable.jp/ranking">
								<span class="te-sp-header__nav__list__item__label">RANKING</span>
								<span class="te-sp-header__nav__list__item__label-sub">ランキング</span>
							</a>
						</li>
					</ul>

				</div>
			</div>

			<!-- ▼ gnav -->
			<div class="te-sns-icon-nav">
				<ul class="te-sns-icon-nav__list">
					<li class="te-sns-icon-nav__list__item te-sns-icon-nav__list__item--rss">
						<a class="te-sns-icon-nav__list__item__hit" href="https://techable.jp/feed" target="_blank">
							<i class="fa fa-rss" aria-hidden="true"></i>
						</a>
					</li>
					<li class="te-sns-icon-nav__list__item te-sns-icon-nav__list__item--twitter">
						<a class="te-sns-icon-nav__list__item__hit" href="https://twitter.com/TechableJp" target="_blank">
							<i class="fa fa-twitter" aria-hidden="true"></i>
						</a>
					</li>
					<li class="te-sns-icon-nav__list__item te-sns-icon-nav__list__item--facebook">
						<a class="te-sns-icon-nav__list__item__hit" href="https://www.facebook.com/TechableJp" target="_blank">
							<i class="fa fa-facebook" aria-hidden="true"></i>
						</a>
					</li>
					<li class="te-sns-icon-nav__list__item te-sns-icon-nav__list__item--google-plus">
						<a class="te-sns-icon-nav__list__item__hit" href="https://plus.google.com/110923126707370252850" target="_blank">
							<i class="fa fa-google-plus" aria-hidden="true"></i>
						</a>
					</li>
				</ul>
			</div>        <!-- △ gnav -->

		</nav>
		<!-- △ 展開部分 -->

	</header>
	<!-- △ sp-header -->



	<!-- ▼ contents -->
	<div class="te-contents">

		<!-- ▼ sp-header-offset -->
		<div class="te-sp-header__spacer"></div>
		<!-- △ sp-header-offset -->

		<!-- ▼ lg-header -->
		<header class="te-header">
			<div class="te-header__inner">
				<!--  詳細ページでは記事をh1タグにする -->
				<h1 class="te-header__lead">海外・国内のベンチャー系ニュースサイト | TECHABLE</h1>

				<div class="te-header__nav-sns">
					<!-- ▼ sns-icon-nav -->
					<div class="te-sns-icon-nav">
						<ul class="te-sns-icon-nav__list">
							<li class="te-sns-icon-nav__list__item te-sns-icon-nav__list__item--rss">
								<a class="te-sns-icon-nav__list__item__hit" href="https://techable.jp/feed" target="_blank">
									<i class="fa fa-rss" aria-hidden="true"></i>
								</a>
							</li>
							<li class="te-sns-icon-nav__list__item te-sns-icon-nav__list__item--twitter">
								<a class="te-sns-icon-nav__list__item__hit" href="https://twitter.com/TechableJp" target="_blank">
									<i class="fa fa-twitter" aria-hidden="true"></i>
								</a>
							</li>
							<li class="te-sns-icon-nav__list__item te-sns-icon-nav__list__item--facebook">
								<a class="te-sns-icon-nav__list__item__hit" href="https://www.facebook.com/TechableJp" target="_blank">
									<i class="fa fa-facebook" aria-hidden="true"></i>
								</a>
							</li>
							<li class="te-sns-icon-nav__list__item te-sns-icon-nav__list__item--google-plus">
								<a class="te-sns-icon-nav__list__item__hit" href="https://plus.google.com/110923126707370252850" target="_blank">
									<i class="fa fa-google-plus" aria-hidden="true"></i>
								</a>
							</li>
						</ul>
					</div>            <!-- △ sns-icon-nav -->
				</div>

				<div class="te-header__presented-by">
					PRESENTED BY
					<a href="http://mashmedia.co.jp/" target="_blank">
						<img src="<?= get_template_directory_uri() . '/assets/images/logo-mashmedia.png' ?>" alt="MashMedia"/>
					</a>
				</div>

				<p class="te-header__title">
					<a class="te-header__title__hit" href="https://techable.jp">
						<img src="<?= get_template_directory_uri() . '/assets/images/logo-grd.svg'?>" alt="TECHABLE"/>
					</a>
				</p>

				<!-- ▼ gnav -->
				<nav class="te-gnav">

					<p class="te-gnav__title">
						<a class="te-gnav__title__hit" href="https://techable.jp">
							<img src="<?= get_template_directory_uri() . '/assets/images/logo-grd.svg'?>" alt="TECHABLE"/>
						</a>
					</p>

					<ul class="te-gnav__list">
						<li class="te-gnav__list__item"><a class="te-gnav__list__item__hit" href="https://techable.jp/archives/tag/インタビュー" title="INTERVIEW">INTERVIEW</a></li>
						<li class="te-gnav__list__item"><a class="te-gnav__list__item__hit" href="https://techable.jp/archives/category/social-media" title="SOCIALMEDIA">SOCIALMEDIA</a></li>
						<li class="te-gnav__list__item"><a class="te-gnav__list__item__hit" href="https://techable.jp/archives/category/tech" title="TECH">TECH</a></li>
						<li class="te-gnav__list__item"><a class="te-gnav__list__item__hit" href="https://techable.jp/archives/category/mobile" title="MOBILE">MOBILE</a></li>
						<li class="te-gnav__list__item"><a class="te-gnav__list__item__hit" href="https://techable.jp/archives/category/marketing" title="MARKETING">MARKETING</a></li>
						<li class="te-gnav__list__item"><a class="te-gnav__list__item__hit" href="https://techable.jp/archives/category/enterprise" title="ENTERPRISE">ENTERPRISE</a></li>
						<li class="te-gnav__list__item"><a class="te-gnav__list__item__hit" href="https://techable.jp/archives/category/start-up" title="START UP">START UP</a></li>
						<li class="te-gnav__list__item"><a class="te-gnav__list__item__hit" href="https://techable.jp/archives/category/release/" title="RELEASE">RELEASE</a></li>
						<li class="te-gnav__list__item"><a class="te-gnav__list__item__hit" href="https://techable.jp/ranking" title="RANKING">RANKING</a></li>
					</ul>

					<div class="te-gnav__btn-search">
						<a class="te-gnav__btn-search__hit js-search-unit-trigger" href="#">
							<img src="<?= get_template_directory_uri() . '/assets/images/icon-search.svg'?>" alt="Search"/>
						</a>
					</div>

				</nav>
				<!-- △ gnav -->
			</div>
		</header>
		<!-- △ lg-header -->

		<!-- ==================================== header.php ここまで　==================================== -->