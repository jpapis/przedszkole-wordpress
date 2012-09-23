<?php

if ( post_password_required() ) : ?>
<p><?php _e('Wpisz hasło.'); ?></p>
<?php return; endif; ?>

<?php if ( comments_open() ) : ?>
<h3><?php _e('Dodaj komentarz'); ?></h3>

<?php if ( get_option('comment_registration') && !is_user_logged_in() ) : ?>
<p><?php printf(__('Musisz być <a href="%s">zalogowany</a>.'), wp_login_url( get_permalink() ) );?></p>
<?php else : ?>

<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" >

   <?php if ( is_user_logged_in() ) : ?>
      <p><?php printf(__('Zalogowany jako %s.'), '<a href="'.get_option('siteurl').'/wp-admin/profile.php">'.$user_identity.'</a>'); ?> <a href="<?php echo wp_logout_url(get_permalink()); ?>" ><?php _e('Wyloguj &raquo;'); ?></a></p>

   <?php else : ?>
      <p><input type="text" name="author" value="<?php echo esc_attr($comment_author); ?>" size="22" tabindex="1" />
      <label for="author"><?php _e('Podpis'); ?> <?php if ($req) _e('(wymagany)'); ?></label></p>

      <p><input type="text" name="email" value="<?php echo esc_attr($comment_author_email); ?>" size="22" tabindex="2" />
      <label for="email"><?php _e('Mail');?> <?php if ($req) _e('(wymagany)'); ?></label></p>
   <?php endif; ?>

   <p><textarea name="comment" id="comment" cols="48" rows="5" tabindex="4"></textarea></p>

   <p><input name="submit" type="submit" tabindex="5" value="<?php esc_attr_e('Wyślij'); ?>" />
   <input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
   </p>
   <?php do_action('comment_form', $post->ID); ?>

</form>

<?php if ( have_comments() ) : ?>

<table style="border-collapse:collapse; width: 100%;">
  <?php foreach (array_reverse($comments) as $comment) : ?>
	<tr style="background-color:#32660F; color:white;">
            <td><?php comment_date()?> <?php comment_time() ?></td>
            <td style="text-align:right;"><?php comment_author_link()?></td>
	</tr>
	<tr><td colspan="2"><?php comment_text() ?></td></tr>
  <?php endforeach; ?>
</table>

<?php else : // If there are no comments yet ?>
	<p><?php _e('Brak komentarzy.'); ?></p>
<?php endif; ?>


<?php endif; // If registration required and not logged in ?>

<?php else : // Comments are closed ?>
<p><?php _e('Sorry, the comment form is closed at this time.'); ?></p>
<?php endif; ?>
