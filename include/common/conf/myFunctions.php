<?php
/**
 * include/common/conf/myFunctions.php
 */

/**
 * setContVar
 */
function setContVar($args): void {
  [$cd, $label, $ttl, $date, $time, $timeSub, $skill, $btn, $imgMain, $lightboxSrc, $caption] = $args;
  // ttlHeadの共通部分を設定
  $common = $GLOBALS['contVar']['ttlHead']['public'] = 'MISAMURATA PORTFOLIOSITE';
  $separator = ' _ ';
  // ContVarを設定
  $GLOBALS['contVar']['label'][$cd] = $label;
  $GLOBALS['contVar']['ttl'][$cd] = $ttl;
  $GLOBALS['contVar']['ttlHead'][$cd] = $GLOBALS['contVar']['ttl'][$cd] . $separator . $common;
  $GLOBALS['contVar']['date'][$cd] = $date;
  $GLOBALS['contVar']['time'][$cd] = $time;
  $GLOBALS['contVar']['timeSub'][$cd] = $timeSub;
  $GLOBALS['contVar']['skill'][$cd] = $skill;
  $GLOBALS['contVar']['url'][$cd] = $GLOBALS['contVar']['url']['root'] . $cd;
  $GLOBALS['contVar']['btn'][$cd] = $btn;
  $GLOBALS['contVar']['imgMain'][$cd] =  setImgAssets($imgMain, $cd);
  $GLOBALS['contVar']['lightboxSrc'][$cd] = setLightBoxSrc($lightboxSrc, $cd);
  $GLOBALS['contVar']['caption'][$cd] = $caption;
}

/**
 * setImgAssets
 */
function setImgAssets($value, $cd) {
  $assets = $GLOBALS['contVar']['url']['root'] . 'assets/images/' . $cd . '/';
  return $assets . $value;
};

/**
 * setLightBoxSrc
 */
function setLightBoxSrc($arr, $cd) {
  $ct = count($arr) - 1;
  for ($i=0; $i <= $ct ; $i++) {
    $arr[$i]['thumb'] = setImgAssets($arr[$i]['thumb'], $cd);
    $arr[$i]['detail'] = setImgAssets($arr[$i]['detail'], $cd);
  }
  return $arr;
}
