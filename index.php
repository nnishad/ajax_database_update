
<!DOCTYPE html>
<html lang="en-US" class="no-js">

<!-- Mirrored from themes.pixiesquad.com/pixiehuge/orange-elite/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 Sep 2018 10:35:59 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Just another WordPress site">

    <title>PixieHuge &#8211; Orange Elite &#8211; Just another WordPress site</title>
    <link rel='dns-prefetch' href='http://platform.twitter.com/' />
    <link rel='dns-prefetch' href='http://fonts.googleapis.com/' />
    <link rel='dns-prefetch' href='http://s.w.org/' />
    <link rel="alternate" type="application/rss+xml" title="PixieHuge - Orange Elite &raquo; Feed" href="feed/index.html" />
    <link rel="alternate" type="application/rss+xml" title="PixieHuge - Orange Elite &raquo; Comments Feed" href="comments/feed/index.html" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
    <link rel="stylesheet" href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/148866/reset.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel="stylesheet" href="login.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript">

        $(document).ready(function() {
            $.ajax({    //create an ajax request to display.php
                type: "GET",
                url: "news.php",
                dataType: "html",   //expect html to be returned
                success: function (response) {
                    $("#display_info").html(response);
                    //alert(response);
                }


            });
            $.ajax({    //create an ajax request to display.php
                type: "GET",
                url: "battle.php",
                dataType: "html",   //expect html to be returned
                success: function (response) {
                    $("#UpcomingMatches").html(response);
                    //alert(response);
                }


            });
            $.ajax({    //create an ajax request to display.php
                type: "GET",
                url: "results.php",
                dataType: "html",   //expect html to be returned
                success: function (response) {
                    $("#LatestResults").html(response);
                    //alert(response);
                }


            });
        });
        function check(){
            $.ajax({    //create an ajax request to display.php
                type: "GET",
                url: "battle.php",
                dataType: "html",   //expect html to be returned
                success: function (response) {
                    $("#UpcomingMatches").html(response);
                    //alert(response);
                }


            });
        }
        setInterval(check,1000);

    </script>
    <style type="text/css">
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 .07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <link rel='stylesheet' id='pixiehuge-css'  href='wp-content/themes/pixiehuge/style8a54.css?ver=1.0.0' type='text/css' media='all' />
    <link rel='stylesheet' id='fontawesome-css'  href='wp-content/themes/pixiehuge/assets/css/font-awesome.min8a54.css?ver=1.0.0' type='text/css' media='all' />
    <link rel='stylesheet' id='bootstrap-css'  href='wp-content/themes/pixiehuge/assets/css/bootstrap.min8683.css?ver=1.0.001' type='text/css' media='all' />
    <link rel='stylesheet' id='flagicon-css'  href='wp-content/themes/pixiehuge/assets/css/flag-icon.min8683.css?ver=1.0.001' type='text/css' media='all' />
    <link rel='stylesheet' id='owlcarousel-css'  href='wp-content/themes/pixiehuge/assets/css/owl.carousel.min8683.css?ver=1.0.001' type='text/css' media='all' />
    <link rel='stylesheet' id='chosen-css'  href='wp-content/themes/pixiehuge/assets/css/chosen.min8683.css?ver=1.0.001' type='text/css' media='all' />
    <link rel='stylesheet' id='pixiehuge_main-css'  href='wp-content/themes/pixiehuge/assets/css/main896c.css?ver=1.0.400001' type='text/css' media='all' />
    <style id='pixiehuge_main-inline-css' type='text/css'>

        /* BBPress */
        div.bbp-submit-wrapper button,
        #bbpress-forums #bbp-search-form #bbp_search_submit,

            /* WooCommerce */
        body.woocommerce-page .woocommerce .return-to-shop a,
        body.woocommerce-page .woocommerce .form-row.place-order input.button.alt,
        body.woocommerce-page .woocommerce .wc-proceed-to-checkout a,
        .woocommerce span.onsale,
        .woocommerce button.button.alt,
        .woocommerce #review_form #respond .form-submit input,
        .woocommerce div.product a.button a:hover,
        .woocommerce #respond input#submit:hover,
        .woocommerce a.button:hover,
        .woocommerce button.button:hover,
        .woocommerce input.button:hover,
        .woocommerce a.remove:hover,

            /* About page */
        section#aboutInfo,
        section#aboutStaff .container.bg ul.header li:after,

            /* Player page */
        section#player-details .content div.equip ul li a:hover,

            /* Match page */
        section#matchRoster .content .roster > li .overlay,

            /* Sidebar */
        aside article #searchform .formSearch button#searchsubmit,

            /* Team section */
        section#teams .boxes .box,
        section#teams .boxes .box .overlay,

            /* Single page */
        section#single-page article.comments form input#submit,
        section#single-page article.comments form button,
        section#single-page article.header div.top-line a.category,
        .search-page .formSearch button#searchsubmit,

            /* Match page */
        section#matches div.container > div.content li.matchBox > a.cta-btn,
        section#matches.match-page li.matchBox:after,

            /* News page */
        section#news .content .news-box a.category,
        section#single-page article.content p input[type="submit"],

            /* Btn */
        section#streams div.container div.content div.list article.streamBox:not(.large) .details.on-hover > a.cta-btn,
        .btn.btn-blue {
            background-color: #ff360e !important;
        }

        /* Chosen */
        .chosen-container .chosen-results li.highlighted {
            background: #ff360e !important
        }

        /* About page */
        section#aboutStory .bg article.footer div.right ul li:hover,

            /* Sidebar */
        aside article #searchform .formSearch input,

            /* Section header */
        .section-header article.bottombar ul li.active a,
        .section-header article.bottombar ul li:hover a,

            /* Match page */
        .btn.btn-transparent,

            /* Single page */
        .search-page .formSearch input,
        section#single-page article.content blockquote,

            /* WooCommerce */
        .woocommerce-info,
        body.woocommerce-page .woocommerce .woocommerce-info,
        .woocommerce form.checkout_coupon,

            /* Footer */
        footer .container.top article.box.aboutUs a {
            border-color: #ff360e !important;
        }

        /* Player page */
        section#player-profile .player-info .right-panel ul.info-section li:hover {
            border-bottom: 1px solid #ff360e !important;
        }


        /* BBPress*/
        #bbpress-forums div.bbp-breadcrumb p a,
        #bbpress-forums li a,
        #bbpress-forums p.bbp-topic-meta span a,
        #bbpress-forums li.bbp-body .bbp-topic-title a,
        #bbpress-forums li.bbp-header .bbp-reply-content span a:hover,

            /* NAV */
        .nav-previous a,
        .nav-next a,
        .mo-modal .mo-menu-box .modal-body ul li a,

            /* Header */
        header > nav > .container > ul > li > a > span.title:hover,
        header > nav > .container > ul > li:hover span.title,
        header div.topbar a:hover,
        #cancel-comment-reply-link,

            /* About Page*/
        section#aboutStaff .container.bg ul.tab span.role,
        section#aboutStaff .container.bg ul.header li.active a,
        section#aboutStaff .container.bg ul.header li a:hover,
        section#aboutStory .bg article.footer div.right ul li span.email,
        section#aboutStory .bg article.head > h4,

            /* Sponsors Page*/
        section#sponsor-page .container ul li .content .head a:hover,
        section#cta-sponsor article.content h4,
        section#sponsor-page .container ul li .content a.cta-link,

            /* Team Page*/
        section#team-profile ul.achievements li span.title,
        section#team-profile article.stats ul.left li span.title,
        section#team-profile .team-info .profile-details div.name span,

            /* Match section */
        section#matches div.container > div.content li.matchBox > div.rightBox > div.match-info > span.league,
        section#matches div.container > div.content li.matchBox > div.rightBox > div.stream > a,
        section#match-details .container.bg article.middle .details h5,
        .btn.btn-transparent,

            /* Player Page*/
        section#player-details .content div.equip ul li .details span.name,
        section#player-details .content .stats ul li div.info span.title,
        section#player-profile .player-info .right-panel ul.info-section li:hover span.title,
        section#player-profile .player-info .right-panel ul.profile-details li.social a:not(.stream):hover,
        section#player-profile .player-info .right-panel ul.profile-details li div.name span,

            /* Maps */
        section#mapsPlayed ul li .details span.won,
        section#matchRoster .content .roster > li .details span,

            /* Sidebar */
        aside article #wp-calendar a,
        aside ul li a,
        aside .tagcloud a,

            /* Single page */
        section#single-page article.header span.date,
        section#single-page article.comments ul li article.author div.details h5,
        section#single-page article.comments p:not(.form-submit) a,
        section#single-page article.comments ul li article.author div.details h5 a,
        section#single-page article.content code,
        section#single-page article.content a,
        section#single-page article.content h2:first-child,

            /* Hero section */
        section#hero article.content h4,

            /* Section header */
        .section-header article.bottombar ul li.active a,
        .section-header article.bottombar ul li:hover a,

            /* Stream section */
        section#streams div.container div.content div.list article.streamBox .details > h6,

            /* Twitter section */
        section#twitter div.tw-bg > article.left > h4,

            /* News section */
        section#news .content .news-box > .details > span,
        .wp-caption-text,

            /* WooCommerce */
        body.woocommerce-page .woocommerce .woocommerce-info a.showcoupon,
        body.woocommerce-page .woocommerce .woocommerce-info a,
        body.woocommerce-page .woocommerce .woocommerce-info:before,
        section#boardmembers ul li.dropdown.active button,
        section#boardmembers ul li.dropdown.active .dropdown-menu li.active a,
        .woocommerce div.product a,
        .woocommerce div.product p.price,
        .woocommerce ul.products li.product .price,
        .woocommerce .woocommerce-product-rating a,
        .woocommerce table.shop_table td.product-name a,
        .woocommerce form .lost_password a,
        .woocommerce-info:before,
        .woocommerce a.remove,
        .woocommerce a.added_to_cart,
        .woocommerce-loop-product__title,

            /* Footer */
        footer .bottom .container > article.left a:hover,
        footer .bottom .container > article.left h5,
        footer .container.top article.box ul li > span.date,
        footer .container.top article.box ul li > a > span.email,
        footer .container.top article.box.aboutUs a {
            color: #ff360e !important;
        }

        /* Match section */
        section#matches div.container > div.content li.matchBox {
            background: rgba(34, 34, 46, 0.08);
            background: -moz-linear-gradient(left, rgba(34, 34, 46, 0.08) 0%, rgba(255,54,14,.08) 100%);
            background: -webkit-gradient(left top, right top, color-stop(0%, rgba(34, 34, 46, 0.08)), color-stop(100%, rgba(255,54,14,.008)));
            background: -webkit-linear-gradient(left, rgba(34, 34, 46, 0.08) 0%, rgba(255,54,14,.08) 100%);
            background: -o-linear-gradient(left, rgba(34, 34, 46, 0.08) 0%, rgba(255,54,14,.08) 100%);
            background: -ms-linear-gradient(left, rgba(34, 34, 46, 0.08) 0%, rgba(255,54,14,.08) 100%);
            background: linear-gradient(to right, rgba(34, 34, 46, 0.08) 0%, rgba(255,54,14,.08) 100%);
            filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#22222e', endColorstr='#ff360e', GradientType=1 );
        }
        /* Top bar */
        #icon-discord:hover path,

            /* Match */
        section#matches.match-page .navigation .left:hover svg path,
        section#matches.match-page .navigation .right:hover svg path,

            /* Header */
        section#sponsors span.rightArrow svg:hover path,
        section#sponsors span.leftArrow svg:hover path,

            /* Sponsor page */
        section#sponsor-page .container ul li .content a.cta-link svg path,

            /* Team page */
        section#team-profile article.stats ul.left li svg path,

            /* Footer */
        footer .container.top article.box h4 svg path,

            /* Section header */
        .section-header article.topbar h3 svg path {
            fill: #ff360e !important;
        }

        /* Header */
        header > nav > .container > ul > li > a > span.title {
            text-shadow: 5px 0px 6px rgba(255,54,14,.35);
        }

        /* About page */
        section#aboutStaff .container.bg ul.header li a {
            text-shadow: 1px 0px 1px rgba(255,54,14,.35);
        }
        .fee{
            color: white;
font-size: x-large;
        }
        .tag{
            color: white;
font-size: xx-large;
margin-top: 15px;
margin-left: 15px;
        }
        @media screen and (max-width: 992px) {
             .cd-switcher{
            display: block !important;
            }
        }
    </style>
    <link rel='stylesheet' id='pixiehuge_responsive-css'  href='wp-content/themes/pixiehuge/assets/css/responsive896c.css?ver=1.0.400001' type='text/css' media='all' />
    <link rel='stylesheet' id='google-fonts-css'  href='http://fonts.googleapis.com/css?family=Baloo+Bhai%7CSource+Sans+Pro%3A400%2C700%7CUbuntu%3A400%2C500%2C700%26amp%3Bsubset%3Dlatin-ext&amp;ver=1.0.0' type='text/css' media='all' />
    <script type='text/javascript' src='wp-includes/js/jquery/jqueryb8ff.js?ver=1.12.4'></script>
    <script type='text/javascript' src='wp-includes/js/jquery/jquery-migrate.min330a.js?ver=1.4.1'></script>
    <link rel='https://api.w.org/' href='wp-json/index.html' />
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc0db0.php?rsd" />
    <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="wp-includes/wlwmanifest.xml" />
    <meta name="generator" content="WordPress 4.9.6" />

