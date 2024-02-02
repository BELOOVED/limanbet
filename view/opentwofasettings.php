<?php
if ($detect->isMobile()) {?>
<div class="heading">2 Aşamalı Güvenlik</div>
<div class="tfa_content relative">
    <h3 class="tfa_title tfa_text_bold">
        2 Aşamalı Güvenlik
    </h3>
    <p class="tfa_text">2 Aşamalı Güvenlik hesabınız için ekstra bir güvenlik önlemidir. 2 Aşamalı güvenliği aktif ettikten sonra şifreniz çalınsa dahi hesabınıza sizden başka kimse erişemez.İki Aşamalı Güvenliği kapatmanız durumunda sorumluluk tamamen size aittir.</p>

    <div class="flex alCen jb tfa_switcher_content relative">
        <p>2 Aşamalı Güvenliği Hemen Aktif Et</p>
            <label class="flex alCen" for="js_twoFa_switcher">
                <input class="tfa_switcher_input" data-role="none" type="checkbox" id="js_twoFa_switcher" onclick="switcherCheck()">
                <span class="tfa_switcher_item"></span>
            </label>
        <span class="tfa_error_msg" id="js_switcher_msg"></span>
    </div>
    <div class="" id="js_howTo_setup_cont">
        <h3 class="tfa_title">
            Kurulumu Nasıl Yaparım?
        </h3>

        <div class="tfa_text">
            <p>
                1. "Google Authenticator" Programını
                <a class="twofa_app_links ui-link" href="https://play.google.com/store/apps/details?id=com.google.android.apps.authenticator2&amp;hl=tr&amp;gl=US">Play Store</a> ya da<a class="twofa_app_links ui-link" href="https://apps.apple.com/us/app/google-authenticator/id388497605">
                    App Store'</a> dan indirip kurabilirsiniz.
            </p>
            <p>2. Kurulumdan sonra Programdaki + Simgesine Basarak "QR Kodunu Tara" seçeneğiyle bu sayfadaki kodu taratınız ve programda size verilen 6 haneli kodu yazarak "ONAYLA" butonuna basın.</p>
            <p>3.QR Kod okutmadan aktif etmek isterseniz; "Kurulum Anahtarını Manuel Gireceğim" bölümünden aldığınız Kurulum Anahtarınızı program üzerinde Kurulum anahtarı gir bölümünden aktif edebilirsiniz.</p>
        </div>
        <h4 class="tfa_subtitle">
            Doğrulama İşlemi
        </h4>
        <p class="tfa_text">
            Uygulamada gördüğünüz 6 haneli doğrulama kodunu yazınız<br>
6 haneli kodu yazdıktan sonra ONAYLA butonuna tıklayınız
        </p>
    </div>

    <div class="" id="js_qr_cont">
        <div class="tfa_image_cont">
            <img alt="qr code" src="data:image/png;base64, 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" id="js_qr_src">
        </div>

        <div class="tfa_copy_code_content">
            <span class="tfa_copy_code_text" id="js_getCode_btn"> Kurulum Anahtarını Manuel Gireceğim  </span>
            <div class=" flex alCen hidden" id="js_manual_code">
                <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset"><input class="ctfa_copy_code" type="text" name="name" value="GY2WKMZRG5QWGODEGU2DKMLC" readonly="readonly" id="js_manual_entry_key"></div>
                <div class="ctfa_copy_btn"></div>
            </div>
        </div>
        <div class="tfa_btn_content relative">
            <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset"><input class="qr_code_input" id="js_qr_code" placeholder="Kodu Giriniz"></div>
            <button class="qr_code_btn ui-btn ui-shadow ui-corner-all" type="button" id="js_verify_qr_code">ONAYLA</button>
        </div>
    </div>
    <div class="relative">
        <span class="tfa_error_msg" id="js_messages"> </span>
    </div>
</div>
<?php }else{?>

<?php }?>