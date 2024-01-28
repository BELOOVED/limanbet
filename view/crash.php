<?php
if ($detect->isMobile()) {?>
<?php }else {?>
<main>
   <router-outlet></router-outlet>
   <app-games class="ng-star-inserted">
      <router-outlet></router-outlet>
      <app-casino class="ng-star-inserted">
         <div materialize="modal" class="tckn-verification-modal modal modal-md open" style="z-index: 1125;">
            <tckn-verification type="openGame">
               <div class="dshbrd-mdl">
                  <div class="mdl-hdr">
                     <div class="inf-hdr"><span class="inf-title">Oturum Güvenliği Kimlik Numarası Kontrolü</span></div>
                  </div>
                  <div class="mdl-cntnt">
                     <div class="tckn-vrfctn">
                        <p>Güvenlik gereği bu işlemi gerçekleştirebilmek için TC Kimlik Numaranızın son 4 hanesini girmeniz gerekmektedir.</p>
                        <form novalidate="" class="ng-untouched ng-pristine ng-invalid">
                           <input type="password" id="tckn" required="" name="tckn" pattern="^[0-9]+$" class="browser-default ng-untouched ng-pristine ng-invalid" placeholder="TC Kimlik No Son 4 Hanesini giriniz" minlength="4" maxlength="4"><!----><!---->
                           <div class="input-field">
                              <!----><button class="btn ng-star-inserted" disabled="">Gönder</button><!---->
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </tckn-verification>
         </div>
         <div class="casino-bg">
            <slider>
               <div class="carousel-container">
                  <!---->
               </div>
            </slider>
            <!----><!---->
            <app-static-inner-content contentcode="casino">
               <div extroutelink="" id="casino" class="ng-star-inserted">
                  <panel-gallery gallery="27" autoplay="true" type="loop" interval="5000" arrows="true" vce-ready="">
                     <div id="panel_gallery27" class="panel_gallery bmm bm">
                        <div>
                           <div class="splide splide--loop splide--ltr splide--draggable is-active" id="splide19" style="visibility: visible;">
                              <div class="splide__arrows">
                                 <button class="splide__arrow splide__arrow--prev" type="button" aria-controls="splide19-track" aria-label="Previous slide">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40" width="40" height="40">
                                       <path d="m15.5 0.932-4.3 4.38 14.5 14.6-14.5 14.5 4.3 4.4 14.6-14.6 4.4-4.3-4.4-4.4-14.6-14.6z"></path>
                                    </svg>
                                 </button>
                                 <button class="splide__arrow splide__arrow--next" type="button" aria-controls="splide19-track" aria-label="Next slide">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40" width="40" height="40">
                                       <path d="m15.5 0.932-4.3 4.38 14.5 14.6-14.5 14.5 4.3 4.4 14.6-14.6 4.4-4.3-4.4-4.4-14.6-14.6z"></path>
                                    </svg>
                                 </button>
                              </div>
                              <div class="splide__track" id="splide19-track">
                                 <svg id="placeholder_svg_new" width="0" height="0" class="placeholder_svg">
                                    <rect width="100%" height="100%" class="rect"></rect>
                                 </svg>
                                 <ul class="splide__list" id="splide19-list" style="transform: translateX(-2850px);">
                                    <li class="splide__slide panel_gallery_item splide__slide--clone" style="width: 1425px;" aria-hidden="true" tabindex="-1">
                                       <div class="panel_galery_content" style="display: none;"></div>
                                       <!----><!----><a class="panel_slide_cover no_link"><img data-splide-lazy="https://cdn.pandestek.com/other/slotyuzde20.jpg" aria-rowindex="0" class="" srcset="" src="https://cdn.pandestek.com/other/slotyuzde20.jpg" style=""></a>
                                    </li>
                                    <li class="splide__slide panel_gallery_item splide__slide--clone" style="width: 1425px;">
                                       <div class="panel_galery_content" style="display: none;"></div>
                                       <!----><!----><a class="panel_slide_cover no_link"><img data-splide-lazy="https://cdn.pandestek.com/other/slotyuzde20.jpg" aria-rowindex="0" class="" srcset="" src="https://cdn.pandestek.com/other/slotyuzde20.jpg" style=""></a>
                                    </li>
                                    <li class="splide__slide panel_gallery_item is-active is-visible" id="splide19-slide01" style="width: 1425px;" aria-hidden="false" tabindex="0">
                                       <div class="panel_galery_content" style="display: none;"></div>
                                       <!----><!----><a class="panel_slide_cover no_link"><img data-splide-lazy="https://cdn.pandestek.com/other/slotyuzde20.jpg" aria-rowindex="0" class="" srcset="" src="https://cdn.pandestek.com/other/slotyuzde20.jpg" style=""></a>
                                    </li>
                                    <li class="splide__slide panel_gallery_item splide__slide--clone" style="width: 1425px;">
                                       <div class="panel_galery_content" style="display: none;"></div>
                                       <!----><!----><a class="panel_slide_cover no_link"><img data-splide-lazy="https://cdn.pandestek.com/other/slotyuzde20.jpg" aria-rowindex="0" class="" srcset="" src="https://cdn.pandestek.com/other/slotyuzde20.jpg" style=""></a>
                                    </li>
                                    <li class="splide__slide panel_gallery_item splide__slide--clone" style="width: 1425px;">
                                       <div class="panel_galery_content" style="display: none;"></div>
                                       <!----><!----><a class="panel_slide_cover no_link"><img data-splide-lazy="https://cdn.pandestek.com/other/slotyuzde20.jpg" aria-rowindex="0" class="" srcset="" src="https://cdn.pandestek.com/other/slotyuzde20.jpg" style=""></a>
                                    </li>
                                 </ul>
                              </div>
                              <div></div>
                              <ul class="splide__pagination">
                                 <li><button class="splide__pagination__page is-active" type="button" aria-current="true" aria-controls="splide19-slide01" aria-label="Go to slide 1"></button></li>
                              </ul>
                           </div>
                           <div class="panel_gallery_module">
                              <!---->
                           </div>
                        </div>
                     </div>
                  </panel-gallery>
               </div>
               <div class="ng-star-inserted"></div>
               <div class="ng-star-inserted">
                  <style type="text/css">
                     body {
                     background-size: cover !important;
                     }
                     .casino-cntr {
                     margin-top: 0;
                     padding-top:  0 !important;
                     }
                     .rtitle {
                     margin-top: 0px !important;
                     } 
                     #com-egt-jackpot-html-jackpotBanner {
                     display:none;
                     }
                     .casino-filters {
                     margin-top: -0px !important;
                     }
                     .ltitle  {
                     margin-top: 0px !important;
                     }
                  </style>
               </div>
               <!----><!---->
            </app-static-inner-content>
            <!---->
            <div id="p-csn" class="container casino-cntr ng-star-inserted">
               <!---->
               <div class="row">
                  <div class="col s2 left-content ng-star-inserted">
                     <app-static-inner-content contentcode="casino-left-top">
                        <!---->
                     </app-static-inner-content>
                     <h4 class="ltitle truncate" title="28/20 Oyun"><span class="count">28/20</span>Oyun </h4>
                     <div>
                        <div class="input-field search-cntr"><i class="material-icons pg-icons prefix">search</i><input type="text" class="browser-default ng-untouched ng-pristine ng-valid" placeholder="Oyun Ara"></div>
                        <div class="collection ng-star-inserted">
                           <app-category-container>
                              <a href="javascript:;" class="collection-item flex-container ng-star-inserted" title="Hepsi"><i class="left pg-icons fa fa-star"></i><span class="text flex-item">Hepsi</span><span class="secondary-content count">6311</span></a><!----><!----><!----><a href="javascript:;" class="collection-item flex-container ng-star-inserted" title="Size Özel"><i class="left pg-icons fa fa-star"></i><span class="text flex-item">Size Özel</span><span class="secondary-content count">332</span></a><!----><!----><!----><a href="javascript:;" class="collection-item flex-container ng-star-inserted" title="Popüler"><i class="left pg-icons fa fa-star"></i><span class="text flex-item">Popüler</span><span class="secondary-content count">260</span></a><!----><!----><!----><a href="javascript:;" class="collection-item flex-container ng-star-inserted" title="Yeni"><i class="left pg-icons fa fa-star"></i><span class="text flex-item">Yeni</span><span class="secondary-content count">90</span></a><!----><!----><!----><!----><!----><a href="javascript:;" class="collection-item flex-container ng-star-inserted" title="Rulet"><i class="left pg-icons fa fa-star"></i><span class="text flex-item">Rulet</span><span class="secondary-content count">62</span></a><!----><!----><!----><a href="javascript:;" class="collection-item flex-container ng-star-inserted" title="Poker"><i class="left pg-icons fa fa-star"></i><span class="text flex-item">Poker</span><span class="secondary-content count">11</span></a><!----><!----><!----><a href="javascript:;" class="collection-item flex-container ng-star-inserted" title="Bakarat"><i class="left pg-icons fa fa-star"></i><span class="text flex-item">Bakarat</span><span class="secondary-content count">17</span></a><!----><!----><!----><a href="javascript:;" class="collection-item flex-container ng-star-inserted" title="Balık Tutma ve Avlanma"><i class="left pg-icons fa fa-star"></i><span class="text flex-item">Balık Tutma ve Avlanma</span><span class="secondary-content count">46</span></a><!----><!----><!----><a href="javascript:;" class="collection-item flex-container ng-star-inserted" title="Blackjack"><i class="left pg-icons fa fa-star"></i><span class="text flex-item">Blackjack</span><span class="secondary-content count">47</span></a><!----><!----><!----><a href="javascript:;" class="collection-item flex-container ng-star-inserted" title="Diğer Oyunlar"><i class="left pg-icons fa fa-star"></i><span class="text flex-item">Diğer Oyunlar</span><span class="secondary-content count">33</span></a><!----><!----><!----><a href="javascript:;" class="collection-item flex-container ng-star-inserted" title="Kazı Kazan"><i class="left pg-icons fa fa-star"></i><span class="text flex-item">Kazı Kazan</span><span class="secondary-content count">76</span></a><!----><!----><!----><a href="javascript:;" class="collection-item flex-container ng-star-inserted" title="Loto"><i class="left pg-icons fa fa-star"></i><span class="text flex-item">Loto</span><span class="secondary-content count">43</span></a><!----><!----><!----><a href="javascript:;" class="collection-item flex-container ng-star-inserted" title="Masa Oyunları"><i class="left pg-icons fa fa-star"></i><span class="text flex-item">Masa Oyunları</span><span class="secondary-content count">38</span></a><!----><!----><!----><a href="javascript:;" class="collection-item flex-container ng-star-inserted" title="Mines"><i class="left pg-icons fa fa-star"></i><span class="text flex-item">Mines</span><span class="secondary-content count">14</span></a><!----><!----><!----><a href="javascript:;" class="collection-item flex-container ng-star-inserted" title="Smart Slotlar"><i class="left pg-icons fa fa-star"></i><span class="text flex-item">Smart Slotlar</span><span class="secondary-content count">48</span></a><!----><!----><!----><a href="javascript:;" class="collection-item flex-container ng-star-inserted" title="Video Poker"><i class="left pg-icons fa fa-star"></i><span class="text flex-item">Video Poker</span><span class="secondary-content count">82</span></a><!----><!----><!----><a href="javascript:;" class="collection-item flex-container ng-star-inserted" title="Video Slotlar"><i class="left pg-icons fa fa-star"></i><span class="text flex-item">Video Slotlar</span><span class="secondary-content count">5794</span></a><!----><!----><!----><!----><!----><!---->
                           </app-category-container>
                        </div>
                        <!----><!---->
                     </div>
                     <app-static-inner-content contentcode="casino-left-bottom">
                        <!---->
                     </app-static-inner-content>
                  </div>
                  <!---->
                  <div id="casino-right" class="col right-content s10">
                     <egt-jackpot-banner class="ng-star-inserted">
                        <div id="com-egt-jackpot-html-jackpotBanner" style="padding: 10px 0px; position: relative;" class="com-egt-jackpot-html-xsm">
                           <a target="_blank" href="/tr/games/casino/egt" class="com-egt-jackpot-html-logo com-egt-jackpot-html-mobile" style="height: 48px;"></a>
                           <div class="com-egt-jackpot-html-box com-egt-jackpot-html-IV com-egt-jackpot-html-equal" style="border-width: 2px; border-radius: 6px; border-style: solid; border-color: rgb(82, 77, 81); height: 48px; display: block;">
                              <div class="com-egt-jackpot-html-value">
                                 <div class="com-egt-jackpot-html-numbers com-egt-jackpot-html-first"></div>
                                 <div class="com-egt-jackpot-html-numbers" style="display: none; line-height: 44px;"><span class="com-egt-jackpot-html-digit"><span class="com-egt-jackpot-html-old" style="height: 44px;">0</span><span class="com-egt-jackpot-html-new" style="height: 44px;"></span></span></div>
                                 <div class="com-egt-jackpot-html-numbers" style="display: none; line-height: 44px;"><span class="com-egt-jackpot-html-digit"><span class="com-egt-jackpot-html-old" style="height: 44px;">0</span><span class="com-egt-jackpot-html-new" style="height: 44px;"></span></span></div>
                                 <div class="com-egt-jackpot-html-numbers" style="display: block; line-height: 44px;"><span class="com-egt-jackpot-html-digit"><span class="com-egt-jackpot-html-old" style="height: 44px;">7</span><span class="com-egt-jackpot-html-new" style="height: 44px;"></span></span></div>
                                 <div class="com-egt-jackpot-html-numbers" style="display: block; line-height: 44px;"><span class="com-egt-jackpot-html-digit"><span class="com-egt-jackpot-html-old" style="height: 44px;">2</span><span class="com-egt-jackpot-html-new" style="height: 44px;"></span></span></div>
                                 <div class="com-egt-jackpot-html-numbers" style="display: block; line-height: 44px;"><span class="com-egt-jackpot-html-digit"><span class="com-egt-jackpot-html-old" style="height: 44px;">0</span><span class="com-egt-jackpot-html-new" style="height: 44px;"></span></span></div>
                                 <div class="com-egt-jackpot-html-numbers" style="display: block; line-height: 44px;"><span class="com-egt-jackpot-html-digit"><span class="com-egt-jackpot-html-old" style="height: 44px;">5</span><span class="com-egt-jackpot-html-new" style="height: 44px;"></span></span></div>
                                 <div class="com-egt-jackpot-html-numbers" style="display: block; line-height: 44px;"><span class="com-egt-jackpot-html-digit"><span class="com-egt-jackpot-html-old" style="height: 44px;">8</span><span class="com-egt-jackpot-html-new" style="height: 44px;"></span></span></div>
                                 <div class="com-egt-jackpot-html-numbers com-egt-jackpot-html-dot" style="display: block; line-height: 44px;"><span>.</span></div>
                                 <div class="com-egt-jackpot-html-numbers" style="display: block; line-height: 44px;"><span class="com-egt-jackpot-html-digit"><span class="com-egt-jackpot-html-old" style="height: 44px;">5</span><span class="com-egt-jackpot-html-new" style="height: 44px;"></span></span></div>
                                 <div class="com-egt-jackpot-html-numbers" style="display: block; line-height: 44px;"><span class="com-egt-jackpot-html-digit"><span class="com-egt-jackpot-html-old" style="height: 44px;">6</span><span class="com-egt-jackpot-html-new" style="height: 44px;"></span></span></div>
                              </div>
                              <div class="com-egt-jackpot-html-level" width="41" height="41" style="left: -21.5px; top: 1.5px; width: 41px; height: 41px; background-image: url(&quot;/images/common/assets/images/egt/img/IV.png&quot;);"></div>
                              <div class="com-egt-jackpot-html-currency" style="line-height: 12px; font-size: 8px;"><span class="com-egt-jackpot-html-currencyText" style="padding-top: 6px;">TRY</span></div>
                              <img src="/images/common/assets/images/egt/img/dummy.png" class="com-egt-jackpot-html-dummyImg" usemap="#IV" style="top: 0px; left: 0px; width: 100px; height: 48px;">
                              <map name="IV">
                                 <area shape="poly" href="javascript: void(0);" coords="0,0,100,0,100,48,0,48">
                              </map>
                           </div>
                           <div class="com-egt-jackpot-html-box com-egt-jackpot-html-III com-egt-jackpot-html-equal" style="border-width: 2px; border-radius: 6px; border-style: solid; border-color: rgb(82, 77, 81); height: 48px; display: block;">
                              <div class="com-egt-jackpot-html-value">
                                 <div class="com-egt-jackpot-html-numbers com-egt-jackpot-html-first"></div>
                                 <div class="com-egt-jackpot-html-numbers" style="display: none; line-height: 44px;"><span class="com-egt-jackpot-html-digit"><span class="com-egt-jackpot-html-old" style="height: 44px;">0</span><span class="com-egt-jackpot-html-new" style="height: 44px;"></span></span></div>
                                 <div class="com-egt-jackpot-html-numbers" style="display: none; line-height: 44px;"><span class="com-egt-jackpot-html-digit"><span class="com-egt-jackpot-html-old" style="height: 44px;">0</span><span class="com-egt-jackpot-html-new" style="height: 44px;"></span></span></div>
                                 <div class="com-egt-jackpot-html-numbers" style="display: block; line-height: 44px;"><span class="com-egt-jackpot-html-digit"><span class="com-egt-jackpot-html-old" style="height: 44px;">6</span><span class="com-egt-jackpot-html-new" style="height: 44px;"></span></span></div>
                                 <div class="com-egt-jackpot-html-numbers" style="display: block; line-height: 44px;"><span class="com-egt-jackpot-html-digit"><span class="com-egt-jackpot-html-old" style="height: 44px;">6</span><span class="com-egt-jackpot-html-new" style="height: 44px;"></span></span></div>
                                 <div class="com-egt-jackpot-html-numbers" style="display: block; line-height: 44px;"><span class="com-egt-jackpot-html-digit"><span class="com-egt-jackpot-html-old" style="height: 44px;">4</span><span class="com-egt-jackpot-html-new" style="height: 44px;"></span></span></div>
                                 <div class="com-egt-jackpot-html-numbers" style="display: block; line-height: 44px;"><span class="com-egt-jackpot-html-digit"><span class="com-egt-jackpot-html-old" style="height: 44px;">3</span><span class="com-egt-jackpot-html-new" style="height: 44px;"></span></span></div>
                                 <div class="com-egt-jackpot-html-numbers com-egt-jackpot-html-dot" style="display: block; line-height: 44px;"><span>.</span></div>
                                 <div class="com-egt-jackpot-html-numbers" style="display: block; line-height: 44px;"><span class="com-egt-jackpot-html-digit"><span class="com-egt-jackpot-html-old" style="height: 44px;">4</span><span class="com-egt-jackpot-html-new" style="height: 44px;"></span></span></div>
                                 <div class="com-egt-jackpot-html-numbers" style="display: block; line-height: 44px;"><span class="com-egt-jackpot-html-digit"><span class="com-egt-jackpot-html-old" style="height: 44px;">3</span><span class="com-egt-jackpot-html-new" style="height: 44px;"></span></span></div>
                              </div>
                              <div class="com-egt-jackpot-html-level" width="41" height="41" style="left: -21.5px; top: 1.5px; width: 41px; height: 41px; background-image: url(&quot;/images/common/assets/images/egt/img/III.png&quot;);"></div>
                              <div class="com-egt-jackpot-html-currency" style="line-height: 12px; font-size: 8px;"><span class="com-egt-jackpot-html-currencyText" style="padding-top: 6px;">TRY</span></div>
                              <img src="/images/common/assets/images/egt/img/dummy.png" class="com-egt-jackpot-html-dummyImg" usemap="#III" style="top: 0px; left: 0px; width: 100px; height: 48px;">
                              <map name="III">
                                 <area shape="poly" href="javascript: void(0);" coords="0,0,100,0,100,48,0,48">
                              </map>
                           </div>
                           <a target="_blank" href="/tr/games/casino/egt" class="com-egt-jackpot-html-logo" style="height: 48px;"></a>
                           <div class="com-egt-jackpot-html-box com-egt-jackpot-html-II com-egt-jackpot-html-equal" style="border-width: 2px; border-radius: 6px; border-style: solid; border-color: rgb(82, 77, 81); height: 48px; display: block;">
                              <div class="com-egt-jackpot-html-value">
                                 <div class="com-egt-jackpot-html-numbers com-egt-jackpot-html-first"></div>
                                 <div class="com-egt-jackpot-html-numbers" style="display: none; line-height: 44px;"><span class="com-egt-jackpot-html-digit"><span class="com-egt-jackpot-html-old" style="height: 44px;">0</span><span class="com-egt-jackpot-html-new" style="height: 44px;"></span></span></div>
                                 <div class="com-egt-jackpot-html-numbers" style="display: none; line-height: 44px;"><span class="com-egt-jackpot-html-digit"><span class="com-egt-jackpot-html-old" style="height: 44px;">0</span><span class="com-egt-jackpot-html-new" style="height: 44px;"></span></span></div>
                                 <div class="com-egt-jackpot-html-numbers" style="display: block; line-height: 44px;"><span class="com-egt-jackpot-html-digit"><span class="com-egt-jackpot-html-old" style="height: 44px;">1</span><span class="com-egt-jackpot-html-new" style="height: 44px;"></span></span></div>
                                 <div class="com-egt-jackpot-html-numbers" style="display: block; line-height: 44px;"><span class="com-egt-jackpot-html-digit"><span class="com-egt-jackpot-html-old" style="height: 44px;">7</span><span class="com-egt-jackpot-html-new" style="height: 44px;"></span></span></div>
                                 <div class="com-egt-jackpot-html-numbers" style="display: block; line-height: 44px;"><span class="com-egt-jackpot-html-digit"><span class="com-egt-jackpot-html-old" style="height: 44px;">1</span><span class="com-egt-jackpot-html-new" style="height: 44px;"></span></span></div>
                                 <div class="com-egt-jackpot-html-numbers com-egt-jackpot-html-dot" style="display: block; line-height: 44px;"><span>.</span></div>
                                 <div class="com-egt-jackpot-html-numbers" style="display: block; line-height: 44px;"><span class="com-egt-jackpot-html-digit"><span class="com-egt-jackpot-html-old" style="height: 44px;">4</span><span class="com-egt-jackpot-html-new" style="height: 44px;"></span></span></div>
                                 <div class="com-egt-jackpot-html-numbers" style="display: block; line-height: 44px;"><span class="com-egt-jackpot-html-digit"><span class="com-egt-jackpot-html-old" style="height: 44px;">5</span><span class="com-egt-jackpot-html-new" style="height: 44px;"></span></span></div>
                              </div>
                              <div class="com-egt-jackpot-html-level" width="41" height="41" style="left: -21.5px; top: 1.5px; width: 41px; height: 41px; background-image: url(&quot;/images/common/assets/images/egt/img/II.png&quot;);"></div>
                              <div class="com-egt-jackpot-html-currency" style="line-height: 12px; font-size: 8px;"><span class="com-egt-jackpot-html-currencyText" style="padding-top: 6px;">TRY</span></div>
                              <img src="/images/common/assets/images/egt/img/dummy.png" class="com-egt-jackpot-html-dummyImg" usemap="#II" style="top: 0px; left: 0px; width: 100px; height: 48px;">
                              <map name="II">
                                 <area shape="poly" href="javascript: void(0);" coords="0,0,100,0,100,48,0,48">
                              </map>
                           </div>
                           <div class="com-egt-jackpot-html-box com-egt-jackpot-html-I com-egt-jackpot-html-equal" style="border-width: 2px; border-radius: 6px; border-style: solid; border-color: rgb(82, 77, 81); height: 48px; display: block;">
                              <div class="com-egt-jackpot-html-value">
                                 <div class="com-egt-jackpot-html-numbers com-egt-jackpot-html-first"></div>
                                 <div class="com-egt-jackpot-html-numbers" style="display: none; line-height: 44px;"><span class="com-egt-jackpot-html-digit"><span class="com-egt-jackpot-html-old" style="height: 44px;">0</span><span class="com-egt-jackpot-html-new" style="height: 44px;"></span></span></div>
                                 <div class="com-egt-jackpot-html-numbers" style="display: block; line-height: 44px;"><span class="com-egt-jackpot-html-digit"><span class="com-egt-jackpot-html-old" style="height: 44px;">1</span><span class="com-egt-jackpot-html-new" style="height: 44px;"></span></span></div>
                                 <div class="com-egt-jackpot-html-numbers" style="display: block; line-height: 44px;"><span class="com-egt-jackpot-html-digit"><span class="com-egt-jackpot-html-old" style="height: 44px;">3</span><span class="com-egt-jackpot-html-new" style="height: 44px;"></span></span></div>
                                 <div class="com-egt-jackpot-html-numbers" style="display: block; line-height: 44px;"><span class="com-egt-jackpot-html-digit"><span class="com-egt-jackpot-html-old" style="height: 44px;">8</span><span class="com-egt-jackpot-html-new" style="height: 44px;"></span></span></div>
                                 <div class="com-egt-jackpot-html-numbers com-egt-jackpot-html-dot" style="display: block; line-height: 44px;"><span>.</span></div>
                                 <div class="com-egt-jackpot-html-numbers" style="display: block; line-height: 44px;"><span class="com-egt-jackpot-html-digit"><span class="com-egt-jackpot-html-old" style="height: 44px;">2</span><span class="com-egt-jackpot-html-new" style="height: 44px;"></span></span></div>
                                 <div class="com-egt-jackpot-html-numbers" style="display: block; line-height: 44px;"><span class="com-egt-jackpot-html-digit"><span class="com-egt-jackpot-html-old" style="height: 44px;">2</span><span class="com-egt-jackpot-html-new" style="height: 44px;"></span></span></div>
                              </div>
                              <div class="com-egt-jackpot-html-level" width="41" height="41" style="left: -21.5px; top: 1.5px; width: 41px; height: 41px; background-image: url(&quot;/images/common/assets/images/egt/img/I.png&quot;);"></div>
                              <div class="com-egt-jackpot-html-currency" style="line-height: 12px; font-size: 8px;"><span class="com-egt-jackpot-html-currencyText" style="padding-top: 6px;">TRY</span></div>
                              <img src="/images/common/assets/images/egt/img/dummy.png" class="com-egt-jackpot-html-dummyImg" usemap="#I" style="top: 0px; left: 0px; width: 100px; height: 48px;">
                              <map name="I">
                                 <area shape="poly" href="javascript: void(0);" coords="0,0,100,0,100,48,0,48">
                              </map>
                           </div>
                           <div class="com-egt-jackpot-html-clear-fix"></div>
                           <div class="com-egt-jackpot-html-popUpMask">
                              <div class="com-egt-jackpot-html-popUp" style="opacity: 0; width: 100px; border-width: 2px; border-style: solid; border-color: rgb(82, 77, 81); display: block;">
                                 <span class="com-egt-jackpot-html-before" style="top: 100%; left: 50%; margin-left: -14px; border-left: 14px solid transparent; border-right: 14px solid transparent; border-top: 14px solid rgb(82, 77, 81);"></span>
                                 <div class="com-egt-jackpot-html-div"><span id="com-egt-jackpot-html-topWin"></span><span id="com-egt-jackpot-html-topWinDate" class="com-egt-jackpot-html-date com-egt-jackpot-html-right" style="color: rgb(178, 220, 234);"></span></div>
                                 <div class="com-egt-jackpot-html-div com-egt-jackpot-html-center"><span id="com-egt-jackpot-html-topPrice" class="com-egt-jackpot-html-price"></span><span class="com-egt-jackpot-html-cur"></span></div>
                                 <span class="com-egt-jackpot-html-divider"></span>
                                 <div class="com-egt-jackpot-html-div"><span id="com-egt-jackpot-html-countWins"></span><span id="com-egt-jackpot-html-countWinsNumber" class="com-egt-jackpot-html-count com-egt-jackpot-html-right"></span></div>
                                 <span class="com-egt-jackpot-html-divider"></span>
                                 <div class="com-egt-jackpot-html-div"><span id="com-egt-jackpot-html-lastWin"></span><span id="com-egt-jackpot-html-lastWinDate" class="com-egt-jackpot-html-date com-egt-jackpot-html-right" style="color: rgb(178, 220, 234);"></span></div>
                                 <div class="com-egt-jackpot-html-div"><span id="com-egt-jackpot-html-lastWinner" style="color: rgb(170, 193, 207);"></span></div>
                                 <div class="com-egt-jackpot-html-div com-egt-jackpot-html-center"><span id="com-egt-jackpot-html-lastPrice" class="com-egt-jackpot-html-price"></span><span class="com-egt-jackpot-html-cur"></span></div>
                                 <span class="com-egt-jackpot-html-divider com-egt-jackpot-html-last"></span><span class="com-egt-jackpot-html-after" style="top: 100%; left: 50%; margin-left: -10px; border-left: 10px solid transparent; border-right: 10px solid transparent; border-top: 10px solid rgb(0, 0, 0);"></span>
                              </div>
                           </div>
                        </div>
                     </egt-jackpot-banner>
                     <!----><!---->
                     <div class="flex-container clear csn-rtitle-wrap">
                        <h4 class="rtitle flex-item ng-star-inserted"> Crash Oyunları </h4>
                        <!----><!---->
                        <div class="casino-filters">
                           <!----><!---->
                           <select class="browser-default method left ng-untouched ng-pristine ng-valid">
                              <option selected="selected" value="1">Sayfa İçi</option>
                              <option value="2">Yeni Pencere</option>
                           </select>
                        </div>
                     </div>
                     <div class="gm-wrap">
                        <div class="flex-container clear vendor-t-c crsr-pntr ng-star-inserted">
                           <div class="vendor-title flex-item"> Oyun Sağlayıcı </div>
                           <a href="javascript:;" class="vendors-toggle-btn btn"><i class="fa fa-plus-circle pg-icons"></i><i class="fa fa-minus-circle pg-icons hide"></i></a>
                        </div>
                        <!---->
                        <app-horizontal-scroll pathcode="casino" class="ng-star-inserted">
                           <!----><!----><!----><!---->
                        </app-horizontal-scroll>
                        <!----><!---->
                        <div class="gm-cntr">
                           <div class="row">
                              <!----><!---->
                              <div class="col pg-grd-5 csn-crd-col ng-star-inserted">
                                 <div class="csn-crd">
                                    <div class="crd-img">
                                       <img class="gm-img" alt="JetLiman" src="/images/common/assets/images/casino/300x200/24578.jpg"><img alt="" class="gm-img loading" src="/images/common/assets/images/loading.gif">
                                       <div class="inf">
                                          <!----><!----><!---->
                                       </div>
                                       <app-user-favorite classes="fvrt-lnk left">
                                          <!---->
                                       </app-user-favorite>
                                       <div class="vndr"><img alt="" class="vndr-lg" src="/images/common/assets/images/casino/32x32/smart_soft.png"></div>
                                       <div class="hvr-inf">
                                          <div class="v-a">
                                             <a href="javascript:;" class="btn real"> Gerçek Oyun </a><a href="javascript:;" class="btn free ng-star-inserted"> Zevkine Oyna </a><!---->
                                          </div>
                                       </div>
                                    </div>
                                    <div class="crd-nm">
                                       <span class="display-block">JetLiman</span><!---->
                                    </div>
                                 </div>
                              </div>
                              <div class="col pg-grd-5 csn-crd-col ng-star-inserted">
                                 <div class="csn-crd">
                                    <div class="crd-img">
                                       <img class="gm-img" alt="Spaceman" src="/images/common/assets/images/casino/300x200/19364.jpg"><img alt="" class="gm-img loading" src="/images/common/assets/images/loading.gif">
                                       <div class="inf">
                                          <!----><!----><!---->
                                       </div>
                                       <app-user-favorite classes="fvrt-lnk left">
                                          <!---->
                                       </app-user-favorite>
                                       <div class="vndr"><img alt="" class="vndr-lg" src="/images/common/assets/images/casino/32x32/pragmatic_play.png"></div>
                                       <div class="hvr-inf">
                                          <div class="v-a">
                                             <a href="javascript:;" class="btn real"> Gerçek Oyun </a><a href="javascript:;" class="btn free ng-star-inserted"> Zevkine Oyna </a><!---->
                                          </div>
                                       </div>
                                    </div>
                                    <div class="crd-nm">
                                       <span class="display-block">Spaceman</span><!---->
                                    </div>
                                 </div>
                              </div>
                              <div class="col pg-grd-5 csn-crd-col ng-star-inserted">
                                 <div class="csn-crd">
                                    <div class="crd-img">
                                       <img class="gm-img" alt="Aviator" src="/images/common/assets/images/casino/300x200/7787.jpg"><img alt="" class="gm-img loading" src="/images/common/assets/images/loading.gif">
                                       <div class="inf">
                                          <!----><!----><!---->
                                       </div>
                                       <app-user-favorite classes="fvrt-lnk left">
                                          <!---->
                                       </app-user-favorite>
                                       <div class="vndr"><img alt="" class="vndr-lg" src="/images/common/assets/images/casino/32x32/spribe.png"></div>
                                       <div class="hvr-inf">
                                          <div class="v-a">
                                             <a href="javascript:;" class="btn real"> Gerçek Oyun </a><a href="javascript:;" class="btn free ng-star-inserted"> Zevkine Oyna </a><!---->
                                          </div>
                                       </div>
                                    </div>
                                    <div class="crd-nm">
                                       <span class="display-block">Aviator</span><!---->
                                    </div>
                                 </div>
                              </div>
                              <div class="col pg-grd-5 csn-crd-col ng-star-inserted">
                                 <div class="csn-crd">
                                    <div class="crd-img">
                                       <img class="gm-img" alt="Football X" src="/images/common/assets/images/casino/300x200/21295.jpg"><img alt="" class="gm-img loading" src="/images/common/assets/images/loading.gif">
                                       <div class="inf">
                                          <!----><!----><!---->
                                       </div>
                                       <app-user-favorite classes="fvrt-lnk left">
                                          <!---->
                                       </app-user-favorite>
                                       <div class="vndr"><img alt="" class="vndr-lg" src="/images/common/assets/images/casino/32x32/smart_soft.png"></div>
                                       <div class="hvr-inf">
                                          <div class="v-a">
                                             <a href="javascript:;" class="btn real"> Gerçek Oyun </a><a href="javascript:;" class="btn free ng-star-inserted"> Zevkine Oyna </a><!---->
                                          </div>
                                       </div>
                                    </div>
                                    <div class="crd-nm">
                                       <span class="display-block">Football X</span><!---->
                                    </div>
                                 </div>
                              </div>
                              <div class="col pg-grd-5 csn-crd-col ng-star-inserted">
                                 <div class="csn-crd">
                                    <div class="crd-img">
                                       <img class="gm-img" alt="Balloon" src="/images/common/assets/images/casino/300x200/13475.jpg"><img alt="" class="gm-img loading" src="/images/common/assets/images/loading.gif">
                                       <div class="inf">
                                          <!---->
                                          <div class="popular ng-star-inserted">Popüler</div>
                                          <!----><!---->
                                       </div>
                                       <app-user-favorite classes="fvrt-lnk left">
                                          <!---->
                                       </app-user-favorite>
                                       <div class="vndr"><img alt="" class="vndr-lg" src="/images/common/assets/images/casino/32x32/smart_soft.png"></div>
                                       <div class="hvr-inf">
                                          <div class="v-a">
                                             <a href="javascript:;" class="btn real"> Gerçek Oyun </a><a href="javascript:;" class="btn free ng-star-inserted"> Zevkine Oyna </a><!---->
                                          </div>
                                       </div>
                                    </div>
                                    <div class="crd-nm">
                                       <span class="display-block">Balloon</span><!---->
                                    </div>
                                 </div>
                              </div>
                              <div class="col pg-grd-5 csn-crd-col ng-star-inserted">
                                 <div class="csn-crd">
                                    <div class="crd-img">
                                       <img class="gm-img" alt="Cappadocia" src="/images/common/assets/images/casino/300x200/13470.jpg"><img alt="" class="gm-img loading" src="/images/common/assets/images/loading.gif">
                                       <div class="inf">
                                          <!----><!----><!---->
                                       </div>
                                       <app-user-favorite classes="fvrt-lnk left">
                                          <!---->
                                       </app-user-favorite>
                                       <div class="vndr"><img alt="" class="vndr-lg" src="/images/common/assets/images/casino/32x32/smart_soft.png"></div>
                                       <div class="hvr-inf">
                                          <div class="v-a">
                                             <a href="javascript:;" class="btn real"> Gerçek Oyun </a><a href="javascript:;" class="btn free ng-star-inserted"> Zevkine Oyna </a><!---->
                                          </div>
                                       </div>
                                    </div>
                                    <div class="crd-nm">
                                       <span class="display-block">Cappadocia</span><!---->
                                    </div>
                                 </div>
                              </div>
                              <div class="col pg-grd-5 csn-crd-col ng-star-inserted">
                                 <div class="csn-crd">
                                    <div class="crd-img">
                                       <img class="gm-img" alt="Hipodrom" src="/images/common/assets/images/casino/300x200/21681.jpg"><img alt="" class="gm-img loading" src="/images/common/assets/images/loading.gif">
                                       <div class="inf">
                                          <!----><!----><!---->
                                       </div>
                                       <app-user-favorite classes="fvrt-lnk left">
                                          <!---->
                                       </app-user-favorite>
                                       <div class="vndr"><img alt="" class="vndr-lg" src="/images/common/assets/images/casino/32x32/livegames.png"></div>
                                       <div class="hvr-inf">
                                          <div class="v-a">
                                             <a href="javascript:;" class="btn real"> Gerçek Oyun </a><!---->
                                          </div>
                                       </div>
                                    </div>
                                    <div class="crd-nm">
                                       <span class="display-block">Hipodrom</span><!---->
                                    </div>
                                 </div>
                              </div>
                              <div class="col pg-grd-5 csn-crd-col ng-star-inserted">
                                 <div class="csn-crd">
                                    <div class="crd-img">
                                       <img class="gm-img" alt="JetLucky2" src="/images/common/assets/images/casino/300x200/21736.jpg"><img alt="" class="gm-img loading" src="/images/common/assets/images/loading.gif">
                                       <div class="inf">
                                          <!----><!----><!---->
                                       </div>
                                       <app-user-favorite classes="fvrt-lnk left">
                                          <!---->
                                       </app-user-favorite>
                                       <div class="vndr"><img alt="" class="vndr-lg" src="/images/common/assets/images/casino/32x32/gamingcorps.png"></div>
                                       <div class="hvr-inf">
                                          <div class="v-a">
                                             <a href="javascript:;" class="btn real"> Gerçek Oyun </a><a href="javascript:;" class="btn free ng-star-inserted"> Zevkine Oyna </a><!---->
                                          </div>
                                       </div>
                                    </div>
                                    <div class="crd-nm">
                                       <span class="display-block">JetLucky2</span><!---->
                                    </div>
                                 </div>
                              </div>
                              <div class="col pg-grd-5 csn-crd-col ng-star-inserted">
                                 <div class="csn-crd">
                                    <div class="crd-img">
                                       <img class="gm-img" alt="JetX3" src="/images/common/assets/images/casino/300x200/17070.jpg"><img alt="" class="gm-img loading" src="/images/common/assets/images/loading.gif">
                                       <div class="inf">
                                          <!----><!----><!---->
                                       </div>
                                       <app-user-favorite classes="fvrt-lnk left">
                                          <!---->
                                       </app-user-favorite>
                                       <div class="vndr"><img alt="" class="vndr-lg" src="/images/common/assets/images/casino/32x32/smart_soft.png"></div>
                                       <div class="hvr-inf">
                                          <div class="v-a">
                                             <a href="javascript:;" class="btn real"> Gerçek Oyun </a><a href="javascript:;" class="btn free ng-star-inserted"> Zevkine Oyna </a><!---->
                                          </div>
                                       </div>
                                    </div>
                                    <div class="crd-nm">
                                       <span class="display-block">JetX3</span><!---->
                                    </div>
                                 </div>
                              </div>
                              <div class="col pg-grd-5 csn-crd-col ng-star-inserted">
                                 <div class="csn-crd">
                                    <div class="crd-img">
                                       <img class="gm-img" alt="Goblin Run" src="/images/common/assets/images/casino/300x200/19618.jpg"><img alt="" class="gm-img loading" src="/images/common/assets/images/loading.gif">
                                       <div class="inf">
                                          <!----><!----><!---->
                                       </div>
                                       <app-user-favorite classes="fvrt-lnk left">
                                          <!---->
                                       </app-user-favorite>
                                       <div class="vndr"><img alt="" class="vndr-lg" src="/images/common/assets/images/casino/32x32/evoplay.png"></div>
                                       <div class="hvr-inf">
                                          <div class="v-a">
                                             <a href="javascript:;" class="btn real"> Gerçek Oyun </a><a href="javascript:;" class="btn free ng-star-inserted"> Zevkine Oyna </a><!---->
                                          </div>
                                       </div>
                                    </div>
                                    <div class="crd-nm">
                                       <span class="display-block">Goblin Run</span><!---->
                                    </div>
                                 </div>
                              </div>
                              <div class="col pg-grd-5 csn-crd-col ng-star-inserted">
                                 <div class="csn-crd">
                                    <div class="crd-img">
                                       <img class="gm-img" alt="Save The Hamster" src="/images/common/assets/images/casino/300x200/15701.jpg"><img alt="" class="gm-img loading" src="/images/common/assets/images/loading.gif">
                                       <div class="inf">
                                          <!----><!----><!---->
                                       </div>
                                       <app-user-favorite classes="fvrt-lnk left">
                                          <!---->
                                       </app-user-favorite>
                                       <div class="vndr"><img alt="" class="vndr-lg" src="/images/common/assets/images/casino/32x32/evoplay.png"></div>
                                       <div class="hvr-inf">
                                          <div class="v-a">
                                             <a href="javascript:;" class="btn real"> Gerçek Oyun </a><a href="javascript:;" class="btn free ng-star-inserted"> Zevkine Oyna </a><!---->
                                          </div>
                                       </div>
                                    </div>
                                    <div class="crd-nm">
                                       <span class="display-block">Save The Hamster</span><!---->
                                    </div>
                                 </div>
                              </div>
                              <div class="col pg-grd-5 csn-crd-col ng-star-inserted">
                                 <div class="csn-crd">
                                    <div class="crd-img">
                                       <img class="gm-img" alt="Vecihi" src="/images/common/assets/images/casino/300x200/24245.jpg"><img alt="" class="gm-img loading" src="/images/common/assets/images/loading.gif">
                                       <div class="inf">
                                          <!----><!----><!---->
                                       </div>
                                       <app-user-favorite classes="fvrt-lnk left">
                                          <!---->
                                       </app-user-favorite>
                                       <div class="vndr"><img alt="" class="vndr-lg" src="/images/common/assets/images/casino/32x32/acegaming.png"></div>
                                       <div class="hvr-inf">
                                          <div class="v-a">
                                             <a href="javascript:;" class="btn real"> Gerçek Oyun </a><!---->
                                          </div>
                                       </div>
                                    </div>
                                    <div class="crd-nm">
                                       <span class="display-block">Vecihi</span><!---->
                                    </div>
                                 </div>
                              </div>
                              <div class="col pg-grd-5 csn-crd-col ng-star-inserted">
                                 <div class="csn-crd">
                                    <div class="crd-img">
                                       <img class="gm-img" alt="Cricket X" src="/images/common/assets/images/casino/300x200/19420.jpg"><img alt="" class="gm-img loading" src="/images/common/assets/images/loading.gif">
                                       <div class="inf">
                                          <!---->
                                          <div class="popular ng-star-inserted">Popüler</div>
                                          <!----><!---->
                                       </div>
                                       <app-user-favorite classes="fvrt-lnk left">
                                          <!---->
                                       </app-user-favorite>
                                       <div class="vndr"><img alt="" class="vndr-lg" src="/images/common/assets/images/casino/32x32/smart_soft.png"></div>
                                       <div class="hvr-inf">
                                          <div class="v-a">
                                             <a href="javascript:;" class="btn real"> Gerçek Oyun </a><a href="javascript:;" class="btn free ng-star-inserted"> Zevkine Oyna </a><!---->
                                          </div>
                                       </div>
                                    </div>
                                    <div class="crd-nm">
                                       <span class="display-block">Cricket X</span><!---->
                                    </div>
                                 </div>
                              </div>
                              <div class="col pg-grd-5 csn-crd-col ng-star-inserted">
                                 <div class="csn-crd">
                                    <div class="crd-img">
                                       <img class="gm-img" alt="To Mars And Beyond" src="/images/common/assets/images/casino/300x200/21723.jpg"><img alt="" class="gm-img loading" src="/images/common/assets/images/loading.gif">
                                       <div class="inf">
                                          <!----><!----><!---->
                                       </div>
                                       <app-user-favorite classes="fvrt-lnk left">
                                          <!---->
                                       </app-user-favorite>
                                       <div class="vndr"><img alt="" class="vndr-lg" src="/images/common/assets/images/casino/32x32/gamingcorps.png"></div>
                                       <div class="hvr-inf">
                                          <div class="v-a">
                                             <a href="javascript:;" class="btn real"> Gerçek Oyun </a><a href="javascript:;" class="btn free ng-star-inserted"> Zevkine Oyna </a><!---->
                                          </div>
                                       </div>
                                    </div>
                                    <div class="crd-nm">
                                       <span class="display-block">To Mars And Beyond</span><!---->
                                    </div>
                                 </div>
                              </div>
                              <div class="col pg-grd-5 csn-crd-col ng-star-inserted">
                                 <div class="csn-crd">
                                    <div class="crd-img">
                                       <img class="gm-img" alt="Ho Ho HODL" src="/images/common/assets/images/casino/300x200/21731.jpg"><img alt="" class="gm-img loading" src="/images/common/assets/images/loading.gif">
                                       <div class="inf">
                                          <!----><!----><!---->
                                       </div>
                                       <app-user-favorite classes="fvrt-lnk left">
                                          <!---->
                                       </app-user-favorite>
                                       <div class="vndr"><img alt="" class="vndr-lg" src="/images/common/assets/images/casino/32x32/gamingcorps.png"></div>
                                       <div class="hvr-inf">
                                          <div class="v-a">
                                             <a href="javascript:;" class="btn real"> Gerçek Oyun </a><a href="javascript:;" class="btn free ng-star-inserted"> Zevkine Oyna </a><!---->
                                          </div>
                                       </div>
                                    </div>
                                    <div class="crd-nm">
                                       <span class="display-block">Ho Ho HODL</span><!---->
                                    </div>
                                 </div>
                              </div>
                              <div class="col pg-grd-5 csn-crd-col ng-star-inserted">
                                 <div class="csn-crd">
                                    <div class="crd-img">
                                       <img class="gm-img" alt="Skyliner" src="/images/common/assets/images/casino/300x200/21742.jpg"><img alt="" class="gm-img loading" src="/images/common/assets/images/loading.gif">
                                       <div class="inf">
                                          <!----><!----><!---->
                                       </div>
                                       <app-user-favorite classes="fvrt-lnk left">
                                          <!---->
                                       </app-user-favorite>
                                       <div class="vndr"><img alt="" class="vndr-lg" src="/images/common/assets/images/casino/32x32/gamingcorps.png"></div>
                                       <div class="hvr-inf">
                                          <div class="v-a">
                                             <a href="javascript:;" class="btn real"> Gerçek Oyun </a><a href="javascript:;" class="btn free ng-star-inserted"> Zevkine Oyna </a><!---->
                                          </div>
                                       </div>
                                    </div>
                                    <div class="crd-nm">
                                       <span class="display-block">Skyliner</span><!---->
                                    </div>
                                 </div>
                              </div>
                              <div class="col pg-grd-5 csn-crd-col ng-star-inserted">
                                 <div class="csn-crd">
                                    <div class="crd-img">
                                       <img class="gm-img" alt="Stormy Witch" src="/images/common/assets/images/casino/300x200/21745.jpg"><img alt="" class="gm-img loading" src="/images/common/assets/images/loading.gif">
                                       <div class="inf">
                                          <!----><!----><!---->
                                       </div>
                                       <app-user-favorite classes="fvrt-lnk left">
                                          <!---->
                                       </app-user-favorite>
                                       <div class="vndr"><img alt="" class="vndr-lg" src="/images/common/assets/images/casino/32x32/gamingcorps.png"></div>
                                       <div class="hvr-inf">
                                          <div class="v-a">
                                             <a href="javascript:;" class="btn real"> Gerçek Oyun </a><a href="javascript:;" class="btn free ng-star-inserted"> Zevkine Oyna </a><!---->
                                          </div>
                                       </div>
                                    </div>
                                    <div class="crd-nm">
                                       <span class="display-block">Stormy Witch</span><!---->
                                    </div>
                                 </div>
                              </div>
                              <div class="col pg-grd-5 csn-crd-col ng-star-inserted">
                                 <div class="csn-crd">
                                    <div class="crd-img">
                                       <img class="gm-img" alt="JetX" src="/images/common/assets/images/casino/300x200/13477.jpg"><img alt="" class="gm-img loading" src="/images/common/assets/images/loading.gif">
                                       <div class="inf">
                                          <!---->
                                          <div class="popular ng-star-inserted">Popüler</div>
                                          <!----><!---->
                                       </div>
                                       <app-user-favorite classes="fvrt-lnk left">
                                          <!---->
                                       </app-user-favorite>
                                       <div class="vndr"><img alt="" class="vndr-lg" src="/images/common/assets/images/casino/32x32/smart_soft.png"></div>
                                       <div class="hvr-inf">
                                          <div class="v-a">
                                             <a href="javascript:;" class="btn real"> Gerçek Oyun </a><a href="javascript:;" class="btn free ng-star-inserted"> Zevkine Oyna </a><!---->
                                          </div>
                                       </div>
                                    </div>
                                    <div class="crd-nm">
                                       <span class="display-block">JetX</span><!---->
                                    </div>
                                 </div>
                              </div>
                              <div class="col pg-grd-5 csn-crd-col ng-star-inserted">
                                 <div class="csn-crd">
                                    <div class="crd-img">
                                       <img class="gm-img" alt="FlyX" src="/images/common/assets/images/casino/300x200/24198.jpg"><img alt="" class="gm-img loading" src="/images/common/assets/images/loading.gif">
                                       <div class="inf">
                                          <!----><!----><!---->
                                       </div>
                                       <app-user-favorite classes="fvrt-lnk left">
                                          <!---->
                                       </app-user-favorite>
                                       <div class="vndr"><img alt="" class="vndr-lg" src="/images/common/assets/images/casino/32x32/microgaming_mga.png"></div>
                                       <div class="hvr-inf">
                                          <div class="v-a">
                                             <a href="javascript:;" class="btn real"> Gerçek Oyun </a><a href="javascript:;" class="btn free ng-star-inserted"> Zevkine Oyna </a><!---->
                                          </div>
                                       </div>
                                    </div>
                                    <div class="crd-nm">
                                       <span class="display-block">FlyX</span><!---->
                                    </div>
                                 </div>
                              </div>
                              <div class="col pg-grd-5 csn-crd-col ng-star-inserted">
                                 <div class="csn-crd">
                                    <div class="crd-img">
                                       <img class="gm-img" alt="Rocket Racers" src="/images/common/assets/images/casino/300x200/20810.jpg"><img alt="" class="gm-img loading" src="/images/common/assets/images/loading.gif">
                                       <div class="inf">
                                          <!----><!----><!---->
                                       </div>
                                       <app-user-favorite classes="fvrt-lnk left">
                                          <!---->
                                       </app-user-favorite>
                                       <div class="vndr"><img alt="" class="vndr-lg" src="/images/common/assets/images/casino/32x32/esa_gaming.png"></div>
                                       <div class="hvr-inf">
                                          <div class="v-a">
                                             <a href="javascript:;" class="btn real"> Gerçek Oyun </a><a href="javascript:;" class="btn free ng-star-inserted"> Zevkine Oyna </a><!---->
                                          </div>
                                       </div>
                                    </div>
                                    <div class="crd-nm">
                                       <span class="display-block">Rocket Racers</span><!---->
                                    </div>
                                 </div>
                              </div>
                              <!----><!----><!----><!----><!---->
                           </div>
                           <div class="row ng-star-inserted">
                              <!---->
                              <div class="col s6 s12 ng-star-inserted"><button id="show-more-btn" class="btn sw-mr btn-show-more"> Daha Fazla Oyun Göster </button></div>
                              <!---->
                           </div>
                           <!----><!---->
                        </div>
                     </div>
                  </div>
               </div>
               <!---->
               <app-static-inner-content class="ng-star-inserted">
                  <!---->
               </app-static-inner-content>
               <!---->
            </div>
            <!----><!---->
         </div>
         <!---->
      </app-casino>
      <!---->
   </app-games>
   <!---->
</main>
<?php }?>