</head>

<body class="home blog" >
<header>
    <div class="topbar">
        <div class="container">
            <a href="#searchModal" class="search" data-toggle="modal" data-target="#searchModal">
                <i class="fa fa-search"></i>
            </a>
            <a href="http://facebook.com/pixiesquad" target="_blank"><i class="fa fa-facebook"></i></a><a href="https://twitter.com/PixieSquadTheme" target="_blank"><i class="fa fa-twitter"></i></a><a href="https://www.instagram.com/pixiesquadstudio/" target="_blank"><i class="fa fa-instagram"></i></a><a href="https://www.youtube.com/channel/UCOgbPXMkH0IpL-co4X6T1Qg/featured" target="_blank"><i class="fa fa-youtube"></i></a><a href="http://facebook.com/pixiesquad" target="_blank"><i class="fa fa-twitch"></i></a><a href="http://facebook.com/pixiesquad" target="_blank"><i class="fa fa-steam"></i></a><a href="http://facebook.com/pixiesquad" target="_blank">
                <svg id="icon-discord" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18">
                    <path d="M 9.375 5.03125 L 8.75 5.09375 C 8.75 5.09375 6.008 5.39175 4 6.96875 L 3.96875 6.96875 L 3.9375 7 C 3.4875 7.406 3.31 7.897 3 8.625 C 2.69 9.353 2.3545 10.2835 2.0625 11.3125 C 1.4785 13.3705 1 15.844 1 18.125 L 1 18.34375 L 1.09375 18.53125 C 1.82075 19.77825 3.1155 20.578 4.3125 21.125 C 5.5095 21.672 6.535 21.94675 7.25 21.96875 L 7.71875 22 L 8.8125 19.65625 C 9.7225 19.85625 10.795 20 12 20 C 13.205 20 14.24625 19.85625 15.15625 19.65625 L 16.25 22 L 16.71875 21.96875 C 17.43375 21.94575 18.45925 21.672 19.65625 21.125 C 20.85325 20.578 22.149 19.77825 22.875 18.53125 L 22.96875 18.34375 L 22.96875 18.125 C 22.96975 15.844 22.5215 13.3705 21.9375 11.3125 C 21.6455 10.2835 21.309 9.352 21 8.625 C 20.691 7.898 20.48125 7.406 20.03125 7 L 20 6.96875 C 17.992 5.39175 15.21875 5.09375 15.21875 5.09375 L 14.625 5.03125 C 14.625 5.03125 14.17325 6.5485 14.03125 7.1875 C 13.14225 7.0725 12.419 7.03125 12 7.03125 C 11.581 7.03125 10.85775 7.0715 9.96875 7.1875 C 9.82675 6.5485 9.375 5.03125 9.375 5.03125 z M 8.125 7.1875 C 8.159 7.2895 8.221 7.418 8.25 7.5 C 7.235 7.73 6.27425 8.02775 5.28125 8.59375 L 6.125 10.3125 C 8.162 9.1535 11.099 9 12 9 C 12.901 9 15.838 9.1535 17.875 10.3125 L 18.6875 8.59375 C 17.6945 8.02875 16.8285 7.73 15.8125 7.5 C 15.8415 7.418 15.93475 7.2895 15.96875 7.1875 C 16.70075 7.3225 17.81175 7.62875 18.96875 8.46875 C 18.96275 8.47175 19.2935 8.87475 19.5625 9.46875 C 19.8385 10.07775 20.12925 10.8955 20.40625 11.8125 C 20.93825 13.5725 21.341 15.89425 21.375 17.78125 C 20.883 18.47525 19.97 19.11525 19 19.53125 C 18.154 19.89425 17.7105 20.02675 17.3125 20.09375 L 16.90625 19.21875 C 17.13825 19.14075 17.175 19.1435 17.375 19.0625 C 18.582 18.5755 19.21875 18.03125 19.21875 18.03125 L 18.40625 16.46875 C 18.40625 16.46875 17.9665 16.834 16.9375 17.25 C 15.9085 17.666 14.133 18.09375 12 18.09375 C 9.867 18.09375 8.4675 17.666 7.4375 17.25 C 6.4075 16.834 5.96875 16.46875 5.96875 16.46875 L 4.75 18.03125 C 4.75 18.03125 5.417 18.5755 6.625 19.0625 C 6.825 19.1435 6.892 19.14075 7.125 19.21875 L 6.6875 20.09375 C 6.2895 20.02675 5.81475 19.89425 4.96875 19.53125 C 3.99775 19.11425 3.08675 18.47525 2.59375 17.78125 C 2.62775 15.89525 3.0315 13.5725 3.5625 11.8125 C 3.8395 10.8955 4.1605 10.07775 4.4375 9.46875 C 4.7065 8.87475 5.006 8.47175 5 8.46875 C 6.157 7.62875 7.393 7.3225 8.125 7.1875 z M 9.5 12 C 8.6715729 12 8 12.895431 8 14 C 8 15.104569 8.6715729 16 9.5 16 C 10.328427 16 11 15.104569 11 14 C 11 12.895431 10.328427 12 9.5 12 z M 14.5 12 C 13.671573 12 13 12.895431 13 14 C 13 15.104569 13.671573 16 14.5 16 C 15.328427 16 16 15.104569 16 14 C 16 12.895431 15.328427 12 14.5 12 z"/>
                </svg></a>
            <a href="#menuModal" data-toggle="modal" class="mobile-nav topbar"><svg  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="14px" height="12px"><path fill-rule="evenodd" fill="rgb(255, 255, 255)" d="M13.125,6.857 L0.875,6.857 C0.392,6.857 -0.000,6.473 -0.000,5.999 C-0.000,5.526 0.392,5.143 0.875,5.143 L13.125,5.143 C13.608,5.143 14.000,5.526 14.000,5.999 C14.000,6.473 13.608,6.857 13.125,6.857 ZM13.125,1.714 L0.875,1.714 C0.392,1.714 -0.000,1.330 -0.000,0.857 C-0.000,0.383 0.392,-0.001 0.875,-0.001 L13.125,-0.001 C13.608,-0.001 14.000,0.383 14.000,0.857 C14.000,1.330 13.608,1.714 13.125,1.714 ZM0.875,10.285 L13.125,10.285 C13.608,10.285 14.000,10.669 14.000,11.142 C14.000,11.616 13.608,12.000 13.125,12.000 L0.875,12.000 C0.392,12.000 -0.000,11.616 -0.000,11.142 C-0.000,10.669 0.392,10.285 0.875,10.285 Z"/></svg></a>
        </div>
    </div>
    <!-- /TOPBAR -->

    <nav>
        <div class="container">
            <div class="logo bg">
                <a class="logo-image" style="background-image: url('wp-content/themes/pixiehuge/images/logo.png');" href="">
                </a>

            </div>
            <!-- /LOGO-BG -->

            <a href="#menuModal" data-toggle="modal" class="mobile-nav"><svg  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="14px" height="12px"><path fill-rule="evenodd"  fill="rgb(255, 255, 255)" d="M13.125,6.857 L0.875,6.857 C0.392,6.857 -0.000,6.473 -0.000,5.999 C-0.000,5.526 0.392,5.143 0.875,5.143 L13.125,5.143 C13.608,5.143 14.000,5.526 14.000,5.999 C14.000,6.473 13.608,6.857 13.125,6.857 ZM13.125,1.714 L0.875,1.714 C0.392,1.714 -0.000,1.330 -0.000,0.857 C-0.000,0.383 0.392,-0.001 0.875,-0.001 L13.125,-0.001 C13.608,-0.001 14.000,0.383 14.000,0.857 C14.000,1.330 13.608,1.714 13.125,1.714 ZM0.875,10.285 L13.125,10.285 C13.608,10.285 14.000,10.669 14.000,11.142 C14.000,11.616 13.608,12.000 13.125,12.000 L0.875,12.000 C0.392,12.000 -0.000,11.616 -0.000,11.142 C-0.000,10.669 0.392,10.285 0.875,10.285 Z"/></svg> Menu</a>


            <ul id="header_menu" class="menu"><li id="menu-item-48" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home"><a href=""><span class="title">Home</span><span class="subtitle">Welcome</span></a></li>
                <li id="menu-item-49" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="#news"><span class="title">Fresh News</span><span class="subtitle">Latest updates</span></a></li>
                <li id="menu-item-99" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="#matches"><span class="title">All Matches</span><span class="subtitle">View action</span></a></li>
                <!--<li id="menu-item-50" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="all-teams/index.html"><span class="title">Our teams</span><span class="subtitle">View them</span></a></li>
