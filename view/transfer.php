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
         <h3 data-v-faca5fea=""><i data-v-533b5753="" data-v-faca5fea="" class="icon-users icon--lg"></i> <span data-v-faca5fea="">Arkadaşına Gönder</span></h3>
         <i data-v-533b5753="" data-v-faca5fea="" class="icon-play icon--sm"></i>
      </button>
      <div data-v-faca5fea="" class="user__view">
         <div data-v-2cdb484f="" data-v-faca5fea="" class="container">
            <div data-v-2cdb484f="" class="form">
               <div data-v-2cdb484f="" class="input__container">
                  <div class="input-generic">
                     <!----> <label for="search-username"><i data-v-533b5753="" class="icon-user-pen icon--lg"></i></label> <!----> <input id="search-username" type="text" placeholder="Kullanıcı Adı / E-posta" class="input--reset">
                  </div>
                  <!---->
               </div>
               <button data-v-6a60ad26="" data-v-2cdb484f="" class="btn btn--brand btn--flex brand-button btn--uppercase margin-bottom" onclick="usernotdefined()">
                  <!----> <span data-v-2cdb484f="" data-v-6a60ad26="">Kullanıcıyı Ara</span>
               </button>
               <div data-v-2cdb484f="" class="alert alert--warning">
                  <i data-v-533b5753="" class="icon-hexagon-exclamation icon--lg"></i> 
                  <h4 data-v-2cdb484f="">Arkadaşınızı arayın ve para gönderin !</h4>
               </div>
               <div data-v-2cdb484f="" class="input__container" style="display: none;">
                  <div class="input-generic">
                     <!----> <label for="user_fullname"><i data-v-533b5753="" class="icon-id-card icon--lg"></i></label> <!----> <input id="user_fullname" type="text" disabled="disabled" placeholder="Ad Soyad" class="input--reset">
                  </div>
                  <!---->
               </div>
               <div data-v-2cdb484f="" class="input__container" style="display: none;">
                  <div class="input-generic">
                     <!----> <label for="user_name"><i data-v-533b5753="" class="icon-id-card icon--lg"></i></label> <!----> <input id="user_name" type="text" disabled="disabled" placeholder="K. Adı" class="input--reset">
                  </div>
                  <!---->
               </div>
               <div data-v-2cdb484f="" class="input__container" style="display: none;">
                  <div class="input-generic">
                     <!----> <label for="user_email"><i data-v-533b5753="" class="icon-id-card icon--lg"></i></label> <!----> <input id="user_email" type="text" disabled="disabled" placeholder="E-Mail" class="input--reset">
                  </div>
                  <!---->
               </div>
               <div data-v-2cdb484f="" class="input__container" style="display: none;">
                  <div class="input-amount">
                     <!----> <label><i data-v-533b5753="" class="icon-wallet icon--lg"></i></label> <input type="number" placeholder="Tutar" class="input--reset hidden"> <input type="text" placeholder="Tutar" class="input--reset">
                  </div>
                  <!---->
               </div>
               <button data-v-6a60ad26="" data-v-2cdb484f="" class="btn btn--brand btn--flex brand-button btn--uppercase margin-bottom" onclick="usernotdefined()" style="display: none;">
                  <!----> <span data-v-2cdb484f="" data-v-6a60ad26="">Transfer Et</span>
               </button>
               <div data-v-2cdb484f="" class="alert alert--warning" style="display: none;">
                  <i data-v-533b5753="" class="icon-hexagon-exclamation icon--lg"></i> 
                  <h4 data-v-2cdb484f=""></h4>
               </div>
               <div data-v-2cdb484f="" class="alert alert--warning" style="display: none;">
                  <i data-v-533b5753="" class="icon-hexagon-exclamation icon--lg"></i> 
                  <h4 data-v-2cdb484f=""></h4>
               </div>
            </div>
            <div data-v-2cdb484f="" class="user-widget icon">
               <svg data-v-2cdb484f="" x="0px" y="0px" viewBox="0 0 480 480" xml:space="preserve" style="width: 60px; height: 60px;">
                  <g data-v-2cdb484f="">
                     <g data-v-2cdb484f="">
                        <path data-v-2cdb484f="" d="M472,424h-16V152c0-22.056-17.944-40-40-40h-72V8c0-4.416-3.576-8-8-8H144c-4.424,0-8,3.584-8,8v104H64 c-22.056,0-40,17.944-40,40v272H8c-4.424,0-8,3.584-8,8v8c0,22.056,17.944,40,40,40h400c22.056,0,40-17.944,40-40v-8 C480,427.584,476.424,424,472,424z M344,192c8.824,0,16,7.176,16,16c0,8.824-7.176,16-16,16V192z M152,16h176v208h-16V64 c0-4.416-3.576-8-8-8c-8.824,0-16-7.176-16-16c0-4.416-3.576-8-8-8h-80c-4.424,0-8,3.584-8,8c0,8.824-7.176,16-16,16 c-4.424,0-8,3.584-8,8v160h-16V16z M240,160c-22.056,0-40,17.944-40,40c0,9.04,3.128,17.296,8.208,24H184V70.992 c11.224-2.904,20.088-11.76,22.984-22.992h66.032c2.896,11.232,11.76,20.088,22.984,22.992V224h-24.208 c5.08-6.704,8.208-14.96,8.208-24C280,177.944,262.056,160,240,160z M264,200c0,13.232-10.768,24-24,24s-24-10.768-24-24 s10.768-24,24-24S264,186.768,264,200z M144,240h192h8c17.648,0,32-14.352,32-32s-14.352-32-32-32v-16h64v232H72V160h64v16 c-17.648,0-32,14.352-32,32s14.352,32,32,32H144z M136,192v32c-8.824,0-16-7.176-16-16C120,199.176,127.176,192,136,192z M40,152 c0-13.232,10.768-24,24-24h72v16H64c-4.424,0-8,3.584-8,8v248c0,4.416,3.576,8,8,8h352c4.424,0,8-3.584,8-8V152 c0-4.416-3.576-8-8-8h-72v-16h72c13.232,0,24,10.768,24,24v272H40V152z M440,464H40c-13.232,0-24-10.768-24-24h16h416h16 C464,453.232,453.232,464,440,464z"></path>
                     </g>
                  </g>
                  <g data-v-2cdb484f="">
                     <g data-v-2cdb484f="">
                        <rect data-v-2cdb484f="" x="200" y="288" width="16" height="16"></rect>
                     </g>
                  </g>
                  <g data-v-2cdb484f="">
                     <g data-v-2cdb484f="">
                        <rect data-v-2cdb484f="" x="200" y="256" width="16" height="16"></rect>
                     </g>
                  </g>
                  <g data-v-2cdb484f="">
                     <g data-v-2cdb484f="">
                        <rect data-v-2cdb484f="" x="168" y="256" width="16" height="16"></rect>
                     </g>
                  </g>
                  <g data-v-2cdb484f="">
                     <g data-v-2cdb484f="">
                        <rect data-v-2cdb484f="" x="232" y="256" width="16" height="16"></rect>
                     </g>
                  </g>
                  <g data-v-2cdb484f="">
                     <g data-v-2cdb484f="">
                        <rect data-v-2cdb484f="" x="264" y="256" width="16" height="16"></rect>
                     </g>
                  </g>
                  <g data-v-2cdb484f="">
                     <g data-v-2cdb484f="">
                        <rect data-v-2cdb484f="" x="296" y="256" width="16" height="16"></rect>
                     </g>
                  </g>
                  <g data-v-2cdb484f="">
                     <g data-v-2cdb484f="">
                        <rect data-v-2cdb484f="" x="232" y="288" width="16" height="16"></rect>
                     </g>
                  </g>
                  <g data-v-2cdb484f="">
                     <g data-v-2cdb484f="">
                        <rect data-v-2cdb484f="" x="232" y="320" width="16" height="16"></rect>
                     </g>
                  </g>
                  <g data-v-2cdb484f="">
                     <g data-v-2cdb484f="">
                        <rect data-v-2cdb484f="" x="264" y="288" width="16" height="16"></rect>
                     </g>
                  </g>
                  <g data-v-2cdb484f=""></g>
                  <g data-v-2cdb484f=""></g>
                  <g data-v-2cdb484f=""></g>
                  <g data-v-2cdb484f=""></g>
                  <g data-v-2cdb484f=""></g>
                  <g data-v-2cdb484f=""></g>
                  <g data-v-2cdb484f=""></g>
                  <g data-v-2cdb484f=""></g>
                  <g data-v-2cdb484f=""></g>
                  <g data-v-2cdb484f=""></g>
                  <g data-v-2cdb484f=""></g>
                  <g data-v-2cdb484f=""></g>
                  <g data-v-2cdb484f=""></g>
                  <g data-v-2cdb484f=""></g>
                  <g data-v-2cdb484f=""></g>
               </svg>
               <h3 data-v-2cdb484f="">Arkadaşınıza Gönderin</h3>
               <p data-v-2cdb484f="">
                  Sisteme kayıtlı bir arkadaşınızın kullanıcı adını girin ve ardından tutarı ile birlikte arkadaşınıza para transferi gerçekleştirin !
               </p>
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
               <a data-v-faca5fea="" href="transfer" class="router-link-exact-active open active" aria-current="page">
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
         <div data-v-2cdb484f="" data-v-faca5fea="" class="container">
            <div data-v-2cdb484f="" class="form">
               <div data-v-2cdb484f="" class="input__container">
                  <div class="input-generic">
                     <!----> <label for="search-username"><i data-v-533b5753="" class="icon-user-pen icon--lg"></i></label> <!----> <input id="search-username" type="text" placeholder="Kullanıcı Adı / E-posta" class="input--reset">
                  </div>
                  <!---->
               </div>
               <button data-v-6a60ad26="" data-v-2cdb484f="" class="btn btn--brand btn--flex brand-button btn--uppercase margin-bottom" onclick="usernotdefined()">
                  <!----> <span data-v-2cdb484f="" data-v-6a60ad26="">Kullanıcıyı Ara</span>
               </button>
               <div data-v-2cdb484f="" class="alert alert--warning">
                  <i data-v-533b5753="" class="icon-hexagon-exclamation icon--lg"></i> 
                  <h4 data-v-2cdb484f="">Arkadaşınızı arayın ve para gönderin !</h4>
               </div>
               <div data-v-2cdb484f="" class="input__container" style="display: none;">
                  <div class="input-generic">
                     <!----> <label for="user_fullname"><i data-v-533b5753="" class="icon-id-card icon--lg"></i></label> <!----> <input id="user_fullname" type="text" disabled="disabled" placeholder="Ad Soyad" class="input--reset">
                  </div>
                  <!---->
               </div>
               <div data-v-2cdb484f="" class="input__container" style="display: none;">
                  <div class="input-generic">
                     <!----> <label for="user_name"><i data-v-533b5753="" class="icon-id-card icon--lg"></i></label> <!----> <input id="user_name" type="text" disabled="disabled" placeholder="K. Adı" class="input--reset">
                  </div>
                  <!---->
               </div>
               <div data-v-2cdb484f="" class="input__container" style="display: none;">
                  <div class="input-generic">
                     <!----> <label for="user_email"><i data-v-533b5753="" class="icon-id-card icon--lg"></i></label> <!----> <input id="user_email" type="text" disabled="disabled" placeholder="E-Mail" class="input--reset">
                  </div>
                  <!---->
               </div>
               <div data-v-2cdb484f="" class="input__container" style="display: none;">
                  <div class="input-amount">
                     <!----> <label><i data-v-533b5753="" class="icon-wallet icon--lg"></i></label> <input type="number" placeholder="Tutar" class="input--reset hidden"> <input type="text" placeholder="Tutar" class="input--reset">
                  </div>
                  <!---->
               </div>
               <button data-v-6a60ad26="" data-v-2cdb484f="" class="btn btn--brand btn--flex brand-button btn--uppercase margin-bottom"  onclick="usernotdefined()" style="display: none;">
                  <!----> <span data-v-2cdb484f="" data-v-6a60ad26="">Transfer Et</span>
               </button>
               <div data-v-2cdb484f="" class="alert alert--warning" style="display: none;">
                  <i data-v-533b5753="" class="icon-hexagon-exclamation icon--lg"></i> 
                  <h4 data-v-2cdb484f=""></h4>
               </div>
               <div data-v-2cdb484f="" class="alert alert--warning" style="display: none;">
                  <i data-v-533b5753="" class="icon-hexagon-exclamation icon--lg"></i> 
                  <h4 data-v-2cdb484f=""></h4>
               </div>
            </div>
            <div data-v-2cdb484f="" class="user-widget icon">
               <svg data-v-2cdb484f="" x="0px" y="0px" viewBox="0 0 480 480" xml:space="preserve" style="width: 60px; height: 60px;">
                  <g data-v-2cdb484f="">
                     <g data-v-2cdb484f="">
                        <path data-v-2cdb484f="" d="M472,424h-16V152c0-22.056-17.944-40-40-40h-72V8c0-4.416-3.576-8-8-8H144c-4.424,0-8,3.584-8,8v104H64 c-22.056,0-40,17.944-40,40v272H8c-4.424,0-8,3.584-8,8v8c0,22.056,17.944,40,40,40h400c22.056,0,40-17.944,40-40v-8 C480,427.584,476.424,424,472,424z M344,192c8.824,0,16,7.176,16,16c0,8.824-7.176,16-16,16V192z M152,16h176v208h-16V64 c0-4.416-3.576-8-8-8c-8.824,0-16-7.176-16-16c0-4.416-3.576-8-8-8h-80c-4.424,0-8,3.584-8,8c0,8.824-7.176,16-16,16 c-4.424,0-8,3.584-8,8v160h-16V16z M240,160c-22.056,0-40,17.944-40,40c0,9.04,3.128,17.296,8.208,24H184V70.992 c11.224-2.904,20.088-11.76,22.984-22.992h66.032c2.896,11.232,11.76,20.088,22.984,22.992V224h-24.208 c5.08-6.704,8.208-14.96,8.208-24C280,177.944,262.056,160,240,160z M264,200c0,13.232-10.768,24-24,24s-24-10.768-24-24 s10.768-24,24-24S264,186.768,264,200z M144,240h192h8c17.648,0,32-14.352,32-32s-14.352-32-32-32v-16h64v232H72V160h64v16 c-17.648,0-32,14.352-32,32s14.352,32,32,32H144z M136,192v32c-8.824,0-16-7.176-16-16C120,199.176,127.176,192,136,192z M40,152 c0-13.232,10.768-24,24-24h72v16H64c-4.424,0-8,3.584-8,8v248c0,4.416,3.576,8,8,8h352c4.424,0,8-3.584,8-8V152 c0-4.416-3.576-8-8-8h-72v-16h72c13.232,0,24,10.768,24,24v272H40V152z M440,464H40c-13.232,0-24-10.768-24-24h16h416h16 C464,453.232,453.232,464,440,464z"></path>
                     </g>
                  </g>
                  <g data-v-2cdb484f="">
                     <g data-v-2cdb484f="">
                        <rect data-v-2cdb484f="" x="200" y="288" width="16" height="16"></rect>
                     </g>
                  </g>
                  <g data-v-2cdb484f="">
                     <g data-v-2cdb484f="">
                        <rect data-v-2cdb484f="" x="200" y="256" width="16" height="16"></rect>
                     </g>
                  </g>
                  <g data-v-2cdb484f="">
                     <g data-v-2cdb484f="">
                        <rect data-v-2cdb484f="" x="168" y="256" width="16" height="16"></rect>
                     </g>
                  </g>
                  <g data-v-2cdb484f="">
                     <g data-v-2cdb484f="">
                        <rect data-v-2cdb484f="" x="232" y="256" width="16" height="16"></rect>
                     </g>
                  </g>
                  <g data-v-2cdb484f="">
                     <g data-v-2cdb484f="">
                        <rect data-v-2cdb484f="" x="264" y="256" width="16" height="16"></rect>
                     </g>
                  </g>
                  <g data-v-2cdb484f="">
                     <g data-v-2cdb484f="">
                        <rect data-v-2cdb484f="" x="296" y="256" width="16" height="16"></rect>
                     </g>
                  </g>
                  <g data-v-2cdb484f="">
                     <g data-v-2cdb484f="">
                        <rect data-v-2cdb484f="" x="232" y="288" width="16" height="16"></rect>
                     </g>
                  </g>
                  <g data-v-2cdb484f="">
                     <g data-v-2cdb484f="">
                        <rect data-v-2cdb484f="" x="232" y="320" width="16" height="16"></rect>
                     </g>
                  </g>
                  <g data-v-2cdb484f="">
                     <g data-v-2cdb484f="">
                        <rect data-v-2cdb484f="" x="264" y="288" width="16" height="16"></rect>
                     </g>
                  </g>
                  <g data-v-2cdb484f=""></g>
                  <g data-v-2cdb484f=""></g>
                  <g data-v-2cdb484f=""></g>
                  <g data-v-2cdb484f=""></g>
                  <g data-v-2cdb484f=""></g>
                  <g data-v-2cdb484f=""></g>
                  <g data-v-2cdb484f=""></g>
                  <g data-v-2cdb484f=""></g>
                  <g data-v-2cdb484f=""></g>
                  <g data-v-2cdb484f=""></g>
                  <g data-v-2cdb484f=""></g>
                  <g data-v-2cdb484f=""></g>
                  <g data-v-2cdb484f=""></g>
                  <g data-v-2cdb484f=""></g>
                  <g data-v-2cdb484f=""></g>
               </svg>
               <h3 data-v-2cdb484f="">Arkadaşınıza Gönderin</h3>
               <p data-v-2cdb484f="">
                  Sisteme kayıtlı bir arkadaşınızın kullanıcı adını girin ve ardından tutarı ile birlikte arkadaşınıza para transferi gerçekleştirin !
               </p>
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