<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $pageinfo['title']; ?></title>
  <?php if(!empty($pageinfo['keywords'])){ ?><meta name="keywords" content="<?php echo $pageinfo['keywords']; ?>"><?php } ?>
  <meta name="description" content="<?php echo $pageinfo['description']; ?>">
  <meta name="viewport" content="initial-scale=1.0,width=device-width">

  <!-- <link rel="apple-touch-icon" sizes="180x180" href="/assets/img/common/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/assets/img/common/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/assets/img/common/favicon/favicon-16x16.png">
  <link rel="manifest" href="/assets/img/common/favicon/site.webmanifest">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="theme-color" content="#ffffff"> -->

  <!-- OGPの設定 -->
  <meta property="og:url" content="<?php echo (empty($_SERVER['HTTPS']) ? 'http://' : 'https://') . $_SERVER['HTTP_HOST']; ?>">
  <meta property="og:title" content="<?php echo $pageinfo['title']; ?>">
  <meta property="og:description" content="<?php echo $pageinfo['description']; ?>">
  <meta property="og:type" content="website">
  <meta property="og:image" content="/assets/img/common/cocoto_ogp.jpg">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@100;300;400;500;700&family=Noto+Sans+JP:wght@100;300;400;500&display=swap" rel="stylesheet">
  
  <link rel="stylesheet" href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css">
  <link rel="stylesheet" href="<?php echo_filedate('/assets/css/styles.css'); ?>">

</head>
<body id="<?php echo $pageinfo['bodyId']; ?>" class="<?php echo $pageinfo['bodyClass']; ?>">
<noscript><p style="color: #f00; font-weight: bold; padding: 5px; background: #eee; text-align: center;">このページはJavaScriptを使用しています。JavaScriptを有効にしてご覧ください。</p></noscript>