<li id="menu-item-51" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="about-us/index.html"><span class="title">About us</span><span class="subtitle">Our story</span></a></li>
-->             <li id="menu-item-53" class="menu-item menu-item-type-post_type menu-item-object-page "><a><span class="title">Login/Register</span></a></li>
            </ul>

            <!----Login MODAL-------><div class="cd-user-modal"> <!-- this is the entire modal form, including the background -->
                <div class="cd-user-modal-container"> <!-- this is the container wrapper -->
                    <ul class="cd-switcher">
                        <li><a href="#0">Make Payment</a></li>
                        <li><a href="#0">Register</a></li>
                    </ul>

                    <div id="cd-login"> <!-- log in form -->
                        <iframe src="https://securegw.paytm.in/link/66062/LL_189307" frameborder="0" style="width:100%;height: 110vh;"></iframe>

                        
                    </div> <!-- cd-login -->

                    <div id="cd-signup"> <!-- sign up form -->
						<form action="" class="cd-form" method="POST">
								<p class="fieldset">
								  <label class="image-replace cd-username" for="sname">Name :</label>
									<input type="text" class="full-width has-padding has-border" name="sname" placeholder="Name" class="form-control" required>
								</p>
									<p class="fieldset">
								  <label class="image-replace cd-email" for="email">Email-id :</label>
									<input type="email" class="full-width has-padding has-border" name="email" placeholder="Email" class="form-control" required>
								</p>
									<p class="fieldset">
								  <label class="image-replace cd-pusername" for="pusername">PUBG Username :</label>
									  <input type="text" class="full-width has-padding has-border" name="pusername" placeholder="PUBG Username" class="form-control" required>
								</p>
								<p class="fieldset">
								  <label class="image-replace cd-mobile" for="reg">Registration number :</label>
									<input type="text" class="full-width has-padding has-border" name="reg" placeholder="Registration number" class="form-control" required>
								</p>
								<p class="fieldset">
								  <label class="image-replace cd-paytm" for="tid">PayTM Order ID :</label>
									<input type="text" class="full-width has-padding has-border" name="tid" placeholder="PayTM Order ID" class="form-control" required>
								</p>
								<p class="fieldset">
                                <input type="checkbox" id="accept-terms" required>
                                <label for="accept-terms">I agree to the <a href="#0">Terms</a></label>
                            </p>
								<p class="fieldset">
								<input type="submit" class="full-width has-padding" value="Register">
								</p>
						</form>

                        <!-- <a href="#0" class="cd-close-form">Close</a> -->
                    </div> <!-- cd-signup -->

                    <div id="cd-reset-password"> <!-- reset password form -->
                        <p class="cd-form-message">Lost your password? Please enter your email address. You will receive a link to create a new password.</p>

                        <form class="cd-form">
                            <p class="fieldset">
                                <label class="image-replace cd-email" for="reset-email">E-mail</label>
                                <input class="full-width has-padding has-border" id="reset-email" type="email" placeholder="E-mail">
                                <span class="cd-error-message">Error message here!</span>
                            </p>

                            <p class="fieldset">
                                <input class="full-width has-padding" type="submit" value="Reset password">
                            </p>
                        </form>

                        <p class="cd-form-bottom-message"><a href="#0">Back to log-in</a></p>
                    </div> <!-- cd-reset-password -->
                    <a href="#0" class="cd-close-form">Close</a>
                </div> <!-- cd-user-modal-container -->
            </div> <!-- cd-user-modal -->
            <!------------->
        </div>
    </nav>
    <!-- /MAINMENU -->

