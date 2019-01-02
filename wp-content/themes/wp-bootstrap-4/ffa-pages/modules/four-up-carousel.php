<section class="full-width-carousel" class="four-up">


      <?php if(get_sub_field('header_text')){ ?>
          <h2><?php the_sub_field('header_text') ?></h2>
      <?php } ?>



  <div class="owl-carousel owl-theme ffa-carousel-three" class="container">



  <?php if( have_rows('slide_repeater') ):
    while ( have_rows('slide_repeater') ) : the_row(); ?>

  <div class="item">
        <div class="row">

    <?php if(get_sub_field('quarter_1_text')){ ?>
      <div class="col-sm-3">
    <?php } ?>

    <?php if(get_sub_field('quarter_1_image')){ ?>
    <img src="<?php the_sub_field('quarter_1_image')?>" alt="<?php the_sub_field('quarter_1_image')?>">
    <?php } ?>

    <?php if(get_sub_field('quarter_1_text')){ ?>
      <p><?php the_sub_field('quarter_1_text')?></p>
    <?php } ?>

    <?php if(get_sub_field('quarter_1_text')){ ?>
      </div>
    <?php } ?>


    <?php if(get_sub_field('quarter_2_text')){ ?>
      <div class="col-sm-3">
    <?php } ?>

    <?php if(get_sub_field('quarter_2_image')){ ?>
    <img src="<?php the_sub_field('quarter_2_image')?>" alt="<?php the_sub_field('quarter_2_image')?>">
    <?php } ?>

    <?php if(get_sub_field('quarter_2_text')){ ?>
      <p><?php the_sub_field('quarter_2_text')?></p>
    <?php } ?>

    <?php if(get_sub_field('quarter_2_text')){ ?>
      </div>
    <?php } ?>


    <?php if(get_sub_field('quarter_3_text')){ ?>
      <div class="col-sm-3">
    <?php } ?>

    <?php if(get_sub_field('quarter_3_image')){ ?>
    <img src="<?php the_sub_field('quarter_3_image')?>" alt="<?php the_sub_field('quarter_3_image')?>">
    <?php } ?>

    <?php if(get_sub_field('quarter_3_text')){ ?>
      <p><?php the_sub_field('quarter_3_text')?></p>
    <?php } ?>

    <?php if(get_sub_field('quarter_3_text')){ ?>
      </div>
    <?php } ?>


    <?php if(get_sub_field('quarter_4_text')){ ?>
      <div class="col-sm-3">
    <?php } ?>

    <?php if(get_sub_field('quarter_4_image')){ ?>
    <img src="<?php the_sub_field('quarter_4_image')?>" alt="<?php the_sub_field('quarter_4_image')?>">
    <?php } ?>

    <?php if(get_sub_field('quarter_4_text')){ ?>
      <p><?php the_sub_field('quarter_4_text')?></p>
    <?php } ?>

    <?php if(get_sub_field('quarter_4_text')){ ?>
      </div>
    <?php } ?>















</div>

</div>



<?php
    endwhile;
else :
endif; ?>





  </div>
</section>
