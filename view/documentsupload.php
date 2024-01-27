<?php
if ($detect->isMobile()) {?>
<div id="my_prof" class="document_upload_content white_popups_bg_mrg">
        <input type="hidden" id="pendingDocumentCount" value="0">
        <input type="hidden" id="pendingDocumentCount2" value="0">
        <div class="reg_prof__element_row ">
            <div class="col select_arrow">
                <label class="popup_lbl" for="uploadfile">Belge Türü</label>
                <div class="ui-select"><div id="DocumentType-button" class="ui-btn ui-icon-carat-d ui-btn-icon-right ui-corner-all ui-shadow"><span class="drop-down tl_sel_popup_reg">Belge Seç</span><select automation="documenttype_select" class="drop-down tl_sel_popup_reg" customclass="tl_dropdown_color" id="DocumentType" name="DocumentType" required="required"><option value="">Belge Seç</option>
<option value="1">Pasaport</option>
<option value="2">Ehliyet</option>
<option value="3">Kimlik</option>
<option value="8">Selfie</option>
<option value="6">Other</option>
</select></div></div>
            </div>
        </div>
        <div class="reg_prof__element_row">
            <div class="col">
                <div class="profile_upload btn_upload bg-secondary" onclick="AttachFile()" data-role="none">

                    Belgeye Gözat
                </div>
                <div class="tl_input_box tl_mail_attachfiel_content attached_all_files">
                    <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset"><input class="tl_input elem_trans" id="uploadfile" type="text" placeholder="Belgeye Gözat" readonly="readonly"></div>
                </div>
            </div>
        </div>
        <div class="reg_prof__element_row BrowseDocumentBlock">
            <button id="js_attachfile_btn" class="tl_btn_popup cashier__deposit_button_1 cashier__deposit_button tl_msg_button tl_btn_popup login_btn bg-primary document-upload-btn btn_prim" data-role="none" style="width: 100%;" onclick="SendBtnClickDoc()">Yükleme</button>
            <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset"><input id="file_upload" type="file" name="files[]" class="elem_trans" accept=".png, .jpg, .jpeg" multiple="multiple" onchange="FileUploadChangeDoc(this, 'Max file size is 15 MB')"></div>
            <div class="acc_succMassage"></div>
        </div>
        <input type="hidden" id="isLogged" value="8458018">
        <div class="js_doc_msg_cont">
        </div>
                <div class="reg_prof__element_row document_upload_last_emenent">
                    <div class="col upload_doc_info">
                        Hesabınızın doğrulanması için aşağıdaki kurallara uygun bir şekilde sizlerden talep edilen belgeyi göndermeniz gerekmektedir.  <ul><li> Dosya JPG, PNG veya GIF formatında olmalıdır ve 15 mb'yi geçmemesi gerekmektedir.</li> <li> Belge geçerlilik süresi içinde.  </li><li> Resim siyah beyaz değil, gerçek renklerde olmalıdır.</li><li> Resim orijinal belgeden çekilmelidir, herhangi bir dijital fotoğraf'dan çekilme durumunda kabul edilmeyecektir.&nbsp;</li></ul>
                    </div>
                </div>


</div>
<?php }else{?>

<?php }?>