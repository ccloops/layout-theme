<section class="past-events-lightbox">

<div class="container">
  <div class="row">

    <?php if( have_rows('past_event_repeater') ):
    while ( have_rows('past_event_repeater') ) : the_row(); ?>

    <div class="col-sm-4">
      <?php if(get_sub_field('image')){ ?>
        <img src="<?php the_sub_field('image')?>" alt="<?php the_sub_field('image')?>">
      <?php } ?>
      <?php if(get_sub_field('city')){ ?>
        <h3><?php the_sub_field('city')?></h3>
      <?php } ?>
      <?php if(get_sub_field('date')){ ?>
        <span><?php the_sub_field('date')?></span>
      <?php } ?>
      <?php if(get_sub_field('link')){ ?>
        <a href="<?php the_sub_field('link')?>"><?php the_sub_field('link')?></a>
      <?php } ?>
      <?php if(get_sub_field('event_title')){ ?>
        <span><?php the_sub_field('event_title')?></span>
      <?php } ?>
    </div>

<?php
    endwhile;
else :
endif; ?>

  </div>
</div>

</section>