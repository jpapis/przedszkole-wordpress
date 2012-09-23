
<?php get_header(); ?>
<div id="bear" class="bear2">
<div id="posts">
    <div id="posts_g"></div>
       <div id="content">

         <h3 style="text-align: center">Witamy na stronie<br/>Miejskiego Przedszkola Integracyjnego<br/>im. Przyjaciół Dzieci nr 14<br/>
             w Gorzowie Wlkp.</h3>
         <br/>
         <hr/>
<?php if (have_posts()) : ?>

<?php while (have_posts()) : the_post(); ?>

<h3 class="h3_post"><a href="<?php the_permalink() ?>" rel="bookmark" title="Zobacz cały wpis"><?php the_title(); ?></a></h3>
<small><?php the_time('j F Y') ?> @ <?php the_category(', ') ?></small>
<?php the_content('Czytaj dalej »'); ?>
<hr/>
<?php endwhile; ?>
<br/>
<div style="display:inline">
<div style="float:left"><?php previous_posts_link('« Nowsze wpisy') ?></div>
<div style="float:right"><?php next_posts_link('Starsze wpisy »') ?></div>

</div>
<?php else : ?>
<h2>Nic nie znaleziono</h2>
<?php endif; ?>
       </div>
       <div id="posts_d"></div>
       </div>
<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
