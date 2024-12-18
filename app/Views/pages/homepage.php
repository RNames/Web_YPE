<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>
<style>
    .eg-btn {
        font-family: 'Open Sans' !important;
        font-weight: 600 !important;
    }

    @media (min-width: 0px) {
        .heading-section {
            font-size: 16px !important;
            font-weight: 700 !important;
            font-family: 'Open Sans' !important;
        }
    }

    /* Responsiveness for mobile (375px) */
    @media (min-width: 0px) {
        #heading1-homepage {
            width: 100%;
            text-align: center;
            font-size: 30px;
            font-weight: 500;
            text-shadow: 1px 1px #69727d;
            margin-bottom: 5px;
            /* Reduced margin */
        }

        #heading2-banner-homepage {
            text-align: center;
            font-size: 15px;
            font-weight: 700;
            color: #fff;
            margin-top: 5px;
            /* Reduced margin */
        }

        #slider-homepage {
            padding: 0px 15px;
        }

        .title-section {
            font-size: 22px !important;
            font-weight: 700 !important;
            font-family: 'Open Sans' !important;
        }

        .usp-title {
            font-size: 14px !important;
            font-weight: 700 !important;
            font-family: 'Open Sans' !important;
        }

        .about-us-desc {
            font-size: 14px !important;
            font-weight: 500 !important;
            font-family: 'Open Sans' !important;
        }
    }

    /* Responsiveness for tablet (768px) */
    @media (min-width: 426px) and (max-width: 768px) {
        #heading1-homepage {
            width: 100%;
            text-align: center;
            font-size: 30px;
            font-weight: 500;
            text-shadow: 2px 2px #69727d;
            margin-bottom: 10px;
            /* Reduced margin */
        }

        #heading2-banner-homepage {
            text-align: center;
            font-size: 15px;
            font-weight: 700;
            color: #fff;
            margin-top: 10px;
            /* Reduced margin */
        }

        .title-section {
            font-size: 30px !important;
            font-weight: 700 !important;
            font-family: 'Open Sans' !important;
        }

        .usp-title {
            font-size: 18px !important;
            font-weight: 700 !important;
            font-family: 'Open Sans' !important;
        }

        .about-us-desc {
            font-size: 16px !important;
            font-weight: 500 !important;
            font-family: 'Open Sans' !important;
        }
    }

    /* Responsiveness for laptop (1024px) */
    @media (min-width: 769px) {
        #heading1-homepage {

            font-family: 'Oswald', Helvetica, Arial, Lucida, sans-serif;
            text-transform: uppercase;
            font-size: 45px;
            letter-spacing: 2px;
            line-height: 1.3em;
            text-align: center;
            text-shadow: 0em 0.1em 0.1em rgba(0, 0, 0, 0.4)
        }

        #heading2-banner-homepage {
            text-align: center;
            font-size: 26px;
            font-weight: 700;
            color: #fff;
            margin-top: 15px;
            /* Reduced margin */
        }

        .title-section {
            font-size: 30px !important;
            font-weight: 700 !important;
            font-family: 'Open Sans' !important;
        }

        .usp-title {
            font-size: 18px !important;
            font-weight: 700 !important;
            font-family: 'Open Sans' !important;
        }

        .about-us-desc {
            font-size: 16px !important;
            font-weight: 500 !important;
            font-family: 'Open Sans' !important;
        }
    }

    .hero-wrapper {
        position: absolute;
        left: 0;
        right: 0;
        top: 50%;
        width: 100%;
        transform: translateY(-50%);
        z-index: 2;
    }

    .hero-wrapper .hero-content>span {
        color: #fff;
        font-family: var(--font-satisfy);
        font-size: 30px;
        font-weight: 400;
        line-height: 30px;
        margin-bottom: 20px;
        display: inline-block;
    }

    .hero-wrapper .hero-content h1 {
        color: #fff;
        font-family: var(--font-merriw);
        font-size: 75px;
        font-style: normal;
        font-weight: 700;
        margin-bottom: 40px;
    }

    @media (min-width: 1200px) and (max-width: 1399px) {
        .hero-wrapper .hero-content h1 {
            font-size: 65px;
            margin-bottom: 30px;
        }
    }

    @media (min-width: 992px) and (max-width: 1199px) {
        .hero-wrapper .hero-content h1 {
            font-size: 50px;
            margin-bottom: 20px;
        }
    }

    @media (max-width: 991px) {
        .hero-wrapper .hero-content h1 {
            font-size: 50px;
            margin-bottom: 20px;
        }
    }

    @media (max-width: 767px) {
        .hero-wrapper .hero-content h1 {
            font-size: 40px;
            margin-bottom: 20px;
        }
    }

    .hero-wrapper .hero-content p,
    .hero-wrapper .hero-content .info-single .info-text a,
    .info-single .info-text .hero-wrapper .hero-content a {
        color: #fff;
        font-family: var(--font-work-sans);
        font-size: 20px;
        font-weight: 400;
        margin: 0;
    }

    .hero-wrapper .hero-content .btn-group {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        gap: 50px;
        margin-top: 60px;
    }

    @media (max-width: 991px) {
        .hero-wrapper .hero-content .btn-group {
            margin-top: 40px;
        }
    }

    .hero-wrapper .hero-content .btn-group .dsc-btn a {
        position: relative;
        color: #fff;
        text-align: center;
        font-family: var(--font-merriw);
        font-size: 16px;
        font-weight: 700;
        text-transform: capitalize;
        background-color: #90b956;
        min-width: 195px;
        display: block;
        padding: 7px 20px;
        z-index: 1;
        border-radius: 30px;
        transition: 0.5s;
    }

    .hero-wrapper .hero-content .btn-group .dsc-btn a:after {
        content: "";
        position: absolute;
        left: 0;
        top: 0;
        bottom: 0;
        right: 0;
        background: var(--white);
        width: 100%;
        height: 100%;
        transition: 0.5s;
        z-index: -1;
        transform: scale(0.6);
        border-radius: 30px;
        opacity: 0;
    }

    .hero-wrapper .hero-content .btn-group .dsc-btn a svg,
    .hero-wrapper .hero-content .btn-group .dsc-btn a i {
        margin-right: -40px;
        border-radius: 30px;
    }

    .hero-wrapper .hero-content .btn-group .dsc-btn a:hover {
        color: var(--primary-color1);
        border-radius: 30px;
    }

    .hero-wrapper .hero-content .btn-group .dsc-btn a:hover:after {
        transform: scale(1);
        opacity: 1;
    }
</style>

