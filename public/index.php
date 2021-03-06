<?php
/**
 * index
 *
 * public/index.php
 */

require_once __DIR__ . '/../include/common/controller.php';

showHeader(getCD(__DIR__));

echo <<<HTML
<main class="ly_top">

<!-- [MV] -->
<section id="MV">
  <div class="bl_inner bl_inner__sm">
    <div class="un_topMV ly_top_topMV">
      <div class="un_topMV_imgMain">
        <img class="js_tada_repeat" src="{$GLOBALS['contVar']['url']['root']}assets/images/MV-faces.svg" alt="">
      </div>
      <!-- /.un_topMV_imgMain -->
      <div class="un_topMV_imgSub1">
        <img class="js_shakeX_repeat" src="{$GLOBALS['contVar']['url']['root']}assets/images/MV-fukidashi1.svg" alt="">
        <p class="un_topMV_comment">!!</p>
      </div>
      <!-- /.un_topMV_imgSub1 -->
      <div class="un_topMV_imgSub2">
        <img class="js_shakeX_repeat" src="{$GLOBALS['contVar']['url']['root']}assets/images/MV-fukidashi2.svg" alt="">
        <p class="un_topMV_comment">welcome</p>
      </div>
      <!-- /.un_topMV_imgSub2 -->
    </div>
    <!-- /.un_topMV -->
  </div>
  <!-- /.bl_inner -->
</section>
<!-- /.[MV] -->

<!-- [website] -->
<section id="website">
  <div class="bl_lineTxt ly_top_indexTtl">
    <div class="bl_lineTxt_inner">
      <h2 class="bl_lineTxt_cont">
        <span class="bl_lineTxt_txt">WEBSITE</span>
      </h2>
    </div>
    <!-- /.bl_lineTxt_inner -->
  </div>
  <!-- /.bl_lineTxt -->

  <div class="bl_inner">
    <div class="ly_top_cardUnit js_bounceInRight">
HTML;

showCard('website-pf');
showCard('website-honodc');
showCard('website-emploszoo');

echo <<<HTML
    </div>
    <!-- /.ly_top_cardUnit -->
  </div>
  <!-- /.bl_inner -->
</section>
<!-- /.[website] -->

<!-- [system] -->
<section id="system">
  <div class="bl_lineTxt ly_top_indexTtl">
    <div class="bl_lineTxt_inner">
      <h2 class="bl_lineTxt_cont">
        <span class="bl_lineTxt_txt">SYSTEM</span>
      </h2>
    </div>
    <!-- /.bl_lineTxt_inner -->
  </div>
  <!-- /.bl_lineTxt -->

  <div class="bl_inner">
    <div class="ly_top_cardUnit js_bounceInRight">
HTML;

showCard('system-reservedc');

echo <<<HTML
    </div>
    <!-- /.ly_top_cardUnit -->
  </div>
  <!-- /.bl_inner -->
</section>
<!-- /.[system] -->

<!-- [other] -->
<section id="other">
  <div class="bl_lineTxt ly_top_indexTtl">
    <div class="bl_lineTxt_inner">
      <h2 class="bl_lineTxt_cont">
        <span class="bl_lineTxt_txt">OTHER</span>
      </h2>
    </div>
    <!-- /.bl_lineTxt_inner -->
  </div>
  <!-- /.bl_lineTxt -->

  <div class="bl_inner">
    <div class="ly_top_cardUnit js_bounceInRight">
HTML;

showCard('other-emplosbanner');
showCard('other-drawing');

echo <<<HTML
    </div>
    <!-- /.ly_top_cardUnit -->
  </div>
  <!-- /.bl_inner -->
</section>
<!-- /.[other] -->

