<?php
/**
 * include/common/view/showCard.php
 */

function showCard($cd): void {

  // ラベルカラーの設定
  $label = $GLOBALS['contVar']['label'][$cd];
  switch ($label) {
    case LABEL_WEBSITE:
      $labelcolor = 'website';
      break;
    case LABEL_SYSTEM:
      $labelcolor = 'system';
      break;
    default:
      $labelcolor = 'other';
      break;
  }

echo <<<HTML
      <!-- [website-cont] -->
      <a href="{$GLOBALS['contVar']['url'][$cd]}">
      <div class="bl_card hp_hov__blink">
        <div class="bl_card_inner">
          <div class="bl_card_cont">
            <div class="bl_card_img" style="
            background: top center / cover no-repeat url({$GLOBALS['contVar']['imgMain'][$cd]});"></div>
            <!-- /.bl_card_img -->
            <div class="bl_card_heading">
              <h3 class="bl_card_heading_ttl">{$GLOBALS['contVar']['ttl'][$cd]}</h3>
              <p class="bl_card_heading_time"><i class="fas fa-stopwatch el_icon bl_card_icon"></i><span>{$GLOBALS['contVar']['time'][$cd]}</span></p>
              <p class="el_label el_label__index bl_card_heading_label"  data-labelcolor="{$labelcolor}">{$GLOBALS['contVar']['label'][$cd]}</p>

            </div>
            <!-- /.bl_card_heading -->
          </div>
          <!-- /.bl_card_cont -->
          <div class="bl_card_date"><time>{$GLOBALS['contVar']['date'][$cd]}</time></div>
        </div>
        <!-- /.bl_card_inner -->
      </div>
      <!-- /.bl_card -->
      </a>

HTML;

  return;
}
