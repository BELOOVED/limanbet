<?php
if ($detect->isMobile()) {?>
<?php }else {?>
   <main>
   <router-outlet></router-outlet>
   <app-games class="ng-star-inserted">
      <router-outlet></router-outlet>
      <app-live-casino class="ng-star-inserted">
         <div materialize="modal" class="modal" style="z-index: 1109;">
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
         <div class="live-casino-bg">
            <slider>
               <div class="carousel-container">
                  <!---->
               </div>
            </slider>
            <!----><!---->
            <app-static-inner-content contentcode="liveCasino">
               <div extroutelink="" id="liveCasino" class="ng-star-inserted">
                  <panel-gallery gallery="28" autoplay="true" type="loop" interval="5000" arrows="true" vce-ready="">
                     <div id="panel_gallery28" class="panel_gallery bmm bm">
                        <div>
                           <div class="splide splide--loop splide--ltr splide--draggable is-active" id="splide15" style="visibility: visible;">
                              <div class="splide__arrows">
                                 <button class="splide__arrow splide__arrow--prev" type="button" aria-controls="splide15-track" aria-label="Previous slide">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40" width="40" height="40">
                                       <path d="m15.5 0.932-4.3 4.38 14.5 14.6-14.5 14.5 4.3 4.4 14.6-14.6 4.4-4.3-4.4-4.4-14.6-14.6z"></path>
                                    </svg>
                                 </button>
                                 <button class="splide__arrow splide__arrow--next" type="button" aria-controls="splide15-track" aria-label="Next slide">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40" width="40" height="40">
                                       <path d="m15.5 0.932-4.3 4.38 14.5 14.6-14.5 14.5 4.3 4.4 14.6-14.6 4.4-4.3-4.4-4.4-14.6-14.6z"></path>
                                    </svg>
                                 </button>
                              </div>
                              <div class="splide__track" id="splide15-track">
                                 <svg id="placeholder_svg_new" width="0" height="0" class="placeholder_svg">
                                    <rect width="100%" height="100%" class="rect"></rect>
                                 </svg>
                                 <ul class="splide__list" id="splide15-list" style="transform: translateX(-2850px);">
                                    <li class="splide__slide panel_gallery_item splide__slide--clone" style="width: 1425px;" aria-hidden="true" tabindex="-1">
                                       <div class="panel_galery_content" style="display: none;"></div>
                                       <!----><!----><a class="panel_slide_cover no_link"><img data-splide-lazy="https://cdn.pandestek.com/other/livecas20.jpg" aria-rowindex="0" class="" srcset="" src="https://cdn.pandestek.com/other/livecas20.jpg" style=""></a>
                                    </li>
                                    <li class="splide__slide panel_gallery_item splide__slide--clone" style="width: 1425px;">
                                       <div class="panel_galery_content" style="display: none;"></div>
                                       <!----><!----><a class="panel_slide_cover no_link"><img data-splide-lazy="https://cdn.pandestek.com/other/livecas20.jpg" aria-rowindex="0" class="" srcset="" src="https://cdn.pandestek.com/other/livecas20.jpg" style=""></a>
                                    </li>
                                    <li class="splide__slide panel_gallery_item is-active is-visible" id="splide15-slide01" style="width: 1425px;" aria-hidden="false" tabindex="0">
                                       <div class="panel_galery_content" style="display: none;"></div>
                                       <!----><!----><a class="panel_slide_cover no_link"><img data-splide-lazy="https://cdn.pandestek.com/other/livecas20.jpg" aria-rowindex="0" class="" srcset="" src="https://cdn.pandestek.com/other/livecas20.jpg" style=""></a>
                                    </li>
                                    <li class="splide__slide panel_gallery_item splide__slide--clone" style="width: 1425px;">
                                       <div class="panel_galery_content" style="display: none;"></div>
                                       <!----><!----><a class="panel_slide_cover no_link"><img data-splide-lazy="https://cdn.pandestek.com/other/livecas20.jpg" aria-rowindex="0" class="" srcset="" src="https://cdn.pandestek.com/other/livecas20.jpg" style=""></a>
                                    </li>
                                    <li class="splide__slide panel_gallery_item splide__slide--clone" style="width: 1425px;">
                                       <div class="panel_galery_content" style="display: none;"></div>
                                       <!----><!----><a class="panel_slide_cover no_link"><img data-splide-lazy="https://cdn.pandestek.com/other/livecas20.jpg" aria-rowindex="0" class="" srcset="" src="https://cdn.pandestek.com/other/livecas20.jpg" style=""></a>
                                    </li>
                                 </ul>
                              </div>
                              <div></div>
                              <ul class="splide__pagination">
                                 <li><button class="splide__pagination__page is-active" type="button" aria-current="true" aria-controls="splide15-slide01" aria-label="Go to slide 1"></button></li>
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
                     padding-top: 0 !important;
                     margin-top: 0 !important;
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
                     margin-top: 0 !important;
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
                     <app-static-inner-content contentcode="liveCasino-left-top">
                        <!---->
                     </app-static-inner-content>
                     <h4 class="ltitle truncate" title="786/20 Oyun"><span class="count">786/20</span>Oyun </h4>
                     <div>
                        <div class="input-field search-cntr"><i class="material-icons pg-icons prefix">search</i><input type="text" class="browser-default ng-untouched ng-pristine ng-valid" placeholder="Oyun Ara"></div>
                        <div class="collection ng-star-inserted">
                           <app-category-container>
                              <a href="javascript:;" class="collection-item flex-container active ng-star-inserted" title="Hepsi"><i class="left pg-icons fa fa-star"></i><span class="text flex-item">Hepsi</span><span class="secondary-content count">786</span></a><!----><!----><!----><a href="javascript:;" class="collection-item flex-container ng-star-inserted" title="Size Özel"><i class="left pg-icons fa fa-star"></i><span class="text flex-item">Size Özel</span><span class="secondary-content count">198</span></a><!----><!----><!----><a href="javascript:;" class="collection-item flex-container ng-star-inserted" title="Popüler"><i class="left pg-icons fa fa-star"></i><span class="text flex-item">Popüler</span><span class="secondary-content count">27</span></a><!----><!----><!----><a href="javascript:;" class="collection-item flex-container ng-star-inserted" title="Yeni"><i class="left pg-icons fa fa-star"></i><span class="text flex-item">Yeni</span><span class="secondary-content count">44</span></a><!----><!----><!----><!----><!----><a href="javascript:;" class="collection-item flex-container ng-star-inserted" title="Rulet"><i class="left pg-icons fa fa-star"></i><span class="text flex-item">Rulet</span><span class="secondary-content count">105</span></a><!----><!----><!----><a href="javascript:;" class="collection-item flex-container ng-star-inserted" title="Poker"><i class="left pg-icons fa fa-star"></i><span class="text flex-item">Poker</span><span class="secondary-content count">15</span></a><!----><!----><!----><a href="javascript:;" class="collection-item flex-container ng-star-inserted" title="Bakarat"><i class="left pg-icons fa fa-star"></i><span class="text flex-item">Bakarat</span><span class="secondary-content count">141</span></a><!----><!----><!----><a href="javascript:;" class="collection-item flex-container ng-star-inserted" title="Blackjack"><i class="left pg-icons fa fa-star"></i><span class="text flex-item">Blackjack</span><span class="secondary-content count">426</span></a><!----><!----><!----><a href="javascript:;" class="collection-item flex-container ng-star-inserted" title="Direkt Lobi"><i class="left pg-icons fa fa-star"></i><span class="text flex-item">Direkt Lobi</span><span class="secondary-content count">13</span></a><!----><!----><!----><a href="javascript:;" class="collection-item flex-container ng-star-inserted" title="Diğer Oyunlar"><i class="left pg-icons fa fa-star"></i><span class="text flex-item">Diğer Oyunlar</span><span class="secondary-content count">28</span></a><!----><!----><!----><a href="javascript:;" class="collection-item flex-container ng-star-inserted" title="Live Show"><i class="left pg-icons fa fa-star"></i><span class="text flex-item">Live Show</span><span class="secondary-content count">20</span></a><!----><!----><!----><a href="javascript:;" class="collection-item flex-container ng-star-inserted" title="Loto"><i class="left pg-icons fa fa-star"></i><span class="text flex-item">Loto</span><span class="secondary-content count">32</span></a><!----><!----><!----><a href="javascript:;" class="collection-item flex-container ng-star-inserted" title="Masa Oyunları"><i class="left pg-icons fa fa-star"></i><span class="text flex-item">Masa Oyunları</span><span class="secondary-content count">3</span></a><!----><!----><!----><a href="javascript:;" class="collection-item flex-container ng-star-inserted" title="Texas Hold'em"><i class="left pg-icons fa fa-star"></i><span class="text flex-item">Texas Hold'em</span><span class="secondary-content count">3</span></a><!----><!----><!----><!----><!----><!---->
                           </app-category-container>
                        </div>
                        <!----><!---->
                     </div>
                     <app-static-inner-content contentcode="liveCasino-left-bottom">
                        <!---->
                     </app-static-inner-content>
                  </div>
                  <!---->
                  <div id="casino-right" class="col s10 right-content">
                     <!----><!---->
                     <div class="flex-container clear csn-rtitle-wrap">
                        <h4 class="rtitle flex-item ng-star-inserted"> Hepsi </h4>
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
                        <app-horizontal-scroll pathcode="livecasino" class="ng-star-inserted">
                           <!----><!----><!----><!---->
                        </app-horizontal-scroll>
                        <!----><!---->
                        <div class="gm-cntr">
                           <div class="row">
                              <!----><!---->
                              <div class="col pg-grd-5 csn-crd-col ng-star-inserted">
                                 <div class="csn-crd">
                                    <div class="crd-img">
                                       <img class="gm-img" alt="Craps" src="/images/common/assets/images/livecasino/300x200/18119.jpg"><img alt="" class="gm-img loading" src="/images/common/assets/images/loading.gif">
                                       <div class="inf">
                                          <!----><!----><!---->
                                       </div>
                                       <app-user-favorite classes="fvrt-lnk left">
                                          <!---->
                                       </app-user-favorite>
                                       <div class="vndr"><img class="vndr-lg" alt="evol" src="/images/common/assets/images/livecasino/32x32/evol.png"></div>
                                       <div class="hour ng-star-inserted"><i class="material-icons pg-icons left">access_time</i> Saat : 00:00 - 23:59 </div>
                                       <!---->
                                       <div class="hvr-inf">
                                          <div class="v-a">
                                             <!----><!----><!---->
                                          </div>
                                       </div>
                                    </div>
                                    <div class="crd-nm">
                                       <span class="display-block">Craps</span><!---->
                                    </div>
                                 </div>
                              </div>
                              <div class="col pg-grd-5 csn-crd-col ng-star-inserted">
                                 <div class="csn-crd">
                                    <div class="crd-img">
                                       <img class="gm-img" alt="Crazy Time" src="/images/common/assets/images/livecasino/300x200/18190.jpg"><img alt="" class="gm-img loading" src="/images/common/assets/images/loading.gif">
                                       <div class="inf">
                                          <!---->
                                          <div class="popular ng-star-inserted">Popüler</div>
                                          <!----><!---->
                                       </div>
                                       <app-user-favorite classes="fvrt-lnk left">
                                          <!---->
                                       </app-user-favorite>
                                       <div class="vndr"><img class="vndr-lg" alt="evol" src="/images/common/assets/images/livecasino/32x32/evol.png"></div>
                                       <div class="hour ng-star-inserted"><i class="material-icons pg-icons left">access_time</i> Saat : 00:00 - 23:59 </div>
                                       <!---->
                                       <div class="hvr-inf">
                                          <div class="v-a">
                                             <!----><!----><!---->
                                          </div>
                                       </div>
                                    </div>
                                    <div class="crd-nm">
                                       <span class="display-block">Crazy Time</span><!---->
                                    </div>
                                 </div>
                              </div>
                              <div class="col pg-grd-5 csn-crd-col ng-star-inserted">
                                 <div class="csn-crd">
                                    <div class="crd-img">
                                       <img class="gm-img" alt="Auto-Roulette" src="/images/common/assets/images/livecasino/300x200/18225.jpg"><img alt="" class="gm-img loading" src="/images/common/assets/images/loading.gif">
                                       <div class="inf">
                                          <!---->
                                          <div class="popular ng-star-inserted">Popüler</div>
                                          <!----><!---->
                                       </div>
                                       <app-user-favorite classes="fvrt-lnk left">
                                          <!---->
                                       </app-user-favorite>
                                       <div class="vndr"><img class="vndr-lg" alt="evol" src="/images/common/assets/images/livecasino/32x32/evol.png"></div>
                                       <div class="hour ng-star-inserted"><i class="material-icons pg-icons left">access_time</i> Saat : 00:00 - 23:59 </div>
                                       <!---->
                                       <div class="hvr-inf">
                                          <div class="v-a">
                                             <!----><!----><!---->
                                          </div>
                                       </div>
                                    </div>
                                    <div class="crd-nm">
                                       <span class="display-block">Auto-Roulette</span><!---->
                                    </div>
                                 </div>
                              </div>
                              <div class="col pg-grd-5 csn-crd-col ng-star-inserted">
                                 <div class="csn-crd">
                                    <div class="crd-img">
                                       <img class="gm-img" alt="Immersive Roulette" src="/images/common/assets/images/livecasino/300x200/18503.jpg"><img alt="" class="gm-img loading" src="/images/common/assets/images/loading.gif">
                                       <div class="inf">
                                          <!---->
                                          <div class="popular ng-star-inserted">Popüler</div>
                                          <!----><!---->
                                       </div>
                                       <app-user-favorite classes="fvrt-lnk left">
                                          <!---->
                                       </app-user-favorite>
                                       <div class="vndr"><img class="vndr-lg" alt="evol" src="/images/common/assets/images/livecasino/32x32/evol.png"></div>
                                       <div class="hour ng-star-inserted"><i class="material-icons pg-icons left">access_time</i> Saat : 00:00 - 23:59 </div>
                                       <!---->
                                       <div class="hvr-inf">
                                          <div class="v-a">
                                             <!----><!----><!---->
                                          </div>
                                       </div>
                                    </div>
                                    <div class="crd-nm">
                                       <span class="display-block">Immersive Roulette</span><!---->
                                    </div>
                                 </div>
                              </div>
                              <div class="col pg-grd-5 csn-crd-col ng-star-inserted">
                                 <div class="csn-crd">
                                    <div class="crd-img">
                                       <img class="gm-img" alt="Lightning Roulette" src="/images/common/assets/images/livecasino/300x200/18091.jpg"><img alt="" class="gm-img loading" src="/images/common/assets/images/loading.gif">
                                       <div class="inf">
                                          <!---->
                                          <div class="popular ng-star-inserted">Popüler</div>
                                          <!----><!---->
                                       </div>
                                       <app-user-favorite classes="fvrt-lnk left">
                                          <!---->
                                       </app-user-favorite>
                                       <div class="vndr"><img class="vndr-lg" alt="evol" src="/images/common/assets/images/livecasino/32x32/evol.png"></div>
                                       <div class="hour ng-star-inserted"><i class="material-icons pg-icons left">access_time</i> Saat : 00:00 - 23:59 </div>
                                       <!---->
                                       <div class="hvr-inf">
                                          <div class="v-a">
                                             <!----><!----><!---->
                                          </div>
                                       </div>
                                    </div>
                                    <div class="crd-nm">
                                       <span class="display-block">Lightning Roulette</span><!---->
                                    </div>
                                 </div>
                              </div>
                              <div class="col pg-grd-5 csn-crd-col ng-star-inserted">
                                 <div class="csn-crd">
                                    <div class="crd-img">
                                       <img class="gm-img" alt="Turkish Lightning Roulette" src="/images/common/assets/images/livecasino/300x200/18303.jpg"><img alt="" class="gm-img loading" src="/images/common/assets/images/loading.gif">
                                       <div class="inf">
                                          <!---->
                                          <div class="popular ng-star-inserted">Popüler</div>
                                          <!----><!---->
                                       </div>
                                       <app-user-favorite classes="fvrt-lnk left">
                                          <!---->
                                       </app-user-favorite>
                                       <div class="vndr"><img class="vndr-lg" alt="evol" src="/images/common/assets/images/livecasino/32x32/evol.png"></div>
                                       <div class="hour ng-star-inserted"><i class="material-icons pg-icons left">access_time</i> Saat : 00:00 - 23:59 </div>
                                       <!---->
                                       <div class="hvr-inf">
                                          <div class="v-a">
                                             <!----><!----><!---->
                                          </div>
                                       </div>
                                    </div>
                                    <div class="crd-nm">
                                       <span class="display-block">Turkish Lightning Roulette</span><!---->
                                    </div>
                                 </div>
                              </div>
                              <div class="col pg-grd-5 csn-crd-col ng-star-inserted">
                                 <div class="csn-crd">
                                    <div class="crd-img">
                                       <img class="gm-img" alt="Auto Mega Roulette" src="/images/common/assets/images/livecasino/300x200/24549.jpg"><img alt="" class="gm-img loading" src="/images/common/assets/images/loading.gif">
                                       <div class="inf">
                                          <!---->
                                          <div class="popular ng-star-inserted">Popüler</div>
                                          <!----><!---->
                                       </div>
                                       <app-user-favorite classes="fvrt-lnk left">
                                          <!---->
                                       </app-user-favorite>
                                       <div class="vndr"><img class="vndr-lg" alt="pragmatic_play" src="/images/common/assets/images/livecasino/32x32/pragmatic_play.png"></div>
                                       <!---->
                                       <div class="hvr-inf">
                                          <div class="v-a">
                                             <!----><!----><!---->
                                          </div>
                                       </div>
                                    </div>
                                    <div class="crd-nm">
                                       <span class="display-block">Auto Mega Roulette</span><!---->
                                    </div>
                                 </div>
                              </div>
                              <div class="col pg-grd-5 csn-crd-col ng-star-inserted">
                                 <div class="csn-crd">
                                    <div class="crd-img">
                                       <img class="gm-img" alt="Roulette 1 - Azure " src="/images/common/assets/images/livecasino/300x200/11376.jpg"><img alt="" class="gm-img loading" src="/images/common/assets/images/loading.gif">
                                       <div class="inf">
                                          <!---->
                                          <div class="popular ng-star-inserted">Popüler</div>
                                          <!---->
                                          <div class="new new-tags ng-star-inserted">Drops&amp;Wins</div>
                                          <!----><!----><!---->
                                       </div>
                                       <app-user-favorite classes="fvrt-lnk left">
                                          <!---->
                                       </app-user-favorite>
                                       <div class="vndr"><img class="vndr-lg" alt="pragmatic_play" src="/images/common/assets/images/livecasino/32x32/pragmatic_play.png"></div>
                                       <!---->
                                       <div class="hvr-inf">
                                          <div class="v-a">
                                             <!----><!----><!---->
                                          </div>
                                       </div>
                                    </div>
                                    <div class="crd-nm">
                                       <span class="display-block">Roulette 1 - Azure </span><!---->
                                    </div>
                                 </div>
                              </div>
                              <div class="col pg-grd-5 csn-crd-col ng-star-inserted">
                                 <div class="csn-crd">
                                    <div class="crd-img">
                                       <img class="gm-img" alt="Roulette" src="/images/common/assets/images/livecasino/300x200/24325.jpg"><img alt="" class="gm-img loading" src="/images/common/assets/images/loading.gif">
                                       <div class="inf">
                                          <div class="new ng-star-inserted">Yeni</div>
                                          <!---->
                                          <div class="popular ng-star-inserted">Popüler</div>
                                          <!----><!---->
                                       </div>
                                       <app-user-favorite classes="fvrt-lnk left">
                                          <!---->
                                       </app-user-favorite>
                                       <div class="vndr"><img class="vndr-lg" alt="elcasino_tvbet" src="/images/common/assets/images/livecasino/32x32/elcasino_tvbet.png"></div>
                                       <!---->
                                       <div class="hvr-inf">
                                          <div class="v-a">
                                             <!---->
                                             <div class="rpt-rw ng-star-inserted"><a href="javascript:;" class="btn real"> Gerçek Oyun </a></div>
                                             <!----><!---->
                                          </div>
                                       </div>
                                    </div>
                                    <div class="crd-nm">
                                       <span class="display-block">Roulette</span><!---->
                                    </div>
                                 </div>
                              </div>
                              <div class="col pg-grd-5 csn-crd-col ng-star-inserted">
                                 <div class="csn-crd">
                                    <div class="crd-img">
                                       <img class="gm-img" alt="Roulette 6 - Turkish" src="/images/common/assets/images/livecasino/300x200/9395.jpg"><img alt="" class="gm-img loading" src="/images/common/assets/images/loading.gif">
                                       <div class="inf">
                                          <!---->
                                          <div class="popular ng-star-inserted">Popüler</div>
                                          <!---->
                                          <div class="new new-tags ng-star-inserted">Drops&amp;Wins</div>
                                          <!----><!----><!---->
                                       </div>
                                       <app-user-favorite classes="fvrt-lnk left">
                                          <!---->
                                       </app-user-favorite>
                                       <div class="vndr"><img class="vndr-lg" alt="pragmatic_play" src="/images/common/assets/images/livecasino/32x32/pragmatic_play.png"></div>
                                       <!---->
                                       <div class="hvr-inf">
                                          <div class="v-a">
                                             <!----><!----><!---->
                                          </div>
                                       </div>
                                    </div>
                                    <div class="crd-nm">
                                       <span class="display-block">Roulette 6 - Turkish</span><!---->
                                    </div>
                                 </div>
                              </div>
                              <div class="col pg-grd-5 csn-crd-col ng-star-inserted">
                                 <div class="csn-crd">
                                    <div class="crd-img">
                                       <img class="gm-img" alt="Privé Lounge Blackjack 3" src="/images/common/assets/images/livecasino/300x200/24675.jpg"><img alt="" class="gm-img loading" src="/images/common/assets/images/loading.gif">
                                       <div class="inf">
                                          <!---->
                                          <div class="popular ng-star-inserted">Popüler</div>
                                          <!----><!---->
                                       </div>
                                       <app-user-favorite classes="fvrt-lnk left">
                                          <!---->
                                       </app-user-favorite>
                                       <div class="vndr"><img class="vndr-lg" alt="pragmatic_play" src="/images/common/assets/images/livecasino/32x32/pragmatic_play.png"></div>
                                       <!---->
                                       <div class="hvr-inf">
                                          <div class="v-a">
                                             <!----><!----><!---->
                                          </div>
                                       </div>
                                    </div>
                                    <div class="crd-nm">
                                       <span class="display-block">Privé Lounge Blackjack 3</span><!---->
                                    </div>
                                 </div>
                              </div>
                              <div class="col pg-grd-5 csn-crd-col ng-star-inserted">
                                 <div class="csn-crd">
                                    <div class="crd-img">
                                       <img class="gm-img" alt="Prestige Auto Roulette" src="/images/common/assets/images/livecasino/300x200/8978.jpg"><img alt="" class="gm-img loading" src="/images/common/assets/images/loading.gif">
                                       <div class="inf">
                                          <!---->
                                          <div class="popular ng-star-inserted">Popüler</div>
                                          <!----><!---->
                                       </div>
                                       <app-user-favorite classes="fvrt-lnk left">
                                          <!---->
                                       </app-user-favorite>
                                       <div class="vndr"><img class="vndr-lg" alt="ezugi" src="/images/common/assets/images/livecasino/32x32/ezugi.png"></div>
                                       <!---->
                                       <div class="hvr-inf">
                                          <div class="v-a">
                                             <!----><!----><!---->
                                          </div>
                                       </div>
                                    </div>
                                    <div class="crd-nm">
                                       <span class="display-block">Prestige Auto Roulette</span><!---->
                                    </div>
                                 </div>
                              </div>
                              <div class="col pg-grd-5 csn-crd-col ng-star-inserted">
                                 <div class="csn-crd">
                                    <div class="crd-img">
                                       <img class="gm-img" alt="Türkçe Rulet" src="/images/common/assets/images/livecasino/300x200/699.jpg"><img alt="" class="gm-img loading" src="/images/common/assets/images/loading.gif">
                                       <div class="inf">
                                          <!---->
                                          <div class="popular ng-star-inserted">Popüler</div>
                                          <!----><!---->
                                       </div>
                                       <app-user-favorite classes="fvrt-lnk left">
                                          <!---->
                                       </app-user-favorite>
                                       <div class="vndr"><img class="vndr-lg" alt="ezugi" src="/images/common/assets/images/livecasino/32x32/ezugi.png"></div>
                                       <!---->
                                       <div class="hvr-inf">
                                          <div class="v-a">
                                             <!----><!----><!---->
                                          </div>
                                       </div>
                                    </div>
                                    <div class="crd-nm">
                                       <span class="display-block">Türkçe Rulet</span><!---->
                                    </div>
                                 </div>
                              </div>
                              <div class="col pg-grd-5 csn-crd-col ng-star-inserted">
                                 <div class="csn-crd">
                                    <div class="crd-img">
                                       <img class="gm-img" alt="Betgames War of Bets" src="/images/common/assets/images/livecasino/300x200/645.jpg"><img alt="" class="gm-img loading" src="/images/common/assets/images/loading.gif">
                                       <div class="inf">
                                          <!---->
                                          <div class="popular ng-star-inserted">Popüler</div>
                                          <!----><!---->
                                       </div>
                                       <app-user-favorite classes="fvrt-lnk left">
                                          <!---->
                                       </app-user-favorite>
                                       <div class="vndr"><img class="vndr-lg" alt="betg" src="/images/common/assets/images/livecasino/32x32/betg.png"></div>
                                       <!---->
                                       <div class="hvr-inf">
                                          <div class="v-a">
                                             <!---->
                                             <div class="rpt-rw ng-star-inserted"><a href="javascript:;" class="btn real"> Gerçek Oyun </a></div>
                                             <!----><!---->
                                          </div>
                                       </div>
                                    </div>
                                    <div class="crd-nm">
                                       <span class="display-block">Betgames War of Bets</span><!---->
                                    </div>
                                 </div>
                              </div>
                              <div class="col pg-grd-5 csn-crd-col ng-star-inserted">
                                 <div class="csn-crd">
                                    <div class="crd-img">
                                       <img class="gm-img" alt="Speed Roulette" src="/images/common/assets/images/livecasino/300x200/4474.jpg"><img alt="" class="gm-img loading" src="/images/common/assets/images/loading.gif">
                                       <div class="inf">
                                          <!---->
                                          <div class="popular ng-star-inserted">Popüler</div>
                                          <!----><!---->
                                       </div>
                                       <app-user-favorite classes="fvrt-lnk left">
                                          <!---->
                                       </app-user-favorite>
                                       <div class="vndr"><img class="vndr-lg" alt="ezugi" src="/images/common/assets/images/livecasino/32x32/ezugi.png"></div>
                                       <!---->
                                       <div class="hvr-inf">
                                          <div class="v-a">
                                             <!----><!----><!---->
                                          </div>
                                       </div>
                                    </div>
                                    <div class="crd-nm">
                                       <span class="display-block">Speed Roulette</span><!---->
                                    </div>
                                 </div>
                              </div>
                              <div class="col pg-grd-5 csn-crd-col ng-star-inserted">
                                 <div class="csn-crd">
                                    <div class="crd-img">
                                       <img class="gm-img" alt="Speed Auto Roulette" src="/images/common/assets/images/livecasino/300x200/5450.jpg"><img alt="" class="gm-img loading" src="/images/common/assets/images/loading.gif">
                                       <div class="inf">
                                          <!---->
                                          <div class="popular ng-star-inserted">Popüler</div>
                                          <!----><!---->
                                       </div>
                                       <app-user-favorite classes="fvrt-lnk left">
                                          <!---->
                                       </app-user-favorite>
                                       <div class="vndr"><img class="vndr-lg" alt="ezugi" src="/images/common/assets/images/livecasino/32x32/ezugi.png"></div>
                                       <!---->
                                       <div class="hvr-inf">
                                          <div class="v-a">
                                             <!----><!----><!---->
                                          </div>
                                       </div>
                                    </div>
                                    <div class="crd-nm">
                                       <span class="display-block">Speed Auto Roulette</span><!---->
                                    </div>
                                 </div>
                              </div>
                              <div class="col pg-grd-5 csn-crd-col ng-star-inserted">
                                 <div class="csn-crd">
                                    <div class="crd-img">
                                       <img class="gm-img" alt="Blackjack B" src="/images/common/assets/images/livecasino/300x200/24451.jpg"><img alt="" class="gm-img loading" src="/images/common/assets/images/loading.gif">
                                       <div class="inf">
                                          <!---->
                                          <div class="popular ng-star-inserted">Popüler</div>
                                          <!----><!---->
                                       </div>
                                       <app-user-favorite classes="fvrt-lnk left">
                                          <!---->
                                       </app-user-favorite>
                                       <div class="vndr"><img class="vndr-lg" alt="atmosfera" src="/images/common/assets/images/livecasino/32x32/atmosfera.png"></div>
                                       <!---->
                                       <div class="hvr-inf">
                                          <div class="v-a">
                                             <!---->
                                             <div class="rpt-rw ng-star-inserted"><a href="javascript:;" class="btn real"> Gerçek Oyun </a></div>
                                             <!----><!---->
                                          </div>
                                       </div>
                                    </div>
                                    <div class="crd-nm">
                                       <span class="display-block">Blackjack B</span><!---->
                                    </div>
                                 </div>
                              </div>
                              <div class="col pg-grd-5 csn-crd-col ng-star-inserted">
                                 <div class="csn-crd">
                                    <div class="crd-img">
                                       <img class="gm-img" alt="Blackjack C" src="/images/common/assets/images/livecasino/300x200/24452.jpg"><img alt="" class="gm-img loading" src="/images/common/assets/images/loading.gif">
                                       <div class="inf">
                                          <!---->
                                          <div class="popular ng-star-inserted">Popüler</div>
                                          <!----><!---->
                                       </div>
                                       <app-user-favorite classes="fvrt-lnk left">
                                          <!---->
                                       </app-user-favorite>
                                       <div class="vndr"><img class="vndr-lg" alt="atmosfera" src="/images/common/assets/images/livecasino/32x32/atmosfera.png"></div>
                                       <!---->
                                       <div class="hvr-inf">
                                          <div class="v-a">
                                             <!---->
                                             <div class="rpt-rw ng-star-inserted"><a href="javascript:;" class="btn real"> Gerçek Oyun </a></div>
                                             <!----><!---->
                                          </div>
                                       </div>
                                    </div>
                                    <div class="crd-nm">
                                       <span class="display-block">Blackjack C</span><!---->
                                    </div>
                                 </div>
                              </div>
                              <div class="col pg-grd-5 csn-crd-col ng-star-inserted">
                                 <div class="csn-crd">
                                    <div class="crd-img">
                                       <img class="gm-img" alt="Blackjack A" src="/images/common/assets/images/livecasino/300x200/24450.jpg"><img alt="" class="gm-img loading" src="/images/common/assets/images/loading.gif">
                                       <div class="inf">
                                          <!---->
                                          <div class="popular ng-star-inserted">Popüler</div>
                                          <!----><!---->
                                       </div>
                                       <app-user-favorite classes="fvrt-lnk left">
                                          <!---->
                                       </app-user-favorite>
                                       <div class="vndr"><img class="vndr-lg" alt="atmosfera" src="/images/common/assets/images/livecasino/32x32/atmosfera.png"></div>
                                       <!---->
                                       <div class="hvr-inf">
                                          <div class="v-a">
                                             <!---->
                                             <div class="rpt-rw ng-star-inserted"><a href="javascript:;" class="btn real"> Gerçek Oyun </a></div>
                                             <!----><!---->
                                          </div>
                                       </div>
                                    </div>
                                    <div class="crd-nm">
                                       <span class="display-block">Blackjack A</span><!---->
                                    </div>
                                 </div>
                              </div>
                              <div class="col pg-grd-5 csn-crd-col ng-star-inserted">
                                 <div class="csn-crd">
                                    <div class="crd-img">
                                       <img class="gm-img" alt="Black Jack E" src="/images/common/assets/images/livecasino/300x200/26377.jpg"><img alt="" class="gm-img loading" src="/images/common/assets/images/loading.gif">
                                       <div class="inf">
                                          <div class="new ng-star-inserted">Yeni</div>
                                          <!---->
                                          <div class="popular ng-star-inserted">Popüler</div>
                                          <!----><!---->
                                       </div>
                                       <app-user-favorite classes="fvrt-lnk left">
                                          <!---->
                                       </app-user-favorite>
                                       <div class="vndr"><img class="vndr-lg" alt="atmosfera" src="/images/common/assets/images/livecasino/32x32/atmosfera.png"></div>
                                       <!---->
                                       <div class="hvr-inf">
                                          <div class="v-a">
                                             <!---->
                                             <div class="rpt-rw ng-star-inserted"><a href="javascript:;" class="btn real"> Gerçek Oyun </a></div>
                                             <!----><!---->
                                          </div>
                                       </div>
                                    </div>
                                    <div class="crd-nm">
                                       <span class="display-block">Black Jack E</span><!---->
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
               <app-static-inner-content contentcode="liveCasino-bottom">
                  <!---->
               </app-static-inner-content>
            </div>
            <!----><!---->
         </div>
         <!---->
      </app-live-casino>
      <!---->
   </app-games>
   <!---->
</main>
<?php }?>