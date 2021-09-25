<?php
/**
 * include/common/view/showBreadcrumb.php
 */

function showBreadcrumb($cd ): void {

  switch ($GLOBALS['contVar']['label'][$cd]) {
    case LABEL_WEBSITE:
      $anchor = '#website';
      $txt = 'WEBSITE';
      break;
    case LABEL_SYSTEM:
      $anchor = '#system';
      $txt = 'SYSTEM';
      break;
    case LABEL_GRAPHIC:
    case LABEL_ILLUST:
      $anchor = '#other';
      $txt = 'OTHER';
      break;
  }

echo <<<HTML

<!-- [breadcrumb] -->
<aside class="ly_breadcrumb">
  <div class="bl_lineTxt bl_lineTxt__l">
    <div class="bl_lineTxt_inner">
      <h2 class="bl_lineTxt_cont">
        <span class="bl_lineTxt_txt"><a href="{$GLOBALS['contVar']['url']['root']}">TOP</a> > <a href="{$GLOBALS['contVar']['url']['root']}{$anchor}">{$txt}</a></span>
      </h2>
    </div>
    <!-- /.bl_lineTxt_inner -->
  </div>
  <!-- /.bl_lineTxt -->
</aside>
<!-- /.[breadcrumb] -->

HTML;

  return;
}
