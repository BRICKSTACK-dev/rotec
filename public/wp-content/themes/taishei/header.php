<!DOCTYPE html>
<html>
<head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-FLQYPZXZFW"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-FLQYPZXZFW');
</script>
<!-- meta settings -->
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="viewport" content="width=device-width">
<meta name="format-detection" content="telephone=no">

<!-- title -->
<title><?php wp_title(); ?></title>

<?php get_template_part('template_import_css'); ?>

<?php wp_head(); ?>

</head>
<body>

    <div class="wrapper">

        <div class="contents">

            <?php get_template_part('template_header'); ?>
