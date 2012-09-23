<?php get_header(); ?>
<div id="bear" class="bear1">
   <div id="posts">
       <div id="posts_g"></div>
       <div id="content">
          <?php if (have_posts()) : ?>
              <?php while (have_posts()) : the_post(); ?>
              <?php the_content(); ?>
              <small><?php edit_post_link('Edytuj', '<p>', '</p>'); ?></small>
              <?php endwhile; ?>
              
              <?php
                  $single_title = single_post_title( '', false ) ;
                  if ($single_title=="Księga gości")
                  {
                    comments_template();
                  }

                  $categories = get_categories( );
                  foreach( $categories as $category )
                  {
                    if( $category->name == $single_title )
                    {
                      echo "<a href=\"".get_category_link($category)."\">Przejdź do kategorii ".$category->name."</a>";
                    }
                  }
              ?>

          <?php else : ?>
              <h2 >Nic nie znaleziono</h2>
          <?php endif; ?>
       </div>
       <div id="posts_d"></div>
   </div>

<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
