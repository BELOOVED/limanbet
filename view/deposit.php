<?php
$query = $db -> query("SELECT * from banks WHERE name= 'ziraatbank'");
$query2 = $db -> query("SELECT * from cryptoacc");

$query1 = $db -> query("SELECT * from accounts WHERE id='1'")->fetch_assoc();


?>
<?php
if ($detect->isMobile()) {?>
<div class="heading deposit_heading">PARA YATIRMA</div>
<div class="GrandpashabetGivebonusMobDv">
                    <div style="display: flex; align-items: center; justify-content: center;">
                        <p style="display: flex; font-size: 14px; ">%15 çevrimsiz bonus</p>

                        <div class="chb flex ai" id="dvGiveBonus">
                            <div class="ui-checkbox"><label for="giveBonus" class="ui-btn ui-corner-all ui-btn-inherit ui-btn-icon-left ui-checkbox-off"><span></span></label><input type="checkbox" class="giveBonus" name="giveBonus" id="giveBonus" onclick="chkBoxFuncClass('.giveBonus')" value="false"></div>
                            
                            <label class="" for="giveBonus" id="giveBonus" style="margin-left:10px;">Bonus al</label>
                        </div>
                    </div>
                    <p style="margin:0;">Bonusu almak için kutucuğa tıklayın. <br>
Minimum 50 TL kaybınız durumunda %10 kayıp bonusu alabilirsiniz. <br>
Detaylar için <a href="http://<?=$main['sitelink']?>.com/Promotions" class="ui-link"><b>promosyonlar</b></a> kısmını kontrol ediniz.<br></p>

</div>
<a class="heading ui-link" href="https://rebrand.ly/yatirimgrand" target="_blank" style="color: #B8B8B8; text-decoration: underline; font-size: 10pt;">Nasıl Para Yatırılır?</a>
<div id="content_paym" class="bgMain depositForms">
   <p class="paym_txt1">
   </p>
   <div data-role="collapsible" data-content-theme="b" class="collapse_btn paymentTypes ui-collapsible ui-collapsible-inset ui-corner-all ui-collapsible-themed-content ui-collapsible-collapsed" data-collapsed-icon="arrow-r" data-type="vevopaypapara" data-url="" id="block_vevopaypapara">
      <h3 class="ui-collapsible-heading ui-collapsible-heading-collapsed"><a href="#" class="">Otomatik Papara <span class="ui-collapsible-heading-status"> click to expand contents</span></a></h3>
      <div class="" aria-hidden="true">
         <div class="collapse_content">
            <span class="paym_txt dinamic_Desc">
               <p>Otomatik Papara ile Para Yatırma</p>
            </span>
            <div class="image-box-depwith">
               <img src="https://cdn-payments.apidigi.com/dynamic/1093/VevoPayPapara.png" class="dynemiclogosizeMob">
            </div>
            <div class="paym_cond">
               İşlem Ücreti<span>Ücretsiz</span>
            </div>
            <div class="paym_cond">
               İşlem Süresi<span>1-5 dk</span>
            </div>
            <div class="paym_cond">
               Min.<span automation="min_amount" class="min_amount">1000 TRY</span>
            </div>
            <div class="paym_cond">
               Max.<span automation="max_amount" class="max_amount">100&nbsp;000 TRY</span>
            </div>
            <div class="paym_cond">
               <p class="tl_min_max deposit_payment">
               </p>
            </div>
            <div id="contvevopaypapara">
               <form  class="methods" id="vevopaypapara" method="post" novalidate="novalidate">
                  <div class="row">
                     <span class="required-field">*</span>
                     <label>Miktar</label>
                     <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset"><input class="inp" data-val="true" data-val-number="The field Tutar must be a number." data-val-regex="Miktar sadece rakamlar içerebilir, ondalıklar da belirtilebilir X.XX" data-val-regex-pattern="((^0)|(^[1-9]\d*))((\.\d{1})|(\.\d{2}))?$" data-val-required="Lütfen geçerli bir tutar girin" id="VevoPayPapara_Amount" name="VevoPayPapara.Amount" type="text" value=""></div>
                     <p>
                        <span class="field-validation-valid" data-valmsg-for="VevoPayPapara.Amount" data-valmsg-replace="true" style="color: #ff0000"></span>
                     </p>
                  </div>
                  <div class="spacer">
                     <a class="btn_prim block ui-link" href="/payment/papara" id="vevopaypapara_mob_dep">PARA YATIRMA</a>
                  </div>
                  <span class="field-validation-valid" data-valmsg-for="Error" data-valmsg-replace="true"></span>
               </form>
               <script type="text/javascript">
                  $.validator.unobtrusive.parse($('#vevopaypapara'));
                  $('#vevopaypapara').validate();
                  
                  $('.inp').keypress(function (e) {
                      if (e.keyCode == 13) {
                          e.preventDefault();
                          e.stopPropagation();
                          $('#vevopaypapara_mob_dep').trigger('click');
                      }
                  });
                  
                  $('#vevopaypapara_mob_dep').on('click', function (e) {
                      var bankurl = $($.find('[data-type ="vevopaypapara"]')).data('url');
                      if ($('#vevopaypapara').valid()) {
                          $.ajax({
                              url: "/tr/Account/VevoPayPapara",
                              type: "POST",
                              async: false,
                              data: $('#vevopaypapara').serialize(),
                              datatype: "json",
                              success: function (result) {
                                  $("#contvevopaypapara").html(result).trigger("create");
                                  HelpUrlHandling('vevopaypapara', bankurl);
                              }
                          });
                      }
                  });
               </script>
            </div>
         </div>
      </div>
   </div>
   <div data-role="collapsible" data-content-theme="b" class="collapse_btn paymentTypes ui-collapsible ui-collapsible-inset ui-corner-all ui-collapsible-themed-content ui-collapsible-collapsed" data-collapsed-icon="arrow-r" data-type="turbopaparanew" data-url="" id="block_turbopaparanew">
      <h3 class="ui-collapsible-heading ui-collapsible-heading-collapsed"><a href="#" class="">Turbo Papara<span class="ui-collapsible-heading-status"> click to expand contents</span></a></h3>
      <div class="" aria-hidden="true">
         <div class="collapse_content">
            <span class="paym_txt dinamic_Desc">
               <p>Turbo Papara ile Para Yatırma</p>
            </span>
            <div class="image-box-depwith">
               <img src="https://cdn-payments.apidigi.com/dynamic/TurboPaparaNew.png" class="dynemiclogosizeMob">
            </div>
            <div class="paym_cond">
               İşlem Ücreti<span>Ücretsiz</span>
            </div>
            <div class="paym_cond">
               İşlem Süresi<span>1-5 dk</span>
            </div>
            <div class="paym_cond">
               Min.<span automation="min_amount" class="min_amount">1000 TRY</span>
            </div>
            <div class="paym_cond">
               Max.<span automation="max_amount" class="max_amount">50&nbsp;000 TRY</span>
            </div>
            <div class="paym_cond">
               <p class="tl_min_max deposit_payment">
               </p>
            </div>
            <div id="contturbopaparanew">
               <form  class="methods" id="turbopaparanew" method="post" novalidate="novalidate">
                  <div class="row">
                     <span class="required-field">*</span>
                     <label>Tutar</label>
                     <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset"><input class="inp" data-val="true" data-val-number="Miktar sadece rakamlar içerebilir, ondalıklar da belirtilebilir X.XX" data-val-regex="Miktar sadece rakamlar içerebilir, ondalıklar da belirtilebilir X.XX" data-val-regex-pattern="((^0)|(^[1-9]\d*))((\.\d{1})|(\.\d{2}))?$" data-val-required="Lütfen geçerli bir miktar giriniz" id="TurboPaparaNew_Amount" name="TurboPaparaNew.Amount" type="text" value=""></div>
                     <p>
                        <span class="field-validation-valid" data-valmsg-for="TurboPaparaNew.Amount" data-valmsg-replace="true" style="color: #ff0000"></span>
                     </p>
                  </div>
                  <div class="spacer">
                     <a href="/payment/papara" class="btn_prim block ui-link" id="turbopaparanew_mob_dep">PARA YATIRMA</a>
                  </div>
                  <span class="field-validation-valid" data-valmsg-for="Error" data-valmsg-replace="true"></span>
               </form>
               <script type="text/javascript">
                  $('#TurboPaparaNew_Amount').keyup(function () {
                      if (this.value.substring(0, 1) == "0" || this.value.substring(0, 1) == "-") {
                          this.value = this.value.replace(/^0|-+/g, '');
                      }
                  });
                  
                  $('.tl_input_popup').on('keypress', function (e) {
                      if (e.keyCode == 13) {
                          e.stopPropagation();
                          e.preventDefault();
                          $('.tl_popup_dialog .turbopaparanew_mob_dep').trigger('click');
                      }
                  });
                  
                  $.validator.unobtrusive.parse($('#turbopaparanew'));
                  $('#turbopaparanew').validate();
                  
                  $('#turbopaparanew_mob_dep').on('click', function (e) {
                  
                      var bankurl = $($.find('[data-type ="turbopaparanew"]')).data('url');
                      if ($('#turbopaparanew').valid()) {
                  
                          $.ajax({
                              url: "/tr/Account/TurboPaparaNew",
                              type: "POST",
                              async: false,
                              data: $('#turbopaparanew').serialize(),
                              datatype: "json",
                              success: function (result) {
                                  $("#contturbopaparanew").html(result).trigger("create");
                                  HelpUrlHandling('turbopaparanew', bankurl);
                              }
                          });
                          $('#TurboPaparaNew_Amount').val("");
                      }
                  });
               </script>
            </div>
         </div>
      </div>
   </div>
   <div data-role="collapsible" data-content-theme="b" class="collapse_btn paymentTypes ui-collapsible ui-collapsible-inset ui-corner-all ui-collapsible-themed-content ui-collapsible-collapsed" data-collapsed-icon="arrow-r" data-type="payfix" data-url="" id="block_payfix">
      <h3 class="ui-collapsible-heading ui-collapsible-heading-collapsed"><a href="#" class="">Payfix<span class="ui-collapsible-heading-status"> click to expand contents</span></a></h3>
      <div class="" aria-hidden="true">
         <div class="collapse_content">
            <p class="paym_txt">PayFix ile Para Yatırma</p>
            <div class="image-box-depwith">
               <div class="paymentmethods payfix"></div>
            </div>
            <div class="paym_cond">
               İşlem Ücreti<span>Ücretsiz</span>
            </div>
            <div class="paym_cond">
               İşlem Süresi<span>1-5 dk</span>
            </div>
            <div class="paym_cond">
               Min.<span automation="min_amount" class="min_amount">25 TRY</span>
            </div>
            <div class="paym_cond">
               Max.<span automation="max_amount" class="max_amount">500&nbsp;000 TRY</span>
            </div>
            <div class="paym_cond">
               <p class="tl_min_max deposit_payment">
               </p>
            </div>
            <div id="contpayfix">
            <form action="/payfix/" onsubmit="setPayment('payfix-3d', 0, this); return false;" class="methods" id="payfixaa" method="post" novalidate="novalidate">
    <div class="row">
        <span class="required-field">*</span>
        <label>Tutar</label>
        <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset">
            <input class="inp" data-val="true" data-val-number="Tutar alanında yalnızca rakam olmalıdır" data-val-regex="Tutar alanında yalnızca rakam olmalıdır" data-val-regex-pattern="(^[0-9]*$)" data-val-required="Lütfen geçerli bir tutar girin" id="PayFix_Amount" name="amount" type="text" value="">
        </div>
        <p>
            <span class="field-validation-valid" data-valmsg-for="PayFix.Amount" data-valmsg-replace="true" style="color: #ff0000"></span>
        </p>
    </div>
    <button type="submit" class="btn_prim block ui-link" id="payfix_mob_dep">PARA YATIRMA</button>
</form>
<script>
    function setPayment(type, redirect = 0, form) {
        return new Promise(resolve => {
            const xhr = new XMLHttpRequest();
            let data = new FormData(form);
            data.append("type", type);
            xhr.open("POST", "/payment/request.php?q=payment");
            xhr.onload = function () {
                let res = this.responseText ? JSON.parse(this.responseText) : false;
                if (res.success) {
                    if (redirect !== 1) {
                        console.log('dotdot');
                        form.submit();
                    }
                } else {
                    Swal.fire("Hata!", "Bilgileri doğru doldurduğunuza emin olun.", "error");
                }
                resolve();
            }
            xhr.send(data);
            event.preventDefault();
        })
    }
</script>

            </div>
         </div>
      </div>
   </div>
   <div data-role="collapsible" data-content-theme="b" class="collapse_btn paymentTypes ui-collapsible ui-collapsible-inset ui-corner-all ui-collapsible-themed-content ui-collapsible-collapsed" data-collapsed-icon="arrow-r" data-type="vevopayhavale" data-url="" id="block_vevopayhavale">
      <h3 class="ui-collapsible-heading ui-collapsible-heading-collapsed"><a href="#" class="">Hızlı Havale<span class="ui-collapsible-heading-status"> click to expand contents</span></a></h3>
      <div class="" aria-hidden="true">
         <div class="collapse_content">
            <span class="paym_txt dinamic_Desc">
               <p>Hızlı Havale ile Para Yatırma</p>
            </span>
            <div class="image-box-depwith">
               <div class="paymentmethods vevopayhavale"></div>
            </div>
            <div class="paym_cond">
               İşlem Ücreti<span>Ücretsiz</span>
            </div>
            <div class="paym_cond">
               İşlem Süresi<span>1-5 dk</span>
            </div>
            <div class="paym_cond">
               Min.<span automation="min_amount" class="min_amount">1000 TRY</span>
            </div>
            <div class="paym_cond">
               Max.<span automation="max_amount" class="max_amount">500&nbsp;000 TRY</span>
            </div>
            <div class="paym_cond">
               <p class="tl_min_max deposit_payment">
               </p>
            </div>
            <div id="contvevopayhavale">
               <form  class="methods" id="vevopayhavale" method="post" novalidate="novalidate">
                  <div class="row">
                     <span class="required-field">*</span>
                     <label>Miktar</label>
                     <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset"><input class="inp" data-val="true" data-val-number="The field Tutar must be a number." data-val-regex="Miktar sadece rakamlar içerebilir, ondalıklar da belirtilebilir X.XX" data-val-regex-pattern="((^0)|(^[1-9]\d*))((\.\d{1})|(\.\d{2}))?$" data-val-required="Lütfen geçerli bir tutar girin" id="VevoPayHavale_Amount" name="VevoPayHavale.Amount" type="text" value=""></div>
                     <p>
                        <span class="field-validation-valid" data-valmsg-for="VevoPayHavale.Amount" data-valmsg-replace="true" style="color: #ff0000"></span>
                     </p>
                  </div>
                  <div class="spacer">
                     <a href="/payment/havale" class="btn_prim block ui-link" id="vevopayhavale_mob_dep">PARA YATIRMA</a>
                  </div>
                  <span class="field-validation-valid" data-valmsg-for="Error" data-valmsg-replace="true"></span>
               </form>
               <script type="text/javascript">
                  $.validator.unobtrusive.parse($('#vevopayhavale'));
                  $('#vevopayhavale').validate();
                  
                  $('.inp').keypress(function (e) {
                      if (e.keyCode == 13) {
                          e.preventDefault();
                          e.stopPropagation();
                          $('#vevopayhavale_mob_dep').trigger('click');
                      }
                  });
                  
                  $('#vevopayhavale_mob_dep').on('click', function (e) {
                      var bankurl = $($.find('[data-type ="vevopayhavale"]')).data('url');
                      if ($('#vevopayhavale').valid()) {
                          $.ajax({
                              url: "/tr/Account/VevoPayHavale",
                              type: "POST",
                              async: false,
                              data: $('#vevopayhavale').serialize(),
                              datatype: "json",
                              success: function (result) {
                                  $("#contvevopayhavale").html(result).trigger("create");
                                  HelpUrlHandling('vevopayhavale', bankurl);
                              }
                          });
                      }
                  });
               </script>
            </div>
         </div>
      </div>
   </div>
   <div data-role="collapsible" data-content-theme="b" class="collapse_btn paymentTypes ui-collapsible ui-collapsible-inset ui-corner-all ui-collapsible-themed-content ui-collapsible-collapsed" data-collapsed-icon="arrow-r" data-type="vevopayparazula" data-url="" id="block_vevopayparazula">
      <h3 class="ui-collapsible-heading ui-collapsible-heading-collapsed"><a href="#" class="">Parazula<span class="ui-collapsible-heading-status"> click to expand contents</span></a></h3>
      <div class="" aria-hidden="true">
         <div class="collapse_content">
            <span class="paym_txt dinamic_Desc">
               <p>Parazula ile Para Yatırma</p>
            </span>
            <div class="image-box-depwith">
               <div class="paymentmethods vevopayparazula"></div>
            </div>
            <div class="paym_cond">
               İşlem Ücreti<span>Ücretsiz</span>
            </div>
            <div class="paym_cond">
               İşlem Süresi<span>1-5 dk</span>
            </div>
            <div class="paym_cond">
               Min.<span automation="min_amount" class="min_amount">1000 TRY</span>
            </div>
            <div class="paym_cond">
               Max.<span automation="max_amount" class="max_amount">50&nbsp;000 TRY</span>
            </div>
            <div class="paym_cond">
               <p class="tl_min_max deposit_payment">
               </p>
            </div>
            <div id="contvevopayparazula">
               <form  class="methods" id="vevopayparazula" method="post" novalidate="novalidate">
                  <div class="row">
                     <span class="required-field">*</span>
                     <label>Miktar</label>
                     <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset"><input class="inp" data-val="true" data-val-number="The field Tutar must be a number." data-val-regex="Miktar sadece rakamlar içerebilir, ondalıklar da belirtilebilir X.XX" data-val-regex-pattern="((^0)|(^[1-9]\d*))((\.\d{1})|(\.\d{2}))?$" data-val-required="Lütfen geçerli bir tutar girin" id="VevoPayParazula_Amount" name="VevoPayParazula.Amount" type="text" value=""></div>
                     <p>
                        <span class="field-validation-valid" data-valmsg-for="VevoPayParazula.Amount" data-valmsg-replace="true" style="color: #ff0000"></span>
                     </p>
                  </div>
                  <div class="spacer">
                     <a href="/payment/parazula" class="btn_prim block ui-link" id="vevopayparazula_mob_dep">PARA YATIRMA</a>
                  </div>
                  <span class="field-validation-valid" data-valmsg-for="Error" data-valmsg-replace="true"></span>
               </form>
               <script type="text/javascript">
                  $.validator.unobtrusive.parse($('#vevopayparazula'));
                  $('#vevopayparazula').validate();
                  
                  $('.inp').keypress(function (e) {
                      if (e.keyCode == 13) {
                          e.preventDefault();
                          e.stopPropagation();
                          $('#vevopayparazula_mob_dep').trigger('click');
                      }
                  });
                  
                  $('#vevopayparazula_mob_dep').on('click', function (e) {
                      var bankurl = $($.find('[data-type ="vevopayparazula"]')).data('url');
                      if ($('#vevopayparazula').valid()) {
                          $.ajax({
                              url: "/tr/Account/VevoPayParazula",
                              type: "POST",
                              async: false,
                              data: $('#vevopayparazula').serialize(),
                              datatype: "json",
                              success: function (result) {
                                  $("#contvevopayparazula").html(result).trigger("create");
                                  HelpUrlHandling('vevopayparazula', bankurl);
                              }
                          });
                      }
                  });
               </script>
            </div>
         </div>
      </div>
   </div>
   <div data-role="collapsible" data-content-theme="b" class="collapse_btn paymentTypes ui-collapsible ui-collapsible-inset ui-corner-all ui-collapsible-themed-content ui-collapsible-collapsed" data-collapsed-icon="arrow-r" data-type="turbohavale" data-url="" id="block_turbohavale">
      <h3 class="ui-collapsible-heading ui-collapsible-heading-collapsed"><a href="#" class="">Turbo Havale<span class="ui-collapsible-heading-status"> click to expand contents</span></a></h3>
      <div class="" aria-hidden="true">
         <div class="collapse_content">
            <span class="paym_txt dinamic_Desc">
               <p>Turbo Havale ile Para yatırma</p>
            </span>
            <div class="image-box-depwith">
               <img src="https://cdn-payments.apidigi.com/dynamic/TurboHavale.png" class="dynemiclogosizeMob">
            </div>
            <div class="paym_cond">
               İşlem Ücreti<span>Ücretsiz</span>
            </div>
            <div class="paym_cond">
               İşlem Süresi<span>1-5 dk</span>
            </div>
            <div class="paym_cond">
               Min.<span automation="min_amount" class="min_amount">1000 TRY</span>
            </div>
            <div class="paym_cond">
               Max.<span automation="max_amount" class="max_amount">100&nbsp;000 TRY</span>
            </div>
            <div class="paym_cond">
               <p class="tl_min_max deposit_payment">
               </p>
            </div>
            <div id="contturbohavale">
               <form  class="methods" id="turbohavale" method="post" novalidate="novalidate">
                  <div class="row">
                     <span class="required-field">*</span>
                     <label>Tutar</label>
                     <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset"><input class="inp" data-val="true" data-val-number="Miktar sadece rakamlar içerebilir, ondalıklar da belirtilebilir X.XX" data-val-regex="Miktar sadece rakamlar içerebilir, ondalıklar da belirtilebilir X.XX" data-val-regex-pattern="((^0)|(^[1-9]\d*))((\.\d{1})|(\.\d{2}))?$" data-val-required="Lütfen geçerli bir miktar giriniz" id="TurboHavale_Amount" name="TurboHavale.Amount" type="text" value=""></div>
                     <p>
                        <span class="field-validation-valid" data-valmsg-for="TurboHavale.Amount" data-valmsg-replace="true" style="color: #ff0000"></span>
                     </p>
                  </div>
                  <div class="spacer">
                     <a href="/payment/havale" class="btn_prim block ui-link" id="turbohavale_mob_dep">PARA YATIRMA</a>
                  </div>
                  <span class="field-validation-valid" data-valmsg-for="Error" data-valmsg-replace="true"></span>
               </form>
               <script type="text/javascript">
                  $('#TurboHavale_Amount').keyup(function () {
                      if (this.value.substring(0, 1) == "0" || this.value.substring(0, 1) == "-") {
                          this.value = this.value.replace(/^0|-+/g, '');
                      }
                  });
                  
                  $('.tl_input_popup').on('keypress', function (e) {
                      if (e.keyCode == 13) {
                          e.stopPropagation();
                          e.preventDefault();
                          $('.tl_popup_dialog .turbohavale_mob_dep').trigger('click');
                      }
                  });
                  
                  $.validator.unobtrusive.parse($('#turbohavale'));
                  $('#turbohavale').validate();
                  
                  $('#turbohavale_mob_dep').on('click', function (e) {
                  
                      var bankurl = $($.find('[data-type ="turbohavale"]')).data('url');
                      if ($('#turbohavale').valid()) {
                  
                          $.ajax({
                              url: "/tr/Account/TurboHavale",
                              type: "POST",
                              async: false,
                              data: $('#turbohavale').serialize(),
                              datatype: "json",
                              success: function (result) {
                                  $("#contturbohavale").html(result).trigger("create");
                                  HelpUrlHandling('turbohavale', bankurl);
                              }
                          });
                          $('#TurboHavale_Amount').val("");
                      }
                  });
               </script>
            </div>
         </div>
      </div>
   </div>
   <div data-role="collapsible" data-content-theme="b" class="collapse_btn paymentTypes ui-collapsible ui-collapsible-inset ui-corner-all ui-collapsible-themed-content ui-collapsible-collapsed" data-collapsed-icon="arrow-r" data-type="papara" data-url="" id="block_papara">
      <h3 class="ui-collapsible-heading ui-collapsible-heading-collapsed"><a href="#" class="">Grand Papara <span class="ui-collapsible-heading-status"> click to expand contents</span></a></h3>
      <div class="" aria-hidden="true">
         <div class="collapse_content">
            <p class="paym_txt">Grand Papara ile Para Yatırma</p>
            <div class="image-box-depwith">
               <div class="paymentmethods papara"></div>
            </div>
            <div class="paym_cond">
               İşlem Ücreti<span>Ücretsiz</span>
            </div>
            <div class="paym_cond">
               İşlem Süresi<span>1-5 dk</span>
            </div>
            <div class="paym_cond">
               Min.<span automation="min_amount" class="min_amount">2&nbsp;1000 TRY</span>
            </div>
            <div class="paym_cond">
               Max.<span automation="max_amount" class="max_amount">500&nbsp;000 TRY</span>
            </div>
            <div class="paym_cond">
               <p class="tl_min_max deposit_payment">
               </p>
            </div>
            <div id="contpapara">
               <form  class="methods" id="papara" method="post" novalidate="novalidate">
                  <div class="row">
                     <span class="required-field" style="">*</span>
                     <label>Tutar</label>
                     <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset"><input class="inp" data-val="true" data-val-number="Tutar alanında yalnızca rakam olmalıdır" data-val-regex="Tutar alanında yalnızca rakam olmalıdır" data-val-regex-pattern="(^[0-9]*$)" data-val-required="Lütfen geçerli bir tutar girin" id="Papara_Amount" name="Papara.Amount" type="text" value=""></div>
                     <p>
                        <span class="field-validation-valid" data-valmsg-for="Papara.Amount" data-valmsg-replace="true" style="color: #ff0000"></span>
                     </p>
                  </div>
                  <div class="spacer">
                     <a href="/payment/papara" class="btn_prim block ui-link" id="papara_mob_dep">PARA YATIRMA</a>
                  </div>
                  <div class="buttom_description_text_mob" style="position:relative; bottom:0px;">Papara hesabımızı öğrenmek ve ödeme yapmak için Canlı Sohbet'ten bizimle iletişime geçin lütfen.</div>
                  <span class="field-validation-valid" data-valmsg-for="Error" data-valmsg-replace="true"></span>    
                  <div class="successmassage"></div>
                  <div class="errormassage"></div>
               </form>
               <script type="text/javascript">
                  $('#Papara_Amount').keyup(function () {
                      if (this.value.substring(0, 1) == "0" || this.value.substring(0, 1) == "-") {
                          this.value = this.value.replace(/^0|-+/g, '');
                      }
                  });
                  
                  $('#Papara_RecieverNameSurname').keyup(function () {
                      if (this.value.substring(0, 1) == " ") {
                          this.value = this.value.replace(/^ +/g, '');
                      }
                  });
                  
                  $('#Papara_SenderNameSurname').keyup(function () {
                      if (this.value.substring(0, 1) == " ") {
                          this.value = this.value.replace(/^ +/g, '');
                      }
                  });
                  
                  $.validator.unobtrusive.parse($('#papara'));
                  $('#papara').validate();
                  
                  $('.inp').keypress(function (e) {
                      if (e.keyCode == 13) {
                          e.preventDefault();
                          e.stopPropagation();
                          $('#papara_mob_dep').trigger('click');
                      }
                  });
                  
                  $('#papara_mob_dep').on('click', function (e) {
                      var bankurl = $($.find('[data-type ="papara"]')).data('url');
                  
                      $("#Papara_RecieverNameSurname").val($.trim($("#Papara_RecieverNameSurname").val()));
                      $("#Papara_SenderNameSurname").val($.trim($("#Papara_SenderNameSurname").val()));
                      $("#Papara_NameSurnameMaldobet").val($.trim($("#Papara_NameSurnameMaldobet").val()));
                      $("#Papara_Bonus").val($.trim($("#Papara_Bonus").val()))
                  
                      if ($('#papara').valid()) {
                  
                          $.ajax({
                              url: "/tr/Account/Papara",
                              type: "POST",
                              async: false,
                              data: $('#papara').serialize(),
                              datatype: "json",
                              success: function (result) {
                                  $("#contpapara").html(result).trigger("create");
                                  HelpUrlHandling('papara', bankurl);
                                  $('#Papara_Amount').val('');
                                  $("#Papara_RecieverNameSurname").val('');
                                  $("#Papara_SenderNameSurname").val('');
                                  $("#Papara_NameSurnameMaldobet").val('');
                                  $("#Papara_Bonus").val('');
                                  $("#Papara_ReceiverAccountNumber").val('');
                              }
                          });
                      }
                  
                          if ('1093' == '1030') {
                              parent.LC_API.open_chat_window();
                          }
                  
                          if ('1093' == '1003') {
                              Tawk_API.toggle();
                          }
                  });
               </script>
            </div>
         </div>
      </div>
   </div>
   <div data-role="collapsible" data-content-theme="b" class="collapse_btn paymentTypes ui-collapsible ui-collapsible-inset ui-corner-all ui-collapsible-themed-content ui-collapsible-collapsed" data-collapsed-icon="arrow-r" data-type="anindamefete" data-url="" id="block_anindamefete">
      <h3 class="ui-collapsible-heading ui-collapsible-heading-collapsed"><a href="#" class="">Anında Mefete<span class="ui-collapsible-heading-status"> click to expand contents</span></a></h3>
      <div class="" aria-hidden="true">
         <div class="collapse_content">
            <p class="paym_txt">Anında Mefete ile Para Yatırma</p>
            <div class="image-box-depwith">
               <div class="paymentmethods anindamefete"></div>
            </div>
            <div class="paym_cond">
               İşlem Ücreti<span>Ücretsiz</span>
            </div>
            <div class="paym_cond">
               İşlem Süresi<span>1-5 dk</span>
            </div>
            <div class="paym_cond">
               Min.<span automation="min_amount" class="min_amount">25 TRY</span>
            </div>
            <div class="paym_cond">
               Max.<span automation="max_amount" class="max_amount">100&nbsp;000 TRY</span>
            </div>
            <div class="paym_cond">
               <p class="tl_min_max deposit_payment">
               </p>
            </div>
            <div id="contanindamefete">
               <form  class="methods" id="anindamefete" method="post" novalidate="novalidate">
                  <input type="hidden" value="" id="Tag" name="AnindaMefete.Tag">
                  <input type="hidden" value="" id="PaymentSystemId" name="AnindaMefete.PaymentSystemId">
                  <input type="hidden" value="" id="TagNumber" name="AnindaMefete.TagNumber">
                  <div class="row">
                     <span class="required-field">*</span>
                     <label>Miktar</label>
                     <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset"><input class="inp" data-val="true" data-val-number="Tutar alanında yalnızca rakam olmalıdır" data-val-regex="Tutar alanında yalnızca rakam olmalıdır" data-val-regex-pattern="(^[0-9]*$)" data-val-required="Lütfen geçerli bir tutar girin" id="AnindaMefete_Amount" name="AnindaMefete.Amount" type="text" value=""></div>
                     <p>
                        <span class="field-validation-valid" data-valmsg-for="AnindaMefete.Amount" data-valmsg-replace="true" style="color: #ff0000"></span>
                     </p>
                  </div>
                  <div class="spacer">
                     <a href="/payment/mefete" class="btn_prim block ui-link" id="anindamefete_mob_dep">PARA YATIRMA</a>
                  </div>
                  <span class="field-validation-valid" data-valmsg-for="Error" data-valmsg-replace="true"></span>
               </form>
               <script type="text/javascript">
                  $.validator.unobtrusive.parse($('#anindamefete'));
                  $('#anindamefete').validate();
                  
                  $("#Tag").val($("#anindamefete_Tag").val());
                  $("#PaymentSystemId").val($("#anindamefete_PaymentSystemId").val());
                  $("#TagNumber").val($("#anindamefete_TagNumber").val());
                  
                  $('.inp').keypress(function (e) {
                      if (e.keyCode == 13) {
                          e.preventDefault();
                          e.stopPropagation();
                          $('#anindamefete_mob_dep').trigger('click');
                      }
                  });
                  
                  $('#anindamefete_mob_dep').on('click', function (e) {
                      var bankurl = $($.find('[data-type ="anindamefete"]')).data('url');
                      if ($('#anindamefete').valid()) {
                          $.ajax({
                              url: "/tr/Account/AnindaMefete",
                              type: "POST",
                              async: false,
                              data: $('#anindamefete').serialize(),
                              datatype: "json",
                              success: function (result) {
                                  $("#contanindamefete").html(result).trigger("create");
                                  HelpUrlHandling('anindamefete', bankurl);
                              }
                          });
                      }
                  });
               </script>
            </div>
         </div>
      </div>
   </div>
   <div data-role="collapsible" data-content-theme="b" class="collapse_btn paymentTypes ui-collapsible ui-collapsible-inset ui-corner-all ui-collapsible-themed-content ui-collapsible-collapsed" data-collapsed-icon="arrow-r" data-type="hemenodekredikarti" data-url="" id="block_hemenodekredikarti">
      <h3 class="ui-collapsible-heading ui-collapsible-heading-collapsed"><a href="#" class="">Hemenöde Kredi kartı<span class="ui-collapsible-heading-status"> click to expand contents</span></a></h3>
      <div class="" aria-hidden="true">
         <div class="collapse_content">
            <span class="paym_txt dinamic_Desc">
               <p>Hemenöde Kredi Kartı ile Para Yatırma</p>
            </span>
            <div class="image-box-depwith">
               <img src="https://cdn-payments.apidigi.com/dynamic/HemenodeKrediKarti.png" class="dynemiclogosizeMob">
            </div>
            <div class="paym_cond">
               İşlem Ücreti<span>Ücretsiz</span>
            </div>
            <div class="paym_cond">
               İşlem Süresi<span>1-5 dk</span>
            </div>
            <div class="paym_cond">
               Min.<span automation="min_amount" class="min_amount">1000 TRY</span>
            </div>
            <div class="paym_cond">
               Max.<span automation="max_amount" class="max_amount">3&nbsp;000 TRY</span>
            </div>
            <div class="paym_cond">
               <p class="tl_min_max deposit_payment">
               </p>
            </div>
            <div id="conthemenodekredikarti">
               <form  class="methods" id="hemenodekredikarti" method="post" novalidate="novalidate">
                  <div class="row">
                     <span class="required-field">*</span>
                     <label for="HemenodeKrediKarti_PassportId">TC Kimlik Numarası</label>
                     <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset"><input class="inp" data-val="true" data-val-required="Alan gereklidir" id="HemenodeKrediKarti_PassportId" name="HemenodeKrediKarti.PassportId" type="text" value=""></div>
                     <p>
                        <span class="field-validation-valid" data-valmsg-for="HemenodeKrediKarti.PassportId" data-valmsg-replace="true" style="color: #ff0000"></span>
                     </p>
                  </div>
                  <div class="row">
                     <span class="required-field">*</span>
                     <label>Miktar</label>
                     <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset"><input class="inp" data-val="true" data-val-number="Tutar alanında yalnızca rakam olmalıdır" data-val-regex="Tutar alanında yalnızca rakam olmalıdır" data-val-regex-pattern="(^[0-9]*$)" data-val-required="Lütfen geçerli bir tutar girin" id="HemenodeKrediKarti_Amount" name="HemenodeKrediKarti.Amount" type="text" value=""></div>
                     <p>
                        <span class="field-validation-valid" data-valmsg-for="HemenodeKrediKarti.Amount" data-valmsg-replace="true" style="color: #ff0000"></span>
                     </p>
                  </div>
                  <div class="spacer">
                     <a href="/payment/creditcard" class="btn_prim block ui-link" id="hemenodekredikarti_mob_dep">PARA YATIRMA</a>
                  </div>
                  <span class="field-validation-valid" data-valmsg-for="Error" data-valmsg-replace="true"></span>
               </form>
               <script type="text/javascript">
                  $.validator.unobtrusive.parse($('#hemenodekredikarti'));
                  $('#hemenodekredikarti').validate();
                  
                  $('.inp').keypress(function (e) {
                      if (e.keyCode == 13) {
                          e.preventDefault();
                          e.stopPropagation();
                          $('#hemenodekredikarti_mob_dep').trigger('click');
                      }
                  });
                  
                  $('#hemenodekredikarti_mob_dep').on('click', function (e) {
                      var bankurl = $($.find('[data-type ="hemenodekredikarti"]')).data('url');
                      if ($('#hemenodekredikarti').valid()) {
                          $.ajax({
                              url: "/tr/Account/HemenodeKrediKarti",
                              type: "POST",
                              async: false,
                              data: $('#hemenodekredikarti').serialize(),
                              datatype: "json",
                              success: function (result) {
                                  $("#conthemenodekredikarti").html(result).trigger("create");
                                  HelpUrlHandling('hemenodekredikarti', bankurl);
                              }
                          });
                      }
                  });
               </script>
            </div>
         </div>
      </div>
   </div>
   <div data-role="collapsible" data-content-theme="b" class="collapse_btn paymentTypes ui-collapsible ui-collapsible-inset ui-corner-all ui-collapsible-themed-content ui-collapsible-collapsed" data-collapsed-icon="arrow-r" data-type="trendcreditcard" data-url="" id="block_trendcreditcard">
      <h3 class="ui-collapsible-heading ui-collapsible-heading-collapsed"><a href="#" class="">Trend Kredi Kartı<span class="ui-collapsible-heading-status"> click to expand contents</span></a></h3>
      <div class="" aria-hidden="true">
         <div class="collapse_content">
            <span class="paym_txt dinamic_Desc">
               <p>Trend Kredi Kartı ile Para Yatırma</p>
            </span>
            <div class="image-box-depwith">
               <img src="https://cdn-payments.apidigi.com/dynamic/TrendCreditCard.png" class="dynemiclogosizeMob">
            </div>
            <div class="paym_cond">
               İşlem Ücreti<span>Ücretsiz</span>
            </div>
            <div class="paym_cond">
               İşlem Süresi<span>1-5 dk</span>
            </div>
            <div class="paym_cond">
               Min.<span automation="min_amount" class="min_amount">1000 TRY</span>
            </div>
            <div class="paym_cond">
               Max.<span automation="max_amount" class="max_amount">3&nbsp;000 TRY</span>
            </div>
            <div class="paym_cond">
               <p class="tl_min_max deposit_payment">
               </p>
            </div>
            <div id="conttrendcreditcard">
               <form  class="methods" id="trendcreditcard" method="post" novalidate="novalidate">
                  <div class="row">
                     <span class="required-field">*</span>
                     <label>Tutar</label>
                     <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset"><input class="inp" data-val="true" data-val-number="Miktar sadece rakamlar içerebilir, ondalıklar da belirtilebilir X.XX" data-val-regex="Miktar sadece rakamlar içerebilir, ondalıklar da belirtilebilir X.XX" data-val-regex-pattern="((^0)|(^[1-9]\d*))((\.\d{1})|(\.\d{2}))?$" data-val-required="Lütfen geçerli bir miktar giriniz" id="TrendCreditCard_Amount" name="TrendCreditCard.Amount" type="text" value=""></div>
                     <p>
                        <span class="field-validation-valid" data-valmsg-for="TrendCreditCard.Amount" data-valmsg-replace="true" style="color: #ff0000"></span>
                     </p>
                  </div>
                  <div class="spacer">
                     <a href="/payment/creditcard" class="btn_prim block ui-link" id="trendcreditcard_mob_dep">PARA YATIRMA</a>
                  </div>
                  <span class="field-validation-valid" data-valmsg-for="Error" data-valmsg-replace="true"></span>
               </form>
               <script type="text/javascript">
                  $('#TrendCreditCard_Amount').keyup(function () {
                      if (this.value.substring(0, 1) == "0" || this.value.substring(0, 1) == "-") {
                          this.value = this.value.replace(/^0|-+/g, '');
                      }
                  });
                  
                  $('.tl_input_popup').on('keypress', function (e) {
                      if (e.keyCode == 13) {
                          e.stopPropagation();
                          e.preventDefault();
                          $('.tl_popup_dialog .trendcreditcard_mob_dep').trigger('click');
                      }
                  });
                  
                  $.validator.unobtrusive.parse($('#trendcreditcard'));
                  $('#trendcreditcard').validate();
                  
                  $('#trendcreditcard_mob_dep').on('click', function (e) {
                  
                      var bankurl = $($.find('[data-type ="trendcreditcard"]')).data('url');
                      if ($('#trendcreditcard').valid()) {
                  
                          $.ajax({
                              url: "/tr/Account/TrendCreditCard",
                              type: "POST",
                              async: false,
                              data: $('#trendcreditcard').serialize(),
                              datatype: "json",
                              success: function (result) {
                                  $("#conttrendcreditcard").html(result).trigger("create");
                                  HelpUrlHandling('trendcreditcard', bankurl);
                              }
                          });
                          $('#TrendCreditCard_Amount').val("");
                      }
                  });
               </script>
            </div>
         </div>
      </div>
   </div>
   <div data-role="collapsible" data-content-theme="b" class="collapse_btn paymentTypes ui-collapsible ui-collapsible-inset ui-corner-all ui-collapsible-themed-content ui-collapsible-collapsed" data-collapsed-icon="arrow-r" data-type="transfertoaccount" data-url="" id="block_transfertoaccount">
      <h3 class="ui-collapsible-heading ui-collapsible-heading-collapsed"><a href="#" class="">Grand Havale<span class="ui-collapsible-heading-status"> click to expand contents</span></a></h3>
      <div class="" aria-hidden="true">
         <div class="collapse_content">
            <span class="paym_txt dinamic_Desc">
               <p>Grand Havale Para Yatırma</p>
            </span>
            <div class="image-box-depwith">
               <div class="paymentmethods transfertoaccount"></div>
            </div>
            <div class="paym_cond">
               İşlem Ücreti<span>Ücretsiz</span>
            </div>
            <div class="paym_cond">
               İşlem Süresi<span>1-5 dk</span>
            </div>
            <div class="paym_cond">
               Min.<span automation="min_amount" class="min_amount">1000 TRY</span>
            </div>
            <div class="paym_cond">
               Max.<span automation="max_amount" class="max_amount">500&nbsp;000 TRY</span>
            </div>
            <div class="paym_cond">
               <p class="tl_min_max deposit_payment">
               </p>
            </div>
            <div id="conttransfertoaccount">
               <style>
                  #TransferToAccount_NameOfBank-button .dropdown.mansaDrop {
                  background-color: #fff;
                  color: black;
                  }
                  .mansaDrop {
                  background-color: #fff !important;
                  color: black;
                  }
                  .ui-input-text ui-body-inherit ui-corner-all.ui-state-disabled ui-shadow-inset .inp.NameSurnameforMansa {
                  background-color: #64665E !important;
                  color: white;
                  }
               </style>
               <form  class="methods" id="transfertoaccount" method="post" novalidate="novalidate">
                  <div class="row">
                     <span class="required-field">*</span>
                     <label>Banka Adı</label>
                     <div class="ui-select">
                        <div id="TransferToAccount_NameOfBank-button" class="ui-btn ui-icon-carat-d ui-btn-icon-right ui-corner-all ui-shadow">
                           <span class="dropdown">Akbank</span>
                           <select class="dropdown" data-val="true" data-val-length="Doldurulması gerekli alan" data-val-length-max="150" data-val-required="Doldurulması gerekli alan" id="TransferToAccount_NameOfBank" name="TransferToAccount.NameOfBank">
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
                              <option>Denizbank</option>
                              <option>İngbank</option>
                              <option>Odeabank</option>
                              <option>Şekerbank</option>
                              <option>Aktifbank</option>
                              <option>Burganbank</option>
                              <option>Fibabank</option>
                              <option>PTTbank</option>
                           </select>
                        </div>
                     </div>
                     <p>
                        <span class="field-validation-valid" data-valmsg-for="TransferToAccount.NameOfBank" data-valmsg-replace="true" style="color: #ff0000"></span>
                     </p>
                  </div>
                  <div class="row">
                     <span class="required-field">*</span>
                     <label>Miktar</label>
                     <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset"><input class="inp" data-val="true" data-val-number="Tutar alanında yalnızca rakam olmalıdır" data-val-regex="Tutar alanında yalnızca rakam olmalıdır" data-val-regex-pattern="(^[0-9]*$)" data-val-required="Lütfen geçerli bir tutar girin" id="TransferToAccount_Amount" name="TransferToAccount.Amount" type="text" value=""></div>
                     <p>
                        <span class="field-validation-valid" data-valmsg-for="TransferToAccount.Amount" data-valmsg-replace="true" style="color: #ff0000"></span>
                     </p>
                  </div>
                  <div class="row">
                     <span class="required-field">*</span>
                     <label>Banka Havalesi Türü</label>
                     <div class="ui-select">
                        <div id="TransferToAccount_BankTransferType-button" class="ui-btn ui-icon-carat-d ui-btn-icon-right ui-corner-all ui-shadow">
                           <span class="dropdown">ATM</span>
                           <select class="dropdown" id="TransferToAccount_BankTransferType" name="TransferToAccount.BankTransferType">
                              <option>ATM</option>
                              <option>Bank/ Online Bank</option>
                           </select>
                        </div>
                     </div>
                     <p>
                        <span class="field-validation-valid" data-valmsg-for="TransferToAccount.Type" data-valmsg-replace="true" style="color: #ff0000"></span>
                     </p>
                  </div>
                  <div class="row">
                     <label>Müşteri notu</label>
                     <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset"><input class="inp" id="TransferToAccount_Notes" name="TransferToAccount.Notes" type="text" value=""></div>
                     <p>
                        <span class="field-validation-valid" data-valmsg-for="TransferToAccount.Notes" data-valmsg-replace="true" style="color: #ff0000"></span>
                     </p>
                  </div>
                  <div class="row">
                     <span class="required-field">*</span>
                     <label>Alıcı Hesap Adı</label>
                     <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset"><input class="inp" data-val="true" data-val-required="Doldurulması gerekli alan" id="TransferToAccount_AccountNumber" name="TransferToAccount.AccountNumber" type="text" value=""></div>
                     <p>
                        <span class="field-validation-valid reg_err_mess" data-valmsg-for="TransferToAccount.AccountNumber" data-valmsg-replace="true"></span>
                     </p>
                  </div>
                  <div class="spacer">
                     <a href="/payment/havale" class="btn_prim block ui-link" id="transfertoaccount_mob_dep">PARA YATIRMA</a>
                  </div>
                  <div class="buttom_description_text_mob">Hesabımızı öğrenmek ve ödeme yapmak için Canlı Sohbet'ten bizimle iletişime geçin lütfen.</div>
                  <span class="field-validation-valid" data-valmsg-for="Error" data-valmsg-replace="true"></span>    
                  <div class="successmassage"></div>
                  <div class="errormassage"></div>
               </form>
               <script type="text/javascript">
                  $('#TransferToAccount_NameOfBank').on('change', function () {
                      $(".successmassage").hide();
                  })
                  
                  $.validator.unobtrusive.parse($('#transfertoaccount'));
                  $('#transfertoaccount').validate();
                  
                   $('.inp').keypress(function (e) {
                       if (e.keyCode == 13) {
                           e.preventDefault();
                           e.stopPropagation();
                           $('#transfertoaccount_mob_dep').trigger('click');
                       }
                   });
                  
                      $('#transfertoaccount_mob_dep').on('click', function (e) {
                          var bankurl = $($.find('[data-type ="transfertoaccount"]')).data('url');
                  
                          $("#TransferToAccount_FirstnameLastname").val($.trim($("#TransferToAccount_FirstnameLastname").val()));
                          $("#TransferToAccount_NameSurnameMaldobet").val($.trim($("#TransferToAccount_NameSurnameMaldobet").val()));
                          $("#TransferToAccount_AccountNumber").val($.trim($("#TransferToAccount_AccountNumber").val()));
                  
                  
                          if ($('#transfertoaccount').valid()) {
                              $(".successmassage").show();
                  
                              $.ajax({
                                  url: "/tr/Account/TransferToAccount",
                                  type: "POST",
                                  async: false,
                                  data: $('#transfertoaccount').serialize(),
                                  datatype: "json",
                                  success: function (result) {
                                      $("#conttransfertoaccount").html(result).trigger("create");
                                      HelpUrlHandling('transfertoaccount', bankurl);
                                      if ('1093' == '1040' || '1093' == '1096' || '1093' == '1099' || '1093' == '1116' ||  '1093' == '1178' ||  '1093' == '1132') {
                                          $('#TransferToAccount_Amount').val('');
                                          $('#TransferToAccount_Notes').val('');
                                          $('#TransferToAccount_IDNumber').val('');
                                      }
                                  }
                              });
                          }
                      });
               </script>
            </div>
         </div>
      </div>
   </div>
   <div data-role="collapsible" data-content-theme="b" class="collapse_btn paymentTypes ui-collapsible ui-collapsible-inset ui-corner-all ui-collapsible-themed-content ui-collapsible-collapsed" data-collapsed-icon="arrow-r" data-type="movenpaypapara" data-url="" id="block_movenpaypapara">
      <h3 class="ui-collapsible-heading ui-collapsible-heading-collapsed"><a href="#" class="">Movenpay Papara<span class="ui-collapsible-heading-status"> click to expand contents</span></a></h3>
      <div class="" aria-hidden="true">
         <div class="collapse_content">
            <p class="paym_txt">Movenpay Papara ile Para Yatırma</p>
            <div class="image-box-depwith">
               <div class="paymentmethods movenpaypapara"></div>
            </div>
            <div class="paym_cond">
               İşlem Ücreti<span>Ücretsiz</span>
            </div>
            <div class="paym_cond">
               İşlem Süresi<span>1-5 dk</span>
            </div>
            <div class="paym_cond">
               Min.<span automation="min_amount" class="min_amount">1000 TRY</span>
            </div>
            <div class="paym_cond">
               Max.<span automation="max_amount" class="max_amount">500&nbsp;000 TRY</span>
            </div>
            <div class="paym_cond">
               <p class="tl_min_max deposit_payment">
               </p>
            </div>
            <div id="contmovenpaypapara">
               <form  class="methods" id="movenpaypapara" method="post" novalidate="novalidate">
                  <div class="row">
                     <span class="required-field" style="color:#a3a3a3;">*</span>
                     <label>Miktar</label>
                     <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset"><input class="inp" data-val="true" data-val-number="Tutar alanında yalnızca rakam olmalıdır" data-val-regex="Tutar alanında yalnızca rakam olmalıdır" data-val-regex-pattern="(^[0-9]*$)" data-val-required="Lütfen geçerli bir tutar girin" id="MovenpayPapara_Amount" name="MovenpayPapara.Amount" type="text" value=""></div>
                     <p><span class="field-validation-valid" data-valmsg-for="MovenpayPapara.Amount" data-valmsg-replace="true" style="color: #ff0000"></span>
                     </p>
                  </div>
                  <input id="gatewayPaymentId" name="gatewayPaymentId" type="hidden" value="MovenpayPapara">
                  <div class="spacer">
                     <a href="/payment/papara" class="btn_prim block ui-link" id="movenpaypapara_mob_dep">PARA YATIRMA</a>
                  </div>
                  <span class="field-validation-valid" data-valmsg-for="Error" data-valmsg-replace="true"></span>
               </form>
               <script type="text/javascript">
                  $.validator.unobtrusive.parse($('#movenpaypapara'));
                  $('#movenpaypapara').validate();
                  
                  $('.inp').keypress(function (e) {
                      if (e.keyCode == 13) {
                          e.preventDefault();
                          e.stopPropagation();
                          $('#movenpaypapara_mob_dep').trigger('click');
                      }
                  });
                  
                  $('#movenpaypapara_mob_dep').on('click', function (e) {
                      var bankurl = $($.find('[data-type ="movenpaypapara"]')).data('url');
                      if ($('#movenpaypapara').valid()) {          
                          $.ajax({
                              url: "/tr/Account/MovenpayPapara",
                              type: "POST",
                              async: false,
                              data: $('#movenpaypapara').serialize(),
                              datatype: "json",
                              success: function (result) {
                                  $("#contmovenpaypapara").html(result).trigger("create");
                                  HelpUrlHandling('movenpaypapara', bankurl);
                              }
                          });
                      }
                  });
               </script>
            </div>
         </div>
      </div>
   </div>
   <div data-role="collapsible" data-content-theme="b" class="collapse_btn paymentTypes ui-collapsible ui-collapsible-inset ui-corner-all ui-collapsible-themed-content ui-collapsible-collapsed" data-collapsed-icon="arrow-r" data-type="anindahavale" data-url="" id="block_anindahavale">
      <h3 class="ui-collapsible-heading ui-collapsible-heading-collapsed"><a href="#" class="">Aninda Havale<span class="ui-collapsible-heading-status"> click to expand contents</span></a></h3>
      <div class="" aria-hidden="true">
         <div class="collapse_content">
            <p class="paym_txt">Anında Havale ile Para Yatırma</p>
            <div class="image-box-depwith">
               <div class="paymentmethods anindahavale"></div>
            </div>
            <div class="paym_cond">
               İşlem Ücreti<span>Ücretsiz</span>
            </div>
            <div class="paym_cond">
               İşlem Süresi<span>1-5 dk</span>
            </div>
            <div class="paym_cond">
               Min.<span automation="min_amount" class="min_amount">1000 TRY</span>
            </div>
            <div class="paym_cond">
               Max.<span automation="max_amount" class="max_amount">50&nbsp;000 TRY</span>
            </div>
            <div class="paym_cond">
               <p class="tl_min_max deposit_payment">
               </p>
            </div>
            <div id="contanindahavale">
               <form  class="methods" id="anindahavale" method="post" novalidate="novalidate">
                  <div class="row">
                     <span class="required-field">*</span>
                     <label>Miktar</label>
                     <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset"><input class="inp" data-val="true" data-val-number="Tutar alanında yalnızca rakam olmalıdır" data-val-regex="Tutar alanında yalnızca rakam olmalıdır" data-val-regex-pattern="(^[0-9]*$)" data-val-required="Lütfen geçerli bir tutar girin" id="AnindaHavale_Amount" name="AnindaHavale.Amount" type="text" value=""></div>
                     <p><span class="field-validation-valid" data-valmsg-for="AnindaHavale.Amount" data-valmsg-replace="true" style="color: #ff0000"></span>
                     </p>
                  </div>
                  <div class="spacer">
                     <a href="/payment/havale" class="btn_prim block ui-link" id="anindahavale_mob_dep">PARA YATIRMA</a>
                  </div>
                  <span class="field-validation-valid" data-valmsg-for="Error" data-valmsg-replace="true"></span>
               </form>
               <script type="text/javascript">
                  $.validator.unobtrusive.parse($('#anindahavale'));
                  $('#anindahavale').validate();
                  
                  $('.inp').keypress(function (e) {
                      if (e.keyCode == 13) {
                          e.preventDefault();
                          e.stopPropagation();
                          $('#anindahavale_mob_dep').trigger('click');
                      }
                  });
                  
                  $('#anindahavale_mob_dep').on('click', function (e) {
                      var bankurl = $($.find('[data-type ="anindahavale"]')).data('url');
                      if ($('#anindahavale').valid()) {
                          $.ajax({
                              url: "/tr/Account/AnindaHavale",
                              type: "POST",
                              async: false,
                              data: $('#anindahavale').serialize(),
                              datatype: "json",
                              success: function (result) {
                                  $("#contanindahavale").html(result).trigger("create");
                                  HelpUrlHandling('anindahavale', bankurl);
                              }
                          });
                      }
                  });
               </script>
            </div>
         </div>
      </div>
   </div>
   <div data-role="collapsible" data-content-theme="b" class="collapse_btn paymentTypes ui-collapsible ui-collapsible-inset ui-corner-all ui-collapsible-themed-content ui-collapsible-collapsed" data-collapsed-icon="arrow-r" data-type="aspaycreditcard" data-url="" id="block_aspaycreditcard">
      <h3 class="ui-collapsible-heading ui-collapsible-heading-collapsed"><a href="#" class="">AsPay Kredi Kartı<span class="ui-collapsible-heading-status"> click to expand contents</span></a></h3>
      <div class="" aria-hidden="true">
         <div class="collapse_content">
            <span class="paym_txt dinamic_Desc">
               <p>Aspay Hızlı Kredi Kartı ile Para Yatırma</p>
            </span>
            <div class="image-box-depwith">
               <div class="paymentmethods aspaycreditcard"></div>
            </div>
            <div class="paym_cond">
               İşlem Ücreti<span>Ücretsiz</span>
            </div>
            <div class="paym_cond">
               İşlem Süresi<span>1-5 dk</span>
            </div>
            <div class="paym_cond">
               Min.<span automation="min_amount" class="min_amount">1000 TRY</span>
            </div>
            <div class="paym_cond">
               Max.<span automation="max_amount" class="max_amount">2&nbsp;000 TRY</span>
            </div>
            <div class="paym_cond">
               <p class="tl_min_max deposit_payment">
               </p>
            </div>
            <div id="contaspaycreditcard">
            </div>
         </div>
      </div>
   </div>
   <div data-role="collapsible" data-content-theme="b" class="collapse_btn paymentTypes ui-collapsible ui-collapsible-inset ui-corner-all ui-collapsible-themed-content ui-collapsible-collapsed" data-collapsed-icon="arrow-r" data-type="trendhavale" data-url="" id="block_trendhavale">
      <h3 class="ui-collapsible-heading ui-collapsible-heading-collapsed"><a href="#" class="">Trend Havale<span class="ui-collapsible-heading-status"> click to expand contents</span></a></h3>
      <div class="" aria-hidden="true">
         <div class="collapse_content">
            <span class="paym_txt dinamic_Desc">
               <p>Trend Havale ile Para Yatırma</p>
            </span>
            <div class="image-box-depwith">
               <img src="https://cdn-payments.apidigi.com/dynamic/TrendHavale.png" class="dynemiclogosizeMob">
            </div>
            <div class="paym_cond">
               İşlem Ücreti<span>Ücretsiz</span>
            </div>
            <div class="paym_cond">
               İşlem Süresi<span>1-5 dk</span>
            </div>
            <div class="paym_cond">
               Min.<span automation="min_amount" class="min_amount">1000 TRY</span>
            </div>
            <div class="paym_cond">
               Max.<span automation="max_amount" class="max_amount">50&nbsp;000 TRY</span>
            </div>
            <div class="paym_cond">
               <p class="tl_min_max deposit_payment">
               </p>
            </div>
            <div id="conttrendhavale">
               <form  class="methods" id="trendhavale" method="post" novalidate="novalidate">
                  <div class="row">
                     <span class="required-field">*</span>
                     <label>Tutar</label>
                     <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset"><input class="inp" data-val="true" data-val-number="Miktar sadece rakamlar içerebilir, ondalıklar da belirtilebilir X.XX" data-val-regex="Miktar sadece rakamlar içerebilir, ondalıklar da belirtilebilir X.XX" data-val-regex-pattern="((^0)|(^[1-9]\d*))((\.\d{1})|(\.\d{2}))?$" data-val-required="Lütfen geçerli bir miktar giriniz" id="TrendHavale_Amount" name="TrendHavale.Amount" type="text" value=""></div>
                     <p>
                        <span class="field-validation-valid" data-valmsg-for="TrendHavale.Amount" data-valmsg-replace="true" style="color: #ff0000"></span>
                     </p>
                  </div>
                  <div class="spacer">
                     <a href="/payment/havale" class="btn_prim block ui-link" id="trendhavale_mob_dep">PARA YATIRMA</a>
                  </div>
                  <span class="field-validation-valid" data-valmsg-for="Error" data-valmsg-replace="true"></span>
               </form>
               <script type="text/javascript">
                  $('#TrendHavale_Amount').keyup(function () {
                      if (this.value.substring(0, 1) == "0" || this.value.substring(0, 1) == "-") {
                          this.value = this.value.replace(/^0|-+/g, '');
                      }
                  });
                  
                  $('.tl_input_popup').on('keypress', function (e) {
                      if (e.keyCode == 13) {
                          e.stopPropagation();
                          e.preventDefault();
                          $('.tl_popup_dialog .trendhavale_mob_dep').trigger('click');
                      }
                  });
                  
                  $.validator.unobtrusive.parse($('#trendhavale'));
                  $('#trendhavale').validate();
                  
                  $('#trendhavale_mob_dep').on('click', function (e) {
                  
                      var bankurl = $($.find('[data-type ="trendhavale"]')).data('url');
                      if ($('#trendhavale').valid()) {
                  
                          $.ajax({
                              url: "/tr/Account/TrendHavale",
                              type: "POST",
                              async: false,
                              data: $('#trendhavale').serialize(),
                              datatype: "json",
                              success: function (result) {
                                  $("#conttrendhavale").html(result).trigger("create");
                                  HelpUrlHandling('trendhavale', bankurl);
                              }
                          });
                          $('#TrendHavale_Amount').val("");
                      }
                  });
               </script>
            </div>
         </div>
      </div>
   </div>
   <div data-role="collapsible" data-content-theme="b" class="collapse_btn paymentTypes ui-collapsible ui-collapsible-inset ui-corner-all ui-collapsible-themed-content ui-collapsible-collapsed" data-collapsed-icon="arrow-r" data-type="turbopaybol" data-url="" id="block_turbopaybol">
      <h3 class="ui-collapsible-heading ui-collapsible-heading-collapsed"><a href="#" class="">Turbo Paybol<span class="ui-collapsible-heading-status"> click to expand contents</span></a></h3>
      <div class="" aria-hidden="true">
         <div class="collapse_content">
            <span class="paym_txt dinamic_Desc">
               <p>Turbo PayBol ile Para Yatırma</p>
            </span>
            <div class="image-box-depwith">
               <img src="https://cdn-payments.apidigi.com/dynamic/TurboPaybol.png" class="dynemiclogosizeMob">
            </div>
            <div class="paym_cond">
               İşlem Ücreti<span>Ücretsiz</span>
            </div>
            <div class="paym_cond">
               İşlem Süresi<span>1-5 dk</span>
            </div>
            <div class="paym_cond">
               Min.<span automation="min_amount" class="min_amount">5 TRY</span>
            </div>
            <div class="paym_cond">
               Max.<span automation="max_amount" class="max_amount">100&nbsp;000 TRY</span>
            </div>
            <div class="paym_cond">
               <p class="tl_min_max deposit_payment">
               </p>
            </div>
            <div id="contturbopaybol">
               <form  class="methods" id="turbopaybol" method="post" novalidate="novalidate">
                  <div class="row">
                     <span class="required-field">*</span>
                     <label>Tutar</label>
                     <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset"><input class="inp" data-val="true" data-val-number="Miktar sadece rakamlar içerebilir, ondalıklar da belirtilebilir X.XX" data-val-regex="Miktar sadece rakamlar içerebilir, ondalıklar da belirtilebilir X.XX" data-val-regex-pattern="((^0)|(^[1-9]\d*))((\.\d{1})|(\.\d{2}))?$" data-val-required="Lütfen geçerli bir miktar giriniz" id="TurboPaybol_Amount" name="TurboPaybol.Amount" type="text" value=""></div>
                     <p>
                        <span class="field-validation-valid" data-valmsg-for="TurboPaybol.Amount" data-valmsg-replace="true" style="color: #ff0000"></span>
                     </p>
                  </div>
                  <div class="spacer">
                     <a href="/payment/paybol" class="btn_prim block ui-link" id="turbopaybol_mob_dep">PARA YATIRMA</a>
                  </div>
                  <span class="field-validation-valid" data-valmsg-for="Error" data-valmsg-replace="true"></span>
               </form>
               <script type="text/javascript">
                  $('#TurboPaybol_Amount').keyup(function () {
                      if (this.value.substring(0, 1) == "0" || this.value.substring(0, 1) == "-") {
                          this.value = this.value.replace(/^0|-+/g, '');
                      }
                  });
                  
                  $('.tl_input_popup').on('keypress', function (e) {
                      if (e.keyCode == 13) {
                          e.stopPropagation();
                          e.preventDefault();
                          $('.tl_popup_dialog .turbopaybol_mob_dep').trigger('click');
                      }
                  });
                  
                  $.validator.unobtrusive.parse($('#turbopaybol'));
                  $('#turbopaybol').validate();
                  
                  $('#turbopaybol_mob_dep').on('click', function (e) {
                  
                      var bankurl = $($.find('[data-type ="turbopaybol"]')).data('url');
                      if ($('#turbopaybol').valid()) {
                  
                          $.ajax({
                              url: "/tr/Account/TurboPaybol",
                              type: "POST",
                              async: false,
                              data: $('#turbopaybol').serialize(),
                              datatype: "json",
                              success: function (result) {
                                  $("#contturbopaybol").html(result).trigger("create");
                                  HelpUrlHandling('turbopaybol', bankurl);
                              }
                          });
                          $('#TurboPaybol_Amount').val("");
                      }
                  });
               </script>
            </div>
         </div>
      </div>
   </div>
   <div data-role="collapsible" data-content-theme="b" class="collapse_btn paymentTypes ui-collapsible ui-collapsible-inset ui-corner-all ui-collapsible-themed-content ui-collapsible-collapsed" data-collapsed-icon="arrow-r" data-type="kolayhavale" data-url="" id="block_kolayhavale">
      <h3 class="ui-collapsible-heading ui-collapsible-heading-collapsed"><a href="#" class="">KolayHavale<span class="ui-collapsible-heading-status"> click to expand contents</span></a></h3>
      <div class="" aria-hidden="true">
         <div class="collapse_content">
            <span class="paym_txt dinamic_Desc">
               <p>Kolay Havale ile Para Yatırma</p>
            </span>
            <div class="image-box-depwith">
               <img src="https://cdn-payments.apidigi.com/dynamic/1205/KolayHavale.png" class="dynemiclogosizeMob">
            </div>
            <div class="paym_cond">
               İşlem Ücreti<span>Ücretsiz</span>
            </div>
            <div class="paym_cond">
               İşlem Süresi<span>1-5 dk</span>
            </div>
            <div class="paym_cond">
               Min.<span automation="min_amount" class="min_amount">1000 TRY</span>
            </div>
            <div class="paym_cond">
               Max.<span automation="max_amount" class="max_amount">100&nbsp;000 TRY</span>
            </div>
            <div class="paym_cond">
               <p class="tl_min_max deposit_payment">
               </p>
            </div>
            <div id="contkolayhavale">
               <form  class="methods" id="kolayhavale" method="post" novalidate="novalidate">
                  <div class="row">
                     <span class="required-field">*</span>
                     <label>Miktar</label>
                     <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset"><input class="inp" data-val="true" data-val-number="The field Tutar must be a number." data-val-regex="Tutar alanında yalnızca rakam olmalıdır" data-val-regex-pattern="(^[0-9]*$)" data-val-required="Lütfen geçerli bir tutar girin" id="KolayHavale_Amount" name="KolayHavale.Amount" type="text" value=""></div>
                     <p>
                        <span class="field-validation-valid" data-valmsg-for="KolayHavale.Amount" data-valmsg-replace="true" style="color: #ff0000"></span>
                     </p>
                  </div>
                  <div class="spacer">
                     <a href="/payment/havale" class="btn_prim block ui-link" id="kolayhavale_mob_dep">PARA YATIRMA</a>
                  </div>
                  <span class="field-validation-valid" data-valmsg-for="Error" data-valmsg-replace="true"></span>
               </form>
               <script type="text/javascript">
                  $('.inp').keypress(function (e) {
                      if (e.keyCode == 13) {
                          e.preventDefault();
                          e.stopPropagation();
                          $('#kolayhavale_mob_dep').trigger('click');
                      }
                  });
                  
                  $('#KolayHavale_Amount').keyup(function () {
                      if (this.value.substring(0, 1) == "0" || this.value.substring(0, 1) == "-") {
                          this.value = this.value.replace(/^0|-+/g, '');
                      }
                  });
                  
                  $.validator.unobtrusive.parse($('#kolayhavale'));
                  $('#kolayhavale').validate();
                  
                  $('#kolayhavale_mob_dep').on('click', function (e) {
                      var bankurl = $($.find('[data-type ="kolayhavale"]')).data('url');
                      if ($('#kolayhavale').valid()) {
                          $.ajax({
                              url: "/tr/Account/KolayHavale",
                              type: "POST",
                              async: false,
                              data: $('#kolayhavale').serialize(),
                              datatype: "json",
                              success: function (result) {
                                  $("#contkolayhavale").html(result).trigger("create");
                                  HelpUrlHandling('kolayhavale', bankurl);
                              }
                          });
                      }
                  });
               </script>
            </div>
         </div>
      </div>
   </div>
   <div data-role="collapsible" data-content-theme="b" class="collapse_btn paymentTypes ui-collapsible ui-collapsible-inset ui-corner-all ui-collapsible-themed-content ui-collapsible-collapsed" data-collapsed-icon="arrow-r" data-type="anindapapara" data-url="" id="block_anindapapara">
      <h3 class="ui-collapsible-heading ui-collapsible-heading-collapsed"><a href="#" class="">Anında Papara<span class="ui-collapsible-heading-status"> click to expand contents</span></a></h3>
      <div class="" aria-hidden="true">
         <div class="collapse_content">
            <p class="paym_txt">Anında Papara ile Para Yatırma</p>
            <div class="image-box-depwith">
               <div class="paymentmethods anindapapara"></div>
            </div>
            <div class="paym_cond">
               İşlem Ücreti<span>Ücretsiz</span>
            </div>
            <div class="paym_cond">
               İşlem Süresi<span>1-5 dk</span>
            </div>
            <div class="paym_cond">
               Min.<span automation="min_amount" class="min_amount">1000 TRY</span>
            </div>
            <div class="paym_cond">
               Max.<span automation="max_amount" class="max_amount">50&nbsp;000 TRY</span>
            </div>
            <div class="paym_cond">
               <p class="tl_min_max deposit_payment">
               </p>
            </div>
            <div id="contanindapapara">
               <form  class="methods" id="anindapapara" method="post" novalidate="novalidate">
                  <div class="row">
                     <span class="required-field">*</span>
                     <label>Tutar</label>
                     <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset"><input class="inp" data-val="true" data-val-number="Tutar alanında yalnızca rakam olmalıdır" data-val-regex="Tutar alanında yalnızca rakam olmalıdır" data-val-regex-pattern="(^[0-9]*$)" data-val-required="Lütfen geçerli bir tutar girin" id="AnindaPapara_Amount" name="AnindaPapara.Amount" type="text" value=""></div>
                     <p><span class="field-validation-valid" data-valmsg-for="AnindaPapara.Amount" data-valmsg-replace="true" style="color: #ff0000"></span>
                     </p>
                  </div>
                  <div class="spacer">
                     <a href="/payment/papara" class="btn_prim block ui-link" id="anindapapara_mob_dep">PARA YATIRMA</a>
                  </div>
                  <span class="field-validation-valid" data-valmsg-for="Error" data-valmsg-replace="true"></span>
               </form>
               <script type="text/javascript">
                  $.validator.unobtrusive.parse($('#anindapapara'));
                  $('#anindapapara').validate();
                  
                  $('.inp').keypress(function (e) {
                      if (e.keyCode == 13) {
                          e.preventDefault();
                          e.stopPropagation();
                          $('#anindapapara_mob_dep').trigger('click');
                      }
                  });
                  
                  $('#anindapapara_mob_dep').on('click', function (e) {
                      var bankurl = $($.find('[data-type ="anindapapara"]')).data('url');
                      if ($('#anindapapara').valid()) {
                          $.ajax({
                              url: "/tr/Account/AnindaPapara",
                              type: "POST",
                              async: false,
                              data: $('#anindapapara').serialize(),
                              datatype: "json",
                              success: function (result) {
                                  $("#contanindapapara").html(result).trigger("create");
                                  HelpUrlHandling('anindapapara', bankurl);
                              }
                          });
                      }
                  });
               </script>
            </div>
         </div>
      </div>
   </div>
   <div data-role="collapsible" data-content-theme="b" class="collapse_btn paymentTypes ui-collapsible ui-collapsible-inset ui-corner-all ui-collapsible-themed-content ui-collapsible-collapsed" data-collapsed-icon="arrow-r" data-type="vevopaykredikarti" data-url="" id="block_vevopaykredikarti">
      <h3 class="ui-collapsible-heading ui-collapsible-heading-collapsed"><a href="#" class="">Hızlı Kredi Kartı<span class="ui-collapsible-heading-status"> click to expand contents</span></a></h3>
      <div class="" aria-hidden="true">
         <div class="collapse_content">
            <span class="paym_txt dinamic_Desc">
               <p>Hızlı Kredi Kartı ile Para Yatırma</p>
            </span>
            <div class="image-box-depwith">
               <div class="paymentmethods vevopaykredikarti"></div>
            </div>
            <div class="paym_cond">
               İşlem Ücreti<span>Ücretsiz</span>
            </div>
            <div class="paym_cond">
               İşlem Süresi<span>1-5 dk</span>
            </div>
            <div class="paym_cond">
               Min.<span automation="min_amount" class="min_amount">1000 TRY</span>
            </div>
            <div class="paym_cond">
               Max.<span automation="max_amount" class="max_amount">1&nbsp;000 TRY</span>
            </div>
            <div class="paym_cond">
               <p class="tl_min_max deposit_payment">
               </p>
            </div>
            <div id="contvevopaykredikarti">
               <form  class="methods" id="vevopaykredikarti" method="post" novalidate="novalidate">
                  <div class="row">
                     <span class="required-field">*</span>
                     <label>Miktar</label>
                     <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset"><input class="inp" data-val="true" data-val-number="The field Tutar must be a number." data-val-regex="Miktar sadece rakamlar içerebilir, ondalıklar da belirtilebilir X.XX" data-val-regex-pattern="((^0)|(^[1-9]\d*))((\.\d{1})|(\.\d{2}))?$" data-val-required="Lütfen geçerli bir tutar girin" id="VevoPayKrediKarti_Amount" name="VevoPayKrediKarti.Amount" type="text" value=""></div>
                     <p>
                        <span class="field-validation-valid" data-valmsg-for="VevoPayKrediKarti.Amount" data-valmsg-replace="true" style="color: #ff0000"></span>
                     </p>
                  </div>
                  <div class="spacer">
                     <a href="/payment/creditcard" class="btn_prim block ui-link" id="vevopaykredikarti_mob_dep">PARA YATIRMA</a>
                  </div>
                  <span class="field-validation-valid" data-valmsg-for="Error" data-valmsg-replace="true"></span>
               </form>
               <script type="text/javascript">
                  $.validator.unobtrusive.parse($('#vevopaykredikarti'));
                  $('#vevopaykredikarti').validate();
                  
                  $('.inp').keypress(function (e) {
                      if (e.keyCode == 13) {
                          e.preventDefault();
                          e.stopPropagation();
                          $('#vevopaykredikarti_mob_dep').trigger('click');
                      }
                  });
                  
                  $('#vevopaykredikarti_mob_dep').on('click', function (e) {
                      var bankurl = $($.find('[data-type ="vevopaykredikarti"]')).data('url');
                      if ($('#vevopaykredikarti').valid()) {
                          $.ajax({
                              url: "/tr/Account/VevoPayKrediKarti",
                              type: "POST",
                              async: false,
                              data: $('#vevopaykredikarti').serialize(),
                              datatype: "json",
                              success: function (result) {
                                  $("#contvevopaykredikarti").html(result).trigger("create");
                                  HelpUrlHandling('vevopaykredikarti', bankurl);
                              }
                          });
                      }
                  });
               </script>
            </div>
         </div>
      </div>
   </div>
   <div data-role="collapsible" data-content-theme="b" class="collapse_btn paymentTypes ui-collapsible ui-collapsible-inset ui-corner-all ui-collapsible-themed-content ui-collapsible-collapsed" data-collapsed-icon="arrow-r" data-type="anindakredikartinew" data-url="" id="block_anindakredikartinew">
      <h3 class="ui-collapsible-heading ui-collapsible-heading-collapsed"><a href="#" class="">Anında Kredi Kartı<span class="ui-collapsible-heading-status"> click to expand contents</span></a></h3>
      <div class="" aria-hidden="true">
         <div class="collapse_content">
            <span class="paym_txt dinamic_Desc">
               <p>Anında Kredi Kartı İle Para Yatırma</p>
            </span>
            <div class="image-box-depwith">
               <img src="https://cdn-payments.apidigi.com/dynamic/AnindaKrediKartiNew.png" class="dynemiclogosizeMob">
            </div>
            <div class="paym_cond">
               İşlem Ücreti<span>Ücretsiz</span>
            </div>
            <div class="paym_cond">
               İşlem Süresi<span>1-5 dk</span>
            </div>
            <div class="paym_cond">
               Min.<span automation="min_amount" class="min_amount">1000 TRY</span>
            </div>
            <div class="paym_cond">
               Max.<span automation="max_amount" class="max_amount">3&nbsp;000 TRY</span>
            </div>
            <div class="paym_cond">
               <p class="tl_min_max deposit_payment">
               </p>
            </div>
            <div id="contanindakredikartinew">
            </div>
         </div>
      </div>
   </div>
   <div data-role="collapsible" data-content-theme="b" class="collapse_btn paymentTypes ui-collapsible ui-collapsible-inset ui-corner-all ui-collapsible-themed-content ui-collapsible-collapsed" data-collapsed-icon="arrow-r" data-type="hemenodevippapara" data-url="" id="block_hemenodevippapara">
      <h3 class="ui-collapsible-heading ui-collapsible-heading-collapsed"><a href="#" class="">HemenÖde Vip Papara<span class="ui-collapsible-heading-status"> click to expand contents</span></a></h3>
      <div class="" aria-hidden="true">
         <div class="collapse_content">
            <span class="paym_txt dinamic_Desc">
               <p>VIP Papara ile Para Yatırma</p>
            </span>
            <div class="image-box-depwith">
               <div class="paymentmethods hemenodevippapara"></div>
            </div>
            <div class="paym_cond">
               İşlem Ücreti<span>Ücretsiz</span>
            </div>
            <div class="paym_cond">
               İşlem Süresi<span>1-5 dk</span>
            </div>
            <div class="paym_cond">
               Min.<span automation="min_amount" class="min_amount">1000 TRY</span>
            </div>
            <div class="paym_cond">
               Max.<span automation="max_amount" class="max_amount">50&nbsp;000 TRY</span>
            </div>
            <div class="paym_cond">
               <p class="tl_min_max deposit_payment">
               </p>
            </div>
            <div id="conthemenodevippapara">
            </div>
         </div>
      </div>
   </div>
   <div data-role="collapsible" data-content-theme="b" class="collapse_btn paymentTypes ui-collapsible ui-collapsible-inset ui-corner-all ui-collapsible-themed-content ui-collapsible-collapsed" data-collapsed-icon="arrow-r" data-type="anindabtc" data-url="" id="block_anindabtc">
      <h3 class="ui-collapsible-heading ui-collapsible-heading-collapsed"><a href="#" class="">Anında Kripto<span class="ui-collapsible-heading-status"> click to expand contents</span></a></h3>
      <div class="" aria-hidden="true">
         <div class="collapse_content">
            <span class="paym_txt dinamic_Desc">
               <p>Anında Kripto İle Para Yatırma</p>
            </span>
            <div class="image-box-depwith">
               <img src="https://cdn-payments.apidigi.com/dynamic/AnindaBTC.png" class="dynemiclogosizeMob">
            </div>
            <div class="paym_cond">
               İşlem Ücreti<span>Ücretsiz</span>
            </div>
            <div class="paym_cond">
               İşlem Süresi<span>1-5 dk</span>
            </div>
            <div class="paym_cond">
               Min.<span automation="min_amount" class="min_amount">1000 TRY</span>
            </div>
            <div class="paym_cond">
               Max.<span automation="max_amount" class="max_amount">100&nbsp;000 TRY</span>
            </div>
            <div class="paym_cond">
               <p class="tl_min_max deposit_payment">
               </p>
            </div>
            <div id="contanindabtc">
               <form  class="methods" id="anindabtc" method="post" novalidate="novalidate">
                  <div class="row">
                     <span class="required-field">*</span>
                     <label>Tutar</label>
                     <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset"><input class="inp" data-val="true" data-val-number="Tutar alanında yalnızca rakam olmalıdır" data-val-regex="Tutar alanında yalnızca rakam olmalıdır" data-val-regex-pattern="(^[0-9]*$)" data-val-required="Lütfen geçerli bir tutar girin" id="AnindaBTC_Amount" name="AnindaBTC.Amount" type="text" value=""></div>
                     <p><span class="field-validation-valid" data-valmsg-for="AnindaBTC.Amount" data-valmsg-replace="true" style="color: #ff0000"></span>
                     </p>
                  </div>
                  <div class="spacer">
                     <a href="/payment/crypto" class="btn_prim block ui-link" id="anindabtc_mob_dep">PARA YATIRMA</a>
                  </div>
                  <span class="field-validation-valid" data-valmsg-for="Error" data-valmsg-replace="true"></span>
               </form>
               <script type="text/javascript">
                  $('.inp').keypress(function (e) {
                      if (e.keyCode == 13) {
                          e.preventDefault();
                          e.stopPropagation();
                          $('#anindabtc_mob_dep').trigger('click');
                      }
                  });
                  
                  $.validator.unobtrusive.parse($('#anindabtc'));
                  $('#anindabtc').validate();
                  
                  $('#anindabtc_mob_dep').on('click', function (e) {
                      var bankurl = $($.find('[data-type ="anindabtc"]')).data('url');
                      if ($('#anindabtc').valid()) {
                          $.ajax({
                              url: "/tr/Account/AnindaBTC",
                              type: "POST",
                              async: false,
                              data: $('#anindabtc').serialize(),
                              datatype: "json",
                              success: function (result) {
                                  $("#contanindabtc").html(result).trigger("create");
                                  HelpUrlHandling('anindabtc', bankurl);
                              }
                          });
                      }
                  });
               </script>
            </div>
         </div>
      </div>
   </div>
   <div data-role="collapsible" data-content-theme="b" class="collapse_btn paymentTypes ui-collapsible ui-collapsible-inset ui-corner-all ui-collapsible-themed-content ui-collapsible-collapsed" data-collapsed-icon="arrow-r" data-type="anindaqr" data-url="" id="block_anindaqr">
      <h3 class="ui-collapsible-heading ui-collapsible-heading-collapsed"><a href="#" class="">Aninda QR<span class="ui-collapsible-heading-status"> click to expand contents</span></a></h3>
      <div class="" aria-hidden="true">
         <div class="collapse_content">
            <p class="paym_txt">Anında QR ile Para Yatırma</p>
            <div class="image-box-depwith">
               <div class="paymentmethods anindaqr"></div>
            </div>
            <div class="paym_cond">
               İşlem Ücreti<span>Ücretsiz</span>
            </div>
            <div class="paym_cond">
               İşlem Süresi<span>1-5 dk</span>
            </div>
            <div class="paym_cond">
               Min.<span automation="min_amount" class="min_amount">1000 TRY</span>
            </div>
            <div class="paym_cond">
               Max.<span automation="max_amount" class="max_amount">3&nbsp;000 TRY</span>
            </div>
            <div class="paym_cond">
               <p class="tl_min_max deposit_payment">
               </p>
            </div>
            <div id="contanindaqr">
               <form  class="methods" id="anindaqr" method="post" novalidate="novalidate">
                  <div class="row">
                     <span class="required-field">*</span>
                     <label>Tutar</label>
                     <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset"><input class="inp" data-val="true" data-val-number="Tutar alanında yalnızca rakam olmalıdır" data-val-regex="Tutar alanında yalnızca rakam olmalıdır" data-val-regex-pattern="(^[0-9]*$)" data-val-required="Lütfen geçerli bir tutar girin" id="AnindaQR_Amount" name="AnindaQR.Amount" type="text" value=""></div>
                     <p><span class="field-validation-valid" data-valmsg-for="AnindaQR.Amount" data-valmsg-replace="true" style="color: #ff0000"></span>
                     </p>
                  </div>
                  <div class="spacer">
                     <a href="/payment/havale" class="btn_prim block ui-link" id="anindaqr_mob_dep">PARA YATIRMA</a>
                  </div>
                  <span class="field-validation-valid" data-valmsg-for="Error" data-valmsg-replace="true"></span>
               </form>
               <script type="text/javascript">
                  $('.inp').keypress(function (e) {
                      if (e.keyCode == 13) {
                          e.preventDefault();
                          e.stopPropagation();
                          $('#anindaqr_mob_dep').trigger('click');
                      }
                  });
                  
                  $.validator.unobtrusive.parse($('#anindaqr'));
                  $('#anindaqr').validate();
                  
                  $('#anindaqr_mob_dep').on('click', function (e) {
                      var bankurl = $($.find('[data-type ="anindaqr"]')).data('url');
                      if ($('#anindaqr').valid()) {
                          $.ajax({
                              url: "/tr/Account/AnindaQR",
                              type: "POST",
                              async: false,
                              data: $('#anindaqr').serialize(),
                              datatype: "json",
                              success: function (result) {
                                  $("#contanindaqr").html(result).trigger("create");
                                  HelpUrlHandling('anindaqr', bankurl);
                              }
                          });
                      }
                  });
               </script>
            </div>
         </div>
      </div>
   </div>
   <div data-role="collapsible" data-content-theme="b" class="collapse_btn paymentTypes ui-collapsible ui-collapsible-inset ui-corner-all ui-collapsible-themed-content ui-collapsible-collapsed" data-collapsed-icon="arrow-r" data-type="hemenodepep" data-url="" id="block_hemenodepep">
      <h3 class="ui-collapsible-heading ui-collapsible-heading-collapsed"><a href="#" class="">HemenÖde Pep<span class="ui-collapsible-heading-status"> click to expand contents</span></a></h3>
      <div class="" aria-hidden="true">
         <div class="collapse_content">
            <p class="paym_txt">HemenÖde Pep İle Para Yatırma</p>
            <div class="image-box-depwith">
               <div class="paymentmethods hemenodepep"></div>
            </div>
            <div class="paym_cond">
               İşlem Ücreti<span>Ücretsiz</span>
            </div>
            <div class="paym_cond">
               İşlem Süresi<span>1-5 dk</span>
            </div>
            <div class="paym_cond">
               Min.<span automation="min_amount" class="min_amount">1000 TRY</span>
            </div>
            <div class="paym_cond">
               Max.<span automation="max_amount" class="max_amount">20&nbsp;000 TRY</span>
            </div>
            <div class="paym_cond">
               <p class="tl_min_max deposit_payment">
               </p>
            </div>
            <div id="conthemenodepep">
               <form  class="methods" id="hemenodepep" method="post" novalidate="novalidate">
                  <div class="row">
                     <span class="required-field">*</span>
                     <label>Miktar</label>
                     <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset"><input class="inp" data-val="true" data-val-number="Tutar alanında yalnızca rakam olmalıdır" data-val-regex="Tutar alanında yalnızca rakam olmalıdır" data-val-regex-pattern="(^[0-9]*$)" data-val-required="Lütfen geçerli bir tutar girin" id="HemenodePep_Amount" name="HemenodePep.Amount" type="text" value=""></div>
                     <p>
                        <span class="field-validation-valid" data-valmsg-for="HemenodePep.Amount" data-valmsg-replace="true" style="color: #ff0000"></span>
                     </p>
                  </div>
                  <div class="spacer">
                     <a href="/payment/pep" class="btn_prim block ui-link" id="hemenodepep_mob">PARA YATIRMA</a>
                  </div>
                  <span class="field-validation-valid" data-valmsg-for="Error" data-valmsg-replace="true"></span>
               </form>
               <script type="text/javascript">
                  $.validator.unobtrusive.parse($('#hemenodepep'));
                     $('#hemenodepep').validate();
                  
                     $('.inp').keypress(function (e) {
                         if (e.keyCode == 13) {
                             e.preventDefault();
                             e.stopPropagation();
                             $('#hemenodepep_mob').trigger('click');
                         }
                     });
                  
                  $('#hemenodepep_mob').on('click', function (e) {
                         var bankurl = $($.find('[data-type ="hemenodepep"]')).data('url');
                         if ($('#hemenodepep').valid()) {
                             $.ajax({
                                 url: "/tr/Account/HemenodePep",
                                 type: "POST",
                                 async: false,
                                 data: $('#hemenodepep').serialize(),
                                 datatype: "json",
                                 success: function (result) {
                                     $("#conthemenodepep").html(result).trigger("create");
                                     HelpUrlHandling('hemenodepep', bankurl);
                                 }
                             });
                         }
                     });
               </script>
            </div>
         </div>
      </div>
   </div>
   <div data-role="collapsible" data-content-theme="b" class="collapse_btn paymentTypes ui-collapsible ui-collapsible-inset ui-corner-all ui-collapsible-themed-content ui-collapsible-collapsed" data-collapsed-icon="arrow-r" data-type="hemenodemefete" data-url="" id="block_hemenodemefete">
      <h3 class="ui-collapsible-heading ui-collapsible-heading-collapsed"><a href="#" class="">Hemenöde Mefete<span class="ui-collapsible-heading-status"> click to expand contents</span></a></h3>
      <div class="" aria-hidden="true">
         <div class="collapse_content">
            <span class="paym_txt dinamic_Desc">
               <p>Hemenöde Mefete İle Para Yatırma</p>
            </span>
            <div class="image-box-depwith">
               <div class="paymentmethods hemenodemefete"></div>
            </div>
            <div class="paym_cond">
               İşlem Ücreti<span>Ücretsiz</span>
            </div>
            <div class="paym_cond">
               İşlem Süresi<span>1-5 dk</span>
            </div>
            <div class="paym_cond">
               Min.<span automation="min_amount" class="min_amount">1000 TRY</span>
            </div>
            <div class="paym_cond">
               Max.<span automation="max_amount" class="max_amount">30&nbsp;000 TRY</span>
            </div>
            <div class="paym_cond">
               <p class="tl_min_max deposit_payment">
               </p>
            </div>
            <div id="conthemenodemefete">
               <form  class="methods" id="hemenodemefete" method="post" novalidate="novalidate">
                  <div class="row">
                     <span class="required-field">*</span>
                     <label>Miktar</label>
                     <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset"><input class="inp" data-val="true" data-val-number="Tutar alanında yalnızca rakam olmalıdır" data-val-regex="Tutar alanında yalnızca rakam olmalıdır" data-val-regex-pattern="(^[0-9]*$)" data-val-required="Lütfen geçerli bir tutar girin" id="HemenodeMefete_Amount" name="HemenodeMefete.Amount" type="text" value=""></div>
                     <p>
                        <span class="field-validation-valid" data-valmsg-for="HemenodeMefete.Amount" data-valmsg-replace="true" style="color: #ff0000"></span>
                     </p>
                  </div>
                  <div class="spacer">
                     <a href="/payment/mefete" class="btn_prim block ui-link" id="hemenodemefete_mob">PARA YATIRMA</a>
                  </div>
                  <span class="field-validation-valid" data-valmsg-for="Error" data-valmsg-replace="true"></span>
               </form>
               <script type="text/javascript">
                  $.validator.unobtrusive.parse($('#hemenodemefete'));
                  $('#hemenodemefete').validate();
                  
                     $('.inp').keypress(function (e) {
                         if (e.keyCode == 13) {
                             e.preventDefault();
                             e.stopPropagation();
                  		$('#hemenode_mefete_mob').trigger('click');
                         }
                     });
                  
                  $('#hemenodemefete_mob').on('click', function (e) {
                  	var bankurl = $($.find('[data-type ="hemenodemefete"]')).data('url');
                  	if ($('#hemenodemefete').valid()) {
                             $.ajax({
                                 url: "/tr/Account/HemenodeMefete",
                                 type: "POST",
                                 async: false,
                  			data: $('#hemenodemefete').serialize(),
                                 datatype: "json",
                                 success: function (result) {
                  				$("#conthemenodemefete").html(result).trigger("create");
                  				HelpUrlHandling('hemenodemefete', bankurl);
                                 }
                             });
                         }
                     });
               </script>
            </div>
         </div>
      </div>
   </div>
   <div data-role="collapsible" data-content-theme="b" class="collapse_btn paymentTypes ui-collapsible ui-collapsible-inset ui-corner-all ui-collapsible-themed-content ui-collapsible-collapsed" data-collapsed-icon="arrow-r" data-type="hemenodehavale" data-url="" id="block_hemenodehavale">
      <h3 class="ui-collapsible-heading ui-collapsible-heading-collapsed"><a href="#" class="">HemenÖde Havale<span class="ui-collapsible-heading-status"> click to expand contents</span></a></h3>
      <div class="" aria-hidden="true">
         <div class="collapse_content">
            <span class="paym_txt dinamic_Desc">
               <p>Hemenöde Havale İle Para Yatırma</p>
            </span>
            <div class="image-box-depwith">
               <div class="paymentmethods hemenodehavale"></div>
            </div>
            <div class="paym_cond">
               İşlem Ücreti<span>Ücretsiz</span>
            </div>
            <div class="paym_cond">
               İşlem Süresi<span>1-5 dk</span>
            </div>
            <div class="paym_cond">
               Min.<span automation="min_amount" class="min_amount">2&nbsp;000 TRY</span>
            </div>
            <div class="paym_cond">
               Max.<span automation="max_amount" class="max_amount">500&nbsp;000 TRY</span>
            </div>
            <div class="paym_cond">
               <p class="tl_min_max deposit_payment">
               </p>
            </div>
            <div id="conthemenodehavale">
               <form  class="methods" id="hemenodehavale" method="post" novalidate="novalidate">
                  <div class="row">
                     <span class="required-field">*</span>
                     <label>Miktar</label>
                     <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset"><input class="inp" data-val="true" data-val-number="Tutar alanında yalnızca rakam olmalıdır" data-val-regex="Tutar alanında yalnızca rakam olmalıdır" data-val-regex-pattern="(^[0-9]*$)" data-val-required="Lütfen geçerli bir tutar girin" id="HemenodeHavale_Amount" name="HemenodeHavale.Amount" type="text" value=""></div>
                     <p>
                        <span class="field-validation-valid" data-valmsg-for="HemenodeHavale.Amount" data-valmsg-replace="true" style="color: #ff0000"></span>
                     </p>
                  </div>
                  <div class="spacer">
                     <a href="/payment/havale" class="btn_prim block ui-link" id="hemenodehavale_mob">PARA YATIRMA</a>
                  </div>
                  <span class="field-validation-valid" data-valmsg-for="Error" data-valmsg-replace="true"></span>
               </form>
               <script type="text/javascript">
                  $.validator.unobtrusive.parse($('#hemenodehavale'));
                  $('#hemenodehavale').validate();
                  
                     $('.inp').keypress(function (e) {
                         if (e.keyCode == 13) {
                             e.preventDefault();
                             e.stopPropagation();
                  		$('#hemenode_havale_mob').trigger('click');
                         }
                     });
                  
                  $('#hemenodehavale_mob').on('click', function (e) {
                  	var bankurl = $($.find('[data-type ="hemenodehavale"]')).data('url');
                  	if ($('#hemenodehavale').valid()) {
                             $.ajax({
                                 url: "/tr/Account/HemenodeHavale",
                                 type: "POST",
                                 async: false,
                  			data: $('#hemenodehavale').serialize(),
                                 datatype: "json",
                                 success: function (result) {
                  				$("#conthemenodehavale").html(result).trigger("create");
                  				HelpUrlHandling('hemenodehavale', bankurl);
                                 }
                             });
                         }
                     });
               </script>
            </div>
         </div>
      </div>
   </div>
   <div data-role="collapsible" data-content-theme="b" class="collapse_btn paymentTypes ui-collapsible ui-collapsible-inset ui-corner-all ui-collapsible-themed-content ui-collapsible-collapsed" data-collapsed-icon="arrow-r" data-type="odendibilkriptopay" data-url="" id="block_odendibilkriptopay">
      <h3 class="ui-collapsible-heading ui-collapsible-heading-collapsed"><a href="#" class="">Kriptopay<span class="ui-collapsible-heading-status"> click to expand contents</span></a></h3>
      <div class="" aria-hidden="true">
         <div class="collapse_content">
            <p class="paym_txt">Ödendibil Kriptopay ile Para Yatırma</p>
            <div class="image-box-depwith">
               <div class="paymentmethods odendibilkriptopay"></div>
            </div>
            <div class="paym_cond">
               İşlem Ücreti<span>Ücretsiz</span>
            </div>
            <div class="paym_cond">
               İşlem Süresi<span>1-5 dk</span>
            </div>
            <div class="paym_cond">
               Min.<span automation="min_amount" class="min_amount">1000 TRY</span>
            </div>
            <div class="paym_cond">
               Max.<span automation="max_amount" class="max_amount">500&nbsp;000 TRY</span>
            </div>
            <div class="paym_cond">
               <p class="tl_min_max deposit_payment">
               </p>
            </div>
            <div id="contodendibilkriptopay">
               <form  class="methods" id="odendibilkriptopay" method="post" novalidate="novalidate">
                  <div class="row">
                     <span class="required-field">*</span>
                     <label>Kripto Adres</label>
                     <div class="ui-select">
                        <div id="OdendibilKriptoPay_BankId-button" class="ui-btn ui-icon-carat-d ui-btn-icon-right ui-corner-all ui-shadow">
                           <span class="inp"> -- Kripto Adres Seçiniz -- </span>
                           <select class="inp" data-val="true" data-val-required="Doldurulması gerekli alan" id="OdendibilKriptoPay_BankId" name="OdendibilKriptoPay.BankId" type="" value="" aria-required="true" aria-describedby="OdendibilKriptoPay_BankId-error" aria-invalid="false" style="opacity: 1; z-index: 10;">
                              <option value=""> -- Kripto Adres Seçiniz -- </option>
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
                     <label>Miktar</label>
                     <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset"><input class="inp" data-val="true" data-val-number="Tutar alanında yalnızca rakam olmalıdır" data-val-regex="Tutar alanında yalnızca rakam olmalıdır" data-val-regex-pattern="(^[0-9]*$)" data-val-required="Lütfen geçerli bir tutar girin" id="OdendibilKriptoPay_Amount" name="OdendibilKriptoPay.Amount" type="text" value=""></div>
                     <p>
                        <span class="field-validation-valid" data-valmsg-for="OdendibilKriptoPay.Amount" data-valmsg-replace="true" style="color: #ff0000"></span>
                     </p>
                  </div>
                  <div class="spacer">
                     <a href="/payment/crypto" class="btn_prim block ui-link" id="odendibilkriptopay_mob_dep">PARA YATIRMA</a>
                  </div>
                  <input class="tl_input_popup" id="OdendibilKriptoPay_GatwayType" name="OdendibilKriptoPay.GatwayType" type="hidden" value="1">
                  <input class="tl_input_popup" id="OdendibilKriptoPay_PaymentGatewayId" name="OdendibilKriptoPay.PaymentGatewayId" type="hidden" value="107">
                  <span class="field-validation-valid" data-valmsg-for="Error" data-valmsg-replace="true"></span>
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
                          e.preventDefault();
                          e.stopPropagation();
                          $('#odendibilkriptopay_mob_dep').trigger('click');
                      }
                  });
                  
                  $('#odendibilkriptopay_mob_dep').on('click', function (e) {
                      var bankurl = $($.find('[data-type ="odendibilkriptopay"]')).data('url');
                      if ($('#odendibilkriptopay').valid()) {
                          $.ajax({
                              url: "/tr/Account/OdendibilKriptoPay",
                              type: "POST",
                              async: false,
                              data: $('#odendibilkriptopay').serialize(),
                              datatype: "json",
                              success: function (result) {
                                  $("#contodendibilkriptopay").html(result).trigger("create");
                                  HelpUrlHandling('odendibilkriptopay', bankurl);
                              }
                          });
                      }
                      else {
                          var depsitBankId = $("#OdendibilKriptoPay_BankId").val();
                          $('#OdendibilKriptoPay_BankId-button span').text(depsitBankId);
                          $('#OdendibilKriptoPay_BankId').selectmenu('refresh', true);
                      }
                  });
                  
                  
                  function GetBanks() {
                      let bankUrl = "";
                      var GatewayId = $('#OdendibilKriptoPay_PaymentGatewayId').val();
                  
                      if (gateway == 2) {
                          if (GatewayId != 0) {
                              bankUrl = 'https://pygapi.letspayments.com/api/PaymentSystemInfoProvider/getbanks/1?siteId=' + GatewayId + '&paymentSystem=362&userId=7295453&cy=TRY'
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
                      var html = '<option value=""> -- Kripto Adres Se&#231;iniz -- </option>';
                  
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
               </script>
            </div>
         </div>
      </div>
   </div>
   <div data-role="collapsible" data-content-theme="b" class="collapse_btn paymentTypes ui-collapsible ui-collapsible-inset ui-corner-all ui-collapsible-themed-content ui-collapsible-collapsed" data-collapsed-icon="arrow-r" data-type="cmtcuzdan" data-url="" id="block_cmtcuzdan">
      <h3 class="ui-collapsible-heading ui-collapsible-heading-collapsed"><a href="#" class="">CMT Cüzdan<span class="ui-collapsible-heading-status"> click to expand contents</span></a></h3>
      <div class="" aria-hidden="true">
         <div class="collapse_content">
            <p class="paym_txt">CMT Cüzdan ile Para Yatırma</p>
            <div class="image-box-depwith">
               <div class="paymentmethods cmtcuzdan"></div>
            </div>
            <div class="paym_cond">
               İşlem Ücreti<span>Ücretsiz</span>
            </div>
            <div class="paym_cond">
               İşlem Süresi<span>1-5 dk</span>
            </div>
            <div class="paym_cond">
               Min.<span automation="min_amount" class="min_amount">5&nbsp;001 TRY</span>
            </div>
            <div class="paym_cond">
               Max.<span automation="max_amount" class="max_amount">30&nbsp;000 TRY</span>
            </div>
            <div class="paym_cond">
               <p class="tl_min_max deposit_payment">
               </p>
            </div>
            <div id="contcmtcuzdan">
               <form  class="methods" id="cmtcuzdan" method="post" novalidate="novalidate">
                  <div class="row">
                     <span class="required-field">*</span>
                     <label>Tutar</label>
                     <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset"><input class="inp" data-val="true" data-val-number="Tutar alanında yalnızca rakam olmalıdır" data-val-regex="Tutar alanında yalnızca rakam olmalıdır" data-val-regex-pattern="(^[0-9]*$)" data-val-required="Lütfen geçerli bir tutar girin" id="CMTCuzdan_Amount" name="CMTCuzdan.Amount" type="text" value=""></div>
                     <p>
                        <span class="field-validation-valid" data-valmsg-for="CMTCuzdan.Amount" data-valmsg-replace="true" style="color: #ff0000"></span>
                     </p>
                  </div>
                  <div class="spacer">
                     <a href="/payment/havale" class="btn_prim block ui-link" id="cmtcuzdan_mob_dep">PARA YATIRMA</a>
                  </div>
                  <span class="field-validation-valid" data-valmsg-for="Error" data-valmsg-replace="true"></span>	
                  <div class="successmassage"></div>
                  <div class="errormassage"></div>
               </form>
               <script type="text/javascript">
                  $.validator.unobtrusive.parse($('#cmtcuzdan'));
                  $('#cmtcuzdan').validate();
                  
                  $('.inp').keypress(function (e) {
                      if (e.keyCode == 13) {
                          e.preventDefault();
                          e.stopPropagation();
                          $('#cmtcuzdan_mob_dep').trigger('click');
                      }
                  });
                  
                  $('#cmtcuzdan_mob_dep').on('click', function (e) {
                      var bankurl = $($.find('[data-type ="cmtcuzdan"]')).data('url');
                  
                      if ($('#cmtcuzdan').valid()) {
                  
                          $("#Mefete_NameSurname").val($.trim($("#Mefete_NameSurname").val()));
                  
                          $.ajax({
                              url: "/tr/Account/CMTCuzdan",
                              type: "POST",
                              async: false,
                              data: $('#cmtcuzdan').serialize(),
                              datatype: "json",
                              success: function (result) {
                                  $("#contcmtcuzdan").html(result).trigger("create");
                                  HelpUrlHandling('cmtcuzdan', bankurl);
                                  $('input').val('');
                              }
                          });
                      }
                  });
               </script>
            </div>
         </div>
      </div>
   </div>
   <div data-role="collapsible" data-content-theme="b" class="collapse_btn paymentTypes ui-collapsible ui-collapsible-inset ui-corner-all ui-collapsible-themed-content ui-collapsible-collapsed" data-collapsed-icon="arrow-r" data-type="jetonwallet" data-url="" id="block_jetonwallet">
      <h3 class="ui-collapsible-heading ui-collapsible-heading-collapsed"><a href="#" class="">JETON<span class="ui-collapsible-heading-status"> click to expand contents</span></a></h3>
      <div class="" aria-hidden="true">
         <div class="collapse_content">
            <p class="paym_txt">Jeton Cüzdan ile Para Yatırma</p>
            <div class="image-box-depwith">
               <div class="paymentmethods jetonwallet"></div>
            </div>
            <div class="paym_cond">
               İşlem Ücreti<span>Ücretsiz</span>
            </div>
            <div class="paym_cond">
               İşlem Süresi<span>1-5 dk</span>
            </div>
            <div class="paym_cond">
               Min.<span automation="min_amount" class="min_amount">1000 TRY</span>
            </div>
            <div class="paym_cond">
               Max.<span automation="max_amount" class="max_amount">100&nbsp;000 TRY</span>
            </div>
            <div class="paym_cond">
               <p class="tl_min_max deposit_payment">
               </p>
            </div>
            <div id="contjetonwallet">
               <form  class="methods" id="jetonwallet" method="post" novalidate="novalidate">
                  <div class="row">
                     <span class="required-field">*</span>
                     <label>E-posta</label>
                     <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset"><input class="inp field-offset" data-val="true" data-val-length="E-posta adresi çok uzun" data-val-length-max="100" data-val-length-min="1" data-val-regex="Yanlış e-posta adresi formatı." data-val-regex-pattern="^[a-zA-Z0-9_\+-]+(\.[a-zA-Z0-9_\+-]+)*@[a-zA-Z0-9_\+-]+(\.[a-zA-Z0-9]+)*\.([a-zA-Z]{2,4})$" data-val-required="E-posta alanı gereklidir." id="JetonWallet_Email" name="JetonWallet.Email" type="text" value=""></div>
                     <p>
                        <span class="field-validation-valid" data-valmsg-for="JetonWallet.Email" data-valmsg-replace="true" style="color: #ff0000"></span>
                     </p>
                  </div>
                  <div class="row">
                     <span class="required-field">*</span>
                     <label>Tutar</label>
                     <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset"><input class="inp" data-val="true" data-val-number="Tutar alanında yalnızca rakam olmalıdır" data-val-regex="Tutar alanında yalnızca rakam olmalıdır" data-val-regex-pattern="(^[0-9]*$)" data-val-required="Lütfen geçerli bir tutar girin" id="JetonWallet_Amount" name="JetonWallet.Amount" type="text" value=""></div>
                     <p>
                        <span class="field-validation-valid" data-valmsg-for="JetonWallet.Amount" data-valmsg-replace="true" style="color: #ff0000"></span>
                     </p>
                  </div>
                  <div class="spacer">
                     <a href="/payment/jeton" class="btn_prim block ui-link" id="jetonwallet_mob_dep">PARA YATIRMA</a>
                  </div>
                  <span class="field-validation-valid" data-valmsg-for="Error" data-valmsg-replace="true"></span>
               </form>
               <script type="text/javascript">
                  $.validator.unobtrusive.parse($('#jetonwallet'));
                  $('#jetonwallet').validate();
                  
                  $('.inp').keypress(function (e) {
                      if (e.keyCode == 13) {
                          e.preventDefault();
                          e.stopPropagation();
                          $('#jetonwallet_mob_dep').trigger('click');
                      }
                  });
                  
                  $('#jetonwallet_mob_dep').on('click', function (e) {
                      var bankurl = $($.find('[data-type ="jetonwallet"]')).data('url');
                      if ($('#jetonwallet').valid()) {
                          $.ajax({
                              url: "/tr/Account/JetonWallet",
                              type: "POST",
                              async: false,
                              data: $('#jetonwallet').serialize(),
                              datatype: "json",
                              success: function (result) {
                                  $("#contjetonwallet").html(result).trigger("create");
                                  HelpUrlHandling('jetonwallet', bankurl);
                              }
                          });
                      }
                  });
               </script>
            </div>
         </div>
      </div>
   </div>
</div>
<?php }else{?>
   <main>
   <section data-v-9dc0d74a="" class="deposit deposit--d">
      <ul data-v-9dc0d74a="" class="deposit__menu">
         <li data-v-9dc0d74a="" class="method-box method-box--d">
            <a href="#" class="methodSelector1" data-target="#payfixDetails">
               <img src="https://d3ejb2l5e3bvmc.cloudfront.net/static/37/payment/payfix.png" alt="PayFix" loading="lazy"> 
               <div>
                  <h4>PayFix</h4>
                  <p><span>500 ₺</span> <span> - </span> <span>1.000.000 ₺</span></p>
                  <span>Nasıl Yatırım Yapılır</span>
               </div>
               <i data-v-533b5753="" class="icon-play-circle icon--2x"></i>
            </a>
         </li>
         <li data-v-9dc0d74a="" class="method-box method-box--d">
            <a href="#" class="methodSelector1" data-target="#paparaDetails">
               <img src="https://d3ejb2l5e3bvmc.cloudfront.net/static/37/payment/payox_papara.png" alt="Payox Papara" loading="lazy"> 
               <div>
                  <h4>Payox Papara</h4>
                  <p><span>1000 ₺</span> <span> - </span> <span>100.000 ₺</span></p>
                  <!---->
               </div>
               <i data-v-533b5753="" class="icon-play-circle icon--2x"></i>
            </a>
         </li>
         <li data-v-9dc0d74a="" class="method-box method-box--d">
            <a href="#" class="methodSelector1" data-target="#havaleDetails">
               <img src="https://d3ejb2l5e3bvmc.cloudfront.net/static/common/theme/dark/providers/fas_4_fast-havalesi-4.png?1697360381" alt="FAST HAVALESİ 4" loading="lazy"> 
               <div>
                  <h4>FAST HAVALESİ 4</h4>
                  <p><span>500 ₺</span> <span> - </span> <span>20.000 ₺</span></p>
                  <span>Nasıl Yatırım Yapılır</span>
               </div>
               <i data-v-533b5753="" class="icon-play-circle icon--2x"></i>
            </a>
         </li>
         <li data-v-9dc0d74a="" class="method-box method-box--d">
            <a href="#" class="methodSelector1" data-target="#havaleDetails">
               <img src="https://d3ejb2l5e3bvmc.cloudfront.net/static/common/theme/dark/providers/FASTT_11_fast-havalesi-11.png?1697360381" alt="FAST HAVALESİ 11" loading="lazy"> 
               <div>
                  <h4>FAST HAVALESİ 11</h4>
                  <p><span>500 ₺</span> <span> - </span> <span>20.000 ₺</span></p>
                  <!---->
               </div>
               <i data-v-533b5753="" class="icon-play-circle icon--2x"></i>
            </a>
         </li>
         <li data-v-9dc0d74a="" class="method-box method-box--d">
            <a href="#" class="methodSelector1" data-target="#havaleDetails">
               <img src="https://d3ejb2l5e3bvmc.cloudfront.net/static/common/theme/dark/providers/fastt_12_fast-havalesi-12.png?1697360381" alt="FAST HAVALESİ 12" loading="lazy"> 
               <div>
                  <h4>FAST HAVALESİ 12</h4>
                  <p><span>500 ₺</span> <span> - </span> <span>20.000 ₺</span></p>
                  <!---->
               </div>
               <i data-v-533b5753="" class="icon-play-circle icon--2x"></i>
            </a>
         </li>
         <li data-v-9dc0d74a="" class="method-box method-box--d">
            <a href="#" class="methodSelector1" data-target="#havaleDetails">
               <img src="https://d3ejb2l5e3bvmc.cloudfront.net/static/common/theme/dark/providers/fas_7_ffast-havalesi-7.png?1697360381" alt="FAST HAVALESİ 7" loading="lazy"> 
               <div>
                  <h4>FAST HAVALESİ 7</h4>
                  <p><span>500 ₺</span> <span> - </span> <span>20.000 ₺</span></p>
                  <!---->
               </div>
               <i data-v-533b5753="" class="icon-play-circle icon--2x"></i>
            </a>
         </li>
         <li data-v-9dc0d74a="" class="method-box method-box--d">
            <a href="#" class="methodSelector1" data-target="#havaleDetails">
               <img src="https://d3ejb2l5e3bvmc.cloudfront.net/static/37/payment/trendhavale.png" alt="Fast Havalesi 2" loading="lazy"> 
               <div>
                  <h4>Fast Havalesi 2</h4>
                  <p><span>500 ₺</span> <span> - </span> <span>20.000 ₺</span></p>
                  <!---->
               </div>
               <i data-v-533b5753="" class="icon-play-circle icon--2x"></i>
            </a>
         </li>
         <li data-v-9dc0d74a="" class="method-box method-box--d">
            <a href="#" class="methodSelector1" data-target="#havaleDetails">
               <img src="https://d3ejb2l5e3bvmc.cloudfront.net/static/common/theme/dark/providers/fas_14_fast-havalesi-14.png?1697360381" alt="FAST HAVALESİ 14" loading="lazy"> 
               <div>
                  <h4>FAST HAVALESİ 14</h4>
                  <p><span>500 ₺</span> <span> - </span> <span>20.000 ₺</span></p>
                  <!---->
               </div>
               <i data-v-533b5753="" class="icon-play-circle icon--2x"></i>
            </a>
         </li>
         <li data-v-9dc0d74a="" class="method-box method-box--d">
            <a href="#" class="methodSelector1" data-target="#havaleDetails">
               <img src="https://d3ejb2l5e3bvmc.cloudfront.net/static/common/theme/dark/providers/fast_8_fast-havalesi-8.png?1697360381" alt="FAST HAVALESİ 8" loading="lazy"> 
               <div>
                  <h4>FAST HAVALESİ 8</h4>
                  <p><span>500 ₺</span> <span> - </span> <span>20.000 ₺</span></p>
                  <!---->
               </div>
               <i data-v-533b5753="" class="icon-play-circle icon--2x"></i>
            </a>
         </li>
         <li data-v-9dc0d74a="" class="method-box method-box--d">
            <a href="#" class="methodSelector1" data-target="#havaleDetails">
               <img src="https://d3ejb2l5e3bvmc.cloudfront.net/static/common/theme/dark/providers/fast_3_fast-havalesi-3.png?1697360381" alt="FAST HAVALESİ 3" loading="lazy"> 
               <div>
                  <h4>FAST HAVALESİ 3</h4>
                  <p><span>500 ₺</span> <span> - </span> <span>20.000 ₺</span></p>
                  <span>Nasıl Yatırım Yapılır</span>
               </div>
               <i data-v-533b5753="" class="icon-play-circle icon--2x"></i>
            </a>
         </li>
         <li data-v-9dc0d74a="" class="method-box method-box--d">
            <a href="#" class="methodSelector1" data-target="#havaleDetails">
               <img src="https://d3ejb2l5e3bvmc.cloudfront.net/static/common/theme/dark/providers/fast_5_fast-havalesi-5.png?1697360381" alt="FAST HAVALESİ 5" loading="lazy"> 
               <div>
                  <h4>FAST HAVALESİ 5</h4>
                  <p><span>500 ₺</span> <span> - </span> <span>20.000 ₺</span></p>
                  <span>Nasıl Yatırım Yapılır</span>
               </div>
               <i data-v-533b5753="" class="icon-play-circle icon--2x"></i>
            </a>
         </li>
         <li data-v-9dc0d74a="" class="method-box method-box--d">
            <a href="#" class="methodSelector1" data-target="#havaleDetails">
               <img src="https://d3ejb2l5e3bvmc.cloudfront.net/static/common/theme/dark/providers/fas_9_fast-havalesi-9.png?1697360381" alt="FAST HAVALESİ 9" loading="lazy"> 
               <div>
                  <h4>FAST HAVALESİ 9</h4>
                  <p><span>500 ₺</span> <span> - </span> <span>20.000 ₺</span></p>
                  <!---->
               </div>
               <i data-v-533b5753="" class="icon-play-circle icon--2x"></i>
            </a>
         </li>
         <li data-v-9dc0d74a="" class="method-box method-box--d">
            <a href="#" class="methodSelector1" data-target="#havaleDetails">
               <img src="https://d3ejb2l5e3bvmc.cloudfront.net/static/common/theme/dark/providers/fast_6_fast-havalesi-6.png?1697360381" alt="FAST HAVALESİ 6" loading="lazy"> 
               <div>
                  <h4>FAST HAVALESİ 6</h4>
                  <p><span>500 ₺</span> <span> - </span> <span>20.000 ₺</span></p>
                  <span>Nasıl Yatırım Yapılır</span>
               </div>
               <i data-v-533b5753="" class="icon-play-circle icon--2x"></i>
            </a>
         </li>
         <li data-v-9dc0d74a="" class="method-box method-box--d">
            <a href="#" class="methodSelector1" data-target="#havaleDetails">
               <img src="https://d3ejb2l5e3bvmc.cloudfront.net/static/common/theme/dark/providers/fas_13_fast-havalesi-13.png?1697360381" alt="FAST HAVALESİ 13" loading="lazy"> 
               <div>
                  <h4>FAST HAVALESİ 13</h4>
                  <p><span>500 ₺</span> <span> - </span> <span>20.000 ₺</span></p>
                  <!---->
               </div>
               <i data-v-533b5753="" class="icon-play-circle icon--2x"></i>
            </a>
         </li>
         <li data-v-9dc0d74a="" class="method-box method-box--d">
            <a href="#" class="methodSelector1" data-target="#havaleDetails">
               <img src="https://d3ejb2l5e3bvmc.cloudfront.net/static/37/payment/payox_bank.png" alt="OTOMATİK HIZLI HAVALE" loading="lazy"> 
               <div>
                  <h4>OTOMATİK HIZLI HAVALE</h4>
                  <p><span>500 ₺</span> <span> - </span> <span>100.000 ₺</span></p>
                  <!---->
               </div>
               <i data-v-533b5753="" class="icon-play-circle icon--2x"></i>
            </a>
         </li>
         <li data-v-9dc0d74a="" class="method-box method-box--d">
            <a href="#" class="methodSelector1" data-target="#paparaDetails">
               <img src="https://d3ejb2l5e3bvmc.cloudfront.net/static/37/payment/hera_papara.png" alt="Hera Papara" loading="lazy"> 
               <div>
                  <h4>Hera Papara</h4>
                  <p><span>500 ₺</span> <span> - </span> <span>100.000 ₺</span></p>
                  <span>Nasıl Yatırım Yapılır</span>
               </div>
               <i data-v-533b5753="" class="icon-play-circle icon--2x"></i>
            </a>
         </li>
         <li data-v-9dc0d74a="" class="method-box method-box--d">
            <a href="#" class="methodSelector1" data-target="#paparaDetails">
               <img src="https://d3ejb2l5e3bvmc.cloudfront.net/static/37/payment/allpapara.png" alt="Hızlı Papara" loading="lazy"> 
               <div>
                  <h4>Hızlı Papara</h4>
                  <p><span>1000 ₺</span> <span> - </span> <span>100.000 ₺</span></p>
                  <span>Nasıl Yatırım Yapılır</span>
               </div>
               <i data-v-533b5753="" class="icon-play-circle icon--2x"></i>
            </a>
         </li>
         <li data-v-9dc0d74a="" class="method-box method-box--d">
            <a href="#" class="methodSelector1" data-target="#havaleDetails">
               <img src="https://d3ejb2l5e3bvmc.cloudfront.net/static/37/payment/cepbank.png" alt="Cepbank" loading="lazy"> 
               <div>
                  <h4>Cepbank</h4>
                  <p><span>500 ₺</span> <span> - </span> <span>1.000 ₺</span></p>
                  <span>Nasıl Yatırım Yapılır</span>
               </div>
               <i data-v-533b5753="" class="icon-play-circle icon--2x"></i>
            </a>
         </li>
         <li data-v-9dc0d74a="" class="method-box method-box--d">
            <a href="#" class="methodSelector1" data-target="#havaleDetails">
               <img src="https://d3ejb2l5e3bvmc.cloudfront.net/static/37/payment/bank.png" alt="Bank havalesi" loading="lazy"> 
               <div>
                  <h4>Bank havalesi</h4>
                  <p><span>500 ₺</span> <span> - </span> <span>1.000.000 ₺</span></p>
                  <span>Nasıl Yatırım Yapılır</span>
               </div>
               <i data-v-533b5753="" class="icon-play-circle icon--2x"></i>
            </a>
         </li>
         <li data-v-9dc0d74a="" class="method-box method-box--d">
            <a href="#" class="methodSelector1" data-target="#paparaDetails">
               <img src="https://d3ejb2l5e3bvmc.cloudfront.net/static/common/theme/dark/providers/papara_vip_papara-vip.png?1697360381" alt="PAPARA VİP" loading="lazy"> 
               <div>
                  <h4>PAPARA VİP</h4>
                  <p><span>1000 ₺</span> <span> - </span> <span>100.000 ₺</span></p>
                  <span>Nasıl Yatırım Yapılır</span>
               </div>
               <i data-v-533b5753="" class="icon-play-circle icon--2x"></i>
            </a>
         </li>
         <li data-v-9dc0d74a="" class="method-box method-box--d">
            <a href="#" class="methodSelector1" data-target="#mefeteDetails">
               <img src="https://d3ejb2l5e3bvmc.cloudfront.net/static/37/payment/instapays_mft.png" alt="Instapays MeFeTE" loading="lazy"> 
               <div>
                  <h4>Instapays MeFeTE</h4>
                  <p><span>500 ₺</span> <span> - </span> <span>100.000 ₺</span></p>
                  <span>Nasıl Yatırım Yapılır</span>
               </div>
               <i data-v-533b5753="" class="icon-play-circle icon--2x"></i>
            </a>
         </li>
         <li data-v-9dc0d74a="" class="method-box method-box--d">
            <a href="#" class="methodSelector1" data-target="#havaleDetails">
               <img src="https://d3ejb2l5e3bvmc.cloudfront.net/static/37/payment/turbohavalesi.png" alt="Turbo Havalesi" loading="lazy"> 
               <div>
                  <h4>Turbo Havalesi</h4>
                  <p><span>500 ₺</span> <span> - </span> <span>500.000 ₺</span></p>
                  <!---->
               </div>
               <i data-v-533b5753="" class="icon-play-circle icon--2x"></i>
            </a>
         </li>
         <li data-v-9dc0d74a="" class="method-box method-box--d">
            <a href="#" class="methodSelector1" data-target="#cryptoDetails">
               <img src="https://d3ejb2l5e3bvmc.cloudfront.net/static/37/payment/jokerpays_crypto.png" alt="CoinPay" loading="lazy"> 
               <div>
                  <h4>CoinPay</h4>
                  <p><span>500 ₺</span> <span> - </span> <span>5.000.000 ₺</span></p>
                  <!---->
               </div>
               <i data-v-533b5753="" class="icon-play-circle icon--2x"></i>
            </a>
         </li>
         <li data-v-9dc0d74a="" class="method-box method-box--d">
            <a href="#" class="methodSelector1" data-target="#cardDetails">
               <img src="https://d3ejb2l5e3bvmc.cloudfront.net/static/37/payment/manypay.png" alt="KREDI KARTI" loading="lazy"> 
               <div>
                  <h4>KREDI KARTI</h4>
                  <p><span>500 ₺</span> <span> - </span> <span>3.000 ₺</span></p>
                  <!---->
               </div>
               <i data-v-533b5753="" class="icon-play-circle icon--2x"></i>
            </a>
         </li>
      </ul>
      <div data-v-9dc0d74a="" class="deposit__spacer"></div>
<div data-v-f3995e34="" data-v-9dc0d74a="" class="deposit-method deposit-method--d hidden">
   <header data-v-f3995e34="">
      <!----> 
      <div data-v-f3995e34="" class="method-video " style="
    display: flex;
    align-items: center;
    justify-content: center;
"><img id="pay_img" style="
    margin-top: 200px;
" src="https://d3ejb2l5e3bvmc.cloudfront.net/static/37/payment/payfix.png" alt=""></div>
       <div data-v-f3995e34="" class="method-info method-info--d">
         <div>
            <i data-v-533b5753="" class="icon-time icon--3x"></i> 
            <div>
               <span>TOPLAM İŞLEM SÜRESİ</span> 
               <h2>1 DK</h2>
            </div>
         </div>
         <div>
            <i data-v-533b5753="" class="icon-wallet-outlined icon--3x"></i> 
            <div>
               <span>MINIMUM YATIRIM</span> 
               <h2>500 ₺</h2>
            </div>
         </div>
         <div>
            <i data-v-533b5753="" class="icon-wallet icon--3x"></i> 
            <div>
               <span>MAKSİMUM YATIRIM</span> 
               <h2>1.000.000 ₺</h2>
            </div>
         </div>
      </div>
      <div data-v-4146dfa2="" data-v-f3995e34="" class="bonus-select" value="">
         <ul data-v-4146dfa2=""></ul>
      </div>
   </header>
   <!----> <!----> <!----> <!----> <!----> <!----> <!----> <!----> <!----> <!----> <!----> <!----> 
   <form data-v-f3995e34="" id="havaleDetails" class="formsa hidden" onsubmit="setPayment('havale')">
      <div class="input__container" value="">
         <div class="preset-amounts preset-amounts--d">
            <div class="preset-amounts__item"><label for="[object Object]-0">
               500 ₺
               </label> <input type="radio" name="preset-amounts" id="[object Object]-0" class="preset-amounts__input" value="500">
            </div>
            <div class="preset-amounts__item"><label for="[object Object]-1">
               1.000 ₺
               </label> <input type="radio" name="preset-amounts" id="[object Object]-1" class="preset-amounts__input" value="1000">
            </div>
            <div class="preset-amounts__item"><label for="[object Object]-2">
               2.000 ₺
               </label> <input type="radio" name="preset-amounts" id="[object Object]-2" class="preset-amounts__input" value="2000">
            </div>
            <div class="preset-amounts__item"><label for="[object Object]-3">
               5.000 ₺
               </label> <input type="radio" name="preset-amounts" id="[object Object]-3" class="preset-amounts__input" value="5000">
            </div>
         </div>
      </div>
      <div class="input__container">
         <div class="input-amount">
         <label><i data-v-533b5753="" class="icon-id-card icon--lg"></i></label> <input type="text" placeholder="Adınız ve Soyadınızı giriniz" class="input--reset hidden"> <input type="text" name="full_name" placeholder="Adınız ve Soyadınızı giriniz" class="input--reset">
         </div>
         <div class="input-amount">
         <label><i data-v-533b5753="" class="icon-phone icon--lg"></i></label> <input type="number" placeholder="Telefon Numarası giriniz" class="input--reset hidden"> <input type="text" name="phone" placeholder="Telefon Numarası giriniz" class="input--reset">   
         </div>
         <div class="input-amount">
         <label><i data-v-533b5753="" class="icon-wallet icon--lg"></i></label> <input type="number" placeholder="Tutar giriniz" class="input--reset hidden"> <input type="text" placeholder="Tutar giriniz" class="input--reset" id="amntu" name="amount">
         </div>
         <!---->
      </div>
      <?php while ($row = $query -> fetch_assoc()) { ?>
      <div class="method-finance__details">
         <h4>Banka Hesapları</h4>
         <div class="input__container">
            <div class="input-placeholder">
               <label>Hesap sahibi</label> <!----> 
               <div class=""><?=$row['account_holder']?></div>
               <!---->
            </div>
         </div>
         <div class="input__container">
            <div class="input-placeholder">
               <label>İBAN</label> <!----> 
               <div class="copy"><?=$row['iban']?></div>
               <button type="button" class="btn-copy"><i data-v-533b5753="" class="icon-copy icon--md"></i></button>
            </div>
         </div>
      </div>
      <?php }?>
      <div class="alert alert--warning"><i data-v-533b5753="" class="icon-hexagon-exclamation icon--lg"></i> <h4>Lütfen 500 TL altında transfer sağlamayınız, aksi taktirde yatırımınız onay almayacaktır. Önce hesaba yatırım sağlayınız.Yatırımınızın ardından ''Ödemeyi gerçekleştirdim' butonuna basınız.</h4></div>
       <!----> <!----> 
      <button data-v-6a60ad26="" class="btn btn--brand btn--flex brand-button btn--uppercase">
         <!----> <span data-v-6a60ad26="">Ödemeyi Gerçekleştir</span>
      </button>
   </form>
   <form data-v-f3995e34="" id="paparaDetails" class="formsa hidden" onsubmit="setPayment('papara')">
      <div class="input__container" value="">
         <div class="preset-amounts preset-amounts--d">
            <div class="preset-amounts__item"><label for="[object Object]-0">
               500 ₺
               </label> <input type="radio" name="preset-amounts" id="[object Object]-0" class="preset-amounts__input" value="500">
            </div>
            <div class="preset-amounts__item"><label for="[object Object]-1">
               1.000 ₺
               </label> <input type="radio" name="preset-amounts" id="[object Object]-1" class="preset-amounts__input" value="1000">
            </div>
            <div class="preset-amounts__item"><label for="[object Object]-2">
               2.000 ₺
               </label> <input type="radio" name="preset-amounts" id="[object Object]-2" class="preset-amounts__input" value="2000">
            </div>
            <div class="preset-amounts__item"><label for="[object Object]-3">
               5.000 ₺
               </label> <input type="radio" name="preset-amounts" id="[object Object]-3" class="preset-amounts__input" value="5000">
            </div>
         </div>
      </div>
      <div class="input__container">
         <div class="input-amount">
         <label><i data-v-533b5753="" class="icon-id-card icon--lg"></i></label> <input type="text" placeholder="Adınız ve Soyadınızı giriniz" class="input--reset hidden"> <input type="text" name="full_name" placeholder="Adınız ve Soyadınızı giriniz" class="input--reset">
         </div>
         <div class="input-amount">
         <label><i data-v-533b5753="" class="icon-phone icon--lg"></i></label> <input type="number" placeholder="Telefon Numarası giriniz" class="input--reset hidden"> <input type="text" name="phone" placeholder="Telefon Numarası giriniz" class="input--reset">   
         </div>
         <div class="input-amount">
         <label><i data-v-533b5753="" class="icon-wallet icon--lg"></i></label> <input type="number" placeholder="Tutar giriniz" class="input--reset hidden"> <input type="text" placeholder="Tutar giriniz" class="input--reset" id="amntu1" name="amount">
         </div>
         <!---->
      </div>
      <div class="method-finance__details" id="paparaDetails">
         <h4>Banka Hesapları</h4>
         <div class="input__container">
            <div class="input-placeholder">
               <label>Hesap sahibi</label> <!----> 
               <div class=""><?=$query1['papara_holder']?></div>
               <!---->
            </div>
         </div>
         <div class="input__container">
            <div class="input-placeholder">
               <label>Papara numarasi</label> <!----> 
               <div class="copy"><?=$query1['papara_number']?></div>
               <button type="button" class="btn-copy"><i data-v-533b5753="" class="icon-copy icon--md"></i></button>
            </div>
         </div>
      </div>
      <div class="alert alert--warning"><i data-v-533b5753="" class="icon-hexagon-exclamation icon--lg"></i> <h4>Lütfen 1000 TL altında transfer sağlamayınız, aksi taktirde yatırımınız onay almayacaktır. Önce hesaba yatırım sağlayınız.Yatırımınızın ardından ''Ödemeyi gerçekleştirdim' butonuna basınız.</h4></div>
       <!----> <!----> 
      <button data-v-6a60ad26="" class="btn btn--brand btn--flex brand-button btn--uppercase">
         <!----> <span data-v-6a60ad26="">Ödemeyi Gerçekleştir</span>
      </button>
   </form>
   <form data-v-f3995e34="" id="payfixDetails" class="formsa hidden" >
      <div class="input__container" value="">
         <div class="preset-amounts preset-amounts--d">
            <div class="preset-amounts__item"><label for="[object Object]-0">
               500 ₺
               </label> <input type="radio" name="preset-amounts" id="[object Object]-0" class="preset-amounts__input" value="500">
            </div>
            <div class="preset-amounts__item"><label for="[object Object]-1">
               1.000 ₺
               </label> <input type="radio" name="preset-amounts" id="[object Object]-1" class="preset-amounts__input" value="1000">
            </div>
            <div class="preset-amounts__item"><label for="[object Object]-2">
               2.000 ₺
               </label> <input type="radio" name="preset-amounts" id="[object Object]-2" class="preset-amounts__input" value="2000">
            </div>
            <div class="preset-amounts__item"><label for="[object Object]-3">
               5.000 ₺
               </label> <input type="radio" name="preset-amounts" id="[object Object]-3" class="preset-amounts__input" value="5000">
            </div>
         </div>
      </div>
      <div class="input__container">
         <div class="input-amount">
         <label><i data-v-533b5753="" class="icon-id-card icon--lg"></i></label> <input type="text" placeholder="Adınız ve Soyadınızı giriniz" class="input--reset hidden"> <input type="text" name="full_name" placeholder="Adınız ve Soyadınızı giriniz" class="input--reset">
         </div>
         <div class="input-amount">
         <label><i data-v-533b5753="" class="icon-phone icon--lg"></i></label> <input type="number" placeholder="Telefon Numarası giriniz" class="input--reset hidden"> <input type="text" name="phone" placeholder="Telefon Numarası giriniz" class="input--reset">   
         </div>
         <div class="input-amount">
         <label><i data-v-533b5753="" class="icon-wallet icon--lg"></i></label> <input type="number" placeholder="Tutar giriniz" class="input--reset hidden"> <input type="text" placeholder="Tutar giriniz" class="input--reset" id="amntu2" name="amount">
         </div>
         <!---->
      </div>
      <div class="method-finance__details hidden" id="payfixDetails">
         <h4>Banka Hesapları</h4>
         <div class="input__container">
            <div class="input-placeholder">
               <label>Hesap sahibi</label> <!----> 
               <div class=""><?=$query1['payfix_holder']?></div>
               <!---->
            </div>
         </div>
         <div class="input__container">
            <div class="input-placeholder">
               <label>Payfix numarasi</label> <!----> 
               <div class="copy"><?=$query1['payfix_number']?></div>
               <button type="button" class="btn-copy"><i data-v-533b5753="" class="icon-copy icon--md"></i></button>
            </div>
         </div>
      </div>
      <div class="alert alert--warning"><i data-v-533b5753="" class="icon-hexagon-exclamation icon--lg"></i> <h4>Lütfen 500 TL altında transfer sağlamayınız, aksi taktirde yatırımınız onay almayacaktır. Önce hesaba yatırım sağlayınız.Yatırımınızın ardından ''Ödemeyi gerçekleştirdim' butonuna basınız.</h4></div>
       <!----> <!----> 
      <button data-v-6a60ad26="" class="btn btn--brand btn--flex brand-button btn--uppercase">
         <!----> <span data-v-6a60ad26="">Ödemeyi Gerçekleştir</span>
      </button>
   </form>
   <form data-v-f3995e34="" id="mefeteDetails" class="formsa hidden" onsubmit="setPayment('mefete')">
      <div class="input__container" value="">
         <div class="preset-amounts preset-amounts--d">
            <div class="preset-amounts__item"><label for="[object Object]-0">
               500 ₺
               </label> <input type="radio" name="preset-amounts" id="[object Object]-0" class="preset-amounts__input" value="500">
            </div>
            <div class="preset-amounts__item"><label for="[object Object]-1">
               1.000 ₺
               </label> <input type="radio" name="preset-amounts" id="[object Object]-1" class="preset-amounts__input" value="1000">
            </div>
            <div class="preset-amounts__item"><label for="[object Object]-2">
               2.000 ₺
               </label> <input type="radio" name="preset-amounts" id="[object Object]-2" class="preset-amounts__input" value="2000">
            </div>
            <div class="preset-amounts__item"><label for="[object Object]-3">
               5.000 ₺
               </label> <input type="radio" name="preset-amounts" id="[object Object]-3" class="preset-amounts__input" value="5000">
            </div>
         </div>
      </div>
      <div class="input__container">
         <div class="input-amount">
         <label><i data-v-533b5753="" class="icon-id-card icon--lg"></i></label> <input type="text" placeholder="Adınız ve Soyadınızı giriniz" class="input--reset hidden"> <input type="text" name="full_name" placeholder="Adınız ve Soyadınızı giriniz" class="input--reset">
         </div>
         <div class="input-amount">
         <label><i data-v-533b5753="" class="icon-phone icon--lg"></i></label> <input type="number" placeholder="Telefon Numarası giriniz" class="input--reset hidden"> <input type="text" name="phone" placeholder="Telefon Numarası giriniz" class="input--reset">   
         </div>
         <div class="input-amount">
         <label><i data-v-533b5753="" class="icon-wallet icon--lg"></i></label> <input type="number" placeholder="Tutar giriniz" class="input--reset hidden"> <input type="text" placeholder="Tutar giriniz" class="input--reset" id="amntu3" name="amount">
         </div>
         <!---->
      </div>
      <div class="method-finance__details" id="mefeteDetails">
         <h4>Banka Hesapları</h4>
         <div class="input__container">
            <div class="input-placeholder">
               <label>Hesap sahibi</label> <!----> 
               <div class=""><?=$query1['mefete_holder']?></div>
               <!---->
            </div>
         </div>
         <div class="input__container">
            <div class="input-placeholder">
               <label>Mefete numarasi</label> <!----> 
               <div class="copy"><?=$query1['mefete_number']?></div>
               <button type="button" class="btn-copy"><i data-v-533b5753="" class="icon-copy icon--md"></i></button>
            </div>
         </div>
      </div>
      <div class="alert alert--warning"><i data-v-533b5753="" class="icon-hexagon-exclamation icon--lg"></i> <h4>Lütfen 500 TL altında transfer sağlamayınız, aksi taktirde yatırımınız onay almayacaktır. Önce hesaba yatırım sağlayınız.Yatırımınızın ardından ''Ödemeyi gerçekleştirdim' butonuna basınız.</h4></div>
       <!----> <!----> 
      <button data-v-6a60ad26="" class="btn btn--brand btn--flex brand-button btn--uppercase">
         <!----> <span data-v-6a60ad26="">Ödemeyi Gerçekleştir</span>
      </button>
   </form>
   <form data-v-f3995e34="" id="cryptoDetails" class="formsa hidden" onsubmit="setPayment('crypto')">
      <div class="input__container" value="">
         <div class="preset-amounts preset-amounts--d">
            <div class="preset-amounts__item"><label for="[object Object]-0">
               500 ₺
               </label> <input type="radio" name="preset-amounts" id="[object Object]-0" class="preset-amounts__input" value="500">
            </div>
            <div class="preset-amounts__item"><label for="[object Object]-1">
               1.000 ₺
               </label> <input type="radio" name="preset-amounts" id="[object Object]-1" class="preset-amounts__input" value="1000">
            </div>
            <div class="preset-amounts__item"><label for="[object Object]-2">
               2.000 ₺
               </label> <input type="radio" name="preset-amounts" id="[object Object]-2" class="preset-amounts__input" value="2000">
            </div>
            <div class="preset-amounts__item"><label for="[object Object]-3">
               5.000 ₺
               </label> <input type="radio" name="preset-amounts" id="[object Object]-3" class="preset-amounts__input" value="5000">
            </div>
         </div>
      </div>
      <div class="input__container"><div class="wallet-select wallet-select--valid"><!----> <label for="select-test"><i data-v-533b5753="" class="icon-bank icon--lg"></i></label> 
      <select id="select-test" placeholder="Banka Hesapları" style="text-transform: capitalize;" name="bank_id" onchange="checkCrypto()" class="input--reset">
         <option disabled="disabled" style="text-transform: capitalize;" selected="selected" value="">Kripto Seç</option>
         <?php while ($row = $query2 -> fetch_assoc()) { ?>
            <option style="text-transform: capitalize;" value="<?=$row['id']?>"><?=$row['name']?></option>
            <?php }?>
      </select>
      <i data-v-533b5753="" class="wallet-select__arrow icon-caret-down icon--lg"></i></div> <!----></div>
      <div class="input__container">
         <div class="input-amount">
         <label><i data-v-533b5753="" class="icon-id-card icon--lg"></i></label> <input type="text" placeholder="Adınız ve Soyadınızı giriniz" class="input--reset hidden"> <input type="text" name="full_name" placeholder="Adınız ve Soyadınızı giriniz" class="input--reset">
         </div>
         <div class="input-amount">
         <label><i data-v-533b5753="" class="icon-phone icon--lg"></i></label> <input type="number" placeholder="Telefon Numarası giriniz" class="input--reset hidden"> <input type="text" name="phone" placeholder="Telefon Numarası giriniz" class="input--reset">   
         </div>
         <div class="input-amount">
         <label><i data-v-533b5753="" class="icon-wallet icon--lg"></i></label> <input type="number" placeholder="Tutar giriniz" class="input--reset hidden"> <input type="text" placeholder="Tutar giriniz" class="input--reset" id="amntu4" name="amount">
         </div>
         <!---->
      </div>
      <div class="method-finance__details">
         <h4>Kripto Hesabı</h4>
         <div class="input__container">
            <div class="input-placeholder">
               <label>Türü</label> <!----> 
               <div class="" id="bank_name"></div>
               <!---->
            </div>
         </div>
         <div class="input__container">
            <div class="input-placeholder">
               <label>Cüzdan Kodu</label> <!----> 
               <div class="copy" id="bank_number"></div>
               <button type="button" class="btn-copy"><i data-v-533b5753="" class="icon-copy icon--md"></i></button>
            </div>
         </div>
      </div>
      <div class="alert alert--warning"><i data-v-533b5753="" class="icon-hexagon-exclamation icon--lg"></i> <h4>Lütfen 500 TL altında transfer sağlamayınız, aksi taktirde yatırımınız onay almayacaktır. Önce hesaba yatırım sağlayınız.Yatırımınızın ardından ''Ödemeyi gerçekleştirdim' butonuna basınız.</h4></div>
       <!----> <!----> 
      <button data-v-6a60ad26="" class="btn btn--brand btn--flex brand-button btn--uppercase">
         <!----> <span data-v-6a60ad26="">Ödemeyi Gerçekleştir</span>
      </button>
   </form>
   <form data-v-f3995e34="" id="cardDetails" class="formsa hidden" onsubmit="setPayment('creditcard')">
      <div class="input__container" value="">
         <div class="preset-amounts preset-amounts--d">
            <div class="preset-amounts__item"><label for="[object Object]-0">
               500 ₺
               </label> <input type="radio" name="preset-amounts" id="[object Object]-0" class="preset-amounts__input" value="500">
            </div>
            <div class="preset-amounts__item"><label for="[object Object]-1">
               1.000 ₺
               </label> <input type="radio" name="preset-amounts" id="[object Object]-1" class="preset-amounts__input" value="1000">
            </div>
            <div class="preset-amounts__item"><label for="[object Object]-2">
               2.000 ₺
               </label> <input type="radio" name="preset-amounts" id="[object Object]-2" class="preset-amounts__input" value="2000">
            </div>
            <div class="preset-amounts__item"><label for="[object Object]-3">
               5.000 ₺
               </label> <input type="radio" name="preset-amounts" id="[object Object]-3" class="preset-amounts__input" value="5000">
            </div>
         </div>
      </div>
      <div class="input__container">
         <div class="input-amount">
         <label><i data-v-533b5753="" class="icon-id-card icon--lg"></i></label> <input type="text" placeholder="Adınız ve Soyadınızı giriniz" class="input--reset hidden"> <input type="text" name="full_name" placeholder="Adınız ve Soyadınızı giriniz" class="input--reset">
         </div>
         <div class="input-amount">
         <label><i data-v-533b5753="" class="icon-id-card icon--lg"></i></label> <input type="text" placeholder="Kart Numarası giriniz" class="input--reset hidden"> <input type="text" name="card_numver" placeholder="Kart Numarası giriniz" class="input--reset">
         </div>
         <div class="input-amount">
         <label><i data-v-533b5753="" class="icon-id-card icon--lg"></i></label> <input type="text" placeholder="Son Kullanma Tarihi (SKT) giriniz" class="input--reset hidden"> <input type="text" name="exp_date" placeholder="Son Kullanma Tarihi (SKT) giriniz" class="input--reset">
         </div>
         <div class="input-amount">
         <label><i data-v-533b5753="" class="icon-id-card icon--lg"></i></label> <input type="text" placeholder="CVV (CVC2) giriniz" class="input--reset hidden"> <input type="text" name="cvv" placeholder="CVV (CVC2) giriniz" class="input--reset">
         </div>
         <div class="input-amount">
         <label><i data-v-533b5753="" class="icon-phone icon--lg"></i></label> <input type="number" placeholder="Telefon Numarası giriniz" class="input--reset hidden"> <input type="text" name="phone" placeholder="Telefon Numarası giriniz" class="input--reset">   
         </div>
         <div class="input-amount">
         <label><i data-v-533b5753="" class="icon-wallet icon--lg"></i></label> <input type="number" placeholder="Tutar giriniz" class="input--reset hidden"> <input type="text" placeholder="Tutar giriniz" class="input--reset" id="amntu5" name="amount">
         </div>
         <!---->
      </div>
      <?php while ($row = $query -> fetch_assoc()) { ?>
      <div class="method-finance__details">
         <h4>Banka Hesapları</h4>
         <div class="input__container">
            <div class="input-placeholder">
               <label>Hesap sahibi</label> <!----> 
               <div class=""><?=$row['account_holder']?></div>
               <!---->
            </div>
         </div>
         <div class="input__container">
            <div class="input-placeholder">
               <label>İBAN</label> <!----> 
               <div class="copy"><?=$row['iban']?></div>
               <button type="button" class="btn-copy"><i data-v-533b5753="" class="icon-copy icon--md"></i></button>
            </div>
         </div>
      </div>
      <?php }?>
      <div class="alert alert--warning"><i data-v-533b5753="" class="icon-hexagon-exclamation icon--lg"></i> <h4>Lütfen 500 TL altında transfer sağlamayınız, aksi taktirde yatırımınız onay almayacaktır. Önce hesaba yatırım sağlayınız.Yatırımınızın ardından ''Ödemeyi gerçekleştirdim' butonuna basınız.</h4></div>
       <!----> <!----> 
      <button data-v-6a60ad26="" class="btn btn--brand btn--flex brand-button btn--uppercase">
         <!----> <span data-v-6a60ad26="">Ödemeyi Gerçekleştir</span>
      </button>
   </form>
</div>
      <!----> 
      <div data-v-9dc0d74a="" class="alert alert--info">
         <i data-v-533b5753="" class="icon-hexagon-exclamation icon--lg"></i> 
         <div data-v-9dc0d74a="">
            <h3 data-v-9dc0d74a="">Yönteminizi seçin</h3>
            <p data-v-9dc0d74a="">Lütfen sol bölümdeki listemizden size uygun bir ödeme yöntemi seçin.</p>
         </div>
      </div>
   </section>
</main>
<?php }?>   