<div id="wrapper" data-role="page" data-theme="d" style="overflow: hidden;" class="wrapper ui-page ui-page-theme-d ui-page-active" data-url="wrapper" tabindex="0">
   <div id="overlay" class="hidden"></div>
   <div data-role="content" class="cw_mob_root ui-content" role="main">
      <div class="floating-links-wrapper">
      </div>
      <div class="header__wrap_block">
         <div id="header">
            <div class="header_both d-flex align-items-center relative">
               <a class="LogoMobilePlatform ui-link" href="/"></a>
               <div id="menu-right" class="d-flex ns">
                  <a href="/Registration/Register" class="header_reg_btn ns ui-link" id="js_mob_sign_up">Üye Ol</a>
                  <a onclick="openRightSidebar();" class="header_login_btn ns ui-link" id="js_mob_sign_in">Üye Girişi</a>
               </div>
            </div>
         </div>
      </div>
      <link href="/assets/Content/components/popups/trustedBrowsersPopup.css" rel="stylesheet">
      <link href="/assets/Content/components/popups/onlyMobile/trustedBrowsersPopup.css" rel="stylesheet">
      <input type="hidden" name="loginHref" id="js_lg_href" value="/?btag=38644247_291562">
      <div class="trusted_container">
         <form action="javascript:;" automation="trustedBrowsers" id="trustedBrowsers" method="post">
            <input name="__RequestVerificationToken" type="hidden" value="QVpXlVK_7VsBXrgApIuuXNxirZcyUSAfLdw8iz5H4SFn84Yki2T29KRDppQvoob-B6nQdgP0LJDkpONF7rkxFCl7aQm1oKlKV-Z11sa635s1">        <input type="hidden" value="" id="returnUrl" name="returnUrl">
            <input type="hidden" name="TrustLogin" value="true">
            <div class="trusted_popup">
               <div class="trusted_popup__header text-center">
                  <i class="trusted_popup__icon dynamic_icon"></i>
                  <p class="trusted_popup__text">Onaylama Kodu e-postanıza gönderilmiştir.</p>
               </div>
               <div id="">
                  <div class="form-group">
                     <input name="TDVerificationCode" id="TDVerificationCode" placeholder="Onaylama kodu giriniz" class="trusted_popup__input" automation="td_verification_code" data-role="none">
                  </div>
                  <div class="form-group text-center trusted_popup__resendCont" id="js_tb_resend_cont"><a class="trusted_popup__link" id="js_tb_resend_btn">Kodu yeniden gönder</a></div>
                  <div class="form-group">
                     <label class="trusted_popup__checkbox d-inline-block" data-role="none">
                     <input type="checkbox" name="TrustBrowser" id="TrustBrowser" value="false" automation="TrustBrowser_checkbox" data-role="none">
                     <span class="trusted_popup__view d-inline-flex align-items-center">Güvenilen Tarayıcı olarak kaydet</span>
                     </label>
                  </div>
                  <button type="button" class="trusted_popup__button d-flex justify-content-center align-items-center" automation="confirm_button" id="js_tb_confirm_btn" data-role="none">ONAYLA</button>
               </div>
            </div>
         </form>
      </div>
   
      <script>
         document.body.classList.add('without_navbar');
      </script>
      <aside class="cw_mob_right_sidebar">
         <div class="platformRightLoginPanel sidebar_login-content" id="sidebar-login">
            <div class="sidebar_login-header d-flex align-items-center justify-content-between">
               <span>ÜYE GİRİŞİ</span>
               <span class="sidebar_login-close" onclick="closeRightSidebar();"></span>
            </div>
            <form action="/Login/Login" class="login_container" method="post" novalidate="novalidate">
               <input name="__RequestVerificationToken" type="hidden" value="3VpfbG2iBTcmH20x3oivq7PS-4fEyN3wpVkuYXYnzF3xxiyVkkqODuggA97oSioLRXcbJb2ShF0Sy0YB0sLlU1vjcRo83fAWe4XZkrfldDE1">        
               <div class="r_login__row">
                  <div class="platformLoginRightLogo"></div>
               </div>
               <input name="GameName" id="GameName" value="" type="hidden">
               <div class="r_login__row PlatformLoginPassContainer">
                  <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset"><input class="login_input inp" automation="email_input" data-val="true" data-val-required="Lütfen kullanıcı adınızı giriniz" id="email" name="Email" placeholder="Kullanıcı adı / E-mail / Cep numarası" required="required" tabindex="1" type="text" value="" aria-required="true"></div>
               </div>
               <div class="r_login__row PlatformLoginPassContainer eye_block">
                  <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset"><input class="platformPassInput inp" autocomplete="off" automation="password_input" data-val="true" data-val-required="Lütfen şifrenizi giriniz." id="password" name="Password" placeholder="Şifre" required="required" tabindex="2" type="password" aria-required="true"></div>
               </div>
               <div class="captcha login_captcha_block dis_none">
                  <label class="reg__row_title">Güvenlik kodu: <span class="required-field">*</span></label>
                  <div class="flex relative w-100">
                     <div class="r_login__row captcha flex alCen jb">
                        <input type="hidden" name="captcha-guid" value="d3dcd5ef4f904f85ac42b4425d1825ef">
                        <img class="captchaImage" src="/Common/Captcha?guid=d3dcd5ef4f904f85ac42b4425d1825ef&amp;height=50&amp;width=150" alt="CAPTCHA" width="150" height="50">
                        <div class="tl_refresh_container"><a class="refreshLoginCaptcha ui-link" title="Refresh"></a>
                        </div>
                        <div class="captcha_input_cont">
                           <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset"><input type="text" id="Captcha" name="Captcha" value="" autocomplete="off" placeholder="" class="l_reg  registerInput reg_input tl_input_popup_reg"></div>
                        </div>
                     </div>
                  </div>
                  <p id="recaptchaError">
                     <span class="field-validation-valid" data-valmsg-for="Recaptcha" data-valmsg-replace="true" style="color: #ff0000"></span>
                  </p>
               </div>
               <span class="field-validation-valid error warning warning-log dis_none" id="loginerrormessage"></span>
               <div class="r_login__row warning dis_none">
                  <span class="field-validation-valid" data-valmsg-for="Password" data-valmsg-replace="true"></span>
                  <span class="field-validation-valid" data-valmsg-for="Email" data-valmsg-replace="true"></span>
               </div>
               <span class="dis_none loading_span" id="loadingSpan">Yükleniyor...</span>
               <div class="r_login__row">
                  <button class="platformLoginButton btn_prim tl_btn bg-primary ui-btn ui-shadow ui-corner-all" id="loginButton" automation="login_button" type="button">ÜYE GİRİŞİ</button>
               </div>
               <div class="r_login__row">
                  <a class="platformForgPass" href="/Home/ForgotPass" data-role="none">Şifrenizi mi unuttunuz?</a>
               </div>
            </form>
            <input type="hidden" id="gameUrl" value="">
            <input type="hidden" id="loginHref" value="">
            <img class="login__banner-img" src="https://cdn-plat.apidigi.com/plat/prd/Img/mobile/partners/1093/login-banner.png" alt="banner">
         </div>
         <script type="text/javascript">
            var captchaCounter = 0;
            var captchaValid = true;
            $.validator.unobtrusive.parse($('#sidebar-login'));
            
            var captchaSession = '0';
            
            $(function() {
                function login() {
            
                    if ('False' == 'False' && '1093' != '1040') {
                        if (captchaCounter >= '3' || captchaSession >= '3') {
                            if ('1093' != '2' && '1093' != '1068'
                                && '1093' != '1171' && '1093' != '1094') {
                                captchaValid = ValidateCaptcha();
                            }
                        }
                    }
                    var gameUrl = $('#gameUrl').val();
                    var loginHref = $('#loginHref').val();
                    $.validator.unobtrusive.parse($('#sidebar-login'));
                    $('#loginButton').attr('disabled', 'disabled');
                    $("#loadingSpan").removeClass('dis_none');
                    var form = $('#sidebar-login form');
            
                    if ('False' == 'False') {
                        if ('1093' == 2 && (captchaCounter >= '3' || captchaSession >= '3')) {
                            var v = grecaptcha.getResponse();
                            if (v.length == 0) {
                                $('#gCaptcha').addClass("input-validation-error");
                                captchaValid = false;
                                $("#loadingSpan").addClass('dis_none');
                                $('#loginButton').removeAttr('disabled');
                            }
                            else {
                                $('#gCaptcha').removeClass("input-validation-error");
                                captchaValid = true;
                            }
                        }
                    }
            
                    if (!form.valid()) {
                        $('#loginButton').removeAttr('disabled');
                        $("#loadingSpan").addClass('dis_none');
                        return;
                    }
            
                    if (captchaValid) {
            
                        $.ajax({
                            url: "/tr/Login/Login",
                            type: "POST",
                            data: $(form).serialize() + '&gameUrl=' + gameUrl + "&loginHref=" + loginHref,
                            datatype: "json",
                            success: function (result) {
                                if (!result.Success) {
                                    if (result.OpenTwoFaPopup) {
                                        document.location = '/Login/LoginTwoFaConfirm';
                                        return;
                                    } else if (result.OpenTrustedBrowser) {
                                        document.location = '/Login/TrustBrowser';
                                        return;
                                    }
                                    if (result.CaptchaError) {
                                        $('#Captcha').removeClass("valid").addClass("error");
                                    }
                                    $("#loginerrormessage").text(result.Message);
                                    $("#loginerrormessage").show();
                                    $("#loginerrormessage").removeClass('dis_none');
                                    $("#loginerrormessage").css("display", "block");
                                    $('#loginButton').removeAttr('disabled');
                                    $("#loadingSpan").addClass('dis_none');
            
                                    if ('False' == 'False') {
                                        switch ('1093') {
                                        case '2':
                                        case '1068':
                                        case '1171':
                                            captchaCounter = result.Code;
                                            if (captchaCounter >= '3') {
                                                $(".captchaCont").css("display", "block");
                                                if (captchaCounter >= '3' + 1) {
                                                    grecaptcha.reset();
                                                }
                                            }
                                                break;
                                            case '1040':
                                                break;
                                            default:
                                                captchaCounter = result.Code;
                                            if (captchaCounter >= '3') {
                                                $('.refreshLoginCaptcha').trigger('click');
                                                $('#Captcha').val('');
                                                $('.login_captcha_block').removeClass('dis_none');
                                            }
                                            break;
                                        }
                                    }
            
                                }
                                else {
                                    if (result.Code == "sport" || result.Code == "casino") {
                                        document.location.href = result.Message;
                                    } else {
                                        document.location.href = "/" + result.Message;
                                    }
                                }
                            }});
            
                    }
                    $("#loadingSpan").addClass('dis_none');
                    $('#loginButton').removeAttr('disabled');
                }
            
                $('#password, #email').on('keypress', function (e) {
                    if (e.keyCode == 13) {
                        login();
                    }
                });
            
                $('#loginButton').click(function () {
                    login();
                });
            
            
            });
            
            function fixReturnUrl() {
                var fixedUrl = document.location.href.replace(document.location.origin, '');
                if (fixedUrl.includes('#')) {
                    $('#loginHref').val(fixedUrl);
                }
            }
            $("._password").click(function () {
                if ($(this).hasClass('opened_pass')) {
                    $(this).removeClass('opened_pass');
                    $('#password').attr('type', 'text');
                } else {
                    $('#password').attr('type', 'password');
                    $(this).addClass('opened_pass');
                }
            });
         </script>
         <script type="text/javascript">
            $(".refreshLoginCaptcha").on("click",
                function(e) {
            var $parent = $(this).closest('div.login_captcha_block');
            var $guid = $parent.find('input[name=captcha-guid]');
            var $img = $parent.find('img');
            
            $.getJSON('/Common/RefreshCaptcha',
                        {
            guid: $guid.val(),
                height: $img.attr('height'),
                width: $img.attr('width')
            },
            function(data) {
                $guid.val(data.Guid);
                $img.attr('src', '/Common/Captcha?guid=' + data.Guid);
            });
            
            event.stopPropagation();
            event.preventDefault();
            return false;
            });
            $('#Captcha').on('blur keyup',
            function(event) {
            captchaValid = ValidateCaptcha();
            });
            
            function ValidateCaptcha() {
            $('#loginerrormessage').html('');
            if ($('#Captcha').val().length != 5) {
            $('#Captcha').removeClass("valid").addClass("error");
            $('#recaptchaError span').html('G&#252;venlik kodu alanı boş veya resimle eşleşmiyor');
            return false;
            } else {
            $('#Captcha').removeClass("error").addClass("valid");
            $('#recaptchaError span').html('');
            return true;
            }
            }
            
            if ('False'.toLowerCase() == "true") {
            $('.login_captcha_block').removeClass('dis_none');
            }
         </script>
      </aside>
      <style>
         .toWeb.btn_sec {
         background: url(https://cdn-plat.apidigi.com/plat/prd/Img/mobile/partners/1093/web_version.png);
         }
         .new_pay {
         background: url(https://cdn-plat.apidigi.com/plat/prd/Img/partners/1093/footer_sprite.png) ;
         }
         .plus18if {
         background-image: url(https://cdn-plat.apidigi.com/plat/prd/Img/partners/1093/footer_social_icons.png);
         }
         .yandex_mail_top {
         background: url(https://cdn-plat.apidigi.com/plat/prd/Img/partners/1093/footer_mail.png);
         }
         .social_icons_footer .yandex_mail {
         background-image: url(https://cdn-plat.apidigi.com/plat/prd//Img/partners/1093/yandex_mail.png);
         }
         #promo_cont {
         background-image: url(/Img/mobile/partners/1093/background.jpg);
         }
      </style>
      <div class="fixed_social_icons">
         <div id="rwQuickActions" class="quick-actions-nav ">
            <button id="rwToggleQuickActionsBtn" class=" ui-btn ui-shadow ui-corner-all">
            <span><img src="https://cdn-plat.apidigi.com/plat/prd/Img/partners/1093/live-chat-img/icon-quick-actions-plus.svg?1"></span>
            </button>
            <div id="rwQuickActionsMenuNew">
               <div id="rwQuickActionsMenuWrapperNew">
                  <a onclick="openRightSidebar();" id="btcWithdraw" class="ui-link">
                  <span>HER GÜN <br> <i>ÜCRETSİZ</i> <br> SPOR TURNUVASI!</span>
                  </a>
                  <a href="https://rebrand.ly/mobilgrand" target="_blank" class="ui-link">
                  <img src="https://cdn-plat.apidigi.com/plat/prd/Img/partners/1093/live-chat-img/grand-app.png">
                  <span>grand app</span>
                  </a>
                  <a href="/promotion/grandcark" class="ui-link">
                  <img src="https://cdn-plat.apidigi.com/plat/prd/Img/partners/1093/live-chat-img/grand-ark.png">
                  <span>şans çarkı</span>
                  </a>
                  <a href="https://rebrand.ly/vipclubgrand" target="_blank" class="ui-link">
                  <img src="https://cdn-plat.apidigi.com/plat/prd/Img/partners/1093/live-chat-img/vip-club.png">
                  <span>vip club</span>
                  </a>
                  <a href="https://rebrand.ly/beniaragrand" target="_blank" class="ui-link">
                  <img src="https://cdn-plat.apidigi.com/plat/prd/Img/partners/1093/live-chat-img/beni-ara.png">
                  <span>beni ara</span>
                  </a>
                  <a href="https://rebrand.ly/biziarayingrand" target="_blank" class="ui-link">
                  <img src="https://cdn-plat.apidigi.com/plat/prd/Img/partners/1093/live-chat-img/canl-destek.png">
                  <span>7/24 destek</span>
                  </a>
                  <a href="https://rebrand.ly/bonustalepgrand" class="hide-on-english ui-link" target="_blank">
                  <img src="https://cdn-plat.apidigi.com/plat/prd/Img/partners/1093/live-chat-img/bonus-tale.png">
                  <span>bonus talep</span>
                  </a>
                  <a href="https://rebrand.ly/yatirimgrand" target="_blank" class="ui-link">
                  <img src="https://cdn-plat.apidigi.com/plat/prd/Img/partners/1093/live-chat-img/para-yat-rma.png">
                  <span>nasıl yatırım yaparım</span>
                  </a>
                  <a href="https://t.me/grandpashabett " target="_blank" class="ui-link">
                  <img src="https://cdn-plat.apidigi.com/plat/prd/Img/partners/1093/live-chat-img/telegram.png">
                  <span>telegram</span>
                  </a>
                  <a href="/Sport/ReactIndex#Live/page" target="_blank" class="ui-link">
                  <img src="https://cdn-plat.apidigi.com/plat/prd/Img/partners/1093/live-chat-img/canl-tv.png">
                  <span>canlı tv</span>
                  </a>
               </div>
            </div>
         </div>
      </div>
      <script>
         /*live chat links*/
         $(document).on('click', '#rwToggleQuickActionsBtn', function () {
             $(this).toggleClass('opened');
             $('#rwQuickActions').toggleClass('opened');
             $('#rwSupportOptions').removeClass('opened');
             if ($('#rwQuickActions').hasClass('opened')) {
                 $('#rwQuickActionsOverlay').addClass('opened');
             } else {
                 $('#rwQuickActionsOverlay').removeClass('opened');
             }
         });
         
         $(document).on('click', '#rwQuickActionsOverlay, #rwQuickActionsWindowCloseBtn', function () {
             $('#rwQuickActions').removeClass('opened');
             $('#rwQuickActionsOverlay').removeClass('opened');
             $('#rwQuickActionsWindow').removeClass('opened');
             if (rw.getDeviceType() !== 'd') {
                 $('#rwToggleQuickActionsBtn, #lc-c').removeClass('opened');
             }
         });
         
      </script>
	   <script type="text/javascript">
         (() => {
             let btnClicked = false;
             const inpRegex = new RegExp('^[a-zA-Z0-9_.-]*$');
             $('#js_tb_confirm_btn').on('click', function () {
                 let inpVal = document.getElementById('TDVerificationCode').value;
                 let lgHref = document.getElementById('js_lg_href') != null ? document.getElementById('js_lg_href').value : '';
                 if (inpVal == '' || !inpRegex.test(inpVal)) {
                     createToast('error', 'Error', 'Wrong input value!');
                     return;
                 }
                 if (!btnClicked) {
                     showHideLoader(true);
                     btnClicked = true;
                     $.ajax({
                         url: "/request.php?q=2fa",
                         type: "POST",
                         data: $('#trustedBrowsers').serialize() + '&loginHref=' + lgHref,
                         datatype: "json",
                         success: function (result) {
                             showHideLoader(false);
                             btnClicked = false;
							 if (result !== "success") {
								 //createToast('error', 'Error', result.Message);
								 createToast('error', 'Error', "Kod Hatalı");
							 } else {
								 location.href = "/";
								 //if (result.Code == "sport" || result.Code == "casino" || result.Code == "gamelaunch") {
								 //  document.location.href = result.Message;
								 //} else {
								 // location.href = "/" + result.Message;
								 //}
							 }
                         }
                     });
                 } else {
                     btnClicked = false;
                 }
             });
         
             $('.trusted_container,.trusted_popup__input').keypress(function (e) {
                 if (e.which == 13) {
                     $('#js_tb_confirm_btn').trigger('click');
                     e.stopPropagation();
                     e.preventDefault();
                 }
             });
         
             $(document).on('click', '#js_tb_resend_btn', function (e) {
                 if (!btnClicked) {
                     showHideLoader(true);
                     btnClicked = true;
                     $.ajax({
                         url: "/Login/ResendTrustedLoginCode",
                         type: "POST",
                         success: function (result) {
                             showHideLoader(false);
                             if (result.Success) {
                                 startTBCountDown();
                                 createToast('success', `Başarı`, result.Message);
                                 $('#js_tb_resend_cont').html(`<span>` + `Kodu yeniden g&#246;nder` + ` </span><span id="js_tb_remaining_time">60</span>`);
                             } else {
                                 createToast('error', 'Error', result.Message);
                             }
                             btnClicked = false;
                         }
                     });
                 }
             });
         
             $(document).on('click', '#TrustBrowser', function (e) {
                 if (this.value == 'true') {
                     this.value = false;
                 } else {
                     this.value = true;
                 }
             });
         
             function startTBCountDown() {
                 clearInterval(window.tbCountDwnInt);
                 let startFrom = 60;
                 window.tbCountDwnInt = setInterval(function () {
                     startFrom--;
                     if (startFrom > 0) {
                         $('#js_tb_remaining_time').text(startFrom);
                     } else {
                         $('#js_tb_resend_cont').html(`<a class="trusted_popup__link" id="js_tb_resend_btn">` + `Kodu yeniden g&#246;nder` + `</a>`);
                         clearInterval(window.tbCountDwnInt);
                     }
                 }, 1000);
             }
             $('body').addClass('ofh');
             startTBCountDown();
             var mnUrl = getCookie('mnUrl');
             $('#returnUrl').val(mnUrl);
         })();
      </script>
      <div id="footer" class="bgMain">
         <div class="footer_cont ">
            <div class="phone_lang_cont flex alCen">
               <div class="drop_down_lang_arrow">
                  <span class="drop_down_lang__front_el">
                  <span class="lang_width lang tr" style="background-image: url('https://cdn-plat.apidigi.com/plat/prd/Img/flags/mob_flags.png')"></span>
                  Türkçe
                  </span>
                  <select onchange="window.location.href = this.value" data-role="none" class="drop_down_lang" id="LanguageBarSortingMob">
                     <option value="/tr/Login/TrustBrowser" selected="" hidden="" class="tr">
                        Türkçe
                     </option>
                     <option value="/en/Login/TrustBrowser" class="en">
                        English
                     </option>
                     <option value="/es/Login/TrustBrowser" class="es">
                        Español
                     </option>
                     <option value="/ru/Login/TrustBrowser" class="ru">
                        Русский
                     </option>
                     <option value="/pt/Login/TrustBrowser" class="pt">
                        Português
                     </option>
                     <option value="/fr/Login/TrustBrowser" class="fr">
                        Français
                     </option>
                     <option value="/de/Login/TrustBrowser" class="de">
                        Deutsch
                     </option>
                  </select>
                  <script type="text/javascript">
                     $(document).ready(function () {
                         var url = document.location.href.split('#')
                         var languages = $('#LanguageBarSortingMob').find('a');
                         if (url.length == 2) {
                             if (languages.length != 0) {
                                 $(languages).each(function () {
                                     var hrf = $(this).attr('href');
                                     hrf = hrf + '#' + url[1];
                                     $(this).attr('href', hrf);
                                 });
                             } else {
                                 languages = $('#LanguageBarSortingMob').children('option');
                                 $(languages).each(function () {
                                     $(this).val($(this).val() + '#' + url[1]);
                     
                                 });
                             }
                         }
                     });
                  </script>
               </div>
            </div>
            <div class="bordered_box">
               <div class="d-flex align-items-center footer_logos justify-content-center">
                  <div class="footer_logo footer_logo_laliga" style="background-image: url('https://cdn-plat.apidigi.com/plat/prd/Img/mobile/partners/1093/footer_logos_sprite.png')"></div>
                  <div class="footer_logo footer_logo_ff" style="background-image: url('https://cdn-plat.apidigi.com/plat/prd//Img/mobile/partners/1093/footer_logos_sprite.png')"></div>
                  <div class="footer_logo footer_logo_ukbvb" style="background-image: url('https://cdn-plat.apidigi.com/plat/prd//Img/mobile/partners/1093/footer_logos_sprite.png')"></div>
                  <div class="footer_logo footer_logo_circle" style="background-image: url('https://cdn-plat.apidigi.com/plat/prd//Img/mobile/partners/1093/footer_logos_sprite.png')"></div>
               </div>
               <div class=""><img src="https://cdn-plat.apidigi.com/plat/prd/Img/partners/1093/FF.png" alt="FF"></div>
               <div class="logo_dmca">
                  <a href="https://www.dmca.com/Protection/Status.aspx?ID=39bed7f3-6d82-4c3e-820c-aad64dc9aaf4&amp;refurl=https://grandpashabet360.com" title="DMCA.com Protection Status" target="_blank" class="dmca-badge ui-link">
                  <img src="https://images.dmca.com/Badges/DMCA_badge_trn_100w.png?ID=39bed7f3-6d82-4c3e-820c-aad64dc9aaf4" alt="DMCA.com Protection Status">
                  </a>
                  <script src="https://images.dmca.com/Badges/DMCABadgeHelper.min.js"></script>
               </div>
               <div class="frow flex jc alCen mtb">
                  <div class="plus18Icon"></div>
                  <div class="footer_left_text">
                     Kumar Alışkanlık yapabilir <br> Kumar Oynarken <br> Lütfen Sorumlu davranınız
                  </div>
               </div>
               <div class="flex rating_functionality">
                  <iframe src="https://grandoylama.com/iframe.php "> </iframe>
               </div>
               <div class="logo_gambleaware"><img src="https://cdn-plat.apidigi.com/plat/prd/Img/partners/1093/gambleaware.png" alt="gambleaware"></div>
               <div class="frow flex jc">
                  <div class="copy">GRANDPASHABET © 2024 Tüm hakları saklıdır.</div>
               </div>
            </div>
            <div class="social_title">SOSYAL MEDYA HESAPLARIMIZ</div>
            <div class="footer_social-list d-flex flex-wrap jc">
               <a class="footer_social-item social__facebook-icon ui-link" href="https://rebrand.ly/facebookgrand" target="_blank" rel="noopener noreferrer"></a>
               <a class="footer_social-item social__twitter-icon ui-link" href="https://rebrand.ly/twittergrand" target="_blank" rel="noopener noreferrer"></a>
               <a class="footer_social-item social__instagram-icon ui-link" href="https://rebrand.ly/instagramgrand" target="_blank" rel="noopener noreferrer"></a>
               <a class="footer_social-item social__pinterest-icon ui-link" href="https://rebrand.ly/grandpinterest" target="_blank" rel="noopener noreferrer"></a>
               <a class="footer_social-item social__youtube-icon ui-link" href="https://rebrand.ly/grandyoutubee" target="_blank" rel="noopener noreferrer"></a>
               <a class="footer_social-item social__telegram-icon ui-link" href="https://t.me/grandpashabett " target="_blank" rel="noopener noreferrer"></a>
               <a class="footer_social-item social__reddit-icon ui-link" href="https://rebrand.ly/redditgrand" target="_blank" rel="noopener noreferrer"></a>
               <a class="footer_social-item social__tumblr-icon ui-link" href="https://rebrand.ly/tumblrgrand" target="_blank" rel="noopener noreferrer"></a>
               <a class="footer_social-item social__linkedin-icon ui-link" href="https://rebrand.ly/Linkedingrand" target="_blank" rel="noopener noreferrer"></a>
               <a class="footer_social-item social__mail-icon ui-link" href="mailto:destek@grandpashabet.com" target="_blank" rel="noopener noreferrer"></a>
               <a class="footer_social-item social__tikTok-icon ui-link" href="https://rebrand.ly/tiktokgrand" target="_blank" rel="noopener noreferrer"></a>
               <a class="footer_social-item social__twitch-icon ui-link" href="https://rebrand.ly/twitchgrand" target="_blank" rel="noopener noreferrer"></a>
               <a class="footer_social-item social__threads-icon ui-link" href="https://rebrand.ly/grandthreads" target="_blank" rel="noopener noreferrer"></a>
            </div>
            <div class="footer_bottom_text">
               <h2>
                  ONLİNE GAMİNG LİSANSIMIZ
               </h2>
               <p>
                  The content of Grandpashabet365.com, including any certified aliases, is operated by GSR Technology N.V. in Curaçao under license 1668/JAZ of Curaçao eGaming (CEG), issued by the Governor of Curaçao to date October 1st, 1996 under the ordinance of June 8th, 1993.
                  The <a href="/Rules/tr/19003" rel="noopener" class="ui-link">RGA and GT&amp;C</a> contain important limitations and restrictions that are imposed for your protection and those of others. Before you decide to participate in any game, please make sure to carefully review the <a href="/Rules/tr/19003" rel="noopener" class="ui-link">RGA and GT&amp;C</a> and regularly check for changes. Either by accessing, registering, or using the gaming environment, you signify to acknowledge, agree and accept the <a href="/Rules/tr/19003" rel="noopener" class="ui-link">RGA and GT&amp;C</a>, and to be legally bound by it.
                  The official version of the <a href="/Rules/tr/19003" rel="noopener" class="ui-link">RGA and GT&amp;C</a> is written in the English language, which supersedes all translations. Any modifications or updates will replace previous versions and become effective two weeks after being made available on the website. It is the user’s responsibility to regularly check for changes. By continuing to use the services after the updated terms become effective, the user is considered to have accepted the changes. Existing users may choose to discontinue using the products and services before the said update becomes effective.
               </p>
            </div>
            <div class="flex jc">
               <a href="https://verification.curacao-egaming.com/validateview.aspx?domain=grandpashabet365.com" target="_blank" class="ui-link">
               <img class="license_logo" src="https://verification.curacao-egaming.com/validate.ashx?domain=grandpashabet365.com" alt="" width="50">
               </a>
            </div>
         </div>
      </div>
      <script type="text/javascript">
         var logdin = 0 + "";
         $(".new_pay").click(function () {
             if (logdin > 0) {
                   window.location.href = "/Account/Deposit";
         
             } else {
                 LoginTrigger();
             }
         });
      </script>
   </div>
</div>