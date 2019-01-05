<section class="four-up">
  <?php if(get_sub_field('header')){ ?>
    <h2><?php the_sub_field('header') ?></h2>
  <?php } ?>
  <div class="container">
    <div class="row">
    <?php

// check if the repeater field has rows of data
if( have_rows('four_up_repeater') ):

  // loop through the rows of data
    while ( have_rows('four_up_repeater') ) : the_row();
?>

      <div class="col-lg-3 col-sm-6 col-md-6">
        <?php if(get_sub_field('image')){ ?>
          <img src="<?php the_sub_field('image') ?>" alt="<?php the_sub_field('image') ?>">
        <?php } ?>

        <?php if(get_sub_field('text')){ ?>
          <p><?php the_sub_field('text') ?></p>
        <?php } ?>
      </div>

<?php
    endwhile;
else :
endif; ?>

    </div>
  </div>
</section>

