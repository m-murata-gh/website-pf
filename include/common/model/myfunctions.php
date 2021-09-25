<?php
/**
 * include/common/model/myfunctions.php
 */

/**
 * カレントディレクトリ文字列を返す
 */
function getCD($__dir__) :string {
  if (ENV) {
    $ptn = '/^.*\\//'; // ptn -> ^.*/
  } else {
    $ptn = '/^.*\\\\/'; // ptn -> ^.*\
  }
  $cd = preg_replace($ptn, '', $__dir__);
  return $cd;
}
