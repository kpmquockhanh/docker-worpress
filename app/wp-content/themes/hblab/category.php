<?php
get_header();
?>
<?php
$categoryID = 4;
?>
<?php
$popularPost = new WP_Query( array(
    'meta_key' => 'post_views_count',
    'orderby' => 'meta_value_num',
    'posts_per_page' => 10
) );
?>
    </nav>
    <!-- △ gnav -->
    </div>
    </header>
    <!-- △ lg-header -->


    <!-- ▼ breadcrumbs -->
    <div class="te-breadcrumbs">
        <div class="te-breadcrumbs__inner">
            <a href="https://techable.jp"><i class="fa fa-home"></i></a>

            <span><?php echo get_cat_name($categoryID); ?></span>


        </div>
    </div>
    <!-- △ breadcrumbs -->

    <!-- ==================================== header.php ここまで　==================================== -->


    <!-- ▼ 見出し -->
    <div class="te-headline-lg">
        <div class="te-headline-lg__inner">
            <div class="te-headline-lg__content">

                <!-- ページによってマークアップが変わる可能性があります -->
                <h1 class="te-headline-lg__content__title te-headline-lg__content__title--en">
                    <?php echo get_cat_name($categoryID); ?>        </h1>
                <!-- <h1 class="te-headline-lg__content__title">
                  日本語のカテゴリー名
                </h1>
                -->
                <!-- <p class="te-headline-lg__content__description">
                  日本語と英語でclass名が異なります。
                </p> -->
            </div>
        </div>
    </div>
    <!-- △ 見出し -->
    <!-- ▼ 2カラム -->
    <div class="te-layout">

        <!-- ▼ main col -->
        <div class="te-layout__col te-layout__col--main">

            <?php
            if (have_posts()) {
            $postNum = 0;
            ?>
            <div class="te-archive">
                <div class="te-articles">

                    <!-- ▼ $categoryID枠 -->
                    <div class="row te-articles__list te-articles__list--type-card">

                        <?php
                        while (have_posts() && $postNum < $categoryID) {
                            $postNum++;
                            ?>
                            <?php
                            the_post(); ?>
                            <div class="col-xs-6">
                                <div class="col-box">
                                    <!-- ▼ content.php -->
                                    <section class=" te-articles__list__item te-articles__list__item--cat-social-media"
                                             id="">
                                        <a class="te-articles__list__item__hit"
                                           href="https://techable.jp/archives/113932">

                                            <div class="te-articles__list__item__inner">

                                                <div class="te-articles__list__item__thumb">

                                                    <div class="te-articles__list__item__thumb__img"
                                                         style="background-image: ">
                                                        <?php the_post_thumbnail('single-post-thumbnail'); ?>
                                                    </div>
                                                </div>

                                                <div class="te-articles__list__item__content">
                                                    <div class="te-articles__list__item__content__meta">
                                                        <time class="te-articles__list__item__content__meta__date"><?php echo get_the_date(); ?></time>
                                                        <p class="te-articles__list__item__content__meta__cat">
                                                            <?php echo get_cat_name($categoryID); ?> <small>
                                                                <!-- サブ項目があれば smallタグが使用可能 --></small>
                                                        </p>
                                                    </div>
                                                    <h3 class="te-articles__list__item__content__title">
                                                        <!--
                                                          tha_title() です

                                                          文字数の制御をお願いします。
                                                          全角 60文字 (スマホ表示で3行ほど) が目安です。

                                                        -->
                                                        <?php the_title(); ?>        </h3>

                                                    <!--
                                                      サマリーがある場合とない場合があります
                                                      css側で 一行におさめています (... 処理)
                                                    -->
                                                    <div class="te-articles__list__item__content__summary">
                                                        <?php the_content(); ?></div>

                                                </div>
                                            </div>
                                        </a>
                                    </section>
                                    <!-- △ content.php -->
                                </div>
                            </div>
                        <?php }
                        }
                        ?>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="col-box">


                                <!--

                  memo :
                  $categoryID枠がない場合はこのhr を消してください

                -->
                                <hr>


                                <div class="te-articles__list te-articles__list--type-list">
                                    <?php
                                    while (have_posts() && $postNum >= $categoryID) { ?>
                                        <?php
                                        the_post(); ?>
                                        <section
                                                class=" te-articles__list__item te-articles__list__item--cat-social-media"
                                                id="">
                                            <a class="te-articles__list__item__hit"
                                               href="https://techable.jp/archives/108$categoryID92">

                                                <div class="te-articles__list__item__inner">

                                                    <div class="te-articles__list__item__thumb">

                                                        <div class="te-articles__list__item__thumb__img"
                                                             style="background-image:">
                                                            <?php the_post_thumbnail('single-post-thumbnail'); ?>
                                                        </div>
                                                    </div>

                                                    <div class="te-articles__list__item__content">
                                                        <div class="te-articles__list__item__content__meta">
                                                            <time class="te-articles__list__item__content__meta__date">
                                                                <?php echo get_the_date(); ?>
                                                            </time>
                                                            <p class="te-articles__list__item__content__meta__cat">
                                                                <?php echo get_cat_name($categoryID); ?> <small>
                                                                    <!-- サブ項目があれば smallタグが使用可能 --></small>
                                                            </p>
                                                        </div>
                                                        <h3 class="te-articles__list__item__content__title">
                                                            <!--
                                                              tha_title() です

                                                              文字数の制御をお願いします。
                                                              全角 60文字 (スマホ表示で3行ほど) が目安です。

                                                            -->
                                                            <?php the_title(); ?> </h3>

                                                        <!--
                                                          サマリーがある場合とない場合があります
                                                          css側で 一行におさめています (... 処理)
                                                        -->
                                                        <div class="te-articles__list__item__content__summary">
                                                            <?php the_content(); ?>
                                                        </div>

                                                    </div>
                                                </div>
                                            </a>
                                        </section>
                                        <?php
                                    }
                                    ?>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="te-layout__col te-layout__col--side">

            <!-- ▼ sidebar -->
            <aside class="te-sidebar">


                <div class="row">
                    <div class="col-xs-12">
                        <div class="col-box">


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
                                        <section class=" te-articles__list__item te-articles__list__item--cat-start-up" id="">
                                            <a class="te-articles__list__item__hit" href="https://techable.jp/archives/115132">

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
                                                            <time class="te-articles__list__item__content__meta__date"><?php echo get_the_date(); ?></time>
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
                                                            <?php the_title(); ?> </h3>

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



                        </div>
                    </div>
                </div>


            </aside>
            <!-- △ sidebar -->

        </div>
    </div>
<?php
get_footer();
?>
