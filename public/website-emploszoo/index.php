<?php
/**
 * index
 *
 * public/__DIR__/index.php
 */

require_once __DIR__ . '/../../include/common/controller.php';

$cd = getCD(__DIR__);
showWork($cd);