</header>
<!-- /HEADER -->
<section id="hero" style="background-image: url('https://pixelz.cc/wp-content/uploads/2017/11/pubg-player-unknown-battlegrounds-characters-uhd-4k-wallpaper.jpg')">

    <div class="container">

        <article class="content">

            <h4>PlayerUnknown's Battlegrounds Fans This Is For You</h4>

            <h3>Battles Begin Here!</h3>

            <h5>Built for true PUBG lovers</h5>

            <a href="#" class="btn btn-blue">Know More</a>

        </article>

    </div>
</section>
<!-- /HERO -->

<section id="sponsors">

    <div class="container">
        <span class="leftArrow">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="8px" height="12px">
            <path fill-rule="evenodd"  opacity="0.2" fill="rgb(256, 256, 256)" d="M0.006,5.995 C0.006,6.252 0.103,6.508 0.299,6.704 L5.313,11.713 C5.704,12.104 6.339,12.104 6.731,11.713 C7.122,11.322 7.122,10.687 6.731,10.296 L2.426,5.995 L6.731,1.694 C7.122,1.303 7.122,0.669 6.731,0.277 C6.339,-0.114 5.704,-0.114 5.313,0.277 L0.299,5.287 C0.103,5.483 0.006,5.739 0.006,5.995 Z"/>
            </svg>
        </span>
        <div class="owl-carousel">
            <a href="https://themeforest.net/user/pixiesquad?ref=PixieSquad" target="_blank">
                <img src="wp-content/uploads/2017/06/8.png" alt="Image">
            </a>
            <a href="https://themeforest.net/user/pixiesquad?ref=PixieSquad" target="_blank">
                <img src="wp-content/uploads/2017/06/4.png" alt="Image">
            </a>
            <a href="https://themeforest.net/user/pixiesquad?ref=PixieSquad" target="_blank">
                <img src="wp-content/uploads/2017/06/5.png" alt="Image">
            </a>
            <a href="https://themeforest.net/user/pixiesquad?ref=PixieSquad" target="_blank">
                <img src="wp-content/uploads/2017/06/6.png" alt="Image">
            </a>
            <a href="https://themeforest.net/user/pixiesquad?ref=PixieSquad" target="_blank">
                <img src="wp-content/uploads/2017/06/7.png" alt="Image">
            </a>
            <a href="https://themeforest.net/user/pixiesquad?ref=PixieSquad" target="_blank">
                <img src="wp-content/uploads/2017/06/1.png" alt="Image">
            </a>
        </div>
        <span class="rightArrow">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="8px" height="12px">
            <path fill-rule="evenodd"  opacity="0.2" fill="rgb(256, 256, 256)" d="M0.006,5.995 C0.006,6.252 0.103,6.508 0.299,6.704 L5.313,11.713 C5.704,12.104 6.339,12.104 6.731,11.713 C7.122,11.322 7.122,10.687 6.731,10.296 L2.426,5.995 L6.731,1.694 C7.122,1.303 7.122,0.669 6.731,0.277 C6.339,-0.114 5.704,-0.114 5.313,0.277 L0.299,5.287 C0.103,5.483 0.006,5.739 0.006,5.995 Z"/>
            </svg>
        </span>
    </div>

