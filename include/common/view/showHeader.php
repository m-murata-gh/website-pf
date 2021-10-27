<?php
/**
 * include/common/view/showHeader.php
 */

function showHeader($cd): void {

echo <<<HTML

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
  <title>{$GLOBALS['contVar']['ttlHead'][$cd]}</title>
  <link rel="stylesheet" href="{$GLOBALS['contVar']['url']['root']}assets/css/main.css">
  <link rel="icon" type="image/x-icon" href="{$GLOBALS['contVar']['url']['root']}assets/images/favicon.ico">
  <link rel="apple-touch-icon" sizes="180x180" href="{$GLOBALS['contVar']['url']['root']}assets/images/apple-touch-icon.png">
  <script src="https://kit.fontawesome.com/82ce522d6d.js" crossorigin="anonymous"></script>
  <script type="module" src="{$GLOBALS['contVar']['url']['root']}assets/js/index.js"></script>
</head>

<body>
<!-- [header & slideNav] -->
<header>
  <div class="ly_header">
    <div class="el_siteLogo ly_header_siteLogo">
      <h1><a href="{$GLOBALS['contVar']['url']['root']}"><span>MISA MURATA</span><span>PORTFOLIO SITE</span></a></h1>
    </div>
    <!-- /.el_siteLogo -->
    <div class="bl_pcNav ly_header_pcNav js_bounceInRight_onlyTop">
      <ul>
        <li><a href="{$GLOBALS['contVar']['url']['website']}">WEBSITE</a>
        <li><a href="{$GLOBALS['contVar']['url']['system']}">SYSTEM</a>
        <li><a href="{$GLOBALS['contVar']['url']['other']}">OTHER</a>
        <li><a href="{$GLOBALS['contVar']['url']['about']}">ABOUT</a>
      </ul>
    </div>
    <!-- /.bl_pcNav -->
  </div>
  <!-- /.ly_header-->
  <div id="js_slideNav" class="bl_slideNav">
    <div id="js_slideNav_btn" class="bl_slideNav_btn">
      <div class="bl_slideNav_lines">
        <span></span>
        <span></span>
        <span></span>
      </div>
      <!-- /.bl_slideNav_lines -->
    </div>
    <!-- /.bl_slideNav_btn -->
    <div id="js_slideNav_menu" class="bl_slideNav_menu">
      <nav>
        <ul id="js_slideNav_menuList">
          <li class="js_slideNav_menuLink"><a href="{$GLOBALS['contVar']['url']['root']}">TOP</a>
          <li class="js_slideNav_menuLink"><a href="{$GLOBALS['contVar']['url']['website']}">WEBSITE</a>
          <li class="js_slideNav_menuLink"><a href="{$GLOBALS['contVar']['url']['system']}">SYSTEM</a>
          <li class="js_slideNav_menuLink"><a href="{$GLOBALS['contVar']['url']['other']}">OTHER</a>
          <li class="js_slideNav_menuLink"><a href="{$GLOBALS['contVar']['url']['about']}">ABOUT</a>
        </ul>
      </nav>
    </div>
    <!-- /.bl_slideNav_menu -->
  </div>
  <!-- /.bl_slideNav -->
</header>
<!-- /.[header & slideNav] -->

HTML;

  return;
}
