<?php
if ($detect->isMobile()) {?>
<div class="heading">Hesabım</div>
<div id="content" class="mobPlUserCont bgMain">
    <div class="">
        <div class="successmassage" id="EmailVerifieSuccess"></div>
        <div class="successmassage" id="MobileVerifieSuccess"></div>
        <table class="data-tbl2 tbl-list">
            <thead>
            </thead>
            <tbody>
                                <tr class="accRowClr">
                    <td>Bakiye</td>
                    <td><a href="deposit" class="dis_block balance_withdrawal btn_sec ui-link"><?=$us['balance']?></a></td>
                </tr>
                <tr class="accRowClr">
                    <td>Çekilebilir Tutar</td>
                    <td><a class="balance_withdrawal btn_prim tl_btn w-100 dis_block bg-primary ui-link" href="withdraw"><?=$us['balance']?> TRY</a></td>
                </tr>
            </tbody>
        </table>
            </div>
</div>
<?php }else{?>

<?php }?>