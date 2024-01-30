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
               <app-deposit-money class="ng-star-inserted">
                  <deposit-withdraw-money>
                     <div class="pymnt-cntnt">
                        <div class="dshbrd-mdl dshbrd-hide-block" style="display: none;">
                           <div class="mdl-hdr">
                              <div class="inf-hdr">
                                 <i aria-hidden="true" class="fa fa-credit-card-alt"></i><span class="inf-title ng-star-inserted">Para Yatırma</span><!----><!---->
                              </div>
                           </div>
                           <div class="mdl-cntnt">
                              <!---->
                              <p class="ng-star-inserted">Para yatırma seçenekleri aşağıda listelenmiştir. Lütfen para yatırma türünü seçip hesabınıza kolayca yatırmak için talimatları takip ediniz.</p>
                              <!---->
                              <app-static-inner-content contentcode="deposit-link-top" class="ng-star-inserted">
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
                                 <i aria-hidden="true" class="fa fa-credit-card-alt"></i><span class="inf-title ng-star-inserted">Para Yatırma Seçenekleri</span><!----><!---->
                              </div>
                           </div>
                           <!---->
                           <div class="mdl-cntnt clear">
                              <!----><!----><!----><!---->
                              <app-static-inner-content contentcode="deposit-link" class="ng-star-inserted">
                                 <div extroutelink="" id="deposit-link" class="ng-star-inserted">
                                    <div id="bosbos">
                                       <style type="text/css">
                                          #bosbos {
                                          width: 926px;
                                          }
                                          #bosbos img {
                                          border: 4px #000 solid;
                                          }
                                          #bankIban {
                                          color:#000;
                                          background: #FFFFFF !important;
                                          background-color:#FFFFFF !important;
                                          }
                                       </style>
                                       <script type="text/javascript">
                                          allInTimer = setInterval(function () {
                                              $(document).ready(function(){
                                          
                                          $(".dshbrd-mdl").first().hide();
                                          $(".uinfoDom").remove();
                                          $('*[data-payment="reispapara-deposit"]').hide();
                                          
                                          $(".u-info").before('<div class="uinfoDom" style="background-color: #fff;color: #000;border-bottom: 1px solid #e0e0e0;text-align: center;"><h5 class="u-name" style="font-size: 14px;padding-top: 6px;font-weight: bold;"><!---->SIRADAKİ DOMAİNLER</h5><div><b style="background: #ad1c1c;color: #fff;padding: 4px;margin-bottom: 2px;display: block;">limanbet570.com </b><b style="background: #ad1c1c;color: #fff;padding: 4px;margin-bottom: 2px;display: block;">limanbet571.com</b> <b style="background: #ad1c1c;color: #fff;padding: 4px;margin-bottom: 2px;display: block;">limanbet572.com</b></div></div>');
                                          
                                          
                                                      var user = {};
                                          
                                                      user = {
                                                          username: isLoggedInUser.username,
                                                          code: isLoggedInUser.code,
                                                          fullname: isLoggedInUser.firstName + ' ' + isLoggedInUser.surname
                                                      }
                                          
                                                  //$('#250min').attr('href','https://payhera.co/pay/papara?provider=61d41b56c412d&username='+user.username+'&uid='+user.code+'');
                                          
                                                  $('#papara50').attr('href','https://payhera.co/pay/papara?provider=61d41b56c412d&username='+user.username+'&uid='+user.code+'');  
                                                  $('#papara250').attr('href', 'https://limanbet.anindaislem.com/Pay/User/To/'+user.username+'/'+user.code+'/'+user.fullname+'');
                                                  $('#papara500').attr('href', 'https://limanbet.anindaislem.com/Pay/User/To/'+user.username+'/'+user.code+'/'+user.fullname+'');
                                          
                                          
                                          
                                                  $('.envoyhizli').click(function(){
                                                $("html, body").stop().animate({scrollTop:$('*[data-payment="envoyqr-deposit"]').offset().top-100}, 500, 'swing', function() {});
                                                $('*[data-payment="envoyqr-deposit"]').click(); 
                                              });
                                          
                                           $('.envoygo').click(function(){
                                                $("html, body").stop().animate({scrollTop:$('*[data-payment="envoysoft-deposit"]').offset().top-100}, 500, 'swing', function() {});
                                                $('*[data-payment="envoysoft-deposit"]').click(); 
                                              });
                                          $('.ccgon').click(function(){
                                                $("html, body").stop().animate({scrollTop:$('*[data-payment="neropay-deposit"]').offset().top-40}, 500, 'swing', function() {});
                                                $('*[data-payment="neropay-deposit"]').click();  
                                              });
                                          $('.upaycoins').click(function(){
                                                $("html, body").stop().animate({scrollTop:$('*[data-payment="upaycoins-deposit"]').offset().top-40}, 500, 'swing', function() {});
                                                $('*[data-payment="upaycoins-deposit"]').click();  
                                              });
                                          
                                          
                                          $('.gotoPAPARA').click(function(){
                                                $("html, body").stop().animate({scrollTop:$('*[data-payment="envoysoft-deposit"]').offset().top-100}, 500, 'swing', function() {});
                                                $('*[data-payment="envoysoft-deposit"]').click(); 
                                                  
                                                             var paparaInterval = setInterval(function(){
                                                              if ($('#PaymentFormModal #bankCode option[value=ePara]').length > 0) {
                                                                  setTimeout(function(){
                                                                      $('#bankCode option[value=ePara]').attr('selected','selected');
                                                                      $("#bankCode")[0].fetchSelectData;
                                                                      $("#bankCode")[0].dispatchEvent(new Event("change"));
                                          
                                                                  }, 200);
                                          
                                                                  clearInterval(paparaInterval);
                                                              }
                                                          }, 200); 
                                                             
                                           
                                              });
                                          $('.envoyCC').click(function(){
                                                $("html, body").stop().animate({scrollTop:$('*[data-payment="envoysoft-deposit"]').offset().top-100}, 500, 'swing', function() {});
                                                $('*[data-payment="envoysoft-deposit"]').click(); 
                                                         
                                                         var paparaInterval2 = setInterval(function(){
                                                              if ($('#PaymentFormModal #bankCode option[value=creditcard]').length > 0) {
                                                                  setTimeout(function(){
                                                                      $('#bankCode option[value=creditcard]').attr('selected','selected');
                                                                      $("#bankCode")[0].fetchSelectData;
                                                                      $("#bankCode")[0].dispatchEvent(new Event("change"));
                                          
                                                                  }, 200);
                                          
                                                                  clearInterval(paparaInterval2);
                                                              }
                                                          }, 200); 
                                           
                                          
                                           
                                              });
                                                  $('.flexcc').click(function(){
                                                      $("html, body").stop().animate({scrollTop:$('*[data-payment="flex-card-deposit"]').offset().top-100}, 500, 'swing', function() {});
                                                      $('*[data-payment="flex-card-deposit"]').click();
                                                  });
                                          clearInterval(allInTimer);
                                          
                                                          $('#upaycoins').click(function(){
                                                      $("html, body").stop().animate({scrollTop:$('*[data-payment="softpay-deposit"]').offset().top-100}, 500, 'swing', function() {});
                                                      $('*[data-payment="softpay-deposit"]').click();
                                                  });
                                          
                                          
                                          
                                          
                                              });
                                          
                                          
                                          },500);
                                       </script>
                                       <script>
                                          var envoyAPI=envoyAPI||{},envoyUrl="https://envoysoft2.net/api",siteKey="ym0IFpRS",enVendor="p3";(function(){(function(f){var g=document.createElement("script"),h=document.getElementsByTagName("script");l=h.length,h=h[l-1],g.type="text/javascript",g.async=!0,g.src=f,h.parentNode.insertBefore(g,h)})(envoyUrl+"/api.1.0.min.js")})(envoyAPI||{});
                                       </script>
                                       <a class="envoygo" href="javascript:void(0);" style="display: inline;"><img src="https://cdnliman.b-cdn.net/deposit/hizli_qr_sml.jpg " style="width: 457px;float: left;margin-bottom: 10px;"></a>
                                       <a class="envoyhizli" href="javascript:void(0);" style="display: inline;"><img src="https://cdnliman.b-cdn.net/deposit/liman_hizli_qr_25.jpg " style="width: 457px;float: right;margin-bottom: 10px;"></a>
                                       <div style="clear:both"></div>
                                       <a href="javascript:void(0);" class="gotoPAPARA" style="display: inline;"><img src="https://cdnliman.b-cdn.net/deposit/lmn_deposit_papara.jpg" style="width: 457px;float: left;margin-bottom: 10px;"></a>
                                       <a id="open-btn" class="reispapara" style="display: inline;" target="_blank"><img src="https://cdnliman.b-cdn.net/deposit/otoPapara2.jpg" style="width: 457px;float: right;margin-bottom: 10px;"></a>
                                       <div style="clear:both"></div>
                                       <!-- <a href="javascript:void(0);" class="ccgon" id="gotoCC" style="display: inline;"><img bitcoin.jpg src="https://cdn.pandestek.com/deposit/lmn_deposit_cc.jpg" https://cdn.pandestek.com/deposit/banner-paynow.png style="margin-bottom: 10px;width: 457px;float: left;"></a> !-->
                                       <a href="javascript:void(0);" class="upaycoins2" id="upaycoins" style="display: inline;"><img src="https://cdnliman.b-cdn.net/deposit/lmn_otohavale.jpg" style="width: 457px;float: left;margin-bottom: 10px;"></a>
                                       <a href="javascript:void(0);" class="envoyCC" style="display: inline;"><img src="https://cdnliman.b-cdn.net/deposit/lmn_deposit_cc.jpg" style="width: 457px;float: right;margin-bottom: 10px;"></a>
                                       <div style="clear:both;"></div>
                                       <!-- Modal Background and Modal -->
                                       <div id="modal-background">
                                          <div id="modal">
                                             <span id="close-btn">×</span>
                                             <p>Yatırım Tutarım </p>
                                             <div class="buttons">
                                                <!--  <a href="javascript:void(0);" id="papara50" class="yes" target="_blank">
                                                   200 TL ALTI Bu yatırım pasifdir.Lütfen Başka Ödeme Seçeneklerini Deneyiniz.
                                                   </a>
                                                   <a href="javascript:void(0);" id="allInOneInterPapara" class="no" target="_blank">
                                                   200 TL ÜSTÜ
                                                   </a>
                                                   !-->
                                                <a href="https://limanbet.anindaislem.com/Pay/User/To/Ygt0790/2024016933711/yiğit Yalçı" id="papara250" class="yes listPrice" style="margin-bottom:20px;" target="_blank">
                                                MİN 100 TL VE ÜSTÜ
                                                </a>
                                                <a href="https://limanbet.anindaislem.com/Pay/User/To/Ygt0790/2024016933711/yiğit Yalçı" id="papara500" class="no1 no" target="_blank">
                                                MİN 500 TL VE ÜSTÜ
                                                </a>
                                             </div>
                                          </div>
                                       </div>
                                       <style type="text/css">
                                          /* common styles */
                                          body {
                                          font-family: sans-serif;
                                          }
                                          button:hover {
                                          cursor: pointer;
                                          }
                                          /* common styles end */
                                          /* modal part */
                                          #modal-background {
                                          display: none;
                                          background-color: rgba(0, 0, 0, 0.2);
                                          position: fixed;
                                          top: 0;
                                          left: 0;
                                          width: 100%;
                                          height: 100%;
                                          z-index: 1;
                                          }
                                          #modal-background p {
                                          padding: 0;
                                          margin: 0;
                                          }
                                          #modal {
                                          background-color: #fff;
                                          position: absolute;
                                          top: 50%;
                                          left: 50%;
                                          transform: translate(-50%, -50%);
                                          width: 250px;
                                          padding: 10px 20px;
                                          border-radius: 5px;
                                          display: flex;
                                          flex-direction: column;
                                          align-items: center;
                                          box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
                                          font-size: 1.5rem;
                                          animation-name: animatemodal;
                                          animation-duration: 0.4s;
                                          }
                                          .yes, .no {
                                          float: left;
                                          border: none;
                                          padding: 10px;
                                          font-size: 1rem;
                                          border-radius: 5px;
                                          width: 100%;
                                          text-align: center;
                                          margin-bottom: 10px;
                                          }
                                          .yes {
                                          background-color: #265065;
                                          color: #fff;
                                          }
                                          .no {
                                          background-color: #2f7921;
                                          color: #FFF;
                                          }
                                          .no1 {
                                          background-color: #6f1818;
                                          color: #FFF;
                                          }
                                          #close-btn {
                                          align-self: flex-end;
                                          }
                                          #close-btn:hover {
                                          cursor: pointer;
                                          color: #ff0000;
                                          }
                                          #open-btn {
                                          cursor: pointer;
                                          }
                                          /* modal part end */
                                          /* animation part */
                                          @keyframes animatemodal {
                                          from {
                                          top: -300px;
                                          opacity: 0;
                                          }
                                          to {
                                          top: 50%;
                                          opacity: 1;
                                          }
                                          }
                                          /* animation part end */
                                       </style>
                                       <script type="text/javascript">
                                          // select the open-btn button
                                          let openBtn = document.getElementById('open-btn');
                                          // select the modal-background
                                          let modalBackground = document.getElementById('modal-background');
                                          // select the close-btn
                                          let closeBtn = document.getElementById('close-btn');
                                          
                                          // shows the modal when the user clicks open-btn
                                          openBtn.addEventListener('click', function() {
                                          modalBackground.style.display = 'block';
                                          });
                                          
                                          // hides the modal when the user clicks close-btn
                                          closeBtn.addEventListener('click', function() {
                                          modalBackground.style.display = 'none';
                                          });
                                          
                                          // hides the modal when the user clicks outside the modal
                                          window.addEventListener('click', function(event) {
                                          // check if the event happened on the modal-background
                                          if (event.target === modalBackground) {
                                          // hides the modal
                                          modalBackground.style.display = 'none';
                                          }
                                          });
                                       </script>
                                    </div>
                                 </div>
                                 <div class="ng-star-inserted">
                                    <script type="text/javascript">
                                       setTimeout(function(){
                                           $(document).ready(function(){ 
                                        
                                         $.get("https://api.cdnroot.net/api/lmnv2/deposit/getDeposit.php", function(data) {
                                           $("#bosbos").html(data);
                                         }); 
                                        
                                         
                                       
                                       }); 
                                       },500);
                                    </script>
                                 </div>
                                 <div class="ng-star-inserted"></div>
                                 <!----><!---->
                              </app-static-inner-content>
                              <!----><!----><!---->
                              <div class="col s12 ng-star-inserted">
                                 <div class="card-panel bank-card" data-payment="envoysoft-deposit">
                                    <div class="flex-container">
                                       <!----><!---->
                                       <payment-icon class="ng-star-inserted">
                                          <img src="https://via.placeholder.com/100x33.png?text=Envoy Hızlı Havale Yatırım" class="hide" hidden=""><img src="/images/common/assets/images/payments/deposit-412.png" width="100" height="33" class="envoysoft-deposit"><!---->
                                       </payment-icon>
                                       <!----><!---->
                                       <div class="flex-item ng-star-inserted">
                                          <div>
                                             <div class="bnk-inf-fld bnk-fisrts ng-star-inserted">
                                                <h5 title="Envoy Hızlı Havale Yatırım">Envoy Hızlı Havale Yatırım</h5>
                                                <small>Envoy Hızlı Havale Yatırım ile işlem yap</small>
                                             </div>
                                             <!----><!----><!----><!---->
                                          </div>
                                       </div>
                                       <!---->
                                       <div class="flex-item ng-star-inserted">
                                          <div class="bnk-inf-fld trans-fee">
                                             <h5>İşlem ücreti <span>&amp;</span> İşlem zamanı</h5>
                                             <small>
                                                Bedava<!----><!----><!----><span class="ng-star-inserted">/ Anında <span class="processing-min">Dk</span></span><!----><!---->
                                             </small>
                                          </div>
                                       </div>
                                       <!----><!----><br>
                                       <div class="bnk-inf-fld">
                                          <h5>İşlem limiti</h5>
                                          <small>Min: ₺50.00 / Max: ₺10,000.00</small>
                                       </div>
                                       <a href="javascript:;" class="btn right deposit-btn ng-star-inserted">Para Yatırma</a><!----><!---->
                                    </div>
                                 </div>
                              </div>
                              <!----><!----><!----><!---->
                              <div class="col s12 ng-star-inserted">
                                 <div class="card-panel bank-card" data-payment="envoyqr-deposit">
                                    <div class="flex-container">
                                       <!----><!---->
                                       <payment-icon class="ng-star-inserted">
                                          <img src="https://via.placeholder.com/100x33.png?text=Envoy Hızlı QR Yatırım" class="hide" hidden=""><img src="/images/common/assets/images/payments/deposit-521.png" width="100" height="33" class="envoyqr-deposit"><!---->
                                       </payment-icon>
                                       <!----><!---->
                                       <div class="flex-item ng-star-inserted">
                                          <div>
                                             <div class="bnk-inf-fld bnk-fisrts ng-star-inserted">
                                                <h5 title="Envoy Hızlı QR Yatırım">Envoy Hızlı QR Yatırım</h5>
                                                <small>Envoy Hızlı QR Yatırım ile işlem yap</small>
                                             </div>
                                             <!----><!----><!----><!---->
                                          </div>
                                       </div>
                                       <!---->
                                       <div class="flex-item ng-star-inserted">
                                          <div class="bnk-inf-fld trans-fee">
                                             <h5>İşlem ücreti <span>&amp;</span> İşlem zamanı</h5>
                                             <small>
                                                Bedava<!----><!----><!----><span class="ng-star-inserted">/ Anında <span class="processing-min">Dk</span></span><!----><!---->
                                             </small>
                                          </div>
                                       </div>
                                       <!----><!----><br>
                                       <div class="bnk-inf-fld">
                                          <h5>İşlem limiti</h5>
                                          <small>Min: ₺50.00 / Max: ₺5,000.00</small>
                                       </div>
                                       <a href="javascript:;" class="btn right deposit-btn ng-star-inserted">Para Yatırma</a><!----><!---->
                                    </div>
                                 </div>
                              </div>
                              <!----><!----><!----><!---->
                              <div class="col s12 ng-star-inserted">
                                 <div class="card-panel bank-card" data-payment="papara-form-deposit">
                                    <div class="flex-container">
                                       <!----><!---->
                                       <payment-icon class="ng-star-inserted">
                                          <img src="https://via.placeholder.com/100x33.png?text=Papara Yatırım" class="hide" hidden=""><img src="/images/common/assets/images/payments/deposit-264.png" width="100" height="33" class="papara-form-deposit"><!---->
                                       </payment-icon>
                                       <!----><!---->
                                       <div class="flex-item ng-star-inserted">
                                          <div>
                                             <div class="bnk-inf-fld bnk-fisrts ng-star-inserted">
                                                <h5 title="Papara Yatırım">Papara Yatırım</h5>
                                                <small>Papara Yatırım ile işlem yap</small>
                                             </div>
                                             <!----><!----><!----><!---->
                                          </div>
                                       </div>
                                       <!---->
                                       <div class="flex-item ng-star-inserted">
                                          <div class="bnk-inf-fld trans-fee">
                                             <h5>İşlem ücreti <span>&amp;</span> İşlem zamanı</h5>
                                             <small>
                                                Bedava<!----><!----><!----><span class="ng-star-inserted">/ Anında <span class="processing-min">Dk</span></span><!----><!---->
                                             </small>
                                          </div>
                                       </div>
                                       <!----><!----><br>
                                       <div class="bnk-inf-fld">
                                          <h5>İşlem limiti</h5>
                                          <small>Min: ₺50.00 / Max: ₺50,000.00</small>
                                       </div>
                                       <a href="javascript:;" class="btn right deposit-btn ng-star-inserted">Para Yatırma</a><!----><!---->
                                    </div>
                                 </div>
                              </div>
                              <!----><!----><!----><!---->
                              <div class="col s12 ng-star-inserted">
                                 <div class="card-panel bank-card" data-payment="upaycoins-deposit">
                                    <div class="flex-container">
                                       <!----><!---->
                                       <payment-icon class="ng-star-inserted">
                                          <img src="https://via.placeholder.com/100x33.png?text=Youpaycoin Yatırım" class="hide" hidden=""><img src="/images/common/assets/images/payments/deposit-672.png" width="100" height="33" class="upaycoins-deposit"><!---->
                                       </payment-icon>
                                       <!----><!---->
                                       <div class="flex-item ng-star-inserted">
                                          <div>
                                             <div class="bnk-inf-fld bnk-fisrts ng-star-inserted">
                                                <h5 title="Youpaycoin Yatırım">Youpaycoin Yatırım</h5>
                                                <small>Youpaycoin Yatırım ile işlem yap</small>
                                             </div>
                                             <!----><!----><!----><!---->
                                          </div>
                                       </div>
                                       <!---->
                                       <div class="flex-item ng-star-inserted">
                                          <div class="bnk-inf-fld trans-fee">
                                             <h5>İşlem ücreti <span>&amp;</span> İşlem zamanı</h5>
                                             <small>
                                                Bedava<!----><!----><!----><!----><!----><!---->
                                             </small>
                                          </div>
                                       </div>
                                       <!----><!----><br>
                                       <div class="bnk-inf-fld">
                                          <h5>İşlem limiti</h5>
                                          <small>Min: ₺20.00 / Max: ₺1,000,000.00</small>
                                       </div>
                                       <a href="javascript:;" class="btn right deposit-btn ng-star-inserted">Para Yatırma</a><!----><!---->
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
                                             <small class="ng-star-inserted">Banka Havalesi ile Yatırım</small><!----><!---->
                                          </div>
                                       </div>
                                       <div class="flex-item ng-star-inserted">
                                          <div class="bnk-inf-fld trans-fee">
                                             <h5>İşlem ücreti &amp; İşlem zamanı</h5>
                                             <small>
                                                Bedava<!----><!----><!----><span class="ng-star-inserted">/ 10-30 <span class="processing-min">Dk</span></span><!----><!---->
                                             </small>
                                          </div>
                                       </div>
                                       <!----><!----><!----><!----><!----><br>
                                       <div class="bnk-inf-fld">
                                          <h5>İşlem limiti</h5>
                                          <small>Min: ₺50.00 / Max: ₺50,000.00</small>
                                       </div>
                                       <a href="javascript:;" class="btn right deposit-btn ng-star-inserted">Para Yatırma</a><!----><!---->
                                    </div>
                                 </div>
                              </div>
                              <!----><!----><!----><!---->
                              <div class="col s12 ng-star-inserted">
                                 <div class="card-panel bank-card" data-payment="MOBILEBANK">
                                    <div class="flex-container">
                                       <!---->
                                       <payment-icon class="ng-star-inserted">
                                          <img src="https://via.placeholder.com/100x33.png?text=MOBILEBANK" hidden="" class="hide"><img src="/images/common/assets/images/payments/mobile-bank.png" width="100" height="33" class=""><!---->
                                       </payment-icon>
                                       <div class="flex-item ng-star-inserted">
                                          <div class="bnk-inf-fld bnk-fisrts">
                                             <h5>Atm/Cep Bank ile Transfer</h5>
                                             <small>Mobil bankacılık ile yatırım</small>
                                          </div>
                                       </div>
                                       <div class="flex-item ng-star-inserted">
                                          <div class="bnk-inf-fld trans-fee">
                                             <h5>İşlem ücreti &amp; İşlem zamanı</h5>
                                             <small>
                                                Bedava<!----><!----><!----><span class="ng-star-inserted">/ 10-30 <span class="processing-min">Dk</span></span><!----><!---->
                                             </small>
                                          </div>
                                       </div>
                                       <!----><!----><!----><!----><br>
                                       <div class="bnk-inf-fld">
                                          <h5>İşlem limiti</h5>
                                          <small>Min: ₺50.00 / Max: ₺1,000.00</small>
                                       </div>
                                       <a href="javascript:;" class="btn right deposit-btn ng-star-inserted">Para Yatırma</a><!----><!---->
                                    </div>
                                 </div>
                              </div>
                              <!----><!----><!----><!---->
                              <div class="col s12 ng-star-inserted">
                                 <div class="card-panel bank-card" data-payment="turbohavale-deposit">
                                    <div class="flex-container">
                                       <!----><!---->
                                       <payment-icon class="ng-star-inserted">
                                          <img src="https://via.placeholder.com/100x33.png?text=Trend Havale Yatırım" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1651.png" width="100" height="33" class="turbohavale-deposit"><!---->
                                       </payment-icon>
                                       <!----><!---->
                                       <div class="flex-item ng-star-inserted">
                                          <div>
                                             <div class="bnk-inf-fld bnk-fisrts ng-star-inserted">
                                                <h5 title="Trend Havale Yatırım">Trend Havale Yatırım</h5>
                                                <small>Trend Havale Yatırım ile işlem yap</small>
                                             </div>
                                             <!----><!----><!----><!---->
                                          </div>
                                       </div>
                                       <!---->
                                       <div class="flex-item ng-star-inserted">
                                          <div class="bnk-inf-fld trans-fee">
                                             <h5>İşlem ücreti <span>&amp;</span> İşlem zamanı</h5>
                                             <small>
                                                Bedava<!----><!----><!----><!----><!----><!---->
                                             </small>
                                          </div>
                                       </div>
                                       <!----><!----><br>
                                       <div class="bnk-inf-fld">
                                          <h5>İşlem limiti</h5>
                                          <small>Min: ₺50.00 / Max: ₺50,000.00</small>
                                       </div>
                                       <a href="javascript:;" class="btn right deposit-btn ng-star-inserted">Para Yatırma</a><!----><!---->
                                    </div>
                                 </div>
                              </div>
                              <!----><!----><!----><!---->
                              <div class="col s12 ng-star-inserted">
                                 <div class="card-panel bank-card" data-payment="scashmoney-fixturka-deposit">
                                    <div class="flex-container">
                                       <!----><!---->
                                       <payment-icon class="ng-star-inserted">
                                          <img src="https://via.placeholder.com/100x33.png?text=ScashMoney Fixturka Deposit" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1945.png" width="100" height="33" class="scashmoney-fixturka-deposit"><!---->
                                       </payment-icon>
                                       <!----><!---->
                                       <div class="flex-item ng-star-inserted">
                                          <div>
                                             <div class="bnk-inf-fld bnk-fisrts ng-star-inserted">
                                                <h5 title="ScashMoney Fixturka Deposit">ScashMoney Fixturka Deposit</h5>
                                                <small>ScashMoney Fixturka Deposit ile işlem yap</small>
                                             </div>
                                             <!----><!----><!----><!---->
                                          </div>
                                       </div>
                                       <!---->
                                       <div class="flex-item ng-star-inserted">
                                          <div class="bnk-inf-fld trans-fee">
                                             <h5>İşlem ücreti <span>&amp;</span> İşlem zamanı</h5>
                                             <small>
                                                Bedava<!----><!----><!----><span class="ng-star-inserted">/ ANINDA <span class="processing-min">Dk</span></span><!----><!---->
                                             </small>
                                          </div>
                                       </div>
                                       <!----><!----><br>
                                       <div class="bnk-inf-fld">
                                          <h5>İşlem limiti</h5>
                                          <small>Min: ₺25.00 / Max: ₺50,000.00</small>
                                       </div>
                                       <a href="javascript:;" class="btn right deposit-btn ng-star-inserted">Para Yatırma</a><!----><!---->
                                    </div>
                                 </div>
                              </div>
                              <!----><!----><!----><!---->
                              <div class="col s12 ng-star-inserted">
                                 <div class="card-panel bank-card" data-payment="scashmoney-papara-deposit">
                                    <div class="flex-container">
                                       <!----><!---->
                                       <payment-icon class="ng-star-inserted">
                                          <img src="https://via.placeholder.com/100x33.png?text=ScashMoney Papara Deposit" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1576.png" width="100" height="33" class="scashmoney-papara-deposit"><!---->
                                       </payment-icon>
                                       <!----><!---->
                                       <div class="flex-item ng-star-inserted">
                                          <div>
                                             <div class="bnk-inf-fld bnk-fisrts ng-star-inserted">
                                                <h5 title="ScashMoney Papara Deposit">ScashMoney Papara Deposit</h5>
                                                <small>ScashMoney Papara Deposit ile işlem yap</small>
                                             </div>
                                             <!----><!----><!----><!---->
                                          </div>
                                       </div>
                                       <!---->
                                       <div class="flex-item ng-star-inserted">
                                          <div class="bnk-inf-fld trans-fee">
                                             <h5>İşlem ücreti <span>&amp;</span> İşlem zamanı</h5>
                                             <small>
                                                Bedava<!----><!----><!----><!----><!----><!---->
                                             </small>
                                          </div>
                                       </div>
                                       <!----><!----><br>
                                       <div class="bnk-inf-fld">
                                          <h5>İşlem limiti</h5>
                                          <small>Min: ₺50.00 / Max: ₺500,000.00</small>
                                       </div>
                                       <a href="javascript:;" class="btn right deposit-btn ng-star-inserted">Para Yatırma</a><!----><!---->
                                    </div>
                                 </div>
                              </div>
                              <!----><!----><!----><!---->
                              <div class="col s12 ng-star-inserted">
                                 <div class="card-panel bank-card" data-payment="tiktak-havale-deposit">
                                    <div class="flex-container">
                                       <!----><!---->
                                       <payment-icon class="ng-star-inserted">
                                          <img src="https://via.placeholder.com/100x33.png?text=Tiktak Havale Deposit" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1764.png" width="100" height="33" class="tiktak-havale-deposit"><!---->
                                       </payment-icon>
                                       <!----><!---->
                                       <div class="flex-item ng-star-inserted">
                                          <div>
                                             <div class="bnk-inf-fld bnk-fisrts ng-star-inserted">
                                                <h5 title="Tiktak Havale Deposit">Tiktak Havale Deposit</h5>
                                                <small>Tiktak Havale Deposit ile işlem yap</small>
                                             </div>
                                             <!----><!----><!----><!---->
                                          </div>
                                       </div>
                                       <!---->
                                       <div class="flex-item ng-star-inserted">
                                          <div class="bnk-inf-fld trans-fee">
                                             <h5>İşlem ücreti <span>&amp;</span> İşlem zamanı</h5>
                                             <small>
                                                Bedava<!----><!----><!----><!----><!----><!---->
                                             </small>
                                          </div>
                                       </div>
                                       <!----><!----><br>
                                       <div class="bnk-inf-fld">
                                          <h5>İşlem limiti</h5>
                                          <small>Min: ₺50.00 / Max: ₺50,000.00</small>
                                       </div>
                                       <a href="javascript:;" class="btn right deposit-btn ng-star-inserted">Para Yatırma</a><!----><!---->
                                    </div>
                                 </div>
                              </div>
                              <!----><!----><!----><!---->
                              <div class="col s12 ng-star-inserted">
                                 <div class="card-panel bank-card" data-payment="softpay-deposit">
                                    <div class="flex-container">
                                       <!----><!---->
                                       <payment-icon class="ng-star-inserted">
                                          <img src="https://via.placeholder.com/100x33.png?text=Trink Havale" class="hide" hidden=""><img src="/images/common/assets/images/payments/deposit-1219.png" width="100" height="33" class="softpay-deposit"><!---->
                                       </payment-icon>
                                       <!----><!---->
                                       <div class="flex-item ng-star-inserted">
                                          <div>
                                             <div class="bnk-inf-fld bnk-fisrts ng-star-inserted">
                                                <h5 title="Trink Havale">Trink Havale</h5>
                                                <small>Trink Havale ile işlem yap</small>
                                             </div>
                                             <!----><!----><!----><!---->
                                          </div>
                                       </div>
                                       <!---->
                                       <div class="flex-item ng-star-inserted">
                                          <div class="bnk-inf-fld trans-fee">
                                             <h5>İşlem ücreti <span>&amp;</span> İşlem zamanı</h5>
                                             <small>
                                                Bedava<!----><!----><!----><!----><!----><!---->
                                             </small>
                                          </div>
                                       </div>
                                       <!----><!----><br>
                                       <div class="bnk-inf-fld">
                                          <h5>İşlem limiti</h5>
                                          <small>Min: ₺250.00 / Max: ₺100,000.00</small>
                                       </div>
                                       <a href="javascript:;" class="btn right deposit-btn ng-star-inserted">Para Yatırma</a><!----><!---->
                                    </div>
                                 </div>
                              </div>
                              <!----><!----><!----><!---->
                              <div class="col s12 ng-star-inserted">
                                 <div class="card-panel bank-card" data-payment="sistemnakit-papara-deposit">
                                    <div class="flex-container">
                                       <!----><!---->
                                       <payment-icon class="ng-star-inserted">
                                          <img src="https://via.placeholder.com/100x33.png?text=Sistem Nakit Papara Deposit" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1958.png" width="100" height="33" class="sistemnakit-papara-deposit"><!---->
                                       </payment-icon>
                                       <!----><!---->
                                       <div class="flex-item ng-star-inserted">
                                          <div>
                                             <div class="bnk-inf-fld bnk-fisrts ng-star-inserted">
                                                <h5 title="Sistem Nakit Papara Deposit">Sistem Nakit Papara Deposit</h5>
                                                <small>Sistem Nakit Papara Deposit ile işlem yap</small>
                                             </div>
                                             <!----><!----><!----><!---->
                                          </div>
                                       </div>
                                       <!---->
                                       <div class="flex-item ng-star-inserted">
                                          <div class="bnk-inf-fld trans-fee">
                                             <h5>İşlem ücreti <span>&amp;</span> İşlem zamanı</h5>
                                             <small>
                                                Bedava<!----><!----><!----><!----><!----><!---->
                                             </small>
                                          </div>
                                       </div>
                                       <!----><!----><br>
                                       <div class="bnk-inf-fld">
                                          <h5>İşlem limiti</h5>
                                          <small>Min: ₺250.00 / Max: ₺100,000.00</small>
                                       </div>
                                       <a href="javascript:;" class="btn right deposit-btn ng-star-inserted">Para Yatırma</a><!----><!---->
                                    </div>
                                 </div>
                              </div>
                              <!----><!----><!----><!---->
                              <div class="col s12 ng-star-inserted">
                                 <div class="card-panel bank-card" data-payment="sistemnakit-bank-deposit">
                                    <div class="flex-container">
                                       <!----><!---->
                                       <payment-icon class="ng-star-inserted">
                                          <img src="https://via.placeholder.com/100x33.png?text=Sistem Nakit Bank Deposit" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1956.png" width="100" height="33" class="sistemnakit-bank-deposit"><!---->
                                       </payment-icon>
                                       <!----><!---->
                                       <div class="flex-item ng-star-inserted">
                                          <div>
                                             <div class="bnk-inf-fld bnk-fisrts ng-star-inserted">
                                                <h5 title="Sistem Nakit Bank Deposit">Sistem Nakit Bank Deposit</h5>
                                                <small>Sistem Nakit Bank Deposit ile işlem yap</small>
                                             </div>
                                             <!----><!----><!----><!---->
                                          </div>
                                       </div>
                                       <!---->
                                       <div class="flex-item ng-star-inserted">
                                          <div class="bnk-inf-fld trans-fee">
                                             <h5>İşlem ücreti <span>&amp;</span> İşlem zamanı</h5>
                                             <small>
                                                Bedava<!----><!----><!----><!----><!----><!---->
                                             </small>
                                          </div>
                                       </div>
                                       <!----><!----><br>
                                       <div class="bnk-inf-fld">
                                          <h5>İşlem limiti</h5>
                                          <small>Min: ₺50.00 / Max: ₺100,000.00</small>
                                       </div>
                                       <a href="javascript:;" class="btn right deposit-btn ng-star-inserted">Para Yatırma</a><!----><!---->
                                    </div>
                                 </div>
                              </div>
                              <!----><!----><!----><!---->
                              <div class="col s12 ng-star-inserted">
                                 <div class="card-panel bank-card" data-payment="seripopy-deposit">
                                    <div class="flex-container">
                                       <!----><!---->
                                       <payment-icon class="ng-star-inserted">
                                          <img src="https://via.placeholder.com/100x33.png?text=Seripopy Deposit" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1871.png" width="100" height="33" class="seripopy-deposit"><!---->
                                       </payment-icon>
                                       <!----><!---->
                                       <div class="flex-item ng-star-inserted">
                                          <div>
                                             <div class="bnk-inf-fld bnk-fisrts ng-star-inserted">
                                                <h5 title="Seripopy Deposit">Seripopy Deposit</h5>
                                                <small>Seripopy Deposit ile işlem yap</small>
                                             </div>
                                             <!----><!----><!----><!---->
                                          </div>
                                       </div>
                                       <!---->
                                       <div class="flex-item ng-star-inserted">
                                          <div class="bnk-inf-fld trans-fee">
                                             <h5>İşlem ücreti <span>&amp;</span> İşlem zamanı</h5>
                                             <small>
                                                Bedava<!----><!----><!----><!----><!----><!---->
                                             </small>
                                          </div>
                                       </div>
                                       <!----><!----><br>
                                       <div class="bnk-inf-fld">
                                          <h5>İşlem limiti</h5>
                                          <small>Min: ₺50.00 / Max: ₺100,000.00</small>
                                       </div>
                                       <a href="javascript:;" class="btn right deposit-btn ng-star-inserted">Para Yatırma</a><!----><!---->
                                    </div>
                                 </div>
                              </div>
                              <!----><!----><!----><!---->
                              <div class="col s12 ng-star-inserted">
                                 <div class="card-panel bank-card" data-payment="safirhavale-deposit">
                                    <div class="flex-container">
                                       <!----><!---->
                                       <payment-icon class="ng-star-inserted">
                                          <img src="https://via.placeholder.com/100x33.png?text=Safirhavale Deposit" class="hide" hidden=""><img src="/images/common/assets/images/payments/deposit-1423.png" width="100" height="33" class="safirhavale-deposit"><!---->
                                       </payment-icon>
                                       <!----><!---->
                                       <div class="flex-item ng-star-inserted">
                                          <div>
                                             <div class="bnk-inf-fld bnk-fisrts ng-star-inserted">
                                                <h5 title="Safirhavale Deposit">Safirhavale Deposit</h5>
                                                <small>Safirhavale Deposit ile işlem yap</small>
                                             </div>
                                             <!----><!----><!----><!---->
                                          </div>
                                       </div>
                                       <!---->
                                       <div class="flex-item ng-star-inserted">
                                          <div class="bnk-inf-fld trans-fee">
                                             <h5>İşlem ücreti <span>&amp;</span> İşlem zamanı</h5>
                                             <small>
                                                Bedava<!----><!----><!----><!----><!----><!---->
                                             </small>
                                          </div>
                                       </div>
                                       <!----><!----><br>
                                       <div class="bnk-inf-fld">
                                          <h5>İşlem limiti</h5>
                                          <small>Min: ₺100.00 / Max: ₺50,000.00</small>
                                       </div>
                                       <a href="javascript:;" class="btn right deposit-btn ng-star-inserted">Para Yatırma</a><!----><!---->
                                    </div>
                                 </div>
                              </div>
                              <!----><!----><!----><!---->
                              <div class="col s12 ng-star-inserted">
                                 <div class="card-panel bank-card" data-payment="scashmoney-bank-transfer-deposit">
                                    <div class="flex-container">
                                       <!----><!---->
                                       <payment-icon class="ng-star-inserted">
                                          <img src="https://via.placeholder.com/100x33.png?text=ScashMoney Bank Transfer Deposit" class="scashmoney-bank-transfer-deposit"><img hidden="" src="/images/common/assets/images/payments/deposit-1572.png" width="100" height="33" class="hide"><!---->
                                       </payment-icon>
                                       <!----><!---->
                                       <div class="flex-item ng-star-inserted">
                                          <div>
                                             <div class="bnk-inf-fld bnk-fisrts ng-star-inserted">
                                                <h5 title="ScashMoney Bank Transfer Deposit">ScashMoney Bank Transfer Deposit</h5>
                                                <small>ScashMoney Bank Transfer Deposit ile işlem yap</small>
                                             </div>
                                             <!----><!----><!----><!---->
                                          </div>
                                       </div>
                                       <!---->
                                       <div class="flex-item ng-star-inserted">
                                          <div class="bnk-inf-fld trans-fee">
                                             <h5>İşlem ücreti <span>&amp;</span> İşlem zamanı</h5>
                                             <small>
                                                Bedava<!----><!----><!----><!----><!----><!---->
                                             </small>
                                          </div>
                                       </div>
                                       <!----><!----><br>
                                       <div class="bnk-inf-fld">
                                          <h5>İşlem limiti</h5>
                                          <small>Min: ₺250.00 / Max: ₺50,000.00</small>
                                       </div>
                                       <a href="javascript:;" class="btn right deposit-btn ng-star-inserted">Para Yatırma</a><!----><!---->
                                    </div>
                                 </div>
                              </div>
                              <!----><!----><!----><!---->
                              <div class="col s12 ng-star-inserted">
                                 <div class="card-panel bank-card" data-payment="starpay-papara-deposit">
                                    <div class="flex-container">
                                       <!----><!---->
                                       <payment-icon class="ng-star-inserted">
                                          <img src="https://via.placeholder.com/100x33.png?text=Starpay Papara Deposit" class="hide" hidden=""><img src="/images/limanbet/upload_files/deposit-1869.png" width="100" height="33" class="starpay-papara-deposit"><!---->
                                       </payment-icon>
                                       <!----><!---->
                                       <div class="flex-item ng-star-inserted">
                                          <div>
                                             <div class="bnk-inf-fld bnk-fisrts ng-star-inserted">
                                                <h5 title="Starpay Papara Deposit">Starpay Papara Deposit</h5>
                                                <small>Starpay Papara Deposit ile işlem yap</small>
                                             </div>
                                             <!----><!----><!----><!---->
                                          </div>
                                       </div>
                                       <!---->
                                       <div class="flex-item ng-star-inserted">
                                          <div class="bnk-inf-fld trans-fee">
                                             <h5>İşlem ücreti <span>&amp;</span> İşlem zamanı</h5>
                                             <small>
                                                Bedava<!----><!----><!----><!----><!----><!---->
                                             </small>
                                          </div>
                                       </div>
                                       <!----><!----><br>
                                       <div class="bnk-inf-fld">
                                          <h5>İşlem limiti</h5>
                                          <small>Min: ₺250.00 / Max: ₺200,000.00</small>
                                       </div>
                                       <a href="javascript:;" class="btn right deposit-btn ng-star-inserted">Para Yatırma</a><!----><!---->
                                    </div>
                                 </div>
                              </div>
                              <!----><!----><!----><!----><!----><!---->
                           </div>
                        </div>
                        <app-static-inner-content contentcode="deposit-bottom" class="ng-star-inserted">
                           <!---->
                        </app-static-inner-content>
                        <!----><!---->
                     </div>
                     <div id="PaymentFormModal" materialize="modal" class="modal open dshbrd-modal pymnt-mdl" style="z-index: 1079;">
                        <!---->
                     </div>
                     <div id="confirmPromptModal" materialize="modal" class="modal modal-sm dshbrd-modal" style="z-index: 1081;">
                        <app-confirm-promt>
                           <!---->
                        </app-confirm-promt>
                     </div>
                  </deposit-withdraw-money>
               </app-deposit-money>
               <!---->
            </div>
         </div>
      </div>
   </app-dashboard>
   <!---->
</main>
<?php }?>