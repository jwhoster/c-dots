<?php
define('BASEPATH', $_SERVER['DOCUMENT_ROOT'] . "/");

$pageinfo = array(
  'title'       => 'C-DOTS DESIGN PROJECT',
  'keywords'    => '',
  'description' => 'C-DOTS DESIGN PROJECT',
  'bodyId'      => 'index',
  'bodyClass'   => 'index'
);


// スクリプトの更新日付を返す
function echo_filedate($filename) {
  if (file_exists(BASEPATH . $filename)) {
    echo $filename . '?d=' . date('ymdHis', filemtime(BASEPATH . $filename));
  }
}

?>