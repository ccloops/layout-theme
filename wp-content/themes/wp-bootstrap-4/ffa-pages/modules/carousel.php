<section class="carousel-module">
  <div class="owl-carousel owl-theme ffa-carousel">
<!-- repeat -->
<?php

// check if the repeater field has rows of data
if( have_rows('slide_repeater') ):

  // loop through the rows of data
    while ( have_rows('slide_repeater') ) : the_row();
?>
      <div class="item">
        <div class="desktop-slide">
        <div class="carousel-background-panel">
        <div class="background-image-slide" style="background-image: url('<?php the_sub_field('image') ?>')">
        image</div></div>
        <div class="slash-container">
          <div class="text-area">
          <div class="text-body">
              <div class="text-inner">

                <?php if(get_sub_field('header')){ ?>
                  <h1><?php the_sub_field('header') ?></h1>
                <?php } ?>
                <?php if(get_sub_field('text')){ ?>
                  <p>
                    <?php the_sub_field('text') ?>
                </p>
                <?php } ?>


          </div>
          </div>
          </div>
        </div>
    </div>
    <div class="mobile-slide">
          <img style="width: 100%;" src="<?php the_sub_field('image') ?>" alt="">
          <div style="background: rgba(0,0,0,.5);margin-top:-10px;">



                <?php if(get_sub_field('header')){ ?>
                  <h1><?php the_sub_field('header') ?></h1>
                <?php } ?>
                <?php if(get_sub_field('text')){ ?>
                  <p>
                    <?php the_sub_field('text') ?>
                </p>
                <?php } ?>


          </div>
        </div>
      </div>
<?php
    endwhile;
else :
endif; ?>

<!-- repeat -->
</div>
<div>
</div>
</section>
