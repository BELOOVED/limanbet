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
               <limit-settings class="ng-star-inserted">
                  <div class="bet-lmt-cntnt">
                     <div class="dshbrd-mdl">
                        <div class="mdl-hdr">
                           <div class="inf-hdr"><i class="fa fa-ban"></i><span class="inf-title">Bahis Limitlendirme</span></div>
                        </div>
                        <!---->
                        <div class="mdl-cntnt">
                           <div class="row">
                              <div class="col s12">
                                 <ul materialize="tabs" class="tabs">
                                    <li class="tab col s4 ng-star-inserted active"><a href="javascript:;" class="active" style=""> Spor Bahis Limitleri </a></li>
                                    <li class="tab col s4 ng-star-inserted"><a href="javascript:;" style="" class=""> Casino Limitleri </a></li>
                                    <li class="tab col s4 ng-star-inserted"><a href="javascript:;" style="" class=""> Genel Limitler </a></li>
                                    <!---->
                                    <li class="indicator" style="right: 606px; left: 0px;"></li>
                                 </ul>
                              </div>
                              <div class="col s12 tab-content ng-star-inserted active" id="limitTab-0">
                                 <div class="scrllble-tbl">
                                    <table class="dshbrd-tbl lmt-tbl highlight">
                                       <thead>
                                          <tr>
                                             <th>Limit Türü</th>
                                             <th>Miktar</th>
                                             <th>Yönet</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                          <tr class="ng-star-inserted">
                                             <td>Bahis Limiti</td>
                                             <td width="50%">
                                                <div class="currency-symbol ng-star-inserted">
                                                   Günlük <span class="ng-star-inserted"> No limits applied </span><!---->
                                                </div>
                                                <!---->
                                                <div class="currency-symbol ng-star-inserted">
                                                   Haftalık <span class="ng-star-inserted"> No limits applied </span><!---->
                                                </div>
                                                <!---->
                                                <div class="currency-symbol ng-star-inserted">
                                                   Aylık <span class="ng-star-inserted"> No limits applied </span><!---->
                                                </div>
                                                <!----><!----><!----><!----><!----><!---->
                                             </td>
                                             <td>
                                                <button class="btn"><i aria-hidden="true" class="fa fa-cog fa-fw"></i></button><button class="btn ng-star-inserted"><i aria-hidden="true" class="fa fa-trash-o fa-fw"></i></button><!----><!---->
                                             </td>
                                          </tr>
                                          <tr class="ng-star-inserted">
                                             <td>Kayıp Limiti</td>
                                             <td width="50%">
                                                <div class="currency-symbol ng-star-inserted">
                                                   Günlük <span class="ng-star-inserted"> No limits applied </span><!---->
                                                </div>
                                                <!---->
                                                <div class="currency-symbol ng-star-inserted">
                                                   Haftalık <span class="ng-star-inserted"> No limits applied </span><!---->
                                                </div>
                                                <!---->
                                                <div class="currency-symbol ng-star-inserted">
                                                   Aylık <span class="ng-star-inserted"> No limits applied </span><!---->
                                                </div>
                                                <!----><!----><!----><!----><!----><!---->
                                             </td>
                                             <td>
                                                <button class="btn"><i aria-hidden="true" class="fa fa-cog fa-fw"></i></button><button class="btn ng-star-inserted"><i aria-hidden="true" class="fa fa-trash-o fa-fw"></i></button><!----><!---->
                                             </td>
                                          </tr>
                                          <tr class="ng-star-inserted">
                                             <td>Bahis süresi limiti(dk.) (Girilen süre boyunca bahis alınamaz)</td>
                                             <td width="50%">
                                                <!----><!----><!---->
                                                <div class="currency-symbol ng-star-inserted">
                                                   <!---->  Dakika(lar) <!----><!----><!----><!---->
                                                </div>
                                                <!----><!----><!----><!----><!---->
                                             </td>
                                             <td>
                                                <button class="btn"><i aria-hidden="true" class="fa fa-cog fa-fw"></i></button><button class="btn ng-star-inserted"><i aria-hidden="true" class="fa fa-trash-o fa-fw"></i></button><!----><!---->
                                             </td>
                                          </tr>
                                          <tr class="ng-star-inserted">
                                             <td>Günlük Bahis Süresi Limiti(dak.) - Girilen süre boyunca günlük bahis alımına izin verilir</td>
                                             <td width="50%">
                                                <!----><!----><!---->
                                                <div class="currency-symbol ng-star-inserted">
                                                   <!---->  Dakika(lar) <!----><!----><!----><!---->
                                                </div>
                                                <!----><!----><!----><!----><!---->
                                             </td>
                                             <td>
                                                <button class="btn"><i aria-hidden="true" class="fa fa-cog fa-fw"></i></button><button class="btn ng-star-inserted"><i aria-hidden="true" class="fa fa-trash-o fa-fw"></i></button><!----><!---->
                                             </td>
                                          </tr>
                                          <!---->
                                       </tbody>
                                    </table>
                                 </div>
                              </div>
                              <!---->
                              <div class="col s12 tab-content ng-star-inserted" id="limitTab-1">
                                 <div class="scrllble-tbl">
                                    <table class="dshbrd-tbl lmt-tbl highlight">
                                       <thead>
                                          <tr>
                                             <th>Limit Türü</th>
                                             <th>Miktar</th>
                                             <th>Yönet</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                          <tr class="ng-star-inserted">
                                             <td>Casino Bahis Limiti</td>
                                             <td width="50%">
                                                <div class="currency-symbol ng-star-inserted">
                                                   Günlük <span class="ng-star-inserted"> No limits applied </span><!---->
                                                </div>
                                                <!---->
                                                <div class="currency-symbol ng-star-inserted">
                                                   Haftalık <span class="ng-star-inserted"> No limits applied </span><!---->
                                                </div>
                                                <!---->
                                                <div class="currency-symbol ng-star-inserted">
                                                   Aylık <span class="ng-star-inserted"> No limits applied </span><!---->
                                                </div>
                                                <!----><!----><!----><!----><!----><!---->
                                             </td>
                                             <td>
                                                <button class="btn"><i aria-hidden="true" class="fa fa-cog fa-fw"></i></button><button class="btn ng-star-inserted"><i aria-hidden="true" class="fa fa-trash-o fa-fw"></i></button><!----><!---->
                                             </td>
                                          </tr>
                                          <tr class="ng-star-inserted">
                                             <td>Casino Kaybetme Limiti</td>
                                             <td width="50%">
                                                <div class="currency-symbol ng-star-inserted">
                                                   Günlük <span class="ng-star-inserted"> No limits applied </span><!---->
                                                </div>
                                                <!---->
                                                <div class="currency-symbol ng-star-inserted">
                                                   Haftalık <span class="ng-star-inserted"> No limits applied </span><!---->
                                                </div>
                                                <!---->
                                                <div class="currency-symbol ng-star-inserted">
                                                   Aylık <span class="ng-star-inserted"> No limits applied </span><!---->
                                                </div>
                                                <!----><!----><!----><!----><!----><!---->
                                             </td>
                                             <td>
                                                <button class="btn"><i aria-hidden="true" class="fa fa-cog fa-fw"></i></button><button class="btn ng-star-inserted"><i aria-hidden="true" class="fa fa-trash-o fa-fw"></i></button><!----><!---->
                                             </td>
                                          </tr>
                                          <tr class="ng-star-inserted">
                                             <td>Oturum süresi limiti(dk.) (Herhangi bir işlem yapılmadığı durumda, girilen süre bitiminde oturum kapatılır)</td>
                                             <td width="50%">
                                                <!----><!----><!---->
                                                <div class="currency-symbol ng-star-inserted">
                                                   <!---->  Dakika(lar) <!----><!----><!----><!---->
                                                </div>
                                                <!----><!----><!----><!----><!---->
                                             </td>
                                             <td>
                                                <button class="btn"><i aria-hidden="true" class="fa fa-cog fa-fw"></i></button><button class="btn ng-star-inserted"><i aria-hidden="true" class="fa fa-trash-o fa-fw"></i></button><!----><!---->
                                             </td>
                                          </tr>
                                          <!---->
                                       </tbody>
                                    </table>
                                 </div>
                              </div>
                              <!---->
                              <div class="col s12 tab-content ng-star-inserted" id="limitTab-2">
                                 <div class="scrllble-tbl">
                                    <table class="dshbrd-tbl lmt-tbl highlight">
                                       <thead>
                                          <tr>
                                             <th>Limit Türü</th>
                                             <th>Miktar</th>
                                             <th>Yönet</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                          <tr class="ng-star-inserted">
                                             <td>Para Yatırma Limiti</td>
                                             <td width="50%">
                                                <div class="currency-symbol ng-star-inserted">
                                                   Günlük <span class="ng-star-inserted"> No limits applied </span><!---->
                                                </div>
                                                <!---->
                                                <div class="currency-symbol ng-star-inserted">
                                                   Haftalık <span class="ng-star-inserted"> No limits applied </span><!---->
                                                </div>
                                                <!---->
                                                <div class="currency-symbol ng-star-inserted">
                                                   Aylık <span class="ng-star-inserted"> No limits applied </span><!---->
                                                </div>
                                                <!----><!----><!----><!----><!----><!---->
                                             </td>
                                             <td>
                                                <button class="btn"><i aria-hidden="true" class="fa fa-cog fa-fw"></i></button><button class="btn ng-star-inserted"><i aria-hidden="true" class="fa fa-trash-o fa-fw"></i></button><!----><!---->
                                             </td>
                                          </tr>
                                          <tr class="ng-star-inserted">
                                             <td>Kendini Engelle</td>
                                             <td width="50%">
                                                <!----><!----><!---->
                                                <div class="currency-symbol ng-star-inserted">
                                                   <!----><!----><!----><!----><!---->
                                                </div>
                                                <!----><!----><!----><!----><!---->
                                             </td>
                                             <td>
                                                <button class="btn"><i aria-hidden="true" class="fa fa-cog fa-fw"></i></button><!----><button class="btn ng-star-inserted"><i aria-hidden="true" class="fa fa-trash-o fa-fw"></i></button><!---->
                                             </td>
                                          </tr>
                                          <!---->
                                       </tbody>
                                    </table>
                                 </div>
                              </div>
                              <!----><!---->
                           </div>
                        </div>
                     </div>
                  </div>
                  <div id="limitConfigModal" materialize="modal" class="modal modal-md open dshbrd-modal" style="z-index: 1125;">
                     <!---->
                  </div>
               </limit-settings>
               <!---->
            </div>
         </div>
      </div>
   </app-dashboard>
   <!---->
</main>
<?php }?>