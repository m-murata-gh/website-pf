<?php
/**
 * include/common/view/showLabelUnit.php
 */

function showLabelUnit($cd): void {
  $skill = $GLOBALS['contVar']['skill'][$cd];
  $ct = count($skill);
  if(!$ct) { return; }

echo <<<HTML
<div class="bl_caption_labelUnit">
HTML;

for ($i = 0; $i < $ct ; $i++) {

echo <<<HTML
  <span class="el_label">{$skill[$i]}</span>
HTML;
  }

echo <<<HTML
</div>
<!-- /.bl_caption_labelUnit -->
HTML;

  return;
}
