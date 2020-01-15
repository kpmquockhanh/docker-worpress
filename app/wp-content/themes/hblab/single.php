<?php
/*
 * Template Name: New Template
 * Template Post Type: post
 */
get_header();  ?>
<?php gt_set_post_view(); ?>
<?php
$popularPost = new WP_Query( array(
    'meta_key' => 'post_views_count',
    'orderby' => 'meta_value_num',
    'posts_per_page' => 5
) );
?>
<?php
if ( have_posts() ) {
	while ( have_posts() ) {

		the_post(); ?>
		<div class="te-article">
			<!-- ▼ article head -->
			<div class="te-article__head">
				<div class="te-article__head__inner">

					<div class="te-article__head__meta">
						<time class="te-article__head__meta__date" datetime="2018-01-25">2018/1/25</time>
						<p class="te-article__head__meta__cat">Start Up<small><!-- サブ項目があれば smallタグが使用可能 --></small></p>
                        <p class="te-article__head__meta__view"><?= gt_get_post_view(); ?></p>
					</div>

					<h1 class="te-article__head__title"><?php the_title(); ?></h1>
				</div>
			</div>
			<!-- △ article head -->
			<!-- ▼ article body -->
			<div class="te-article__body">

				<!-- ▼ 2カラム -->
				<div class="te-layout">

					<!-- ▼ main col -->
					<div id="js-make-index-col-main" class="te-layout__col te-layout__col--main">

						<div class="te-article__body">
							<div class="te-article__body__inner">

								<!-- ▼ 記事部分 -->
								<div class="te-cms-body" style="margin-bottom: 1em;">
									<!-- ▼ 目次の捜索範囲 -->
									<div id="js-make-index-target">

										<?php the_content(); ?>

									</div>
									<!-- △ 目次の捜索範囲 -->

								</div>
								<!-- △ 記事部分 -->

								<!-- ▼ NEXT / PREV -->
								<div class="te-article-next-prev">
									<div class="te-article-next-prev__inner">
										<?php
										if ($prev_post = get_previous_post()) { ?>
											<div class="te-article-next-prev__item te-article-next-prev__item--prev">
												<a class="te-article-next-prev__item__hit" href="<?php echo get_permalink($prev_post->ID); ?>">
													<i class="fa fa-angle-left" aria-hidden="true"></i>
													前の記事
												</a>
											</div>
										<?php } ?>
										<?php
										if ($next_post = get_next_post()) { ?>
											<div class="te-article-next-prev__item te-article-next-prev__item--next">
												<a class="te-article-next-prev__item__hit" href="<?php echo get_permalink($next_post->ID); ?>">
													次の記事
													<i class="fa fa-angle-right" aria-hidden="true"></i>
												</a>
											</div>
										<?php } ?>

									</div>
								</div>
								<!-- △ NEXT / PREV -->

								<div class="te-article__section">
									<h3 class="te-article__section__title">#関連キーワード</h3>
									<div class="te-article__section__body">
										<div class="te-tags" style="font-size:14rem;">
											<ul class="te-tags__list">
												<li class="te-tags__list__item">
													<a class="te-tags__list__item__hit" href="https://techable.jp/archives/tag/audiostretch">AudioStretch</a>
												</li>
												<li class="te-tags__list__item">
													<a class="te-tags__list__item__hit" href="https://techable.jp/archives/tag/%e3%82%b9%e3%83%ad%e3%83%bc%e5%86%8d%e7%94%9f">スロー再生</a>
												</li>
											</ul>
										</div>
									</div>
								</div>

								<div class="te-article__section">
									<div id="te-article-related-vendor-override--outbrain">
										<div class="outbrain">
											<div class="OUTBRAIN" data-src="https://techable.jp/archives/70797" data-widget-id="MB_1" data-ob-template="Techable"></div>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>
					<!-- △ main col -->

					<hr class="te-show--lt-sm te-mb0">

					<!-- ▼ side col -->
					<div class="te-layout__col te-layout__col--side">

						<div id="js-make-index-col-side">


							<!-- ▼ sidebar -->
							<aside class="te-sidebar">
								<div class="row">
									<div class="col-xs-12">
										<div class="col-box" id="te-article-index-rail">
											<!-- ▼ ranking -->
											<div class="te-section">
												<div class="te-section__head">
													<h2 class="te-section__head__title te-color-grd-primary-l">RANKING</h2>
													<p class="te-section__head__description">
														<!-- CATEGORY NAME -->
														人気の記事
													</p>
												</div>
												<div class="te-section__body">
													<div class="te-articles__list te-articles__list--type-list te-articles__list--type-list--in-sidebar">
                                                        <?php
                                                        $rank = 0;
                                                        while ( $popularPost->have_posts() ) : $popularPost->the_post();
                                                        $rank++;
                                                            ?>
														<!-- ▼ content.php -->
														<section class=" te-articles__list__item te-articles__list__item--cat-tech" id="">
															<a class="te-articles__list__item__hit" href="<?php the_permalink() ?>">

																<div class="te-articles__list__item__inner">

																	<div class="te-articles__list__item__thumb">
																		<!-- rankingの場合表示する -->
																		<div class="te-articles__list__item__icon te-articles__list__item__icon--ranking"><?php echo $rank;?></div>

																		<div class="te-articles__list__item__thumb__img" style="background-image:">
                                                                            <?php the_post_thumbnail('single-post-thumbnail'); ?>
                                                                        </div>
																	</div>

																	<div class="te-articles__list__item__content">
																		<div class="te-articles__list__item__content__meta">
																			<time class="te-articles__list__item__content__meta__date">
                                                                                <?php echo get_the_date(); ?>
                                                                            </time>
																			<p class="te-articles__list__item__content__meta__cat">
                                                                                <?php echo get_cat_name($categoryID); ?><small><!-- サブ項目があれば smallタグが使用可能 --></small>
																			</p>
																		</div>
																		<h3 class="te-articles__list__item__content__title">
																			<!--
																			  tha_title() です

																			  文字数の制御をお願いします。
																			  全角 60文字 (スマホ表示で3行ほど) が目安です。

																			-->
                                                                            <?php the_title(); ?>         </h3>

																		<!--
																		  サマリーがある場合とない場合があります
																		  css側で 一行におさめています (... 処理)
																		-->
																		<p class="te-articles__list__item__content__summary">
                                                                            <?php the_content(); ?></p>

																	</div>
																</div>
															</a>
														</section>
														<!-- △ content.php -->
                                                        <?php
                                                        endwhile;
                                                        ?>
													</div>

													<div class="te-section__body__btn-bottom">
														<a class="te-btn-more" href="https://techable.jp/ranking">
															<span></span>
															MORE
														</a>
													</div>
												</div>
											</div>
											<!-- △ ranking -->
											<!-- ▼ whats new -->
											<div class="te-section">
												<div class="te-section__head">
													<h2 class="te-section__head__title te-color-grd-primary-l">WHAT'S NEW</h2>
													<p class="te-section__head__description">
														最新の記事
													</p>
												</div>
												<div class="te-section__body">
													<div class="te-articles__list te-articles__list--type-list te-articles__list--type-list--in-sidebar">
														<!-- ▼ content.php -->
														<section class=" te-articles__list__item te-articles__list__item--cat-" id="">
															<a class="te-articles__list__item__hit" href="https://techable.jp/archives/114783">

																<div class="te-articles__list__item__inner">

																	<div class="te-articles__list__item__thumb">
																		<!-- 新着の場合 && rankingではない 場合表示する -->
																		<div class="te-articles__list__item__icon te-articles__list__item__icon--new"></div>

																		<div class="te-articles__list__item__thumb__img" style="background-image: url( https://techable.jp/wp-content/uploads/2020/01/fullsizeoutput_7884-e1578357554830.jpeg );"></div>
																	</div>

																	<div class="te-articles__list__item__content">
																		<div class="te-articles__list__item__content__meta">
																			<time class="te-articles__list__item__content__meta__date" datetime="2020-01-07">2020/1/7</time>
																			<p class="te-articles__list__item__content__meta__cat">
																				<small><!-- サブ項目があれば smallタグが使用可能 --></small>
																			</p>
																		</div>
																		<h3 class="te-articles__list__item__content__title">
																			<!--
																			  tha_title() です

																			  文字数の制御をお願いします。
																			  全角 60文字 (スマホ表示で3行ほど) が目安です。

																			-->
																			画面を2つ折りにできるノートPC！ レノボが「ThinkPad X1 Fold」を今年発売へ        </h3>
																	</div>
																</div>
															</a>
														</section>
														<!-- △ content.php -->
														<!-- ▼ content.php -->
														<section class=" te-articles__list__item te-articles__list__item--cat-" id="">
															<a class="te-articles__list__item__hit" href="https://techable.jp/archives/114618">

																<div class="te-articles__list__item__inner">

																	<div class="te-articles__list__item__thumb">
																		<!-- 新着の場合 && rankingではない 場合表示する -->
																		<div class="te-articles__list__item__icon te-articles__list__item__icon--new"></div>

																		<div class="te-articles__list__item__thumb__img" style="background-image: url( https://techable.jp/wp-content/uploads/2020/01/r002.jpg );"></div>
																	</div>

																	<div class="te-articles__list__item__content">
																		<div class="te-articles__list__item__content__meta">
																			<time class="te-articles__list__item__content__meta__date" datetime="2020-01-07">2020/1/7</time>
																			<p class="te-articles__list__item__content__meta__cat">
																				<small><!-- サブ項目があれば smallタグが使用可能 --></small>
																			</p>
																		</div>
																		<h3 class="te-articles__list__item__content__title">
																			<!--
																			  tha_title() です

																			  文字数の制御をお願いします。
																			  全角 60文字 (スマホ表示で3行ほど) が目安です。

																			-->
																			AIが、がんに関わる知識を自力で獲得する技術を開発        </h3>
																	</div>
																</div>
															</a>
														</section>
														<!-- △ content.php -->
														<!-- ▼ content.php -->
														<section class=" te-articles__list__item te-articles__list__item--cat-" id="">
															<a class="te-articles__list__item__hit" href="https://techable.jp/archives/114707">

																<div class="te-articles__list__item__inner">

																	<div class="te-articles__list__item__thumb">
																		<!-- 新着の場合 && rankingではない 場合表示する -->
																		<div class="te-articles__list__item__icon te-articles__list__item__icon--new"></div>

																		<div class="te-articles__list__item__thumb__img" style="background-image: url( https://techable.jp/wp-content/uploads/2020/01/hero-phone-da-22c63998a57aa8f29512ee509b19d24a.png );"></div>
																	</div>

																	<div class="te-articles__list__item__content">
																		<div class="te-articles__list__item__content__meta">
																			<time class="te-articles__list__item__content__meta__date" datetime="2020-01-07">2020/1/7</time>
																			<p class="te-articles__list__item__content__meta__cat">
																				<small><!-- サブ項目があれば smallタグが使用可能 --></small>
																			</p>
																		</div>
																		<h3 class="te-articles__list__item__content__title">
																			<!--
																			  tha_title() です

																			  文字数の制御をお願いします。
																			  全角 60文字 (スマホ表示で3行ほど) が目安です。

																			-->
																			ADHDや自閉症を抱える子供の毎日を支援するアプリTiimo        </h3>
																	</div>
																</div>
															</a>
														</section>
														<!-- △ content.php -->
														<!-- ▼ content.php -->
														<section class=" te-articles__list__item te-articles__list__item--cat-" id="">
															<a class="te-articles__list__item__hit" href="https://techable.jp/archives/114651">

																<div class="te-articles__list__item__inner">

																	<div class="te-articles__list__item__thumb">
																		<!-- 新着の場合 && rankingではない 場合表示する -->
																		<div class="te-articles__list__item__icon te-articles__list__item__icon--new"></div>

																		<div class="te-articles__list__item__thumb__img" style="background-image: url( https://techable.jp/wp-content/uploads/2020/01/PPLM.jpg );"></div>
																	</div>

																	<div class="te-articles__list__item__content">
																		<div class="te-articles__list__item__content__meta">
																			<time class="te-articles__list__item__content__meta__date" datetime="2020-01-07">2020/1/7</time>
																			<p class="te-articles__list__item__content__meta__cat">
																				<small><!-- サブ項目があれば smallタグが使用可能 --></small>
																			</p>
																		</div>
																		<h3 class="te-articles__list__item__content__title">
																			<!--
																			  tha_title() です

																			  文字数の制御をお願いします。
																			  全角 60文字 (スマホ表示で3行ほど) が目安です。

																			-->
																			Uberが文章生成AIのプラグイン「PPLM」をオープンソース化！ トピックが設定できる        </h3>
																	</div>
																</div>
															</a>
														</section>
														<!-- △ content.php -->
														<!-- ▼ content.php -->
														<section class=" te-articles__list__item te-articles__list__item--cat-" id="">
															<a class="te-articles__list__item__hit" href="https://techable.jp/archives/114744">

																<div class="te-articles__list__item__inner">

																	<div class="te-articles__list__item__thumb">

																		<div class="te-articles__list__item__thumb__img" style="background-image: url( https://techable.jp/wp-content/uploads/2020/01/d27329-181-725555-0.jpg );"></div>
																	</div>

																	<div class="te-articles__list__item__content">
																		<div class="te-articles__list__item__content__meta">
																			<time class="te-articles__list__item__content__meta__date" datetime="2020-01-06">2020/1/6</time>
																			<p class="te-articles__list__item__content__meta__cat">
																				<small><!-- サブ項目があれば smallタグが使用可能 --></small>
																			</p>
																		</div>
																		<h3 class="te-articles__list__item__content__title">
																			<!--
																			  tha_title() です

																			  文字数の制御をお願いします。
																			  全角 60文字 (スマホ表示で3行ほど) が目安です。

																			-->
																			株式会社FiNC Technologies、約50億円調達。新体制に移行し事業展開加速        </h3>
																	</div>
																</div>
															</a>
														</section>
														<!-- △ content.php -->
													</div>
													<div class="te-section__body__btn-bottom">
														<a class="te-btn-more" href="https://techable.jp/ranking">
															<span></span>
															MORE
														</a>
													</div>
												</div>
											</div>
											<!-- △ ranking -->
										</div>
									</div>
								</div>
							</aside>
							<!-- △ sidebar -->

						</div>

					</div>
					<!-- △ side col -->

				</div>
				<!-- △ 2カラム -->

			</div>
			<!-- △ article body -->
		</div>

	<?php }
} ?>


<?php get_footer(); ?>