<!-- ========== header end============= -->
<div data-elementor-type="wp-page" data-elementor-id="234" class="elementor elementor-234">
    <section class="elementor-section elementor-top-section elementor-element elementor-element-c69dd4c elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="c69dd4c" data-element_type="section">
        <div class="elementor-container elementor-column-gap-no">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-f1cf64a" data-id="f1cf64a" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-156ef9f elementor-widget elementor-widget-egens_slider" data-id="156ef9f" data-element_type="widget" data-widget_type="egens_slider.default">
                        <div class="elementor-widget-container">
                            <section class="hero-banner">
                                <div class="swiper hero-slider">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <img loading="lazy" decoding="async" src="<?= base_url('assets/images/slide-1.jpg') ?>" alt="" />
                                            <div class=" hero-wrapper">
                                                <div class="container" style="display: flex;justify-content: center;align-items: center;">
                                                    <div class="row" style="margin: auto; display: flex;justify-content: center;">
                                                        <div class="col-12 col-lg-9">
                                                            <div class="hero-content" id="slider-homepage">
                                                                <!-- <span id="subtitle-banner-homepage"><?= $language == 'id' ? $homepage['sub_title_id'] : $homepage['sub_title_en'] ?></span> -->
                                                                <h1 id="heading1-homepage" style="font-family: ''Oswald',Helvetica,Arial,Lucida,sans-serif  '; margin-bottom: 10px; "><?= $language == 'id' ? strtoupper($homepage['title_id']) : strtoupper($homepage['title_en'])  ?></h1>
                                                                <h2 id="heading2-banner-homepage" style="text-shadow: 2px 2px #69727d;font-family: 'Open Sans'; font-weight: 700; font-size: 25px; line-height: 42px;">

                                                                    <a href="/<?= $language ?>/<?= $language == 'id' ? 'layanan-kami' : 'our-services' ?>/vip-services">
                                                                        VIP Services
                                                                    </a>
                                                                    |
                                                                    <a href="/<?= $language ?>/<?= $language == 'id' ? 'layanan-kami' : 'our-services' ?>/private-tour">
                                                                        Private Tour
                                                                    </a>
                                                                    |
                                                                    <a href="/<?= $language ?>/<?= $language == 'id' ? 'layanan-kami' : 'our-services' ?>/destination-event">
                                                                        Destination Event
                                                                    </a>
                                                                </h2>


                                                                <div class="btn-group" style="display: flex;justify-content: center;flex-direction: column; margin-top: 20px !important;">
                                                                    <div class="dsc-btn">
                                                                        <a href="/<?= $language ?>/<?= $language == 'id' ? 'layanan-kami' : 'our-services' ?>" class="eg-btn btn--primary-outline" style="font-family: 'Open Sans' !important;background-color: #e0bc6d; font-size: 18px; line-height: 31px; display: flex;justify-content: space-around;align-items:center;" onmouseout="this.style.cursor='default'" onmouseover="this.style.cursor='pointer'">

                                                                            <?= strtoupper(lang("text_homepage.banner_button")) ?>
                                                                        </a>
                                                                    </div>i
                                                                    <a target="_blank" href="https://www.trustpilot.com/review/yourprivateeurope.eu?utm_medium=trustbox&utm_source=MicroReviewCount" class="rating-wrap">
                                                                        <div class="trip-rating">
                                                                            <div class="cnt" style="display: flex;flex-direction: column;align-items: center;font-family: 'Open Sans'; font-weight: 500; font-size: 18px; line-height: 24px;">
                                                                                <img loading="lazy" src="<?= base_url('assets/images/trustpilot.svg') ?>" alt="trustpilot-rating" style="height: 30px !important;width: 130px ;">
                                                                                <p>See our 45 reviews on Trustpilot</p>
                                                                            </div>
                                                                        </div>
                                                                    </a>

                                                                    <!-- ubah -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="hero-pagination"></div>
                                </div>

                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <style>
        /*@media (max-width: 768px) {*/
        /*    #heading1-homepage {*/
        /*        margin-top: 200px;*/
        /*    }*/
        /*}*/
    </style>

    <section style="margin-top: 60px !important;background-color: #fff;" class="elementor-section elementor-top-section elementor-element elementor-element-d1338d8 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="d1338d8" data-element_type="section">
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-f4ab0c9" data-id="f4ab0c9" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-f34e71d elementor-widget elementor-widget-egens_counter" data-id="f34e71d" data-element_type="widget" data-widget_type="egens_counter.default">
                        <div class="elementor-widget-container">


                            <div class="counter-section">
                                <div class="counter-wrapper" style="box-shadow: none !important;">
                                    <div class="row g-3 d-flex justify-content-center">
                                        <div class="col-xl-4 col-lg-3 col-md-4 col-sm-6 col-10">
                                            <div class="counter-single text-center d-flex flex-column hover-border1">
                                                <div class="counter-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 58 58" fill="none">
                                                        <g clip-path="url(#clip0_1_4)">
                                                            <path d="M24.5952 27.0967C24.9237 26.5904 24.7084 24.9308 24.7084 24.9308C12.5069 20.7303 3.37304 15.4559 3.89073 13.3172C4.14222 12.2569 4.49679 11.7958 4.74261 11.7131C5.28636 11.5307 6.52226 12.181 8.03796 13.1779L10.5494 10.2235C9.36335 9.49168 6.42937 7.07992 3.54863 8.02016C2.37843 8.39965 0.823078 9.47242 0.112804 12.4075C-1.5377 19.2882 14.8677 25.4938 23.6674 28.5467L24.594 27.0956L24.5952 27.0967Z" fill="#e0bc6d"></path>
                                                            <path d="M53.152 13.7648C52.7487 13.1984 52.325 12.6422 51.8832 12.112C49.4083 9.12871 46.3059 6.7278 42.7972 5.08032C39.2884 3.43284 35.4595 2.57933 31.5832 2.58057H31.5198C31.4937 2.58057 31.4631 2.58623 31.4314 2.58623C27.5822 2.60781 23.7844 3.47175 20.3047 5.11739C16.825 6.76303 13.7477 9.15046 11.2889 12.112C10.8471 12.6479 10.4245 13.1973 10.0269 13.7648C9.71766 14.1998 9.43333 14.6484 9.15579 15.097C9.7052 15.4437 10.3305 15.8163 11.0306 16.2072C11.2719 15.822 11.5109 15.438 11.7692 15.0642C13.5342 16.2266 15.4271 17.1822 17.4106 17.912C17.2973 18.3346 17.2044 18.7764 17.1025 19.2057C17.7459 19.4901 18.4199 19.7721 19.1098 20.0519C19.2231 19.566 19.3182 19.0743 19.4497 18.6065C22.7824 19.626 26.532 20.2411 30.5082 20.3363V23.0947L30.6407 23.1762L30.8299 24.309L31.1199 26.0445L32.673 26.4433V20.3363C33.4422 20.317 34.1943 20.2672 34.9454 20.2105L35.5118 18.6008L35.727 17.9823C34.7302 18.0774 33.7129 18.1465 32.6684 18.1715V4.8394C37.0683 5.51908 40.8621 10.0787 43.0144 16.5991C41.9722 16.9084 40.8677 17.1655 39.744 17.3819C40.5492 17.7822 41.2348 18.3874 41.7321 19.1366C42.3631 18.9792 43.0008 18.8274 43.6125 18.6382C44.4713 21.9484 44.909 25.3537 44.9153 28.7735H41.5565C41.5191 28.9944 41.4874 29.196 41.45 29.4294C42.7629 29.972 44.3285 30.6154 44.6683 30.7547C45.672 31.1705 46.4231 31.7901 46.9215 32.5536C46.9668 32.0178 47.0166 31.4865 47.0348 30.9371H52.2457C52.1517 31.6168 52.0622 32.2886 51.9432 32.932C52.2774 32.761 52.5618 32.4336 52.7136 31.8083C52.7821 31.5233 52.8076 31.2297 52.7895 30.9371H55.7563C55.4129 35.2515 53.9099 39.393 51.4063 42.9234C49.6068 41.7415 47.676 40.7728 45.6527 40.037C45.7728 39.6077 45.8668 39.1659 45.9745 38.7241C45.2513 39.2802 44.3616 39.576 43.4494 39.5635C43.1048 39.5612 42.7608 39.5317 42.4208 39.4751L42.3449 39.4627C42.0866 39.4423 41.7264 39.4106 39.5299 38.6606C39.7882 38.314 40.0963 37.8529 40.4361 37.3228V36.2376C41.4557 36.591 42.3302 36.8753 42.533 36.8867C43.0994 36.9252 44.546 37.4236 44.9629 35.6938C45.3797 33.964 44.3002 33.3965 43.6941 33.1495C43.3543 33.0113 41.7627 32.3565 40.4361 31.8117V29.6151L39.6794 31.5024C39.0224 31.2305 38.5557 31.0357 38.5557 31.0357C38.5557 31.0357 40.1903 22.0094 39.7429 20.8664C39.2954 19.7234 37.9496 19.4651 37.9496 19.4651L34.3801 29.5664L30.5036 28.5628L28.8452 28.1345L28.2788 24.744L26.4742 23.584C26.4742 23.584 26.5807 26.3798 26.3088 27.8887C26.2739 28.1246 26.2107 28.3555 26.1208 28.5763C26.0902 28.6398 26.0313 28.7157 25.9871 28.7848C25.7445 29.1613 25.4725 29.5182 25.1738 29.8519V29.8519C25.0174 30.0286 24.852 30.2053 24.6934 30.382C24.6765 30.4013 24.6561 30.4206 24.6379 30.4398C24.485 30.6041 24.3366 30.7615 24.1848 30.9077C23.692 31.4061 23.2944 31.7777 23.2944 31.7777L24.8804 32.9524L27.5107 30.9451L28.1055 30.484L29.0525 30.9451L31.4439 32.0937L32.6684 32.6805L32.9392 32.8131L28.963 42.7229C28.963 42.7229 30.2703 43.8908 31.2479 43.1341C32.2255 42.3774 36.4113 34.8011 36.4113 34.8011C36.4113 34.8011 37.1374 35.0719 38.0969 35.414L37.8703 35.9691C37.9972 35.9691 38.1229 35.9498 38.2498 35.9498V38.2222C38.1547 38.1849 38.0663 38.1599 37.9655 38.1214C37.8273 38.0965 37.6811 38.084 37.5418 38.0648C37.1125 38.8226 36.7216 39.4978 36.3739 40.0959C38.6217 40.331 40.844 40.7663 43.0144 41.3964C40.8553 47.9168 37.0626 52.4741 32.6628 53.1561V45.2876C32.0284 45.7334 31.2722 45.9735 30.4968 45.9752V53.172C26.0551 52.5625 22.216 48.0029 20.0376 41.4315C22.3943 40.7363 24.8128 40.2712 27.2593 40.0427L28.1565 37.7963C25.1989 38.0093 22.2738 38.5469 19.4338 39.3992C18.7157 36.6347 18.2949 33.8013 18.1786 30.9473H20.4125L20.979 30.4104C19.2118 29.8062 17.5412 29.1983 15.9674 28.5865C15.9674 28.65 15.9617 28.7134 15.9617 28.7769H7.33876C7.34967 27.4556 7.47169 26.1377 7.70352 24.8369C7.00798 24.4586 6.34415 24.0859 5.7143 23.7041C5.35441 25.4466 5.17073 27.2208 5.16602 29C5.16185 34.4592 6.85892 39.7841 10.0213 44.2341C10.4177 44.8005 10.8414 45.3578 11.2832 45.8891C16.1067 51.6665 23.3397 55.3708 31.4269 55.4138C31.4575 55.4138 31.4892 55.4195 31.522 55.4195H31.5855C35.4608 55.42 39.2887 54.5662 42.7964 52.9187C46.3042 51.2713 49.4056 48.8707 51.8798 45.888C52.3329 45.3567 52.7453 44.8016 53.1474 44.2329C56.3054 39.7803 58.0023 34.4566 58.0035 28.9977C58.0047 23.5388 56.3102 18.2144 53.1542 13.7603L53.152 13.7648ZM18.0234 15.8922C16.2753 15.2522 14.6036 14.4202 13.0391 13.4114C15.9011 10.0032 19.644 7.44638 23.8597 6.01979C21.4332 8.35564 19.4202 11.7813 18.0234 15.8922ZM30.5036 18.1715C26.7291 18.0842 23.1755 17.5088 20.0444 16.5674C22.2228 10.0028 26.0551 5.43752 30.5036 4.82693V18.1715ZM7.42032 30.9473H16.0036C16.1349 34.0368 16.6071 37.1023 17.4117 40.088C15.4281 40.8173 13.5348 41.7721 11.7692 42.9336C9.26931 39.4013 7.76707 35.2608 7.42032 30.9473V30.9473ZM13.0436 44.5886C14.6079 43.5793 16.2796 42.7472 18.028 42.1078C19.4168 46.2165 21.4377 49.6444 23.8688 51.9802C19.654 50.5525 15.9114 47.9963 13.0481 44.5898L13.0436 44.5886ZM39.1141 52.0482C41.5825 49.701 43.6341 46.2358 45.0342 42.0693C46.8203 42.7129 48.5272 43.5582 50.1217 44.5886C47.2171 48.0504 43.4048 50.6337 39.113 52.0482H39.1141ZM39.1141 5.95068C43.4076 7.36559 47.2218 9.94916 50.1285 13.4114C48.7681 14.2832 47.3265 15.0211 45.8238 15.6147L45.6969 15.583L45.6652 15.6781C45.4568 15.7665 45.2495 15.856 45.0342 15.9308C43.6273 11.7711 41.5814 8.30467 39.1141 5.95068V5.95068ZM47.0801 28.7735C47.0739 25.1212 46.5941 21.4851 45.6527 17.9562C47.6757 17.2199 49.6058 16.2501 51.404 15.0664C54.2428 19.077 55.7868 23.86 55.8288 28.7735H47.0801Z" fill="#e0bc6d"></path>
                                                        </g>
                                                        <defs>
                                                            <clipPath id="clip0_1_4">
                                                                <rect width="58" height="58" fill="white"></rect>
                                                            </clipPath>
                                                        </defs>
                                                    </svg>
                                                </div>
                                                <div class="coundown d-flex flex-column">
                                                    <div class="d-flex flex-row justify-content-center align-items-center gap-2">
                                                        <div class="plus-icon">
                                                            <h3 class="odometer" style="font-family: 'Open Sans'; font-weight: 700; font-size: 30px; line-height: 42px; color: black;" data-odometer-final="2017"></h3>
                                                        </div>
                                                    </div>
                                                    <p style="font-family:'Open Sans';color:black;font-size:16px;font-weight: 600;;line-height: 27px;">
                                                        <?= lang('text_homepage.since_year') ?>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-3 col-md-4 col-sm-6 col-10">
                                            <div class="counter-single text-center d-flex flex-column hover-border1">
                                                <div class="counter-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 58 58" fill="none">
                                                        <g clip-path="url(#clip0_1_8)">
                                                            <path opacity="0.4" d="M14.2061 58C19.6711 58 24.1014 55.778 24.1014 53.0369C24.1014 50.2959 19.6711 48.0738 14.2061 48.0738C8.74107 48.0738 4.31081 50.2959 4.31081 53.0369C4.31081 55.778 8.74107 58 14.2061 58Z" fill="#e0bc6d"></path>
                                                            <path opacity="0.4" d="M46.6347 32.1141C50.9634 32.1141 54.4725 30.3278 54.4725 28.1242C54.4725 25.9206 50.9634 24.1343 46.6347 24.1343C42.306 24.1343 38.7968 25.9206 38.7968 28.1242C38.7968 30.3278 42.306 32.1141 46.6347 32.1141Z" fill="#e0bc6d"></path>
                                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M36.5914 28.6325C35.8781 28.4415 35.2597 28.4066 34.7319 28.4755C34.1842 28.5469 33.6824 28.1609 33.6109 27.6133C33.5394 27.0656 33.9255 26.5637 34.4731 26.4923C35.2904 26.3856 36.1734 26.4502 37.1087 26.7006C37.6422 26.8434 37.9589 27.3917 37.816 27.9252C37.6732 28.4587 37.1249 28.7754 36.5914 28.6325ZM30.654 31.2872C31.205 31.3247 31.6213 31.8018 31.5838 32.3528C31.4983 33.6095 31.8363 34.9187 32.6147 35.9466C32.9481 36.3869 32.8615 37.0141 32.4212 37.3475C31.9809 37.6809 31.3537 37.5943 31.0203 37.154C29.9204 35.7016 29.4737 33.9029 29.5884 32.217C29.6259 31.666 30.103 31.2497 30.654 31.2872ZM46.7042 37.8149C46.7395 37.2637 47.215 36.8456 47.7662 36.881C49.2496 36.9763 50.5813 37.2302 51.7551 37.6165C52.2797 37.7891 52.5651 38.3543 52.3925 38.8789C52.2198 39.4035 51.6546 39.6889 51.13 39.5163C50.1348 39.1888 48.9721 38.9626 47.638 38.8769C47.0869 38.8415 46.6688 38.366 46.7042 37.8149ZM41.8181 37.2619C42.3622 37.1671 42.8801 37.5313 42.975 38.0754C43.0698 38.6195 42.7056 39.1374 42.1616 39.2322C41.5754 39.3344 40.9701 39.4577 40.3459 39.6035C39.4942 39.8024 38.6901 39.9198 37.9331 39.9626C37.3817 39.9938 36.9094 39.5721 36.8782 39.0207C36.847 38.4693 37.2687 37.997 37.8201 37.9658C38.4514 37.9301 39.1408 37.8311 39.891 37.6559L39.891 37.6559C40.5509 37.5018 41.1933 37.3709 41.8181 37.2619ZM55.4619 40.9956C55.9313 40.7045 56.5477 40.8491 56.8388 41.3184C57.6624 42.6465 57.9756 44.1511 57.7559 45.6481C57.6757 46.1945 57.1677 46.5724 56.6212 46.4922C56.0748 46.412 55.6969 45.904 55.7771 45.3576C55.927 44.3365 55.7186 43.3069 55.1391 42.3725C54.848 41.9031 54.9926 41.2867 55.4619 40.9956ZM54.478 49.555C54.7992 50.0042 54.6955 50.6288 54.2463 50.9501C53.2258 51.68 51.9974 52.2972 50.5692 52.7641C50.0443 52.9357 49.4796 52.6493 49.308 52.1244C49.1363 51.5994 49.4228 51.0348 49.9477 50.8631C51.2042 50.4524 52.2456 49.9221 53.0829 49.3233C53.5321 49.002 54.1567 49.1058 54.478 49.555ZM36.1274 53.6218C35.0179 53.6198 33.909 53.6234 32.8438 53.6307C32.2915 53.6344 31.8408 53.1898 31.837 52.6375C31.8332 52.0852 32.2779 51.6345 32.8302 51.6307C33.9002 51.6234 35.0149 51.6198 36.131 51.6218C36.6832 51.6228 37.1302 52.0713 37.1292 52.6236C37.1282 53.1759 36.6797 53.6228 36.1274 53.6218ZM40.0667 52.6536C40.0796 52.1014 40.5376 51.6643 41.0897 51.6771C41.6646 51.6905 42.2196 51.7067 42.7469 51.7259M28.8988 52.6736C28.9087 53.2257 28.4692 53.6815 27.917 53.6914C27.2848 53.7028 26.7315 53.7143 26.28 53.725C25.7279 53.738 25.2697 53.301 25.2567 52.7489C25.2436 52.1968 25.6807 51.7386 26.2328 51.7256C26.6885 51.7148 27.2456 51.7032 27.881 51.6917C28.4332 51.6818 28.8889 52.1214 28.8988 52.6736Z" fill="#e0bc6d"></path>
                                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M14.4213 53.7181C12.5591 52.7633 2.40155 44.0014 0.313615 33.9475C-1.77433 23.8937 6.97242 17.3221 14.4213 17.3221C20.7417 17.3221 29.4883 22.7702 28.3034 33.4981C27.852 36.8681 26.2154 44.1697 14.4213 53.7181ZM18.8105 28.6107C18.8105 31.083 16.7489 33.0872 14.2058 33.0872C11.6627 33.0872 9.60108 31.083 9.60108 28.6107C9.60108 26.1384 11.6627 24.1342 14.2058 24.1342C16.7489 24.1342 18.8105 26.1384 18.8105 28.6107Z" fill="#e0bc6d"></path>
                                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M46.9038 28.8054C45.4269 28.0496 37.3708 21.1151 35.7149 13.158C34.0589 5.20097 40.996 -5.78936e-06 46.9038 0C51.9165 4.91217e-06 58.8535 4.31191 57.9138 12.8024C57.5556 15.4696 56.2577 21.2484 46.9038 28.8054ZM49.9662 8.66112C49.9662 10.4347 48.5187 11.8725 46.7331 11.8725C44.9475 11.8725 43.5 10.4347 43.5 8.66112C43.5 6.8875 44.9475 5.44971 46.7331 5.44971C48.5187 5.44971 49.9662 6.8875 49.9662 8.66112Z" fill="#e0bc6d"></path>
                                                        </g>
                                                        <defs>
                                                            <clipPath id="clip0_1_8">
                                                                <rect width="58" height="58" fill="white"></rect>
                                                            </clipPath>
                                                        </defs>
                                                    </svg>
                                                </div>
                                                <div class="coundown d-flex flex-column">
                                                    <div class="d-flex flex-row justify-content-center align-items-center gap-2">
                                                        <div class="plus-icon">
                                                            <h3 style="font-family: 'Open Sans'; font-weight: 700; font-size: 30px; line-height: 42px; color: black;" class="odometer" data-odometer-final="25">�&nbsp;</h3>
                                                        </div>
                                                    </div>
                                                    <p style="font-family:'Open Sans';color:black;font-size:16px;font-weight: 600;;line-height: 27px;">
                                                        <?= lang('text_homepage.passed_country') ?>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-3 col-md-4 col-sm-6 col-10">
                                            <div class="counter-single text-center d-flex flex-column hover-border1">
                                                <div class="counter-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 58 58" fill="none">
                                                        <path d="M44.2644 38.4712C48.5751 34.4074 51.2707 28.6482 51.2707 22.2705C51.2707 17.1942 49.6071 12.4131 46.4598 8.44392C43.4069 4.59371 39.1133 1.82647 34.3702 0.651973C33.7636 0.501989 33.1488 0.871966 32.9984 1.47927C32.8481 2.08657 33.2184 2.70078 33.8258 2.85122C42.7631 5.06428 49.0051 13.0498 49.0051 22.2705C49.0051 33.3012 40.0309 42.2753 29.0001 42.2753C17.9695 42.2753 8.99522 33.3012 8.99522 22.2705C8.99522 13.0498 15.2372 5.06428 24.1746 2.85122C24.7819 2.70078 25.1522 2.08657 25.0019 1.47927C24.8515 0.871966 24.2371 0.501422 23.6299 0.651973C18.8868 1.82647 14.5934 4.59371 11.5405 8.44392C8.39318 12.4131 6.72961 17.1942 6.72961 22.2705C6.72961 28.6481 9.42514 34.4074 13.7357 38.4712L7.80498 49.8138C7.51578 50.3669 7.7285 51.0498 8.28066 51.3408L8.32147 51.3623C8.57472 51.4959 8.86907 51.5284 9.14566 51.4536L17.3651 49.2284L20.2291 57.2481C20.3805 57.6719 20.7684 57.9659 21.2174 57.9972C21.2438 57.999 21.27 57.9999 21.2962 57.9999C21.7156 57.9999 22.1034 57.7673 22.2998 57.3921L29.0001 44.5776L35.7006 57.3921C35.8968 57.7675 36.2848 58.0001 36.7041 57.9999C36.7303 57.9999 36.7566 57.999 36.7829 57.9972C37.2319 57.9661 37.6198 57.6719 37.7713 57.2481L40.6352 49.2284L48.8546 51.4538C49.1309 51.5287 49.4254 51.4961 49.6788 51.3625L49.7196 51.3409C50.2718 51.0499 50.4845 50.367 50.1952 49.8139L44.2644 38.4712ZM21.4918 54.0475L19.1466 47.4803C18.9478 46.9237 18.3541 46.6132 17.7837 46.7679L10.993 48.6065L15.5063 39.9748C18.6373 42.3669 22.4183 43.9483 26.5343 44.4038L21.4918 54.0475ZM40.2165 46.7679C39.6461 46.6134 39.0525 46.9237 38.8537 47.4803L36.5084 54.0475L31.4658 44.4038C35.5819 43.9483 39.3629 42.3669 42.4938 39.9748L47.0072 48.6065L40.2165 46.7679Z" fill="#e0bc6d"></path>
                                                        <path d="M29 2.26563C29.6256 2.26563 30.1328 1.75844 30.1328 1.13281C30.1328 0.507177 29.6256 0 29 0C28.3744 0 27.8672 0.507177 27.8672 1.13281C27.8672 1.75844 28.3744 2.26563 29 2.26563Z" fill="#e0bc6d"></path>
                                                        <path d="M12.3937 22.2706C12.3937 31.4273 19.8433 38.877 29.0001 38.877C38.157 38.877 45.6066 31.4274 45.6066 22.2706C45.6066 13.1137 38.157 5.66406 29.0001 5.66406C19.8433 5.66406 12.3937 13.1137 12.3937 22.2706ZM43.341 22.2706C43.341 30.1781 36.9077 36.6113 29.0001 36.6113C21.0926 36.6113 14.6593 30.1781 14.6593 22.2706C14.6593 14.3629 21.0926 7.92969 29.0001 7.92969C36.9077 7.92969 43.341 14.3629 43.341 22.2706Z" fill="#e0bc6d"></path>
                                                        <path d="M27.9804 16.1746L25.6466 21.004L20.4157 19.8175C20.0067 19.7249 19.5804 19.8654 19.3068 20.183C19.0333 20.5006 18.9574 20.9433 19.1097 21.3338L21.218 26.7406H21.0707C20.4451 26.7406 19.9379 27.2477 19.9379 27.8734C19.9379 28.499 20.4451 29.0062 21.0707 29.0062H36.93C37.5556 29.0062 38.0629 28.499 38.0629 27.8734C38.0629 27.2477 37.5556 26.7406 36.93 26.7406H36.7828L38.8911 21.3338C39.0434 20.9433 38.9677 20.5006 38.6941 20.183C38.4206 19.8653 37.9941 19.7249 37.5852 19.8174L32.3543 21.0039L30.0204 16.1745C29.8313 15.7833 29.4349 15.5346 29.0004 15.5346C28.5659 15.5347 28.1694 15.7833 27.9804 16.1746ZM30.7063 22.8009C30.9358 23.2758 31.4627 23.5294 31.9768 23.4127L36.005 22.4991L34.3512 26.7407H23.6499L21.996 22.4991L26.0242 23.4127C26.5383 23.5292 27.0652 23.2758 27.2947 22.8009L29.0004 19.2709L30.7063 22.8009Z" fill="#e0bc6d"></path>
                                                    </svg>
                                                </div>
                                                <div class="coundown d-flex flex-column">
                                                    <div class="d-flex flex-row justify-content-center align-items-center gap-2">
                                                        <div class="plus-icon">
                                                            <h3 style="font-family: 'Open Sans'; font-weight: 700; font-size: 30px; line-height: 42px; color: black;" class="odometer" data-odometer-final="4.5/5">�&nbsp;</h3>
                                                        </div>
                                                    </div>
                                                    <p style="font-family:'Open Sans';color:black;font-size:16px;font-weight: 600;;line-height: 27px;">
                                                        <?= lang('text_homepage.rating_customer') ?>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-10">
                                            <div class="counter-single text-center d-flex flex-column hover-border1">
                                                <div class="counter-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="58" height="58" viewBox="0 0 58 58" fill="none">
                                                        <path d="M27.618 4.9957C23.3586 5.55078 19.8582 8.91524 19.0313 13.2539C18.85 14.1715 18.884 16.1539 19.0879 17.1281C20.0508 21.818 24.1742 25.1484 29 25.1484C33.8258 25.1484 37.9492 21.818 38.9121 17.1281C39.116 16.1539 39.15 14.1715 38.9688 13.2539C38.5383 10.9996 37.5754 9.23242 35.8762 7.62383C34.3582 6.18516 32.3758 5.25625 30.2348 4.98438C29.1699 4.85977 28.7055 4.85977 27.618 4.9957ZM30.9484 8.72266C33.6672 9.56094 35.5816 12.1551 35.5816 14.9984C35.5703 16.8676 34.9473 18.4082 33.6332 19.7109C32.3984 20.957 30.7445 21.6367 29 21.6367C27.2555 21.6367 25.6016 20.957 24.3668 19.7109C23.0641 18.4082 22.4297 16.8676 22.4184 15.0098C22.4184 11.8266 24.7406 9.0625 27.9012 8.49609C28.7055 8.36016 30.0988 8.46211 30.9484 8.72266Z" fill="#086B7D"></path>
                                                        <path d="M9.7875 14.4433C4.9957 15.4855 2.36758 20.7305 4.46328 25.0918C6.04922 28.4222 9.66289 30.1215 13.2086 29.2265C17.8871 28.0371 20.2773 22.8601 18.1363 18.5215C16.607 15.4289 13.1066 13.7183 9.7875 14.4433ZM12.9707 18.1703C14.8172 19.0086 15.8367 21.1949 15.2363 23.0187C14.0242 26.6664 9.24375 26.9722 7.62383 23.5058C7.35195 22.9281 7.30664 22.6789 7.30664 21.8633C7.30664 21.0023 7.35195 20.8097 7.68047 20.1414C8.0543 19.3711 8.76797 18.6234 9.45898 18.2609C10.5012 17.7172 11.9059 17.6832 12.9707 18.1703Z" fill="#086B7D"></path>
                                                        <path d="M45.0293 14.4547C40.2262 15.5309 37.6887 20.8664 39.875 25.2844C41.1551 27.8672 43.7492 29.4531 46.6719 29.4531C50.8746 29.4531 54.2504 26.0887 54.2617 21.8859C54.273 18.6008 52.0527 15.5988 48.8809 14.6133C47.8273 14.2848 46.1055 14.2168 45.0293 14.4547ZM47.6348 17.9437C48.8582 18.2609 49.7645 19.0086 50.3195 20.1414C50.648 20.8098 50.6934 21.0023 50.6934 21.8633C50.6934 22.6789 50.648 22.9281 50.3762 23.5059C49.6852 24.9898 48.2465 25.9414 46.6719 25.9414C44.3496 25.9414 42.4805 23.959 42.6164 21.6594C42.7637 19.1219 45.2332 17.298 47.6348 17.9437Z" fill="#086B7D"></path>
                                                        <path d="M23.166 26.0094C22.2824 26.1226 21.3988 26.3492 20.7191 26.6211C19.1559 27.2555 17.5586 28.5922 16.7316 29.9969C16.4031 30.5293 16.3352 30.5859 16.0859 30.518C15.5762 30.3707 7.70313 30.3367 6.91016 30.4726C3.97617 30.9824 1.35938 33.2707 0.362501 36.216L0.0566418 37.0996L0.0226575 42.9789C-0.0113269 48.6769 1.22678e-06 48.8695 0.226564 49.5605C0.838282 51.3957 2.44688 52.7437 4.32734 53.0156C5.27891 53.1629 52.7211 53.1629 53.6727 53.0156C55.5531 52.7437 57.1617 51.3957 57.7734 49.5605C58 48.8695 58.0113 48.6769 57.9773 42.9789L57.9434 37.0996L57.6375 36.216C56.6406 33.2707 54.0238 30.9824 51.0898 30.4726C50.2969 30.3367 42.4238 30.3707 41.9141 30.518C41.6648 30.5859 41.5969 30.5293 41.2684 29.9969C40.4527 28.6148 38.8441 27.2555 37.3375 26.6437C35.8082 26.0207 35.8309 26.0207 29.4531 25.998C26.1793 25.9754 23.3586 25.9867 23.166 26.0094ZM34.7773 29.5664C36.6125 29.8609 38.1871 31.209 38.8328 33.0555C38.9914 33.5312 39.0141 34.5168 39.048 41.5969L39.0934 49.6172H29H18.9066L18.952 41.5969C18.9859 34.5168 19.0086 33.5312 19.1672 33.0555C19.8016 31.2543 21.3875 29.8609 23.1094 29.5777C23.993 29.4418 33.8711 29.4305 34.7773 29.5664ZM15.157 33.9391L15.4063 34.007V41.8121V49.6285L10.0027 49.5945L4.58789 49.5605L4.21406 49.3C3.43242 48.7449 3.45508 48.8809 3.45508 43.2168C3.45508 38.1531 3.45508 38.1191 3.72695 37.3488C4.23672 35.8535 5.5168 34.5734 6.9668 34.109C7.57852 33.9051 7.99766 33.8824 11.2715 33.8824C13.2652 33.8711 15.0098 33.9051 15.157 33.9391ZM50.9879 34.0976C52.4719 34.5621 53.752 35.8309 54.273 37.3488C54.5449 38.1191 54.5449 38.1531 54.5449 43.2168C54.5449 48.8809 54.5676 48.7449 53.7859 49.3L53.4121 49.5605L48.0086 49.5945L42.5938 49.6285V41.8121C42.5938 34.4715 42.6051 33.9957 42.7977 33.9504C42.8996 33.9164 44.6328 33.8937 46.6266 33.8824C49.9797 33.8711 50.3309 33.8937 50.9879 34.0976Z" fill="#086B7D"></path>
                                                    </svg>
                                                </div>
                                                <div class="coundown d-flex flex-column">
                                                    <div class="d-flex flex-row justify-content-center align-items-center gap-2">
                                                        <div class="plus-icon">
                                                            <h3 class="odometer" data-odometer-final="500">�&nbsp;</h3><i class="bi bi-plus-lg"></i>
                                                        </div>
                                                    </div>
                                                    <p>Travel Guides</p>
                                                </div>
                                            </div>
                                        </div> -->

                                    </div>
                                </div>
                            </div>



                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Us Start -->

    <section style="margin-top: 60px !important;" class="elementor-section elementor-top-section elementor-element elementor-element-a3bd80e elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="a3bd80e" data-element_type="section" data-settings='{"background_background":"classic"}'>
        <div class="elementor-background-overlay" style="background-image: none !important;"></div>
        <div class="elementor-container elementor-column-gap-no">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-7eb456c" data-id="7eb456c" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <section class="elementor-section elementor-inner-section elementor-element elementor-element-e142efa elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="e142efa" data-element_type="section" data-settings='{"background_background":"classic"}'>
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-5fffbce" data-id="5fffbce" data-element_type="column" style="width: 100% !important;">
                                <div class="elementor-widget-wrap elementor-element-populated" style="margin-right: 500px;">
                                    <div class="elementor-element elementor-element-6ac66df elementor-widget elementor-widget-astrip_heading" data-id="6ac66df" data-element_type="widget" data-widget_type="astrip_heading.default">
                                        <div class="elementor-widget-container">
                                            <div class="justify-content-center">
                                                <div class="section-title2 d-flex flex-column justify-content-center">
                                                    <span class="heading-section" style="color:#086B7D !important;letter-spacing: 0px !important;font-family: 'Open Sans', Arial, sans-serif !important;">
                                                        <?= $language == 'id' ? $aboutUs['heading_id'] : $aboutUs['heading_en'] ?>
                                                    </span>
                                                    <h2 class="title-section" style="color: black;font-family: 'Open Sans', Arial, sans-serif !important;">
                                                        <?= $language == 'id' ? $aboutUs['title_id'] : $aboutUs['title_en'] ?>
                                                    </h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-842954f elementor-widget elementor-widget-text-editor" data-id="842954f" data-element_type="widget" data-widget_type="text-editor.default">
                                        <div class="elementor-widget-container">
                                            <style>
                                                /*! elementor - v3.17.0 - 08-11-2023 */
                                                .elementor-widget-text-editor.elementor-drop-cap-view-stacked .elementor-drop-cap {
                                                    background-color: #69727d;
                                                    color: #fff;
                                                }

                                                .elementor-widget-text-editor.elementor-drop-cap-view-framed .elementor-drop-cap {
                                                    color: #69727d;
                                                    border: 3px solid;
                                                    background-color: transparent;
                                                }

                                                .elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap {
                                                    margin-top: 8px;
                                                }

                                                .elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap-letter {
                                                    width: 1em;
                                                    height: 1em;
                                                }

                                                .elementor-widget-text-editor .elementor-drop-cap {
                                                    float: left;
                                                    text-align: center;
                                                    line-height: 1;
                                                    font-size: 50px;
                                                }

                                                .elementor-widget-text-editor .elementor-drop-cap-letter {
                                                    display: inline-block;
                                                }
                                            </style>
                                            <span class="about-us-desc" style="color: black !important; font-family: 'Open Sans', Arial, sans-serif !important; line-height: 24px;">
                                                <?php
                                                $description = $language == 'id' ? $aboutUs['description_id'] : $aboutUs['description_en'];
                                                echo substr($description, 0, 950);
                                                ?>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-15c7e1e elementor-widget elementor-widget-astrip_button" data-id="15c7e1e" data-element_type="widget" data-widget_type="astrip_button.default">
                                        <div class="elementor-widget-container">
                                            <div class="row justify-content-center">
                                                <div class="btn-align">
                                                    <a aria-hidden="true" href="/<?= $language ?>/<?= $language == 'id' ? 'tentang-kami' : 'about-us' ?>" class="eg-btn btn--primary-outline btn--lg" style="border-radius: 30px; background-color: rgb(224, 188, 109); font-family: Oswald; color: white;" onmouseover="this.style.color='#e0bc6d'" onmouseout="this.style.color='white'">
                                                        <?= strtoupper(lang("text_homepage.button_about_us")) ?>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>

    <!-- About Us End -->
    <!-- Our Services Start -->

    <section class="elementor-section elementor-top-section elementor-element elementor-element-aa8649e elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="aa8649e" data-element_type="section" style="margin-top: 60px !important;">
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-7c7b2d8" data-id="7c7b2d8" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-ef6b795 elementor-widget elementor-widget-astrip_heading" data-id="ef6b795" data-element_type="widget" data-widget_type="astrip_heading.default">
                        <div class="elementor-widget-container">


                            <div class=" justify-content-center">
                                <div class="section-title1">
                                    <span class="heading-section" style="color:#086B7D !important;letter-spacing: 0px !important;">
                                        <?= $language == 'id' ? $homepage['our_services_section_id'] : $homepage['our_services_section_en'] ?>
                                    </span>
                                    <h2 class="title-section" style="color:black;">
                                        <?= $language == 'id' ? $homepage['our_services_title_id'] : $homepage['our_services_title_en'] ?>
                                    </h2>
                                    <div class="heading-ribbon flex justify-center">
                                        <svg width="370" height="18" viewBox="0 0 370 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M184.946 0.780971C183.9 1.11998 183.054 1.98633 182.734 3.03348L182.601 3.46289L182 3.48549L181.391 3.50809L181.02 3.16908C180.508 2.70201 179.944 2.33287 179.15 1.95619C176.648 0.750837 173.62 0.999442 171.305 2.59654C170.629 3.05608 169.746 3.94503 169.308 4.59291C167.074 7.86998 167.408 12.1716 170.117 14.9515C171.668 16.5485 173.613 17.3622 175.847 17.3622C178.823 17.3622 181.599 15.6219 182.905 12.94L183.209 12.3223L183.914 12.1867C184.909 11.9983 187.091 11.9983 188.086 12.1867L188.791 12.3223L189.073 12.9023C190.401 15.637 193.14 17.3622 196.153 17.3622C199.894 17.3622 203.004 14.9063 203.924 11.2299C204.584 8.57813 203.85 5.73047 201.979 3.71903C201.296 2.98828 200.643 2.50614 199.693 2.03153C198.758 1.56445 198.053 1.36105 196.97 1.24051C194.81 0.999442 192.427 1.79046 190.891 3.25195C190.631 3.50809 190.616 3.50809 190.008 3.48549L189.399 3.46289L189.266 3.03348C188.939 1.95619 188.048 1.07478 186.972 0.758371C186.43 0.600167 185.48 0.607701 184.946 0.780971ZM186.868 2.0692C187.581 2.3856 188.108 3.11635 188.197 3.9149C188.227 4.14844 188.308 4.41964 188.39 4.51758C188.516 4.68331 188.59 4.70592 189.05 4.70592C189.332 4.70592 189.563 4.72098 189.563 4.73605C189.563 4.75865 189.444 4.97712 189.295 5.23326C188.939 5.85854 188.642 6.59682 188.442 7.39537C188.308 7.92271 188.271 8.26925 188.271 9.113C188.264 9.69308 188.293 10.3485 188.323 10.5745L188.382 10.9813L188.138 10.9286C188.004 10.8984 187.47 10.8457 186.95 10.8005C186.045 10.7176 184.575 10.7854 183.855 10.9286C183.61 10.9813 183.603 10.9813 183.655 10.7628C183.759 10.2732 183.788 8.85686 183.707 8.20898C183.595 7.3577 183.195 6.12974 182.786 5.39146C182.616 5.07506 182.467 4.79632 182.452 4.76618C182.437 4.72852 182.66 4.70592 182.942 4.70592C183.41 4.70592 183.484 4.68331 183.61 4.51758C183.692 4.41964 183.773 4.14844 183.803 3.9149C183.981 2.3856 185.51 1.45898 186.868 2.0692ZM177.532 2.67188C180.76 3.60603 182.831 6.65709 182.504 9.96429C182.148 13.4674 179.268 16.1116 175.795 16.1116C173.925 16.1116 172.359 15.4336 171.008 14.055C169.746 12.7667 169.078 11.1169 169.078 9.30887C169.078 7.48577 169.709 5.89621 170.948 4.58538C171.928 3.54576 173.079 2.88281 174.407 2.58901C175.268 2.40067 176.73 2.43834 177.532 2.67188ZM197.541 2.58901C198.907 2.87528 200.042 3.51563 201.037 4.57031C204.273 7.99051 203.211 13.5276 198.944 15.524C197.675 16.1191 196.02 16.2849 194.654 15.9459C192.746 15.4637 191.166 14.2132 190.238 12.4503C188.709 9.54241 189.511 5.85854 192.108 3.8697C193.014 3.17662 194.075 2.70201 195.07 2.52874C195.76 2.41574 196.829 2.43834 197.541 2.58901Z" fill="#086B7D"></path>
                                            <path d="M185.295 2.81501C184.523 3.28962 184.323 4.17857 184.805 4.94699C185.072 5.36886 185.458 5.57227 186 5.57227C186.542 5.57227 186.928 5.36886 187.195 4.94699C187.447 4.54018 187.521 4.1409 187.41 3.7341C187.321 3.38756 186.972 2.94308 186.661 2.77734C186.356 2.61914 185.57 2.64174 185.295 2.81501Z" fill="#086B7D"></path>
                                            <path d="M174.637 3.60603C172.477 4.06557 170.815 5.7154 170.258 7.94531C170.028 8.85686 170.08 10.1978 170.377 11.0943C171.008 12.9927 172.566 14.4542 174.474 14.9289C175.209 15.1097 176.515 15.0871 177.264 14.8836C179.268 14.3412 180.864 12.6839 181.354 10.6348C181.517 9.97935 181.525 8.66853 181.369 7.99805C180.901 5.94894 179.439 4.36691 177.428 3.72656C176.76 3.51562 175.357 3.45536 174.637 3.60603ZM176.886 4.90178C177.665 5.09012 178.266 5.45173 178.912 6.09961C179.595 6.78516 179.921 7.34263 180.137 8.21652C180.745 10.6272 179.246 13.0907 176.797 13.716C176.144 13.8817 175.008 13.829 174.355 13.5954C173.746 13.377 172.878 12.7818 172.455 12.2921C171.72 11.4408 171.349 10.4163 171.349 9.26367C171.349 8.62333 171.379 8.41992 171.572 7.86998C171.846 7.07143 172.225 6.48382 172.804 5.95647C173.242 5.54966 173.984 5.10519 174.511 4.93945C175.194 4.71345 176.077 4.69838 176.886 4.90178Z" fill="#086B7D"></path>
                                            <path d="M175.216 5.84347C173.902 6.04688 172.752 7.16183 172.448 8.52539C172.247 9.43694 172.425 9.90402 172.967 9.90402C173.368 9.89648 173.605 9.59514 173.605 9.09793C173.605 8.93973 173.702 8.60826 173.813 8.35965C174.147 7.65151 174.8 7.1543 175.513 7.07143C176.018 7.01116 176.248 6.90569 176.344 6.69475C176.463 6.41602 176.448 6.24275 176.263 6.03181C176.062 5.79827 175.795 5.75307 175.216 5.84347Z" fill="#086B7D"></path>
                                            <path d="M195.188 3.57589C193.355 3.8923 191.626 5.30106 190.921 7.05636C190.505 8.09598 190.386 9.58761 190.646 10.6348C191.136 12.6839 192.732 14.3412 194.736 14.8836C195.485 15.0871 196.791 15.1097 197.526 14.9289C199.434 14.4542 201 12.9927 201.623 11.0943C201.786 10.5896 201.838 10.2882 201.861 9.56501C201.935 7.76451 201.43 6.43108 200.213 5.19559C199.345 4.31417 198.461 3.83203 197.311 3.60603C196.71 3.49302 195.76 3.47796 195.188 3.57589ZM197.311 4.90179C198.031 5.08259 198.743 5.50446 199.359 6.13728C200.243 7.03376 200.658 8.05078 200.651 9.30134C200.643 10.8457 199.931 12.1867 198.662 13.053C197.912 13.5653 197.341 13.7536 196.428 13.7988C195.879 13.829 195.559 13.8064 195.203 13.716C193.511 13.2866 192.175 11.9079 191.826 10.2355C191.373 8.05831 192.546 5.88867 194.624 5.05246C195.455 4.72098 196.361 4.66825 197.311 4.90179Z" fill="#086B7D"></path>
                                            <path d="M195.611 5.84347C194.068 6.07701 192.754 7.62891 192.754 9.21094C192.754 9.81362 193.325 10.115 193.748 9.73075C193.897 9.60268 193.956 9.45201 194.008 9.05273C194.09 8.44252 194.327 7.99805 194.788 7.59124C195.136 7.27483 195.715 7.04129 196.138 7.04129C196.91 7.04129 197.044 5.91881 196.279 5.8058C196.153 5.79074 195.856 5.8058 195.611 5.84347Z" fill="#086B7D"></path>
                                            <rect x="215" y="8" width="155" height="2" rx="1" fill="url(#paint0_linear_2_2)"></rect>
                                            <rect y="8" width="157" height="2" rx="1" fill="url(#paint1_linear_2_2)"></rect>
                                            <defs>
                                                <linearGradient id="paint0_linear_2_2" x1="215" y1="8.99999" x2="370" y2="8.99998" gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="#086B7D"></stop>
                                                    <stop offset="1" stop-color="white" stop-opacity="0"></stop>
                                                </linearGradient>
                                                <linearGradient id="paint1_linear_2_2" x1="-2.0562e-07" y1="8.99999" x2="157" y2="8.99998" gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="white"></stop>
                                                    <stop offset="1" stop-color="#086B7D"></stop>
                                                </linearGradient>
                                            </defs>
                                        </svg>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="elementor-section elementor-top-section elementor-element elementor-element-04a950f elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="04a950f" data-element_type="section" style="margin-top: 0px !important;">
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-34259fb" data-id="34259fb" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-916128e elementor-widget elementor-widget-astrip_blog" data-id="916128e" data-element_type="widget" data-widget_type="astrip_blog.default">
                        <div class="elementor-widget-container">

                            <div class="blog-section overflow-hidden">
                                <div class="row justify-content-center mb-5">
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-10 mb-1">
                                        <div class="card blog-single1 h-90">
                                            <div class="image">
                                                <a href="/<?= $language ?>/<?= $language == 'id' ? 'layanan-kami' : 'our-services' ?>/vip-services">
                                                    <img loading="lazy" decoding="async" width="870" height="500" src="<?= base_url('assets/images/blog-dt8.jpg') ?>" class="card-img-top img-fluid wp-post-image" alt="our-service" srcset="<?= base_url('assets/images/blog-dt8.jpg') ?> 870w, <?= base_url('assets/images/blog-dt8-600x345.jpg') ?> 600w, <?= base_url('assets/images/blog-dt8-300x172.jpg') ?> 300w, <?= base_url('assets/images/blog-dt8-768x441.jpg') ?> 768w, <?= base_url('assets/images/blog-dt8-370x213.jpg') ?> 370w" sizes="(max-width: 870px) 100vw, 870px">
                                                    <div class="overlay">
                                                        <h4 class="card-title">
                                                            VIP Services
                                                        </h4>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-10 mb-1">
                                        <div class="card blog-single1 h-90">
                                            <div class="image">
                                                <a href="/<?= $language ?>/<?= $language == 'id' ? 'layanan-kami' : 'our-services' ?>/private-tour">
                                                    <img loading="lazy" decoding="async" width="870" height="500" src="<?= base_url('assets/images/blog-dt9.jpg') ?>" class="card-img-top img-fluid wp-post-image" alt="our-service" srcset="<?= base_url('assets/images/blog-dt9.jpg') ?> 870w, <?= base_url('assets/images/blog-dt9-600x345.jpg') ?> 600w, <?= base_url('assets/images/blog-dt9-300x172.jpg') ?> 300w, <?= base_url('assets/images/blog-dt9-768x441.jpg') ?> 768w, <?= base_url('assets/images/blog-dt9-370x213.jpg') ?> 370w" sizes="(max-width: 870px) 100vw, 870px">
                                                    <div class="overlay">
                                                        <h4 class="card-title">
                                                            Private Tour
                                                        </h4>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-10 mb-4">
                                        <div class="card blog-single1 h-90">
                                            <div class="image">
                                                <a href="/<?= $language ?>/<?= $language == 'id' ? 'layanan-kami' : 'our-services' ?>/destination-event">
                                                    <img loading="lazy" decoding="async" width="870" height="500" src="<?= base_url('assets/images/blog-dt10.jpg') ?>" class="card-img-top img-fluid wp-post-image" alt="our-service" srcset="<?= base_url('assets/images/blog-dt10.jpg') ?> 870w, <?= base_url('assets/images/blog-dt10-600x345.jpg') ?> 600w, <?= base_url('assets/images/blog-dt10-300x172.jpg') ?> 300w, <?= base_url('assets/images/blog-dt10-768x441.jpg') ?> 768w, <?= base_url('assets/images/blog-dt10-370x213.jpg') ?> 370w" sizes="(max-width: 870px) 100vw, 870px">
                                                    <div class="overlay">
                                                        <h4 class="card-title">
                                                            Destination Event
                                                        </h4>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>




                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Services End -->

    <section aria-hidden="true" style="padding-top: 60px !important;margin-top:60px !important; background-color: #F9F9F9;" class="elementor-section elementor-top-section elementor-element elementor-element-86a3b54 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="86a3b54" data-element_type="section">
        <div class="elementor-container elementor-column-gap-default" style="max-width: 1140px;">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-0442f94" data-id="0442f94" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-3062334 elementor-widget elementor-widget-astrip_heading" data-id="3062334" data-element_type="widget" data-widget_type="astrip_heading.default">
                        <div class="elementor-widget-container">
                            <div class="justify-content-center">
                                <div class="section-title1">
                                    <span aria-hidden="true" style="color:#086B7D !important;letter-spacing: 0px !important;" class="heading-section">
                                        <?= $language == 'id' ? $homepage['usp_section_id'] : $homepage['usp_section_en'] ?>
                                    </span>
                                    <h3 class="title-section" style="margin-bottom: 15px !important;color:black; font-family: 'Open Sans'; font-weight: 700; font-size: 30px; line-height: 42px;">
                                        <?= $language == 'id' ? $homepage['usp_title_id'] : $homepage['usp_title_en'] ?>
                                    </h3>
                                    <div class="heading-ribbon">
                                        <svg width="370" height="18" viewBox="0 0 370 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M184.946 0.780971C183.9 1.11998 183.054 1.98633 182.734 3.03348L182.601 3.46289L182 3.48549L181.391 3.50809L181.02 3.16908C180.508 2.70201 179.944 2.33287 179.15 1.95619C176.648 0.750837 173.62 0.999442 171.305 2.59654C170.629 3.05608 169.746 3.94503 169.308 4.59291C167.074 7.86998 167.408 12.1716 170.117 14.9515C171.668 16.5485 173.613 17.3622 175.847 17.3622C178.823 17.3622 181.599 15.6219 182.905 12.94L183.209 12.3223L183.914 12.1867C184.909 11.9983 187.091 11.9983 188.086 12.1867L188.791 12.3223L189.073 12.9023C190.401 15.637 193.14 17.3622 196.153 17.3622C199.894 17.3622 203.004 14.9063 203.924 11.2299C204.584 8.57813 203.85 5.73047 201.979 3.71903C201.296 2.98828 200.643 2.50614 199.693 2.03153C198.758 1.56445 198.053 1.36105 196.97 1.24051C194.81 0.999442 192.427 1.79046 190.891 3.25195C190.631 3.50809 190.616 3.50809 190.008 3.48549L189.399 3.46289L189.266 3.03348C188.939 1.95619 188.048 1.07478 186.972 0.758371C186.43 0.600167 185.48 0.607701 184.946 0.780971ZM186.868 2.0692C187.581 2.3856 188.108 3.11635 188.197 3.9149C188.227 4.14844 188.308 4.41964 188.39 4.51758C188.516 4.68331 188.59 4.70592 189.05 4.70592C189.332 4.70592 189.563 4.72098 189.563 4.73605C189.563 4.75865 189.444 4.97712 189.295 5.23326C188.939 5.85854 188.642 6.59682 188.442 7.39537C188.308 7.92271 188.271 8.26925 188.271 9.113C188.264 9.69308 188.293 10.3485 188.323 10.5745L188.382 10.9813L188.138 10.9286C188.004 10.8984 187.47 10.8457 186.95 10.8005C186.045 10.7176 184.575 10.7854 183.855 10.9286C183.61 10.9813 183.603 10.9813 183.655 10.7628C183.759 10.2732 183.788 8.85686 183.707 8.20898C183.595 7.3577 183.195 6.12974 182.786 5.39146C182.616 5.07506 182.467 4.79632 182.452 4.76618C182.437 4.72852 182.66 4.70592 182.942 4.70592C183.41 4.70592 183.484 4.68331 183.61 4.51758C183.692 4.41964 183.773 4.14844 183.803 3.9149C183.981 2.3856 185.51 1.45898 186.868 2.0692ZM177.532 2.67188C180.76 3.60603 182.831 6.65709 182.504 9.96429C182.148 13.4674 179.268 16.1116 175.795 16.1116C173.925 16.1116 172.359 15.4336 171.008 14.055C169.746 12.7667 169.078 11.1169 169.078 9.30887C169.078 7.48577 169.709 5.89621 170.948 4.58538C171.928 3.54576 173.079 2.88281 174.407 2.58901C175.268 2.40067 176.73 2.43834 177.532 2.67188ZM197.541 2.58901C198.907 2.87528 200.042 3.51563 201.037 4.57031C204.273 7.99051 203.211 13.5276 198.944 15.524C197.675 16.1191 196.02 16.2849 194.654 15.9459C192.746 15.4637 191.166 14.2132 190.238 12.4503C188.709 9.54241 189.511 5.85854 192.108 3.8697C193.014 3.17662 194.075 2.70201 195.07 2.52874C195.76 2.41574 196.829 2.43834 197.541 2.58901Z" fill="#086B7D"></path>
                                            <path d="M185.295 2.81501C184.523 3.28962 184.323 4.17857 184.805 4.94699C185.072 5.36886 185.458 5.57227 186 5.57227C186.542 5.57227 186.928 5.36886 187.195 4.94699C187.447 4.54018 187.521 4.1409 187.41 3.7341C187.321 3.38756 186.972 2.94308 186.661 2.77734C186.356 2.61914 185.57 2.64174 185.295 2.81501Z" fill="#086B7D"></path>
                                            <path d="M174.637 3.60603C172.477 4.06557 170.815 5.7154 170.258 7.94531C170.028 8.85686 170.08 10.1978 170.377 11.0943C171.008 12.9927 172.566 14.4542 174.474 14.9289C175.209 15.1097 176.515 15.0871 177.264 14.8836C179.268 14.3412 180.864 12.6839 181.354 10.6348C181.517 9.97935 181.525 8.66853 181.369 7.99805C180.901 5.94894 179.439 4.36691 177.428 3.72656C176.76 3.51562 175.357 3.45536 174.637 3.60603ZM176.886 4.90178C177.665 5.09012 178.266 5.45173 178.912 6.09961C179.595 6.78516 179.921 7.34263 180.137 8.21652C180.745 10.6272 179.246 13.0907 176.797 13.716C176.144 13.8817 175.008 13.829 174.355 13.5954C173.746 13.377 172.878 12.7818 172.455 12.2921C171.72 11.4408 171.349 10.4163 171.349 9.26367C171.349 8.62333 171.379 8.41992 171.572 7.86998C171.846 7.07143 172.225 6.48382 172.804 5.95647C173.242 5.54966 173.984 5.10519 174.511 4.93945C175.194 4.71345 176.077 4.69838 176.886 4.90178Z" fill="#086B7D"></path>
                                            <path d="M175.216 5.84347C173.902 6.04688 172.752 7.16183 172.448 8.52539C172.247 9.43694 172.425 9.90402 172.967 9.90402C173.368 9.89648 173.605 9.59514 173.605 9.09793C173.605 8.93973 173.702 8.60826 173.813 8.35965C174.147 7.65151 174.8 7.1543 175.513 7.07143C176.018 7.01116 176.248 6.90569 176.344 6.69475C176.463 6.41602 176.448 6.24275 176.263 6.03181C176.062 5.79827 175.795 5.75307 175.216 5.84347Z" fill="#086B7D"></path>
                                            <path d="M195.188 3.57589C193.355 3.8923 191.626 5.30106 190.921 7.05636C190.505 8.09598 190.386 9.58761 190.646 10.6348C191.136 12.6839 192.732 14.3412 194.736 14.8836C195.485 15.0871 196.791 15.1097 197.526 14.9289C199.434 14.4542 201 12.9927 201.623 11.0943C201.786 10.5896 201.838 10.2882 201.861 9.56501C201.935 7.76451 201.43 6.43108 200.213 5.19559C199.345 4.31417 198.461 3.83203 197.311 3.60603C196.71 3.49302 195.76 3.47796 195.188 3.57589ZM197.311 4.90179C198.031 5.08259 198.743 5.50446 199.359 6.13728C200.243 7.03376 200.658 8.05078 200.651 9.30134C200.643 10.8457 199.931 12.1867 198.662 13.053C197.912 13.5653 197.341 13.7536 196.428 13.7988C195.879 13.829 195.559 13.8064 195.203 13.716C193.511 13.2866 192.175 11.9079 191.826 10.2355C191.373 8.05831 192.546 5.88867 194.624 5.05246C195.455 4.72098 196.361 4.66825 197.311 4.90179Z" fill="#086B7D"></path>
                                            <path d="M195.611 5.84347C194.068 6.07701 192.754 7.62891 192.754 9.21094C192.754 9.81362 193.325 10.115 193.748 9.73075C193.897 9.60268 193.956 9.45201 194.008 9.05273C194.09 8.44252 194.327 7.99805 194.788 7.59124C195.136 7.27483 195.715 7.04129 196.138 7.04129C196.91 7.04129 197.044 5.91881 196.279 5.8058C196.153 5.79074 195.856 5.8058 195.611 5.84347Z" fill="#086B7D"></path>
                                            <rect x="215" y="8" width="155" height="2" rx="1" fill="url(#paint0_linear_2_2)"></rect>
                                            <rect y="8" width="157" height="2" rx="1" fill="url(#paint1_linear_2_2)"></rect>
                                            <defs>
                                                <linearGradient id="paint0_linear_2_2" x1="215" y1="8.99999" x2="370" y2="8.99998" gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="#086B7D"></stop>
                                                    <stop offset="1" stop-color="white" stop-opacity="0"></stop>
                                                </linearGradient>
                                                <linearGradient id="paint1_linear_2_2" x1="-2.0562e-07" y1="8.99999" x2="157" y2="8.99998" gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="white"></stop>
                                                    <stop offset="1" stop-color="#086B7D"></stop>
                                                </linearGradient>
                                            </defs>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section style="background-color: #F9F9F9;padding-bottom: 60px !important;" class="elementor-section elementor-top-section elementor-element elementor-element-e2c78fd elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="e2c78fd" data-element_type="section">
        <div class="elementor-container elementor-column-gap-default" style="display: flex;justify-content: center; padding: 50px 0px 0px 0px;">
            <div class="elementor-column elementor-col-66 elementor-top-column elementor-element elementor-element-b17fe2a" data-id="b17fe2a" data-element_type="column" style="width: 100%;">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-68b1738 elementor-widget elementor-widget-astrip_accordion" data-id="68b1738" data-element_type="widget" data-widget_type="astrip_accordion.default">
                        <div class="elementor-widget-container">
                            <div class="faq-wrap">
                                <div class="accordion" id="accordionExample">

                                    <?php foreach ($usp as $dataUsp) : ?>
                                        <div class="accordion-item" style="box-shadow: 0px 2px 18px 0px rgba(0, 0, 0, 0.3);">
                                            <h4 class="accordion-header" id="heading<?= $dataUsp['id'] ?>">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?= $dataUsp['id'] ?>" aria-expanded="true" aria-controls="collapse<?= $dataUsp['id'] ?>">
                                                    <a style="font-weight: 700; font-family: 'Open Sans'; font-size: 16px; line-height: 27px;">
                                                        <?= $language == 'id' ? strtoupper($dataUsp['title_id']) : strtoupper($dataUsp['title_en']) ?>
                                                    </a>
                                                </button>
                                            </h4>

                                            <div id="collapse<?= $dataUsp['id'] ?>" class="accordion-collapse collapse " aria-labelledby="heading<?= $dataUsp['id'] ?>" data-bs-parent="#accordionExample">
                                                <div class="accordion-body" style="font-family: 'Open Sans'; font-weight: 500; font-size: 16px; line-height: 27px;">

                                                    <?= $language == 'id' ? $dataUsp['description_id'] : $dataUsp['description_en'] ?>

                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>

                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>

            <!-- </div> -->
    </section>
    <!-- Testimoni Start -->
    <div class="page-wrapper sec-mar">
        <article aria-label="article" id="post-22" class="post-22 page type-page status-publish hentry">
            <div class="inner-post">
                <div data-elementor-type="wp-page" data-elementor-id="22" class="elementor elementor-22">
                    <section class="elementor-section elementor-top-section elementor-element elementor-element-86a3b54 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="86a3b54" data-element_type="section" style="margin-top: 60px;">
                        <div class="elementor-container elementor-column-gap-default" style="max-width: 1140px;">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-0442f94" data-id="0442f94" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-3062334 elementor-widget elementor-widget-astrip_heading" data-id="3062334" data-element_type="widget" data-widget_type="astrip_heading.default">
                                        <div class="elementor-widget-container">
                                            <div class="justify-content-center">
                                                <div class="section-title1">
                                                    <span class="heading-section" style="color:#086B7D !important;letter-spacing: 0px !important;">
                                                        <?= $language == 'id' ? $homepage['testimonial_section_id'] : $homepage['testimonial_section_en'] ?>
                                                    </span>
                                                    <h3 class="title-section" style="color:black;margin-bottom: 15px !important;font-family: 'Open Sans'; font-weight: 700; font-size: 30px; line-height: 42px;">
                                                        <?= $language == 'id' ? $homepage['testimonial_title_id'] : $homepage['testimonial_title_en'] ?>
                                                    </h3>
                                                    <div class="heading-ribbon">
                                                        <svg width="370" height="18" viewBox="0 0 370 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M184.946 0.780971C183.9 1.11998 183.054 1.98633 182.734 3.03348L182.601 3.46289L182 3.48549L181.391 3.50809L181.02 3.16908C180.508 2.70201 179.944 2.33287 179.15 1.95619C176.648 0.750837 173.62 0.999442 171.305 2.59654C170.629 3.05608 169.746 3.94503 169.308 4.59291C167.074 7.86998 167.408 12.1716 170.117 14.9515C171.668 16.5485 173.613 17.3622 175.847 17.3622C178.823 17.3622 181.599 15.6219 182.905 12.94L183.209 12.3223L183.914 12.1867C184.909 11.9983 187.091 11.9983 188.086 12.1867L188.791 12.3223L189.073 12.9023C190.401 15.637 193.14 17.3622 196.153 17.3622C199.894 17.3622 203.004 14.9063 203.924 11.2299C204.584 8.57813 203.85 5.73047 201.979 3.71903C201.296 2.98828 200.643 2.50614 199.693 2.03153C198.758 1.56445 198.053 1.36105 196.97 1.24051C194.81 0.999442 192.427 1.79046 190.891 3.25195C190.631 3.50809 190.616 3.50809 190.008 3.48549L189.399 3.46289L189.266 3.03348C188.939 1.95619 188.048 1.07478 186.972 0.758371C186.43 0.600167 185.48 0.607701 184.946 0.780971ZM186.868 2.0692C187.581 2.3856 188.108 3.11635 188.197 3.9149C188.227 4.14844 188.308 4.41964 188.39 4.51758C188.516 4.68331 188.59 4.70592 189.05 4.70592C189.332 4.70592 189.563 4.72098 189.563 4.73605C189.563 4.75865 189.444 4.97712 189.295 5.23326C188.939 5.85854 188.642 6.59682 188.442 7.39537C188.308 7.92271 188.271 8.26925 188.271 9.113C188.264 9.69308 188.293 10.3485 188.323 10.5745L188.382 10.9813L188.138 10.9286C188.004 10.8984 187.47 10.8457 186.95 10.8005C186.045 10.7176 184.575 10.7854 183.855 10.9286C183.61 10.9813 183.603 10.9813 183.655 10.7628C183.759 10.2732 183.788 8.85686 183.707 8.20898C183.595 7.3577 183.195 6.12974 182.786 5.39146C182.616 5.07506 182.467 4.79632 182.452 4.76618C182.437 4.72852 182.66 4.70592 182.942 4.70592C183.41 4.70592 183.484 4.68331 183.61 4.51758C183.692 4.41964 183.773 4.14844 183.803 3.9149C183.981 2.3856 185.51 1.45898 186.868 2.0692ZM177.532 2.67188C180.76 3.60603 182.831 6.65709 182.504 9.96429C182.148 13.4674 179.268 16.1116 175.795 16.1116C173.925 16.1116 172.359 15.4336 171.008 14.055C169.746 12.7667 169.078 11.1169 169.078 9.30887C169.078 7.48577 169.709 5.89621 170.948 4.58538C171.928 3.54576 173.079 2.88281 174.407 2.58901C175.268 2.40067 176.73 2.43834 177.532 2.67188ZM197.541 2.58901C198.907 2.87528 200.042 3.51563 201.037 4.57031C204.273 7.99051 203.211 13.5276 198.944 15.524C197.675 16.1191 196.02 16.2849 194.654 15.9459C192.746 15.4637 191.166 14.2132 190.238 12.4503C188.709 9.54241 189.511 5.85854 192.108 3.8697C193.014 3.17662 194.075 2.70201 195.07 2.52874C195.76 2.41574 196.829 2.43834 197.541 2.58901Z" fill="#086B7D"></path>
                                                            <path d="M185.295 2.81501C184.523 3.28962 184.323 4.17857 184.805 4.94699C185.072 5.36886 185.458 5.57227 186 5.57227C186.542 5.57227 186.928 5.36886 187.195 4.94699C187.447 4.54018 187.521 4.1409 187.41 3.7341C187.321 3.38756 186.972 2.94308 186.661 2.77734C186.356 2.61914 185.57 2.64174 185.295 2.81501Z" fill="#086B7D"></path>
                                                            <path d="M174.637 3.60603C172.477 4.06557 170.815 5.7154 170.258 7.94531C170.028 8.85686 170.08 10.1978 170.377 11.0943C171.008 12.9927 172.566 14.4542 174.474 14.9289C175.209 15.1097 176.515 15.0871 177.264 14.8836C179.268 14.3412 180.864 12.6839 181.354 10.6348C181.517 9.97935 181.525 8.66853 181.369 7.99805C180.901 5.94894 179.439 4.36691 177.428 3.72656C176.76 3.51562 175.357 3.45536 174.637 3.60603ZM176.886 4.90178C177.665 5.09012 178.266 5.45173 178.912 6.09961C179.595 6.78516 179.921 7.34263 180.137 8.21652C180.745 10.6272 179.246 13.0907 176.797 13.716C176.144 13.8817 175.008 13.829 174.355 13.5954C173.746 13.377 172.878 12.7818 172.455 12.2921C171.72 11.4408 171.349 10.4163 171.349 9.26367C171.349 8.62333 171.379 8.41992 171.572 7.86998C171.846 7.07143 172.225 6.48382 172.804 5.95647C173.242 5.54966 173.984 5.10519 174.511 4.93945C175.194 4.71345 176.077 4.69838 176.886 4.90178Z" fill="#086B7D"></path>
                                                            <path d="M175.216 5.84347C173.902 6.04688 172.752 7.16183 172.448 8.52539C172.247 9.43694 172.425 9.90402 172.967 9.90402C173.368 9.89648 173.605 9.59514 173.605 9.09793C173.605 8.93973 173.702 8.60826 173.813 8.35965C174.147 7.65151 174.8 7.1543 175.513 7.07143C176.018 7.01116 176.248 6.90569 176.344 6.69475C176.463 6.41602 176.448 6.24275 176.263 6.03181C176.062 5.79827 175.795 5.75307 175.216 5.84347Z" fill="#086B7D"></path>
                                                            <path d="M195.188 3.57589C193.355 3.8923 191.626 5.30106 190.921 7.05636C190.505 8.09598 190.386 9.58761 190.646 10.6348C191.136 12.6839 192.732 14.3412 194.736 14.8836C195.485 15.0871 196.791 15.1097 197.526 14.9289C199.434 14.4542 201 12.9927 201.623 11.0943C201.786 10.5896 201.838 10.2882 201.861 9.56501C201.935 7.76451 201.43 6.43108 200.213 5.19559C199.345 4.31417 198.461 3.83203 197.311 3.60603C196.71 3.49302 195.76 3.47796 195.188 3.57589ZM197.311 4.90179C198.031 5.08259 198.743 5.50446 199.359 6.13728C200.243 7.03376 200.658 8.05078 200.651 9.30134C200.643 10.8457 199.931 12.1867 198.662 13.053C197.912 13.5653 197.341 13.7536 196.428 13.7988C195.879 13.829 195.559 13.8064 195.203 13.716C193.511 13.2866 192.175 11.9079 191.826 10.2355C191.373 8.05831 192.546 5.88867 194.624 5.05246C195.455 4.72098 196.361 4.66825 197.311 4.90179Z" fill="#086B7D"></path>
                                                            <path d="M195.611 5.84347C194.068 6.07701 192.754 7.62891 192.754 9.21094C192.754 9.81362 193.325 10.115 193.748 9.73075C193.897 9.60268 193.956 9.45201 194.008 9.05273C194.09 8.44252 194.327 7.99805 194.788 7.59124C195.136 7.27483 195.715 7.04129 196.138 7.04129C196.91 7.04129 197.044 5.91881 196.279 5.8058C196.153 5.79074 195.856 5.8058 195.611 5.84347Z" fill="#086B7D"></path>
                                                            <rect x="215" y="8" width="155" height="2" rx="1" fill="url(#paint0_linear_2_2)"></rect>
                                                            <rect y="8" width="157" height="2" rx="1" fill="url(#paint1_linear_2_2)"></rect>
                                                            <defs>
                                                                <linearGradient id="paint0_linear_2_2" x1="215" y1="8.99999" x2="370" y2="8.99998" gradientUnits="userSpaceOnUse">
                                                                    <stop stop-color="#086B7D"></stop>
                                                                    <stop offset="1" stop-color="white" stop-opacity="0"></stop>
                                                                </linearGradient>
                                                                <linearGradient id="paint1_linear_2_2" x1="-2.0562e-07" y1="8.99999" x2="157" y2="8.99998" gradientUnits="userSpaceOnUse">
                                                                    <stop stop-color="white"></stop>
                                                                    <stop offset="1" stop-color="#086B7D"></stop>
                                                                </linearGradient>
                                                            </defs>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section class="elementor-section elementor-top-section elementor-element elementor-element-535e7b3 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="535e7b3" data-element_type="section" style="margin-top: 0px !important;padding-top: 50px !important;">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-811c3aa" data-id="811c3aa" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-8eaecf0 elementor-widget elementor-widget-astrip_tour_package" data-id="8eaecf0" data-element_type="widget" data-widget_type="astrip_tour_package.default">
                                        <div class="deal-section">
                                            <div class="container-fluid">
                                                <div class="row justify-content-center g-4">
                                                    <div class="slider-container slick-slider">
                                                        <?php foreach ($testimonials as $testimonial) : ?>
                                                            <div class="slick-slide">
                                                                <div class="deal-single1 card">
                                                                    <div class="deal-image d-flex justify-content-center">
                                                                        <img loading="lazy" fetchpriority="high" decoding="async" width="425" height="345" src="<?= base_url('assets/images/testimonials/') . $testimonial['image'] ?>" class="img-fluid wp-post-image testimonial-image" alt="">
                                                                    </div>
                                                                    <div class="deal-content p-3">
                                                                        <h4 class="font-weight-bold" style="font-family: 'Open Sans'; color: black; font-size: 16px; font-weight:700">
                                                                            <?= htmlspecialchars($testimonial['name']) ?>
                                                                        </h4>
                                                                        <div class="price mt-2">
                                                                            <span style="font-size: 16px; line-height: 24px; font-weight: 500; font-family: 'Open Sans';">
                                                                                <?= $language == 'id' ? $testimonial['description_id'] : $testimonial['description_en'] ?>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        <?php endforeach; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                         <script>
                                            $(document).ready(function() {
                                                $('.slider-container').slick({
                                                    slidesToShow: 3, // Jumlah slide yang ditampilkan di tampilan web
                                                    slidesToScroll: 1, // Jumlah slide yang di-scroll sekaligus
                                                    autoplay: true,
                                                    autoplaySpeed: 2000,
                                                    arrows: true,
                                                    dots: false,
                                                    infinite: true,
                                                    responsive: [{
                                                        breakpoint: 768, // Lebar layar di mana konfigurasi di bawah ini akan diaktifkan
                                                        settings: {
                                                            slidesToShow: 1, // Jumlah slide yang ditampilkan di tampilan mobile
                                                            slidesToScroll: 1, // Jumlah slide yang di-scroll sekaligus di tampilan mobile
                                                            dots: false, // Menonaktifkan dots di tampilan mobile
                                                            arrows: false // Menonaktifkan panah navigasi di tampilan mobile
                                                        }
                                                    }]
                                                });
                                            });
                                        </script> 

                                        <style>
                                            .deal-single1 {
                                                background-color: white;
                                                border-radius: 15px;
                                                overflow: hidden;
                                                transition: all 0.3s ease;
                                                margin: 30px;
                                            }

                                            .deal-image img {
                                                border-top-left-radius: 15px;
                                                border-top-right-radius: 15px;
                                                width: 100%;
                                                height: auto;
                                            }

                                            .card {
                                                position: relative;
                                                overflow: hidden;
                                                border: none;
                                                border-radius: 15px;
                                                box-shadow: 0px 12px 18px -6px rgba(0, 0, 0, 0.3);

                                            }

                                            .card:hover {
                                                box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
                                            }

                                            .card h4 {
                                                margin-top: 10px;
                                                margin-bottom: 5px;
                                            }

                                            .card .price {
                                                font-size: 16px;
                                                color: #555;
                                            }

                                            .card .image {
                                                position: relative;
                                            }

                                            .card .image img {
                                                width: 100%;
                                                height: auto;
                                                transition: transform 0.5s ease;
                                                display: block;
                                            }

                                            .card .overlay {
                                                position: absolute;
                                                top: 0;
                                                left: 0;
                                                width: 100%;
                                                height: 100%;
                                                background: rgba(0, 0, 0, 0.5);
                                                /* Bayangan hitam */
                                                display: flex;
                                                align-items: center;
                                                justify-content: center;
                                                transition: background 0.5s ease, transform 0.5s ease;
                                            }

                                            .card .overlay h4 {
                                                color: white;
                                                font-weight: 700;
                                                font-family: 'Open Sans';
                                                font-size: 20px;
                                                line-height: 30px;
                                                margin: 0;
                                                transition: transform 0.3s ease;
                                            }

                                            .card:hover .image img {
                                                transform: scale(1.1);
                                                /* Zoom in pada gambar */
                                            }

                                            .card:hover .overlay {
                                                background: rgba(0, 0, 0, 0.7);
                                                /* Membuat bayangan lebih gelap saat di-hover */
                                                transform: scale(1.1);
                                                /* Zoom in pada bayangan hitam */
                                            }

                                            .card:hover .overlay h4 {
                                                transform: scale(1.1);
                                                /* Zoom in pada tulisan saat di-hover */
                                            }
                                        </style>

                                        <!-- start section -->
                                        <div class="destination-custom1">
                                            <div class="row justify-content-center">
                                                <div class="col-lg-10 col-md-12">
                                                    <!-- Card Container -->
                                                    <div class="card" style="background-color: #f8f9fa; border-radius: 10px; padding: 20px; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);">
                                                        <div class="card1 flex-md-row">
                                                            <!-- Carousel -->
                                                            <div id="carouselExample" class="carousel slide carousel-container" data-bs-ride="carousel">
                                                                <?php
                                                                // Folder yang berisi gambar testimoni
                                                                $folder = 'assets/images/testimoni/';
                                                                // Membaca semua file gambar dari folder
                                                                $images = glob($folder . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);

                                                                // Mengecek apakah ada gambar yang ditemukan
                                                                if ($images && count($images) > 0):
                                                                ?>
                                                                    <!-- Tambahkan indikator di sini -->
                                                                    <div class="carousel-indicators">
                                                                        <?php
                                                                        // Menghitung jumlah gambar
                                                                        for ($i = 0; $i < count($images); $i++) {
                                                                            $activeClass = $i === 0 ? 'active' : '';
                                                                            echo '<button type="button" data-bs-target="#carouselExample" data-bs-slide-to="' . $i . '" class="' . $activeClass . '" aria-current="true" aria-label="Slide ' . ($i + 1) . '"></button>';
                                                                        }
                                                                        ?>
                                                                    </div>
                                                                    <div class="carousel-inner">
                                                                        <?php
                                                                        $isFirst = true;
                                                                        foreach ($images as $image) {
                                                                            // Menentukan kelas 'active' untuk item pertama
                                                                            $activeClass = $isFirst ? 'active' : '';
                                                                            // Link Instagram
                                                                            $linkUrl = "https://www.instagram.com/yourprivateeurope/";
                                                                            $altText = $linkUrl; // Menggunakan URL Instagram sebagai alt text

                                                                            echo '<div class="carousel-item ' . $activeClass . '">';
                                                                            echo '<a href="' . $linkUrl . '" target="_blank" title="' . $altText . '">';
                                                                            echo '<img src="' . base_url($image) . '" class="d-block w-100 img-fluid carousel-image" alt="' . $altText . '">';
                                                                            echo '</a>';
                                                                            echo '</div>';
                                                                            $isFirst = false;
                                                                        }

                                                                        ?>
                                                                    </div>
                                                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                                                                        <i class='fas fa-chevron-circle-left' style='font-size:37px'></i>
                                                                        <span class="visually-hidden">Previous</span>
                                                                    </button>
                                                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                                                                        <i class='fas fa-chevron-circle-right' style='font-size:37px'></i>
                                                                        <span class="visually-hidden">Next</span>
                                                                    </button>
                                                                <?php else: ?>
                                                                    <p>No images found in the specified folder.</p>
                                                                <?php endif; ?>
                                                            </div>

                                                            <!-- Konten Sosmed -->
                                                            <div class="card-body d-flex flex-column align-items-center justify-content-center">
                                                                <div class="info-box1">
                                                                    <a target="_blank" href="https://www.trustpilot.com/review/yourprivateeurope.eu?utm_medium=trustbox&utm_source=MicroReviewCount" class="rating-wrap">
                                                                        <div class="trip-rating">
                                                                            <div class="cnt" style="display: flex;flex-direction: column;align-items: center;font-family: 'Open Sans'; font-weight: 500;  line-height: 24px;">
                                                                                <img src="<?= base_url('assets/images/trustpilot.png') ?>" alt="trustpilot-rating">
                                                                                <p style="padding-top:15px;font-size:20px;font-weight:bold;">See our 45 reviews on Trustpilot</p>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                    <ul class="topbar-right-social_list1">
                                                                        <li>
                                                                            <a target="_blank" href="https://www.instagram.com/yourprivateeurope/">
                                                                                <i class="fab fa-instagram"></i>
                                                                                <span class="follow-us">Follow us on <span class="platform-name">Instagram</span></span>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a target="_blank" href="https://www.tiktok.com/@yourprivateeurope">
                                                                                <i class="fa-brands fa-tiktok"></i>
                                                                                <span class="follow-us">Follow us on <span class="platform-name">TikTok</span></span>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a target="_blank" href="https://www.youtube.com/@yourprivateeurope">
                                                                                <i class="fa-brands fa-youtube"></i>
                                                                                <span style="margin-left: 13px;" class="follow-us">Follow us on <span class="platform-name">Youtube</span></span>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a target="_blank" href="https://www.linkedin.com/company/your-private-europe/">
                                                                                <i class="fab fa-linkedin-in"></i>
                                                                                <span class="follow-us">Follow us on <span class="platform-name">LinkedIN</span></span>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>

                                                            <style>
                                                                .carousel-inner {
                                                                    width: 100%;
                                                                    height: 100%;
                                                                }

                                                                .carousel-item img.carousel-image {
                                                                    width: 100%;
                                                                    height: 650px;
                                                                    /* Set height to ensure consistent image size */
                                                                    object-fit: cover;
                                                                    /* Ensure images cover the container */
                                                                    object-position: center;
                                                                }

                                                                .carousel-container {
                                                                    width: 50%;
                                                                    margin-bottom: 15px;
                                                                    border-radius: 10px;
                                                                    overflow: hidden;
                                                                }

                                                                .topbar-right-social_list1 {
                                                                    display: flex;
                                                                    flex-direction: column;
                                                                    align-items: center;
                                                                    /* Center horizontally */
                                                                    justify-content: center;
                                                                    /* Center vertically */
                                                                    list-style: none;
                                                                    margin-right: 0;
                                                                    width: 100%;
                                                                }

                                                                .topbar-right-social_list1 li {
                                                                    display: flex;
                                                                    align-items: center;
                                                                    justify-content: flex-start;
                                                                    /* Align content to the left */
                                                                    background-color: white;
                                                                    border-radius: 10px;
                                                                    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
                                                                    width: 500px;
                                                                    height: 100px;
                                                                    margin: 10px;
                                                                    padding: 10px;
                                                                    transition: transform 0.3s ease, box-shadow 0.3s ease, background-color 0.3s ease;
                                                                }

                                                                .topbar-right-social_list1 li:hover {
                                                                    background-color: #f8f9fa;
                                                                    /* Warna background saat hover */
                                                                    color: rgb(224, 188, 109);
                                                                    /* Warna tulisan saat hover */
                                                                    transform: translateY(-5px);
                                                                    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
                                                                }


                                                                /* CSS for larger logos */
                                                                .topbar-right-social_list1 li i {
                                                                    font-size: 35px;
                                                                    /* Membuat ikon lebih besar */
                                                                    margin-left: 25px;
                                                                    margin-right: 20px;
                                                                    /* Sesuaikan jarak antara ikon dan teks */
                                                                    display: flex;
                                                                    align-items: center;
                                                                    justify-content: flex-start;
                                                                }

                                                                .topbar-right-social_list1 li img {
                                                                    height: 35px;
                                                                    /* Memperbesar logo */
                                                                    width: auto;
                                                                    /* Biarkan width menyesuaikan secara otomatis */
                                                                    margin-right: 15px;
                                                                    /* Jarak antara logo dan teks */
                                                                }

                                                                .topbar-right-social_list1 li a {
                                                                    display: flex;
                                                                    align-items: center;
                                                                    justify-content: start;
                                                                    text-decoration: none;
                                                                    font-size: 20px;
                                                                    color: inherit;
                                                                    width: 100%;
                                                                    text-align: center;
                                                                    /* Menjaga agar konten berada di tengah */
                                                                }


                                                                .topbar-right-social_list1 .trustpilot img {
                                                                    margin-right: 15px;
                                                                    /* Space between logo and text */
                                                                    margin-left: 0;
                                                                    /* Ensure the logo starts from the left */
                                                                    align-self: flex-start;
                                                                    /* Align the logo to the top left */
                                                                }

                                                                .topbar-right-social_list1 .trustpilot span {
                                                                    font-size: 16px;
                                                                    color: #333;
                                                                }

                                                                .follow-us {
                                                                    font-family: var(--font-work-sans);
                                                                    font-weight: bold;
                                                                    margin-left: 20px;
                                                                }

                                                                .destination-custom1 {
                                                                    padding: 20px 0;
                                                                    margin-top: 100px;
                                                                }

                                                                .destination-custom1 .card1 {
                                                                    border: none;
                                                                    border-radius: 10px;
                                                                    overflow: hidden;
                                                                    display: flex;
                                                                    flex-direction: column;
                                                                }

                                                                .destination-custom1 .card-body {
                                                                    padding: 15px;
                                                                    background-color: #f8f9fa;
                                                                    width: 50%;
                                                                }

                                                                .destination-custom1 .card-title {
                                                                    margin-bottom: 10px;
                                                                    color: #333;
                                                                }

                                                                .destination-custom1 .info-box1 .cnt {
                                                                    display: flex;
                                                                    flex-direction: column;
                                                                    align-items: center;
                                                                    margin-bottom: 20px;
                                                                }

                                                                .destination-custom1 .info-box1 img {
                                                                    height: 27px;
                                                                    width: 110px;
                                                                }

                                                                .destination-custom1 .info-box1 p {
                                                                    text-align: center;
                                                                }

                                                                @media (min-width: 992px) {
                                                                    .destination-custom1 .card1 {
                                                                        flex-direction: row;
                                                                    }

                                                                    .destination-custom1 .carousel-container {
                                                                        width: 40%;
                                                                        margin-bottom: 0;
                                                                    }

                                                                    .destination-custom1 .card-body {
                                                                        width: 30%;
                                                                    }
                                                                }

                                                                /* Tambahan CSS untuk responsive mobile */
                                                                @media (max-width: 767px) {
                                                                    .carousel-container {
                                                                        width: 100%;
                                                                        margin-bottom: 15px;
                                                                    }

                                                                    .topbar-right-social_list1 li {
                                                                        width: 100%;
                                                                        height: auto;
                                                                        padding: 15px;
                                                                        margin-right: 40px;
                                                                    }

                                                                    .topbar-right-social_list1 li i {
                                                                        margin-right: 10px;
                                                                    }

                                                                    .destination-custom1 .card-body {
                                                                        width: 100%;
                                                                    }

                                                                    .destination-custom1 .info-box1 img {
                                                                        height: 20px;
                                                                        width: 90px;
                                                                    }
                                                                }
                                                            </style>
                                                        </div>
                                                    </div> <!-- End of Card Container -->
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end section -->


                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </article>
    </div>

