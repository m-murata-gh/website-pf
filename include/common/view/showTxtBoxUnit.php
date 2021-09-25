<?php
/**
 * include/common/view/showTxtBoxUnit.php
 */

function showTxtBoxUnit($cd): void {
  $caption = $GLOBALS['contVar']['caption'][$cd];
  $keys = array_keys($caption);
  $ct = count($caption);
  if(!$ct) { return; }

echo <<<HTML
<div class="bl_txtBoxUnit bl_caption_txtBoxUnit">
HTML;

for ($i = 0; $i < $ct ; $i++) {
  $key = $keys[$i];
  $val = $caption[$key];
echo <<<HTML
  <div class="bl_txtBox">
    <div class="bl_txtBox_contHeading">
      <h3 class="el_heading bl_txtBox_heading">{$key}</h3>
    </div>
    <!-- /.bl_txtBox_contHeading-->
    <div class="bl_txtBox_contDesc">
      <div class="el_desc bl_txtBox_desc">
        {$val}
      </div>
      <!-- /.el_desc -->
    </div>
    <!-- /.bl_txtBox__contDesc -->
  </div>
  <!-- /.bl_txtBox -->
HTML;
  }

echo <<<HTML
</div>
<!-- /.bl_caption_txtBoxUnit -->
HTML;

  return;
}