</section>
<!-- /SPONSORS -->

<section id="news" class="home firstWithBg">

    <div class="container">

        <div class="section-header">
            <article class="topbar">
                <h3>
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="7px" height="8px"><path fill-rule="evenodd"  fill="rgb(57, 191, 253)" d="M-0.000,0.435 C-0.000,0.805 -0.000,7.292 -0.000,7.546 C-0.000,7.877 0.338,8.123 0.672,7.930 C0.940,7.775 6.293,4.649 6.750,4.381 C7.050,4.205 7.045,3.786 6.750,3.611 C6.421,3.415 1.048,0.272 0.658,0.054 C0.373,-0.106 -0.000,0.071 -0.000,0.435 Z"/></svg>
                    Latest news				</h3>
            </article>
            <!-- /TOP-BAR -->
        </div>
        <!-- /SECTION-HEADER -->

        <div class="content">

            <div id="result"></div>
            <div id="display_info" ></div>
            
            
        </div>

    </div>

</section>
<!-- /NEWS -->

<section id="matches">



    <div class="container">

        <div class="section-header">
            <article class="topbar">
                <h3>
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="7px" height="8px"><path fill-rule="evenodd"  fill="rgb(57, 191, 253)" d="M-0.000,0.435 C-0.000,0.805 -0.000,7.292 -0.000,7.546 C-0.000,7.877 0.338,8.123 0.672,7.930 C0.940,7.775 6.293,4.649 6.750,4.381 C7.050,4.205 7.045,3.786 6.750,3.611 C6.421,3.415 1.048,0.272 0.658,0.054 C0.373,-0.106 -0.000,0.071 -0.000,0.435 Z"/></svg> Our Matches            </h3>
            </article>
            <!-- /TOP-BAR -->

            <article class="bottombar">
                <ul>
                    <li class="active">
                        <a href="#UpcomingMatches" data-toggle="tab">Upcoming Matches</a>
                    </li>
                    <li class="">
                        <a href="#LatestResults" data-toggle="tab">Latest Results</a>
                    </li>
                </ul>
            </article>
            <!-- /BOTTOM-BAR -->
        </div>
        <!-- /SECTION-HEADER -->

        <div class="tab-content content">
            <ul id="UpcomingMatches" class="active">

            </ul>
            <!-- /UPCOMING-MATCHES -->

            <ul id="LatestResults" class="">

                
                <!-- /MATCH-BOX -->
                <li class="matchBox">
                    <div class="teams">
                        <a href="team/midnight-turtles/index.html">
                            <img src="wp-content/uploads/2017/06/logo2.png" alt="Team&#039;s logo">
                            <span>Midnight Turtles</span>
                        </a>
                        <span class="score">1 - 0</span>
                        <a href="team/rhyno-domynos/index.html">
                            <img src="wp-content/uploads/2017/06/intz.png" alt="Team&#039;s logo">
                            <span>Rhyno Domynos</span>
                        </a>
                    </div>
                    <!-- /TEAMS -->

                    <div class="rightBox">
                        <div class="match-info">
                            <span class="league">SL i-League StarSeries S3</span>
                            <div class="status">
                                <span>Online</span> Vainglory                                    </div>
                            <span class="date">16 June at 02:05 AM</span>

                        </div>
                        <!-- /MATCH INFO -->

                    </div>
                    <a href="match/4-midnight-turtles-rhyno-domynos/index.html" class="cta-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="9px" height="8px"><path fill-rule="evenodd"  fill="rgb(255, 255, 255)" d="M4.688,0.182 C4.437,0.442 4.437,0.865 4.688,1.126 L6.805,3.326 L0.643,3.326 C0.288,3.326 -0.000,3.625 -0.000,3.993 C-0.000,4.362 0.288,4.661 0.643,4.661 L6.805,4.661 L4.688,6.861 C4.437,7.122 4.437,7.544 4.688,7.805 C4.939,8.066 5.346,8.066 5.597,7.805 L8.811,4.466 C8.928,4.345 9.000,4.178 9.000,3.993 C9.000,3.809 8.928,3.642 8.811,3.521 L5.597,0.182 C5.346,-0.079 4.939,-0.079 4.688,0.182 Z"/>
                        </svg>
                    </a>
                </li>
                <!-- /MATCH-BOX -->
                <li class="matchBox">
                    <div class="teams">
                        <a href="team/midnight-turtles/index.html">
                            <img src="wp-content/uploads/2017/06/logo2.png" alt="Team&#039;s logo">
                            <span>Midnight Turtles</span>
                        </a>
                        <span class="score">0 - 2</span>
                        <a href="team/rhyno-domynos/index.html">
                            <img src="wp-content/uploads/2017/06/intz.png" alt="Team&#039;s logo">
                            <span>Rhyno Domynos</span>
                        </a>
                    </div>
                    <!-- /TEAMS -->

                    <div class="rightBox">
                        <div class="match-info">
                            <span class="league">SL i-League StarSeries S3</span>
                            <div class="status">
                                <span>Online</span> Vainglory                                    </div>
                            <span class="date">16 June at 02:05 AM</span>

                        </div>
                        <!-- /MATCH INFO -->

                    </div>
                    <a href="match/5-midnight-turtles-rhyno-domynos/index.html" class="cta-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="9px" height="8px"><path fill-rule="evenodd"  fill="rgb(255, 255, 255)" d="M4.688,0.182 C4.437,0.442 4.437,0.865 4.688,1.126 L6.805,3.326 L0.643,3.326 C0.288,3.326 -0.000,3.625 -0.000,3.993 C-0.000,4.362 0.288,4.661 0.643,4.661 L6.805,4.661 L4.688,6.861 C4.437,7.122 4.437,7.544 4.688,7.805 C4.939,8.066 5.346,8.066 5.597,7.805 L8.811,4.466 C8.928,4.345 9.000,4.178 9.000,3.993 C9.000,3.809 8.928,3.642 8.811,3.521 L5.597,0.182 C5.346,-0.079 4.939,-0.079 4.688,0.182 Z"/>
                        </svg>
                    </a>
                </li>
                <!-- /MATCH-BOX -->
                <li class="matchBox">
                    <div class="teams">
                        <a href="team/midnight-turtles/index.html">
                            <img src="wp-content/uploads/2017/06/logo2.png" alt="Team&#039;s logo">
                            <span>Midnight Turtles</span>
                        </a>
                        <span class="score">2 - 0</span>
                        <a href="team/rhyno-domynos/index.html">
                            <img src="wp-content/uploads/2017/06/intz.png" alt="Team&#039;s logo">
                            <span>Rhyno Domynos</span>
                        </a>
                    </div>
                    <!-- /TEAMS -->

                    <div class="rightBox">
                        <div class="match-info">
                            <span class="league">SL i-League StarSeries S3</span>
                            <div class="status">
                                <span>Online</span> Vainglory                                    </div>
                            <span class="date">16 June at 02:05 AM</span>

                        </div>
                        <!-- /MATCH INFO -->

                    </div>
                    <a href="match/6-midnight-turtles-rhyno-domynos/index.html" class="cta-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="9px" height="8px"><path fill-rule="evenodd"  fill="rgb(255, 255, 255)" d="M4.688,0.182 C4.437,0.442 4.437,0.865 4.688,1.126 L6.805,3.326 L0.643,3.326 C0.288,3.326 -0.000,3.625 -0.000,3.993 C-0.000,4.362 0.288,4.661 0.643,4.661 L6.805,4.661 L4.688,6.861 C4.437,7.122 4.437,7.544 4.688,7.805 C4.939,8.066 5.346,8.066 5.597,7.805 L8.811,4.466 C8.928,4.345 9.000,4.178 9.000,3.993 C9.000,3.809 8.928,3.642 8.811,3.521 L5.597,0.182 C5.346,-0.079 4.939,-0.079 4.688,0.182 Z"/>
                        </svg>
                    </a>
                </li>
                <!-- /MATCH-BOX -->
                <li class="matchBox">
                    <div class="teams">
                        <a href="team/midnight-turtles/index.html">
                            <img src="wp-content/uploads/2017/06/logo2.png" alt="Team&#039;s logo">
                            <span>Midnight Turtles</span>
                        </a>
                        <span class="score">0 - 3</span>
                        <a href="team/rhyno-domynos/index.html">
                            <img src="wp-content/uploads/2017/06/intz.png" alt="Team&#039;s logo">
                            <span>Rhyno Domynos</span>
                        </a>
                    </div>
                    <!-- /TEAMS -->

                    <div class="rightBox">
                        <div class="match-info">
                            <span class="league">SL i-League StarSeries S3</span>
                            <div class="status">
                                <span>Online</span> Vainglory                                    </div>
                            <span class="date">16 June at 02:05 AM</span>

                        </div>
                        <!-- /MATCH INFO -->

                    </div>
                    <a href="match/7-midnight-turtles-rhyno-domynos/index.html" class="cta-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="9px" height="8px"><path fill-rule="evenodd"  fill="rgb(255, 255, 255)" d="M4.688,0.182 C4.437,0.442 4.437,0.865 4.688,1.126 L6.805,3.326 L0.643,3.326 C0.288,3.326 -0.000,3.625 -0.000,3.993 C-0.000,4.362 0.288,4.661 0.643,4.661 L6.805,4.661 L4.688,6.861 C4.437,7.122 4.437,7.544 4.688,7.805 C4.939,8.066 5.346,8.066 5.597,7.805 L8.811,4.466 C8.928,4.345 9.000,4.178 9.000,3.993 C9.000,3.809 8.928,3.642 8.811,3.521 L5.597,0.182 C5.346,-0.079 4.939,-0.079 4.688,0.182 Z"/>
                        </svg>
                    </a>
                </li>
                <!-- /MATCH-BOX -->


            </ul>
            <!-- /LATEST-RESULTS -->

        </div>
        <!-- /CONTENT -->
    </div>
    <!-- /CONTAINER -->
