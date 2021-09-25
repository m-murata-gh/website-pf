<?php
/**
 * include/common/view/showLightbox.php
 */

function showLightbox($cd): void {

echo <<<HTML
<!-- [lightbox] -->
<section>
  <div class="bl_inner bl_inner__sm">
    <div class="bl_lightbox ly_work_lightbox">
      <ul class="bl_lightbox_thumbBox">
HTML;

  $ct = count($GLOBALS['contVar']['lightboxSrc'][$cd]) - 1;
  for ($i=0; $i <= $ct ; $i++) {
    $itemorder = $i + 1;
    $thumbsrc = $GLOBALS['contVar']['lightboxSrc'][$cd][$i]['thumb'];
    $detailsrc = $GLOBALS['contVar']['lightboxSrc'][$cd][$i]['detail'];
echo <<<HTML
<li class="js_thumb" data-itemorder="{$itemorder}" data-thumbsrc="{$thumbsrc}" data-detailsrc="{$detailsrc}"><span class="hp_hov__blink-lightbox"></span></li>
HTML;
  }

echo <<<HTML
      </ul>
      <div id="js_detail" class="bl_lightbox_detail">
        <div id="js_detailBG" class="bl_lightbox_detail_bg"></div>
        <!-- /.bl_lightbox_detail_bg -->
        <div id="js_detailCont" class="bl_lightbox_detail_cont">
        </div>
        <!-- /.bl_lightbox_detail_cont -->
        <div id="js_detailPrev" class="bl_lightbox_detail_prev" data-itemlink></div>
        <div id="js_detailNext" class="bl_lightbox_detail_next" data-itemlink></div>
      </div>
      <!-- /.bl_lightbox_detail -->
    </div>
    <!-- /.lightbox -->
  </div>
  <!-- /.bl_inner -->
</section>
<!-- /.[lightbox] -->
HTML;

  return;
}
