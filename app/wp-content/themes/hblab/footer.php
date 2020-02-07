<!-- ==================================== footer.php ここから　==================================== -->

<!-- ▼ footer -->
<footer class="te-footer">
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12">
				<div class="col-box">
					<div class="te-footer__layout">
						<div class="te-footer__layout__head">
							<nav class="te-footer__nav">
								<?php
								wp_nav_menu( array(
									'theme_location' => 'footer-menu',
									'container' => 'ul',
									'menu_class' => 'te-footer__nav__list',
									'fallback_cb' => function () {
										echo 'No footer menu';
									}
								) );
								?>
							</nav>
							<nav class="te-footer__nav-sns">
								<!-- ▼ sns-icon-nav -->
								<div class="te-sns-icon-nav">
									<ul class="te-sns-icon-nav__list">
										<li class="te-sns-icon-nav__list__item te-sns-icon-nav__list__item--youtube">
											<a class="te-sns-icon-nav__list__item__hit" href="<?= get_theme_mod('youtube_link') ?>" target="_blank">
												<i class="fa fa-youtube-play" aria-hidden="true"></i>
											</a>
										</li>
										<li class="te-sns-icon-nav__list__item te-sns-icon-nav__list__item--twitter">
											<a class="te-sns-icon-nav__list__item__hit" href="<?= get_theme_mod('twitter_link') ?>" target="_blank">
												<i class="fa fa-twitter" aria-hidden="true"></i>
											</a>
										</li>
										<li class="te-sns-icon-nav__list__item te-sns-icon-nav__list__item--facebook">
											<a class="te-sns-icon-nav__list__item__hit" href="<?= get_theme_mod('fb_link') ?>" target="_blank">
												<i class="fa fa-facebook" aria-hidden="true"></i>
											</a>
										</li>
<!--										<li class="te-sns-icon-nav__list__item te-sns-icon-nav__list__item--google-plus">-->
<!--											<a class="te-sns-icon-nav__list__item__hit" href="https://plus.google.com/110923126707370252850" target="_blank">-->
<!--												<i class="fa fa-google-plus" aria-hidden="true"></i>-->
<!--											</a>-->
<!--										</li>-->
									</ul>
								</div>                      <!-- △ sns-icon-nav -->
							</nav>
						</div>
						<div class="te-footer__layout__foot">

							<div class="te-footer__title">
								<p class="te-footer__title__logo">
									<a href="https://techable.jp">
										<?php the_custom_logo(); ?>
									</a>
								</p>
								<p class="te-footer__title__text">
									<?= get_theme_mod('your_word') ?>
								</p>
							</div>

<!--							<p class="te-footer__copyright"><small>©Mash Media Inc. All rights reserved.</small></p>-->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>
<!-- △ footer -->

</div>
<!-- △ contents -->

</div>
<!-- △ viewport -->
<?php wp_footer(); ?>
</body>
</html>