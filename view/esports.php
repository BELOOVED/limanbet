<?php
if ($detect->isMobile()) {?>

<?php }else{?>
    <main onclick="loginorp1ay()">
   <router-outlet></router-outlet>
   <app-placebet class="ng-star-inserted">
      <div class="clear static" id="">
         <!----><!---->
         <div id="">
            <router-outlet></router-outlet>
            <app-ultraplay-esports class="ng-star-inserted">
               <!----><!----><iframe frameborder="0" onload="resizeIframe(this)" name="ultraplayFrame" id="ultraplayFrame" allowfullscreen="true" class="iframeDefaultSize ng-star-inserted" src="https://ultraplay.limanbet569.com/ui/externallogin?loginToken=&amp;deviceType=Desktop&amp;lang=tr-TR&amp;oddformat=decimal&amp;viewFormat=european" height="768px" width="100%"></iframe><!----><!---->
            </app-ultraplay-esports>
            <!---->
         </div>
         <!---->
      </div>
   </app-placebet>
   <!---->
</main>
<?php }?>