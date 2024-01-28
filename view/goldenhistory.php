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
                                 <a routerlinkactive="active" href="/tr/dashboard/account-activity/iframe-report/golden-race" class="ng-star-inserted active"><i class="fa fa-history"></i> Golden Race</a><!----><!---->
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
               <app-iframe-reports class="ng-star-inserted">
                  <div class="bet-hstry-cntnt bet-lmt-cntnt">
                     <div class="dshbrd-mdl">
                        <div class="mdl-cntnt">
                           <ul class="tabs ng-star-inserted">
                              <!---->
                              <li class="tab ng-star-inserted"><a href="/tr/dashboard/account-activity/iframe-report/golden-race" routerlinkactive="active" class="iframe-tabs active"> Golden Race </a></li>
                              <!----><!---->
                              <li class="tab ng-star-inserted"><a href="/tr/dashboard/account-activity/iframe-report/ultraplay" routerlinkactive="active" class="iframe-tabs"> E-Sporlar Hesap Hrk. Raporu </a></li>
                              <!----><!---->
                           </ul>
                           <!----><!---->
                           <form novalidate="" class="ng-untouched ng-valid ng-dirty">
                              <div class="row">
                                 <div class="col s12">
                                    <h5 class="frm-hdr">Lütfen tarih aralığı seçin</h5>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="date-picker-field col s5">
                                    <label for="betHistoryStartDatePicker" class="date-picker-mask active">
                                       <div class="picker" id="betHistoryStartDatePicker_root" tabindex="0" aria-hidden="true">
                                          <div class="picker__holder">
                                             <div class="picker__frame">
                                                <div class="picker__wrap">
                                                   <div class="picker__box">
                                                      <div class="picker__date-display">
                                                         <div class="picker__year-display">
                                                            <div>2024</div>
                                                         </div>
                                                         <span class="picker__weekday-display">Paz, </span><span class="picker__month-display">Oca </span><span class="picker__day-display">28</span>
                                                      </div>
                                                      <div class="picker__container__wrapper">
                                                         <div class="picker__calendar-container">
                                                            <div class="picker__header">
                                                               <div class="picker__month">Ocak</div>
                                                               <div class="picker__year">2024</div>
                                                               <div class="picker__nav--prev" data-nav="-1" role="button" aria-controls="betHistoryStartDatePicker_table" title="Geçmiş ay"> </div>
                                                               <div class="picker__nav--next" data-nav="1" role="button" aria-controls="betHistoryStartDatePicker_table" title="Gelecek ay"> </div>
                                                            </div>
                                                            <table class="picker__table" id="betHistoryStartDatePicker_table" role="grid" aria-controls="betHistoryStartDatePicker" aria-readonly="true">
                                                               <thead>
                                                                  <tr>
                                                                     <th class="picker__weekday" scope="col" title="Pazar">Paz</th>
                                                                     <th class="picker__weekday" scope="col" title="Pazartesi">Pzt</th>
                                                                     <th class="picker__weekday" scope="col" title="Salı">S</th>
                                                                     <th class="picker__weekday" scope="col" title="Çarşamba">Ç</th>
                                                                     <th class="picker__weekday" scope="col" title="Perşembe">P</th>
                                                                     <th class="picker__weekday" scope="col" title="Cuma">C</th>
                                                                     <th class="picker__weekday" scope="col" title="Cumartesi">Ct</th>
                                                                  </tr>
                                                               </thead>
                                                               <tbody>
                                                                  <tr>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--outfocus" data-pick="1703970000000" role="gridcell" aria-label="31/12/2023" tabindex="0">31</div>
                                                                     </td>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1704056400000" role="gridcell" aria-label="01/01/2024" tabindex="0">1</div>
                                                                     </td>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1704142800000" role="gridcell" aria-label="02/01/2024" tabindex="0">2</div>
                                                                     </td>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1704229200000" role="gridcell" aria-label="03/01/2024" tabindex="0">3</div>
                                                                     </td>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1704315600000" role="gridcell" aria-label="04/01/2024" tabindex="0">4</div>
                                                                     </td>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1704402000000" role="gridcell" aria-label="05/01/2024" tabindex="0">5</div>
                                                                     </td>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1704488400000" role="gridcell" aria-label="06/01/2024" tabindex="0">6</div>
                                                                     </td>
                                                                  </tr>
                                                                  <tr>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1704574800000" role="gridcell" aria-label="07/01/2024" tabindex="0">7</div>
                                                                     </td>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1704661200000" role="gridcell" aria-label="08/01/2024" tabindex="0">8</div>
                                                                     </td>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1704747600000" role="gridcell" aria-label="09/01/2024" tabindex="0">9</div>
                                                                     </td>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1704834000000" role="gridcell" aria-label="10/01/2024" tabindex="0">10</div>
                                                                     </td>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1704920400000" role="gridcell" aria-label="11/01/2024" tabindex="0">11</div>
                                                                     </td>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1705006800000" role="gridcell" aria-label="12/01/2024" tabindex="0">12</div>
                                                                     </td>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1705093200000" role="gridcell" aria-label="13/01/2024" tabindex="0">13</div>
                                                                     </td>
                                                                  </tr>
                                                                  <tr>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1705179600000" role="gridcell" aria-label="14/01/2024" tabindex="0">14</div>
                                                                     </td>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1705266000000" role="gridcell" aria-label="15/01/2024" tabindex="0">15</div>
                                                                     </td>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1705352400000" role="gridcell" aria-label="16/01/2024" tabindex="0">16</div>
                                                                     </td>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1705438800000" role="gridcell" aria-label="17/01/2024" tabindex="0">17</div>
                                                                     </td>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1705525200000" role="gridcell" aria-label="18/01/2024" tabindex="0">18</div>
                                                                     </td>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1705611600000" role="gridcell" aria-label="19/01/2024" tabindex="0">19</div>
                                                                     </td>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1705698000000" role="gridcell" aria-label="20/01/2024" tabindex="0">20</div>
                                                                     </td>
                                                                  </tr>
                                                                  <tr>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1705784400000" role="gridcell" aria-label="21/01/2024" tabindex="0">21</div>
                                                                     </td>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1705870800000" role="gridcell" aria-label="22/01/2024" tabindex="0">22</div>
                                                                     </td>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1705957200000" role="gridcell" aria-label="23/01/2024" tabindex="0">23</div>
                                                                     </td>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1706043600000" role="gridcell" aria-label="24/01/2024" tabindex="0">24</div>
                                                                     </td>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1706130000000" role="gridcell" aria-label="25/01/2024" tabindex="0">25</div>
                                                                     </td>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1706216400000" role="gridcell" aria-label="26/01/2024" tabindex="0">26</div>
                                                                     </td>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1706302800000" role="gridcell" aria-label="27/01/2024" tabindex="0">27</div>
                                                                     </td>
                                                                  </tr>
                                                                  <tr>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus picker__day--today picker__day--selected picker__day--highlighted" data-pick="1706389200000" role="gridcell" aria-label="28/01/2024" aria-selected="true" aria-activedescendant="true" tabindex="0">28</div>
                                                                     </td>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1706475600000" role="gridcell" aria-label="29/01/2024" tabindex="0">29</div>
                                                                     </td>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1706562000000" role="gridcell" aria-label="30/01/2024" tabindex="0">30</div>
                                                                     </td>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1706648400000" role="gridcell" aria-label="31/01/2024" tabindex="0">31</div>
                                                                     </td>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--outfocus" data-pick="1706734800000" role="gridcell" aria-label="01/02/2024" tabindex="0">1</div>
                                                                     </td>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--outfocus" data-pick="1706821200000" role="gridcell" aria-label="02/02/2024" tabindex="0">2</div>
                                                                     </td>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--outfocus" data-pick="1706907600000" role="gridcell" aria-label="03/02/2024" tabindex="0">3</div>
                                                                     </td>
                                                                  </tr>
                                                                  <tr>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--outfocus" data-pick="1706994000000" role="gridcell" aria-label="04/02/2024" tabindex="0">4</div>
                                                                     </td>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--outfocus" data-pick="1707080400000" role="gridcell" aria-label="05/02/2024" tabindex="0">5</div>
                                                                     </td>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--outfocus" data-pick="1707166800000" role="gridcell" aria-label="06/02/2024" tabindex="0">6</div>
                                                                     </td>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--outfocus" data-pick="1707253200000" role="gridcell" aria-label="07/02/2024" tabindex="0">7</div>
                                                                     </td>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--outfocus" data-pick="1707339600000" role="gridcell" aria-label="08/02/2024" tabindex="0">8</div>
                                                                     </td>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--outfocus" data-pick="1707426000000" role="gridcell" aria-label="09/02/2024" tabindex="0">9</div>
                                                                     </td>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--outfocus" data-pick="1707512400000" role="gridcell" aria-label="10/02/2024" tabindex="0">10</div>
                                                                     </td>
                                                                  </tr>
                                                               </tbody>
                                                            </table>
                                                         </div>
                                                         <div class="picker__footer"><button class="btn-flat picker__today waves-effect" type="button" data-pick="1706389200000" disabled="" aria-controls="betHistoryStartDatePicker">Bugün</button><button class="btn-flat picker__clear waves-effect" type="button" data-clear="1" disabled="" aria-controls="betHistoryStartDatePicker">Temizle</button><button class="btn-flat picker__close waves-effect" type="button" data-close="true" disabled="" aria-controls="betHistoryStartDatePicker">Kapat</button></div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <input type="text" id="betHistoryStartDatePicker" materialize="pickadate" tabindex="-1" readonly="" class="picker__input ng-untouched ng-valid ng-dirty" aria-haspopup="true" aria-expanded="false" aria-readonly="false" aria-owns="betHistoryStartDatePicker_root"><i aria-hidden="true" class="fa fa-calendar"></i>
                                    </label>
                                    <input type="text" pattern="[0-9]{2}/[0-9]{2}/[0-9]{4}" minlength="10" tabindex="1" required="" class="datepicker browser-default ng-untouched ng-pristine ng-valid">
                                 </div>
                                 <div class="date-picker-field col s5">
                                    <label for="betHistoryEndDatePicker" class="date-picker-mask active">
                                       <div class="picker" id="betHistoryEndDatePicker_root" tabindex="0" aria-hidden="true">
                                          <div class="picker__holder">
                                             <div class="picker__frame">
                                                <div class="picker__wrap">
                                                   <div class="picker__box">
                                                      <div class="picker__date-display">
                                                         <div class="picker__year-display">
                                                            <div>2024</div>
                                                         </div>
                                                         <span class="picker__weekday-display">Paz, </span><span class="picker__month-display">Oca </span><span class="picker__day-display">28</span>
                                                      </div>
                                                      <div class="picker__container__wrapper">
                                                         <div class="picker__calendar-container">
                                                            <div class="picker__header">
                                                               <div class="picker__month">Ocak</div>
                                                               <div class="picker__year">2024</div>
                                                               <div class="picker__nav--prev" data-nav="-1" role="button" aria-controls="betHistoryEndDatePicker_table" title="Geçmiş ay"> </div>
                                                               <div class="picker__nav--next" data-nav="1" role="button" aria-controls="betHistoryEndDatePicker_table" title="Gelecek ay"> </div>
                                                            </div>
                                                            <table class="picker__table" id="betHistoryEndDatePicker_table" role="grid" aria-controls="betHistoryEndDatePicker" aria-readonly="true">
                                                               <thead>
                                                                  <tr>
                                                                     <th class="picker__weekday" scope="col" title="Pazar">Paz</th>
                                                                     <th class="picker__weekday" scope="col" title="Pazartesi">Pzt</th>
                                                                     <th class="picker__weekday" scope="col" title="Salı">S</th>
                                                                     <th class="picker__weekday" scope="col" title="Çarşamba">Ç</th>
                                                                     <th class="picker__weekday" scope="col" title="Perşembe">P</th>
                                                                     <th class="picker__weekday" scope="col" title="Cuma">C</th>
                                                                     <th class="picker__weekday" scope="col" title="Cumartesi">Ct</th>
                                                                  </tr>
                                                               </thead>
                                                               <tbody>
                                                                  <tr>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--outfocus" data-pick="1703970000000" role="gridcell" aria-label="31/12/2023" tabindex="0">31</div>
                                                                     </td>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1704056400000" role="gridcell" aria-label="01/01/2024" tabindex="0">1</div>
                                                                     </td>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1704142800000" role="gridcell" aria-label="02/01/2024" tabindex="0">2</div>
                                                                     </td>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1704229200000" role="gridcell" aria-label="03/01/2024" tabindex="0">3</div>
                                                                     </td>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1704315600000" role="gridcell" aria-label="04/01/2024" tabindex="0">4</div>
                                                                     </td>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1704402000000" role="gridcell" aria-label="05/01/2024" tabindex="0">5</div>
                                                                     </td>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1704488400000" role="gridcell" aria-label="06/01/2024" tabindex="0">6</div>
                                                                     </td>
                                                                  </tr>
                                                                  <tr>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1704574800000" role="gridcell" aria-label="07/01/2024" tabindex="0">7</div>
                                                                     </td>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1704661200000" role="gridcell" aria-label="08/01/2024" tabindex="0">8</div>
                                                                     </td>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1704747600000" role="gridcell" aria-label="09/01/2024" tabindex="0">9</div>
                                                                     </td>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1704834000000" role="gridcell" aria-label="10/01/2024" tabindex="0">10</div>
                                                                     </td>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1704920400000" role="gridcell" aria-label="11/01/2024" tabindex="0">11</div>
                                                                     </td>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1705006800000" role="gridcell" aria-label="12/01/2024" tabindex="0">12</div>
                                                                     </td>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1705093200000" role="gridcell" aria-label="13/01/2024" tabindex="0">13</div>
                                                                     </td>
                                                                  </tr>
                                                                  <tr>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1705179600000" role="gridcell" aria-label="14/01/2024" tabindex="0">14</div>
                                                                     </td>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1705266000000" role="gridcell" aria-label="15/01/2024" tabindex="0">15</div>
                                                                     </td>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1705352400000" role="gridcell" aria-label="16/01/2024" tabindex="0">16</div>
                                                                     </td>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1705438800000" role="gridcell" aria-label="17/01/2024" tabindex="0">17</div>
                                                                     </td>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1705525200000" role="gridcell" aria-label="18/01/2024" tabindex="0">18</div>
                                                                     </td>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1705611600000" role="gridcell" aria-label="19/01/2024" tabindex="0">19</div>
                                                                     </td>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1705698000000" role="gridcell" aria-label="20/01/2024" tabindex="0">20</div>
                                                                     </td>
                                                                  </tr>
                                                                  <tr>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1705784400000" role="gridcell" aria-label="21/01/2024" tabindex="0">21</div>
                                                                     </td>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1705870800000" role="gridcell" aria-label="22/01/2024" tabindex="0">22</div>
                                                                     </td>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1705957200000" role="gridcell" aria-label="23/01/2024" tabindex="0">23</div>
                                                                     </td>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1706043600000" role="gridcell" aria-label="24/01/2024" tabindex="0">24</div>
                                                                     </td>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1706130000000" role="gridcell" aria-label="25/01/2024" tabindex="0">25</div>
                                                                     </td>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1706216400000" role="gridcell" aria-label="26/01/2024" tabindex="0">26</div>
                                                                     </td>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1706302800000" role="gridcell" aria-label="27/01/2024" tabindex="0">27</div>
                                                                     </td>
                                                                  </tr>
                                                                  <tr>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus picker__day--today picker__day--selected picker__day--highlighted" data-pick="1706389200000" role="gridcell" aria-label="28/01/2024" aria-selected="true" aria-activedescendant="true" tabindex="0">28</div>
                                                                     </td>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1706475600000" role="gridcell" aria-label="29/01/2024" tabindex="0">29</div>
                                                                     </td>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1706562000000" role="gridcell" aria-label="30/01/2024" tabindex="0">30</div>
                                                                     </td>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--infocus" data-pick="1706648400000" role="gridcell" aria-label="31/01/2024" tabindex="0">31</div>
                                                                     </td>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--outfocus" data-pick="1706734800000" role="gridcell" aria-label="01/02/2024" tabindex="0">1</div>
                                                                     </td>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--outfocus" data-pick="1706821200000" role="gridcell" aria-label="02/02/2024" tabindex="0">2</div>
                                                                     </td>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--outfocus" data-pick="1706907600000" role="gridcell" aria-label="03/02/2024" tabindex="0">3</div>
                                                                     </td>
                                                                  </tr>
                                                                  <tr>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--outfocus" data-pick="1706994000000" role="gridcell" aria-label="04/02/2024" tabindex="0">4</div>
                                                                     </td>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--outfocus" data-pick="1707080400000" role="gridcell" aria-label="05/02/2024" tabindex="0">5</div>
                                                                     </td>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--outfocus" data-pick="1707166800000" role="gridcell" aria-label="06/02/2024" tabindex="0">6</div>
                                                                     </td>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--outfocus" data-pick="1707253200000" role="gridcell" aria-label="07/02/2024" tabindex="0">7</div>
                                                                     </td>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--outfocus" data-pick="1707339600000" role="gridcell" aria-label="08/02/2024" tabindex="0">8</div>
                                                                     </td>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--outfocus" data-pick="1707426000000" role="gridcell" aria-label="09/02/2024" tabindex="0">9</div>
                                                                     </td>
                                                                     <td role="presentation">
                                                                        <div class="picker__day picker__day--outfocus" data-pick="1707512400000" role="gridcell" aria-label="10/02/2024" tabindex="0">10</div>
                                                                     </td>
                                                                  </tr>
                                                               </tbody>
                                                            </table>
                                                         </div>
                                                         <div class="picker__footer"><button class="btn-flat picker__today waves-effect" type="button" data-pick="1706389200000" disabled="" aria-controls="betHistoryEndDatePicker">Bugün</button><button class="btn-flat picker__clear waves-effect" type="button" data-clear="1" disabled="" aria-controls="betHistoryEndDatePicker">Temizle</button><button class="btn-flat picker__close waves-effect" type="button" data-close="true" disabled="" aria-controls="betHistoryEndDatePicker">Kapat</button></div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <input type="text" id="betHistoryEndDatePicker" materialize="pickadate" tabindex="-1" readonly="" class="picker__input ng-untouched ng-valid ng-dirty" aria-haspopup="true" aria-expanded="false" aria-readonly="false" aria-owns="betHistoryEndDatePicker_root"><i aria-hidden="true" class="fa fa-calendar"></i>
                                    </label>
                                    <input type="text" pattern="[0-9]{2}/[0-9]{2}/[0-9]{4}" minlength="10" tabindex="2" required="" class="datepicker browser-default ng-untouched ng-pristine ng-valid">
                                 </div>
                                 <div class="input-field col s12 m2"><button class="btn w100">Sorgula</button></div>
                              </div>
                           </form>
                           <div class="type-btn-grp">
                              <button class="btn bg stts- fltr-btn active ng-star-inserted"><i class="fa fa-bars stts-"></i><i class="stts-">Hepsi</i></button><button class="btn bg stts-R fltr-btn ng-star-inserted"><i class="stts-"></i><i class="stts-">İade</i></button><button class="btn bg stts-O fltr-btn ng-star-inserted"><i class="fa fa-clock-o stts-"></i><i class="stts-">Tamamlanmamış</i></button><button class="btn bg stts-L fltr-btn ng-star-inserted"><i class="fa fa-times stts-"></i><i class="stts-">Kayıp</i></button><button class="btn bg stts-W fltr-btn ng-star-inserted"><i class="fa fa-check stts-"></i><i class="stts-">Kazanç</i></button><!----><!----><!---->
                           </div>
                        </div>
                     </div>
                     <div class="dshbrd-mdl">
                        <div class="mdl-hdr">
                           <div class="inf-hdr"><i class="fa fa-bars"></i><span class="inf-title">En Son Yapılan İşlemler</span></div>
                        </div>
                        <!---->
                        <message-box type="error" icon="fa fa-exclamation-circle" class="ng-star-inserted">
                           <div class="card-panel message-box error">
                              <div class="icon left ng-star-inserted"><i class="fa fa-exclamation-circle"></i></div>
                              <!----><!---->
                              <div class="ng-star-inserted">
                                 Veri bulunamadı<!----><!----><!----><!---->
                              </div>
                              <!----><!----><!----><!----><!---->
                           </div>
                        </message-box>
                        <!----><!----><!---->
                     </div>
                  </div>
                  <div id="betHistoryModal" materialize="modal" class="modal modal-md dshbrd-tckt-modal hdr-fix" style="z-index: 1121;">
                     <!---->
                  </div>
               </app-iframe-reports>
               <!---->
            </div>
         </div>
      </div>
   </app-dashboard>
   <!---->
</main>
<?php }?>