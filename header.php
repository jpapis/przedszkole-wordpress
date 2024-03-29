<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
  <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
  <title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> » <?php }?> <?php wp_title(); ?></title>
  <meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
  <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS" href="<?php bloginfo('rss2_url'); ?>" />
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
  <?php wp_head(); ?>
</head>
<body>
  <div id="top">
      <div id="header">
          <div id="logo"></div>
      </div>
      <div id="menu">
          <ul>
            <li><a href="<?php echo get_settings('home'); ?>/">Start</a></li>
            <?php wp_list_pages('title_li=0&sort_column=menu_order'); ?>
          </ul>
      </div>
  