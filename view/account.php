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
               <app-personal-and-account-detail class="ng-star-inserted">
                  <div class="prsnl-accnt-inf-cntnt">
                     <div class="dshbrd-mdl">
                        <div class="mdl-hdr">
                           <div class="inf-hdr"><i class="material-icons">supervisor_account</i><label class="inf-title">Kişisel ve Hesap Bilgilerim</label></div>
                        </div>
                        <div class="mdl-cntnt">
                           <!----><!---->
                           <table class="striped ng-star-inserted">
                              <tbody>
                                 <tr>
                                    <td>Kullanıcı adı</td>
                                    <td>Dilafruz</td>
                                 </tr>
                                 <tr>
                                    <td>E-posta</td>
                                    <td>dil********@*****.***</td>
                                 </tr>
                                 <tr>
                                    <td>Para Birimi</td>
                                    <td>
                                       <span class="ng-star-inserted">TRY</span><!---->
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>Kullanıcı Numarası</td>
                                    <td>2022046625030</td>
                                 </tr>
                                 <tr class="ng-star-inserted">
                                    <td>Ad</td>
                                    <td>Dilafruz </td>
                                 </tr>
                                 <!----><!---->
                                 <tr class="ng-star-inserted">
                                    <td>Soyad</td>
                                    <td>Hudoyberdiyeva</td>
                                 </tr>
                                 <!---->
                                 <tr class="ng-star-inserted">
                                    <td>Doğum tarihi</td>
                                    <td>1*/0*/19**</td>
                                 </tr>
                                 <!---->
                                 <tr class="ng-star-inserted">
                                    <td>Kimlik</td>
                                    <td>9**********</td>
                                 </tr>
                                 <!---->
                                 <tr class="ng-star-inserted">
                                    <td>Telefon</td>
                                    <td>905*********</td>
                                 </tr>
                                 <!---->
                                 <tr class="personel-gender ng-star-inserted">
                                    <td>Cinsiyet</td>
                                    <td>F</td>
                                 </tr>
                                 <!----><!---->
                                 <tr class="ng-star-inserted">
                                    <td>Ülke</td>
                                    <!---->
                                    <td class="ng-star-inserted">TUR</td>
                                    <!---->
                                 </tr>
                                 <!---->
                                 <tr class="ng-star-inserted">
                                    <td>Şehir</td>
                                    <td>Ordu Altınordu</td>
                                 </tr>
                                 <!---->
                                 <tr class="ng-star-inserted">
                                    <td>Adres</td>
                                    <td>Ordu altın ordu Karşiyaka mahallesi Atatürk bulvarı 370/4</td>
                                 </tr>
                                 <!---->
                              </tbody>
                           </table>
                           <!----><!----><!----><!----><!---->
                        </div>
                     </div>
                  </div>
                  <phone-verify>
                     <!---->
                  </phone-verify>
                  <!---->
               </app-personal-and-account-detail>
               <!---->
            </div>
         </div>
      </div>
   </app-dashboard>
   <!---->
</main>
<?php }?>