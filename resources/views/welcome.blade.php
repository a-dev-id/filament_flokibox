<!DOCTYPE html>
<html lang="en-US" class="js_active vc_desktop vc_transform vc_transform">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="https://get-reflect.com/xmlrpc.php" />

    <title>FLOKIBOX</title>
    <meta name="robots" content="max-image-preview:large" />
    <link rel="dns-prefetch" href="https://fonts.googleapis.com/" />
    <link rel="alternate" type="application/rss+xml" title="Get -REFLECT » Feed" href="https://get-reflect.com/feed/" />
    <link rel="alternate" type="application/rss+xml" title="Get -REFLECT » Comments Feed" href="https://get-reflect.com/comments/feed/" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>
    <script type="text/javascript">
        window._wpemojiSettings = {
            baseUrl: "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/72x72\/",
            ext: ".png",
            svgUrl: "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/svg\/",
            svgExt: ".svg",
            source: {
                concatemoji: "https:\/\/get-reflect.com\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.2",
            },
        };
        /*! This file is auto-generated */
        !(function(e, a, t) {
            var n,
                r,
                o,
                i = a.createElement("canvas"),
                p = i.getContext && i.getContext("2d");

            function s(e, t) {
                p.clearRect(0, 0, i.width, i.height), p.fillText(e, 0, 0);
                e = i.toDataURL();
                return (
                    p.clearRect(0, 0, i.width, i.height),
                    p.fillText(t, 0, 0),
                    e === i.toDataURL()
                );
            }

            function c(e) {
                var t = a.createElement("script");
                (t.src = e),
                (t.defer = t.type = "text/javascript"),
                a.getElementsByTagName("head")[0].appendChild(t);
            }
            for (
                o = Array("flag", "emoji"),
                t.supports = {
                    everything: !0,
                    everythingExceptFlag: !0
                },
                r = 0; r < o.length; r++
            )
                (t.supports[o[r]] = (function(e) {
                    if (p && p.fillText)
                        switch (
                            ((p.textBaseline = "top"), (p.font = "600 32px Arial"), e)
                        ) {
                            case "flag":
                                return s(
                                        "\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f",
                                        "\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f"
                                    ) ?
                                    !1 :
                                    !s(
                                        "\ud83c\uddfa\ud83c\uddf3",
                                        "\ud83c\uddfa\u200b\ud83c\uddf3"
                                    ) &&
                                    !s(
                                        "\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f",
                                        "\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f"
                                    );
                            case "emoji":
                                return !s(
                                    "\ud83e\udef1\ud83c\udffb\u200d\ud83e\udef2\ud83c\udfff",
                                    "\ud83e\udef1\ud83c\udffb\u200b\ud83e\udef2\ud83c\udfff"
                                );
                        }
                    return !1;
                })(o[r])),
                (t.supports.everything = t.supports.everything && t.supports[o[r]]),
                "flag" !== o[r] &&
                (t.supports.everythingExceptFlag =
                    t.supports.everythingExceptFlag && t.supports[o[r]]);
            (t.supports.everythingExceptFlag =
                t.supports.everythingExceptFlag && !t.supports.flag),
            (t.DOMReady = !1),
            (t.readyCallback = function() {
                t.DOMReady = !0;
            }),
            t.supports.everything ||
                ((n = function() {
                        t.readyCallback();
                    }),
                    a.addEventListener ?
                    (a.addEventListener("DOMContentLoaded", n, !1),
                        e.addEventListener("load", n, !1)) :
                    (e.attachEvent("onload", n),
                        a.attachEvent("onreadystatechange", function() {
                            "complete" === a.readyState && t.readyCallback();
                        })),
                    (e = t.source || {}).concatemoji ?
                    c(e.concatemoji) :
                    e.wpemoji && e.twemoji && (c(e.twemoji), c(e.wpemoji)));
        })(window, document, window._wpemojiSettings);
    </script>
    <script src="{{ asset('/') }}asset/wp-emoji-release.min.js.download" type="text/javascript" defer=""></script>
    <style type="text/css">
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


        /* custom */
        .banner.banner-curb.banner-particle {
            background: url('./images/header-bottom.png') bottom center no-repeat, url('./images/particle-left.png') top left no-repeat, url('./images/particle-right.png') top right no-repeat, {{ $page->header_bg_color }} !important;
            background-size: 100%, auto, auto, auto !important;
        }

        h1 span,
        h2 span,
        h3 span,
        h4 span,
        h5 span,
        h6 span,
        p span,
        .navbar .menu-top>li:hover>a,
        .navbar .navbar-nav .sub-menu li:hover>a,
        .widget-area .sidebar-widget ul li a:hover,
        .widget-area .sidebar-widget.widget_tag_cloud ul li a:hover,
        .post-content .blog-tags li a:hover,
        .blog-meta li a:hover,
        .theme-light .blog-meta li a:hover,
        .blog-texts .blog-title a:hover,
        .btn.btn-more {
            color: #fff !important;
        }

        .site-header.has-fixed .navbar {
            background: {{ $page->nav_bg_color }} !important;
        }

        h1.color-secondary,
        h2.color-secondary,
        h3.color-secondary,
        h4.color-secondary,
        h5.color-secondary,
        h6.color-secondary,
        .h1.color-secondary,
        .h2.color-secondary,
        .h3.color-secondary,
        .h4.color-secondary,
        .h5.color-secondary,
        .h6.color-secondary,
        p.color-secondary {
            color: #d1d1d1 !important;
        }

        .section-bg-blend {
            background-image: linear-gradient(to bottom, #ffffff 0%, {{ $page->section_one_bg_color }} 70%) !important;
        }

        .section-bg-alt {
            background: {{ $page->section_three_bg_color }} !important;
        }

        .section-bg {
            background: {{ $page->section_four_bg_color }} !important;
        }

        .comment-form .input-field label.input-title {
            color: #d1d1d1 !important;
        }

        .btn:before {
            background-image: -webkit-linear-gradient(left, {{ $page->section_four_bg_color }} 0%, {{ $page->section_one_bg_color }} 100%) !important;
            background-image: linear-gradient(to right, {{ $page->section_four_bg_color }} 0%, {{ $page->section_one_bg_color }} 100%) !important;
        }

        .btn.btn-outline:after {
            background: {{ $page->section_four_bg_color }} !important;
        }

        .btn {
            background: {{ $page->section_four_bg_color }} !important;
        }

        a:hover,
        a:focus,
        a:active {
            color: #d1d1d1 !important;
        }

        a {
            color: #fff !important;
        }

        .form-message .input-field .input-line,
        .comment-form .input-field .input-line {
            border-bottom-color: #fff !important;
        }

        .social li a {
            color: #3c3c3c !important;
            background: #fff;
        }

        .site-header .navbar-brand img {
            width: 85px !important;
        }

        .navbar .navbar-toggler {
            background-image: linear-gradient(to right, {{ $page->section_four_bg_color }} 0%, {{ $page->section_one_bg_color }} 100%) !important;
        }


        @media only screen and (max-width: 991px) {
            .ico-dark .site-header .navbar.is-transparent {
                background: {{ $page->nav_bg_color }} !important;

            }

            .site-header .navbar-brand img {
                width: 55px !important;
            }
        }

        body,
        body.theme-light,
        #wrapper .blog-section {
            background-color: #c1a973 !important;
        }

        .section-connect:before {
            background: #fff !important;
        }

        /* end custom */
    </style>
    <link rel="stylesheet" id="wp-block-library-css" href="{{ asset('/') }}asset/style.min.css" type="text/css" media="all" />
    <link rel="stylesheet" id="classic-theme-styles-css" href="{{ asset('/') }}asset/classic-themes.min.css" type="text/css" media="all" />
    <style id="global-styles-inline-css" type="text/css">
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
            --wp--preset--duotone--dark-grayscale: url("#wp-duotone-dark-grayscale");
            --wp--preset--duotone--grayscale: url("#wp-duotone-grayscale");
            --wp--preset--duotone--purple-yellow: url("#wp-duotone-purple-yellow");
            --wp--preset--duotone--blue-red: url("#wp-duotone-blue-red");
            --wp--preset--duotone--midnight: url("#wp-duotone-midnight");
            --wp--preset--duotone--magenta-yellow: url("#wp-duotone-magenta-yellow");
            --wp--preset--duotone--purple-green: url("#wp-duotone-purple-green");
            --wp--preset--duotone--blue-orange: url("#wp-duotone-blue-orange");
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

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
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

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        .wp-block-pullquote {
            font-size: 1.5em;
            line-height: 1.6;
        }
    </style>
    <link rel="stylesheet" id="contact-form-7-css" href="{{ asset('/') }}asset/styles.css" type="text/css" media="all" />
    <link rel="stylesheet" id="icos-fonts-css" href="{{ asset('/') }}asset/css" type="text/css" media="all" />
    <link rel="stylesheet" id="vc_font_awesome_5_shims-css" href="{{ asset('/') }}asset/v4-shims.min.css" type="text/css" media="all" />
    <link rel="stylesheet" id="vc_font_awesome_5-css" href="{{ asset('/') }}asset/all.min.css" type="text/css" media="all" />
    <link rel="stylesheet" id="vendor-css" href="{{ asset('/') }}asset/vendor.bundle.css" type="text/css" media="all" />
    <link rel="stylesheet" id="icos-style-css" href="{{ asset('/') }}asset/style.css" type="text/css" media="all" />
    <link rel="stylesheet" id="icos-lavender-css" href="{{ asset('/') }}asset/lavender.css" type="text/css" media="all" />
    <link rel="stylesheet" id="icos-muscari-css" href="{{ asset('/') }}asset/muscari.css" type="text/css" media="all" />
    <link rel="stylesheet" id="icos-lobelia-css" href="{{ asset('/') }}asset/lobelia.css" type="text/css" media="all" />
    <link rel="stylesheet" id="icos-jasmine-css" href="{{ asset('/') }}asset/jasmine.css" type="text/css" media="all" />
    <link rel="stylesheet" id="icos-lungwort-css" href="{{ asset('/') }}asset/lungwort.css" type="text/css" media="all" />
    <link rel="stylesheet" id="icos-salvia-css" href="{{ asset('/') }}asset/salvia.css" type="text/css" media="all" />
    <link rel="stylesheet" id="icos-zinnia-css" href="{{ asset('/') }}asset/zinnia.css" type="text/css" media="all" />
    <link rel="stylesheet" id="js_composer_front-css" href="{{ asset('/') }}asset/js_composer.min.css" type="text/css" media="all" />
    <script type="text/javascript" src="{{ asset('/') }}asset/jquery.min.js.download" id="jquery-core-js"></script>
    <script type="text/javascript" src="{{ asset('/') }}asset/jquery-migrate.min.js.download" id="jquery-migrate-js"></script>
    <link rel="https://api.w.org/" href="https://get-reflect.com/wp-json/" />
    <link rel="alternate" type="application/json" href="https://get-reflect.com/wp-json/wp/v2/pages/29" />
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://get-reflect.com/xmlrpc.php?rsd" />
    <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://get-reflect.com/wp-includes/wlwmanifest.xml" />
    <meta name="generator" content="WordPress 6.2" />
    <link rel="canonical" href="https://flokibox.com/" />
    <link rel="shortlink" href="https://flokibox.com/" />
    <link rel="alternate" type="application/json+oembed" href="https://get-reflect.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fget-reflect.com%2F" />
    <link rel="alternate" type="text/xml+oembed" href="https://get-reflect.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fget-reflect.com%2F&amp;format=xml" />
    <style type="text/css">
        h1.color-secondary,
        h2.color-secondary,
        h3.color-secondary,
        h4.color-secondary,
        h5.color-secondary,
        h6.color-secondary,
        .h1.color-secondary,
        .h2.color-secondary,
        .h3.color-secondary,
        .h4.color-secondary,
        .h5.color-secondary,
        .h6.color-secondary {
            color: #1e73be;
        }

        h1.color-primary,
        h2.color-primary,
        h3.color-primary,
        h4.color-primary,
        h5.color-primary,
        h6.color-primary,
        .h1.color-primary,
        .h2.color-primary,
        .h3.color-primary,
        .h4.color-primary,
        .h5.color-primary,
        .h6.color-primary {
            color: #71fbff;
        }

        .theme-light h1.color-secondary,
        .theme-light h2.color-secondary,
        .theme-light h3.color-secondary,
        .theme-light h4.color-secondary,
        .theme-light h5.color-secondary,
        .theme-light h6.color-secondary,
        .theme-light .h1.color-secondary,
        .theme-light .h2.color-secondary,
        .theme-light .h3.color-secondary,
        .theme-light .h4.color-secondary,
        .theme-light .h5.color-secondary,
        .theme-light .h6.color-secondary {
            color: #1e73be;
        }

        .theme-light h1.color-primary,
        .theme-light h2.color-primary,
        .theme-light h3.color-primary,
        .theme-light h4.color-primary,
        .theme-light h5.color-primary,
        .theme-light h6.color-primary,
        .theme-light .h1.color-primary,
        .theme-light .h2.color-primary,
        .theme-light .h3.color-primary,
        .theme-light .h4.color-primary,
        .theme-light .h5.color-primary,
        .theme-light .h6.color-primary {
            color: #71fbff;
        }

        h1.color-secondary,
        h2.color-secondary,
        h3.color-secondary,
        h4.color-secondary,
        h5.color-secondary,
        h6.color-secondary,
        .h1.color-secondary,
        .h2.color-secondary,
        .h3.color-secondary,
        .h4.color-secondary,
        .h5.color-secondary,
        .h6.color-secondary,
        p.color-secondary {
            color: #1e73be;
        }

        h1.color-primary,
        h2.color-primary,
        h3.color-primary,
        h4.color-primary,
        h5.color-primary,
        h6.color-primary,
        .h1.color-primary,
        .h2.color-primary,
        .h3.color-primary,
        .h4.color-primary,
        .h5.color-primary,
        .h6.color-primary,
        p.color-primary {
            color: #71fbff;
        }

        h1.color-alt-primary,
        h2.color-alt-primary,
        h3.color-alt-primary,
        h4.color-alt-primary,
        h5.color-alt-primary,
        h6.color-alt-primary,
        .h1.color-alt-primary,
        .h2.color-alt-primary,
        .h3.color-alt-primary,
        .h4.color-alt-primary,
        .h5.color-alt-primary,
        .h6.color-alt-primary,
        p.color-alt-primary {
            color: #0126aa;
        }

        h1 span,
        h2 span,
        h3 span,
        h4 span,
        h5 span,
        h6 span,
        p span,
        .navbar .menu-top>li:hover>a,
        .navbar .navbar-nav .sub-menu li:hover>a,
        .widget-area .sidebar-widget ul li a:hover,
        .widget-area .sidebar-widget.widget_tag_cloud ul li a:hover,
        .post-content .blog-tags li a:hover,
        .blog-meta li a:hover,
        .theme-light .blog-meta li a:hover,
        .blog-texts .blog-title a:hover,
        .btn.btn-more {
            color: #71fbff;
        }

        a {
            color: #71fbff;
        }

        a:hover,
        a:focus,
        a:active {
            color: #1e73be;
        }

        .theme-dark h1.color-secondary,
        .theme-dark h2.color-secondary,
        .theme-dark h3.color-secondary,
        .theme-dark h4.color-secondary,
        .theme-dark h5.color-secondary,
        .theme-dark h6.color-secondary,
        .theme-dark blockquote.color-secondary,
        .light h1.color-secondary,
        .light h2.color-secondary,
        .light h3.color-secondary,
        .light h4.color-secondary,
        .light h5.color-secondary,
        .light h6.color-secondary,
        .light blockquote.color-secondary {
            color: #1e73be;
        }

        .theme-dark h1.color-primary,
        .theme-dark h2.color-primary,
        .theme-dark h3.color-primary,
        .theme-dark h4.color-primary,
        .theme-dark h5.color-primary,
        .theme-dark h6.color-primary,
        .theme-dark blockquote.color-primary,
        .light h1.color-primary,
        .light h2.color-primary,
        .light h3.color-primary,
        .light h4.color-primary,
        .light h5.color-primary,
        .light h6.color-primary,
        .light blockquote.color-primary {
            color: #71fbff;
        }

        .theme-dark h1.color-alt-primary,
        .theme-dark h2.color-alt-primary,
        .theme-dark h3.color-alt-primary,
        .theme-dark h4.color-alt-primary,
        .theme-dark h5.color-alt-primary,
        .theme-dark h6.color-alt-primary,
        .theme-dark blockquote.color-alt-primary,
        .light h1.color-alt-primary,
        .light h2.color-alt-primary,
        .light h3.color-alt-primary,
        .light h4.color-alt-primary,
        .light h5.color-alt-primary,
        .light h6.color-alt-primary,
        .light blockquote.color-alt-primary {
            color: #0126aa;
        }

        .color-primary {
            color: #71fbff;
        }

        .color-secondary {
            color: #1e73be;
        }

        .bg-primary {
            background: #71fbff;
        }

        .bg-secondary {
            background: #1e73be;
        }

        .bg-light-primary,
        .search-form button {
            background-color: rgba(170, 170, 170, 0.1);
        }

        .search-form button:hover {
            background-color: rgba(170, 170, 170, 0.3);
        }

        .search-form input[type="text"] {
            border-color: rgba(170, 170, 170, 0.1);
        }

        .select2-container--default .select2-selection--single {
            background-color: rgba(170, 170, 170, 0.1);
        }

        .select2-container--default .select2-results__option--highlighted[aria-selected] {
            background-color: rgba(170, 170, 170, 0.2);
        }

        .select2-container--default .select2-results__option[aria-selected="true"] {
            background-color: rgba(170, 170, 170, 0.3);
        }

        .theme-light .select2-dropdown {
            background: #eee;
        }

        .theme-light .select2-container--default .select2-selection--single {
            background-color: rgba(170, 170, 170, 0.1);
        }

        .theme-light .select2-container--default .select2-results__option--highlighted[aria-selected] {
            background-color: rgba(170, 170, 170, 0.2);
        }

        .theme-light .select2-container--default .select2-results__option[aria-selected="true"] {
            background-color: rgba(170, 170, 170, 0.3);
        }

        .bg-light-secondary {
            background-color: rgba(122, 15, 255, 0.1);
        }

        .tab-custom .nav-tabs li>a:hover {
            color: #71fbff;
        }

        .tab-custom .nav-tabs li>a.active,
        .tab-custom .nav-tabs li>a.active:hover,
        .tab-custom .nav-tabs li>a.active:focus,
        .tab-custom .nav-tabs li>a.active:hover,
        .tab-custom .nav-tabs li>a.active:focus,
        .wpb-js-composer div.vc_tta-color-grey.vc_tta-style-classic.vc_tta-tabs-position-top .vc_tta-tab.vc_active>a,
        .wpb-js-composer div.vc_tta-tabs:not([class*="vc_tta-gap"]):not(.vc_tta-o-no-fill).vc_tta-tabs-position-top .vc_tta-tab.vc_active>a {
            border-bottom-color: #71fbff;
        }

        .theme-dark .tab-custom .nav-tabs li>a:hover,
        .vc_toggle_size_md.vc_toggle_arrow .vc_toggle_icon,
        .wpb-js-composer div.vc_tta-color-grey.vc_tta-style-classic.vc_tta-tabs-position-top .vc_tta-tab:not(.vc_active)>a:hover {
            color: #71fbff;
        }

        .theme-light .tab-custom .nav-tabs li>a:hover,
        .comment-time,
        .theme-light .ml-auto a:hover,
        p.logged-in-as {
            color: #71fbff;
        }

        .pagination li.active a {
            background: #71fbff;
            border-color: #71fbff;
        }

        .pagination li a {
            color: #71fbff;
        }

        .pagination li a:hover,
        .pagination li a:focus {
            color: #fff;
            background: #71fbff;
            border-color: #71fbff;
        }

        .navbar .navbar-nav>li>a.nav-link.active {
            color: #71fbff;
        }

        .navbar .navbar-nav .dropdown-menu .dropdown-item:hover,
        .navbar .navbar-nav .dropdown-menu .dropdown-item:focus,
        .navbar .navbar-nav .dropdown-menu .dropdown-item.active {
            color: #71fbff;
        }

        .navbar .navbar-nav .dropdown-menu li:hover>a {
            color: #71fbff;
        }

        .navbar .navbar-nav .dropdown-menu li:hover.has-children:after {
            border-left-color: #71fbff;
        }

        .navbar .navbar-nav .dropdown-menu.active>a,
        .navbar .navbar-nav .dropdown-menu li>a:hover,
        .navbar .navbar-nav .dropdown-menu li>a:focus {
            color: #71fbff;
        }

        .navbar .navbar-nav .dropdown-menu>.active>a,
        .navbar .navbar-nav .dropdown-menu>.active>a:focus,
        .navbar .navbar-nav .dropdown-menu>.active>a:hover {
            color: #71fbff;
        }

        .theme-dark .navbar .navbar-nav .dropdown-menu .dropdown-item:hover,
        .theme-dark .navbar .navbar-nav .dropdown-menu .dropdown-item:focus,
        .theme-dark .navbar .navbar-nav .dropdown-menu .dropdown-item.active {
            color: #71fbff;
        }

        .theme-light .navbar .navbar-nav .dropdown-menu .dropdown-item:hover,
        .theme-light .navbar .navbar-nav .dropdown-menu .dropdown-item:focus,
        .theme-light .navbar .navbar-nav .dropdown-menu .dropdown-item.active {
            color: #71fbff;
        }

        >li .theme-dark .site-header .navbar-nav:hover a {
            color: #71fbff;
        }

        .theme-light .navbar-nav>li:hover>a {
            color: #71fbff;
        }

        .navbar .navbar-toggler {
            background: linear-gradient(to right, #0126aa 0%, #71fbff 100%);
        }

        .navbar .navbar-toggler:hover,
        .navbar .navbar-toggler:focus {
            background: linear-gradient(to right, #71fbff 0%, #0126aa 100%);
        }

        .btn {
            background-image: -webkit-linear-gradient(left,
                    #0126aa 0%,
                    #71fbff 100%);
            background-image: linear-gradient(to right, #0126aa 0%, #71fbff 100%);
        }

        .btn:before {
            background-image: -webkit-linear-gradient(left,
                    #71fbff 0%,
                    #0126aa 100%);
            background-image: linear-gradient(to right, #71fbff 0%, #0126aa 100%);
        }

        .btn.btn-alt,
        .io-azure .countdown-box .btn.btn-alt,
        .io-azure .banner-tokensale .countdown-box .btn.btn-alt {
            background-image: -webkit-linear-gradient(left,
                    #1e73be 0%,
                    #71fbff 100%);
            background-image: linear-gradient(to right, #1e73be 0%, #71fbff 100%);
        }

        .btn.btn-alt:before,
        .io-azure .countdown-box .btn.btn-alt:before,
        .io-azure .banner-tokensale .countdown-box .btn.btn-alt:before {
            background-image: -webkit-linear-gradient(left,
                    #71fbff 0%,
                    #1e73be 100%);
            background-image: linear-gradient(to right, #71fbff 0%, #1e73be 100%);
        }

        .btn.btn-plane {
            background: #1e73be;
        }

        .play-btn .play {
            background-image: linear-gradient(to right, #0126aa 0%, #71fbff 100%);
        }

        .play-btn .play>span {
            background-image: linear-gradient(to right, #0126aa 0%, #71fbff 100%);
        }

        .play-btn>span:last-of-type {
            color: #1e73be;
        }

        .play-btn-alt .fa {
            background: linear-gradient(to right, #0126aa 0%, #71fbff 100%);
        }

        .text-block ul:not(.btns) li:before {
            background: #71fbff;
        }

        .section-head .section-title span,
        .section-head .section-title:before {
            color: #1e73be;
            opacity: 0.06;
        }

        .heading-animation {
            border-top-color: #0126aa;
            border-left-color: #0126aa;
        }

        .heading-animation:before {
            border-top-color: #0126aa;
            border-lef-colort: #0126aa;
        }

        .heading-animation:after {
            border-top-color: #0126aa;
            border-left-color: #0126aa;
        }

        .heading-animation span:first-of-type {
            border-top-color: #0126aa;
            border-left-color: #0126aa;
        }

        .heading-animation span:first-of-type:before {
            border-top-color: #0126aa;
            border-left-color: #0126aa;
        }

        .heading-animation span:first-of-type:after {
            border-top-color: #0126aa;
            border-left-color: #0126aa;
        }

        .heading-animation span:last-of-type {
            border-top-color: #0126aa;
            border-left-color: #0126aa;
        }

        .heading-animation span:last-of-type:before {
            border-top-color: #0126aa;
            border-left-color: #0126aa;
        }

        .heading-animation span:last-of-type:after {
            border-top-color: #0126aa;
            border-left-color: #0126aa;
        }

        .section-connect:before {
            background: linear-gradient(to right, #0126aa 0%, #71fbff 100%);
        }

        .event-info:before,
        .event-info .event-single-info:before {
            background: #71fbff;
        }

        .countdown-box .token-countdown .countdown-text {
            color: #71fbff;
        }

        .countdown-box.countdown-header:after,
        .countdown-box.countdown-header:before,
        .countdown-box.countdown-header .extra-line,
        .countdown-box.countdown-header .extra-line:after {
            border-color: #1e73be;
        }

        .countdown-box.countdown-header:after,
        .countdown-box.countdown-header:before,
        .countdown-box.countdown-header .extra-line {
            opacity: 0.4;
        }

        .theme-light .countdown-box.countdown-header:after,
        .theme-light .countdown-box.countdown-header:before,
        .theme-light .countdown-box.countdown-header .extra-line,
        .section-light .countdown-box.countdown-header:after,
        .section-light .countdown-box.countdown-header:before,
        .section-light .countdown-box.countdown-header .extra-line {
            opacity: 0.1;
        }

        .roadmap-list:after {
            background: #1e73be;
        }

        .roadmap-list .single-roadmap:before {
            background-image: -webkit-linear-gradient(top,
                    #71fbff 0%,
                    #1e73be 100%);
            background-image: linear-gradient(top, #71fbff 0%, #1e73be 100%);
        }

        .roadmap-list .single-roadmap:after {
            background: #71fbff;
        }

        .roadmap-list .single-roadmap.roadmap-done:after {
            border-color: #71fbff;
        }

        .roadmap-list .single-roadmap.roadmap-down:before {
            background-image: -webkit-linear-gradient(top,
                    #1e73be 0%,
                    #71fbff 100%);
            background-image: linear-gradient(top, #1e73be 0%, #71fbff 100%);
        }

        .single-roadmap-alt:before {
            background-image: linear-gradient(to right,
                    transparent 0%,
                    #1e73be 50%,
                    #1e73be 100%);
        }

        .single-roadmap-alt:after {
            border: 1px solid #1e73be;
        }

        .single-roadmap-alt.sec-pri:before {
            background-image: linear-gradient(to right, #1e73be 0%, #71fbff 100%);
        }

        .single-roadmap-alt.sec-pri:after {
            border-color: #71fbff;
        }

        .single-roadmap-alt.sec-pri h5:before,
        .single-roadmap-alt.sec-pri h6:before {
            background: #71fbff;
        }

        .single-roadmap-alt.pri-sec:before {
            background-image: linear-gradient(to right, #71fbff 0%, #1e73be 100%);
        }

        .single-roadmap-alt.pri-sec:after {
            border-color: #1e73be;
        }

        .single-roadmap-alt.pri-sec h5:before,
        .single-roadmap-alt.pri-sec h6:before {
            background: #1e73be;
        }

        .single-roadmap-alt.sec-prialt:before {
            background-image: linear-gradient(to right, #1e73be 0%, #0126aa 100%);
        }

        .single-roadmap-alt.sec-prialt:after {
            border-color: #0126aa;
        }

        .single-roadmap-alt.sec-prialt h5:before,
        .single-roadmap-alt.sec-prialt h6:before {
            background: #0126aa;
        }

        .single-roadmap-alt.prialt-pri:before {
            background-image: linear-gradient(to right, #0126aa 0%, #71fbff 100%);
        }

        .single-roadmap-alt.prialt-pri:after {
            border-color: #71fbff;
        }

        .single-roadmap-alt.prialt-pri h5:before,
        .single-roadmap-alt.prialt-pri h6:before {
            background: #71fbff;
        }

        .single-roadmap-alt.pri-last:before {
            background-image: linear-gradient(to left,
                    transparent 0%,
                    #71fbff 50%,
                    #71fbff 100%);
        }

        .single-roadmap-alt h5:before,
        .single-roadmap-alt h6:before {
            background: #1e73be;
        }

        .team-member .team-photo:after {
            background-image: -webkit- linear-gradient(to right, #0126aa 0%, #71fbff 100%);
            background-image: linear-gradient(to right, #0126aa 0%, #71fbff 100%);
        }

        .team-member .team-title {
            color: #71fbff;
        }

        .team-member .team-social li a {
            color: #1e73be;
        }

        .team-hex .team-info:before {
            background-image: -webkit- linear-gradient(to right, #0126aa 0%, #71fbff 100%);
            background-image: linear-gradient(to right, #0126aa 0%, #71fbff 100%);
        }

        .team-hex .team-title {
            color: #1e73be;
        }

        .team-described .team-title:after {
            background-image: -webkit- linear-gradient(to right, #1e73be 0%, #71fbff 100%);
            background-image: linear-gradient(to right, #1e73be 0%, #71fbff 100%);
        }

        .team-described .team-social li a {
            color: #1e73be;
        }

        .team-described .team-discription li:before,
        .sidebar-widget.widget_categories ul li:before {
            background: #71fbff;
        }

        .team-circle .team-photo:before {
            background-image: linear-gradient(to top, #0126aa 0%, #71fbff 100%);
        }

        .team-circle .team-title,
        .theme-light .blog-meta li a,
        .theme-light .blog-meta li {
            color: #1e73be;
        }

        .skill-bar-percent {
            background-image: linear-gradient(to right, #71fbff 0%, #1e73be 100%);
        }

        .bg-team-exp.mfp-bg {
            background-image: linear-gradient(to right, #71fbff 0%, #1e73be 100%);
        }

        .contact-info li .fa {
            background-image: -webkit- linear-gradient(to right, #0126aa 0%, #71fbff 100%);
            background-image: linear-gradient(to right, #0126aa 0%, #71fbff 100%);
        }

        .form-message .input-field .input-line,
        .comment-form .input-field .input-line {
            border-bottom-color: #71fbff;
        }

        .social li a:hover,
        .page-pagination li a:hover:after,
        .page-pagination li span:after,
        .wpb-js-composer .vc_tta.vc_general.vc_tta-tabs-position-top .vc_tta-tabs-list:after,
        .theme-light .blog-meta li:after {
            background: #1e73be;
        }

        .theme-light .blog-meta li:after {
            opacity: 0.3;
        }

        .theme-light .search-form input[type="text"] {
            border-color: rgba(40, 56, 76, 0.6);
        }

        .theme-light .search-form button {
            background-color: rgba(40, 56, 76, 0.8);
        }

        .theme-light .search-form button:hover {
            background-color: rgba(40, 56, 76, 1);
        }

        .theme-lavendar .blog-meta li:after {
            opacity: 0.3;
        }

        .theme-lavendar .search-form input[type="text"] {
            border-color: rgba(40, 56, 76, 0.6);
        }

        .theme-lavendar .search-form button {
            background-color: rgba(40, 56, 76, 0.8);
        }

        .theme-lavendar .search-form button:hover {
            background-color: rgba(40, 56, 76, 1);
        }

        .theme-muscari .blog-meta li:after {
            opacity: 0.3;
        }

        .theme-muscari .search-form input[type="text"] {
            border-color: rgba(40, 56, 76, 0.6);
        }

        .theme-muscari .search-form button {
            background-color: rgba(40, 56, 76, 0.8);
        }

        .theme-muscari .search-form button:hover {
            background-color: rgba(40, 56, 76, 1);
        }

        .sidebar-widget.widget_tag_cloud ul li a,
        .blog-tags li a {
            border-color: rgba(255, 255, 255, 0.4);
        }

        .theme-light .sidebar-widget.widget_tag_cloud ul li a,
        .theme-light .blog-tags li a,
        .theme-lavendar .sidebar-widget.widget_tag_cloud ul li a,
        .theme-lavendar .blog-tags li a,
        .theme-muscari .sidebar-widget.widget_tag_cloud ul li a,
        .theme-muscari .blog-tags li a {
            border-color: rgba(40, 56, 76, 0.4);
        }

        .sidebar-widget.widget_tag_cloud ul li a:hover,
        .post-content .blog-tags li a:hover {
            border-color: #71fbff;
        }

        .blog-photo a:after {
            background: linear-gradient(to right, #71fbff 0%, #1e73be 100%);
        }

        #loader {
            border-top-color: #71fbff;
        }

        #loader:after {
            border-top-color: #0126aa;
        }

        #loader:before {
            border-top-color: #1e73be;
        }

        .io-azure .blog-meta li,
        .io-azure .blog-meta li a,
        .io-azure .page-pagination li a,
        .switcher-top .wpml-ls-legacy-dropdown a:hover,
        .slanguage .sub-menu li a:hover,
        .io-azure .copyright-text a:hover,
        .btn.btn-simple .fa,
        .btn.btn-simple .ti,
        .section-pro .roadmap-list-alt .owl-prev .ti,
        .section-pro .roadmap-list-alt .owl-next .ti,
        .section-pro-alt .roadmap-list-alt .owl-prev .ti,
        .section-pro-alt .roadmap-list-alt .owl-next .ti,
        .section-pro .contact-info-alt li .fa {
            color: #71fbff;
        }

        .io-lungwort #back-to-top,
        #back-to-top,
        .footer-widget .btn.btn-plane {
            background: #71fbff;
            color: #fff;
        }

        .io-lungwort #back-to-top:hover,
        #back-to-top:hover {
            background: #1e73be;
        }

        .single-roadmap-alt.gradiant-ctob:before {
            background-image: linear-gradient(to right, #0126aa 0%, #1e73be 100%);
        }

        .single-roadmap-alt.gradiant-ctob:after {
            border-color: #1e73be;
        }

        .single-roadmap-alt.gradiant-ctob h5:before,
        .single-roadmap-alt.gradiant-ctob h6:before {
            background: #1e73be;
        }

        .single-roadmap-alt.gradiant-btoa:before {
            background-image: linear-gradient(to right, #1e73be 0%, #71fbff 100%);
        }

        .single-roadmap-alt.gradiant-btoa:after {
            border-color: #71fbff;
        }

        .single-roadmap-alt.gradiant-btoa h5:before,
        .single-roadmap-alt.gradiant-btoa h6:before {
            background: #71fbff;
        }

        .single-roadmap-alt.gradiant-atob:before {
            background-image: linear-gradient(to right, #71fbff 0%, #1e73be 100%);
        }

        .single-roadmap-alt.gradiant-atob:after {
            border-color: #1e73be;
        }

        .single-roadmap-alt.gradiant-atob h5:before,
        .single-roadmap-alt.gradiant-atob h6:before {
            background: #1e73be;
        }

        .single-roadmap-alt.gradiant-btoc:before {
            background-image: linear-gradient(to right, #1e73be 0%, #0126aa 100%);
        }

        .single-roadmap-alt.gradiant-btoc:after {
            border-color: #0126aa;
        }

        .single-roadmap-alt.gradiant-btoc h5:before,
        .single-roadmap-alt.gradiant-btoc h6:before {
            background: #0126aa;
        }

        .single-roadmap-alt.gradiant-ctoa:before {
            background-image: linear-gradient(to right, #0126aa 0%, #71fbff 100%);
        }

        .single-roadmap-alt.gradiant-ctoa:after {
            border-color: #71fbff;
        }

        .single-roadmap-alt.gradiant-ctoa h5:before,
        .single-roadmap-alt.gradiant-ctoa h6:before {
            background: #71fbff;
        }

        .single-roadmap-alt.gradiant-atoc:before {
            background-image: linear-gradient(to right, #71fbff 0%, #0126aa 100%);
        }

        .single-roadmap-alt.gradiant-atoc:after {
            border-color: #0126aa;
        }

        .single-roadmap-alt.gradiant-atoc h5:before,
        .single-roadmap-alt.gradiant-atoc h6:before {
            background: #0126aa;
        }

        .single-roadmap-alt h5:before,
        .single-roadmap-alt h6:before {
            background: #1e73be;
        }

        .contact-info-alt li .fa {
            background: linear-gradient(to right, #0126aa 0%, #71fbff 100%);
        }

        .token-status-percent,
        .io-azure .banner-tokensale .token-status-percent {
            background: linear-gradient(to right, #71fbff 0%, #0126aa 100%);
        }

        .io-azure .token-status-percent {
            background: #0126aa;
        }

        /*Lavendar*/
        .token-bar {
            background: #f5f5f5;
        }

        .about-info {
            background: rgba(0, 0, 0, 0.2);
        }

        .roadmap-carousel:before,
        .roadmap-carousel:after {
            background: #bfbfcf !important;
        }

        .roadmap-carousel-container:before {
            opacity: 0.4;
            background: #8484a4 !important;
        }

        .theme-light .mc4wp-form .input-round,
        .theme-lavendar .mc4wp-form .input-round {
            background: rgba(255, 255, 255, 0.4);
            border: none;
            color: #28384c;
        }

        .section-head-s3 .section-title:before,
        .banner-rounded-bg,
        .footer-lavendar,
        .section-bg-lavendar,
        .about-section-innr:after,
        .about-section-innr:before,
        .token-percent,
        .theme-lavendar .btn,
        .theme-lavendar .btn.btn-alt,
        .theme-lavendar .site-header.has-fixed .btn,
        .theme-lavendar .btn.btn-plane:hover,
        .theme-lavendar .page-banner,
        .roadmap-item h6:after,
        .roadmap-item h6:before,
        .owl-carousel .owl-dot.active,
        .owl-carousel .owl-dot {
            background: #71fbff;
        }

        .token-box .token-countdown .countdown-time,
        .token-box .token-countdown .countdown-time:after,
        .theme-lavendar .btn.btn-simple .fa,
        .theme-lavendar .navbar-btns .btn,
        .token-box .icon-list li .fa,
        .token-box .icon-list li .fab,
        .section-bg-light .accordion .plus-minus .ti,
        .social-bar li a,
        .blog-section .blog-meta li a:hover,
        .theme-lavendar .mc4wp-form .btn.btn-plane:hover,
        .text-light .small-heading,
        [class*="section-bg-light"] .small-heading,
        .wpb-js-composer.theme-lavendar div.vc_tta-color-grey.vc_tta-style-classic.vc_tta-tabs-position-top.tab-custom-s2 .vc_tta-tab.vc_active>a {
            color: #71fbff;
        }

        .wpb-js-composer.theme-muscari div.vc_tta-color-grey.vc_tta-style-classic.vc_tta-tabs-position-top.tab-custom-s2 .vc_tta-tab.vc_active>a {
            border-color: #71fbff;
        }

        .warnning-badge,
        .theme-lavendar .btn-alt:hover,
        .theme-lavendar .site-header.has-fixed .btn:hover,
        .theme-lavendar .navbar-btns .btn:hover,
        .features-item>em,
        .sidebar .cta-widget,
        .roadmap-done h6:after,
        .roadmap-done h6:before,
        .theme-lavendar .team-member .team-photo:after,
        .theme-lavendar .mc4wp-form .btn.btn-plane:hover {
            background: #1e73be;
        }

        .cta-widget .btn.btn-plane,
        .team-described .team-title,
        .about-info .ti,
        .about-info .fa,
        .theme-lavendar .blog-meta li a,
        .theme-lavendar .blog-meta li,
        .theme-muscari .blog-meta li a,
        .theme-muscari .blog-meta li {
            color: #1e73be;
        }

        /*Muscari*/

        .roadmap-carousel-withnav:before,
        .roadmap-carousel-withnav:after {
            background: #bfbfcf !important;
        }

        .theme-muscari .btn.btn-outline:hover,
        .theme-muscari .footer-widget .btn.btn-plane:hover {
            color: #fff;
        }

        .theme-muscari .mc4wp-form .input-round {
            background: rgba(255, 255, 255, 0.4);
        }

        .theme-muscari .banner-content .countdown-box {
            background: rgba(0, 0, 0, 0.8);
        }

        .theme-muscari .btn.btn-simple .fa,
        .theme-muscari .text-box h6,
        .theme-muscari .btns .fa {
            color: #1e73be;
        }

        .theme-muscari .btn.btn-outline {
            border-color: #1e73be;
        }

        .theme-muscari .btn.btn-alt,
        .theme-muscari .countdown-box .btn.btn-alt:hover,
        .theme-muscari .btn.btn-outline:hover,
        .theme-muscari .roadmap-item h6:before,
        .theme-muscari .roadmap-item h6:after,
        .theme-muscari .token-status-percent,
        .section-bg-muscari .section-head-s5 .section-title:after,
        .theme-muscari .team-member .team-photo:after,
        .theme-muscari .btn:hover {
            background: #1e73be;
        }

        .theme-muscari .site-header.has-fixed .navbar .btn.btn-outline,
        .roadmap-carousel-withnav .owl-prev,
        .roadmap-carousel-withnav .owl-next,
        .contact-info-alt li .fa,
        .theme-muscari .footer-widget .btn.btn-plane,
        .wpb-js-composer.theme-muscari div.vc_tta-color-grey.vc_tta-style-classic.vc_tta-tabs-position-top.tab-custom-s2 .vc_tta-tab.vc_active>a {
            color: #71fbff;
        }

        .theme-muscari .site-header.has-fixed .navbar .btn.btn-outline,
        .wpb-js-composer.theme-muscari div.vc_tta-color-grey.vc_tta-style-classic.vc_tta-tabs-position-top.tab-custom-s2 .vc_tta-tab.vc_active>a {
            border-color: #71fbff;
        }

        .banner .section-bg-angle,
        .section-bg-muscari .section-bg-angle,
        .theme-muscari .section-muscari,
        .theme-muscari .footer-section,
        .theme-muscari .site-header.has-fixed .navbar .btn.btn-outline:hover,
        .theme-muscari .btn.btn-alt:hover,
        .theme-muscari .countdown-box,
        .section-head-s5 .section-title:after,
        .theme-muscari .roadmap-done h6:before,
        .theme-muscari .roadmap-done h6:after,
        .contact-info-alt li .fa,
        .theme-muscari .btn {
            background: #71fbff;
        }

        .io-azure .page-error:before {
            background-image: linear-gradient(-225deg,
                    #71fbff 0%,
                    rgba(9, 109, 223, 0) 100%);
        }

        .io-mascari .footer-small .copyright-text a {
            color: #71fbff;
        }

        /*Lobelia*/
        .problem-item ul li:before,
        .timeline-content:before {
            background: #71fbff;
        }

        .play-btn-s2,
        .play-icon,
        .features-icon-s2 {
            background-image: linear-gradient(to right, #0126aa 0%, #71fbff 100%);
        }

        .timeline-list:before {
            background: linear-gradient(to bottom, #71fbff 0%, #1e73be 100%);
        }

        .text-block ol li:before,
        .timeline-content h6,
        .team-circle-social li a,
        .io-lobelia .sub-heading {
            color: #71fbff;
        }

        .timeline-content:before {
            border-color: #71fbff;
        }

        /*Jasmine*/
        .io-jasmine .btn,
        .io-lungwort .btn,
        .io-lungwort button.btn.btn-plane,
        .io-jasmine .countdown-box .btn,
        .io-lungwort .countdown-box .btn,
        .io-jasmine .btn.btn-plane:before,
        .io-jasmine .text-block ul:not(.btns) li:before,
        .io-lungwort .text-block ul:not(.btns) li:before,
        .subscribe-box {
            background-image: linear-gradient(to right, #0126aa 0%, #71fbff 100%);
        }

        .btn-icon-s2 .ti,
        .io-lungwort .btn-icon-s2 .ti,
        .rating-title,
        .heading-sm-s2:before,
        .io-lungwort .heading-sm-s2:before,
        .features-subtitle-s3:after,
        .features-action,
        .io-jasmine .btn-outline:hover,
        .token-stage-title,
        .timeline-item:before,
        .timeline-item:after,
        .io-lungwort .timeline-item:before,
        .io-lungwort .timeline-item:after,
        .io-lungwort .timeline-date:after,
        .io-lungwort .timeline-date:before,
        .footer-jasmine .social li a,
        .footer-lungwort .social li a,
        .io-lungwort .page-pagination li a:after,
        .io-jasmine .site-header .navbar-btns>li>a:hover,
        .io-jasmine .site-header .navbar-btns>li>a.active {
            background: #71fbff;
        }

        .token-stage-pre {
            opacity: 0.8;
        }

        .btn-icon-s2,
        .io-lungwort .btn-icon-s2,
        .io-jasmine .heading-sm-s2,
        .io-lungwort .heading-sm-s2,
        .token-stage-bonus,
        .token-details-info,
        .io-lungwort .token-stage-bonus,
        .io-lungwort .token-details-info,
        .team-circle-des span,
        .io-lungwort .team-circle-des span,
        .io-lungwort .team-circle-social li a,
        .accordion-s2 .card-header a,
        .accordion-s2 .plus-minus .ti,
        .accordion-s2 .card-header a:hover,
        .io-lungwort .accordion-s2 .card-header a,
        .io-lungwort .accordion-s2 .plus-minus .ti,
        .io-lungwort .accordion-s2 .card-header a:hover,
        .io-lungwort .accordion-s2 .collapsed .plus-minus .ti,
        .io-jasmine .contact-info-alt li .fa,
        .banner-lungwort .countdown-box .token-countdown .countdown-text,
        .io-lungwort .timeline-date,
        .wpb-js-composer div.vc_tta-color-grey.vc_tta-style-classic.vc_tta-tabs-position-top.tab-custom-s3 .vc_tta-tab.vc_active>a {
            color: #71fbff;
        }

        .io-jasmine .btn:before,
        .io-jasmine .countdown-box .btn:before,
        .io-lungwort .btn:before,
        .io-lungwort .countdown-box .btn:before {
            background-image: linear-gradient(to right, #71fbff 0%, #0126aa 100%);
        }

        .io-jasmine .btn-outline,
        .io-jasmine .contact-info-alt li .fa,
        .io-lungwort .contact-info-alt li .fa,
        .timeline-row-done:after,
        .io-lungwort .timeline-row-done:after,
        .io-lungwort .timeline-title:before,
        .io-lungwort .timeline-row:after,
        .io-lungwort .timeline-row:before {
            border-color: #71fbff;
        }

        /*Salvia*/
        .theme-salvia .navbar .navbar-toggler,
        .theme-salvia .navbar-btns li .btn,
        .theme-salvia .search-form button,
        .theme-salvia .search-form button:hover,
        .theme-salvia .btn,
        .theme-salvia .btn.btn-outline:hover,
        .social-link-exp li a:hover [class*="fa-"],
        .document-link,
        .team-sprofile li a,
        .theme-salvia .contact-info-alt li .fa {
            background: #71fbff;
        }

        .theme-salvia .contact-info-alt li .fa {
            box-shadow: none;
        }

        .theme-salvia .navbar-btns li .btn,
        .theme-salvia .sidebar-widget.widget_tag_cloud ul li a:hover,
        .theme-salvia .blog-tags li a:hover,
        .theme-salvia .search-form input[type="text"],
        .theme-salvia .btn.btn-outline:hover,
        .product-box figure {
            border-color: #71fbff;
        }

        .theme-salvia .navbar .menu-top>li:hover>a,
        .theme-salvia .navbar .navbar-nav .sub-menu.active>a,
        .theme-salvia .navbar .navbar-nav .sub-menu li>a:hover,
        .theme-salvia .sidebar-widget.widget_tag_cloud ul li a:hover,
        .theme-salvia .blog-tags li a:hover,
        .theme-salvia .ml-auto a,
        .token-sale-info,
        .token-bonus-title,
        .theme-salvia .product-box h2,
        .footer-salvia .widget-links li a:hover,
        .footer-list li a:hover {
            color: #71fbff;
        }

        .theme-salvia .navbar-btns li .btn:hover,
        .theme-salvia .btn:hover,
        .document-link:hover,
        .theme-salvia .owl-dot,
        .team-sprofile li a:hover {
            background: #1e73be;
        }

        .theme-salvia .navbar-btns li .btn:hover,
        .theme-salvia .btn.btn-outline {
            border-color: #1e73be;
        }

        .theme-salvia .blog-meta li a,
        .theme-salvia .blog-meta li {
            color: #1e73be;
        }

        /*Zinnia*/
        .io-zinnia .search-form button,
        .io-zinnia .search-form button:hover,
        .io-zinnia .contact-info-alt li .fa,
        .io-zinnia .has-fixed .navbar-btns li .btn:hover,
        .io-zinnia .btn-icon-s3:hover [class*="fa-"],
        .io-zinnia .section-bg-zinnia,
        .io-zinnia .section-bg-gradient,
        .prblm-points li:before,
        .presale-status,
        .toktmln-item:before,
        .sltn-item {
            background: #71fbff;
        }

        .io-zinnia .btn,
        .io-zinnia .has-fixed .navbar-toggler,
        .io-zinnia .has-fixed .navbar-toggler:hover,
        .io-zinnia .has-fixed .navbar-toggler:focus,
        .banner-zinnia,
        .presale-countdown h5,
        .presale-bar-percent,
        .io-zinnia .play-btn-s2,
        .io-zinnia .play-icon,
        .tab-s4 .nav-tabs,
        .io-zinnia .team-circle .team-photo:before,
        .io-zinnia .bg-team-exp.mfp-bg,
        .io-zinnia .skill-bar-percent,
        .io-zinnia .contact-info li .fa,
        .io-zinnia .footer-section {
            background: linear-gradient(to right, #71fbff 0%, #1e73be 100%);
        }

        .io-zinnia .btn:before {
            background: linear-gradient(to right, #1e73be 0%, #71fbff 100%);
        }

        .presale-countdown h5 {
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .io-zinnia .sidebar-widget.widget_tag_cloud ul li a:hover,
        .io-zinnia .blog-tags li a:hover,
        .io-zinnia .has-fixed .navbar-btns li .btn,
        .io-zinnia .has-fixed .navbar-btns li .btn:hover,
        .io-zinnia .search-form input[type="text"] {
            border-color: #71fbff;
        }

        .io-zinnia .navbar .navbar-nav .sub-menu.active>a,
        .io-zinnia .navbar .navbar-nav .sub-menu li>a:hover,
        .io-zinnia .site-header.has-fixed .menu-top>li>a:hover,
        .io-zinnia .site-header.has-fixed .menu-top>li>a.active,
        .io-zinnia .site-header.has-fixed .navbar-nav>li.open>a,
        .io-zinnia .navbar-btns>li:hover>a,
        .io-zinnia .navbar-btns>li>a:hover,
        .io-zinnia .site-header.has-fixed .btn-outline,
        .io-zinnia .sidebar-widget.widget_tag_cloud ul li a:hover,
        .io-zinnia .blog-tags li a:hover,
        .io-zinnia .btn.btn-icon-s3,
        .io-zinnia .ml-auto a,
        .io-zinnia .navbar-toggler .ti,
        .io-zinnia .section-bg .section-title-s7,
        .io-zinnia .section-bg-alt .section-title-s7,
        .io-zinnia .text-block h2,
        .presale-countdown .countdown-time,
        .presale-countdown .countdown-time:after,
        div.prblm-item .prblm-subtitle,
        .tab-s4 .nav-tabs .nav-link.active,
        .io-zinnia .btn-outline:hover,
        .io-zinnia .btns a:not(.btn),
        .io-zinnia .btns a:not(.btn):hover,
        .io-zinnia .team-circle .team-name,
        .io-zinnia .accordion-s2 .card-header a,
        .io-zinnia .accordion-s2 .card-header a:hover,
        .io-zinnia .accordion-s2 .plus-minus .ti,
        .footer-list li a:hover {
            color: #71fbff;
        }

        .io-zinnia .btn-icon-s3 [class*="fa-"],
        .io-zinnia .site-header:not(.has-fixed) .navbar.enable {
            background: #1e73be;
        }

        .io-zinnia .comment-form .input-field .input-line:focus {
            border-color: #1e73be;
        }

        .io-zinnia a:hover,
        .io-zinnia .blog-meta li a,
        .io-zinnia .blog-meta li,
        .io-zinnia .subscription-form .btn.btn-plane {
            color: #1e73be;
        }

        .sltn-points li,
        .io-zinnia .timeline-date,
        .widget-links li a,
        .widget-links li a:hover {
            color: #fff;
        }

        .sltn-points li:before {
            background: #fff;
        }

        .io-zinnia .timeline-row:before,
        .io-zinnia .timeline-row:not(.timeline-row-done):after,
        .subscription-form .input-round {
            border-color: rgba(255, 255, 255, 0.3);
        }

        /*Third Color*/
        .io-jasmine button.btn.btn-plane,
        .btn-icon-s2:hover .ti,
        .io-lungwort .btn-icon-s2:hover .ti,
        .io-lungwort .contact-info-alt li .fa,
        .btn-icon-s2:focus .ti,
        .io-lungwort .btn-icon-s2:focus .ti,
        .features-action:hover,
        .timeline-date:after,
        .footer-jasmine .social li a:hover,
        .footer-lungwort .social li a:hover,
        .timeline-date:before,
        .io-jasmine .cta-widget,
        .io-lungwort .cta-widget,
        .io-lungwort .page-pagination li a:hover:after,
        .io-lungwort .page-pagination li span:after {
            background: #0126aa;
        }

        .timeline-done .timeline-date:before,
        .timeline-current .timeline-date:before {
            opacity: 0.23;
        }

        .btn-icon-s2:hover,
        .btn-icon-s2:focus,
        .io-lungwort .btn-icon-s2:hover,
        .io-lungwort .btn-icon-s2:focus,
        .io-jasmine .timeline-title,
        .team-circle-social li a:hover,
        .io-lungwort .team-circle-social li a:hover,
        .io-lungwort .countdown-box h6,
        .io-jasmine .cta-widget .btn,
        .io-lungwort .cta-widget .btn {
            color: #0126aa;
        }

        .io-lungwort .contact-info-alt li .fa {
            border-color: #0126aa;
        }
    </style>
    <style type="text/css">
        @media only screen and (max-width: 991px) {
            .site-header .navbar.is-transparent {
                position: absolute;
            }

            .admin-bar .site-header .navbar.is-transparent {
                top: 0;
            }
        }
    </style>
    <meta name="generator" content="Powered by WPBakery Page Builder - drag and drop page builder for WordPress." />
    <link rel="icon" href="{{ asset('storage/' . $page->logo) }}" sizes="32x32" />
    <link rel="icon" href="{{ asset('storage/' . $page->logo) }}" sizes="192x192" />
    <link rel="apple-touch-icon" href="{{ asset('storage/' . $page->logo) }}" />
    <meta name="msapplication-TileImage" content="{{ asset('storage/' . $page->logo) }}" />
    <style id="kirki-inline-styles">
        .navbar .navbar-btns>li>a.nav-link.btn {
            color: #ffffff;
        }

        .site-header .navbar-brand img {
            width: 50px;
        }

        .site-header .navbar-brand {
            margin-top: 20px;
            margin-bottom: 20px;
            margin-left: 0;
            margin-right: 15px;
        }

        .has-fixed.site-header .navbar-brand img {
            width: 50px;
        }

        .has-fixed.site-header .navbar-brand {
            margin-top: 20px;
            margin-bottom: 20px;
            margin-left: 0;
            margin-right: 15px;
        }

        .page-banner {
            min-height: 280px;
        }

        h2.page-heading {
            font-size: 34px;
        }

        footer.footer-section {
            padding-top: 0px;
        }

        body,
        body.theme-light,
        #wrapper .blog-section {
            background-color: #0f4a7d;
        }

        /* devanagari */
        @font-face {
            font-family: "Poppins";
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://get-reflect.com/wp-content/fonts/poppins/pxiEyp8kv8JHgFVrJJbedHFHGPezSQ.woff) format("woff");
            unicode-range: U+0900-097F, U+1CD0-1CF9, U+200C-200D, U+20A8, U+20B9,
                U+25CC, U+A830-A839, U+A8E0-A8FF;
        }

        /* latin-ext */
        @font-face {
            font-family: "Poppins";
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://get-reflect.com/wp-content/fonts/poppins/pxiEyp8kv8JHgFVrJJnedHFHGPezSQ.woff) format("woff");
            unicode-range: U+0100-02AF, U+1E00-1EFF, U+2020, U+20A0-20AB,
                U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        /* latin */
        @font-face {
            font-family: "Poppins";
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://get-reflect.com/wp-content/fonts/poppins/pxiEyp8kv8JHgFVrJJfedHFHGPc.woff) format("woff");
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6,
                U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193,
                U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* devanagari */
        @font-face {
            font-family: "Poppins";
            font-style: normal;
            font-weight: 500;
            font-display: swap;
            src: url(https://get-reflect.com/wp-content/fonts/poppins/pxiByp8kv8JHgFVrLGT9Z11lE92JQEl8qw.woff) format("woff");
            unicode-range: U+0900-097F, U+1CD0-1CF9, U+200C-200D, U+20A8, U+20B9,
                U+25CC, U+A830-A839, U+A8E0-A8FF;
        }

        /* latin-ext */
        @font-face {
            font-family: "Poppins";
            font-style: normal;
            font-weight: 500;
            font-display: swap;
            src: url(https://get-reflect.com/wp-content/fonts/poppins/pxiByp8kv8JHgFVrLGT9Z1JlE92JQEl8qw.woff) format("woff");
            unicode-range: U+0100-02AF, U+1E00-1EFF, U+2020, U+20A0-20AB,
                U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        /* latin */
        @font-face {
            font-family: "Poppins";
            font-style: normal;
            font-weight: 500;
            font-display: swap;
            src: url(https://get-reflect.com/wp-content/fonts/poppins/pxiByp8kv8JHgFVrLGT9Z1xlE92JQEk.woff) format("woff");
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6,
                U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193,
                U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* devanagari */
        @font-face {
            font-family: "Poppins";
            font-style: normal;
            font-weight: 600;
            font-display: swap;
            src: url(https://get-reflect.com/wp-content/fonts/poppins/pxiByp8kv8JHgFVrLEj6Z11lE92JQEl8qw.woff) format("woff");
            unicode-range: U+0900-097F, U+1CD0-1CF9, U+200C-200D, U+20A8, U+20B9,
                U+25CC, U+A830-A839, U+A8E0-A8FF;
        }

        /* latin-ext */
        @font-face {
            font-family: "Poppins";
            font-style: normal;
            font-weight: 600;
            font-display: swap;
            src: url(https://get-reflect.com/wp-content/fonts/poppins/pxiByp8kv8JHgFVrLEj6Z1JlE92JQEl8qw.woff) format("woff");
            unicode-range: U+0100-02AF, U+1E00-1EFF, U+2020, U+20A0-20AB,
                U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        /* latin */
        @font-face {
            font-family: "Poppins";
            font-style: normal;
            font-weight: 600;
            font-display: swap;
            src: url(https://get-reflect.com/wp-content/fonts/poppins/pxiByp8kv8JHgFVrLEj6Z1xlE92JQEk.woff) format("woff");
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6,
                U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193,
                U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* devanagari */
        @font-face {
            font-family: "Poppins";
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://get-reflect.com/wp-content/fonts/poppins/pxiEyp8kv8JHgFVrJJbedHFHGPezSQ.woff) format("woff");
            unicode-range: U+0900-097F, U+1CD0-1CF9, U+200C-200D, U+20A8, U+20B9,
                U+25CC, U+A830-A839, U+A8E0-A8FF;
        }

        /* latin-ext */
        @font-face {
            font-family: "Poppins";
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://get-reflect.com/wp-content/fonts/poppins/pxiEyp8kv8JHgFVrJJnedHFHGPezSQ.woff) format("woff");
            unicode-range: U+0100-02AF, U+1E00-1EFF, U+2020, U+20A0-20AB,
                U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        /* latin */
        @font-face {
            font-family: "Poppins";
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://get-reflect.com/wp-content/fonts/poppins/pxiEyp8kv8JHgFVrJJfedHFHGPc.woff) format("woff");
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6,
                U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193,
                U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* devanagari */
        @font-face {
            font-family: "Poppins";
            font-style: normal;
            font-weight: 500;
            font-display: swap;
            src: url(https://get-reflect.com/wp-content/fonts/poppins/pxiByp8kv8JHgFVrLGT9Z11lE92JQEl8qw.woff) format("woff");
            unicode-range: U+0900-097F, U+1CD0-1CF9, U+200C-200D, U+20A8, U+20B9,
                U+25CC, U+A830-A839, U+A8E0-A8FF;
        }

        /* latin-ext */
        @font-face {
            font-family: "Poppins";
            font-style: normal;
            font-weight: 500;
            font-display: swap;
            src: url(https://get-reflect.com/wp-content/fonts/poppins/pxiByp8kv8JHgFVrLGT9Z1JlE92JQEl8qw.woff) format("woff");
            unicode-range: U+0100-02AF, U+1E00-1EFF, U+2020, U+20A0-20AB,
                U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        /* latin */
        @font-face {
            font-family: "Poppins";
            font-style: normal;
            font-weight: 500;
            font-display: swap;
            src: url(https://get-reflect.com/wp-content/fonts/poppins/pxiByp8kv8JHgFVrLGT9Z1xlE92JQEk.woff) format("woff");
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6,
                U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193,
                U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* devanagari */
        @font-face {
            font-family: "Poppins";
            font-style: normal;
            font-weight: 600;
            font-display: swap;
            src: url(https://get-reflect.com/wp-content/fonts/poppins/pxiByp8kv8JHgFVrLEj6Z11lE92JQEl8qw.woff) format("woff");
            unicode-range: U+0900-097F, U+1CD0-1CF9, U+200C-200D, U+20A8, U+20B9,
                U+25CC, U+A830-A839, U+A8E0-A8FF;
        }

        /* latin-ext */
        @font-face {
            font-family: "Poppins";
            font-style: normal;
            font-weight: 600;
            font-display: swap;
            src: url(https://get-reflect.com/wp-content/fonts/poppins/pxiByp8kv8JHgFVrLEj6Z1JlE92JQEl8qw.woff) format("woff");
            unicode-range: U+0100-02AF, U+1E00-1EFF, U+2020, U+20A0-20AB,
                U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        /* latin */
        @font-face {
            font-family: "Poppins";
            font-style: normal;
            font-weight: 600;
            font-display: swap;
            src: url(https://get-reflect.com/wp-content/fonts/poppins/pxiByp8kv8JHgFVrLEj6Z1xlE92JQEk.woff) format("woff");
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6,
                U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193,
                U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* devanagari */
        @font-face {
            font-family: "Poppins";
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://get-reflect.com/wp-content/fonts/poppins/pxiEyp8kv8JHgFVrJJbedHFHGPezSQ.woff) format("woff");
            unicode-range: U+0900-097F, U+1CD0-1CF9, U+200C-200D, U+20A8, U+20B9,
                U+25CC, U+A830-A839, U+A8E0-A8FF;
        }

        /* latin-ext */
        @font-face {
            font-family: "Poppins";
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://get-reflect.com/wp-content/fonts/poppins/pxiEyp8kv8JHgFVrJJnedHFHGPezSQ.woff) format("woff");
            unicode-range: U+0100-02AF, U+1E00-1EFF, U+2020, U+20A0-20AB,
                U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        /* latin */
        @font-face {
            font-family: "Poppins";
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://get-reflect.com/wp-content/fonts/poppins/pxiEyp8kv8JHgFVrJJfedHFHGPc.woff) format("woff");
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6,
                U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193,
                U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* devanagari */
        @font-face {
            font-family: "Poppins";
            font-style: normal;
            font-weight: 500;
            font-display: swap;
            src: url(https://get-reflect.com/wp-content/fonts/poppins/pxiByp8kv8JHgFVrLGT9Z11lE92JQEl8qw.woff) format("woff");
            unicode-range: U+0900-097F, U+1CD0-1CF9, U+200C-200D, U+20A8, U+20B9,
                U+25CC, U+A830-A839, U+A8E0-A8FF;
        }

        /* latin-ext */
        @font-face {
            font-family: "Poppins";
            font-style: normal;
            font-weight: 500;
            font-display: swap;
            src: url(https://get-reflect.com/wp-content/fonts/poppins/pxiByp8kv8JHgFVrLGT9Z1JlE92JQEl8qw.woff) format("woff");
            unicode-range: U+0100-02AF, U+1E00-1EFF, U+2020, U+20A0-20AB,
                U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        /* latin */
        @font-face {
            font-family: "Poppins";
            font-style: normal;
            font-weight: 500;
            font-display: swap;
            src: url(https://get-reflect.com/wp-content/fonts/poppins/pxiByp8kv8JHgFVrLGT9Z1xlE92JQEk.woff) format("woff");
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6,
                U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193,
                U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* devanagari */
        @font-face {
            font-family: "Poppins";
            font-style: normal;
            font-weight: 600;
            font-display: swap;
            src: url(https://get-reflect.com/wp-content/fonts/poppins/pxiByp8kv8JHgFVrLEj6Z11lE92JQEl8qw.woff) format("woff");
            unicode-range: U+0900-097F, U+1CD0-1CF9, U+200C-200D, U+20A8, U+20B9,
                U+25CC, U+A830-A839, U+A8E0-A8FF;
        }

        /* latin-ext */
        @font-face {
            font-family: "Poppins";
            font-style: normal;
            font-weight: 600;
            font-display: swap;
            src: url(https://get-reflect.com/wp-content/fonts/poppins/pxiByp8kv8JHgFVrLEj6Z1JlE92JQEl8qw.woff) format("woff");
            unicode-range: U+0100-02AF, U+1E00-1EFF, U+2020, U+20A0-20AB,
                U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        /* latin */
        @font-face {
            font-family: "Poppins";
            font-style: normal;
            font-weight: 600;
            font-display: swap;
            src: url(https://get-reflect.com/wp-content/fonts/poppins/pxiByp8kv8JHgFVrLEj6Z1xlE92JQEk.woff) format("woff");
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6,
                U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193,
                U+2212, U+2215, U+FEFF, U+FFFD;
        }
    </style>
    <style type="text/css" data-type="vc_shortcodes-custom-css">
        .vc_custom_1678127648122 {
            margin-bottom: 35px !important;
        }

        .vc_custom_1678123031525 {
            margin-bottom: 18px !important;
        }

        .vc_custom_1520830144361 {
            padding-bottom: 60px !important;
        }

        .vc_custom_1678123603853 {
            margin-bottom: 18px !important;
        }

        .vc_custom_1678123657423 {
            margin-bottom: 18px !important;
        }

        .vc_custom_1520830144361 {
            padding-bottom: 60px !important;
        }

        .vc_custom_1520830144361 {
            padding-bottom: 60px !important;
        }

        .vc_custom_1520830144361 {
            padding-bottom: 60px !important;
        }

        .vc_custom_1520830144361 {
            padding-bottom: 60px !important;
        }

        .vc_custom_1520830144361 {
            padding-bottom: 60px !important;
        }

        .vc_custom_1520850810932 {
            margin-top: 50px !important;
            padding-bottom: 60px !important;
        }

        .vc_custom_1520917253885 {
            padding-bottom: 60px !important;
        }

        .vc_custom_1520924412863 {
            margin-top: 50px !important;
            padding-bottom: 60px !important;
        }

        .vc_custom_1520932193361 {
            margin-top: 50px !important;
            padding-bottom: 60px !important;
        }

        .vc_custom_1678126457156 {
            padding-bottom: 60px !important;
        }
    </style>
    <noscript>
        <style>
            .wpb_animate_when_almost_visible {
                opacity: 1;
            }
        </style>
    </noscript>
</head>

<body class="home page-template page-template-page-templates page-template-template-onepage page-template-page-templatestemplate-onepage-php page page-id-29 wpb-js-composer js-comp-ver-6.10.0 vc_responsive ico-dark icos-theme-ver-1.4.9 wordpress-version-6.2 &quot; data-spy=&quot;scroll&quot; data-target=&quot;#mainnav&quot; data-offset=&quot;80 no-touch" data-offset="94">
    <div id="wrapper">
        <!-- Header -->
        <header class="site-header is-sticky has-fixed">
            <!-- Navbar -->
            <div class="navbar navbar-expand-lg is-transparent" id="mainnav">
                <nav class="container">
                    <div class="navbar-brand">
                        <a href="https://flokibox.com/">
                            <img class="logo" src="{{ asset('storage/' . $page->logo) }}" alt="Get -REFLECT" />
                            <img class="logo-2" src="{{ asset('storage/' . $page->logo) }}" alt="Get -REFLECT" />
                        </a>
                    </div>

                    <button class="navbar-toggler" type="button">
                        <span class="navbar-toggler-icon">
                            <i class="fa-solid fa-bars"></i>
                        </span>
                    </button>

                    <div class="navbar-collapse justify-content-end">
                        <ul id="menu-onepage-menu" class="navbar-nav menu-top">
                            <li id="menu-item-150" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-150">
                                <a href="https://flokibox.com/" class="nav-link">HOME</a>
                            </li>
                            <li id="menu-item-150" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-150">
                                <a href="https://flokibox.com/#intro" class="nav-link">FLOKIBOX</a>
                            </li>
                            <li id="menu-item-487" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-487">
                                <a href="https://flokibox.com/#tokenomic" class="nav-link">TOKENOMIC</a>
                            </li>
                            <li id="menu-item-242" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-242">
                                <a href="https://flokibox.com/#roadmap" class="nav-link">Roadmap</a>
                            </li>
                            <li id="menu-item-248" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-248">
                                <a href="https://flokibox.com/#contact" class="nav-link">Contact</a>
                            </li>
                        </ul>
                        <ul class="navbar-nav navbar-btns">
                            <li class="nav-item">
                                <a class="nav-link btn btn-sm btn-outline menu-link" href="{{$page->button_whitepaper_link}}">{{$page->button_whitepaper_text}}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link btn btn-sm btn-outline menu-link" href="{{$page->button_telegram_link}}">{{$page->button_telegram_text}}</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <!-- End Navbar -->
        </header>
        <!-- End Header -->

        <section class="wpb-content-wrapper">
            <section class="vc_row wpb_row vc_row-fluid mobile-center banner-particle banner-curb vc_row-o-equal-height vc_row-o-content-middle vc_row-flex banner banner-full d-flex align-items-center">
                <div class="container">
                    <div class="banner-content">
                        <div class="row">
                            <div class="order-lg-first wpb_column vc_column_container vc_col-sm-12 vc_col-lg-6 vc_col-md-6">
                                <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                        <div class="wpb_text_column wpb_content_element wpb_animate_when_almost_visible wpb_bounceInLeft bounceInLeft vc_custom_1678127648122 wpb_start_animation animated">
                                            <div class="wpb_wrapper">
                                                <h1>
                                                    <span dir="ltr" role="presentation">{{$page->title}}</span>
                                                </h1>
                                                <h1>
                                                    <span dir="ltr" role="presentation">{{$page->subtitle}}</span>
                                                </h1>
                                                <p class="lead color-secondary">
                                                    {{$page->description}}
                                                </p>
                                                <ul class="btns">
                                                    <li>
                                                        <a class="btn" href="{{$page->button_join_comunity_link}}">{{$page->button_join_comunity_text}}</a>
                                                    </li>
                                                    <li>
                                                        <a class="btn btn-alt" href="{{$page->button_buy_token_link}}">{{$page->button_buy_token_text}}</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-6 vc_col-md-6 order-first">
                                <div class="vc_column-inner">
                                    <div class="wpb_wrapper"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </section>
            <section id="intro" class="vc_row wpb_row vc_row-fluid section section-pad section-bg-blend nopb vc_row-o-equal-height vc_row-o-content-middle vc_row-flex">
                <div class="container">
                    <div class="row">
                        <div class="res-m-btm wpb_column vc_column_container vc_col-sm-5 vc_col-sm-offset-1 vc_col-xs-12">
                            <div class="vc_column-inner">
                                <div class="wpb_wrapper">
                                    <div class="wpb_single_image wpb_content_element vc_align_center wpb_animate_when_almost_visible wpb_fadeInLeftBig fadeInLeftBig wpb_start_animation animated">
                                        <figure class="wpb_wrapper vc_figure">
                                            <div class="vc_single_image-wrapper vc_box_border_grey">
                                                <img class="vc_single_image-img" src="{{ asset('storage/' . $page->logo) }}" width="200" height="200" alt="logo1" title="logo1" />
                                            </div>
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="order-md-first wpb_column vc_column_container vc_col-sm-6 order-last">
                            <div class="vc_column-inner">
                                <div class="wpb_wrapper">
                                    <div class="wpb_text_column wpb_content_element wpb_animate_when_almost_visible wpb_fadeInRightBig fadeInRightBig vc_custom_1678123031525 wpb_start_animation animated">
                                        <div class="wpb_wrapper">
                                            <h2>
                                                {{$page->section_one_title}}
                                            </h2>
                                            <p class="lead">
                                                {{$page->section_one_subtitle}}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </section>
            <section class="vc_row wpb_row vc_row-fluid section section-pad section-bg-blend nopb vc_row-o-equal-height vc_row-o-content-middle vc_row-flex">
                <div class="container">
                    <div class="row">
                        <div class="order-md-first wpb_column vc_column_container vc_col-sm-12 order-last">
                            <div class="vc_column-inner">
                                <div class="wpb_wrapper">
                                    <div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1520830144361">
                                        <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-offset-3 vc_col-lg-6 vc_col-md-offset-2 vc_col-md-8">
                                            <div class="vc_column-inner">
                                                <div class="wpb_wrapper">
                                                    <div class="section-head text-center">
                                                        <h2 class="section-title animated fadeInUp" data-animate="fadeInUp" data-delay=".1" style="
                                  visibility: visible;
                                  animation-delay: 0.1s;
                                ">
                                                            {{ $page->section_two_title }}
                                                            <span>FLOKIBOX TOKEN</span>
                                                        </h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wpb_text_column wpb_content_element wpb_animate_when_almost_visible wpb_fadeInRightBig fadeInRightBig vc_custom_1678123603853 wpb_start_animation animated">
                                        <div class="wpb_wrapper">
                                            <h2>
                                                {{ $page->section_two_subtitle_one }}
                                            </h2>
                                            <p class="lead">
                                                {!! $page->section_two_description_one !!}
                                            </p>
                                        </div>
                                    </div>

                                    <div class="wpb_text_column wpb_content_element wpb_animate_when_almost_visible wpb_fadeInRightBig fadeInRightBig vc_custom_1678123657423 wpb_start_animation animated">
                                        <div class="wpb_wrapper">
                                            <h2>
                                                {{ $page->section_two_subtitle_two }}
                                            </h2>
                                            <p class="lead">
                                                {!! $page->section_two_description_two !!}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </section>
            <section id="tokenomic" class="vc_row wpb_row vc_row-fluid section-pad section-bg-alt">
                <div class="container">
                    <div class="row">
                        <div class="wpb_column vc_column_container vc_col-sm-12">
                            <div class="vc_column-inner">
                                <div class="wpb_wrapper">
                                    <div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1520830144361">
                                        <div class="wpb_column vc_column_container vc_col-sm-8 vc_col-md-offset-3 vc_col-md-6 vc_col-sm-offset-2">
                                            <div class="vc_column-inner">
                                                <div class="wpb_wrapper">
                                                    <div class="section-head text-center">
                                                        <h2 class="section-title animated fadeInUp" data-animate="fadeInUp" data-delay=".1" style="
                                  visibility: visible;
                                  animation-delay: 0.1s;
                                ">
                                                            Tokenomic <span>{{ $page->section_three_title }}</span>
                                                        </h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1520830144361">
                                        <div class="wpb_column vc_column_container vc_col-sm-8 vc_col-md-offset-3 vc_col-md-6 vc_col-sm-offset-2">
                                            <div class="vc_column-inner">
                                                <div class="wpb_wrapper">
                                                    <div class="section-head text-center">
                                                        <h2 class="section-title animated fadeInUp" data-animate="fadeInUp" data-delay=".1" style="
                                  visibility: visible;
                                  animation-delay: 0.1s;
                                ">
                                                            {{ $page->section_three_subtitle_one }}
                                                        </h2>
                                                    </div>

                                                    <div class="wpb_text_column wpb_content_element">
                                                        <div class="wpb_wrapper">
                                                            <h4 style="text-align: center">
                                                                <strong>{!! $page->section_three_description_one !!}</strong>
                                                            </h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1520830144361">
                                        <div class="wpb_column vc_column_container vc_col-sm-8 vc_col-md-offset-3 vc_col-md-6 vc_col-sm-offset-2">
                                            <div class="vc_column-inner">
                                                <div class="wpb_wrapper">
                                                    <div class="section-head text-center">
                                                        <h2 class="section-title animated fadeInUp" data-animate="fadeInUp" data-delay=".1" style="
                                  visibility: visible;
                                  animation-delay: 0.1s;
                                ">
                                                            {{ $page->section_three_subtitle_two }}
                                                        </h2>
                                                    </div>

                                                    <div class="wpb_text_column wpb_content_element">
                                                        <div class="wpb_wrapper">
                                                            <h4 style="text-align: center">
                                                                <strong><span dir="ltr" role="presentation">&nbsp;</span></strong><strong><span dir="ltr" role="presentation">&nbsp;
                                                                    </span></strong>
                                                            </h4>
                                                            <h4 style="text-align: center">
                                                                <strong>
                                                                    {!! $page->section_three_description_two !!}
                                                                </strong>
                                                            </h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1520830144361">
                                        <div class="wpb_column vc_column_container vc_col-sm-8 vc_col-md-offset-3 vc_col-md-6 vc_col-sm-offset-2">
                                            <div class="vc_column-inner">
                                                <div class="wpb_wrapper">
                                                    <div class="section-head text-center">
                                                        <h2 class="section-title animated fadeInUp" data-animate="fadeInUp" data-delay=".1" style="
                                  visibility: visible;
                                  animation-delay: 0.1s;
                                ">
                                                            {{ $page->section_three_subtitle_three }}
                                                        </h2>
                                                    </div>

                                                    <div class="wpb_text_column wpb_content_element">
                                                        <div class="wpb_wrapper">
                                                            <h4 style="text-align: center">
                                                                <strong>{!! $page->section_three_description_three !!}</strong>
                                                            </h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="section-head text-center">
                                        <h2 class="section-title animated fadeInUp" data-animate="fadeInUp" data-delay=".1" style="visibility: visible; animation-delay: 0.1s">
                                            {{ $page->section_three_subtitle_four }}
                                        </h2>
                                    </div>

                                    <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                        <div class="wpb_column vc_column_container vc_col-sm-6">
                                            <div class="vc_column-inner">
                                                <div class="wpb_wrapper">
                                                    <div class="wpb_text_column wpb_content_element">
                                                        <div class="wpb_wrapper">
                                                            <div class="gaps size-3x"></div>
                                                            <div class="gaps size-3x d-none d-md-block"></div>
                                                        </div>
                                                    </div>

                                                    <div class="vc_chart vc_round-chart wpb_content_element" data-vc-tooltips="1" data-vc-animation="easeInOutCubic" data-vc-stroke-color="#ffffff" data-vc-stroke-width="2" data-vc-type="pie" data-vc-values='{"labels":["PRESALE","LIQUIDTY","UNLOCK","BURN"],"datasets":[{"data":[0,50,0,50],"backgroundColor":["#f200ea","#1e73be","#eeee22","#777777"]}]}' data-vc-legend-color="#2a2a2a" data-vc-legend-position="left">
                                                        <div class="wpb_wrapper">
                                                            <canvas class="vc_round-chart-canvas" width="540" height="540" style="
                                    display: block;
                                    box-sizing: border-box;
                                    height: 540px;
                                    width: 540px;
                                  "></canvas>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-chart res-m-btm wpb_column vc_column_container vc_col-sm-6">
                                            <div class="vc_column-inner">
                                                <div class="wpb_wrapper">
                                                    <div class="vc_empty_space" style="height: 215px">
                                                        <span class="vc_empty_space_inner"></span>
                                                    </div>
                                                    <div class="vc_progress_bar wpb_content_element vc_progress-bar-color-bar_grey">
                                                        <div class="vc_general vc_single_bar vc_progress-bar-color-pink">
                                                            <small class="vc_label">{{$page->section_three_diagram_text_one}}</small><span class="vc_bar" data-percentage-value="100" data-value="100" style="width: 100%"></span>
                                                        </div>
                                                        <div class="vc_general vc_single_bar">
                                                            <small class="vc_label">{{$page->section_three_diagram_text_two}}</small><span class="vc_bar" data-percentage-value="100" data-value="100" style="
                                    background-color: rgb(30, 115, 190);
                                    width: 100%;
                                  "></span>
                                                        </div>
                                                        <div class="vc_general vc_single_bar">
                                                            <small class="vc_label" style="color: #000000">{{$page->section_three_diagram_text_three}}</small><span class="vc_bar" data-percentage-value="100" data-value="100" style="
                                    background-color: rgb(238, 238, 34);
                                    width: 100%;
                                  "></span>
                                                        </div>
                                                        <div class="vc_general vc_single_bar">
                                                            <small class="vc_label" style="color: #ffffff">{{$page->section_three_diagram_text_four}}</small><span class="vc_bar" data-percentage-value="100" data-value="100" style="
                                    background-color: rgb(102, 102, 102);
                                    width: 100%;
                                  "></span>
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
                <div class="clearfix"></div>
            </section>
            <section id="roadmap" class="vc_row wpb_row vc_row-fluid section-pad section-bg section-connect">
                <div class="container">
                    <div class="row">
                        <div class="wpb_column vc_column_container vc_col-sm-12">
                            <div class="vc_column-inner">
                                <div class="wpb_wrapper">
                                    <div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1520830144361">
                                        <div class="wpb_column vc_column_container vc_col-sm-12">
                                            <div class="vc_column-inner">
                                                <div class="wpb_wrapper">
                                                    <div class="section-head text-center">
                                                        <h2 class="section-title animated fadeInUp" data-animate="fadeInUp" data-delay=".1" style="
                                  visibility: visible;
                                  animation-delay: 0.1s;
                                ">
                                                            {{$page->section_four_title}} <span>ROADMAP</span>
                                                        </h2>
                                                    </div>

                                                    <div class="vc_empty_space" style="height: 50px">
                                                        <span class="vc_empty_space_inner"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                        <div class="wpb_column vc_column_container vc_col-sm-4">
                                            <div class="vc_column-inner">
                                                <div class="wpb_wrapper">
                                                    <div class="section-head text-center">
                                                        <h2 class="section-title animated fadeInUp" data-animate="fadeInUp" data-delay=".1" style="
                                  visibility: visible;
                                  animation-delay: 0.1s;
                                ">
                                                            {{$page->section_four_subtitle_one}}
                                                        </h2>
                                                    </div>

                                                    <div class="vc_separator wpb_content_element vc_separator_align_center vc_sep_width_100 vc_sep_border_width_2 vc_sep_pos_align_center vc_separator_no_text vc_sep_color_grey">
                                                        <span class="vc_sep_holder vc_sep_holder_l"><span class="vc_sep_line"></span></span><span class="vc_sep_holder vc_sep_holder_r"><span class="vc_sep_line"></span></span>
                                                    </div>
                                                    <div class="wpb_text_column wpb_content_element">
                                                        <div class="wpb_wrapper">
                                                            <ul>
                                                                <li style="text-align: left">
                                                                    <strong>{!! $page->section_four_description_one !!}</strong>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="wpb_column vc_column_container vc_col-sm-4">
                                            <div class="vc_column-inner">
                                                <div class="wpb_wrapper">
                                                    <div class="section-head text-center">
                                                        <h2 class="section-title animated fadeInUp" data-animate="fadeInUp" data-delay=".1" style="
                                  visibility: visible;
                                  animation-delay: 0.1s;
                                ">
                                                            {{$page->section_four_subtitle_two}}
                                                        </h2>
                                                    </div>

                                                    <div class="vc_separator wpb_content_element vc_separator_align_center vc_sep_width_100 vc_sep_border_width_2 vc_sep_pos_align_center vc_separator_no_text vc_sep_color_grey">
                                                        <span class="vc_sep_holder vc_sep_holder_l"><span class="vc_sep_line"></span></span><span class="vc_sep_holder vc_sep_holder_r"><span class="vc_sep_line"></span></span>
                                                    </div>
                                                    <div class="wpb_text_column wpb_content_element">
                                                        <div class="wpb_wrapper">
                                                            <ul>
                                                                <li style="text-align: left">
                                                                    <strong>{!! $page->section_four_description_two !!}</strong>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="wpb_column vc_column_container vc_col-sm-4">
                                            <div class="vc_column-inner">
                                                <div class="wpb_wrapper">
                                                    <div class="section-head text-center">
                                                        <h2 class="section-title animated fadeInUp" data-animate="fadeInUp" data-delay=".1" style="
                                  visibility: visible;
                                  animation-delay: 0.1s;
                                ">
                                                            {{$page->section_four_subtitle_three}}
                                                        </h2>
                                                    </div>

                                                    <div class="vc_separator wpb_content_element vc_separator_align_center vc_sep_width_100 vc_sep_border_width_2 vc_sep_pos_align_center vc_separator_no_text vc_sep_color_grey">
                                                        <span class="vc_sep_holder vc_sep_holder_l"><span class="vc_sep_line"></span></span><span class="vc_sep_holder vc_sep_holder_r"><span class="vc_sep_line"></span></span>
                                                    </div>
                                                    <div class="wpb_text_column wpb_content_element">
                                                        <div class="wpb_wrapper">
                                                            <ul>
                                                                <li style="text-align: left">
                                                                    <strong>{!! $page->section_four_description_three !!}</strong>
                                                                </li>
                                                            </ul>
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
                <div class="clearfix"></div>
            </section>
            <section id="contact" class="vc_row wpb_row vc_row-fluid section-pad section-bg-alt">
                <div class="container">
                    <div class="row">
                        <div class="wpb_column vc_column_container vc_col-sm-12">
                            <div class="vc_column-inner">
                                <div class="wpb_wrapper">
                                    <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                        <div class="wpb_column vc_column_container vc_col-sm-12">
                                            <div class="vc_column-inner">
                                                <div class="wpb_wrapper">
                                                    <div class="section-head text-center">
                                                        <h2 class="section-title animated fadeInUp" data-animate="fadeInUp" data-delay=".1" style="
                                  visibility: visible;
                                  animation-delay: 0.1s;
                                ">
                                                            {{$page->section_five_title}} <span>CONTACT</span>
                                                        </h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wpb_text_column wpb_content_element vc_custom_1520932193361 text-center">
                                        <div class="wpb_wrapper">
                                            <p>
                                                {!!$page->section_five_description!!}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                        <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-md-offset-2 vc_col-md-8">
                                            <div class="vc_column-inner">
                                                <div class="wpb_wrapper">
                                                    <div class="wpb_text_column wpb_content_element vc_custom_1678126457156">
                                                        <div class="wpb_wrapper">
                                                            <ul class="contact-info">
                                                                <li style="text-align: center">
                                                                    <a href="mailto:{{$page->section_five_email}}"><em class="fa fa-envelope">email</em>{{$page->section_five_email}}</a>
                                                                </li>
                                                                <li style="text-align: center">
                                                                    <a href="{{$page->telegram_link}}"><em class="fa fa-paper-plane">tele</em>{{$page->section_five_text}}</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                    <div class="wpcf7 js" id="wpcf7-f301-p29-o1" lang="en-US" dir="ltr">
                                                        <div class="screen-reader-response">
                                                            <p role="status" aria-live="polite" aria-atomic="true"></p>
                                                            <ul></ul>
                                                        </div>
                                                        <form action="https://flokibox.com/#wpcf7-f301-p29-o1" method="post" class="wpcf7-form init" aria-label="Contact form" novalidate="novalidate" data-status="init">
                                                            <div style="display: none">
                                                                <input type="hidden" name="_wpcf7" value="301" />
                                                                <input type="hidden" name="_wpcf7_version" value="5.7.4" />
                                                                <input type="hidden" name="_wpcf7_locale" value="en_US" />
                                                                <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f301-p29-o1" />
                                                                <input type="hidden" name="_wpcf7_container_post" value="29" />
                                                                <input type="hidden" name="_wpcf7_posted_data_hash" value="" />
                                                            </div>
                                                            <div class="comment-form text-center">
                                                                <div class="form-results"></div>
                                                                <div class="input-field">
                                                                    <p>
                                                                        <span class="wpcf7-form-control-wrap" data-name="your-name"><input size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required input-line" aria-required="true" aria-invalid="false" value="" type="text" name="your-name" /></span><label class="input-title">Your Name</label>
                                                                    </p>
                                                                </div>
                                                                <div class="input-field">
                                                                    <p>
                                                                        <span class="wpcf7-form-control-wrap" data-name="your-email"><input size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email input-line" aria-required="true" aria-invalid="false" value="" type="email" name="your-email" /></span><label class="input-title">Your Email</label>
                                                                    </p>
                                                                </div>
                                                                <div class="input-field">
                                                                    <p>
                                                                        <span class="wpcf7-form-control-wrap" data-name="your-message">
                                                                            <textarea cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea input-line txtarea" aria-invalid="false" name="your-message"></textarea>
                                                                        </span><label class="input-title">Your Message</label>
                                                                    </p>
                                                                </div>
                                                                <div class="input-field">
                                                                    <p>
                                                                        <button type="submit" class="btn">
                                                                            Submit
                                                                        </button>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="wpcf7-response-output" aria-hidden="true"></div>
                                                        </form>
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
                <div class="clearfix"></div>
            </section>
        </section>

        <footer class="section footer-section section-pad-sm section-bg">
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-12">
                        <ul class="social">
                            <li>
                                <a target="_blank" href="{{$page->twitter_link}}"><i class="fa-brands fa-twitter"></i></a>
                            </li>
                            <li>
                                <a target="_blank" href="{{$page->github_link}}"><i class="fa-brands fa-github"></i></a>
                            </li>
                            <li>
                                <a target="_blank" href="{{$page->telegram_link}}"><i class="fa-brands fa-telegram"></i></a>
                            </li>
                        </ul>
                        <span class="copyright-text">
                            Copyright © 2023,
                            <a href="https://flokibox.com/" target="_blank">FLOKIBOX</a>
                        </span>
                    </div>
                </div>
            </div>
        </footer>

        <a href="https://flokibox.com/#" id="back-to-top" class="show"></a>
    </div>

    <script type="text/html" id="wpb-modifications"></script>
    <link rel="stylesheet" id="vc_animate-css-css" href="{{ asset('/') }}asset/animate.min.css" type="text/css" media="all" />
    <script type="text/javascript" src="{{ asset('/') }}asset/index.js.download" id="swv-js"></script>
    <script type="text/javascript" id="contact-form-7-js-extra">
        /* <![CDATA[ */
        var wpcf7 = {
            api: {
                root: "https:\/\/get-reflect.com\/wp-json\/",
                namespace: "contact-form-7\/v1",
            },
        };
        /* ]]> */
    </script>
    <script type="text/javascript" src="{{ asset('/') }}asset/index.js(1).download" id="contact-form-7-js"></script>
    <script type="text/javascript" src="{{ asset('/') }}asset/comment-reply.min.js.download" id="comment-reply-js"></script>
    <script type="text/javascript" src="{{ asset('/') }}asset/bootstrap.min.js.download" id="bootstrap-js"></script>
    <script type="text/javascript" src="{{ asset('/') }}asset/jquery.easing.min.js.download" id="easing-js"></script>
    <script type="text/javascript" src="{{ asset('/') }}asset/jquery.waypoints.min.js.download" id="waypoints-js"></script>
    <script type="text/javascript" src="{{ asset('/') }}asset/owl.carousel.js.download" id="owl-carousel-js"></script>
    <script type="text/javascript" src="{{ asset('/') }}asset/jquery.magnific-popup.min.js.download" id="magnific-js"></script>
    <script type="text/javascript" src="{{ asset('/') }}asset/jquery.countdown.min.js.download" id="countdown-js"></script>
    <script type="text/javascript" src="{{ asset('/') }}asset/particles.min.js.download" id="particles-js">
        < canvas class = "particles-js-canvas-el"
        width = "0"
        height = "0"
        style = "width: 100%; height: 100%;" > < /canvas>
    </script>
    <script type="text/javascript" src="{{ asset('/') }}asset/select2.min.js.download" id="select2-js"></script>
    <script type="text/javascript" src="{{ asset('/') }}asset/script-pack.js.download" id="icos-script-js"></script>
    <script type="text/javascript" src="{{ asset('/') }}asset/js_composer_front.min.js.download" id="wpb_composer_front_js-js"></script>
    <script type="text/javascript" src="{{ asset('/') }}asset/vc-waypoints.min.js.download" id="vc_waypoints-js"></script>
    <script type="text/javascript" src="{{ asset('/') }}asset/chart.min.js.download" id="ChartJS-js"></script>
    <script type="text/javascript" src="{{ asset('/') }}asset/vc_round_chart.min.js.download" id="vc_round_chart-js"></script>
</body>

</html>
