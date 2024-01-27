<?php
if ($detect->isMobile()) {?>
<div>
   <div id="reactMobile">
      <sport-mobile></sport-mobile>
   </div>
</div>
<script type="text/javascript">
    function SportBonusBalanceChange(bo) {
        var sportBonusPanel = document.getElementById('SportBonusPanel');
        var sba = document.getElementById('SportBonusAmount');
        if ('False' != 'False') {
            if (parseFloat(bo.BonusBalance) >= 0) {
                sba.innerHTML = bo.BonusBalance;
                sportBonusPanel.classList.remove('dis_none');
            } else {
                sba.innerHTML = '';
                sportBonusPanel.classList.add('dis_none');
            }
            if (window.TournamentBalancePanel) {
                if (parseFloat(bo.TournamentBalance) >= 0) {
                    window.TournamentBalanceAmount.innerHTML = bo.TournamentBalance;
                    window.TournamentBalancePanel.classList.remove('dis_none');
                } else {
                    window.TournamentBalanceAmount.innerHTML = '';
                    window.TournamentBalancePanel.classList.add('dis_none');
                }
            }
            if (window.CashbackBalancePanel) {
                if (parseFloat(bo.CashBackBalance) >= 0) {
                    window.CashbackBalanceAmount.innerHTML = bo.CashBackBalance;
                    window.CashbackBalancePanel.classList.remove('dis_none');
                } else {
                    window.CashbackBalanceAmount.innerHTML = '';
                    window.CashbackBalancePanel.classList.add('dis_none');
                }
            }

        }
    }
</script>
<script type="text/javascript">
    document.addEventListener('DOMContentLoaded', () => {
        var params = {
            /* runtime */
            containerId: 'reactMobile',
            token: "-",
            rest: true,
            log: false,
            defaultLanguage: 'tr',
            liveScore: '',
            login: LoginTrigger,
            registration: 'RegisterTrigger',
            onBalanceChange: SportBonusBalanceChange,
            userId: '0',
            /* servers */
            serverWs: 'wss://mobilews.sportdigi.com/',  // prod web socket link
            server: "//sport.<?=$main['sitelink']?>.com/",                      // ajax, sources, etc.
            parent:['<?=$main['sitelink']?>.com'],
            userId: '',
            zIndex: {
                opened: 16000004,
                fullOpened: 16000004
            }
        };

        switch ('1093') {
            case '1170':
                params.bottomNavBar = true;
                break;
        };
        Bootstrapper.boot(params, { name: 'Mobile' }).then(spMobEvents);

        function spMobEvents(mobApp) {
            if (typeof handleSpAppEventDispatch == 'function') {
                mobApp.addEventListener('sportAppEventDispatch', ({ data }) => handleSpAppEventDispatch(data, true))
            }
        }

    });
    </script>
<?php }else {?>
   <div class="content-wrapper">
   <main class="main-wrapper">
      <script>
         if ((sessionStorage.getItem("SportView") == undefined || sessionStorage.getItem("SportView") == '') && (1093 == 1102
             || 1093 == 1126 || 1093 == 1166 || 1093 == 1051)) {
             sportsBookView = 'africanView';
         } else if (sessionStorage.getItem("SportView") == "africanView") {
              sportsBookView = 'africanView';
         }  else {
             sportsBookView = 'europeanView';
         }
      </script>
      <script src="//sport.<?=$main['sitelink']?>.com/js/Partner/IntegrationLoader.js?v=3"></script>
      <script type="text/javascript">
         $(document).ready(reloadTgSport);
         function reloadTgSport() {
             var _tg = _tg || [];
             _tg.push(['server', '//sport.<?=$main['sitelink']?>.com/']);
             _tg.push(['platformPartner', '1093']);
             _tg.push(['sportPartner', '']);
             _tg.push(['token', '-']);
             _tg.push(['language', 'tr']);
             _tg.push(['login', 'LoginTrigger']);
             _tg.push(['registration', 'RegisterTrigger']);
             _tg.push(['withdraw', 'WithdrawalTrigger']);
             _tg.push(['currentPage', 'Home']);
             _tg.push(['device', 'd']);
             _tg.push(['parent', ['<?=$main['sitelink']?>.com']]);
             _tg.push(['userId', '']);
             if ('1093' == '1159') {
                 _tg.push(['fixedHeight', false]);
             } else {
                 _tg.push(['fixedHeight', true]);
             }
         
             switch ('1093') {
                 case '1052':
                 case '1159':
                 case '1207':
                     _tg.push(['oddsFormat', '2']);
                     break;
                 case '2':
                     if (typeof spOnNavigateCallback == 'function') {
                         _tg.push(['onNavigateCallback', spOnNavigateCallback]);
                     }
                     if (typeof insFoundsCheck == 'function') {
                         _tg.push(['deposit', insFoundsCheck]);
                     }
                     break;
                 case '1171':
                 case '1102':
                 case '1085':
                 case '1137':
                 case '1136':
                 case '1173':
                 case '1141':
                 case '1126':
                 case '1179':
                 case '1184':
                 case '1187':
                 case '1189':
                 case '1193':
                 case '1190':
                 case '1188':
                 case '1191':
                 case '1051':
                     _tg.push(['sportsBookView', sportsBookView]);
                     break;
                 default:
                     break;
             }
         
             SportFrame.frame(_tg);
         }
         
      </script>
      <script type="text/javascript" src="https://sport.<?=$main['sitelink']?>.com/Scripts/build/request.js?v45"></script>
      <div>
         <div id="game-layout" class="clearfix normal display_flex" style="border: 0; width: 100% !important;">
            <div id="logdialog"></div>
            <div id="col-center" style="width: 100% !important">
               <div id="sport_div_iframe"><iframe frameborder="0" allowfullscreen="" allow="autoplay; clipboard-write" scrolling="no" width="1" height="732" src="//sport.<?=$main['sitelink']?>.com/SportsBook/Home?token=-&amp;d=d&amp;l=tr&amp;tz=&amp;of=0&amp;ofl=&amp;parent=<?=$main['sitelink']?>.com&amp;customCssUrl=&amp;sportsBookView=&amp;clearSiteStyles=false&amp;resetAllStyles=false&amp;theme=&amp;projectTheme=" style="min-width: 100%; min-height: 732px; height: 732px; display: block;"></iframe></div>
            </div>
         </div>
      </div>
   </main>
</div>
<?php }?>