</section>
<!-- /MATCHES -->



<!-- FOOTER -->
<script type='text/javascript' src='wp-content/themes/pixiehuge/assets/js/bootstrap.min8a54.js?ver=1.0.0'></script>
<script type='text/javascript' src='wp-content/themes/pixiehuge/assets/js/owl.carousel8a54.js?ver=1.0.0'></script>
<script type='text/javascript' src='wp-content/themes/pixiehuge/assets/js/chosen.jquery.min8a54.js?ver=1.0.0'></script>
<script type='text/javascript' src='wp-content/themes/pixiehuge/assets/js/main8a54.js?ver=1.0.0'></script>
<script type='text/javascript'>
    jQuery('section#sponsors .owl-carousel').owlCarousel({
        margin:10,
        loop:true,
        autoWidth:false,
        nav: false,
        responsive : {
            0 : {
                items: 1,
                margin:0,
            },
            360 : {
                items: 2,
                margin:50,
            },
            480 : {
                items: 3,
                margin:50,
            },
            768 : {
                items: 3,
                margin:50,
            },
            992 : {
                items: 4,
                margin:100,
            },
            1200 : {
                items: 5,
                margin:100,
            }
        }
    });

    var owl = jQuery('section#sponsors .owl-carousel').owlCarousel();
    jQuery("section#sponsors .leftArrow").click(function () {
        owl.trigger('prev.owl.carousel');
    });

    jQuery("section#sponsors .rightArrow").click(function () {
        owl.trigger('next.owl.carousel');
    });

