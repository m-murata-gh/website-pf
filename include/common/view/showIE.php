<?php
/**
 * include/common/view/showIE.php
 */

function showIE(): void {
  $ua = $_SERVER['HTTP_USER_AGENT'];
  if (stristr($ua, 'Trident') || stristr($ua, 'MSIE')) {

echo <<<HTML
<p><strong>このサイトはInternet Explorerに対応していません。<br>
Edge、Safari、Google Chrome、Firefoxなどのモダンブラウザでご覧ください。</strong></p>
HTML;

    exit();
  }
  return;
}
