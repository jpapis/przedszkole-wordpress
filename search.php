
<?php get_header(); ?>
<div id="bear" class="bear2">
<div id="posts">
    <div id="posts_g"></div>
       <div id="content">
         <h2>Wyniki wyszukiwania</h2>
<?php if (have_posts()) : ?>

<?php while (have_posts()) : the_post(); ?>
<hr/>
<h2 class="h2_post"><a href="<?php the_permalink() ?>" rel="bookmark" title="Zobacz cały wpis"><?php the_title(); ?></a></h2>
<small><?php the_time('j F Y') ?> @ <?php the_category(', ') ?></small>
<?php the_content('Czytaj dalej »'); ?>

<?php endwhile; ?>
<br/><br/>
<div style="display:inline">
<div style="float:left"><?php previous_posts_link('« Nowsze wpisy') ?></div>
<div style="float:right"><?php next_posts_link('Starsze wpisy »') ?></div>

</div>
<?php else : ?>
Nic nie znaleziono
<?php endif; ?>
       </div>
       <div id="posts_d"></div>
       </div>
<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>

