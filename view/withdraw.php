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
               <app-withdraw-money class="ng-star-inserted">
                  <deposit-withdraw-money>
                     <div class="pymnt-cntnt">
                        <div class="dshbrd-mdl dshbrd-hide-block" style="display: none;">
                           <div class="mdl-hdr">
                              <div class="inf-hdr">
                                 <i aria-hidden="true" class="fa fa-credit-card-alt"></i><!----><span class="inf-title ng-star-inserted">Para Çekme</span><!---->
                              </div>
                           </div>
                           <div class="mdl-cntnt">
                              <!----><!----><!---->
                              <p class="ng-star-inserted">Para çekme seçenekleri aşağıda listelenmiştir. Lütfen para çekme türünü seçip hesabınızdan kolayca para çekmek için talimatları takip ediniz.</p>
                              <app-static-inner-content contentcode="withdraw-link-top" class="ng-star-inserted">
                                 <!---->
                              </app-static-inner-content>
                              <!----><!----><!---->
                           </div>
                           <app-notifications>
                              <div>
                                 <!---->
                              </div>
                           </app-notifications>
                        </div>
                        <!---->
                        <div class="dshbrd-mdl">
                           <!---->
                           <div class="mdl-hdr">
                              <div class="inf-hdr">
                                 <i aria-hidden="true" class="fa fa-credit-card-alt"></i><!----><span class="inf-title ng-star-inserted">Para Çekme Seçenekleri</span><!---->
                              </div>
                           </div>
                           <!---->
                           <div class="mdl-cntnt clear">
                              <!----><!----><!----><!----><!---->
                              <app-static-inner-content contentcode="withdraw-link" class="ng-star-inserted">
                                 <div extroutelink="" id="withdraw-link" class="ng-star-inserted">
                                    <div id="bosbos">
                                       <script type="text/javascript">
                                          allInTimer = setInterval(function () {
                                              $(document).ready(function(){ 
                                          
                                          $(".dshbrd-mdl").first().hide();
                                          $(".uinfoDom").remove();
                                          
                                          
                                          clearInterval(allInTimer);
                                              
                                            });
                                          },500);
                                       </script>
                                    </div>
                                 </div>
                                 <div class="ng-star-inserted">
                                    
                                 </div>
                                 <div class="ng-star-inserted"></div>
                                 <!----><!---->
                              </app-static-inner-content>
                              <!----><!---->
                              <div class="col s12 ng-star-inserted">
                                 <div class="card-panel bank-card" data-payment="envoysoft-withdraw">
                                    <div class="flex-container">
                                       <!----><!---->
                                       <payment-icon class="ng-star-inserted">
                                          <img src="https://via.placeholder.com/100x33.png?text=Envoy Hızlı Havale Çekim" class="hide" hidden=""><img src="/images/common/assets/images/payments/withdraw-413.png" width="100" height="33" class="envoysoft-withdraw"><!---->
                                       </payment-icon>
                                       <!----><!---->
                                       <div class="flex-item ng-star-inserted">
                                          <div>
                                             <div class="bnk-inf-fld bnk-fisrts ng-star-inserted">
                                                <h5 title="Envoy Hızlı Havale Çekim">Envoy Hızlı Havale Çekim</h5>
                                                <small>Envoy Hızlı Havale Çekim ile işlem yap</small>
                                             </div>
                                             <!----><!----><!----><!---->
                                          </div>
                                       </div>
                                       <!---->
                                       <div class="flex-item ng-star-inserted">
                                          <div class="bnk-inf-fld trans-fee">
                                             <h5>İşlem ücreti <span>&amp;</span> İşlem zamanı</h5>
                                             <small>
                                                <!---->Bedava<!----><!----><span class="ng-star-inserted">/ 30-180 <span class="processing-min">Dk</span></span><!----><!---->
                                             </small>
                                          </div>
                                       </div>
                                       <!----><!----><br>
                                       <div class="bnk-inf-fld">
                                          <h5>İşlem limiti</h5>
                                          <small>Min: ₺50.00 / Max: ₺10,000.00</small>
                                       </div>
                                       <!----><a href="javascript:;" class="btn right deposit-btn ng-star-inserted">Para Çekme</a><!---->
                                    </div>
                                 </div>
                              </div>
                              <!----><!----><!----><!---->
                              <div class="col s12 ng-star-inserted">
                                 <div class="card-panel bank-card" data-payment="BANK_TRANSFER">
                                    <div class="flex-container">
                                       <payment-icon class="ng-star-inserted">
                                          <img src="https://via.placeholder.com/100x33.png?text=BANK_TRANSFER" hidden="" class="hide"><img src="/images/common/assets/images/payments/bank-transfer.png" width="100" height="33" class=""><!---->
                                       </payment-icon>
                                       <div class="flex-item ng-star-inserted">
                                          <div class="bnk-inf-fld bnk-fisrts">
                                             <h5>Banka Transferi</h5>
                                             <!----><small class="ng-star-inserted">Banka Transferi ile Para Çekme</small><!---->
                                          </div>
                                       </div>
                                       <div class="flex-item ng-star-inserted">
                                          <div class="bnk-inf-fld trans-fee">
                                             <h5>İşlem ücreti &amp; İşlem zamanı</h5>
                                             <small>
                                                <!---->Bedava<!----><!----><span class="ng-star-inserted">/ 30-180 <span class="processing-min">Dk</span></span><!----><!---->
                                             </small>
                                          </div>
                                       </div>
                                       <!----><!----><!----><!----><!----><br>
                                       <div class="bnk-inf-fld">
                                          <h5>İşlem limiti</h5>
                                          <small>Min: ₺100.00 / Max: ₺100,000.00</small>
                                       </div>
                                       <!----><a href="javascript:;" class="btn right deposit-btn ng-star-inserted">Para Çekme</a><!---->
                                    </div>
                                 </div>
                              </div>
                              <!----><!----><!----><!---->
                              <div class="col s12 ng-star-inserted">
                                 <div class="card-panel bank-card" data-payment="papara-form-withdraw">
                                    <div class="flex-container">
                                       <!----><!---->
                                       <payment-icon class="ng-star-inserted">
                                          <img src="https://via.placeholder.com/100x33.png?text=Papara Çekim Form" class="hide" hidden=""><img src="/images/common/assets/images/payments/withdraw-270.png" width="100" height="33" class="papara-form-withdraw"><!---->
                                       </payment-icon>
                                       <!----><!---->
                                       <div class="flex-item ng-star-inserted">
                                          <div>
                                             <div class="bnk-inf-fld bnk-fisrts ng-star-inserted">
                                                <h5 title="Papara Çekim Form">Papara Çekim Form</h5>
                                                <small>Papara Çekim Form ile işlem yap</small>
                                             </div>
                                             <!----><!----><!----><!---->
                                          </div>
                                       </div>
                                       <!---->
                                       <div class="flex-item ng-star-inserted">
                                          <div class="bnk-inf-fld trans-fee">
                                             <h5>İşlem ücreti <span>&amp;</span> İşlem zamanı</h5>
                                             <small>
                                                <!---->Bedava<!----><!----><span class="ng-star-inserted">/ 30-180 <span class="processing-min">Dk</span></span><!----><!---->
                                             </small>
                                          </div>
                                       </div>
                                       <!----><!----><br>
                                       <div class="bnk-inf-fld">
                                          <h5>İşlem limiti</h5>
                                          <small>Min: ₺100.00 / Max: ₺100,000.00</small>
                                       </div>
                                       <!----><a href="javascript:;" class="btn right deposit-btn ng-star-inserted">Para Çekme</a><!---->
                                    </div>
                                 </div>
                              </div>
                              <!----><!----><!----><!---->
                              <div class="col s12 ng-star-inserted">
                                 <div class="card-panel bank-card" data-payment="upaycoins-withdraw">
                                    <div class="flex-container">
                                       <!----><!---->
                                       <payment-icon class="ng-star-inserted">
                                          <img src="https://via.placeholder.com/100x33.png?text=YouPayCoin Çekim" class="hide" hidden=""><img src="/images/common/assets/images/payments/withdraw-715.png" width="100" height="33" class="upaycoins-withdraw"><!---->
                                       </payment-icon>
                                       <!----><!---->
                                       <div class="flex-item ng-star-inserted">
                                          <div>
                                             <div class="bnk-inf-fld bnk-fisrts ng-star-inserted">
                                                <h5 title="YouPayCoin Çekim">YouPayCoin Çekim</h5>
                                                <small>YouPayCoin Çekim ile işlem yap</small>
                                             </div>
                                             <!----><!----><!----><!---->
                                          </div>
                                       </div>
                                       <!---->
                                       <div class="flex-item ng-star-inserted">
                                          <div class="bnk-inf-fld trans-fee">
                                             <h5>İşlem ücreti <span>&amp;</span> İşlem zamanı</h5>
                                             <small>
                                                <!---->Bedava<!----><!----><!----><!----><!---->
                                             </small>
                                          </div>
                                       </div>
                                       <!----><!----><br>
                                       <div class="bnk-inf-fld">
                                          <h5>İşlem limiti</h5>
                                          <small>Min: ₺200.00 / Max: ₺1,000,000.00</small>
                                       </div>
                                       <!----><a href="javascript:;" class="btn right deposit-btn ng-star-inserted">Para Çekme</a><!---->
                                    </div>
                                 </div>
                              </div>
                              <!----><!----><!----><!---->
                              <div class="col s12 ng-star-inserted">
                                 <div class="card-panel bank-card" data-payment="payfix-form-withdraw">
                                    <div class="flex-container">
                                       <!----><!---->
                                       <payment-icon class="ng-star-inserted">
                                          <img src="https://via.placeholder.com/100x33.png?text=Payfix Çekim Form" class="hide" hidden=""><img src="/images/common/assets/images/payments/withdraw-836.png" width="100" height="33" class="payfix-form-withdraw"><!---->
                                       </payment-icon>
                                       <!----><!---->
                                       <div class="flex-item ng-star-inserted">
                                          <div>
                                             <div class="bnk-inf-fld bnk-fisrts ng-star-inserted">
                                                <h5 title="Payfix Çekim Form">Payfix Çekim Form</h5>
                                                <small>Payfix Çekim Form ile işlem yap</small>
                                             </div>
                                             <!----><!----><!----><!---->
                                          </div>
                                       </div>
                                       <!---->
                                       <div class="flex-item ng-star-inserted">
                                          <div class="bnk-inf-fld trans-fee">
                                             <h5>İşlem ücreti <span>&amp;</span> İşlem zamanı</h5>
                                             <small>
                                                <!---->Bedava<!----><!----><span class="ng-star-inserted">/ 30-180 <span class="processing-min">Dk</span></span><!----><!---->
                                             </small>
                                          </div>
                                       </div>
                                       <!----><!----><br>
                                       <div class="bnk-inf-fld">
                                          <h5>İşlem limiti</h5>
                                          <small>Min: ₺100.00 / Max: ₺100,000.00</small>
                                       </div>
                                       <!----><a href="javascript:;" class="btn right deposit-btn ng-star-inserted">Para Çekme</a><!---->
                                    </div>
                                 </div>
                              </div>
                              <!----><!----><!----><!---->
                              <div class="col s12 ng-star-inserted">
                                 <div class="card-panel bank-card" data-payment="seripopy-withdraw">
                                    <div class="flex-container">
                                       <!----><!---->
                                       <payment-icon class="ng-star-inserted">
                                          <img src="https://via.placeholder.com/100x33.png?text=Seripopy Withdraw" class="hide" hidden=""><img src="/images/limanbet/upload_files/withdraw-1872.png" width="100" height="33" class="seripopy-withdraw"><!---->
                                       </payment-icon>
                                       <!----><!---->
                                       <div class="flex-item ng-star-inserted">
                                          <div>
                                             <div class="bnk-inf-fld bnk-fisrts ng-star-inserted">
                                                <h5 title="Seripopy Withdraw">Seripopy Withdraw</h5>
                                                <small>Seripopy Withdraw ile işlem yap</small>
                                             </div>
                                             <!----><!----><!----><!---->
                                          </div>
                                       </div>
                                       <!---->
                                       <div class="flex-item ng-star-inserted">
                                          <div class="bnk-inf-fld trans-fee">
                                             <h5>İşlem ücreti <span>&amp;</span> İşlem zamanı</h5>
                                             <small>
                                                <!---->Bedava<!----><!----><!----><!----><!---->
                                             </small>
                                          </div>
                                       </div>
                                       <!----><!----><br>
                                       <div class="bnk-inf-fld">
                                          <h5>İşlem limiti</h5>
                                          <small>Min: ₺50.00 / Max: ₺100,000.00</small>
                                       </div>
                                       <!----><a href="javascript:;" class="btn right deposit-btn ng-star-inserted">Para Çekme</a><!---->
                                    </div>
                                 </div>
                              </div>
                              <!----><!----><!----><!---->
                              <div class="col s12 ng-star-inserted">
                                 <div class="card-panel bank-card" data-payment="starpay-papara-withdraw">
                                    <div class="flex-container">
                                       <!----><!---->
                                       <payment-icon class="ng-star-inserted">
                                          <img src="https://via.placeholder.com/100x33.png?text=Starpay Papara Withdraw" class="hide" hidden=""><img src="/images/limanbet/upload_files/withdraw-1870.png" width="100" height="33" class="starpay-papara-withdraw"><!---->
                                       </payment-icon>
                                       <!----><!---->
                                       <div class="flex-item ng-star-inserted">
                                          <div>
                                             <div class="bnk-inf-fld bnk-fisrts ng-star-inserted">
                                                <h5 title="Starpay Papara Withdraw">Starpay Papara Withdraw</h5>
                                                <small>Starpay Papara Withdraw ile işlem yap</small>
                                             </div>
                                             <!----><!----><!----><!---->
                                          </div>
                                       </div>
                                       <!---->
                                       <div class="flex-item ng-star-inserted">
                                          <div class="bnk-inf-fld trans-fee">
                                             <h5>İşlem ücreti <span>&amp;</span> İşlem zamanı</h5>
                                             <small>
                                                <!---->Bedava<!----><!----><!----><!----><!---->
                                             </small>
                                          </div>
                                       </div>
                                       <!----><!----><br>
                                       <div class="bnk-inf-fld">
                                          <h5>İşlem limiti</h5>
                                          <small>Min: ₺200.00 / Max: ₺100,000.00</small>
                                       </div>
                                       <!----><a href="javascript:;" class="btn right deposit-btn ng-star-inserted">Para Çekme</a><!---->
                                    </div>
                                 </div>
                              </div>
                              <!----><!----><!----><!----><!----><!---->
                           </div>
                        </div>
                        <!---->
                        <app-static-inner-content contentcode="withdraw-bottom" class="ng-star-inserted">
                           <!---->
                        </app-static-inner-content>
                        <!---->
                     </div>
                     <div id="PaymentFormModal" materialize="modal" class="modal open dshbrd-modal pymnt-mdl" style="z-index: 1091;">
                        <!---->
                     </div>
                     <div id="confirmPromptModal" materialize="modal" class="modal modal-sm dshbrd-modal" style="z-index: 1093;">
                        <app-confirm-promt>
                           <!---->
                        </app-confirm-promt>
                     </div>
                  </deposit-withdraw-money>
               </app-withdraw-money>
               <!---->
            </div>
         </div>
      </div>
   </app-dashboard>
   <!---->
</main>
<?php }?>