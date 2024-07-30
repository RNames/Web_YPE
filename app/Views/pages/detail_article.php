<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<style>
    /* Responsiveness for mobile (375px) */
    @media (min-width: 425px) {
        #heading1-detail-article {
            font-size: 1rem;
            font-weight: 600;
            color: white;
            text-shadow: 1px 1px #69727d;
        }
    }

    /* Responsiveness for tablet (768px) */
    @media (min-width: 376px) and (max-width: 768px) {
        #heading1-detail-article {
            font-size: 3.5rem;
            font-weight: 600;
            color: white;
            text-shadow: 2px 2px #69727d;
        }
    }

    /* Responsiveness for laptop (1024px) */
    @media (min-width: 769px) and (max-width: 1024px) {
        #heading1-detail-article {
            font-size: 4.5rem;
            font-weight: 700;
            color: white;
            text-shadow: 2px 2px #69727d;
        }
    }

    /* Responsiveness for large laptop (1440px) */
    @media (min-width: 1025px) and (max-width: 1440px) {
        #heading1-detail-article {
            font-size: 5.5rem;
            font-weight: 700;
            color: white;
            text-shadow: 2px 2px #69727d;
        }
    }

    /* Responsiveness for large desktop (1441px and above) */
    @media (min-width: 1441px) {
        #heading1-detail-article {
            font-size: 5.5rem;
            font-weight: 700;
            color: white;
            text-shadow: 2px 2px #69727d;
        }
    }
</style>

<!-- ========== header end============= -->

