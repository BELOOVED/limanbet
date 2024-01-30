<?php
if ($detect->isMobile()) {?>
<?php }else {?>
   <main>
   <router-outlet></router-outlet>
   <app-dashboard class="ng-star-inserted">
      <div class="container dshbrd-cntr">
         <div class="row">
         <?php include 'modules/sidebar.php' ?>

            <div class="col s9 rght-cntnt">
               <router-outlet></router-outlet>
               <app-promotions class="ng-star-inserted">
                  <div class="bns-dtl">
                     <div class="dshbrd-mdl ng-star-inserted">
                        <div class="mdl-hdr">
                           <div class="inf-hdr"><i class="fa fa-user-circle-o"></i><span class="inf-title">Freebet</span></div>
                        </div>
                        <div class="mdl-cntnt">
                           <div class="scrllble-tbl">
                              <table class="striped dshbrd-tbl ng-star-inserted">
                                 <thead>
                                    <tr>
                                       <th>Miktar</th>
                                       <th>Bonus Detaylarım</th>
                                       <th>Canlı</th>
                                       <th>Spor</th>
                                       <th>Sanal</th>
                                       <th>Max. Karşılaşma</th>
                                       <th>Min Kupon Oranı (Kombine)</th>
                                       <th>Min Karşılaşma</th>
                                       <th>Min Oran (Tekli)</th>
                                       <th>Min Oran (Kombine)</th>
                                       <th>Max Oran (Kombine)</th>
                                       <th>Max Kupon Oranı (Kombine)</th>
                                       <th>X veya üzeri bir oran içermeli</th>
                                       <th>Son Kullanma Tarihi</th>
                                       <!---->
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <!---->
                                 </tbody>
                              </table>
                              <!---->
                           </div>
                        </div>
                     </div>
                     <!---->
                     <div class="dshbrd-mdl ng-star-inserted">
                        <div class="mdl-hdr">
                           <div class="inf-hdr"><i class="fa fa-user-circle-o"></i><span class="inf-title">Bonuslar</span></div>
                        </div>
                        <div class="mdl-cntnt">
                           <div class="scrllble-tbl">
                              <table class="striped dshbrd-tbl ng-star-inserted">
                                 <thead>
                                    <tr>
                                       <th>Miktar</th>
                                       <th>Bonus Detaylarım</th>
                                       <th>Canlı</th>
                                       <th>Spor</th>
                                       <th>Sanal</th>
                                       <th>Max. Karşılaşma</th>
                                       <th>Min Kupon Oranı (Kombine)</th>
                                       <th>Ciro Miktarı</th>
                                       <th>Min Karşılaşma</th>
                                       <th>Min Oran (Tekli)</th>
                                       <th>Min Oran (Kombine)</th>
                                       <th>Max Oran (Kombine)</th>
                                       <th>Max Kupon Oranı (Kombine)</th>
                                       <th>X veya üzeri bir oran içermeli</th>
                                       <th>Son Kullanma Tarihi</th>
                                       <th class="ng-star-inserted">Bonusla Para Yatırma </th>
                                       <!---->
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <!---->
                                 </tbody>
                              </table>
                              <!---->
                           </div>
                        </div>
                     </div>
                     <!---->
                     <div class="dshbrd-mdl ng-star-inserted">
                        <div class="mdl-hdr">
                           <div class="inf-hdr"><i class="fa fa-user-circle-o"></i><span class="inf-title">Aktif Olmayan Bonuslar</span></div>
                        </div>
                        <div class="mdl-cntnt">
                           <div class="scrllble-tbl">
                              <table class="striped dshbrd-tbl inactive-table ng-star-inserted">
                                 <thead>
                                    <tr>
                                       <th>Miktar</th>
                                       <th>Promosyon</th>
                                       <th class="turnOverRate">Bonus Oranı(%)</th>
                                       <th>Maksimum Bonus Kazancı</th>
                                       <th>Çevrim Oranı</th>
                                       <th>Limanbet bonusu</th>
                                       <th>Son Aktivasyon Tarihi</th>
                                       <th class="ng-star-inserted">Bonusla Para Yatırma </th>
                                       <!---->
                                       <th>Aktifleştir</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <!---->
                                 </tbody>
                              </table>
                              <!---->
                           </div>
                        </div>
                     </div>
                     <!---->
                     <div class="dshbrd-mdl ng-star-inserted">
                        <div class="mdl-hdr">
                           <div class="inf-hdr"><i class="fa fa-user-circle-o"></i><span class="inf-title">Casino Bonusları</span></div>
                        </div>
                        <div class="mdl-cntnt">
                           <div class="scrllble-tbl">
                              <table class="striped dshbrd-tbl casinobonus-table ng-star-inserted">
                                 <thead>
                                    <tr>
                                       <th>Miktar</th>
                                       <th>Bonus Detaylarım</th>
                                       <th class="turnOverRate">Çevrim Oranı</th>
                                       <th>Ciro Miktarı</th>
                                       <th>Toplam Çevrim</th>
                                       <th>Son Kullanma Tarihi</th>
                                       <th class="ng-star-inserted">Ceza olarak el konulan</th>
                                       <!---->
                                       <th class="ng-star-inserted">Bonusla Para Yatırma </th>
                                       <!---->
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <!---->
                                 </tbody>
                              </table>
                              <!---->
                           </div>
                        </div>
                     </div>
                     <!---->
                  </div>
               </app-promotions>
               <!---->
            </div>
         </div>
      </div>
   </app-dashboard>
   <!---->
</main>
<?php }?>