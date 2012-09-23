<?php
/**
Template Page for the gallery overview

Follow variables are useable :

	$gallery     : Contain all about the gallery
	$images      : Contain all images, path, title
	$pagination  : Contain the pagination content

 You can check the content when you insert the tag <?php var_dump($variable) ?>
 If you would like to show the timestamp of the image ,you can use <?php echo $exif['created_timestamp'] ?>
**/
?>
<?php if (!defined ('ABSPATH')) die ('No direct access allowed'); ?>

<?php if (!empty ($gallery)) : ?>
  <div class="ngg-galleryoverview" id="<?php echo $gallery->anchor ?>" style="overflow: inherit">
    <?php foreach($images as $index => $image) : ?>
      <div id="ngg-image-<?php echo $image->pid ?>" class="ngg-gallery-thumbnail-box" <?php echo $image->style ?> >
        <div class="ngg-gallery-thumbnail" >
          <a href="<?php echo $image->imageURL ?>" title="<?php echo $image->description ?>" <?php echo $image->thumbcode ?> >
            <?php if ( $index==0 ) { ?>
              <img title="<?php echo $image->alttext ?>" alt="<?php echo $image->alttext ?>" src="<?php echo $image->thumbnailURL ?>" <?php echo $image->size ?> />
            <?php } ?>
          </a>
        </div>
      </div>
    <?php endforeach ?>
  </div>
<?php endif; ?>
