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
               <app-free-spin class="ng-star-inserted">
                  <div class="free-spn-dtl-cntnt">
                     <div class="dshbrd-mdl">
                        <div class="mdl-hdr">
                           <div class="inf-hdr"><i class="fa fa-history"></i><span class="inf-title">Casino Ücretsiz Oyun Detayları</span></div>
                        </div>
                        <app-notifications>
                           <div>
                              <message-box icon="fa fa-exclamation-triangle" class="ng-star-inserted">
                                 <div class="card-panel message-box error">
                                    <div class="icon left ng-star-inserted"><i class="fa fa-exclamation-triangle"></i></div>
                                    <!----><!---->
                                    <div class="ng-star-inserted">
                                       Bir hata oluştu. Müşteri temsilcisine bağlanınız.<!----><!----><!----><!---->
                                    </div>
                                    <!----><!----><!----><!----><!---->
                                 </div>
                              </message-box>
                              <!----><!----><!----><!----><!---->
                           </div>
                        </app-notifications>
                        <div class="mdl-cntnt">
                           <!----><!---->
                           <div class="not-found-box ng-star-inserted"><img src="../../../../../../assets/images/not-found-images.png" alt=""><br> Veri bulunamadı </div>
                           <!---->
                        </div>
                     </div>
                  </div>
               </app-free-spin>
               <!---->
            </div>
         </div>
      </div>
   </app-dashboard>
   <!---->
</main>
<?php }?>