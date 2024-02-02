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
         <h3 data-v-faca5fea=""><i data-v-533b5753="" data-v-faca5fea="" class="icon-toolbox icon--lg"></i> <span data-v-faca5fea="">Genel Bakış</span></h3>
         <i data-v-533b5753="" data-v-faca5fea="" class="icon-play icon--sm"></i>
      </button>
      <div data-v-faca5fea="" class="user__view">
         <div data-v-198e55ed="" data-v-faca5fea="" class="user-overview">
            <ul data-v-198e55ed="" class="user-overview__group">
               <h3 data-v-198e55ed="">Doğrulamalar</h3>
               <li data-v-198e55ed="">
                  <h4 data-v-198e55ed="">Telefon Numarası</h4>
                  <h5 data-v-198e55ed="">Doğrulanmadı</h5>
                  <div data-v-198e55ed="" class="user-overview__status user-overview__status--false"></div>
               </li>
               <li data-v-198e55ed="">
                  <h4 data-v-198e55ed="">E-posta adresi</h4>
                  <h5 data-v-198e55ed="">Doğrulandı</h5>
                  <div data-v-198e55ed="" class="user-overview__status user-overview__status--true"></div>
               </li>
               <li data-v-198e55ed="">
                  <h4 data-v-198e55ed="">Belgeleriniz</h4>
                  <h5 data-v-198e55ed="">Doğrulanmadı</h5>
                  <div data-v-198e55ed="" class="user-overview__status user-overview__status--false"></div>
               </li>
            </ul>
            <ul data-v-198e55ed="" class="user-overview__group">
               <h3 data-v-198e55ed="">Finansal İzinler</h3>
               <li data-v-198e55ed="">
                  <h4 data-v-198e55ed="">Para Yatırımı</h4>
                  <h5 data-v-198e55ed="">Aktif</h5>
                  <div data-v-198e55ed="" class="user-overview__status user-overview__status--true"></div>
               </li>
               <li data-v-198e55ed="">
                  <h4 data-v-198e55ed="">Para Çekimi</h4>
                  <h5 data-v-198e55ed="">Aktif</h5>
                  <div data-v-198e55ed="" class="user-overview__status user-overview__status--true"></div>
               </li>
            </ul>
            <ul data-v-198e55ed="" class="user-overview__group">
               <h3 data-v-198e55ed="">Erişimler</h3>
               <li data-v-198e55ed="">
                  <h4 data-v-198e55ed="">Slot</h4>
                  <h5 data-v-198e55ed="">Aktif</h5>
                  <div data-v-198e55ed="" class="user-overview__status user-overview__status--true"></div>
               </li>
               <li data-v-198e55ed="">
                  <h4 data-v-198e55ed="">Canlı Casino</h4>
                  <h5 data-v-198e55ed="">Aktif</h5>
                  <div data-v-198e55ed="" class="user-overview__status user-overview__status--true"></div>
               </li>
               <li data-v-198e55ed="">
                  <h4 data-v-198e55ed="">Spor Bahisleri</h4>
                  <h5 data-v-198e55ed="">Aktif</h5>
                  <div data-v-198e55ed="" class="user-overview__status user-overview__status--true"></div>
               </li>
               <li data-v-198e55ed="">
                  <h4 data-v-198e55ed="">Canlı Bahis</h4>
                  <h5 data-v-198e55ed="">Aktif</h5>
                  <div data-v-198e55ed="" class="user-overview__status user-overview__status--true"></div>
               </li>
               <li data-v-198e55ed="">
                  <h4 data-v-198e55ed="">Beton Games</h4>
                  <h5 data-v-198e55ed="">Aktif</h5>
                  <div data-v-198e55ed="" class="user-overview__status user-overview__status--true"></div>
               </li>
               <li data-v-198e55ed="">
                  <h4 data-v-198e55ed="">Tombala</h4>
                  <h5 data-v-198e55ed="">Aktif</h5>
                  <div data-v-198e55ed="" class="user-overview__status user-overview__status--true"></div>
               </li>
            </ul>
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
               <a data-v-faca5fea="" href="user" aria-current="page" class="router-link-exact-active open active">
                  <h3 data-v-faca5fea=""><i data-v-533b5753="" data-v-faca5fea="" class="icon-toolbox icon--lg"></i></h3>
                  <span data-v-faca5fea="">Genel Bakış</span> <i data-v-533b5753="" data-v-faca5fea="" class="icon-play icon--sm"></i>
               </a>
            </li>
            <li data-v-faca5fea="">
               <a data-v-faca5fea="" href="edit" class="">
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
         <div data-v-198e55ed="" data-v-faca5fea="" class="user-overview">
            <ul data-v-198e55ed="" class="user-overview__group">
               <h3 data-v-198e55ed="">Doğrulamalar</h3>
               <li data-v-198e55ed="">
                  <h4 data-v-198e55ed="">Telefon Numarası</h4>
                  <h5 data-v-198e55ed="">Doğrulanmadı</h5>
                  <div data-v-198e55ed="" class="user-overview__status user-overview__status--false"></div>
               </li>
               <li data-v-198e55ed="">
                  <h4 data-v-198e55ed="">E-posta adresi</h4>
                  <h5 data-v-198e55ed="">Doğrulandı</h5>
                  <div data-v-198e55ed="" class="user-overview__status user-overview__status--true"></div>
               </li>
               <li data-v-198e55ed="">
                  <h4 data-v-198e55ed="">Belgeleriniz</h4>
                  <h5 data-v-198e55ed="">Doğrulanmadı</h5>
                  <div data-v-198e55ed="" class="user-overview__status user-overview__status--false"></div>
               </li>
            </ul>
            <ul data-v-198e55ed="" class="user-overview__group">
               <h3 data-v-198e55ed="">Finansal İzinler</h3>
               <li data-v-198e55ed="">
                  <h4 data-v-198e55ed="">Para Yatırımı</h4>
                  <h5 data-v-198e55ed="">Aktif</h5>
                  <div data-v-198e55ed="" class="user-overview__status user-overview__status--true"></div>
               </li>
               <li data-v-198e55ed="">
                  <h4 data-v-198e55ed="">Para Çekimi</h4>
                  <h5 data-v-198e55ed="">Aktif</h5>
                  <div data-v-198e55ed="" class="user-overview__status user-overview__status--true"></div>
               </li>
            </ul>
            <ul data-v-198e55ed="" class="user-overview__group">
               <h3 data-v-198e55ed="">Erişimler</h3>
               <li data-v-198e55ed="">
                  <h4 data-v-198e55ed="">Slot</h4>
                  <h5 data-v-198e55ed="">Aktif</h5>
                  <div data-v-198e55ed="" class="user-overview__status user-overview__status--true"></div>
               </li>
               <li data-v-198e55ed="">
                  <h4 data-v-198e55ed="">Canlı Casino</h4>
                  <h5 data-v-198e55ed="">Aktif</h5>
                  <div data-v-198e55ed="" class="user-overview__status user-overview__status--true"></div>
               </li>
               <li data-v-198e55ed="">
                  <h4 data-v-198e55ed="">Spor Bahisleri</h4>
                  <h5 data-v-198e55ed="">Aktif</h5>
                  <div data-v-198e55ed="" class="user-overview__status user-overview__status--true"></div>
               </li>
               <li data-v-198e55ed="">
                  <h4 data-v-198e55ed="">Canlı Bahis</h4>
                  <h5 data-v-198e55ed="">Aktif</h5>
                  <div data-v-198e55ed="" class="user-overview__status user-overview__status--true"></div>
               </li>
               <li data-v-198e55ed="">
                  <h4 data-v-198e55ed="">Beton Games</h4>
                  <h5 data-v-198e55ed="">Aktif</h5>
                  <div data-v-198e55ed="" class="user-overview__status user-overview__status--true"></div>
               </li>
               <li data-v-198e55ed="">
                  <h4 data-v-198e55ed="">Tombala</h4>
                  <h5 data-v-198e55ed="">Aktif</h5>
                  <div data-v-198e55ed="" class="user-overview__status user-overview__status--true"></div>
               </li>
            </ul>
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