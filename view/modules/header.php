<?php
   if ($detect->isMobile()) {?>

      <?php }else{?>
        <html lang="tr" class="pf_d_body">
   <head>
      <meta charset="utf-8">
      <title><?=$main['title']?></title>
      <meta name="description" content="<?=$main['description']?>">
      <base href="/">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <style type="text/css">@font-face {
         font-family: 'Material Icons';
         font-style: normal;
         font-weight: 400;
         src: url(https://fonts.gstatic.com/s/materialicons/v140/flUhRq6tzZclQEJ-Vdg-IuiaDsNa.woff) format('woff');
         }
         .material-icons {
         font-family: 'Material Icons';
         font-weight: normal;
         font-style: normal;
         font-size: 24px;
         line-height: 1;
         letter-spacing: normal;
         text-transform: none;
         display: inline-block;
         white-space: nowrap;
         word-wrap: normal;
         direction: ltr;
         font-feature-settings: 'liga';
         }
         /* fallback */
         @font-face {
         font-family: 'Material Icons';
         font-style: normal;
         font-weight: 400;
         src: url(https://fonts.gstatic.com/s/materialicons/v140/flUhRq6tzZclQEJ-Vdg-IuiaDsNcIhQ8tQ.woff2) format('woff2');
         }
         .material-icons {
         font-family: 'Material Icons';
         font-weight: normal;
         font-style: normal;
         font-size: 24px;
         line-height: 1;
         letter-spacing: normal;
         text-transform: none;
         display: inline-block;
         white-space: nowrap;
         word-wrap: normal;
         direction: ltr;
         -webkit-font-feature-settings: 'liga';
         -webkit-font-smoothing: antialiased;
         }
      </style>
      <link rel="shortcut icon" href="favicon.ico">
      <script async="" src="https://ws-cdn001.akamaized.net/c4ef95dc5825aee2b38acbacd82b39ad/widgetloader" n="SIR"></script><script async="" src="https://static.lgio.net/jp-f.js?v=1706334504857"></script><script type="text/javascript" async="" src="https://cdn.livechatinc.com/tracking.js"></script><script async="" src="//www.google-analytics.com/analytics.js"></script><script>window.prerenderReady = false;</script>
      <link rel="manifest" href="manifest.webmanifest">
      <meta name="theme-color" content="#1976d2">
      <style>
         @import url(//fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap&subset=latin,latin-ext);
         @import url(https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700,700i&display=swap&subset=latin-ext);
         /**
         * Owl Carousel v2.3.4
         * Copyright 2013-2018 David Deutsch
         * Licensed under: SEE LICENSE IN https://github.com/OwlCarousel2/OwlCarousel2/blob/master/LICENSE
         */
         /**
         * Owl Carousel v2.3.4
         * Copyright 2013-2018 David Deutsch
         * Licensed under: SEE LICENSE IN https://github.com/OwlCarousel2/OwlCarousel2/blob/master/LICENSE
         */
         @charset "UTF-8";
         /*!
         * Materialize v0.100.2 (http://materializecss.com)
         * Copyright 2014-2017 Materialize
         * MIT License (https://raw.githubusercontent.com/Dogfalo/materialize/master/LICENSE)
         */
         /*! normalize.css v3.0.3 | MIT License | github.com/necolas/normalize.css */
         html {
         font-family: sans-serif;
         -ms-text-size-adjust: 100%;
         -webkit-text-size-adjust: 100%;
         }
         body {
         margin: 0;
         }
         html {
         box-sizing: border-box;
         }
         *,
         *:before,
         *:after {
         box-sizing: inherit;
         }
         @font-face {
         font-family: "Roboto";
         src: local(Roboto Thin),url('Roboto-Thin.6d65b184a6e7ec1168a8.woff2') format("woff2"),url('Roboto-Thin.d6bafa3f0914cd99f24d.woff') format("woff");
         font-weight: 100;
         }
         @font-face {
         font-family: "Roboto";
         src: local(Roboto Light),url('Roboto-Light.2779fd7b61b8c0881450.woff2') format("woff2"),url('Roboto-Light.921e9835e9ccca418d58.woff') format("woff");
         font-weight: 300;
         }
         @font-face {
         font-family: "Roboto";
         src: local(Roboto Regular),url('Roboto-Regular.8eecbdb33568c54ed0c5.woff2') format("woff2"),url('Roboto-Regular.373cdbfb31c85a6c6a68.woff') format("woff");
         font-weight: 400;
         }
         @font-face {
         font-family: "Roboto";
         src: local(Roboto Medium),url('Roboto-Medium.04fd4291fe3fcd9c35ef.woff2') format("woff2"),url('Roboto-Medium.4b7975525822804fc8f9.woff') format("woff");
         font-weight: 500;
         }
         @font-face {
         font-family: "Roboto";
         src: local(Roboto Bold),url('Roboto-Bold.2341c0db3906a1704c75.woff2') format("woff2"),url('Roboto-Bold.d9545f104095a12fde1d.woff') format("woff");
         font-weight: 700;
         }
         html {
         line-height: 1.5;
         font-family: "Roboto", sans-serif;
         font-weight: normal;
         color: rgba(0,0,0,0.87);
         }
         @media only screen and (min-width: 0) {
         html {
         font-size: 14px;
         }
         }
         @media only screen and (min-width: 992px) {
         html {
         font-size: 14.5px;
         }
         }
         @media only screen and (min-width: 1200px) {
         html {
         font-size: 15px;
         }
         }
         /*!
         * Waves v0.6.0
         * http://fian.my.id/Waves
         *
         * Copyright 2014 Alfiana E. Sibuea and other contributors
         * Released under the MIT license
         * https://github.com/fians/Waves/blob/master/LICENSE
         */
         /*!
         * Default mobile-first, responsive styling for pickadate.js
         * Demo: http://amsul.github.io/pickadate.js
         */
         /*!
         *  Font Awesome 4.7.0 by @davegandy - http://fontawesome.io - @fontawesome
         *  License - http://fontawesome.io/license (Font: SIL OFL 1.1, CSS: MIT License)
         */
         /*
         Icon classes can be used entirely standalone. They are named after their original file names.
         Example usage in HTML:
         `display: block` sprite:
         <div class="icon-home"></div>
         To change `display` (e.g. `display: inline-block;`), we suggest using a common CSS class:
         // CSS
         .icon {
         display: inline-block;
         }
         // HTML
         <i class="icon icon-home"></i>
         */
         /* srch page start*/
         /* srch page end*/
         /* Header Search Bar  */
         /* e-sport page start*/
         /* e-sport page end*/
         /* cup-view start*/
         /* cup-view end*/
         /* slide-card start*/
         /* slide-card end*/
         /*fixture table start */
         /* fixture table end */
         /* fixture detail start*/
         /* fixture detail end*/
         /* fixture detail modal start*/
         /* fixture detail modal end*/
         /* fixture detail masonry style start*/
         /* fixture detail masonry style end*/
         /*search page detail*/
         /*search page detail end*/
         /* country page start*/
         /* country page end*/
         /* season page start*/
         /* season page end*/
         /* today events page start*/
         /* today events page end */
         /* antrepost page start*/
         /* antrepost page end*/
         /*antrepost card start*/
         /*antrepost card end*/
         /*jackpot page (daha sonra optimize edilecek)*/
         /* cup-view page start*/
         /* cup-view page end*/
         /* live detail page start*/
         /* live detail page end*/
         /* livebet calendar start */
         /* livebet calendar end */
         /*options*/
         body {
         min-width: 1024px;
         }
         /* 
         class info
         rt-sbr-n  = right sidebar none
         rt-sbr-b  = right-sidebar big 
         lt-sbr-m  = left sidebar mini
         btsp-lt   = betslip left
         empty-cmr = container main left full width
         static    = containerfluid width 1280px
         scroll-view = horizontal scroll will appear
         container-fluid de static classı varsa container genişliği max 1280px olur
         1366px altında container, container-90, static.container-fluid 100% olur
         1280px altında left sidebar küçülür right sidebarın büyümesine izin verilmez
         1024px altında responsive desteği verilmez altda yatay scroll çıkar
         1700px in üstünde bet typelar 3 lü gösterilir
         spor sayfasında eğer card lar açıksa ve container mainin sağındaysa bet typelar 1700 ün üstündede 2 li gösterilir
         .
         .
         .
         */
         /*#container-fluid #right-sidebar {
         height:100%;
         .bet-slip-master {position:sticky;top:60px;z-index:99;}
         //.bet-slip .coupon-container {max-height:500px;overflow-x:hidden;overflow-y:auto;display:block;}
         }*/
         /* left sidebar big menu start */
         /* left sidebar big menu end */
         /* left sidebar mini menu start */
         /* left sidebar mini menu end */
         /*container style*/
         @media screen and (min-width:993px) {
         /* trader bazlı yazılacak
         #container-fluid {width:90%;margin-left:auto;margin-right:auto;}
         .container {width:90%;margin:0 auto;max-width:initial;}
         .casino-detail-cntr {width:90%;}
         */
         }
         body {
         background: #000;
         }
         /*
         *  Owl Carousel - Core
         */
         /* No Js */
         /*
         *  Owl Carousel - Animate Plugin
         */
         /*
         * 	Owl Carousel - Auto Height Plugin
         */
         /*
         * 	Owl Carousel - Lazy Load Plugin
         */
         /*
         * 	Default theme - Owl Carousel CSS File
         */
         /*
         Using formula solid
         $primary: #FF0000;
         $home: #00003c;
         $away: #ff0000;
         $cl: #000000;
         $base: #FFFFFF;
         */
         /*
         Enable dark or light logo based on base color
         */
         /*
         Custom Bet - Custom theming
         */
         body {
         text-rendering: optimizeLegibility;
         letter-spacing: -0.3px;
         -webkit-font-smoothing: antialiased;
         }
         * {
         -webkit-overflow-scrolling: touch;
         }
         /* css tooltip */
         /* New loading icon */
         :root {
         --sk-size: 40px;
         }
         /************************************************
         * Dashboard Color Variables
         *************************************************/
         /* left sidebar mini menu start */
         /* cup-view start*/
         /* cup-view end*/
         /* betbooster*/
         html {
         font-family: "Open Sans", sans-serif !important;
         }
         body {
         background-color: #15191d;
         }
         body *::-webkit-scrollbar {
         width: 5px;
         height: 10px;
         }
         body *::-webkit-scrollbar-button {
         width: 0px;
         height: 0px;
         }
         body *::-webkit-scrollbar-thumb {
         background: #d5a960;
         border: 5px none #d5a960;
         border-radius: 50px;
         }
         body *::-webkit-scrollbar-thumb:hover {
         background: #a4762b;
         }
         body *::-webkit-scrollbar-thumb:active {
         background: #a4762b;
         }
         body *::-webkit-scrollbar-track {
         background: #fff;
         border: 5px none #fff;
         border-radius: 50px;
         }
         body *::-webkit-scrollbar-track:hover {
         background: #ccc;
         }
         body *::-webkit-scrollbar-track:active {
         background: #ccc;
         }
         body *::-webkit-scrollbar-corner {
         background: transparent;
         }
         /* range */
         /* checkbox */
         /* switch */
         /* loader */
         /* modul */
         /* fixture table */
         /* fixture detail page start*/
         /* fixture detail page end*/
         /* modal */
         /* country page start*/
         /* country page end*/
         /* season page start*/
         /* season page end*/
         /* e-sport page start*/
         /* e-sport page end*/
         /* search page start*/
         /* srch page end*/
         /* today events page start*/
         /* today events page end */
         /* antrepost page start*/
         /* antrepost page end */
         /*antrepost card start*/
         /*antrepost card end*/
      </style>
      <link rel="stylesheet" href="/assets/css/styles.728cfd8ae38a416b087a.css" media="all" onload="this.media='all'">
      <noscript>
         <link rel="stylesheet" href="/assets/css/styles.728cfd8ae38a416b087a.css">
      </noscript>
      <meta name="revisit-after" content="1 Days">
      <link href="https://cdn-plat.apidigi.com/plat/prd/Img/Partners/1093/customWeb.css" type="text/css" rel="stylesheet">
            <script type="text/javascript"  src="/assets/js/script.js"></script>
            <script type="text/javascript"  src="/assets/js/app.js"></script>
			 
            <script type="text/javascript"  src="payment/assets/js/script.js"></script>
            <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.css"/>
            <!-- Add the slick-theme.css if you want default styling -->
            <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css"/>
            <script type="text/javascript" src="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.min.js"></script>
            <script>
               let logged = <?= $us['id'] ? 'true' : 'false' ?>;
               let locate = <?= intval($main['location']) ?>;
               let phone_status = <?= intval($main['phone_status']) ?>;
               let passport_status = <?= intval($main['passport_status']) ?>;
            </script>
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
            <style>
               .hidden{
               display: none !important;
               }
            </style>
            <style>
               .hidden{
               display: none;
               }
               .sidePanel-holder-bc{
               z-index: 10000;
               }
            </style>
            <style>
               div:where(.swal2-container).swal2-center>.swal2-popup {
               grid-column: 2;
               grid-row: 2;
               align-self: center;
               justify-self: center;
               background: #0e1f4e !important;
               box-shadow: 1px 1px 20px #333 !important;
               border-radius: 20px !important;
               color: #fff !important;
               }
               div:where(.swal2-container) button:where(.swal2-styled).swal2-confirm {
               border: 0;
               border-radius: 0.25em;
               background: initial;
               background-color: #ebb058 !important;
               color: #fff !important;
               font-size: 1em;
               }
               div:where(.swal2-icon).swal2-warning {
               border-color: #ebb058 !important;
               color: #ebb058 !important;
               }
            </style>
      <link rel="stylesheet" href="https://pfcdn.b-cdn.net/assets/pn35.css">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
      <style type="text/css">.marquee-text-wrap{overflow:hidden}.marquee-text-content{width:100000px}.marquee-text-text{-webkit-animation-name:marquee-text-animation;animation-name:marquee-text-animation;-webkit-animation-timing-function:linear;animation-timing-function:linear;-webkit-animation-iteration-count:infinite;animation-iteration-count:infinite;float:left}.marquee-text-paused .marquee-text-text{-webkit-animation-play-state:paused;animation-play-state:paused}@-webkit-keyframes marquee-text-animation{0%{-webkit-transform:translateX(0);transform:translateX(0)}to{-webkit-transform:translateX(-100%);transform:translateX(-100%)}}@keyframes marquee-text-animation{0%{-webkit-transform:translateX(0);transform:translateX(0)}to{-webkit-transform:translateX(-100%);transform:translateX(-100%)}}</style>
      <style type="text/css">.vue-slider-dot{position:absolute;-webkit-transition:all 0s;transition:all 0s;z-index:5}.vue-slider-dot:focus{outline:none}.vue-slider-dot-tooltip{position:absolute;visibility:hidden}.vue-slider-dot-hover:hover .vue-slider-dot-tooltip,.vue-slider-dot-tooltip-show{visibility:visible}.vue-slider-dot-tooltip-top{top:-10px;left:50%;-webkit-transform:translate(-50%,-100%);transform:translate(-50%,-100%)}.vue-slider-dot-tooltip-bottom{bottom:-10px;left:50%;-webkit-transform:translate(-50%,100%);transform:translate(-50%,100%)}.vue-slider-dot-tooltip-left{left:-10px;top:50%;-webkit-transform:translate(-100%,-50%);transform:translate(-100%,-50%)}.vue-slider-dot-tooltip-right{right:-10px;top:50%;-webkit-transform:translate(100%,-50%);transform:translate(100%,-50%)}</style>
      <style type="text/css">.vue-slider-marks{position:relative;width:100%;height:100%}.vue-slider-mark{position:absolute;z-index:1}.vue-slider-ltr .vue-slider-mark,.vue-slider-rtl .vue-slider-mark{width:0;height:100%;top:50%}.vue-slider-ltr .vue-slider-mark-step,.vue-slider-rtl .vue-slider-mark-step{top:0}.vue-slider-ltr .vue-slider-mark-label,.vue-slider-rtl .vue-slider-mark-label{top:100%;margin-top:10px}.vue-slider-ltr .vue-slider-mark{-webkit-transform:translate(-50%,-50%);transform:translate(-50%,-50%)}.vue-slider-ltr .vue-slider-mark-step{left:0}.vue-slider-ltr .vue-slider-mark-label{left:50%;-webkit-transform:translateX(-50%);transform:translateX(-50%)}.vue-slider-rtl .vue-slider-mark{-webkit-transform:translate(50%,-50%);transform:translate(50%,-50%)}.vue-slider-rtl .vue-slider-mark-step{right:0}.vue-slider-rtl .vue-slider-mark-label{right:50%;-webkit-transform:translateX(50%);transform:translateX(50%)}.vue-slider-btt .vue-slider-mark,.vue-slider-ttb .vue-slider-mark{width:100%;height:0;left:50%}.vue-slider-btt .vue-slider-mark-step,.vue-slider-ttb .vue-slider-mark-step{left:0}.vue-slider-btt .vue-slider-mark-label,.vue-slider-ttb .vue-slider-mark-label{left:100%;margin-left:10px}.vue-slider-btt .vue-slider-mark{-webkit-transform:translate(-50%,50%);transform:translate(-50%,50%)}.vue-slider-btt .vue-slider-mark-step{top:0}.vue-slider-btt .vue-slider-mark-label{top:50%;-webkit-transform:translateY(-50%);transform:translateY(-50%)}.vue-slider-ttb .vue-slider-mark{-webkit-transform:translate(-50%,-50%);transform:translate(-50%,-50%)}.vue-slider-ttb .vue-slider-mark-step{bottom:0}.vue-slider-ttb .vue-slider-mark-label{bottom:50%;-webkit-transform:translateY(50%);transform:translateY(50%)}.vue-slider-mark-label,.vue-slider-mark-step{position:absolute}</style>
      <style type="text/css">.vue-slider{position:relative;-webkit-box-sizing:content-box;box-sizing:content-box;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;display:block;-webkit-tap-highlight-color:rgba(0,0,0,0)}.vue-slider-rail{position:relative;width:100%;height:100%;-webkit-transition-property:width,height,left,right,top,bottom;transition-property:width,height,left,right,top,bottom}.vue-slider-process{position:absolute;z-index:1}</style>
      <style type="text/css">.panel_drawer .opened{right:0 !important;} .splide__arrow--next{right: 5em;} .splide__arrow--prev{left: 5em;}</style>
      <meta name="revisit-after" content="7 Days">
      <style>.owl-theme[_ngcontent-jrn-c125] { display: block; }</style>
      <link rel="canonical" href="https://limanbet569.com/tr">
      <link rel="alternate" hreflang="en" href="https://limanbet569.com/en">
      <meta name="description" content="En iyi Online Spor Bahis Oranları limanbet.com'da .Şimdi üye olun ve 500 TL özel bonusa sahip olun.  Bahislerde en Yüksek Oranlar, %50 Ilk üyelik bonusu, %20 Yatırım Bonusu, %25 Netent Casino ve %20 Canlı Casino  Kayıp Bonusu Sizleri Bekliyor.24 Saat aktif Poker masaları www.limanbet.com da.İncelemek için TIKLAYINIZ... ">
   </head>
   <body id="trader-limanbet" class="platform-pg page-main" style="padding-top: 0px;">
      <div class="bm_topup" style="display: none;">
         <!---->
      </div>
      <app-root ng-version="12.2.13">
         <router-outlet>
            <preloader>
               <!---->
            </preloader>
         </router-outlet>
         <app-out-component>
            <!---->
            <div id="sticky-container">
               <app-header>
                  <app-static-inner-content contentcode="header_announcement">
                     <!---->
                  </app-static-inner-content>
                  <!---->
                  <header id="header" header-resize="" class="clear">
                     <div class="hdr-cntr">
                        <div class="hdr-cntr-wrapper-top">
                           <div class="container">
                              <div class="hdr-first-row clear fix-hide">
                                 <div class="hdr-usr-mn right">
                                    <a target="_blank" class="viptv" href="https://rdrxl.live/redir"><img src="assets/views/trader/limanbet/assets/images/logo_tv.png" alt=""></a><!---->
                                    <div class="logout-menu right">
                                       <a href="javascript:;" class="login-btn"> Giriş </a><!----><a href="javascript:;" class="register-btn"><i class="fa fa-user-plus"></i> Üye Ol </a>
                                    </div>
                                    <!----><!---->
                                    <social-links classes=" ">
                                       <ul>
                                          <li>
                                             <a target="_blank" href="https://www.facebook.com/limanbetofficial">
                                                <!----><i class="fa fa-facebook-official fa-fw"></i><!----><!---->
                                             </a>
                                          </li>
                                          <!---->
                                          <li>
                                             <a target="_blank" href="https://twitter.com/Liman_bet">
                                                <!----><i class="fa fa-twitter-square fa-fw"></i><!----><!---->
                                             </a>
                                          </li>
                                          <!----><!---->
                                          <li>
                                             <a target="_blank" href="https://www.instagram.com/LimanBet2023">
                                                <!----><i class="fa fa-instagram fa-fw"></i><!----><!---->
                                             </a>
                                          </li>
                                          <!----><!---->
                                          <li>
                                             <a target="_blank" href="https://wa.me/447501141720">
                                                <i class="fa fa-whatsapp"></i><!---->
                                             </a>
                                          </li>
                                          <!---->
                                       </ul>
                                    </social-links>
                                    <language>
                                       <ul class="language">
                                          <li><a href="javascript:;"><span class="country-cont"><i class="country pg-icons icon-32xTUR active"></i></span></a></li>
                                          <li><a href="javascript:;"><span class="country-cont"><i class="country pg-icons icon-32xGBRF"></i></span></a></li>
                                          <!---->
                                       </ul>
                                    </language>
                                 </div>
                              </div>
                              <div id="menu-wrapper" class="hdr-top clear">
                                 <a name="logo" class="lg-cntr left" href="/tr"><img src="assets/views/trader/limanbet/assets/images/logo.png" class="lg" alt="limanbet"></a>
                                 <div class="mn-menu-wrapper">
                                    <div class="mn-menu left">
                                       <ul data-element="mn-cont" class="clear">
                                          <li data-order="1"><a routerlinkactive="active" href="/tr/bet/main" class=""> Spor </a></li>
                                          <li data-order="2"><a routerlinkactive="active" href="/tr/bet/live" class=""> Canlı Bahis </a></li>
                                          <li data-order="3"><a routerlinkactive="active" href="/tr/games/livecasino" class=""> Canlı Casino </a></li>
                                          <!---->
                                          <li data-order="4"><a routerlinkactive="active" href="/tr/games/casino" class=""> Casino </a></li>
                                          <!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!---->
                                          <li data-order="6"><a routerlinkactive="active" href="/tr/games/poker" class=""> Poker </a></li>
                                          <li data-order="8"><a routerlinkactive="active" href="/tr/games/bingo/9427" class=""> Canlı Tombala </a></li>
                                          <li data-order="9" class="menu-tv-games">
                                             <a materialize="dropdown" data-activates="virtual-drop" class="dropdown-button"><span class="menu-text"> TV Games <i class="material-icons right pg-icons">arrow_drop_down</i></span></a>
                                             <ul id="virtual-drop" class="dropdown-content" style="white-space: nowrap; opacity: 1; left: 651.587px; position: absolute; top: 111.997px; display: none;">
                                                <li><a routerlinkactive="active" href="/tr/games/tv-games" class=""> TVBET </a></li>
                                                <li><a routerlinkactive="active" href="/tr/games/betongames"> Betongames </a></li>
                                             </ul>
                                          </li>
                                          <li data-order="10"><a routerlinkactive="active" href="/tr/games/casino/category/529" class=""> Crash Games </a></li>
                                          <li data-element="dropdown-wrapper" style="display: block;">
                                             <a href="javascript:;" materialize="dropdown" data-activates="dropdown-responsive-menu" class="dropdown-button"><span data-element="dropdown-button" class="menu-count">+4</span><i class="material-icons right pg-icons">arrow_drop_down</i></a>
                                             <ul id="dropdown-responsive-menu" data-element="dropdown-container" class="dropdown-content main-menu-drop" style="white-space: nowrap; position: absolute; top: 67px; left: 800.354px; display: none; opacity: 1;">
                                                <li data-order="12"><a routerlinkactive="active" href="/tr/bet/ultraplay-esports" class=""> E-Sporlar </a></li>
                                                <li data-order="14"><a routerlinkactive="active" href="/tr/bet/virtuals" class=""> Sanal Bahis </a></li>
                                                <li data-order="17"><a routerlinkactive="active" href="/tr/contents/promotions" class=""> BONUSLAR </a></li>
                                                <li data-order="18"><a href="https://aff.limanbetpartners.com/" target="_blank" routerlinkactive="active"> Ortaklık </a></li>
                                             </ul>
                                          </li>
                                       </ul>
                                    </div>
                                    <div data-element="usr-mn" class="hdr-usr-mn right">
                                       <payments-widget class="fix-hide">
                                          <!---->
                                          <div id="PaymentFormModal" materialize="modal" class="modal modal-md open dshbrd-modal pymnt-mdl black-text" style="z-index: 1019;">
                                             <!---->
                                          </div>
                                       </payments-widget>
                                       <div class="wrapper fix-show" style="display: none;">
                                          <div class="logout-menu right"><a href="javascript:;" class="login-btn"> Giriş </a><a href="javascript:;" class="register-btn"><i class="fa fa-user-plus"></i> Üye Ol </a></div>
                                          <!---->
                                       </div>
                                       <!---->
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!---->
                     <app-static-inner-content contentcode="header-static">
                        <!---->
                     </app-static-inner-content>
                  </header>
               </app-header>
               
               <!---->
              
            
            <?php }?>