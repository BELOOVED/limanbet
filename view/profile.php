<?php
if ($detect->isMobile()) {?>
<div class="heading">PROFİL</div>
<form action="/Account/Profile1093" id="profileForm" method="post" novalidate="novalidate">    <div id="content" class="bgMain account_content">
        <div class="data-form profile_container" id="profileContainer">
            <div class="sub_heading">KİŞİSEL BİLGİLER</div>
            <div class="tl_col-3 text-center">
                    <div class="user_pic_container qyach" id="js_gender_pic"></div>
                <span class="cat_btn_bg player_category_363"></span>
            </div>
            <div class="reg_prof__element_row">
                <label for="ID:">ID:</label>
                <div class="ui-input-text ui-body-inherit ui-corner-all ui-state-disabled ui-shadow-inset"><input disabled="disabled" id="Id" name="Id" type="text" value="8458018"></div>
            </div>
            <div class="reg_prof__element_row calendar_icon">
                <span class="required-field">*</span><span class="reg__row_title reg__row_title_b_date"><label for="BirthDate">Doğum tarihi</label></span>
<input class="reg_input hasDatepicker" data-role="none" data-val="true" data-val-required="Please select your Birth Date" disabled="disabled" id="BirthDate" name="BirthDate" type="text" value="1994/11/25">            </div>
            <div class="reg_prof__element_row" id="js_gender_cont">
                <span class="required-field">*</span><span class="reg__row_title"> <label for="Gender">Cinsiyet</label></span>
<input class="reg_input" data-role="none" disabled="disabled" id="Gender" name="Gender" type="text" value="Erkek">            </div>

            <div class="reg_prof__element_row" id="js_country_cont">
                <span class="required-field">*</span><span class="reg__row_title"> <label for="CountryCode">Ülke</label></span>
<input class="reg_input" data-role="none" data-val="true" data-val-required="Ülke alanı gereklidir." disabled="disabled" id="CountryCode" name="CountryCode" type="text" value="Türkiye">            </div>
            <div class="reg_prof__element_row" id="js_city_cont">
                <span class="required-field">*</span><span class="reg__row_title"> <label for="City">Şehir</label></span>

<input class="reg_input" data-role="none" data-val="true" data-val-required="Şehir alanı gereklidir." disabled="disabled" id="City" name="City" type="text" value="Denizli">            </div>
            <div class="reg_prof__element_row">
                <span class="required-field">*</span><span class="reg__row_title"> <label for="Address">Adres</label></span>
<input class="reg_input" data-role="none" data-val="true" data-val-length="Adres alanı minimum 3 ,maksimum 250 karakter içermelidir ‘" data-val-length-max="250" data-val-length-min="3" data-val-required="Adres alanı gereklidir." disabled="disabled" id="Address" name="Address" type="text" value="Saraylar mahallesi 420. Sokak Kocayaka iş merkezi no:10">            </div>
            <div class="prof__checkboxes_row">
                <div class="ui-checkbox"><label class="ui-btn ui-corner-all ui-btn-inherit ui-btn-icon-left ui-checkbox-off">
                    
                    <span class="mobPlatfLabelText">Haber Bültenleri ve Promosyonlardan haberdar olmak istiyorum</span>
                </label><input type="checkbox" name="Newsletter" value="false"></div>
            </div>
            <div class="reg_prof__element_row">
                <label>Tercih edilen iletişim yöntemi</label>
                <div class="prof__checkboxes_row">
                    <div class="ui-checkbox"><label class="ui-btn ui-corner-all ui-btn-inherit ui-btn-icon-left ui-checkbox-on">
                        
                        <span class="mobPlatfLabelText">E-posta</span>
                    </label><input type="checkbox" name="PreferEmail" value="true" checked="checked"></div>
                    <div class="ui-checkbox"><label class="ui-btn ui-corner-all ui-btn-inherit ui-btn-icon-left ui-checkbox-on">
                        
                        <span class="mobPlatfLabelText">Mobil</span>
                    </label><input type="checkbox" name="PreferMobile" value="true" checked="checked"></div>
                </div>
            </div>
            <div class="reg_prof__element_row update-not"></div>
            <div class="reg_prof__element_row">
                <button type="button" class="btn_prim width_all ui-btn ui-shadow ui-corner-all" tabindex="35" id="profileButton">Güncelle</button>
            </div>
        </div>
        <div class="" id="js_prof_msg"></div>
    </div>
</form>
<?php }else{?>

<?php }?>