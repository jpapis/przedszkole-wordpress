<?php get_header(); ?>
<div id="bear" class="bear3">
<div id="posts">
    <div id="posts_g"></div>
       <div id="content">
<?php is_tag(); ?>
<?php if (have_posts()) : ?>
<?php $post = $posts[0]; ?>

<?php /* Nagłówek dla archiwum kategorii */ if (is_category()) { ?>
<h2><?php single_cat_title(); ?></h2>
<?php /* Nagłówek dla archiwum taga */ } elseif( is_tag() ) { ?>
<h2><?php single_tag_title();?>’</h2>
<?php /* Nagłówek dla archiwum dziennego */ } elseif (is_day()) { ?>
<h2><?php the_time('F j, Y'); ?></h2>

<?php /* Nagłówek dla archiwum miesięcznego */ } elseif (is_month()) { ?>
<h2><?php the_time('F Y'); ?></h2>
<?php /* Nagłówek dla archiwum rocznego */ } elseif (is_year()) { ?>
<h2><?php the_time('Y'); ?></h2>
<?php /* Nagłówek dla archiwum autora */ } elseif (is_author()) { ?>
<h2></h2>

<?php /* Nagłówek dla stronicowanego archiwum */ } elseif (isset($_GET['paged']) &&
!empty($_GET['paged'])) { ?>
<h2>Archiwum bloga</h2>
<?php } ?>
<hr/>
<?php while (have_posts()) : the_post(); ?>

<h3 class="h3_post"><a href="<?php the_permalink() ?>" rel="bookmark" title="Zobacz cały wpis"><?php the_title();?></a></h3>
<small><?php the_time('j F Y') ?> @ <?php the_category(', ') ?></small>
<?php the_content('Czytaj więcej »'); ?>
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


