<?php get_header(); ?>
<div id="bear" class="bear4">
  <div id="posts">
    <div id="posts_g"></div>
    <div id="content">
        <?php if (have_posts()) : ?>
        
        <?php while (have_posts()) : the_post(); ?>
        <h2 class="h2_post"><?php the_title();?></h2>
        <hr/>
        <small><?php the_time('j F Y') ?> @ <?php the_category(', ') ?></small>
        <?php the_content('Czytaj więcej »'); ?>
        <hr/>
        <div style="display:inline">
           <div style="float:left"><?php next_post_link('&laquo; %link','nowszy post') ?></div>
           <div style="float:right"><?php previous_post_link('%link &raquo;','starszy post') ?></div><br/>
        </div>
        <?php endwhile; ?>
        
       <?php comments_template(); ?>
        <?php else : ?>

<h2>Nic nie znaleziono</h2>
<?php endif; ?>

       
    </div>
    <div id="posts_d"></div>
  </div>
  <?php get_sidebar(); ?>

</div>
<?php get_footer(); ?>