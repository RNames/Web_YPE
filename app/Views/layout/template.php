<?php
$language = session()->get('lang');
?>

<!DOCTYPE html>
<html lang="<?= $language == 'id' ? 'id-ID' : 'en-US' ?>">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <!-- <link rel="pingback" href="#xmlrpc.php" /> -->
    <link rel="dns-prefetch" href="//astrip-wp.b-cdn.net" />

    <title><?= $language == 'id' ? $title['seo_tag_title_id'] : $title['seo_tag_title_en']   ?></title>
    <!-- meta description -->
    <meta name="description" content="<?= $language == 'id' ? $description['seo_description_id'] : $description['seo_description_en'] ?>">
    <!-- meta description -->
    <!-- hreflang, fetchpriority -->
    <link rel="fetch" hreflang="<?= $language ?>" href="<?= $currentUrl ?>" />
    <!-- hreflang, fetchpriority -->

    <!-- canonical tag -->
    <link rel="canonical" href="<?= $currentUrl ?>" />
    <!-- canonical tag -->



    <meta name="robots" content="max-image-preview:large" />
    <link rel="dns-prefetch" href="//fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="dns-prefetch" href="//use.fontawesome.com" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

    <!--<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />-->
    <!--<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>-->

    <!--<script>-->
    <!--    document.addEventListener('DOMContentLoaded', function () {-->
    <!--        var swiper = new Swiper('.swiper-container', {-->
    <!--            slidesPerView: 'auto',-->
    <!--            spaceBetween: 30,-->
    <!--            loop: true,-->
    <!--            autoplay: {-->
    <!--                delay: 5000,-->
    <!--                disableOnInteraction: false,-->
    <!--            },-->
    <!--        });-->
    <!--    });-->
    <!--</script>-->


    <script src="https://kit.fontawesome.com/278b3e3446.js" crossorigin="anonymous"></script>

    <script>
        window._wpemojiSettings = {
            baseUrl: "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/72x72\/",
            ext: ".png",
            svgUrl: "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/svg\/",
            svgExt: ".svg",
            source: {
                concatemoji: "https:\/\/www.astrip-wp.egenslab.com\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.4.3",
            },
        };
        /*! This file is auto-generated */
        !(function(i, n) {
            var o, s, e;

            function c(e) {
                try {
                    var t = {
                        supportTests: e,
                        timestamp: new Date().valueOf()
                    };
                    sessionStorage.setItem(o, JSON.stringify(t));
                } catch (e) {}
            }

            function p(e, t, n) {
                e.clearRect(0, 0, e.canvas.width, e.canvas.height),
                    e.fillText(t, 0, 0);
                var t = new Uint32Array(
                        e.getImageData(0, 0, e.canvas.width, e.canvas.height).data
                    ),
                    r =
                    (e.clearRect(0, 0, e.canvas.width, e.canvas.height),
                        e.fillText(n, 0, 0),
                        new Uint32Array(
                            e.getImageData(0, 0, e.canvas.width, e.canvas.height).data
                        ));
                return t.every(function(e, t) {
                    return e === r[t];
                });
            }

            function u(e, t, n) {
                switch (t) {
                    case "flag":
                        return n(
                                e,
                                "\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f",
                                "\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f"
                            ) ?
                            !1 :
                            !n(
                                e,
                                "\ud83c\uddfa\ud83c\uddf3",
                                "\ud83c\uddfa\u200b\ud83c\uddf3"
                            ) &&
                            !n(
                                e,
                                "\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f",
                                "\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f"
                            );
                    case "emoji":
                        return !n(
                            e,
                            "\ud83e\udef1\ud83c\udffb\u200d\ud83e\udef2\ud83c\udfff",
                            "\ud83e\udef1\ud83c\udffb\u200b\ud83e\udef2\ud83c\udfff"
                        );
                }
                return !1;
            }

            function f(e, t, n) {
                var r =
                    "undefined" != typeof WorkerGlobalScope &&
                    self instanceof WorkerGlobalScope ?
                    new OffscreenCanvas(300, 150) :
                    i.createElement("canvas"),
                    a = r.getContext("2d", {
                        willReadFrequently: !0
                    }),
                    o = ((a.textBaseline = "top"), (a.font = "600 32px Arial"), {});
                return (
                    e.forEach(function(e) {
                        o[e] = t(a, e, n);
                    }),
                    o
                );
            }

            function t(e) {
                var t = i.createElement("script");
                (t.src = e), (t.defer = !0), i.head.appendChild(t);
            }
            "undefined" != typeof Promise &&
                ((o = "wpEmojiSettingsSupports"),
                    (s = ["flag", "emoji"]),
                    (n.supports = {
                        everything: !0,
                        everythingExceptFlag: !0
                    }),
                    (e = new Promise(function(e) {
                        i.addEventListener("DOMContentLoaded", e, {
                            once: !0
                        });
                    })),
                    new Promise(function(t) {
                        var n = (function() {
                            try {
                                var e = JSON.parse(sessionStorage.getItem(o));
                                if (
                                    "object" == typeof e &&
                                    "number" == typeof e.timestamp &&
                                    new Date().valueOf() < e.timestamp + 604800 &&
                                    "object" == typeof e.supportTests
                                )
                                    return e.supportTests;
                            } catch (e) {}
                            return null;
                        })();
                        if (!n) {
                            if (
                                "undefined" != typeof Worker &&
                                "undefined" != typeof OffscreenCanvas &&
                                "undefined" != typeof URL &&
                                URL.createObjectURL &&
                                "undefined" != typeof Blob
                            )
                                try {
                                    var e =
                                        "postMessage(" +
                                        f.toString() +
                                        "(" + [JSON.stringify(s), u.toString(), p.toString()].join(
                                            ","
                                        ) +
                                        "));",
                                        r = new Blob([e], {
                                            type: "text/javascript"
                                        }),
                                        a = new Worker(URL.createObjectURL(r), {
                                            name: "wpTestEmojiSupports",
                                        });
                                    return void(a.onmessage = function(e) {
                                        c((n = e.data)), a.terminate(), t(n);
                                    });
                                } catch (e) {}
                            c((n = f(s, u, p)));
                        }
                        t(n);
                    })
                    .then(function(e) {
                        for (var t in e)
                            (n.supports[t] = e[t]),
                            (n.supports.everything =
                                n.supports.everything && n.supports[t]),
                            "flag" !== t &&
                            (n.supports.everythingExceptFlag =
                                n.supports.everythingExceptFlag && n.supports[t]);
                        (n.supports.everythingExceptFlag =
                            n.supports.everythingExceptFlag && !n.supports.flag),
                        (n.DOMReady = !1),
                        (n.readyCallback = function() {
                            n.DOMReady = !0;
                        });
                    })
                    .then(function() {
                        return e;
                    })
                    .then(function() {
                        var e;
                        n.supports.everything ||
                            (n.readyCallback(),
                                (e = n.source || {}).concatemoji ?
                                t(e.concatemoji) :
                                e.wpemoji && e.twemoji && (t(e.twemoji), t(e.wpemoji)));
                    }));
        })((window, document), window._wpemojiSettings);
    </script>
    <style id="wp-emoji-styles-inline-css">
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 0.07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <link rel="stylesheet" id="wp-block-library-css" href=" <?= base_url('assets/css/style.min.css') ?>" media="all" />
    <!-- <link rel="stylesheet" id="wp-block-library-css" href="css/style.min.css" media="all" /> -->
    <style id="wp-block-library-theme-inline-css">
        .wp-block-audio figcaption {
            color: #555;
            font-size: 13px;
            text-align: center;
        }

        .is-dark-theme .wp-block-audio figcaption {
            color: hsla(0, 0%, 100%, 0.65);
        }

        .wp-block-audio {
            margin: 0 0 1em;
        }

        .wp-block-code {
            border: 1px solid #ccc;
            border-radius: 4px;
            font-family: Menlo, Consolas, monaco, monospace;
            padding: 0.8em 1em;
        }

        .wp-block-embed figcaption {
            color: #555;
            font-size: 13px;
            text-align: center;
        }

        .is-dark-theme .wp-block-embed figcaption {
            color: hsla(0, 0%, 100%, 0.65);
        }

        .wp-block-embed {
            margin: 0 0 1em;
        }

        .blocks-gallery-caption {
            color: #555;
            font-size: 13px;
            text-align: center;
        }

        .is-dark-theme .blocks-gallery-caption {
            color: hsla(0, 0%, 100%, 0.65);
        }

        .wp-block-image figcaption {
            color: #555;
            font-size: 13px;
            text-align: center;
        }

        .is-dark-theme .wp-block-image figcaption {
            color: hsla(0, 0%, 100%, 0.65);
        }

        .wp-block-image {
            margin: 0 0 1em;
        }

        .wp-block-pullquote {
            border-bottom: 4px solid;
            border-top: 4px solid;
            color: currentColor;
            margin-bottom: 1.75em;
        }

        .wp-block-pullquote cite,
        .wp-block-pullquote footer,
        .wp-block-pullquote__citation {
            color: currentColor;
            font-size: 0.8125em;
            font-style: normal;
            text-transform: uppercase;
        }

        .wp-block-quote {
            border-left: 0.25em solid;
            margin: 0 0 1.75em;
            padding-left: 1em;
        }

        .wp-block-quote cite,
        .wp-block-quote footer {
            color: currentColor;
            font-size: 0.8125em;
            font-style: normal;
            position: relative;
        }

        .wp-block-quote.has-text-align-right {
            border-left: none;
            border-right: 0.25em solid;
            padding-left: 0;
            padding-right: 1em;
        }

        .wp-block-quote.has-text-align-center {
            border: none;
            padding-left: 0;
        }

        .wp-block-quote.is-large,
        .wp-block-quote.is-style-large,
        .wp-block-quote.is-style-plain {
            border: none;
        }

        .wp-block-search .wp-block-search__label {
            font-weight: 700;
        }

        .wp-block-search__button {
            border: 1px solid #ccc;
            padding: 0.375em 0.625em;
        }

        :where(.wp-block-group.has-background) {
            padding: 1.25em 2.375em;
        }

        .wp-block-separator.has-css-opacity {
            opacity: 0.4;
        }

        .wp-block-separator {
            border: none;
            border-bottom: 2px solid;
            margin-left: auto;
            margin-right: auto;
        }

        .wp-block-separator.has-alpha-channel-opacity {
            opacity: 1;
        }

        .wp-block-separator:not(.is-style-wide):not(.is-style-dots) {
            width: 100px;
        }

        .wp-block-separator.has-background:not(.is-style-dots) {
            border-bottom: none;
            height: 1px;
        }

        .wp-block-separator.has-background:not(.is-style-wide):not(.is-style-dots) {
            height: 2px;
        }

        .wp-block-table {
            margin: 0 0 1em;
        }

        .wp-block-table td,
        .wp-block-table th {
            word-break: normal;
        }

        .wp-block-table figcaption {
            color: #555;
            font-size: 13px;
            text-align: center;
        }

        .is-dark-theme .wp-block-table figcaption {
            color: hsla(0, 0%, 100%, 0.65);
        }

        .wp-block-video figcaption {
            color: #555;
            font-size: 13px;
            text-align: center;
        }

        .is-dark-theme .wp-block-video figcaption {
            color: hsla(0, 0%, 100%, 0.65);
        }

        .wp-block-video {
            margin: 0 0 1em;
        }

        .wp-block-template-part.has-background {
            margin-bottom: 0;
            margin-top: 0;
            padding: 1.25em 2.375em;
        }
    </style>
    <style id="classic-theme-styles-inline-css">
        /*! This file is auto-generated */
        .wp-block-button__link {
            color: #fff;
            background-color: #32373c;
            border-radius: 9999px;
            box-shadow: none;
            text-decoration: none;
            padding: calc(0.667em + 2px) calc(1.333em + 2px);
            font-size: 1.125em;
        }

        .wp-block-file__button {
            background: #32373c;
            color: #fff;
            text-decoration: none;
        }
    </style>
    <style id="global-styles-inline-css">
        body {
            --wp--preset--color--black: #000000;
            --wp--preset--color--cyan-bluish-gray: #abb8c3;
            --wp--preset--color--white: #ffffff;
            --wp--preset--color--pale-pink: #f78da7;
            --wp--preset--color--vivid-red: #cf2e2e;
            --wp--preset--color--luminous-vivid-orange: #ff6900;
            --wp--preset--color--luminous-vivid-amber: #fcb900;
            --wp--preset--color--light-green-cyan: #7bdcb5;
            --wp--preset--color--vivid-green-cyan: #00d084;
            --wp--preset--color--pale-cyan-blue: #8ed1fc;
            --wp--preset--color--vivid-cyan-blue: #0693e3;
            --wp--preset--color--vivid-purple: #9b51e0;
            --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,
                    rgba(6, 147, 227, 1) 0%,
                    rgb(155, 81, 224) 100%);
            --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,
                    rgb(122, 220, 180) 0%,
                    rgb(0, 208, 130) 100%);
            --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,
                    rgba(252, 185, 0, 1) 0%,
                    rgba(255, 105, 0, 1) 100%);
            --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,
                    rgba(255, 105, 0, 1) 0%,
                    rgb(207, 46, 46) 100%);
            --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,
                    rgb(238, 238, 238) 0%,
                    rgb(169, 184, 195) 100%);
            --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,
                    rgb(74, 234, 220) 0%,
                    rgb(151, 120, 209) 20%,
                    rgb(207, 42, 186) 40%,
                    rgb(238, 44, 130) 60%,
                    rgb(251, 105, 98) 80%,
                    rgb(254, 248, 76) 100%);
            --wp--preset--gradient--blush-light-purple: linear-gradient(135deg,
                    rgb(255, 206, 236) 0%,
                    rgb(152, 150, 240) 100%);
            --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,
                    rgb(254, 205, 165) 0%,
                    rgb(254, 45, 45) 50%,
                    rgb(107, 0, 62) 100%);
            --wp--preset--gradient--luminous-dusk: linear-gradient(135deg,
                    rgb(255, 203, 112) 0%,
                    rgb(199, 81, 192) 50%,
                    rgb(65, 88, 208) 100%);
            --wp--preset--gradient--pale-ocean: linear-gradient(135deg,
                    rgb(255, 245, 203) 0%,
                    rgb(182, 227, 212) 50%,
                    rgb(51, 167, 181) 100%);
            --wp--preset--gradient--electric-grass: linear-gradient(135deg,
                    rgb(202, 248, 128) 0%,
                    rgb(113, 206, 126) 100%);
            --wp--preset--gradient--midnight: linear-gradient(135deg,
                    rgb(2, 3, 129) 0%,
                    rgb(40, 116, 252) 100%);
            --wp--preset--font-size--small: 13px;
            --wp--preset--font-size--medium: 20px;
            --wp--preset--font-size--large: 36px;
            --wp--preset--font-size--x-large: 42px;
            --wp--preset--spacing--20: 0.44rem;
            --wp--preset--spacing--30: 0.67rem;
            --wp--preset--spacing--40: 1rem;
            --wp--preset--spacing--50: 1.5rem;
            --wp--preset--spacing--60: 2.25rem;
            --wp--preset--spacing--70: 3.38rem;
            --wp--preset--spacing--80: 5.06rem;
            --wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
            --wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1),
                6px 6px rgba(0, 0, 0, 1);
            --wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
        }

        :where(.is-layout-flex) {
            gap: 0.5em;
        }

        :where(.is-layout-grid) {
            gap: 0.5em;
        }

        body .is-layout-flow>.alignleft {
            float: left;
            margin-inline-start: 0;
            margin-inline-end: 2em;
        }

        body .is-layout-flow>.alignright {
            float: right;
            margin-inline-start: 2em;
            margin-inline-end: 0;
        }

        body .is-layout-flow>.aligncenter {
            margin-left: auto !important;
            margin-right: auto !important;
        }

        body .is-layout-constrained>.alignleft {
            float: left;
            margin-inline-start: 0;
            margin-inline-end: 2em;
        }

        body .is-layout-constrained>.alignright {
            float: right;
            margin-inline-start: 2em;
            margin-inline-end: 0;
        }

        body .is-layout-constrained>.aligncenter {
            margin-left: auto !important;
            margin-right: auto !important;
        }

        body .is-layout-constrained> :where(:not(.alignleft):not(.alignright):not(.alignfull)) {
            max-width: var(--wp--style--global--content-size);
            margin-left: auto !important;
            margin-right: auto !important;
        }

        body .is-layout-constrained>.alignwide {
            max-width: var(--wp--style--global--wide-size);
        }

        body .is-layout-flex {
            display: flex;
        }

        body .is-layout-flex {
            flex-wrap: wrap;
            align-items: center;
        }

        body .is-layout-flex>* {
            margin: 0;
        }

        body .is-layout-grid {
            display: grid;
        }

        body .is-layout-grid>* {
            margin: 0;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        :where(.wp-block-columns.is-layout-grid) {
            gap: 2em;
        }

        :where(.wp-block-post-template.is-layout-flex) {
            gap: 1.25em;
        }

        :where(.wp-block-post-template.is-layout-grid) {
            gap: 1.25em;
        }

        .has-black-color {
            color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-color {
            color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-color {
            color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-color {
            color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-color {
            color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-color {
            color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-color {
            color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-color {
            color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-color {
            color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-color {
            color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-color {
            color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-color {
            color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-background-color {
            background-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-background-color {
            background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-background-color {
            background-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-background-color {
            background-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-background-color {
            background-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-background-color {
            background-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-background-color {
            background-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-background-color {
            background-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-background-color {
            background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-background-color {
            background-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-border-color {
            border-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-border-color {
            border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-border-color {
            border-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-border-color {
            border-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-border-color {
            border-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-border-color {
            border-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-border-color {
            border-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-border-color {
            border-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-border-color {
            border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-border-color {
            border-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
            background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
        }

        .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
            background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
        }

        .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-orange-to-vivid-red-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
        }

        .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
            background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
        }

        .has-cool-to-warm-spectrum-gradient-background {
            background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
        }

        .has-blush-light-purple-gradient-background {
            background: var(--wp--preset--gradient--blush-light-purple) !important;
        }

        .has-blush-bordeaux-gradient-background {
            background: var(--wp--preset--gradient--blush-bordeaux) !important;
        }

        .has-luminous-dusk-gradient-background {
            background: var(--wp--preset--gradient--luminous-dusk) !important;
        }

        .has-pale-ocean-gradient-background {
            background: var(--wp--preset--gradient--pale-ocean) !important;
        }

        .has-electric-grass-gradient-background {
            background: var(--wp--preset--gradient--electric-grass) !important;
        }

        .has-midnight-gradient-background {
            background: var(--wp--preset--gradient--midnight) !important;
        }

        .has-small-font-size {
            font-size: var(--wp--preset--font-size--small) !important;
        }

        .has-medium-font-size {
            font-size: var(--wp--preset--font-size--medium) !important;
        }

        .has-large-font-size {
            font-size: var(--wp--preset--font-size--large) !important;
        }

        .has-x-large-font-size {
            font-size: var(--wp--preset--font-size--x-large) !important;
        }

        .wp-block-navigation a:where(:not(.wp-element-button)) {
            color: inherit;
        }

        :where(.wp-block-post-template.is-layout-flex) {
            gap: 1.25em;
        }

        :where(.wp-block-post-template.is-layout-grid) {
            gap: 1.25em;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        :where(.wp-block-columns.is-layout-grid) {
            gap: 2em;
        }

        .wp-block-pullquote {
            font-size: 1.5em;
            line-height: 1.6;
        }
    </style>
    <link rel="stylesheet" id="contact-form-7-css" href="<?= base_url('assets/css/styles.css') ?>" media="all" />
    <link rel="stylesheet" id="woocommerce-layout-css" href="<?= base_url('assets/css/woocommerce-layout.css') ?>" media="all" />
    <link rel="stylesheet" id="woocommerce-smallscreen-css" href="<?= base_url('assets/css/woocommerce-smallscreen.css') ?>" media="only screen and (max-width: 768px)" />
    <link rel="stylesheet" id="woocommerce-general-css" href="<?= base_url('assets/css/woocommerce.css') ?>" media="all" />
    <style id="woocommerce-inline-inline-css">
        .woocommerce form .form-row .required {
            visibility: visible;
        }
    </style>
    <!-- <link rel="stylesheet" id="google-fonts-css" href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300;400;700;900&amp;family=Satisfy&amp;family=Work+Sans:wght@300;400;500;600;700;800;900&amp;display=swap" media="all" /> -->
    <link rel="stylesheet" id="google-fonts-css" href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" media="all" />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" id="animate-css" href="<?= base_url('assets/css/animate.css') ?>" media="all" />
    <link rel="stylesheet" id="bootstrap-css" href="<?= base_url('assets/css/bootstrap.min.css') ?>" media="all" />
    <link rel="stylesheet" id="boxicons-css" href="<?= base_url('assets/css/boxicons.min.css') ?>" media="all" />
    <link rel="stylesheet" id="bootstrap-icons-css" href="<?= base_url('assets/css/bootstrap-icons.css') ?>" media="all" />
    <link rel="stylesheet" id="swiper-bundle-css" href="<?= base_url('assets/css/swiper-bundle.css') ?>" media="all" />
    <link rel="stylesheet" id="slick-theme-css" href="<?= base_url('assets/css/slick-theme.css') ?>" media="all" />
    <link rel="stylesheet" id="slick-css" href="<?= base_url('assets/css/slick.css') ?>" media="all" />
    <link rel="stylesheet" id="nice-select-css" href="<?= base_url('assets/css/nice-select.css') ?>" media="all" />
    <link rel="stylesheet" id="magnific-popup-css" href="<?= base_url('assets/css/magnific-popup.css') ?>" media="all" />
    <link rel="stylesheet" id="odometer-css" href="<?= base_url('assets/css/odometer.css') ?>" media="all" />
    <link rel="stylesheet" id="date-ui-css" href="<?= base_url('assets/css/jquery.ui.css') ?>" media="all" />
    <link rel="stylesheet" id="egns-blog-page-css" href="<?= base_url('assets/css/blog-and-page.css') ?>" media="all" />
    <link rel="stylesheet" id="egns-woocommerce-css" href="<?= base_url('assets/css/woocommerce-custom.css') ?>" media="all" />
    <link rel="stylesheet" id="egns-typography-css" href="<?= base_url('assets/css/typography.css') ?>" media="all" />
    <link rel="stylesheet" id="egns-default-css" href="<?= base_url('assets/css/default.css') ?>" media="all" />
    <link rel="stylesheet" id="egns-style-css" href="<?= base_url('assets/css/style_1.css') ?>" media="all" />
    <link rel="stylesheet" id="egns-theme-css" href="<?= base_url('assets/css/style.css') ?>" media="all" />
    <link rel="stylesheet" id="fa5-css" href="<?= base_url('assets/css/all.css') ?>" media="all" />
    <link rel="stylesheet" id="fa5-v4-shims-css" href="<?= base_url('assets/css/v4-shims.css') ?>" media="all" />
    <style id="egns-stylesheet-inline-css">
        .inner-banner-section .breadcrumb-area h2,
        .woocommerce-products-header h1 {
            font-size: 50px;
        }

        /* .inner-banner-section .breadcrumb-area h2,
        .woocommerce-products-header h1 {
            font-family: Oswald;
        } */

        .inner-banner-section .breadcrumb-area h2,
        .woocommerce-products-header h1 {
            color: #fff;
        }

        .inner-banner-section .breadcrumb-area span {
            color: #fff;
        }

        .inner-banner-section,
        .woocommerce-products-header {
            background-color: #000;
        }

        .inner-banner-section,
        .woocommerce-products-header {
            background-image: url("images/breadcrumb-bg.jpg");
        }

        .footer-section {
            background-image: linear-gradient(rgba(9, 16, 13, 0.88),
                    rgba(9, 16, 13, 0.88)),
                url("<?= base_url('assets/images/footer-bg.png') ?>");
        }
    </style>
    <link rel="stylesheet" id="elementor-icons-css" href="<?= base_url('assets/css/elementor-icons.min.css') ?>" media="all" />
    <link rel="stylesheet" id="elementor-frontend-css" href="<?= base_url('assets/css/frontend-lite.min.css') ?>" media="all" />
    <link rel="stylesheet" id="swiper-css" href="<?= base_url('assets/css/swiper.min.css') ?>" media="all" />
    <link rel="stylesheet" id="elementor-post-8-css" href="<?= base_url('assets/css/post-8.css') ?>" media="all" />
    <link rel="stylesheet" id="elementor-global-css" href="<?= base_url('assets/css/global.css') ?>" media="all" />
    <link rel="stylesheet" id="elementor-post-234-css" href="<?= base_url('assets/css/post-234.css') ?>" media="all" />
    <!-- <link rel="stylesheet" id="google-fonts-1-css" href="https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CWork+Sans%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;display=auto&amp;ver=6.4.3" media="all" /> -->
    <link rel="stylesheet" id="elementor-icons-shared-0-css" href="<?= base_url('assets/css/fontawesome.min.css') ?>" media="all" />
    <link rel="stylesheet" id="elementor-icons-fa-solid-css" href="<?= base_url('assets/css/solid.min.css') ?>" media="all" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="" />
    <script src="<?= base_url('assets/js/jquery.min.js') ?>" id="jquery-core-js"></script>
    <script src="<?= base_url('assets/js/jquery-migrate.min.js') ?>" id="jquery-core-js"></script>
    <script src="<?= base_url('assets/js/jquery.blockUI.min.js') ?>" id="jquery-core-js"></script>
    <!-- <script src="js/jquery.min.js" id="jquery-core-js"></script> -->
    <!-- <script src="js/jquery-migrate.min.js" id="jquery-migrate-js"></script> -->
    <!-- <script src="js/jquery.blockUI.min.js" id="jquery-blockui-js" defer="" data-wp-strategy="defer"></script> -->
    <script id="wc-add-to-cart-js-extra">
        var wc_add_to_cart_params = {
            ajax_url: "\/wp-admin\/admin-ajax.php",
            wc_ajax_url: "\/?wc-ajax=%%endpoint%%",
            i18n_view_cart: "View cart",
            cart_url: "https:\/\/www.astrip-wp.egenslab.com\/cart\/",
            is_cart: "",
            cart_redirect_after_add: "no",
        };
    </script>
    <script src="<?= base_url('assets/js/add-to-cart.min.js') ?>" id="jquery-core-js"></script>
    <script src="<?= base_url('assets/js/js.cookie.min.js') ?>" id="jquery-core-js"></script>
    <!-- <script src="js/add-to-cart.min.js" id="wc-add-to-cart-js" defer="" data-wp-strategy="defer"></script> -->
    <!-- <script src="js/js.cookie.min.js" id="js-cookie-js" defer="" data-wp-strategy="defer"></script> -->
    <script id="woocommerce-js-extra">
        var woocommerce_params = {
            ajax_url: "\/wp-admin\/admin-ajax.php",
            wc_ajax_url: "\/?wc-ajax=%%endpoint%%",
        };
    </script>
    <script src="<?= base_url('assets/js/woocommerce.min.js') ?>" id="jquery-core-js"></script>
    <!-- <script src="js/woocommerce.min.js" id="woocommerce-js" defer="" data-wp-strategy="defer"></script> -->
    <!-- <link rel="https://api.w.org/" href="#wp-json/" /> -->
    <!-- <link rel="alternate" type="application/json" href="#wp-json/wp/v2/pages/234" /> -->
    <!-- <link rel="EditURI" type="application/rsd+xml" title="RSD" href="#xmlrpc.php?rsd" /> -->
    <meta name="generator" content="WordPress 6.4.3" />
    <meta name="generator" content="WooCommerce 8.3.0" />
    <!-- <link rel="canonical" href="#" /> -->
    <!-- <link rel="shortlink" href="#" /> -->
    <!-- <link rel="alternate" type="application/json+oembed" href="#wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwww.astrip-wp.egenslab.com%2F" /> -->
    <!-- <link rel="alternate" type="text/xml+oembed" href="#wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwww.astrip-wp.egenslab.com%2F&amp;format=xml" /> -->
    <noscript>
        <style>
            .woocommerce-product-gallery {
                opacity: 1 !important;
            }
        </style>
    </noscript>
    <meta name="generator" content="Elementor 3.17.3; features: e_dom_optimization, e_optimized_assets_loading, e_optimized_css_loading, additional_custom_breakpoints; settings: css_print_method-external, google_font-enabled, font_display-auto" />
    <link rel="icon" href="<?= base_url('assets/images/YPE-LOGO-BLUE-GOLD.png') ?>" sizes="32x32" />
    <link rel="icon" href="<?= base_url('assets/images/YPE-LOGO-BLUE-GOLD.png') ?>" sizes="192x192" />
    <link rel="apple-touch-icon" href="<?= base_url('assets/images/YPE-LOGO-BLUE-GOLD.png') ?>" />
    <meta name="msapplication-TileImage" content="https://astrip-wp.b-cdn.net/wp-content/uploads/2023/02/favicon.svg" />
    <style id="wp-custom-css">
        .footer-section .footer-item ul li:hover a {
            color: #ddd;
        }
    </style>
    <script src="<?= base_url('assets/js/wp-emoji-release.min.js') ?>" id="jquery-core-js"></script>
    <!-- <script src="js/wp-emoji-release.min.js" defer=""></script> -->
</head>

<body class="home page-template page-template-elementor_header_footer page page-id-234 wp-embed-responsive theme-astrip woocommerce-js elementor-default elementor-template-full-width elementor-kit-8 elementor-page elementor-page-234">

    <?php
    // Define current language
    $lang = session()->get('lang') ?? 'id'; // Default to 'id' if no language is set

    // Get the current URI and remove the existing language prefix
    $currentUri = uri_string();
    $currentUri = preg_replace('#^(id|en)/?#', '', $currentUri); // Remove the language prefix if present

    // Construct URLs for English and Indonesian
    $english_url = base_url("en" . ($currentUri ? "/{$currentUri}" : ''));
    $indonesia_url = base_url("id" . ($currentUri ? "/{$currentUri}" : ''));
    ?>

    <?php
    // Ambil bahasa yang disimpan di session
    $lang = session()->get('lang') ?? 'id'; // Default ke 'id' jika tidak ada di session

    $current_url = uri_string();

    // Simpan segmen bahasa saat ini
    $segments = explode('/', trim($current_url, '/'));
    $lang_segment = $segments[0] . '/'; // Menyimpan 'id/' atau 'en/'


    // Definisikan tautan untuk setiap halaman berdasarkan bahasa
    $destinationsLink = ($lang_segment === 'en/') ? 'destination' : 'destinasi';
    $souvenirsLink = ($lang_segment === 'en/') ? 'other-services' : 'layanan-lainnya';
    $articleLink = ($lang_segment === 'en/') ? 'contact-us' : 'hubungi-kami';
    $aboutLink = ($lang_segment === 'en/') ? 'about-us' : 'tentang-kami';
    $languageLink = ($lang_segment === 'en/') ? 'layanan-kami' : 'our-service';

    // Buat array untuk menggantikan segmen berdasarkan bahasa
    $replace_map = [
        'destinasi' => 'destination',
        'layanan-kami' => 'our-services',
        'layanan-lainnya' => 'other-services',
        'hubungi-kami' => 'contact-us',
        'tentang-kami' => 'about-us',
    ];

    // Ambil bagian dari URL tanpa segmen bahasa
    $url_without_lang = substr($current_url, strlen($lang_segment));

    // Pecah URL menjadi segmen-segmen
    $url_segments = explode('/', $url_without_lang);

    // Tentukan bahasa yang ingin digunakan
    $new_lang_segment = ($lang_segment === 'en/') ? 'id/' : 'en/';

    // Gantikan hanya segmen kedua dalam URL berdasarkan bahasa yang aktif
    if (isset($url_segments[0])) {
        foreach ($replace_map as $indonesian_segment => $english_segment) {
            if ($lang_segment === 'en/') {
                // Jika bahasa yang dipilih adalah 'en', maka ganti segmen ID ke EN
                if ($url_segments[0] === $english_segment) {
                    $url_segments[0] = $indonesian_segment;
                }
            } else {
                // Jika bahasa yang dipilih adalah 'id', maka ganti segmen EN ke ID
                if ($url_segments[0] === $indonesian_segment) {
                    $url_segments[0] = $english_segment;
                }
            }
        }
    }

    // Gabungkan kembali URL
    $url_without_lang = implode('/', $url_segments);

    // Tautan dengan bahasa yang baru
    $clean_url = $new_lang_segment . ltrim($url_without_lang, '/');

    // Cek apakah $clean_url sudah memiliki segmen bahasa yang tepat
    if (!preg_match('/^(en|id)\//', $clean_url)) {
        // Jika tidak, tambahkan segmen bahasa yang sesuai di depan
        $clean_url = $new_lang_segment . ltrim($clean_url, '/');
    }

    // Tautan Bahasa Inggris
    if (strpos($url_without_lang, 'en/') === false) {
        // Jika tidak ada segmen bahasa Inggris, tambahkan
        $english_url = base_url('en/' . ltrim($url_without_lang, '/'));
    } else {
        // Jika sudah ada segmen bahasa Inggris, gunakan yang ada
        $english_url = base_url($url_without_lang);
    }

    // Tautan Bahasa Indonesia
    if (strpos($url_without_lang, 'id/') === false) {
        // Jika tidak ada segmen bahasa Indonesia, tambahkan
        $indonesia_url = base_url('id/' . ltrim($url_without_lang, '/'));
    } else {
        // Jika sudah ada segmen bahasa Indonesia, gunakan yang ada
        $indonesia_url = base_url($url_without_lang);
    }

    $is_indonesian = ($lang === 'id');
    $is_english = ($lang === 'en');

    ?>


    <header class="header-area style-2" style="padding:0px 36px !important">
        <div class=" d-flex gap-5 justify-content-between align-items-center" style="margin: auto;">
            <div class="header-logo">
                <a href="/<?= $language ?>" title="Astrip">
                    <img loading="lazy" class="img-fluid" src="<?= base_url('assets/images/YPE-LOGO-FULL-BLUE-GOLD-2.png') ?>" alt="Astrip" style="
            width: 350px;
            " /></a>
            </div>
            <div class="header-logo header-sticky-logo">
                <a href="/<?= $language ?>" title="Astrip">
                    <img loading="lazy" class="img-fluid" src="<?= base_url('assets/images/YPE-LOGO-FULL-BLUE-GOLD-2.png') ?>" alt="Astrip" style="
            width: 350px;
            " /></a>
            </div>
            <div class="main-nav" style="margin-top: 7px !important;">
                <div class="mobile-logo-area d-lg-none d-flex justify-content-between align-items-center">
                    <div class="mobile-logo-wrap">
                        <a href="/<?= $language ?>  " title="Astrip">
                            <img loading="lazy" class="img-fluid" src="<?= base_url('assets/images/YPE-LOGO-FULL-BLUE-GOLD-2.png') ?>" alt="Astrip" style="
                width: 350px;
                " /></a>
                    </div>
                    <div class="menu-close-btn">
                        <i class="bi bi-x-lg text-dark"></i>
                    </div>
                </div>
                <div class="main-nav-wrapper">
                    <ul id="menu-main-menu" class="ul">
                        <li id="menu-item-2339" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-2339">
                            <a href="/<?= $language ?>">
                                <img style="margin-bottom: 3px;" src="<?= base_url('assets/images/house-solid.svg') ?>" alt="link-home" width="20" height="20">
                            </a>
                        </li>
                        <li id="menu-item-2339" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-2339">
                            <a style="font-family: 'Open Sans';font-weight: 700;font-size: 16px;" href="/<?= $language ?>/<?= $language == 'id' ? 'layanan-kami' : 'our-services' ?>">
                                <?= lang("text_homepage.services") ?></a><i class="bi bi-chevron-down"></i>
                            <ul class="sub-menu">
                                <li id="menu-item-2370" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2370">
                                    <a style="font-family: 'Open Sans';font-weight: 700;font-size: 16px;" href="/<?= $language ?>/<?= $language == 'id' ? 'layanan-kami/vip-services' : 'our-services/vip-services' ?>">VIP SERVICES</a><i class="bi bi-chevron-down"></i>
                                </li>
                                <li id="menu-item-2370" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2370">
                                    <a style="font-family: 'Open Sans';font-weight: 700;font-size: 16px;" href="/<?= $language ?>/<?= $language == 'id' ? 'layanan-kami/private-tour' : 'our-services/private-tour' ?>">PRIVATE TOUR</a><i class="bi bi-chevron-down"></i>
                                </li>
                                <li id="menu-item-2370" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2370">
                                    <a style="font-family: 'Open Sans';font-weight: 700;font-size: 16px;" href="/<?= $language ?>/<?= $language == 'id' ? 'layanan-kami/destination-event' : 'our-services/destination-event' ?>">DESTINATION EVENTS</a><i class="bi bi-chevron-down"></i>
                                </li>
                                <li id="menu-item-2370" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2370">
                                    <a style="font-family: 'Open Sans';font-weight: 700;font-size: 16px;" href="/<?= $language ?>/<?= $language == 'id' ? 'layanan-lainnya' : 'other-services' ?>">
                                        <?= lang("text_homepage.other_services") ?></a><i class="bi bi-chevron-down"></i>
                                </li>
                            </ul>
                        </li>

                        <li id="menu-item-2339" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-2339">
                            <a style="font-family: 'Open Sans';font-weight: 700;font-size: 16px;" href="#"><?= lang("text_homepage.information") ?></a><i class="bi bi-chevron-down"></i>
                            <ul class="sub-menu">

                                <li id="menu-item-2370" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2370">
                                    <a style="font-family: 'Open Sans';font-weight: 700;font-size: 16px;" href="/<?= $language ?>/<?= $language == 'id' ? 'destinasi' : 'destination' ?>">
                                        <?= lang("text_homepage.destination") ?></a><i class="bi bi-chevron-down"></i>
                                </li>
                                <li id="menu-item-2370" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2370">
                                    <a style="font-family: 'Open Sans';font-weight: 700;font-size: 16px;" href="/<?= $language ?>/blog">
                                        <?= lang("text_homepage.blog") ?></a><i class="bi bi-chevron-down"></i>
                                </li>
                                <li id="menu-item-2370" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2370">
                                    <a style="font-family: 'Open Sans';font-weight: 700;font-size: 16px;" href="/<?= $language ?>/<?= $language == 'id' ? 'tour-agent' : 'tour-agent' ?>">TOUR AGENT</a><i class="bi bi-chevron-down"></i>
                                </li>
                            </ul>
                        </li>

                        <li id="menu-item-2013" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-2013">
                            <a style="font-family: 'Open Sans';font-weight: 700;font-size: 16px;" href="/<?= $language ?>/<?= $language == 'id' ? 'tentang-kami' : 'about-us' ?>">
                                <?= lang("text_homepage.about_us_navbar") ?></a>
                        </li>

                        <li id="menu-item-2013" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-2013">
                            <a style="font-family: 'Open Sans';font-weight: 700;font-size: 16px;" href="/<?= $language ?>/<?= $language == 'id' ? 'hubungi-kami' : 'contact-us' ?>">
                                <?= lang("text_homepage.contact_us_navbar") ?></a>
                        </li>
                        <li id="menu-item-2013" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-2013">
                            <a style="font-family: 'Open Sans';font-weight: 700;font-size: 16px;" href="/<?= $language ?>/faq">FAQ</a>
                        </li>
                        <li id="menu-item-2013" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-2013">
                            <a href="<?= site_url($lang == 'id' ? 'switchLanguage/en' : 'switchLanguage/id') ?>">
                                <?php if ($lang == 'id') { ?>
                                    <img style="margin-bottom: 5px !important;" loading="lazy" src="<?= base_url('assets/images/language/id_ID.png') ?>" alt="indonesian" width="18" height="12">
                                <?php } else { ?>
                                    <img style="margin-bottom: 5px !important;" loading="lazy" src="<?= base_url('assets/images/language/en_US.png') ?>" alt="english" width="18" height="12">
                                <?php } ?>
                            </a>
                            <i class="bi bi-chevron-down"></i>
                            <ul class="sub-menu">
                                <li id="menu-item-1984" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1984">
                                    <a style="font-family: 'Open Sans';font-weight: 700;font-size: 16px;" href="<?= $is_indonesian ? '#' : $indonesia_url ?>"  <?= $is_indonesian ? 'disabled' : '' ?>" <?= $is_indonesian ? 'onclick="return false;"' : '' ?>>INDONESIAN </a><i class="bi bi-chevron-down"></i>
                                </li>
                                <li id="menu-item-2017" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2017">
                                    <a style="font-family: 'Open Sans';font-weight: 700;font-size: 16px;" href="<?= $is_english ? '#' : $english_url ?>" <?= $is_english ? 'disabled' : '' ?>" <?= $is_english ? 'onclick="return false;"' : '' ?>> ENGLISH </a><i class="bi bi-chevron-down"></i>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </div>
                <!-- mobile-search-area -->

                <div class="phone-call sibling2 d-flex justify-content-start align-items-center flex-row d-lg-none d-block mt-5">

                </div>
            </div>

            <div class="nav-right d-flex jsutify-content-end align-items-center gap-5">
                <div class="phone-call sibling2 justify-content-start align-items-center flex-row d-xl-flex d-none">

                </div>
                <div class="mobile-menu-btn d-lg-none d-block">
                    <i class="bi bi-list text-dark"></i>
                </div>
            </div>
        </div>
    </header>


    <!-- this is content -->
    <?= $this->renderSection('content') ?>


    <footer class="footer-section">
        <div class="footer-top" style="padding: 45px 45px !important">
            <div class="container-xl container-lg-fluid container">
                <div class="row gy-5">

                    <div class="col-lg-3 col-md-6 d-flex justify-content-lg-center" style="margin-right:50px;">
                        <div class="footer-item">
                            <div id="nav_menu-2" class="destination-widget-item widget_nav_menu">
                                <div class="destination-widget-title">
                                    <h3>
                                        YOUR PRIVATE EUROPE
                                    </h3>
                                </div>
                                <div class="menu-information-container">
                                    <p style="color:white">
                                        PT. MITRAWISATA JELAJAH BUANA
                                    </p>
                                    <ul class="contact-list">
                                        <li>
                                            <!-- <div class="icon">
                                                <i class="bi bi-geo-alt"></i>
                                            </div> -->
                                            <div class="text">
                                                <p style="color:#e0bc6d">
                                                    EUROPE
                                                </p>
                                                <p>
                                                    Velperplein 23-25 <br>
                                                    6811 AH Arnhem, <br>
                                                    the Netherlands <br>
                                                    +(31) 061-6564-256
                                                </p>
                                                <p style="color:#e0bc6d">
                                                    INDONESIA
                                                </p>
                                                <p>
                                                    Dharmahusada Mas VII AB-22 <br>
                                                    60115 Surabaya, <br>
                                                    Indonesia <br>
                                                    +(62) 0895-1425-3344
                                                </p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <i class="bi bi-envelope"></i>
                                            </div>
                                            <div class="text">
                                                <a href="mailto:contact@yourprivateeurope.eu"> contact@yourprivateeurope.eu</a>
                                            </div>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 d-flex justify-content-lg-center" style="margin-right:50px;">
                        <div class="footer-item">
                            <div id="nav_menu-2" class="destination-widget-item widget_nav_menu">
                                <div class="destination-widget-title">
                                    <h3><?= lang("text_homepage.quick_links") ?></h3>
                                </div>
                                <div class="menu-information-container">
                                    <ul id="menu-information" class="menu">
                                        <li id="menu-item-1932" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1932">
                                            <a href="/<?= $language ?>"><?= lang("text_homepage.home") ?></a>
                                        </li>

                                        <li id="menu-item-1935" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1935">
                                            <a href="/<?= $language ?>/<?= $language == 'id' ? 'destinasi' : 'destination' ?>"><?= lang("text_homepage.our_tours") ?></a>
                                        </li>
                                        <li id="menu-item-1936" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1936">
                                            <a href="/<?= $language ?>/<?= $language == 'id' ? 'tentang-kami' : 'about-us' ?>"><?= lang("text_homepage.about_us") ?></a>
                                        </li>
                                        <li id="menu-item-1936" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1936">
                                            <a href="/<?= $language ?>/<?= $language == 'id' ? 'hubungi-kami' : 'contact-us' ?>"><?= lang("text_homepage.contact_us") ?></a>
                                        </li>
                                        <li id="menu-item-1936" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1936">
                                            <a href="/<?= $language ?>/faq"><?= lang("text_homepage.help_center") ?></a>
                                        </li>
                                        <li id="menu-item-1936" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1936">
                                            <a href="/<?= $language ?>/corporate-and-travel-agent"><?= lang("text_homepage.corporate") ?></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 d-flex justify-content-lg-center" style="margin-right:50px;">
                        <div class="footer-item">
                            <div id="nav_menu-3" class="destination-widget-item widget_nav_menu">
                                <div class="destination-widget-title">
                                    <h3><?= lang("text_homepage.other_links") ?></h3>
                                </div>
                                <div class="menu-destination-container">
                                    <ul id="menu-destination" class="menu">
                                        <li id="menu-item-2370" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2370">
                                            <a href='/<?= $language ?>/<?= $language == 'id' ? 'footer/terms-conditions' : 'footer/terms-conditions' ?>'>
                                                <?= lang("text_homepage.terms") ?>
                                            </a>
                                        </li>
                                        <li id="menu-item-2370" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2370">
                                            <a href='/<?= $language ?>/<?= $language == 'id' ? 'footer/privacy-policy' : 'footer/privacy-policy' ?>'>
                                                <?= lang("text_homepage.privacy") ?>
                                            </a>
                                        </li>
                                        <li id="menu-item-2370" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2370">
                                            <a href='/<?= $language ?>/<?= $language == 'id' ? 'footer/disclaimer' : 'footer/disclaimer' ?>'>
                                                <?= lang("text_homepage.disclaimer") ?>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 d-flex justify-content-lg-end">
                        <div class="footer-item">
                            <div id="egens_contacts-3" class="destination-widget-item widget_egens_contacts">
                                <div class="destination-widget-title">
                                    <h3><?= strtoupper(lang("text_homepage.social_media")) ?></h3>
                                </div>
                                <ul class="contact-list">
                                    <li>
                                        <div class="icon">
                                            <i class="bi bi-instagram"></i>
                                        </div>
                                        <div class="text">
                                            <a href="https://www.instagram.com/yourprivateeurope/">@yourprivateeurope</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="bi bi-linkedin"></i>
                                        </div>
                                        <div class="text">
                                            <a href="https://www.linkedin.com/company/your-private-europe">Your Private Europe | Tour Organizer & DMC Europe</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="bi bi-facebook"></i>
                                        </div>
                                        <div class="text">
                                            <a href="https://www.facebook.com/yourprivateeurope/">yourprivateeurope</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="bi bi-youtube"></i>
                                        </div>
                                        <div class="text">
                                            <a href="https://www.youtube.com/@yourprivateeurope">@yourprivateeurope</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="bi bi-skype"></i>
                                        </div>
                                        <div class="text">
                                            <a href="skype:chris.suhartono?chat">Skype</a>
                                        </div>
                                    </li>
                                </ul>
                                <!-- Vertically aligned logo below the social media links -->
                                <div class="d-flex justify-content-center mt-3">

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="footer-bottom mt-80">
                <div class="row d-flex align-items-center g-3 justify-content-md-between">
                    <div class="col-md-6 d-flex justify-content-lg-start justify-content-center text-lg-start text-center">
                        <p>
                            Copyright 2024 <a href="#">Your Private Europe</a> | Design By
                            <a href="3">Your Private Europe</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script>
        (function() {
            function maybePrefixUrlField() {
                const value = this.value.trim();
                if (value !== "" && value.indexOf("http") !== 0) {
                    this.value = "http://" + value;
                }
            }

            const urlFields = document.querySelectorAll(
                '.mc4wp-form input[type="url"]'
            );
            for (let j = 0; j < urlFields.length; j++) {
                urlFields[j].addEventListener("blur", maybePrefixUrlField);
            }
        })();
    </script>
    <script type="text/javascript">
        (function() {
            var c = document.body.className;
            c = c.replace(/woocommerce-no-js/, "woocommerce-js");
            document.body.className = c;
        })();
    </script>
    <script src="<?= base_url('assets/js/index.js') ?>" id="swv-js"></script>
    <script id="contact-form-7-js-extra">
        var wpcf7 = {
            api: {
                root: "https:\/\/www.astrip-wp.egenslab.com\/wp-json\/",
                namespace: "contact-form-7\/v1",
            },
        };
    </script>
    <script src="<?= base_url('assets/js/index_1.js') ?>" id="contact-form-7-js"></script>
    <script src="<?= base_url('assets/js/imagesloaded.min.js') ?>" id="imagesloaded-js"></script>
    <script src="<?= base_url('assets/js/masonry.min.js') ?>" id="masonry-js"></script>
    <script src="<?= base_url('assets/js/jquery.masonry.min.js') ?>" id="jquery-masonry-js"></script>
    <script src="<?= base_url('assets/js/jquery-ui.js') ?>" id="jquery-ui-js"></script>
    <script src="<?= base_url('assets/js/bootstrap.bundle.min.js') ?>" id="bootstrap-js"></script>
    <script src="<?= base_url('assets/js/swiper-bundle.min.js') ?>" id="swiper-js"></script>
    <script src="<?= base_url('assets/js/isotope.pkgd.min.js') ?>" id="isotope-js"></script>
    <script src="<?= base_url('assets/js/slick.js') ?>" id="slick-js"></script>
    <script src="<?= base_url('assets/js/jquery.nice-select.js') ?>" id="nice-select-js"></script>
    <script src="<?= base_url('assets/js/odometer.min.js') ?>" id="odometer-js"></script>
    <script src="<?= base_url('assets/js/viewport.jquery.js') ?>" id="viewport-js"></script>
    <script src="<?= base_url('assets/js/jquery.magnific-popup.min.js') ?>" id="magnific-popup-js"></script>
    <script id="egns-main-js-extra">
        var egns_theme_options = {
            sticky_header_enable: "",
            animation_enable: "",
            is_cart: "",
            is_product: "",
            is_woocommerce: "1",
        };
        var egens_frontend_ajax_handler_params = {
            ajaxurl: "https:\/\/www.astrip-wp.egenslab.com\/wp-admin\/admin-ajax.php",
            posts: '{"error":"","m":"","p":"234","post_parent":"","subpost":"","subpost_id":"","attachment":"","attachment_id":0,"name":"","pagename":"","page_id":"234","second":"","minute":"","hour":"","day":0,"monthnum":0,"year":0,"w":0,"category_name":"","tag":"","cat":"","tag_id":"","author":"","author_name":"","feed":"","tb":"","paged":0,"meta_key":"","meta_value":"","preview":"","s":"","sentence":"","title":"","fields":"","menu_order":"","embed":"","category__in":[],"category__not_in":[],"category__and":[],"post__in":[],"post__not_in":[],"post_name__in":[],"tag__in":[],"tag__not_in":[],"tag__and":[],"tag_slug__in":[],"tag_slug__and":[],"post_parent__in":[],"post_parent__not_in":[],"author__in":[],"author__not_in":[],"search_columns":[],"ignore_sticky_posts":false,"suppress_filters":false,"cache_results":true,"update_post_term_cache":true,"update_menu_item_cache":false,"lazy_load_term_meta":true,"update_post_meta_cache":true,"post_type":"","posts_per_page":6,"nopaging":false,"comments_per_page":"50","no_found_rows":false,"order":"DESC"}',
            current_page: "1",
            max_page: "0",
            wp_date_format: "F j, Y",
            get_all_criteria: [{
                    criteria_item: "Overall"
                },
                {
                    criteria_item: "Accommodation"
                },
                {
                    criteria_item: "Transport"
                },
                {
                    criteria_item: "Food"
                },
                {
                    criteria_item: "Destination"
                },
            ],
            is_egns_core_enable: "1",
        };
    </script>
    <script src="<?= base_url('assets/js/main.js') ?>" id="egns-main-js"></script>
    <script defer="" src="<?= base_url('assets/js/forms.js') ?>" id="mc4wp-forms-api-js"></script>
    <script src="<?= base_url('assets/js/webpack.runtime.min.js') ?>" id="elementor-webpack-runtime-js"></script>
    <script src="<?= base_url('assets/js/frontend-modules.min.js') ?>" id="elementor-frontend-modules-js"></script>
    <script src="<?= base_url('assets/js/waypoints.min.js') ?>" id="elementor-waypoints-js"></script>
    <script src="<?= base_url('assets/js/core.min.js') ?>" id="jquery-ui-core-js"></script>
    <script id="elementor-frontend-js-before">
        var elementorFrontendConfig = {
            environmentMode: {
                edit: false,
                wpPreview: false,
                isScriptDebug: false,
            },
            i18n: {
                shareOnFacebook: "Share on Facebook",
                shareOnTwitter: "Share on Twitter",
                pinIt: "Pin it",
                download: "Download",
                downloadImage: "Download image",
                fullscreen: "Fullscreen",
                zoom: "Zoom",
                share: "Share",
                playVideo: "Play Video",
                previous: "Previous",
                next: "Next",
                close: "Close",
                a11yCarouselWrapperAriaLabel: "Carousel | Horizontal scrolling: Arrow Left & Right",
                a11yCarouselPrevSlideMessage: "Previous slide",
                a11yCarouselNextSlideMessage: "Next slide",
                a11yCarouselFirstSlideMessage: "This is the first slide",
                a11yCarouselLastSlideMessage: "This is the last slide",
                a11yCarouselPaginationBulletMessage: "Go to slide",
            },
            is_rtl: false,
            breakpoints: {
                xs: 0,
                sm: 480,
                md: 768,
                lg: 1025,
                xl: 1440,
                xxl: 1600
            },
            responsive: {
                breakpoints: {
                    mobile: {
                        label: "Mobile Portrait",
                        value: 767,
                        default_value: 767,
                        direction: "max",
                        is_enabled: true,
                    },
                    mobile_extra: {
                        label: "Mobile Landscape",
                        value: 880,
                        default_value: 880,
                        direction: "max",
                        is_enabled: false,
                    },
                    tablet: {
                        label: "Tablet Portrait",
                        value: 1024,
                        default_value: 1024,
                        direction: "max",
                        is_enabled: true,
                    },
                    tablet_extra: {
                        label: "Tablet Landscape",
                        value: 1200,
                        default_value: 1200,
                        direction: "max",
                        is_enabled: false,
                    },
                    laptop: {
                        label: "Laptop",
                        value: 1366,
                        default_value: 1366,
                        direction: "max",
                        is_enabled: false,
                    },
                    widescreen: {
                        label: "Widescreen",
                        value: 2400,
                        default_value: 2400,
                        direction: "min",
                        is_enabled: false,
                    },
                },
            },
            version: "3.17.3",
            is_static: false,
            experimentalFeatures: {
                e_dom_optimization: true,
                e_optimized_assets_loading: true,
                e_optimized_css_loading: true,
                additional_custom_breakpoints: true,
                "landing-pages": true,
            },
            urls: {
                assets: "https:\/\/www.astrip-wp.egenslab.com\/wp-content\/plugins\/elementor\/assets\/",
            },
            swiperClass: "swiper-container",
            settings: {
                page: [],
                editorPreferences: []
            },
            kit: {
                active_breakpoints: ["viewport_mobile", "viewport_tablet"],
                global_image_lightbox: "yes",
                lightbox_enable_counter: "yes",
                lightbox_enable_fullscreen: "yes",
                lightbox_enable_zoom: "yes",
                lightbox_enable_share: "yes",
                lightbox_title_src: "title",
                lightbox_description_src: "description",
            },
            post: {
                id: 234,
                title: "Astrip%20%E2%80%93%20Tour%20and%20Travel%20Agency%20WordPress%20Theme",
                excerpt: "",
                featuredImage: false,
            },
        };
    </script>
    <script src="<?= base_url('assets/js/frontend.min.js') ?>" id="elementor-frontend-js"></script>

    <!-- Start of HubSpot Embed Code -->
    <script type="text/javascript" id="hs-script-loader" async defer src="//js-eu1.hs-scripts.com/144464976.js"></script>
    <!-- End of HubSpot Embed Code -->
</body>

</html>