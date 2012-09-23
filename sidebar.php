<!-- sidebar.php start -->

  <div id="sidebar">



    <h2 class="category_header">Kategorie</h2>
        <ul class="category">
          <?php wp_list_cats(); ?>
        </ul>

    <h2 class="archive_header">Archiwum</h2>
        <ul class="archive">
          <?php wp_get_archives('type=monthly'); ?>
        </ul>

    <h2 class="meta_header">Meta</h2>
      <ul class="meta">
        <li><?php wp_loginout(); ?></li>
        <?php wp_register('<li>','</li>'); ?>
        <?php wp_meta(); ?>
      </ul>


    <form id="search" method="get" action="<?php bloginfo('home'); ?>/">
      <input type="text" size="17" name="s" id="s" /><br/>
      <input type="submit" value=" Szukaj " />
    </form>
    <br/>




<div id="empty">&nbsp;</div>
  </div>

  <!-- sidebar.php end -->
