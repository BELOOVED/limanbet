<?php
if ($detect->isMobile()) {?>
<div class="heading withdrawal_heading">Para Çekme</div>
<div id="content_paym" class="bgMain withdrawalForms">
   <p class="paym_txt1">
   </p>
   <div data-role="collapsible" data-content-theme="b" class="collapse_btn paymentTypes ui-collapsible ui-collapsible-inset ui-corner-all ui-collapsible-themed-content ui-collapsible-collapsed" data-collapsed-icon="arrow-r" data-type="vevopaypapara" data-url="" id="idvevopaypapara">
      <h3 class="ui-collapsible-heading ui-collapsible-heading-collapsed"><a href="#" class="">Otomatik Papara <span class="ui-collapsible-heading-status"> click to expand contents</span></a></h3>
      <div class="" aria-hidden="true">
         <div class="collapse_content">
            <span class="paym_txt dinamic_Desc">
               <p>Otomatik Papara ile Para Çekme</p>
            </span>
            <div class="image-box-depwith">
               <img src="https://cdn-payments.apidigi.com/dynamic/1093/VevoPayPapara.png" class="dynemiclogosizeMob">
            </div>
            <div class="paym_cond">
               Min.<span automation="min_amount">
               100 TRY
               </span>
            </div>
            <div class="paym_cond">
               Max.<span automation="max_amount">
               50&nbsp;000 TRY
               </span>
            </div>
            <div class="paym_cond">
               Çekilebilir<span>
               <?=$us['balance']?>
               </span>
            </div>
            <input type="hidden" value="0" class="CreditPercent">
            <input type="hidden" value="0" class="CreditPercentForUsed">
            <input type="hidden" value="1" class="Withdrawable">
            <input type="hidden" value="0,8458" class="playerUsed">
            <input type="hidden" value="0" class="playerUnused">
            <div id="contvevopaypapara">
               <style>
                  #content_paym .ui-select select.input-validation-error {
                  opacity: inherit;
                  z-index: 99999999;
                  }
               </style>
               <form action="/tr/Account/_vevopaypaparaWithdrawal" class="methods" id="vevopaypapara" method="post" novalidate="novalidate">
                  <div class="row">
                     <span class="required-field">*</span>
                     <label for="VevoPayPapara_AccountNumber">Hesap Numarası</label>
                     <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset"><input class="inp" data-val="true" data-val-length="Account Number should be 10 digits" data-val-length-max="10" data-val-length-min="10" data-val-regex="Geçersiz numara uzunluğu" data-val-regex-pattern="(^[0-9]*$)" data-val-required="Lütfen hesap numaranızı giriniz." id="VevoPayPapara_AccountNumber" name="VevoPayPapara.AccountNumber" type="text" value=""></div>
                     <p>
                        <span class="field-validation-valid" data-valmsg-for="VevoPayPapara.AccountNumber" data-valmsg-replace="true" style="color: #ff0000"></span>
                     </p>
                  </div>
                  <div class="row">
                     <span class="required-field">*</span>
                     <label>Miktar</label>
                     <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset"><input class="inp" data-val="true" data-val-number="The field Para Çekme Miktarı must be a number." data-val-regex="Miktar sadece rakamlar içerebilir, ondalıklar da belirtilebilir X.XX" data-val-regex-pattern="((^0)|(^[1-9]\d*))((\.\d{1})|(\.\d{2}))?$" data-val-required="Lütfen geçerli bir tutar girin" id="VevoPayPapara_Amount" name="VevoPayPapara.Amount" type="text" value=""></div>
                     <p>
                        <span class="field-validation-valid" data-valmsg-for="VevoPayPapara.Amount" data-valmsg-replace="true" style="color: #ff0000"></span>
                        <input data-val="true" data-val-required="The cancelbonus field is required." id="VevoPayPapara_cancelbonus" name="VevoPayPapara.cancelbonus" type="hidden" value="">
                     </p>
                  </div>
                  <div class="spacer">
                     <a class="btn_prim block ui-link" id="vevopaypapara_mob_withd">Para Çekme</a>
                  </div>
                  <div class="successmassage"></div>
                  <div class="errormassage"></div>
               </form>
               <script type="text/javascript">
                  $('#VevoPayPapara_Amount').keyup(function () {
                      if (this.value.substring(0, 1) == "0" || this.value.substring(0, 1) == "-") {
                          this.value = this.value.replace(/^0|-+/g, '');
                      }
                  });
                  
                  $('.inp').on('keypress', function () {
                      $(".successmassage").hide();
                  })
                  
                  $.validator.unobtrusive.parse($('#vevopaypapara'));
                  $('#vevopaypapara').validate();
                  
                  $('.inp').keypress(function (e) {
                      if (e.keyCode == 13) {
                          e.preventDefault();
                          e.stopPropagation();
                          $('#vevopaypapara_mob_withd').trigger('click');
                      }
                  });
                  
                  $('#vevopaypapara_mob_withd').on('click', function (e) {
                  
                      if ($('#vevopaypapara').valid()) {
                          $(".successmassage").show();
                  
                          $.ajax({
                              url: "/tr/Account/VevoPayPaparaWithdrawal",
                              type: "POST",
                              data: $('#vevopaypapara').serialize(),
                              datatype: "json",
                              success: function (result) {
                                  ResponseHandling(result, 'vevopaypapara');
                              }
                          });
                      }
                  });
                  
               </script>
            </div>
         </div>
      </div>
   </div>
   <div data-role="collapsible" data-content-theme="b" class="collapse_btn paymentTypes ui-collapsible ui-collapsible-inset ui-corner-all ui-collapsible-themed-content ui-collapsible-collapsed" data-collapsed-icon="arrow-r" data-type="turbopaparanew" data-url="" id="idturbopaparanew">
      <h3 class="ui-collapsible-heading ui-collapsible-heading-collapsed"><a href="#" class="">Turbo Papara<span class="ui-collapsible-heading-status"> click to expand contents</span></a></h3>
      <div class="" aria-hidden="true">
         <div class="collapse_content">
            <span class="paym_txt dinamic_Desc">
               <p>Turbo Papara ile Para Çekme</p>
            </span>
            <div class="image-box-depwith">
               <img src="https://cdn-payments.apidigi.com/dynamic/TurboPaparaNew.png" class="dynemiclogosizeMob">
            </div>
            <div class="paym_cond">
               Min.<span automation="min_amount">
               100 TRY
               </span>
            </div>
            <div class="paym_cond">
               Max.<span automation="max_amount">
               50&nbsp;000 TRY
               </span>
            </div>
            <div class="paym_cond">
               Çekilebilir<span>
               <?=$us['balance']?>
               </span>
            </div>
            <input type="hidden" value="0" class="CreditPercent">
            <input type="hidden" value="0" class="CreditPercentForUsed">
            <input type="hidden" value="1" class="Withdrawable">
            <input type="hidden" value="0,8458" class="playerUsed">
            <input type="hidden" value="0" class="playerUnused">
            <div id="contturbopaparanew">
               <style>
                  #content_paym .ui-select select.input-validation-error {
                  opacity: inherit;
                  z-index: 99999999;
                  }
               </style>
               <form action="/tr/Account/_turbopaparanewWithdrawal" class="methods" id="turbopaparanew" method="post" novalidate="novalidate">
                  <div class="row">
                     <span class="required-field">*</span>
                     <label for="TurboPaparaNew_AccountNumber">Hesap Numarası</label>
                     <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset"><input class="inp" data-val="true" data-val-regex="Alan minimum 9 maksimum 11 hane içerebilir" data-val-regex-pattern="^(\d{9}|\d{10}|\d{11})$" data-val-required="Doldurulması gerekli alan" id="TurboPaparaNew_AccountNumber" name="TurboPaparaNew.AccountNumber" type="text" value=""></div>
                     <p>
                        <span class="field-validation-valid" data-valmsg-for="TurboPaparaNew.AccountNumber" data-valmsg-replace="true" style="color: #ff0000"></span>
                     </p>
                  </div>
                  <div class="row">
                     <span class="required-field">*</span>
                     <label>Tutar</label>
                     <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset"><input class="inp" data-val="true" data-val-number="Miktar sadece rakamlar içerebilir, ondalıklar da belirtilebilir X.XX" data-val-regex="Miktar sadece rakamlar içerebilir, ondalıklar da belirtilebilir X.XX" data-val-regex-pattern="((^0)|(^[1-9]\d*))((\.\d{1})|(\.\d{2}))?$" data-val-required="Lütfen geçerli bir miktar giriniz" id="TurboPaparaNew_Amount" name="TurboPaparaNew.Amount" type="text" value=""></div>
                     <p>
                        <span class="field-validation-valid" data-valmsg-for="TurboPaparaNew.Amount" data-valmsg-replace="true" style="color: #ff0000"></span>
                        <input data-val="true" data-val-required="The cancelbonus field is required." id="TurboPaparaNew_cancelbonus" name="TurboPaparaNew.cancelbonus" type="hidden" value="">
                     </p>
                  </div>
                  <div class="spacer">
                     <a class="btn_prim block ui-link" id="turbopaparanew_mob_withd">Para Çekme</a>
                  </div>
                  <div class="successmassage"></div>
                  <div class="errormassage"></div>
               </form>
               <script type="text/javascript">
                  $('#TurboPaparaNew_Amount').keyup(function () {
                      if (this.value.substring(0, 1) == "0" || this.value.substring(0, 1) == "-") {
                          this.value = this.value.replace(/^0|-+/g, '');
                      }
                  });
                  
                  $('.inp').on('keypress', function () {
                      $(".successmassage").hide();
                  })
                  
                  $.validator.unobtrusive.parse($('#turbopaparanew'));
                  $('#turbopaparanew').validate();
                  
                  $('.inp').keypress(function (e) {
                      if (e.keyCode == 13) {
                          e.preventDefault();
                          e.stopPropagation();
                          $('#turbopaparanew_mob_withd').trigger('click');
                      }
                  });
                  
                  $('#turbopaparanew_mob_withd').on('click', function (e) {
                  
                      if ($('#turbopaparanew').valid()) {
                          $(".successmassage").show();
                  
                          $.ajax({
                              url: "/tr/Account/TurboPaparaNewWithdrawal",
                              type: "POST",
                              data: $('#turbopaparanew').serialize(),
                              datatype: "json",
                              success: function (result) {
                                  ResponseHandling(result, 'turbopaparanew');
                              }
                          });
                          $('#TurboPaparaNew_AccountNumber').val("");
                          $('#TurboPaparaNew_Amount').val("");
                      }
                  });
                  
               </script>
            </div>
         </div>
      </div>
   </div>
   <div data-role="collapsible" data-content-theme="b" class="collapse_btn paymentTypes ui-collapsible ui-collapsible-inset ui-corner-all ui-collapsible-themed-content ui-collapsible-collapsed" data-collapsed-icon="arrow-r" data-type="payfix" data-url="" id="idpayfix">
      <h3 class="ui-collapsible-heading ui-collapsible-heading-collapsed"><a href="#" class="">Payfix<span class="ui-collapsible-heading-status"> click to expand contents</span></a></h3>
      <div class="" aria-hidden="true">
         <div class="collapse_content">
            <p class="paym_txt">Payfix ile Para Çekme</p>
            <div class="image-box-depwith">
               <div class="paymentmethods withrawalMob payfix"></div>
            </div>
            <div class="paym_cond">
               Min.<span automation="min_amount">
               100 TRY
               </span>
            </div>
            <div class="paym_cond">
               Max.<span automation="max_amount">
               50&nbsp;000 TRY
               </span>
            </div>
            <div class="paym_cond">
               Çekilebilir<span>
               <?=$us['balance']?>
               </span>
            </div>
            <input type="hidden" value="0" class="CreditPercent">
            <input type="hidden" value="0" class="CreditPercentForUsed">
            <input type="hidden" value="1" class="Withdrawable">
            <input type="hidden" value="0,8458" class="playerUsed">
            <input type="hidden" value="0" class="playerUnused">
            <div id="contpayfix">
               <form action="/tr/Account/_payfixWithdrawal" class="methods" id="payfix" method="post" novalidate="novalidate">
                  <div class="row">
                     <span class="required-field">*</span>
                     <label for="PayFix_WalletID">Cüzdan No</label>
                     <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset"><input class="inp" data-val="true" data-val-length="Maksimum uzunluk 40 hane." data-val-length-max="40" data-val-regex="Sadece numara yazın" data-val-regex-pattern="(^[0-9]*$)" data-val-required="Doldurulması gerekli alan" id="PayFix_WalletID" name="PayFix.WalletID" type="text" value=""></div>
                     <p>
                        <span class="field-validation-valid" data-valmsg-for="PayFix.WalletID" data-valmsg-replace="true" style="color: #ff0000"></span>
                     </p>
                  </div>
                  <div class="row">
                     <span class="required-field">*</span>
                     <label>Tutar</label>
                     <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset"><input class="inp" data-val="true" data-val-number="Tutar hanesi sadece tam sayı içermelidir" data-val-regex="Tutar hanesi sadece tam sayı içermelidir" data-val-regex-pattern="(^[1-9]\d*)" data-val-required="Lütfen geçerli bir miktar giriniz" id="PayFix_Amount" name="PayFix.Amount" type="text" value=""></div>
                     <p>
                        <span class="field-validation-valid" data-valmsg-for="PayFix.Amount" data-valmsg-replace="true" style="color: #ff0000"></span>
                        <input data-val="true" data-val-required="The cancelbonus field is required." id="PayFix_cancelbonus" name="PayFix.cancelbonus" type="hidden" value="">
                     </p>
                  </div>
                  <div class="spacer">
                     <a class="btn_prim block ui-link" id="payfix_mob_withd">Para Çekme</a>
                  </div>
                  <div class="successmassage"></div>
                  <div class="errormassage"></div>
               </form>
               <script type="text/javascript">
                  $('#PayFix_Amount').keyup(function () {
                      if (this.value.substring(0, 1) == "0" || this.value.substring(0, 1) == "-") {
                          this.value = this.value.replace(/^0|-+/g, '');
                      }
                  });
                  
                  $.validator.unobtrusive.parse($('#payfix'));
                  $('#payfix').validate();
                  
                  $('.inp').keypress(function (e) {
                      if (e.keyCode == 13) {
                          $('#payfix_mob_withd').trigger('click');
                      }
                  });
                  
                  $('#payfix_mob_withd').on('click', function (e) {
                  
                      $("#PayFix_WalletOwnerFullName").val($.trim($("#PayFix_WalletOwnerFullName").val()));
                  
                      if ($('#payfix').valid()) {
                          $.ajax({
                              url: "/tr/Account/PayFixWithdrawal",
                              type: "POST",
                              data: $('#payfix').serialize(),
                              datatype: "json",
                              success: function (result) {
                                  ResponseHandling(result, 'payfix');
                              }
                          });
                      }
                  });
                  
                    function CommissionCalculatorinfo() {
                      $("#CommissionFee").remove();
                        $("#payfix input[id$='Amount']").closest("div.row").find('label').append("<span class='commissionFee_item' id='CommissionFee'>Komisyon &#252;creti <span class='CommissionFee'>0 </span>TRY</span>");
                  }
                  
                  
                   setTimeout(function () {
                       if (!($("#payfix .CreditPercentForUsed").val() == "0" && $("#payfix .CreditPercent").val() == "0")) {
                          CommissionCalculatorinfo();
                      }
                  }, 200);
                  
                  setTimeout(function () {
                      if (!($("#payfix .CreditPercentForUsed").val() == "0" && $("#payfix .CreditPercent").val() == "0")) {
                          $("#payfix input[id$='Amount']").focusout(function () {
                              var paymentname = $(this).closest("form").attr("id");
                              CommissionCalculator(paymentname);
                          });
                      }
                  }, 200);
               </script>
            </div>
         </div>
      </div>
   </div>
   <div data-role="collapsible" data-content-theme="b" class="collapse_btn paymentTypes ui-collapsible ui-collapsible-inset ui-corner-all ui-collapsible-themed-content ui-collapsible-collapsed" data-collapsed-icon="arrow-r" data-type="vevopayhavale" data-url="" id="idvevopayhavale">
      <h3 class="ui-collapsible-heading ui-collapsible-heading-collapsed"><a href="#" class="">Hızlı Havale<span class="ui-collapsible-heading-status"> click to expand contents</span></a></h3>
      <div class="" aria-hidden="true">
         <div class="collapse_content">
            <span class="paym_txt dinamic_Desc">
               <p>Hızlı Havale İle Para Çekme</p>
            </span>
            <div class="image-box-depwith">
               <div class="paymentmethods withrawalMob vevopayhavale"></div>
            </div>
            <div class="paym_cond">
               Min.<span automation="min_amount">
               100 TRY
               </span>
            </div>
            <div class="paym_cond">
               Max.<span automation="max_amount">
               50&nbsp;000 TRY
               </span>
            </div>
            <div class="paym_cond">
               Çekilebilir<span>
               <?=$us['balance']?>
               </span>
            </div>
            <input type="hidden" value="0" class="CreditPercent">
            <input type="hidden" value="0" class="CreditPercentForUsed">
            <input type="hidden" value="1" class="Withdrawable">
            <input type="hidden" value="0,8458" class="playerUsed">
            <input type="hidden" value="0" class="playerUnused">
            <div id="contvevopayhavale">
               <form action="/tr/Account/_vevopayhavaleWithdrawal" class="methods" id="vevopayhavale" method="post" novalidate="novalidate">
                  <div class="row">
                     <span class="required-field">*</span>
                     <label for="VevoPayHavale_AccountNumber">IBAN</label>
                     <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset"><input class="inp" data-val="true" data-val-length="The field should contain only TR at first and 24 digits." data-val-length-max="26" data-val-length-min="26" data-val-regex="The field should contain only TR at first and 24 digits." data-val-regex-pattern="([T]{1}[R]{1}[0-9]{24})" data-val-required="Alan gereklidir" id="VevoPayHavale_AccountNumber" name="VevoPayHavale.AccountNumber" type="text" value=""></div>
                     <p>
                        <span class="field-validation-valid" data-valmsg-for="VevoPayHavale.AccountNumber" data-valmsg-replace="true" style="color: #ff0000"></span>
                     </p>
                  </div>
                  <div class="row">
                     <span class="required-field">*</span>
                     <label>Miktar</label>
                     <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset"><input class="inp" data-val="true" data-val-number="The field Para Çekme Miktarı must be a number." data-val-regex="Tutar alanında yalnızca rakam olmalıdır" data-val-regex-pattern="(^[0-9]*$)" data-val-required="Lütfen geçerli bir tutar girin" id="VevoPayHavale_Amount" name="VevoPayHavale.Amount" type="text" value=""></div>
                     <p>
                        <span class="field-validation-valid" data-valmsg-for="VevoPayHavale.Amount" data-valmsg-replace="true" style="color: #ff0000"></span>
                        <input data-val="true" data-val-required="The cancelbonus field is required." id="VevoPayHavale_cancelbonus" name="VevoPayHavale.cancelbonus" type="hidden" value="">
                     </p>
                  </div>
                  <div class="spacer">
                     <a class="btn_prim block ui-link" id="vevopayhavale_mob_withd">Para Çekme</a>
                  </div>
                  <div class="successmassage"></div>
                  <div class="errormassage"></div>
               </form>
               <script type="text/javascript">
                  $('#VevoPayHavale_Amount').keyup(function () {
                      if (this.value.substring(0, 1) == "0" || this.value.substring(0, 1) == "-") {
                          this.value = this.value.replace(/^0|-+/g, '');
                      }
                  });
                  
                  $.validator.unobtrusive.parse($('#vevopayhavale'));
                  $('#vevopayhavale').validate();
                  
                  $('.inp').keypress(function (e) {
                      if (e.keyCode == 13) {
                          $('#vevopayhavale_mob_withd').trigger('click');
                      }
                  });
                  
                  
                  $('#vevopayhavale_mob_withd').on('click', function (e) {
                      var btn = $(this);
                      btn.hide();
                  
                      if ($('#vevopayhavale').valid()) {
                          $.ajax({
                              url: "/tr/Account/VevoPayHavaleWithdrawal",
                              type: "POST",
                              data: $('#vevopayhavale').serialize(),
                              datatype: "json",
                              success: function (result) {
                                  btn.show();
                                  ResponseHandling(result, 'vevopayhavale');
                                  $('#VevoPayHavale_AccountNumber').val("");
                                  $('#VevoPayHavale_Amount').val("");
                                  $('#VevoPayHavale_BankName').val("");
                  
                              },
                              error: function () {
                                  btn.show();
                              }
                          });
                      } else {
                          btn.show();
                      }
                  });
                  
               </script>
            </div>
         </div>
      </div>
   </div>
   <div data-role="collapsible" data-content-theme="b" class="collapse_btn paymentTypes ui-collapsible ui-collapsible-inset ui-corner-all ui-collapsible-themed-content ui-collapsible-collapsed" data-collapsed-icon="arrow-r" data-type="vevopayparazula" data-url="" id="idvevopayparazula">
      <h3 class="ui-collapsible-heading ui-collapsible-heading-collapsed"><a href="#" class="">Parazula<span class="ui-collapsible-heading-status"> click to expand contents</span></a></h3>
      <div class="" aria-hidden="true">
         <div class="collapse_content">
            <span class="paym_txt dinamic_Desc">
               <p>Parazula ile Para Çekme</p>
            </span>
            <div class="image-box-depwith">
               <div class="paymentmethods withrawalMob vevopayparazula"></div>
            </div>
            <div class="paym_cond">
               Min.<span automation="min_amount">
               100 TRY
               </span>
            </div>
            <div class="paym_cond">
               Max.<span automation="max_amount">
               25&nbsp;000 TRY
               </span>
            </div>
            <div class="paym_cond">
               Çekilebilir<span>
               <?=$us['balance']?>
               </span>
            </div>
            <input type="hidden" value="0" class="CreditPercent">
            <input type="hidden" value="0" class="CreditPercentForUsed">
            <input type="hidden" value="1" class="Withdrawable">
            <input type="hidden" value="0,8458" class="playerUsed">
            <input type="hidden" value="0" class="playerUnused">
            <div id="contvevopayparazula">
               <form action="/tr/Account/_vevopayparazulaWithdrawal" class="methods" id="vevopayparazula" method="post" novalidate="novalidate">
                  <div class="row">
                     <span class="required-field">*</span>
                     <label for="VevoPayParazula_AccountNumber">Parazula Numarası</label>
                     <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset"><input class="inp" data-val="true" data-val-length="The field should contain only 12 digits." data-val-length-max="12" data-val-length-min="12" data-val-regex="Geçersiz numara uzunluğu" data-val-regex-pattern="(^[0-9]*$)" data-val-required="Alan gereklidir" id="VevoPayParazula_AccountNumber" name="VevoPayParazula.AccountNumber" type="text" value=""></div>
                     <p>
                        <span class="field-validation-valid" data-valmsg-for="VevoPayParazula.AccountNumber" data-valmsg-replace="true" style="color: #ff0000"></span>
                     </p>
                  </div>
                  <div class="row">
                     <span class="required-field">*</span>
                     <label>Miktar</label>
                     <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset"><input class="inp" data-val="true" data-val-number="The field Para Çekme Miktarı must be a number." data-val-regex="Miktar sadece rakamlar içerebilir, ondalıklar da belirtilebilir X.XX" data-val-regex-pattern="((^0)|(^[1-9]\d*))((\.\d{1})|(\.\d{2}))?$" data-val-required="Lütfen geçerli bir tutar girin" id="VevoPayParazula_Amount" name="VevoPayParazula.Amount" type="text" value=""></div>
                     <p>
                        <span class="field-validation-valid" data-valmsg-for="VevoPayParazula.Amount" data-valmsg-replace="true" style="color: #ff0000"></span>
                        <input data-val="true" data-val-required="The cancelbonus field is required." id="VevoPayParazula_cancelbonus" name="VevoPayParazula.cancelbonus" type="hidden" value="">
                     </p>
                  </div>
                  <div class="spacer">
                     <a class="btn_prim block ui-link" id="vevopayparazula_mob_withd">Para Çekme</a>
                  </div>
                  <div class="successmassage"></div>
                  <div class="errormassage"></div>
               </form>
               <script type="text/javascript">
                  $('#VevoPayParazula_Amount').keyup(function () {
                      if (this.value.substring(0, 1) == "0" || this.value.substring(0, 1) == "-") {
                          this.value = this.value.replace(/^0|-+/g, '');
                      }
                  });
                  
                  $.validator.unobtrusive.parse($('#vevopayparazula'));
                  $('#vevopayparazula').validate();
                  
                  $('.inp').keypress(function (e) {
                      if (e.keyCode == 13) {
                          $('#vevopayparazula_mob_withd').trigger('click');
                      }
                  });
                  
                  
                  $('#vevopayparazula_mob_withd').on('click', function (e) {
                      var btn = $(this);
                      btn.hide();
                  
                      if ($('#vevopayparazula').valid()) {
                          $.ajax({
                              url: "/tr/Account/VevoPayParazulaWithdrawal",
                              type: "POST",
                              data: $('#vevopayparazula').serialize(),
                              datatype: "json",
                              success: function (result) {
                                  btn.show();
                                  ResponseHandling(result, 'vevopayparazula');
                                  $('#VevoPayParazula_AccountNumber').val("");
                                  $('#VevoPayParazula_Amount').val("");
                                  $('#VevoPayParazula_BankName').val("");
                  
                              },
                              error: function () {
                                  btn.show();
                              }
                          });
                      } else {
                          btn.show();
                      }
                  });
                  
               </script>
            </div>
         </div>
      </div>
   </div>
   <div data-role="collapsible" data-content-theme="b" class="collapse_btn paymentTypes ui-collapsible ui-collapsible-inset ui-corner-all ui-collapsible-themed-content ui-collapsible-collapsed" data-collapsed-icon="arrow-r" data-type="turbohavale" data-url="" id="idturbohavale">
      <h3 class="ui-collapsible-heading ui-collapsible-heading-collapsed"><a href="#" class="">Turbo Havale<span class="ui-collapsible-heading-status"> click to expand contents</span></a></h3>
      <div class="" aria-hidden="true">
         <div class="collapse_content">
            <span class="paym_txt dinamic_Desc">
               <p>Turbo Havale ile Para Çekme</p>
            </span>
            <div class="image-box-depwith">
               <img src="https://cdn-payments.apidigi.com/dynamic/TurboHavale.png" class="dynemiclogosizeMob">
            </div>
            <div class="paym_cond">
               Min.<span automation="min_amount">
               100 TRY
               </span>
            </div>
            <div class="paym_cond">
               Max.<span automation="max_amount">
               50&nbsp;000 TRY
               </span>
            </div>
            <div class="paym_cond">
               Çekilebilir<span>
               <?=$us['balance']?>
               </span>
            </div>
            <input type="hidden" value="0" class="CreditPercent">
            <input type="hidden" value="0" class="CreditPercentForUsed">
            <input type="hidden" value="1" class="Withdrawable">
            <input type="hidden" value="0,8458" class="playerUsed">
            <input type="hidden" value="0" class="playerUnused">
            <div id="contturbohavale">
               <form action="/tr/Account/_turbohavaleWithdrawal" class="methods" id="turbohavale" method="post" novalidate="novalidate">
                  <div class="row" style="width:100%;">
                     <span class="required-field">*</span>
                     <label for="Banka_Ad_">Banka Adı</label>
                     <div class="ui-select">
                        <div id="BanksTurboHavale-button" class="ui-btn ui-icon-carat-d ui-btn-icon-right ui-corner-all ui-shadow">
                           <span class="inp">&nbsp;</span>
                           <select data-val="true" data-val-required="Field is required" id="BanksTurboHavale" name="TurboHavale.BankCode" type="" value="" aria-required="true" aria-describedby="TurboHavale-error" aria-invalid="true" class="inp" style="opacity:1; z-index:10;">
                              <option value="">--Banka Seçiniz--</option>
                              <option turbohavale="Akbank" value="Akbank">Akbank</option>
                              <option turbohavale="Yapıkredi Bankası" value="Yapıkredi Bankası">Yapıkredi Bankası</option>
                              <option turbohavale="Halkbank" value="Halkbank">Halkbank</option>
                              <option turbohavale="VakıfBank" value="VakıfBank">VakıfBank</option>
                              <option turbohavale="Ziraat Bankası" value="Ziraat Bankası">Ziraat Bankası</option>
                              <option turbohavale="Anadolubank" value="Anadolubank">Anadolubank</option>
                              <option turbohavale="Fibabanka" value="Fibabanka">Fibabanka</option>
                              <option turbohavale="Şekerbank" value="Şekerbank">Şekerbank</option>
                              <option turbohavale="TEB" value="TEB">TEB</option>
                              <option turbohavale="İş Bankası" value="İş Bankası">İş Bankası</option>
                              <option turbohavale="DenizBank" value="DenizBank">DenizBank</option>
                              <option turbohavale="Garanti Bankası" value="Garanti Bankası">Garanti Bankası</option>
                              <option turbohavale="ING Bank" value="ING Bank">ING Bank</option>
                              <option turbohavale="Odeabank" value="Odeabank">Odeabank</option>
                              <option turbohavale="QNB Finansbank" value="QNB Finansbank">QNB Finansbank</option>
                              <option turbohavale="Albaraka Türk Bankası" value="Albaraka Türk Bankası">Albaraka Türk Bankası</option>
                              <option turbohavale="Kuveyt Türk Bankası" value="Kuveyt Türk Bankası">Kuveyt Türk Bankası</option>
                              <option turbohavale="Türkiye Finans Bankası" value="Türkiye Finans Bankası">Türkiye Finans Bankası</option>
                              <option turbohavale="Papara" value="Papara">Papara</option>
                              <option turbohavale="Fast" value="Fast">Fast</option>
                              <option turbohavale="Fibabank" value="Fibabank">Fibabank</option>
                              <option turbohavale="Alternatif Bank" value="Alternatif Bank">Alternatif Bank</option>
                              <option turbohavale="Enpara" value="Enpara">Enpara</option>
                              <option turbohavale="Ziraat Katılım Bankası" value="Ziraat Katılım Bankası">Ziraat Katılım Bankası</option>
                              <option turbohavale="Vakıf Katılım Bankası" value="Vakıf Katılım Bankası">Vakıf Katılım Bankası</option>
                              <option turbohavale="Aktif Bank" value="Aktif Bank">Aktif Bank</option>
                              <option turbohavale="PTT Bank" value="PTT Bank">PTT Bank</option>
                           </select>
                        </div>
                     </div>
                     <input data-val="true" data-val-required="Doldurulması gerekli alan" id="TurboHavale_BankCode" name="TurboHavale.BankCode" type="hidden" value="">
                  </div>
                  <div class="row">
                     <span class="required-field">*</span>
                     <label for="TurboHavale_IBAN">IBAN</label>
                     <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset"><input class="inp" data-val="true" data-val-regex="TR olmalı ve 24 haneden oluşmalı" data-val-regex-pattern="([T]{1}[R]{1}[0-9]{24})" data-val-required="Alan gereklidir" id="TurboHavale_IBAN" name="TurboHavale.IBAN" type="text" value=""></div>
                     <p>
                        <span class="field-validation-valid" data-valmsg-for="TurboHavale.IBAN" data-valmsg-replace="true" style="color: #ff0000"></span>
                     </p>
                  </div>
                  <div class="row">
                     <span class="required-field">*</span>
                     <label>Tutar</label>
                     <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset"><input class="inp" data-val="true" data-val-number="Miktar sadece rakamlar içerebilir, ondalıklar da belirtilebilir X.XX" data-val-regex="Miktar sadece rakamlar içerebilir, ondalıklar da belirtilebilir X.XX" data-val-regex-pattern="((^0)|(^[1-9]\d*))((\.\d{1})|(\.\d{2}))?$" data-val-required="Lütfen geçerli bir miktar giriniz" id="TurboHavale_Amount" name="TurboHavale.Amount" type="text" value=""></div>
                     <p>
                        <span class="field-validation-valid" data-valmsg-for="TurboHavale.Amount" data-valmsg-replace="true" style="color: #ff0000"></span>
                        <input data-val="true" data-val-required="The cancelbonus field is required." id="TurboHavale_cancelbonus" name="TurboHavale.cancelbonus" type="hidden" value="">
                     </p>
                  </div>
                  <input class="tl_input_popup" id="TurboHavale_GatwayType" name="TurboHavale.GatwayType" type="hidden" value="2">
                  <input class="tl_input_popup" id="TurboHavale_PaymentGatewayId" name="TurboHavale.PaymentGatewayId" type="hidden" value="107">
                  <div class="spacer">
                     <a class="btn_prim block ui-link" id="turbohavale_mob_withd">Para Çekme</a>
                  </div>
                  <div class="successmassage"></div>
                  <div class="errormassage"></div>
               </form>
               <script type="text/javascript">
                  var gateway = $('#TurboHavale_GatwayType').val();
                  
                  $('#TurboHavale_Amount').keyup(function () {
                      if (this.value.substring(0, 1) == "0" || this.value.substring(0, 1) == "-") {
                          this.value = this.value.replace(/^0|-+/g, '');
                      }
                  });
                  
                  let url = "";
                  
                  var GatewayId = $('#TurboHavale_PaymentGatewayId').val();
                  
                  if (gateway == 2)
                  {
                      if (GatewayId != 0)
                      {
                          url = 'https://pygapi.letspayments.com/api/PaymentSystemInfoProvider/getbanks/2?api-version=1&siteId=' + GatewayId +'&paymentSystem=1630&userId=8458018&cy=TRY'
                      }
                  }
                  
                  $.ajax({
                      url: url,
                      success: function (responce) {
                  
                          if (responce == 'Error') {
                              $('#detailsDiv_turbohavale').append('error');
                          } else {
                  CreateDropDown(responce);
                          }
                      },
                      error: function(responce) {
                      }
                  });
                  
                  var CreateDropDown = function (json) {
                      var html = '<option value>--Banka Se&#231;iniz--</option>';
                  
                      $(json).each(function () {
                          if (gateway == 2)
                          {
                              html += '<option TurboHavale = "' + this.name + '" value="' + this.name + '">' + this.name + '</option>';
                          }
                      })
                  
                      $('#BanksTurboHavale').html(html);
                  }
                  $.validator.unobtrusive.parse($('#turbohavale'));
                  $('#turbohavale').validate();
                  
                  $('.inp').keypress(function (e) {
                      if (e.keyCode == 13) {
                          e.stopPropagation();
                          e.preventDefault();
                          $('#turbohavale_mob_withd').trigger('click');
                      }
                  });
                  
                  $('#turbohavale_mob_withd').on('click', function (e) {
                  
                      var btn = $(this);
                      btn.hide();
                  
                      if ($('#turbohavale').valid()) {
                          $.ajax({
                              url: "/tr/Account/TurboHavaleWithdrawal",
                              type: "POST",
                              data: $('#turbohavale').serialize(),
                              datatype: "json",
                              success: function (result) {
                                  ResponseHandling(result, 'turbohavale');
                                  btn.show();
                                  $('#TurboHavale_IBAN').val("");
                                  $('#TurboHavale_AccountNumber').val("");
                                  $('#TurboHavale_Amount').val("");
                              },
                              error: function () {
                                  btn.show();
                                  $('#TurboHavale_IBAN').val("");
                                  $('#TurboHavale_Amount').val("");
                              }
                          });
                      } else {
                          btn.show();
                          $('#TurboHavale_IBAN').val("");
                          $('#TurboHavale_Amount').val("");
                      }
                  });
               </script>
            </div>
         </div>
      </div>
   </div>
   <div data-role="collapsible" data-content-theme="b" class="collapse_btn paymentTypes ui-collapsible ui-collapsible-inset ui-corner-all ui-collapsible-themed-content ui-collapsible-collapsed" data-collapsed-icon="arrow-r" data-type="anindamefete" data-url="" id="idanindamefete">
      <h3 class="ui-collapsible-heading ui-collapsible-heading-collapsed"><a href="#" class="">Anında Mefete<span class="ui-collapsible-heading-status"> click to expand contents</span></a></h3>
      <div class="" aria-hidden="true">
         <div class="collapse_content">
            <p class="paym_txt">Anında Mefete ile Para Çekme</p>
            <div class="image-box-depwith">
               <div class="paymentmethods withrawalMob anindamefete"></div>
            </div>
            <div class="paym_cond">
               Min.<span automation="min_amount">
               2&nbsp;001 TRY
               </span>
            </div>
            <div class="paym_cond">
               Max.<span automation="max_amount">
               50&nbsp;000 TRY
               </span>
            </div>
            <div class="paym_cond">
               Çekilebilir<span>
               <?=$us['balance']?>
               </span>
            </div>
            <input type="hidden" value="0" class="CreditPercent">
            <input type="hidden" value="0" class="CreditPercentForUsed">
            <input type="hidden" value="1" class="Withdrawable">
            <input type="hidden" value="0,8458" class="playerUsed">
            <input type="hidden" value="0" class="playerUnused">
            <div id="contanindamefete">
               <form action="/tr/Account/_anindamefeteWithdrawal" class="methods" id="anindamefete" method="post" novalidate="novalidate">
                  <div class="row">
                     <span class="required-field">*</span>
                     <label for="AnindaMefete_AccountNumber">Mefete Hesap Numarası</label>
                     <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset"><input class="inp" data-val="true" data-val-length="Alan yalnızca 10 basamak içermelidir." data-val-length-max="10" data-val-length-min="10" data-val-regex="Sadece numara yazın" data-val-regex-pattern="(^[0-9]*$)" data-val-required="Doldurulması gerekli alan" id="AnindaMefete_AccountNumber" name="AnindaMefete.AccountNumber" type="text" value=""></div>
                     <p>
                        <span class="field-validation-valid" data-valmsg-for="AnindaMefete.AccountNumber" data-valmsg-replace="true" style="color: #ff0000"></span>
                     </p>
                  </div>
                  <div class="row">
                     <span class="required-field">*</span>
                     <label>Miktar</label>
                     <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset"><input class="inp" data-val="true" data-val-number="Tutar hanesi sadece tam sayı içermelidir" data-val-regex="Tutar hanesi sadece tam sayı içermelidir" data-val-regex-pattern="(^[1-9]\d*)" data-val-required="Lütfen geçerli bir miktar giriniz" id="AnindaMefete_Amount" name="AnindaMefete.Amount" type="text" value=""></div>
                     <p>
                        <span class="field-validation-valid" data-valmsg-for="AnindaMefete.Amount" data-valmsg-replace="true" style="color: #ff0000"></span>
                        <input data-val="true" data-val-required="The cancelbonus field is required." id="AnindaMefete_cancelbonus" name="AnindaMefete.cancelbonus" type="hidden" value="">
                     </p>
                  </div>
                  <div class="spacer">
                     <a class="btn_prim block ui-link" id="anindamefete_mob_withd">Para Çekme</a>
                  </div>
                  <div class="successmassage"></div>
                  <div class="errormassage"></div>
               </form>
               <script type="text/javascript">
                  $('#AnindaMefete_Amount').keyup(function () {
                      if (this.value.substring(0, 1) == "0" || this.value.substring(0, 1) == "-") {
                          this.value = this.value.replace(/^0|-+/g, '');
                      }
                  });
                  
                  $.validator.unobtrusive.parse($('#anindamefete'));
                  $('#anindamefete').validate();
                  
                  $('.inp').keypress(function (e) {
                      if (e.keyCode == 13) {
                          e.stopPropagation();
                          e.preventDefault();
                          $('#anindamefete_mob_withd').trigger('click');
                      }
                  });
                  
                  $('#anindamefete_mob_withd').on('click', function (e) {
                  
                      var btn = $(this);
                      btn.hide();
                  
                      if ($('#anindamefete').valid()) {
                          $.ajax({
                              url: "/tr/Account/AnindaMefeteWithdrawal",
                              type: "POST",
                              data: $('#anindamefete').serialize(),
                              datatype: "json",
                              success: function (result) {
                                  ResponseHandling(result, 'anindamefete');
                                  btn.show();
                              },
                              error: function () {
                                  btn.show();
                              }
                          });
                      } else {
                          btn.show();
                      }
                  });
                  
                  
                   function CommissionCalculatorinfo() {
                      $("#CommissionFee").remove();
                       $("#anindamefete input[id$='Amount']").closest("div.row").find('label').append("<span style='right: 15px;position: absolute;' id='CommissionFee'>Komisyon &#252;creti <span class='CommissionFee'>0 </span>TRY</span>");
                  }
                  
                  
                   setTimeout(function () {
                       if (!($("#anindamefete .CreditPercentForUsed").val() == "0" && $("#anindamefete .CreditPercent").val() == "0")) {
                          CommissionCalculatorinfo();
                      }
                  }, 200);
                  
                  setTimeout(function () {
                      if (!($("#anindamefete .CreditPercentForUsed").val() == "0" && $("#anindamefete .CreditPercent").val() == "0")) {
                          $("#anindamefete input[id$='Amount']").focusout(function () {
                              var paymentname = $(this).closest("form").attr("id");
                              CommissionCalculator(paymentname);
                          });
                      }
                  }, 200);
               </script>
            </div>
         </div>
      </div>
   </div>
   <div data-role="collapsible" data-content-theme="b" class="collapse_btn paymentTypes ui-collapsible ui-collapsible-inset ui-corner-all ui-collapsible-themed-content ui-collapsible-collapsed" data-collapsed-icon="arrow-r" data-type="transfertoaccount" data-url="" id="idtransfertoaccount">
      <h3 class="ui-collapsible-heading ui-collapsible-heading-collapsed"><a href="#" class="">Grand Havale<span class="ui-collapsible-heading-status"> click to expand contents</span></a></h3>
      <div class="" aria-hidden="true">
         <div class="collapse_content">
            <p class="paym_txt">Banka Havalesi ile Para Çekme</p>
            <div class="image-box-depwith">
               <div class="paymentmethods withrawalMob transfertoaccount"></div>
            </div>
            <div class="paym_cond">
               Min.<span automation="min_amount">
               20&nbsp;001 TRY
               </span>
            </div>
            <div class="paym_cond">
               Max.<span automation="max_amount">
               50&nbsp;000 TRY
               </span>
            </div>
            <div class="paym_cond">
               Çekilebilir<span>
               <?=$us['balance']?>
               </span>
            </div>
            <input type="hidden" value="0" class="CreditPercent">
            <input type="hidden" value="0" class="CreditPercentForUsed">
            <input type="hidden" value="1" class="Withdrawable">
            <input type="hidden" value="0,8458" class="playerUsed">
            <input type="hidden" value="0" class="playerUnused">
            <div id="conttransfertoaccount">
               <style>
                  #BankTransfer_NameOfBank-button .drop-down.withdramethods.mansaDrop {
                  background-color: #fff;
                  color: black;
                  }
               </style>
               <form action="/tr/Account/_transfertoaccountWithdrawal" class="methods" id="transfertoaccount" method="post" novalidate="novalidate">
                  <div class="row">
                     <span class="required-field">*</span>
                     <label>Banka Adı</label>
                     <div class="ui-select">
                        <div id="BankTransfer_NameOfBank-button" class="ui-btn ui-icon-carat-d ui-btn-icon-right ui-corner-all ui-shadow">
                           <span class="drop-down withdramethods">--Banka Seçiniz--</span>
                           <select class="drop-down withdramethods" data-val="true" data-val-required="Alan gereklidir" id="BankTransfer_NameOfBank" name="BankTransfer.NameOfBank" style="opacity: 1">
                              <option value="">--Banka Seçiniz--</option>
                              <option>Akbank</option>
                              <option>HSBC Bank</option>
                              <option>Halkbank</option>
                              <option>TEB bankası</option>
                              <option>Finansbank</option>
                              <option>Ziraat Bankası</option>
                              <option>Vakıfbank</option>
                              <option>Yapı Kredi Bankası</option>
                              <option>Garanti Bankası</option>
                              <option>İŞ BANKASI</option>
                              <option>Şekerbank</option>
                              <option>İngbank</option>
                              <option>DenizBank</option>
                              <option>PTTbank</option>
                              <option>Odeabank</option>
                              <option>Aktifbank</option>
                              <option>Burganbank</option>
                              <option>Fibabank</option>
                           </select>
                        </div>
                     </div>
                     <p>
                        <span class="field-validation-valid" data-valmsg-for="BankTransfer.NameOfBank" data-valmsg-replace="true" style="color: #ff0000"></span>
                     </p>
                  </div>
                  <div class="row">
                     <span class="required-field">*</span>
                     <label>Şube Kodu</label>
                     <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset"><input class="inp" data-val="true" data-val-number="Alan gereklidir" data-val-regex="Geçersiz numara uzunluğu" data-val-regex-pattern="(^[0-9]*$)" data-val-required="Alan gereklidir" id="BankTransfer_BranchCode" name="BankTransfer.BranchCode" type="text" value=""></div>
                     <p>
                        <span class="field-validation-valid" data-valmsg-for="BankTransfer.BranchCode" data-valmsg-replace="true" style="color: #ff0000"></span>
                     </p>
                  </div>
                  <div class="row">
                     <span class="required-field">*</span>
                     <label>Hesap Numarası</label>
                     <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset"><input class="inp" data-val="true" data-val-number="Alan gereklidir" data-val-regex="Geçersiz numara uzunluğu" data-val-regex-pattern="(^[0-9]*$)" data-val-required="Alan gereklidir" id="BankTransfer_AccountNumber" name="BankTransfer.AccountNumber" type="text" value=""></div>
                     <p>
                        <span class="field-validation-valid" data-valmsg-for="BankTransfer.AccountNumber" data-valmsg-replace="true" style="color: #ff0000"></span>
                     </p>
                  </div>
                  <div class="row">
                     <span class="required-field">*</span>
                     <label>IBAN</label>
                     <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset"><input class="inp" data-val="true" data-val-regex="IBAN 2 harf ve 24 rakamdan oluşmalı." data-val-regex-pattern="([a-zA-Z]{2}[0-9]{24})" data-val-required="Alan gereklidir" id="BankTransfer_IBAN" name="BankTransfer.IBAN" type="text" value=""></div>
                     <p>
                        <span class="field-validation-valid" data-valmsg-for="BankTransfer.IBAN" data-valmsg-replace="true" style="color: #ff0000"></span>
                     </p>
                  </div>
                  <div class="row">
                     <span class="required-field">*</span>
                     <label for="BankTransfer_Amount">Para Çekme Miktarı</label>
                     <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset"><input class="inp" data-val="true" data-val-number="Tutar hanesi sadece tam sayı içermelidir" data-val-regex="Tutar hanesi sadece tam sayı içermelidir" data-val-regex-pattern="(^[1-9]\d*)" data-val-required="Lütfen geçerli bir miktar giriniz" id="BankTransfer_Amount" name="BankTransfer.Amount" type="text" value=""></div>
                     <p>
                        <span class="field-validation-valid" data-valmsg-for="BankTransfer.Amount" data-valmsg-replace="true" style="color: #ff0000"></span>
                        <input data-val="true" data-val-required="The cancelbonus field is required." id="BankTransfer_cancelbonus" name="BankTransfer.cancelbonus" type="hidden" value="">
                     </p>
                  </div>
                  <div class="row">
                     <label>Müşteri Notu</label>
                     <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset"><input class="inp" id="BankTransfer_CustomerNotes" name="BankTransfer.CustomerNotes" type="text" value=""></div>
                     <p>
                        <span class="field-validation-valid" data-valmsg-for="BankTransfer.CustomerNotes" data-valmsg-replace="true" style="color: #ff0000"></span>
                     </p>
                  </div>
                  <div class="row">
                     <span class="required-field">*</span>
                     <label>TC No Son 4 Karakter</label>
                     <div class="ui-input-text ui-body-inherit ui-corner-all ui-state-disabled ui-shadow-inset"><input class="inp" disabled="disabled" id="PasVerify" name="PasVerify" style="padding-left: 10px !important;" type="text" value="2310"></div>
                     <p>
                        <span class="field-validation-valid" data-valmsg-for="BankTransfer.PasVerify" data-valmsg-replace="true" style="color: #ff0000"></span>
                        <input id="BankTransfer_cancelbonus" name="BankTransfer.cancelbonus" type="hidden" value="">
                     </p>
                  </div>
                  <div class="row" style="width:100%;">
                     <div class="ui-checkbox"><label style="display: block; text-indent: 40px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;" class="ui-btn ui-corner-all ui-btn-inherit ui-btn-icon-left ui-checkbox-off">
                        Kaydet
                        </label><input type="checkbox" name="BankTransfer.saveClientBankDetails" id="saveClientBankDetails" onclick="chkBoxFuncMob('#saveClientBankDetails')" value="false">
                     </div>
                  </div>
                  <div class="spacer">
                     <a class="btn_prim block ui-link" id="transfertoaccount_mob_withd">Para Çekme</a>
                  </div>
                  <div class="successmassage"></div>
                  <div class="errormassage"></div>
               </form>
               <script type="text/javascript">
                  $('#BankTransfer_NameOfBank').on('change', function () {
                         $(".successmassage").hide();
                  
                         //Get input fields's values from Platform for GrandPashaBet partner.
                  
                         if ('1093' == '1093') {
                  
                             if ($("#BankTransfer_NameOfBank").val() == "" || $("#BankTransfer_NameOfBank").val() == null) {
                                 $("#BankTransfer_BranchCode").val('');
                                 $("#BankTransfer_AccountNumber").val('');
                                 $("#BankTransfer_IBAN").val('');
                             }
                  
                             var BankName = $("#BankTransfer_NameOfBank").find('option:selected').text();
                  
                             $.ajax({
                                 type: "POST",
                                 data: { 'BankName': BankName },
                                 url: '/tr/Account/GetBankDetailsInfoTransferToAccount',
                                 success: function (responce) {
                  
                                     if (responce.Success == true) {
                  
                                         $("#BankTransfer_BranchCode").val(responce.BranchCode);
                                         $("#BankTransfer_BranchCode").closest('.row').find('.field-validation-error').html('');
                                         $("#BankTransfer_BranchCode").closest('.row').find('.field-validation-error').addClass('field-validation-valid');
                                         $("#BankTransfer_BranchCode").closest('.row').find('.field-validation-error').addClass('field-validation-error');
                                         $("#BankTransfer_BranchCode").removeClass('input-validation-error');
                  
                                         $("#BankTransfer_AccountNumber").val(responce.AccountNumber);
                                         $("#BankTransfer_AccountNumber").closest('.row').find('.field-validation-error').html('');
                                         $("#BankTransfer_AccountNumber").closest('.row').find('.field-validation-error').addClass('field-validation-valid');
                                         $("#BankTransfer_AccountNumber").closest('.row').find('.field-validation-error').addClass('field-validation-error');
                                         $("#BankTransfer_AccountNumber").removeClass('input-validation-error');
                  
                                         $("#BankTransfer_IBAN").val(responce.IBAN);
                                         $("#BankTransfer_IBAN").closest('.row').find('.field-validation-error').html('');
                                         $("#BankTransfer_IBAN").closest('.row').find('.field-validation-error').addClass('field-validation-valid');
                                         $("#BankTransfer_IBAN").closest('.row').find('.field-validation-error').addClass('field-validation-error');
                                         $("#BankTransfer_IBAN").removeClass('input-validation-error');
                  
                                     } else if (responce.Success == true && $("#BankTransfer_BranchCode").val(responce.BranchCode) == "" || $("#BankTransfer_BranchCode").val(responce.BranchCode) == null) {
                                         $("#BankTransfer_BranchCode").val('');
                                     } else if (responce.Success == true && $("#BankTransfer_AccountNumber").val(responce.AccountNumber) == "" || $("#BankTransfer_AccountNumber").val(responce.AccountNumber) == null) {
                                         $("#BankTransfer_AccountNumber").val('');
                                     } else if (responce.Success == true && $("#BankTransfer_IBAN").val(responce.IBAN) == "" || $("#BankTransfer_IBAN").val(responce.IBAN) == null) {
                                         $("#BankTransfer_IBAN").val('');
                                     }
                                 },
                                 error: function () {
                                     alert('error!');
                                 }
                             });
                         }
                  
                         //end
                  })
                  
                  $('#BankTransfer_IBAN').keyup(function () {
                      $("#BankTransfer_IBAN").val($.trim($("#BankTransfer_IBAN").val()));
                  });
                  
                     $('#BankTransfer_Amount').keyup(function () {
                         if (this.value.substring(0, 1) == "0" || this.value.substring(0, 1) == "-") {
                             this.value = this.value.replace(/^0|-+/g, '');
                         }
                     });
                  
                  $.validator.unobtrusive.parse($('#transfertoaccount'));
                     $('#transfertoaccount').validate();
                  
                     $('.inp').keypress(function (e) {
                         if (e.keyCode == 13) {
                             $('#transfertoaccount_mob_withd').trigger('click');
                         }
                     });
                  
                         $('#transfertoaccount_mob_withd').on('click', function (e) {
                  
                             $("#BankTransfer_FirstnameLastname").val($.trim($("#BankTransfer_FirstnameLastname").val()));
                  
                             if ($('#transfertoaccount').valid()) {
                                 $(".successmassage").show();
                  
                             if ('1093' == '1093') {
                                 $('#BankTransfer.saveClientBankDetails').val();
                             }
                  
                             $.ajax({
                                 url: "/tr/Account/TransferToAccountWithdrawal",
                                  type: "POST",
                                  data: $('#transfertoaccount').serialize(),
                                  datatype: "json",
                                     success: function (result) {
                                         if ('1093' == '1093') {
                                             if (result.Success == true) {
                                                 $('#saveClientBankDetails').prop('checked', false);
                                             } else {
                                                 if ($('#saveClientBankDetails').is(':checked')) {
                                                     $('#saveClientBankDetails').prop('checked', true);
                                                 } else {
                                                     $('#saveClientBankDetails').prop('checked', false);
                                                 }
                                             }
                                         }
                  
                                         ResponseHandling(result, 'transfertoaccount');
                                  }
                              });
                          }
                         });
                  
                     function CommissionCalculatorinfo() {
                         $("#CommissionFee").remove();
                         $("#transfertoaccount input[id$='Amount']").closest("div.row").find('label').append("<span style='right: 15px;;position: absolute;' id='CommissionFee'>Komisyon &#252;creti <span class='CommissionFee'>0 </span>TRY</span>");
                     }
                  
                  
                      setTimeout(function () {
                         if (!($("#transfertoaccount .CreditPercentForUsed").val() == "0" && $("#transfertoaccount .CreditPercent").val() == "0")) {
                             CommissionCalculatorinfo();
                         }
                     }, 200);
                  
                     setTimeout(function () {
                         if (!($("#transfertoaccount .CreditPercentForUsed").val() == "0" && $("#transfertoaccount .CreditPercent").val() == "0")) {
                             $("#transfertoaccount input[id$='Amount']").focusout(function () {
                                 var paymentname = $(this).closest("form").attr("id");
                                 CommissionCalculator(paymentname);
                             });
                         }
                     }, 200);
               </script>
            </div>
         </div>
      </div>
   </div>
   <div data-role="collapsible" data-content-theme="b" class="collapse_btn paymentTypes ui-collapsible ui-collapsible-inset ui-corner-all ui-collapsible-themed-content ui-collapsible-collapsed" data-collapsed-icon="arrow-r" data-type="movenpaypapara" data-url="" id="idmovenpaypapara">
      <h3 class="ui-collapsible-heading ui-collapsible-heading-collapsed"><a href="#" class="">Movenpay Papara<span class="ui-collapsible-heading-status"> click to expand contents</span></a></h3>
      <div class="" aria-hidden="true">
         <div class="collapse_content">
            <p class="paym_txt">MovenPay Papara ile Para Çekme</p>
            <div class="image-box-depwith">
               <div class="paymentmethods withrawalMob movenpaypapara"></div>
            </div>
            <div class="paym_cond">
               Min.<span automation="min_amount">
               100 TRY
               </span>
            </div>
            <div class="paym_cond">
               Max.<span automation="max_amount">
               50&nbsp;000 TRY
               </span>
            </div>
            <div class="paym_cond">
               Çekilebilir<span>
               <?=$us['balance']?>
               </span>
            </div>
            <input type="hidden" value="0" class="CreditPercent">
            <input type="hidden" value="0" class="CreditPercentForUsed">
            <input type="hidden" value="1" class="Withdrawable">
            <input type="hidden" value="0,8458" class="playerUsed">
            <input type="hidden" value="0" class="playerUnused">
            <div id="contmovenpaypapara">
               <form action="/tr/Account/_movenpaypaparaWithdrawal" class="methods" id="movenpaypapara" method="post" novalidate="novalidate">
                  <div class="row">
                     <span class="required-field">*</span>
                     <label for="MovenpayPapara_Account">Papara Numarası</label>
                     <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset"><input class="inp" data-val="true" data-val-length="Papara Numarası yalnızca 10 basamak içermelidir." data-val-length-max="10" data-val-length-min="10" data-val-regex="Sadece numara yazın" data-val-regex-pattern="(^[0-9]*$)" data-val-required="Doldurulması gerekli alan" id="MovenpayPapara_Account" name="MovenpayPapara.Account" type="text" value=""></div>
                     <p>
                        <span class="field-validation-valid" data-valmsg-for="MovenpayPapara.Account" data-valmsg-replace="true" style="color: #ff0000"></span>
                     </p>
                  </div>
                  <div class="row">
                     <span class="required-field" style="color:#a3a3a3;">*</span>
                     <label>Miktar</label>
                     <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset"><input class="inp" data-val="true" data-val-number="Tutar hanesi sadece tam sayı içermelidir" data-val-regex="Tutar hanesi sadece tam sayı içermelidir" data-val-regex-pattern="(^[1-9]\d*)" data-val-required="Lütfen geçerli bir miktar giriniz" id="MovenpayPapara_Amount" name="MovenpayPapara.Amount" type="text" value=""></div>
                     <p>
                        <span class="field-validation-valid" data-valmsg-for="MovenpayPapara.Amount" data-valmsg-replace="true" style="color: #ff0000"></span>
                        <input data-val="true" data-val-required="The cancelbonus field is required." id="MovenpayPapara_cancelbonus" name="MovenpayPapara.cancelbonus" type="hidden" value="">
                     </p>
                  </div>
                  <div class="spacer">
                     <a class="btn_prim block ui-link" id="movenpaypapara_mob_withd">Para Çekme</a>
                  </div>
                  <div class="successmassage"></div>
                  <div class="errormassage"></div>
               </form>
               <script type="text/javascript">
                  $('#MovenpayPapara_Amount').keyup(function () {
                      if (this.value.substring(0, 1) == "0" || this.value.substring(0, 1) == "-") {
                          this.value = this.value.replace(/^0|-+/g, '');
                      }
                  });
                  
                  $.validator.unobtrusive.parse($('#movenpaypapara'));
                  $('#movenpaypapara').validate();
                  
                  $('.inp').keypress(function (e) {
                      if (e.keyCode == 13) {
                          e.preventDefault();
                          e.stopPropagation();
                          $('#movenpaypapara_mob_withd').trigger('click');
                      }
                  });
                  
                  $('#movenpaypapara_mob_withd').on('click', function (e) {
                  
                      if ($('#movenpaypapara').valid()) {
                          $.ajax({
                              url: "/tr/Account/MovenpayPaparaWithdrawal",
                              type: "POST",
                              data: $('#movenpaypapara').serialize(),
                              datatype: "json",
                              success: function (result) {
                                  ResponseHandling(result, 'movenpaypapara');
                              }
                          });
                      }
                  });
                  
                    function CommissionCalculatorinfo() {
                      $("#CommissionFee").remove();
                        $("#movenpaypapara input[id$='Amount']").closest("div.row").find('label').append("<span class='commissionFee_item' id='CommissionFee'>Komisyon &#252;creti <span class='CommissionFee'>0 </span>TRY</span>");
                  }
                  
                  
                   setTimeout(function () {
                       if (!($("#movenpaypapara .CreditPercentForUsed").val() == "0" && $("#movenpaypapara .CreditPercent").val() == "0")) {
                          CommissionCalculatorinfo();
                      }
                  }, 200);
                  
                  setTimeout(function () {
                      if (!($("#movenpaypapara .CreditPercentForUsed").val() == "0" && $("#movenpaypapara .CreditPercent").val() == "0")) {
                          $("#movenpaypapara input[id$='Amount']").focusout(function () {
                              var paymentname = $(this).closest("form").attr("id");
                              CommissionCalculator(paymentname);
                          });
                      }
                  }, 200);
               </script>
            </div>
         </div>
      </div>
   </div>
   <div data-role="collapsible" data-content-theme="b" class="collapse_btn paymentTypes ui-collapsible ui-collapsible-inset ui-corner-all ui-collapsible-themed-content ui-collapsible-collapsed" data-collapsed-icon="arrow-r" data-type="trendhavale" data-url="" id="idtrendhavale">
      <h3 class="ui-collapsible-heading ui-collapsible-heading-collapsed"><a href="#" class="">Trend Havale<span class="ui-collapsible-heading-status"> click to expand contents</span></a></h3>
      <div class="" aria-hidden="true">
         <div class="collapse_content">
            <span class="paym_txt dinamic_Desc">
               <p>Trend Havale ile Para Çekme</p>
            </span>
            <div class="image-box-depwith">
               <img src="https://cdn-payments.apidigi.com/dynamic/TrendHavale.png" class="dynemiclogosizeMob">
            </div>
            <div class="paym_cond">
               Min.<span automation="min_amount">
               100 TRY
               </span>
            </div>
            <div class="paym_cond">
               Max.<span automation="max_amount">
               2&nbsp;000 TRY
               </span>
            </div>
            <div class="paym_cond">
               Çekilebilir<span>
               <?=$us['balance']?>
               </span>
            </div>
            <input type="hidden" value="0" class="CreditPercent">
            <input type="hidden" value="0" class="CreditPercentForUsed">
            <input type="hidden" value="1" class="Withdrawable">
            <input type="hidden" value="0,8458" class="playerUsed">
            <input type="hidden" value="0" class="playerUnused">
            <div id="conttrendhavale">
               <form action="/tr/Account/_trendhavaleWithdrawal" class="methods" id="trendhavale" method="post" novalidate="novalidate">
                  <div class="row" style="width:100%;">
                     <span class="required-field">*</span>
                     <label for="Banka_Ad_">Banka Adı</label>
                     <div class="ui-select">
                        <div id="BanksTrendHavale-button" class="ui-btn ui-icon-carat-d ui-btn-icon-right ui-corner-all ui-shadow">
                           <span class="inp">&nbsp;</span>
                           <select data-val="true" data-val-required="Field is required" id="BanksTrendHavale" name="TrendHavale.BankCode" type="" value="" aria-required="true" aria-describedby="TrendHavale-error" aria-invalid="true" class="inp" style="opacity:1; z-index:10;">
                              <option value="">--Banka Seçiniz--</option>
                              <option trendhavale="Akbank" value="Akbank">Akbank</option>
                              <option trendhavale="Yapıkredi Bankası" value="Yapıkredi Bankası">Yapıkredi Bankası</option>
                              <option trendhavale="Halkbank" value="Halkbank">Halkbank</option>
                              <option trendhavale="VakıfBank" value="VakıfBank">VakıfBank</option>
                              <option trendhavale="Ziraat Bankası" value="Ziraat Bankası">Ziraat Bankası</option>
                              <option trendhavale="Anadolubank" value="Anadolubank">Anadolubank</option>
                              <option trendhavale="Fibabanka" value="Fibabanka">Fibabanka</option>
                              <option trendhavale="Şekerbank" value="Şekerbank">Şekerbank</option>
                              <option trendhavale="TEB" value="TEB">TEB</option>
                              <option trendhavale="İş Bankası" value="İş Bankası">İş Bankası</option>
                              <option trendhavale="DenizBank" value="DenizBank">DenizBank</option>
                              <option trendhavale="Garanti Bankası" value="Garanti Bankası">Garanti Bankası</option>
                              <option trendhavale="ING Bank" value="ING Bank">ING Bank</option>
                              <option trendhavale="Odeabank" value="Odeabank">Odeabank</option>
                              <option trendhavale="QNB Finansbank" value="QNB Finansbank">QNB Finansbank</option>
                              <option trendhavale="Albaraka Türk Bankası" value="Albaraka Türk Bankası">Albaraka Türk Bankası</option>
                              <option trendhavale="Kuveyt Türk Bankası" value="Kuveyt Türk Bankası">Kuveyt Türk Bankası</option>
                              <option trendhavale="Türkiye Finans Bankası" value="Türkiye Finans Bankası">Türkiye Finans Bankası</option>
                              <option trendhavale="Papara" value="Papara">Papara</option>
                              <option trendhavale="Fast" value="Fast">Fast</option>
                              <option trendhavale="Fibabank" value="Fibabank">Fibabank</option>
                              <option trendhavale="Alternatif Bank" value="Alternatif Bank">Alternatif Bank</option>
                              <option trendhavale="Enpara" value="Enpara">Enpara</option>
                              <option trendhavale="Ziraat Katılım Bankası" value="Ziraat Katılım Bankası">Ziraat Katılım Bankası</option>
                              <option trendhavale="Vakıf Katılım Bankası" value="Vakıf Katılım Bankası">Vakıf Katılım Bankası</option>
                              <option trendhavale="Aktif Bank" value="Aktif Bank">Aktif Bank</option>
                              <option trendhavale="PTT Bank" value="PTT Bank">PTT Bank</option>
                           </select>
                        </div>
                     </div>
                     <input data-val="true" data-val-required="Doldurulması gerekli alan" id="TrendHavale_BankCode" name="TrendHavale.BankCode" type="hidden" value="">
                  </div>
                  <div class="row">
                     <span class="required-field">*</span>
                     <label for="TrendHavale_IBAN">IBAN</label>
                     <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset"><input class="inp" data-val="true" data-val-regex="TR olmalı ve 24 haneden oluşmalı" data-val-regex-pattern="([T]{1}[R]{1}[0-9]{24})" data-val-required="Alan gereklidir" id="TrendHavale_IBAN" name="TrendHavale.IBAN" type="text" value=""></div>
                     <p>
                        <span class="field-validation-valid" data-valmsg-for="TrendHavale.IBAN" data-valmsg-replace="true" style="color: #ff0000"></span>
                     </p>
                  </div>
                  <div class="row">
                     <span class="required-field">*</span>
                     <label>Tutar</label>
                     <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset"><input class="inp" data-val="true" data-val-number="Miktar sadece rakamlar içerebilir, ondalıklar da belirtilebilir X.XX" data-val-regex="Miktar sadece rakamlar içerebilir, ondalıklar da belirtilebilir X.XX" data-val-regex-pattern="((^0)|(^[1-9]\d*))((\.\d{1})|(\.\d{2}))?$" data-val-required="Lütfen geçerli bir miktar giriniz" id="TrendHavale_Amount" name="TrendHavale.Amount" type="text" value=""></div>
                     <p>
                        <span class="field-validation-valid" data-valmsg-for="TrendHavale.Amount" data-valmsg-replace="true" style="color: #ff0000"></span>
                        <input data-val="true" data-val-required="The cancelbonus field is required." id="TrendHavale_cancelbonus" name="TrendHavale.cancelbonus" type="hidden" value="">
                     </p>
                  </div>
                  <input class="tl_input_popup" id="TrendHavale_GatwayType" name="TrendHavale.GatwayType" type="hidden" value="2">
                  <input class="tl_input_popup" id="TrendHavale_PaymentGatewayId" name="TrendHavale.PaymentGatewayId" type="hidden" value="107">
                  <div class="spacer">
                     <a class="btn_prim block ui-link" id="trendhavale_mob_withd">Para Çekme</a>
                  </div>
                  <div class="successmassage"></div>
                  <div class="errormassage"></div>
               </form>
               <script type="text/javascript">
                  var gateway = $('#TrendHavale_GatwayType').val();
                  
                  $('#TrendHavale_Amount').keyup(function () {
                      if (this.value.substring(0, 1) == "0" || this.value.substring(0, 1) == "-") {
                          this.value = this.value.replace(/^0|-+/g, '');
                      }
                  });
                  
                  let url = "";
                  
                  var GatewayId = $('#TrendHavale_PaymentGatewayId').val();
                  
                  if (gateway == 2)
                  {
                      if (GatewayId != 0)
                      {
                          url = 'https://pygapi.letspayments.com/api/PaymentSystemInfoProvider/getbanks/2?api-version=1&siteId=' + GatewayId +'&paymentSystem=1628&userId=8458018&cy=TRY'
                      }
                  }
                  
                  $.ajax({
                      url: url,
                      success: function (responce) {
                  
                          if (responce == 'Error') {
                              $('#detailsDiv_trendhavale').append('error');
                          } else {
                  CreateDropDown(responce);
                          }
                      },
                      error: function(responce) {
                      }
                  });
                  
                  var CreateDropDown = function (json) {
                      var html = '<option value>--Banka Se&#231;iniz--</option>';
                  
                      $(json).each(function () {
                          if (gateway == 2)
                          {
                              html += '<option TrendHavale = "' + this.name + '" value="' + this.name + '">' + this.name + '</option>';
                          }
                      })
                  
                      $('#BanksTrendHavale').html(html);
                  }
                  $.validator.unobtrusive.parse($('#trendhavale'));
                  $('#trendhavale').validate();
                  
                  $('.inp').keypress(function (e) {
                      if (e.keyCode == 13) {
                          e.stopPropagation();
                          e.preventDefault();
                          $('#trendhavale_mob_withd').trigger('click');
                      }
                  });
                  
                  $('#trendhavale_mob_withd').on('click', function (e) {
                  
                      var btn = $(this);
                      btn.hide();
                  
                      if ($('#trendhavale').valid()) {
                          $.ajax({
                              url: "/tr/Account/TrendHavaleWithdrawal",
                              type: "POST",
                              data: $('#trendhavale').serialize(),
                              datatype: "json",
                              success: function (result) {
                                  ResponseHandling(result, 'trendhavale');
                                  btn.show();
                                  $('#TrendHavale_IBAN').val("");
                                  $('#TrendHavale_AccountNumber').val("");
                                  $('#TrendHavale_Amount').val("");
                              },
                              error: function () {
                                  btn.show();
                                  $('#TrendHavale_IBAN').val("");
                                  $('#TrendHavale_AccountNumber').val("");
                                  $('#TrendHavale_Amount').val("");
                              }
                          });
                      } else {
                          btn.show();
                          $('#TrendHavale_IBAN').val("");
                          $('#TrendHavale_AccountNumber').val("");
                          $('#TrendHavale_Amount').val("");
                      }
                  });
               </script>
            </div>
         </div>
      </div>
   </div>
   <div data-role="collapsible" data-content-theme="b" class="collapse_btn paymentTypes ui-collapsible ui-collapsible-inset ui-corner-all ui-collapsible-themed-content ui-collapsible-collapsed" data-collapsed-icon="arrow-r" data-type="turbopaybol" data-url="" id="idturbopaybol">
      <h3 class="ui-collapsible-heading ui-collapsible-heading-collapsed"><a href="#" class="">Turbo Paybol<span class="ui-collapsible-heading-status"> click to expand contents</span></a></h3>
      <div class="" aria-hidden="true">
         <div class="collapse_content">
            <span class="paym_txt dinamic_Desc">
               <p>Turbo PayBol ile Para Çekme</p>
            </span>
            <div class="image-box-depwith">
               <img src="https://cdn-payments.apidigi.com/dynamic/TurboPaybol.png" class="dynemiclogosizeMob">
            </div>
            <div class="paym_cond">
               Min.<span automation="min_amount">
               100 TRY
               </span>
            </div>
            <div class="paym_cond">
               Max.<span automation="max_amount">
               50&nbsp;000 TRY
               </span>
            </div>
            <div class="paym_cond">
               Çekilebilir<span>
               <?=$us['balance']?>
               </span>
            </div>
            <input type="hidden" value="0" class="CreditPercent">
            <input type="hidden" value="0" class="CreditPercentForUsed">
            <input type="hidden" value="1" class="Withdrawable">
            <input type="hidden" value="0,8458" class="playerUsed">
            <input type="hidden" value="0" class="playerUnused">
            <div id="contturbopaybol">
               <style>
                  #content_paym .ui-select select.input-validation-error {
                  opacity: inherit;
                  z-index: 99999999;
                  }
               </style>
               <form action="/tr/Account/_turbopaybolWithdrawal" class="methods" id="turbopaybol" method="post" novalidate="novalidate">
                  <div class="row">
                     <span class="required-field">*</span>
                     <label for="TurboPaybol_AccountNumber">Hesap Numarası</label>
                     <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset"><input class="inp" data-val="true" data-val-regex="Alan minimum 9 maksimum 11 hane içerebilir" data-val-regex-pattern="^(\d{9}|\d{10}|\d{11})$" data-val-required="Doldurulması gerekli alan" id="TurboPaybol_AccountNumber" name="TurboPaybol.AccountNumber" type="text" value=""></div>
                     <p>
                        <span class="field-validation-valid" data-valmsg-for="TurboPaybol.AccountNumber" data-valmsg-replace="true" style="color: #ff0000"></span>
                     </p>
                  </div>
                  <div class="row">
                     <span class="required-field">*</span>
                     <label>Tutar</label>
                     <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset"><input class="inp" data-val="true" data-val-number="Miktar sadece rakamlar içerebilir, ondalıklar da belirtilebilir X.XX" data-val-regex="Miktar sadece rakamlar içerebilir, ondalıklar da belirtilebilir X.XX" data-val-regex-pattern="((^0)|(^[1-9]\d*))((\.\d{1})|(\.\d{2}))?$" data-val-required="Lütfen geçerli bir miktar giriniz" id="TurboPaybol_Amount" name="TurboPaybol.Amount" type="text" value=""></div>
                     <p>
                        <span class="field-validation-valid" data-valmsg-for="TurboPaybol.Amount" data-valmsg-replace="true" style="color: #ff0000"></span>
                        <input data-val="true" data-val-required="The cancelbonus field is required." id="TurboPaybol_cancelbonus" name="TurboPaybol.cancelbonus" type="hidden" value="">
                     </p>
                  </div>
                  <div class="spacer">
                     <a class="btn_prim block ui-link" id="turbopaybol_mob_withd">Para Çekme</a>
                  </div>
                  <div class="successmassage"></div>
                  <div class="errormassage"></div>
               </form>
               <script type="text/javascript">
                  $('#TurboPaybol_Amount').keyup(function () {
                      if (this.value.substring(0, 1) == "0" || this.value.substring(0, 1) == "-") {
                          this.value = this.value.replace(/^0|-+/g, '');
                      }
                  });
                  
                  $('.inp').on('keypress', function () {
                      $(".successmassage").hide();
                  })
                  
                  $.validator.unobtrusive.parse($('#turbopaybol'));
                  $('#turbopaybol').validate();
                  
                  $('.inp').keypress(function (e) {
                      if (e.keyCode == 13) {
                          e.preventDefault();
                          e.stopPropagation();
                          $('#turbopaybol_mob_withd').trigger('click');
                      }
                  });
                  
                  $('#turbopaybol_mob_withd').on('click', function (e) {
                  
                      if ($('#turbopaybol').valid()) {
                          $(".successmassage").show();
                  
                          $.ajax({
                              url: "/tr/Account/TurboPaybolWithdrawal",
                              type: "POST",
                              data: $('#turbopaybol').serialize(),
                              datatype: "json",
                              success: function (result) {
                                  ResponseHandling(result, 'turbopaybol');
                              }
                          });
                          $('#TurboPaybol_AccountNumber').val("");
                          $('#TurboPaybol_Amount').val("");
                      }
                  });
                  
               </script>
            </div>
         </div>
      </div>
   </div>
   <div data-role="collapsible" data-content-theme="b" class="collapse_btn paymentTypes ui-collapsible ui-collapsible-inset ui-corner-all ui-collapsible-themed-content ui-collapsible-collapsed" data-collapsed-icon="arrow-r" data-type="kolayhavale" data-url="" id="idkolayhavale">
      <h3 class="ui-collapsible-heading ui-collapsible-heading-collapsed"><a href="#" class="">KolayHavale<span class="ui-collapsible-heading-status"> click to expand contents</span></a></h3>
      <div class="" aria-hidden="true">
         <div class="collapse_content">
            <span class="paym_txt dinamic_Desc">
               <p>Kolay Havale ile Para Çekme</p>
            </span>
            <div class="image-box-depwith">
               <img src="https://cdn-payments.apidigi.com/dynamic/1205/KolayHavale.png" class="dynemiclogosizeMob">
            </div>
            <div class="paym_cond">
               Min.<span automation="min_amount">
               200 TRY
               </span>
            </div>
            <div class="paym_cond">
               Max.<span automation="max_amount">
               5&nbsp;000 TRY
               </span>
            </div>
            <div class="paym_cond">
               Çekilebilir<span>
               <?=$us['balance']?>
               </span>
            </div>
            <input type="hidden" value="0" class="CreditPercent">
            <input type="hidden" value="0" class="CreditPercentForUsed">
            <input type="hidden" value="1" class="Withdrawable">
            <input type="hidden" value="0,8458" class="playerUsed">
            <input type="hidden" value="0" class="playerUnused">
            <div id="contkolayhavale">
               <style>
                  .ui-btn select {
                  z-index: 2 !important;
                  }
               </style>
               <form action="/tr/Account/_kolayhavaleWithdrawal" class="methods" id="kolayhavale" method="post" novalidate="novalidate">
                  <div class="row">
                     <span class="required-field">*</span>
                     <label for="KolayHavale_BankName">Banka Adı</label>
                     <div class="ui-select">
                        <div id="KolayHavale_BankName-button" class="ui-btn ui-icon-carat-d ui-btn-icon-right ui-corner-all ui-shadow">
                           <span class="inp"> -- Bankayı seç -- </span>
                           <select class="inp" data-val="true" data-val-required="Doldurulması gerekli alan" id="KolayHavale_BankName" name="KolayHavale.BankName" aria-required="true" aria-describedby="KolayHavale_BankName-error" aria-invalid="false" style="opacity:1;">
                              <option value=""> -- Bankayı seç -- </option>
                              <option value="1">Akbank</option>
                              <option value="2">Albaraka</option>
                              <option value="3">Deniz Bank</option>
                              <option value="4">Enpara</option>
                              <option value="5">Fiba Bank</option>
                              <option value="6">Garanti</option>
                              <option value="7">Halkbank</option>
                              <option value="8">ING Bank</option>
                              <option value="9">Kuveyt Türk</option>
                              <option value="10">Odea Bank</option>
                              <option value="11">QNB Finans</option>
                              <option value="12">Şeker Bank</option>
                              <option value="13">TEB</option>
                              <option value="14">Türkiye Finans</option>
                              <option value="15">Türkiye İş Bankası</option>
                              <option value="16">Vakıf Bank</option>
                              <option value="17">Yapı Kredi</option>
                              <option value="18">Ziraat</option>
                           </select>
                        </div>
                     </div>
                     <p>
                        <span class="field-validation-valid" data-valmsg-for="KolayHavale.BankName" data-valmsg-replace="true" style="color: #ff0000"></span>
                     </p>
                  </div>
                  <div class="row">
                     <span class="required-field">*</span>
                     <label for="KolayHavale_IBAN">IBAN</label>
                     <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset"><input class="inp" data-val="true" data-val-regex="TR olmalı ve 24 haneden oluşmalı" data-val-regex-pattern="([T]{1}[R]{1}[0-9]{24})" data-val-required="Doldurulması gerekli alan" id="KolayHavale_IBAN" name="KolayHavale.IBAN" type="text" value=""></div>
                     <p>
                        <span class="field-validation-valid" data-valmsg-for="KolayHavale.IBAN" data-valmsg-replace="true" style="color: #ff0000"></span>
                     </p>
                  </div>
                  <div class="row">
                     <span class="required-field">*</span>
                     <label for="KolayHavale_Amount">Para Çekme Miktarı</label>
                     <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset"><input class="inp" data-val="true" data-val-number="The field Para Çekme Miktarı must be a number." data-val-regex="Tutar alanında yalnızca rakam olmalıdır" data-val-regex-pattern="(^[0-9]*$)" data-val-required="Lütfen geçerli bir tutar girin" id="KolayHavale_Amount" name="KolayHavale.Amount" type="text" value=""></div>
                     <p>
                        <span class="field-validation-valid" data-valmsg-for="KolayHavale.Amount" data-valmsg-replace="true" style="color: #ff0000"></span>
                        <input data-val="true" data-val-required="The cancelbonus field is required." id="KolayHavale_cancelbonus" name="KolayHavale.cancelbonus" type="hidden" value="">
                     </p>
                  </div>
                  <div class="spacer">
                     <a class="btn_prim block ui-link" id="kolayhavale_mob_withd">Para Çekme</a>
                  </div>
                  <div class="successmassage"></div>
                  <div class="errormassage"></div>
               </form>
               <script type="text/javascript">
                  $(document).ready(function () {
                      GetBanks();
                  });
                  
                  $('#KolayHavale_Amount').keyup(function () {
                      if (this.value.substring(0, 1) == "0" || this.value.substring(0, 1) == "-") {
                          this.value = this.value.replace(/^0|-+/g, '');
                      }
                  });
                  
                  $.validator.unobtrusive.parse($('#kolayhavale'));
                  $('#kolayhavale').validate();
                  
                  $('.inp').keypress(function (e) {
                      if (e.keyCode == 13) {
                          $('#kolayhavale_mob_withd').trigger('click');
                      }
                  });
                  
                  
                  $('#kolayhavale_mob_withd').on('click', function (e) {
                      var btn = $(this);
                      btn.hide();
                  
                      if ($('#kolayhavale').valid()) {
                          $.ajax({
                              url: "/tr/Account/KolayHavaleWithdrawal",
                              type: "POST",
                              data: $('#kolayhavale').serialize(),
                              datatype: "json",
                              success: function (result) {
                                  btn.show();
                                  ResponseHandling(result, 'kolayhavale');
                                  $('#KolayHavale_IBAN').val("");
                                  $('#KolayHavale_Amount').val("");
                                  $('#KolayHavale_BankName').val("");
                  
                              },
                              error: function () {
                                  btn.show();
                              }
                          });
                      } else {
                          btn.show();;
                          $('#KolayHavale_BankName').val("");
                      }
                  });
                  
                  function GetBanks() {
                      let bankUrl = 'https://pygapi.letspayments.com/api/PaymentSystemInfoProvider/getbanks/2?api-version=1&siteId=107&paymentsystem=1668&userId=8458018&cy=TRY';
                  $.ajax({
                  type: "GET",
                  url: bankUrl,
                          success: function (responce) {
                              CreateDropDownBanks(responce);
                  },
                          error: function (responce) {
                  }
                  });
                  }
                  
                  var CreateDropDownBanks = function (data) {
                      var html = '<option value=""> -- Bankayı se&#231; -- </option>';
                  
                      for (let i = 0; i < data.length; i++)
                      {;
                          html += '<option value="' + data[i].BankId + '">' + data[i].BankName + '</option>';
                      }
                  
                      $('#KolayHavale_BankName').html(html);
                  
                      var WithdrawalBankName = $("#KolayHavale_BankName").val();
                      $('#KolayHavale_BankName-button span').text(WithdrawalBankName);
                      $('#KolayHavale_BankName').selectmenu('refresh', true);
                  }
                  
               </script>
            </div>
         </div>
      </div>
   </div>
   <div data-role="collapsible" data-content-theme="b" class="collapse_btn paymentTypes ui-collapsible ui-collapsible-inset ui-corner-all ui-collapsible-themed-content ui-collapsible-collapsed" data-collapsed-icon="arrow-r" data-type="anindapapara" data-url="" id="idanindapapara">
      <h3 class="ui-collapsible-heading ui-collapsible-heading-collapsed"><a href="#" class="">Anında Papara<span class="ui-collapsible-heading-status"> click to expand contents</span></a></h3>
      <div class="" aria-hidden="true">
         <div class="collapse_content">
            <span class="paym_txt dinamic_Desc">
               <p>Anında Papara ile Para Çekme</p>
            </span>
            <div class="image-box-depwith">
               <div class="paymentmethods withrawalMob anindapapara"></div>
            </div>
            <div class="paym_cond">
               Min.<span automation="min_amount">
               100 TRY
               </span>
            </div>
            <div class="paym_cond">
               Max.<span automation="max_amount">
               700 TRY
               </span>
            </div>
            <div class="paym_cond">
               Çekilebilir<span>
               <?=$us['balance']?>
               </span>
            </div>
            <input type="hidden" value="0" class="CreditPercent">
            <input type="hidden" value="0" class="CreditPercentForUsed">
            <input type="hidden" value="1" class="Withdrawable">
            <input type="hidden" value="0,8458" class="playerUsed">
            <input type="hidden" value="0" class="playerUnused">
            <div id="contanindapapara">
               <form action="/tr/Account/_anindapaparaWithdrawal" class="methods" id="anindapapara" method="post" novalidate="novalidate">
                  <div class="row">
                     <span class="required-field">*</span>
                     <label for="AnindaPapara_AccountNumber">Hesap Numarası</label>
                     <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset"><input class="inp" data-val="true" data-val-regex="Bu alan 10 haneden oluşmalı ve sadece rakamlar içermeli." data-val-regex-pattern="([0-9]{10})" data-val-required="Doldurulması gerekli alan" id="AnindaPapara_AccountNumber" name="AnindaPapara.AccountNumber" type="text" value=""></div>
                     <p>
                        <span class="field-validation-valid" data-valmsg-for="AnindaPapara.AccountNumber" data-valmsg-replace="true" style="color: #ff0000"></span>
                     </p>
                  </div>
                  <div class="row">
                     <span class="required-field">*</span>
                     <label>Miktar</label>
                     <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset"><input class="inp" data-val="true" data-val-number="Tutar hanesi sadece tam sayı içermelidir" data-val-regex="Tutar hanesi sadece tam sayı içermelidir" data-val-regex-pattern="(^[1-9]\d*)" data-val-required="Lütfen geçerli bir miktar giriniz" id="AnindaPapara_Amount" name="AnindaPapara.Amount" type="text" value=""></div>
                     <p>
                        <span class="field-validation-valid" data-valmsg-for="AnindaPapara.Amount" data-valmsg-replace="true" style="color: #ff0000"></span>
                        <input data-val="true" data-val-required="The cancelbonus field is required." id="AnindaPapara_cancelbonus" name="AnindaPapara.cancelbonus" type="hidden" value="">
                     </p>
                  </div>
                  <div class="spacer">
                     <a class="btn_prim block ui-link" id="anindapapara_mob_withd">Para Çekme</a>
                  </div>
                  <div class="successmassage"></div>
                  <div class="errormassage"></div>
               </form>
               <script type="text/javascript">
                  $('#AnindaPapara_Amount').keyup(function () {
                      if (this.value.substring(0, 1) == "0" || this.value.substring(0, 1) == "-") {
                          this.value = this.value.replace(/^0|-+/g, '');
                      }
                  });
                  
                  $.validator.unobtrusive.parse($('#anindapapara'));
                  $('#anindapapara').validate();
                  
                  $('.inp').keypress(function (e) {
                      if (e.keyCode == 13) {
                          $('#anindapapara_mob_withd').trigger('click');
                      }
                  });
                  
                  $('#anindapapara_mob_withd').on('click', function (e) {
                  
                      if ($('#anindapapara').valid()) {
                          $.ajax({
                              url: "/tr/Account/AnindaPaparaWithdrawal",
                              type: "POST",
                              data: $('#anindapapara').serialize(),
                              datatype: "json",
                              success: function (result) {
                                  ResponseHandling(result, 'anindapapara');
                              }
                          });
                      }
                  });
                  
                  function CommissionCalculatorinfo() {
                      $("#CommissionFee").remove();
                      $("#anindapapara input[id$='Amount']").closest("div.row").find('label').append("<span style='right: 15px;position: absolute;' id='CommissionFee'>Komisyon &#252;creti <span class='CommissionFee'>0 </span>TRY</span>");
                  }
                  
                  
                   setTimeout(function () {
                      if (!($("#anindapapara .CreditPercentForUsed").val() == "0" && $("#anindapapara .CreditPercent").val() == "0")) {
                          CommissionCalculatorinfo();
                      }
                  }, 200);
                  
                  setTimeout(function () {
                      if (!($("#anindapapara .CreditPercentForUsed").val() == "0" && $("#anindapapara .CreditPercent").val() == "0")) {
                          $("#anindapapara input[id$='Amount']").focusout(function () {
                              var paymentname = $(this).closest("form").attr("id");
                              CommissionCalculator(paymentname);
                          });
                      }
                  }, 200);
               </script>
            </div>
         </div>
      </div>
   </div>
   <div data-role="collapsible" data-content-theme="b" class="collapse_btn paymentTypes ui-collapsible ui-collapsible-inset ui-corner-all ui-collapsible-themed-content ui-collapsible-collapsed" data-collapsed-icon="arrow-r" data-type="tether" data-url="" id="idtether">
      <h3 class="ui-collapsible-heading ui-collapsible-heading-collapsed"><a href="#" class="">Tether<span class="ui-collapsible-heading-status"> click to expand contents</span></a></h3>
      <div class="" aria-hidden="true">
         <div class="collapse_content">
            <span class="paym_txt dinamic_Desc">
               <p>Tether (TRC20) İle Para Çekme</p>
            </span>
            <div class="image-box-depwith">
               <div class="paymentmethods withrawalMob tether"></div>
            </div>
            <div class="paym_cond">
               Min.<span automation="min_amount">
               25&nbsp;000 TRY
               </span>
            </div>
            <div class="paym_cond">
               Max.<span automation="max_amount">
               250&nbsp;000 TRY
               </span>
            </div>
            <div class="paym_cond">
               Çekilebilir<span>
               <?=$us['balance']?>
               </span>
            </div>
            <input type="hidden" value="0" class="CreditPercent">
            <input type="hidden" value="0" class="CreditPercentForUsed">
            <input type="hidden" value="1" class="Withdrawable">
            <input type="hidden" value="0,8458" class="playerUsed">
            <input type="hidden" value="0" class="playerUnused">
            <div id="conttether">
               <form action="/tr/Account/_tetherWithdrawal" class="methods" id="tether" method="post" novalidate="novalidate">
                  <div class="row">
                     <span class="required-field">*</span>
                     <label for="Tether_YourWallet">'Trc-20 Cüzdan' Adresi</label>        
                     <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset"><input class="inp" data-val="true" data-val-regex="Yalnızca harf ve rakamlara izin verilir" data-val-regex-pattern="^[a-zA-Z0-9]+$" data-val-required="Doldurulması gerekli alan" id="Tether_YourWallet" name="Tether.YourWallet" type="text" value=""></div>
                     <p>
                        <span class="field-validation-valid" data-valmsg-for="Tether.YourWallet" data-valmsg-replace="true" style="color: #ff0000"></span>
                     </p>
                  </div>
                  <div class="row">
                     <span class="required-field">*</span>
                     <label>Miktar</label>
                     <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset"><input name="Tether.Amount" class="inp" id="Tether_Amount" type="text" value="" data-val-required="Lütfen çekim tutarını USDT ile girin" data-val="true" data-val-regex-pattern="(^[1-9]\d*((\.\d{1})|(\.\d{2}))?$)" data-val-regex="Miktar sadece rakamlar içerebilir, ondalıklar da belirtilebilir X.XX" data-val-number="Miktar sadece rakamlar içerebilir, ondalıklar da belirtilebilir X.XX"></div>
                     <p>
                        <span class="field-validation-valid" data-valmsg-for="Tether.Amount" data-valmsg-replace="true" style="color: #ff0000"></span>
                        <input data-val="true" data-val-required="The cancelbonus field is required." id="Tether_cancelbonus" name="Tether.cancelbonus" type="hidden" value="">
                     </p>
                  </div>
                  <div class="spacer">
                     <a class="btn_prim block ui-link" id="tether_mob_withd">Para Çekme</a>
                  </div>
                  <div class="successmassage"></div>
                  <div class="errormassage"></div>
               </form>
               <script type="text/javascript">
                  $.validator.unobtrusive.parse($('#tether'));
                  $('#tether').validate();
                  
                  $('.inp').keypress(function (e) {
                      if (e.keyCode == 13) {
                          e.preventDefault();
                          e.stopPropagation();
                          $('#tether_mob_dep').trigger('click');
                      }
                  });
                  
                  $('#tether_mob_withd').on('click', function (e) {
                      var btn = $(this);
                      btn.hide();
                  
                      if ($('#tether').valid()) {
                          $.ajax({
                              url: "/tr/Account/TetherWithdrawal",
                              type: "POST",
                              data: $('#tether').serialize(),
                              datatype: "json",
                              success: function (result) {
                                  btn.show();
                                  ResponseHandling(result, 'tether');
                                  $('#Tether_YourWallet').val("");
                              },
                              error: function () {
                                  btn.show();
                              }
                          });
                      } else {
                          btn.show();;
                      }
                  });
                  
                    function CommissionCalculatorinfo() {
                      $("#CommissionFee").remove();
                        $("#tether input[id$='Amount']").closest("div.row").find('label').append("<span class='commissionFee_item' id='CommissionFee'>Komisyon &#252;creti <span class='CommissionFee'>0 </span>TRY</span>");
                  }
                  
                  
                   setTimeout(function () {
                       if (!($("#tether .CreditPercentForUsed").val() == "0" && $("#tether .CreditPercent").val() == "0")) {
                          CommissionCalculatorinfo();
                      }
                  }, 200);
                  
                  setTimeout(function () {
                      if (!($("#tether .CreditPercentForUsed").val() == "0" && $("#tether .CreditPercent").val() == "0")) {
                          $("#tether input[id$='Amount']").focusout(function () {
                              var paymentname = $(this).closest("form").attr("id");
                              CommissionCalculator(paymentname);
                          });
                      }
                  }, 200);
               </script>
            </div>
         </div>
      </div>
   </div>
   <div data-role="collapsible" data-content-theme="b" class="collapse_btn paymentTypes ui-collapsible ui-collapsible-inset ui-corner-all ui-collapsible-themed-content ui-collapsible-collapsed" data-collapsed-icon="arrow-r" data-type="anindabtc" data-url="" id="idanindabtc">
      <h3 class="ui-collapsible-heading ui-collapsible-heading-collapsed"><a href="#" class="">Anında Kripto<span class="ui-collapsible-heading-status"> click to expand contents</span></a></h3>
      <div class="" aria-hidden="true">
         <div class="collapse_content">
            <span class="paym_txt dinamic_Desc">
               <p>Anında Kripto İle Para Çekme</p>
            </span>
            <div class="image-box-depwith">
               <img src="https://cdn-payments.apidigi.com/dynamic/AnindaBTC.png" class="dynemiclogosizeMob">
            </div>
            <div class="paym_cond">
               Min.<span automation="min_amount">
               100 TRY
               </span>
            </div>
            <div class="paym_cond">
               Max.<span automation="max_amount">
               50&nbsp;000 TRY
               </span>
            </div>
            <div class="paym_cond">
               Çekilebilir<span>
               <?=$us['balance']?>
               </span>
            </div>
            <input type="hidden" value="0" class="CreditPercent">
            <input type="hidden" value="0" class="CreditPercentForUsed">
            <input type="hidden" value="1" class="Withdrawable">
            <input type="hidden" value="0,8458" class="playerUsed">
            <input type="hidden" value="0" class="playerUnused">
            <div id="contanindabtc">
               <form action="/tr/Account/_anindabtcWithdrawal" class="methods" id="anindabtc" method="post" novalidate="novalidate">
                  <div class="row">
                     <span class="required-field">*</span>
                     <label for="AnindaBTC_CryptoAddress">Kripto Adresi</label>
                     <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset"><input class="inp" data-val="true" data-val-length="Maksimum uzunluk 100 karakterdir." data-val-length-max="100" data-val-length-min="1" data-val-regex="Yalnızca harf ve rakamlara izin verilir" data-val-regex-pattern="^[a-zA-Z0-9]+$" data-val-required="Doldurulması gerekli alan" id="AnindaBTC_CryptoAddress" name="AnindaBTC.CryptoAddress" type="text" value=""></div>
                     <p>
                        <span class="field-validation-valid" data-valmsg-for="AnindaBTC.CryptoAddress" data-valmsg-replace="true" style="color: #ff0000"></span>
                     </p>
                  </div>
                  <div class="row">
                     <span class="required-field">*</span>
                     <label>Tutar</label>
                     <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset"><input class="inp" data-val="true" data-val-number="Tutar hanesi sadece tam sayı içermelidir" data-val-regex="Tutar hanesi sadece tam sayı içermelidir" data-val-regex-pattern="(^[1-9]\d*)" data-val-required="Lütfen geçerli bir miktar giriniz" id="AnindaBTC_Amount" name="AnindaBTC.Amount" type="text" value=""></div>
                     <input data-val="true" data-val-required="The cancelbonus field is required." id="AnindaBTC_cancelbonus" name="AnindaBTC.cancelbonus" type="hidden" value="">
                     <p>
                        <span class="field-validation-valid" data-valmsg-for="AnindaBTC.Amount" data-valmsg-replace="true" style="color: #ff0000"></span>
                     </p>
                  </div>
                  <div class="spacer">
                     <a class="btn_prim block ui-link" id="anindabtc_mob_withd">Para Çekme</a>
                  </div>
                  <div class="successmassage"></div>
                  <div class="errormassage"></div>
               </form>
               <script type="text/javascript">
                  $('#AnindaBTC_Amount').keyup(function () {
                      if (this.value.substring(0, 1) == "0" || this.value.substring(0, 1) == "-") {
                          this.value = this.value.replace(/^0|-+/g, '');
                      }
                  });
                  
                  $('.inp').keypress(function (e) {
                      if (e.keyCode == 13) {
                          e.preventDefault();
                          e.stopPropagation();
                          $('#anindabtc_mob_withd').trigger('click');
                      }
                  });
                  
                  $.validator.unobtrusive.parse($('#anindabtc'));
                  $('#anindabtc').validate();
                  
                  $('.inp').keypress(function (e) {
                      if (e.keyCode == 13) {
                          $('#anindabtc_mob_withd').trigger('click');
                      }
                  });
                  
                  $('#anindabtc_mob_withd').on('click', function (e) {
                  
                      if ($('#anindabtc').valid()) {
                          
                          $.ajax({
                              url: "/tr/Account/AnindaBTCWithdrawal",
                               type: "POST",
                                  data: $('#anindabtc').serialize(),
                               datatype: "json",
                                  success: function (result) {
                                      if (result.Success == true) {
                                          $('#AnindaBTC_NameOfBank').val("");
                                      }
                                      ResponseHandling(result, 'anindabtc');
                               }
                           });
                       }
                  });
                  
                  
                    function CommissionCalculatorinfo() {
                      $("#CommissionFee").remove();
                        $("#anindabtc input[id$='Amount']").closest("div.row").find('label').append("<span class='commissionFee_item' id='CommissionFee'>Komisyon &#252;creti <span class='CommissionFee'>0 </span>TRY</span>");
                  }
                  
                  
                   setTimeout(function () {
                       if (!($("#anindabtc .CreditPercentForUsed").val() == "0" && $("#anindabtc .CreditPercent").val() == "0")) {
                          CommissionCalculatorinfo();
                      }
                  }, 200);
                  
                  setTimeout(function () {
                      if (!($("#anindabtc .CreditPercentForUsed").val() == "0" && $("#anindabtc .CreditPercent").val() == "0")) {
                          $("#anindabtc input[id$='Amount']").focusout(function () {
                              var paymentname = $(this).closest("form").attr("id");
                              CommissionCalculator(paymentname);
                          });
                      }
                  }, 200);
               </script>
            </div>
         </div>
      </div>
   </div>
   <div data-role="collapsible" data-content-theme="b" class="collapse_btn paymentTypes ui-collapsible ui-collapsible-inset ui-corner-all ui-collapsible-themed-content ui-collapsible-collapsed" data-collapsed-icon="arrow-r" data-type="hemenodemefete" data-url="" id="idhemenodemefete">
      <h3 class="ui-collapsible-heading ui-collapsible-heading-collapsed"><a href="#" class="">Hemenöde Mefete<span class="ui-collapsible-heading-status"> click to expand contents</span></a></h3>
      <div class="" aria-hidden="true">
         <div class="collapse_content">
            <p class="paym_txt">Hemenöde MEFETE ile işlem yap</p>
            <div class="image-box-depwith">
               <div class="paymentmethods withrawalMob hemenodemefete"></div>
            </div>
            <div class="paym_cond">
               Min.<span automation="min_amount">
               100 TRY
               </span>
            </div>
            <div class="paym_cond">
               Max.<span automation="max_amount">
               50&nbsp;000 TRY
               </span>
            </div>
            <div class="paym_cond">
               Çekilebilir<span>
               <?=$us['balance']?>
               </span>
            </div>
            <input type="hidden" value="0" class="CreditPercent">
            <input type="hidden" value="0" class="CreditPercentForUsed">
            <input type="hidden" value="1" class="Withdrawable">
            <input type="hidden" value="0,8458" class="playerUsed">
            <input type="hidden" value="0" class="playerUnused">
            <div id="conthemenodemefete">
               <form action="/tr/Account/_hemenodemefeteWithdrawal" class="methods" id="hemenodemefete" method="post" novalidate="novalidate">
                  <div class="row">
                     <span class="required-field">*</span>
                     <label for="HemenodeMefete_AccountNumber">Hesap Numarası</label>
                     <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset"><input class="inp" data-val="true" data-val-length="Alan 9 veya 10 basamak içerebilir." data-val-length-max="10" data-val-length-min="9" data-val-regex="Sadece numara yazın" data-val-regex-pattern="(^[0-9]*$)" data-val-required="Doldurulması gerekli alan" id="HemenodeMefete_AccountNumber" name="HemenodeMefete.AccountNumber" type="text" value=""></div>
                     <p>
                        <span class="field-validation-valid" data-valmsg-for="HemenodeMefete.AccountNumber" data-valmsg-replace="true" style="color: #ff0000"></span>
                     </p>
                  </div>
                  <div class="row">
                     <span class="required-field">*</span>
                     <label>Miktar</label>
                     <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset"><input class="inp" data-val="true" data-val-number="Tutar hanesi sadece tam sayı içermelidir" data-val-regex="Tutar hanesi sadece tam sayı içermelidir" data-val-regex-pattern="(^[1-9]\d*)" data-val-required="Lütfen geçerli bir miktar giriniz" id="HemenodeMefete_Amount" name="HemenodeMefete.Amount" type="text" value=""></div>
                     <p>
                        <span class="field-validation-valid" data-valmsg-for="HemenodeMefete.Amount" data-valmsg-replace="true" style="color: #ff0000"></span>
                        <input data-val="true" data-val-required="The cancelbonus field is required." id="HemenodeMefete_cancelbonus" name="HemenodeMefete.cancelbonus" type="hidden" value="">
                     </p>
                  </div>
                  <div class="spacer">
                     <a class="btn_prim block ui-link" id="hemenodemefete_mob_withd">Para Çekme</a>
                  </div>
                  <div class="successmassage"></div>
                  <div class="errormassage"></div>
               </form>
               <script type="text/javascript">
                  $('#HemenodeMefete_Amount').keyup(function () {
                         if (this.value.substring(0, 1) == "0" || this.value.substring(0, 1) == "-") {
                             this.value = this.value.replace(/^0|-+/g, '');
                         }
                     });
                  
                  $.validator.unobtrusive.parse($('#hemenodemefete'));
                  $('#hemenodemefete').validate();
                  
                     $('.inp').keypress(function (e) {
                         if (e.keyCode == 13) {
                             e.stopPropagation();
                             e.preventDefault();
                  		$('#hemenodemefete_mob_withd').trigger('click');
                         }
                     });
                  
                  $('#hemenodemefete_mob_withd').on('click', function (e) {
                  
                         var btn = $(this);
                         btn.hide();
                  
                  	if ($('#hemenodemefete').valid()) {
                             $.ajax({
                                 url: "/tr/Account/HemenodeMefeteWithdrawal",
                                 type: "POST",
                  			data: $('#hemenodemefete').serialize(),
                                 datatype: "json",
                                 success: function (result) {
                  				ResponseHandling(result, 'hemenodemefete');
                                     btn.show();
                                 },
                                 error: function () {
                                     btn.show();
                                 }
                             });
                         } else {
                             btn.show();
                         }
                     });
                  
                  
                      function CommissionCalculatorinfo() {
                         $("#CommissionFee").remove();
                  	 $("#hemenodemefete input[id$='Amount']").closest("div.row").find('label').append("<span style='right: 15px;position: absolute;' id='CommissionFee'>Komisyon &#252;creti <span class='CommissionFee'>0 </span>TRY</span>");
                     }
                  
                  
                      setTimeout(function () {
                  	 if (!($("#hemenodemefete .CreditPercentForUsed").val() == "0" && $("#hemenodemefete .CreditPercent").val() == "0")) {
                             CommissionCalculatorinfo();
                         }
                     }, 200);
                  
                     setTimeout(function () {
                  	if (!($("#hemenodemefete .CreditPercentForUsed").val() == "0" && $("#hemenodemefete .CreditPercent").val() == "0")) {
                  		$("#hemenodemefete input[id$='Amount']").focusout(function () {
                                 var paymentname = $(this).closest("form").attr("id");
                                 CommissionCalculator(paymentname);
                             });
                         }
                     }, 200);
               </script>
            </div>
         </div>
      </div>
   </div>
   <div data-role="collapsible" data-content-theme="b" class="collapse_btn paymentTypes ui-collapsible ui-collapsible-inset ui-corner-all ui-collapsible-themed-content ui-collapsible-collapsed" data-collapsed-icon="arrow-r" data-type="hemenodehavale" data-url="" id="idhemenodehavale">
      <h3 class="ui-collapsible-heading ui-collapsible-heading-collapsed"><a href="#" class="">HemenÖde Havale<span class="ui-collapsible-heading-status"> click to expand contents</span></a></h3>
      <div class="" aria-hidden="true">
         <div class="collapse_content">
            <p class="paym_txt">Hemenöde Havale ile işlem yap</p>
            <div class="image-box-depwith">
               <div class="paymentmethods withrawalMob hemenodehavale"></div>
            </div>
            <div class="paym_cond">
               Min.<span automation="min_amount">
               1&nbsp;000 TRY
               </span>
            </div>
            <div class="paym_cond">
               Max.<span automation="max_amount">
               50&nbsp;000 TRY
               </span>
            </div>
            <div class="paym_cond">
               Çekilebilir<span>
               <?=$us['balance']?>
               </span>
            </div>
            <input type="hidden" value="0" class="CreditPercent">
            <input type="hidden" value="0" class="CreditPercentForUsed">
            <input type="hidden" value="1" class="Withdrawable">
            <input type="hidden" value="0,8458" class="playerUsed">
            <input type="hidden" value="0" class="playerUnused">
            <div id="conthemenodehavale">
               <form action="/tr/Account/_hemenodehavaleWithdrawal" class="methods" id="hemenodehavale" method="post" novalidate="novalidate">
                  <div class="row" style="width:100%;">
                     <span class="required-field">*</span>
                     <label for="Bankalar">Bankalar</label>
                     <div class="ui-select">
                        <div id="BanksHemenodeHavale-button" class="ui-btn ui-icon-carat-d ui-btn-icon-right ui-corner-all ui-shadow">
                           <span class="inp">&nbsp;</span>
                           <select data-val="true" data-val-required="Field is required" id="BanksHemenodeHavale" name="HemenodeHavale.BankCode" type="" value="" aria-required="true" aria-describedby="HemenodeHavale-error" aria-invalid="true" class="inp" style="opacity:1; z-index:10;">
                              <option value="">--Banka Seçiniz--</option>
                              <option bankhemenodehavale="ING Bank" value="5bacaf2e7c85fe3f9c0ea598">ING Bank</option>
                              <option bankhemenodehavale="Akbank" value="5bacadef7c85fe3f9c0e93ff">Akbank</option>
                              <option bankhemenodehavale="QNB Finansbank" value="5bacafbc7c85fe3f9c0ea959">QNB Finansbank</option>
                              <option bankhemenodehavale="Denizbank" value="5bacae637c85fe3f9c0e9920">Denizbank</option>
                              <option bankhemenodehavale="Garanti Bankasi" value="5bacae997c85fe3f9c0e9c62">Garanti Bankasi</option>
                              <option bankhemenodehavale="TEB" value="5bacb0187c85fe3f9c0eace1">TEB</option>
                              <option bankhemenodehavale="Kuveyt Türk" value="5bacaf537c85fe3f9c0ea6a4">Kuveyt Türk</option>
                              <option bankhemenodehavale="Enpara" value="5c65687a811a1f13dc686215">Enpara</option>
                              <option bankhemenodehavale="Ziraat Bankasi" value="5bacb1f27c85fe3f9c0ebcf2">Ziraat Bankasi</option>
                              <option bankhemenodehavale="Turkiye Finans Bankasi" value="5bacb06b7c85fe3f9c0eaef0">Turkiye Finans Bankasi</option>
                              <option bankhemenodehavale="Fast Banka Havale" value="60f192c2bffe723f3cd51d50">Fast Banka Havale</option>
                              <option bankhemenodehavale="Halk Bankasi" value="5bacaed17c85fe3f9c0ea032">Halk Bankasi</option>
                              <option bankhemenodehavale="Vakif Bank" value="5bacb1217c85fe3f9c0eb5bd">Vakif Bank</option>
                              <option bankhemenodehavale="Yapi Kredi" value="5bacb19c7c85fe3f9c0eb968">Yapi Kredi</option>
                              <option bankhemenodehavale="Turkiye Is Bankasi" value="5bacb08e7c85fe3f9c0eb016">Turkiye Is Bankasi</option>
                           </select>
                        </div>
                     </div>
                     <input id="HemenodeHavale_BankCode" name="HemenodeHavale.BankCode" type="hidden" value="">
                  </div>
                  <div class="row">
                     <span class="required-field">*</span>
                     <label for="HemenodeHavale_AccountNumber">Hesap Numarası</label>
                     <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset"><input class="inp" data-val="true" data-val-regex="IBAN 2 harf ve 24 rakamdan oluşmalı." data-val-regex-pattern="([a-zA-Z]{2}[0-9]{24})" data-val-required="Doldurulması gerekli alan" id="HemenodeHavale_AccountNumber" name="HemenodeHavale.AccountNumber" type="text" value=""></div>
                     <p>
                        <span class="field-validation-valid" data-valmsg-for="HemenodeHavale.AccountNumber" data-valmsg-replace="true" style="color: #ff0000"></span>
                     </p>
                  </div>
                  <div class="row">
                     <span class="required-field">*</span>
                     <label>Miktar</label>
                     <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset"><input class="inp" data-val="true" data-val-number="Tutar hanesi sadece tam sayı içermelidir" data-val-regex="Tutar hanesi sadece tam sayı içermelidir" data-val-regex-pattern="(^[1-9]\d*)" data-val-required="Lütfen geçerli bir miktar giriniz" id="HemenodeHavale_Amount" name="HemenodeHavale.Amount" type="text" value=""></div>
                     <p>
                        <span class="field-validation-valid" data-valmsg-for="HemenodeHavale.Amount" data-valmsg-replace="true" style="color: #ff0000"></span>
                        <input data-val="true" data-val-required="The cancelbonus field is required." id="HemenodeHavale_cancelbonus" name="HemenodeHavale.cancelbonus" type="hidden" value="">
                     </p>
                  </div>
                  <input class="tl_input_popup" id="HemenodeHavale_GatwayType" name="HemenodeHavale.GatwayType" type="hidden" value="1">
                  <input class="tl_input_popup" id="HemenodeHavale_PaymentGatewayId" name="HemenodeHavale.PaymentGatewayId" type="hidden" value="107">
                  <div class="spacer">
                     <a class="btn_prim block ui-link" id="hemenodehavale_mob_withd">Para Çekme</a>
                  </div>
                  <div class="successmassage"></div>
                  <div class="errormassage"></div>
               </form>
               <script type="text/javascript">
                  var gateway = $('#HemenodeHavale_GatwayType').val();
                  
                  $('#HemenodeHavale_Amount').keyup(function () {
                      if (this.value.substring(0, 1) == "0" || this.value.substring(0, 1) == "-") {
                          this.value = this.value.replace(/^0|-+/g, '');
                      }
                  });
                  
                  let url = "";
                  
                  var GatewayId = $('#HemenodeHavale_PaymentGatewayId').val();
                  
                  if (gateway == 2)
                  {
                      if (GatewayId != 0)
                      {
                          url = 'https://pygapi.letspayments.com/api/PaymentSystemInfoProvider/getbanks/2?api-version=1&siteId=' + GatewayId +'&paymentSystem=1144&userId=8458018&cy=TRY'
                      }
                  }
                  else
                  {
                      url = 'https://digipayments.letspayments.com/HemenodeGetBankListHandler.ashx?ps=554&sp=1093'
                  }
                  
                  $.ajax({
                      url: url,
                      success: function (responce) {
                          if (responce == 'Error') {
                  $('#detailsDiv_hemenodehavale').append('error');
                          } else {
                  CreateDropDown(responce);
                  $('#hemenodehavale_mob_dep').hide();
                              $('#amountsMob').hide();
                          }
                      },
                      error: function(responce) {
                      }
                  });
                  
                  var CreateDropDown = function (json) {
                  
                      var html = '<option value>--Banka Se&#231;iniz--</option>';
                  
                      $(json).each(function () {
                          if (gateway == 2)
                          {
                              html += '<option BankHemenodeHavale = "' + this.name + '" value="' + this.code + '">' + this.name + '</option>';
                          }
                          else
                          {
                              html += '<option BankHemenodeHavale = "' + this.BankName + '" value="' + this.BankId + '">' + this.BankName + '</option>';
                          }
                      })
                  
                      $('#BanksHemenodeHavale').html(html);
                  }
                  $.validator.unobtrusive.parse($('#hemenodehavale'));
                  $('#hemenodehavale').validate();
                  
                  $('.inp').keypress(function (e) {
                      if (e.keyCode == 13) {
                          e.stopPropagation();
                          e.preventDefault();
                  $('#hemenodehavale_mob_withd').trigger('click');
                      }
                  });
                  
                  $('#hemenodehavale_mob_withd').on('click', function (e) {
                  
                      var btn = $(this);
                      btn.hide();
                  
                      if ($('#hemenodehavale').valid()) {
                          $.ajax({
                              url: "/tr/Account/HemenodeHavaleWithdrawal",
                              type: "POST",
                  data: $('#hemenodehavale').serialize(),
                              datatype: "json",
                              success: function (result) {
                  	ResponseHandling(result, 'hemenodehavale');
                                  btn.show();
                              },
                              error: function () {
                                  btn.show();
                              }
                          });
                      } else {
                          btn.show();
                      }
                  });
                  
                   function CommissionCalculatorinfo() {
                      $("#CommissionFee").remove();
                  $("#hemenodehavale input[id$='Amount']").closest("div.row").find('label').append("<span style='right: 15px;position: absolute;' id='CommissionFee'>Komisyon &#252;creti <span class='CommissionFee'>0 </span>TRY</span>");
                  }
                  
                  
                   setTimeout(function () {
                  if (!($("#hemenodehavale .CreditPercentForUsed").val() == "0" && $("#hemenodehavale .CreditPercent").val() == "0")) {
                          CommissionCalculatorinfo();
                      }
                  }, 200);
                  
                  setTimeout(function () {
                  if (!($("#hemenodehavale .CreditPercentForUsed").val() == "0" && $("#hemenodehavale .CreditPercent").val() == "0")) {
                  $("#hemenodehavale input[id$='Amount']").focusout(function () {
                              var paymentname = $(this).closest("form").attr("id");
                              CommissionCalculator(paymentname);
                          });
                      }
                  }, 200);
               </script>
            </div>
         </div>
      </div>
   </div>
   <div data-role="collapsible" data-content-theme="b" class="collapse_btn paymentTypes ui-collapsible ui-collapsible-inset ui-corner-all ui-collapsible-themed-content ui-collapsible-collapsed" data-collapsed-icon="arrow-r" data-type="odendibilkriptopay" data-url="" id="idodendibilkriptopay">
      <h3 class="ui-collapsible-heading ui-collapsible-heading-collapsed"><a href="#" class="">Kriptopay<span class="ui-collapsible-heading-status"> click to expand contents</span></a></h3>
      <div class="" aria-hidden="true">
         <div class="collapse_content">
            <p class="paym_txt">Ödendibil Kriptopay ile Para Çekme</p>
            <div class="image-box-depwith">
               <div class="paymentmethods withrawalMob odendibilkriptopay"></div>
            </div>
            <div class="paym_cond">
               Min.<span automation="min_amount">
               500 TRY
               </span>
            </div>
            <div class="paym_cond">
               Max.<span automation="max_amount">
               50&nbsp;000 TRY
               </span>
            </div>
            <div class="paym_cond">
               Çekilebilir<span>
               <?=$us['balance']?>
               </span>
            </div>
            <input type="hidden" value="0" class="CreditPercent">
            <input type="hidden" value="0" class="CreditPercentForUsed">
            <input type="hidden" value="1" class="Withdrawable">
            <input type="hidden" value="0,8458" class="playerUsed">
            <input type="hidden" value="0" class="playerUnused">
            <div id="contodendibilkriptopay">
               <form action="/tr/Account/_odendibilkriptopayWithdrawal" class="methods" id="odendibilkriptopay" method="post" novalidate="novalidate">
                  <div class="row">
                     <span class="required-field">*</span>
                     <label>Bank</label>
                     <div class="ui-select">
                        <div id="OdendibilKriptoPay_BankId-button" class="ui-btn ui-icon-carat-d ui-btn-icon-right ui-corner-all ui-shadow">
                           <span class="inp"> -- Select Bank -- </span>
                           <select class="inp" data-val="true" data-val-required="Doldurulması gerekli alan" id="OdendibilKriptoPay_BankId" name="OdendibilKriptoPay.BankId" type="" value="" aria-required="true" aria-describedby="OdendibilKriptoPay_BankId-error" aria-invalid="false" style="opacity: 1; z-index: 10;">
                              <option value=""> -- Select Bank -- </option>
                              <option value="BTC">Bitcoin</option>
                              <option value="USDT">Tether USDT [TRC20 - BEP20]</option>
                              <option value="ETH">Etherium</option>
                              <option value="TRX">TRON</option>
                              <option value="BNB">BNB Coin</option>
                              <option value="LTC">Litecoin</option>
                              <option value="XRP">Ripple</option>
                              <option value="BUSD">Binance USD</option>
                              <option value="DOGE">DogeCoin</option>
                              <option value="WAVES">Waves</option>
                              <option value="DASH">Dash</option>
                              <option value="LINK">Chainlink (LINK)</option>
                              <option value="ETC">Ether Classic</option>
                           </select>
                        </div>
                     </div>
                     <p>
                        <span class="field-validation-valid" data-valmsg-for="OdendibilKriptoPay.BankId" data-valmsg-replace="true" style="color: #ff0000"></span>
                     </p>
                  </div>
                  <div class="row">
                     <span class="required-field">*</span>
                     <label for="OdendibilKriptoPay_CryptoAddress">Crypto address</label>
                     <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset"><input class="inp" data-val="true" data-val-required="Doldurulması gerekli alan" id="OdendibilKriptoPay_CryptoAddress" name="OdendibilKriptoPay.CryptoAddress" type="text" value=""></div>
                     <p>
                        <span class="field-validation-valid" data-valmsg-for="OdendibilKriptoPay.CryptoAddress" data-valmsg-replace="true" style="color: #ff0000"></span>
                     </p>
                  </div>
                  <div class="row" id="odendibilkriptopayCryptoTag" style="display: none;">
                     <span class="required-field">*</span>
                     <label for="OdendibilKriptoPay_CryptoTag">Crypto Tag</label>
                     <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset"><input class="inp" data-val="true" data-val-required="Doldurulması gerekli alan" id="OdendibilKriptoPay_CryptoTag" name="OdendibilKriptoPay.CryptoTag" type="text" value=""></div>
                     <p>
                        <span class="field-validation-valid" data-valmsg-for="OdendibilKriptoPay.CryptoTag" data-valmsg-replace="true" style="color: #ff0000"></span>
                     </p>
                  </div>
                  <div class="row">
                     <span class="required-field">*</span>
                     <label>Miktar</label>
                     <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset"><input class="inp" data-val="true" data-val-number="Tutar hanesi sadece tam sayı içermelidir" data-val-regex="Tutar hanesi sadece tam sayı içermelidir" data-val-regex-pattern="(^[1-9]\d*)" data-val-required="Lütfen geçerli bir miktar giriniz" id="OdendibilKriptoPay_Amount" name="OdendibilKriptoPay.Amount" type="text" value=""></div>
                     <p>
                        <span class="field-validation-valid" data-valmsg-for="OdendibilKriptoPay.Amount" data-valmsg-replace="true" style="color: #ff0000"></span>
                        <input data-val="true" data-val-required="The cancelbonus field is required." id="OdendibilKriptoPay_cancelbonus" name="OdendibilKriptoPay.cancelbonus" type="hidden" value="">
                     </p>
                  </div>
                  <input class="tl_input_popup" id="OdendibilKriptoPay_GatwayType" name="OdendibilKriptoPay.GatwayType" type="hidden" value="1">
                  <input class="tl_input_popup" id="OdendibilKriptoPay_PaymentGatewayId" name="OdendibilKriptoPay.PaymentGatewayId" type="hidden" value="107">
                  <div class="spacer">
                     <a class="btn_prim block ui-link" id="odendibilkriptopay_mob_withd">Para Çekme</a>
                  </div>
                  <div class="successmassage"></div>
                  <div class="errormassage"></div>
               </form>
               <script type="text/javascript">
                  var gateway = $('#OdendibilKriptoPay_GatwayType').val();
                  
                  $(document).ready(function () {
                      GetBanks();
                  });
                  
                  $.validator.unobtrusive.parse($('#odendibilkriptopay'));
                  $('#odendibilkriptopay').validate();
                  
                  $('.inp').keypress(function (e) {
                      if (e.keyCode == 13) {
                          $('#odendibilkriptopay_mob_withd').trigger('click');
                      }
                  });
                  
                  $('#odendibilkriptopay_mob_withd').on('click', function (e) {
                  
                      if ($('#odendibilkriptopay').valid()) {
                          $.ajax({
                              url: "/tr/Account/OdendibilKriptoPayWithdrawal",
                              type: "POST",
                              data: $('#odendibilkriptopay').serialize(),
                              datatype: "json",
                              success: function (result) {
                                  ResponseHandling(result, 'odendibilkriptopay');
                              }
                          });
                      } else {
                          var depsitBankId = $("#OdendibilKriptoPay_BankId").val();
                          $('#OdendibilKriptoPay_BankId-button span').text(depsitBankId);
                          $('#OdendibilKriptoPay_BankId').selectmenu('refresh', true);
                      }
                  });
                  
                    function CommissionCalculatorinfo() {
                      $("#CommissionFee").remove();
                        $("#odendibilkriptopay input[id$='Amount']").closest("div.row").find('label').append("<span class='commissionFee_item' id='CommissionFee'>Komisyon &#252;creti <span class='CommissionFee'>0 </span>TRY</span>");
                  }
                  
                  
                   setTimeout(function () {
                       if (!($("#odendibilkriptopay .CreditPercentForUsed").val() == "0" && $("#odendibilkriptopay .CreditPercent").val() == "0")) {
                          CommissionCalculatorinfo();
                      }
                  }, 200);
                  
                  setTimeout(function () {
                      if (!($("#odendibilkriptopay .CreditPercentForUsed").val() == "0" && $("#odendibilkriptopay .CreditPercent").val() == "0")) {
                          $("#odendibilkriptopay input[id$='Amount']").focusout(function () {
                              var paymentname = $(this).closest("form").attr("id");
                              CommissionCalculator(paymentname);
                          });
                      }
                  }, 200);
                  
                  function GetBanks() {
                      let bankUrl = "";
                  
                      var GatewayId = $('#OdendibilKriptoPay_PaymentGatewayId').val();
                  
                      if (gateway == 2) {
                          if (GatewayId != 0) {
                              bankUrl = 'https://pygapi.letspayments.com/api/PaymentSystemInfoProvider/getbanks/2?siteId=' + GatewayId + '&paymentSystem=362&userId=8458018&cy=TRY'
                          }
                      }
                      else {
                            bankUrl = "https://digipayments.letspayments.com/OdendibilKriptoPreRequest.ashx?sp=1093";
                      }
                  $.ajax({
                  type: "GET",
                  url: bankUrl,
                  datatype: "json",
                          success: function (responce) {
                              if (responce && responce != 'Error') {
                                  CreateDropDownBanks(responce);
                              }
                  },
                          error: function (responce) {
                  }
                  });
                  }
                  
                  var CreateDropDownBanks = function (json) {
                      var html = '<option value=""> -- Select Bank -- </option>';
                  
                      if (gateway == 2) {
                          $(json).each(function () {
                  
                              html += '<option OdendibilKriptoPay_BankId= "' + this.BankName + '" value="' + this.BankId + '">' + this.BankName + '</option>';
                  
                          })
                      }
                      else {
                          for (let i = 0; i < json.length; i++) {
                              html += '<option value="' + json[i].BankId + '">' + json[i].BankName + '</option>';
                          }
                      }
                      $('#OdendibilKriptoPay_BankId').html(html);
                  
                      var depsitBankId = $("#OdendibilKriptoPay_BankId").val();
                      $('#OdendibilKriptoPay_BankId-button span').text(depsitBankId);
                      $('#OdendibilKriptoPay_BankId').selectmenu('refresh', true);
                  }
                  
                  $("#OdendibilKriptoPay_BankId").on('change', function (e) {
                  
                      let coin = $(this).val();
                      if ((coin == "BNB" || coin == "XRP" || coin == "XEM") && gateway != 2) {
                          $("#odendibilkriptopayCryptoTag").show();
                      } else {
                          $("#odendibilkriptopayCryptoTag").hide();
                          $("#OdendibilKriptoPay_CryptoTag").val('');
                      }
                  })
               </script>
            </div>
         </div>
      </div>
   </div>
   <div data-role="collapsible" data-content-theme="b" class="collapse_btn paymentTypes ui-collapsible ui-collapsible-inset ui-corner-all ui-collapsible-themed-content ui-collapsible-collapsed" data-collapsed-icon="arrow-r" data-type="jetonwallet" data-url="" id="idjetonwallet">
      <h3 class="ui-collapsible-heading ui-collapsible-heading-collapsed"><a href="#" class="">JETON<span class="ui-collapsible-heading-status"> click to expand contents</span></a></h3>
      <div class="" aria-hidden="true">
         <div class="collapse_content">
            <p class="paym_txt">Jeton ile Para Çekme</p>
            <div class="image-box-depwith">
               <div class="paymentmethods withrawalMob jetonwallet"></div>
            </div>
            <div class="paym_cond">
               Min.<span automation="min_amount">
               50 TRY
               </span>
            </div>
            <div class="paym_cond">
               Max.<span automation="max_amount">
               20&nbsp;000 TRY
               </span>
            </div>
            <div class="paym_cond">
               Çekilebilir<span>
               <?=$us['balance']?>
               </span>
            </div>
            <input type="hidden" value="0" class="CreditPercent">
            <input type="hidden" value="0" class="CreditPercentForUsed">
            <input type="hidden" value="1" class="Withdrawable">
            <input type="hidden" value="0,8458" class="playerUsed">
            <input type="hidden" value="0" class="playerUnused">
            <div id="contjetonwallet">
               <form action="/tr/Account/_jetonwalletWithdrawal" class="methods" id="jetonwallet" method="post" novalidate="novalidate">
                  <div class="row">
                     <span class="required-field">*</span>
                     <label>Müşterinin Jeton Cüzdan Kimlik numarası</label>
                     <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset"><input class="inp MobileLtr" data-val="true" data-val-regex="Sadece numara yazın" data-val-regex-pattern="(^[0-9]*$)" data-val-required="Doldurulması gerekli alan" id="JetonWallet_ReceiverPhoneNumber" name="JetonWallet.ReceiverPhoneNumber" type="text" value=""></div>
                     <p>
                        <span class="field-validation-valid" data-valmsg-for="JetonWallet.ReceiverPhoneNumber" data-valmsg-replace="true" style="color: #ff0000"></span>
                     </p>
                  </div>
                  <div class="row">
                     <span class="required-field">*</span>
                     <label>Para Çekme Miktarı<span class="commissionFee_item" id="CommissionFee">Komisyon ücreti <span class="CommissionFee">0 </span>TRY</span></label>
                     <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset"><input class="inp" data-val="true" data-val-number="Tutar hanesi sadece rakamlar içermelidir." data-val-regex="Tutar hanesi sadece rakamlar içermelidir." data-val-regex-pattern="(^[0-9]*.[0-9]*$)" data-val-required="Lütfen geçerli bir miktar giriniz" id="JetonWallet_Amount" name="JetonWallet.Amount" type="text" value=""></div>
                     <p>
                        <span class="field-validation-valid" data-valmsg-for="JetonWallet.Amount" data-valmsg-replace="true" style="color: #ff0000"></span>
                        <input data-val="true" data-val-required="The cancelbonus field is required." id="JetonWallet_cancelbonus" name="JetonWallet.cancelbonus" type="hidden" value="">
                     </p>
                  </div>
                  <div class="spacer">
                     <a class="btn_prim block ui-link" id="jetonwallet_mob_withd">Para Çekme</a>
                  </div>
                  <div class="successmassage"></div>
                  <div class="errormassage"></div>
               </form>
               <script type="text/javascript">
                  $.validator.unobtrusive.parse($('#jetonwallet'));
                  $('#jetonwallet').validate();
                  
                  $('.inp').keypress(function (e) {
                      if (e.keyCode == 13) {
                          $('#jetonwallet_mob_withd').trigger('click');
                      }
                  });
                  
                  $('#jetonwallet_mob_withd').on('click', function (e) {
                  
                      if ($('#jetonwallet').valid()) {
                          $.ajax({
                              url: "/tr/Account/JetonWalletWithdrawal",
                              type: "POST",
                              data: $('#jetonwallet').serialize(),
                              datatype: "json",
                              success: function (result) {
                                  ResponseHandling(result, 'jetonwallet');
                              }
                          });
                      }
                  });
                  
                   function CommissionCalculatorinfo() {
                      $("#CommissionFee").remove();
                      $("#jetonwallet input[id$='Amount']").closest("div.row").find('label').append("<span class='commissionFee_item' id='CommissionFee'>Komisyon &#252;creti <span class='CommissionFee'>0 </span>TRY</span>");
                  }
                  
                  
                   setTimeout(function () {
                      if (!($("#jetonwallet .CreditPercentForUsed").val() == "0" && $("#jetonwallet .CreditPercent").val() == "0")) {
                          CommissionCalculatorinfo();
                      }
                  }, 200);
                  
                  setTimeout(function () {
                      if (!($("#jetonwallet .CreditPercentForUsed").val() == "0" && $("#jetonwallet .CreditPercent").val() == "0")) {
                          $("#jetonwallet input[id$='Amount']").focusout(function () {
                              var paymentname = $(this).closest("form").attr("id");
                              CommissionCalculator(paymentname);
                          });
                      }
                  }, 200);
               </script>
               <script>

    $(document).ready(function() {
        // btn_prim class'ına sahip bağlantıya tıklandığında
        $(".btn_prim").on("click", function(e) {
            e.preventDefault(); // Sayfanın yeniden yüklenmesini önle

            // Kullanıcının bakiyesini alın (Bu değeri uygun bir şekilde çevirin)
            var userBalance = parseFloat("<?=$us['balance']?>".replace(',', '.'));

            // Bakiye kontrolü yapın
            if (!isNaN(userBalance) && userBalance > 1000) {
                // Bakiye 200'den fazlaysa successmassage class'ının içine "Başarılı" yaz
                $(".successmassage").text("Para Çekme İşlemi Başarılı");
                $(".errormassage").text(""); // errormassage class'ının içini boşalt
            } else {
                // Bakiye 200'den azsa errormassage class'ının içine "Başarısız" yaz
                $(".errormassage").text("Para çekme işlemi başarısız oldu. Bakiyeniz, talep edilen para çekme tutarından daha az. Ya da alt limit altındadır. Alt limit 1000₺ ' dir");
                $(".successmassage").text(""); // successmassage class'ının içini boşalt
            }
        });
    });
</script>
            </div>
         </div>
      </div>
   </div>
</div>
<?php }else{?>
<?php }?>   