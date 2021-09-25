<?php
/**
 * include/common/view/showBtnBox.php
 */

function showBtnBox($cd): void {
  $btn = $GLOBALS['contVar']['btn'][$cd];
  $keys = array_keys($btn);
  $ct = count($btn);
  if(!$ct) { return; }

echo <<<HTML
<div class="bl_btnBox ly_work_MV_btnBox">
HTML;

for ($i = 0; $i < $ct ; $i++) {
  $key = $keys[$i];
  $val = $btn[$key];
echo <<<HTML
  <a class="el_btn" href="{$val}" target="_blank" rel="noreferrer">{$key}</a>
HTML;
  }

echo <<<HTML
</div>
<!-- /.bl_btnBox -->
HTML;

  return;
}
