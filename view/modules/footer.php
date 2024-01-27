<?php
   if ($detect->isMobile()) {?>
<script type="text/javascript">
   var allowChange = true;
   var settings = {
       language: 'tr',
       userId: '0',
       trns: {
           CasinoGames: 'Casino Oyunları',
           SeeMore: 'DETAYLI BİLGİ',
           NoSearchResults: '<div class="lca-filter-no-result"><span class="ic_search"></span><p class="">Sonu&#231; Bulunamadı</p></div>',
           NeedToVerifyMobileDoc: 'In order to place a bet, you need to verify the mobile phone number specified during registration and an identity document (passport/ID card).',
           Search: 'Ara',
           GamesFilter: 'oyun filtresi',
           Play: 'Oyna',
           Demo: 'Demo Oyun',
           UseLatinLettersInSearch: 'Sadece harf veya rakam kullanarak arama yapınız.',
           YouHaveNoFavoriteGames: 'Hen&#252;z herhangi bir oyunu favorilerinize eklemediniz.',
           ToAddFavGames: 'Bir oyunu favorilerinize eklemek i&#231;in, oyun g&#246;rselinin sağ &#252;st k&#246;şesinde bulunan yıldıza tıklayabilirsiniz.',
           NoSuchGameFound: '<div class="lca-no-game"><span class="ic_no-game"></span><p class="">Oyun bulunamadı</p></div>',
       },
       cdnUrl: 'https://cdn-plat.apidigi.com/plat/prd/',
       RmCdnUrl: 'https://cdn-plat.apidigi.com/plat/prd/',
       languageDirection: typeof rtlLng != '' ? "rtl" : 'ltr',
       isMobileVerified: 'False',
       isDocumentVerified: 'False',
       currencyCode: 'try',
       partnerId: '1093',
       favoriteGroupType: '2',
       hasStaticLoginPage: JSON.parse('false'),
       gameCardType: '0'
   }
   GamesCommon.init(settings);
   (() => {
       let gamesByGroupData = {
           input: []
       };
       let lgActiveWidgets = document.querySelectorAll('.js_lg_w_names.active');
       let lgWidgetNames = document.querySelectorAll('.js_lg_w_names');
       if (lgActiveWidgets && lgActiveWidgets.length > 0) {
           for (var i = 0; i < lgActiveWidgets.length; i++) {
               let takeCount = Number(lgActiveWidgets[i].dataset.takeCount);
               let data = {
                   GroupId: lgActiveWidgets[i].dataset.id,
                   WidgetId: lgActiveWidgets[i].dataset.widgetId,
                   GroupTypeId: lgActiveWidgets[i].dataset.typeId,
                   TakeCount: takeCount,
                   Page: 0,
                   LobbyUrl: lgActiveWidgets[i].dataset.lobbyurl
   
               }
               lgActiveWidgets[i].dataset.hasNext = false;
               gamesByGroupData.input.push(data);
           }
           getLandingWidgetGames(gamesByGroupData);
       }
       lgWidgetNames.forEach((item, index) => {
           item.addEventListener('click', function () {
               if (!item.classList.contains('active')) {
                   let eachGroupNames = item.parentNode.querySelectorAll('.js_lg_w_names');
                   let eachGroupNameslength = eachGroupNames.length;
                   for (let j = 0; j < eachGroupNameslength; j++) {
                       eachGroupNames[j].classList.remove('active');
                   }
                   item.classList.add('active');
                   item.dataset.hasNext = false;
                   gamesByGroupData.input = [];
                   let takeCount = Number(item.dataset.takeCount);
                   let data = {
                       GroupId: item.dataset.id,
                       WidgetId: item.dataset.widgetId,
                       GroupTypeId: item.dataset.typeId,
                       TakeCount: takeCount,
                       Page: 0,
                       LobbyUrl: item.dataset.lobbyurl
                   }
                   item.dataset.page = 0;
                   gamesByGroupData.input.push(data);
                   getLandingWidgetGames(gamesByGroupData, false);
               }
           });
       });
   })();
   
   $('.js_moreless_button').click(function () {
       $('.additional-infos .info_more').slideToggle();
       $(this).toggleClass('active');
       $(this).find('span').toggle();
   })
   
   $('.js_jackpot_types').click(function () {
       let jcType = $(this);
       if ($(jcType).hasClass('active')) {
           return;
       }
       $(jcType).parent().find('.js_jackpot_types').removeClass('active');
       $(jcType).addClass('active');
       if (allowChange) {
           allowChange = false;
           SetJackpot(this.dataset.jpType, this.dataset.jpGroupid);
       }
   });
   
   function GetJackpotView(jpType, contId) {
       $.ajax({
           type: "GET",
           data: { jt: jpType, groupId: contId },
           url: "/Home/GetJackpotView",
           success: function (result) {
               $('#jackpot_container_' + contId).html(dlAnimate(result));
           }
       });
   }
   
   
   $(document).ready(function () {
       let activeJackpots = document.querySelectorAll('.js_jackpot_types.active');
       if (activeJackpots && activeJackpots.length > 0) {
           for (var i = 0; i < activeJackpots.length; i++) {
               SetJackpot(activeJackpots[i].dataset.jpType, activeJackpots[i].dataset.jpGroupid);
           }
       }
   });
   
</script>
<script src="/assets//Scripts/Jackpots.js"></script>
<aside class="cw_mob_sidebar flex flexCol dynamic_menu">
   <div class="cw_mob_sidebar_block">
      <a class="cw_mob_sidebar_menu_item js_left_mn_items ui-link" href="https://rebrand.ly/bonustalepgrand" target="_blank" title="Bonus Talep Et">
         <i class="cw_mob_icon_m"></i>
         <div class="cw_mob_separator_aside"></div>
         <span>
         Bonus Talep Et
         </span>
      </a>
      <a class="cw_mob_sidebar_menu_item js_left_mn_items ui-link" href="/promotions" target="_self" title="Promosyonlar">
         <i class="cw_mob_icon_m"></i>
         <div class="cw_mob_separator_aside"></div>
         <span>
         Promosyonlar
         </span>
      </a>
   </div>
   <div class="cw_mob_sidebar_menu_item_devider"></div>
   <div class="cw_mob_sidebar_block">
      <a class="cw_mob_sidebar_menu_item js_left_mn_items ui-link" onclick="openRightSidebar();" target="_self" title="Bonuslar">
         <i class="cw_mob_icon_m"></i>
         <div class="cw_mob_separator_aside"></div>
         <span> Bonuslar</span>
      </a>
   </div>
   <div class="cw_mob_sidebar_menu_item_devider"></div>
   <div class="cw_mob_sidebar_block">
      <a class="cw_mob_sidebar_menu_item js_left_mn_items ui-link" href="https://rebrand.ly/beniaragrand" target="_blank" title="Aranma Talebi Oluştur">
         <i class="cw_mob_icon_m"></i>
         <div class="cw_mob_separator_aside"></div>
         <span> Aranma Talebi Oluştur</span>
      </a>
   </div>
   <div class="cw_mob_sidebar_menu_item_devider"></div>
   <div class="cw_mob_sidebar_block">
      <a class="cw_mob_sidebar_menu_item js_left_mn_items ui-link" href="https://rebrand.ly/biziarayingrand" target="_blank" title="Bizi Arayın">
         <i class="cw_mob_icon_m"></i>
         <div class="cw_mob_separator_aside"></div>
         <span> Bizi Arayın</span>
      </a>
   </div>
   <div class="cw_mob_sidebar_menu_item_devider"></div>
   <div class="cw_mob_sidebar_block">
      <a class="cw_mob_sidebar_menu_item js_left_mn_items ui-link" href="/" target="_self" title="Anasayfa">
         <i class="cw_mob_icon_m"></i>
         <div class="cw_mob_separator_aside"></div>
         <span> Anasayfa</span>
      </a>
   </div>
   <div class="cw_mob_sidebar_menu_item_devider"></div>
   <div class="cw_mob_sidebar_block">
      <a class="cw_mob_sidebar_menu_item js_left_mn_items ui-link" href="/Sport" target="_self" title="Canlı TV">
         <i class="cw_mob_icon_m"></i>
         <div class="cw_mob_separator_aside"></div>
         <span> Canlı TV</span>
      </a>
   </div>
   <div class="cw_mob_sidebar_menu_item_devider"></div>
   <div class="cw_mob_sidebar_block">
      <a class="cw_mob_sidebar_menu_item js_left_mn_items ui-link" href="/promotions" target="_blank" title="Çark">
         <i class="cw_mob_icon_m"></i>
         <div class="cw_mob_separator_aside"></div>
         <span> Çark</span>
      </a>
   </div>
   <div class="cw_mob_sidebar_menu_item_devider"></div>
   <div class="cw_mob_sidebar_block">
      <a class="cw_mob_sidebar_menu_item_heading js_left_mn_items ui-link" href="/Sport" target="_self" title="Spor">
         <i class="cw_mob_icon_m"></i>
         <div class="cw_mob_separator_aside"></div>
         <span>Spor</span>
      </a>
      <a class="js_left_mn_items cw_mob_sidebar_menu_item ui-link" href="/Sport" target="_self" title="Spor">
         <i class="cw_mob_icon_m"></i>
         <div class="cw_mob_separator_aside"></div>
         <span>Spor</span> 
      </a>
      <a class="js_left_mn_items cw_mob_sidebar_menu_item ui-link" href="/Sport" target="_self" title="Canlı Bahis">
         <i class="cw_mob_icon_m"></i>
         <div class="cw_mob_separator_aside"></div>
         <span>Canlı Bahis</span> 
      </a>
      <a class="js_left_mn_items cw_mob_sidebar_menu_item ui-link" href="/Sport" target="_self" title="E-Spor">
         <i class="cw_mob_icon_m"></i>
         <div class="cw_mob_separator_aside"></div>
         <span>E-Spor</span> 
      </a>
      <a class="js_left_mn_items cw_mob_sidebar_menu_item ui-link" href="/Sport" target="_self" title="Kupon Sorgula">
         <i class="cw_mob_icon_m"></i>
         <div class="cw_mob_separator_aside"></div>
         <span>Kupon Sorgula</span> 
      </a>
   </div>
   <div class="cw_mob_sidebar_menu_item_devider"></div>
   <div class="cw_mob_sidebar_block">
      <a class="cw_mob_sidebar_menu_item_heading js_left_mn_items ui-link" href="casino" target="_self" title="3D Slot Salonu">
         <i class="cw_mob_icon_m"></i>
         <div class="cw_mob_separator_aside"></div>
         <span>3D Slot Salonu</span>
      </a>
      <a class="js_left_mn_items cw_mob_sidebar_menu_item ui-link" href="casino" target="_self" title="3D Slot Salonu">
         <i class="cw_mob_icon_m"></i>
         <div class="cw_mob_separator_aside"></div>
         <span>3D Slot Salonu</span> 
      </a>
      <a class="js_left_mn_items cw_mob_sidebar_menu_item ui-link" href="casino" target="_self" title="Kıbrıs Slot Oyunları                 ">
         <i class="cw_mob_icon_m"></i>
         <div class="cw_mob_separator_aside"></div>
         <span>Kıbrıs Slot Oyunları                 </span> 
      </a>
      <a class="js_left_mn_items cw_mob_sidebar_menu_item ui-link" href="casino" target="_self" title="Popüler Slot Oyunları                 ">
         <i class="cw_mob_icon_m"></i>
         <div class="cw_mob_separator_aside"></div>
         <span>Popüler Slot Oyunları                 </span> 
      </a>
   </div>
   <div class="cw_mob_sidebar_menu_item_devider"></div>
   <div class="cw_mob_sidebar_block">
      <a class="cw_mob_sidebar_menu_item_heading js_left_mn_items ui-link" href="livecasino" target="_self" title="Canlı Casino">
      <span>Canlı Casino</span>
      </a>
      <a class="js_left_mn_items cw_mob_sidebar_menu_item ui-link" href="livecasino" target="_self" title="Canlı Casino">
         <i class="cw_mob_icon_m"></i>
         <div class="cw_mob_separator_aside"></div>
         <span>Canlı Casino</span> 
      </a>
      <a class="js_left_mn_items cw_mob_sidebar_menu_item ui-link" href="tombala" target="_self" title="Tombala">
         <i class="cw_mob_icon_m"></i>
         <div class="cw_mob_separator_aside"></div>
         <span>Tombala</span> 
      </a>
      <a class="js_left_mn_items cw_mob_sidebar_menu_item ui-link" href="/Play/Real/Lightning-Roulette-Evolution-Shared-Livecasino?fullscreen=true" target="_self" title="Lightning Rulet                 ">
         <i class="cw_mob_icon_m"></i>
         <div class="cw_mob_separator_aside"></div>
         <span>Lightning Rulet                 </span> 
      </a>
   </div>
   <div class="cw_mob_sidebar_menu_item_devider"></div>
   <div class="cw_mob_sidebar_block">
      <a class="cw_mob_sidebar_menu_item_heading js_left_mn_items ui-link" href="virtualsports" target="_self" title="Sanal Bahisler">
      <span>Sanal Bahisler</span>
      </a>
      <a class="js_left_mn_items cw_mob_sidebar_menu_item ui-link" href="virtualsports" target="_self" title="Sanal Bahisler">
         <i class="cw_mob_icon_m"></i>
         <div class="cw_mob_separator_aside"></div>
         <span>Sanal Bahisler</span> 
      </a>
   </div>
   <div class="cw_mob_sidebar_menu_item_devider"></div>
   <div class="cw_mob_sidebar_block">
      <a class="cw_mob_sidebar_menu_item_heading js_left_mn_items ui-link" href="tvgames" target="_self" title="TV Oyunları">
      <span>TV Oyunları</span>
      </a>
      <a class="js_left_mn_items cw_mob_sidebar_menu_item ui-link" href="tv" target="_self" title="TV Oyunları">
         <span>TV Oyunları</span> 
         <div class="cw_mob_separator_aside"></div>
         <span class="dynamic_bagge new">New</span>
      </a>
   </div>
   <div class="cw_mob_sidebar_menu_item_devider"></div>
   <div class="cw_mob_sidebar_block">
      <a class="cw_mob_sidebar_menu_item_heading js_left_mn_items ui-link" href="fastgames" target="_self" title="Hızlı oyunlar">
      <span>Hızlı oyunlar</span>
      </a>
      <a class="js_left_mn_items cw_mob_sidebar_menu_item ui-link" href="/Play/Real/Crasher-Fastgames" target="_self" title="GP Crasher">
         <i class="cw_mob_icon_m"></i>
         <div class="cw_mob_separator_aside"></div>
         <span>GP Crasher</span> 
         <div class="cw_mob_separator_aside"></div>
         <span class="dynamic_bagge 7">Exclusive</span>
      </a>
      <a class="js_left_mn_items cw_mob_sidebar_menu_item ui-link" href="/Play/Real/Plinkoman-Fastgames" target="_self" title="Plinkoman">
         <i class="cw_mob_icon_m"></i>
         <div class="cw_mob_separator_aside"></div>
         <span>Plinkoman</span> 
      </a>
      <a class="js_left_mn_items cw_mob_sidebar_menu_item ui-link" href="/Play/Real/Mines-Fastgames" target="_self" title="Fmines">
         <i class="cw_mob_icon_m"></i>
         <div class="cw_mob_separator_aside"></div>
         <span>Fmines</span> 
      </a>
      <a class="js_left_mn_items cw_mob_sidebar_menu_item ui-link" href="/Play/Real/Thimble-Fastgames" target="_self" title="Mr. Thimble">
         <i class="cw_mob_icon_m"></i>
         <div class="cw_mob_separator_aside"></div>
         <span>Mr. Thimble</span> 
      </a>
      <a class="js_left_mn_items cw_mob_sidebar_menu_item ui-link" href="/Play/Real/GoldenRA-Fastgames" target="_self" title="Golden Ra">
         <i class="cw_mob_icon_m"></i>
         <div class="cw_mob_separator_aside"></div>
         <span>Golden Ra</span> 
      </a>
      <a class="js_left_mn_items cw_mob_sidebar_menu_item ui-link" href="/Play/Real/CashShow-Fastgames" target="_self" title="Cashow">
         <i class="cw_mob_icon_m"></i>
         <div class="cw_mob_separator_aside"></div>
         <span>Cashow</span> 
      </a>
      <a class="js_left_mn_items cw_mob_sidebar_menu_item ui-link" href="/Play/Real/crash-Fastgames" target="_self" title="Crash">
         <i class="cw_mob_icon_m"></i>
         <div class="cw_mob_separator_aside"></div>
         <span>Crash</span> 
      </a>
      <a class="js_left_mn_items cw_mob_sidebar_menu_item ui-link" href="/Play/Real/betongameshilo-Fastgames" target="_self" title="Hi Lo">
         <i class="cw_mob_icon_m"></i>
         <div class="cw_mob_separator_aside"></div>
         <span>Hi Lo</span> 
      </a>
      <a class="js_left_mn_items cw_mob_sidebar_menu_item ui-link" href="/Play/Real/betongamesrocket-Fastgames" target="_self" title="Roket">
         <i class="cw_mob_icon_m"></i>
         <div class="cw_mob_separator_aside"></div>
         <span>Roket</span> 
      </a>
      <a class="js_left_mn_items cw_mob_sidebar_menu_item ui-link" href="/Play/Real/betongamessicbo-Fastgames" target="_self" title="Sic Bo">
         <i class="cw_mob_icon_m"></i>
         <div class="cw_mob_separator_aside"></div>
         <span>Sic Bo</span> 
      </a>
      <a class="js_left_mn_items cw_mob_sidebar_menu_item ui-link" href="/Play/Real/Penalty-Fastgames" target="_self" title="Penaltı">
         <i class="cw_mob_icon_m"></i>
         <div class="cw_mob_separator_aside"></div>
         <span>Penaltı</span> 
      </a>
      <a class="js_left_mn_items cw_mob_sidebar_menu_item ui-link" href="/Play/Real/BlackJack-Fastgames" target="_self" title="Black Jack">
         <i class="cw_mob_icon_m"></i>
         <div class="cw_mob_separator_aside"></div>
         <span>Black Jack</span> 
      </a>
      <a class="js_left_mn_items cw_mob_sidebar_menu_item ui-link" href="/Play/Real/betongames-Fastgames" target="_self" title="Keno">
         <i class="cw_mob_icon_m"></i>
         <div class="cw_mob_separator_aside"></div>
         <span>Keno</span> 
      </a>
      <a class="js_left_mn_items cw_mob_sidebar_menu_item ui-link" href="/Play/Real/KenoExpress-Fastgames" target="_self" title="Keno Express">
         <i class="cw_mob_icon_m"></i>
         <div class="cw_mob_separator_aside"></div>
         <span>Keno Express</span> 
      </a>
      <a class="js_left_mn_items cw_mob_sidebar_menu_item ui-link" href="/Play/Real/Aviator-Spribe-Casino" target="_self" title="Aviator">
         <i class="cw_mob_icon_m"></i>
         <div class="cw_mob_separator_aside"></div>
         <span>Aviator</span> 
      </a>
      <a class="js_left_mn_items cw_mob_sidebar_menu_item ui-link" href="/Play/Real/JetX-SmartSoft-Casino" target="_self" title="JetX">
         <i class="cw_mob_icon_m"></i>
         <div class="cw_mob_separator_aside"></div>
         <span>JetX</span> 
      </a>
      <a class="js_left_mn_items cw_mob_sidebar_menu_item ui-link" href="/Play/Real/Spaceman-Pragmatic-Casino" target="_self" title="Spaceman">
         <i class="cw_mob_icon_m"></i>
         <div class="cw_mob_separator_aside"></div>
         <span>Spaceman</span> 
      </a>
   </div>
   <div class="cw_mob_sidebar_menu_item_devider"></div>
   <div class="cw_mob_sidebar_block">
      <a class="cw_mob_sidebar_menu_item js_left_mn_items ui-link" onclick="openRightSidebar();" target="_self" title="Tombala">
         <i class="cw_mob_icon_m"></i>
         <div class="cw_mob_separator_aside"></div>
         <span> Tombala</span>
      </a>
   </div>
   <div class="cw_mob_sidebar_menu_item_devider"></div>
   <div class="cw_mob_sidebar_block">
      <a class="cw_mob_sidebar_menu_item js_left_mn_items ui-link" onclick="openRightSidebar();" target="_self" title="Zeppelin">
         <i class="cw_mob_icon_m"></i>
         <div class="cw_mob_separator_aside"></div>
         <span> Zeppelin</span>
      </a>
   </div>
   <div class="cw_mob_sidebar_menu_item_devider"></div>
   <div class="cw_mob_sidebar_block">
      <a class="cw_mob_sidebar_menu_item js_left_mn_items ui-link" href="https://rebrand.ly/androidgrand" target="_blank" title="ANDROID UYGULAMAMIZI  BURADAN İNDİREBİLİRSİNİZ!">
         <i class="cw_mob_icon_m"></i>
         <div class="cw_mob_separator_aside"></div>
         <span> ANDROID UYGULAMAMIZI  BURADAN İNDİREBİLİRSİNİZ!</span>
      </a>
   </div>
   <div class="cw_mob_sidebar_menu_item_devider"></div>
   <div class="cw_mob_sidebar_block">
      <a class="cw_mob_sidebar_menu_item js_left_mn_items ui-link" href="https://rebrand.ly/androidgrand" target="_blank" title="IOS UYGULAMAMIZI BURADAN İNDİREBİLİRSİNİZ!">
         <i class="cw_mob_icon_m"></i>
         <div class="cw_mob_separator_aside"></div>
         <span> IOS UYGULAMAMIZI BURADAN İNDİREBİLİRSİNİZ!</span>
      </a>
   </div>
   <div class="cw_mob_sidebar_menu_item_devider"></div>
   <div class="cw_mob_sidebar_block">
      <a class="cw_mob_sidebar_menu_item js_left_mn_items ui-link" href="https://rebrand.ly/yatirimgrand" target="_blank" title="Nasıl Para Yatırılır?">
      <span> Nasıl Para Yatırılır?</span>
      </a>
   </div>
</aside>
<script type="text/javascript">
   setActiveClassToPrMenuItems('js_left_mn_items');
   
   $(document).on('click', '.js_left_mn_items', function (e) {
       let href = $(this).attr('href');
       if (href && href.includes('#')) {
           closeLeftSideBar();
       }
   });
   window.addEventListener("hashchange", function (event) {
       setActiveClassToPrMenuItems('js_left_mn_items');
   });
</script>
<nav class="cw_mob_mav_fixed_bot" id="js_bn_nav_bar">
   <div class="cw_mob_separator_menu"></div>
   <button data-role="none" class="cw_mob_mav_fixed_bot_main_action js_bm_nav_items tl_main_nav_item-active" id="js_nav_left_toggle_btn" onclick="toggleLeftSidebar()">
      <div>
         <i class="cw_mob_icon_m"></i>
         <i class="cw_mob_icon_m"></i>
      </div>
   </button>
   <div class="cw_mob_mav_fixed_primary_items_wrapper">
      <a data-role="none" class="cw_mob_mav_fixed_bot_item js_bm_nav_items" href="https://rebrand.ly/beniaragrand">
      <i class="cw_mob_icon_m"></i>
      <span><span>Aranma Talebi Oluştur</span></span>
      </a>
      <a data-role="none" class="cw_mob_mav_fixed_bot_item js_bm_nav_items" href="promotions">
      <i class="cw_mob_icon_m"></i>
      <span><span>Çark</span></span>
      </a>
      <a data-role="none" class="cw_mob_mav_fixed_bot_item js_bm_nav_items" href="https://rebrand.ly/vipclubgrand">
      <i class="cw_mob_icon_m"></i>
      <span><span>VİP</span></span>
      </a>
      <a data-role="none" class="cw_mob_mav_fixed_bot_item js_bm_nav_items" href="promotions">
      <i class="cw_mob_icon_m"></i>
      <span><span>Promosyonlar</span></span>
      </a>
      <?php if(isset($us['id'])) {?>
      <a data-role="none" class="cw_mob_mav_fixed_bot_item js_bm_nav_items cw_mob_mav_fixed_bot_item_btn cw_user_color_363" onclick="toggleRightSidebar()" id="js_nav_right_toggle_btn">
         <i class="cw_mob_icon_m"></i>
         <span><span>Profile</span></span>
         <div class="cw_mob_mav_notification_count">
            19
         </div>
      </a>
      <?php }else{?>
      <a data-role="none" class="cw_mob_mav_fixed_bot_item js_bm_nav_items cw_mob_mav_fixed_bot_item_btn" onclick="toggleRightSidebar()" id="js_nav_right_toggle_btn">
      <i class="cw_mob_icon_m"></i>
      <span><span>Login</span></span>
      </a>
      <?php }?>
   </div>
   <div class="cw_mob_mav_fixed_alternative_items_wrapper">
      <div class="">
         <a class="cw_mob_mav_fixed_alternative cw_mob_mav_fixed_alternative-active" data-role="none" href="/">
         <img src="https://cdn-plat.apidigi.com/plat/prd/img/CmsImageLibrary/Home.png">
         </a> 
      </div>
   </div>
</nav>
<script>
   if (setActiveClassToPrMenuItems('js_bm_nav_items') == 0) {
       document.getElementById('js_nav_left_toggle_btn').classList.add('tl_main_nav_item-active');
   }
   
   window.addEventListener("hashchange", function (event) {
       if (setActiveClassToPrMenuItems('js_bm_nav_items') == 0) {
           document.getElementById('js_nav_left_toggle_btn').classList.add('tl_main_nav_item-active');
       }
   });
</script>           
<?php if(isset($us['id'])) {?>
<aside class="cw_mob_right_sidebar">
   <div class="panel PlatformLoggedUser bgMain " id="sidebar-user">
      <div class="right_menu_header">
         <div class="right_menu_logo" style="background-image: url('https://cdn-plat.apidigi.com/plat/prd/Img/partners/1093/logo.png')"></div>
      </div>
      <p class="account_title">Hesabım</p>
      <script>
         $(".right_menu_close").click(function () {
             closeRightSidebar();
         });
      </script>
      <p class="playerId flex justify-content-between align-items-center">
         Hesap ID: 8458018
         <span class="cat_btn_bg player_category_363"></span>
      </p>
      <a class="cashback__close-btn cashback-btn--alb flex alCen mb-2 menu_new menu_account gx-2 js-cashback_link ui-link" href="javascript:;" onclick="cashbckaa()"> <span class="dynamic_icon"></span> Kayıp Bonusu</a>
      
      <a class="menuRow flex alCen menu_new menu_account ui-link" href="account">Profil</a>
      <a class="menuRow flex alCen menu_new menu_inbox ui-link" href="inbox">
      <span class="d-flex align-items-center">
      <i class="dynamic_icon"></i>
      <span class="lblInboxCount1">19</span>
      <span class="">Gelen Kutusu</span>
      </span>
      </a>
      <a class="menuRow flex alCen menu_new menu_deposit js_dep_with_btns ui-link" href="deposit">Bakiye &nbsp; <span id="playerBalance1"><?=$us['balance']?> </span></a>
      <div data-role="collapsible" data-iconpos="right" class="ui-collapsible ui-collapsible-inset ui-corner-all ui-collapsible-themed-content ui-collapsible-collapsed">
         <h1 class="menuRow ui-collapsible-heading ui-collapsible-heading-collapsed" id="cashierMob">
            Kasa<span class="ui-collapsible-heading-status"> click to expand contents</span></a>
         </h1>
         <a class="menuRow flex alCen right_deposit_link ui-link" href="deposit">Para Yatırma</a>
         <a id="withdrawal" class="menuRow flex alCen ui-link" href="withdraw">Para Çekme</a>
         <a class="menuRow flex alCen ui-link" href="pendingwithdrawals">Bekleyen Para Çekme İşlemleri</a>
      </div>
      <a id="bonusBalanceCont" class="menuRow flex alCen menu_new menu_deposit hidden ui-link" href="bonushistory">
      Bonus &nbsp;
      <span>
      <span id="playerBonusBalance">0.00</span>
      <span class="bonuce_balance_currency">TRY</span>
      </span>
      </a>
      <a href="/Sport" class="menuRow flex alCen spversion ui-link">Spor Bahis Geçmişi</a>
      <div data-role="collapsible" data-iconpos="right" class="ui-collapsible ui-collapsible-inset ui-corner-all ui-collapsible-themed-content ui-collapsible-collapsed">
         <h1 class="menuRow ui-collapsible-heading ui-collapsible-heading-collapsed" id="accountMob">Hesap<span class="ui-collapsible-heading-status"> click to expand contents</span></a></h1>
         <a class="menuRow flex alCen ui-link" href="account">Hesabım</a>
         <a id="profile" class="menuRow flex alCen ui-link" href="profile">Profil</a>
         <a class="menuRow flex alCen ui-link" href="documentsupload">Belgeler</a>
         <a class="menuRow flex alCen ui-link" href="opentwofasettings">2 Aşamalı Güvenlik</a>
         <a class="menuRow flex alCen ui-link" href="resetpassword">Şifre değiştir</a>
      </div>
      <div data-role="collapsible" data-iconpos="right" class="ui-collapsible ui-collapsible-inset ui-corner-all ui-collapsible-themed-content ui-collapsible-collapsed">
         <h1 class="menuRow ui-collapsible-heading ui-collapsible-heading-collapsed" id="historyMob">Geçmiş<span class="ui-collapsible-heading-status"> click to expand contents</span></a></h1>
         <a id="transactionsHistory" class="menuRow flex alCen ui-link" href="transactionshistory">Finansal İşlemler</a>
         <a id="gameHistory" class="menuRow flex alCen ui-link" href="gamehistory">Bahis Geçmişi</a>
         <a class="menuRow flex alCen ui-link" href="balanceadjustmentshistory">Bakiye Düzeltmeleri</a>
         <a id="referrerReport" class="menuRow flex alCen ui-link" href="referrerreport">Arkadaş Bonusu Raporu</a>
         <a class="menuRow flex alCen ui-link" href="referrerhistory">Arkadaş Bonusu Geçmişi</a>
         <a class="menuRow flex alCen ui-link" href="myactivity">Etkinliğim</a>
      </div>
      <div data-role="collapsible" data-iconpos="right" class="ui-collapsible ui-collapsible-inset ui-corner-all ui-collapsible-themed-content ui-collapsible-collapsed">
         <h1 class="menuRow ui-collapsible-heading ui-collapsible-heading-collapsed">Promosyonlar
            <span class="ui-collapsible-heading-status"> click to expand contents</span>
         </h1>
         <a class="menuRow flex alCen ui-link" href="bonushistory" id="bonuses">Yeni Bonuslar</a>
         <a class="menuRow flex alCen ui-link" href="clientbonusreport" id="activeBonuses">
         Free Spins and Free Bets
         </a>
      </div>
      <a class="menuRow flex alCen ui-link" id="CheckPromoCode" href="checkpromocode">Promo Kodlar</a>
      <a class="menuRow flex alCen ui-link" href="javascript:;" onclick="logOut()" id="logout">Çıkış</a>
   </div>
   
</aside>
<div class="js_cashback_popup">
    <link href="assets/Content/components/cashbackPopup.css" rel="stylesheet">

    <div class="cashback-backdrop hidden ">
        <div class="cashback">
            <button class="cashback__close-btn" onclick="cashbckaa()">✕</button>
                <p class="cashback__title">Kayıp Bonus Talebi</p>
                <div class="js_client_request_cont"></div>
                    <div class="cashback__request js_last_request_cont">
                        <div class="request__head">
                            <div class="request__title-wrapper">
                                <p class="request__title">Son talep:</p>
                                <p class="request__status rejected">Reddedildi</p>
                            </div>
                            <div class="request__time-wrapper">
                                <p class="request__date gx-2 align-items-center"><span class="dynamic_icon"></span>10/11/2023</p>
                                <p class="request__date gx-2 align-items-center"><span class="dynamic_icon"></span>20:08 PM</p>
                            </div>
                        </div>
                        <div class="request__body"></div>
                    </div>
                    <div class="cashback__action">
                        <button id="js_request_cashback" class="primary-btn">Talep oluştur</button>
                    </div>
        </div>
    </div>

    <script>
    var cashbackCountDwnInt;
    var allowClick = true;

    function startTimerWithMinutes(durationSec, display) {
        let timer = durationSec;
        let minutes, seconds;
        clearInterval(cashbackCountDwnInt);
        cashbackCountDwnInt = setInterval(function () {
            minutes = parseInt(timer / 60, 10);
            seconds = parseInt(timer % 60, 10);

            minutes = minutes < 10 ? "0" + minutes : minutes;
            seconds = seconds < 10 ? "0" + seconds : seconds;

            display.textContent = "Talep Süresi " + minutes + ":" + seconds;

            if (--timer < 0) {
                clearInterval(cashbackCountDwnInt);
            }
            if (minutes == '00' && seconds == '00') {
                display.textContent = "";
                $("#js_request_cashback").removeClass('disabled').text('Talep oluştur');
            }

        }, 1000);

    }

    if ('True' == 'True' && 'True' == 'False')
    {
        startTimerWithMinutes(0, document.getElementById('js_request_cashback'));
    }

    $(document).on("click", ".js_close_cashback", function () {
        $('body').removeClass('ofh');
        $(".js_cashback_popup").remove();
    });

    $(document).on("click", "#js_request_cashback", function () {
        if ($(this).hasClass("disabled")) {
            return;
        }
        if (allowClick) {
            allowClick = false;
            let htmlBody = `<div class="cashback__help">
                                <span class="dynamic_icon warning">&#58169</span>
                                <p class="cashback__help-text">
                                    Talebiniz oluşturuldu. <br>Sonucunu görmek için lütfen bekleyin
                                </p>
                            </div>`;
            $(".js_client_request_cont").html(htmlBody);
            $("#js_request_cashback").addClass('disabled');
            $(".js_last_request_cont").remove();
            $.ajax({
                url: "/tr/Account/RequestCashback",
                type: "Post",
                datatype: "json",
                success: function (result) {
                    allowClick = true;
                    if (result.Success) {
                        let status, icon;
                        switch (result.State) {
                            case 1:
                                status = 'Onaylandı';
                                icon = "&#58115";
                                break;
                            case 2:
                                status = 'Reddedildi';
                                icon = "&#57476";
                                break;
                            default:
                                status = "";
                                icon = "";
                                break;
                        }
                        htmlBody = `<div class="cashback__status">
                                        <p class="status__head d-flex align-items-center gx-2">
                                            <span class="dynamic_icon ${ result.State == 1 ? 'success' : 'error'}">${icon}</span>
                                            <span>Talebiniz ${status}.</span>
                                        </p>
                                        <p class="status__body">
                                            ${result.Message}
                                        </p>
                                    </div>`;
                        startTimerWithMinutes(result.RequestFrequency, document.getElementById('js_request_cashback'));
                        $("#js_request_cashback").addClass('disabled');
                        $(".js_client_request_cont").html(htmlBody);
                    } else {
                        $(".js_client_request_cont").html("<p class='status__body error'>Bir hata oluştu, l&#252;tfen biraz sonra tekrar deneyin</p>");
                        $(".cashback__action").remove();
                    }
                }
            });
        }
    });
    </script>
</div>
    <script>
    function cashbckaa(){
    $('.cashback-backdrop').toggleClass('hidden');
    $('.cashback-backdrop').toggleClass('opened');
   }
   </script>
<?php }else{?>
<aside class="cw_mob_right_sidebar">
   <div class="platformRightLoginPanel sidebar_login-content" id="sidebar-login">
      <div class="sidebar_login-header d-flex align-items-center justify-content-between">
         <span>ÜYE GİRİŞİ</span>
         <span class="sidebar_login-close" onclick="closeRightSidebar();"></span>
      </div>
      <form id="login_form" action="javascript:;">
         <input name="__RequestVerificationToken" type="hidden" value="8lIfpCPk_qbxDnTlrsFoZt_x6fxq2F-y4lV005Vdv7gMWBfnfFJAPPNPFXPfv331D3tWDO1f4OFDjuGe5ntUVPlgQNzm8p2yUcj7g6yyP0o1">        
         <div class="r_login__row">
            <div class="platformLoginRightLogo"></div>
         </div>
         <input name="GameName" id="GameName" value="" type="hidden">
         <div class="r_login__row PlatformLoginPassContainer">
            <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset"><input class="login_input inp" automation="email_input" data-val="true" data-val-required="Lütfen kullanıcı adınızı giriniz" id="email" name="login" placeholder="Kullanıcı adı / E-mail / Cep numarası" required="required" tabindex="1" type="text" value="" aria-required="true">
			 <input automation="email_input" class="tl_input_popup_reg" data-val="true" data-val-required="Lütfen kullanıcı adınızı giriniz" id="email" name="mobile" placeholder="Kullanıcı adı / E-mail / Cep numarası" type="text" value="true" style="display: none;"></div>
         </div>
         <div class="r_login__row PlatformLoginPassContainer eye_block">
            <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset"><input class="platformPassInput inp" autocomplete="off" automation="password_input" data-val="true" data-val-required="Lütfen şifrenizi giriniz." id="password" name="password" placeholder="Şifre" required="required" tabindex="2" type="password" aria-required="true"></div>
         </div>
         <div class="captcha login_captcha_block dis_none">
            <label class="reg__row_title">Güvenlik kodu: <span class="required-field">*</span></label>
            <div class="flex relative w-100">
               <div class="r_login__row captcha flex alCen jb">
                  <input type="hidden" name="captcha-guid" value="d523fbd34e6b43a48468136af8745277">
                  <img class="captchaImage" src="/Common/Captcha.gif?guid=d523fbd34e6b43a48468136af8745277&amp;height=50&amp;width=150" alt="CAPTCHA" width="150" height="50">
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
         <span class="field-validation-valid error warning warning-log hidden" id="loginerrormessage" style="display: block;">Kullanıcı adı veya şifre hatalı</span>
         <div class="r_login__row warning dis_none">
            <span class="field-validation-valid" data-valmsg-for="Password" data-valmsg-replace="true"></span>
            <span class="field-validation-valid" data-valmsg-for="Email" data-valmsg-replace="true"></span>
         </div>
         <span class="dis_none loading_span" id="loadingSpan">Yükleniyor...</span>
         <div class="r_login__row">
            <button class="platformLoginButton btn_prim tl_btn bg-primary ui-btn ui-shadow ui-corner-all" onclick="logIn(event)" type="submit">ÜYE GİRİŞİ</button>
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
</aside>
<?php }?>
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


<div id="footer" class="bgMain">
   <div class="footer_cont ">
      <div class="phone_lang_cont flex alCen">
         <div class="drop_down_lang_arrow">
            <span class="drop_down_lang__front_el">
            <span class="lang_width lang tr" style="background-image: url('https://cdn-plat.apidigi.com/plat/prd/Img/flags/mob_flags.png')"></span>
            Türkçe
            </span>
            <select onchange="window.location.href = this.value" data-role="none" class="drop_down_lang" id="LanguageBarSortingMob">
               <option value="/tr/" selected="" hidden="" class="tr">
                  Türkçe
               </option>
               <option value="/en/" class="en">
                  English
               </option>
               <option value="/es/" class="es">
                  Español
               </option>
               <option value="/ru/" class="ru">
                  Русский
               </option>
               <option value="/pt/" class="pt">
                  Português
               </option>
               <option value="/fr/" class="fr">
                  Français
               </option>
               <option value="/de/" class="de">
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
            <div class="copy">GRANDPASHABET © 2023 Tüm hakları saklıdır.</div>
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
         GrandPashaBet365 operates under the License GSR Technology N.V., at Kaya Richard J. Beaujon Z/N Landhuis Joonchi II, Curaçao, No. 1668/JAZ issued to Curaçao eGaming, Authorized and Regulated by the Government of Curacao.
      </div>
      <div class="flex jc">
         <a href="https://verification.curacao-egaming.com/validateview.aspx?domain=grandpashabet365.com" target="_blank" class="ui-link">
         <img class="license_logo" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMgAAADeCAYAAAB4108YAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAAZdEVYdFNvZnR3YXJlAEFkb2JlIEltYWdlUmVhZHlxyWU8AADumUlEQVR4Xuz9BZgdVfL/j9+xTNyTSTLJTNyFKHF3V4IFQtAkWCC4a0IIEpIQJBDc3d3d3XWRXRZYWBaWRXbr/37V7bo0s5MA+9mPfH//7eepp7tPn3v6nKp6l5w+3Tfzn+1/Z8vLy2RK6letP3izhsMWzWp14BkH9Lj57tUDPrtndf8vzzqg6527zyo7YljPemOaNSxunJ+f/Og/23+2/69uVasUFLYvr91mytDSmQfO77T83MP73XXHmmEfPb5h5N+fPn+kPX7OMHvwjEH24LqB9siZA+3RMwfYA2v7/eOmE3p+cubSTvfvt2XZyZMHNNiyfYvqHasV51dJmv3P9p/t/82tXp3iWv26Neq308z2i1cd0O/iW9aMfvWZSyd//+o1U+2VqybZsxePtUfPGW4PCBD3r97cHlzV1x6BdPzQ6QMElEF+7cF1A+zhdZvbY2f0tUdP7233nNzjx8sO6/TWsp1aXrnd2Mb79OlQc1D92oV15ZD+s/1n+7+55efnZVo0qVkydmDzsfsv2OyIC5eNuO3hC6f9/rWbtrC3b9nCXrtuhj17yXh7ZP0wu3/N5nbvyb3svhO724Mn9rAHdXz32s3tuvNG2LmXj7dLLxlrd507wh47a6g9c9Ywe+bsYfbk+uH2qOihM4fYAwLPA2v62EOre9pDq7rZvSs72zVHtP901aLyexZNbXzc8B61JjdvWFRakJ/5D2b+s/3vbFWK8vPbt6zbcuaYNrOO22vAydetnvTI89dt9ef37tre3rtzW3vthtn29CUTXKHvPqWX3bmss911THu759iOdteK7nbz2r52yQXDbNX1E+2AO6fb/Ie2sKmPb22jntjWRj82z6Y+uI3Nv2tLO+Tm2XbGVVPtRrX16AXj7IXzx9pL2j8vevL8MfbIOSPcy9x3Wm+77+Rudv9JneyeE9rZDUe2+mbd7s2f2ndWo7Xj+9Taqk3TKu2Ki/IKk+7/Z/vP9u/dqhYXFnZr17DD9tO7zDv1oOFn3bVhzvNv3r7j3z5+cFf78N4F9vqNc+2pC8fLO/S325d3tlsOb2W3HFxmtx7W0m5d1smuO72vnXfJUFt56wTb/8EZtuDJOTbnmbk29ZktbdJToie2somPbWXjH9naxjyyjQ1/ZFsb+PB21ufh7a33QzvYgAfm26S7t7Ndbt3all832y6/cro9eOkUe/GSSfb6pZPtFdFzF0+0x88brTxmsN1zqrzSiZ3t7uVt7c7jWtoNh7f4/uw9mr564OwG58/oX3OnjqVVulWrklecDO8/23+237bVqF5U3KtLk267zt1s53OOm3DBw5fNe+139y3+4bPH97TfP7CrALGVPXHeWLtb4dFNR7Sya5c2tuv2aWg3HNDUbjimjV29rpdtuHKYrbxznB38+FRb9Pws2/6F2bb187Ntq2dn25ZPz7a5AsnsJ7awGY8LKI8JJI/+BJCRD29rwx6aZ0Me3M4GPrC99RVAety/g3W4f0dre/9O1vHenWzzOxfYrJvn2YHXb2XnXjXL7r18ur10xTR7U+B5Q/Ti5VPtyQvH2UNnyYud2tPuWN7B7ji23G4/stSuP7jJ39cvbvjOYVvUvXz2wOq7d2lR1LtGcV61ZPj/2f6z/XyrU7O46oCezTfba7t+C88/YeplT1+309t/eGyfv//5mf3sk0f2sDdu2tYe3zDW7lB4dI1AcNnimnb5btXt6iUN7JqjWtoVp3ez868dYqvuH2tHPTPZlr4yzRa/Ot12fXm67fLCdNv5uem24zMzbP7TM23e07Ns66d+G0A2v3++db9vG+t273bW4Z551ukeAeWena3F3btayV27WdM7d7MOt+1io25aYIuu3dbWXjXHbr9iur0goLx99Qx76+qZ9oqOn5aXeUi5zd2n9LTbjmtrtx5Rarcc2siu3b/+P9YvrPu7Q2fVvGbuwKp7dy8v7FerWl6NhD3/2f7/batTq2rVgb1a9Fqyw4DdL1s154qXb9v9vS+ePfgf37x4qH32+D721i3b22PnjrXblnezqw4oscv3rGFX7lnVrty7ll15WKldvrazXXjtADvjkTG24qWJdsQbk+1A0dLXJtu+L0+2JS9Otr1emGK7Pz/VFj43zXZ59l8HyIAHtrNu9821XR471a594WVb9OhZ1vrubazD3TtZu7t2ttZ37mJld+xqTe9YaPXuWGw1bt/daty6u5XctND6XL+TbXf1PDvpirl28+Uz7YWrZtjbt861t27d0l5WqPa0QjQAc9dJPeyWo1vZTYc0thv2r2tXLallZ+9S46PDZla9fov+VfbtVlawea2qeTUT9v1n+//aBiAG9S7vue+Og3e/as3WV75+1z7vf/3SUf/4/rVj7MunD7S3b9vRHtsw3m45vptdvrTELl5czS7bvdgu37umXbB3Y1u1uLXtMb2NLVrSzda9Pd5OfHeCHfvueDvqrfF2xOvj7fBXJ9ghL0+0A1+aZPuJ9nlxyr8FIIMFkB73z7HFT6yyZ1//s7342l/t6Ze/ssWPnGNld21rbROAlAsgzW+XJ7ltoTW+bZE1uHWx1bplDyu6ZS/L3Ly3ZW7c26pq3/20ubZoVmdbc0B/u23dmAQwW9o7t29jr9+0pT2nEO2R9SMEmM3spiPL7br969s1S6rb5eLFmQuKPzpkevENszcv2rdrCwfMfzzM/6tbzepVivv1aNF9yYIhC689Y/vL377/wPf+9vryf/zjnRX29QuH23sKSR4/b5LdfHx3u3SfxnbBblXtwt2q2CV71rZz9yyxE3Yqs8Wz29r4Qa2tU/sya9ykmVUpamD9ZrWx034/1la8McaWvT7Wjn1tnB31qgDyyn8HQLa1XvfPtj2fXGUvvPmVA+SxVz63x1/6wp548c+228PnWPM7t7NWGwFI3Vt2t1o372HVb9rTim/cy/Lu2M8KTtzWatdoYHXrNrQWpSU2sFe5LZjeyU7et5/dsnasPX/VTJ+F++DeHezt27e3l66ZI0862gFz42HN7Zp9a8uTFtvFC4ts7fwqHx00tcp10/sU7d2haUHf6sWZ6gn7/7P9X9uqVS0q7Nu9rPOSBcN2uur0+Re/ff+hb3//1kl/tw9W2d9ePU4C38OeuGCa3XT8ZnbRkhI7d5eqdt4uRXae8oizFjW2Y+c3t52mlNuo/i2tfZvm1qBxE6tRu6HVkiI1bFhiJU2aWP3ajWzw7HZ22of/MwDp+8AsW/L0Knvp7b84QJ587U/2uADyyEuf2SMv/Mkee/5L2+HBM630jh1+FUAKbl9qVZdvZU0bNLImGk+jxiVWt14jq16zvtWq08CaNWlkfbuW2rzJHWzF3v3sxtPG2ovXbGEf3ruj/f7B3ez9e3e2V2/Y2p44b5wA09OuO6S5XaGQ89JFVey8nYvslG2q/G6fCVWumtyzcHH7pgWbVS3K/GeW7H9rq1JUmN+jc2nb3bcbut1lq+dveOv+I17/4b3VP9onZ9iPb6+03z+0VPH1HLtpWR+7cO8mdvZOxbZ+x0Jbv0t1W71TfTtyXqntMLHchvZuYa1bNrN6DUocELXrNrIGDRtb45ISa9SokTVu3NiVCWpQt7H1m9DGTn1Pecd/M0D6PzjTlj5zqr367tcOkGfe+MKeSgHkwRc+taee/8bOfuJJBwg5yC8C5M79rOohM6ykdr3cmEo0zoYNG/o4GzUSYOo3Eh8aWI1a9a1xowbWs1NT22p8O1u2Rx+7afV4e/n6bez3D+ymPG0v+/ih3e2Nm7e3Jy+YaHeu7GXXHNTcLt2jpl24a6GdvaDgHyfMLXpn8ZiiS8Z1K9y5VaP8zkUFmf88h/nv2goLC/I6tmlStmDuwDkXrZp/+pv3H/XCjx+c8b39aYPZB2vs8ycPVfy8jd2yor9yhmZ2xoKqtm67fO2L7bQd69khcxvbvLGlNrhnqbUsa5JThNryEPUb4CUEjAYNHBQoDRRKFIrUSCDq3LfcTnx1lJ341n8fQAY9NMMOePZUe+P9bxwgz7/15T8B5PEXv7R7nvuDTbp/mTW/Y8Gv8yB37W81dhtrjWvUqXR8EEAJgic1BaZqNevJy9S1hg3qWY8OTWyLMa1t+Z797OY1E+3VG+fZZ4/tZV8+c4D98bF97C3lck9eMNluX9HLrti/mV2wsIadK8O0druCH4+eVfjaziOKzh3WsWDbZvXy2hQWZP6zBPNf3Vi60bqsYcmWU3pPPnPZ1ie9es+RT/zwu7P+al9dbPbHc+wvLxwna7aj3XbSUDt/SZmdPr+ardk2z9bMK7ST5tW0g+c0sq1HltiA7k2svHmJ1anX0KrXauChRL36Dax+/fpOYT2zFvQncKQViGOuNVRoUtaq1I58eJid9O7Y3wSQXZ+dYTs8M822fHKCwDHNttkIQIY+PN0Ofu5Ue+uDvzpAXnrny38CyJMv/9nue+ETm/rA8VZ65zwl6bv+OoDIg9SZ0d+aSOmbNm3qlAaJj1H8CM8ZPAnCkNSu28ABU7V6HatXt7Z1adPQ5o5r64C59fTJ9vYdO9uXT+9nX794mH3+1IH2jvr1xPlT7JblPe2SfZvYOTtXtTO2z7NTtsr/7rBphc/PG1S4ZvM2BbNK6uQ1/8+K5V/YmjaqXW/62G6jTjpk+jFP3LD0gW/fXPWVfS4P8cf19teXT7A3bllkd64eaxcsbWNr5le3U7fM2Klb59sJW1W1A2bUsa1HNLIBXRtZi2YhyPoKFeopzq5v9erVywECwltwnlaGAAbH1OE4lChXr0ET2+OSAXbKB+N+A0Cm24JnJmk/19a+dYrt8fzOAsYUgeXnABnx8DQ77IVT7d2PvrW3BZBX3vuzAPLnHEDIQZ559St78KVPbMaDx/ssVkzz/iJAbtrLCm9cYo37dbZShVKMK8YaAIlxBy98vCLGTjn8gm/BP/iKhykWWIqr1rJ6dWpZt3aNbO6YVnbi3pvb3efMtvfvWWTfCCzfvX6cffns4QLMQntsw2S74Zjudv6eje2MHarY6m0ytmJO3jf7TSh4fHa/whN7tSyYWK9GXqNELf7/d6tXp1r1UQPb9j98zzEH3HPJots+e/b4z+z368x+f7p98/Lx9sati+yuNePsgv3a22nza9nKuXl24pyMLduiyPafWtPmDq5jA7rUFyCUZEpQVWsQCtSz2nUEirpZQAQQ6tat6yBBuGERQ+ljHwAJhWAflhZq1qyZNahdYtP362arPv61AJlmOz070RY9N9ue/9NzZj+YvfvlRypfaNMfn2xznpjrABn9yBQ78sVT7He//5sD5PXffSWAfPUzgDz/+l/skVf+aLMfOs5a3b21dbx7518NkCq3LbHic3aypi1KrTQZT/CAMQdIggfBhwBJ8BGCNwGSKIe38LxGrbpWpVptK6xS3erWrmHd2ta3bZS3rdp/sN2/YY794eF97cc3j7e/v32iffXC0fbOnYvt4XMm29VHdLX1C+vb6m0L7eS5GTt6eubLPcbk3ztps4LDOzXLH1qzOFM7UZv/7241qlcp6tejebe9dxi86NoztrvqvYcO+fAf752sHGKVffPSsfamBHv36RPtgv072anb17ETZufZCbMydsyMfFs6sdi2GlzTBnSqYy2a1JHlquuWq5ri6Vo6DgBkBVXX6tSp4/sQYlAoRVr4IXCOQ0k4rggOqGG9Eus+pKXnIMvf+CWATLVdn5sgMMyyl74UOH40+/rbH+27b83e+dPHAs1Cm/zYFBv/6BQ75qVT7MNPvnOAvPXRXwSQv6QA8oW9+ObX9vhrn9rch4+ztndvZV3u2UkA+elB4S8C5O6lVnPpZIVX9XNjibEyvgBIlAVPgk/s4V+UB1EGQOA3FDKAatepa9Uln4IqNaywqJrVrVXNNmvfwOZPaWdrDhhsT14x3/701MFm750kHVhtX790vL11x2K7/8wJdtnBHW3djrXt5C3zbPnMjB0yKfOHnYbm3ziqc/4SJfy9qxZlqiZq9f/uVliQn9epbaNW82f13Oa8FbPOfem2vd/49tXj/m7vnihAHKV4dbHde+Zku+igrnbq/Pq2bFa+HTs9Y0dNy7N9JhTZloOq2cBONa2sSS2rWbOWFVWtLVDUtho1a+cEEmCoXbv2z0BCGYKrTKhhBQMgCJ9zFCOUJICRBktpaan2zayxQpR9bxxsK98fv0mA7PE8+zn2ylcCxz/Mvv3u7w6QP3/zvX37jdmbn32kxH0XO/rlE+33n35nHwkg73z89c8A8qJykFfe/saefOMz2/qRY63DPVta93t3FEB2/PUAuVkAuX0fqz+suzVVLsY4AiQQYwtexPiDJ1EOURZAgcfsg+A9FN4EijJkA9WqpVCsWi3LL6xm+QVVrH7tata7Qz3baVp7O/foMfbs1Qvsry8dY/aHM8w+PkOAWW6vK6y+a/UYu2BfeaHtathyGcyjp2b+sXRc5t1tBuRfMqBt/oJmdfPaF+RnChK1+7+78fJB8ya1G80Y03HSSQeNO/mRK3Z++rOnD/nbj28eqzj0cHv3LlmH9VPt4kM3s1MXNLLjZhUwWDtscsaWjCu0rQBEx+pWVlLDatSQ1SmuKVDUlJcQQGrVyjE6qKIAQkBBIbwARAg9riF0ABCEYkRZRYBwDcWCGtZpYhMXd7OTP5qwCYBMVmI+yu7+47XG9v0P/xBAfnSAfPXND/anv3xnX31l9tZnn9gHn30lgHxv7//hmwoA+bO9/u5f7Zm3Prd5jx1rne+daz3vXSCALPhNAKl2xxKrceb8bP8FiCzQf/KMAQgo+AAFX+JagATeAYDga5rPUMglQIJsakl+YcjivIbkWlRcwzJ5xZafX2T1alWxzTs3sN3ndrGLl42XN9lboZgiDM9Dz7W/vHiCvXT9znbTiUPtrN2b24q5VewY6c8hEzM/LB6ZeXF6r/y1PcryZ9avkWnG68z/J7a6tapWH9avbOAhCwcdcsv6re55//69v/zry4fZ1y8crARN8eV5M+yyI/vYqp2a2DEzq9jhk3xAtteYfNt6YBUb3KmalZdUE7OqyRVXV+xaQ1YGgNSU16jpjAwKxgaFB0kLJIQUQgtrRlkIOsASyh9KwT6ucR7WleMAB9Ssaam1bl9mhz060pa9PX6jANnt2dF2xYdnOkB+qACQL/7yvX325+/s8y9/tD98/p19+OlfKwDkK3vr/W/t+Xf+ZPMfP8a63beF9blvBwFkh98OkLv3tYZzB1uLBiXWvHnzHPCh8CIBirgW5/AnQABf0iChPA0QKAABBUAgZJUGSMgSQ1i9enWXdzXJvUChWCZTZHl5+daojvSjewPbd9uuduPaLezDBw60f7x/mtmfzrN/fLjOPnnsMHv8oi3t8iN626oFDT0UP0y6tXRM5usdB2ceGtsl75h2JXnDa1T5H8xfiqsUFPTo2KjjrltutuuFJ06+8oUbd/rwi6eW2l+e298+uG+ROjzbrjy2v522aws7elZVO1QdPnCcADE6z7YRIIZ0KrZWTapazepVLV/MyJO7LSquLuZUTxiV9R6AIyjO04xlnwZGgCCEUREkofgh5KA0IEIhoLCuUAAj6nDcuF4zm7xPDztRXmRjIdaeStJ3eXa83fT7yzzE+tv3//gngHzyxd/s959/+3OAfPgXe+fDv9mL731hOz5xjG123xxfzfuvAKTmnXtbzfU7WNNSjUPhIQCh/4CAMTrgk3GGMQg+cUw9juFT8CauUwafg/fB6zBcIZeQE+XILmQZx2l5h/zRhSrFAkteFQGmwPLzMlZSt8hG9W5kh+/S125eO8v+8MhBZh+u9pDsb2+stHfu2svuXjfJzt23oy3fqpYdJmN8wNiM7T4i88mW/fJuGNgmb8/SepnuRQWZokSd/+sbrqpFk1qNp49qM+3E/YaueeCiLV/6+MFFP3z51BL7+IGF9swVc+36FUNs7e6t7Og5NeygCRnbb0zG9hiZsW0HFtjILsXWrmmx1a5ZVdahqgCR3VcpLhYoqjnBjABHHMOsigyEqWGJ0kwPYSCkOOcYAQaFQCGEjODZxzWUAQUJCqsaSlQRIM1LW1h5yzLb947hdty7EzeSpE+xxc9NsR2eGWvXfyyQKEn/67d/Vw6yaYC8//F39srvvrCdnzzaet8/O7fc/TcD5FYB5K4l1mhiH2tWN5t7AJAACZQeZxwHr2K88Cr4Fdc2BhD2QWmwQGlQcBznaTlX1IOqVau6jlStqghDepPJKxJg8qxAgClrVNWmDmlhxy3qZ/edP88+fTxJ+H+3yr549kh7/poFdt3yIbZaxvrIGcUOliUjM3/faXDmjUnd89Z3K83bol71TPPfHI7VrF5U3L9Hk75Ld+h54FWnTrr7tVu2//Onjy6yPzy4q7147ZZ2y6oRdtaSDnbslnXtwAn5ts8ooXR4xuYNyLfRXYusU/NiJWBVFS5lAZFfWGxVqhT7YNNUGUDinOM084KhUDCdfZSFkIIQFgJkjzAhjqM8LXT2oQxpRYlrnKeVqkWLFqLmVtKgmfWf0smOfWuCHfEaAJnwTwBhmne356badk+Ps2s+vMz+/r3ZX775caMA+fAP39vrH35puz11tPV7YNbP3gf5TQC5ZbHVuW+JNThqppU1Vv+Tfsc4Yl9xnDH2oOATRL00DwMkcc4+LYO0fNIgCQr5hoyRe1r+oRehJ2ndKS6WXinRx7sAmOLCPGvbrLrNHlFmpx043B65ZHv701OHCDAn2vdvLLMPHtjHHtww0y44aDNbtk1919slIzK2cEjmmy37Zh4a2j5zZMsGmcHFRZUsuMwm1zVLZo9tPefUAwed+9BFM99hNecfHtzJXr9pa7vnzLF23kHdbfm8RnbgpEJQaIuHZmz7AXk2oXuRdS+rYo3r4hV+AkSRwJEeUEWKQQdVZAoMC+ZVZCjHwXCEAKWBEQRooBBmgCQUAkorAtfZpxUFwITVhULJok5J/VKbcXgfO+6DSXbIK//sQeJJ+s7P8vR8vF31wWX2/d/MvvzLDz8HyB//ah//8Qd78+M/2+Knj7IBD8604bn3QX4jQG5dZPXv2cvqX7SjtejQxsqaNbeysjLve4wrQBLnMR6IMUPwIngX/OI8zU8oyuA1MgljxT4tq7S8AhRpOYf82VcECDpTrKijoh4FoXvoXSZT6ICpXiXPureubTtO7WBnHjbcnrtuJ/vq+cPsxzeOsz8/e6i9cuOOduPJI231otZ26PRqtrd0etGQjM3vn/lgYtfMJd1KM/PkXVq4cznz8MHnP3PlzL98dO/29u7t29hjF06yK47tayfv3MIOnlrN9tKPhTSbPyBjU3rkW5/WVaxZA0KkAERVB0Rx0tlNDSSubQwgUDAuKAASIAmmBwBCIJSlQRLlIVCAEeBgT9nGABLeIhQJheE46z2yigYRarUoLbMdNgy2o343WQCZWClAWIu14JnpvtTk8vcvs7/9Vbnmn39wgHwsgHzy2Y/2zh++sj2fPcoGPzTDRv3shanfBpBGd+1uDW5aZM2HdLfmDbOJeRogMRbKoRhngGJTAIGCj8HnjQEkQBLlyG1TAInzAEfoBfu07lRGFa8VKWLJy8fD5Dtg6tcqsoFdG9qeczvblSdPtldv3sX+8vwh9u3Lhyv538seOn+mnX9wTztmq4a2ZEy+g2XXIZm/TeuRuSrzyEXT3uHFmbOXdrQj5tSxvUfn226DM7ZD/4zN7JlvA9sWWsvGxVarRjZ/ABCET7g5Orapjqcp6kJpYAQ4Yp9mFBSggLEBjqAQBsdcZx9Ciz0CDgohh1ARdChERUsaSsQx16iDkoWyQeUty5X8trBWbcpt16tH2OHvT7H9XqwcICxW3P7pGTbnyYl2yXuX2Td/Mfv0C4Vaf/q7vf/Hv9iS5460YQ9Pt7H/9EbhbwDI3Yut8e2LrfmUflbWQH1OxpLuN2NiH8AICuVnnwZJGJG4xh5eBgiCl/Cb89gHOKCQXUWQcJ4GR8i9on7E+S/pVaXXRehrNn/JV8KfZ03rV7Hx/ZvaMcpfbl033T64b3f7+vkD7fMn9rXnr97Wrl422PabWM12HJj5OPP0FTP/eP/6sbbTwDzbolfGRnYssI7NeJCTDZXyBYpCT6z/dUCky9hXZEAwgT1MSjOtImMDDFEWgqI8LTAIQYbwoIpCDsWHAhiUhZKElaWcPUoWVF5e7vtmpfpNo2bWpkMr2+mKEXbIe1M3ChBW82771Eyb+cQku+Cdy+zrr5RTfvYXW/r8kQLFNJvwaGWv3P5KgNy72D1I6ZS+1qpxqbVs2TIHhugrFCAJxWdsAIQ94w4+BF8CHMFPjuM8zeM0n9OyCg+Slh0Ucg1QhHFkn9aL0I0ASEWdSutVZVSxPoApKFI4lpcNx4qL8q1Ty9q21diWtubAwfbyzTvZpwLK8vmltqB/5ovMy9dv8Zd7zxxp2/bP9+nXmGkqSgCxqZtt6trG6qYHGwwIq8FxACQsDBTHMDiYHOcBkBAOhFDYIzyIYwSIAkChHChAACatGKEoARCUKojytNKhXF6nWbm1advatlo3xA58d7rt/fLUSgHCcvetnppls56Yboe8dKQtfHaJjX90hk3+pzcKfwNAHtrdml+9o5WO6G5lDZs6OIJyQE7GEyAJ5U97kQBKgCL4lAZI8AsK/sLvtAxCRuFBAiRQWp5QRYCkzwMcoTfsN6ZXQRWvbao+5Z6/5BL+jB2wc3/78ql9bOVOLWyXQZm/ApDv71k3wrbsm68f6EcVGkg3mKbf0hEorqUHHKCoyCCoIkCgsELB8LQAQjgIinP2CC+ECYVw0yAJIXOcVhKUKc5RKBSLMq5RhuKFArJv1bqV5yMAZdy+/Wyv56fY3m/OqBQg8T7I1Mem2ZTHZtq0St4o/FUAuW9Xa/3wYmu5eo616tXJWpY0t1atWnl/6HP0L/oNBUAgytPXYuyh/PApgMRxUPCVPcCpTAZBAYygkGXIN32eBsfGALIpCh3cmB5WLK9YlxBsr+362RdPLbFTd2tpuw7O/ABA/n736cNtbh+5mwoA2RhFwxVvuDFK1w1gbAwcaQYFQIKCySEQKFw2wghXH8eh/GlwRB2EHsKHQkGgUByuQ5ShWAES9j8Dh5QyFLFFcyle4zLrOaqLbX3paNvjjZm28NWZtuOzv/6Nwl8EyP07W8dHF1q7G3awNjsOt9Zlrax183Jr3bq19wXlp88VQcJ5GiBRLwAQPGDMnKf5E3XgJyBI8zeAQVkaJMinouzC+8c+DRBkjk6EXgRAgjalV+my9Hm6vLL6aQIge8zrY188uZfPcO02JPMPAGJ3rx0mgGT0YzVUyQ8ra3hTN6pYP32eBkcQ5zAkDRL2wdwAAQyOc5iftlBpgITwQmAcI1woroXyh/WEQhECIJRRJ0ABoWwQxwGctNXmGorasrmUtby1DZrXy7a6Zrzt8sos2+m1Obb9c7P/JYD0fkAAeWQn6/74rtb55vnW/sDx1qZnJ2vTVH1qke0b/eDeAQjKAiBB9DGAwDH1AgiUQcEPytPehDphZCiLa1DwGlmEbKC07IKiLLzGpgCS1pHQpcr0qiJVdm1jdYMAyO7b9rE/PbGnrVnc2hYNzZgD5C4BZKu+8iCqtCmAbOwGlXVkY3UrAiTOAxTBrAAHx2kGRznHIYSwWmG5QmhRhvACIAEChM95GiRRByVBccLKomihTGlFCyULxQxq06aNK2brVgJJabas1/RuNvG04bbV/dNt3otb2NavbGlzX9jSZj2zpU17aiub/MTWNuGxbWzsY9vaqMfm2fDHtrOhj8+3QU8usP5P7mS9751v3c+bY50WymP06GCtm5Zb25ZtvO3on99T5/QnKPoa/WYMMV7KIcogxgM/gifsQ/mDd+wBRoAD/kYdeI9c0gDhOCiAERQGMeQex+gClNaT0J/fqoO/pX4WIL3t88f3sLW7t7bdhwGQ6+b84+7Th9k2m+clFX9qPN3Axijq/tr6QTHwsBQVmRXgiPM0SEIIIYgAQpSF0IIQZih/AITjuIYypC1nKAzKE8oX1zhGEaGw2kFpcFAPhWzbtq2onbVsJi/TrKV1Vq7Qd4veNuywoTb+nAk26frpNumu2Tbhvi1s3P1b2ph7t7IRd21lQ26Ya/3Pn2m9lk2wLgsGW8dhm1n7Nu0EDHkLlrqobe5F+wGKiuCAAhDs0yChf1CMFQqjAQVIglexD4Jv8Dn4D0ACJGl5BEiQWRi3AEjIOCjkH+AIQj/YV6ZHQf8OnQUgeyrE+uyxxb58ao/hCrFeum7Oj/cIINsNKFAnsgBJ/6giVdZwxfM0pevHIGPQARAoGBPHwUwYx74iMKAATQgEYUBpYAQ4OEeAnCN8BM4xexQBgITnCEsagAAIUY6CBUBCCSkL4KC0KCpl7Nu1a5ej9u3bW9vWba2siZS8pEweoK117NzROmwm6tPRugzs5tS5X1fr2K2TdWjb3lqXKkRS8t1GeQa/px3uQ9tZ8GUp7hv9jb5F3wMcEGVQepwxPvgRPIG4HvwKEARA4GkaHEEBjpBPyCsNjgBIyDgteyhAEXrCcRokFfWw4nmaKrtWWV0AsmT7PvbpI4ts7eKWPCT/e+bF6+b87d4zRtj8QQVWvRKAVGy8spulqeK1dP0YZHrQ7DcFkGBmWKBgOPsoryiktOA2BpCgUIRQijRAoFC4UC6Uk3PK00qYBkhacSHqsO/QoYPvA1zt27W3Du07WId2Hay9wNChra63krIrdKKMa+GR2AOQAAkUbQGMNECiL9E/jiHKGd/GABJjhyiDb/CFOhwHf4OnAZLgN8aJ6xsDCMcht5AvlAZIRV0IXQn9SetURV0Lqli+qbppYqp36YK+9seHd7M1i8psyajM95kXr539l/vOGmk7DS2wGr8CIJuiqLup+hUBAgVTgsJrsA+ABDM5htnhutkjkDRIQkDhTRBmUFjIAESAI66FogSF8rMP6xtKxDlKCYUSh6KivChxAMgBIeUGJOFNOnbsmCvjmD2/jbpRRn32lNEu+3Tb0Q/uTRkUfQqiDmNF2dPj4jj2XI+xwYsAAL8JHgWlwQFVJo+0nAIcUMg25BznIf8ARwAkgPFr6V/RWY4ByMG7bm5/eHAXW71bc9tnTOavmRevmfX5A+tH2W4jCqxm9eyDk401UJEqu7apunEcAAlKAyQYF+cBimAs+2B8CIM9bRQWFnr78XsYC+A5T4OD+kVFRV6eBgn7NDAAG3VQAMrCg6BA9CMNSuqEd+K3KGhYeRSWPUoeFMqPckb7ARjqcpwm6obSc51j+txA96bftMM5bfElSOq1UJuUB0g4DmDTT/gJL7l3gIA9dWgzeBbX/H4ac8gx5JXNW6s6T8JAhVygMHAhR4jfURbEOUSbAYoACMT9KgNK6GBavzamg1DFulHGHoActftA+/j+ney0XZrZ0rGZP2ceumDKx49sGGt7jC602jX+GSBpqth4ZTdLU8W6cZwGRlCcpxlVESBQWCPKYD7nAKNTp06233772TXXXGOPP/64Pfnkk3brrbfaKaecYlOnTs0qjgSO4Hr27GlnnnmmHXHEETllYI+isEchqLv33nvbhRdeaGPHjnXBo1jU6dWrl52+bp2dddZZTmeffbatXbvW7z906FCvC0jC0rOPYxSbY/pbLqUdM2aMXXDBBbZy5Urr3LmLg4FrEEAIsAAQPAR9oG+bbbaZ7bt0qV111VU+3meffdbuvfdeO+ecc2znnXf2ezGWNEAgfo+ijxgxws477zw7/vjjVacsB4A0QIIoY0woaNeuXe3ggw+2G2+80Z544kl75JFHnEfz5s0Tbxu6HEMuARDkVVGOHEOUh6w3BRDOAyCV6WC6LE0VyzdVF4AsWzLY/xRp1c5NbO/Rmc8y95w78e3HLxhv+4yv4u8F/xaAbIqibrp+DDLNgI0BJCxLMDKYC+PjPJh67LHH2jfffOOvt7L9+c9/tj9++ql99913fv7iiy86MAAJbU6cONHLX3vtNQk/6z0CIGEtaR+Ase2xxx66b31XLrzE8OHD7ccff/RrFbe///3vduWVV7oiUR8FD4CkPQBKzz0vueTS5Jdmc+fOdWB17tw55zECUNRH6VmAuM+++9qnGl9sjJ3zv/71r37+1VdfWb/NN/f2WyYhF+3SH6iO+HjRRRd5XbYpU6a4IlM/CD4EQOAbb33uq/vSNhvj/Pzzz3PnbC+88IINGTLEDVbIKsAS52lwQMgvdCAAAqX1Ig2QyvRqY/Rb6kIslz/lwKH2/l3b2ykLGgGQjzJ3nT3hhScummAHTqlqDWtXyb3LUVnjm7pRxbpRlj6PQQYFKIIhofAVARLnaSZzzu8vvvhiF85nn31mhx56qCxrTyk48/eNpVxtbILAsMUWc13Bsby1atW28ePH+29effVVaySFxzqiCGkPwneebrklAciee/rvuY7ABw0e7OWAcOzYcTZ48BAbP2Gi7bf//vb222/7tbvuulttZUM1AIHCo+h4gfAGffv2sy+//NJ+//vf+28uu/xy/y5weJAAVngQ+njCihVeF/CvXXu6jRo9xjp26mytNNb2HTp6f3bdbTdvHzAGOFzxEwPQo8dmbkQ++ugjb+uCCy50vsT4MRAYAvbck3fGjzvuOK8LIA499DDr0qWr87lps1IbOHCQXa6+s9EuXhTZR5iFzIKQW8gT2bJPyz0NkDQwgirTq6DQwfT1jdWFKtZlxe+6I0bYO7dvayfPr29LxuS9lbn8xBGPPnPZZDt8ZnVrUreKLw1ONxDHFanitYo3q+xaDDIGngZImkmUVWQiFACBsFJYUjaUsmu37rIAGSuuimeiLQmidh3dRxZI7aF4AKSa7jlGIRNbZQDJKklz3beu3XzzLV5v9933cMA0V7jiABmUBQgK1qy0hSwyoURDqyLede3azT755BO/PnvOHFc0LD8KDqHsUOPGJXbAAQd4vSVL9rF77rnXvv32W+sj0AAovEgApYPqo6x4GDY8xaxZs/1+9RsoiZaSNlOf8YYYBsDcTIpeXv7TMhgUn7ExrgMPPMjb2W3hQoVl99nXX3/t96BPARB4BZjg/9Rp07z+X/7yFxs5cpTzubp4XNuNV23JgqXkGTtO4RobnoRx89vwGCG3tDzTxwGO0IlNAaSiXm3svCJVvJauTw7FosXzjh9tb968lZ20XR1bOCLvxcylJwy//fkrptixc2ta8wZFPwNImjbVeEXaVN0ARpoRUAAkrAf7YGIwOohrCPL99993gYwbN94FxOcw3WKJ6nuiyIOrbGgVX2yvqvuPltVle/XV1zyhLSnJhliApJmUjePaAtdNN9/s9RYv3l19qCtLXO4KOGTIUC//6KOPZbnbWhMpJgpaIovKxwauVh7Etv/+B/h98QKApF0SWrVr196V9ZlnnrG//e1v1rpNe4F9qf/m8MOPcOUOz9GpM7mIQisp63333e91DpEFr16jlnIHhUwtW1kL9Ys8AkCUifAUjAHPAUACJOQjtPP88897WFaifu8tcLKRb9UQX8OLwIsAyO233+51Dj74kCyfZSwAYTYZZ7FifaspoMDbRx97zOvuuutubsQCBGHcAjBRHoYwDZCKIIEqgqOiXlVG6WtRd2P1AUhRUbFdftI4e/X6ObZy21q2eGT+o5k1B/W/8sWrp9mKeXWsVeMiX+r+zz/+58Y3diOoYt0oCyuQZkKUcQyTglEwrSJAgqn5+fmyoLNcECSovPOOAjswBAg8QkOBIVw851hECG+S9iCAI0IJ9nGMdUx7ENpHCbGyPwHkI8X4rR0cKCcWvE6devZYoiQ77bSz2mvqHiEUFaC0kOJOnz7D61x77XVSrrrWs1dfD5uwviTv1OV3eBCOhw3L5j1/+tOfFFJ18Xu20r3JMVB8KPs78hzCqnI/5reRoGMgJk+e7Pe99NLLZDEL3fP+8MMP9tRTT/l1QAFAIPjXrXt392x4D4CNx4h8Dh7D2zBEgGc3hXdsN8u4IPMwagGOIGQZsg65Q2Ecfw1ANkWhg2k9TB9XJHSIB+U3rJ1oL1w13VZuU90WDMm/M3PSvn3PfPma6bZqQQPr0LTQX5DiBxUb21TjldWtrH4MMkCSZkAaIFBYlTgOxmLZEcQxxxzjglizdq3O8xwcdRM3jtBw8QgRYUY8DUD4SuPYceP8t6+8kg2xuIZCoBwQXiQLkMSD7L67/y5CmADIhx9+qDaxsllwcu2www73a3i3Dh07OXAARTrhBjTE/Wzzttte/W7gYdr119/gZYRPTdQP9yICCH3beZdd/NqDDz6kezVwsLZWntFGIMrOTv38gWEQXgSvwB7LH/edNXuOeyHoxhtu9DI8MfwOI1FLfJ89e7ZfwxABDv4WAX5CWXBkvQjE10f69uvn9d977z3nN0AIcITB2xRAOIcCFKEfvwSQijq3MR0MqniN13Tr1K5hd6yfYk9fOtlO3Kqq7TC44KrMgQu6nfDKdTNs3W4l1r1Fgb9S+1saj7obq58urwwgUDAlCEZtDCAIOS8vz8444wwXBCEJHxpLJ4MBkKDwHgDmZwCRB8EKRojVvDmWMxti8DXHm276KcQir0FpUZAAyBdffOHeZdHixbZs+XJ78smnvBxrO2PmLO8rCttOio6yk4O0ktKSJJOcA7C27Tt4DlFHdbefv4P//pJLLnEwEmLxO/pIuMaGx8FIRPIP+NgHhccAHBzjWRgPSt9N3oK+obylzXn+0lhhUXXbTiBlW79+vS9WhVfcnzEvXLTIrzGtSxiS5W2Wnz8BJOu14S0TBXgcknX6gTwJwQIgAZKgKKuoAwGK0JU4rkyv4nxjOgilr0XddFmhwqvGDWrZgxdMs8fOH2crt6piW/QrOCezx1Yd939VADlnr1Lr17rA3yiMH1VGlTW+MapYNwYZgw6QBFPSgAnGBUN/AkhdB8iaNWtccEcddbSfh6AggAClARLCrF69Rg4gEWKRh2AxsbQQXoRQ7KabbvJ6eBCUktge5RgsgBCWVNzIJy659FIbqCQehSfUwcKjuAEQlJKknG31mrUaWz0pO+FZqTxCO4HmI58p6tO3b84b4J322nuJ/wbQYq2ZoasMHAAHUHDMb1FSwi28K89p2FaedJJbTP7zg9yBHOrjjz92wBNGwTv4Aa922nln/w0zeoQhhFLBU/bBa/hLDsOznO+//95DQSY1kHEYrrQM0+DACIbsQ/7sQ0egNEAq6tUvUWV1K54XFFaxsmZ17YnLZtqDZ4+0lVsW2aw+BSszW09otRMAuWi/chvWIf+fAPJrGk+XV1Y3yiqCI86DKcGY8BoBjrS1YQ8g9ttvfxccD9ny8wtc+REShMACLGlhhhAJJdgIsQBI1AEYAIQQi3o33pgAJEnSCWtQ8AEDB3k5CrXzzrvaEUcc6edYzkGDh7hVJnlGidMWHSWmjccee9zrb7nV1j5F27t3H6fWbdraBRdmQ6ADDzrIFbetQIAH2XLLrbz82eeeUx9beHhFmyTf3IO2AVQ86wgP4qDROWEdD0/ZyH/InTrp3u3xYLrPhclzkT333FNyyIZZAGRcMiX+8ssvO8jw1PAqeBogobyoqIqNGjUqqf+K5JWVWQAkQIIM09EBFLJP60GAJIAR+9CrOK5IFfWw4nlF4hozWB1bN7Tnr55l96wdLIAU2vjuBQdnpgwtnfHSNdPs8kPa2vhu/+xBfk3j6eNfqv9LAAnGBVUECLlBlSpVbNjw4S6Id955xy0qddMgQWCcI7wQKEQcPWz4CP/tm2++6d4j6qQBgnDvuPNOr7dgwY5+/hNABno5IVJ9hVx5+YW2bNlyL3tX4QtTvQAP74GChsLigSZPmeL12PA4WNsgkvR4uPnEE0+6BwIgKHjPXr09LCNR57kLoWAABAACjsryj7Jy9VlKPHHiJG+XDSBv7L4PPfywzwCi+DxQJLeJaesBAwY6n+FVeI00QMgNj05yww0bznPDlQZF2nuEfAMgcY4OhH5sCiBpqqhvm9LByq5xzjOQ3l2a2CvXz7HbTu5nJ21ZYMM6FuyaGdqr8dDnr5z692uP7mQzev2zB9kUbaojFSldLxgQTAhKAyQAA/OCubGnrJqs28MSJhuhA8LheniQoLByARCsIIqL9UfZevbs5W0SUmTzkOZusbHSH3zwgbc/YsRIVxYHiNpCQdmY5i0vb+WhCiHV1Vdnp3cffOghn6lCeQmDPA/Rnt+uP+ccr8Os0c233OJTqLfffofdKTACSGbO/vjHP3qdqVOnOVjbyLM0EBAvvvgSLydHQYkDGOE9AGOAg3tn86nss48NGzb4bx9/4gkP02677XbRbXab7s/++htuyN131OjR/hvCSZ4rsZyG7cILL3IvEd45DBD85XkT9yRUY+NhLHUBCHKpKMcABhQyh9KgSOtJGNO0TkGhg79FDyury0ezR/Rrbq/fOMduXLaZAJKvlCN/dqZb27pdn7x40jc3L+9u2w7I90/8VPxxUGWNb6xjG+tIxYEHOOI8zSwIZgZjg2BqRmEW65j+8Y9/uKIvXLjQ2+ehFQ8Do036ANAQpFs+CZPZFqY52S666GIPp6iDMElMCwoKc7NkWPKG8hp4F5QeD5Ke5uUZhP8JqKhMYHlOIRDbxVJi7oeyAg6UuXOXLq6EWOvum/Xyv3YAWMxK8e+69eo39C8EHqm8iu3cczdovPXURhtP5Pv16+8rBthWr17j07oYhJihi4kK+uqhlfrLcRfdl2Uhf/3rt9ahY2ePtwkDIR74Vate0w1MhIpMgMBD2gUonTp3znmRww47THyt4Ys9Q2YFBQVuPO666y6vA2/hIV53Yx4kQBKggDhGDiG7tF4EQCrTq8r0LKhi/cp+D7HMZPrIVvbmzXPsmqM628q5BdalNH9EpmWzGs0f2jDu0ztP7m27Di/wtVjx2m3FhjbWeGXXNlY3BhpACeYEIwIYYV2CkVCWwdnlCsTJCJXpz1gX9eijj9r+++9vM2bM8Pn+7bbbzpP50047zX/r3kSKxPRl9+49ctbu7rvv9gV+06ZNs23nzbMrrrjSywmBJk6anHiP7LMGZmR+epIuDyIl5T/Hm0tB6tVrYJv3H5BbJwXIUBCsO9Z4r7329nIsOFO7zVuU+4M9vBCJerNmzR0om/cf6JMAgIE1XSTZgARPNX3GTPd+bG8oRFyxYoXNn7+DT8fOm7ednXDCCXbllVf5k3gAwv2X7JOdFLjmmmsdEI0aN3HQZ6dsMRrwpI71Uh7EGivAwDMUPAT8IjknRIt1V3jI3Xff3ddwzZw508dJuMn2kK5lPU92dS/3DwpwhOFDjgGQiBiCQifS+gJtTK+CKl7bVP10OQCZP629vXXTbLtC6caJcwt+aN0ov0emfp0qtW9fO/Ld+9b0t33GF1qN6vzwp4Y31nhF+rV1GWTsoQBIMCmsSBokHAdTs4xO3LaIZyBDhg61e+691wVU2fb0009nFSEJuyBCNBTigQceSGr9fCPJnCCloB5hSkyXcm9icTYA1qZNOw+DyBOYOq0h4M5VQo1nY9tFAAaYXOdZAtuCHXfKPsvgYR6JvMh/r/vQFstHbr31Nq970EEHyzuwfJ1ku6X/rm+/zV3ZyR8q2wBW7969fVqaNiM532qrrb1/eCMSc4jQkvbxjHhPQi82FmgiH/e6ulakvI9lMHfccYdfr7gBnhUrTvQZNzw0fApZBVDYhzxDtmn5BjCCKgNIRX1K0y/pbMXydF0AsmTbrvbGDTPskv3LbPmcgq9K6uSVZ6oWF+Rfs3LIcw+fNdgOm1bF6tb6acn7pm6Ubjxdnj5Pl8e19GDTHiQsRzCJfZqJEAxOMxuCsfly8UxbkshiTVGqQw491Hiqy7ISlC+AgVUkfneFkLIwzTlcSfveey+xI488ypYu3c8myftgVQEH9VCk8CDMBqHQM2fOsknyLlh3iPALZUMpUfDRCv+22XZb1Znk11kuMnv2HH9Ax2wVQCDPaUUirmv+3rqOmV0CaH36bu4eYfSYsbpvvNzEi1sai/rGn5V26tTFTj11lQPlsMMP92cy3IOQiH7QHzwPz2TIZ/g9YwE0MaVNnTAeeEee0bC4k4kIwjcHjwAOHwityEl69+nrHvdQhVsHHnigzdliC5+1y1NSTriKfIIqyi48R+yhAEiAIvTilwDyr+jgxq4DkKMX9bTXrp1qFy5pasfNLvyoTvW8eopSMplzj+h39xMbhtuyudWsSb3iStdjVdaRjd2s4rX0eQw0GBFMSIOkIkBgJgSD47welskFgMumXh1fC8TyCR4cMoPCcSxDQchYcoQeT4NRNF44IlzDKJC/FCqxBDiEICgOFhTP4TNCCfksl9rknqybIr/IJcUonhSa3zO7xlQt4QoKXt9zDXIV1lBlX92NBD6IhBygoJB4C8DClC7t87vwJJQDYN5LYSP5B3gAnrAIIAAInkXQDrlOFhzZFQPss14x+xlSfgP4AQlhGHvKs0aFiY9sSMZ6N0BCjpHlcYF4ViSZ1ZJ8soBATvyenCgtuzRIoPAamwJI6Ae0Kb2qSJVd21hdKJNfZKcd0M9evGKinb9HQzt8etHLxYWZQgfIyUs2u+yZC0fZqvm1rFVJ8T+tx4qbbewGlXVkY3WDKg6e4wBIMCysSzAUCtCEELLeJGutyBUAQ3bJCU9vs2UICoCg7FAktVmvkgUCCh0LHDmP8CMUKWvBCbWw5iS/2dCE67F2CqBkwcJ3cbPWPspdWfX79JKQAAezUJHMc0wdFJd7putCnOOt6AMggXZbmH3afdVVV/uYo4+Ayr2GxvGTx/jpXY8oYwycZ71JNk/L8ogPNWS9bvCKc4AOr4LHWTkk/JaMkA08j0mDrIx+AkbIMW0MkXPInzIo9II9OvOv6OCvqU9KgSG94JhB9sxFY+y8RXVs/8lFDzo42A5d0OnU5y8ZY2fuWs+6tqjiU72V3TB9ni4Pquz6xigGHxSMCmYFxXkwPvbB+J8EEdYqC5zsNGTDJJz6+XSvW0wdcz3CiLCiHFcEB0qUVqrwJCgxSpgFRhYMMXsUYQznKHWAh5AnlB4wQFlQKRFX3ZiyzdZN1lZVqOuWnz5J2XkPJSYVTj99nStpgAOizz95jGyoxnEaHEF4kCwQsstv+B38glfBs7gO30Lx2XvoKuD8XCZZGUEBipBlGLqQb8geCnBUpMr0KKgyHdyYTkbduA44atWsbtedPNQeP3e4bVhY03YfU3R1Ao9MZuGs1ge+eNlYO3/PRta/bZFlCv650aB0w+my9HmaKqsPMeA0OII4D6ZVBEiAIyjrSX76T8IQBscIMISJYLOhVfbBVtqDsEcRAhRYWPZRjhKFUlFeVvbzr5xAcZ3j8BiUcY6Sh6KHB4jfB0jiN3GepgAc+/TvIaw5L4x9+uln/qCS0It+R1+ib/SbPb9hH5QeZ4wvwsosT356F52y4GHwNXge/GYPBTiy8skCKOQFpQEScg7Zp/UgdKQygFTUq43p2caupc9Zh9WkUS27e91Ie3DdQDtvt2o2f2jR2gQemcycUaXbvySAXLZ/qY3tWvgzgFTWcMWyNP2a+jHgoDRTKgKkIlMrAoS60X60RxtxThsIMwQYoAjBQwg0+kB9chLapT6Kk1YqlCysbyghikR/aBtFDgpwUCet4LRDf1DILCiy4KkIFohj+kDb3DPaoB4hHOEYHpN8izCSNqEAURgH7hkeI47pd/CCsTIGjgMc/DauRzsoO7yBv/CdVQ3s4TkyCoCEfNJGjeOQY8g3KGQPpXUBQo6hO3HfoHR5+nrF843VhVhm0r68nj2yYbTdfWofO2/Xqjarb9GhCTwymeG9Go57/uLRds2hLW1O338GyKYaT1PU/aX6ochBwZSgygCSPofZCIpzFIaPMjBbxKxSEO+d8yxk9OjRLmQULMARFALr27evzZ8/31/ZPfroo/3J/Jw5c/wBW+QZKFQoVigh5xDvbGwxd67fD6UMQGSV+Kfl5qHYLFrk7UCeI0R5KD7nEPUCIDzT2Hbbbf3BaLod8gtAwVt+zDzxGiyTBoRS1OP3PKeA6CdjRvHpe4CFc/bjxo3zerSdBgTE7zhHdvCDukwD89ELeLbLrrvasGHDvC7yASABkvAewWsIuSHjMEjp86CK4PhX9LCya5URy0z6dW1sTyv/uPWEbnb+rsU2plvhggQemUyPdrV7PnneCLvpmHa207Cf3gmBNnWzyq79Ul1oUwCBUWlmBSgCJDA4LBJPc3kYuKmNtVooBJYNIYfgiTtZWHfPPffknllUtgEW7osiBSBQKAglpB98GYSNJ+SDBg3yewVIItxij/LRl3hhi+lZ3t+mT1yDqMdv45y2Tlu92uvz1ZJ029yfkIg3E9kAHWEX18knunfvnnu4d9RRR4mfNXPgSAMEeuWVV7zewIEDXbkBSRgUzlH0JUuW+FL5jW1c457Ij/pByCxkGMch5zRAQu5pvYjjX6NXFcvS9TZ1jWUmEwaVGnn4jce0t/N2qWJ9WxdMSOCRyZSVVGv+wBmDv779hC62z4QiNUBDP28Yqth4ZTdLU8VrUT8GHUxIU5pRFQESFiiYzBIHPjfD9vrrr/sK30MOOdQJy8bSiT322NMBUV8JZACEPvAkOJasP/jgg7bvvkttxoyZ/gwEa80T6ddff8P22Wcf7xdKhFIFSFBOn9YV8XWUABkPy1BErrdslZ3dCkL5UfDp06d7Xbbzzjvfx8NUcIAiiHuicJ8mT+ZZv0X/ub8DREAgdwqA8KIV4yT0QrG7devm72WwsSqA9VEAmt/TNiCAWLAZABkwYIArdVyjv3iNG27IvszF++us6+IdElb6Tpky1XjexKrql1562b0pcmNMtBPeI+QYsoMCHCHroLRuxHFFHap4ni5LU8XyyuoCkHkTW9kLl4y2aw9raefurJCraX7PBB6ZTN2ahTVuOXnzD+45uYcdNSv7v+aVff5nUx2pSFF3Y/XTTEgzAgYFSIKBwVCYGwxmuQjL3rfdNguQW265RQPNiPJ8H89CmKNnZgcriHJxr3hLDqXZccedss9AirLrkzAMHBcUFkk5GvpsEYqCtQ2rGyBhCnnOnC28rdVr1tgLL77oCxzDa2DJs0DJAoQynv5vtfXW/hs2FA6vg2Xnd9QDHBzz0G3ZsmVJTbM33njDlZ9pXsBBf9IAmaEQCf5wH5Se5TQBEDY+f0SfmK4FQBE6MXv3cgBEHoQ2SpJkHTmg/Gy8EMYruPA4y9sq8uLFLof8/Pxk6vefHw4GSHKyS2TKnvZDBwIgcQ6FXoTe/JJepenX1gUg+2zTwZ67aKRddWAzO2vH4q+b1M1r7uBgK8jPy1x8xGbPPLC6t528bTUrqSclqZK9QbqhTd2oso5srH66PM0I9pUBJM5haprRCAVrz8YSCMBQq1YIAAuWjYUhLGHWGpa4orDxtpyG7w/9fMo35vl1zEPErCJlX6YCGOwBS9abCCD63XXXXedtdeu+mR1zzLF+vP328/3e/AZykEjhUWqAzRuIbE88kV0CcvbZ631M8ewDkKD8WGO8xzvvvGt/+OQT++STP1q79h1y7WaX6jfOAYQcgmdAtEHoxRuEfAHld7/7na/YZeOtQd6WDA8BP8hjeN+DrX//Ac5r+IEspk6b6uV8mogHkTxMZWzcB4IHznNXeECRLWM84UHSAAlZQiHbAEZQWifSehO0Kb0KSpel66Qp6mbyqtiyRV3s6Q1D7cqljWz1dsUf1KqaVyOLjmQ7be9ONz2yrp+duXNNa9Ok2B8W/lLjFc83Vn9j18I6BEPSDGK/KYAgBACyzTYpgEh48ZusgAIc2alJ7oUSsbHqlqfOASSWuGenOLNKg/JxjvJgpSsCBMVkvROL+/hIA16of7JGi3VUhDoxZRwAwXrT74MPOcTr7bt0P1/mTi7CC1P0MQCCcjFhwLZ49z3ssccfl8f7zr0C93eAqK9pgMySZwxgcv8uXbu5l3z33XetsxL4+AoMAIaf9I0xUvell17ya5v3769r2Xdr4Ndll2VXPR+iPktNcqCgf/wu6zGyMsk+oP2JAhhpuaXlmT4Ouaf1gePQn4q6E+XpaxvTs6CK16I+y5TOPmgze+ysgXbFPnVt2dzipwrys7jIbYds1/r0x8/a3C7co671apV9WFixsYoNp8s2RRurCwOCAhRpJgUTIZicJphNGLX11tu4AHmvAtfPq7KEJvE76sVsDJ+hWbnyJK/PnqlRyiPkINxgT4ILEDhHaTkOqw1h3ekbszhsfJ8LJgM4PsXJRixPW4DDQ60WzGZlQyzyFDbCwylTs9+cWq1EnL7yVB5PwpTvH/7wB38Bi7Vd0S4KTEhEu/QFBX/66Z8AgpICIBYN8vrrtwLIxx//Xv2tLeOQ/RIMq3XJTzAejI/fkD+w0T4KT7gEwAEXG+BnKQ8eAsUHAOGVaSeMUVyDGA+yqii/kE0AoyJAQv5xXFFvgv4VHaxY35ci1apuVx3fxx5Y09euXFLLDpxafH0Ci5+2HSc12/+Jsze3K5Y2tFFdq1Q61ZtuvOKN0lSxbpSlz6EYfJopwahgXDAzGBtlnOe5B8kChNkavk/LN5+C3nrrLX+ARl6BINnz7V62RYsWewwNOLKe46cHYRF+hAJEiBXEQkCsN++0Y6Gx1Kx3Ki6ulnvfnNyBPkYeQhsoLtaZkIpta3m/4qrV/VM/fKeqx2abubeiTnxUjokHicfuTN61YPElfXSACKiEhaxWZgMAKDAAo9/0i7cHWXXMB+5YTMh7JGzkbCgz3hXKAWTz/h4u0Q7TxvEBBiYRAE4Agj4EfyDAgAyRG8e0XdGDsA85QmlZB4UehE6EroRO/Rq9ivKK9Sury19CN29Sy24/ZXO7Wzn4VUtq2q6jildnUZHaJg1osOXjZ/azaw9qalv0rxwg6YbTVPHapuqnr6WZAFPSzEpblTQofjrOepAIsVBUEmTeS+BFJgjB8j4ID7MQIveJT/ks2HFHJeJZD+IhlQhrCnGMlyCEwtKi2FEHRUfYEapde232HQs+GsfXFUMp+dojHgNAhbVH+ek3H5xmmzlrlit/fBhhxYnZGTDCMcKh38uDlLdsrfCtmi9vZ5s+Y4a3wfMO2gTgOYDMkgcBIA6cRv7qbwCENVu1atXx+hGSseqZt/7IuyIH4XOoeGDGyMreeC+FiQFCK8/VEkMSYRTEGJlxg1fIKQ2QAAeyC/lVBpDQASgNjqBfq1eVnVekuJZXUMW6t6tvD57e325b3smuWVLdZm9eZd8sKlJb3w61Bj20trfdeHiZLRxdvMlXbyvryMY6U7G8Yt0ASZo5wbA0AwMgQTBd3ZYVznoQYnlP0qU87u4FCAQfFg6rx8pT3iBk48vozMRwLZQfwnNQt0+f7IfceF+EOj7bIyL8oi98oJqNqWH6gWITYhHmXZrE7VtuuaWHLygPBOhYDUtf2caOG+8rh1Fapop5EYoPwvEQjo1pap9Zq1rN3/FmY3oVD4MiAtafeRABBOvPNQDSpWvWAwRAmHxgBTBvRDI2ch++M4xn5f0XNr6mAr8BA0vweQ8e48MHHlDu+vKU4T0ijCIX5Hu9bIsXL/bpd8ARcoLgGb8PWcZ5lAUoYp/WlzhO0y/pVUVKX0vXJUEf1bdE+ccAu+noNna1ADK8c+FsB0V6Ky8pbnXHyh7f3nJMaztkWvadkE09C6l4w3SddHnFuhUpDZD0MUwL5rEPpgZAmDFRt5WDZKdMea8b5eTd6OxSkWx9BBWxMdcjdOG9bgSJxwjlD4Ag0F69enu9J554wn9PSJUNuxr+bPqUB418BZ5ZIvIgPhUU1vj666/3+wKMAAi/p002lJPQrFq1Gv68hm35CSd4qMhnc9q2a++AIr/hvQ+2Pffay8eG93CAyAgEQAArQCVHwUCkQyxezuLegLGwsEruO1tPPfW0K/1zCknZ+vXb3Nvn94Ak2uZ9Epa4V8w98FgYGh5Esu2l/uHZAxQ/l9lPIXKAA6oo+ziuTF+gX6NXadpUXaZ4tx7T3J5Q/n2DnMOVe9ewbi0KNs+iIrXVqVFQ8+qjOn1w+/HtbOU2VZW4ZJ+FVGx8Uzer7Nov1WdfkTlpgKQprI8zW6Ru5wASs1iEHyTCMfWIQBEke+7FbBEzT+QsvFhEm4AEgUd4hXCpx4Yy45EoxzIDQEITNp5h8J43lhiLHFaZj7NxD/IK2uH+noN4HtLMH2pyHRDyPgpTys2bl9kbb7zp7bIdrxwG4OCxMFTxtRC8CgoM2LiGgvIAkY0cBI9EX2k3cggAwvMT54XGCSgJC+O7XzzDiY/e8bcJTAPDDxQ9ZtKuvvpq/w4AvEkDBOI5SLzPzmeDOA+ABDgCIAGOkHFQRR2A0npSmV6lz9NUsX5lvw/KZKrYPnNb2WNn9LXrDim1i3av9XWzevktsqhIbfl5mczZ+7R54q4TOtpZO9ew5g15YLbpxqHKOrKx+hXLo26aORUpDQ6I458AkpcLsZha1TBy9yDvYIaCNrCQARLCsPXrs18W4SMDKBOzW7TLdcIH3pzjGQJbfHIz3icBREwAsGFVCV2w9HxwDWqjsASFj6+XHCnLSn8AFwrNC08oLOAibEHRKEdheSOQ3OlJKTzfy8LiAyy8QnwH7OSTT/GZOjwIXi0NEB4UYiAAIr+l/Z88SPbTo5QTfgEkvoL48e9/76sAADegxYOgxPAMPvCQkz6xsdoA0MDjkAME3/lTHTYAEkCCog71AyDIMeQbco3zNDCCQk9CtpVdr3i+qbrpa+QgJ+zWzh5a08uuP7iJnbVr7XdrVM2r5qCouB2/oPkV967sZBfvUdu6levHv/AJoE11pCJF3crqB0DSIInzAEUQDHaAaK8u5wDCJ4CwmCSZm8sK9uunff/+yiX65BJKQIKyEWbwgQc2ZqJYKtGjR49cGMQDPfIHNp5xkLRiebGsLIxkQynJOaDscwEentVXv4jJC234iJFe79X4kx4BhDCOvxnAwzDVypQu7TKLBkjiASV7cgt+h7LjMfhaOts5554rvlT3JN1f75UiP5WEQZHA8xvGy73SAMGreDgpoAMSQiY+XhcbCTkLN7kfPKNtvPIUjZk8hI0JBpasMJEAHwk7eXbDv2yx7bnnXi4XZBQAQW4hR+QW5xXBkQbIv0OvKqN0XTwzH6w+98BOdt8p3e2Gg0ts5Xa1H5KvqHzbfWqj5fev7GhXL61nI7rK/eRvvPHKztNU2bWN1U1TmllQGiBhgYLB6nIOIBvbeAKMteU3KDEEYxAun9X5UVaTDStKQsqT61AGtruVYwAQLC+eJKaJ+Y8NlqMQrqDkeBh/sKh24xVXPAEbK4UDRHyHi3tlF1Fml7Gj6Cg1HgFgAJJ4UIkyA8J43nPDDTc6UKkfOVHkCXyVBb7gregTH74GIPCAEAulxwvSLsqPR2HqN17b5eswfHwaXv2UiCuEUhJOYk9uFNt3333vvGJiAc8TGx+pQC5hyMKY0a+QXVCAI4xhEHrw79KrivXT59nv8dawa4/paneu6Gw3HVpiB86ofbGDobJt5qA6O913Yge7/sCGNnfALwNkU9c2VRfa2DUYlAZHMJE9TE0DhNW8hASnn366nbpqla96dTrtNH/wtk6CZ6UtSsjvImZG6HiSfIVW5AHMwJBQ4y0IqUi6icv5AASf5kSZSIZR6OOPX2Zrdb+OHTv5WiyUyBVPyooXQGlRdJSaDyjwV2e0wz1RWqz6unVn+FfgqYeXiIQbMNCOew4RygzxO75kAqBZUQsosgBq7IAiJ+K/Ccl3mBQAIIyZ8OiUU0/1P7ah7Ww4l10pEDkE/eS9+RNXrnS+ESbihfBA2TqAva7PABKWAUKepRCekp/xmZ8rrrjCH5qOGTNWxiH7bg0ySgMkKC3POK4MIEH/Vb3aVP38gmLr2LKO3XFiN7v1uPZ26+FNbMGomkcmcPjnbUCn6iPvWtbWbjykse0xvtom3yysSL/U8TRF3Yr100wKkAQDg6nB6CxYavvv1PWNElOQuHpXUAfHT0shsOp8zoZ6eAM+lgbxbADLml26ovxDSojVRTEpIw5n+hYFR9lQumyOkZ3pigeJtEU73B9wofQAjWlb4nuUFmAAkKYCV3Y27acyT+z1G/Yoqr8a6gqdrQsI8Fz+ITddQzm5Rh8cPLoXv4kvHDqwdE8oC65GHnZ5PqcxeV8FhuAP/Mp6kezzDu5NWOb80p624zx4jeFxUFQCDmRWUZ5pGUNpfYD+HXq1MWKKd+hmDez+U7rZzUe3sVuPaGoTe1ffVmOpfGtVUtT2hiPKv7vpsKZ2zBbZla2VTfVCFTuyqY5Vdq2yumkmVcZEGJwFxk8Mj+sIhtg5iOtYQpQT4aI8WVBQlg13IMIMztkH+TXVzx6n/28k+2EHFC+UOQ0OV1hR1pPIiidKGHW8ngjrT1vZuj8tY+E4wJEmyrlnhEhxvwAnQKMvuXO1HZ4tex+d+/HPXxjjnHL4EzwJzwJFmBWGBfAAEngdy3ngNcfOd5fLz8GBfKCQ3U/y+kmuUMi9oq5UpidBFetGWfo8XV6xPjNYW45sYg+e2tVuPKqV3Xx4qfVqUzwogcM/b7Wr59e8aGmzD24+vJmdvmMNq1+bPxb56QbRcJxXLNvYtU3VhdLXKgIkmBlMjvMASfqaC0eUde3ZBJE6WeGH18gCBoscisAxyhFA4TzCi1CULCB+IpQuFDaUFYXjWlaBs0ocYInfBUhQaOpzXhEQlEXdrBdJPqagMtpKl3MPrgGgbJgngKge3oI+Bngoo4/Zaz99yILfBW8ohxhXgINyNzAp/gEG57GOc3x2XqdXOmwcIEHIOE2hCxvTlYrXfkvdKEuf40H2mdPc7j9J+ceRLe3qg0u/bt6g8J+neGPLU/q+audGjwAQZrJaNameW9W7sY5AlXVkU/XTFHWjfpphYVkCFAEYKAQRFAKp7QD5+RQjxyHgn0CRtYrss2DIPkyEQklcKRNFiuO09Y06WSD8RChuACetxFEX5Q4FTyt6lIcis0/XDarYdtq7cA7FcfSdcygUH4o+xe+hMA5BWe+S5V/wLPj0E4+113EApKJsKgNHyDb0IH0clNahinryS/RL9fk0akFhsa3YpaXdvaKD3XJ0Kzt/n9K3alTNL07gUPl20Ky6F91yeFO7dv/61rd9TeUhVdSgbuI3+mcqLual/SzlyjmO8/TvqFelyCl3XfSz34oCIEzBxXGNGoknScCSFcJPgqhdG0FkyzmuU4f1QAAlu69XT1ZQQq3vgkbI2Wv1tG/QQF5C1ACwiBo2lPJAjQBAlrLX6nl5SWMpnIhy9k1KUGasO0op5VY57VG3qc6bNkVhs3U49rKkHKI+bdFOM51DXld1OM7tk/JGUmTqRzuUNaYfOs6RAyJb18ej+tSB4twBkrRFGXyAR/CGYz+HbyJ4FscQdeAzMgh+x/nPyGUCKAQIKSUyrV4doydCvi5vlPYn+UOV69XP66Tpn+pCm6hP7lmrZlXbsLS18XD89uNa28k7N70ngcHGt+2G1zjslsNK7OZDGtn0AXUtk5/9CngQCSbE91erVuXrIanzVD0nrhUn16vVcGL1KsQXxatWr6Uy7f1a0rbnPIACC5OQew2YjBVK4l0BwcscKIl7dwsmsMia8c9NTLVGXkH4hKXzvIKQSkQdnl3wtcOfiHidsAOvgvLgLXgynS3nw8+NSxQCKdRhgWJJk2ZexmwS5U2a8iITa6QEFCXqnPu3cJs1z5LOGydtRBnt0Ea2blIvfU1tsU+37fV1TFmW8DyswSLvAYyAiXP6Tr/xSvJkEL/38uw/1PpzF8aufTbvypYx/ixlQ9AIqYKnvGgG3/0rkyniWRDL63n46fJSHWbAWAeG3CnnvxE5dnK9CD1Cd0JP4jxb9nO9ynoB1zs/j9+jaz/Vy9VN9CqIyKisSS279og2dssxbezu5W1tv9mNz0hgsPFtVLfiOTcd3FAAqW/7bL2ZZcp2sbxW8y2v5TzLK9/G8kpnWl6zqZbXYrbOt8qWlW+rOtuLdlA91W27yPI6LLG89vtYXpt9rLDjgVa151FWo8+xVqvf8Vaz3zIr7nm05bfbw/LKtlabaq9khOXV62l5tTtbXp0ulle3W0JdLT/2dTpbfr0ell+/t/aqq7K8eptZfqMBlt94iOWXDLf8JiMtv+lY7Udl9y2mW37ZbMtvrn2pqHxry2+zkxW021X3X2gF7fcQ7WkFbXe3gk5LrajbQVbcVf3ttJ9V1752nyOtXv/jrP6A463hoOXWeMgKazRQe1GzESdb6chTrNngldZ04InWfPgp1nLcams5fo1TqwlrrdX4tVY24jRrNe50az1xnbUcu8ZKB5+s35yk355qzUQlw0+2RkNWWoPBJ1rdvsdbrV5HW82+x1k17at0OcQK2+9nBR33t4IuB1lhlwPUz32tsJP42mFPK2yzixW2201j0FgYV9k2oi2toNV2VtB6e+23tYKWW4lU1mKmFZRO0fVZohmW32xCjl8FpZNFk0QTk2NR0zF+nt98mng3RXXh63jxdKb4uKXlq938lttYvu6V33JblYna7Gz5bXez/NY7Sxd2lPwXWn6HvS2/4z6ifUVLLa/jftKRPaUf0hGV5bXfW7qzm+rrN6qfp9/ntdZv1W6e2nddazbF8prPEE2zPPUjr9FQy2s8LHsMlYwWjRKNtLyGg3R9SFanqNOgX5Ya6zdcV71M/bE2aOBAu/P4lnbTUa3tvhPb2zYj6++dwGDjW6fSgl5XL61rNxxU307ZvZtl2u5lmTa7aw8t1vEulmm1o44XZc8p77CvZToeYJl2++lc+45HWWazky2/9xorElXrf6bVGLrBag4+16oOXG8FPU+2jMCTKZ1tmcbqbKPhlmkwyDL1+limTg/L1O0lEjiher1FfbPHdbpnzxsO1m+Giobo9yMtI6E5NZtmmeZqE+KY9lsuyPZTYPSxdDpQdIjoMMt0PdYy3ZZZXudjrUBU1GOF+rraag463WoNON3qDjnTGozaYA1HbLDGYy6wJuMvsqZjL7SSYRusybDzrcWES63l9Cut1bQrrXzSFdZmxtXWZuY11nr61dZ29nVOrSZfbeVjr7Dy8VdYa11vOf0qaz7hMms67lJrot83HHWh1RtxvtUZfp7ue7YMyWor6n6KFfQ6zfLEu8xmp1imywmW6b7C+5rpcrT6LepyRJbfrTSu1qL2kgE8bYOMFmbHLCXNtNopS+XbiyezRNPFny1k+LaxTIstxaMZ2uu8xVyVz1H5VqKtdUzdKdnr5fPUxg7i5Xzt4afa93twX90Tai09aL2njsXfLkdm+9hZ+27Hq+/Lda6+M4buJ6r8ONU7XHqjMXTVcTdRJx13PFj7g7LtubySMTRXP5vNVB/pn/pGf2WkvW8y2Nl+St6UNRmX1adGIyzTdKLKJmsf+qF6rhf6XeO5NmvScLv7+Ba+ivfelR1tWPdaExMYbHxrWCuv4XkLa35+/QH1FJ91sGoddlUnYYiA4aRzmAMJ8RkhP9NhqQYthWOQHcQUMaGgz2lWvPlaqz7wTKsuwRf3XWv5ncS0NmKiLI13vv7mUvyeWQIYACBIniRTu1MCEgEE8FCvQf8EGGKCrEYWHGIKx03FDAQsb+cKUC6BAmAYLguc6Sxg0M/2EkT7Q62g+/FWpc9Kq9rnJKvec4XV6r/K6g5dZ/WHn2mNRq23kjHnWsnIc6zx4DOtyfD11nzihVY26SJrMfYC0YUCxmUCw+XWZrrAMROAXGEtpfTlYy62NlOvsHazrrLW0y63FmMuFJguthaTLrFmEy6yknEXWMPR51m9oWdbrb5r5FlXC5hrrUq/1VbQY6XldZFC9ZAidRcwULCux2SVrr2MT5u9tccgaTyywM7/NjJW7TROlwvyklxaChClUiiMhLy8kyu9lAhFc1DEXuQKNkl1kvooIr+FjxhE2myje7mR1P1c9rqf90X9kpdzwAJcwEGfUXz6j9wBRGftOe+ia+0li46HZut30r6T2sDQIi/AzH0BJOMIQITxkydxJUfZkb3rwljJX/1vOkHnAgdegmMnyqUbAIRzQFOypS2eu7ndeUyp3XKscpDlHX9oV1q1YwKDjW+F+ZnMydtWe+6apXXsusNbWVkvKXO5GONMlxVhzyDaSdFbwywJjAHCDAk1r+epViihF4uq9l4tkKyTNZTHaKfBY8Gw+Ch4fSk9oKgtL1W7q2VqdRAJEHV0ngOICFDU7ydgDJDnkJdxzyFqqDbCayhEcyaUqn0sHYJEYVAgFAnBdRAoJLR8gaJQAqoiy1VdwKg1aLU8xelWf9gZ1nDk2dZoxFkKd86wpgJH6YTzrXTMedZ02DnWfNR51nLKJQLEZQIEoBDNuNxaTrzEWk261NrOvNLaiVolAKGsleqWT71UwLrYmo6/UKDbYPUGnSkQnm21h5xl1WVAinucJI+xUjw6VbwTnxwYsrbws6PATL87o0Da4wFRyjZYbvEdGbgnVxlewpVKCoVioeB4C/iDd8BbpEGhcNNJ4ZgbFVc4wKO67ikAhdp0gyhSuOTeCZ62071bYd11/46y+F2k/F3xGooc8MqddNwR78E4BPZOKpdB8nKuhwfEWCn8dg+IN0Jm6Bd9DS/nYOUcYEi+yBlQ0FeoZIz0YVhiIGV0nQIY0o+IMMLL8HsH29a2YmFXu/XIZnbH8o525REdPqxTo6BWAoNNbwdMrXrl1fvUtDuPbWGDR4pxZRICzCrbTozSHoscoUpnDRQXKq+RL3AU9ZPQBYoqm62y/M6yFu2loDCbDjYcmA2RAABgCC8BOGq2FbXTuQAS4VWAA08DQGCEAwyQ6LiJmFAmgRICQAFemK041xULKyWPkd/xCCvqeYJV2/wUq9n/VKs9YJXVG7bOGggYjeQxmggQTcduUPh0lpVIeUtHnWvlU6To0y6xlpMvlie41AHRerL2AkfbWVda66kCwJiLFEJdbG2n4TFUJq9SLkCUCUylAkWJPEVjgazByHOttgBRQ0Co1vtU8WiNFcrL5stjOCgU3rllxfKiaPAW4xPhE14aUKCkhB8YgbDs7FGqZlhWKZF7DMIkwJAAAqvrx6rHPiyqAwK5ipyHki9tOi+Te7USQMop0zkGhzAIYKDg9BUdIPRzbycAtNc5pLA1CxKBvTPgSTxhR0JcPIi8Bm2WKWzD2/t9NRYiDEDrY1AI5ZR4P0JyPEQoPeMAMOE9mggwDhKdAxrXGf0GI0o7zoutrWa7uXbBfq3txsNL7d6TutoZS9o+lKj/L2/bDq5y1NVLatjdx5bavC100xZiUrjWdrIgWLPOshqJ18jICuZ3WWGF3WQNFUoV9D5NdcS8MuJeJeCy9nkeRuEtBAjAUKNVds85QAEk7D0HUV1CKoBRXyGVHwsogCMGD8HEVjBWQqV/Yd1ai9ofZHndj7NCgaK4xzKr3vtEq+3eYq01GH6GNR51tpUojGo8WMeiUoGjbJJCqAkKn8acb62k4G1myFuI2s4UIEStFCIBiFbyGu0FBqg1nkLneJZy/abFpIsVRmWBUX/gGVa73xqrPXCd8oszBE7lFwJEQc9Tst7CY3IZF/jYSfxsm4QproBSHiWyWUDIc0RMjrdAkVoQAknR3WtIuT0kAgRYXkCgvXsOEXG6W055DJQOBWyeXMPj5kIotU37GMFylZF7EvZ46COediC/kFxzYZQAgOK3kxEin8DzERZ2wYsAGI3LPQagT7wG43OPoTEBeDwgIZV7LfXFjV3iNRiPEnAnrD8eD6Po4ZSA4ZToAuAAOBhPvEpc49hDRwHMeSOdaT7PWvec4e9/3HBYC3to9WZ22Lyy9Yn6//I2skvhFlfuVc3uOKqp7b+TblCOwhGuSGhYZSyGJ1gSrrxGvhLKgm5KyrsKLDADVwlaQW/N7tamyyhr01kdL26Z9RI12og4BiB4kS4ChsIsz0PkOWrLw9SVpyFxJyH38Ep7mEC7MA+lABiehCo3wsK6VTrE8jocorDlWKvW7ySrOXCV1Rm8RiHUOiXbCqOUgJfIY5SO32DNx59nzUast9IR51hLgaO1vEWbGXgKQiblF5PlPcZdZG3lMQBD26kKqcbJmwgU7QQYwNNq6iVWJg9TKmA1HrbeGip8aqC8pe7Qs6xm39OsmoBQ3GeVvIU8KqFm5BbE48ThGBqUrgPWFM8gUKCQDnZCKPESb1GeWHiSZMIovAMKj5IDDgSfAwTWFu+AQugae0ItwhT4hiJiqdsACsIntdlKx9wPpcWqt5Li4rncGErmHkYl3oJwCW8HIEiyyTs7cU4kASVeA13oAHhoQ2ME+IyvpeRFXuvJPpM+yZgcFFh6lFnjAxQoOADxkErn7JsmnqOxPATeIUIrn/Ah3MKjqI6H3+IR7TF2AOfh5A7Wb/Bku/nQxnbDES3tsXW9bf74Jvsk6v/LW4dm+ZtdtKiq3XRII1tzgGL9dlK+nEvVoDszcPbLLU/gyFeu4YzBuzDIhgIDIRKKX9DCtt9xD9t+gZie1zQLkJrts/taHROAyIvUBRTJ7BUhGABxa0AiTswphkS4gKK4tZPyIMjWskYSQr48RpXeK6x635Wy2kq4hwgYg9bIW5yl8OkcazJS4ZO8RVOFUWUTL5ByK4RSGNVa5IDAa0jh28263NqRXwgMLeUx2iisaj9bOcasKxRWyVuIygGFvESzcedbyViFUAJE7b6rrWbvVVa9v/IvUVEfGY/NTpK3OEl8U/gB37CohBluSaWM7ZIJBACOgjoxLgHfJ0WkuICDhBnFR+EjBHEvIX5HfA7vXQGkFCgIZfwW68weTxGzkPDPE3ssuO7RUiD00FlAJXyO3AIAM/nSjXBJSq9QNdOOMgEcoBMakmcEMAA+4OmGfqheW43LPXriiRhfLq8RUD3PkDzdA0r5PVxKDKHnRSg64OCawir3FtIFjgEDOgKAwmPgYby+znOeA8MhHkVIWbqTzZo4zG49tL7dfExbe2RdXxvao+64RP1/eatXI6/eGQuqfnL1fvXtumV9rF5PLJrAAYOcKYqb8RabnSrScUcxFAsA2gmP8BDVy0XyEtVa2YkrT7VlJ0hJquM5yDUEEAdHkn/UFhF+kbgzS0VoRSLvA4dZID8RfnNRuRhL2OF50KHKdY6wKr1OUNJ7kgOj/rDTrdFI5RaD11qjgWut6fCzrMXE86180gVWplCqpfZtpwsM8hjt5AXazVIYpRyj5dgLRRdZO3mMjrOv8n1rhUxtVQfv0nLyRfIWF7m3aDTsbKunnKLugNOtztAzfWq4qgBRJC9R0FshVHgKlKYLYYj6irKgeFjl9jqOZLu9xuLhkyi8BUkqyu9Jt84Bg0/D4hEST+H5BN4BJUqE78ompeMYYOApPJ/AoOAZBBDCJ2a/AEQHwjrtmYXy6IAQimRaCu6zTTqHukj2PTQewMA0bTfCwwQclDNOkvC2Gh+zhJ6Eqz3aJlT0MQqMAIP+MK6YonVwq7+AAk/gEwiAA0VPvAZewfOJVJiNvqXDKfY5MEl3PDRTOxFWoj/ct8VOtv+2Peymg+vZ7cs72b2n9flbm9JqbRL1/+WN12+Pn1v18cv3rm33ndLNuo2WEDvACDFEFpGwyvcwAffINBvJN96gZmuBonmWCptZq46D7NJLL7XLL1dI0lkDLFJ5DdUBIB5Wycvwu3ryHg2UxLvXSGYePOkSY7CQPjsl4bbE+ojhCqfyFUYV9z7Bamx+stUZpKRbiXeDgautyWgl2ePOlYVfb83wFuPOk9WXJxAo2ip8akcIJS/QctyF8g6XWAd5hg4z5R0myDuI2st7eAg1XfmFvAy5SVOme4ecaY1HrrcGI862OgNPtxoCQrW+q6y432lWqMQ7H08BjzxRJdxD4bC2Om4r70q/3ZKikFIYzyukNFjSFuQS2sNPFBzlcW9JPC4Bu8cQIDy0klJx3b0JdaVgnpwnXsLzCfhEIo8HUhkTF9w3ZqBQ3IrhE0AmfPrZDJRA0pF8IjGMEM8yAAegIdR2j6Fjwq92TD/LC2E0Y2LBPZVk58BVn31CgH4LCG7lNRb3gtqj0JFr5MInjZdznm3kZqsSQAQ4CLfITQjLMKj+/EPlAI9pfzc0MhgKJ/PE41N3a2vXH1jf7j11M7t2Wc93alUvrPw1241te4yrsuGyPWrYQ6d2tPGzNcBOp4g5UoDuYpAnZhIwAyKBronHKEu8hvbVWmT3mcY2a+4Cu/baq+2G66+zabMl/LwmWQ8DKOoq5wAYPOfwKVx5DQACMHxePrEgKALWD4bLAud1PVIeY7kS7xOs9oBTlHSfbo2VXzSWxygZfLo1H6OcYvIFDorWU+QRZggY0xRKTbxIyn+Z8gkpv4DRSh6j9YSLrSMAmX2Fe5O28hStVbeFwqZSUbPxCqFGnWP1+q+12sojavVfbTXklapuLlDIWzgo8BSEHJ6Qat+BWFuAILElfGJGLXIKCAXOhTviCQkzCg4APEmVteM4wigUxj2o+OAAEV8AiOckCag8p0gA0Vrg8HtJRkwLtySc0v3JAXgWBGAxbj6jBDjUb/d0UvL2lBE+YQwTQEAYxK4aZxfVi8kFgNROIGM62gGmtshT8UoYgNYanwMVr6W+8rAvlzdpPITMAQ5AH94DmfsMFM83wkNA0gsHhup5bsKxeME5noXfoDfwLCIOwOGzeuIpvGq5o9XquJ2du2epXXdgQ3vkjM1t3dIutydq/+u3GX2L9rl0cTW7/8Q2ttsuQl6nVVmmtNHAGQBJM3kD4AiP4VSaBQhU3NwOP+JYu+zSS+zaa662FSuVq9RMnnf4A0CBg9kpfzIuZsQTcgbMAB31GhSWFsbL/RdudrxV77fSaiucqqtco6G8RjN5jBYTzpWnONfKx21Q6KTEWkreTh6j/SzlDyTT4xU+jVFoJWB0nHOFQigBQjlHO3kJPEprhU4tBaYyhV9NR59jDeUh6gsU9YaeoRDqDKvR/zQrFiDIKwqkOHkePokf7i2kJG2wllIMrDJ9ZZYGax0zNbnnFRoPgCCEQmkYYyi+ewoUBwFLuJArDGGIlAjL6/UlcKwhiufhk9qGR8w6kQB7PkGCTS6hvjDVjvICCLwE1p4pWYAAIDppDGkQ4CE2Y0JB55RBeJAOeBja0O+788BPv/eHfQJIR92Le7ohUF/cKzIWlFR9ZqyMgVygTONzYMgoQB5CMX2bhE/oF4DwZDvxBHiQAEpjgQN9wWu4sYBHKieHgXfuecNT6b7+wFTk/djV2veZZVftW9euPbiZPb1hiB04r81Jidr/+q1P64KxF+5WbLcfU2arDlMHYA4WAZQSFjED5d5CgKjaLCF5h+IS7VVW0NTK2/W3Cy+8yEOsa66+2r8OWN5JjKim35OQM2OF92CwhFIwBMLCYBURPHGyrJ7nGRJwrb4nymOslcdYZyVD1lqzkWcqp9ggT0FeIVDIWwCMVuOVhIs6SPk7zr7c2jNDJQ/CeQflHB5mqX4reZkWPP9Q+FSiXKXxqPX+0LB2v1VWo69CKHmKKn0Fil5KtjeT5USxOhCXY421hzpIAT18Ul89fCKsIHwi5pdlJ6xwa68xISTAALllAxQQgJBCuecUcc5vHCTUlbD9GYVkEPlErGbw6ViBE29FKMekiucS8hJ4tFyCjUJzjneQ0gsIeZ2PF9gFDsJmJxlC9pR1BATyGJFP+e8FEJ+2xWPoHnglPDuzUuV4MvXPQ+FknO4JNU636JKrz05Jn5AzSs8xY3b5S/ExBii9z1RBSfjkOgJIEk8T4RfhVHghB4fah385gyJD4vcXj/GyLRba+NEj7Yal1X0G69kLhtuckU3nJ2r/67fS+vktz1pQ5a/XHtzUrjtppFVvLaTXG5DNHRRK5dcss/zqAkVhQ+UVAoVTY5030l5AyTSyqbN2sJtuvMG/hMEnOm+/7Rabs60sayF5h4BRC5DgQTTYEg28ySwrbDXPCtuTyMkKonSyfEU9l1n1Xsusdu8V1nDwadZsLB7jHCufeK6Acb68BaHSBdZO+UKH2QqhBJLWAkcb5Rgd5D06bYHHyJYDnpYTzrfm8hItJjALtcEaDjnD6iqPqCMw1B601qoPWG3FAkehg0LKQfjE7AzKhuK1laXkIV4opcf2eAzCJ/Xdk2NCHSm05xMSVngMV/oABMqPgBOwUE7o5OGTQoJIsFE4jAUzTp5cc2/1gRDOnylgRLDkiYdAgQGyh30CAB5PlC9lz++8TB7wJOVMTD2fZgXasyyogOn6bngR8kuF04Coo9rBu5CLkJP4DJzahweefGvM7iEFVp5l4C08D9L4Uc4Yp4dQsvDuMXSMkvvsJDkDHgCjoH2Ag1wi7T18+haA8HAwqQ/5khMBjDoAA2ODceWBKTwFpK2T8NMJeSy03Wb1suv2rWq3Letk/LNan051+yZq/+u3qkWZohVbVXn9sn3q2z1rB1tpK+ULPMcgjKpSYtXqtbat5u1ihx95rB106FF2qEKpQ484zg45/Fg74ujldvhRy+2cc8+36667VnSd040CyxVXXWOnrt1g69ZfYmeee5mdc8HVduHlt9jl191tdz/wlJ145s1Wt5eUrnx3y2t3gFXtebwS8FOtobxGiXKN5uPWOzBaKaQCGO1nKPmeeIHCJyXiAkVHeYfOhFACRgeBAWC09VzkQmslAhQlAkTDAWusAUtMhstbKHepLkBU7XeqQijlFVhLn7EhDFFowgM8ZqCwlhChBIAgnAhLjlVHmVESLL4no4mieMyNsiBAXXNwCBAIEWtHbJ7zMMTJIn9GQLtqn/vgnfz5hMg9RJJc80A29xT7OMvrscKnlfO1L5B3KOy63Kr0PsUnEngeUyV5il+lrzyjgFHUL/tEv6CrvEknQKBx413wGl1oU4QHYrKBexK2MfZyKZs//U48BqEjIHdgaHyRB7hFl6X3GUntwwCg1BEeeVgV4GD6VmAIj+G5ier+LC9VWYRouWsCBUbF708/AIdAEQ+SnSSf8t3s8G3b2zVLqtq9q3rbPacP/bSkfnHDRO1/27Z0UpXrL1pc0/83YUg/5Q558hBVCaHkIYoaWc36rW2XhXvb9YBAifhVV13puQbn7Jm54jM5fMGPL4Xwcbf777/Pnnn6SXvh+efs1VdesrffesP++IcP7es/f2prz7vNGvZVDN/uQCtQeFBd4Kg/5DRrPHKdEuazssCYfJ61HCvvoVCozaTzBQiBYKY8wySFTwJEpzmXO0g6qLzdDNZEnW+lCp2aDjvTmo5Z70/Q6wsQtQWGWgNXW/X+q9xbeAgFKFg35IlnKGAyA0WS67MyKCvegphf3qKMhFoCiWQ5FD8SwwAGFPE2yoMAobC6nswKEMz4uDcS+TMe3YeHiCgnq10J7RwQ5AHLPOyj74UCRFFXXiNY6WGhk3Kman1OkUfEK0KnO1UDIAJBkUKsol4KH+VFeF6TTcAFDGbifBYLjyGv5MuFmIlK+uYeQ4qH13BQJ4YgJhdcqZPwx0MqKbZbfyw/ACGsSggQ+OLCVDKOd8GLOGhE7mWoTzuEZngenWN4vH0dA0rnqfpCnwBHjr8yPgBZ3rdahwV2+i6N7colNe3x9UPs0mM3f5w/kPqXtrn9i466YLeq9si6PrZwrjxIpoG8CCARQKo2zYZUeQ1s4Mhpdvb6c+zqq6/0T8AQUrG/8sor5TVu9G/W8g1bPgTN/1w8+eST/i0nvmH7ye8/tNfffMdm7qrYt7EGJnAUKqSqNfAUazhsjTUZfYY1U77RQol4G4VT7Qinxm+QxzhXSfZF8hbyGFtcbp3kKToqIW+nBL1c11rKU5QDjjHnWCOFTfUVNtUberrVEThqDjhN3uIUK+otS4uFBBTpGShCFhJuElyfgeI8CSV8KlbWKKzmzxLuREk85gUoCic8XNIxsykI1FfIqo6HTgqX8BSADcVrTbItAMaDOryWvKjPGiopBsD5AgShX5FCvypS5GqbK1cS0GsI8DVUXkv72oNPt9pD1mm/zmpBg9ZZDXmP6v1kEASUqtpXkYcoUuJd2FMes5dCKmas8Jwk3yx7YarW+6HxAwzyC1+wSPirvgcwGC9j9Bwg8Rhu1QWI5lJcyjEMPn2beA7WS7nyJ8CJldn+cC8BhXsKUXgezzXUXixdp814vuG8FxjY0wfkgsegf57/YYAkr5aLrE2vOXbpHtXsqv0a+p92Hr+o6zmJuv/2bWD7ghkbdq5id53YxU47QPlHnvINT8IFDkBSTTkIIVemoTVu3l3h1vF26y032Q03XO/A4K8G+GYu4Lj//vv9a4Z8kZAPkL3yysvyHB/YNbc+Yq2HKUxoKmXpdKhP39bafKWDo9nYM5VAn2XNh6+zshECyKTzrMPMi91jdFCC3UngcO+h0KkdoZbA02L0emsq5SiBRp1ljZTE1xvMeqjTrIaAUdxrpZRCYQhWkjVD7VBEWUhfKcCzC2ZjBAh/6iuldasuYKDIWExfw4S1wmqiIIAhEZRbNAnIQaIyXzwopQAskU8ALp/RktJBPnUtZWS1c2uBg74kM015ooIeyxX2nWTFAnM1gbqmwIDnq9X7ZNFJVkfAZ1IBqidg1JOnrDf0TIWlPMBU+KhwsqbCq2oCQLXEuxSLeKCZn+QmvlwEr8R9mYXDa/G8yQFLjqOx+/MVQhYpn49Xysg4PcyRAqP4DhIZC8IfrLoDI1F0B4gAARB8saE8QYRLhEgBCg+rqA8Y1C6zWwDK2xP4HHAi57vkQF9CFvA/jJUbIIGCPrMH2OV72uChE+2qPQrsusPK7JWrJtmCqa12T9T9t28tG+V3XDe/yg/XH15uV64YZgWEV1XwHoBE3qOagMJMFgsPC5tZQfXWNm+nff3rf3gNPi7GXxffd999/k+yeA7+H5CPN/MPsgcsv9SKWIxXpuS26xH+0K9Wv5Osfr+TpeBrrGz8ems9eYO1Gq9kfMKGHDg6yVMQWrWfjrc4RwACSOt9qrfp6LOt4aA1Cs3W+lKTmgNY+nGq4u2TrICQpIOsI+uDPKE9QsfE1FJOlNRDqPAWUl68hcezYn7OIiUAcG+haw6GBBzM8ece2Om37N164SnIHZjpIlQjwcZjiPwFIzzYMZYnT0Ef6WvVvicL0KvkBdZYHQGijsLAuv1WWYNh6wT6s6zh0HXWgJUCOm6ksLHRSI1b1EDhZB3lV7X7yJP0P829Sc2Ba6yaAFVV4ZbPyClHcQOBt+Dhnk860BftO6h//r5HBW/hHgMDIeVEmQGB5xqMWwrt4RTg0PhzXgMPIeV27xBKLyB5+IS3SADieZiOScwDPD55IfL8hPYFDs9rCJkSo+QPSHUvZBH5BrLILdOBmOyBBPKyPWzuhP521e75dtvyzvbSlZNtaM9GwxJ1/+1b9eJMteVzi969ZEkje/Cc0daiucBQiOcQMKqxl/eoLnCwfMSXrIsy5bbdLvvZQw/e78Dgy3t8N5ev8PFPSvwPxqeffGQHLLvUMvXFcFeSA6yK8o3aJONS6saDVlvpiDOUb2ywNlMvsHYCAuDooJyizfjzHDBtpp6v/OI8K5WHKOEBoeqzvIRlJnX0+xoCRdVeJ/q7H/kksK4MAgVvPPK0F0tJwu2zUFIMQMEyDFayOkN1jCXCY7gLF/M9xk0sZwDCn9cABJX58hAJDjC1DVAwPpRO4CCXIadBKQFp+0MV4h2rUG+lh3xZQCgUVP/rbS5eKCQsUWhZojESJjYecrqRR7GuzNeWyTiUyGM2lLdsMJBVymf6pANexT0M4ZeO8Ro++dBT+QXeguc2/vaeCKPAzBjPT+JZjQNDYwAUeMtcTiVC8f2ZgwDiHhPCsotQas81ABBAEX8IkTykAgw6dzAkRN2Y2s15DMCEN1L74S0Ahif7+g17fzKObACk7h8hFXlGbpo5MVDMKgJ4xtZ6dztkqzZ2+eJCu3/t5vbo+eO/bF5SvWmi7v/atu/Eols2LKxpz1w40kYP7pR9El49eVIeS9ZjVS6LDKt3sWOXrRIoHnRw8ClP/tEowME3ab/4/I921c2PaxBSSilroWLemn1WWMPhpyusOttajFvvzzbIOVorlyDvYLaq9cQN8hZnWKmsaHN5jFLVKxl1pjUYulZhhRJvgaJ6n5VKupW0Ekb52iApAQoRszCeVwAKKQaxtb+oI4KR7gmS8ImQgr2DQ4yOmRmA4GBAYCgJMW/ixhEOgsBT0LY/rAOEojaK5RXO5QkQBepbFYGiuvrJEvx6AkV2USXvpZxlTTS+Ep031R6vWMa4x50rvrACeYM1lddoIk/ZVABprOMG/dWGvEs9GQryLLxODQGMWTnnA+GTT1GLB3hLT/4JHQVen2wQQEK5wuv52AUIV2oUXorqIY3G60orxWTv1h1FBjjkF1LwpgKF5x+EWrpemgDAn2PgOZI2mb6Nh4PuMagvELj30bEDIvEacS+8BvJwr4acAIe8nOeGyAHjhiyRmWTnIa0MleRRreOutnrHhspBqttTF4y2a08e/nQRbwj+V7Yt+xceu36nYnti/UDbZW5feQjlHSwpYT2Vr8wNgAg8NXtYsw7j7c4771a+8Yh7Df5g8o3XX7V333nL/5aMv0n70+ef2e8/+dxaDFf82/loXzJSfygJ+ZlWKoCU+4O/860lSqHco0xWFMCUTTzXmslLlCgnQZn4TR0pV62Bq6xa35VWpDCloOORUgieAzA1KUtNCOPeQntA4WGULDnPWXhfhdkYV24x2ZUDpmJ9AIaAgKVyd45QRQiL61GH3yGAeD+bpBYlZKkJCbaUM6/HMisUVe21wvtaV31uIE8HuFk3xgPPJlLu5sk4WwoQZfIULSfKW04+38p9wuE8gWWDxq+QSuDBo7hnEdUnDJP34e3I6psrjOp9ovILnvILFHhLvDTeyz2ljnkByp8zAQwsL95CykU4iWKirJEAe9ikMp+yxVtgzRNwoNh4iNwzDv2OKV1A4ccotHiWC61YDiJQuMfguva04d4CgECAjbbVZlwDqD7JQXiLfAAHwKDvgEPnyMgnPyRLPAYGL8ABtd7TmvWYZ+fuWt0u37eBvXL1VDt53z7nJWr+r28D2xXMPHOHQrv75O528gHDfPm6h1WsyI2XnWp3zC4dqbaZTd1yiT3/3DMOjmeffcbefvM1u+r6u+zG2x+yr778zL8Izp/XsC0+7jYp8XHKFVZ7eFQipWkqC1imEKqVAFI+/hz3FoACzwKAGo1YJyupGHuAvIWUoOpmy5RwrrB8JbO+FDvnLXjKy7ojAcNnYqTAhBH+ApKsO4yEoYAC5QiLRBjlioKwsFaARHUQTrhzABWzT56vSOl4/ZQZMHIb5RLkOoVKsqvKSwAK+tyQp/9S6CYaYzN5wjJ5h1YCRLm8Ydmos5RvnecTDU4KLTESZePOsWZKwJuPOVveQ6GVQNRIOUkDgaH+sLVuIGr0P8WK+5yohF7hE+9esJS+I+MWOHLjJszAkkYIlRgEwhTPszAWqXG7wkGJ1/DZKZQ2Scbdg0rBPV9IrL57AP0eiuna8A6AhlDLZ6AEGAcDwEjA4WADEGrbAaj2AFiEsB7eYpgkJ459+lb7nxk3ZKPxeagIMIgQIB2X720Dh0y0Sxbm2bWHtbS3bp5tu85uv0ei5v/6VtYgv8OqbQu/v+awVnbL6ROsal0WJiaLDVmiXo+3/3i5qb/KNrfV6y5QIv68vfzSC/aWwHH4CedYcYtZVrXNAjv13Dvsxx++NfvHjw6Qm+570/K7LXdBNxYIGrslPd1KZVlbAI5xAsUo3v47QxZXyrC54moBwxWi5wlW0EmKCCh86UMSQjgoCKtkLVkLFbNR5Ba4XaxNMDU8gTNcQkFRsFCAwWegJCyuxQyUAwMlkwAIoVBA7oWVbnugJ9mENIR4vNZbT/kUgG4sQJRKwXmOA+hbjDjTypVQtxUA2s9Q+Dj9Qg8jybUII1sKFP68R+ApVd0m8hBNZDwwEICs7qBVav9kK+69wgockOIBBsGfV6h/rMXy0JG8h/4KEHgLj8vDAssYAPh46hyhowMiAQWKzNopeINnQbkhB5F+40DhOFFmB0PiMTy/YFW2AJQDQwoYhGMOLLVBex5+ibif5zv0J4CrPgPWeCruMgIg2vvYAD0eEXBovCzY5NzBIT5gFMv3svlTetslu2Xs9hN72Os3zrEhvUoGJ2r+r29VizLFR88qeuuCPRva05dMsg6deshTyHOQbwAO3uHwd80HWqN24+3ue+6zt954xR574mmbtJ3CnAa4W6ywlKt0N9ty30vs8y+/cYB89fXfrMOEdRL2Kp+SbSIifEIReDjYUHlF1kqeZjXkJaoqbCpi6nOzEzxs8aQb5WA2yt+zgBTWEEIxTcnT3mAajCSujuTTLZLOsTwAoamEFTMiudxDe7e2IpjtDwkJz8gxtOdhovqUr75UkTerKfACioZ4Qnk8LH5zeQy8YNkoAUJegVwKYLTTcYdZFwsYF2RJIMGDtBhBjnW6tVAu0ny8EnKMg8ZfT1Sz/0kyDMvkKY71Fc3uKfyzP/QtmX3z8ALlYC9FCWIsnkjjHaRcrniSi+dVhFN4C4xEAhAPi1BaKbIn4aoXyu/thNKrPcpItv1LIih+AgZPtqmvcw+7kvqEZJ68q/2cx2APOAAG/UFn1Gf6CZBz07d4Q5F7csDBOJGPZIyMPDJAfgIS576qOSuvQ7ZsbRfuWmAPnz3Unrh0+ufNGlVvnKj5f23bY0zRdWfvXMOevWSsjRkhT1EVz9ErWZHLm39DFHINstnzD7WPf/e2bbjkRivrq043EENcyRI08zS2yV7WcfI6e+yFjx0kOx1xq6+QJZb2l5xkIcktavO6LC9ByRoTphRJAfPxGOQXeAymRnnSrcQ7r91Sy2sJCAh5pLh4DJ+RwlvARB27ohBKibFuOVEUBCFAeEiVWFHCLfcW9Jk2RVhkpkHxFnipDrqnPBdArdpPXm3QaT57Rk7RVAAHEC0FjrZS/LbKIVqNPcfaTWEZDEvrs9RhZhYoLQWclvIuTGe3nHSulcowNCbkHL5GucoqJdsr5SmWWX53eUh/LVcgIMchl3LPyNiSvvoMFH1l7IyT0EjKHqEjnhEj4EooZfM91lp8wLK7QosvuRwDZZeCex4SHkPkFl+eIbwJgKCunyeASJMn7+QqgITf6x7RdoAy7TXoI4BAd/Aa9BUZYdxcnoyRsQoc5BmEWgDDPQbyQtaq45MQIoXA1ZWgn7x9A7twcQ17/orJdt1pYx/7l5+gV9ym9S489Iz5Rfb4+kG2dBdZiaryHA02FzjiYwrD5UVG22lnXWEHHrveChhgYzEGgaBs3lGsm5S3g0KgDscYn9w56+rn7Y5H3/MHX3UUNtWVBcZbYImrKbeo0vVYT2494WRphT/MkuXkqxj+GrAUps2+1nXC8TZsluo0FTODSTDRQUFolTAeRQmPQWgBQCKuhRxIKJdAQn7hCX0q4RYw6UuRkmCSYU+2lQuQO7F4kpCofLRCKbyFgAEQOs3muU12TyjVWvlVu6nyINOVYygH4SFoM/2+2WiMw1q1eYpV77fCqvQ8TgZB4/SXj+QZWRjJWiz/uoiUg/7xANOVRUqDojDOmM3x/AJFA/iAQec5UIiw1ihveeIxmDGKfAGAOOm3TimFpk3qxoJC9yS0pToOCO09+VZ9L0t+6wBROYrvbWtPGAcBsLRXw1hRD3lFIh5Gi7Fh+DzPACCMVfUwiM4TdA2vgSGB8LB7W7ves+3cnYvs0n1L7K1bt7QT9un3y58Z/bVbz/L88au3LbDbVnS1C0/UIOsKHLy70ZgX5JmZGG812sywHqPVmYYwUYN2RkgB6TiK5tOdhCTHWWEvEkqFSd1PtEl7XKMwZK1V675MSfcyn43KTtPqOqDoDjB4wivL7WujZMWx5kxV4jGaLbK9jrzMVp9zi4SAksNE7Z2xWBcpBRbLPYZA4kJAWSSIXHKuvTMcL6ffewwvUPiScTzVUfIWy91b1BQwCKPwFs0g5RdMPbcWOMgnOiiPaD/1QusMMHh2I1C4x9C1ViTjCqHK9LvyCet9pUCDIaustkKnan1PUFLPDBxeEWCIZ7zoVE74oH5FPuGWUuUoDIrCnv7Da18kKd6jWBDjjYkIFDGsNFbbH9RJcf39DCknSouiBjBQdgcHgEgUnJDLlV5lgCXAkfMaHKvMvQuAIMegraTcQYFe6Ny9t/rjgKKeypBNhL8OjmRsDg7GLF6UMRbJ1Pkg+cMbruVCKXgV4NC555572KjhI+yCnTN27ZHt7f275tl2U9stSNT7v741rp3XYsUWBX+57MAWdve5061G86ECAqstFXdidWAgMWgDMQVBePLLQNU54mIsPcpGaCQgFHQ7Xt7hOKuqhLaA5Q8CBJ/mKeqx3J8R5KmOe4xIvFlN696H2RklogyeN+VgUMtFdvVND9tzL7xiNTpJgVqIeYRQ7h3EZHIKzlEczr1vCdMhX3SncyyPPx9RX0m6ld/kdT/egVpNwKitMKqeqOGA06yZrH5LJdxtppxnrZRQt5mwwToqZMp6iix14LnNuHOtpTxKG4GHumXjzrYSeUgHxQCFjgqdCnrgFUmwyScAgAie0R+Mi09VaqzhKVCMAATjQvmd14xTyofScezeIiGU3qdcpaSRb6DQHuKILw6KICk08myazE4FWMK7oMgBEld81QEQXPdyfk/CLgByHNPCOW+he+JJKI+Hrt5vHXsSnoDex6ljB7gAw/jdQOgaeuVGQ/J3YOA14JfquIflGmW6zu/KF9t2E7vbeTtm7K5Vm9tbt21rfbo06pWo939941nKQZMLn12/sK49e/kU69ZPYKjPFJ4sijNegw4XjHAQJFOpDg4JntkVVqEmAMnvtswKuxxrVQQIHpjhUfIj8aaOP+mVFfWp2sRjeCIKSGIpiAZfvps167uPvfjSK/a799+xflMUfpVIGIRQDojEEjmJ2cFwwhCP2dUGQKNt/+ZTdkbMgaE+VVMoVavPSn8QyQM8ZtdKyS/kCUisAQG5hOcVrAUbv8HaTjxPoRTvppyvUEu/IWEfebo1HL7aapFk9zpe+YS8EvfLLe8gjFMfAKoLPwkfcvkTVhDLLyXycaj/jM/DJ8ajceY8o4hrEbZw3QEipXRAEFIJIKGw7k2k5JB7DBSc6VzlEz6LlZRh9dm7h5DcHSycqw65hwOEOgAiCFmo3fR9ARv38pBKcvGQUJRbKiKAYwDcGEjZyxgT8sIgikc5YCA7KT8UHoOoohx+ac91eCivw0fVj5hbYufsVGRPXjjBHrts9ocN6lT9dV9R/LXbDkMLz127fVV7/pLRNn9bMbsOSwKIKQldxGisUoDDk0Z1EHDgPfx9Cu15st19ua8Dytc+CwrlDryMxIM9X00rYCiv8BW1/tRbxAwNDIhZGrcm2jfZzrbYZaW9/+5b9rv33rLDV1yssA+lwIom4HDLJIbnLBIMx7MJbMx4+eyXQj+AIa9VRR6DZSp1SLy1b9h/lTVVWEQC3VpegAWT7afxIpaSbOUZAZI2E5V/jDjTykaeaS0VPjUfd5Y1GrbaaiqfcFDEt698PBqfWzuUQvxywSfWMbyEezuuq68ofakUDksLj1Eo9xIJOFC8mPakDOUN2XhYJcpZcdVzmSXn7h2YrSJ80rErNt4hOWafBoqHW/IYgMjLkjp+DCB0b8q4j9cnlMNj6FosEXH5aAx4Bs5dPhgBHfvqW5X77GMia2QOj1yvAIgMC/syACRC10JHPMQKcOiaZF3SaYatnV/NNiyqY6/ftKVddtK43/4O+i9tozoX7HraNgX24Np+tvIwMbCBrEAOHBIKyufCFaGAWGZCIn/JRkrP2iPWAXn4xNqoJIzi9VXA4x8XS+JvZmlQIvc+UmQPOYgvxSAUHGuK8pTOt3MvudXeefsNf1p/yx0PWFFrQIFyAQYUQ/1D2YKxMJC2uU8S9uG5igTWatrXltdgermpPAbvurPWi4d5rP3yaVrlFJFsl484SyHWepUr1Jp0jjUbcbo1Grpa4DpF4ZNAoZzi5/mEFB8ghOtHSXJeQsIEGG41Nb5cDqc6kFv9BPiuaAAEXqgs1jih9MgCmYQH8TyEPb8HHICHcElKSz4AhZVHiUPpOcYj4BncmySKj8xd4cNbJMBwrxVtJx7CgZm0R3+93xguxiSZ8BuXT8IHNww6zs3KJcCAX5S5h1UdD5+kF8wwIs/4WkuEVfwOmTtgt7duvUbZ2Tvk26UHlNmH9y2ww3bre0yi1v++rV1Jfp+Vc/PtuqPa2zWnb2F57k41OGeCmIHC+qDUYc8PpNC+hBwl5FmFvAPvXPCGnn+Zj/PEY/DeA9bVE3msLOd4EQ3Wp+zEPLcIYo6HGtxzeyvpvYc9/uSz9tqrr9hLL71kr77ysvWZoN83xSrBbEAiRmGBaI+2ASuhFDkGT7sVTvG9Xv/QnPYNB662ZgIHy1paTs4ueWFNGA/vykevtzaTz7O20863VuPlJZSLNB91hjUdvc7qK69g9qmwh0JEwkJ/ViLyaWfGIf74shYAkSiDgyIsp3gYXgNPAEAYJ4rkoQjAABQqYw1YxO2cA4ZYBuOACBIocgpNe7rOjBReAK/gXiQhZOn5AxZfCu7KL+K3kV94GXUTckAknsTb5veqT133EgACYKjvgNlzQfUpHvgxbvoJD8JjOOFNxSMAgezCsGFg0K0ItTtKpgEOgBMPCN1zwEP1p+m2NnV4dzt7fsZuWr6ZffzALjZtZKvJiVr/+7ZaVfNqHzm94MNz92hsT18x01r2hqEIjI5o0CgjVh5F9GRaMbZ7jgQkAIIHe3xAjSnT+GaULyCkrsqw7O4uUSoxhSS1jHuIwa5QMEH3wQI13tpm7rjC3nvnTX/x6pVXXrEP3n/b9jvqHMs0FNPbYanVH5hH8s09fCmI+iFQFMh7Fcuj8QCSZSA8yW9CjjH2bAdHmfKMlhOy77zjQXj67e+l+JuN56jemfI0yisGnOxTsnmsjvXpWN0r8gleMvLYWeR9lyK48JIxeQilsbiyoWTqd3gM6gAM+Mv1UDaOUWCUEyXkeoRY7nnUDuQeQzLCU2DV8QAOIBQZsOgawHCgJOcAzcMt6mMAUWhAofbcQ+g65JafftA2YFOZ90VE+7GGzb0D49B4AIN7RZV5tCF+xLQ6IAj5YmAhDKOHoOKdh9eJTrAcH1CEnkD+pFy88hwN/sE39YF7NZtj+0xvZmdsn2cPrx9tb9y2wzftyuuWJ2r9790WjSy4bc386vbSlRNs3DR1phkC16BALh2m4wCE9U9YUebw8Q7sAQOWOweaBBiuvCJ+G3G5ewwYJeaEVUWxfPAJQBrNsZPWXm7vvvOGrxJ+44037MMP3rPb733SCjuIkayP8ullQjcBlBej2h3iy8uLeddCuQXPXkjA/QGfEmqefLNylndLmikZLx1+hpX7841z/cWtpiPWCUTrrB7eou8Kf6Lt4yDZ9heMEKb44C6efgZ/OEbYIrekiRKjPA4GlAnFCi+h8zhGUQEEe4QOuaIlgEAJIvxyi48HwKqj9ABHewcH9SAptgNFx4RCzUi4p2bLaQsAODhUx++TlFPGRAwEYMg5aSO8RZADQuQA0jWm/MNjeHgFOBIP6l6DMAm5o9TiRXgMIhBPthNw+IQPxlfk68vUBtPxbgQBlNp1noli3KWzrGrZZDtuyzp25o7V7JXr5tq95815rrhKQaLR/+Ztaq+Co07ZqtCeOHew7bOnOtJMHUQZ6CRJki/aU2eJuQECyslyCGZsUFInKRTlgIKB+rRmwgBcaHMYJTDgMpnRCUvcXMxvCsMluGbzrKTXYnvyqWftrTffsLfeesvee+89++ijD+1Pn39qA2aerERSzG8FYHVPvu7hn6w5xop6rfT30GsPWmN1h55ufOm9BGIN2Mjs97Va+ALBdT6d2xxgjJG3GL5WYdgpSriXWT7egokEpmYBNkJFuIDYha89YUMOECir+u/hkvjGOZQLQYJ0jiKGRaYMxeWhJkoaAMmFmWrDn06rfk7p5RF81kjHDhwoDYhUuOXgE5hQcq+TIg+XdA1P5WWptnm46ICgP+oz+0Qh/dgTcMaivjMGeOGAEG88BNKxJ+jiT4TlLm+R5xEBCpG/wKXr7kk4l25RJ2eQABjHABB+qW/u2UQlM6xlhyG2el6hnbdniX10/y629rCR//ortr+0bVaWP+HEOXl2y/KudulqMYJpNf/uatJxYm6fg5bSABAA4UAJsGABCL8EDn7jVgClWmwFHfeyJv0PtLqb7W21e+xltboutFqdd9Z+Ufa403yr2WGe9gssv+3ONmu30+z3H/3O3n33Xfvd734ncHxkf/zjH+3H7/9qR6+53fKV09TtfZTVG7DSGgw7TV6CBYPyCBPPtlYTzlaSfbZ1mH6+9d7mUitXWMVXTngizqrh7MrhMxR2nS5vsdqq91ruX4v3P4kB7L4gEIEz/sQCBijCggEGvAMCc6sMIBIguFIl5FYa5dcxv8sl3EmZU6KMrqQoM0qvMs8vZNEjKc6BITn2GSgpuoNJvwVMDggBI1dXSszeFRxgJef8NtrOAUK/cQIQtKs23WozDp0zvQ54fVYqoZimJhJAkT2XFK8cIDJ8gMNBkQDDk2+VeUSCvkiX/GsueBvV4Rzd8QiDttQ2Y3H+0G/xxNeFiRpNtdH9u9i6eRm7+sjO9tlje9hOs7vumKjzv39rVCuv9Kjp+V+dv0+pPXH5XGvckw4KFJF3EH+TRwAG9xJ4juSYgfuLOhqsL6xjkCiXyoghFVbtctA59tyLr9mzz79sDz7ylD3w0BO+f+jRp7Ok40cef84efeJ5e+XVN+yDD7LA+MMf/uDL6L/88kv761+/sa+/+dY+/uTP9ofPvrY//ukb0V+dPv0iSxx/8dXf7Lvv/27nXPeSh1ANhvB+BW8lKuEevFoeZpVV7cu3pAQKvprobz7iNRAg4wAgAkbkER5G4R2wvFIuV/oEDDnrDwhQtkTx3QNg1VFMhJxcJzyJY6+P8HUdBY4kGKV3EKCUap9jfsfewUM/sKQCBfcPkDhgqKvjXH0dE2ZFrhJA8CfeugY4fM8YwkqrnnsM9dM9hsbOMaCIkNI9hohr5Ac5j0HkQPQBOAQKjCz64VGIjjGc/nxDZT6TiddQPcDh4Zf4H0BjDHx+1CcW1F88noeCCh0bTrYdx5XZmm0ydu/pw+2jBxdb325NeiTq/O/fWNu199iCJ9bsUNtevGqq9R0HsgGHBhCJsK+o1R4v4osHdZ3ZI0BETOnJFdZC+5wVYKASSOO5Nmab5fbUMy/aJx+/b2++8ZrCpzfsnbffUq7xtr3/3rv2we/etw8/FDA+/MB+//vfOzD+9Kc/2Z///GeB46/2ww8/+CLIX9oAx8GrH/YwK/unOuxXW40+J1pRl6MsL5aQ+wLBBMjEusTN7tLVZ6yih0tSOlcUKQKK51Yei6syV6qEXGkJiagfSi+ButKihBDlInKAnDcBKPweK6/6nn9QF+VOfufhUoCHctXxtuM8VRdld28iwmMAADyCe6IEEOG1IM8n1Bf24QV9Rkr3ABwAwj1G4kV9DIBFRsTlK35Rz5eESO4xeeLeQucAAiMJACLHIBrB4LpeSb8cHIBH90kn4943QkH1zw2IjplkKJlgBU3G2MEz6tqa7Yrsxau3sGeunf9u3VrF1RN1/u/Z5vQrWL1yyyJ75oLhtnh3XCWeA5RrAJBP05KcCwQoViTLgX4GibLBsJwVFoM9KRQ12soa99rDzrzwFoVQ7zs4SMAjz+CNxPAan332mQPj66+/tr/97W/244/Z90x+aXv+jU9tyA6XG/+dWGvzk62mPAXLSXz9Fx9iJr8A4AjLn9oDEPop4fuDLJREwkF5/IPMIhQwB4hEwVA6zye4JvKQSEqcDpNyypsotOcH/BYlxrtgGVFalA7iN9oDKkI3B4/Kcm0nfdlY2/SrMoDk+q09SpfLJzRWB73adYBo3A4K5AcwRPTHAYDhkEzdy4g8pMJLYAwTYOTyCfHVPQbnAER715MABSS9ohwKz+GzYeoH43Me6xgeA268Bq/x8iCz0QQrbTvITt660M7crYHyj93skpOmXJuo8X/ftnmb/K2Wz86zO07azM49WcxqrYEAEHIPYnPcIYP0ZCrlFrEQzijtYSYfW3Mrk1gdZjFgPpaoqa6Vbm87H7je3nr7bfvYc4335Dk+tE8++cSB8cUXX/ibiXiN77//3v7xj38k6r/p7eyrnrMGQ9c4OPjbhCrdjvPXdP1PYphpA9z0Fy+HQGJqln65VZeihfIACJQtwo+YLgUMnlwT4lSI+T12r3gs8phfddMeg/tBufukyh08eAzahpdqw8GlvYdHCRjoF3X43CdewMFKX2mLvtI2x5TrmN8AhpgYcECIHATaAwxAEx7DvaZ+67IEEBgTvCwhEp5A5xFKQYROnr8BCBkg1xN5klxuipFNAEK4xYSNPw/R78hnvC/cT4RRIDT08FBhFe+38y8Bvp9s/Xr2stO2ztilB7e3L5/e15bu2G9posb/fVuzenntj5qW991F+5fZPRduY9W7Ym01OAbpgNCxD1wDJV6HST4bBXNhjJgHYxGGu2Zd85gVEiOIVxEMs1aNt7cek46xBx59wb756nOFU3+0zz//3HMNvMa33377q0OqT7/41rbe/wb152gr7Hq8rwFjqYsvf+G99Y4i+u2WCqslYbulTiw6ihDKg9XiGMVyMIhQdoQUVplrLkApZYAop+TaRziQC4EoS3kQL0ORIV1zQOg65fAuZ+U5V/0AA3v3JuoHwPAy1aGu9xsQUMYeS69rtIsXpDwmGXwGSscOEDxG4i1o3z2arsEjyK9Lpp5fJIYQbwEfmZkkhHLdSPjr4RQ6gq4kwHBASF8wtADD6wIo/R69QGfi+YbzVv3NfWNrvIiwamxyjgeZYnOGt7ZT52bszlVD7U9PLrWR/cv/628Q/tJWVJApWDI2/6XTFtS1l6+dab3HaUCt8BoMWERIgpWI9VjuMcRYtzACQ25ZBcAAEBISc+UIwplAXQkBpvPb5gutZvcD7LQL7rXvvv2LgPGVg+O777771SHV3Y+/b+2mrFffeMfiaMvzLyny0hXPZXi4p/77xwwSIAdoPbRAaRNAQK7gIgeErHIksm6lAQhliSfJEcosBY/nDZTlAMLvpZA5QgFVxy04900Uwj0XSkw/UO5QdBFt+DX93gGicwDiXoQ6KVBwDwe52nSAqD7gcTDpegAiyMGquh5OST4OIJX5DJSMXYDCjQqyRrbka9IDwEA4xTmewUOoAIWIj2+TazhAyFsFkHiNwZcX0Sa6JHkwU4YsoAgn8RR8w9e/FA9IIIVZAktBs4l2wLR6dvJW+fb8lXPttdsW/r6kQY26iRr/925b9y/YcMIWRfbCZWNt0WJZhxbhLRiwmOR/6yvm+oMgBqw6AQ530WKyz/6ghGJ+KUojBnAdpsMUT+ZpE4sj4JUvtTlLLrHPPv9SwPjB/v73vyfqv+ntsNPuUwh1rICQrP/y13SZfj5Y91DbnjBKEAifvuAxXFGkPG4t6ZuUCmVzay/ldgWWgFijFICgjOsAh2MXJMeq7wKV4CCWejjIaAcg0TZ1CLdQxkSBadeVPqXYXOc4+uTlasu9C4BQeYCGcr+ejIFjN0YAW+BkStYTbskirjkg+L3KfDZKYKFv8IVrHuag8MhJcvbZPLxD4jEAA4sH/f9JCJUwPOgGxlMgAAC5SRsBhC848pYp0/9eRriFTET+kFj3REd8UkB8wzPEi1fBfy8TX5nW5Rgj1WSqNW47xpZvUcXWLKhjHz+wu9145tx//wLFjW2D2uUvOHZGnt1zWl9bt0KK3wIlS8iTLqyIKJjJH1G6d9CA42UqhIDFhgEIx8EhhsN4rAchWjx49MWLh1idHsfYex9+nqj+L2/fff+jtR92qtoRKFj35c9jEo+BVfN3l1EG+iGFcGVS/0LB3PprjyLH1CGW38EiBSOu99BFSse5A0XkCSPCktsPwDB9mlvugYLTNkqv88ryCT9OQJD2GrRFfQAY5d6+7hPgcKK+9vTPZ6B0Pw+Zkvpcx1sw/lBEypANdTlHdq6ggAPDJXIZSSZQLAdxj4Hyi8gt2OMh4DN7PARAYdLGP8ZNmTwGD1r5Hdcj+kCHACJABcRuOMQj57f4D0/xvDlvATgEGv54ifDKr822nj0H2MotMnbh/m3t6+cPsiP3GHp4or7//VuL+nldDp+S+fGi/Vvbo1dsb3W7iUFYAne1MFAUrjGsnlskMZuEDovEsf8NMQDCY+i3kcDhidyiiHFtsESy9q0Ps7E7XpSo/i9vkbTvdfwt6oPaYvKASQSfTVFfAawrqAThYYVA6sCgfwACK5WEKR5OifEOEFl1hJYm6iEwD8co0z7nXXSOQjogIB17YimldbDofu4xpPSuuKHcCTkgAJZ+yzn1Oee+Fes6IKRI/n495xoTv/dcJcYpZQ/yGSGND9C4fFQWs3Q5uQAK+CYil/T3VeAhxkty9hXKOs6BIaEAhIMl8Rj+dUlkS84nQ+X7pK7LPgElfQnDgeeAPCQV3xwAPAQcImDwkQhAI4rZK2TQbGvbalRbWzErY7efOsy+fuEQmzCs7chEff/7tyoFmcK9Rue9dMr2deyNm+Za/wkaXJmYkfMYcrswGIuFgNx6ifkeViXEdbdSUlSskbtomKQ2sCo8YIz1W+QLLQ+3sy5/2pV+YzNWlBN6MavF7Nbff/ib3fngy7qH2iNRxGMwj869EYKHGCJA7HF5oswwGQWH8SSDDgSExLEU0AWVWHzKqedvV8rLUObtqNz3eBQsuI4ROjlLJPPwJTyGAwCAas9vcgqvdlxR9PtQeg+DkmOf8uRcvKYt1j9BOUDgJRin+M9vqAMQoDAG/N49PqEw8kuAgYd3ryFAEDr7f4IgL52j1D4RgwHDQ8gDuGHTMZSe5gcggMHfhwEUIvc4SRvIn4/4eSgXMlHfHBwYD4ECL+FeXB4ET9GIV76197wPgwOPkOFcy1cutu/UhrZiizx78dpt7e179v5D00Y16yfq+z+zze6Tv+64mQX2/KXjbek+YmozMQPF90FKKHgPlBChcO7AkFBygsCCixH+thhuFxcLk8WweFcDcHQTODofa1W1f/2dTx0IgACqCJQffvjevvnmG5/+Zbbrs88+tXfefd/KhxyqfmH96BfAQGnwbFIMt1RisFt8MduVWuRWHqZjkaXgDhQJjDL/AJqIOl6G1ZIQXaCABkEl4PC28TwClHsQ3Q9ld8VUHxwkWG36on08HASortAqBwQ/A4eUCaKc2Sc8hiuWxuWAUx0HhOo47wmTtMdbcG/3GMgn4Ul4C+Ti3kIKy+wRsgEUHj5L+UmemWGK1xGw/qzC9nyC3yShlgNC5M+SOCas1T73EBmDhTGM+wmEOZmob/DGeQlfxTdPxvn3YzyGAOIPAhODlJaTG5ftrUWXKXb8rHxbvWMD++yJ/ey6dVvdkKjt/9zWsyx/1pFTMnbTCb3stvN3tnwYTO7BAGP1ZniLUErcN/tw24RTJHbObFkdGMhiRjyHfyGQc+UObY+ysTtfLAj8w2eumNrNTu9mPcaxp99tux12lRL4P9m333zlz0p4mMizk08/+dB22OcMMVn9ckXRHuaHB3Bh4DFQYhiNYFD6hFBwFwbeRPWirr+zLWV2rwIBDNX3rw8KbNRDyf1eCXgipHIlBhwouO5JGwAEckByjrJgQCAAob0DgnZ0zRVKY/Fl8glfnaTUAQ7qez6hc5+iVfvURR7u5RNPQUicm8FTmeeSAgPyiTAJSw8wAAXhlD/txjvgMQCD6uSefgOEFBHesiTJE3T9HrC57MNYoh+MUeMCwJ54i+ce1uI9Rgsgw1SGV0/K3GtgTDiXPPDMyLZsNxs1eHM7YUbGLju8u33/2tG2z4IBeyZq+z+31a+RabL/+Myf1i1saq/duoO1HaABt9CAw3MwYAT5T9ODEhYWioTMGQ/TxWCf6ZB1wWuw/on30vmnJwDS6kg77cLH3Ut89913ToDjdx9/bpMWXigmqa0GO1v3CcfZ/Y++aF98/ol/JJu/Wfjde2/bGRuuE0DEQFcQKYwzVcx2D5AoNl7A3TkegmuJ4rqAiG/l4h1A1AMYkI49XFIdb4f6WDjAo7oAwD2E9h5eac9vIrQKD0NbPkUrATtQ2AsQ1IM8uUbhVR/QhqFxMHAt2bv31t4NAb9XfQeIzt1LBAkUbrwkq/AYuYRb15AL4Y/LB7mI/NlEyAqFF0B8HV4CiMgpAhBMrMSaPJ5vkP8BINqMRNz1QuMIQwUhE/iN1+DZhodVkI4xasjNcw3xzOUmPnuuxzgZ00LbeUKZHTc9Y4+eP8P+/PzhP/btVtolUdv/2W37Qfk3HTe72N68YbYtXKTBNgUcAELkoYQGjLDDWhHfBjhI8nDN/lFpMZlknHfXWQPlzygEDMDRReFVz+Ptxdc/sr//+L3A8a3A8YNdfdsz1mzgUWIMbly/w+KV7mI1Ou1hR596ub337lv+Gu4LLzxvDz38qDXvqX40QTnVJ5TcPYgU2hmMkqqMYyxXSfKwyUEgysW5HAsM1HNwqA2+Zu7gQWAJ2PwdboHBQymVuecQUQcw8dsI8ajnIRbWT3UcHFJyAOThEx5D9RwQSbkDQueAKPIJwMH9aMNlIFn4NSlNKKN7DBRVe7xFma77GrNEHniFyCtQ5PAOJNb+F2x4jAQEDgzCJgHAjynXMWX+kQ2R/0sX8kU+gENl3B9gev80Hvjls1EYJfEH3uIRKIPX7jUS/mOMAI//RYLqRd4GYZTl7Rp1nWdHzSiyFVvXsI8fWmJPXLPwqSpF/03vf/zSNrhd/m6HT87YPWsG2xVniunNE3BESBXJX4RUCAFwoMwer0oQkW/402wdMx3Lq7l8xAFqfagNmbvOvv+OpPtbzy/2Ou5ayytXG+VqD+vmIQGCFxBLpUD1p9mErY+wBx9+zF556Xl7/rmnbPI2Ct3qi8EOhIRgOuGT/6WwhEH8jzBcAAEEgKG9exYJzS2bwJMLtxIr58AIS4jnkLICINrxBF0gcA+ie6QF64AQYQEBhM8qSXHcI6jMLaN4GcvnnXRMudcVSOA3ZdyD6zlPIZnEymPPR1QPA8VzC0JbJkUAR3gKD6FEWHpyCjxB5A+ABCCEV0BuAQ4AwUc24hrA8I9u6BpeJ+c1dE+fOYMf6j/9dYAIBCi/8xk5JIS3IBFHHvEXCs5TEb8npGK8Dn613XqpbT5grB03LWPn7dfRfnzzeFt54PhjE3X9n99Kaue12X9c5psz9yizt+7cxdoPFDhagGRZhxAQ8a2v5hQhDHfX2uOiEUAk44RVDg4R76nzobiu8hBlB9gxq2+X1/i7Pf3CO9ZvzmoxSL+lDSySCx9LqntDWFC+s1t3ojXvs4ut23C1vf7Ks3bSaoViDVF+WXsUHYWH0eHO3YVjpSCEoL3PsSdgSQMkcgzPPRJgQNRDiA4QKS/gogyAVFwSgoK7d+CccEjX/Q08/dbDpAQIOUBoXNT1cxHj5D7UzU2XJzxHYfAQPgMlRa/4wQMUNmaQkEdu+lVAcI+h654zSNEdDCi+gOKA4DrKn3gMB4h+6wBBbhDGDnCobUI2nw1Lcg34Am9jRjC8OLzy5BtjlcjCzzFIMmLO1wRY8NC9KQaG8WNsGdd+tvP4cjtKRvvBc6bZd68fbyP7t+6fqOv/zjZ/UN4dR88qtndv3cp2311MaBLgQDiy6pAvOFOZz4CIwTAbBgMOEnI+u8MXDAEH76oTavHxNgGleq+j7LW3PrT1VzxkdTaTQPwtRqwgLl/3Q3HiO1hujbHUiSVvNNUKSibazvussNtuv9NKuojB9eOBksACEBCCu3MAEceU63ru/7nlMRxQWDApfHgPfu8AUbseGhAOqI0Idcg96AcCdYsZfZRgPb9RezmPIYWmPMDBsQNEoOc3tEldyiLP89wCxRN/3VNLUSBf2sNvE0BgmDzESTwFZencL51PuBdIvAbHyMmPE4/B37X5/41o73UlL16hjn+s8lwSEmBQXDyG50YyAj59Kx44OMQ3N0Z4DvbiK8Yo/tDTPTf8Zi9ew0cAhXzhAWEmRoXpYdeH/a1h913s8GlFtmxudfvDI0vthVv3fr56tf+t+CrZBrXL3/WQCSwIG2y3X7yH5bm3wItoj1v1kEp74tvcTJWYnZut0rl/xEHMxZNQ5t+jlWBU3nHCiTZvP1n/crVRLtB57IxrDY8hJsE49jAfK8M5TEWxGwyzTK1hNnjKEus1RgKrlyg8AECZCa0i1k3/P7eX4UGYTcGjYOVQ6AQcDizm5lWPe0JhGR0cgEF9QtE5d3CJ6Ccew/sNOFAcBJ4Aw70D1wCZ9pHTOXhU18MJCEMhfkQ+ER7Dw00pjIdPWFUpKhQzUIDFn09o715BhCcPb+Fl7CUjwis8g3/VEo8hmSEnvjPANX99GlkCHp3H9K1/6ysJeQE346f/eDz3GgIHAHDvzbMMQiyde3ib8DvCYOdt8jv4h4fN5VVqHxA66A+z4YOH29HyHhcc0MXsvZV28iGT/v2f9/mtW4OamRb7jsl8uXqXZvbRA4us52gxpjnC0x6G0fmYL3dhICRCKzEXQDjDVRYMD2bjpmWNClovsrzmMDzxGD77g/KJ8cSgYZ3ddaPUWHsxGyajwG6RtG8wzgq47qBAuVXPF7pJIA4W4t0KAPF2EqIsN5MlEHj7iWC5t4dVovAc1MOTOUDUR4Dj4EnCAwdFQpTlQivAgNVVm/zWw1UAEeETSqff+AyUeAKffQYKD4JBgudSarfiKI5A4sk3Mkj4T86Qm2WC3wk5IPgNdZMywMBauJx8UoRnyX0SVsT9/e+iAbX6w1gANYYCwDsPxfvwDJ7/EbLiRRID5AR/dR05ARDnYWJQfM0e4CdEF8hdv/a3PBnU3SaU2uETM/bEJVvZ92+u+PugPi17Jmr6v7tt2S/visOmFNjr129hK44V85tjuRJweKybuG4Nwi1SuGfPPZKFgwADl+8Pl8Rsfkv86uulRB5GEEfDcCkUFDkAigiDcyGRFNnBIMb7LEgCCE/GUX6dE9v601iFXBEasQ9wlCRltOvClNtvot97iIUVlOC4v4NDx1i78Bpu7RIriHDxGL4XBSAQdMxGIXjac0DgfaX8Hj4BCpEfJyGrP8CDJwAEJRGffRYKZZEys3ePgRcW331GSfUwSjkg4A04Ft/5LKwDJaXwsbwHEEQ9wmFA4kBJZEbuUXH1bU5OAjt8CP7ADw+hkAHGJ+Fr8Am+Om8TeYb8aIO2PKRMPAfgwDj4OKUr7Q+zNr23MZ7Lrdi2vn31/FH2+LV7PlhQ8F/8/8F/19ated60A8Zl7Kqje9nLd+xrdbsjNAmEASAckj5nshjuTJaAnMnBfBEgYuYEF+2L3/idlAIF8tADpUiAgZXG0gCEXAgkZgMChOCAQNkThXdvwQe3eZmGKdykzI/xIIBB5w4SCYbl0410DeuWEyD3QGDkHAAEQSJ8kVs7rgkw3kcpeoRIDmiAgdcgfNIxD/f4lKgLXsrPdKeDg9wCBROhCIACa0wiykM1wic8AvzBWocBQkkAw8+eT+CxEzDgNTyshd/sEw/g3kS/ByRRxu9yIKCu9mHE/O+iMXyAKuvhfQkKsqKvkRfh2V0+YWTEF3iYO088iHsNeIsBkiyRJ+Gre2GRh6CSexgN8qv2GpsvqyeqEC88jzrcpo3oaYeNz9i1y4aYfbza9ttl2MJEPf/3t2pVMtUWDc+8wfeH/vjQbrb9rhJUOYwWAQ4EF8x2QSAoCYE4GAuH5YN8vQ/MILYUuZvGykrJ3ApJeWGuW2gxFzB4iIRiAwoUPwCh3ANQAAAPtaTwDYdkLZi/PxAkoREL+1IG2sJyqS2vp9/5/fBUUAIMwOBgAQTyGpQhZEIsFN3DP/UZ8vBKv/OHe4nHIEREAeJ5hYdQyZi5HvkEHsJnoLiOxUQ5pZSeYGM58bKq4+FSYt09RAp+w2t4nvAdIOSuKdfz+rSVACJNkWsAGM7xMNwHmYWHj+cazCT6OMUH+OEhJgARf+GnA0LE/meAkKw8pxNvw4O4F04MCmCDP8ET7hUe06eh1YcOB1vtrrvb/pOq2WFT8u2du/ayL188/rO25Q3/a3/v/O/exnTJPwov8vA54+22S2Vd+IIiTMbyhLDizyUpAzQ8XWU+3pPJhNmEFADD43AULvEYaaa65dG5AwNASMkBAAqOUFB4vEW8fsnvuOaAAiyEV4RiCUj4LatDIx7mXpCDA4Fi9XRPD6sASAJIABNezRNy9RmvQb8dIIABbwdAJHjA7tYwgKGxuoXUeLGOgMLXP4lIPglbUAiPtcUvFCKmYwEEyu7PIFQOf7H0Dork2BNr8Tr5Jy6vT13kQpn/3wr1k71/4C85Z/LEwSaZuQxF7qVURn8ABSGPK7DGiuLDO3iGMXOjgZwAh3iJjBwgAoN76URW1POVBgArxUP27kkxGnhREQbUQYEeQfTnUBs4YKQdNiFjZ+7V3uyD0+yy1fPWJ2r5f2drUjuv3ZLRmW9W7drCvnhqqQ2bIQa3grF4i0Q4uH7iVlw0AidM8Ck6XDQeQ8yG6TAHi+MMx8IQkiAAgcFDHTHYlVtMdwWXsvM/ifypT3gVlN4TdICBN4CSYweP6gMId/tq10MzwKH2w+q5ZVOZeyGsnRTdp25R+AQcHg4gUAChflMHJXCPIaECCiyig4PxIWgpFyEUiXaZfueAkPBjBsq9BaFP4jFQhFw+oToeMgkAgACD44AABOI1+64ofCi4+Jy7rn2AA5kEOGgLIPjH8AAJZSIAhneJcMr7pPujuP7kXiFQGIjIA338GBXAoT18REbwHT4DiFzdxOP4hITawGvAK9qFf4CQvMZ5Ajh0f/eekPoroBR2WGKLxjW0A8dm7MlL55l9tNbGD+s4KFHL/1vbnD55lx04Ic9eu34rO/8MCcsBEtZHjOeBlCeTMFt7VwhZShQl9yIVSifmwFistFsdkVt1lFdlHi4l+YR7h0Tp/R+vAEgQoKDugCwg/N+wpOx4Dw+p9NtI2gEF7Tvg9DsPoQirRE0SyxiWzr1FAg5XAgkaUCPg9IyUe4rEyrq3EBDIQXwGSgL3ZxY69gWC4kcOEAhfSgC/AIWDQPxEYVHkAEKAgT2KDBjY+zUpPcru3yPmnAkR7cNb0I57hwQkAIdnT36u30YY7GGy+uFf7GccMmSAHKV2ZU8UPLwGy2zceIm3AYLwIL4ER/Wo7x5D/PPQmXLxzHNNDCTGRvdw46l7uycFnOKNG4kELG0PtK69J9uh8h4rtiuxH948yZ68cen9hf9XkvOKW/smeSP2HZWxDft1tk+fOsQ6jhSD24rST1aZgmTgMRUY4ZR/OEAMdWYnzI9QynMIKTxMRqkJh1B6V/IAA8ov8nAJsOA9pOiAhv9TpL7XAVAiFyKeA6+i33sMzL2wdqqHN/GcI+mPC1RCBBDsIxTwBFT1OHcBa1zhLdwiStieXyh8cuETW2MZE8G7wcAyInzKtA/FJCGOJ9RpJWdPmS/u5Fzkz5MEkCjzL+qnfuPeQCAIgPh/tgAotRP/FOzA0DU8vOcaug5o6W8LAdvBrZDQV80CDPEB7x6eF2OCzJCXP/0WP+FheNy0XAEH3oI2fAGmzt2QyFhgOPAc8IiZTJ+tAyAiwBHPeNTHeaNa2P6jM3bXumlmn6+3RfMGb52o4/+9jQ/LbT8wc/9Bk4vsw3t2tjWniNm8zZdL6lAIDZyEK5ZiE7+6W0UZsUDaexiVEApL6OQhER4jCZPcW7AHEAIK4ZJ7FtVrwF9T98+ee76huvFbT761/1kyLzDhSdLeyvuTWMUIozj212ylCCiJJ4/aAwKfvUH5tfc8SsJGoZjOxQi4wAklET4WUYqHkD1ckELyzIiEG1AEIDwfEPl/oaO8KDzH2vt/s/NbKT1lARoHBMfJ7yDqOCDwELSTXI86fgxQRACThYmsfGCyBGUNI+bPneBDKDvWHxlhvAQKeOcAwKviPeAfXhgeYmD0G48EZIy4hux9dlL7AEeEVYADXjFBEcuUHCToUJZPbbpPNR5SHzW7tv3lxWX2wePHvlq/bo1qiTr+39x6tMjbAi9y2ZF97JOnjrQ2gyXElmEJNOBITLHMoXjuNcR0T+AIoaSwkR/klDh5xdIJMECq10CegX/a9T8VTcDSQODwpBuAAAw8DODQMaEYdTz3IL9IPIp7KwnWQSrh4fqxgAiTY0AcykGfGQMEIHx6U8dYQQdEKJbG6uGUBOoTEVJ+96IiwhYPFfAYUmDIn0mg5InCh4KzLo3VBrmv5KP0qsff2uXqac+3g9m7N1FbOfDoN7EY1OunfsP9/Gm5FC8MGYoZHt6BnxgxlNw9hHjnHgNeiWfILGdUgn+Jt/Br8BB5I+vEY+Q8LiGo+OQ5GR4Wnop/TNoABqa0Pf8AICrz6X+VtVpkWw4vt6UjM3bjSWPN/ny+HbFk4t6JGv7f3aoUZop2HJx59uApVe2zR/awE5dLWE2TwXvYgWKJ4TDLGS6rAwjSIU5DKTCgyIVPAQoUHA8hctCIAEN9PIYAEmUQ4HGwVPA8Xg+PgeDwUrpngMNDhRAmgky8SW5WSh7CSYLF6gEIhJzzGFhYjc+9BKAQCAIYJN6x3KajlJUHongLjnPKDR2VtfAoP9bel/3rnFlBB4TqsIgzTSg+oKANKPIJB0RS9rO2I9yS5+D+JP6+upr+0s9EXm7IMBTiQ/wblXsMGRQHCIAIUISBI18TL+GZ5xcJjz2kwgslfIRvnPuT8bSnApgypgEQ3yfA8FBV1HKhlXWZbAeOz9ih06vbF88dZ1+8fPLvykrr/8++Vvuvbr3L8+YvEbKvOnaAff7csdZ2gAbMUvgcMBLmwVC37FJYlBelxTp5GJSQewI8CuCQcgOGnwFCIIhj9u4hqC8i7yD/4Im5x8XkMAJggMNnxbB86ocDFa+iMrxZzM4gWM8lEKasqHsMEck4APEcA+8oK+d7wgMJ1GelsMrE8cTOKieEIr4ngcaqOwBQWimvr16O1cxSXCWgfMnFz7uJXMFRdgCTeBEv1zHeJcKnboAmaS8AEffhN4DD370RAQ76AzBQ0Hgw60vjkZUMGAYjwk9kBm/wGhwDDPJGD6UAj3jp66r0G5/QwGOoDech/NO5ew50QQBhporcxh+Cwje8A94CQOBh1R83NAlo4T99K9/JthzWwvYdkbFrV4w2+/piO+HgGYck6vd/f5MXqbpgUOZFvMjnj+1jq0+UEBoBDDHKLRBMFGOdoWK+h1NSXA93EmBQhrIDBg+Z8CqAgRmpJEEHPEEOHoVa1PclJInH4RpeiHs6APBUSR+4D3sE7YAlxBJYAhyeZyTKQs6EEnDuHoNQEe8hwSHAAIZ7CwmVFQHpBZo+tS1FzoU4KDIKrj1A4PViB0nyshj/a+J1ONeed/M59nAL8KS8CTkE3iI8iHsMlTsgVA/wxH9AEsoBjpi29b5jvTUelNcnS/AYKLiUGzDwLkYu0YYSoDDTF29PhofhmOtuCDEgUmoHm/jJZIYvNhRA4KF7KVE7jAn8g/Bi4hug8RXJuu65CbmIzlsssFadxxjP3A6ZWt2+fH6Zffnqqo/lPRon6vf/xoYX2VsIv/zo/vbVy8ut80AxqTExaRL3o6jhMXxmSZ4EZQ4wuAdIAyQNBohrfbKgcA+S/NY9BiEWQCMZx3NIiMyCRWiFEB0kusbeQyopQ0zfQh5Hq8zzDAHBE26VIyi3thKqg0LCJE72RFIAyT3hRtDa56ZkE2UOQAAAXgyDOqD0Kuusa/GyWFzjm8H+6rH2AMT/xk7n/qeoAlJ4GA+3dA0gQA4QEcfxtDym233CBAstJeUbyXhBgO8GTEbLlVw8cYIPAQiMiyhA4g9r8bgyKvCP3zvhGQQE/1yRzt0rYWRUh/tFQh6eF2AACKa8Ayz+jAgDhcdOQnMPa7exrYc2sSXDM3b9SuUe8h4rDpl5cKJ2/+9s5CI7DMo8vf+EKvbHR/axS8+S1asnZYx3LWCsewryA/ZSXpTbAYGHiPBJQHBA4CGYruVcx9St11PUO3vuoIAIr9Seh1lqOzyHexOVcUxoF7EzgnRLqWMPAbB22ru1k4JEjhHxL6DguYW7fzxGkkjiMZgaxVv4M4QUMHjHxb2AFN4VXNfaUSaF7368yo/LHnfVMa8Z873gAAh/eEq4FYDAk9BWgMPbVn1AErkK5CGWzj3PUJ86Uk5fE6VkTIQ4KLEnzVJclDkHCAAgoDiPxAc8KzKDPMSCbwmA4B975yGAkzGBv/79LjyGeIgn8PAUcJBH6JzJDMAAWAideLfDE3b1kTrU93BMMqF/pfOsY5dBdsDYjB02o7Z99eJy+9NLJ73//0zuUXHr1jxv9l5C+oYDetrf3znJho6VAOpg1bHoCoFyFh+PASBQfEKoBBAk5L5PvEW9zbJ7B4mI3+YSdtoQCABHhGf8Fu/kli8BpYNDgnRhSrD8exLC9ye/EjKWNBJIBweWDmDgNeQtUK7cC2CJx2D2J5aP+3Qs3gEFljLzdwo8C8JjAAT+Atvftde1bstUhzL+HlvlXQQIwNNW7fD94AAO/wxMWxXDLW+b2S3VzwFGZYRbHk4BDDyGPAiejgkEQOEeA4sspUOR3fqj5HiGxHMADs8nxDcHjBTdp2/xCtRXHQ/D8Bg6x/OEN0ahCU/J0dwDJ+BwQyN+Ao7chAb8FSDwGHgLeA2I4L33UfV8wmSGFbSYZQtG1LE9h2bs9jVTfebqsL0m/M9/seTftfFAc+t+mbuXjM6zd+9cbA9ef4Tl///auw7wqqqseyGQQHpCKElISCGhk0BC6E1AQBGw0EQRBClWHNs4o6CjolgQpIqKo2AbHZ3xR8eGioXea2ihdwiIZQbb/tfa95yXl/hIQTCIud+3vtvOPe3uddbe5953XxRdHTPCK0EKuk+WEFCSiKaGMIYMVIwqdKkMQUgkjUVILKoLCcFZL7prVBMQhjeYN1vjC46GHNl4M0EadrxOX+JG6sM+bHvek8KN4o3T319wBMTNtTEGp2cZdDOusIqhaoERmyM9XSDGESQDDTwV50gKfhu48SN5IDnq4BqSQZUE4F8xpMLIVVEMeVRNSAjko+6WURi6ZCSHxi7YppKwHvZhH2em+FBNFYPt4MhOw+YoT8UAWdTAaYAkBNxPDhYkA/tKZ6QYnJM0JIMlEvZJBl6jx5CPzmKhj5kvDZvxmSoAyKCuEdIoSUyfUi0sIRToX51WxnUa74GUdHmtqtXoK1npjeSOzo48MKC6nNz0uGxf8Le1VSLO8eceRS21qzntbmrvyMQRtUX2TJQhQ9BZlWHcatg0cBKCBs4Am4pAMoAUJIcqBo5TJRQki1kzPa+nS+UhCK7VuIOuAGeqQAJ740kKHQl5c+1ohxuhisFRDtCRiyOZGdmsO6W/58ZNJDnsS3J14bLogzWO0sb9oRFTKeg+KSEMEagUdl0PabhOGw9jhpGTICSFqgiOkyRWaehqedwtEo3kQ3mMSzQNjmuswXQol+9ocSJAX1NB3RnkcqRWQ4XhWfdRlQMEoEGzDwj2hyosCcFjhgi6jbUlijVYVWX2IdJpIE6gLPadjddUOdCfqgIoVyc16D5RNagmJAXOa6zBe4B6cpuTBJ77xbL6SGhCd7mhc4DQlhbOuUrkyDMyYmDrvsbMft9Lr3TnBTZs6SsDZe+Kx6VqAkb2MLpPRglo7OEgQzgUQklCEmCt5CAZjNKoy4X0VJdIxB485x3DkBzqJ9M14AjHjsZaJwVwnJ3tGZVwY5UcxqXSG8ZRljcYhmR/f0FS8KEeZ3zUXQE5rGLQKM3fS6uxKwmoGjR2EKARgWNpj2IfIDlSacxY8zzB63gNyUEiKFGYB9JorMK8STYcJ0moHhrEgxg63WviDP6swPNzV/r1MES2T90drFUtDNgPHDRUMaiqhgx0P3UbpKAicJsKof2ItAzKPYpB8mDbPl235CAJeY5gXGGJoOphlILEoVooOUAmuraaHteSbKyf1gtrfbZyhXTLStDAfNKoVJFdT8nCN0e/X7FC6f7c/IwtVUMQGrZ1csdcESk/bXtMJj4Cf7gSYglv41fFoNGbfT1HgCgkTjjO6/Qu3TCSCsft6yaqGub5BsnAGESDScYblH6QhIElR04d7UgAugAARzqdncKNU1cERsafsNr3fzgakxg6VYu1/kaCPj+MlcZcF4ZqDZ5ESHvMRWOgHgy5DpWFJME+13WRtiEVhaThNV5EoWtV16oDQKXQfaoKQQLxepCEzzM4XatPvwHWlw/ZOGJbV4XE4OhtFYJqqooAcFtHae6TFBZMi+N0rzQ+sYrBtNw3JGM/Mm/GcBrXwcBVBdinNHL2KepiCUJYQnA2i2RQ9wt1pDtF4qnbx/JQB5bN+1fjcqmV2kpu6+LI6M5+svn9m0R2TPyhS5vU5sa8zo+lTW3nrhvbOvLGwx1F9s+Uth0h0ZVJCCoGYYmBbcYadnqXIDlIICqIjS08yoG1Tt+CEKoWUA/GISQLb6yOeOh0JYcxFt5c3iwr71QMEkMVg09vMRrbB3z215BUDLpSjAHUaOkmkRBepKgPI25Io38CRv84riOBaNTmWBqOKTEAksTjboE49b0JYhSF55QYzAfn9N0pnOdaf+5KdwWktorB9nCkti6UGjO3YWw0eHWJzMivxDCwP2ay+/qKDQnCPNB3HiA/XktCcFufb2Btn28oQYxbpf0LoqoqoI95jOcYi5BMJArT2xkqqhDrRiJyMNOJEwTmsT3k6nZhcmMbR159oA1sZ4rMGt9vkjGr82cJqOAEDGrhLB/dqbzs+eIuWf7RI1KRLlQ4iUCC0J0CGagi4Y0BuFzcVzeMrpUhh8YudKdMMK6vpQBUEN5kdqzHX6YhYK2qYdwMvTlY2+cZ6hMDJAZdKU6FaoxBtQA59IMFcHN09IbBqvtEUsDYG3ENw0+fAIPHdl2O+jRuc4wqommwzbWSx5CESuJxt0AQEkIDcxLCbKuSoFy6clQuPgHXB47Y1ifN9OVRd5JCVZGKgbYyttDftGCtIzKgLhMJgD5R98VrW90tEEIHFBKB56gWvJbb7DNjxJo3jRjn1X2Dkauxo2yrCOpCgRB0VzXgBuxxdcNMelUMnjPlkBzqJtOdwz2scZm0Sq8rf7rAkTFXVJHcFWNk3+KxOxJqRlQ1ZnV+LSnVnE43QEUeG5oocnim3Hc3fNIKaa46qGKQJFQQ7mPbxhwazBtyKGlw3HYkiWFfNrR+q1UNzu/rbw2wTyPiS4VW2u3DPhtnkBic9eHrIHXhvmiMAfAhno7odIVg8OlehKgHQ+a6yUQXJAGVo8mTbhq75nVUkjokAEmCfY+CkBw4pmuA5GBgztiGH9DTWSmsSVYl8C1uval4JDkNjSO4PpRju2F0NGirCHbUJ0kINXD0m8e9AuzAouRgHoTZVleMykNDptpykEF5auRUAEDdVdO3JIOdsSKsC8sAXdOjvqoaJBsnUKhUKJt1VtXAvj6AvEyqJ7WXmzGgXt/OkQWzB4jsflJGDWw50JjT+bl0a+BMvR5y+eGMy+THfc9KRnMYdyUohpLDqAhjD5KAaxKHJLFulRIGRPEOxFWScdPY4TaQ5A3kTdWbiRvr/S0pdUlgZPzSoH4Sh3EF/Hi6LfoLPLo5VAoaLYyeoz6J0GC8lAMRyjV9SspBFcrVx35jrLkPOE0muUQhKerT2HENt3k9lYUk0fxAEI97BtC94myWzlZ5KQZnpeyTbxKZxLBPv9XoOAobxdDf0qC9NGAFDdwYs7otMEAliFEM9puHCBYkC9OSbCYPpuP12qfoR1UNAmWzDupaYVsJgvNWoW2Mp7EQQfJg8PJM3yI/5qt1MfdP1Z9t6S3lca5/60i5AbYy87bGIjmPyn+ev/bNcuXKGUs6T5eQSk6Va1s5W2/t4i+Hlt4rSz98SCqRGGEM2k0sosphpm75YJDH+ABQXxsxM1LauRxtaBjodH2+YacecdN02pajGG6OBolQK89LcRiF+SyDU7d8nlGXU7YwSp0VMi6PBtIwZBICKN/gUUWF9IlSodkUhR9I4ZeJdcZkKZ8GtWhiSNIIhKgLQlBh6II1MSSxCuQ9u0V10qflZrpYFQNxDl9X4Q+p7HtJfHagMROMkkZE0BBJEBqbkgPntC+ooj6M0KqIR2UBVQ5u4zgVmCM4r6HqMD9LHlUPbiNfVQGAZKB6qWIYMlBFrLJ4p7V10bwNWVkPlq/E4Zrtwv1EYN4yvZ7whdc/9wyVvV/cLkdXjDmSXi862ZjR+b3Uj3Z6UUUeH5oscnCaPHQvDNifgTmIoq+OWLcKSkGyUDnoSjEAVxKgE0kO/WQPp2/NqEUjUXLgRnl+6mr8dD691Vep4Uap8WF05ivn+hNVuDQ6lUqDhhFj5C8H41ZCZDwlFbOmSkWuQRR/bBMVQZCKzaZKBRKk0RNSvj6NnWQwKtIQ+WgsAuIwBqGSWHLUuT9PMTTGACn4Ww/+8pL1YjxExdAfDHHkpfHDoNTYOErTKA0h1LhJBrYf/eAZJGyf0IhJDqRTozd58TpVB6smxvjVTcU1dkbJTm7wHNMxQFf3ypCBhm4JofXDcW6zLJ3dgvEzPcG8te64xhJZyWEGN97L6MsltnY7uFblZBTc8fmzLhfZPl5uG9pmhDGfP8bSvWG5GaNaOzJ34kUi+2ZI564YWXTqF2phYw5O1+qbuIwzQAYShaOhHW1UQXhzcfNoOKoaJIbxh3UeHkamLxSSJJypYhAOY9RnGTRSKAanWBk0kxhNJ0ERJklFGLc/YohKLaZJ5ZbTXbSarvv+IEBFKIm/KslU8UujwtBtoopMFse6W+mAzmZBJRoYd40xBuMaPnGnK8dnGPqTZLpUjIMwWDC41VkgBrowUP1JKgxODY0GS9D4YewckWl47AM1egweRD7ieBPCkgfHVDFgmDRQTUtSmPyZnvEbDVifcXgZuLpaJIMXMVgGn2coebDP/BkXWbKpW0WwXOSh9451xzbz1ZmzXuIf11OubhsmtI1n7kiTHzY9IP+Zdc2/ztnfmZ+tJSjACb+mpbPhpo5+su2jWyRn8XipmtBBnFA+WefTcb6uzmccUA1+rrIaCMJj+nURjj64gToisvM5knFNmYeB0SWJ402jkjAQp6vCmR/69CAGg199mxbG2giGjVjCqTdeyiOeqJg1TQJazJDKQGDLpyWw1Uyp3AwkwX4lbFdqPl380yZJhcZwtTKmSvlm06VcxjQQYgqIMRUkATka0qUCOUgYxiIpUCd9HkKiGMXQeoAY/AgB4yAG4HzIVxPtsH+LTaJo22hYMDwdlS0ZsE/3Rv9s1AwS7AMdnQns6/QrDFSnVpGnfVFUCcf0PM5+NGum9+SNPuZX8vmXDCQEBxtdm20tg31u6hiDa5mWx3VwQjrmq/XGMaoJ618T2ySO/uTZ1IXlEjH9pEuzRLmlvSP3XFFF9n35J9nz5Z376yVXTTBm88dakqo6HUa2cX4c06ea/LDlEXntWRhxBGMPEIEfna4CF6s6yMFpRd4s7VDedHY0oDcLN4g/uonljcZapz4RV9CVsh8Xsx8zYPDLUZvPGzjFisC7POIH/6wpUinzKQmCQgS3mSkhrZ+W0HbPAM9KCJQjCGkCMyfjPAjTGoQBifwz4Wo1nwEFmYY4BETJJEmgHnS1GH9QMdRdw5qvkvAJOGMc1oNTtfoVRJA3jvWHQdl/kCUxaFiW9GpkWNNw+TX4GjByJYk5xv6gAXJfBw0cI2jgTEvYAJ0Di5KD26YPbfpoGq3NG/1IqGtHEqAudq31wvVMD3dI05Ewmt7cE0+9ccyTN10/KpIpl9ssS10sd8Cr37CZjEbccUOH8rLklQFycuN9MuTyJv2Nufwxl7YpzpiRkNNn78yQn3dMkX+/2EMmPBIiUydUlelPRsmzU2vI8zOi5YVnYmTOczHyyt9jAa6j5fU5cfLPV2sB8fLGyzXlzdfi5d//TJS330ySuf+qLe/8u7b85/+At5Pkg3eT5dN5deXLz+rL4i/rydKF9WXZkqayfFlzWbG8paxY0RpoIytXYHtZFtatAOwvbyUrljaT5cCK5S0Mmsvy5Vm4NlOWL24syxY3Ql5pshTrRch7wWd1UE49+Xx+fZn/cV355KM6Mu/9VPngnWR591+15J1/Jcrct5Lk7TdQd9T7jZdi5Z+vsA3x8vpL8fIPtOu12TXlZbTx5eejdZt49QXu15BXX4yR1+bgmAXOvfJCrLw0q4b2zasvMm0M9qsrXsE2zytedNdMS7z6AtIiPftT95E3yydYF0Lzx/nXkI59/jrrwn2U5Ulr1lrv51l2tCdvtmH2s6gL1i/j/r30vIs5s2JkNu8pypz0cLSM6lhRrmvhyOvj2sr32WPlmYcumW7M5I+7VCjvlL+iqfMeScKpX9n5hKyelyoL3i0vyz+sLCs/DpTVn1aW9Z9Xlk2LAmXLEmBxZSBQti8Pkp2rg2XXmhDZvTZE9qwPkb3AvvVBcnBTiBzZGiq5OSHy1c5g+d/+EPk5N1zk6yoi39QQ+bYmUCsP39V28W0CEGeOJQGJ5hjT4fg30UCMi6+riZxAnifC3PWxcPnpaLh8fygM5YXJt7tD5MSOIDm+PURytwXLwewg2bcuUPasIYJk16og2b4iSHLQjm1LA2XzIrddW7DN9aYFaDPA7a1Lg4Bgsw7SY5qe/QFsWlhZNn5ZSbKx3sxzvB7IRp/xmD23CdcQG7+opGCfbtY8kCfK1fwXYxvHt2Gb2Mr8cK0eQ7occ1zP4Vqth607y0RZmvdCW4cglB0kG4kFgbLhy8pAoKwHNiLNGtzfcYPKybXNHJkwIlmOLb9Tlr45bHlURGCwMZM/9lIl2Kk1tJWz5+ZOFWXD3JvkxPoxsvi9qrLo/QBZ9lEwEKhEWftFiGxYEIpOdbF5aZhsXhYuW5aHybaV4ZKzKkK2rwqTHatDZff6MDmwJVJyd0bJN/uqyMnDVeWHo7Hy/dFa8n1ubfnhWF0X3Nb9ekADoD5Qx+zXke+PpbhAmu+Pxsv3R2KAaGxzXUPz/e9BlhElX+2OlGM7IuVoTqQc2hIBooaCvKGycw3rhDquQH2XhMJo3Pqv/zIECJV1wJrPgjEQBMua+cGy7gv3mK5Psc10qz4N0uvWIh/2zWpsr/k8BMewPT9I9wmmW4H+W/EJBhumIeYzjUkP8HpbBvNeg7qsQz7rsU+sQxrv7XWaHtcx/0+CtIy1Jh+utV7Y1roYrEKZKz7m/UR9PsF12F+H+zlxtL8MznTkz73CZdsHw2X/gltPtMmIOzf+uuBcWVKrO90Rj/x0z+VRcnDRWDm4YqQsn8ebi5uKG8ZOJzmyF4XJpiUwNJBjy3KQY1moImdVuOxaGwEViZC9G8Pk8LZIObEnSv53iMSIAQkSYOTJWCfB8FOBRkBjgIQgGbhNNARIlHogRjKuAaGOJhrEKSm+P1IdxKgm/wMxvgUxTuyuAmJEyJEtYVCuMNmfHS57N4RD3cIkZ0WoEmML6qvEWBSq7WB7SIi1MByPYRqjUhIA65GOoCGqUQP2nBohDcxcq8aohglDRL4kBI3WkmQlyLEKpHHzMWkNNB3OWZKooaPPLSEUJDPPMT+SgXVBerceyPdz1o11d+EhLc4pkU1Zq1Fn1o/rbAwWsx+uJEObO3J9hwqycPbl8s3qu2R4vyZDjFmULd5L62TnL3S1Jo6qIyfWjJfdSy7HzQ3QDrfkoIGRICQHVYPGl7MSI/XacNmXHSkHt8JYd1WR7w5UVUOmavxAYigJQIZcqgYJ0ARoapAOpAGuanjUg6Q6UtMlxlGuo72IEQnXLTxPMTaDFFSMta5iUMm2QdlIZBKDBkaDomIQJAYJoiOzOUawncQ6GJzd57U0SELT8TxBgwU4gKyyauCLIMjLEkXPY8TXbWO0+QniGvh61tUQggTQ44ASxJsQC7yA/TWfMR9zDulVyUzeHhIDmzCozX0uUEa2deRaxB1vPdZevl19p0wZc+FTxhzKloILv8zYM815dUQrR16+v7V8s268bF/UAQYRoOTIXgyCwDXZhJGH5Ni+OkJ2GtXYvylSjuRUka/30p0CMXJrArWARBg73SmQ4HgGAEIczwSa4RhJQpAgII26W0muOwVSqTtmXSolRhUQo4qrGNvD8ynGnvVGMVa6xCApskFmEpoG7nFbYCSWBDxecHsjt5FmHQxxPQzNupP2nLpmPA/jpZLQ2FbC4AmP0ZN8NEwaM0DlIEn0OOqw8uO8Ud0ariXHWhq+2VYDt+ThcUMEEoD1JVmZRpWO2yyb7WTded6QxsKWk700VD5/K0hGdy0n18C1mnl7Q8ldOlo+mNX349DgAH9jDmWLryXQ3wkbmOUsH9HGkQ+m9ZQTax+UbYvS0amV4ErlxRs71kQgzoA7BdU4BNU4rqoRCWOGS0ViKCmoFIASo7n88FULA2yTFLlUCoJuFVwqJUWC4iQU4ySI4VGMveFQjDAQA64U3LeDRjF2rwMx1iD+McTYDHXbuBAGAYOiUemIb4yHUEM3Rm9BIjD9RhiUPbbhS5ccJJmFpoWh0QhdF4cKQkJwVM8jhxLBkIOulVUTe86zzfSsF/IgWF8SwqMYatTMF2UZI7ftIVx1cQll3UG6XOqSGdJYWLcwGwPHinkh8pcr/GRQU0ceGVJT9swfKWveHrI9pVZEnDGDsqWwpVqoUwdB+4EbO1aQJa8MkmOr7pFtS1Nk68rAPNXYgCB4YzhijQgNkE+qO+XGGm5cAWWgShwnIVq5pDjOY1QPgPFGLtwpA6rGScQZJ4/EucQ4VEX+B8J9p4qBYD8HZW0JVWJ4FAOuFImxBSOit3GrEcN4aBC+CEHj34A0HsPHtTyWvQiuBwxI1ceAZPOQhdciP5LJumZq2GrIrrHTvfK4ViQItpUgOrK7BLHE0DQ4r/mREDwGctBNsoRwSeGWRQIpAQwZtGzkwfOs1wbWz8AlixkgTPqNaA/XDw2pqOT4y6XhsnHu1bL70xHfXNAivpW5/WVLcZba1ZzOUJGTt3UPkg1zR8nh5bfKjpVxsmt9MILwSDmwOUJy4eZ8tz/SJQYCalcNYPhKDEDVoo1LkON0o6gUDMTNtocYUIwjsXmu1AG4UnvCjGLAdQMJD6K8fQi8qRg6I7U8VLYucxWDxk6XiAajhmLgIQUIoGSAa0iDp2LQ6EkEzmopuA2ibV5CkoToMZ7fsIBGhvTMA/sKky/LYCxjXReSUt0tuFBUFEsSQomBwNh75oqjv0cx2AaU4U0M18BdQnDfDfDdY7ZtJMNGuL9KDLaZhAeYhtfzury4MUwm3uIv12Q4cK8qyZKXL5PDC0bJ4EsbnN+vsJ+tpUm8M5RB+z1XREnOR7fKwaUjoBo15PD2MDmxF6rBqdvceBg73alGrjJ81dKFJ97IAqgeDMZJEKSDa/V9bgqIkQRixIMU1eX7Q5EgRoQqxtecrmWMsTU8HzEYY3BSYBNGejV6NQ7XMJQcxmh43FsBaOAbYeiMnVzDJwFCQDCQDKTQtcGmRUi3MFi24DyViemzkYcqC7e5Zt40QpKCBg9YkigheAyE8JADhsp9BuckEI1cXT5ew20YsSWHjvbcNwSikSvh0SarFIwFC4LxhiWOPWa3Ny2F0q4Ol2fuDdDp3FHt/WTe013l6KJR8tcRWb+fT4aei0ub2s7YESDJuEE1Zdent8uBZYPk2/0MwgFVDRo9FQGgG/VVWwCqoW6Ucal0pioN13AWK9WNMQ7HGFSXkwy+EWOc2BWhs1JWMThVu2stp2pdY94CxeBIqIpBFaDhAGoIMNh87pIxaJIhGwa/GWsqDkH1YbyiKgQibFsWotPBOiW8FOmWBps0ecQhWVxiuq6Ykg9lq4HT7THxiCoJjdsQglD1IGGM+0U3KR8pAB7LF0/QpULeJOHGhTB4M0lisYGuH5CN/iDcgYL1cvto05JwECNcn1PtRKw4++HKMqSZI8NwL99+vI0cWThCJv2lXdmT8l+78OcxXRs4Mziz9eTIZNk9/w45vLI/DL6O/PgV3SmrEFQPbCs56FLRzTJTuJzaPZoCYiRDMWqBFDUQY0CBQIz/7ncVIxfB9+GtEXJgE4PvMCUGXamtMFKO4NZNUrfCixg0CqqEjvA0WpCBRkyXySWDixxORxPIbwcfZgLbV4IUy0EOgPs7Dex5EtOFSxaqSzaViLGKURNbHzslqySBwVM5qBaWICSAEgPnSQoG354YwZBBlQXnXSWkAuQRwqpBNtSA5bLdhIcIhgz64FYnU8Jl6woo78YIeX1SoAxt4U7nvnJ/phz8Ypi89OiFb1UOOF8+S1LKC7rRr1ea88bwlo5MH10fJLldDq8aAIK0kB9PUDHaAyQFgbiD7pVO39KdgmLAjTp5OFbjDEuO/yJ2+WYPn3y7xDi4yVWMHatojBzFOWobxVBjyDNGNRYlC0dfN54gIZjeBdWABHBBotE927EKRFgZgm2+GhMme9aFye41odgmuA1wDexaDSKBHNuXB+OaUCUTSULXjPmroqBM626pSwSFcB/wuURQwhhSeJODa324ZxTDxg+uiwQCUC0Iow7qXtmBAPskg6qENykMIQjGGsRe9OnbTwfJdRjcBmc5MuvPDWXPJ4Nl7rSLP6sSXqnsNZIzuQRUcAL7ZDjzhqOzn7srDSS5VQ6tHig/ft0OJLGqYadvOTOVatypRHWl3Dijqgbg3+yNlOM7XVdq/0YYKgx0l3kdhO6MujAwOqsYFiSKPpvAWgNrulBIS/fJqoQSgkrA/ECInQANnqq0d10oygpBTBOGcsMLgOf5HlmonidIHBKFxHEJZtwwEsW4bkoQHdGhAgyKYfBWFSwsIfIphiqK6yZq+7xcKEsI100EEYyCcFvVwRDCgpMLdD/1wa3Bfrio//l7sAxvU06ugWs149ZU2fnR1fLJrJ6rYqoF/b6+xP57WYIDnIh+mc5ikuSFvzaVXZ/cIgdX9QNBmkNNTMzBZxt8lkFXCtAHfWZmisTwDr5ptDRgujh0paxi5LlSLiFs0M0RVINtkIJEsqRQQhgD5rtXSgaAZKDRH4DxH4TrdojYzOliAOtDm8LkCLZZn8Obw+RQdqgcBJjuYHa4HACUOMiLSrMT+evDSJBky2LWiwRx3TtPnWncSgBDBhDAJQjUBIrCfZLCmxi6jeuVDADbqe4TiFGQDJYQW7F2FYNpuO++7rMDwfjBrZHywYvBMrJdORmEoHzyjUmS894A+eyFnptT4sNqmdtZtpyNJayyU+Pq5s5qkmTOmEzZMe8mObDyUvnxeEP58Vhdd3aKLhWnbU0Azpmpr6gYMMT9GzmK85UQGDSMjUauSqCGAUOxhqOGRneFhui6NRpkY+0hBQzWukp7oA57QYj960PUuA+BgHxhkWUehVId3YZ1Trg+aCRyc8LkWE6oHN8eJsfh5tHVI3lzc5gWbh9JBJBQJBjJtguu2S4lohvg25kuktcqnlUSxhOMRzTgJuA+ecgB4ljF0ClZkMElBJTJxhN0FS0p0G6uSQqSwSWIqxgkhUsM9/kUyfHhHEOODL42lCBb3+0vy167dGfj1Mg65jaWLWdziQxy4kCSDZzdmjM2Uz+MvX/ZxVCPBCBWfuALhYcRZ+yLkBM7+co7RmcYG0djvhq/na4KXCH7HENHYMYTIIM+n6DbZFwo131iDOASiq7YbhICJFNCbHBHfNegw2Dc7tN2Gj1nxb7eTYTLN7tC5ds9oSBrhNbru33h8t3eMN0nvt0bgZjITX9Cn7+49SaxqDYHQGw+ud8DQlJFbEyyZSljA7febINLErctdAUt2QlXZXBOYw0QAiRw3xVz25unCnlQ9wnQd96UDCAGFGw76sA3CHauicBgA6zDgJAD5ZgdLCPausrx5IhassUlx76MBlGNzO0rW36LBSRJAEmySZLZ92bItvdHyt7FXeW7A9UQa4TLyQPh8jWMMndrMAwMbk42fytCF8gNlLctY2AdpL+D2MZpVUB/d7EkEMFxsI7Wu5HWjRlIhGAYaRDyCkaeIXJsW4gc3xYkJ3aEyDe7Yfgw9v/uC5OT+8Pk+wOh8sOBEPnpcJj8dCRCfj4aIXIkTORouEhuFSDKC9jH+Z9x/ucj4XoNr//v3iD9PcnXu6AwJMu2ULcdG4PNb0mCoWDBsh115e9B+PuPvN+MAEu4hsLAFdu8yD2ukw9sN9JvXcbforAvOKtG143A4LEyGPtQKrh0+uLlapYTBKXk721cku7DoODGUUSoHICreGBrlLw7qyA5+pEc+zPqR6Wb21a2/JYLSJJoSfLCX9Nl54dDZd5rfaRdv0HS5JKrpcWlAySrZx/JuuQKaXbxZZLZvadkdO8lGd16StMuXaXJBZ2kaacuup/RvTfWvZCmt2RefLlkXtRLr8nq2Q/X95Wsi3oDl0pz7Le4fJDB1dKyzxDgWml1xWBp3X+4tLlyJMofJu37DpEO/YfKBYNukE6Db5bOipuk85BbpPOgG6XzNcCQm+UCrDv0HybtkL5tv6HIY5i06nuttET+LZF/i8sGSgu0oXkv1KNXX2mGemVe2E0yUP9MrbfbnoxuPbCNddeLzTbag/2mnbsCF0pTHr/oMslAm5p2vxRrtFHbifb26AP0dc93vcTthx79pFnPAdLskgGSCTTrNRD7V6IOAyWr99WSdSnQ+yqcu1LSe4+QwVemy40dHH35kG7Vlnf6WnI0NberbCmNBSSpRXdrOEjy3F0NZecHg2XKw9dJpaTR4lS7RZyaN4oTO0qc6oPFiRogTg2sY64DhuHYIHGiseb52JFIe4M4cTdhG+vqSFMDx+NvEyfhLhy/A+dvFyfxHmCMOEn3iVP7AXFSHsL+/QD2U8eJ02iClEt7Ur9yUjH9SfHPnCwBQOWsqYqAppOkIs5V0G9sIR0/C8SPRjAvXp+MNfNPQDm17kY90YbqqFvM9ajDzW57alzr1jtmBNbD3bVu41i1gcBV2Ef92S6umb4mrmf7FGgj2xmDa6szL+QfdyvaCsTgeE30XS20Nx7tTbjTbT8Ri+NEAupl+yHhQanXqIsMa+nIkOZuQE7lWPpq771lynGOLCBJTRu4z7i1juydN0BenzZQohrR+GEgng8698UNvQb75ptZ/HSnflAO2/zwgP4lGL9gyC+MwGj0T3JgKPwsj/571D1SrsFYKV/vr1Kh/r0S0OQhqdzsEQlq+pAEpz8oYS0ek8h2k6Rqh8lSreMUqdFpqtToOFmqt35SonEspst0qXHBVIlq8bhENH9Uwls/ISEtH5NA5OGPvMrzH2r5fSx+ZpTl6n+Ww6D5/ySevyZjvbCtnx0dAsMG6bXubCfS6cccAP0mGNqjwDWEfssKafULk8iX+ei3wrDPj+mloFx+hlX/3BNE4Icv7L9o8XvF/Is5/Zs59gcIUnestMpqKfwXMT4InD46BQF5P1nySq+dIEcDc3vKlnNhCa3kVO+X6SyiuzVpVKLseK+P/Oe5fhKfAYOIhhHYb8Xa703RmNRQYAT6NRGexz6/Zmj/Vq0uDIHfz6pzN4gxBiP+g+IPVGo4VgIb/01CYeSRbSdKVHuQov1TEt15msR0AjpOlfhuT0ut7jMl7oJpEtt2itTsgGNdZ0ps16dBmikSBSKFt54gQRnjQLQHxS8NysGvO/K/0xNBTPtvVkpYGiqgBg0FJBl0m18Y6W8IQbLzONvHbRKfn0EiUUgs7OtXSa52r+W3wjRvlkXDR3n8Gox+2R7E5D6/Vez93+78Cwj9W7cxGCTulU4t0/UTPcP4bOrOepLzXn/55LmLNtVLDE8xt6VsOZeW4AAnvE9TZx5fSxk/JFY2vd1bPp/TRxq3I0nMqKuGAiOLh7HQcHTkhIHYb/TSEJQYGCFBhPIw2gp1/yIBJAVG+pCWj6tSRLR8QpWiOow9pvN0ies2E6SYqUSIaz9VEkGGlF7PS0rP5yUB2wndn5F4ECYGqsJrSKzgzIclAMTz0z/1h7tCMvJzQDROJQfqZD+yzXp7PglExTDt4baSneTgGseVHCC8fr4H13BfCYa1hxzMGwRRxSAp0Rf8FCv/Z8QqBhVFFZTEQB31X3LvE/8Gf5ZLWqfIzSDH8DaOzLm3sWx/r5+8P6PrytpxoWW/6TiXF/8KTuVeac6bfAv4/gFRsvofF8mKf1wmHXuAEPTj+aVFKgc/0sYvGXK09IyQMAD+SU7KHYghxkhFuD2Vmo6TylALGnM4XKUqdKHUfYJSgBjR7aZIbIdpknjRs5J8yfOS1O1ZSew8U1J7/l3qXPqipPb6O47PkoSLnpFoXFelOdwrkCsEblYA8i5vPyCnxoey9X9JSA6M5vwPP5KZBq5GD0Wg0XuI4AU9ByXhmmn1vxVJHuShJKNSgBAW/Mqk/dKkVQx+pyuV/YF6eBTDEoPKgX5oeKv0bRsrN7VzZFQHP3njoQzZ8X4/+eeEC+ZXr1I5ytyGsuVcXiqUd/y61ndmjsLodnfvUFk4q5NsfKuX9LsKo2k83QmOjIYY/IibKgbcG8QX5WCwFYAAkCIw61EoxhMS1moCRvxJcKUmS1TrSYgjpknNbs9I3IVwmdpPk7iO0yW5xyxJBSHqXDpb6gL1Lp8jtXsY9QA5Yi+cLlWQTyhIEdhkHMg3Tsrxr5vpy+u/V2GkpovDEZwGTBJT5agAGk9gX8lAFTSEYDylx0AG/dynURfrOuqX7GH0JAcHBMYz6k6RILwG4L5VDHUrSQ4SFbDk4F9ap94vVdOGy+D24frF9Zu7+MvcCS1lJ1zZ5+5r/VZ4iH+Q6f6y5feytKnp3DuimSO3dQmQj55sITlvdZe7buovfvwEaTKMkv8QmwTDSKIx/E38Gj4k/o0flkqNx0lQ5uMSkjVBwoDI1pOlarupUrXlU1I1a5JEt54qtS58ThK7Py+JWCd3ex6KMVtSLgZBes6Rer1fktQes6VWB7hUraZIdcQgUW0nI78nxL8RgnF+fpQfr+b/n6egbP7VQS0YbyxG+5pAAt0dGHg8yBAPctCQ4xmAY5t/P811NL9YiACdn1e1xh7Ha7Gmu1QLJGEskwQy1MJ+LK6JwznO7vFPgbhOolKh/Sy/NvqE/0nCPknGdi2ew7Z+hfIBqZ1+hVzfzl9ugPt6d49A+XRqW8l5s5eMH9F4coDfefyfBJXTY04HQUBVoPq5ioC0mKgKjWMC2vSIvm9I9wC5rkeQvPREC1nyZlcZM7avVGp1l5TLukf8mv9VKra4RwLa/k0qt39QgjuOk9BOj0h4l0cl4oKHJbLDOKnWbYJE93xKYojuEyW+1xRJ7DNDkvo+LbX7PyOpVz4rKVgn9YaSXPa0pAx4Vo/HXTJZqnV5TKp0BdmQV0DbB6RCy7Fapl/TWxGYX4/1TeKXcYv4NcF2oyE4dh22RwIjgOHilw6kDRW/BgNB4KuwPwxAmkaDsX+1u61pCVzXFPkwj0bX4twoN2+W0Zjnb8T+n8QvE2h2m/hl3YHt25EO55sgXdZdwN0492ccv1Pr6bQYKw079pSRlwTIsO4V5baB1WTuc11kwVu95Z7xHadWbBwdVKFhjUhf9+AcQjUgGCgH+LLnU8KpPX9UcRAGXAbMBJYAe4BjwFfA8XMVyahjwscj99d5Z8iPKW8PktS3r5HGHw6TZh9fK3XeHS4J/zdSEr2QZDF3lAuvY8nYT37nei8U3AeYxjudySdxrinj7RFeGH4KnOrcdQa+znmj4PXY/z8v2PILPZa/Xxq8c5XUnXuNpM4dLI0+vE7S5w2XRh8M+zn+g+EHkj4dlYu+PpftgHWjre4DVgAvAAOBKMCXreeDk/zR8MIQBTwIHADk94qkeTByIBFI+GiEIvnj4VK7AJJx411cZ+C9/etQsKzfE2z/uX3o9p/2oY++/h0hF3gKiAN82b7CSf4QG75xJXAAkDKU4TzGceBGwBcHfBKkPDAZ8JVZGcpwvuJVIBDIx4d8OwDJ8RLgK4MylOF8xwdAEODhhDc5iImArwvLUIY/CqgkHk54k6Mf4OuCMpThj4bRQD6CRALbAV+JSwXxf4oTx3GAOKk2x3eas4XSLLsM5wSOAUmAhyB3Ab4SlhKulGrNaKBAs/YS7zPN2UJpll2GcwicqFKCMCjZYA4WE15GBAT96UofaSxKktZgTnsJOmX6Uir78TRPPh6cikAlSVsiFKM9vsr2QtjjBdKfCiVuw2n0dQHE9vEqS1GUgveQsHzp0yTWZ7rTwkEglgTp5XWwCBSskAvfnVGStPnh28UprbLz3/hfIv9N+eVN9sbp3sAStOdXE6Rk7f01fZ2Hwss8VZ3z7pXFGSUIcR0JMrPAwVPCVkgb73UjfHVGSdLmh1dneY1YpVe2eyzftV4qUzBfJUifHnlpC9z8ouvwS5SoPZ7zp2ssJWvv6fd1HmwehIcM3mX6Ui7P+TgJ8vTvGSfIGyTIqgIHi4eSdMaZTluaZSvyG31+QviAV75Fpi0KRdXRc/5MGksx21uSvvbAS4EKECFPjX/pannOoS556c44QTaTIHzU7utk4ShJZ5QgbWGd4kFplm2QlxYowui9R8jiG84pUFR7POeLYyx5xln8vgFOmyA+yjtVzEd45ZfPzfJSD96ns0iQr0mQnwocLB5KYHjFT+s1mhRmdKVZtsIrLVCoX5/PPTkDN7Co9nidzw8fpPeuW6FtLmZ7i6qbr/IKu8bnOS81M3mcRYL8fG4RxCtdoUZXmmUD3org66bkG20tCp0BKgGKao/XeV/I3zYfI7oPFNVeD4rsax/lFXaNr3OeY3n1OIsE+YkEyS1wsHgosjO8UMy0xW5oaZadTxF8k8knQRRn4AaWpO0G+etTwjoUo70enEbdCr3mF+fy1MM77VkkyAkSZFmBg8VDSTqjWGlL4OKUWtn5XY0iyzbIZ6C/VklK0nYPvOtddHyVhxK293TqVtg1Bc7lKVl+IpxFgmSTIFMKHCweStIZxUjrc6rvVCiVsks4c5UP3teWxEB9oCRt9+B0yj+N9p5O3bwU6hfXeOXH+3JqZS6AEt2bQvEKCdId+NnrYPFwRo3U+2YUYxQohbLz3ZwS34DSJoi3EhRvlD2t9v7auhUxzZs/FioEZ44gg0iQAKDkz0LOpJEWNor4wm9cdj5jKdRFcm92QRUqdpBbHBTaHpeIBcs/tbHnGad3XsVvbwEUeV+KLs9Td+/Yp4g65F1/Rl2sPUBVEoS42RwsHF4d4Bteo2MJ0uYZUCGja6mV7T36ngr22qLSFtK+wlDs9hRwi36BAgbkbYQe4pSkvUBJ7ovP8goc/wWK7rOzRJBHAc/bvMFA0S8snhUj9bqphY0UpVZ2CQ0GyDcCW/wa2S9J2wFf5Rd/RD+LBPFZ3i/PeVBM9ToLBOG3GGKBfD+YuhjwlfjsohguzllDaZZdhnMZQwHlhTdBiPsBXxecNeSxP/8o+FugNMsuwzmLpwEPJ7zJYXF6076nBS9ZLUkweEZQmmWX4RzF60AFwMMHb2J44zdXkjKUoZQxDchHDiLfTgF0A7YAvjIrQxnOF+wD+gO+OFAoQQjObnEKuIQ/yS3DaYOfxfR1vAxnGjnAPQA/WOLL9hU+D/oAHyZeADwGzAf4BZQjAL/+wJcdy/Br8dHw3JT3hx1PeW/YcW77TFOG0wFtlLa6E/gSeArgjG2+D8T5xnDn/wHIOT5XVxVwBQAAAABJRU5ErkJggg==" alt="" width="50">
         </a>
      </div>
   </div>
</div>
<script type="text/javascript">
   var logdin = 0 + "";
   $(".new_pay").click(function () {
       if (logdin > 0) {
             window.location.href = "deposit";
   
       } else {
           LoginTrigger();
       }
   });
</script>
</div>
</div>
<div id="verification_popup"></div>
<div id="info_div" style="display: none;"></div>
<div id="game_info_div" style="display: none;"></div>
<div id="comm100-button-8cb529b4-9648-4197-b81a-6d2a248a387b"></div>

<style>
   #comm100-container > #comm100-float-button-8cb529b4-9648-4197-b81a-6d2a248a387b-2 > div:first-child {
   bottom: calc(var(--cwNavbarBottomHeight) + 5px) !important;
   top: unset !important;
   transform: none !important;
   }
</style>
<div class="hidden to_top_cont" id="js_to_top_cont">
   <button class="to_top text-center" type="button" data-role="none" id="js_to_top">
   <i class="dynamic_icon m-0"></i>
   </button>
</div>
<script>
   $(document).ready(function () {
   //var iOS = !!navigator.platform && /iPad|iPhone|iPod/.test(navigator.platform);
   var url = window.location.href.toLowerCase();
   if (url.indexOf("betongames") > -1) {
   
   
           $("#footer").css("display", "none");
   
   }
   
   
   });
   var url = window.location.href.toLowerCase();
   var passChangeRequired = 'False';
   if (!(url.indexOf('forcechangepassword') > -1) && passChangeRequired.toLowerCase() == 'true' && !url.includes('/account/agent')) {
       window.location.replace('/Account/ForceChangePassword');
   }
   
   if ('1093' == '2' && 'false' == 'true'
       && 'false' == 'true') {
       if (!(url.indexOf('changeloginpass') > -1)) {
       window.location.replace('/Account/ChangeLoginPass');
   }
   }
   var getGameUrlTimeOut;
   function getGameUrl(controller, action, url = '') {
       this.event.preventDefault();
       $.ajax({
           type: 'GET',
           contentType: "application/json; charset=utf-8",
           url: '/' + controller + '/' + action + '?url=' + url,
           success: function (data) {
               if (data.Success == false) {
                   closeLeftSideBar();
                   clearTimeout(getGameUrlTimeOut);
                   if ('1093' == 2) {
                       $('#game_info_div').hide();
                       if (data.Code == "168") {
                           $('#game_info_div').html('<div class="info_content"> <div> <p class="info_content_title">Error</p> Oyun y&#252;klenemiyor.' + '</br>' + data.Message + '</br> Code: ' + data.Code + '</div><span id="close_game_error" class="reg_close"></span></div>').fadeIn();
                       } else if (data.Code != "") {
                           $('#game_info_div').html('<div class="info_content"> <div> <p class="info_content_title">Error</p>  Oyun y&#252;klenemiyor.' + '</br> Code: ' + data.Code + '</div><span id="close_game_error" class="reg_close"></span></div>').fadeIn();
                       } else {
                           $('#game_info_div').html('<div class="info_content"> <div> <p class="info_content_title">Error</p> ' + data.Message + '</div><span id="close_game_error" class="reg_close"></span></div>').fadeIn();
                       }
                       $('#close_game_error').on('click', function () {
                           $('#game_info_div').fadeOut();
                       })
                       getGameUrlTimeOut = setTimeout(function () {
                           $('#game_info_div').fadeOut();
                       },
                           7000);
                   } else {
                       $('#info_div').hide();
                       if (data.Code == "168") {
                           $('#info_div').html('Oyun y&#252;klenemiyor.' + '</br>' + data.Message + '</br> Error Code: ' + data.Code).fadeIn();
                       } else if (data.Code != "") {
                           $('#info_div').html('Oyun y&#252;klenemiyor.' + '</br> Error Code: ' + data.Code).fadeIn();
                       } else {
                           $('#info_div').html(data.Message).fadeIn();
                       }
                       getGameUrlTimeOut = setTimeout(function () {
                           $('#info_div').fadeOut();
                       },
                           3000);
                   }
                   return false;
               } else {
                   document.location.href = data.Message;
                   return true;
               }
           }
       });
   }
   $(document).on('click',
       '.login_href',
       function() {
           $('#loginHref').val($(this).attr('login-href'));
       });
</script>
<script>
   $("#CountryCode").change(function () {
       $("#countryphonecode_wraper").css("display", "block");
   });
   
   
</script>
<script>
   $('.collapse_dropdown_leftmenu_btn').on('click', function () {
       $(this).closest($('.collapse_dropdown_leftmenu')).toggleClass('opened');
   })
   
</script>
<script>
   if ('false' == 'true') {
       function RefreshToken() {
           $.ajax({
               url: '/Account/RefreshToken',
               type: 'post',
               dataType: 'json',
               success: function (data) {
               }
           });
       }
   
       setInterval(function () {
           RefreshToken();
       }, 300000);
   }
   
</script>
<script>
   setCookie('_userLoggedIn', null, '-1');
</script>
<script>
   $(document).ready(function () {
       var url = window.location.href;
   
       if (url.includes('/?cashier=1')) {
           $('#cashierpage').val('1');
           window.location.href = "Login/login";
       }
   });
</script>
<style>
   .ui-loader .ui-icon-loading {
   background-color: transparent;
   background-image: url('https://cdn-plat.apidigi.com/plat/prd//Img/partners/1093/loader.gif') !important;
   }
</style>
<style>
   :root {
   --cdn-logo-mob_png: url('https://cdn-plat.apidigi.com/plat/prd//Img/mobile/partners/1093/logo.png');
   --cdn-logo_png: url('https://cdn-plat.apidigi.com/plat/prd//Img/partners/1093/logo.png');
   --cdn-logoSm-mob_png: url('https://cdn-plat.apidigi.com/plat/prd//Img/mobile/partners/1093/logoSm.png');
   --cdn-logoSm_png: url('https://cdn-plat.apidigi.com/plat/prd//Img/partners/1093/logoSm.png');
   --cdn-logo-mob_svg: url('https://cdn-plat.apidigi.com/plat/prd//Img/mobile/partners/1093/logo.svg');
   --cdn-logo_svg: url('https://cdn-plat.apidigi.com/plat/prd//Img/partners/1093/logo.svg');
   --cdn-logoSm-mob_svg: url('https://cdn-plat.apidigi.com/plat/prd//Img/mobile/partners/1093/logoSm.svg');
   --cdn-logoSm_svg: url('https://cdn-plat.apidigi.com/plat/prd//Img/partners/1093/logoSm.svg');
   --cdn-logo-mob_gif: url('https://cdn-plat.apidigi.com/plat/prd/Img/mobile/partners/1093/logoGif.gif');
   --cdn-logo-mob_big_gif: url('https://cdn-plat.apidigi.com/plat/prd/Img/mobile/partners/1093/logoBigGif.gif');
   --cdn-footer_sprite: url('https://cdn-plat.apidigi.com/plat/prd//Img/partners/1093/footer_sprite.png');
   --cdn-newBadge_svg: url('https://cdn-plat.apidigi.com/plat/prd//Img/new.svg');
   --cdn-newBadge-tr_png: url('https://cdn-plat.apidigi.com/plat/prd//Img/yeni.png)');
   --cdn-newBadgeLobby_svg: url('https://cdn-plat.apidigi.com/plat/prd//Img/SVG/ic_new.svg');
   --cdn-hotBadgeLobby_svg: url('https://cdn-plat.apidigi.com/plat/prd//Img/SVG/ic_hot.svg');
   --cdn-topBadgeLobby_svg: url('https://cdn-plat.apidigi.com/plat/prd//Img/SVG/ic_top.svg');
   --cdn-jackpotBadgeLobby_svg: url('https://cdn-plat.apidigi.com/plat/prd//Img/SVG/ic_jackpot.svg');
   --cdn-jackpot_icons: url('https://cdn-plat.apidigi.com/plat/prd/Img/icons/redesign/egt_jackpot_icons_new.png');
   --cdn-prg-jackpot_icons: url('https://cdn-plat.apidigi.com/plat/prd/Img/icons/redesign/prg_jackpot_icons.png');
   --cdn-avatars: url('https://cdn-plat.apidigi.com/plat/prd/Img/mobile/common/avatars.png');
   --cdn-idq-big: url('https://cdn-plat.apidigi.com/plat/prd/Img/icons/idq_big.png');
   --cdn-idq-small: url('https://cdn-plat.apidigi.com/plat/prd/Img/icons/idq_small.png');
   }
   @media only screen and (min-width: 800px) {
   #home-sport {
   background-image: url("https://cdn-plat.apidigi.com/plat/prd/Img/mobile/common/img-betting-s.jpg");
   background-size: cover;
   }
   #home-betgamestv {
   background-image: url("https://cdn-plat.apidigi.com/plat/prd/Img/mobile/common/betgamestv.jpg");
   background-size: cover;
   }
   .hometvbet strong:before {
   content: "Í";
   }
   #home-sport-live {
   background-image: url("https://cdn-plat.apidigi.com/plat/prd/Img/mobile/common/img-live.jpg");
   background-size: cover;
   }
   #home-promotions {
   background-image: url("https://cdn-plat.apidigi.com/plat/prd/Img/mobile/common/promo.jpg");
   background-size: cover;
   }
   #home-stat {
   background-image: url("https://cdn-plat.apidigi.com/plat/prd/Img/mobile/common/ing-stat.jpg");
   background-size: cover;
   }
   #home-euro {
   background-image: url("https://cdn-plat.apidigi.com/plat/prd/Img/mobile/common/img-euro2016.png");
   background-size: cover;
   }
   #home-livescore {
   background-size: cover;
   background-image: url("https://cdn-plat.apidigi.com/plat/prd/Img/mobile/common/img-live-score.jpg");
   }
   #home-slots {
   background-size: cover;
   background-image: url("https://cdn-plat.apidigi.com/plat/prd/Img/mobile/common/img-slots.jpg");
   }
   #home-casino {
   background-size: cover;
   background-image: url("https://cdn-plat.apidigi.com/plat/prd/Img/mobile/common/img-casino.jpg");
   }
   #home-tv-games {
   background-size: cover;
   background-image: url("https://cdn-plat.apidigi.com/plat/prd/Img/mobile/common/img-tv-games.jpg");
   }
   #home-live-casino {
   background-size: cover;
   background-image: url("https://cdn-plat.apidigi.com/plat/prd/Img/mobile/common/img-live-casino.jpg");
   }
   #home-keno-live {
   background-size: cover;
   background-image: url("https://cdn-plat.apidigi.com/plat/prd/Img/mobile/common/KenoLive.jpg");
   }
   #home-financials {
   background-size: cover;
   background-image: url("https://cdn-plat.apidigi.com/plat/prd/Img/mobile/common/finance_bg.jpg");
   }
   #home-belot {
   background-image: url("https://cdn-plat.apidigi.com/plat/prd/Img/mobile/common/blot_home.png");
   background-size: cover;
   }
   #home-backgammon {
   background-image: url("https://cdn-plat.apidigi.com/plat/prd/Img/mobile/partners/108/Backgammon.jpg");
   background-size: cover;
   }
   #home-game {
   background-image: url("https://cdn-plat.apidigi.com/plat/prd/Img/mobile/common/game.png");
   background-size: cover;
   }
   #home-domino {
   background-image: url("https://cdn-plat.apidigi.com/plat/prd/Img/mobile/partners/108/Domino.jpg");
   background-size: cover;
   }
   #home-sicbo {
   background-image: url("https://cdn-plat.apidigi.com/plat/prd/Img/mobile/common/Sicbo.png");
   background-size: cover;
   }
   #home-hokm {
   background-image: url("https://cdn-plat.apidigi.com/plat/prd/Img/mobile/common/hokm.png");
   background-size: cover;
   }
   #home-minesweeper {
   background-image: url("https://cdn-plat.apidigi.com/plat/prd/Img/mobile/common/Minesweeper.png");
   background-size: cover;
   }
   #home-Tombala {
   background-image: url("https://cdn-plat.apidigi.com/plat/prd/Img/mobile/common/tombala.jpg");
   background-size: cover;
   }
   }
</style>
<script src="https://sport.<?=$main['sitelink']?>.com/js/partner/bootstrapper.min.js?v=3"></script>
<script>
   /*for skinner*/
   window.parent.postMessage({ cssText: '', sender: 'updateCss' }, '*');
   
   window.addEventListener('message', (event) => {
   
       if (event.data.sender !== 'skinner') return;
   
       var cssText = event.data.cssText;
   
       if (!cssText) return console.log('no css text found');
   
       createOrUpdateStyle(cssText);
   });
   
   var skinnerGeneratedStyleID = 'skinner-generated-style';
   
   function createOrUpdateStyle(cssText) {
       var existingStyle = document.getElementById(skinnerGeneratedStyleID);
   
       if (existingStyle) return existingStyle.innerHTML = cssText;
   
       var options = { innerHTML: cssText, id: skinnerGeneratedStyleID };
   
       var style = createStyle(options);
   
       document.head.appendChild(style);
   }
   
   function createStyle(options) {
       options = options || {};
       var style = document.createElement('style');
       Object.assign(style, options);
       return style;
   }
   
</script>
<script>
   $(document).ready(function () {
       if (sessionStorage.getItem("checkboxval") == null) {
           var sessioncheckValue = true;
           sessionStorage.setItem("checkboxval", sessioncheckValue);
   
           var iframesrc = $("#iframesrc").attr("src");
           if (iframesrc != ) {
               iframesrc = iframesrc.replace("#/Sport/ReactIndex", "");
               $("#iframesrc").attr("src", iframesrc + "#/Sport/ReactIndex");
           }
       }
   });
</script>
<script type="text/javascript">
   $(document).ready(function () {
   
       if (sessionStorage.getItem("checkboxval") == 'true') {
           $('#newsport').prop('checked', true);
       } else {
           $('#newsport').prop('checked', false);
       }
   
       $('#newsport').click(function () {
           if ($('#newsport').prop('checked') == true) {
   
               var sessioncheckValue = true;
               sessionStorage.setItem("checkboxval", sessioncheckValue);
               $('#newsport').prop('checked', true);
           } else {
               var sessioncheckValue = false;
               sessionStorage.setItem("checkboxval", sessioncheckValue);
               $('#newsport').prop('checked', false);
           }
   
           // Get the checkbox
           var checkBox = document.getElementById("newsport");
   
           // If the checkbox is checked, display the output text
           if (checkBox.checked == true) {
   
               document.location.href = "/Sport/ReactIndex";
           } else {
   
               document.location.href = "/Sport";
           }
       });
   
       var sportReactIndex = location.href.toLowerCase().indexOf('/sport/reactindex') > -1 ? '' : '/tr/Sport/ReactIndex';
   
       if (sessionStorage.getItem("checkboxval") == 'true') {
   
           var iframesrc = $("#iframesrc").attr("src");
   
           if (iframesrc != ) {
               iframesrc = iframesrc.replace("#/Sport/ReactIndex", "");
               $("#iframesrc").attr("src", iframesrc + "#/Sport/ReactIndex");
           }
   
   
           $('.sportversion').attr('href', "/Sport/ReactIndex");
           $('.Livesportversion').attr('href', sportReactIndex + "#Live/page");
           $('.BetCheckersportversion').attr('href', sportReactIndex + "#?popup=BetChecker");
           $('.MyBetssportversion').attr('href', sportReactIndex + "#?popup=MyBets");
           $('#SportBonusPanel').attr('href', sportReactIndex + "#?popup=Bonuses");
           $('#SportBonusPanel').children().find('#js_SportBonusLink').attr('href', sportReactIndex + "#?popup=Bonuses");
           $('.Prematch').attr('href', sportReactIndex + "#SportEvent");
           $('.calendar').attr('href', sportReactIndex + "#calendar");
           if (document.getElementById('js_sp_turnms_link')) {
               $('#js_sp_turnms_link').attr('href', sportReactIndex + '#account/profile-menu?popup=Tournament');
               $(document).on('click', '#js_sp_turnms_link', function () {
                   closeRightSidebar();
               });
           }
           $('.Livesportversion, .BetCheckersportversion, .Prematch').click(function () {
               closeLeftSideBar();
           });
   
           $('.MyBetssportversion , .spversion').click(function () {
               closeRightSidebar();
           });
   
           $('#SportBonusPanel #js_SportBonusLink').click(function () {
               closeRightSidebar();
           });
       } else {
           var iframesrc = $("#iframesrc").attr("src");
   
   
           if (iframesrc != ) {
               iframesrc = iframesrc.replace("#/Sport/ReactIndex", "");
               $("#iframesrc").attr("src", iframesrc);
           }
   
           $('.sportversion').attr('href', "/Sport");
           $('.Livesportversion').attr('href', "/sport/live");
           $('.BetCheckersportversion').attr('href', "/Sport/BetChecker");
           $('.Prematch').attr('href', "/Sport/Upcoming");
           $('#SportBonusPanel').attr('href', "/Sport/BonusesHistory");
           $('#SportBonusPanel').children().find('#js_SportBonusLink').attr('href', "/Sport/BonusesHistory");
       }
   });
   
</script>
<div id="comm100-container">
   <div>
      <div></div>
      <div></div>
      <div>
         <div></div>
      </div>
      <div aria-live="polite" style="position: absolute; left: -10000px; top: -10000px; width: 1px; height: 1px;"></div>
   </div>
   <div id="comm100-float-button-8cb529b4-9648-4197-b81a-6d2a248a387b-2">
      <div style="position: fixed; z-index: 130; bottom: 5%; right: 0px; transform: translateY(5%);"><a href="#" onclick="maximizeTawkToWidget()" aria-label="Chat button, agent online" role="button" aria-expanded="false"><img src="https://chatserver15.comm100.io/DBResource/DBImage.ashx?campaignId=8cb529b4-9648-4197-b81a-6d2a248a387b&amp;imgType=4&amp;ver=87C150C4&amp;siteId=90000391" alt="Chat button, agent online" style="border: none;"></a></div>
   </div>
</div>
<script src="https://cdn-sp.kertn.net/event-widget/1.1.37/event-widget.min.js"></script>
<div class="ui-loader ui-corner-all ui-body-a ui-loader-default">
   <span class="ui-icon-loading"></span>
   <h1>loading</h1>
</div>
<script src="https://cdn-sp.kertn.net/mobile/7.0.36-6/mobile.min.js"></script>
<?=html_entity_decode($main['sources'], ENT_QUOTES, 'UTF-8')?>
<script>
function maximizeTawkToWidget() {
  Tawk_API.maximize();
  window.Tawk_API.hideWidget();
	
}
window.Tawk_API.onLoad = function(){
    window.Tawk_API.hideWidget();
};
document.getElementById('maximizeButton').addEventListener('click', maximizeTawkToWidget);
</script>
</body>
</html>
<?php }else{?>
   <app-footer>
                  <footer class="page-footer">
                     <div class="footer-partner">
                        <div class="container text-align"><i class="pg-icons netent"></i><i class="pg-icons xpro"></i><i class="pg-icons klas"></i><i class="pg-icons evolution"></i><i class="pg-icons betgames"></i><i class="pg-icons ezugi"></i><i class="pg-icons pronetgaming"></i></div>
                     </div>
                     <div class="footer-second-row">
                        <div class="container display-flex">
                           <div class="footer-menu-content margin-l margin-r">
                              <h6 class="footer-title">Hakkımızda</h6>
                              <ul class="footer-menu">
                                 <li><a href="/tr/contents/about-us">Şirket Hakkında</a></li>
                                 <li><a href="/tr/contents/about-us-responsible-gaming">Sorumlu Oyun</a></li>
                                 <li><a href="/tr/contents/about-us-terms-of-use">Kullanım Kuralları</a></li>
                                 <li><a href="/tr/contents/about-us-contact">Bize Ulaşın</a></li>
                              </ul>
                           </div>
                           <div class="footer-menu-content margin-l margin-r">
                              <h6 class="footer-title">Destek</h6>
                              <ul class="footer-menu">
                                 <li><a href="/tr/contents/support-rules">Kurallar</a></li>
                                 <li><a href="/tr/contents/support-faq">SSS (Sıkca Sorulan Sorular)</a></li>
                                 <li><a href="/tr/contents/promotions">Bonus</a></li>
                                 <li><a href="/tr/contents/promotions-general-rules">Genel Bonus Kuralları</a></li>
                                 <li><a href="/tr/contents/cashout-content">Bahis Bozdur</a></li>
                                 <!---->
                              </ul>
                           </div>
                           <div class="footer-menu-content margin-l margin-l">
                              <h6 class="footer-title">Kısa Yollar</h6>
                              <ul class="footer-menu">
                                 <li><a href="/tr/bet/main">Spor</a></li>
                                 <li><a href="/tr/bet/live">Canlı Bahis</a></li>
                                 <li><a href="/tr/games/livecasino">Canlı Casino</a></li>
                                 <li><a href="/tr/games/casino">Casino</a></li>
                                 <li><a href="/tr/games/poker">Poker</a></li>
                                 <li><a href="/tr/games/betongames">Betongames</a></li>
                                 <li><a href="/tr/games/bingo/9427">Canlı Tombala</a></li>
                              </ul>
                           </div>
                           <div class="footer-menu-content margin-r">
                              <h6 class="footer-title">Bize Ulaşın</h6>
                              <ul class="footer-menu information">
                                 <li>
                                    <p>İletişim Adreslerimiz</p>
                                 </li>
                                 <li>
                                    <p> Müşteri Destek <a href="mailto:destek@limanbet.com"> destek@limanbet.com </a></p>
                                 </li>
                                 <li>
                                    <p> Finansal İşlemler <a href="mailto:finans@limandestek.com"> finans@limandestek.com </a></p>
                                 </li>
                                 <li>
                                    <p> Belge Gönderim <a href="mailto:belge@limanbet.com"> belge@limanbet.com </a></p>
                                 </li>
                              </ul>
                           </div>
                           <div class="copyright">
                              <ul>
                                 <li>
                                    <p class="white-txt">© 2015 - limanbet + 18</p>
                                 </li>
                                 <li><a class="peru-txt" href="/tr/contents/about-us-gen-terms-cond">Genel Şartlar ve Kurallar</a></li>
                                 <li><a class="peru-txt" href="/tr/contents/about-us-privacy-policy">Gizlilik Politikası</a></li>
                              </ul>
                           </div>
                           <div class="license">
                              <a name="logo" class="lg-cntr left" href="/tr"><img src="views/trader/limanbet/assets/images/logo-footer.png" class="lg" alt="limanbet"></a>
                              <div class="footer-payment">
                                 <div class="text-align"><i class="pg-icons visa"></i><i class="pg-icons mastercard"></i><i class="pg-icons maestro"></i><i class="pg-icons astropay"></i><i class="pg-icons banktransfer"></i><i class="pg-icons cepbank"></i><i class="pg-icons bitcoin"></i><i class="pg-icons papara"></i><i class="pg-icons hizlihavale"></i><i class="pg-icons hizliqr"></i></div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="playgo-content">
                        <div class="container flex-container">
                           <div class="playgo-lisans">
                              <app-static-inner-content contentcode="licence-html">
                                 <div extroutelink="" id="licence-html">
                                    <div id="apg-c89816a9-6377-45ee-9276-aa6684453eae" data-apg-seal-id="c89816a9-6377-45ee-9276-aa6684453eae" data-apg-image-size="50" data-apg-image-type="basic-small"></div>
                                 </div>
                                 <div></div>
                                 <div>
                                    <style type="text/css">
                                       #apg-c89816a9-6377-45ee-9276-aa6684453eae > div {min-width:64px !important;}
                                    </style>
                                 </div>
                                 <!----><!---->
                              </app-static-inner-content>
                           </div>
                           <div class="playgo-text flex-item"> Limanbet.com website is owned and operated by PinBit N.V., a company incorporated under the laws of Curacao with company registration number 143584 and having its registered address at Heelsumstraat 51, E-Commerce Park, Curacao, authorised by Curacao Antillephone N.V. License Validator, Antillephone N.V. license number #8048/JAZ. </div>
                        </div>
                     </div>
                     <div scroll-top="" class="scroll-top-btn left animated fadeInDown" style="display: none;"><i aria-hidden="true" class="fa fa-chevron-up"></i></div>
                     <link rel="stylesheet" href="//v3.pronetstatic.com/common/assets/css/core.css">
                  </footer>
                  <app-static-inner-content contentcode="footer-for-setup">
                     <div extroutelink="" id="footer-for-setup">
                        <!-- Start of LiveChat (www.livechatinc.com) code -->
                        <noscript>
                           <a href="https://www.livechatinc.com/chat-with/8806331/" rel="nofollow">Chat with us</a>,
                           powered by <a href="https://www.livechatinc.com/?welcome" rel="noopener nofollow" target="_blank">LiveChat</a>
                        </noscript>
                        <!-- End of LiveChat code -->
                     </div>
                     <div>
                        <script type="text/javascript" src="https://c89816a9-6377-45ee-9276-aa6684453eae.snippet.antillephone.com/apg-seal.js"></script><script type="text/javascript">
                           (function (i, s, o, g, r, a, m) {
                               i['GoogleAnalyticsObject'] = r;
                               i[r] = i[r] || function ()
                               {
                                   (i[r].q = i[r].q || []).push(arguments)
                               }
                               , i[r].l = 1 * new
                                       Date();
                               a = s.createElement(o),
                                       m = s.getElementsByTagName(o)[0];
                               a.async = 1;
                               a.src = g;
                               m.parentNode.insertBefore(a, m)
                           })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
                           ga('create', 'UA-66280951-2', 'auto');
                           ga('send', 'pageview');
                        </script><script type="text/javascript">
                           window.__lc = window.__lc || {};
                           window.__lc.license = 8806331;
                           (function() {
                             var lc = document.createElement('script'); lc.type = 'text/javascript'; lc.async = true;
                             lc.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'cdn.livechatinc.com/tracking.js';
                             var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(lc, s);
                           })();
                        </script><script type="text/javascript"></script><script type="text/javascript">var sealCDN = setInterval(function(){
                           if(typeof apg_c89816a9_6377_45ee_9276_aa6684453eae !== 'undefined'){
                             clearInterval(sealCDN);
                             setTimeout(function(){
                               apg_c89816a9_6377_45ee_9276_aa6684453eae.init();
                             })
                           }
                           },50);
                        </script>
                     </div>
                     <div>
                        <style type="text/css"> 
                           .modul-accordion.cup-view-modul .modul-content .slide-card-container .slide-card-content .team-row {color: #000;}
                        </style>
                        <style type="text/css">
                           .temp-promocode-field {display:none!important;}
                        </style>
                     </div>
                     <!----><!---->
                  </app-static-inner-content>
                  <app-static-inner-content contentcode="footer-static">
                     <div extroutelink="" id="footer-static">&nbsp; &nbsp;    </div>
                     <div></div>
                     <div></div>
                     <!----><!---->
                  </app-static-inner-content>
               </app-footer>
            </div>
            <div id="mbl-verify-needed" materialize="modal" class="modal" style="z-index: 1021;">
               <a href="javascript:;" class="modal-action modal-close"><i class="material-icons pg-icons">close</i></a><br>
               <div class="modal-content">
                  <div></div>
                  <div></div>
                  <a class="btn primary-color" href="/tr/dashboard/user-info/personal-and-account-detail">Doğrulamayı Tamamla</a><a href="javascript:;" class="btn dont-show-again secondary-color right">Bir Daha Gösterme</a>
               </div>
            </div>
            <div id="cookies-top-modal" materialize="modal" class="modal bottom-sheet" style="z-index: 1023;">
               <div class="modal-content">
                  <div class="flex-container">
                     <div class="flex-item"></div>
                     <a href="javascript:;" class="btn dont-show-again secondary-color">Anladım</a>
                  </div>
                  <div></div>
               </div>
            </div>
            <div id="cookies-bottom-modal" materialize="modal" class="modal bottom-sheet" style="z-index: 1025;">
               <div class="modal-content">
                  <div class="flex-container">
                     <div class="flex-item"></div>
                     <a href="javascript:;" class="btn dont-show-again secondary-color">Anladım</a>
                  </div>
                  <div></div>
               </div>
            </div>
            <div id="mdl-on-enter" materialize="modal" class="modal" style="z-index: 1027; display: none; opacity: 0; transform: scaleX(0.7); top: 4%;">
               <a href="javascript:;" class="modal-action modal-close"><i class="material-icons pg-icons">close</i></a><br>
               <div class="modal-content">
                  <div>
                     <p>
                        <a href="/tr/contents/promotions">
                           <!-- <img src="https://cdn.pandestek.com/other/popup_envoy.jpg" />  !-->
                           <img src="https://liman.cdnroot.blog/other/popup.jpg" style="    height: 100%;
                              width: 100%;">
                        </a>
                     </p>
                     <style>
                        #mdl-on-enter{
                        max-width: 673px;
                        }
                        #mdl-on-enter p {
                        margin:0;
                        }
                     </style>
                  </div>
                  <div></div>
                  <a href="javascript:;" class="btn dont-show-again">Bir Daha Gösterme</a>
               </div>
            </div>
            <div id="home-page-modal" materialize="modal" class="modal" style="z-index: 1029;">
               <a href="javascript:;" class="modal-action modal-close"><i class="material-icons pg-icons">close</i></a><br>
               <div class="modal-content">
                  <div></div>
                  <div></div>
                  <a href="javascript:;" class="btn dont-show-again">Bir Daha Gösterme</a>
               </div>
            </div>
            <div id="mdl-on-login" materialize="modal" class="modal" style="z-index: 1031;">
               <a href="javascript:;" class="modal-action modal-close"><i class="material-icons pg-icons">close</i></a><br>
               <div class="modal-content">
                  <div></div>
                  <div></div>
                  <a href="javascript:;" class="btn dont-show-again">Bir Daha Gösterme</a>
               </div>
            </div>
            <div materialize="modal" class="modal" style="z-index: 1033; display: none; opacity: 0; transform: scaleX(0.7); top: 4%;" id="sgn-mdl">
               <a href="javascript:;" class="modal-action modal-close"><i class="material-icons pg-icons">close</i></a><!----><!----><!---->
               <div class="modal-content">
                  <app-login class="ng-star-inserted">
                     <form novalidate="" class="login-form ng-untouched ng-pristine ng-invalid ng-star-inserted">
                        <div class="title"><a name="logo" class="lg-cntr" href="/tr"><img class="lg" src="views/trader/limanbet/assets/images/logo.png" alt="limanbet"></a></div>
                        <div class="lg-frm-content">
                           <!----><!----><input type="text" required="" class="validate browser-default ng-untouched ng-pristine ng-invalid ng-star-inserted" placeholder="Kullanıcı adı" id="username"><!----><!----><!----><!----><!----><!---->
                           <div class="input-field password">
                              <input formcontrolname="password" id="login-password" type="password" required="" class="validate browser-default ng-untouched ng-pristine ng-invalid" placeholder="Şifreniz">
                              <password-eye el="login-password"><a class="btn password-eye toogle-btn"><i class="fa fa-eye show"></i><i class="fa fa-eye-slash dont-show"></i></a></password-eye>
                              <!---->
                           </div>
                           <!----><!----><button class="btn sgn-btn"> Giriş Yap </button><!----><!---->
                           <div class="flex-container ftgtpass-nwacc"><a class="btn flex-item ftgtpass"><i class="fa fa-key pg-icons"></i> Şifremi Unuttum </a><a class="btn flex-item ftgtpass"><i class="fa fa-key pg-icons"></i> Kullanıcı adını unuttum </a></div>
                           <div class="login-form-bottom ng-star-inserted">
                              <a href="javascript:;" class="btn flex-item nwacc"> Hesabınız yok mu? </a>
                              <div class="login-popup-content clear">
                                 <app-static-inner-content contentcode="login-popup-content">
                                    <!---->
                                 </app-static-inner-content>
                              </div>
                              <a href="javascript:;" class="waves-effect waves-light register-btn"> Üye Ol </a>
                           </div>
                           <!----><!---->
                        </div>
                     </form>
                     <!----><!---->
                  </app-login>
                  <!----><!----><!---->
               </div>
            </div>
         </app-out-component>
         <!----><!----><!---->
      </app-root>
     <div class="hiddendiv common"></div>
      <bet-master merchant="pn35" language="tr" vce-ready="">
         <div id="PanelFront">
            <!---->
            <div class="bm_popup_cover">
               <div class="popup_cover"></div>
               <!---->
               <div class="bm_popup_mask" style="display: none;"></div>
            </div>
            <div class="bm bmm bm_botbar hidden-xs-only">
               <div class="bot_bar_inner">
                  <div class="bot_bar_inner_item buttons_side">
                     <div class="b_i_item popular_slider_button_cover"><a class="px-2 custom_btns popular_slider_button"><span><i class="fas fa-fire-alt"></i> POPULER OYUNLAR</span></a></div>
                     <div class="b_i_item">
                        <div class="customer_point_cover" style="display: none;">
                           <!---->
                        </div>
                     </div>
                     <a id="custom_btn1" class="b_i_item px-2 custom_btns"><span class="custom_btn"><i class="fas fa-shopping-basket"></i> LIMAN SHOP</span></a><a id="custom_btn2" class="b_i_item px-2 custom_btns"><span class="custom_btn"><i class="pf-icon pfi-diamond"></i> VIP CLUB</span></a><a id="custom_btn3" class="b_i_item px-2 custom_btns"><span class="custom_btn"><i class="fas fa-trophy"></i> TURNUVALAR</span></a>
                  </div>
                  <div class="bot_bar_inner_item ticker_side">
                     <div class="bot_bar_ticker">
                        <panel-ticker class="news_ticker hidden-md-and-down" vce-ready="">
                           <div id="ticker_1" class="bmm ticker_cover marquee_ticker">
                              <!---->
                              <div class="ticker marquee-text-wrap">
                                 <div class="marquee-text-content">
                                    <div class="marquee-text-text" style="animation-duration: 484.54s;">
                                       <div class="marquee_news">
                                          <div class="ticker_content_cover">
                                             <div class="news">
                                                <div class="news_inner">Güvenliğiniz için <strong><span style="color: #e03e2d; --darkreader-inline-color: #ff4d38;" data-darkreader-inline-color=""><span style="background-color: #000000; --darkreader-inline-bgcolor: #000000; font-size: 16px;" data-darkreader-inline-bgcolor="">"İki Aşamalı Giriş"</span> </span></strong>&nbsp;aktif ediniz!</div>
                                             </div>
                                             <!----><!----><!---->
                                          </div>
                                       </div>
                                       <div class="marquee_news">
                                          <div class="ticker_content_cover">
                                             <!----><!---->
                                             <div class="news">
                                                <div class="bmm ticker_top_winners">
                                                   <div class="ttw_inner"><span>K********97 ,</span> <img class="ttw_game_img" src="https://v3.pronetstatic.com/common/assets/images/livecasino/300x200/18225.jpg"> <span> <strong class="game">Auto-Roulette</strong> oyununda <strong class="bet_amount">₺8,500</strong>  karşılığı , <strong class="win_amount">₺36,000</strong> kazandı. </span></div>
                                                   <!----><!---->
                                                </div>
                                             </div>
                                             <!---->
                                          </div>
                                       </div>
                                       <div class="marquee_news">
                                          <div class="ticker_content_cover">
                                             <!----><!---->
                                             <div class="news">
                                                <div class="bmm ticker_top_winners">
                                                   <div class="ttw_inner"><span>B************ur ,</span> <img class="ttw_game_img" src="https://v3.pronetstatic.com/common/assets/images/livecasino/300x200/18503.jpg"> <span> <strong class="game">Immersive Roulette</strong> oyununda <strong class="bet_amount">₺1,000</strong>  karşılığı , <strong class="win_amount">₺36,000</strong> kazandı. </span></div>
                                                   <!----><!---->
                                                </div>
                                             </div>
                                             <!---->
                                          </div>
                                       </div>
                                       <div class="marquee_news">
                                          <div class="ticker_content_cover">
                                             <!----><!---->
                                             <div class="news">
                                                <div class="bmm ticker_top_winners">
                                                   <div class="ttw_inner"><span>S***l1 ,</span> <img class="ttw_game_img" src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/17737.jpg"> <span> <strong class="game">Gold Party™</strong> oyununda <strong class="bet_amount">₺225</strong>  karşılığı , <strong class="win_amount">₺70,740</strong> kazandı. </span></div>
                                                   <!----><!---->
                                                </div>
                                             </div>
                                             <!---->
                                          </div>
                                       </div>
                                       <div class="marquee_news">
                                          <div class="ticker_content_cover">
                                             <!----><!---->
                                             <div class="news">
                                                <div class="bmm ticker_top_winners">
                                                   <div class="ttw_inner"><span>k******er ,</span> <img class="ttw_game_img" src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/17853.jpg"> <span> <strong class="game">Gigantoonz</strong> oyununda <strong class="bet_amount">₺60</strong>  karşılığı , <strong class="win_amount">₺48,426</strong> kazandı. </span></div>
                                                   <!----><!---->
                                                </div>
                                             </div>
                                             <!---->
                                          </div>
                                       </div>
                                       <div class="marquee_news">
                                          <div class="ticker_content_cover">
                                             <!----><!---->
                                             <div class="news">
                                                <div class="bmm ticker_top_winners">
                                                   <div class="ttw_inner"><span>r******54 ,</span> <img class="ttw_game_img" src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/11413.jpg"> <span> <strong class="game">Christmas Carol Megaways</strong> oyununda <strong class="bet_amount">₺100</strong>  karşılığı , <strong class="win_amount">₺65,510</strong> kazandı. </span></div>
                                                   <!----><!---->
                                                </div>
                                             </div>
                                             <!---->
                                          </div>
                                       </div>
                                       <div class="marquee_news">
                                          <div class="ticker_content_cover">
                                             <!----><!---->
                                             <div class="news">
                                                <div class="bmm ticker_top_winners">
                                                   <div class="ttw_inner"><span>M********71 ,</span> <img class="ttw_game_img" src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/26163.jpg"> <span> <strong class="game">Gates of Olympus 1000™</strong> oyununda <strong class="bet_amount">₺15,000</strong>  karşılığı , <strong class="win_amount">₺122,962</strong> kazandı. </span></div>
                                                   <!----><!---->
                                                </div>
                                             </div>
                                             <!---->
                                          </div>
                                       </div>
                                       <div class="marquee_news">
                                          <div class="ticker_content_cover">
                                             <!----><!---->
                                             <div class="news">
                                                <div class="bmm ticker_top_winners">
                                                   <div class="ttw_inner"><span>c***at ,</span> <img class="ttw_game_img" src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/6461.jpg"> <span> <strong class="game">40 Burning Hot 6 Reels</strong> oyununda <strong class="bet_amount">₺350</strong>  karşılığı , <strong class="win_amount">₺70,000</strong> kazandı. </span></div>
                                                   <!----><!---->
                                                </div>
                                             </div>
                                             <!---->
                                          </div>
                                       </div>
                                       <div class="marquee_news">
                                          <div class="ticker_content_cover">
                                             <!----><!---->
                                             <div class="news">
                                                <div class="bmm ticker_top_winners">
                                                   <div class="ttw_inner"><span>h*********53 ,</span> <img class="ttw_game_img" src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/10228.jpg"> <span> <strong class="game">The Dog House Megaways</strong> oyununda <strong class="bet_amount">₺2,000</strong>  karşılığı , <strong class="win_amount">₺41,025</strong> kazandı. </span></div>
                                                   <!----><!---->
                                                </div>
                                             </div>
                                             <!---->
                                          </div>
                                       </div>
                                       <div class="marquee_news">
                                          <div class="ticker_content_cover">
                                             <!----><!---->
                                             <div class="news">
                                                <div class="bmm ticker_top_winners">
                                                   <div class="ttw_inner"><span>B************ur ,</span> <img class="ttw_game_img" src="https://v3.pronetstatic.com/common/assets/images/livecasino/300x200/18111.jpg"> <span> <strong class="game">18111</strong> oyununda <strong class="bet_amount">₺1,000</strong>  karşılığı , <strong class="win_amount">₺36,000</strong> kazandı. </span></div>
                                                   <!----><!---->
                                                </div>
                                             </div>
                                             <!---->
                                          </div>
                                       </div>
                                       <div class="marquee_news">
                                          <div class="ticker_content_cover">
                                             <!----><!---->
                                             <div class="news">
                                                <div class="bmm ticker_top_winners">
                                                   <div class="ttw_inner"><span>N********32 ,</span> <img class="ttw_game_img" src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/16624.jpg"> <span> <strong class="game">Bigger Bass Bonanza™</strong> oyununda <strong class="bet_amount">₺384</strong>  karşılığı , <strong class="win_amount">₺148,608</strong> kazandı. </span></div>
                                                   <!----><!---->
                                                </div>
                                             </div>
                                             <!---->
                                          </div>
                                       </div>
                                       <div class="marquee_news">
                                          <div class="ticker_content_cover">
                                             <!----><!---->
                                             <div class="news">
                                                <div class="bmm ticker_top_winners">
                                                   <div class="ttw_inner"><span>u*****56 ,</span> <img class="ttw_game_img" src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/13485.jpg"> <span> <strong class="game">Gates of Olympus™</strong> oyununda <strong class="bet_amount">₺2,000</strong>  karşılığı , <strong class="win_amount">₺100,000</strong> kazandı. </span></div>
                                                   <!----><!---->
                                                </div>
                                             </div>
                                             <!---->
                                          </div>
                                       </div>
                                       <div class="marquee_news">
                                          <div class="ticker_content_cover">
                                             <!----><!---->
                                             <div class="news">
                                                <div class="bmm ticker_top_winners">
                                                   <div class="ttw_inner"><span>K*****35 ,</span> <img class="ttw_game_img" src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/26163.jpg"> <span> <strong class="game">Gates of Olympus 1000™</strong> oyununda <strong class="bet_amount">₺2</strong>  karşılığı , <strong class="win_amount">₺2,000</strong> kazandı. </span></div>
                                                   <!----><!---->
                                                </div>
                                             </div>
                                             <!---->
                                          </div>
                                       </div>
                                       <div class="marquee_news">
                                          <div class="ticker_content_cover">
                                             <!----><!---->
                                             <div class="news">
                                                <div class="bmm ticker_top_winners">
                                                   <div class="ttw_inner"><span>D******IM ,</span> <img class="ttw_game_img" src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/6461.jpg"> <span> <strong class="game">40 Burning Hot 6 Reels</strong> oyununda <strong class="bet_amount">₺300</strong>  karşılığı , <strong class="win_amount">₺100,800</strong> kazandı. </span></div>
                                                   <!----><!---->
                                                </div>
                                             </div>
                                             <!---->
                                          </div>
                                       </div>
                                       <div class="marquee_news">
                                          <div class="ticker_content_cover">
                                             <!----><!---->
                                             <div class="news">
                                                <div class="bmm ticker_top_winners">
                                                   <div class="ttw_inner"><span>j***yl ,</span> <img class="ttw_game_img" src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/13485.jpg"> <span> <strong class="game">Gates of Olympus™</strong> oyununda <strong class="bet_amount">₺937</strong>  karşılığı , <strong class="win_amount">₺271,837</strong> kazandı. </span></div>
                                                   <!----><!---->
                                                </div>
                                             </div>
                                             <!---->
                                          </div>
                                       </div>
                                       <div class="marquee_news">
                                          <div class="ticker_content_cover">
                                             <!----><!---->
                                             <div class="news">
                                                <div class="bmm ticker_top_winners">
                                                   <div class="ttw_inner"><span>h*********53 ,</span> <img class="ttw_game_img" src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/10228.jpg"> <span> <strong class="game">The Dog House Megaways</strong> oyununda <strong class="bet_amount">₺2,000</strong>  karşılığı , <strong class="win_amount">₺185,901</strong> kazandı. </span></div>
                                                   <!----><!---->
                                                </div>
                                             </div>
                                             <!---->
                                          </div>
                                       </div>
                                       <div class="marquee_news">
                                          <div class="ticker_content_cover">
                                             <!----><!---->
                                             <div class="news">
                                                <div class="bmm ticker_top_winners">
                                                   <div class="ttw_inner"><span>savazingo ,</span> <img class="ttw_game_img" src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/8888.jpg"> <span> <strong class="game">Sweet Bonanza</strong> oyununda <strong class="bet_amount">₺5,000</strong>  karşılığı , <strong class="win_amount">₺80,347</strong> kazandı. </span></div>
                                                   <!----><!---->
                                                </div>
                                             </div>
                                             <!---->
                                          </div>
                                       </div>
                                       <div class="marquee_news">
                                          <div class="ticker_content_cover">
                                             <!----><!---->
                                             <div class="news">
                                                <div class="bmm ticker_top_winners">
                                                   <div class="ttw_inner"><span>0******HH ,</span> <img class="ttw_game_img" src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/8888.jpg"> <span> <strong class="game">Sweet Bonanza</strong> oyununda <strong class="bet_amount">₺7,500</strong>  karşılığı , <strong class="win_amount">₺104,568</strong> kazandı. </span></div>
                                                   <!----><!---->
                                                </div>
                                             </div>
                                             <!---->
                                          </div>
                                       </div>
                                       <div class="marquee_news">
                                          <div class="ticker_content_cover">
                                             <!----><!---->
                                             <div class="news">
                                                <div class="bmm ticker_top_winners">
                                                   <div class="ttw_inner"><span>F******00 ,</span> <img class="ttw_game_img" src="https://v3.pronetstatic.com/common/assets/images/livecasino/300x200/18190.jpg"> <span> <strong class="game">Crazy Time</strong> oyununda <strong class="bet_amount">₺3,620</strong>  karşılığı , <strong class="win_amount">₺92,920</strong> kazandı. </span></div>
                                                   <!----><!---->
                                                </div>
                                             </div>
                                             <!---->
                                          </div>
                                       </div>
                                       <div class="marquee_news">
                                          <div class="ticker_content_cover">
                                             <!----><!---->
                                             <div class="news">
                                                <div class="bmm ticker_top_winners">
                                                   <div class="ttw_inner"><span>r*******91 ,</span> <img class="ttw_game_img" src="https://v3.pronetstatic.com/common/assets/images/livecasino/300x200/18503.jpg"> <span> <strong class="game">Immersive Roulette</strong> oyununda <strong class="bet_amount">₺2,000</strong>  karşılığı , <strong class="win_amount">₺19,260</strong> kazandı. </span></div>
                                                   <!----><!---->
                                                </div>
                                             </div>
                                             <!---->
                                          </div>
                                       </div>
                                       <div class="marquee_news">
                                          <div class="ticker_content_cover">
                                             <!----><!---->
                                             <div class="news">
                                                <div class="bmm ticker_top_winners">
                                                   <div class="ttw_inner"><span>p******un ,</span> <img class="ttw_game_img" src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/6461.jpg"> <span> <strong class="game">40 Burning Hot 6 Reels</strong> oyununda <strong class="bet_amount">₺500</strong>  karşılığı , <strong class="win_amount">₺150,000</strong> kazandı. </span></div>
                                                   <!----><!---->
                                                </div>
                                             </div>
                                             <!---->
                                          </div>
                                       </div>
                                       <div class="marquee_news">
                                          <div class="ticker_content_cover">
                                             <!----><!---->
                                             <div class="news">
                                                <div class="bmm ticker_top_winners">
                                                   <div class="ttw_inner"><span>H**n ,</span> <img class="ttw_game_img" src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/21994.jpg"> <span> <strong class="game">Fish Eye</strong> oyununda <strong class="bet_amount">₺27</strong>  karşılığı , <strong class="win_amount">₺21,124</strong> kazandı. </span></div>
                                                   <!----><!---->
                                                </div>
                                             </div>
                                             <!---->
                                          </div>
                                       </div>
                                       <div class="marquee_news">
                                          <div class="ticker_content_cover">
                                             <!----><!---->
                                             <div class="news">
                                                <div class="bmm ticker_top_winners">
                                                   <div class="ttw_inner"><span>B********11 ,</span> <img class="ttw_game_img" src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/25903.jpg"> <span> <strong class="game">Big Bass Christmas Bash™</strong> oyununda <strong class="bet_amount">₺150</strong>  karşılığı , <strong class="win_amount">₺28,920</strong> kazandı. </span></div>
                                                   <!----><!---->
                                                </div>
                                             </div>
                                             <!---->
                                          </div>
                                       </div>
                                       <div class="marquee_news">
                                          <div class="ticker_content_cover">
                                             <!----><!---->
                                             <div class="news">
                                                <div class="bmm ticker_top_winners">
                                                   <div class="ttw_inner"><span>m*********34 ,</span> <img class="ttw_game_img" src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/13485.jpg"> <span> <strong class="game">Gates of Olympus™</strong> oyununda <strong class="bet_amount">₺4,500</strong>  karşılığı , <strong class="win_amount">₺34,699</strong> kazandı. </span></div>
                                                   <!----><!---->
                                                </div>
                                             </div>
                                             <!---->
                                          </div>
                                       </div>
                                       <div class="marquee_news">
                                          <div class="ticker_content_cover">
                                             <!----><!---->
                                             <div class="news">
                                                <div class="bmm ticker_top_winners">
                                                   <div class="ttw_inner"><span>J*****uk ,</span> <img class="ttw_game_img" src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/13485.jpg"> <span> <strong class="game">Gates of Olympus™</strong> oyununda <strong class="bet_amount">₺62</strong>  karşılığı , <strong class="win_amount">₺53,120</strong> kazandı. </span></div>
                                                   <!----><!---->
                                                </div>
                                             </div>
                                             <!---->
                                          </div>
                                       </div>
                                       <div class="marquee_news">
                                          <div class="ticker_content_cover">
                                             <!----><!---->
                                             <div class="news">
                                                <div class="bmm ticker_top_winners">
                                                   <div class="ttw_inner"><span>K***lo ,</span> <img class="ttw_game_img" src="https://v3.pronetstatic.com/common/assets/images/livecasino/300x200/19884.jpg"> <span> <strong class="game">XXXtreme Lightning Roulette</strong> oyununda <strong class="bet_amount">₺1,200</strong>  karşılığı , <strong class="win_amount">₺40,000</strong> kazandı. </span></div>
                                                   <!----><!---->
                                                </div>
                                             </div>
                                             <!---->
                                          </div>
                                       </div>
                                       <div class="marquee_news">
                                          <div class="ticker_content_cover">
                                             <!----><!---->
                                             <div class="news">
                                                <div class="bmm ticker_top_winners">
                                                   <div class="ttw_inner"><span>m**it ,</span> <img class="ttw_game_img" src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/26163.jpg"> <span> <strong class="game">Gates of Olympus 1000™</strong> oyununda <strong class="bet_amount">₺400</strong>  karşılığı , <strong class="win_amount">₺23,181</strong> kazandı. </span></div>
                                                   <!----><!---->
                                                </div>
                                             </div>
                                             <!---->
                                          </div>
                                       </div>
                                       <div class="marquee_news">
                                          <div class="ticker_content_cover">
                                             <!----><!---->
                                             <div class="news">
                                                <div class="bmm ticker_top_winners">
                                                   <div class="ttw_inner"><span>n*******0m ,</span> <img class="ttw_game_img" src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/2732.jpg"> <span> <strong class="game">Dice and Roll</strong> oyununda <strong class="bet_amount">₺50</strong>  karşılığı , <strong class="win_amount">₺24,000</strong> kazandı. </span></div>
                                                   <!----><!---->
                                                </div>
                                             </div>
                                             <!---->
                                          </div>
                                       </div>
                                       <div class="marquee_news">
                                          <div class="ticker_content_cover">
                                             <!----><!---->
                                             <div class="news">
                                                <div class="bmm ticker_top_winners">
                                                   <div class="ttw_inner"><span>b******uc ,</span> <img class="ttw_game_img" src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/10228.jpg"> <span> <strong class="game">The Dog House Megaways</strong> oyununda <strong class="bet_amount">₺1,800</strong>  karşılığı , <strong class="win_amount">₺26,308</strong> kazandı. </span></div>
                                                   <!----><!---->
                                                </div>
                                             </div>
                                             <!---->
                                          </div>
                                       </div>
                                       <div class="marquee_news">
                                          <div class="ticker_content_cover">
                                             <!----><!---->
                                             <div class="news">
                                                <div class="bmm ticker_top_winners">
                                                   <div class="ttw_inner"><span>F******00 ,</span> <img class="ttw_game_img" src="https://v3.pronetstatic.com/common/assets/images/livecasino/300x200/18190.jpg"> <span> <strong class="game">Crazy Time</strong> oyununda <strong class="bet_amount">₺2,500</strong>  karşılığı , <strong class="win_amount">₺180,600</strong> kazandı. </span></div>
                                                   <!----><!---->
                                                </div>
                                             </div>
                                             <!---->
                                          </div>
                                       </div>
                                       <div class="marquee_news">
                                          <div class="ticker_content_cover">
                                             <!----><!---->
                                             <div class="news">
                                                <div class="bmm ticker_top_winners">
                                                   <div class="ttw_inner"><span>ercin10 ,</span> <img class="ttw_game_img" src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/26163.jpg"> <span> <strong class="game">Gates of Olympus 1000™</strong> oyununda <strong class="bet_amount">₺400</strong>  karşılığı , <strong class="win_amount">₺60,000</strong> kazandı. </span></div>
                                                   <!----><!---->
                                                </div>
                                             </div>
                                             <!---->
                                          </div>
                                       </div>
                                       <div class="marquee_news">
                                          <div class="ticker_content_cover">
                                             <!----><!---->
                                             <div class="news">
                                                <div class="bmm ticker_top_winners">
                                                   <div class="ttw_inner"><span>h*********53 ,</span> <img class="ttw_game_img" src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/14895.jpg"> <span> <strong class="game">Panda's Fortune 2</strong> oyununda <strong class="bet_amount">₺250</strong>  karşılığı , <strong class="win_amount">₺106,000</strong> kazandı. </span></div>
                                                   <!----><!---->
                                                </div>
                                             </div>
                                             <!---->
                                          </div>
                                       </div>
                                       <div class="marquee_news">
                                          <div class="ticker_content_cover">
                                             <!----><!---->
                                             <div class="news">
                                                <div class="bmm ticker_top_winners">
                                                   <div class="ttw_inner"><span>e******49 ,</span> <img class="ttw_game_img" src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/20053.jpg"> <span> <strong class="game">Sugar Rush</strong> oyununda <strong class="bet_amount">₺600</strong>  karşılığı , <strong class="win_amount">₺240,180</strong> kazandı. </span></div>
                                                   <!----><!---->
                                                </div>
                                             </div>
                                             <!---->
                                          </div>
                                       </div>
                                       <div class="marquee_news">
                                          <div class="ticker_content_cover">
                                             <!----><!---->
                                             <div class="news">
                                                <div class="bmm ticker_top_winners">
                                                   <div class="ttw_inner"><span>d*******in ,</span> <img class="ttw_game_img" src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/17303.jpg"> <span> <strong class="game">Wanted Dead or a Wild </strong> oyununda <strong class="bet_amount">₺1,600</strong>  karşılığı , <strong class="win_amount">₺100,000</strong> kazandı. </span></div>
                                                   <!----><!---->
                                                </div>
                                             </div>
                                             <!---->
                                          </div>
                                       </div>
                                       <div class="marquee_news">
                                          <div class="ticker_content_cover">
                                             <!----><!---->
                                             <div class="news">
                                                <div class="bmm ticker_top_winners">
                                                   <div class="ttw_inner"><span>h*********53 ,</span> <img class="ttw_game_img" src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/14895.jpg"> <span> <strong class="game">Panda's Fortune 2</strong> oyununda <strong class="bet_amount">₺250</strong>  karşılığı , <strong class="win_amount">₺106,000</strong> kazandı. </span></div>
                                                   <!----><!---->
                                                </div>
                                             </div>
                                             <!---->
                                          </div>
                                       </div>
                                       <div class="marquee_news">
                                          <div class="ticker_content_cover">
                                             <!----><!---->
                                             <div class="news">
                                                <div class="bmm ticker_top_winners">
                                                   <div class="ttw_inner"><span>k******er ,</span> <img class="ttw_game_img" src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/23296.jpg"> <span> <strong class="game">Royal Joker: Hold and Win</strong> oyununda <strong class="bet_amount">₺500</strong>  karşılığı , <strong class="win_amount">₺82,500</strong> kazandı. </span></div>
                                                   <!----><!---->
                                                </div>
                                             </div>
                                             <!---->
                                          </div>
                                       </div>
                                       <div class="marquee_news">
                                          <div class="ticker_content_cover">
                                             <!----><!---->
                                             <div class="news">
                                                <div class="bmm ticker_top_winners">
                                                   <div class="ttw_inner"><span>S***l1 ,</span> <img class="ttw_game_img" src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/17737.jpg"> <span> <strong class="game">Gold Party™</strong> oyununda <strong class="bet_amount">₺2,000</strong>  karşılığı , <strong class="win_amount">₺691,200</strong> kazandı. </span></div>
                                                   <!----><!---->
                                                </div>
                                             </div>
                                             <!---->
                                          </div>
                                       </div>
                                       <div class="marquee_news">
                                          <div class="ticker_content_cover">
                                             <!----><!---->
                                             <div class="news">
                                                <div class="bmm ticker_top_winners">
                                                   <div class="ttw_inner"><span>h*********et ,</span> <img class="ttw_game_img" src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/6461.jpg"> <span> <strong class="game">40 Burning Hot 6 Reels</strong> oyununda <strong class="bet_amount">₺500</strong>  karşılığı , <strong class="win_amount">₺254,000</strong> kazandı. </span></div>
                                                   <!----><!---->
                                                </div>
                                             </div>
                                             <!---->
                                          </div>
                                       </div>
                                    </div>
                                    <div class="marquee-text-text" style="animation-duration: 484.54s;">
                                       <div class="marquee_news">
                                          <div class="ticker_content_cover">
                                             <div class="news">
                                                <div class="news_inner">Güvenliğiniz için <strong><span style="color: #e03e2d; --darkreader-inline-color: #ff4d38;" data-darkreader-inline-color=""><span style="background-color: #000000; --darkreader-inline-bgcolor: #000000; font-size: 16px;" data-darkreader-inline-bgcolor="">"İki Aşamalı Giriş"</span> </span></strong>&nbsp;aktif ediniz!</div>
                                             </div>
                                             <!----><!----><!---->
                                          </div>
                                       </div>
                                       <div class="marquee_news">
                                          <div class="ticker_content_cover">
                                             <!----><!---->
                                             <div class="news">
                                                <div class="bmm ticker_top_winners">
                                                   <div class="ttw_inner"><span>K********97 ,</span> <img class="ttw_game_img" src="https://v3.pronetstatic.com/common/assets/images/livecasino/300x200/18225.jpg"> <span> <strong class="game">Auto-Roulette</strong> oyununda <strong class="bet_amount">₺8,500</strong>  karşılığı , <strong class="win_amount">₺36,000</strong> kazandı. </span></div>
                                                   <!----><!---->
                                                </div>
                                             </div>
                                             <!---->
                                          </div>
                                       </div>
                                       <div class="marquee_news">
                                          <div class="ticker_content_cover">
                                             <!----><!---->
                                             <div class="news">
                                                <div class="bmm ticker_top_winners">
                                                   <div class="ttw_inner"><span>B************ur ,</span> <img class="ttw_game_img" src="https://v3.pronetstatic.com/common/assets/images/livecasino/300x200/18503.jpg"> <span> <strong class="game">Immersive Roulette</strong> oyununda <strong class="bet_amount">₺1,000</strong>  karşılığı , <strong class="win_amount">₺36,000</strong> kazandı. </span></div>
                                                   <!----><!---->
                                                </div>
                                             </div>
                                             <!---->
                                          </div>
                                       </div>
                                       <div class="marquee_news">
                                          <div class="ticker_content_cover">
                                             <!----><!---->
                                             <div class="news">
                                                <div class="bmm ticker_top_winners">
                                                   <div class="ttw_inner"><span>S***l1 ,</span> <img class="ttw_game_img" src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/17737.jpg"> <span> <strong class="game">Gold Party™</strong> oyununda <strong class="bet_amount">₺225</strong>  karşılığı , <strong class="win_amount">₺70,740</strong> kazandı. </span></div>
                                                   <!----><!---->
                                                </div>
                                             </div>
                                             <!---->
                                          </div>
                                       </div>
                                       <div class="marquee_news">
                                          <div class="ticker_content_cover">
                                             <!----><!---->
                                             <div class="news">
                                                <div class="bmm ticker_top_winners">
                                                   <div class="ttw_inner"><span>k******er ,</span> <img class="ttw_game_img" src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/17853.jpg"> <span> <strong class="game">Gigantoonz</strong> oyununda <strong class="bet_amount">₺60</strong>  karşılığı , <strong class="win_amount">₺48,426</strong> kazandı. </span></div>
                                                   <!----><!---->
                                                </div>
                                             </div>
                                             <!---->
                                          </div>
                                       </div>
                                       <div class="marquee_news">
                                          <div class="ticker_content_cover">
                                             <!----><!---->
                                             <div class="news">
                                                <div class="bmm ticker_top_winners">
                                                   <div class="ttw_inner"><span>r******54 ,</span> <img class="ttw_game_img" src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/11413.jpg"> <span> <strong class="game">Christmas Carol Megaways</strong> oyununda <strong class="bet_amount">₺100</strong>  karşılığı , <strong class="win_amount">₺65,510</strong> kazandı. </span></div>
                                                   <!----><!---->
                                                </div>
                                             </div>
                                             <!---->
                                          </div>
                                       </div>
                                       <div class="marquee_news">
                                          <div class="ticker_content_cover">
                                             <!----><!---->
                                             <div class="news">
                                                <div class="bmm ticker_top_winners">
                                                   <div class="ttw_inner"><span>M********71 ,</span> <img class="ttw_game_img" src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/26163.jpg"> <span> <strong class="game">Gates of Olympus 1000™</strong> oyununda <strong class="bet_amount">₺15,000</strong>  karşılığı , <strong class="win_amount">₺122,962</strong> kazandı. </span></div>
                                                   <!----><!---->
                                                </div>
                                             </div>
                                             <!---->
                                          </div>
                                       </div>
                                       <div class="marquee_news">
                                          <div class="ticker_content_cover">
                                             <!----><!---->
                                             <div class="news">
                                                <div class="bmm ticker_top_winners">
                                                   <div class="ttw_inner"><span>c***at ,</span> <img class="ttw_game_img" src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/6461.jpg"> <span> <strong class="game">40 Burning Hot 6 Reels</strong> oyununda <strong class="bet_amount">₺350</strong>  karşılığı , <strong class="win_amount">₺70,000</strong> kazandı. </span></div>
                                                   <!----><!---->
                                                </div>
                                             </div>
                                             <!---->
                                          </div>
                                       </div>
                                       <div class="marquee_news">
                                          <div class="ticker_content_cover">
                                             <!----><!---->
                                             <div class="news">
                                                <div class="bmm ticker_top_winners">
                                                   <div class="ttw_inner"><span>h*********53 ,</span> <img class="ttw_game_img" src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/10228.jpg"> <span> <strong class="game">The Dog House Megaways</strong> oyununda <strong class="bet_amount">₺2,000</strong>  karşılığı , <strong class="win_amount">₺41,025</strong> kazandı. </span></div>
                                                   <!----><!---->
                                                </div>
                                             </div>
                                             <!---->
                                          </div>
                                       </div>
                                       <div class="marquee_news">
                                          <div class="ticker_content_cover">
                                             <!----><!---->
                                             <div class="news">
                                                <div class="bmm ticker_top_winners">
                                                   <div class="ttw_inner"><span>B************ur ,</span> <img class="ttw_game_img" src="https://v3.pronetstatic.com/common/assets/images/livecasino/300x200/18111.jpg"> <span> <strong class="game">18111</strong> oyununda <strong class="bet_amount">₺1,000</strong>  karşılığı , <strong class="win_amount">₺36,000</strong> kazandı. </span></div>
                                                   <!----><!---->
                                                </div>
                                             </div>
                                             <!---->
                                          </div>
                                       </div>
                                       <div class="marquee_news">
                                          <div class="ticker_content_cover">
                                             <!----><!---->
                                             <div class="news">
                                                <div class="bmm ticker_top_winners">
                                                   <div class="ttw_inner"><span>N********32 ,</span> <img class="ttw_game_img" src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/16624.jpg"> <span> <strong class="game">Bigger Bass Bonanza™</strong> oyununda <strong class="bet_amount">₺384</strong>  karşılığı , <strong class="win_amount">₺148,608</strong> kazandı. </span></div>
                                                   <!----><!---->
                                                </div>
                                             </div>
                                             <!---->
                                          </div>
                                       </div>
                                       <div class="marquee_news">
                                          <div class="ticker_content_cover">
                                             <!----><!---->
                                             <div class="news">
                                                <div class="bmm ticker_top_winners">
                                                   <div class="ttw_inner"><span>u*****56 ,</span> <img class="ttw_game_img" src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/13485.jpg"> <span> <strong class="game">Gates of Olympus™</strong> oyununda <strong class="bet_amount">₺2,000</strong>  karşılığı , <strong class="win_amount">₺100,000</strong> kazandı. </span></div>
                                                   <!----><!---->
                                                </div>
                                             </div>
                                             <!---->
                                          </div>
                                       </div>
                                       <div class="marquee_news">
                                          <div class="ticker_content_cover">
                                             <!----><!---->
                                             <div class="news">
                                                <div class="bmm ticker_top_winners">
                                                   <div class="ttw_inner"><span>K*****35 ,</span> <img class="ttw_game_img" src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/26163.jpg"> <span> <strong class="game">Gates of Olympus 1000™</strong> oyununda <strong class="bet_amount">₺2</strong>  karşılığı , <strong class="win_amount">₺2,000</strong> kazandı. </span></div>
                                                   <!----><!---->
                                                </div>
                                             </div>
                                             <!---->
                                          </div>
                                       </div>
                                       <div class="marquee_news">
                                          <div class="ticker_content_cover">
                                             <!----><!---->
                                             <div class="news">
                                                <div class="bmm ticker_top_winners">
                                                   <div class="ttw_inner"><span>D******IM ,</span> <img class="ttw_game_img" src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/6461.jpg"> <span> <strong class="game">40 Burning Hot 6 Reels</strong> oyununda <strong class="bet_amount">₺300</strong>  karşılığı , <strong class="win_amount">₺100,800</strong> kazandı. </span></div>
                                                   <!----><!---->
                                                </div>
                                             </div>
                                             <!---->
                                          </div>
                                       </div>
                                       <div class="marquee_news">
                                          <div class="ticker_content_cover">
                                             <!----><!---->
                                             <div class="news">
                                                <div class="bmm ticker_top_winners">
                                                   <div class="ttw_inner"><span>j***yl ,</span> <img class="ttw_game_img" src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/13485.jpg"> <span> <strong class="game">Gates of Olympus™</strong> oyununda <strong class="bet_amount">₺937</strong>  karşılığı , <strong class="win_amount">₺271,837</strong> kazandı. </span></div>
                                                   <!----><!---->
                                                </div>
                                             </div>
                                             <!---->
                                          </div>
                                       </div>
                                       <div class="marquee_news">
                                          <div class="ticker_content_cover">
                                             <!----><!---->
                                             <div class="news">
                                                <div class="bmm ticker_top_winners">
                                                   <div class="ttw_inner"><span>h*********53 ,</span> <img class="ttw_game_img" src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/10228.jpg"> <span> <strong class="game">The Dog House Megaways</strong> oyununda <strong class="bet_amount">₺2,000</strong>  karşılığı , <strong class="win_amount">₺185,901</strong> kazandı. </span></div>
                                                   <!----><!---->
                                                </div>
                                             </div>
                                             <!---->
                                          </div>
                                       </div>
                                       <div class="marquee_news">
                                          <div class="ticker_content_cover">
                                             <!----><!---->
                                             <div class="news">
                                                <div class="bmm ticker_top_winners">
                                                   <div class="ttw_inner"><span>savazingo ,</span> <img class="ttw_game_img" src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/8888.jpg"> <span> <strong class="game">Sweet Bonanza</strong> oyununda <strong class="bet_amount">₺5,000</strong>  karşılığı , <strong class="win_amount">₺80,347</strong> kazandı. </span></div>
                                                   <!----><!---->
                                                </div>
                                             </div>
                                             <!---->
                                          </div>
                                       </div>
                                       <div class="marquee_news">
                                          <div class="ticker_content_cover">
                                             <!----><!---->
                                             <div class="news">
                                                <div class="bmm ticker_top_winners">
                                                   <div class="ttw_inner"><span>0******HH ,</span> <img class="ttw_game_img" src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/8888.jpg"> <span> <strong class="game">Sweet Bonanza</strong> oyununda <strong class="bet_amount">₺7,500</strong>  karşılığı , <strong class="win_amount">₺104,568</strong> kazandı. </span></div>
                                                   <!----><!---->
                                                </div>
                                             </div>
                                             <!---->
                                          </div>
                                       </div>
                                       <div class="marquee_news">
                                          <div class="ticker_content_cover">
                                             <!----><!---->
                                             <div class="news">
                                                <div class="bmm ticker_top_winners">
                                                   <div class="ttw_inner"><span>F******00 ,</span> <img class="ttw_game_img" src="https://v3.pronetstatic.com/common/assets/images/livecasino/300x200/18190.jpg"> <span> <strong class="game">Crazy Time</strong> oyununda <strong class="bet_amount">₺3,620</strong>  karşılığı , <strong class="win_amount">₺92,920</strong> kazandı. </span></div>
                                                   <!----><!---->
                                                </div>
                                             </div>
                                             <!---->
                                          </div>
                                       </div>
                                       <div class="marquee_news">
                                          <div class="ticker_content_cover">
                                             <!----><!---->
                                             <div class="news">
                                                <div class="bmm ticker_top_winners">
                                                   <div class="ttw_inner"><span>r*******91 ,</span> <img class="ttw_game_img" src="https://v3.pronetstatic.com/common/assets/images/livecasino/300x200/18503.jpg"> <span> <strong class="game">Immersive Roulette</strong> oyununda <strong class="bet_amount">₺2,000</strong>  karşılığı , <strong class="win_amount">₺19,260</strong> kazandı. </span></div>
                                                   <!----><!---->
                                                </div>
                                             </div>
                                             <!---->
                                          </div>
                                       </div>
                                       <div class="marquee_news">
                                          <div class="ticker_content_cover">
                                             <!----><!---->
                                             <div class="news">
                                                <div class="bmm ticker_top_winners">
                                                   <div class="ttw_inner"><span>p******un ,</span> <img class="ttw_game_img" src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/6461.jpg"> <span> <strong class="game">40 Burning Hot 6 Reels</strong> oyununda <strong class="bet_amount">₺500</strong>  karşılığı , <strong class="win_amount">₺150,000</strong> kazandı. </span></div>
                                                   <!----><!---->
                                                </div>
                                             </div>
                                             <!---->
                                          </div>
                                       </div>
                                       <div class="marquee_news">
                                          <div class="ticker_content_cover">
                                             <!----><!---->
                                             <div class="news">
                                                <div class="bmm ticker_top_winners">
                                                   <div class="ttw_inner"><span>H**n ,</span> <img class="ttw_game_img" src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/21994.jpg"> <span> <strong class="game">Fish Eye</strong> oyununda <strong class="bet_amount">₺27</strong>  karşılığı , <strong class="win_amount">₺21,124</strong> kazandı. </span></div>
                                                   <!----><!---->
                                                </div>
                                             </div>
                                             <!---->
                                          </div>
                                       </div>
                                       <div class="marquee_news">
                                          <div class="ticker_content_cover">
                                             <!----><!---->
                                             <div class="news">
                                                <div class="bmm ticker_top_winners">
                                                   <div class="ttw_inner"><span>B********11 ,</span> <img class="ttw_game_img" src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/25903.jpg"> <span> <strong class="game">Big Bass Christmas Bash™</strong> oyununda <strong class="bet_amount">₺150</strong>  karşılığı , <strong class="win_amount">₺28,920</strong> kazandı. </span></div>
                                                   <!----><!---->
                                                </div>
                                             </div>
                                             <!---->
                                          </div>
                                       </div>
                                       <div class="marquee_news">
                                          <div class="ticker_content_cover">
                                             <!----><!---->
                                             <div class="news">
                                                <div class="bmm ticker_top_winners">
                                                   <div class="ttw_inner"><span>m*********34 ,</span> <img class="ttw_game_img" src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/13485.jpg"> <span> <strong class="game">Gates of Olympus™</strong> oyununda <strong class="bet_amount">₺4,500</strong>  karşılığı , <strong class="win_amount">₺34,699</strong> kazandı. </span></div>
                                                   <!----><!---->
                                                </div>
                                             </div>
                                             <!---->
                                          </div>
                                       </div>
                                       <div class="marquee_news">
                                          <div class="ticker_content_cover">
                                             <!----><!---->
                                             <div class="news">
                                                <div class="bmm ticker_top_winners">
                                                   <div class="ttw_inner"><span>J*****uk ,</span> <img class="ttw_game_img" src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/13485.jpg"> <span> <strong class="game">Gates of Olympus™</strong> oyununda <strong class="bet_amount">₺62</strong>  karşılığı , <strong class="win_amount">₺53,120</strong> kazandı. </span></div>
                                                   <!----><!---->
                                                </div>
                                             </div>
                                             <!---->
                                          </div>
                                       </div>
                                       <div class="marquee_news">
                                          <div class="ticker_content_cover">
                                             <!----><!---->
                                             <div class="news">
                                                <div class="bmm ticker_top_winners">
                                                   <div class="ttw_inner"><span>K***lo ,</span> <img class="ttw_game_img" src="https://v3.pronetstatic.com/common/assets/images/livecasino/300x200/19884.jpg"> <span> <strong class="game">XXXtreme Lightning Roulette</strong> oyununda <strong class="bet_amount">₺1,200</strong>  karşılığı , <strong class="win_amount">₺40,000</strong> kazandı. </span></div>
                                                   <!----><!---->
                                                </div>
                                             </div>
                                             <!---->
                                          </div>
                                       </div>
                                       <div class="marquee_news">
                                          <div class="ticker_content_cover">
                                             <!----><!---->
                                             <div class="news">
                                                <div class="bmm ticker_top_winners">
                                                   <div class="ttw_inner"><span>m**it ,</span> <img class="ttw_game_img" src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/26163.jpg"> <span> <strong class="game">Gates of Olympus 1000™</strong> oyununda <strong class="bet_amount">₺400</strong>  karşılığı , <strong class="win_amount">₺23,181</strong> kazandı. </span></div>
                                                   <!----><!---->
                                                </div>
                                             </div>
                                             <!---->
                                          </div>
                                       </div>
                                       <div class="marquee_news">
                                          <div class="ticker_content_cover">
                                             <!----><!---->
                                             <div class="news">
                                                <div class="bmm ticker_top_winners">
                                                   <div class="ttw_inner"><span>n*******0m ,</span> <img class="ttw_game_img" src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/2732.jpg"> <span> <strong class="game">Dice and Roll</strong> oyununda <strong class="bet_amount">₺50</strong>  karşılığı , <strong class="win_amount">₺24,000</strong> kazandı. </span></div>
                                                   <!----><!---->
                                                </div>
                                             </div>
                                             <!---->
                                          </div>
                                       </div>
                                       <div class="marquee_news">
                                          <div class="ticker_content_cover">
                                             <!----><!---->
                                             <div class="news">
                                                <div class="bmm ticker_top_winners">
                                                   <div class="ttw_inner"><span>b******uc ,</span> <img class="ttw_game_img" src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/10228.jpg"> <span> <strong class="game">The Dog House Megaways</strong> oyununda <strong class="bet_amount">₺1,800</strong>  karşılığı , <strong class="win_amount">₺26,308</strong> kazandı. </span></div>
                                                   <!----><!---->
                                                </div>
                                             </div>
                                             <!---->
                                          </div>
                                       </div>
                                       <div class="marquee_news">
                                          <div class="ticker_content_cover">
                                             <!----><!---->
                                             <div class="news">
                                                <div class="bmm ticker_top_winners">
                                                   <div class="ttw_inner"><span>F******00 ,</span> <img class="ttw_game_img" src="https://v3.pronetstatic.com/common/assets/images/livecasino/300x200/18190.jpg"> <span> <strong class="game">Crazy Time</strong> oyununda <strong class="bet_amount">₺2,500</strong>  karşılığı , <strong class="win_amount">₺180,600</strong> kazandı. </span></div>
                                                   <!----><!---->
                                                </div>
                                             </div>
                                             <!---->
                                          </div>
                                       </div>
                                       <div class="marquee_news">
                                          <div class="ticker_content_cover">
                                             <!----><!---->
                                             <div class="news">
                                                <div class="bmm ticker_top_winners">
                                                   <div class="ttw_inner"><span>ercin10 ,</span> <img class="ttw_game_img" src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/26163.jpg"> <span> <strong class="game">Gates of Olympus 1000™</strong> oyununda <strong class="bet_amount">₺400</strong>  karşılığı , <strong class="win_amount">₺60,000</strong> kazandı. </span></div>
                                                   <!----><!---->
                                                </div>
                                             </div>
                                             <!---->
                                          </div>
                                       </div>
                                       <div class="marquee_news">
                                          <div class="ticker_content_cover">
                                             <!----><!---->
                                             <div class="news">
                                                <div class="bmm ticker_top_winners">
                                                   <div class="ttw_inner"><span>h*********53 ,</span> <img class="ttw_game_img" src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/14895.jpg"> <span> <strong class="game">Panda's Fortune 2</strong> oyununda <strong class="bet_amount">₺250</strong>  karşılığı , <strong class="win_amount">₺106,000</strong> kazandı. </span></div>
                                                   <!----><!---->
                                                </div>
                                             </div>
                                             <!---->
                                          </div>
                                       </div>
                                       <div class="marquee_news">
                                          <div class="ticker_content_cover">
                                             <!----><!---->
                                             <div class="news">
                                                <div class="bmm ticker_top_winners">
                                                   <div class="ttw_inner"><span>e******49 ,</span> <img class="ttw_game_img" src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/20053.jpg"> <span> <strong class="game">Sugar Rush</strong> oyununda <strong class="bet_amount">₺600</strong>  karşılığı , <strong class="win_amount">₺240,180</strong> kazandı. </span></div>
                                                   <!----><!---->
                                                </div>
                                             </div>
                                             <!---->
                                          </div>
                                       </div>
                                       <div class="marquee_news">
                                          <div class="ticker_content_cover">
                                             <!----><!---->
                                             <div class="news">
                                                <div class="bmm ticker_top_winners">
                                                   <div class="ttw_inner"><span>d*******in ,</span> <img class="ttw_game_img" src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/17303.jpg"> <span> <strong class="game">Wanted Dead or a Wild </strong> oyununda <strong class="bet_amount">₺1,600</strong>  karşılığı , <strong class="win_amount">₺100,000</strong> kazandı. </span></div>
                                                   <!----><!---->
                                                </div>
                                             </div>
                                             <!---->
                                          </div>
                                       </div>
                                       <div class="marquee_news">
                                          <div class="ticker_content_cover">
                                             <!----><!---->
                                             <div class="news">
                                                <div class="bmm ticker_top_winners">
                                                   <div class="ttw_inner"><span>h*********53 ,</span> <img class="ttw_game_img" src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/14895.jpg"> <span> <strong class="game">Panda's Fortune 2</strong> oyununda <strong class="bet_amount">₺250</strong>  karşılığı , <strong class="win_amount">₺106,000</strong> kazandı. </span></div>
                                                   <!----><!---->
                                                </div>
                                             </div>
                                             <!---->
                                          </div>
                                       </div>
                                       <div class="marquee_news">
                                          <div class="ticker_content_cover">
                                             <!----><!---->
                                             <div class="news">
                                                <div class="bmm ticker_top_winners">
                                                   <div class="ttw_inner"><span>k******er ,</span> <img class="ttw_game_img" src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/23296.jpg"> <span> <strong class="game">Royal Joker: Hold and Win</strong> oyununda <strong class="bet_amount">₺500</strong>  karşılığı , <strong class="win_amount">₺82,500</strong> kazandı. </span></div>
                                                   <!----><!---->
                                                </div>
                                             </div>
                                             <!---->
                                          </div>
                                       </div>
                                       <div class="marquee_news">
                                          <div class="ticker_content_cover">
                                             <!----><!---->
                                             <div class="news">
                                                <div class="bmm ticker_top_winners">
                                                   <div class="ttw_inner"><span>S***l1 ,</span> <img class="ttw_game_img" src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/17737.jpg"> <span> <strong class="game">Gold Party™</strong> oyununda <strong class="bet_amount">₺2,000</strong>  karşılığı , <strong class="win_amount">₺691,200</strong> kazandı. </span></div>
                                                   <!----><!---->
                                                </div>
                                             </div>
                                             <!---->
                                          </div>
                                       </div>
                                       <div class="marquee_news">
                                          <div class="ticker_content_cover">
                                             <!----><!---->
                                             <div class="news">
                                                <div class="bmm ticker_top_winners">
                                                   <div class="ttw_inner"><span>h*********et ,</span> <img class="ttw_game_img" src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/6461.jpg"> <span> <strong class="game">40 Burning Hot 6 Reels</strong> oyununda <strong class="bet_amount">₺500</strong>  karşılığı , <strong class="win_amount">₺254,000</strong> kazandı. </span></div>
                                                   <!----><!---->
                                                </div>
                                             </div>
                                             <!---->
                                          </div>
                                       </div>
                                    </div>
                                    <div class="marquee-text-text" style="animation-duration: 484.54s;">
                                       <div class="marquee_news">
                                          <div class="ticker_content_cover">
                                             <div class="news">
                                                <div class="news_inner">Güvenliğiniz için <strong><span style="color: #e03e2d; --darkreader-inline-color: #ff4d38;" data-darkreader-inline-color=""><span style="background-color: #000000; --darkreader-inline-bgcolor: #000000; font-size: 16px;" data-darkreader-inline-bgcolor="">"İki Aşamalı Giriş"</span> </span></strong>&nbsp;aktif ediniz!</div>
                                             </div>
                                             <!----><!----><!---->
                                          </div>
                                       </div>
                                       <div class="marquee_news">
                                          <div class="ticker_content_cover">
                                             <!----><!---->
                                             <div class="news">
                                                <div class="bmm ticker_top_winners">
                                                   <div class="ttw_inner"><span>K********97 ,</span> <img class="ttw_game_img" src="https://v3.pronetstatic.com/common/assets/images/livecasino/300x200/18225.jpg"> <span> <strong class="game">Auto-Roulette</strong> oyununda <strong class="bet_amount">₺8,500</strong>  karşılığı , <strong class="win_amount">₺36,000</strong> kazandı. </span></div>
                                                   <!----><!---->
                                                </div>
                                             </div>
                                             <!---->
                                          </div>
                                       </div>
                                       <div class="marquee_news">
                                          <div class="ticker_content_cover">
                                             <!----><!---->
                                             <div class="news">
                                                <div class="bmm ticker_top_winners">
                                                   <div class="ttw_inner"><span>B************ur ,</span> <img class="ttw_game_img" src="https://v3.pronetstatic.com/common/assets/images/livecasino/300x200/18503.jpg"> <span> <strong class="game">Immersive Roulette</strong> oyununda <strong class="bet_amount">₺1,000</strong>  karşılığı , <strong class="win_amount">₺36,000</strong> kazandı. </span></div>
                                                   <!----><!---->
                                                </div>
                                             </div>
                                             <!---->
                                          </div>
                                       </div>
                                       <div class="marquee_news">
                                          <div class="ticker_content_cover">
                                             <!----><!---->
                                             <div class="news">
                                                <div class="bmm ticker_top_winners">
                                                   <div class="ttw_inner"><span>S***l1 ,</span> <img class="ttw_game_img" src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/17737.jpg"> <span> <strong class="game">Gold Party™</strong> oyununda <strong class="bet_amount">₺225</strong>  karşılığı , <strong class="win_amount">₺70,740</strong> kazandı. </span></div>
                                                   <!----><!---->
                                                </div>
                                             </div>
                                             <!---->
                                          </div>
                                       </div>
                                       <div class="marquee_news">
                                          <div class="ticker_content_cover">
                                             <!----><!---->
                                             <div class="news">
                                                <div class="bmm ticker_top_winners">
                                                   <div class="ttw_inner"><span>k******er ,</span> <img class="ttw_game_img" src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/17853.jpg"> <span> <strong class="game">Gigantoonz</strong> oyununda <strong class="bet_amount">₺60</strong>  karşılığı , <strong class="win_amount">₺48,426</strong> kazandı. </span></div>
                                                   <!----><!---->
                                                </div>
                                             </div>
                                             <!---->
                                          </div>
                                       </div>
                                       <div class="marquee_news">
                                          <div class="ticker_content_cover">
                                             <!----><!---->
                                             <div class="news">
                                                <div class="bmm ticker_top_winners">
                                                   <div class="ttw_inner"><span>r******54 ,</span> <img class="ttw_game_img" src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/11413.jpg"> <span> <strong class="game">Christmas Carol Megaways</strong> oyununda <strong class="bet_amount">₺100</strong>  karşılığı , <strong class="win_amount">₺65,510</strong> kazandı. </span></div>
                                                   <!----><!---->
                                                </div>
                                             </div>
                                             <!---->
                                          </div>
                                       </div>
                                       <div class="marquee_news">
                                          <div class="ticker_content_cover">
                                             <!----><!---->
                                             <div class="news">
                                                <div class="bmm ticker_top_winners">
                                                   <div class="ttw_inner"><span>M********71 ,</span> <img class="ttw_game_img" src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/26163.jpg"> <span> <strong class="game">Gates of Olympus 1000™</strong> oyununda <strong class="bet_amount">₺15,000</strong>  karşılığı , <strong class="win_amount">₺122,962</strong> kazandı. </span></div>
                                                   <!----><!---->
                                                </div>
                                             </div>
                                             <!---->
                                          </div>
                                       </div>
                                       <div class="marquee_news">
                                          <div class="ticker_content_cover">
                                             <!----><!---->
                                             <div class="news">
                                                <div class="bmm ticker_top_winners">
                                                   <div class="ttw_inner"><span>c***at ,</span> <img class="ttw_game_img" src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/6461.jpg"> <span> <strong class="game">40 Burning Hot 6 Reels</strong> oyununda <strong class="bet_amount">₺350</strong>  karşılığı , <strong class="win_amount">₺70,000</strong> kazandı. </span></div>
                                                   <!----><!---->
                                                </div>
                                             </div>
                                             <!---->
                                          </div>
                                       </div>
                                       <div class="marquee_news">
                                          <div class="ticker_content_cover">
                                             <!----><!---->
                                             <div class="news">
                                                <div class="bmm ticker_top_winners">
                                                   <div class="ttw_inner"><span>h*********53 ,</span> <img class="ttw_game_img" src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/10228.jpg"> <span> <strong class="game">The Dog House Megaways</strong> oyununda <strong class="bet_amount">₺2,000</strong>  karşılığı , <strong class="win_amount">₺41,025</strong> kazandı. </span></div>
                                                   <!----><!---->
                                                </div>
                                             </div>
                                             <!---->
                                          </div>
                                       </div>
                                       <div class="marquee_news">
                                          <div class="ticker_content_cover">
                                             <!----><!---->
                                             <div class="news">
                                                <div class="bmm ticker_top_winners">
                                                   <div class="ttw_inner"><span>B************ur ,</span> <img class="ttw_game_img" src="https://v3.pronetstatic.com/common/assets/images/livecasino/300x200/18111.jpg"> <span> <strong class="game">18111</strong> oyununda <strong class="bet_amount">₺1,000</strong>  karşılığı , <strong class="win_amount">₺36,000</strong> kazandı. </span></div>
                                                   <!----><!---->
                                                </div>
                                             </div>
                                             <!---->
                                          </div>
                                       </div>
                                       <div class="marquee_news">
                                          <div class="ticker_content_cover">
                                             <!----><!---->
                                             <div class="news">
                                                <div class="bmm ticker_top_winners">
                                                   <div class="ttw_inner"><span>N********32 ,</span> <img class="ttw_game_img" src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/16624.jpg"> <span> <strong class="game">Bigger Bass Bonanza™</strong> oyununda <strong class="bet_amount">₺384</strong>  karşılığı , <strong class="win_amount">₺148,608</strong> kazandı. </span></div>
                                                   <!----><!---->
                                                </div>
                                             </div>
                                             <!---->
                                          </div>
                                       </div>
                                       <div class="marquee_news">
                                          <div class="ticker_content_cover">
                                             <!----><!---->
                                             <div class="news">
                                                <div class="bmm ticker_top_winners">
                                                   <div class="ttw_inner"><span>u*****56 ,</span> <img class="ttw_game_img" src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/13485.jpg"> <span> <strong class="game">Gates of Olympus™</strong> oyununda <strong class="bet_amount">₺2,000</strong>  karşılığı , <strong class="win_amount">₺100,000</strong> kazandı. </span></div>
                                                   <!----><!---->
                                                </div>
                                             </div>
                                             <!---->
                                          </div>
                                       </div>
                                       <div class="marquee_news">
                                          <div class="ticker_content_cover">
                                             <!----><!---->
                                             <div class="news">
                                                <div class="bmm ticker_top_winners">
                                                   <div class="ttw_inner"><span>K*****35 ,</span> <img class="ttw_game_img" src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/26163.jpg"> <span> <strong class="game">Gates of Olympus 1000™</strong> oyununda <strong class="bet_amount">₺2</strong>  karşılığı , <strong class="win_amount">₺2,000</strong> kazandı. </span></div>
                                                   <!----><!---->
                                                </div>
                                             </div>
                                             <!---->
                                          </div>
                                       </div>
                                       <div class="marquee_news">
                                          <div class="ticker_content_cover">
                                             <!----><!---->
                                             <div class="news">
                                                <div class="bmm ticker_top_winners">
                                                   <div class="ttw_inner"><span>D******IM ,</span> <img class="ttw_game_img" src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/6461.jpg"> <span> <strong class="game">40 Burning Hot 6 Reels</strong> oyununda <strong class="bet_amount">₺300</strong>  karşılığı , <strong class="win_amount">₺100,800</strong> kazandı. </span></div>
                                                   <!----><!---->
                                                </div>
                                             </div>
                                             <!---->
                                          </div>
                                       </div>
                                       <div class="marquee_news">
                                          <div class="ticker_content_cover">
                                             <!----><!---->
                                             <div class="news">
                                                <div class="bmm ticker_top_winners">
                                                   <div class="ttw_inner"><span>j***yl ,</span> <img class="ttw_game_img" src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/13485.jpg"> <span> <strong class="game">Gates of Olympus™</strong> oyununda <strong class="bet_amount">₺937</strong>  karşılığı , <strong class="win_amount">₺271,837</strong> kazandı. </span></div>
                                                   <!----><!---->
                                                </div>
                                             </div>
                                             <!---->
                                          </div>
                                       </div>
                                       <div class="marquee_news">
                                          <div class="ticker_content_cover">
                                             <!----><!---->
                                             <div class="news">
                                                <div class="bmm ticker_top_winners">
                                                   <div class="ttw_inner"><span>h*********53 ,</span> <img class="ttw_game_img" src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/10228.jpg"> <span> <strong class="game">The Dog House Megaways</strong> oyununda <strong class="bet_amount">₺2,000</strong>  karşılığı , <strong class="win_amount">₺185,901</strong> kazandı. </span></div>
                                                   <!----><!---->
                                                </div>
                                             </div>
                                             <!---->
                                          </div>
                                       </div>
                                       <div class="marquee_news">
                                          <div class="ticker_content_cover">
                                             <!----><!---->
                                             <div class="news">
                                                <div class="bmm ticker_top_winners">
                                                   <div class="ttw_inner"><span>savazingo ,</span> <img class="ttw_game_img" src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/8888.jpg"> <span> <strong class="game">Sweet Bonanza</strong> oyununda <strong class="bet_amount">₺5,000</strong>  karşılığı , <strong class="win_amount">₺80,347</strong> kazandı. </span></div>
                                                   <!----><!---->
                                                </div>
                                             </div>
                                             <!---->
                                          </div>
                                       </div>
                                       <div class="marquee_news">
                                          <div class="ticker_content_cover">
                                             <!----><!---->
                                             <div class="news">
                                                <div class="bmm ticker_top_winners">
                                                   <div class="ttw_inner"><span>0******HH ,</span> <img class="ttw_game_img" src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/8888.jpg"> <span> <strong class="game">Sweet Bonanza</strong> oyununda <strong class="bet_amount">₺7,500</strong>  karşılığı , <strong class="win_amount">₺104,568</strong> kazandı. </span></div>
                                                   <!----><!---->
                                                </div>
                                             </div>
                                             <!---->
                                          </div>
                                       </div>
                                       <div class="marquee_news">
                                          <div class="ticker_content_cover">
                                             <!----><!---->
                                             <div class="news">
                                                <div class="bmm ticker_top_winners">
                                                   <div class="ttw_inner"><span>F******00 ,</span> <img class="ttw_game_img" src="https://v3.pronetstatic.com/common/assets/images/livecasino/300x200/18190.jpg"> <span> <strong class="game">Crazy Time</strong> oyununda <strong class="bet_amount">₺3,620</strong>  karşılığı , <strong class="win_amount">₺92,920</strong> kazandı. </span></div>
                                                   <!----><!---->
                                                </div>
                                             </div>
                                             <!---->
                                          </div>
                                       </div>
                                       <div class="marquee_news">
                                          <div class="ticker_content_cover">
                                             <!----><!---->
                                             <div class="news">
                                                <div class="bmm ticker_top_winners">
                                                   <div class="ttw_inner"><span>r*******91 ,</span> <img class="ttw_game_img" src="https://v3.pronetstatic.com/common/assets/images/livecasino/300x200/18503.jpg"> <span> <strong class="game">Immersive Roulette</strong> oyununda <strong class="bet_amount">₺2,000</strong>  karşılığı , <strong class="win_amount">₺19,260</strong> kazandı. </span></div>
                                                   <!----><!---->
                                                </div>
                                             </div>
                                             <!---->
                                          </div>
                                       </div>
                                       <div class="marquee_news">
                                          <div class="ticker_content_cover">
                                             <!----><!---->
                                             <div class="news">
                                                <div class="bmm ticker_top_winners">
                                                   <div class="ttw_inner"><span>p******un ,</span> <img class="ttw_game_img" src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/6461.jpg"> <span> <strong class="game">40 Burning Hot 6 Reels</strong> oyununda <strong class="bet_amount">₺500</strong>  karşılığı , <strong class="win_amount">₺150,000</strong> kazandı. </span></div>
                                                   <!----><!---->
                                                </div>
                                             </div>
                                             <!---->
                                          </div>
                                       </div>
                                       <div class="marquee_news">
                                          <div class="ticker_content_cover">
                                             <!----><!---->
                                             <div class="news">
                                                <div class="bmm ticker_top_winners">
                                                   <div class="ttw_inner"><span>H**n ,</span> <img class="ttw_game_img" src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/21994.jpg"> <span> <strong class="game">Fish Eye</strong> oyununda <strong class="bet_amount">₺27</strong>  karşılığı , <strong class="win_amount">₺21,124</strong> kazandı. </span></div>
                                                   <!----><!---->
                                                </div>
                                             </div>
                                             <!---->
                                          </div>
                                       </div>
                                       <div class="marquee_news">
                                          <div class="ticker_content_cover">
                                             <!----><!---->
                                             <div class="news">
                                                <div class="bmm ticker_top_winners">
                                                   <div class="ttw_inner"><span>B********11 ,</span> <img class="ttw_game_img" src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/25903.jpg"> <span> <strong class="game">Big Bass Christmas Bash™</strong> oyununda <strong class="bet_amount">₺150</strong>  karşılığı , <strong class="win_amount">₺28,920</strong> kazandı. </span></div>
                                                   <!----><!---->
                                                </div>
                                             </div>
                                             <!---->
                                          </div>
                                       </div>
                                       <div class="marquee_news">
                                          <div class="ticker_content_cover">
                                             <!----><!---->
                                             <div class="news">
                                                <div class="bmm ticker_top_winners">
                                                   <div class="ttw_inner"><span>m*********34 ,</span> <img class="ttw_game_img" src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/13485.jpg"> <span> <strong class="game">Gates of Olympus™</strong> oyununda <strong class="bet_amount">₺4,500</strong>  karşılığı , <strong class="win_amount">₺34,699</strong> kazandı. </span></div>
                                                   <!----><!---->
                                                </div>
                                             </div>
                                             <!---->
                                          </div>
                                       </div>
                                       <div class="marquee_news">
                                          <div class="ticker_content_cover">
                                             <!----><!---->
                                             <div class="news">
                                                <div class="bmm ticker_top_winners">
                                                   <div class="ttw_inner"><span>J*****uk ,</span> <img class="ttw_game_img" src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/13485.jpg"> <span> <strong class="game">Gates of Olympus™</strong> oyununda <strong class="bet_amount">₺62</strong>  karşılığı , <strong class="win_amount">₺53,120</strong> kazandı. </span></div>
                                                   <!----><!---->
                                                </div>
                                             </div>
                                             <!---->
                                          </div>
                                       </div>
                                       <div class="marquee_news">
                                          <div class="ticker_content_cover">
                                             <!----><!---->
                                             <div class="news">
                                                <div class="bmm ticker_top_winners">
                                                   <div class="ttw_inner"><span>K***lo ,</span> <img class="ttw_game_img" src="https://v3.pronetstatic.com/common/assets/images/livecasino/300x200/19884.jpg"> <span> <strong class="game">XXXtreme Lightning Roulette</strong> oyununda <strong class="bet_amount">₺1,200</strong>  karşılığı , <strong class="win_amount">₺40,000</strong> kazandı. </span></div>
                                                   <!----><!---->
                                                </div>
                                             </div>
                                             <!---->
                                          </div>
                                       </div>
                                       <div class="marquee_news">
                                          <div class="ticker_content_cover">
                                             <!----><!---->
                                             <div class="news">
                                                <div class="bmm ticker_top_winners">
                                                   <div class="ttw_inner"><span>m**it ,</span> <img class="ttw_game_img" src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/26163.jpg"> <span> <strong class="game">Gates of Olympus 1000™</strong> oyununda <strong class="bet_amount">₺400</strong>  karşılığı , <strong class="win_amount">₺23,181</strong> kazandı. </span></div>
                                                   <!----><!---->
                                                </div>
                                             </div>
                                             <!---->
                                          </div>
                                       </div>
                                       <div class="marquee_news">
                                          <div class="ticker_content_cover">
                                             <!----><!---->
                                             <div class="news">
                                                <div class="bmm ticker_top_winners">
                                                   <div class="ttw_inner"><span>n*******0m ,</span> <img class="ttw_game_img" src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/2732.jpg"> <span> <strong class="game">Dice and Roll</strong> oyununda <strong class="bet_amount">₺50</strong>  karşılığı , <strong class="win_amount">₺24,000</strong> kazandı. </span></div>
                                                   <!----><!---->
                                                </div>
                                             </div>
                                             <!---->
                                          </div>
                                       </div>
                                       <div class="marquee_news">
                                          <div class="ticker_content_cover">
                                             <!----><!---->
                                             <div class="news">
                                                <div class="bmm ticker_top_winners">
                                                   <div class="ttw_inner"><span>b******uc ,</span> <img class="ttw_game_img" src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/10228.jpg"> <span> <strong class="game">The Dog House Megaways</strong> oyununda <strong class="bet_amount">₺1,800</strong>  karşılığı , <strong class="win_amount">₺26,308</strong> kazandı. </span></div>
                                                   <!----><!---->
                                                </div>
                                             </div>
                                             <!---->
                                          </div>
                                       </div>
                                       <div class="marquee_news">
                                          <div class="ticker_content_cover">
                                             <!----><!---->
                                             <div class="news">
                                                <div class="bmm ticker_top_winners">
                                                   <div class="ttw_inner"><span>F******00 ,</span> <img class="ttw_game_img" src="https://v3.pronetstatic.com/common/assets/images/livecasino/300x200/18190.jpg"> <span> <strong class="game">Crazy Time</strong> oyununda <strong class="bet_amount">₺2,500</strong>  karşılığı , <strong class="win_amount">₺180,600</strong> kazandı. </span></div>
                                                   <!----><!---->
                                                </div>
                                             </div>
                                             <!---->
                                          </div>
                                       </div>
                                       <div class="marquee_news">
                                          <div class="ticker_content_cover">
                                             <!----><!---->
                                             <div class="news">
                                                <div class="bmm ticker_top_winners">
                                                   <div class="ttw_inner"><span>ercin10 ,</span> <img class="ttw_game_img" src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/26163.jpg"> <span> <strong class="game">Gates of Olympus 1000™</strong> oyununda <strong class="bet_amount">₺400</strong>  karşılığı , <strong class="win_amount">₺60,000</strong> kazandı. </span></div>
                                                   <!----><!---->
                                                </div>
                                             </div>
                                             <!---->
                                          </div>
                                       </div>
                                       <div class="marquee_news">
                                          <div class="ticker_content_cover">
                                             <!----><!---->
                                             <div class="news">
                                                <div class="bmm ticker_top_winners">
                                                   <div class="ttw_inner"><span>h*********53 ,</span> <img class="ttw_game_img" src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/14895.jpg"> <span> <strong class="game">Panda's Fortune 2</strong> oyununda <strong class="bet_amount">₺250</strong>  karşılığı , <strong class="win_amount">₺106,000</strong> kazandı. </span></div>
                                                   <!----><!---->
                                                </div>
                                             </div>
                                             <!---->
                                          </div>
                                       </div>
                                       <div class="marquee_news">
                                          <div class="ticker_content_cover">
                                             <!----><!---->
                                             <div class="news">
                                                <div class="bmm ticker_top_winners">
                                                   <div class="ttw_inner"><span>e******49 ,</span> <img class="ttw_game_img" src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/20053.jpg"> <span> <strong class="game">Sugar Rush</strong> oyununda <strong class="bet_amount">₺600</strong>  karşılığı , <strong class="win_amount">₺240,180</strong> kazandı. </span></div>
                                                   <!----><!---->
                                                </div>
                                             </div>
                                             <!---->
                                          </div>
                                       </div>
                                       <div class="marquee_news">
                                          <div class="ticker_content_cover">
                                             <!----><!---->
                                             <div class="news">
                                                <div class="bmm ticker_top_winners">
                                                   <div class="ttw_inner"><span>d*******in ,</span> <img class="ttw_game_img" src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/17303.jpg"> <span> <strong class="game">Wanted Dead or a Wild </strong> oyununda <strong class="bet_amount">₺1,600</strong>  karşılığı , <strong class="win_amount">₺100,000</strong> kazandı. </span></div>
                                                   <!----><!---->
                                                </div>
                                             </div>
                                             <!---->
                                          </div>
                                       </div>
                                       <div class="marquee_news">
                                          <div class="ticker_content_cover">
                                             <!----><!---->
                                             <div class="news">
                                                <div class="bmm ticker_top_winners">
                                                   <div class="ttw_inner"><span>h*********53 ,</span> <img class="ttw_game_img" src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/14895.jpg"> <span> <strong class="game">Panda's Fortune 2</strong> oyununda <strong class="bet_amount">₺250</strong>  karşılığı , <strong class="win_amount">₺106,000</strong> kazandı. </span></div>
                                                   <!----><!---->
                                                </div>
                                             </div>
                                             <!---->
                                          </div>
                                       </div>
                                       <div class="marquee_news">
                                          <div class="ticker_content_cover">
                                             <!----><!---->
                                             <div class="news">
                                                <div class="bmm ticker_top_winners">
                                                   <div class="ttw_inner"><span>k******er ,</span> <img class="ttw_game_img" src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/23296.jpg"> <span> <strong class="game">Royal Joker: Hold and Win</strong> oyununda <strong class="bet_amount">₺500</strong>  karşılığı , <strong class="win_amount">₺82,500</strong> kazandı. </span></div>
                                                   <!----><!---->
                                                </div>
                                             </div>
                                             <!---->
                                          </div>
                                       </div>
                                       <div class="marquee_news">
                                          <div class="ticker_content_cover">
                                             <!----><!---->
                                             <div class="news">
                                                <div class="bmm ticker_top_winners">
                                                   <div class="ttw_inner"><span>S***l1 ,</span> <img class="ttw_game_img" src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/17737.jpg"> <span> <strong class="game">Gold Party™</strong> oyununda <strong class="bet_amount">₺2,000</strong>  karşılığı , <strong class="win_amount">₺691,200</strong> kazandı. </span></div>
                                                   <!----><!---->
                                                </div>
                                             </div>
                                             <!---->
                                          </div>
                                       </div>
                                       <div class="marquee_news">
                                          <div class="ticker_content_cover">
                                             <!----><!---->
                                             <div class="news">
                                                <div class="bmm ticker_top_winners">
                                                   <div class="ttw_inner"><span>h*********et ,</span> <img class="ttw_game_img" src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/6461.jpg"> <span> <strong class="game">40 Burning Hot 6 Reels</strong> oyununda <strong class="bet_amount">₺500</strong>  karşılığı , <strong class="win_amount">₺254,000</strong> kazandı. </span></div>
                                                   <!----><!---->
                                                </div>
                                             </div>
                                             <!---->
                                          </div>
                                       </div>
                                    </div>
                                    <div class="marquee-text-text" style="animation-duration: 484.54s;">
                                       <div class="marquee_news">
                                          <div class="ticker_content_cover">
                                             <div class="news">
                                                <div class="news_inner">Güvenliğiniz için <strong><span style="color: #e03e2d; --darkreader-inline-color: #ff4d38;" data-darkreader-inline-color=""><span style="background-color: #000000; --darkreader-inline-bgcolor: #000000; font-size: 16px;" data-darkreader-inline-bgcolor="">"İki Aşamalı Giriş"</span> </span></strong>&nbsp;aktif ediniz!</div>
                                             </div>
                                             <!----><!----><!---->
                                          </div>
                                       </div>
                                       <div class="marquee_news">
                                          <div class="ticker_content_cover">
                                             <!----><!---->
                                             <div class="news">
                                                <div class="bmm ticker_top_winners">
                                                   <div class="ttw_inner"><span>K********97 ,</span> <img class="ttw_game_img" src="https://v3.pronetstatic.com/common/assets/images/livecasino/300x200/18225.jpg"> <span> <strong class="game">Auto-Roulette</strong> oyununda <strong class="bet_amount">₺8,500</strong>  karşılığı , <strong class="win_amount">₺36,000</strong> kazandı. </span></div>
                                                   <!----><!---->
                                                </div>
                                             </div>
                                             <!---->
                                          </div>
                                       </div>
                                       <div class="marquee_news">
                                          <div class="ticker_content_cover">
                                             <!----><!---->
                                             <div class="news">
                                                <div class="bmm ticker_top_winners">
                                                   <div class="ttw_inner"><span>B************ur ,</span> <img class="ttw_game_img" src="https://v3.pronetstatic.com/common/assets/images/livecasino/300x200/18503.jpg"> <span> <strong class="game">Immersive Roulette</strong> oyununda <strong class="bet_amount">₺1,000</strong>  karşılığı , <strong class="win_amount">₺36,000</strong> kazandı. </span></div>
                                                   <!----><!---->
                                                </div>
                                             </div>
                                             <!---->
                                          </div>
                                       </div>
                                       <div class="marquee_news">
                                          <div class="ticker_content_cover">
                                             <!----><!---->
                                             <div class="news">
                                                <div class="bmm ticker_top_winners">
                                                   <div class="ttw_inner"><span>S***l1 ,</span> <img class="ttw_game_img" src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/17737.jpg"> <span> <strong class="game">Gold Party™</strong> oyununda <strong class="bet_amount">₺225</strong>  karşılığı , <strong class="win_amount">₺70,740</strong> kazandı. </span></div>
                                                   <!----><!---->
                                                </div>
                                             </div>
                                             <!---->
                                          </div>
                                       </div>
                                       <div class="marquee_news">
                                          <div class="ticker_content_cover">
                                             <!----><!---->
                                             <div class="news">
                                                <div class="bmm ticker_top_winners">
                                                   <div class="ttw_inner"><span>k******er ,</span> <img class="ttw_game_img" src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/17853.jpg"> <span> <strong class="game">Gigantoonz</strong> oyununda <strong class="bet_amount">₺60</strong>  karşılığı , <strong class="win_amount">₺48,426</strong> kazandı. </span></div>
                                                   <!----><!---->
                                                </div>
                                             </div>
                                             <!---->
                                          </div>
                                       </div>
                                       <div class="marquee_news">
                                          <div class="ticker_content_cover">
                                             <!----><!---->
                                             <div class="news">
                                                <div class="bmm ticker_top_winners">
                                                   <div class="ttw_inner"><span>r******54 ,</span> <img class="ttw_game_img" src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/11413.jpg"> <span> <strong class="game">Christmas Carol Megaways</strong> oyununda <strong class="bet_amount">₺100</strong>  karşılığı , <strong class="win_amount">₺65,510</strong> kazandı. </span></div>
                                                   <!----><!---->
                                                </div>
                                             </div>
                                             <!---->
                                          </div>
                                       </div>
                                       <div class="marquee_news">
                                          <div class="ticker_content_cover">
                                             <!----><!---->
                                             <div class="news">
                                                <div class="bmm ticker_top_winners">
                                                   <div class="ttw_inner"><span>M********71 ,</span> <img class="ttw_game_img" src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/26163.jpg"> <span> <strong class="game">Gates of Olympus 1000™</strong> oyununda <strong class="bet_amount">₺15,000</strong>  karşılığı , <strong class="win_amount">₺122,962</strong> kazandı. </span></div>
                                                   <!----><!---->
                                                </div>
                                             </div>
                                             <!---->
                                          </div>
                                       </div>
                                       <div class="marquee_news">
                                          <div class="ticker_content_cover">
                                             <!----><!---->
                                             <div class="news">
                                                <div class="bmm ticker_top_winners">
                                                   <div class="ttw_inner"><span>c***at ,</span> <img class="ttw_game_img" src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/6461.jpg"> <span> <strong class="game">40 Burning Hot 6 Reels</strong> oyununda <strong class="bet_amount">₺350</strong>  karşılığı , <strong class="win_amount">₺70,000</strong> kazandı. </span></div>
                                                   <!----><!---->
                                                </div>
                                             </div>
                                             <!---->
                                          </div>
                                       </div>
                                       <div class="marquee_news">
                                          <div class="ticker_content_cover">
                                             <!----><!---->
                                             <div class="news">
                                                <div class="bmm ticker_top_winners">
                                                   <div class="ttw_inner"><span>h*********53 ,</span> <img class="ttw_game_img" src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/10228.jpg"> <span> <strong class="game">The Dog House Megaways</strong> oyununda <strong class="bet_amount">₺2,000</strong>  karşılığı , <strong class="win_amount">₺41,025</strong> kazandı. </span></div>
                                                   <!----><!---->
                                                </div>
                                             </div>
                                             <!---->
                                          </div>
                                       </div>
                                       <div class="marquee_news">
                                          <div class="ticker_content_cover">
                                             <!----><!---->
                                             <div class="news">
                                                <div class="bmm ticker_top_winners">
                                                   <div class="ttw_inner"><span>B************ur ,</span> <img class="ttw_game_img" src="https://v3.pronetstatic.com/common/assets/images/livecasino/300x200/18111.jpg"> <span> <strong class="game">18111</strong> oyununda <strong class="bet_amount">₺1,000</strong>  karşılığı , <strong class="win_amount">₺36,000</strong> kazandı. </span></div>
                                                   <!----><!---->
                                                </div>
                                             </div>
                                             <!---->
                                          </div>
                                       </div>
                                       <div class="marquee_news">
                                          <div class="ticker_content_cover">
                                             <!----><!---->
                                             <div class="news">
                                                <div class="bmm ticker_top_winners">
                                                   <div class="ttw_inner"><span>N********32 ,</span> <img class="ttw_game_img" src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/16624.jpg"> <span> <strong class="game">Bigger Bass Bonanza™</strong> oyununda <strong class="bet_amount">₺384</strong>  karşılığı , <strong class="win_amount">₺148,608</strong> kazandı. </span></div>
                                                   <!----><!---->
                                                </div>
                                             </div>
                                             <!---->
                                          </div>
                                       </div>
                                       <div class="marquee_news">
                                          <div class="ticker_content_cover">
                                             <!----><!---->
                                             <div class="news">
                                                <div class="bmm ticker_top_winners">
                                                   <div class="ttw_inner"><span>u*****56 ,</span> <img class="ttw_game_img" src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/13485.jpg"> <span> <strong class="game">Gates of Olympus™</strong> oyununda <strong class="bet_amount">₺2,000</strong>  karşılığı , <strong class="win_amount">₺100,000</strong> kazandı. </span></div>
                                                   <!----><!---->
                                                </div>
                                             </div>
                                             <!---->
                                          </div>
                                       </div>
                                       <div class="marquee_news">
                                          <div class="ticker_content_cover">
                                             <!----><!---->
                                             <div class="news">
                                                <div class="bmm ticker_top_winners">
                                                   <div class="ttw_inner"><span>K*****35 ,</span> <img class="ttw_game_img" src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/26163.jpg"> <span> <strong class="game">Gates of Olympus 1000™</strong> oyununda <strong class="bet_amount">₺2</strong>  karşılığı , <strong class="win_amount">₺2,000</strong> kazandı. </span></div>
                                                   <!----><!---->
                                                </div>
                                             </div>
                                             <!---->
                                          </div>
                                       </div>
                                       <div class="marquee_news">
                                          <div class="ticker_content_cover">
                                             <!----><!---->
                                             <div class="news">
                                                <div class="bmm ticker_top_winners">
                                                   <div class="ttw_inner"><span>D******IM ,</span> <img class="ttw_game_img" src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/6461.jpg"> <span> <strong class="game">40 Burning Hot 6 Reels</strong> oyununda <strong class="bet_amount">₺300</strong>  karşılığı , <strong class="win_amount">₺100,800</strong> kazandı. </span></div>
                                                   <!----><!---->
                                                </div>
                                             </div>
                                             <!---->
                                          </div>
                                       </div>
                                       <div class="marquee_news">
                                          <div class="ticker_content_cover">
                                             <!----><!---->
                                             <div class="news">
                                                <div class="bmm ticker_top_winners">
                                                   <div class="ttw_inner"><span>j***yl ,</span> <img class="ttw_game_img" src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/13485.jpg"> <span> <strong class="game">Gates of Olympus™</strong> oyununda <strong class="bet_amount">₺937</strong>  karşılığı , <strong class="win_amount">₺271,837</strong> kazandı. </span></div>
                                                   <!----><!---->
                                                </div>
                                             </div>
                                             <!---->
                                          </div>
                                       </div>
                                       <div class="marquee_news">
                                          <div class="ticker_content_cover">
                                             <!----><!---->
                                             <div class="news">
                                                <div class="bmm ticker_top_winners">
                                                   <div class="ttw_inner"><span>h*********53 ,</span> <img class="ttw_game_img" src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/10228.jpg"> <span> <strong class="game">The Dog House Megaways</strong> oyununda <strong class="bet_amount">₺2,000</strong>  karşılığı , <strong class="win_amount">₺185,901</strong> kazandı. </span></div>
                                                   <!----><!---->
                                                </div>
                                             </div>
                                             <!---->
                                          </div>
                                       </div>
                                       <div class="marquee_news">
                                          <div class="ticker_content_cover">
                                             <!----><!---->
                                             <div class="news">
                                                <div class="bmm ticker_top_winners">
                                                   <div class="ttw_inner"><span>savazingo ,</span> <img class="ttw_game_img" src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/8888.jpg"> <span> <strong class="game">Sweet Bonanza</strong> oyununda <strong class="bet_amount">₺5,000</strong>  karşılığı , <strong class="win_amount">₺80,347</strong> kazandı. </span></div>
                                                   <!----><!---->
                                                </div>
                                             </div>
                                             <!---->
                                          </div>
                                       </div>
                                       <div class="marquee_news">
                                          <div class="ticker_content_cover">
                                             <!----><!---->
                                             <div class="news">
                                                <div class="bmm ticker_top_winners">
                                                   <div class="ttw_inner"><span>0******HH ,</span> <img class="ttw_game_img" src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/8888.jpg"> <span> <strong class="game">Sweet Bonanza</strong> oyununda <strong class="bet_amount">₺7,500</strong>  karşılığı , <strong class="win_amount">₺104,568</strong> kazandı. </span></div>
                                                   <!----><!---->
                                                </div>
                                             </div>
                                             <!---->
                                          </div>
                                       </div>
                                       <div class="marquee_news">
                                          <div class="ticker_content_cover">
                                             <!----><!---->
                                             <div class="news">
                                                <div class="bmm ticker_top_winners">
                                                   <div class="ttw_inner"><span>F******00 ,</span> <img class="ttw_game_img" src="https://v3.pronetstatic.com/common/assets/images/livecasino/300x200/18190.jpg"> <span> <strong class="game">Crazy Time</strong> oyununda <strong class="bet_amount">₺3,620</strong>  karşılığı , <strong class="win_amount">₺92,920</strong> kazandı. </span></div>
                                                   <!----><!---->
                                                </div>
                                             </div>
                                             <!---->
                                          </div>
                                       </div>
                                       <div class="marquee_news">
                                          <div class="ticker_content_cover">
                                             <!----><!---->
                                             <div class="news">
                                                <div class="bmm ticker_top_winners">
                                                   <div class="ttw_inner"><span>r*******91 ,</span> <img class="ttw_game_img" src="https://v3.pronetstatic.com/common/assets/images/livecasino/300x200/18503.jpg"> <span> <strong class="game">Immersive Roulette</strong> oyununda <strong class="bet_amount">₺2,000</strong>  karşılığı , <strong class="win_amount">₺19,260</strong> kazandı. </span></div>
                                                   <!----><!---->
                                                </div>
                                             </div>
                                             <!---->
                                          </div>
                                       </div>
                                       <div class="marquee_news">
                                          <div class="ticker_content_cover">
                                             <!----><!---->
                                             <div class="news">
                                                <div class="bmm ticker_top_winners">
                                                   <div class="ttw_inner"><span>p******un ,</span> <img class="ttw_game_img" src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/6461.jpg"> <span> <strong class="game">40 Burning Hot 6 Reels</strong> oyununda <strong class="bet_amount">₺500</strong>  karşılığı , <strong class="win_amount">₺150,000</strong> kazandı. </span></div>
                                                   <!----><!---->
                                                </div>
                                             </div>
                                             <!---->
                                          </div>
                                       </div>
                                       <div class="marquee_news">
                                          <div class="ticker_content_cover">
                                             <!----><!---->
                                             <div class="news">
                                                <div class="bmm ticker_top_winners">
                                                   <div class="ttw_inner"><span>H**n ,</span> <img class="ttw_game_img" src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/21994.jpg"> <span> <strong class="game">Fish Eye</strong> oyununda <strong class="bet_amount">₺27</strong>  karşılığı , <strong class="win_amount">₺21,124</strong> kazandı. </span></div>
                                                   <!----><!---->
                                                </div>
                                             </div>
                                             <!---->
                                          </div>
                                       </div>
                                       <div class="marquee_news">
                                          <div class="ticker_content_cover">
                                             <!----><!---->
                                             <div class="news">
                                                <div class="bmm ticker_top_winners">
                                                   <div class="ttw_inner"><span>B********11 ,</span> <img class="ttw_game_img" src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/25903.jpg"> <span> <strong class="game">Big Bass Christmas Bash™</strong> oyununda <strong class="bet_amount">₺150</strong>  karşılığı , <strong class="win_amount">₺28,920</strong> kazandı. </span></div>
                                                   <!----><!---->
                                                </div>
                                             </div>
                                             <!---->
                                          </div>
                                       </div>
                                       <div class="marquee_news">
                                          <div class="ticker_content_cover">
                                             <!----><!---->
                                             <div class="news">
                                                <div class="bmm ticker_top_winners">
                                                   <div class="ttw_inner"><span>m*********34 ,</span> <img class="ttw_game_img" src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/13485.jpg"> <span> <strong class="game">Gates of Olympus™</strong> oyununda <strong class="bet_amount">₺4,500</strong>  karşılığı , <strong class="win_amount">₺34,699</strong> kazandı. </span></div>
                                                   <!----><!---->
                                                </div>
                                             </div>
                                             <!---->
                                          </div>
                                       </div>
                                       <div class="marquee_news">
                                          <div class="ticker_content_cover">
                                             <!----><!---->
                                             <div class="news">
                                                <div class="bmm ticker_top_winners">
                                                   <div class="ttw_inner"><span>J*****uk ,</span> <img class="ttw_game_img" src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/13485.jpg"> <span> <strong class="game">Gates of Olympus™</strong> oyununda <strong class="bet_amount">₺62</strong>  karşılığı , <strong class="win_amount">₺53,120</strong> kazandı. </span></div>
                                                   <!----><!---->
                                                </div>
                                             </div>
                                             <!---->
                                          </div>
                                       </div>
                                       <div class="marquee_news">
                                          <div class="ticker_content_cover">
                                             <!----><!---->
                                             <div class="news">
                                                <div class="bmm ticker_top_winners">
                                                   <div class="ttw_inner"><span>K***lo ,</span> <img class="ttw_game_img" src="https://v3.pronetstatic.com/common/assets/images/livecasino/300x200/19884.jpg"> <span> <strong class="game">XXXtreme Lightning Roulette</strong> oyununda <strong class="bet_amount">₺1,200</strong>  karşılığı , <strong class="win_amount">₺40,000</strong> kazandı. </span></div>
                                                   <!----><!---->
                                                </div>
                                             </div>
                                             <!---->
                                          </div>
                                       </div>
                                       <div class="marquee_news">
                                          <div class="ticker_content_cover">
                                             <!----><!---->
                                             <div class="news">
                                                <div class="bmm ticker_top_winners">
                                                   <div class="ttw_inner"><span>m**it ,</span> <img class="ttw_game_img" src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/26163.jpg"> <span> <strong class="game">Gates of Olympus 1000™</strong> oyununda <strong class="bet_amount">₺400</strong>  karşılığı , <strong class="win_amount">₺23,181</strong> kazandı. </span></div>
                                                   <!----><!---->
                                                </div>
                                             </div>
                                             <!---->
                                          </div>
                                       </div>
                                       <div class="marquee_news">
                                          <div class="ticker_content_cover">
                                             <!----><!---->
                                             <div class="news">
                                                <div class="bmm ticker_top_winners">
                                                   <div class="ttw_inner"><span>n*******0m ,</span> <img class="ttw_game_img" src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/2732.jpg"> <span> <strong class="game">Dice and Roll</strong> oyununda <strong class="bet_amount">₺50</strong>  karşılığı , <strong class="win_amount">₺24,000</strong> kazandı. </span></div>
                                                   <!----><!---->
                                                </div>
                                             </div>
                                             <!---->
                                          </div>
                                       </div>
                                       <div class="marquee_news">
                                          <div class="ticker_content_cover">
                                             <!----><!---->
                                             <div class="news">
                                                <div class="bmm ticker_top_winners">
                                                   <div class="ttw_inner"><span>b******uc ,</span> <img class="ttw_game_img" src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/10228.jpg"> <span> <strong class="game">The Dog House Megaways</strong> oyununda <strong class="bet_amount">₺1,800</strong>  karşılığı , <strong class="win_amount">₺26,308</strong> kazandı. </span></div>
                                                   <!----><!---->
                                                </div>
                                             </div>
                                             <!---->
                                          </div>
                                       </div>
                                       <div class="marquee_news">
                                          <div class="ticker_content_cover">
                                             <!----><!---->
                                             <div class="news">
                                                <div class="bmm ticker_top_winners">
                                                   <div class="ttw_inner"><span>F******00 ,</span> <img class="ttw_game_img" src="https://v3.pronetstatic.com/common/assets/images/livecasino/300x200/18190.jpg"> <span> <strong class="game">Crazy Time</strong> oyununda <strong class="bet_amount">₺2,500</strong>  karşılığı , <strong class="win_amount">₺180,600</strong> kazandı. </span></div>
                                                   <!----><!---->
                                                </div>
                                             </div>
                                             <!---->
                                          </div>
                                       </div>
                                       <div class="marquee_news">
                                          <div class="ticker_content_cover">
                                             <!----><!---->
                                             <div class="news">
                                                <div class="bmm ticker_top_winners">
                                                   <div class="ttw_inner"><span>ercin10 ,</span> <img class="ttw_game_img" src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/26163.jpg"> <span> <strong class="game">Gates of Olympus 1000™</strong> oyununda <strong class="bet_amount">₺400</strong>  karşılığı , <strong class="win_amount">₺60,000</strong> kazandı. </span></div>
                                                   <!----><!---->
                                                </div>
                                             </div>
                                             <!---->
                                          </div>
                                       </div>
                                       <div class="marquee_news">
                                          <div class="ticker_content_cover">
                                             <!----><!---->
                                             <div class="news">
                                                <div class="bmm ticker_top_winners">
                                                   <div class="ttw_inner"><span>h*********53 ,</span> <img class="ttw_game_img" src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/14895.jpg"> <span> <strong class="game">Panda's Fortune 2</strong> oyununda <strong class="bet_amount">₺250</strong>  karşılığı , <strong class="win_amount">₺106,000</strong> kazandı. </span></div>
                                                   <!----><!---->
                                                </div>
                                             </div>
                                             <!---->
                                          </div>
                                       </div>
                                       <div class="marquee_news">
                                          <div class="ticker_content_cover">
                                             <!----><!---->
                                             <div class="news">
                                                <div class="bmm ticker_top_winners">
                                                   <div class="ttw_inner"><span>e******49 ,</span> <img class="ttw_game_img" src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/20053.jpg"> <span> <strong class="game">Sugar Rush</strong> oyununda <strong class="bet_amount">₺600</strong>  karşılığı , <strong class="win_amount">₺240,180</strong> kazandı. </span></div>
                                                   <!----><!---->
                                                </div>
                                             </div>
                                             <!---->
                                          </div>
                                       </div>
                                       <div class="marquee_news">
                                          <div class="ticker_content_cover">
                                             <!----><!---->
                                             <div class="news">
                                                <div class="bmm ticker_top_winners">
                                                   <div class="ttw_inner"><span>d*******in ,</span> <img class="ttw_game_img" src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/17303.jpg"> <span> <strong class="game">Wanted Dead or a Wild </strong> oyununda <strong class="bet_amount">₺1,600</strong>  karşılığı , <strong class="win_amount">₺100,000</strong> kazandı. </span></div>
                                                   <!----><!---->
                                                </div>
                                             </div>
                                             <!---->
                                          </div>
                                       </div>
                                       <div class="marquee_news">
                                          <div class="ticker_content_cover">
                                             <!----><!---->
                                             <div class="news">
                                                <div class="bmm ticker_top_winners">
                                                   <div class="ttw_inner"><span>h*********53 ,</span> <img class="ttw_game_img" src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/14895.jpg"> <span> <strong class="game">Panda's Fortune 2</strong> oyununda <strong class="bet_amount">₺250</strong>  karşılığı , <strong class="win_amount">₺106,000</strong> kazandı. </span></div>
                                                   <!----><!---->
                                                </div>
                                             </div>
                                             <!---->
                                          </div>
                                       </div>
                                       <div class="marquee_news">
                                          <div class="ticker_content_cover">
                                             <!----><!---->
                                             <div class="news">
                                                <div class="bmm ticker_top_winners">
                                                   <div class="ttw_inner"><span>k******er ,</span> <img class="ttw_game_img" src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/23296.jpg"> <span> <strong class="game">Royal Joker: Hold and Win</strong> oyununda <strong class="bet_amount">₺500</strong>  karşılığı , <strong class="win_amount">₺82,500</strong> kazandı. </span></div>
                                                   <!----><!---->
                                                </div>
                                             </div>
                                             <!---->
                                          </div>
                                       </div>
                                       <div class="marquee_news">
                                          <div class="ticker_content_cover">
                                             <!----><!---->
                                             <div class="news">
                                                <div class="bmm ticker_top_winners">
                                                   <div class="ttw_inner"><span>S***l1 ,</span> <img class="ttw_game_img" src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/17737.jpg"> <span> <strong class="game">Gold Party™</strong> oyununda <strong class="bet_amount">₺2,000</strong>  karşılığı , <strong class="win_amount">₺691,200</strong> kazandı. </span></div>
                                                   <!----><!---->
                                                </div>
                                             </div>
                                             <!---->
                                          </div>
                                       </div>
                                       <div class="marquee_news">
                                          <div class="ticker_content_cover">
                                             <!----><!---->
                                             <div class="news">
                                                <div class="bmm ticker_top_winners">
                                                   <div class="ttw_inner"><span>h*********et ,</span> <img class="ttw_game_img" src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/6461.jpg"> <span> <strong class="game">40 Burning Hot 6 Reels</strong> oyununda <strong class="bet_amount">₺500</strong>  karşılığı , <strong class="win_amount">₺254,000</strong> kazandı. </span></div>
                                                   <!----><!---->
                                                </div>
                                             </div>
                                             <!---->
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </panel-ticker>
                     </div>
                     <!----><!---->
                     <div class="b_i_item">
                        <div class="px-2 clock custom_btns">
                           <i class="el-icon-alarm-clock"></i>
                           <div class="time">08:51</div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div id="bmm bottomslider" gallery="2">
               <div class="bottom_slider_cover">
                  <div class="slider_close_button"><i class="el-icon-close"></i></div>
                  <div class="bottom_slider" style="">
                     <button type="button" class="el-button  slider_buttons slider_left_button el-button--default is-circle">
                        <!----><i class="el-icon-arrow-left"></i><!---->
                     </button>
                     <button type="button" class="el-button  slider_buttons slider_right_button el-button--default is-circle">
                        <!----><i class="el-icon-arrow-right"></i><!---->
                     </button>
                     <div class="bottom_slider_crousel el-carousel el-carousel--horizontal" style="width: 193px;">
                        <div class="el-carousel__container" style="height: 115px;">
                           <!----><!---->
                           <div class="el-carousel__item is-animating is-active is-animating" id="bottom_slide_0" style="transform: translateX(0px) scale(1);">
                              <!----><a href="/tr/games/casino/detail/normal/19560" target="_top" class="bottom_slider_item"><img src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/19560.jpg"></a>
                           </div>
                           <div class="el-carousel__item is-animating" id="bottom_slide_1" style="transform: translateX(193px) scale(1);">
                              <!----><a href="/tr/games/casino/detail/normal/1213" target="_top" class="bottom_slider_item"><img src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/1213.jpg"></a>
                           </div>
                           <div class="el-carousel__item is-animating" id="bottom_slide_2" style="transform: translateX(386px) scale(1);">
                              <!----><a href="/tr/games/casino/detail/normal/16872" target="_top" class="bottom_slider_item"><img src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/16872.jpg"></a>
                           </div>
                           <div class="el-carousel__item is-animating" id="bottom_slide_3" style="transform: translateX(579px) scale(1);">
                              <!----><a href="/tr/games/detail/casino/demo/7787" target="_top" class="bottom_slider_item"><img src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/7787.jpg"></a>
                           </div>
                           <div class="el-carousel__item is-animating" id="bottom_slide_4" style="transform: translateX(772px) scale(1);">
                              <!----><a href="/tr/games/casino/detail/normal/8888" target="_top" class="bottom_slider_item"><img src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/8888.jpg"></a>
                           </div>
                           <div class="el-carousel__item is-animating" id="bottom_slide_5" style="transform: translateX(965px) scale(1);">
                              <!----><a href="/tr/games/casino/detail/normal/4883" target="_top" class="bottom_slider_item"><img src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/4883.jpg"></a>
                           </div>
                           <div class="el-carousel__item is-animating" id="bottom_slide_6" style="transform: translateX(1158px) scale(1);">
                              <!----><a href="/tr/games/casino/detail/normal/13006" target="_top" class="bottom_slider_item"><img src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/13006.jpg"></a>
                           </div>
                           <div class="el-carousel__item is-animating" id="bottom_slide_7" style="transform: translateX(1351px) scale(1);">
                              <!----><a href="/tr/games/casino/detail/normal/5190" target="_top" class="bottom_slider_item"><img src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/5190.jpg"></a>
                           </div>
                           <div class="el-carousel__item is-animating" id="bottom_slide_8" style="transform: translateX(1544px) scale(1);">
                              <!----><a href="/tr/games/casino/detail/normal/15212" target="_top" class="bottom_slider_item"><img src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/15212.jpg"></a>
                           </div>
                           <div class="el-carousel__item is-animating" id="bottom_slide_9" style="transform: translateX(1737px) scale(1);">
                              <!----><a href="/tr/games/casino/detail/normal/10863" target="_top" class="bottom_slider_item"><img src="https://v3.pronetstatic.com/common/assets/images/livecasino/300x200/10862.jpg"></a>
                           </div>
                           <div class="el-carousel__item is-animating" id="bottom_slide_10" style="transform: translateX(1930px) scale(1);">
                              <!----><a href="/tr/games/detail/livecasino/normal/9644/evolution_CrazyTime0000001_TRY" target="_top" class="bottom_slider_item"><img src="https://v3.pronetstatic.com/common/assets/images/livecasino/300x200/9644.jpg"></a>
                           </div>
                           <div class="el-carousel__item is-animating" id="bottom_slide_11" style="transform: translateX(2123px) scale(1);">
                              <!----><a href="/tr/games/casino/detail/normal/9691" target="_top" class="bottom_slider_item"><img src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/9691.jpg"></a>
                           </div>
                           <div class="el-carousel__item is-animating" id="bottom_slide_12" style="transform: translateX(2316px) scale(1);">
                              <!----><a href="/tr/games/casino/detail/normal/2746" target="_top" class="bottom_slider_item"><img src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/2746.jpg"></a>
                           </div>
                           <div class="el-carousel__item is-animating" id="bottom_slide_13" style="transform: translateX(2509px) scale(1);">
                              <!----><a href="/tr/games/detail/livecasino/normal/3272/evolution_mkif4dot6byaziyb_TRY" target="_top" class="bottom_slider_item"><img src="https://v3.pronetstatic.com/common/assets/images/livecasino/300x200/3272.jpg"></a>
                           </div>
                           <div class="el-carousel__item is-animating" id="bottom_slide_14" style="transform: translateX(2702px) scale(1);">
                              <!----><a href="/tr/games/casino/detail/normal/19560" target="_top" class="bottom_slider_item"><img src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/19560.jpg"></a>
                           </div>
                           <div class="el-carousel__item is-animating" id="bottom_slide_15" style="transform: translateX(2895px) scale(1);">
                              <!----><a href="/tr/games/casino/detail/normal/1213" target="_top" class="bottom_slider_item"><img src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/1213.jpg"></a>
                           </div>
                           <div class="el-carousel__item is-animating" id="bottom_slide_16" style="transform: translateX(3088px) scale(1);">
                              <!----><a href="/tr/games/casino/detail/normal/16872" target="_top" class="bottom_slider_item"><img src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/16872.jpg"></a>
                           </div>
                           <div class="el-carousel__item is-animating" id="bottom_slide_17" style="transform: translateX(3281px) scale(1);">
                              <!----><a href="/tr/games/detail/casino/demo/7787" target="_top" class="bottom_slider_item"><img src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/7787.jpg"></a>
                           </div>
                           <div class="el-carousel__item is-animating" id="bottom_slide_18" style="transform: translateX(3474px) scale(1);">
                              <!----><a href="/tr/games/casino/detail/normal/8888" target="_top" class="bottom_slider_item"><img src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/8888.jpg"></a>
                           </div>
                           <div class="el-carousel__item is-animating" id="bottom_slide_19" style="transform: translateX(3667px) scale(1);">
                              <!----><a href="/tr/games/casino/detail/normal/4883" target="_top" class="bottom_slider_item"><img src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/4883.jpg"></a>
                           </div>
                           <div class="el-carousel__item is-animating" id="bottom_slide_20" style="transform: translateX(3860px) scale(1);">
                              <!----><a href="/tr/games/casino/detail/normal/13006" target="_top" class="bottom_slider_item"><img src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/13006.jpg"></a>
                           </div>
                           <div class="el-carousel__item is-animating" id="bottom_slide_21" style="transform: translateX(4053px) scale(1);">
                              <!----><a href="/tr/games/casino/detail/normal/5190" target="_top" class="bottom_slider_item"><img src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/5190.jpg"></a>
                           </div>
                           <div class="el-carousel__item is-animating" id="bottom_slide_22" style="transform: translateX(4246px) scale(1);">
                              <!----><a href="/tr/games/casino/detail/normal/15212" target="_top" class="bottom_slider_item"><img src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/15212.jpg"></a>
                           </div>
                           <div class="el-carousel__item is-animating" id="bottom_slide_23" style="transform: translateX(4439px) scale(1);">
                              <!----><a href="/tr/games/casino/detail/normal/10863" target="_top" class="bottom_slider_item"><img src="https://v3.pronetstatic.com/common/assets/images/livecasino/300x200/10862.jpg"></a>
                           </div>
                           <div class="el-carousel__item is-animating" id="bottom_slide_24" style="transform: translateX(4632px) scale(1);">
                              <!----><a href="/tr/games/detail/livecasino/normal/9644/evolution_CrazyTime0000001_TRY" target="_top" class="bottom_slider_item"><img src="https://v3.pronetstatic.com/common/assets/images/livecasino/300x200/9644.jpg"></a>
                           </div>
                           <div class="el-carousel__item is-animating" id="bottom_slide_25" style="transform: translateX(4825px) scale(1);">
                              <!----><a href="/tr/games/casino/detail/normal/9691" target="_top" class="bottom_slider_item"><img src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/9691.jpg"></a>
                           </div>
                           <div class="el-carousel__item is-animating" id="bottom_slide_26" style="transform: translateX(5018px) scale(1);">
                              <!----><a href="/tr/games/casino/detail/normal/2746" target="_top" class="bottom_slider_item"><img src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/2746.jpg"></a>
                           </div>
                           <div class="el-carousel__item is-animating" id="bottom_slide_27" style="transform: translateX(5211px) scale(1);">
                              <!----><a href="/tr/games/detail/livecasino/normal/3272/evolution_mkif4dot6byaziyb_TRY" target="_top" class="bottom_slider_item"><img src="https://v3.pronetstatic.com/common/assets/images/livecasino/300x200/3272.jpg"></a>
                           </div>
                        </div>
                        <!---->
                     </div>
                  </div>
               </div>
            </div>
            <div class="bmm bm betmaster_helper">
               <div class="helper_button">
                  <div class="helper_btn_content">
                     <div class="help_text hidden-xs-only"> Yardım </div>
                     <div class="help_text hidden-sm-and-up"><i class="fas fa-info"></i></div>
                  </div>
               </div>
               <div class="sidemenu">
                  <div class="header">
                     <div class="title">Yardım</div>
                     <i class="el-icon-close close"></i>
                  </div>
                  <div class="content">
                     <!----><a id="menu_btn1" class="helper_content_btn menu_btn"><i class="pf-icon pfi-spades"></i> VIP CLUB </a>
                     <div class="helper_content_btn live_chat_side_btn"><i class="far fa-comment-alt"></i> Canlı Destek </div>
                     <!----><a class="helper_content_btn shop_btn"><i class="far fa-shopping-cart"></i> Liman Shop </a><a class="helper_content_btn tournament_btn"><i class="fas fa-medal"></i> Turnuvalar </a>
                     <div class="helper_content_btn point_table_btn"><i class="fas fa-list-alt"></i> Puan Tablosu </div>
                     <!---->
                     <div role="tablist" aria-multiselectable="true" class="el-collapse">
                        <!---->
                        <div class="el-collapse-item write_us_info">
                           <div role="tab" aria-controls="el-collapse-content-1704" aria-describedby="el-collapse-content-1704">
                              <div role="button" id="el-collapse-head-1704" tabindex="0" class="el-collapse-item__header"><i class="far fa-envelope"></i> Bize Yazın <i class="el-collapse-item__arrow el-icon-arrow-right"></i></div>
                           </div>
                           <div role="tabpanel" aria-hidden="true" aria-labelledby="el-collapse-head-1704" id="el-collapse-content-1704" class="el-collapse-item__wrap" style="display: none;">
                              <div class="el-collapse-item__content">
                                 <div>Dilediğiniz zaman bize <span class="highlight">destek@limanbet.com</span> adresinden ulaşabilirsiniz.</div>
                              </div>
                           </div>
                        </div>
                        <div class="el-collapse-item call_collapse">
                           <div role="tab" aria-controls="el-collapse-content-1921" aria-describedby="el-collapse-content-1921">
                              <div role="button" id="el-collapse-head-1921" tabindex="0" class="el-collapse-item__header"><i class="el-icon-phone-outline"></i> Sizi Arayalım <i class="el-collapse-item__arrow el-icon-arrow-right"></i></div>
                           </div>
                           <div role="tabpanel" aria-hidden="true" aria-labelledby="el-collapse-head-1921" id="el-collapse-content-1921" class="el-collapse-item__wrap" style="display: none;">
                              <div class="el-collapse-item__content">
                                 <call-service theme="dark" vce-ready="">
                                    <div class="bmm call_me_form dark">
                                       <!---->
                                       <div class="el-select call_me_inputs el-select--small">
                                          <!---->
                                          <div class="el-input el-input--small el-input--prefix el-input--suffix">
                                             <!----><input type="text" readonly="readonly" autocomplete="off" placeholder="Aranmak İstediğiniz Zaman" class="el-input__inner">
                                             <span class="el-input__prefix">
                                                <i class="el-input__icon el-icon-watch"></i><!---->
                                             </span>
                                             <span class="el-input__suffix">
                                                <span class="el-input__suffix-inner">
                                                   <i class="el-select__caret el-input__icon el-icon-arrow-up"></i><!----><!----><!----><!----><!---->
                                                </span>
                                                <!---->
                                             </span>
                                             <!----><!---->
                                          </div>
                                          <div class="el-select-dropdown el-popper" style="display: none;">
                                             <div class="el-scrollbar" style="">
                                                <div class="el-select-dropdown__wrap el-scrollbar__wrap" style="margin-bottom: -5px; margin-right: -5px;">
                                                   <ul class="el-scrollbar__view el-select-dropdown__list">
                                                      <!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!---->
                                                      <li class="el-select-dropdown__item"><span>11:00 - 12:00</span></li>
                                                      <li class="el-select-dropdown__item"><span>12:00 - 13:00</span></li>
                                                      <li class="el-select-dropdown__item"><span>13:00 - 14:00</span></li>
                                                      <li class="el-select-dropdown__item"><span>14:00 - 15:00</span></li>
                                                      <li class="el-select-dropdown__item"><span>15:00 - 16:00</span></li>
                                                      <li class="el-select-dropdown__item"><span>16:00 - 17:00</span></li>
                                                      <li class="el-select-dropdown__item"><span>17:00 - 18:00</span></li>
                                                      <li class="el-select-dropdown__item"><span>18:00 - 19:00</span></li>
                                                      <li class="el-select-dropdown__item"><span>19:00 - 20:00</span></li>
                                                      <!---->
                                                      <li class="el-select-dropdown__item"><span>21:00 - 22:00</span></li>
                                                      <!----><!---->
                                                   </ul>
                                                </div>
                                                <div class="el-scrollbar__bar is-horizontal">
                                                   <div class="el-scrollbar__thumb" style="transform: translateX(0%);"></div>
                                                </div>
                                                <div class="el-scrollbar__bar is-vertical">
                                                   <div class="el-scrollbar__thumb" style="transform: translateY(0%);"></div>
                                                </div>
                                             </div>
                                             <!---->
                                          </div>
                                       </div>
                                       <button disabled="disabled" type="button" class="el-button call_me_btn el-button--default el-button--small is-disabled">
                                          <!----><!----><span>Gönder</span>
                                       </button>
                                    </div>
                                 </call-service>
                              </div>
                           </div>
                        </div>
                        <!---->
                        <div class="el-collapse-item app_collapse">
                           <div role="tab" aria-controls="el-collapse-content-9218" aria-describedby="el-collapse-content-9218">
                              <div role="button" id="el-collapse-head-9218" tabindex="0" class="el-collapse-item__header"><i class="fas fa-th-large"></i> Kolay Erişim <i class="el-collapse-item__arrow el-icon-arrow-right"></i></div>
                           </div>
                           <div role="tabpanel" aria-hidden="true" aria-labelledby="el-collapse-head-9218" id="el-collapse-content-9218" class="el-collapse-item__wrap" style="display: none;">
                              <div class="el-collapse-item__content">
                                 <div class="app_info"> Adres değişikliklerinden etkilenmemek için kolay erişim uygulamalarımızı indirebilirsiniz. </div>
                                 <a href="https://limanbet.app" target="_blank" class="app_btns"><i class="fab fa-apple"></i> IOS Uygulaması</a>
                                 <a href="https://limanbet.app" target="_blank" class="app_btns">
                                    <div class="app_btn_inner"><i class="fab fa-android"></i> Android Uygulaması</div>
                                    <!---->
                                 </a>
                                 <!---->
                              </div>
                           </div>
                        </div>
                     </div>
                     <a class="helper_content_btn faq_btn"><i class="fas fa-info-circle"></i> Genel Sorular </a>
                     <social-media theme="dark" vce-ready="">
                        <div id="bm_socialmedia" class="bmm social_media_btns dark big_social">
                           <!----><!----><!----><!----><!----><!----><!----><!---->
                        </div>
                     </social-media>
                  </div>
               </div>
            </div>
            <div class="bmm panel_drawer scorematic_drawer">
               <div class="sidemenu ">
                  <div class="header">
                     <div class="title">Scorematik</div>
                     <i class="el-icon-close close"></i>
                  </div>
                  <div class="drawer_content"></div>
                  <div class="drawer_loader"><i class="fas fa-circle-notch fa-spin"></i></div>
               </div>
            </div>
            <div class="bmm panel_drawer pointtable_drawer">
               <div class="sidemenu ">
                  <div class="header">
                     <div class="title">Puan Tablosu</div>
                     <i class="el-icon-close close"></i>
                  </div>
                  <div class="drawer_content"></div>
                  <div class="drawer_loader"><i class="fas fa-circle-notch fa-spin"></i></div>
               </div>
            </div>
            <div class="bmm panel_drawer populargames_drawer">
               <div class="sidemenu ">
                  <div class="header">
                     <div class="title"></div>
                     <i class="el-icon-close close"></i>
                  </div>
                  <div class="drawer_content">
                     <div class="bmm popular_games">
                        <div class="popular_games_cover"></div>
                     </div>
                  </div>
                  <!---->
               </div>
            </div>
            <div class="bmm panel_drawer top_winners_drawer">
               <div class="sidemenu ">
                  <div class="header">
                     <div class="title">En Çok Kazananlar</div>
                     <i class="el-icon-close close"></i>
                  </div>
                  <div class="drawer_content">
                     <top-winners type="casino" mobile="true" drawer="true" vce-ready="">
                        <div class="bmm top_winners_contanier tabbed_winners" style="max-width: 100%;">
                           <div class="topn_winners_title" style="display: none;">
                              <span class="mark-fapk pf-icon pfi-cherry"></span><!----> En Çok Kazananlar 
                           </div>
                           <div class="top_winners_tabs"><button class="is_active">Günlük</button><button class="">Haftalık</button><button class="">Aylık</button></div>
                           <div id="top_winners" class="top_winners_cover">
                              <section class="top_winners_section is_active">
                                 <div class="top_winners_title"> Günlük </div>
                                 <div class="top_winners_table" style="min-height: 300px !important;">
                                    <div>
                                       <div class="top_winners_table_row" style="min-height: 55px !important;">
                                          <a class="game_image">
                                             <div class="el-image">
                                                <img src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/17737.jpg" class="el-image__inner"><!---->
                                             </div>
                                          </a>
                                          <div class="top_winners_games_column_user"><span>tak****</span><strong class="game_name">Gold Party™</strong></div>
                                          <!---->
                                          <div class="top_winners_games_column_profit">
                                             <strong>Kazanç</strong><span>₺192,200</span><!---->
                                          </div>
                                       </div>
                                       <div class="top_winners_table_row" style="min-height: 55px !important;">
                                          <a class="game_image">
                                             <div class="el-image">
                                                <img src="https://v3.pronetstatic.com/common/assets/images/livecasino/300x200/18190.jpg" class="el-image__inner"><!---->
                                             </div>
                                          </a>
                                          <div class="top_winners_games_column_user"><span>Far****</span><strong class="game_name">Crazy Time</strong></div>
                                          <!---->
                                          <div class="top_winners_games_column_profit">
                                             <strong>Kazanç</strong><span>₺178,100</span><!---->
                                          </div>
                                       </div>
                                       <div class="top_winners_table_row" style="min-height: 55px !important;">
                                          <a class="game_image">
                                             <div class="el-image">
                                                <img src="https://v3.pronetstatic.com/common/assets/images/livecasino/300x200/18190.jpg" class="el-image__inner"><!---->
                                             </div>
                                          </a>
                                          <div class="top_winners_games_column_user"><span>Far****</span><strong class="game_name">Crazy Time</strong></div>
                                          <!---->
                                          <div class="top_winners_games_column_profit">
                                             <strong>Kazanç</strong><span>₺97,900</span><!---->
                                          </div>
                                       </div>
                                       <div class="top_winners_table_row" style="min-height: 55px !important;">
                                          <a class="game_image">
                                             <div class="el-image">
                                                <img src="https://v3.pronetstatic.com/common/assets/images/livecasino/300x200/18190.jpg" class="el-image__inner"><!---->
                                             </div>
                                          </a>
                                          <div class="top_winners_games_column_user"><span>Far****</span><strong class="game_name">Crazy Time</strong></div>
                                          <!---->
                                          <div class="top_winners_games_column_profit">
                                             <strong>Kazanç</strong><span>₺70,876</span><!---->
                                          </div>
                                       </div>
                                       <div class="top_winners_table_row" style="min-height: 55px !important;">
                                          <a class="game_image">
                                             <div class="el-image">
                                                <img src="https://v3.pronetstatic.com/common/assets/images/livecasino/300x200/18237.jpg" class="el-image__inner"><!---->
                                             </div>
                                          </a>
                                          <div class="top_winners_games_column_user"><span>ali****</span><strong class="game_name">Exclusive Limits Blackjack VIP</strong></div>
                                          <!---->
                                          <div class="top_winners_games_column_profit">
                                             <strong>Kazanç</strong><span>₺60,000</span><!---->
                                          </div>
                                       </div>
                                       <div class="top_winners_table_row" style="min-height: 55px !important;">
                                          <a class="game_image">
                                             <div class="el-image">
                                                <img src="https://v3.pronetstatic.com/common/assets/images/livecasino/300x200/24451.jpg" class="el-image__inner"><!---->
                                             </div>
                                          </a>
                                          <div class="top_winners_games_column_user"><span>ali****</span><strong class="game_name">Blackjack B</strong></div>
                                          <!---->
                                          <div class="top_winners_games_column_profit">
                                             <strong>Kazanç</strong><span>₺60,000</span><!---->
                                          </div>
                                       </div>
                                       <div class="top_winners_table_row" style="min-height: 55px !important;">
                                          <a class="game_image">
                                             <div class="el-image">
                                                <img src="https://v3.pronetstatic.com/common/assets/images/livecasino/300x200/24451.jpg" class="el-image__inner"><!---->
                                             </div>
                                          </a>
                                          <div class="top_winners_games_column_user"><span>ali****</span><strong class="game_name">Blackjack B</strong></div>
                                          <!---->
                                          <div class="top_winners_games_column_profit">
                                             <strong>Kazanç</strong><span>₺60,000</span><!---->
                                          </div>
                                       </div>
                                    </div>
                                    <!---->
                                 </div>
                              </section>
                              <section class="top_winners_section">
                                 <div class="top_winners_title"> Haftalık </div>
                                 <div class="top_winners_table" style="min-height: 300px !important;">
                                    <div>
                                       <div class="top_winners_table_row" style="min-height: 55px !important;">
                                          <a class="game_image">
                                             <div class="el-image">
                                                <img src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/20053.jpg" class="el-image__inner"><!---->
                                             </div>
                                          </a>
                                          <div class="top_winners_games_column_user"><span>Hus****</span><strong class="game_name">Sugar Rush</strong></div>
                                          <!---->
                                          <div class="top_winners_games_column_profit">
                                             <strong>Kazanç</strong><span>₺294,000</span><!---->
                                          </div>
                                       </div>
                                       <div class="top_winners_table_row" style="min-height: 55px !important;">
                                          <a class="game_image">
                                             <div class="el-image">
                                                <img src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/20053.jpg" class="el-image__inner"><!---->
                                             </div>
                                          </a>
                                          <div class="top_winners_games_column_user"><span>sez******</span><strong class="game_name">Sugar Rush</strong></div>
                                          <!---->
                                          <div class="top_winners_games_column_profit">
                                             <strong>Kazanç</strong><span>₺274,833</span><!---->
                                          </div>
                                       </div>
                                       <div class="top_winners_table_row" style="min-height: 55px !important;">
                                          <a class="game_image">
                                             <div class="el-image">
                                                <img src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/17737.jpg" class="el-image__inner"><!---->
                                             </div>
                                          </a>
                                          <div class="top_winners_games_column_user"><span>tak****</span><strong class="game_name">Gold Party™</strong></div>
                                          <!---->
                                          <div class="top_winners_games_column_profit">
                                             <strong>Kazanç</strong><span>₺272,000</span><!---->
                                          </div>
                                       </div>
                                       <div class="top_winners_table_row" style="min-height: 55px !important;">
                                          <a class="game_image">
                                             <div class="el-image">
                                                <img src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/13485.jpg" class="el-image__inner"><!---->
                                             </div>
                                          </a>
                                          <div class="top_winners_games_column_user"><span>jsn****</span><strong class="game_name">Gates of Olympus™</strong></div>
                                          <!---->
                                          <div class="top_winners_games_column_profit">
                                             <strong>Kazanç</strong><span>₺270,900</span><!---->
                                          </div>
                                       </div>
                                       <div class="top_winners_table_row" style="min-height: 55px !important;">
                                          <a class="game_image">
                                             <div class="el-image">
                                                <img src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/17737.jpg" class="el-image__inner"><!---->
                                             </div>
                                          </a>
                                          <div class="top_winners_games_column_user"><span>tak****</span><strong class="game_name">Gold Party™</strong></div>
                                          <!---->
                                          <div class="top_winners_games_column_profit">
                                             <strong>Kazanç</strong><span>₺249,000</span><!---->
                                          </div>
                                       </div>
                                       <div class="top_winners_table_row" style="min-height: 55px !important;">
                                          <a class="game_image">
                                             <div class="el-image">
                                                <img src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/13997.jpg" class="el-image__inner"><!---->
                                             </div>
                                          </a>
                                          <div class="top_winners_games_column_user"><span>sev****</span><strong class="game_name">Power of Thor Megaways™</strong></div>
                                          <!---->
                                          <div class="top_winners_games_column_profit">
                                             <strong>Kazanç</strong><span>₺245,242</span><!---->
                                          </div>
                                       </div>
                                       <div class="top_winners_table_row" style="min-height: 55px !important;">
                                          <a class="game_image">
                                             <div class="el-image">
                                                <img src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/25414.jpg" class="el-image__inner"><!---->
                                             </div>
                                          </a>
                                          <div class="top_winners_games_column_user"><span>gal******</span><strong class="game_name">Starlight Princess 1000™</strong></div>
                                          <!---->
                                          <div class="top_winners_games_column_profit">
                                             <strong>Kazanç</strong><span>₺208,118</span><!---->
                                          </div>
                                       </div>
                                    </div>
                                    <!---->
                                 </div>
                              </section>
                              <section class="top_winners_section">
                                 <div class="top_winners_title"> Aylık </div>
                                 <div class="top_winners_table" style="min-height: 300px !important;">
                                    <div>
                                       <div class="top_winners_table_row" style="min-height: 55px !important;">
                                          <a class="game_image">
                                             <div class="el-image">
                                                <img src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/22541.jpg" class="el-image__inner"><!---->
                                             </div>
                                          </a>
                                          <div class="top_winners_games_column_user"><span>Ser****</span><strong class="game_name">Wild Wild Riches Megaways</strong></div>
                                          <!---->
                                          <div class="top_winners_games_column_profit">
                                             <strong>Kazanç</strong><span>₺1,196,250</span><!---->
                                          </div>
                                       </div>
                                       <div class="top_winners_table_row" style="min-height: 55px !important;">
                                          <a class="game_image">
                                             <div class="el-image">
                                                <img src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/20053.jpg" class="el-image__inner"><!---->
                                             </div>
                                          </a>
                                          <div class="top_winners_games_column_user"><span>erc****</span><strong class="game_name">Sugar Rush</strong></div>
                                          <!---->
                                          <div class="top_winners_games_column_profit">
                                             <strong>Kazanç</strong><span>₺1,068,200</span><!---->
                                          </div>
                                       </div>
                                       <div class="top_winners_table_row" style="min-height: 55px !important;">
                                          <a class="game_image">
                                             <div class="el-image">
                                                <img src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/17737.jpg" class="el-image__inner"><!---->
                                             </div>
                                          </a>
                                          <div class="top_winners_games_column_user"><span>tak****</span><strong class="game_name">Gold Party™</strong></div>
                                          <!---->
                                          <div class="top_winners_games_column_profit">
                                             <strong>Kazanç</strong><span>₺791,600</span><!---->
                                          </div>
                                       </div>
                                       <div class="top_winners_table_row" style="min-height: 55px !important;">
                                          <a class="game_image">
                                             <div class="el-image">
                                                <img src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/2740.jpg" class="el-image__inner"><!---->
                                             </div>
                                          </a>
                                          <div class="top_winners_games_column_user"><span>Nig****</span><strong class="game_name">Extra Stars</strong></div>
                                          <!---->
                                          <div class="top_winners_games_column_profit">
                                             <strong>Kazanç</strong><span>₺695,000</span><!---->
                                          </div>
                                       </div>
                                       <div class="top_winners_table_row" style="min-height: 55px !important;">
                                          <a class="game_image">
                                             <div class="el-image">
                                                <img src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/19400.jpg" class="el-image__inner"><!---->
                                             </div>
                                          </a>
                                          <div class="top_winners_games_column_user"><span>ark****</span><strong class="game_name">Barn Festival</strong></div>
                                          <!---->
                                          <div class="top_winners_games_column_profit">
                                             <strong>Kazanç</strong><span>₺646,000</span><!---->
                                          </div>
                                       </div>
                                       <div class="top_winners_table_row" style="min-height: 55px !important;">
                                          <a class="game_image">
                                             <div class="el-image">
                                                <img src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/6461.jpg" class="el-image__inner"><!---->
                                             </div>
                                          </a>
                                          <div class="top_winners_games_column_user"><span>hay****</span><strong class="game_name">40 Burning Hot 6 Reels</strong></div>
                                          <!---->
                                          <div class="top_winners_games_column_profit">
                                             <strong>Kazanç</strong><span>₺625,750</span><!---->
                                          </div>
                                       </div>
                                       <div class="top_winners_table_row" style="min-height: 55px !important;">
                                          <a class="game_image">
                                             <div class="el-image">
                                                <img src="https://v3.pronetstatic.com/common/assets/images/casino/300x200/13485.jpg" class="el-image__inner"><!---->
                                             </div>
                                          </a>
                                          <div class="top_winners_games_column_user"><span>ark****</span><strong class="game_name">Gates of Olympus™</strong></div>
                                          <!---->
                                          <div class="top_winners_games_column_profit">
                                             <strong>Kazanç</strong><span>₺620,625</span><!---->
                                          </div>
                                       </div>
                                    </div>
                                    <!---->
                                 </div>
                              </section>
                           </div>
                        </div>
                     </top-winners>
                  </div>
                  <!---->
               </div>
            </div>
            <div class="bmm panel_drawer custom_menu_drawer">
               <div class="sidemenu ">
                  <div class="header">
                     <div class="title">En Çok Kazananlar</div>
                     <i class="el-icon-close close"></i>
                  </div>
                  <div class="drawer_content"></div>
                  <!---->
               </div>
            </div>
            <div class="bmm bm betmaster_tournament_table">
               <div class="tournament_button"><i class="fas fa-medal"></i></div>
               <div class="sidemenu">
                  <div class="header">
                     <div class="title">Turnuvalar</div>
                     <i class="el-icon-close close"></i>
                  </div>
                  <!---->
               </div>
            </div>
            <div class="el-dialog__wrapper bt_modal" style="display: none;">
               <div role="dialog" aria-modal="true" aria-label="dialog" class="el-dialog is-fullscreen" style="">
                  <div class="el-dialog__header"><span class="el-dialog__title"></span><button type="button" aria-label="Close" class="el-dialog__headerbtn"><i class="el-dialog__close el-icon el-icon-close"></i></button></div>
                  <!----><!---->
               </div>
            </div>
            <!---->
            <div class="bmm betmaster_post_page" style="display: none;">
               <div class="el-icon-close post_close_btn"></div>
               <!----><!---->
            </div>
            <div class="bmm bm">
               <!---->
            </div>
            <!----><!---->
            <div class="el-dialog__wrapper participate_modal" style="display: none;">
               <div role="dialog" aria-modal="true" aria-label="Katıl" class="el-dialog" style="margin-top: 15vh;">
                  <div class="el-dialog__header"><span class="el-dialog__title">Katıl</span><button type="button" aria-label="Close" class="el-dialog__headerbtn"><i class="el-dialog__close el-icon el-icon-close"></i></button></div>
                  <!----><!---->
               </div>
            </div>
         </div>
      </bet-master>
      <div id="chat-widget-container" style="opacity: 1; visibility: visible; z-index: 2147483639; position: fixed; bottom: 0px; width: 84px; height: 84px; max-width: 100%; max-height: calc(100% + 0px); min-height: 0px; min-width: 0px; background-color: transparent; border: 0px; overflow: hidden; right: 0px; transition: none 0s ease 0s !important;"><iframe allow="clipboard-read; clipboard-write; autoplay; microphone *; camera *; display-capture *; picture-in-picture *; fullscreen *;" src="https://secure.livechatinc.com/customer/action/open_chat?license_id=8806331&amp;group=0&amp;embedded=1&amp;widget_version=3&amp;unique_groups=0" allowtransparency="true" id="chat-widget" name="chat-widget" title="LiveChat chat widget" scrolling="no" style="width: 100%; height: 100%; min-height: 0px; min-width: 0px; margin: 0px; padding: 0px; background-image: none; background-position: 0% 0%; background-size: initial; background-attachment: scroll; background-origin: initial; background-clip: initial; background-color: rgba(0, 0, 0, 0); border-width: 0px; float: none; color-scheme: normal; position: absolute; inset: 0px; transition: none 0s ease 0s !important; display: none; visibility: hidden;"></iframe><iframe allowtransparency="true" id="chat-widget-minimized" name="chat-widget-minimized" title="LiveChat chat widget" scrolling="no" style="width: 100%; height: 100%; min-height: 0px; min-width: 0px; margin: 0px; padding: 0px; background-image: none; background-position: 0% 0%; background-size: initial; background-attachment: scroll; background-origin: initial; background-clip: initial; background-color: rgba(0, 0, 0, 0); border-width: 0px; float: none; color-scheme: normal; display: block;"></iframe></div>
   </body>
</html>
<?php }?>