<!-- External JS for slick slider -->
 <script>
$(document).ready(function() {
    $('.slider-container').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        arrows: true,
        dots: true,
        infinite: true,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    dots: true,
                    arrows: true
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    dots: true,
                    arrows: false
                }
            }
        ]
    });
});

</script> 

    <!-- Testimoni End -->
    <section style="padding-top:50px;margin-top: 60px !important;background-color:#f9f9f9;" class="elementor-section elementor-top-section elementor-element elementor-element-86a3b54 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="86a3b54" data-element_type="section">
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-0442f94" data-id="0442f94" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-3062334 elementor-widget elementor-widget-astrip_heading" data-id="3062334" data-element_type="widget" data-widget_type="astrip_heading.default">
                        <div class="elementor-widget-container">
                            <div class="justify-content-center">
                                <div class="section-title1">
                                    <span style="color:#086B7D !important;letter-spacing: 0px !important;" class="heading-section">
                                        <?= $language == 'id' ? $homepage['commitment_section_id'] : $homepage['commitment_section_en'] ?>
                                    </span>
                                    <h3 class="title-section" style="color:black;margin-bottom: 15px !important;font-family: 'Open Sans'; font-weight: 700; font-size: 30px; line-height: 42px;">
                                        <?= $language == 'id' ? $homepage['commitment_title_id'] : $homepage['commitment_title_en'] ?>
                                    </h3>
                                    <div class="heading-ribbon">
                                        <svg width="370" height="18" viewBox="0 0 370 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M184.946 0.780971C183.9 1.11998 183.054 1.98633 182.734 3.03348L182.601 3.46289L182 3.48549L181.391 3.50809L181.02 3.16908C180.508 2.70201 179.944 2.33287 179.15 1.95619C176.648 0.750837 173.62 0.999442 171.305 2.59654C170.629 3.05608 169.746 3.94503 169.308 4.59291C167.074 7.86998 167.408 12.1716 170.117 14.9515C171.668 16.5485 173.613 17.3622 175.847 17.3622C178.823 17.3622 181.599 15.6219 182.905 12.94L183.209 12.3223L183.914 12.1867C184.909 11.9983 187.091 11.9983 188.086 12.1867L188.791 12.3223L189.073 12.9023C190.401 15.637 193.14 17.3622 196.153 17.3622C199.894 17.3622 203.004 14.9063 203.924 11.2299C204.584 8.57813 203.85 5.73047 201.979 3.71903C201.296 2.98828 200.643 2.50614 199.693 2.03153C198.758 1.56445 198.053 1.36105 196.97 1.24051C194.81 0.999442 192.427 1.79046 190.891 3.25195C190.631 3.50809 190.616 3.50809 190.008 3.48549L189.399 3.46289L189.266 3.03348C188.939 1.95619 188.048 1.07478 186.972 0.758371C186.43 0.600167 185.48 0.607701 184.946 0.780971ZM186.868 2.0692C187.581 2.3856 188.108 3.11635 188.197 3.9149C188.227 4.14844 188.308 4.41964 188.39 4.51758C188.516 4.68331 188.59 4.70592 189.05 4.70592C189.332 4.70592 189.563 4.72098 189.563 4.73605C189.563 4.75865 189.444 4.97712 189.295 5.23326C188.939 5.85854 188.642 6.59682 188.442 7.39537C188.308 7.92271 188.271 8.26925 188.271 9.113C188.264 9.69308 188.293 10.3485 188.323 10.5745L188.382 10.9813L188.138 10.9286C188.004 10.8984 187.47 10.8457 186.95 10.8005C186.045 10.7176 184.575 10.7854 183.855 10.9286C183.61 10.9813 183.603 10.9813 183.655 10.7628C183.759 10.2732 183.788 8.85686 183.707 8.20898C183.595 7.3577 183.195 6.12974 182.786 5.39146C182.616 5.07506 182.467 4.79632 182.452 4.76618C182.437 4.72852 182.66 4.70592 182.942 4.70592C183.41 4.70592 183.484 4.68331 183.61 4.51758C183.692 4.41964 183.773 4.14844 183.803 3.9149C183.981 2.3856 185.51 1.45898 186.868 2.0692ZM177.532 2.67188C180.76 3.60603 182.831 6.65709 182.504 9.96429C182.148 13.4674 179.268 16.1116 175.795 16.1116C173.925 16.1116 172.359 15.4336 171.008 14.055C169.746 12.7667 169.078 11.1169 169.078 9.30887C169.078 7.48577 169.709 5.89621 170.948 4.58538C171.928 3.54576 173.079 2.88281 174.407 2.58901C175.268 2.40067 176.73 2.43834 177.532 2.67188ZM197.541 2.58901C198.907 2.87528 200.042 3.51563 201.037 4.57031C204.273 7.99051 203.211 13.5276 198.944 15.524C197.675 16.1191 196.02 16.2849 194.654 15.9459C192.746 15.4637 191.166 14.2132 190.238 12.4503C188.709 9.54241 189.511 5.85854 192.108 3.8697C193.014 3.17662 194.075 2.70201 195.07 2.52874C195.76 2.41574 196.829 2.43834 197.541 2.58901Z" fill="#086B7D"></path>
                                            <path d="M185.295 2.81501C184.523 3.28962 184.323 4.17857 184.805 4.94699C185.072 5.36886 185.458 5.57227 186 5.57227C186.542 5.57227 186.928 5.36886 187.195 4.94699C187.447 4.54018 187.521 4.1409 187.41 3.7341C187.321 3.38756 186.972 2.94308 186.661 2.77734C186.356 2.61914 185.57 2.64174 185.295 2.81501Z" fill="#086B7D"></path>
                                            <path d="M174.637 3.60603C172.477 4.06557 170.815 5.7154 170.258 7.94531C170.028 8.85686 170.08 10.1978 170.377 11.0943C171.008 12.9927 172.566 14.4542 174.474 14.9289C175.209 15.1097 176.515 15.0871 177.264 14.8836C179.268 14.3412 180.864 12.6839 181.354 10.6348C181.517 9.97935 181.525 8.66853 181.369 7.99805C180.901 5.94894 179.439 4.36691 177.428 3.72656C176.76 3.51562 175.357 3.45536 174.637 3.60603ZM176.886 4.90178C177.665 5.09012 178.266 5.45173 178.912 6.09961C179.595 6.78516 179.921 7.34263 180.137 8.21652C180.745 10.6272 179.246 13.0907 176.797 13.716C176.144 13.8817 175.008 13.829 174.355 13.5954C173.746 13.377 172.878 12.7818 172.455 12.2921C171.72 11.4408 171.349 10.4163 171.349 9.26367C171.349 8.62333 171.379 8.41992 171.572 7.86998C171.846 7.07143 172.225 6.48382 172.804 5.95647C173.242 5.54966 173.984 5.10519 174.511 4.93945C175.194 4.71345 176.077 4.69838 176.886 4.90178Z" fill="#086B7D"></path>
                                            <path d="M175.216 5.84347C173.902 6.04688 172.752 7.16183 172.448 8.52539C172.247 9.43694 172.425 9.90402 172.967 9.90402C173.368 9.89648 173.605 9.59514 173.605 9.09793C173.605 8.93973 173.702 8.60826 173.813 8.35965C174.147 7.65151 174.8 7.1543 175.513 7.07143C176.018 7.01116 176.248 6.90569 176.344 6.69475C176.463 6.41602 176.448 6.24275 176.263 6.03181C176.062 5.79827 175.795 5.75307 175.216 5.84347Z" fill="#086B7D"></path>
                                            <path d="M195.188 3.57589C193.355 3.8923 191.626 5.30106 190.921 7.05636C190.505 8.09598 190.386 9.58761 190.646 10.6348C191.136 12.6839 192.732 14.3412 194.736 14.8836C195.485 15.0871 196.791 15.1097 197.526 14.9289C199.434 14.4542 201 12.9927 201.623 11.0943C201.786 10.5896 201.838 10.2882 201.861 9.56501C201.935 7.76451 201.43 6.43108 200.213 5.19559C199.345 4.31417 198.461 3.83203 197.311 3.60603C196.71 3.49302 195.76 3.47796 195.188 3.57589ZM197.311 4.90179C198.031 5.08259 198.743 5.50446 199.359 6.13728C200.243 7.03376 200.658 8.05078 200.651 9.30134C200.643 10.8457 199.931 12.1867 198.662 13.053C197.912 13.5653 197.341 13.7536 196.428 13.7988C195.879 13.829 195.559 13.8064 195.203 13.716C193.511 13.2866 192.175 11.9079 191.826 10.2355C191.373 8.05831 192.546 5.88867 194.624 5.05246C195.455 4.72098 196.361 4.66825 197.311 4.90179Z" fill="#086B7D"></path>
                                            <path d="M195.611 5.84347C194.068 6.07701 192.754 7.62891 192.754 9.21094C192.754 9.81362 193.325 10.115 193.748 9.73075C193.897 9.60268 193.956 9.45201 194.008 9.05273C194.09 8.44252 194.327 7.99805 194.788 7.59124C195.136 7.27483 195.715 7.04129 196.138 7.04129C196.91 7.04129 197.044 5.91881 196.279 5.8058C196.153 5.79074 195.856 5.8058 195.611 5.84347Z" fill="#086B7D"></path>
                                            <rect x="215" y="8" width="155" height="2" rx="1" fill="url(#paint0_linear_2_2)"></rect>
                                            <rect y="8" width="157" height="2" rx="1" fill="url(#paint1_linear_2_2)"></rect>
                                            <defs>
                                                <linearGradient id="paint0_linear_2_2" x1="215" y1="8.99999" x2="370" y2="8.99998" gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="#086B7D"></stop>
                                                    <stop offset="1" stop-color="white" stop-opacity="0"></stop>
                                                </linearGradient>
                                                <linearGradient id="paint1_linear_2_2" x1="-2.0562e-07" y1="8.99999" x2="157" y2="8.99998" gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="white"></stop>
                                                    <stop offset="1" stop-color="#086B7D"></stop>
                                                </linearGradient>
                                            </defs>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section style="padding-top:20px;background-color:#f9f9f9;margin-top:0px;padding-bottom:50px;" class="elementor-section elementor-top-section elementor-element elementor-element-926134b elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="926134b" data-element_type="section">
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-4cda8d9" data-id="4cda8d9" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-0c74e90 elementor-widget elementor-widget-astrip_info_box" data-id="0c74e90" data-element_type="widget" data-widget_type="astrip_info_box.default">
                        <div class="elementor-widget-container" style="overflow: hidden;">
                            <div class="category-section">
                                <div class="row justify-content-center g-xxl-5 g-4">
                                    <?php foreach ($commitments as $commitment) : ?>
                                        <div class="col-xl-2 col-lg-3 col-md-6 col-sm-4"> <!-- col-sm-4 untuk 3 kolom pada layar kecil -->
                                            <div class="category-single1 d-flex flex-column h-100" style="box-shadow: none !important;">
                                                <div class="icon" style="display: flex; justify-content: center; align-items: center; width: 95px; height: 95px; background-color: #D4B264; border-radius: 50%; transition: none !important; border: 0px !important;">
                                                    <img loading="lazy" style="max-width: 48px; filter: brightness(0) invert(1);" src="<?= base_url('assets/images/commitments/') . $commitment['image'] ?>" alt="<?= $commitment['alt_image'] ?>" srcset="">
                                                </div>

                                                <!-- ubah -->
                                                <div class="content">
                                                    <p style="font-size: 16px; font-weight: 600; color: black; font-family: 'Open Sans' !important; line-height: 1.2em;">
                                                        <?= $language == 'id' ? $commitment['title_id'] : $commitment['title_en'] ?>
                                                    </p>

                                                </div>

                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Aturan CSS -->
        <style>
            .category-section,
            .category-section .row {
                overflow: hidden;
            }

            /* Aturan CSS dalam media query */
            @media (max-width: 576px) {

                /* Pengaturan tata letak 3 kolom tanpa jarak antar konten */
                .category-section .row {
                    display: grid;
                    grid-template-columns: repeat(2, 1fr);
                    /* Pengaturan 3 kolom dengan lebar sama */
                    gap: 0;
                    /* Menghilangkan jarak antara item */
                    align-items: stretch;
                    /* Membuat tinggi konten sejajar */
                    overflow: hidden;
                    /* Memastikan konten tidak melampaui kontainer */
                    padding-left: 5px;
                    /* Mengurangi padding kiri */
                    padding-right: 5px;
                    /* Mengurangi padding kanan */
                }

                /* Sesuaikan tinggi gambar dan pengaturan lainnya sesuai kebutuhan */
                .category-single1 .icon img {
                    width: 100%;
                    /* Sesuaikan lebar gambar */
                    height: auto;
                    /* Sesuaikan tinggi gambar */
                    max-height: 100px;
                    /* Tinggi maksimum gambar */
                    object-fit: contain;
                    /* Gambar tetap proporsional */
                    display: block;
                    margin: auto;
                }

                /* Mengatur teks agar berada di tengah */
                .category-single1 .content {
                    text-align: center;
                }
            }
        </style>
    </section>

    <section aria-hidden="true" class="elementor-section elementor-top-section elementor-element elementor-element-16674b5 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="16674b5" data-element_type="section" style="padding-top: 60px !important;margin-top:0px;">
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-2bd2882" data-id="2bd2882" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-a26396d elementor-widget elementor-widget-astrip_heading" data-id="a26396d" data-element_type="widget" data-widget_type="astrip_heading.default">
                        <div class="elementor-widget-container">
                            <div class="justify-content-center">
                                <div class="section-title1">
                                    <span aria-hidden="true" style="color:#086B7D !important;letter-spacing: 0px !important;" class="heading-section">
                                        <?= $language == 'id' ? $homepage['trending_destination_section_id'] : $homepage['trending_destination_section_en'] ?>
                                    </span>
                                    <h2 class="title-section" style="color:black;margin-bottom: 15px !important;">
                                        <?= $language == 'id' ? $homepage['trending_destination_title_id'] : $homepage['trending_destination_title_en'] ?>
                                    </h2>
                                    <div class="heading-ribbon">
                                        <svg width="370" height="18" viewBox="0 0 370 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M184.946 0.780971C183.9 1.11998 183.054 1.98633 182.734 3.03348L182.601 3.46289L182 3.48549L181.391 3.50809L181.02 3.16908C180.508 2.70201 179.944 2.33287 179.15 1.95619C176.648 0.750837 173.62 0.999442 171.305 2.59654C170.629 3.05608 169.746 3.94503 169.308 4.59291C167.074 7.86998 167.408 12.1716 170.117 14.9515C171.668 16.5485 173.613 17.3622 175.847 17.3622C178.823 17.3622 181.599 15.6219 182.905 12.94L183.209 12.3223L183.914 12.1867C184.909 11.9983 187.091 11.9983 188.086 12.1867L188.791 12.3223L189.073 12.9023C190.401 15.637 193.14 17.3622 196.153 17.3622C199.894 17.3622 203.004 14.9063 203.924 11.2299C204.584 8.57813 203.85 5.73047 201.979 3.71903C201.296 2.98828 200.643 2.50614 199.693 2.03153C198.758 1.56445 198.053 1.36105 196.97 1.24051C194.81 0.999442 192.427 1.79046 190.891 3.25195C190.631 3.50809 190.616 3.50809 190.008 3.48549L189.399 3.46289L189.266 3.03348C188.939 1.95619 188.048 1.07478 186.972 0.758371C186.43 0.600167 185.48 0.607701 184.946 0.780971ZM186.868 2.0692C187.581 2.3856 188.108 3.11635 188.197 3.9149C188.227 4.14844 188.308 4.41964 188.39 4.51758C188.516 4.68331 188.59 4.70592 189.05 4.70592C189.332 4.70592 189.563 4.72098 189.563 4.73605C189.563 4.75865 189.444 4.97712 189.295 5.23326C188.939 5.85854 188.642 6.59682 188.442 7.39537C188.308 7.92271 188.271 8.26925 188.271 9.113C188.264 9.69308 188.293 10.3485 188.323 10.5745L188.382 10.9813L188.138 10.9286C188.004 10.8984 187.47 10.8457 186.95 10.8005C186.045 10.7176 184.575 10.7854 183.855 10.9286C183.61 10.9813 183.603 10.9813 183.655 10.7628C183.759 10.2732 183.788 8.85686 183.707 8.20898C183.595 7.3577 183.195 6.12974 182.786 5.39146C182.616 5.07506 182.467 4.79632 182.452 4.76618C182.437 4.72852 182.66 4.70592 182.942 4.70592C183.41 4.70592 183.484 4.68331 183.61 4.51758C183.692 4.41964 183.773 4.14844 183.803 3.9149C183.981 2.3856 185.51 1.45898 186.868 2.0692ZM177.532 2.67188C180.76 3.60603 182.831 6.65709 182.504 9.96429C182.148 13.4674 179.268 16.1116 175.795 16.1116C173.925 16.1116 172.359 15.4336 171.008 14.055C169.746 12.7667 169.078 11.1169 169.078 9.30887C169.078 7.48577 169.709 5.89621 170.948 4.58538C171.928 3.54576 173.079 2.88281 174.407 2.58901C175.268 2.40067 176.73 2.43834 177.532 2.67188ZM197.541 2.58901C198.907 2.87528 200.042 3.51563 201.037 4.57031C204.273 7.99051 203.211 13.5276 198.944 15.524C197.675 16.1191 196.02 16.2849 194.654 15.9459C192.746 15.4637 191.166 14.2132 190.238 12.4503C188.709 9.54241 189.511 5.85854 192.108 3.8697C193.014 3.17662 194.075 2.70201 195.07 2.52874C195.76 2.41574 196.829 2.43834 197.541 2.58901Z" fill="#086B7D"></path>
                                            <path d="M185.295 2.81501C184.523 3.28962 184.323 4.17857 184.805 4.94699C185.072 5.36886 185.458 5.57227 186 5.57227C186.542 5.57227 186.928 5.36886 187.195 4.94699C187.447 4.54018 187.521 4.1409 187.41 3.7341C187.321 3.38756 186.972 2.94308 186.661 2.77734C186.356 2.61914 185.57 2.64174 185.295 2.81501Z" fill="#086B7D"></path>
                                            <path d="M174.637 3.60603C172.477 4.06557 170.815 5.7154 170.258 7.94531C170.028 8.85686 170.08 10.1978 170.377 11.0943C171.008 12.9927 172.566 14.4542 174.474 14.9289C175.209 15.1097 176.515 15.0871 177.264 14.8836C179.268 14.3412 180.864 12.6839 181.354 10.6348C181.517 9.97935 181.525 8.66853 181.369 7.99805C180.901 5.94894 179.439 4.36691 177.428 3.72656C176.76 3.51562 175.357 3.45536 174.637 3.60603ZM176.886 4.90178C177.665 5.09012 178.266 5.45173 178.912 6.09961C179.595 6.78516 179.921 7.34263 180.137 8.21652C180.745 10.6272 179.246 13.0907 176.797 13.716C176.144 13.8817 175.008 13.829 174.355 13.5954C173.746 13.377 172.878 12.7818 172.455 12.2921C171.72 11.4408 171.349 10.4163 171.349 9.26367C171.349 8.62333 171.379 8.41992 171.572 7.86998C171.846 7.07143 172.225 6.48382 172.804 5.95647C173.242 5.54966 173.984 5.10519 174.511 4.93945C175.194 4.71345 176.077 4.69838 176.886 4.90178Z" fill="#086B7D"></path>
                                            <path d="M175.216 5.84347C173.902 6.04688 172.752 7.16183 172.448 8.52539C172.247 9.43694 172.425 9.90402 172.967 9.90402C173.368 9.89648 173.605 9.59514 173.605 9.09793C173.605 8.93973 173.702 8.60826 173.813 8.35965C174.147 7.65151 174.8 7.1543 175.513 7.07143C176.018 7.01116 176.248 6.90569 176.344 6.69475C176.463 6.41602 176.448 6.24275 176.263 6.03181C176.062 5.79827 175.795 5.75307 175.216 5.84347Z" fill="#086B7D"></path>
                                            <path d="M195.188 3.57589C193.355 3.8923 191.626 5.30106 190.921 7.05636C190.505 8.09598 190.386 9.58761 190.646 10.6348C191.136 12.6839 192.732 14.3412 194.736 14.8836C195.485 15.0871 196.791 15.1097 197.526 14.9289C199.434 14.4542 201 12.9927 201.623 11.0943C201.786 10.5896 201.838 10.2882 201.861 9.56501C201.935 7.76451 201.43 6.43108 200.213 5.19559C199.345 4.31417 198.461 3.83203 197.311 3.60603C196.71 3.49302 195.76 3.47796 195.188 3.57589ZM197.311 4.90179C198.031 5.08259 198.743 5.50446 199.359 6.13728C200.243 7.03376 200.658 8.05078 200.651 9.30134C200.643 10.8457 199.931 12.1867 198.662 13.053C197.912 13.5653 197.341 13.7536 196.428 13.7988C195.879 13.829 195.559 13.8064 195.203 13.716C193.511 13.2866 192.175 11.9079 191.826 10.2355C191.373 8.05831 192.546 5.88867 194.624 5.05246C195.455 4.72098 196.361 4.66825 197.311 4.90179Z" fill="#086B7D"></path>
                                            <path d="M195.611 5.84347C194.068 6.07701 192.754 7.62891 192.754 9.21094C192.754 9.81362 193.325 10.115 193.748 9.73075C193.897 9.60268 193.956 9.45201 194.008 9.05273C194.09 8.44252 194.327 7.99805 194.788 7.59124C195.136 7.27483 195.715 7.04129 196.138 7.04129C196.91 7.04129 197.044 5.91881 196.279 5.8058C196.153 5.79074 195.856 5.8058 195.611 5.84347Z" fill="#086B7D"></path>
                                            <rect x="215" y="8" width="155" height="2" rx="1" fill="url(#paint0_linear_2_2)"></rect>
                                            <rect y="8" width="157" height="2" rx="1" fill="url(#paint1_linear_2_2)"></rect>
                                            <defs>
                                                <linearGradient id="paint0_linear_2_2" x1="215" y1="8.99999" x2="370" y2="8.99998" gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="#086B7D"></stop>
                                                    <stop offset="1" stop-color="white" stop-opacity="0"></stop>
                                                </linearGradient>
                                                <linearGradient id="paint1_linear_2_2" x1="-2.0562e-07" y1="8.99999" x2="157" y2="8.99998" gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="white"></stop>
                                                    <stop offset="1" stop-color="#086B7D"></stop>
                                                </linearGradient>
                                            </defs>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section style=" margin-top: 0px !important;padding-top: 50px !important;" class="elementor-section elementor-top-section elementor-element elementor-element-535e7b3 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="535e7b3" data-element_type="section">
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-811c3aa" data-id="811c3aa" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-8eaecf0 elementor-widget elementor-widget-astrip_tour_package" data-id="8eaecf0" data-element_type="widget" data-widget_type="astrip_tour_package.default">

                        <div class="deal-section">
                            <div class="container-fluid">
                                <div class="row justify-content-center g-4">
                                    <div class="slider-container slick-slider">
                                        <?php foreach ($destinations as $destination) : ?>
                                            <div class="slick-slide">
                                                <a href="/<?= $language ?>/<?= $language == 'id' ? 'destinasi' : 'destination' ?>/<?= $destination['slug'] ?>" class="card-link">
                                                    <div class="deal-image1 d-flex justify-content-center">
                                                        <img loading="lazy" fetchpriority="high" decoding="async" width="425" height="345" src="<?= base_url('assets/images/destinations/') . $destination['image'] ?>" class="img-fluid wp-post-image" alt="<?= $destination['alt_image'] ?>" />
                                                        <div class="deal-content-overlay">
                                                            <div class="circle-background mb-4">
                                                                <h4 class="deal-title mb-0"><b><?= strtoupper($destination['title']) ?></b></h4>
                                                                <div class="price">
                                                                    <span style="font-size: 16px; line-height: 24px; font-weight: 500; font-family: 'Open Sans';">
                                                                        <?= $language == 'id' ? $destination['duration_id'] : $destination['duration_en'] ?>
                                                                    </span>
                                                                </div>
                                                                <p class="deal-description">
                                                                    <?= lang("text_homepage.wisata_desc") ?>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="deal-square-overlay"></div>
                                                    </div>
                                                </a>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <script>
                            $(document).ready(function() {
                                $('.slider-container').slick({
                                    slidesToShow: 3, // Number of slides to show on desktop
                                    slidesToScroll: 1, // Number of slides to scroll at once
                                    autoplay: true,
                                    autoplaySpeed: 1000,
                                    arrows: true,
                                    dots: true,
                                    infinite: true,
                                    responsive: [{
                                        breakpoint: 768, // Screen width at which settings below will be applied
                                        settings: {
                                            slidesToShow: 1, // Number of slides to show on mobile
                                            slidesToScroll: 1, // Number of slides to scroll at once on mobile
                                            dots: true, // Show dots on mobile
                                            arrows: false // Disable navigation arrows on mobile
                                        }
                                    }]
                                });
                            });
                        </script> 
                        <style>
                            .card-link {
                                text-decoration: none;
                                color: inherit;
                                position: relative;
                                display: block;
                            }

                            .deal-image1 {
                                width: 90%;
                                height: 90%;

                                /* Maintain a square aspect ratio */
                                overflow: hidden;
                                position: relative;
                                display: flex;
                                justify-content: center;
                                align-items: center;
                                margin: 0 auto;
                                /* Center the image container */
                            }

                            .deal-image1 img {
                                width: 400px;
                                height: 400px;
                                object-fit: cover;
                                /* Ensures the image covers the container without distortion */
                            }


                            .deal-content-overlay {
                                position: absolute;
                                top: 100%;
                                /* Start at the bottom */
                                left: 50%;
                                transform: translate(-50%, -50%);
                                width: 300px;
                                height: 300px;
                                border-radius: 50%;
                                background: rgba(224, 188, 109, 0.7);
                                color: white;
                                padding: 1rem;
                                text-align: center;
                                display: flex;
                                justify-content: center;
                                align-items: center;
                                /* Center the content vertically */
                                transition: top 0.3s ease-in-out;
                                opacity: 1;
                                /* Keep the circle visible */
                            }

                            .card-link:hover .deal-content-overlay {
                                top: 50%;
                                /* Move up to the center */
                                opacity: 1;
                                /* Ensure it stays visible */
                                transition: top 0.3s ease-in-out;
                            }

                            .deal-title {
                                font-family: 'Open Sans';
                                font-size: 19px;
                                line-height: 1.3;
                                letter-spacing: 1px;
                                color: white;
                                margin-bottom: 10px;
                            }

                            .price {
                                font-size: 13px;
                                line-height: 24px;
                                font-weight: 500;
                                font-family: 'Open Sans';
                                color: white;
                                margin-top: 15px;
                                /* Add margin to create space between title and price */
                            }

                            .deal-description {
                                font-size: 16px;
                                line-height: 1.5;
                                margin-top: 15px;
                                color: white;
                            }
                        </style>

                        <section style="padding-bottom: 60px !important;" class="elementor-section elementor-top-section elementor-element elementor-element-e8d46a5 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="e8d46a5" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-b17e34d" data-id="b17e34d" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">

                                        <div class="elementor-element elementor-element-15c7e1e elementor-widget elementor-widget-astrip_button" data-id="15c7e1e" data-element_type="widget" data-widget_type="astrip_button.default">
                                            <div class="elementor-widget-container">
                                                <div class="row justify-content-center">
                                                    <div class="btn-align d-flex justify-content-center">
                                                        <a aria-hidden="true" href="/<?= $language ?>/<?= $language == 'id' ? 'destinasi' : 'destination' ?>" class="eg-btn btn--primary-outline btn--lg" style="border-radius:30px; background-color: #e0bc6d;font-family: 'Oswald';" onmouseover="this.style.color='#e0bc6d'" onmouseout="this.style.color='white'">
                                                            <?= lang("text_homepage.all_destination") ?>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </section>

                    </div>
                </div>
            </div>
        </div>
    </section>


    <section style="background-color:#F9F9F9; padding-top:50px;margin-top: 0px !important;" class="elementor-section elementor-top-section elementor-element elementor-element-8104c8f elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="8104c8f" data-element_type="section">
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-128b5f8" data-id="128b5f8" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-b5e1550 elementor-widget elementor-widget-astrip_heading" data-id="b5e1550" data-element_type="widget" data-widget_type="astrip_heading.default">
                        <div class="elementor-widget-container">
                            <div class="justify-content-center">
                                <div class="section-title1">
                                    <span style="color:#086B7D !important;letter-spacing: 0px !important;" class="heading-section">
                                        <?= $language == 'id' ? $homepage['upcoming_events_section_id'] : $homepage['upcoming_events_section_en'] ?>
                                    </span>
                                    <h2 class="title-section" style="color:black;margin-bottom: 15px !important;">
                                        <?= $language == 'id' ? $homepage['upcoming_events_title_id'] : $homepage['upcoming_events_title_en'] ?>
                                    </h2>
                                    <div class="heading-ribbon">
                                        <svg width="370" height="18" viewBox="0 0 370 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M184.946 0.780971C183.9 1.11998 183.054 1.98633 182.734 3.03348L182.601 3.46289L182 3.48549L181.391 3.50809L181.02 3.16908C180.508 2.70201 179.944 2.33287 179.15 1.95619C176.648 0.750837 173.62 0.999442 171.305 2.59654C170.629 3.05608 169.746 3.94503 169.308 4.59291C167.074 7.86998 167.408 12.1716 170.117 14.9515C171.668 16.5485 173.613 17.3622 175.847 17.3622C178.823 17.3622 181.599 15.6219 182.905 12.94L183.209 12.3223L183.914 12.1867C184.909 11.9983 187.091 11.9983 188.086 12.1867L188.791 12.3223L189.073 12.9023C190.401 15.637 193.14 17.3622 196.153 17.3622C199.894 17.3622 203.004 14.9063 203.924 11.2299C204.584 8.57813 203.85 5.73047 201.979 3.71903C201.296 2.98828 200.643 2.50614 199.693 2.03153C198.758 1.56445 198.053 1.36105 196.97 1.24051C194.81 0.999442 192.427 1.79046 190.891 3.25195C190.631 3.50809 190.616 3.50809 190.008 3.48549L189.399 3.46289L189.266 3.03348C188.939 1.95619 188.048 1.07478 186.972 0.758371C186.43 0.600167 185.48 0.607701 184.946 0.780971ZM186.868 2.0692C187.581 2.3856 188.108 3.11635 188.197 3.9149C188.227 4.14844 188.308 4.41964 188.39 4.51758C188.516 4.68331 188.59 4.70592 189.05 4.70592C189.332 4.70592 189.563 4.72098 189.563 4.73605C189.563 4.75865 189.444 4.97712 189.295 5.23326C188.939 5.85854 188.642 6.59682 188.442 7.39537C188.308 7.92271 188.271 8.26925 188.271 9.113C188.264 9.69308 188.293 10.3485 188.323 10.5745L188.382 10.9813L188.138 10.9286C188.004 10.8984 187.47 10.8457 186.95 10.8005C186.045 10.7176 184.575 10.7854 183.855 10.9286C183.61 10.9813 183.603 10.9813 183.655 10.7628C183.759 10.2732 183.788 8.85686 183.707 8.20898C183.595 7.3577 183.195 6.12974 182.786 5.39146C182.616 5.07506 182.467 4.79632 182.452 4.76618C182.437 4.72852 182.66 4.70592 182.942 4.70592C183.41 4.70592 183.484 4.68331 183.61 4.51758C183.692 4.41964 183.773 4.14844 183.803 3.9149C183.981 2.3856 185.51 1.45898 186.868 2.0692ZM177.532 2.67188C180.76 3.60603 182.831 6.65709 182.504 9.96429C182.148 13.4674 179.268 16.1116 175.795 16.1116C173.925 16.1116 172.359 15.4336 171.008 14.055C169.746 12.7667 169.078 11.1169 169.078 9.30887C169.078 7.48577 169.709 5.89621 170.948 4.58538C171.928 3.54576 173.079 2.88281 174.407 2.58901C175.268 2.40067 176.73 2.43834 177.532 2.67188ZM197.541 2.58901C198.907 2.87528 200.042 3.51563 201.037 4.57031C204.273 7.99051 203.211 13.5276 198.944 15.524C197.675 16.1191 196.02 16.2849 194.654 15.9459C192.746 15.4637 191.166 14.2132 190.238 12.4503C188.709 9.54241 189.511 5.85854 192.108 3.8697C193.014 3.17662 194.075 2.70201 195.07 2.52874C195.76 2.41574 196.829 2.43834 197.541 2.58901Z" fill="#086B7D"></path>
                                            <path d="M185.295 2.81501C184.523 3.28962 184.323 4.17857 184.805 4.94699C185.072 5.36886 185.458 5.57227 186 5.57227C186.542 5.57227 186.928 5.36886 187.195 4.94699C187.447 4.54018 187.521 4.1409 187.41 3.7341C187.321 3.38756 186.972 2.94308 186.661 2.77734C186.356 2.61914 185.57 2.64174 185.295 2.81501Z" fill="#086B7D"></path>
                                            <path d="M174.637 3.60603C172.477 4.06557 170.815 5.7154 170.258 7.94531C170.028 8.85686 170.08 10.1978 170.377 11.0943C171.008 12.9927 172.566 14.4542 174.474 14.9289C175.209 15.1097 176.515 15.0871 177.264 14.8836C179.268 14.3412 180.864 12.6839 181.354 10.6348C181.517 9.97935 181.525 8.66853 181.369 7.99805C180.901 5.94894 179.439 4.36691 177.428 3.72656C176.76 3.51562 175.357 3.45536 174.637 3.60603ZM176.886 4.90178C177.665 5.09012 178.266 5.45173 178.912 6.09961C179.595 6.78516 179.921 7.34263 180.137 8.21652C180.745 10.6272 179.246 13.0907 176.797 13.716C176.144 13.8817 175.008 13.829 174.355 13.5954C173.746 13.377 172.878 12.7818 172.455 12.2921C171.72 11.4408 171.349 10.4163 171.349 9.26367C171.349 8.62333 171.379 8.41992 171.572 7.86998C171.846 7.07143 172.225 6.48382 172.804 5.95647C173.242 5.54966 173.984 5.10519 174.511 4.93945C175.194 4.71345 176.077 4.69838 176.886 4.90178Z" fill="#086B7D"></path>
                                            <path d="M175.216 5.84347C173.902 6.04688 172.752 7.16183 172.448 8.52539C172.247 9.43694 172.425 9.90402 172.967 9.90402C173.368 9.89648 173.605 9.59514 173.605 9.09793C173.605 8.93973 173.702 8.60826 173.813 8.35965C174.147 7.65151 174.8 7.1543 175.513 7.07143C176.018 7.01116 176.248 6.90569 176.344 6.69475C176.463 6.41602 176.448 6.24275 176.263 6.03181C176.062 5.79827 175.795 5.75307 175.216 5.84347Z" fill="#086B7D"></path>
                                            <path d="M195.188 3.57589C193.355 3.8923 191.626 5.30106 190.921 7.05636C190.505 8.09598 190.386 9.58761 190.646 10.6348C191.136 12.6839 192.732 14.3412 194.736 14.8836C195.485 15.0871 196.791 15.1097 197.526 14.9289C199.434 14.4542 201 12.9927 201.623 11.0943C201.786 10.5896 201.838 10.2882 201.861 9.56501C201.935 7.76451 201.43 6.43108 200.213 5.19559C199.345 4.31417 198.461 3.83203 197.311 3.60603C196.71 3.49302 195.76 3.47796 195.188 3.57589ZM197.311 4.90179C198.031 5.08259 198.743 5.50446 199.359 6.13728C200.243 7.03376 200.658 8.05078 200.651 9.30134C200.643 10.8457 199.931 12.1867 198.662 13.053C197.912 13.5653 197.341 13.7536 196.428 13.7988C195.879 13.829 195.559 13.8064 195.203 13.716C193.511 13.2866 192.175 11.9079 191.826 10.2355C191.373 8.05831 192.546 5.88867 194.624 5.05246C195.455 4.72098 196.361 4.66825 197.311 4.90179Z" fill="#086B7D"></path>
                                            <path d="M195.611 5.84347C194.068 6.07701 192.754 7.62891 192.754 9.21094C192.754 9.81362 193.325 10.115 193.748 9.73075C193.897 9.60268 193.956 9.45201 194.008 9.05273C194.09 8.44252 194.327 7.99805 194.788 7.59124C195.136 7.27483 195.715 7.04129 196.138 7.04129C196.91 7.04129 197.044 5.91881 196.279 5.8058C196.153 5.79074 195.856 5.8058 195.611 5.84347Z" fill="#086B7D"></path>
                                            <rect x="215" y="8" width="155" height="2" rx="1" fill="url(#paint0_linear_2_2)"></rect>
                                            <rect y="8" width="157" height="2" rx="1" fill="url(#paint1_linear_2_2)"></rect>
                                            <defs>
                                                <linearGradient id="paint0_linear_2_2" x1="215" y1="8.99999" x2="370" y2="8.99998" gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="#086B7D"></stop>
                                                    <stop offset="1" stop-color="white" stop-opacity="0"></stop>
                                                </linearGradient>
                                                <linearGradient id="paint1_linear_2_2" x1="-2.0562e-07" y1="8.99999" x2="157" y2="8.99998" gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="white"></stop>
                                                    <stop offset="1" stop-color="#086B7D"></stop>
                                                </linearGradient>
                                            </defs>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        .destination-custom {
            padding: 30px;
            background-color: #f9f9f9;
        }

        .destination-custom .card {
            border: none;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: row;
        }

        .destination-custom .card-img-left {
            width: 50%;
            overflow: hidden;
            display: flex;
            align-items: center;
        }

        .destination-custom .card-img-left img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .destination-custom .card-body {
            padding: 20px;
            width: 50%;
            background-color: #f8f9fa;
        }

        .destination-custom .card-title {
            margin-bottom: 15px;
            color: #333;
        }

        .destination-custom .destinations-cards .card {
            background-color: #fff;
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .destination-custom .list-img {
            width: 60px;
            height: 60px;
            object-fit: cover;
            margin-right: 15px;
            border-radius: 5px;
        }

        .destination-custom .small.text-muted {
            margin-top: -10px;
        }

        .custom-card {
            background-color: #fff;
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .custom-card .card-body {
            padding: 15px;
            display: flex;
            align-items: center;
        }

        .date-box {
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color: #ffffff;
            /* Warna latar belakang kotak */
            border-top: 7px solid rgb(224, 188, 109);
            /* Garis batas hanya di bagian atas */
            padding: 10px;
            text-align: center;
            margin-right: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }


        .date-number {
            font-size: 1.5rem;
            font-weight: bold;
            color: #000000;
        }

        .date-month {
            font-size: 1rem;
            font-weight: bold;
            color: #000000;
        }

        .info-box {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }

        .destination-name {
            font-size: 1.2rem;
            font-weight: bold;
            color: #333;
            margin-bottom: 5px;
        }

        .date-text {
            font-size: 1rem;
            color: #666;
        }

        .date-text i {
            margin-right: 5px;
        }
    </style>

    <!-- start section -->
    <div class="destination-custom" style="padding-bottom:80px;">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10">
                <div class="card flex-md-row">
                    <!-- Gambar di sebelah kiri dengan judul -->
                    <div class="position-relative card-img-left">
                        <img src="<?= base_url('assets/images/taylor.jpeg') ?>" class="img-fluid" alt="Cover Image">
                    </div>

                    <!-- Daftar Destinasi di sebelah kanan -->
                    <div class="card-body">
                        <div class="destinations-cards">
                            <div class="card mb-3 custom-card">
                                <div class="card-body d-flex align-items-center">
                                    <!-- Bagian kotak tanggal dan bulan -->
                                    <div class="date-box d-flex flex-column align-items-center mr-3">
                                        <span class="date-number">7</span>
                                        <span class="date-month">September</span>
                                    </div>
                                    <!-- Bagian informasi -->
                                    <div class="info-box">
                                        <p class="destination-name">Italian GP</p>
                                        <p class="date-text">Monza</p>
                                    </div>
                                </div>
                            </div>

                            <div class="card mb-3 custom-card">
                                <div class="card-body d-flex align-items-center">
                                    <div class="date-box d-flex flex-column align-items-center mr-3">
                                        <span class="date-number">13-17</span>
                                        <span class="date-month">September</span>
                                    </div>
                                    <div class="info-box">
                                        <p class="destination-name">London Fashion Week</p>
                                        <p class="date-text">London</p>
                                    </div>
                                </div>
                            </div>

                            <div class="card mb-3 custom-card">
                                <div class="card-body d-flex align-items-center">
                                    <div class="date-box d-flex flex-column align-items-center mr-3">
                                        <span class="date-number">17-19</span>
                                        <span class="date-month">September</span>
                                    </div>
                                    <div class="info-box">
                                        <p class="destination-name">IFTM Top Resa 2024</p>
                                        <p class="date-text">Paris</p>
                                    </div>
                                </div>
                            </div>

                            <div class="card mb-3 custom-card">
                                <div class="card-body d-flex align-items-center">
                                    <div class="date-box d-flex flex-column align-items-center mr-3">
                                        <span class="date-number">17-23</span>
                                        <span class="date-month">September</span>
                                    </div>
                                    <div class="info-box">
                                        <p class="destination-name">Milan Fashion Week</p>
                                        <p class="date-text">Milan</p>
                                    </div>
                                </div>
                            </div>

                            <div class="card mb-3 custom-card">
                                <div class="card-body d-flex align-items-center">
                                    <div class="date-box d-flex flex-column align-items-center mr-3">
                                        <span class="date-number">1-23</span>
                                        <span class="date-month">September</span>
                                    </div>
                                    <div class="info-box">
                                        <p class="destination-name">Paris Fashion Week</p>
                                        <p class="date-text">Paris</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end section -->

    <style>
        .destination-custom {
            padding: 30px 0;
        }

        .destination-custom .card {
            border: none;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: row;
        }

        .destination-custom .card-img-left {
            width: 50%;
            overflow: hidden;
            display: flex;
            align-items: center;
        }

        .destination-custom .card-img-left img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .destination-custom .card-body {
            padding: 20px;
            width: 50%;
            background-color: #f8f9fa;
        }

        .destination-custom .card-title {
            margin-bottom: 15px;
            color: #333;
        }

        .destination-custom .destinations-cards .card {
            background-color: #fff;
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .destination-custom .destinations-cards .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            background-color: #e0bc6d;
        }

        .destination-custom .list-img {
            width: 60px;
            height: 60px;
            object-fit: cover;
            margin-right: 15px;
            border-radius: 5px;
        }

        .destination-custom .small.text-muted {
            margin-top: -10px;
        }

        .custom-card {
            background-color: #fff;
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .custom-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            background-color: #e0bc6d;
        }

        .custom-card .card-body {
            padding: 15px;
            display: flex;
            align-items: center;
        }

        .date-box {
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color: #ffffff;
            border-top: 7px solid rgb(224, 188, 109);
            padding: 10px;
            text-align: center;
            margin-right: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: background-color 0.3s ease;
        }

        .date-number {
            font-size: 1.5rem;
            font-weight: bold;
            color: #000000;
        }

        .date-month {
            font-size: 1rem;
            font-weight: bold;
            color: #000000;
        }

        .info-box {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }

        .destination-name {
            font-size: 1.2rem;
            font-weight: bold;
            color: #333;
            margin-bottom: 5px;
            transition: color 0.3s ease;
        }

        .date-text {
            font-size: 1rem;
            color: #666;
        }

        .date-text i {
            margin-right: 5px;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .destination-custom .card {
                flex-direction: column;
            }

            .destination-custom .card-img-left,
            .destination-custom .card-body {
                width: 100%;
            }
        }
    </style>


    <section aria-hidden="true" class="elementor-section elementor-top-section elementor-element elementor-element-8104c8f elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="8104c8f" data-element_type="section" style="margin-top:0px;padding-top: 50px !important;">
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-128b5f8" data-id="128b5f8" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-b5e1550 elementor-widget elementor-widget-astrip_heading" data-id="b5e1550" data-element_type="widget" data-widget_type="astrip_heading.default">
                        <div class="elementor-widget-container">
                            <div class="justify-content-center">
                                <div class="section-title1">
                                    <span aria-hidden="true" style="color:#086B7D !important;letter-spacing: 0px !important;" class="heading-section">
                                        <?= $language == 'id' ? $homepage['how_it_works_section_id'] : $homepage['how_it_works_section_en'] ?>
                                    </span>
                                    <h2 class="title-section" style="color:black;margin-bottom: 15px !important;">
                                        <?= $language == 'id' ? $homepage['how_it_works_title_id'] : $homepage['how_it_works_title_en'] ?>
                                    </h2>
                                    <div class="heading-ribbon">
                                        <svg width="370" height="18" viewBox="0 0 370 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M184.946 0.780971C183.9 1.11998 183.054 1.98633 182.734 3.03348L182.601 3.46289L182 3.48549L181.391 3.50809L181.02 3.16908C180.508 2.70201 179.944 2.33287 179.15 1.95619C176.648 0.750837 173.62 0.999442 171.305 2.59654C170.629 3.05608 169.746 3.94503 169.308 4.59291C167.074 7.86998 167.408 12.1716 170.117 14.9515C171.668 16.5485 173.613 17.3622 175.847 17.3622C178.823 17.3622 181.599 15.6219 182.905 12.94L183.209 12.3223L183.914 12.1867C184.909 11.9983 187.091 11.9983 188.086 12.1867L188.791 12.3223L189.073 12.9023C190.401 15.637 193.14 17.3622 196.153 17.3622C199.894 17.3622 203.004 14.9063 203.924 11.2299C204.584 8.57813 203.85 5.73047 201.979 3.71903C201.296 2.98828 200.643 2.50614 199.693 2.03153C198.758 1.56445 198.053 1.36105 196.97 1.24051C194.81 0.999442 192.427 1.79046 190.891 3.25195C190.631 3.50809 190.616 3.50809 190.008 3.48549L189.399 3.46289L189.266 3.03348C188.939 1.95619 188.048 1.07478 186.972 0.758371C186.43 0.600167 185.48 0.607701 184.946 0.780971ZM186.868 2.0692C187.581 2.3856 188.108 3.11635 188.197 3.9149C188.227 4.14844 188.308 4.41964 188.39 4.51758C188.516 4.68331 188.59 4.70592 189.05 4.70592C189.332 4.70592 189.563 4.72098 189.563 4.73605C189.563 4.75865 189.444 4.97712 189.295 5.23326C188.939 5.85854 188.642 6.59682 188.442 7.39537C188.308 7.92271 188.271 8.26925 188.271 9.113C188.264 9.69308 188.293 10.3485 188.323 10.5745L188.382 10.9813L188.138 10.9286C188.004 10.8984 187.47 10.8457 186.95 10.8005C186.045 10.7176 184.575 10.7854 183.855 10.9286C183.61 10.9813 183.603 10.9813 183.655 10.7628C183.759 10.2732 183.788 8.85686 183.707 8.20898C183.595 7.3577 183.195 6.12974 182.786 5.39146C182.616 5.07506 182.467 4.79632 182.452 4.76618C182.437 4.72852 182.66 4.70592 182.942 4.70592C183.41 4.70592 183.484 4.68331 183.61 4.51758C183.692 4.41964 183.773 4.14844 183.803 3.9149C183.981 2.3856 185.51 1.45898 186.868 2.0692ZM177.532 2.67188C180.76 3.60603 182.831 6.65709 182.504 9.96429C182.148 13.4674 179.268 16.1116 175.795 16.1116C173.925 16.1116 172.359 15.4336 171.008 14.055C169.746 12.7667 169.078 11.1169 169.078 9.30887C169.078 7.48577 169.709 5.89621 170.948 4.58538C171.928 3.54576 173.079 2.88281 174.407 2.58901C175.268 2.40067 176.73 2.43834 177.532 2.67188ZM197.541 2.58901C198.907 2.87528 200.042 3.51563 201.037 4.57031C204.273 7.99051 203.211 13.5276 198.944 15.524C197.675 16.1191 196.02 16.2849 194.654 15.9459C192.746 15.4637 191.166 14.2132 190.238 12.4503C188.709 9.54241 189.511 5.85854 192.108 3.8697C193.014 3.17662 194.075 2.70201 195.07 2.52874C195.76 2.41574 196.829 2.43834 197.541 2.58901Z" fill="#086B7D"></path>
                                            <path d="M185.295 2.81501C184.523 3.28962 184.323 4.17857 184.805 4.94699C185.072 5.36886 185.458 5.57227 186 5.57227C186.542 5.57227 186.928 5.36886 187.195 4.94699C187.447 4.54018 187.521 4.1409 187.41 3.7341C187.321 3.38756 186.972 2.94308 186.661 2.77734C186.356 2.61914 185.57 2.64174 185.295 2.81501Z" fill="#086B7D"></path>
                                            <path d="M174.637 3.60603C172.477 4.06557 170.815 5.7154 170.258 7.94531C170.028 8.85686 170.08 10.1978 170.377 11.0943C171.008 12.9927 172.566 14.4542 174.474 14.9289C175.209 15.1097 176.515 15.0871 177.264 14.8836C179.268 14.3412 180.864 12.6839 181.354 10.6348C181.517 9.97935 181.525 8.66853 181.369 7.99805C180.901 5.94894 179.439 4.36691 177.428 3.72656C176.76 3.51562 175.357 3.45536 174.637 3.60603ZM176.886 4.90178C177.665 5.09012 178.266 5.45173 178.912 6.09961C179.595 6.78516 179.921 7.34263 180.137 8.21652C180.745 10.6272 179.246 13.0907 176.797 13.716C176.144 13.8817 175.008 13.829 174.355 13.5954C173.746 13.377 172.878 12.7818 172.455 12.2921C171.72 11.4408 171.349 10.4163 171.349 9.26367C171.349 8.62333 171.379 8.41992 171.572 7.86998C171.846 7.07143 172.225 6.48382 172.804 5.95647C173.242 5.54966 173.984 5.10519 174.511 4.93945C175.194 4.71345 176.077 4.69838 176.886 4.90178Z" fill="#086B7D"></path>
                                            <path d="M175.216 5.84347C173.902 6.04688 172.752 7.16183 172.448 8.52539C172.247 9.43694 172.425 9.90402 172.967 9.90402C173.368 9.89648 173.605 9.59514 173.605 9.09793C173.605 8.93973 173.702 8.60826 173.813 8.35965C174.147 7.65151 174.8 7.1543 175.513 7.07143C176.018 7.01116 176.248 6.90569 176.344 6.69475C176.463 6.41602 176.448 6.24275 176.263 6.03181C176.062 5.79827 175.795 5.75307 175.216 5.84347Z" fill="#086B7D"></path>
                                            <path d="M195.188 3.57589C193.355 3.8923 191.626 5.30106 190.921 7.05636C190.505 8.09598 190.386 9.58761 190.646 10.6348C191.136 12.6839 192.732 14.3412 194.736 14.8836C195.485 15.0871 196.791 15.1097 197.526 14.9289C199.434 14.4542 201 12.9927 201.623 11.0943C201.786 10.5896 201.838 10.2882 201.861 9.56501C201.935 7.76451 201.43 6.43108 200.213 5.19559C199.345 4.31417 198.461 3.83203 197.311 3.60603C196.71 3.49302 195.76 3.47796 195.188 3.57589ZM197.311 4.90179C198.031 5.08259 198.743 5.50446 199.359 6.13728C200.243 7.03376 200.658 8.05078 200.651 9.30134C200.643 10.8457 199.931 12.1867 198.662 13.053C197.912 13.5653 197.341 13.7536 196.428 13.7988C195.879 13.829 195.559 13.8064 195.203 13.716C193.511 13.2866 192.175 11.9079 191.826 10.2355C191.373 8.05831 192.546 5.88867 194.624 5.05246C195.455 4.72098 196.361 4.66825 197.311 4.90179Z" fill="#086B7D"></path>
                                            <path d="M195.611 5.84347C194.068 6.07701 192.754 7.62891 192.754 9.21094C192.754 9.81362 193.325 10.115 193.748 9.73075C193.897 9.60268 193.956 9.45201 194.008 9.05273C194.09 8.44252 194.327 7.99805 194.788 7.59124C195.136 7.27483 195.715 7.04129 196.138 7.04129C196.91 7.04129 197.044 5.91881 196.279 5.8058C196.153 5.79074 195.856 5.8058 195.611 5.84347Z" fill="#086B7D"></path>
                                            <rect x="215" y="8" width="155" height="2" rx="1" fill="url(#paint0_linear_2_2)"></rect>
                                            <rect y="8" width="157" height="2" rx="1" fill="url(#paint1_linear_2_2)"></rect>
                                            <defs>
                                                <linearGradient id="paint0_linear_2_2" x1="215" y1="8.99999" x2="370" y2="8.99998" gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="#086B7D"></stop>
                                                    <stop offset="1" stop-color="white" stop-opacity="0"></stop>
                                                </linearGradient>
                                                <linearGradient id="paint1_linear_2_2" x1="-2.0562e-07" y1="8.99999" x2="157" y2="8.99998" gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="white"></stop>
                                                    <stop offset="1" stop-color="#086B7D"></stop>
                                                </linearGradient>
                                            </defs>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section style=" margin-top: 0px !important;padding-top: 50px !important;" class="elementor-section elementor-top-section elementor-element elementor-element-3f21453 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="3f21453" data-element_type="section">
        <div class="elementor-container elementor-column-gap-no">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-fe9d011" data-id="fe9d011" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-530c731 elementor-widget elementor-widget-astrip_package_with_facilities" data-id="530c731" data-element_type="widget" data-widget_type="astrip_package_with_facilities.default">
                        <div class="elementor-widget-container">
                            <div class="best-plan-section overflow-hidden">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12 position-relative">
                                            <div class="swiper best-plan-slider position-relative">
                                                <div class="swiper-wrapper">

                                                    <style>
                                                        /* CSS untuk menunjukkan elemen hanya pada mobile dan tablet */
                                                        @media only screen and (max-width: 767px) {
                                                            .show-on-mobile-and-tablet {
                                                                display: block !important;
                                                                /* Tampilkan elemen */
                                                            }
                                                        }

                                                        /* CSS untuk menyembunyikan elemen pada layar lainnya */
                                                        @media only screen and (min-width: 768px) {
                                                            .show-on-mobile-and-tablet {
                                                                display: none !important;
                                                                /* Sembunyikan elemen */
                                                            }
                                                        }

                                                        @media only screen and (min-width: 768px) {
                                                            .show-on-laptop {
                                                                display: block !important;
                                                                /* Tampilkan elemen */
                                                            }
                                                        }

                                                        /* CSS untuk menyembunyikan elemen pada layar lainnya */
                                                        @media only screen and (max-width: 767px) {
                                                            .show-on-laptop {
                                                                display: none !important;
                                                                /* Sembunyikan elemen */
                                                            }
                                                        }
                                                    </style>

                                                    <div class="swiper-slide show-on-mobile-and-tablet">
                                                        <?php foreach ($howItWorks as $howItWork) : ?>
                                                            <div class="best-plan-single1" style="border: none;">
                                                                <div class="image" style="display: flex;justify-content: center;">

                                                                    <!--<div style="width:225px;height: 145px; display: flex;justify-content: center; align-items: center;" class="img-fluid wp-post-image">-->
                                                                    <!-- <i class="fa-solid fa-envelope fa-2xl" style="color: #90B956; "></i> -->
                                                                    <!--    <img loading="lazy" style="max-width: 80px;" src="<?= base_url('assets/images/how_it_works/') . $howItWork['image'] ?>" alt="<?= $howItWork['alt_image'] ?>" srcset="">-->
                                                                    <!--</div>-->
                                                                    <div style="width: 100px; height: 100px; display: flex; justify-content: center; align-items: center;" class="img-fluid wp-post-image">
                                                                        <img loading="lazy" style="width: 100%; height: 100%;" src="<?= base_url('assets/images/how_it_works/') . $howItWork['image'] ?>" alt="<?= $howItWork['alt_image'] ?>">
                                                                    </div>

                                                                </div>
                                                                <div class="content">

                                                                    <h4 style="text-align: center;">
                                                                        <a>
                                                                            <?= $language == 'id' ? $howItWork['title_id'] : $howItWork['title_en'] ?>
                                                                        </a>
                                                                    </h4>
                                                                    <div class="best-plan-meta">

                                                                        <span class="rating"> </span>
                                                                    </div>
                                                                    <div class="list-area">

                                                                        <ul class="plan-list1">
                                                                            <?= $language == 'id' ? $howItWork['description_id'] : $howItWork['description_en'] ?>
                                                                        </ul>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        <?php endforeach; ?>
                                                    </div>

                                                    <!-- <div class="show-on-laptop"> -->
                                                    <?php foreach ($howItWorks as $howItWork) : ?>
                                                        <div class="swiper-slide show-on-laptop">
                                                            <div class="best-plan-single1" style="border: none;">
                                                                <div class="image" style="display: flex;justify-content: center;">

                                                                    <!--<div style="width:225px;height: 145px; display: flex;justify-content: center; align-items: center;" class="img-fluid wp-post-image">-->
                                                                    <!--     <i class="fa-solid fa-envelope fa-2xl" style="color: #90B956; "></i> -->
                                                                    <!--    <img loading="lazy" style="max-width: 80px;" src="<?= base_url('assets/images/how_it_works/') . $howItWork['image'] ?>" alt="<?= $howItWork['alt_image'] ?>" srcset="">-->
                                                                    <!--</div>-->
                                                                    <div style="width: 60px; height: 60px; display: flex; justify-content: center; align-items: center;" class="img-fluid wp-post-image">
                                                                        <img loading="lazy" style="width: 100%; height: 100%;" src="<?= base_url('assets/images/how_it_works/') . $howItWork['image'] ?>" alt="<?= $howItWork['alt_image'] ?>">
                                                                    </div>

                                                                </div>
                                                                <div class="content">

                                                                    <h4 style="text-align: center;">
                                                                        <a style="font-family: 'Open Sans' !important;font-size: 18px !important;">
                                                                            <?= $language == 'id' ? strtoupper($howItWork['title_id']) : strtoupper($howItWork['title_en']) ?>
                                                                        </a>
                                                                    </h4>
                                                                    <div class="best-plan-meta">

                                                                        <span class="rating"> </span>
                                                                    </div>
                                                                    <div class="list-area">

                                                                        <ul class="plan-list1" style="text-align: center;padding-left:0px!important;">
                                                                            <?= $language == 'id' ? $howItWork['description_id'] : $howItWork['description_en'] ?>
                                                                        </ul>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php endforeach; ?>
                                                    <!-- </div> -->

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>>



    <section style="padding-top:50px;margin-top: 30px;background-color:#f9f9f9;" class="elementor-section elementor-top-section elementor-element elementor-element-86a3b54 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="86a3b54" data-element_type="section">
        <div class="elementor-container elementor-column-gap-default" style="max-width: 1140px;">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-0442f94" data-id="0442f94" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-3062334 elementor-widget elementor-widget-astrip_heading" data-id="3062334" data-element_type="widget" data-widget_type="astrip_heading.default">
                        <div class="elementor-widget-container">
                            <div class="justify-content-center">
                                <div class="section-title1">
                                    <span style="color:#086B7D !important;letter-spacing: 0px !important;" class="heading-section">
                                        <?= $language == 'id' ? $homepage['faq_section_id'] : $homepage['faq_section_en'] ?>
                                    </span>
                                    <h3 class="title-section" style="color:black;margin-bottom: 15px !important;font-family: 'Open Sans'; font-weight: 700; font-size: 30px; line-height: 42px;">
                                        <?= $language == 'id' ? $homepage['faq_title_id'] : $homepage['faq_title_en'] ?>
                                    </h3>
                                    <div class="heading-ribbon">
                                        <svg width="370" height="18" viewBox="0 0 370 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M184.946 0.780971C183.9 1.11998 183.054 1.98633 182.734 3.03348L182.601 3.46289L182 3.48549L181.391 3.50809L181.02 3.16908C180.508 2.70201 179.944 2.33287 179.15 1.95619C176.648 0.750837 173.62 0.999442 171.305 2.59654C170.629 3.05608 169.746 3.94503 169.308 4.59291C167.074 7.86998 167.408 12.1716 170.117 14.9515C171.668 16.5485 173.613 17.3622 175.847 17.3622C178.823 17.3622 181.599 15.6219 182.905 12.94L183.209 12.3223L183.914 12.1867C184.909 11.9983 187.091 11.9983 188.086 12.1867L188.791 12.3223L189.073 12.9023C190.401 15.637 193.14 17.3622 196.153 17.3622C199.894 17.3622 203.004 14.9063 203.924 11.2299C204.584 8.57813 203.85 5.73047 201.979 3.71903C201.296 2.98828 200.643 2.50614 199.693 2.03153C198.758 1.56445 198.053 1.36105 196.97 1.24051C194.81 0.999442 192.427 1.79046 190.891 3.25195C190.631 3.50809 190.616 3.50809 190.008 3.48549L189.399 3.46289L189.266 3.03348C188.939 1.95619 188.048 1.07478 186.972 0.758371C186.43 0.600167 185.48 0.607701 184.946 0.780971ZM186.868 2.0692C187.581 2.3856 188.108 3.11635 188.197 3.9149C188.227 4.14844 188.308 4.41964 188.39 4.51758C188.516 4.68331 188.59 4.70592 189.05 4.70592C189.332 4.70592 189.563 4.72098 189.563 4.73605C189.563 4.75865 189.444 4.97712 189.295 5.23326C188.939 5.85854 188.642 6.59682 188.442 7.39537C188.308 7.92271 188.271 8.26925 188.271 9.113C188.264 9.69308 188.293 10.3485 188.323 10.5745L188.382 10.9813L188.138 10.9286C188.004 10.8984 187.47 10.8457 186.95 10.8005C186.045 10.7176 184.575 10.7854 183.855 10.9286C183.61 10.9813 183.603 10.9813 183.655 10.7628C183.759 10.2732 183.788 8.85686 183.707 8.20898C183.595 7.3577 183.195 6.12974 182.786 5.39146C182.616 5.07506 182.467 4.79632 182.452 4.76618C182.437 4.72852 182.66 4.70592 182.942 4.70592C183.41 4.70592 183.484 4.68331 183.61 4.51758C183.692 4.41964 183.773 4.14844 183.803 3.9149C183.981 2.3856 185.51 1.45898 186.868 2.0692ZM177.532 2.67188C180.76 3.60603 182.831 6.65709 182.504 9.96429C182.148 13.4674 179.268 16.1116 175.795 16.1116C173.925 16.1116 172.359 15.4336 171.008 14.055C169.746 12.7667 169.078 11.1169 169.078 9.30887C169.078 7.48577 169.709 5.89621 170.948 4.58538C171.928 3.54576 173.079 2.88281 174.407 2.58901C175.268 2.40067 176.73 2.43834 177.532 2.67188ZM197.541 2.58901C198.907 2.87528 200.042 3.51563 201.037 4.57031C204.273 7.99051 203.211 13.5276 198.944 15.524C197.675 16.1191 196.02 16.2849 194.654 15.9459C192.746 15.4637 191.166 14.2132 190.238 12.4503C188.709 9.54241 189.511 5.85854 192.108 3.8697C193.014 3.17662 194.075 2.70201 195.07 2.52874C195.76 2.41574 196.829 2.43834 197.541 2.58901Z" fill="#086B7D"></path>
                                            <path d="M185.295 2.81501C184.523 3.28962 184.323 4.17857 184.805 4.94699C185.072 5.36886 185.458 5.57227 186 5.57227C186.542 5.57227 186.928 5.36886 187.195 4.94699C187.447 4.54018 187.521 4.1409 187.41 3.7341C187.321 3.38756 186.972 2.94308 186.661 2.77734C186.356 2.61914 185.57 2.64174 185.295 2.81501Z" fill="#086B7D"></path>
                                            <path d="M174.637 3.60603C172.477 4.06557 170.815 5.7154 170.258 7.94531C170.028 8.85686 170.08 10.1978 170.377 11.0943C171.008 12.9927 172.566 14.4542 174.474 14.9289C175.209 15.1097 176.515 15.0871 177.264 14.8836C179.268 14.3412 180.864 12.6839 181.354 10.6348C181.517 9.97935 181.525 8.66853 181.369 7.99805C180.901 5.94894 179.439 4.36691 177.428 3.72656C176.76 3.51562 175.357 3.45536 174.637 3.60603ZM176.886 4.90178C177.665 5.09012 178.266 5.45173 178.912 6.09961C179.595 6.78516 179.921 7.34263 180.137 8.21652C180.745 10.6272 179.246 13.0907 176.797 13.716C176.144 13.8817 175.008 13.829 174.355 13.5954C173.746 13.377 172.878 12.7818 172.455 12.2921C171.72 11.4408 171.349 10.4163 171.349 9.26367C171.349 8.62333 171.379 8.41992 171.572 7.86998C171.846 7.07143 172.225 6.48382 172.804 5.95647C173.242 5.54966 173.984 5.10519 174.511 4.93945C175.194 4.71345 176.077 4.69838 176.886 4.90178Z" fill="#086B7D"></path>
                                            <path d="M175.216 5.84347C173.902 6.04688 172.752 7.16183 172.448 8.52539C172.247 9.43694 172.425 9.90402 172.967 9.90402C173.368 9.89648 173.605 9.59514 173.605 9.09793C173.605 8.93973 173.702 8.60826 173.813 8.35965C174.147 7.65151 174.8 7.1543 175.513 7.07143C176.018 7.01116 176.248 6.90569 176.344 6.69475C176.463 6.41602 176.448 6.24275 176.263 6.03181C176.062 5.79827 175.795 5.75307 175.216 5.84347Z" fill="#086B7D"></path>
                                            <path d="M195.188 3.57589C193.355 3.8923 191.626 5.30106 190.921 7.05636C190.505 8.09598 190.386 9.58761 190.646 10.6348C191.136 12.6839 192.732 14.3412 194.736 14.8836C195.485 15.0871 196.791 15.1097 197.526 14.9289C199.434 14.4542 201 12.9927 201.623 11.0943C201.786 10.5896 201.838 10.2882 201.861 9.56501C201.935 7.76451 201.43 6.43108 200.213 5.19559C199.345 4.31417 198.461 3.83203 197.311 3.60603C196.71 3.49302 195.76 3.47796 195.188 3.57589ZM197.311 4.90179C198.031 5.08259 198.743 5.50446 199.359 6.13728C200.243 7.03376 200.658 8.05078 200.651 9.30134C200.643 10.8457 199.931 12.1867 198.662 13.053C197.912 13.5653 197.341 13.7536 196.428 13.7988C195.879 13.829 195.559 13.8064 195.203 13.716C193.511 13.2866 192.175 11.9079 191.826 10.2355C191.373 8.05831 192.546 5.88867 194.624 5.05246C195.455 4.72098 196.361 4.66825 197.311 4.90179Z" fill="#086B7D"></path>
                                            <path d="M195.611 5.84347C194.068 6.07701 192.754 7.62891 192.754 9.21094C192.754 9.81362 193.325 10.115 193.748 9.73075C193.897 9.60268 193.956 9.45201 194.008 9.05273C194.09 8.44252 194.327 7.99805 194.788 7.59124C195.136 7.27483 195.715 7.04129 196.138 7.04129C196.91 7.04129 197.044 5.91881 196.279 5.8058C196.153 5.79074 195.856 5.8058 195.611 5.84347Z" fill="#086B7D"></path>
                                            <rect x="215" y="8" width="155" height="2" rx="1" fill="url(#paint0_linear_2_2)"></rect>
                                            <rect y="8" width="157" height="2" rx="1" fill="url(#paint1_linear_2_2)"></rect>
                                            <defs>
                                                <linearGradient id="paint0_linear_2_2" x1="215" y1="8.99999" x2="370" y2="8.99998" gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="#086B7D"></stop>
                                                    <stop offset="1" stop-color="white" stop-opacity="0"></stop>
                                                </linearGradient>
                                                <linearGradient id="paint1_linear_2_2" x1="-2.0562e-07" y1="8.99999" x2="157" y2="8.99998" gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="white"></stop>
                                                    <stop offset="1" stop-color="#086B7D"></stop>
                                                </linearGradient>
                                            </defs>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section style="padding-bottom: 100px;background-color:#f9f9f9;" class="elementor-section elementor-top-section elementor-element elementor-element-e2c78fd elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="e2c78fd" data-element_type="section" style="margin-bottom: 50px !important;">
        <div class="elementor-container elementor-column-gap-default" style="display: flex;justify-content: center; padding: 50px 0px 0px 0px;">
            <div class="elementor-column elementor-col-66 elementor-top-column elementor-element elementor-element-b17fe2a" data-id="b17fe2a" data-element_type="column" style="width: 100%;">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-68b1738 elementor-widget elementor-widget-astrip_accordion" data-id="68b1738" data-element_type="widget" data-widget_type="astrip_accordion.default">
                        <div class="elementor-widget-container">
                            <div class="faq-wrap">
                                <div class="accordion" id="accordionExample">

                                    <?php foreach ($faqs as $faq) : ?>
                                        <div class="accordion-item" style="box-shadow: 0px 2px 18px 0px rgba(0, 0, 0, 0.3);">
                                            <h2 class="accordion-header" id="heading<?= $faq['id'] ?>">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?= $faq['id'] ?>" aria-expanded="true" aria-controls="collapse<?= $faq['id'] ?>">
                                                    <p style="font-weight: 700;font-family: 'Open Sans';font-size: 16px;line-height: 27px;margin:0px !important">
                                                        <?= $language == 'id' ? $faq['title_id'] : $faq['title_en'] ?>
                                                    </p>
                                                </button>
                                            </h2>
                                            <div id="collapse<?= $faq['id'] ?>" class="accordion-collapse collapse" aria-labelledby="heading<?= $faq['id'] ?>" data-bs-parent="#accordionExample">
                                                <div class="accordion-body" style="font-family: 'Open Sans'; font-weight: 500; font-size: 16px; line-height: 27px;">
                                                    <?= $language == 'id' ? $faq['description_id'] : $faq['description_en'] ?>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="elementor-widget-wrap elementor-element-populated" style="margin-top: 60px !important;">

                        <div class="elementor-element elementor-element-15c7e1e elementor-widget elementor-widget-astrip_button" data-id="15c7e1e" data-element_type="widget" data-widget_type="astrip_button.default">
                            <div class="elementor-widget-container">
                                <div class="row justify-content-center">
                                    <div class="btn-align d-flex justify-content-center" style="color: white;">
                                        <a aria-hidden="true" href="/<?= $language ?>/faq" class="eg-btn btn--primary btn--lg" style="background-color: #e0bc6d;border-radius: 30px;font-family: 'Oswald';" onmouseover="this.style.color='#e0bc6d'" onmouseout="this.style.color='white'">
                                            <?= lang("text_homepage.all_faq") ?>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
    </section>
    <section style="margin-top: 0px;" class="elementor-section elementor-top-section elementor-element elementor-element-a3bd80e elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="a3bd80e" data-element_type="section">
        <div class="elementor-background-overlay" style="background-image: url('https://yourprivateeurope.eu/wp-content/uploads/2020/08/zaanse-5018794_1280-min-1024x682.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat; opacity: 1; position: absolute; width: 100%; height: 100%;"></div>

        <div class="container" style="position: relative; z-index: 1;">
            <div class="row justify-content-center align-items-center">
                <!-- Kolom untuk teks -->
                <div class="col-md-6 col-text" style="margin-top: 70px; margin-bottom: 70px; color: white;">
                    <h2 class="tect"><?= lang("text_homepage.title_contact_us") ?></h2>
                </div>

                <!-- Kolom untuk tombol -->
                <div class="col-md-4 col-button" style="color: white; margin-top: 50px; margin-bottom: 50px;">
                    <a aria-hidden="true" href="/<?= $language ?>/<?= $language == 'id' ? 'hubungi-kami' : 'contact-us' ?>" class="eg-btn btn--primary btn--lg" style="border-radius: 30px; background-color: #e0bc6d; font-family: 'Oswald';" onmouseover="this.style.color='#e0bc6d'" onmouseout="this.style.color='white'">
                        <?= lang("text_homepage.button_contact_us") ?>
                    </a>
                </div>
            </div>
        </div>

        <style>
            /* Media query untuk tampilan web */
            @media (min-width: 769px) {

                /* Tambahkan padding kiri sebesar 50px untuk teks dan tombol pada tampilan web */
                .col-text {
                    padding-left: 50px;
                }

                .col-button {
                    padding-left: 50px;
                }
            }

            /* Media query untuk tampilan mobile */
            @media (max-width: 768px) {

                /* Mengatur kedua kolom untuk tampil secara vertikal di tampilan mobile dan di tengah */
                .col-text,
                .col-button {
                    width: 100%;
                    /* Membuat kolom penuh lebar layar */
                    text-align: center;
                    padding-right: 0;
                    /* Pusatkan teks dan tombol */
                }

                /* Atur posisi teks di atas tombol */
                .col-text {
                    order: 1;
                    /* Teks berada di urutan pertama */
                }

                .col-button {
                    order: 2;
                    /* Tombol berada di urutan kedua */
                }
            }
        </style>
    </section>


    <?= $this->endSection() ?>