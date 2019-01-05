<section class="four-up-lightbox">





<div class="container text-center">
  <?php if(get_sub_field('header')){ ?>
    <h2><?php the_sub_field('header') ?></h2>
  <?php } ?>

</div>



  <div class="container">
    <div class="row">




<?php

// check if the repeater field has rows of data
if( have_rows('lightbox_repeater') ):

  // loop through the rows of data
    while ( have_rows('lightbox_repeater') ) : the_row();
?>

      <div class="col-sm-3">


      <?php if(get_sub_field('image')){ ?>
      <img src="<?php the_sub_field('image') ?>" alt="<?php the_sub_field('image') ?>">
      <?php } ?>

      <?php if(get_sub_field('name')){ ?>
       <h5><?php the_sub_field('name') ?></h5>
      <?php } ?>


      <?php if(get_sub_field('title')){ ?>
       <h6><?php the_sub_field('title') ?></h6>
      <?php } ?>
          <div class="lightbox-content">
     <?php if(get_sub_field('description')){ ?>
       <div class="handle"><?php the_sub_field('contact_info') ?></div>
      <?php } ?>
     <?php if(get_sub_field('description')){ ?>
       <p><?php the_sub_field('description') ?></p>
      <?php } ?>

          </div>
      </div>



<?php
    endwhile;
else :
endif; ?>














    </div>
    <div class="row text-center">
  <?php if(get_sub_field('secondary_header')){ ?>
    <h3 class="secondary-header"><?php the_sub_field('secondary_header') ?></h3>
  <?php } ?>
    </div>
    <div class="row text-center">

    <?php if(get_sub_field('call_to_action_button')){ ?>
        <?php $cta = get_sub_field('call_to_action_button'); ?>
        <a class="cta-btn secondary-cta" href="<?php echo $cta['link'] ?>">
          <?php echo $cta['text'] ?>
        </a>
    <?php } ?>



    </div>
  </div>
</section>
