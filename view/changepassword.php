<?php
if ($detect->isMobile()) {?>
<?php }else {?>
    <main>
   <router-outlet></router-outlet>
   <app-dashboard class="ng-star-inserted">
      <div class="container dshbrd-cntr">
         <div class="row">
            <div class="col s3 lft-cntnt">
               <div class="u-info">
                  <h5 class="u-name">
                     Dilafruz<!---->
                  </h5>
                  <h5 class="u-number">Kullanıcı Numarası : 2022046625030</h5>
               </div>
               <div class="dshbrd-sdbr">
                  <ul materialize="collapsible" data-collapsible="expandable" class="collapsible">
                     <li class="active ng-star-inserted">
                        <div class="collapsible-header active ng-star-inserted">Hesabım</div>
                        <div class="collapsible-body ng-star-inserted" style="display: block;">
                           <ul class="collection">
                              <li class="collection-item ng-star-inserted">
                                 <a routerlinkactive="active" href="/tr/dashboard/payments/deposit-money" class="ng-star-inserted"><i class="fa fa-money"></i> Para Yatırma</a><!----><!---->
                              </li>
                              <li class="collection-item ng-star-inserted">
                                 <a routerlinkactive="active" href="/tr/dashboard/payments/withdraw-money" class="ng-star-inserted"><i class="fa fa-money"></i> Para Çekme</a><!----><!---->
                              </li>
                              <li class="collection-item ng-star-inserted">
                                 <a routerlinkactive="active" href="/tr/dashboard/payments/transfer" class="ng-star-inserted"><i class="fa fa-exchange"></i> Transfer</a><!----><!---->
                              </li>
                              <li class="collection-item ng-star-inserted">
                                 <a routerlinkactive="active" href="/tr/dashboard/payments/promotions" class="ng-star-inserted"><i class="fa fa-gift"></i> Bonus Detaylarım</a><!----><!---->
                              </li>
                              <li class="collection-item ng-star-inserted" hidden="">
                                 <!----><a routerlinkactive="active" href="//limanbet569.com/contents/promotions" class="ng-star-inserted"><i class="fa fa-calendar-plus-o"></i> Şikayet ve Öneriler</a><!---->
                              </li>
                              <!---->
                           </ul>
                        </div>
                        <!----><!---->
                     </li>
                     <li class="active ng-star-inserted">
                        <div class="collapsible-header active ng-star-inserted">İşlemler</div>
                        <div class="collapsible-body ng-star-inserted" style="display: block;">
                           <ul class="collection">
                              <li class="collection-item ng-star-inserted">
                                 <a routerlinkactive="active" href="/tr/dashboard/account-activity/bet-history" class="ng-star-inserted"><i class="fa fa-history"></i> Bahis Geçmişi</a><!----><!---->
                              </li>
                              <li class="collection-item ng-star-inserted" hidden="">
                                 <a routerlinkactive="active" href="/tr/dashboard/account-activity/jackpot-history" class="ng-star-inserted"><i class="fa fa-history"></i> Jackpot Geçmişi</a><!----><!---->
                              </li>
                              <li class="collection-item ng-star-inserted">
                                 <a routerlinkactive="active" href="/tr/dashboard/account-activity/financial-transactions" class="ng-star-inserted"><i class="fa fa-pie-chart"></i> Finans Geçmişim</a><!----><!---->
                              </li>
                              <li class="collection-item ng-star-inserted">
                                 <a routerlinkactive="active" href="/tr/dashboard/account-activity/bonus-activities" class="ng-star-inserted"><i class="fa fa-gift"></i> Bonus Hareketlerim</a><!----><!---->
                              </li>
                              <li class="collection-item ng-star-inserted">
                                 <a routerlinkactive="active" href="/tr/dashboard/account-activity/casino-pro-history" class="ng-star-inserted"><i class="fa fa-history"></i> Casinopro Geçmişi</a><!----><!---->
                              </li>
                              <li class="collection-item ng-star-inserted">
                                 <a routerlinkactive="active" href="/tr/dashboard/account-activity/free-spin" class="ng-star-inserted"><i class="fa fa-history"></i> Freespin Detayları</a><!----><!---->
                              </li>
                              <li class="collection-item ng-star-inserted" hidden="">
                                 <a routerlinkactive="active" href="/tr/dashboard/account-activity/iframe-report/betradar" class="ng-star-inserted"><i class="fa fa-history"></i> Betradar</a><!----><!---->
                              </li>
                              <li class="collection-item ng-star-inserted">
                                 <a routerlinkactive="active" href="/tr/dashboard/account-activity/iframe-report/golden-race" class="ng-star-inserted"><i class="fa fa-history"></i> Golden Race</a><!----><!---->
                              </li>
                              <li class="collection-item ng-star-inserted" hidden="">
                                 <a routerlinkactive="active" href="/tr/dashboard/account-activity/iframe-report/betmakers" class="ng-star-inserted"><i class="fa fa-history"></i> Betmakers</a><!----><!---->
                              </li>
                              <li class="collection-item ng-star-inserted">
                                 <a routerlinkactive="active" href="/tr/dashboard/account-activity/iframe-report/ultraplay" class="ng-star-inserted"><i class="fa fa-history"></i> E-Sporlar Hesap Hrk. Raporu</a><!----><!---->
                              </li>
                              <!---->
                           </ul>
                        </div>
                        <!----><!---->
                     </li>
                     <li class="active ng-star-inserted">
                        <div class="collapsible-header active ng-star-inserted">Kullanıcı Hareketleri</div>
                        <div class="collapsible-body ng-star-inserted" style="display: block;">
                           <ul class="collection">
                              <li class="collection-item ng-star-inserted">
                                 <a routerlinkactive="active" href="/tr/dashboard/user-info/personal-and-account-detail" class="ng-star-inserted"><i class="fa fa-user"></i> Kişisel ve Hesap Bilgilerim</a><!----><!---->
                              </li>
                              <li class="collection-item ng-star-inserted" hidden="">
                                 <a routerlinkactive="active" href="/tr/dashboard/user-info/user-details" class="ng-star-inserted"><i class="fa fa-user-plus"></i> Kişisel Bilgiler</a><!----><!---->
                              </li>
                              <li class="collection-item ng-star-inserted" hidden="">
                                 <a routerlinkactive="active" href="/tr/dashboard/user-info/account-details" class="ng-star-inserted"><i class="fa fa-user-plus"></i> Hesap Bilgileri</a><!----><!---->
                              </li>
                              <li class="collection-item ng-star-inserted">
                                 <a routerlinkactive="active" href="/tr/dashboard/user-info/change-password" class="ng-star-inserted active"><i class="fa fa-unlock-alt"></i> Şifremi Değiştir</a><!----><!---->
                              </li>
                              <li class="collection-item ng-star-inserted">
                                 <a routerlinkactive="active" href="/tr/dashboard/user-info/limit-settings" class="ng-star-inserted"><i class="fa fa-clock-o"></i> Bahis Limitlendirme</a><!----><!---->
                              </li>
                              <li class="collection-item ng-star-inserted" hidden="">
                                 <a routerlinkactive="active" href="/tr/dashboard/user-info/user-settings" class="ng-star-inserted"><i class="fa fa-user-plus"></i> Ayarlar</a><!----><!---->
                              </li>
                              <li class="collection-item ng-star-inserted" hidden="">
                                 <a routerlinkactive="active" href="/tr/dashboard/user-info/documents" class="ng-star-inserted"><i class="fa fa-id-card-o"></i> Dokümanlar</a><!----><!---->
                              </li>
                              <li class="collection-item ng-star-inserted">
                                 <a routerlinkactive="active" href="/tr/dashboard/user-info/user-security" class="ng-star-inserted"><i class="fa fa-check-square-o"></i> İki adımlı doğrulama</a><!----><!---->
                              </li>
                              <li class="collection-item ng-star-inserted" hidden="">
                                 <a routerlinkactive="active" href="/tr/dashboard/user-info/friend-referral" class="ng-star-inserted"><i class="fa fa-users"></i> Arkadaş referansı</a><!----><!---->
                              </li>
                              <!---->
                           </ul>
                        </div>
                        <!----><!---->
                     </li>
                     <!---->
                  </ul>
               </div>
            </div>
            <div class="col s9 rght-cntnt">
               <router-outlet></router-outlet>
               <app-change-password class="ng-star-inserted">
                  <div class="chng-psswrd-cntnt">
                     <div class="dshbrd-mdl">
                        <div class="mdl-hdr">
                           <div class="inf-hdr"><i class="fa fa-unlock-alt fa-fw"></i><span class="inf-title">Şifremi Değiştir</span></div>
                        </div>
                        <div class="mdl-cntnt">
                           <form novalidate="" name="changePasswordForm" class="ng-untouched ng-pristine ng-invalid">
                              <div class="input-field bubble">
                                 <input type="password" name="currentPassword" id="current-password" required="" class="browser-default ng-untouched ng-pristine ng-invalid" placeholder="Eski Şifre">
                                 <password-eye el="current-password"><a class="btn password-eye toogle-btn"><i class="fa fa-eye show"></i><i class="fa fa-eye-slash dont-show"></i></a></password-eye>
                              </div>
                              <div class="input-field bubble">
                                 <input type="password" name="newPassword" id="new-password" required="" class="browser-default ng-untouched ng-pristine ng-invalid" placeholder="Yeni Şifre">
                                 <bubble-validator>
                                    <div class="bubble-vldtr">
                                       <ul class="vldtr-lst">
                                          <li class="ng-star-inserted"><i class="fa fa-check-circle-o"></i><span>Şifreniz en az 1 büyük harf içermeli. </span></li>
                                          <!----><!---->
                                          <li class="ng-star-inserted"><i class="fa fa-check-circle-o"></i><span>Şifreniz en az 1 küçük harf içermeli. </span></li>
                                          <!----><!---->
                                          <li class="ng-star-inserted"><i class="fa fa-check-circle-o"></i><span>Şifreniz en az 1 nümerik değer içermeli. </span></li>
                                          <!----><!----><!----><!---->
                                          <li class="ng-star-inserted"><i class="fa fa-check-circle-o"></i><span>Şifreniz en az 8 değer içermeli. </span></li>
                                          <!----><!----><!---->
                                       </ul>
                                    </div>
                                 </bubble-validator>
                                 <password-eye el="new-password"><a class="btn password-eye toogle-btn"><i class="fa fa-eye show"></i><i class="fa fa-eye-slash dont-show"></i></a></password-eye>
                              </div>
                              <div class="input-field das-change-pass"><button class="btn" disabled="">Değiştir</button></div>
                           </form>
                           <!---->
                        </div>
                     </div>
                     <!----><!---->
                  </div>
               </app-change-password>
               <!---->
            </div>
         </div>
      </div>
   </app-dashboard>
   <!---->
</main>
<?php }?>