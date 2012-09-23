<?php 
/**
Template Page for the album overview

Follow variables are useable :

	$album       : Contain information about the album
	$galleries   : Contain all galleries inside this album
	$pagination  : Contain the pagination content

 You can check the content when you insert the tag <?php var_dump($variable) ?>
 If you would like to show the timestamp of the image ,you can use <?php echo $exif['created_timestamp'] ?>
**/
?>
<?php if (!defined ('ABSPATH')) die ('No direct access allowed'); ?><?php if (!empty ($galleries)) : ?>


	<!-- List of galleries -->
	<?php foreach (array_reverse($galleries) as $gallery) : ?>
  <div class="ngg-galleryoverview" id="<?php echo $gallery->anchor ?>" style="overflow: visible; clear: none;">
    <?php $images = nggdb::get_gallery($gallery->gid, $ngg_options['galSort'], $ngg_options['galSortDir']); ?>
    <?php $i = 0; ?>
    <?php foreach($images as $index => $image) : ?>
      <div id="ngg-image-<?php echo $image->pid ?>" class="ngg-gallery-thumbnail-box" <?php echo $image->style ?> >
        <div class="ngg-gallery-thumbnail" >
          <a href="<?php echo $image->imageURL ?>" title="<?php echo $gallery->title ?>" <?php echo $image->thumbcode ?> >
            <?php if ( $i++==0 ) { ?>
              <?php $image->thumbnailURL = $image->cached_singlepic_file(100, 75, $mode ); ?>
              <img title="<?php echo $image->alttext ?>" alt="<?php echo $image->alttext ?>" src="<?php echo $image->thumbnailURL ?>" <?php echo $image->size ?> />
		<?php echo $gallery->title ?>
		<?php if ($gallery->counter > 0) : ?>
		<p><strong><?php echo $gallery->counter ?></strong> <?php _e('Photos', 'nggallery') ?></p>
		<?php endif; ?>
            <?php } ?>
          </a>
        </div>
      </div>
    <?php endforeach ?>
  </div>

 	<?php endforeach; ?>
 	
	<!-- Pagination -->
 	<?php echo $pagination ?>


<?php endif; ?>