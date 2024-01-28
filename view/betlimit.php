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
                                 <a routerlinkactive="active" href="/tr/dashboard/user-info/change-password" class="ng-star-inserted"><i class="fa fa-unlock-alt"></i> Şifremi Değiştir</a><!----><!---->
                              </li>
                              <li class="collection-item ng-star-inserted">
                                 <a routerlinkactive="active" href="/tr/dashboard/user-info/limit-settings" class="ng-star-inserted active"><i class="fa fa-clock-o"></i> Bahis Limitlendirme</a><!----><!---->
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
               <limit-settings class="ng-star-inserted">
                  <div class="bet-lmt-cntnt">
                     <div class="dshbrd-mdl">
                        <div class="mdl-hdr">
                           <div class="inf-hdr"><i class="fa fa-ban"></i><span class="inf-title">Bahis Limitlendirme</span></div>
                        </div>
                        <!---->
                        <div class="mdl-cntnt">
                           <div class="row">
                              <div class="col s12">
                                 <ul materialize="tabs" class="tabs">
                                    <li class="tab col s4 ng-star-inserted active"><a href="javascript:;" class="active" style=""> Spor Bahis Limitleri </a></li>
                                    <li class="tab col s4 ng-star-inserted"><a href="javascript:;" style="" class=""> Casino Limitleri </a></li>
                                    <li class="tab col s4 ng-star-inserted"><a href="javascript:;" style="" class=""> Genel Limitler </a></li>
                                    <!---->
                                    <li class="indicator" style="right: 606px; left: 0px;"></li>
                                 </ul>
                              </div>
                              <div class="col s12 tab-content ng-star-inserted active" id="limitTab-0">
                                 <div class="scrllble-tbl">
                                    <table class="dshbrd-tbl lmt-tbl highlight">
                                       <thead>
                                          <tr>
                                             <th>Limit Türü</th>
                                             <th>Miktar</th>
                                             <th>Yönet</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                          <tr class="ng-star-inserted">
                                             <td>Bahis Limiti</td>
                                             <td width="50%">
                                                <div class="currency-symbol ng-star-inserted">
                                                   Günlük <span class="ng-star-inserted"> No limits applied </span><!---->
                                                </div>
                                                <!---->
                                                <div class="currency-symbol ng-star-inserted">
                                                   Haftalık <span class="ng-star-inserted"> No limits applied </span><!---->
                                                </div>
                                                <!---->
                                                <div class="currency-symbol ng-star-inserted">
                                                   Aylık <span class="ng-star-inserted"> No limits applied </span><!---->
                                                </div>
                                                <!----><!----><!----><!----><!----><!---->
                                             </td>
                                             <td>
                                                <button class="btn"><i aria-hidden="true" class="fa fa-cog fa-fw"></i></button><button class="btn ng-star-inserted"><i aria-hidden="true" class="fa fa-trash-o fa-fw"></i></button><!----><!---->
                                             </td>
                                          </tr>
                                          <tr class="ng-star-inserted">
                                             <td>Kayıp Limiti</td>
                                             <td width="50%">
                                                <div class="currency-symbol ng-star-inserted">
                                                   Günlük <span class="ng-star-inserted"> No limits applied </span><!---->
                                                </div>
                                                <!---->
                                                <div class="currency-symbol ng-star-inserted">
                                                   Haftalık <span class="ng-star-inserted"> No limits applied </span><!---->
                                                </div>
                                                <!---->
                                                <div class="currency-symbol ng-star-inserted">
                                                   Aylık <span class="ng-star-inserted"> No limits applied </span><!---->
                                                </div>
                                                <!----><!----><!----><!----><!----><!---->
                                             </td>
                                             <td>
                                                <button class="btn"><i aria-hidden="true" class="fa fa-cog fa-fw"></i></button><button class="btn ng-star-inserted"><i aria-hidden="true" class="fa fa-trash-o fa-fw"></i></button><!----><!---->
                                             </td>
                                          </tr>
                                          <tr class="ng-star-inserted">
                                             <td>Bahis süresi limiti(dk.) (Girilen süre boyunca bahis alınamaz)</td>
                                             <td width="50%">
                                                <!----><!----><!---->
                                                <div class="currency-symbol ng-star-inserted">
                                                   <!---->  Dakika(lar) <!----><!----><!----><!---->
                                                </div>
                                                <!----><!----><!----><!----><!---->
                                             </td>
                                             <td>
                                                <button class="btn"><i aria-hidden="true" class="fa fa-cog fa-fw"></i></button><button class="btn ng-star-inserted"><i aria-hidden="true" class="fa fa-trash-o fa-fw"></i></button><!----><!---->
                                             </td>
                                          </tr>
                                          <tr class="ng-star-inserted">
                                             <td>Günlük Bahis Süresi Limiti(dak.) - Girilen süre boyunca günlük bahis alımına izin verilir</td>
                                             <td width="50%">
                                                <!----><!----><!---->
                                                <div class="currency-symbol ng-star-inserted">
                                                   <!---->  Dakika(lar) <!----><!----><!----><!---->
                                                </div>
                                                <!----><!----><!----><!----><!---->
                                             </td>
                                             <td>
                                                <button class="btn"><i aria-hidden="true" class="fa fa-cog fa-fw"></i></button><button class="btn ng-star-inserted"><i aria-hidden="true" class="fa fa-trash-o fa-fw"></i></button><!----><!---->
                                             </td>
                                          </tr>
                                          <!---->
                                       </tbody>
                                    </table>
                                 </div>
                              </div>
                              <!---->
                              <div class="col s12 tab-content ng-star-inserted" id="limitTab-1">
                                 <div class="scrllble-tbl">
                                    <table class="dshbrd-tbl lmt-tbl highlight">
                                       <thead>
                                          <tr>
                                             <th>Limit Türü</th>
                                             <th>Miktar</th>
                                             <th>Yönet</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                          <tr class="ng-star-inserted">
                                             <td>Casino Bahis Limiti</td>
                                             <td width="50%">
                                                <div class="currency-symbol ng-star-inserted">
                                                   Günlük <span class="ng-star-inserted"> No limits applied </span><!---->
                                                </div>
                                                <!---->
                                                <div class="currency-symbol ng-star-inserted">
                                                   Haftalık <span class="ng-star-inserted"> No limits applied </span><!---->
                                                </div>
                                                <!---->
                                                <div class="currency-symbol ng-star-inserted">
                                                   Aylık <span class="ng-star-inserted"> No limits applied </span><!---->
                                                </div>
                                                <!----><!----><!----><!----><!----><!---->
                                             </td>
                                             <td>
                                                <button class="btn"><i aria-hidden="true" class="fa fa-cog fa-fw"></i></button><button class="btn ng-star-inserted"><i aria-hidden="true" class="fa fa-trash-o fa-fw"></i></button><!----><!---->
                                             </td>
                                          </tr>
                                          <tr class="ng-star-inserted">
                                             <td>Casino Kaybetme Limiti</td>
                                             <td width="50%">
                                                <div class="currency-symbol ng-star-inserted">
                                                   Günlük <span class="ng-star-inserted"> No limits applied </span><!---->
                                                </div>
                                                <!---->
                                                <div class="currency-symbol ng-star-inserted">
                                                   Haftalık <span class="ng-star-inserted"> No limits applied </span><!---->
                                                </div>
                                                <!---->
                                                <div class="currency-symbol ng-star-inserted">
                                                   Aylık <span class="ng-star-inserted"> No limits applied </span><!---->
                                                </div>
                                                <!----><!----><!----><!----><!----><!---->
                                             </td>
                                             <td>
                                                <button class="btn"><i aria-hidden="true" class="fa fa-cog fa-fw"></i></button><button class="btn ng-star-inserted"><i aria-hidden="true" class="fa fa-trash-o fa-fw"></i></button><!----><!---->
                                             </td>
                                          </tr>
                                          <tr class="ng-star-inserted">
                                             <td>Oturum süresi limiti(dk.) (Herhangi bir işlem yapılmadığı durumda, girilen süre bitiminde oturum kapatılır)</td>
                                             <td width="50%">
                                                <!----><!----><!---->
                                                <div class="currency-symbol ng-star-inserted">
                                                   <!---->  Dakika(lar) <!----><!----><!----><!---->
                                                </div>
                                                <!----><!----><!----><!----><!---->
                                             </td>
                                             <td>
                                                <button class="btn"><i aria-hidden="true" class="fa fa-cog fa-fw"></i></button><button class="btn ng-star-inserted"><i aria-hidden="true" class="fa fa-trash-o fa-fw"></i></button><!----><!---->
                                             </td>
                                          </tr>
                                          <!---->
                                       </tbody>
                                    </table>
                                 </div>
                              </div>
                              <!---->
                              <div class="col s12 tab-content ng-star-inserted" id="limitTab-2">
                                 <div class="scrllble-tbl">
                                    <table class="dshbrd-tbl lmt-tbl highlight">
                                       <thead>
                                          <tr>
                                             <th>Limit Türü</th>
                                             <th>Miktar</th>
                                             <th>Yönet</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                          <tr class="ng-star-inserted">
                                             <td>Para Yatırma Limiti</td>
                                             <td width="50%">
                                                <div class="currency-symbol ng-star-inserted">
                                                   Günlük <span class="ng-star-inserted"> No limits applied </span><!---->
                                                </div>
                                                <!---->
                                                <div class="currency-symbol ng-star-inserted">
                                                   Haftalık <span class="ng-star-inserted"> No limits applied </span><!---->
                                                </div>
                                                <!---->
                                                <div class="currency-symbol ng-star-inserted">
                                                   Aylık <span class="ng-star-inserted"> No limits applied </span><!---->
                                                </div>
                                                <!----><!----><!----><!----><!----><!---->
                                             </td>
                                             <td>
                                                <button class="btn"><i aria-hidden="true" class="fa fa-cog fa-fw"></i></button><button class="btn ng-star-inserted"><i aria-hidden="true" class="fa fa-trash-o fa-fw"></i></button><!----><!---->
                                             </td>
                                          </tr>
                                          <tr class="ng-star-inserted">
                                             <td>Kendini Engelle</td>
                                             <td width="50%">
                                                <!----><!----><!---->
                                                <div class="currency-symbol ng-star-inserted">
                                                   <!----><!----><!----><!----><!---->
                                                </div>
                                                <!----><!----><!----><!----><!---->
                                             </td>
                                             <td>
                                                <button class="btn"><i aria-hidden="true" class="fa fa-cog fa-fw"></i></button><!----><button class="btn ng-star-inserted"><i aria-hidden="true" class="fa fa-trash-o fa-fw"></i></button><!---->
                                             </td>
                                          </tr>
                                          <!---->
                                       </tbody>
                                    </table>
                                 </div>
                              </div>
                              <!----><!---->
                           </div>
                        </div>
                     </div>
                  </div>
                  <div id="limitConfigModal" materialize="modal" class="modal modal-md open dshbrd-modal" style="z-index: 1125;">
                     <!---->
                  </div>
               </limit-settings>
               <!---->
            </div>
         </div>
      </div>
   </app-dashboard>
   <!---->
</main>
<?php }?>