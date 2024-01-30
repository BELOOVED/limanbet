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
               <app-transfer class="ng-star-inserted">
                  <!---->
                  <div class="trnsfr-cntnt ng-star-inserted">
                     <div class="dshbrd-mdl">
                        <div class="mdl-hdr">
                           <div class="inf-hdr"><i aria-hidden="true" class="fa fa-credit-card-alt"></i><span class="inf-title">Hesaplar Arası Transfer</span></div>
                        </div>
                        <div class="mdl-cntnt">
                           <div class="trnsfr-cntnt">
                              <div class="accnt-lst-wrp">
                                 <div class="transfer-from">
                                    <div class="title"> Bu Hesaptan </div>
                                    <div class="account-list">
                                       <a class="btn ng-star-inserted">
                                          <i class="material-icons">radio_button_unchecked</i><i class="material-icons check-circle">check_circle</i><span class="transfer-name">Spor</span><span class="money ng-star-inserted">0.50 ₺</span><!---->
                                       </a>
                                       <!----><!----><!---->
                                       <a class="btn ng-star-inserted">
                                          <i class="material-icons">radio_button_unchecked</i><i class="material-icons check-circle">check_circle</i><span class="transfer-name">Klas Poker</span><span class="money ng-star-inserted">0.00 ₺</span><!---->
                                       </a>
                                       <!----><!----><!----><!----><!----><!---->
                                    </div>
                                 </div>
                                 <div class="transfer-from">
                                    <div class="title"> Bu Hesaba </div>
                                    <div class="account-list">
                                       <a class="btn ng-star-inserted">
                                          <i class="material-icons">radio_button_unchecked</i><i class="material-icons check-circle">check_circle</i><span class="transfer-name">Spor</span><span class="money ng-star-inserted">0.50 ₺</span><!---->
                                       </a>
                                       <!----><!----><!---->
                                       <a class="btn ng-star-inserted">
                                          <i class="material-icons">radio_button_unchecked</i><i class="material-icons check-circle">check_circle</i><span class="transfer-name">Klas Poker</span><span class="money ng-star-inserted">0.00 ₺</span><!---->
                                       </a>
                                       <!----><!----><!----><!----><!----><!---->
                                    </div>
                                 </div>
                                 <div class="transfer-from">
                                    <div class="payment-wrapper">
                                       <form novalidate="" class="ng-untouched ng-pristine ng-invalid">
                                          <div class="input-field ng-star-inserted">
                                             <input currency-mask="" debounce="700" type="text" class="browser-default ng-untouched ng-pristine ng-invalid" placeholder="Tutar Gir"><i class="fa fa-database cashout-icon pg-icons" title="Bahis Bozdur"></i><!---->
                                          </div>
                                          <!---->
                                          <div class="input-field w100 inline-block"><button class="btn transfer-btn right" disabled=""> Transfer </button><button type="button" class="btn reset-btn right"> Sıfırla </button></div>
                                       </form>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <app-notifications>
                              <div>
                                 <!---->
                              </div>
                           </app-notifications>
                        </div>
                     </div>
                     <exchange-calculator>
                        <div class="dshbrd-mdl">
                           <div class="mdl-hdr">
                              <div class="inf-hdr"><i aria-hidden="true" class="fa fa-credit-card-alt"></i><span class="inf-title">Döviz Hesaplama</span></div>
                           </div>
                           <div class="mdl-cntnt">
                              <form novalidate="" class="ng-untouched ng-pristine ng-valid">
                                 <div class="row">
                                    <div class="col s3">
                                       <div class="select-field">
                                          <select name="from" id="from" materialize="material_select" class="browser-default ng-untouched ng-pristine ng-valid">
                                             <option disabled="" value="null">Para Birimi</option>
                                             <option value="72" class="ng-star-inserted">Lempira</option>
                                             <option value="76" class="ng-star-inserted">Indian Rupee</option>
                                             <option value="77" class="ng-star-inserted">Rupiah</option>
                                             <option value="84" class="ng-star-inserted">Won</option>
                                             <option value="85" class="ng-star-inserted">Som</option>
                                             <option value="88" class="ng-star-inserted">Lebanese Pound</option>
                                             <option value="90" class="ng-star-inserted">Swiss Franc</option>
                                             <option value="92" class="ng-star-inserted">Denar</option>
                                             <option value="93" class="ng-star-inserted">Malaysian Ringgit</option>
                                             <option value="95" class="ng-star-inserted">Mexican Peso</option>
                                             <option value="101" class="ng-star-inserted">New Zealand Dollar</option>
                                             <option value="105" class="ng-star-inserted">Norwegian Krone</option>
                                             <option value="110" class="ng-star-inserted">Sol</option>
                                             <option value="111" class="ng-star-inserted">Philippine Piso</option>
                                             <option value="118" class="ng-star-inserted">Singapore Dollar</option>
                                             <option value="121" class="ng-star-inserted">Rand</option>
                                             <option value="123" class="ng-star-inserted">Swedish Krona</option>
                                             <option value="124" class="ng-star-inserted">Naira</option>
                                             <option value="125" class="ng-star-inserted">Grivna</option>
                                             <option value="127" class="ng-star-inserted">Baht</option>
                                             <option value="1" class="ng-star-inserted">Turkish Lira</option>
                                             <option value="2" class="ng-star-inserted">Great Britain Pound</option>
                                             <option value="3" class="ng-star-inserted">United States Dollar</option>
                                             <option value="4" class="ng-star-inserted">Euro</option>
                                             <option value="132" class="ng-star-inserted">Peso Uruguayo</option>
                                             <option value="5" class="ng-star-inserted">Ghana Cedi</option>
                                             <option value="133" class="ng-star-inserted">Uzbekistan Sum</option>
                                             <option value="6" class="ng-star-inserted">Poland</option>
                                             <option value="7" class="ng-star-inserted">Ugandan Shilling</option>
                                             <option value="391" class="ng-star-inserted">Sierra Leonean Leone</option>
                                             <option value="135" class="ng-star-inserted">Dong</option>
                                             <option value="8" class="ng-star-inserted">Leke</option>
                                             <option value="9" class="ng-star-inserted">Ruble</option>
                                             <option value="10" class="ng-star-inserted">Tenge</option>
                                             <option value="11" class="ng-star-inserted">Manat</option>
                                             <option value="12" class="ng-star-inserted">Real Brasileiro</option>
                                             <option value="142" class="ng-star-inserted">CFA Franc BCEAO</option>
                                             <option value="15" class="ng-star-inserted">Ethiopian Birr</option>
                                             <option value="147" class="ng-star-inserted">Mozambican Metical</option>
                                             <option value="23" class="ng-star-inserted">Kenyan Shilling</option>
                                             <option value="151" class="ng-star-inserted">Tanzanian Shilling</option>
                                             <option value="153" class="ng-star-inserted">Tunisian Dinar</option>
                                             <option value="160" class="ng-star-inserted">Moroccan Dirham</option>
                                             <option value="161" class="ng-star-inserted">Zambian Kwacha</option>
                                             <option value="37" class="ng-star-inserted">Argentine Peso</option>
                                             <option value="39" class="ng-star-inserted">Australian Dollar</option>
                                             <option value="45" class="ng-star-inserted">Boliviano</option>
                                             <option value="177" class="ng-star-inserted">CFA Franc BEAC</option>
                                             <option value="50" class="ng-star-inserted">Riel</option>
                                             <option value="178" class="ng-star-inserted">Angolan Kwanza</option>
                                             <option value="51" class="ng-star-inserted">Canadian Dollar</option>
                                             <option value="53" class="ng-star-inserted">Chilean Peso</option>
                                             <option value="54" class="ng-star-inserted">Yuan Renminbi</option>
                                             <option value="184" class="ng-star-inserted">Leone</option>
                                             <!---->
                                          </select>
                                       </div>
                                    </div>
                                    <div class="col s3">
                                       <div class="select-field">
                                          <select name="to" id="to" materialize="material_select" class="browser-default ng-untouched ng-pristine ng-valid">
                                             <option disabled="" value="null">Para Birimi</option>
                                             <option value="72" class="ng-star-inserted">Lempira</option>
                                             <option value="76" class="ng-star-inserted">Indian Rupee</option>
                                             <option value="77" class="ng-star-inserted">Rupiah</option>
                                             <option value="84" class="ng-star-inserted">Won</option>
                                             <option value="85" class="ng-star-inserted">Som</option>
                                             <option value="88" class="ng-star-inserted">Lebanese Pound</option>
                                             <option value="90" class="ng-star-inserted">Swiss Franc</option>
                                             <option value="92" class="ng-star-inserted">Denar</option>
                                             <option value="93" class="ng-star-inserted">Malaysian Ringgit</option>
                                             <option value="95" class="ng-star-inserted">Mexican Peso</option>
                                             <option value="101" class="ng-star-inserted">New Zealand Dollar</option>
                                             <option value="105" class="ng-star-inserted">Norwegian Krone</option>
                                             <option value="110" class="ng-star-inserted">Sol</option>
                                             <option value="111" class="ng-star-inserted">Philippine Piso</option>
                                             <option value="118" class="ng-star-inserted">Singapore Dollar</option>
                                             <option value="121" class="ng-star-inserted">Rand</option>
                                             <option value="123" class="ng-star-inserted">Swedish Krona</option>
                                             <option value="124" class="ng-star-inserted">Naira</option>
                                             <option value="125" class="ng-star-inserted">Grivna</option>
                                             <option value="127" class="ng-star-inserted">Baht</option>
                                             <option value="1" class="ng-star-inserted">Turkish Lira</option>
                                             <option value="2" class="ng-star-inserted">Great Britain Pound</option>
                                             <option value="3" class="ng-star-inserted">United States Dollar</option>
                                             <option value="4" class="ng-star-inserted">Euro</option>
                                             <option value="132" class="ng-star-inserted">Peso Uruguayo</option>
                                             <option value="5" class="ng-star-inserted">Ghana Cedi</option>
                                             <option value="133" class="ng-star-inserted">Uzbekistan Sum</option>
                                             <option value="6" class="ng-star-inserted">Poland</option>
                                             <option value="7" class="ng-star-inserted">Ugandan Shilling</option>
                                             <option value="391" class="ng-star-inserted">Sierra Leonean Leone</option>
                                             <option value="135" class="ng-star-inserted">Dong</option>
                                             <option value="8" class="ng-star-inserted">Leke</option>
                                             <option value="9" class="ng-star-inserted">Ruble</option>
                                             <option value="10" class="ng-star-inserted">Tenge</option>
                                             <option value="11" class="ng-star-inserted">Manat</option>
                                             <option value="12" class="ng-star-inserted">Real Brasileiro</option>
                                             <option value="142" class="ng-star-inserted">CFA Franc BCEAO</option>
                                             <option value="15" class="ng-star-inserted">Ethiopian Birr</option>
                                             <option value="147" class="ng-star-inserted">Mozambican Metical</option>
                                             <option value="23" class="ng-star-inserted">Kenyan Shilling</option>
                                             <option value="151" class="ng-star-inserted">Tanzanian Shilling</option>
                                             <option value="153" class="ng-star-inserted">Tunisian Dinar</option>
                                             <option value="160" class="ng-star-inserted">Moroccan Dirham</option>
                                             <option value="161" class="ng-star-inserted">Zambian Kwacha</option>
                                             <option value="37" class="ng-star-inserted">Argentine Peso</option>
                                             <option value="39" class="ng-star-inserted">Australian Dollar</option>
                                             <option value="45" class="ng-star-inserted">Boliviano</option>
                                             <option value="177" class="ng-star-inserted">CFA Franc BEAC</option>
                                             <option value="50" class="ng-star-inserted">Riel</option>
                                             <option value="178" class="ng-star-inserted">Angolan Kwanza</option>
                                             <option value="51" class="ng-star-inserted">Canadian Dollar</option>
                                             <option value="53" class="ng-star-inserted">Chilean Peso</option>
                                             <option value="54" class="ng-star-inserted">Yuan Renminbi</option>
                                             <option value="184" class="ng-star-inserted">Leone</option>
                                             <!---->
                                          </select>
                                       </div>
                                    </div>
                                    <div class="col s3">
                                       <div class="input-field"><input type="number" id="amount" name="amount" class="browser-default ng-untouched ng-pristine ng-valid" placeholder="Miktar"></div>
                                    </div>
                                    <div class="col s3">
                                       <div class="input-field"><button class="btn w100" disabled=""><i aria-hidden="true" class="fa fa-calculator"></i>Hesapla</button></div>
                                    </div>
                                 </div>
                              </form>
                              <!---->
                           </div>
                        </div>
                     </exchange-calculator>
                  </div>
                  <!---->
               </app-transfer>
               <!---->
            </div>
         </div>
      </div>
   </app-dashboard>
   <!---->
</main>
<?php }?>