</script>
<script type='text/javascript' src='../../../platform.twitter.com/widgets8a54.js?ver=1.0.0'></script>
<script type='text/javascript' src='wp-includes/js/wp-embed.min1845.js?ver=4.9.6'></script>
<footer class="homepage">
    <div class="container top">

        <article class="box">
            <h4>
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="7px" height="8px"><path fill-rule="evenodd"  fill="rgb(57, 191, 253)" d="M-0.000,0.435 C-0.000,0.805 -0.000,7.292 -0.000,7.546 C-0.000,7.877 0.338,8.123 0.672,7.930 C0.940,7.775 6.293,4.649 6.750,4.381 C7.050,4.205 7.045,3.786 6.750,3.611 C6.421,3.415 1.048,0.272 0.658,0.054 C0.373,-0.106 -0.000,0.071 -0.000,0.435 Z"/></svg>
                Latest Posts            </h4>
            <ul>
                <li>
                    <a href="category/overwatch/index.html" class="category">
                        Overwatch                    </a>
                    <a href="renegades-defeat-signature-to-minor-playoffs/index.html">RENEGADES DEFEAT SIGNATURE; TO MINOR PLAYOFFS</a>
                    <span class="date">June 16, 2017</span>
                </li>
                <li>
                    <a href="category/counter-strike/index.html" class="category">
                        Counter Strike                    </a>
                    <a href="scream-now-we-know-were-capable-of-winning/index.html">SCREAM: &#8220;NOW WE KNOW WE&#8217;RE CAPABLE OF WINNING&#8221;</a>
                    <span class="date">June 16, 2017</span>
                </li>
            </ul>
        </article>
        <!-- /BOX -->

        <article class="box">
            <h4>
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="7px" height="8px"><path fill-rule="evenodd"  fill="rgb(57, 191, 253)" d="M-0.000,0.435 C-0.000,0.805 -0.000,7.292 -0.000,7.546 C-0.000,7.877 0.338,8.123 0.672,7.930 C0.940,7.775 6.293,4.649 6.750,4.381 C7.050,4.205 7.045,3.786 6.750,3.611 C6.421,3.415 1.048,0.272 0.658,0.054 C0.373,-0.106 -0.000,0.071 -0.000,0.435 Z"/></svg>
                Our Departments            </h4>
            <ul>
                <li>
                    <a href="http://themes.pixiesquad.com/cdn-cgi/l/email-protection#2f404949464c4a6f5f4657464a5c5e5a4e4b014c4042">
                            <span class="info">
                                <i class="icon" style="background-image: url('wp-content/uploads/2017/06/icon1.png');"></i> Management                            </span>
                        <span class="email">
                                <span class="__cf_email__" data-cfemail="8fe0e9e9e6eceacfffe6f7e6eafcfefaeeeba1ece0e2">[email&#160;protected]</span>                            </span>
                    </a>
                </li>
                <li>
                    <a href="http://themes.pixiesquad.com/cdn-cgi/l/email-protection#8de5e8e1fdcdfde4f5e4e8fefcf8ece9a3eee2e0">
                            <span class="info">
                                <i class="icon" style="background-image: url('wp-content/uploads/2017/06/icon2.png');"></i> Support                            </span>
                        <span class="email">
                                <span class="__cf_email__" data-cfemail="c5ada0a9b585b5acbdaca0b6b4b0a4a1eba6aaa8">[email&#160;protected]</span>                            </span>
                    </a>
                </li>
                <li>
                    <a href="http://themes.pixiesquad.com/cdn-cgi/l/email-protection#80eee5f7f3c0f0e9f8e9e5f3f1f5e1e4aee3efed">
                            <span class="info">
                                <i class="icon" style="background-image: url('wp-content/uploads/2017/06/icon3.png');"></i> Press                            </span>
                        <span class="email">
                                <span class="__cf_email__" data-cfemail="7b151e0c083b0b1203121e080a0e1a1f55181416">[email&#160;protected]</span>                            </span>
                    </a>
                </li>
            </ul>
        </article>
        <!-- /BOX -->

        <article class="box useful">
            <h4>
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="7px" height="8px"><path fill-rule="evenodd"  fill="rgb(57, 191, 253)" d="M-0.000,0.435 C-0.000,0.805 -0.000,7.292 -0.000,7.546 C-0.000,7.877 0.338,8.123 0.672,7.930 C0.940,7.775 6.293,4.649 6.750,4.381 C7.050,4.205 7.045,3.786 6.750,3.611 C6.421,3.415 1.048,0.272 0.658,0.054 C0.373,-0.106 -0.000,0.071 -0.000,0.435 Z"/></svg>
                Useful Links            </h4>
            <ul id="footer_menu" class="useful-links"><li id="menu-item-100" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-100"><span>+</span><a href="news/index.html">News</a></li>
                <li id="menu-item-101" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-101"><span>+</span><a href="about-us/index.html">About us</a></li>
                <li id="menu-item-102" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-102"><span>+</span><a href="team/index.html">Team</a></li>
                <li id="menu-item-103" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-103"><span>+</span><a href="http://pixiesquad.com/">PixieSquad</a></li>
                <li id="menu-item-104" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-104"><span>+</span><a href="http://support.pixiesquad.com/">Support</a></li>
            </ul>
        </article>
        <!-- /BOX -->

        <article class="box aboutUs">
            <h4>
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="7px" height="8px"><path fill-rule="evenodd"  fill="rgb(57, 191, 253)" d="M-0.000,0.435 C-0.000,0.805 -0.000,7.292 -0.000,7.546 C-0.000,7.877 0.338,8.123 0.672,7.930 C0.940,7.775 6.293,4.649 6.750,4.381 C7.050,4.205 7.045,3.786 6.750,3.611 C6.421,3.415 1.048,0.272 0.658,0.054 C0.373,-0.106 -0.000,0.071 -0.000,0.435 Z"/></svg>
                About Us            </h4>

            <p>
                Now in the modern age, the gaming world is to be called ‘E-Sports’. Where our main focus lies. We have dedicated ourselves to develop our careers in this direction. As it’s where we can show our creativity in            </p>

            <a href="http://pixiesquad.com/" target="_blank">More About Us</a>
        </article>
        <!-- /BOX -->

    </div>
    <!-- /TOP-CONTAINER -->

    <div class="bottom">
        <div class="container">

            <article class="left">
                <h5 class="website">PixieHuge - Orange Elite</h5>

                <div class="social-icons">
                    <a href="http://facebook.com/pixiesquad" target="_blank"><i class="fa fa-facebook"></i></a><a href="https://twitter.com/PixieSquadTheme" target="_blank"><i class="fa fa-twitter"></i></a><a href="https://www.instagram.com/pixiesquadstudio/" target="_blank"><i class="fa fa-instagram"></i></a><a href="https://www.youtube.com/channel/UCOgbPXMkH0IpL-co4X6T1Qg/featured" target="_blank"><i class="fa fa-youtube"></i></a><a href="http://facebook.com/pixiesquad" target="_blank"><i class="fa fa-twitch"></i></a><a href="http://facebook.com/pixiesquad" target="_blank"><i class="fa fa-steam"></i></a><a href="http://facebook.com/pixiesquad" target="_blank">
                        <svg id="icon-discord" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18">
                            <path d="M 9.375 5.03125 L 8.75 5.09375 C 8.75 5.09375 6.008 5.39175 4 6.96875 L 3.96875 6.96875 L 3.9375 7 C 3.4875 7.406 3.31 7.897 3 8.625 C 2.69 9.353 2.3545 10.2835 2.0625 11.3125 C 1.4785 13.3705 1 15.844 1 18.125 L 1 18.34375 L 1.09375 18.53125 C 1.82075 19.77825 3.1155 20.578 4.3125 21.125 C 5.5095 21.672 6.535 21.94675 7.25 21.96875 L 7.71875 22 L 8.8125 19.65625 C 9.7225 19.85625 10.795 20 12 20 C 13.205 20 14.24625 19.85625 15.15625 19.65625 L 16.25 22 L 16.71875 21.96875 C 17.43375 21.94575 18.45925 21.672 19.65625 21.125 C 20.85325 20.578 22.149 19.77825 22.875 18.53125 L 22.96875 18.34375 L 22.96875 18.125 C 22.96975 15.844 22.5215 13.3705 21.9375 11.3125 C 21.6455 10.2835 21.309 9.352 21 8.625 C 20.691 7.898 20.48125 7.406 20.03125 7 L 20 6.96875 C 17.992 5.39175 15.21875 5.09375 15.21875 5.09375 L 14.625 5.03125 C 14.625 5.03125 14.17325 6.5485 14.03125 7.1875 C 13.14225 7.0725 12.419 7.03125 12 7.03125 C 11.581 7.03125 10.85775 7.0715 9.96875 7.1875 C 9.82675 6.5485 9.375 5.03125 9.375 5.03125 z M 8.125 7.1875 C 8.159 7.2895 8.221 7.418 8.25 7.5 C 7.235 7.73 6.27425 8.02775 5.28125 8.59375 L 6.125 10.3125 C 8.162 9.1535 11.099 9 12 9 C 12.901 9 15.838 9.1535 17.875 10.3125 L 18.6875 8.59375 C 17.6945 8.02875 16.8285 7.73 15.8125 7.5 C 15.8415 7.418 15.93475 7.2895 15.96875 7.1875 C 16.70075 7.3225 17.81175 7.62875 18.96875 8.46875 C 18.96275 8.47175 19.2935 8.87475 19.5625 9.46875 C 19.8385 10.07775 20.12925 10.8955 20.40625 11.8125 C 20.93825 13.5725 21.341 15.89425 21.375 17.78125 C 20.883 18.47525 19.97 19.11525 19 19.53125 C 18.154 19.89425 17.7105 20.02675 17.3125 20.09375 L 16.90625 19.21875 C 17.13825 19.14075 17.175 19.1435 17.375 19.0625 C 18.582 18.5755 19.21875 18.03125 19.21875 18.03125 L 18.40625 16.46875 C 18.40625 16.46875 17.9665 16.834 16.9375 17.25 C 15.9085 17.666 14.133 18.09375 12 18.09375 C 9.867 18.09375 8.4675 17.666 7.4375 17.25 C 6.4075 16.834 5.96875 16.46875 5.96875 16.46875 L 4.75 18.03125 C 4.75 18.03125 5.417 18.5755 6.625 19.0625 C 6.825 19.1435 6.892 19.14075 7.125 19.21875 L 6.6875 20.09375 C 6.2895 20.02675 5.81475 19.89425 4.96875 19.53125 C 3.99775 19.11425 3.08675 18.47525 2.59375 17.78125 C 2.62775 15.89525 3.0315 13.5725 3.5625 11.8125 C 3.8395 10.8955 4.1605 10.07775 4.4375 9.46875 C 4.7065 8.87475 5.006 8.47175 5 8.46875 C 6.157 7.62875 7.393 7.3225 8.125 7.1875 z M 9.5 12 C 8.6715729 12 8 12.895431 8 14 C 8 15.104569 8.6715729 16 9.5 16 C 10.328427 16 11 15.104569 11 14 C 11 12.895431 10.328427 12 9.5 12 z M 14.5 12 C 13.671573 12 13 12.895431 13 14 C 13 15.104569 13.671573 16 14.5 16 C 15.328427 16 16 15.104569 16 14 C 16 12.895431 15.328427 12 14.5 12 z"/>
                        </svg></a>                </div>
            </article>
            <!-- /LEFT -->


            <article class="right">
                <h5>Copyright PixieHuge, crafted with love by PixieSquad 2017</h5>
            </article>
            <!-- /RIGHT -->

        </div>
    </div>
    <!-- /BOTTOM-CONTAINER -->
</footer>
<!-- /FOOTER -->
<!-- Modal -->
<div class="search-modal modal fade" id="searchModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content search-box">
            <div class="modal-body">
                <form role="search" method="get" id="searchform" class="searchform" action="http://themes.pixiesquad.com/pixiehuge/orange-elite/" >
                    <div class="formSearch">
                        <input type="text" value="" name="s" id="s" />
                        <button type="submit" id="searchsubmit">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </form>            </div>
        </div>
    </div>
</div>
<!-- Modal#Menu -->
<div class="mo-modal modal fade" id="menuModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content mo-menu-box">
            <div class="modal-body">
                <ul id="header_menu_mobile" class="menu"><li id="menu-item-48" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-48"><a href="index.html">Home</a></li>
                    <li id="menu-item-49" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-49"><a href="news/index.html">Fresh News</a></li>
                    <li id="menu-item-99" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-99"><a href="all-matches/index.html">All Matches</a></li>
                    <li id="menu-item-50" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-50"><a href="all-teams/index.html">Our teams</a></li>
                    <li id="menu-item-51" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-51"><a href="about-us/index.html">About us</a></li>
                    <li id="menu-item-53" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-53"><a href="sponsor-page/index.html">Sponsors</a></li>
                </ul>            </div>
        </div>
    </div>
</div>
<script  src="login.js"></script>
<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