<!-- [about] -->
<section id="about">
  <div class="bl_lineTxt ly_top_indexTtl">
    <div class="bl_lineTxt_inner">
      <h2 class="bl_lineTxt_cont">
        <span class="bl_lineTxt_txt">ABOUT</span>
      </h2>
    </div>
    <!-- /.bl_lineTxt_inner -->
  </div>
  <!-- /.bl_lineTxt -->

  <div class="bl_inner bl_inner__sm">
    <div class="un_topAbout">
      <div class="un_topAbout_contImg">
        <img class="un_topAbout_img" src="{$GLOBALS['contVar']['url']['root']}assets/images/about-myface.svg" alt="">
      </div>
      <!-- /.un_topAbout_contImg -->
      <div class="bl_txtBoxUnit">
        <div class="bl_txtBox">
          <div class="bl_txtBox_contHeading">
            <h3 class="el_heading bl_txtBox_heading">PLOFILE</h3>
          </div>
          <!-- /.bl_txtBox_contHeading-->
          <div class="bl_txtBox_contDesc">
            <div class="el_desc bl_txtBox_desc">
              <p><ruby><rb>?????? <rt>????????? <rb>??????<rt>??????</ruby>
              <p>1989.1.22 age.32
              <p>?????????????????????????????????????????????????????????(??????????????????????????????)
            </div>
            <!-- /.el_desc -->
            <div class="el_desc bl_txtBox_desc">
              <p>VBA????????????????????????????????????3?????????????????????<br>
                2???????????????????????????????????????????????????????????????WEB?????????????????????????????????????????????<br>
                WEB????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????<br>
            </div>
            <!-- /.el_desc -->
          </div>
          <!-- /.bl_txtBox__contDesc -->
        </div>
        <!-- /.bl_txtBox -->

        <div class="bl_txtBox">
          <div class="bl_txtBox_contHeading">
            <h3 class="el_heading bl_txtBox_heading">SKILL</h3>
          </div>
          <!-- /.bl_txtBox_contHeading -->
          <div class="bl_txtBox_contDesc">
            <div class="el_desc bl_txtBox_desc">
              <p>HTML/CSS/Sass/PHP/JavaScript/WordPress
              <p>Illustrator/Photoshop
            </div>
            <!-- /.el_desc --><div class="el_desc bl_txtBox_desc">
              <p>?????????????????????
              <p>PHP7?????????????????????
              <p>HTML5????????????????????????????????????????????????1(HTML5???CSS3)
              <p>HTML5????????????????????????????????????????????????2(JavaScript)
            </div>
            <!-- /.el_desc -->
          </div>
          <!-- /.bl_txtBox_contDesc -->
        </div>
        <!-- /.bl_txtBox -->

        <div class="bl_txtBox">
          <div class="bl_txtBox_contHeading">
            <h3 class="el_heading bl_txtBox_heading">INFO</h3>
          </div>
          <!-- /.bl_txtBox_contHeading -->
          <div class="bl_txtBox_contDesc">
            <div class="el_desc bl_txtBox_desc">
              <p><i class="fas fa-desktop el_icon"></i>https://murata2021.website/
              <p><i class="fas fa-envelope el_icon"></i>misa_murata@outlook.com
              <div class="bl_iconBox un_topAbout_iconBox">
                <a href="https://github.com/m-murata-gh" target="_blank" rel="noreferrer"><i class="fab fa-github el_icon el_icon__sns"></i></a>
                <a href="https://www.instagram.com/murata22__/" target="_blank" rel="noreferrer"><i class="fab fa-instagram el_icon el_icon__sns"></i></a>
              </div>
              <!-- /.iconBox -->
            </div>
            <!-- /.el_desc -->
          </div>
          <!-- /.bl_txtBox_contDesc -->
        </div>
        <!-- /.bl_txtBox -->
      </div>
      <!-- /.bl_txtBoxUnit -->
    </div>
    <!-- /.un_topAbout -->

  </div>
  <!-- /.bl_inner -->
</section>
<!-- /.[about] -->

</main>
HTML;

showFooter();
