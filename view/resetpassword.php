<?php
if ($detect->isMobile()) {?>
<div class="heading">Şifre değiştir</div>
<div id="content" class="bgMain account_content">
<form action="/Account/ResetPassword" id="changepassForm" method="post" novalidate="novalidate"><input name="__RequestVerificationToken" type="hidden" value="P5Pd1sYToZpbTLbnLcCqoN2PuwYxgF5aNIQm5xgw70OwH85Q9N7oiggOJyG5a2wXMNKmj1Gwbop1b4C1edriWQGry4tokKXxs5DPCB6VbwDbxfsynR-FDl0dzRA379Wx0">        <div class="clearfix">
            <div class="data-form-block">
                <div class="successmassage"></div>
                <div class="warning">
                    <span class="field-validation-valid" data-valmsg-for="errorContainer" data-valmsg-replace="true"></span>
                </div>
                <div class="limited-width">
                    <div class="changepass__element_row eye_block">
                            <span class="required-field">*</span>
                            <label>Mevcut Şifre</label>
<input data-role="none" data-val="true" data-val-required="Lütfen mevcut şifrenizi yazınız." id="OldPassword" name="OldPassword" type="password">
                    </div>
                    <div class="changepass__element_row eye_block">
                            <span class="required-field">*</span>
                            <label for="new-pass">Yeni Şifre</label>
<input data-role="none" data-val="true" data-val-length="Şifre Alanı, içinde en azından bir tane harf ve bir tane rakam olan, en az 8 en fazla 19 sembol içermelidir." data-val-length-max="20" data-val-length-min="8" data-val-regex="Şifre Alanı, içinde en azından bir tane harf ve bir tane rakam olan, en az 8 en fazla 19 sembol içermelidir." data-val-regex-pattern="^.*(?=.{7,20})(?=.*\d)(?=.*[a-zA-Z]).*$" data-val-required="Lütfen yeni şifrenizi giriniz." id="NewPassword" name="NewPassword" type="password">
                    </div>
                    <div class="changepass__element_row eye_block">
                            <span class="required-field">*</span>
                            <label for="re-pass">Şifreyi Onayla</label>
<input data-role="none" data-val="true" data-val-equalto="Şifreler uyuşmuyor. Yeniden yazılan şifrenin doğruluğunu kontrol edin." data-val-equalto-other="*.NewPassword" data-val-required="Lütfen yeni şifrenizi onaylayın." id="ConfirmPassword" name="ConfirmPassword" type="password">
                    </div>
                            <div class="changepass__element_row">
                                <label>&nbsp;</label>
                                <button id="save_pass_d" class="btn_prim width_all ui-btn ui-shadow ui-corner-all" type="submit">Şifreyi kaydedin</button>
                            </div>
                </div>
            </div>
            <div class="info-block hgt1">
                <p class="warning">
                    <span class="field-validation-valid" data-valmsg-for="OldPassword" data-valmsg-replace="true"></span>
                </p>
                <p class="warning">
                    <span class="field-validation-valid" data-valmsg-for="NewPassword" data-valmsg-replace="true"></span>
                </p>
                <p class="warning">
                    <span class="field-validation-valid" data-valmsg-for="ConfirmPassword" data-valmsg-replace="true"></span>
                </p>
            </div>
        </div>
        <h2>&nbsp;</h2>
</form></div>
<?php }else{?>

<?php }?>