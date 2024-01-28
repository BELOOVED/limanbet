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
                                 <a routerlinkactive="active" href="/tr/dashboard/user-info/personal-and-account-detail" class="ng-star-inserted active"><i class="fa fa-user"></i> Kişisel ve Hesap Bilgilerim</a><!----><!---->
                              </li>
                              <li class="collection-item ng-star-inserted" hidden="">
                                 <a routerlinkactive="active" href="/tr/dashboard/user-info/user-details" class="ng-star-inserted"><i class="fa fa-user-plus"></i> Kişisel Bilgiler</a><!----><!---->
                              </li>
                              <li class="collection-item ng-star-inserted" hidden="">
                                 <a routerlinkactive="active" href="/tr/dashboard/user-info/account-details" class="ng-star-inserted"><i class="fa fa-user-plus"></i> Hesap Bilgileri</a><!----><!---->
                              </li>
                              <li class="collection-item ng-star-inserted">
                                 <a routerlinkactive="active" href="/tr/dashboard/user-info/change-password" class="ng-star-inserted"><i class="fa fa-unlock-alt"></i> Şifremi Değiştir</a><!----><!---->
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
               <app-personal-and-account-detail class="ng-star-inserted">
                  <div class="prsnl-accnt-inf-cntnt">
                     <div class="dshbrd-mdl">
                        <div class="mdl-hdr">
                           <div class="inf-hdr"><i class="material-icons">supervisor_account</i><label class="inf-title">Kişisel ve Hesap Bilgilerim</label></div>
                        </div>
                        <div class="mdl-cntnt">
                           <!----><!---->
                           <table class="striped ng-star-inserted">
                              <tbody>
                                 <tr>
                                    <td>Kullanıcı adı</td>
                                    <td>Dilafruz</td>
                                 </tr>
                                 <tr>
                                    <td>E-posta</td>
                                    <td>dil********@*****.***</td>
                                 </tr>
                                 <tr>
                                    <td>Para Birimi</td>
                                    <td>
                                       <span class="ng-star-inserted">TRY</span><!---->
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>Kullanıcı Numarası</td>
                                    <td>2022046625030</td>
                                 </tr>
                                 <tr class="ng-star-inserted">
                                    <td>Ad</td>
                                    <td>Dilafruz </td>
                                 </tr>
                                 <!----><!---->
                                 <tr class="ng-star-inserted">
                                    <td>Soyad</td>
                                    <td>Hudoyberdiyeva</td>
                                 </tr>
                                 <!---->
                                 <tr class="ng-star-inserted">
                                    <td>Doğum tarihi</td>
                                    <td>1*/0*/19**</td>
                                 </tr>
                                 <!---->
                                 <tr class="ng-star-inserted">
                                    <td>Kimlik</td>
                                    <td>9**********</td>
                                 </tr>
                                 <!---->
                                 <tr class="ng-star-inserted">
                                    <td>Telefon</td>
                                    <td>905*********</td>
                                 </tr>
                                 <!---->
                                 <tr class="personel-gender ng-star-inserted">
                                    <td>Cinsiyet</td>
                                    <td>F</td>
                                 </tr>
                                 <!----><!---->
                                 <tr class="ng-star-inserted">
                                    <td>Ülke</td>
                                    <!---->
                                    <td class="ng-star-inserted">TUR</td>
                                    <!---->
                                 </tr>
                                 <!---->
                                 <tr class="ng-star-inserted">
                                    <td>Şehir</td>
                                    <td>Ordu Altınordu</td>
                                 </tr>
                                 <!---->
                                 <tr class="ng-star-inserted">
                                    <td>Adres</td>
                                    <td>Ordu altın ordu Karşiyaka mahallesi Atatürk bulvarı 370/4</td>
                                 </tr>
                                 <!---->
                              </tbody>
                           </table>
                           <!----><!----><!----><!----><!---->
                        </div>
                     </div>
                  </div>
                  <phone-verify>
                     <!---->
                  </phone-verify>
                  <!---->
               </app-personal-and-account-detail>
               <!---->
            </div>
         </div>
      </div>
   </app-dashboard>
   <!---->
</main>
<?php }?>