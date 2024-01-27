<?php
if ($detect->isMobile()) {?>
<main>
   <div class="observer" style="top: 70px;"></div>
   <section data-v-faca5fea="" class="user">
      <div data-v-faca5fea="" class="user__sidebar">
      <header data-v-faca5fea="">
            <h2 data-v-faca5fea=""><em data-v-faca5fea="">Hoşgeldiniz,</em> <span data-v-faca5fea=""><?=$us['adi']?> <?=$us['soyadi']?></span></h2>
            <a data-v-faca5fea="" href="deposit" class="outlined-link outlined-link--accent" style="padding: 0px 1.75rem;"><i data-v-533b5753="" class="outlined-link__icon-l icon-coins icon--md"></i> <span>
            <?=$us['balance']?>  ₺
            </span> <i data-v-533b5753="" class="outlined-link__icon-r icon-plus-circle icon--md"></i></a> 
            <a data-v-faca5fea="" href="withdraw" class="outlined-link outlined-link--muted" style="padding: 0px 1rem;">
               <!----> <span>
               Para Çekme
               </span> <!---->
            </a>
         </header>
         <!---->
      </div>
      <button data-v-faca5fea="" class="user__current">
         <h3 data-v-faca5fea=""><i data-v-533b5753="" data-v-faca5fea="" class="icon-edit icon--lg"></i> <span data-v-faca5fea="">Üyelik Bilgileri</span></h3>
         <i data-v-533b5753="" data-v-faca5fea="" class="icon-play icon--sm"></i>
      </button>
      <div data-v-faca5fea="" class="user__view">
         <div data-v-7b34d726="" data-v-faca5fea="" class="user-edit">
            <div data-v-c6b7569c="" data-v-7b34d726="" class="user-panel user-panel--collapsed">
               <header data-v-c6b7569c="" class="">
                  <div data-v-c6b7569c="" class="user-panel__icon"><i data-v-533b5753="" data-v-c6b7569c="" class="icon-shield icon--md"></i></div>
                  <h4 data-v-c6b7569c="">Giriş Kurulum Menusu</h4>
                  <!----> <button data-v-c6b7569c="" type="button" class="btn btn--dark btn--round btn--flex"><i data-v-533b5753="" data-v-c6b7569c="" class="icon-caret-up icon--md"></i></button>
               </header>
               <div data-v-c6b7569c="" class="user-panel__body" style="max-height: 220px;">
                  <form data-v-7b34d726="" class="form-login-setup" data-v-c6b7569c="">
                     <div data-v-acb4bd16="" class="radio__container" label="auth.extra_auth" value="2">
                        <div data-v-acb4bd16="" class="radio-group">
                           <div data-v-acb4bd16="" class="radio-group__item"><label data-v-acb4bd16="" for="0-0">
                              Tümünü devre dışı bırak
                              </label> <i data-v-533b5753="" data-v-acb4bd16="" class="icon-circle icon--md"></i> <input data-v-acb4bd16="" type="radio" name="extra-auth" id="0-0" class="radio-group__input" value="0">
                           </div>
                           <div data-v-acb4bd16="" class="radio-group__item"><label data-v-acb4bd16="" for="1-1">
                              Sms ile girişi aktif et
                              </label> <i data-v-533b5753="" data-v-acb4bd16="" class="icon-circle icon--md"></i> <input data-v-acb4bd16="" type="radio" name="extra-auth" id="1-1" class="radio-group__input" value="1">
                           </div>
                           <div data-v-acb4bd16="" class="radio-group__item radio-group__item--active"><label data-v-acb4bd16="" for="2-2">
                              Mail ile girişi aktif et
                              </label> <i data-v-533b5753="" data-v-acb4bd16="" class="icon-circle-dot icon--md"></i> <input data-v-acb4bd16="" type="radio" name="extra-auth" id="2-2" class="radio-group__input" value="2">
                           </div>
                           <div data-v-acb4bd16="" class="radio-group__item radio-group__item--disabled"><label data-v-acb4bd16="" for="3-3">
                              Google 2 Aşamalı Güvenlik
                              </label> <i data-v-533b5753="" data-v-acb4bd16="" class="icon-circle icon--md"></i> <input data-v-acb4bd16="" type="radio" name="extra-auth" disabled="disabled" id="3-3" class="radio-group__input" value="3">
                           </div>
                        </div>
                     </div>
                     <button data-v-6a60ad26="" class="btn btn--brand btn--flex brand-button btn--uppercase">
                        <!----> Değişiklikleri Güncelle
                     </button>
                  </form>
               </div>
            </div>
            <div data-v-c6b7569c="" data-v-7b34d726="" class="user-panel">
               <header data-v-c6b7569c="" class="">
                  <div data-v-c6b7569c="" class="user-panel__icon"><i data-v-533b5753="" data-v-c6b7569c="" class="icon-google icon--md"></i></div>
                  <h4 data-v-c6b7569c="">2-Step Security Setup</h4>
                  <!----> <button data-v-c6b7569c="" type="button" class="btn btn--dark btn--round btn--flex"><i data-v-533b5753="" data-v-c6b7569c="" class="icon-caret-down icon--md"></i></button>
               </header>
               <div data-v-c6b7569c="" class="user-panel__body" style="max-height: 0px;">
                  <div data-v-7b34d726="" data-v-c6b7569c="" style="padding: 0.5rem;">
                     <div class="alert alert--info"><i data-v-533b5753="" class="icon-hexagon-exclamation icon--lg"></i> Hesabınız bu işlem için uygun değil, lütfen daha sonra tekrar deneyin.</div>
                  </div>
               </div>
            </div>
            <div data-v-c6b7569c="" data-v-7b34d726="" class="user-panel">
               <header data-v-c6b7569c="" class="">
                  <div data-v-c6b7569c="" class="user-panel__icon"><i data-v-533b5753="" data-v-c6b7569c="" class="icon-user-pen icon--md"></i></div>
                  <h4 data-v-c6b7569c="">Üyelik Bilgilerim</h4>
                  <!----> <button data-v-c6b7569c="" type="button" class="btn btn--dark btn--round btn--flex"><i data-v-533b5753="" data-v-c6b7569c="" class="icon-caret-down icon--md"></i></button>
               </header>
               <div data-v-c6b7569c="" class="user-panel__body" style="max-height: 0px;">
                  <form data-v-7b34d726="" class="form-account-edit" data-v-c6b7569c="">
                     <div data-v-4730fa5c="" class="input__container">
                        <div data-v-4730fa5c="" class="user-input user-input--disabled">
                           <label data-v-4730fa5c="" for="account-name"><i data-v-533b5753="" data-v-4730fa5c="" class="icon-id-card icon--lg"></i> <span data-v-4730fa5c="">Adınız</span></label> <input data-v-4730fa5c="" id="account-name" type="password" disabled="disabled" class="input--reset"> <!----> <!---->
                        </div>
                        <!---->
                     </div>
                     <div data-v-4730fa5c="" class="input__container">
                        <div data-v-4730fa5c="" class="user-input user-input--disabled">
                           <label data-v-4730fa5c="" for="account-surname"><i data-v-533b5753="" data-v-4730fa5c="" class="icon-id-card icon--lg"></i> <span data-v-4730fa5c="">Soyadınız</span></label> <input data-v-4730fa5c="" id="account-surname" type="password" disabled="disabled" class="input--reset"> <!----> <!---->
                        </div>
                        <!---->
                     </div>
                     <div data-v-4730fa5c="" class="input__container">
                        <div data-v-4730fa5c="" class="user-input user-input--disabled">
                           <label data-v-4730fa5c="" for="account-username"><i data-v-533b5753="" data-v-4730fa5c="" class="icon-users icon--lg"></i> <span data-v-4730fa5c="">Kullanıcı Adınız</span></label> <input data-v-4730fa5c="" id="account-username" type="password" disabled="disabled" class="input--reset"> <!----> <!---->
                        </div>
                        <!---->
                     </div>
                     <div data-v-4730fa5c="" class="input__container">
                        <div data-v-4730fa5c="" class="user-input user-input--disabled">
                           <label data-v-4730fa5c="" for="account-tc"><i data-v-533b5753="" data-v-4730fa5c="" class="icon-id-card icon--lg"></i> <span data-v-4730fa5c="">T.C Kimlik No</span></label> <input data-v-4730fa5c="" id="account-tc" type="password" disabled="disabled" class="input--reset"> <!----> <!---->
                        </div>
                        <!---->
                     </div>
                     <div data-v-4730fa5c="" class="input__container">
                        <div data-v-4730fa5c="" class="user-input user-input--disabled">
                           <label data-v-4730fa5c="" for="account-email"><i data-v-533b5753="" data-v-4730fa5c="" class="icon-envelope icon--lg"></i> <span data-v-4730fa5c="">E-Mail</span></label> <input data-v-4730fa5c="" id="account-email" type="password" disabled="disabled" class="input--reset"> <!----> <!---->
                        </div>
                        <!---->
                     </div>
                     <div data-v-4730fa5c="" class="input__container">
                        <div data-v-4730fa5c="" class="user-input user-input--disabled">
                           <label data-v-4730fa5c="" for="account-currency"><i data-v-533b5753="" data-v-4730fa5c="" class="icon-coins icon--lg"></i> <span data-v-4730fa5c="">Para Biriminiz</span></label> <input data-v-4730fa5c="" id="account-currency" type="password" disabled="disabled" class="input--reset"> <!----> <!---->
                        </div>
                        <!---->
                     </div>
                     <div data-v-4730fa5c="" class="input__container">
                        <div data-v-4730fa5c="" class="user-input">
                           <label data-v-4730fa5c="" for="account-birth"><i data-v-533b5753="" data-v-4730fa5c="" class="icon-calendar icon--lg"></i> <span data-v-4730fa5c="">Doğum Tarihi</span></label> <input data-v-4730fa5c="" id="account-birth" type="date" max="2005-10-15" pattern="\d{4}-\d{2}-\d{2}" class="input--reset"> <!----> <!---->
                        </div>
                        <!---->
                     </div>
                     <div data-v-4730fa5c="" class="input__container">
                        <div data-v-4730fa5c="" class="user-input">
                           <label data-v-4730fa5c="" for="account-address"><i data-v-533b5753="" data-v-4730fa5c="" class="icon-building icon--lg"></i> <span data-v-4730fa5c="">Adres</span></label> <input data-v-4730fa5c="" id="account-address" type="text" class="input--reset"> <!----> <!---->
                        </div>
                        <!---->
                     </div>
                     <div data-v-4730fa5c="" class="input__container">
                        <div data-v-4730fa5c="" class="user-input">
                           <label data-v-4730fa5c="" for="account-city"><i data-v-533b5753="" data-v-4730fa5c="" class="icon-map-marker icon--lg"></i> <span data-v-4730fa5c="">Şehir</span></label> <input data-v-4730fa5c="" id="account-city" type="text" class="input--reset"> <!----> <!---->
                        </div>
                        <!---->
                     </div>
                     <div class="input__container">
                        <div class="user-select">
                           <label for="account-country"><i data-v-533b5753="" class="icon-map-marker icon--md"></i> <span>Ülke</span></label> 
                           <select id="account-country" class="input--reset">
                              <option value="AD">
                                 Andorra
                              </option>
                              <option value="AE">
                                 دولة الإمارات العربية المتحدة
                              </option>
                              <option value="AF">
                                 افغانستان
                              </option>
                              <option value="AG">
                                 Antigua and Barbuda
                              </option>
                              <option value="AI">
                                 Anguilla
                              </option>
                              <option value="AL">
                                 Shqipëria
                              </option>
                              <option value="AM">
                                 Հայաստան
                              </option>
                              <option value="AO">
                                 Angola
                              </option>
                              <option value="AQ">
                                 Antarctica
                              </option>
                              <option value="AR">
                                 Argentina
                              </option>
                              <option value="AS">
                                 American Samoa
                              </option>
                              <option value="AT">
                                 Österreich
                              </option>
                              <option value="AU">
                                 Australia
                              </option>
                              <option value="AW">
                                 Aruba
                              </option>
                              <option value="AX">
                                 Åland
                              </option>
                              <option value="AZ">
                                 Azərbaycan
                              </option>
                              <option value="BA">
                                 Bosna i Hercegovina
                              </option>
                              <option value="BB">
                                 Barbados
                              </option>
                              <option value="BD">
                                 Bangladesh
                              </option>
                              <option value="BE">
                                 België
                              </option>
                              <option value="BF">
                                 Burkina Faso
                              </option>
                              <option value="BG">
                                 България
                              </option>
                              <option value="BH">
                                 ‏البحرين
                              </option>
                              <option value="BI">
                                 Burundi
                              </option>
                              <option value="BJ">
                                 Bénin
                              </option>
                              <option value="BL">
                                 Saint-Barthélemy
                              </option>
                              <option value="BM">
                                 Bermuda
                              </option>
                              <option value="BN">
                                 Negara Brunei Darussalam
                              </option>
                              <option value="BO">
                                 Bolivia
                              </option>
                              <option value="BQ">
                                 Bonaire
                              </option>
                              <option value="BR">
                                 Brasil
                              </option>
                              <option value="BS">
                                 Bahamas
                              </option>
                              <option value="BT">
                                 ʼbrug-yul
                              </option>
                              <option value="BV">
                                 Bouvetøya
                              </option>
                              <option value="BW">
                                 Botswana
                              </option>
                              <option value="BY">
                                 Белару́сь
                              </option>
                              <option value="BZ">
                                 Belize
                              </option>
                              <option value="CA">
                                 Canada
                              </option>
                              <option value="CC">
                                 Cocos (Keeling) Islands
                              </option>
                              <option value="CD">
                                 République démocratique du Congo
                              </option>
                              <option value="CF">
                                 Ködörösêse tî Bêafrîka
                              </option>
                              <option value="CG">
                                 République du Congo
                              </option>
                              <option value="CH">
                                 Schweiz
                              </option>
                              <option value="CI">
                                 Côte d'Ivoire
                              </option>
                              <option value="CK">
                                 Cook Islands
                              </option>
                              <option value="CL">
                                 Chile
                              </option>
                              <option value="CM">
                                 Cameroon
                              </option>
                              <option value="CN">
                                 中国
                              </option>
                              <option value="CO">
                                 Colombia
                              </option>
                              <option value="CR">
                                 Costa Rica
                              </option>
                              <option value="CU">
                                 Cuba
                              </option>
                              <option value="CV">
                                 Cabo Verde
                              </option>
                              <option value="CW">
                                 Curaçao
                              </option>
                              <option value="CX">
                                 Christmas Island
                              </option>
                              <option value="CY">
                                 Κύπρος
                              </option>
                              <option value="CZ">
                                 Česká republika
                              </option>
                              <option value="DE">
                                 Deutschland
                              </option>
                              <option value="DJ">
                                 Djibouti
                              </option>
                              <option value="DK">
                                 Danmark
                              </option>
                              <option value="DM">
                                 Dominica
                              </option>
                              <option value="DO">
                                 República Dominicana
                              </option>
                              <option value="DZ">
                                 الجزائر
                              </option>
                              <option value="EC">
                                 Ecuador
                              </option>
                              <option value="EE">
                                 Eesti
                              </option>
                              <option value="EG">
                                 مصر‎
                              </option>
                              <option value="EH">
                                 الصحراء الغربية
                              </option>
                              <option value="ER">
                                 ኤርትራ
                              </option>
                              <option value="ES">
                                 España
                              </option>
                              <option value="ET">
                                 ኢትዮጵያ
                              </option>
                              <option value="FI">
                                 Suomi
                              </option>
                              <option value="FJ">
                                 Fiji
                              </option>
                              <option value="FK">
                                 Falkland Islands
                              </option>
                              <option value="FM">
                                 Micronesia
                              </option>
                              <option value="FO">
                                 Føroyar
                              </option>
                              <option value="FR">
                                 France
                              </option>
                              <option value="GA">
                                 Gabon
                              </option>
                              <option value="GB">
                                 United Kingdom
                              </option>
                              <option value="GD">
                                 Grenada
                              </option>
                              <option value="GE">
                                 საქართველო
                              </option>
                              <option value="GF">
                                 Guyane française
                              </option>
                              <option value="GG">
                                 Guernsey
                              </option>
                              <option value="GH">
                                 Ghana
                              </option>
                              <option value="GI">
                                 Gibraltar
                              </option>
                              <option value="GL">
                                 Kalaallit Nunaat
                              </option>
                              <option value="GM">
                                 Gambia
                              </option>
                              <option value="GN">
                                 Guinée
                              </option>
                              <option value="GP">
                                 Guadeloupe
                              </option>
                              <option value="GQ">
                                 Guinea Ecuatorial
                              </option>
                              <option value="GR">
                                 Ελλάδα
                              </option>
                              <option value="GS">
                                 South Georgia
                              </option>
                              <option value="GT">
                                 Guatemala
                              </option>
                              <option value="GU">
                                 Guam
                              </option>
                              <option value="GW">
                                 Guiné-Bissau
                              </option>
                              <option value="GY">
                                 Guyana
                              </option>
                              <option value="HK">
                                 香港
                              </option>
                              <option value="HM">
                                 Heard Island and McDonald Islands
                              </option>
                              <option value="HN">
                                 Honduras
                              </option>
                              <option value="HR">
                                 Hrvatska
                              </option>
                              <option value="HT">
                                 Haïti
                              </option>
                              <option value="HU">
                                 Magyarország
                              </option>
                              <option value="ID">
                                 Indonesia
                              </option>
                              <option value="IE">
                                 Éire
                              </option>
                              <option value="IL">
                                 יִשְׂרָאֵל
                              </option>
                              <option value="IM">
                                 Isle of Man
                              </option>
                              <option value="IN">
                                 भारत
                              </option>
                              <option value="IO">
                                 British Indian Ocean Territory
                              </option>
                              <option value="IQ">
                                 العراق
                              </option>
                              <option value="IR">
                                 ایران
                              </option>
                              <option value="IS">
                                 Ísland
                              </option>
                              <option value="IT">
                                 Italia
                              </option>
                              <option value="JE">
                                 Jersey
                              </option>
                              <option value="JM">
                                 Jamaica
                              </option>
                              <option value="JO">
                                 الأردن
                              </option>
                              <option value="JP">
                                 日本
                              </option>
                              <option value="KE">
                                 Kenya
                              </option>
                              <option value="KG">
                                 Кыргызстан
                              </option>
                              <option value="KH">
                                 Kâmpŭchéa
                              </option>
                              <option value="KI">
                                 Kiribati
                              </option>
                              <option value="KM">
                                 Komori
                              </option>
                              <option value="KN">
                                 Saint Kitts and Nevis
                              </option>
                              <option value="KP">
                                 북한
                              </option>
                              <option value="KR">
                                 대한민국
                              </option>
                              <option value="KW">
                                 الكويت
                              </option>
                              <option value="KY">
                                 Cayman Islands
                              </option>
                              <option value="KZ">
                                 Қазақстан
                              </option>
                              <option value="LA">
                                 ສປປລາວ
                              </option>
                              <option value="LB">
                                 لبنان
                              </option>
                              <option value="LC">
                                 Saint Lucia
                              </option>
                              <option value="LI">
                                 Liechtenstein
                              </option>
                              <option value="LK">
                                 śrī laṃkāva
                              </option>
                              <option value="LR">
                                 Liberia
                              </option>
                              <option value="LS">
                                 Lesotho
                              </option>
                              <option value="LT">
                                 Lietuva
                              </option>
                              <option value="LU">
                                 Luxembourg
                              </option>
                              <option value="LV">
                                 Latvija
                              </option>
                              <option value="LY">
                                 ‏ليبيا
                              </option>
                              <option value="MA">
                                 المغرب
                              </option>
                              <option value="MC">
                                 Monaco
                              </option>
                              <option value="MD">
                                 Moldova
                              </option>
                              <option value="ME">
                                 Црна Гора
                              </option>
                              <option value="MF">
                                 Saint-Martin
                              </option>
                              <option value="MG">
                                 Madagasikara
                              </option>
                              <option value="MH">
                                 M̧ajeļ
                              </option>
                              <option value="MK">
                                 Северна Македонија
                              </option>
                              <option value="ML">
                                 Mali
                              </option>
                              <option value="MM">
                                 မြန်မာ
                              </option>
                              <option value="MN">
                                 Монгол улс
                              </option>
                              <option value="MO">
                                 澳門
                              </option>
                              <option value="MP">
                                 Northern Mariana Islands
                              </option>
                              <option value="MQ">
                                 Martinique
                              </option>
                              <option value="MR">
                                 موريتانيا
                              </option>
                              <option value="MS">
                                 Montserrat
                              </option>
                              <option value="MT">
                                 Malta
                              </option>
                              <option value="MU">
                                 Maurice
                              </option>
                              <option value="MV">
                                 Maldives
                              </option>
                              <option value="MW">
                                 Malawi
                              </option>
                              <option value="MX">
                                 México
                              </option>
                              <option value="MY">
                                 Malaysia
                              </option>
                              <option value="MZ">
                                 Moçambique
                              </option>
                              <option value="NA">
                                 Namibia
                              </option>
                              <option value="NC">
                                 Nouvelle-Calédonie
                              </option>
                              <option value="NE">
                                 Niger
                              </option>
                              <option value="NF">
                                 Norfolk Island
                              </option>
                              <option value="NG">
                                 Nigeria
                              </option>
                              <option value="NI">
                                 Nicaragua
                              </option>
                              <option value="NL">
                                 Nederland
                              </option>
                              <option value="NO">
                                 Norge
                              </option>
                              <option value="NP">
                                 नपल
                              </option>
                              <option value="NR">
                                 Nauru
                              </option>
                              <option value="NU">
                                 Niuē
                              </option>
                              <option value="NZ">
                                 New Zealand
                              </option>
                              <option value="OM">
                                 عمان
                              </option>
                              <option value="PA">
                                 Panamá
                              </option>
                              <option value="PE">
                                 Perú
                              </option>
                              <option value="PF">
                                 Polynésie française
                              </option>
                              <option value="PG">
                                 Papua Niugini
                              </option>
                              <option value="PH">
                                 Pilipinas
                              </option>
                              <option value="PK">
                                 Pakistan
                              </option>
                              <option value="PL">
                                 Polska
                              </option>
                              <option value="PM">
                                 Saint-Pierre-et-Miquelon
                              </option>
                              <option value="PN">
                                 Pitcairn Islands
                              </option>
                              <option value="PR">
                                 Puerto Rico
                              </option>
                              <option value="PS">
                                 فلسطين
                              </option>
                              <option value="PT">
                                 Portugal
                              </option>
                              <option value="PW">
                                 Palau
                              </option>
                              <option value="PY">
                                 Paraguay
                              </option>
                              <option value="QA">
                                 قطر
                              </option>
                              <option value="RE">
                                 La Réunion
                              </option>
                              <option value="RO">
                                 România
                              </option>
                              <option value="RS">
                                 Србија
                              </option>
                              <option value="RU">
                                 Россия
                              </option>
                              <option value="RW">
                                 Rwanda
                              </option>
                              <option value="SA">
                                 العربية السعودية
                              </option>
                              <option value="SB">
                                 Solomon Islands
                              </option>
                              <option value="SC">
                                 Seychelles
                              </option>
                              <option value="SD">
                                 السودان
                              </option>
                              <option value="SE">
                                 Sverige
                              </option>
                              <option value="SG">
                                 Singapore
                              </option>
                              <option value="SH">
                                 Saint Helena
                              </option>
                              <option value="SI">
                                 Slovenija
                              </option>
                              <option value="SJ">
                                 Svalbard og Jan Mayen
                              </option>
                              <option value="SK">
                                 Slovensko
                              </option>
                              <option value="SL">
                                 Sierra Leone
                              </option>
                              <option value="SM">
                                 San Marino
                              </option>
                              <option value="SN">
                                 Sénégal
                              </option>
                              <option value="SO">
                                 Soomaaliya
                              </option>
                              <option value="SR">
                                 Suriname
                              </option>
                              <option value="SS">
                                 South Sudan
                              </option>
                              <option value="ST">
                                 São Tomé e Príncipe
                              </option>
                              <option value="SV">
                                 El Salvador
                              </option>
                              <option value="SX">
                                 Sint Maarten
                              </option>
                              <option value="SY">
                                 سوريا
                              </option>
                              <option value="SZ">
                                 Swaziland
                              </option>
                              <option value="TC">
                                 Turks and Caicos Islands
                              </option>
                              <option value="TD">
                                 Tchad
                              </option>
                              <option value="TF">
                                 Territoire des Terres australes et antarctiques fr
                              </option>
                              <option value="TG">
                                 Togo
                              </option>
                              <option value="TH">
                                 ประเทศไทย
                              </option>
                              <option value="TJ">
                                 Тоҷикистон
                              </option>
                              <option value="TK">
                                 Tokelau
                              </option>
                              <option value="TL">
                                 Timor-Leste
                              </option>
                              <option value="TM">
                                 Türkmenistan
                              </option>
                              <option value="TN">
                                 تونس
                              </option>
                              <option value="TO">
                                 Tonga
                              </option>
                              <option value="TR">
                                 Türkiye
                              </option>
                              <option value="TT">
                                 Trinidad and Tobago
                              </option>
                              <option value="TV">
                                 Tuvalu
                              </option>
                              <option value="TW">
                                 臺灣
                              </option>
                              <option value="TZ">
                                 Tanzania
                              </option>
                              <option value="UA">
                                 Україна
                              </option>
                              <option value="UG">
                                 Uganda
                              </option>
                              <option value="UM">
                                 United States Minor Outlying Islands
                              </option>
                              <option value="US">
                                 United States
                              </option>
                              <option value="UY">
                                 Uruguay
                              </option>
                              <option value="UZ">
                                 O‘zbekiston
                              </option>
                              <option value="VA">
                                 Vaticano
                              </option>
                              <option value="VC">
                                 Saint Vincent and the Grenadines
                              </option>
                              <option value="VE">
                                 Venezuela
                              </option>
                              <option value="VG">
                                 British Virgin Islands
                              </option>
                              <option value="VI">
                                 United States Virgin Islands
                              </option>
                              <option value="VN">
                                 Việt Nam
                              </option>
                              <option value="VU">
                                 Vanuatu
                              </option>
                              <option value="WF">
                                 Wallis et Futuna
                              </option>
                              <option value="WS">
                                 Samoa
                              </option>
                              <option value="XK">
                                 Republika e Kosovës
                              </option>
                              <option value="YE">
                                 اليَمَن
                              </option>
                              <option value="YT">
                                 Mayotte
                              </option>
                              <option value="ZA">
                                 South Africa
                              </option>
                              <option value="ZM">
                                 Zambia
                              </option>
                              <option value="ZW">
                                 Zimbabwe
                              </option>
                           </select>
                        </div>
                        <!---->
                     </div>
                     <button data-v-6a60ad26="" class="btn btn--brand btn--flex brand-button btn--uppercase">
                        <!----> Değişiklikleri Güncelle
                     </button>
                  </form>
               </div>
            </div>
            <div data-v-c6b7569c="" data-v-7b34d726="" class="user-panel">
               <header data-v-c6b7569c="" class="">
                  <div data-v-c6b7569c="" class="user-panel__icon"><i data-v-533b5753="" data-v-c6b7569c="" class="icon-lock icon--md"></i></div>
                  <h4 data-v-c6b7569c="">Şifre Güncelleme</h4>
                  <!----> <button data-v-c6b7569c="" type="button" class="btn btn--dark btn--round btn--flex"><i data-v-533b5753="" data-v-c6b7569c="" class="icon-caret-down icon--md"></i></button>
               </header>
               <div data-v-c6b7569c="" class="user-panel__body" style="max-height: 0px;">
                  <form data-v-7b34d726="" class="form-password-update" data-v-c6b7569c="">
                     <div data-v-4730fa5c="" class="input__container">
                        <div data-v-4730fa5c="" class="user-input user-input--hidden">
                           <label data-v-4730fa5c="" for="password-new">
                              <!----> <span data-v-4730fa5c="">Yeni Şifreniz</span>
                           </label>
                           <input data-v-4730fa5c="" id="password-new" type="password" class="input--reset"> <!----> <button data-v-4730fa5c="" type="button"><i data-v-533b5753="" data-v-4730fa5c="" class="icon-eye-slash icon--sm"></i></button>
                        </div>
                        <!---->
                     </div>
                     <div data-v-4730fa5c="" class="input__container">
                        <div data-v-4730fa5c="" class="user-input user-input--hidden">
                           <label data-v-4730fa5c="" for="password-repeat">
                              <!----> <span data-v-4730fa5c="">Yeni Şifreniz Tekrarı</span>
                           </label>
                           <input data-v-4730fa5c="" id="password-repeat" type="password" class="input--reset"> <!----> <button data-v-4730fa5c="" type="button"><i data-v-533b5753="" data-v-4730fa5c="" class="icon-eye-slash icon--sm"></i></button>
                        </div>
                        <!---->
                     </div>
                     <div data-v-4730fa5c="" class="input__container">
                        <div data-v-4730fa5c="" class="user-input user-input--hidden">
                           <label data-v-4730fa5c="" for="password-existing">
                              <!----> <span data-v-4730fa5c="">Şuanki Şifeniz</span>
                           </label>
                           <input data-v-4730fa5c="" id="password-existing" type="password" class="input--reset"> <!----> <button data-v-4730fa5c="" type="button"><i data-v-533b5753="" data-v-4730fa5c="" class="icon-eye-slash icon--sm"></i></button>
                        </div>
                        <!---->
                     </div>
                     <button data-v-6a60ad26="" class="btn btn--brand btn--flex brand-button btn--uppercase">
                        <!----> Değişiklikleri Güncelle
                     </button>
                  </form>
               </div>
            </div>
         </div>
      </div>
      <!---->
   </section>
</main>
<?php }else{?>
   <main>
   <section data-v-faca5fea="" class="user user--d">
      <div data-v-faca5fea="" class="user__sidebar">
      <header data-v-faca5fea="">
            <h2 data-v-faca5fea=""><em data-v-faca5fea="">Hoşgeldiniz,</em> <span data-v-faca5fea=""><?=$us['adi']?> <?=$us['soyadi']?></span></h2>
            <a data-v-faca5fea="" href="deposit" class="outlined-link outlined-link--accent" style="padding: 0px 1.75rem;"><i data-v-533b5753="" class="outlined-link__icon-l icon-coins icon--md"></i> <span>
            <?=$us['balance']?>  ₺
            </span> <i data-v-533b5753="" class="outlined-link__icon-r icon-plus-circle icon--md"></i></a> 
            <a data-v-faca5fea="" href="withdraw" class="outlined-link outlined-link--muted" style="padding: 0px 1rem;">
               <!----> <span>
               Para Çekme
               </span> <!---->
            </a>
         </header>
         <ul data-v-faca5fea="" class="user__menu">
            <li data-v-faca5fea="">
               <a data-v-faca5fea="" href="user" class="">
                  <h3 data-v-faca5fea=""><i data-v-533b5753="" data-v-faca5fea="" class="icon-toolbox icon--lg"></i></h3>
                  <span data-v-faca5fea="">Genel Bakış</span> <i data-v-533b5753="" data-v-faca5fea="" class="icon-play icon--sm"></i>
               </a>
            </li>
            <li data-v-faca5fea="">
               <a data-v-faca5fea="" href="edit" class="router-link-exact-active open active" aria-current="page">
                  <h3 data-v-faca5fea=""><i data-v-533b5753="" data-v-faca5fea="" class="icon-edit icon--lg"></i></h3>
                  <span data-v-faca5fea="">Üyelik Bilgileri</span> <i data-v-533b5753="" data-v-faca5fea="" class="icon-play icon--sm"></i>
               </a>
            </li>
            <li data-v-faca5fea="">
               <a data-v-faca5fea="" href="verify" class="">
                  <h3 data-v-faca5fea=""><i data-v-533b5753="" data-v-faca5fea="" class="icon-verify icon--lg"></i></h3>
                  <span data-v-faca5fea="">Üyelik Doğrulama</span> <i data-v-533b5753="" data-v-faca5fea="" class="icon-play icon--sm"></i>
               </a>
            </li>
            <li data-v-faca5fea="">
               <a data-v-faca5fea="" href="messages" class="">
                  <h3 data-v-faca5fea=""><i data-v-533b5753="" data-v-faca5fea="" class="icon-messages icon--lg"></i></h3>
                  <span data-v-faca5fea="">Mesajlarım</span> <i data-v-533b5753="" data-v-faca5fea="" class="icon-play icon--sm"></i>
               </a>
            </li>
            <li data-v-faca5fea="">
               <a data-v-faca5fea="" href="transfer" class="">
                  <h3 data-v-faca5fea=""><i data-v-533b5753="" data-v-faca5fea="" class="icon-users icon--lg"></i></h3>
                  <span data-v-faca5fea="">Arkadaşına Gönder</span> <i data-v-533b5753="" data-v-faca5fea="" class="icon-play icon--sm"></i>
               </a>
            </li>
            <li data-v-faca5fea="">
               <a data-v-faca5fea="" href="bonuses" class="">
                  <h3 data-v-faca5fea=""><i data-v-533b5753="" data-v-faca5fea="" class="icon-gift icon--lg"></i></h3>
                  <span data-v-faca5fea="">Bonuslarım</span> <i data-v-533b5753="" data-v-faca5fea="" class="icon-play icon--sm"></i>
               </a>
            </li>
            <li data-v-faca5fea="">
               <a data-v-faca5fea="" href="documents" class="">
                  <h3 data-v-faca5fea=""><i data-v-533b5753="" data-v-faca5fea="" class="icon-file icon--lg"></i></h3>
                  <span data-v-faca5fea="">Belgelerim</span> <i data-v-533b5753="" data-v-faca5fea="" class="icon-play icon--sm"></i>
               </a>
            </li>
            <li data-v-faca5fea="">
               <a data-v-faca5fea="" href="sportsbook" class="">
                  <h3 data-v-faca5fea=""><i data-v-533b5753="" data-v-faca5fea="" class="icon-ticket icon--lg"></i></h3>
                  <span data-v-faca5fea="">Bahislerim</span> <i data-v-533b5753="" data-v-faca5fea="" class="icon-play icon--sm"></i>
               </a>
            </li>
            <li data-v-faca5fea="">
               <a data-v-faca5fea="" href="history" class="">
                  <h3 data-v-faca5fea=""><i data-v-533b5753="" data-v-faca5fea="" class="icon-history icon--lg"></i></h3>
                  <span data-v-faca5fea="">Geçmiş Hareketlerim</span> <i data-v-533b5753="" data-v-faca5fea="" class="icon-play icon--sm"></i>
               </a>
            </li>
            <li data-v-faca5fea="">
               <button data-v-faca5fea="" onclick="logOut()">
                  <h3 data-v-faca5fea=""><i data-v-533b5753="" data-v-faca5fea="" class="icon-logout icon--lg"></i></h3>
                  <span data-v-faca5fea="">Çıkış Yap</span>
               </button>
            </li>
         </ul>
      </div>
      <!----> 
      <div data-v-faca5fea="" class="user__view">
         <div data-v-7b34d726="" data-v-faca5fea="" class="user-edit user-edit--d">
            <div data-v-c6b7569c="" data-v-7b34d726="" class="user-panel user-panel--collapsed">
               <header data-v-c6b7569c="" class="">
                  <div data-v-c6b7569c="" class="user-panel__icon"><i data-v-533b5753="" data-v-c6b7569c="" class="icon-shield icon--md"></i></div>
                  <h4 data-v-c6b7569c="">Giriş Kurulum Menusu</h4>
                  <!----> <button data-v-c6b7569c="" type="button" class="btn btn--dark btn--round btn--flex"><i data-v-533b5753="" data-v-c6b7569c="" class="icon-caret-up icon--md"></i></button>
               </header>
               <div data-v-c6b7569c="" class="user-panel__body" style="max-height: 227px;">
                  <form data-v-7b34d726="" class="form-login-setup form-login-setup--d" data-v-c6b7569c="">
                     <div data-v-acb4bd16="" class="radio__container" label="auth.extra_auth" value="2">
                        <div data-v-acb4bd16="" class="radio-group">
                           <div data-v-acb4bd16="" class="radio-group__item"><label data-v-acb4bd16="" for="0-0">
                              Tümünü devre dışı bırak
                              </label> <i data-v-533b5753="" data-v-acb4bd16="" class="icon-circle icon--md"></i> <input data-v-acb4bd16="" type="radio" name="extra-auth" id="0-0" class="radio-group__input" value="0">
                           </div>
                           <div data-v-acb4bd16="" class="radio-group__item"><label data-v-acb4bd16="" for="1-1">
                              Sms ile girişi aktif et
                              </label> <i data-v-533b5753="" data-v-acb4bd16="" class="icon-circle icon--md"></i> <input data-v-acb4bd16="" type="radio" name="extra-auth" id="1-1" class="radio-group__input" value="1">
                           </div>
                           <div data-v-acb4bd16="" class="radio-group__item radio-group__item--active"><label data-v-acb4bd16="" for="2-2">
                              Mail ile girişi aktif et
                              </label> <i data-v-533b5753="" data-v-acb4bd16="" class="icon-circle-dot icon--md"></i> <input data-v-acb4bd16="" type="radio" name="extra-auth" id="2-2" class="radio-group__input" value="2">
                           </div>
                           <div data-v-acb4bd16="" class="radio-group__item radio-group__item--disabled"><label data-v-acb4bd16="" for="3-3">
                              Google 2 Aşamalı Güvenlik
                              </label> <i data-v-533b5753="" data-v-acb4bd16="" class="icon-circle icon--md"></i> <input data-v-acb4bd16="" type="radio" name="extra-auth" disabled="disabled" id="3-3" class="radio-group__input" value="3">
                           </div>
                        </div>
                     </div>
                     <button data-v-6a60ad26="" class="btn btn--brand btn--flex brand-button btn--uppercase">
                        <!----> Değişiklikleri Güncelle
                     </button>
                  </form>
               </div>
            </div>
            <div data-v-c6b7569c="" data-v-7b34d726="" class="user-panel">
               <header data-v-c6b7569c="" class="">
                  <div data-v-c6b7569c="" class="user-panel__icon"><i data-v-533b5753="" data-v-c6b7569c="" class="icon-google icon--md"></i></div>
                  <h4 data-v-c6b7569c="">2-Step Security Setup</h4>
                  <!----> <button data-v-c6b7569c="" type="button" class="btn btn--dark btn--round btn--flex"><i data-v-533b5753="" data-v-c6b7569c="" class="icon-caret-down icon--md"></i></button>
               </header>
               <div data-v-c6b7569c="" class="user-panel__body" style="max-height: 0px;">
                  <div data-v-7b34d726="" data-v-c6b7569c="" style="padding: 0.5rem;">
                     <div class="alert alert--info"><i data-v-533b5753="" class="icon-hexagon-exclamation icon--lg"></i> Hesabınız bu işlem için uygun değil, lütfen daha sonra tekrar deneyin.</div>
                  </div>
               </div>
            </div>
            <div data-v-c6b7569c="" data-v-7b34d726="" class="user-panel">
               <header data-v-c6b7569c="" class="">
                  <div data-v-c6b7569c="" class="user-panel__icon"><i data-v-533b5753="" data-v-c6b7569c="" class="icon-user-pen icon--md"></i></div>
                  <h4 data-v-c6b7569c="">Üyelik Bilgilerim</h4>
                  <!----> <button data-v-c6b7569c="" type="button" class="btn btn--dark btn--round btn--flex"><i data-v-533b5753="" data-v-c6b7569c="" class="icon-caret-down icon--md"></i></button>
               </header>
               <div data-v-c6b7569c="" class="user-panel__body" style="max-height: 0px;">
                  <form data-v-7b34d726="" class="form-account-edit form-account-edit--d" data-v-c6b7569c="">
                     <div data-v-4730fa5c="" class="input__container">
                        <div data-v-4730fa5c="" class="user-input user-input--disabled">
                           <label data-v-4730fa5c="" for="account-name"><i data-v-533b5753="" data-v-4730fa5c="" class="icon-id-card icon--lg"></i> <span data-v-4730fa5c="">Adınız</span></label> <input data-v-4730fa5c="" id="account-name" type="password" disabled="disabled" class="input--reset"> <!----> <!---->
                        </div>
                        <!---->
                     </div>
                     <div data-v-4730fa5c="" class="input__container">
                        <div data-v-4730fa5c="" class="user-input user-input--disabled">
                           <label data-v-4730fa5c="" for="account-surname"><i data-v-533b5753="" data-v-4730fa5c="" class="icon-id-card icon--lg"></i> <span data-v-4730fa5c="">Soyadınız</span></label> <input data-v-4730fa5c="" id="account-surname" type="password" disabled="disabled" class="input--reset"> <!----> <!---->
                        </div>
                        <!---->
                     </div>
                     <div data-v-4730fa5c="" class="input__container">
                        <div data-v-4730fa5c="" class="user-input user-input--disabled">
                           <label data-v-4730fa5c="" for="account-username"><i data-v-533b5753="" data-v-4730fa5c="" class="icon-users icon--lg"></i> <span data-v-4730fa5c="">Kullanıcı Adınız</span></label> <input data-v-4730fa5c="" id="account-username" type="password" disabled="disabled" class="input--reset"> <!----> <!---->
                        </div>
                        <!---->
                     </div>
                     <div data-v-4730fa5c="" class="input__container">
                        <div data-v-4730fa5c="" class="user-input user-input--disabled">
                           <label data-v-4730fa5c="" for="account-tc"><i data-v-533b5753="" data-v-4730fa5c="" class="icon-id-card icon--lg"></i> <span data-v-4730fa5c="">T.C Kimlik No</span></label> <input data-v-4730fa5c="" id="account-tc" type="password" disabled="disabled" class="input--reset"> <!----> <!---->
                        </div>
                        <!---->
                     </div>
                     <div data-v-4730fa5c="" class="input__container">
                        <div data-v-4730fa5c="" class="user-input user-input--disabled">
                           <label data-v-4730fa5c="" for="account-email"><i data-v-533b5753="" data-v-4730fa5c="" class="icon-envelope icon--lg"></i> <span data-v-4730fa5c="">E-Mail</span></label> <input data-v-4730fa5c="" id="account-email" type="password" disabled="disabled" class="input--reset"> <!----> <!---->
                        </div>
                        <!---->
                     </div>
                     <div data-v-4730fa5c="" class="input__container">
                        <div data-v-4730fa5c="" class="user-input user-input--disabled">
                           <label data-v-4730fa5c="" for="account-currency"><i data-v-533b5753="" data-v-4730fa5c="" class="icon-coins icon--lg"></i> <span data-v-4730fa5c="">Para Biriminiz</span></label> <input data-v-4730fa5c="" id="account-currency" type="password" disabled="disabled" class="input--reset"> <!----> <!---->
                        </div>
                        <!---->
                     </div>
                     <div data-v-4730fa5c="" class="input__container">
                        <div data-v-4730fa5c="" class="user-input">
                           <label data-v-4730fa5c="" for="account-birth"><i data-v-533b5753="" data-v-4730fa5c="" class="icon-calendar icon--lg"></i> <span data-v-4730fa5c="">Doğum Tarihi</span></label> <input data-v-4730fa5c="" id="account-birth" type="date" max="2005-10-15" pattern="\d{4}-\d{2}-\d{2}" class="input--reset"> <!----> <!---->
                        </div>
                        <!---->
                     </div>
                     <div data-v-4730fa5c="" class="input__container">
                        <div data-v-4730fa5c="" class="user-input">
                           <label data-v-4730fa5c="" for="account-address"><i data-v-533b5753="" data-v-4730fa5c="" class="icon-building icon--lg"></i> <span data-v-4730fa5c="">Adres</span></label> <input data-v-4730fa5c="" id="account-address" type="text" class="input--reset"> <!----> <!---->
                        </div>
                        <!---->
                     </div>
                     <div data-v-4730fa5c="" class="input__container">
                        <div data-v-4730fa5c="" class="user-input">
                           <label data-v-4730fa5c="" for="account-city"><i data-v-533b5753="" data-v-4730fa5c="" class="icon-map-marker icon--lg"></i> <span data-v-4730fa5c="">Şehir</span></label> <input data-v-4730fa5c="" id="account-city" type="text" class="input--reset"> <!----> <!---->
                        </div>
                        <!---->
                     </div>
                     <div class="input__container">
                        <div class="user-select">
                           <label for="account-country"><i data-v-533b5753="" class="icon-map-marker icon--md"></i> <span>Ülke</span></label> 
                           <select id="account-country" class="input--reset">
                              <option value="AD">
                                 Andorra
                              </option>
                              <option value="AE">
                                 دولة الإمارات العربية المتحدة
                              </option>
                              <option value="AF">
                                 افغانستان
                              </option>
                              <option value="AG">
                                 Antigua and Barbuda
                              </option>
                              <option value="AI">
                                 Anguilla
                              </option>
                              <option value="AL">
                                 Shqipëria
                              </option>
                              <option value="AM">
                                 Հայաստան
                              </option>
                              <option value="AO">
                                 Angola
                              </option>
                              <option value="AQ">
                                 Antarctica
                              </option>
                              <option value="AR">
                                 Argentina
                              </option>
                              <option value="AS">
                                 American Samoa
                              </option>
                              <option value="AT">
                                 Österreich
                              </option>
                              <option value="AU">
                                 Australia
                              </option>
                              <option value="AW">
                                 Aruba
                              </option>
                              <option value="AX">
                                 Åland
                              </option>
                              <option value="AZ">
                                 Azərbaycan
                              </option>
                              <option value="BA">
                                 Bosna i Hercegovina
                              </option>
                              <option value="BB">
                                 Barbados
                              </option>
                              <option value="BD">
                                 Bangladesh
                              </option>
                              <option value="BE">
                                 België
                              </option>
                              <option value="BF">
                                 Burkina Faso
                              </option>
                              <option value="BG">
                                 България
                              </option>
                              <option value="BH">
                                 ‏البحرين
                              </option>
                              <option value="BI">
                                 Burundi
                              </option>
                              <option value="BJ">
                                 Bénin
                              </option>
                              <option value="BL">
                                 Saint-Barthélemy
                              </option>
                              <option value="BM">
                                 Bermuda
                              </option>
                              <option value="BN">
                                 Negara Brunei Darussalam
                              </option>
                              <option value="BO">
                                 Bolivia
                              </option>
                              <option value="BQ">
                                 Bonaire
                              </option>
                              <option value="BR">
                                 Brasil
                              </option>
                              <option value="BS">
                                 Bahamas
                              </option>
                              <option value="BT">
                                 ʼbrug-yul
                              </option>
                              <option value="BV">
                                 Bouvetøya
                              </option>
                              <option value="BW">
                                 Botswana
                              </option>
                              <option value="BY">
                                 Белару́сь
                              </option>
                              <option value="BZ">
                                 Belize
                              </option>
                              <option value="CA">
                                 Canada
                              </option>
                              <option value="CC">
                                 Cocos (Keeling) Islands
                              </option>
                              <option value="CD">
                                 République démocratique du Congo
                              </option>
                              <option value="CF">
                                 Ködörösêse tî Bêafrîka
                              </option>
                              <option value="CG">
                                 République du Congo
                              </option>
                              <option value="CH">
                                 Schweiz
                              </option>
                              <option value="CI">
                                 Côte d'Ivoire
                              </option>
                              <option value="CK">
                                 Cook Islands
                              </option>
                              <option value="CL">
                                 Chile
                              </option>
                              <option value="CM">
                                 Cameroon
                              </option>
                              <option value="CN">
                                 中国
                              </option>
                              <option value="CO">
                                 Colombia
                              </option>
                              <option value="CR">
                                 Costa Rica
                              </option>
                              <option value="CU">
                                 Cuba
                              </option>
                              <option value="CV">
                                 Cabo Verde
                              </option>
                              <option value="CW">
                                 Curaçao
                              </option>
                              <option value="CX">
                                 Christmas Island
                              </option>
                              <option value="CY">
                                 Κύπρος
                              </option>
                              <option value="CZ">
                                 Česká republika
                              </option>
                              <option value="DE">
                                 Deutschland
                              </option>
                              <option value="DJ">
                                 Djibouti
                              </option>
                              <option value="DK">
                                 Danmark
                              </option>
                              <option value="DM">
                                 Dominica
                              </option>
                              <option value="DO">
                                 República Dominicana
                              </option>
                              <option value="DZ">
                                 الجزائر
                              </option>
                              <option value="EC">
                                 Ecuador
                              </option>
                              <option value="EE">
                                 Eesti
                              </option>
                              <option value="EG">
                                 مصر‎
                              </option>
                              <option value="EH">
                                 الصحراء الغربية
                              </option>
                              <option value="ER">
                                 ኤርትራ
                              </option>
                              <option value="ES">
                                 España
                              </option>
                              <option value="ET">
                                 ኢትዮጵያ
                              </option>
                              <option value="FI">
                                 Suomi
                              </option>
                              <option value="FJ">
                                 Fiji
                              </option>
                              <option value="FK">
                                 Falkland Islands
                              </option>
                              <option value="FM">
                                 Micronesia
                              </option>
                              <option value="FO">
                                 Føroyar
                              </option>
                              <option value="FR">
                                 France
                              </option>
                              <option value="GA">
                                 Gabon
                              </option>
                              <option value="GB">
                                 United Kingdom
                              </option>
                              <option value="GD">
                                 Grenada
                              </option>
                              <option value="GE">
                                 საქართველო
                              </option>
                              <option value="GF">
                                 Guyane française
                              </option>
                              <option value="GG">
                                 Guernsey
                              </option>
                              <option value="GH">
                                 Ghana
                              </option>
                              <option value="GI">
                                 Gibraltar
                              </option>
                              <option value="GL">
                                 Kalaallit Nunaat
                              </option>
                              <option value="GM">
                                 Gambia
                              </option>
                              <option value="GN">
                                 Guinée
                              </option>
                              <option value="GP">
                                 Guadeloupe
                              </option>
                              <option value="GQ">
                                 Guinea Ecuatorial
                              </option>
                              <option value="GR">
                                 Ελλάδα
                              </option>
                              <option value="GS">
                                 South Georgia
                              </option>
                              <option value="GT">
                                 Guatemala
                              </option>
                              <option value="GU">
                                 Guam
                              </option>
                              <option value="GW">
                                 Guiné-Bissau
                              </option>
                              <option value="GY">
                                 Guyana
                              </option>
                              <option value="HK">
                                 香港
                              </option>
                              <option value="HM">
                                 Heard Island and McDonald Islands
                              </option>
                              <option value="HN">
                                 Honduras
                              </option>
                              <option value="HR">
                                 Hrvatska
                              </option>
                              <option value="HT">
                                 Haïti
                              </option>
                              <option value="HU">
                                 Magyarország
                              </option>
                              <option value="ID">
                                 Indonesia
                              </option>
                              <option value="IE">
                                 Éire
                              </option>
                              <option value="IL">
                                 יִשְׂרָאֵל
                              </option>
                              <option value="IM">
                                 Isle of Man
                              </option>
                              <option value="IN">
                                 भारत
                              </option>
                              <option value="IO">
                                 British Indian Ocean Territory
                              </option>
                              <option value="IQ">
                                 العراق
                              </option>
                              <option value="IR">
                                 ایران
                              </option>
                              <option value="IS">
                                 Ísland
                              </option>
                              <option value="IT">
                                 Italia
                              </option>
                              <option value="JE">
                                 Jersey
                              </option>
                              <option value="JM">
                                 Jamaica
                              </option>
                              <option value="JO">
                                 الأردن
                              </option>
                              <option value="JP">
                                 日本
                              </option>
                              <option value="KE">
                                 Kenya
                              </option>
                              <option value="KG">
                                 Кыргызстан
                              </option>
                              <option value="KH">
                                 Kâmpŭchéa
                              </option>
                              <option value="KI">
                                 Kiribati
                              </option>
                              <option value="KM">
                                 Komori
                              </option>
                              <option value="KN">
                                 Saint Kitts and Nevis
                              </option>
                              <option value="KP">
                                 북한
                              </option>
                              <option value="KR">
                                 대한민국
                              </option>
                              <option value="KW">
                                 الكويت
                              </option>
                              <option value="KY">
                                 Cayman Islands
                              </option>
                              <option value="KZ">
                                 Қазақстан
                              </option>
                              <option value="LA">
                                 ສປປລາວ
                              </option>
                              <option value="LB">
                                 لبنان
                              </option>
                              <option value="LC">
                                 Saint Lucia
                              </option>
                              <option value="LI">
                                 Liechtenstein
                              </option>
                              <option value="LK">
                                 śrī laṃkāva
                              </option>
                              <option value="LR">
                                 Liberia
                              </option>
                              <option value="LS">
                                 Lesotho
                              </option>
                              <option value="LT">
                                 Lietuva
                              </option>
                              <option value="LU">
                                 Luxembourg
                              </option>
                              <option value="LV">
                                 Latvija
                              </option>
                              <option value="LY">
                                 ‏ليبيا
                              </option>
                              <option value="MA">
                                 المغرب
                              </option>
                              <option value="MC">
                                 Monaco
                              </option>
                              <option value="MD">
                                 Moldova
                              </option>
                              <option value="ME">
                                 Црна Гора
                              </option>
                              <option value="MF">
                                 Saint-Martin
                              </option>
                              <option value="MG">
                                 Madagasikara
                              </option>
                              <option value="MH">
                                 M̧ajeļ
                              </option>
                              <option value="MK">
                                 Северна Македонија
                              </option>
                              <option value="ML">
                                 Mali
                              </option>
                              <option value="MM">
                                 မြန်မာ
                              </option>
                              <option value="MN">
                                 Монгол улс
                              </option>
                              <option value="MO">
                                 澳門
                              </option>
                              <option value="MP">
                                 Northern Mariana Islands
                              </option>
                              <option value="MQ">
                                 Martinique
                              </option>
                              <option value="MR">
                                 موريتانيا
                              </option>
                              <option value="MS">
                                 Montserrat
                              </option>
                              <option value="MT">
                                 Malta
                              </option>
                              <option value="MU">
                                 Maurice
                              </option>
                              <option value="MV">
                                 Maldives
                              </option>
                              <option value="MW">
                                 Malawi
                              </option>
                              <option value="MX">
                                 México
                              </option>
                              <option value="MY">
                                 Malaysia
                              </option>
                              <option value="MZ">
                                 Moçambique
                              </option>
                              <option value="NA">
                                 Namibia
                              </option>
                              <option value="NC">
                                 Nouvelle-Calédonie
                              </option>
                              <option value="NE">
                                 Niger
                              </option>
                              <option value="NF">
                                 Norfolk Island
                              </option>
                              <option value="NG">
                                 Nigeria
                              </option>
                              <option value="NI">
                                 Nicaragua
                              </option>
                              <option value="NL">
                                 Nederland
                              </option>
                              <option value="NO">
                                 Norge
                              </option>
                              <option value="NP">
                                 नपल
                              </option>
                              <option value="NR">
                                 Nauru
                              </option>
                              <option value="NU">
                                 Niuē
                              </option>
                              <option value="NZ">
                                 New Zealand
                              </option>
                              <option value="OM">
                                 عمان
                              </option>
                              <option value="PA">
                                 Panamá
                              </option>
                              <option value="PE">
                                 Perú
                              </option>
                              <option value="PF">
                                 Polynésie française
                              </option>
                              <option value="PG">
                                 Papua Niugini
                              </option>
                              <option value="PH">
                                 Pilipinas
                              </option>
                              <option value="PK">
                                 Pakistan
                              </option>
                              <option value="PL">
                                 Polska
                              </option>
                              <option value="PM">
                                 Saint-Pierre-et-Miquelon
                              </option>
                              <option value="PN">
                                 Pitcairn Islands
                              </option>
                              <option value="PR">
                                 Puerto Rico
                              </option>
                              <option value="PS">
                                 فلسطين
                              </option>
                              <option value="PT">
                                 Portugal
                              </option>
                              <option value="PW">
                                 Palau
                              </option>
                              <option value="PY">
                                 Paraguay
                              </option>
                              <option value="QA">
                                 قطر
                              </option>
                              <option value="RE">
                                 La Réunion
                              </option>
                              <option value="RO">
                                 România
                              </option>
                              <option value="RS">
                                 Србија
                              </option>
                              <option value="RU">
                                 Россия
                              </option>
                              <option value="RW">
                                 Rwanda
                              </option>
                              <option value="SA">
                                 العربية السعودية
                              </option>
                              <option value="SB">
                                 Solomon Islands
                              </option>
                              <option value="SC">
                                 Seychelles
                              </option>
                              <option value="SD">
                                 السودان
                              </option>
                              <option value="SE">
                                 Sverige
                              </option>
                              <option value="SG">
                                 Singapore
                              </option>
                              <option value="SH">
                                 Saint Helena
                              </option>
                              <option value="SI">
                                 Slovenija
                              </option>
                              <option value="SJ">
                                 Svalbard og Jan Mayen
                              </option>
                              <option value="SK">
                                 Slovensko
                              </option>
                              <option value="SL">
                                 Sierra Leone
                              </option>
                              <option value="SM">
                                 San Marino
                              </option>
                              <option value="SN">
                                 Sénégal
                              </option>
                              <option value="SO">
                                 Soomaaliya
                              </option>
                              <option value="SR">
                                 Suriname
                              </option>
                              <option value="SS">
                                 South Sudan
                              </option>
                              <option value="ST">
                                 São Tomé e Príncipe
                              </option>
                              <option value="SV">
                                 El Salvador
                              </option>
                              <option value="SX">
                                 Sint Maarten
                              </option>
                              <option value="SY">
                                 سوريا
                              </option>
                              <option value="SZ">
                                 Swaziland
                              </option>
                              <option value="TC">
                                 Turks and Caicos Islands
                              </option>
                              <option value="TD">
                                 Tchad
                              </option>
                              <option value="TF">
                                 Territoire des Terres australes et antarctiques fr
                              </option>
                              <option value="TG">
                                 Togo
                              </option>
                              <option value="TH">
                                 ประเทศไทย
                              </option>
                              <option value="TJ">
                                 Тоҷикистон
                              </option>
                              <option value="TK">
                                 Tokelau
                              </option>
                              <option value="TL">
                                 Timor-Leste
                              </option>
                              <option value="TM">
                                 Türkmenistan
                              </option>
                              <option value="TN">
                                 تونس
                              </option>
                              <option value="TO">
                                 Tonga
                              </option>
                              <option value="TR" selected>
                                 Türkiye
                              </option>
                              <option value="TT">
                                 Trinidad and Tobago
                              </option>
                              <option value="TV">
                                 Tuvalu
                              </option>
                              <option value="TW">
                                 臺灣
                              </option>
                              <option value="TZ">
                                 Tanzania
                              </option>
                              <option value="UA">
                                 Україна
                              </option>
                              <option value="UG">
                                 Uganda
                              </option>
                              <option value="UM">
                                 United States Minor Outlying Islands
                              </option>
                              <option value="US">
                                 United States
                              </option>
                              <option value="UY">
                                 Uruguay
                              </option>
                              <option value="UZ">
                                 O‘zbekiston
                              </option>
                              <option value="VA">
                                 Vaticano
                              </option>
                              <option value="VC">
                                 Saint Vincent and the Grenadines
                              </option>
                              <option value="VE">
                                 Venezuela
                              </option>
                              <option value="VG">
                                 British Virgin Islands
                              </option>
                              <option value="VI">
                                 United States Virgin Islands
                              </option>
                              <option value="VN">
                                 Việt Nam
                              </option>
                              <option value="VU">
                                 Vanuatu
                              </option>
                              <option value="WF">
                                 Wallis et Futuna
                              </option>
                              <option value="WS">
                                 Samoa
                              </option>
                              <option value="XK">
                                 Republika e Kosovës
                              </option>
                              <option value="YE">
                                 اليَمَن
                              </option>
                              <option value="YT">
                                 Mayotte
                              </option>
                              <option value="ZA">
                                 South Africa
                              </option>
                              <option value="ZM">
                                 Zambia
                              </option>
                              <option value="ZW">
                                 Zimbabwe
                              </option>
                           </select>
                        </div>
                        <!---->
                     </div>
                     <button data-v-6a60ad26="" class="btn btn--brand btn--flex brand-button btn--uppercase">
                        <!----> Değişiklikleri Güncelle
                     </button>
                  </form>
               </div>
            </div>
            <div data-v-c6b7569c="" data-v-7b34d726="" class="user-panel">
               <header data-v-c6b7569c="" class="">
                  <div data-v-c6b7569c="" class="user-panel__icon"><i data-v-533b5753="" data-v-c6b7569c="" class="icon-lock icon--md"></i></div>
                  <h4 data-v-c6b7569c="">Şifre Güncelleme</h4>
                  <!----> <button data-v-c6b7569c="" type="button" class="btn btn--dark btn--round btn--flex"><i data-v-533b5753="" data-v-c6b7569c="" class="icon-caret-down icon--md"></i></button>
               </header>
               <div data-v-c6b7569c="" class="user-panel__body" style="max-height: 0px;">
                  <form data-v-7b34d726="" class="form-password-update form-password-update--d" data-v-c6b7569c="">
                     <div data-v-4730fa5c="" class="input__container">
                        <div data-v-4730fa5c="" class="user-input user-input--hidden">
                           <label data-v-4730fa5c="" for="password-new">
                              <!----> <span data-v-4730fa5c="">Yeni Şifreniz</span>
                           </label>
                           <input data-v-4730fa5c="" id="password-new" type="password" class="input--reset"> <!----> <button data-v-4730fa5c="" type="button"><i data-v-533b5753="" data-v-4730fa5c="" class="icon-eye-slash icon--sm"></i></button>
                        </div>
                        <!---->
                     </div>
                     <div data-v-4730fa5c="" class="input__container">
                        <div data-v-4730fa5c="" class="user-input user-input--hidden">
                           <label data-v-4730fa5c="" for="password-repeat">
                              <!----> <span data-v-4730fa5c="">Yeni Şifreniz Tekrarı</span>
                           </label>
                           <input data-v-4730fa5c="" id="password-repeat" type="password" class="input--reset"> <!----> <button data-v-4730fa5c="" type="button"><i data-v-533b5753="" data-v-4730fa5c="" class="icon-eye-slash icon--sm"></i></button>
                        </div>
                        <!---->
                     </div>
                     <div data-v-4730fa5c="" class="input__container">
                        <div data-v-4730fa5c="" class="user-input user-input--hidden">
                           <label data-v-4730fa5c="" for="password-existing">
                              <!----> <span data-v-4730fa5c="">Şuanki Şifeniz</span>
                           </label>
                           <input data-v-4730fa5c="" id="password-existing" type="password" class="input--reset"> <!----> <button data-v-4730fa5c="" type="button"><i data-v-533b5753="" data-v-4730fa5c="" class="icon-eye-slash icon--sm"></i></button>
                        </div>
                        <!---->
                     </div>
                     <button data-v-6a60ad26="" class="btn btn--brand btn--flex brand-button btn--uppercase">
                        <!----> Değişiklikleri Güncelle
                     </button>
                  </form>
               </div>
            </div>
         </div>
      </div>
      <div data-v-faca5fea="" class="user__promotions">
         <article data-v-c0fb7c98="" data-v-faca5fea="" class="promotion">
            <img data-v-c0fb7c98="" src="https://d3ejb2l5e3bvmc.cloudfront.net/production/promotions/promotion_first_132_37_v1.jpeg" alt="%100 HAFTASONU BONUSU" loading="lazy"> 
            <div data-v-c0fb7c98="" class="promotion__placeholder"><img data-v-c0fb7c98="" src="/images/redesign/logo-loader.png" alt="%100 HAFTASONU BONUSU"> <span data-v-c0fb7c98="">%100 HAFTASONU BONUSU</span></div>
         </article>
         <article data-v-c0fb7c98="" data-v-faca5fea="" class="promotion">
            <img data-v-c0fb7c98="" src="https://d3ejb2l5e3bvmc.cloudfront.net/production/promotions/promotion_first_134_37_v1.jpeg" alt="%100 SPOR BONUSU" loading="lazy"> 
            <div data-v-c0fb7c98="" class="promotion__placeholder"><img data-v-c0fb7c98="" src="/images/redesign/logo-loader.png" alt="%100 SPOR BONUSU"> <span data-v-c0fb7c98="">%100 SPOR BONUSU</span></div>
         </article>
         <article data-v-c0fb7c98="" data-v-faca5fea="" class="promotion">
            <img data-v-c0fb7c98="" src="https://d3ejb2l5e3bvmc.cloudfront.net/production/promotions/promotion_first_135_37_v1.jpeg" alt="%50 PAZARTESİ BONUSU" loading="lazy"> 
            <div data-v-c0fb7c98="" class="promotion__placeholder"><img data-v-c0fb7c98="" src="/images/redesign/logo-loader.png" alt="%50 PAZARTESİ BONUSU"> <span data-v-c0fb7c98="">%50 PAZARTESİ BONUSU</span></div>
         </article>
         <article data-v-c0fb7c98="" data-v-faca5fea="" class="promotion">
            <img data-v-c0fb7c98="" src="https://d3ejb2l5e3bvmc.cloudfront.net/production/promotions/promotion_first_136_37_v1.jpeg" alt="%15 ÇEVRİMSİZ SPOR" loading="lazy"> 
            <div data-v-c0fb7c98="" class="promotion__placeholder"><img data-v-c0fb7c98="" src="/images/redesign/logo-loader.png" alt="%15 ÇEVRİMSİZ SPOR"> <span data-v-c0fb7c98="">%15 ÇEVRİMSİZ SPOR</span></div>
         </article>
         <article data-v-c0fb7c98="" data-v-faca5fea="" class="promotion">
            <img data-v-c0fb7c98="" src="https://d3ejb2l5e3bvmc.cloudfront.net/production/promotions/promotion_first_137_37_v1.jpeg" alt="HERKES 3, ŞANSI HAKEDER" loading="lazy"> 
            <div data-v-c0fb7c98="" class="promotion__placeholder"><img data-v-c0fb7c98="" src="/images/redesign/logo-loader.png" alt="HERKES 3, ŞANSI HAKEDER"> <span data-v-c0fb7c98="">HERKES 3, ŞANSI HAKEDER</span></div>
         </article>
         <article data-v-c0fb7c98="" data-v-faca5fea="" class="promotion">
            <img data-v-c0fb7c98="" src="https://d3ejb2l5e3bvmc.cloudfront.net/production/promotions/promotion_first_138_37_v1.jpeg" alt="Casino Yatırım Bonusu" loading="lazy"> 
            <div data-v-c0fb7c98="" class="promotion__placeholder"><img data-v-c0fb7c98="" src="/images/redesign/logo-loader.png" alt="Casino Yatırım Bonusu"> <span data-v-c0fb7c98="">Casino Yatırım Bonusu</span></div>
         </article>
         <article data-v-c0fb7c98="" data-v-faca5fea="" class="promotion">
            <img data-v-c0fb7c98="" src="https://d3ejb2l5e3bvmc.cloudfront.net/production/promotions/promotion_first_140_37_v1.jpeg" alt="%20 Anlık Casino Geri Ödeme" loading="lazy"> 
            <div data-v-c0fb7c98="" class="promotion__placeholder"><img data-v-c0fb7c98="" src="/images/redesign/logo-loader.png" alt="%20 Anlık Casino Geri Ödeme"> <span data-v-c0fb7c98="">%20 Anlık Casino Geri Ödeme</span></div>
         </article>
         <article data-v-c0fb7c98="" data-v-faca5fea="" class="promotion">
            <img data-v-c0fb7c98="" src="https://d3ejb2l5e3bvmc.cloudfront.net/production/promotions/promotion_first_142_37_v1.jpeg" alt="%40 PERŞEMBE BONUSU" loading="lazy"> 
            <div data-v-c0fb7c98="" class="promotion__placeholder"><img data-v-c0fb7c98="" src="/images/redesign/logo-loader.png" alt="%40 PERŞEMBE BONUSU"> <span data-v-c0fb7c98="">%40 PERŞEMBE BONUSU</span></div>
         </article>
         <article data-v-c0fb7c98="" data-v-faca5fea="" class="promotion">
            <img data-v-c0fb7c98="" src="https://d3ejb2l5e3bvmc.cloudfront.net/production/promotions/promotion_first_149_37_v1.png" alt="Drops &amp; Wins Slots &amp; Live Casino" loading="lazy"> 
            <div data-v-c0fb7c98="" class="promotion__placeholder"><img data-v-c0fb7c98="" src="/images/redesign/logo-loader.png" alt="Drops &amp; Wins Slots &amp; Live Casino"> <span data-v-c0fb7c98="">Drops &amp; Wins Slots &amp; Live Casino</span></div>
         </article>
      </div>
   </section>
</main>
<?php }?>   