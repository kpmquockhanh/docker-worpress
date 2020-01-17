<?php
get_header();
$posts = get_posts([
		'numberposts'		=> 5,
		'orderby'          	=> 'date',
		'order'            	=> 'DESC',
]);
//echo "<pre>";
//var_dump(get_custom_logo());
//echo "</pre>";die;
?>
<?php
$latestPosts = new WP_Query( array(
    'posts_per_page' => 9,
    'orderby'          	=> 'date',
    'order'            	=> 'DESC',
));
$count = 0;
?>
<?php
$popularPost = new WP_Query( array(
    'meta_key' => 'post_views_count',
    'orderby' => 'meta_value_num',
    'posts_per_page' => 5
) );
?>
	<!-- ▼ TOPページ4枠 -->
	<div class="te-lg-articles">
		<div class="te-lg-articles__list">
        <?php
        while ( $latestPosts->have_posts() && $count < 4 ) : $latestPosts->the_post();
            $count++;
            ?>
			<div class="te-lg-articles__list__item">
				<a class="te-lg-articles__list__item__hit" href="<?php the_permalink() ?>">
					<div class="te-lg-articles__list__item__thumb">
						<div
							class="te-lg-articles__list__item__thumb__img"
							style="background-image: url( '<?= get_the_post_thumbnail_url() ?>' );">
						</div>
					</div>
					<div class="te-lg-articles__list__item__content">
						<h2 class="te-lg-articles__list__item__content__title">
                            <?php the_title(); ?>
						</h2>
					</div>
				</a>
			</div>
        <?php
        endwhile;
        ?>
		</div>
	</div>
	<!-- △ TOPページ4枠 -->

	<!-- ▼ 注目のキーワード -->
	<div class="te-top-tags">
		<h2 class="te-top-tags__title">注目のキーワード</h2>
		<div class="te-tags">
			<ul class="te-tags__list">
				<?php foreach (get_tags() as $tag) : ?>
					<li class="te-tags__list__item">
						<a class="te-tags__list__item__hit" href="<?= get_tag_link($tag) ?>"><?=$tag->name?></a>
					</li>
				<?php endforeach; ?>

			</ul>
		</div>
	</div>
	<!-- △ 注目のキーワード -->


	<div class="te-article-tab-panel">
		<div class="container-fluid">

			<div class="row">
				<div class="col-xs-12">
					<div class="col-box">

						<div class="te-article-tab-panel__tab">
							<div data-target-article-panel="#panel-whatsnew" class="te-article-tab-panel__tab__item te-article-tab-panel__tab__item--cat-news is-active">
								<h2 class="te-article-tab-panel__tab__item__label te-color-grd-secondary-l">WHAT’S NEW</h2>
								<p class="te-article-tab-panel__tab__item__label-sub">最新情報</p>
							</div>
							<div data-target-article-panel="#panel-ranking" class="te-article-tab-panel__tab__item te-article-tab-panel__tab__item--cat-ranking">
								<h2 class="te-article-tab-panel__tab__item__label te-color-grd-primary-lr">RANKING</h2>
								<p class="te-article-tab-panel__tab__item__label-sub">人気の記事</p>
							</div>
						</div>

					</div>
				</div>
			</div>

			<div class="te-article-tab-panel__panel row">
				<div id="panel-whatsnew" class="col-xs-12 col-md-6 te-article-tab-panel__panel__item is-active">
					<div class="col-box">
						<div class="te-section">
							<div class="te-section__head">
								<h2 class="te-section__head__title te-color-grd-secondary-l">WHAT'S NEW</h2>
								<p class="te-section__head__description">最新情報</p>
							</div>
							<div class="te-section__body te-articles">
								<div class="te-articles__list te-articles__list--type-list">
									<!-- ▼ content.php -->
                                    <?php
                                    while ( $latestPosts->have_posts() && $count >= 4 ) : $latestPosts->the_post();
                                        $count++;
                                        ?>
										<section class=" te-articles__list__item" id="">
										<a class="te-articles__list__item__hit" href="<?php the_permalink() ?>">
											<div class="te-articles__list__item__inner">
												<div class="te-articles__list__item__thumb">
													<div class="te-articles__list__item__thumb__img"
														 style="background-image: url( '<?= get_the_post_thumbnail_url() ?>' );"></div>
												</div>
												<div class="te-articles__list__item__content">
													<div class="te-articles__list__item__content__meta">
														<time class="te-articles__list__item__content__meta__date" datetime="<?= get_the_date(); ?>">
															<?= date_format(date_create(get_the_date()), 'Y-m-d'); ?>
														</time>
														<p class="te-articles__list__item__content__meta__cat">
															<?php foreach (get_the_category(get_the_ID()) as $category) : ?>
																<span><?= $category->name . ',' ?></span>
															<?php endforeach; ?>
															<small><!-- サブ項目があれば smallタグが使用可能 --></small>
														</p>
													</div>
													<h3 class="te-articles__list__item__content__title">
                                                        <?php the_title(); ?>
													</h3>
                                                    <div class="te-articles__list__item__content__summary">
	                                                    <?= substr(strip_tags(get_the_content()), 0, 100) . (strlen(get_the_content()) > 100 ? '...':'')  ?>
													</div>
												</div>
											</div>
										</a>
									</section>
									<?php endwhile; ?>
									<!-- △ content.php -->
								</div>
								<div class="te-section__body__btn-bottom">
									<a class="te-btn-more" href="/page/2">
										<span></span>
										MORE
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div id="panel-ranking" class="col-xs-12 col-md-6 te-article-tab-panel__panel__item">
					<div class="col-box">
						<div class="te-section">
							<div class="te-section__head">
								<h2 class="te-section__head__title te-color-grd-primary-l">RANKING</h2>
								<p class="te-section__head__description">人気の記事</p>
							</div>
							<div class="te-section__body te-articles">
								<div class="te-articles__list te-articles__list--type-list">
									<!-- ▼ content.php -->
                                    <?php
                                    while ( $popularPost->have_posts()) : $popularPost->the_post();
                                        ?>
										<section class=" te-articles__list__item" id="">
											<a class="te-articles__list__item__hit" href="<?php the_permalink() ?>">
												<div class="te-articles__list__item__inner">
													<div class="te-articles__list__item__thumb">
														<div class="te-articles__list__item__thumb__img"
															 style="background-image: url(<?= get_the_post_thumbnail_url() ?>)"></div>
													</div>
													<div class="te-articles__list__item__content">
														<div class="te-articles__list__item__content__meta">
															<time class="te-articles__list__item__content__meta__date" datetime="<?= get_the_date() ?>">
																<?= date_format(date_create(get_the_date()), 'Y-m-d'); ?>
															</time>
															<p class="te-articles__list__item__content__meta__cat">
																<?php foreach (get_the_category() as $category) : ?>
																	<span><?= $category->name . ',' ?></span>
																<?php endforeach; ?>
																<small><!-- サブ項目があれば smallタグが使用可能 --></small>
															</p>
														</div>
														<h3 class="te-articles__list__item__content__title">
                                                            <?php the_title(); ?>
														</h3>
                                                        <div class="te-articles__list__item__content__summary">
	                                                        <?= substr(strip_tags(get_the_content()), 0, 100) . (strlen(get_the_content()) > 100 ? '...':'')  ?>
														</div>
													</div>
												</div>
											</a>
										</section>
									<?php endwhile; ?>
									<!-- △ content.php -->
								</div>

								<div class="te-section__body__btn-bottom">
									<a class="te-btn-more" href="/ranking">
										<span></span>
										MORE
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

