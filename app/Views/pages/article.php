<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>
<style>
    .eg-btn {
        font-family: 'Open Sans' !important;
        font-weight: 600 !important;
    }
</style>

<div class="inner-banner-section" style="background-image: url(<?= base_url('assets/images/breadcrumb-bg.jpg') ?>);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8 col-md-10 col-sm-12">
                <div class="breadcrumb-area">
                    <h2>
                        Blog
                    </h2>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="blog-standard-section pt-120 pb-120">
    <div class="container">
        <div class="row ">
            <div class="col-lg-8">
                <div class="blog-standard-area">
                    <?php foreach ($articles as $article) : ?>
                        <div class="blog-standard-single">
                            <article aria-label="article" id="post-2537" class="post-2537 post type-post status-publish format-standard has-post-thumbnail hentry category-adventure category-couple-tour tag-hotel tag-tours tag-travel tag-vacation">
                                <div>
                                    <div class="blog-format">

                                        <span class="blog-date" style="font-family: 'Open Sans' !important;font-weight: 500;font-size: 18px;line-height: 24px;color: black;">
                                            <?= $article['date'] ?>
                                        </span>

                                        <div class="blog-image">

                                            <img loading="lazy" width="870" height="500" src="<?= base_url('assets/images/blogs/' . $article['cover_image']) ?>" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="<?= $article['alt_image'] ?>" decoding="async" fetchpriority="high" sizes="(max-width: 870px) 100vw, 870px">

                                        </div>
                                    </div>

                                    <div class="blog-content">
                                        <h3>
                                            <a style="font-family: 'Open Sans' !important;font-weight: 700;font-size: 30px;line-height: 42px;" href="blog/<?= $language == 'id' ? $article['slug'] : $article['slug_en'] ?>">
                                                <?= $language == 'id' ? $article['title_id'] : $article['title_en'] ?>
                                            </a>
                                        </h3>
                                        <div class="author-area">
                                            <p style="font-family: 'Open Sans' !important;font-weight: 500;font-size: 18px;line-height: 24px;">
                                                <?= lang('text_article.by') ?> <a href="#"><?= $article['writer'] ?></a>
                                            </p>
                                        </div>
                                        <span style="font-family: 'Open Sans' !important;font-weight: 500;font-size: 18px;line-height: 24px;">
                                            <?= $language == 'id' ? $article['snippet_id'] : $article['snippet_en'] ?>
                                        </span>

                                        <br><br>
                                        <div style="text-align: right;">
                                            <a href="blog/<?= $language == 'id' ? $article['slug'] : $article['slug_en'] ?>" class="eg-btn btn--primary btn--lg" style="background-color: #e0bc6d; font-family: 'Open Sans';font-weight: 600!important;" onmouseover="this.style.color='#e0bc6d'" onmouseout="this.style.color='white'">
                                                <?= lang('text_article.continue_reading') ?>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="blog-sidebar ps-lg-4" style="border-left: 2px solid #ddd; border-right: 2px solid #ddd; border-bottom: 2px solid #ddd; padding: 15px;">
                    <div id="block-2" class="blog-widget-item widget_block widget_search">
                        <form role="search" method="get" action="#" class="wp-block-search__button-outside wp-block-search__text-button wp-block-search">
                            <label class="wp-block-search__label" for="wp-block-search__input-1">Search</label>
                            <div class="wp-block-search__inside-wrapper">
                                <input class="wp-block-search__input" id="wp-block-search__input-1" placeholder="<?= lang('text_article.search_field') ?>" value="" type="search" name="s" required="">
                                <button aria-label="Search" class="wp-block-search__button wp-element-button" type="submit"><?= lang('text_article.search_button') ?></button>
                            </div>
                        </form>
                    </div>

                    <div id="block-3" class="blog-widget-item widget_block">
                        <div class="wp-block-group is-layout-flow wp-block-group-is-layout-flow">
                            <div class="wp-block-group__inner-container">
                                <h2 class="wp-block-heading" style="font-family: 'Open Sans' !important;font-weight: 700;font-size: 30px;line-height: 42px;">
                                    <?= lang('text_article.latest_article') ?>
                                </h2>

                                <ul class="wp-block-latest-posts__list has-dates wp-block-latest-posts mb-4">
                                    <?php foreach ($latestArticle as $article) : ?>
                                        <li class="latest-article-card">
                                            <div class="wp-block-latest-posts__featured-image alignleft mb-0">
                                                <img loading="lazy" decoding="async" width="150" height="150" src="<?= base_url('assets/images/blogs/' . $article['cover_image']) ?>" class="attachment-thumbnail size-thumbnail wp-post-image" alt="" style="max-width:100%; height:auto; border-radius:8px;" sizes="(max-width: 150px) 100vw, 150px">
                                                <time datetime="2023-02-18T09:42:49+00:00" class="wp-block-latest-posts__post-date" style="font-family: 'Open Sans' !important; margin-left: 10px;">
                                                    <?= $article['date'] ?>
                                                </time>
                                            </div>
                                            <a href="/<?= $language ?>/blog/<?= $article['slug'] . '/' . $article['id'] ?>" style="margin-left: 10px;">
                                                <?= $language == 'id' ? $article['title_id'] : $article['title_en'] ?>
                                            </a>

                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                    </div>


                    <div id="block-3" class="blog-widget-item widget_block">
                        <div class="wp-block-group is-layout-flow wp-block-group-is-layout-flow">
                            <div class="wp-block-group__inner-container">
                                <h2 class="wp-block-heading" style="font-family: 'Open Sans' !important;font-weight: 700;font-size: 30px;line-height: 42px;">
                                    <?= lang('text_article.services') ?>
                                </h2>

                                <ul class="wp-block-latest-posts__list has-dates wp-block-latest-posts">
                                    <?php foreach ($services as $service) : ?>
                                        <li>
                                            <a class="wp-block-latest-posts__post-title d-block p-3 rounded" style="box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); font-family: 'Open Sans' !important;font-weight: 500;font-size: 16px;line-height: 24px;" href="/<?= $language ?>/<?= $language == 'id' ? 'layanan-kami' : 'our-services' ?>/<?= $service['slug'] ?>">
                                                <?= $service['title_en'] ?>
                                            </a>
                                        </li>
                                    <?php endforeach; ?>

                                </ul>
                            </div>
                        </div>
                    </div>


                    <!-- Additional blocks can be added here -->
                </div>
            </div>


        </div>
    </div>
</div>
<style>
    .blog-sidebar .latest-article-card {
        background-color: #fff;
        border: 1px solid #ddd;
        border-radius: 8px;
        padding: 15px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        margin-bottom: 15px;
        display: flex;
        align-items: flex-start;
        transition: all 0.3s ease;
    }

    .blog-sidebar .latest-article-card:hover {
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
        transform: translateY(-5px);
    }

    .blog-sidebar .latest-article-card img {
        max-width: 100px;
        height: auto;
        border-radius: 8px;
    }

    .blog-sidebar .latest-article-card a {
        display: block;
        font-family: 'Open Sans', sans-serif;
        font-weight: 500;
        font-size: 14px;
        line-height: 20px;
        margin-top: 0;
        margin-left: 10px;
        color: #333;
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .blog-sidebar .latest-article-card a:hover {
        color: #e0bc6d;
    }

    .blog-sidebar .latest-article-card time {
        display: block;
        font-family: 'Open Sans', sans-serif;
        font-size: 12px;
        color: #777;
        margin-top: 5px;
        margin-left: 10px;
    }
</style>

<?= $this->endSection() ?>