<div class="inner-banner-section" style="background-image: url(<?= base_url('assets/images/blogs/') . $article['cover_image'] ?>);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8 col-md-10 col-sm-12">
                <div class="breadcrumb-area">
                    <h1 id="heading1-detail-article">
                        <?= $language == 'id' ? $article['title_id'] : $article['title_en'] ?>
                    </h1>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="blog-standard-section pt-120 pb-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-8  or1">
                <div class="blog-post-area">
                    <article aria-label="article" id="post-2537" class="post-2537 post type-post status-publish format-standard has-post-thumbnail hentry category-adventure category-couple-tour tag-hotel tag-tours tag-travel tag-vacation">
                        <div class="blog-details">
                            <div class="blog-details-single">

                                <figure class="wp-block-gallery has-nested-images columns-default is-cropped wp-block-gallery-1 is-layout-flex wp-block-gallery-is-layout-flex">
                                    <?php foreach ($imageArticles as $imageArticle) : ?>
                                        <figure class="wp-block-image size-large"><img loading="lazy" decoding="async" width="319" height="300" data-id="1665" src="<?= base_url('assets/images/blogs/' . $imageArticle['url']) ?>" alt="" class="wp-image-1665" sizes="(max-width: 319px) 100vw, 319px"></figure>
                                    <?php endforeach; ?>
                                </figure>

                                <div class="blog-details-single">
                                    <span style="font-family: 'Open Sans' !important;">
                                        <?= $language == 'id' ? $article['description_id'] : $article['description_en'] ?>
                                    </span>

                                </div>

                            </div>
                        </div>
                    </article>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-10">
                <div class="blog-sidebar ps-lg-4">
                    <div id="block-2" class="blog-widget-item widget_block widget_search">
                        <form role="search" method="get" action="#" class="wp-block-search__button-outside wp-block-search__text-button wp-block-search"><label class="wp-block-search__label" for="wp-block-search__input-2">Search</label>
                            <div class="wp-block-search__inside-wrapper "><input class="wp-block-search__input" id="wp-block-search__input-2" placeholder="<?= lang('text_article.search_field') ?>" value="" type="search" name="s" required=""><button aria-label="Search" class="wp-block-search__button wp-element-button" type="submit"><?= lang('text_article.search_button') ?></button></div>
                        </form>
                    </div>
                    <div id="block-3" class="blog-widget-item widget_block">
                        <div class="wp-block-group is-layout-flow wp-block-group-is-layout-flow">
                            <div class="wp-block-group__inner-container">
                                <h2 style="font-family: 'Open Sans' !important;" class="wp-block-heading">
                                    <?= lang('text_article.services') ?>
                                </h2>
                                <ul class="wp-block-latest-posts__list has-dates wp-block-latest-posts">
                                    <?php foreach ($services as $service) : ?>
                                        <li>
                                            <a class="wp-block-latest-posts__post-title" href="/<?= $language ?>/<?= $language == 'id' ? 'layanan-kami' : 'our-services' ?>/<?= $service['slug'] ?>">
                                                <?= $service['title_en'] ?>
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
                                <h2 class="wp-block-heading">
                                    <?= lang('text_article.latest_article') ?>
                                </h2>


                                <ul class="wp-block-latest-posts__list has-dates wp-block-latest-posts">
                                    <?php foreach ($latestArticle as $article) : ?>
                                        <li>
                                            <div class="wp-block-latest-posts__featured-image alignleft">
                                                <img loading="lazy" decoding="async" width="150" height="150" src="<?= base_url('assets/images/blogs/' . $article['cover_image']) ?>" class="attachment-thumbnail size-thumbnail wp-post-image" alt="" style="max-width:110px;max-height:110px;" sizes="(max-width: 150px) 100vw, 150px">
                                            </div>
                                            <a class="wp-block-latest-posts__post-title" href="">
                                                <?= $language == 'id' ? $article['title_id'] : $article['title_en'] ?>
                                            </a>
                                            <time datetime="2023-02-18T09:42:49+00:00" class="wp-block-latest-posts__post-date">
                                                <?= $article['date']  ?>
                                            </time>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- <div id="block-21" class="blog-widget-item widget_block">
                        <div class="wp-block-group is-layout-flow wp-block-group-is-layout-flow">
                            <div class="wp-block-group__inner-container">
                                <h2 class="wp-block-heading">
                                    <?= lang('text_article.destination_category') ?>
                                </h2>


                                <ul class="wp-block-categories-list wp-block-categories">
                                    <li class="cat-item cat-item-4"><a href="#category/adventure/">Adventure</a>
                                    </li>
                                    <li class="cat-item cat-item-6"><a href="#category/couple-tour/">Couple Tour</a>
                                    </li>
                                    <li class="cat-item cat-item-7"><a href="#category/family-adventure/">Family Adventure</a>
                                    </li>
                                    <li class="cat-item cat-item-5"><a href="#category/popular-tours/">Popular Tours</a>
                                    </li>
                                    <li class="cat-item cat-item-24"><a href="#category/travel-vaction/">Travel Vaction</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div> -->
                    <!-- <div id="block-23" class="blog-widget-item widget_block">
                        <div class="wp-block-group is-layout-flow wp-block-group-is-layout-flow">
                            <div class="wp-block-group__inner-container">
                                <h2 class="wp-block-heading">
                                    <?= lang('text_article.follow') ?>
                                </h2>



                                <ul class="wp-block-social-links has-icon-color has-icon-background-color is-layout-flex wp-block-social-links-is-layout-flex">
                                    <li style="color: #5e5e5e; background-color: #ffffff; " class="wp-social-link wp-social-link-facebook has-white-background-color wp-block-social-link"><a href="https://www.facebook.com/" class="wp-block-social-link-anchor"><svg width="24" height="24" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false">
                                                <path d="M12 2C6.5 2 2 6.5 2 12c0 5 3.7 9.1 8.4 9.9v-7H7.9V12h2.5V9.8c0-2.5 1.5-3.9 3.8-3.9 1.1 0 2.2.2 2.2.2v2.5h-1.3c-1.2 0-1.6.8-1.6 1.6V12h2.8l-.4 2.9h-2.3v7C18.3 21.1 22 17 22 12c0-5.5-4.5-10-10-10z"></path>
                                            </svg><span class="wp-block-social-link-label screen-reader-text">Facebook</span></a></li>

                                    <li style="color: #5e5e5e; background-color: #ffffff; " class="wp-social-link wp-social-link-twitter has-white-background-color wp-block-social-link"><a href="https://twitter.com/" class="wp-block-social-link-anchor"><svg width="24" height="24" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false">
                                                <path d="M22.23,5.924c-0.736,0.326-1.527,0.547-2.357,0.646c0.847-0.508,1.498-1.312,1.804-2.27 c-0.793,0.47-1.671,0.812-2.606,0.996C18.324,4.498,17.257,4,16.077,4c-2.266,0-4.103,1.837-4.103,4.103 c0,0.322,0.036,0.635,0.106,0.935C8.67,8.867,5.647,7.234,3.623,4.751C3.27,5.357,3.067,6.062,3.067,6.814 c0,1.424,0.724,2.679,1.825,3.415c-0.673-0.021-1.305-0.206-1.859-0.513c0,0.017,0,0.034,0,0.052c0,1.988,1.414,3.647,3.292,4.023 c-0.344,0.094-0.707,0.144-1.081,0.144c-0.264,0-0.521-0.026-0.772-0.074c0.522,1.63,2.038,2.816,3.833,2.85 c-1.404,1.1-3.174,1.756-5.096,1.756c-0.331,0-0.658-0.019-0.979-0.057c1.816,1.164,3.973,1.843,6.29,1.843 c7.547,0,11.675-6.252,11.675-11.675c0-0.178-0.004-0.355-0.012-0.531C20.985,7.47,21.68,6.747,22.23,5.924z"></path>
                                            </svg><span class="wp-block-social-link-label screen-reader-text">Twitter</span></a></li>

                                    <li style="color: #5e5e5e; background-color: #ffffff; " class="wp-social-link wp-social-link-instagram has-white-background-color wp-block-social-link"><a href="https://www.pinterest.com/" class="wp-block-social-link-anchor"><svg width="24" height="24" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false">
                                                <path d="M12,4.622c2.403,0,2.688,0.009,3.637,0.052c0.877,0.04,1.354,0.187,1.671,0.31c0.42,0.163,0.72,0.358,1.035,0.673 c0.315,0.315,0.51,0.615,0.673,1.035c0.123,0.317,0.27,0.794,0.31,1.671c0.043,0.949,0.052,1.234,0.052,3.637 s-0.009,2.688-0.052,3.637c-0.04,0.877-0.187,1.354-0.31,1.671c-0.163,0.42-0.358,0.72-0.673,1.035 c-0.315,0.315-0.615,0.51-1.035,0.673c-0.317,0.123-0.794,0.27-1.671,0.31c-0.949,0.043-1.233,0.052-3.637,0.052 s-2.688-0.009-3.637-0.052c-0.877-0.04-1.354-0.187-1.671-0.31c-0.42-0.163-0.72-0.358-1.035-0.673 c-0.315-0.315-0.51-0.615-0.673-1.035c-0.123-0.317-0.27-0.794-0.31-1.671C4.631,14.688,4.622,14.403,4.622,12 s0.009-2.688,0.052-3.637c0.04-0.877,0.187-1.354,0.31-1.671c0.163-0.42,0.358-0.72,0.673-1.035 c0.315-0.315,0.615-0.51,1.035-0.673c0.317-0.123,0.794-0.27,1.671-0.31C9.312,4.631,9.597,4.622,12,4.622 M12,3 C9.556,3,9.249,3.01,8.289,3.054C7.331,3.098,6.677,3.25,6.105,3.472C5.513,3.702,5.011,4.01,4.511,4.511 c-0.5,0.5-0.808,1.002-1.038,1.594C3.25,6.677,3.098,7.331,3.054,8.289C3.01,9.249,3,9.556,3,12c0,2.444,0.01,2.751,0.054,3.711 c0.044,0.958,0.196,1.612,0.418,2.185c0.23,0.592,0.538,1.094,1.038,1.594c0.5,0.5,1.002,0.808,1.594,1.038 c0.572,0.222,1.227,0.375,2.185,0.418C9.249,20.99,9.556,21,12,21s2.751-0.01,3.711-0.054c0.958-0.044,1.612-0.196,2.185-0.418 c0.592-0.23,1.094-0.538,1.594-1.038c0.5-0.5,0.808-1.002,1.038-1.594c0.222-0.572,0.375-1.227,0.418-2.185 C20.99,14.751,21,14.444,21,12s-0.01-2.751-0.054-3.711c-0.044-0.958-0.196-1.612-0.418-2.185c-0.23-0.592-0.538-1.094-1.038-1.594 c-0.5-0.5-1.002-0.808-1.594-1.038c-0.572-0.222-1.227-0.375-2.185-0.418C14.751,3.01,14.444,3,12,3L12,3z M12,7.378 c-2.552,0-4.622,2.069-4.622,4.622S9.448,16.622,12,16.622s4.622-2.069,4.622-4.622S14.552,7.378,12,7.378z M12,15 c-1.657,0-3-1.343-3-3s1.343-3,3-3s3,1.343,3,3S13.657,15,12,15z M16.804,6.116c-0.596,0-1.08,0.484-1.08,1.08 s0.484,1.08,1.08,1.08c0.596,0,1.08-0.484,1.08-1.08S17.401,6.116,16.804,6.116z"></path>
                                            </svg><span class="wp-block-social-link-label screen-reader-text">Instagram</span></a></li>

                                    <li style="color: #5e5e5e; background-color: #ffffff; " class="wp-social-link wp-social-link-pinterest has-white-background-color wp-block-social-link"><a href="https://www.pinterest.com/" class="wp-block-social-link-anchor"><svg width="24" height="24" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false">
                                                <path d="M12.289,2C6.617,2,3.606,5.648,3.606,9.622c0,1.846,1.025,4.146,2.666,4.878c0.25,0.111,0.381,0.063,0.439-0.169 c0.044-0.175,0.267-1.029,0.365-1.428c0.032-0.128,0.017-0.237-0.091-0.362C6.445,11.911,6.01,10.75,6.01,9.668 c0-2.777,2.194-5.464,5.933-5.464c3.23,0,5.49,2.108,5.49,5.122c0,3.407-1.794,5.768-4.13,5.768c-1.291,0-2.257-1.021-1.948-2.277 c0.372-1.495,1.089-3.112,1.089-4.191c0-0.967-0.542-1.775-1.663-1.775c-1.319,0-2.379,1.309-2.379,3.059 c0,1.115,0.394,1.869,0.394,1.869s-1.302,5.279-1.54,6.261c-0.405,1.666,0.053,4.368,0.094,4.604 c0.021,0.126,0.167,0.169,0.25,0.063c0.129-0.165,1.699-2.419,2.142-4.051c0.158-0.59,0.817-2.995,0.817-2.995 c0.43,0.784,1.681,1.446,3.013,1.446c3.963,0,6.822-3.494,6.822-7.833C20.394,5.112,16.849,2,12.289,2"></path>
                                            </svg><span class="wp-block-social-link-label screen-reader-text">Pinterest</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</div>


<?= $this->endSection() ?>