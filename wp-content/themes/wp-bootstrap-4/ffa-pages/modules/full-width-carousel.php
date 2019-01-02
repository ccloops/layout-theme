<section class="full-width-carousel">
  <div class="owl-carousel owl-theme ffa-carousel-two">


<?php

// check if the repeater field has rows of data
if( have_rows('slide_repeater') ):

  // loop through the rows of data
    while ( have_rows('slide_repeater') ) : the_row();
?>
    <div class="item">
      <div style="background-image: url('<?php the_sub_field('image') ?>')">
      <?php if(get_sub_field('header')){ ?>
        <h2><?php the_sub_field('header') ?></h2>
      <?php } ?>
      <?php if(get_sub_field('subheader')){ ?>
        <h3><?php the_sub_field('subheader') ?></h3>
      <?php } ?>
      <?php if(get_sub_field('text')){ ?>
        <p><?php the_sub_field('text') ?></p>
      <?php } ?>
<br />
      <?php if(get_sub_field('author')){ ?>
        <span class="author"><?php the_sub_field('author') ?></span>
      <?php } ?>
<br />
      <?php if(get_sub_field('author_description')){ ?>
        <span class="author_description"><?php the_sub_field('author_description') ?></span>
      <?php } ?>
<br /><br />
    <?php if(get_sub_field('call_to_action_button')){ ?>
        <?php $cta = get_sub_field('call_to_action_button'); ?>
        <a class="cta-btn" href="<?php echo $cta['link'] ?>">
          <?php echo $cta['text'] ?>
        </a>
    <?php } ?>


      </div>
    </div>

<?php
    endwhile;
else :
endif; ?>


  </div>
</section>