<!--	<section class="te-section">-->
<!--		<div class="te-section__head">-->
<!--			<h2 class="te-section__head__title">RECOMMEND SERVICE</h2>-->
<!--		</div>-->
<!--		<div class="te-section__body">-->
<!--			<div class="te-article-page">-->
<!--				<div class="te-article-page__body te-cms-body">-->
<!--					<table class="te-article-page__table">-->
<!--						<tbody>-->
<!--						<tr>-->
<!--							<th>レコメンド</th>-->
<!--							<td>-->
<!--								<p style="margin-top: 0;"><a href="https://tayori.com/" target="_blank"><i class="fa fa-external-link" aria-hidden="true"></i> 無料フォームならTayori</a></p>-->
<!--								<p><a href="https://www.jooto.com/" target="_blank"><i class="fa fa-external-link" aria-hidden="true"></i> 無料タスク管理・プロジェクト管理ツールならJooto</a></p>-->
<!--								<p><a href="https://webclipping.jp" target="_blank"><i class="fa fa-external-link" aria-hidden="true"></i> 広報・PRの効果測定ツールならWebクリッピング</a></p>-->
<!--							</td>-->
<!--						</tr>-->
<!--						</tbody>-->
<!--					</table>-->
<!--				</div>-->
<!--			</div>-->
<!--		</div>-->
<!--	</section>-->
<?php
get_footer();