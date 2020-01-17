<?php
/*
 * Template Name: New Template
 * Template Post Type: post
 */
session_start();
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
						<time class="te-article__head__meta__date">
							<?= date_format(date_create(get_the_date()), 'Y-m-d') ?>
						</time>
						<p class="te-article__head__meta__cat">
							<?php foreach(get_the_category() as $cate) : ?>
								<?= $cate->name . ',' ?>
							<?php endforeach; ?>
							<small><!-- サブ項目があれば smallタグが使用可能 --></small></p>
                        <p class="te-article__head__meta__view" style="margin-top: 25px;"><?= gt_get_post_view(); ?></p>
					</div>

					<h1 class="te-article__head__title"><?php the_title(); ?></h1>
				</div>
			</div>
			<!-- △ article head -->
            <div class="te-article__main-picture te-bg-slash">
                <img width="300" src="<?= get_the_post_thumbnail_url() ?>" class="attachment-medium size-medium wp-post-image" alt="" >
            </div>
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
												<?php foreach(get_the_category() as $category) : ?>
													<li class="te-tags__list__item">
														<a class="te-tags__list__item__hit"
														   href="<?= get_category_link($category) ?>">
															<?= $category->name ?>
														</a>
													</li>
												<?php endforeach; ?>
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

																		<div class="te-articles__list__item__thumb__img"
																			 style="background-image: url('<?= get_the_post_thumbnail_url(null, 'single-post-thumbnail') ?>')">
                                                                        </div>
																	</div>

																	<div class="te-articles__list__item__content">
																		<div class="te-articles__list__item__content__meta">
																			<time class="te-articles__list__item__content__meta__date">
                                                                                <?= date_format(date_create(get_the_date()), 'Y-m-d'); ?>
                                                                            </time>
																			<p class="te-articles__list__item__content__meta__cat">
																				<?php foreach(get_the_category() as $cate) : ?>
																					<?= $cate->name . ',' ?>
																				<?php endforeach; ?>

																				<small><!-- サブ項目があれば smallタグが使用可能 --></small>
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
