<?php
/**
 * include/common/view/showWork.php
 */

function showWork($cd): void {

  showHeader($cd );
  showBreadcrumb($cd);

  echo <<<HTML
  <main class="ly_work">


    <!-- [MV] -->
    <section class="ly_work_MV">
      <div class="bl_inner bl_inner__sm">
          <div class="el_visual js_flipInX" style="background: center / cover no-repeat url({$GLOBALS['contVar']['imgMain'][$cd]})"></div>
          <!-- /.el_visual -->
  HTML;

  showBtnBox($cd);

  echo <<<HTML

      </div>
      <!-- /.bl_inner -->
    </section>
    <!-- /.[MV] -->

    <!-- [caption] -->
    <section class="bl_caption ly_work_caption">
      <div class="bl_inner bl_inner__x-sm">
        <div class="bl_caption_ttl">
          <h2>{$GLOBALS['contVar']['ttl'][$cd]}</h2>
        </div>
        <!-- /.bl_caption_ttl -->

        <div class="bl_caption_date">
          <span>{$GLOBALS['contVar']['date'][$cd]}</span>
        </div>
        <!-- /.bl_caption_date -->

        <div class="bl_caption_line"></div>
        <!-- /.bl_caption_line -->

        <div class="bl_caption_time">
          <i class="fas fa-stopwatch el_icon bl_caption_icon"></i><span class="bl_caption_time_main">{$GLOBALS['contVar']['time'][$cd]}</span><br><span class="bl_caption_time_sub">{$GLOBALS['contVar']['timeSub'][$cd]}</span>
        </div>
        <!-- /.bl_captionl_time -->
  HTML;

  showLabelUnit($cd);
  showTxtBoxUnit($cd);

  echo <<<HTML

      </div>
      <!-- /.bl_inner -->
    </section>
    <!-- /.[caption] -->
  HTML;

  showLightbox($cd);

  echo <<<HTML
  </main>
  HTML;

  showFooter();

  return;
}
