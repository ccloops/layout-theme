<section class="singular-page">

<div class="container">
  <div class="col-sm-8 centered">
<!-- carousel -->

    <?php if( have_rows('carousel_repeater') ): ?>
      <div class="carousel">
        <div class="owl-carousel owl-theme ffa-carousel-singular">

          <?php while ( have_rows('carousel_repeater') ) : the_row(); ?>
          <div class="item">
              <div class="col-sm-4">
                <?php if(get_sub_field('image')){ ?>
                  <img src="<?php the_sub_field('image') ?>" alt="<?php the_sub_field('image') ?>">
                <?php } ?>
                <?php if(get_sub_field('description_text')){ ?>
                    <?php the_sub_field('description_text')?>
                <?php } ?>
              </div>
          </div>
          <?php endwhile; ?>

</div></div>

<?php else :
endif; ?>


<!-- carousel -->

    <?php if(get_sub_field('title')){ ?>
      <h1><?php the_sub_field('title')?></h1>
    <?php } ?>

    <?php if(get_sub_field('city')){ ?>
      <h2><?php the_sub_field('city')?></h2>
    <?php } ?>

    <?php if(get_sub_field('date')){ ?>
      <span class="date"><?php the_sub_field('date')?></span>
    <?php } ?>

    <?php if(get_sub_field('subheader')){ ?>
      <span class="subheader"><?php the_sub_field('subheader')?></span>
    <?php } ?>

    <?php if(get_sub_field('body_text')){ ?>
      <?php the_sub_field('body_text')?>
    <?php } ?>

  </div>
</div>


</section>