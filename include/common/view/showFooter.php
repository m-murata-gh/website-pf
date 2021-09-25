<?php
/**
 * include/common/view/showFooter.php
 */

function showFooter(): void {

echo <<<HTML

<!-- [footer] -->
<footer class="ly_footer">
  <div class="el_siteLogo ly_footer_siteLogo">
    <p><a href="{$GLOBALS['contVar']['url']['root']}"><span>MISA MURATA</span><span>PORTFOLIO SITE</span></a></p>
  </div>
  <!-- /.el_siteLogo -->
  <p class="el_copyright"><small>© 2021 Misa Murata</small></p>
</footer>
<!-- /.[footer] -->

</body>
</html>

HTML;

  return;
}
