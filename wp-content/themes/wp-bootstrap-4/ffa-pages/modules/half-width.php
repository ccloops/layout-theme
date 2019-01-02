<?php

// check if the repeater field has rows of data
if( have_rows('half_width_module_repeater') ):

  // loop through the rows of data
    while ( have_rows('half_width_module_repeater') ) : the_row();
?>


<section class="half-width-module">

<?php if( get_sub_field('centered_text') ): ?>
  <div class="centered-text">
<?php else: ?>
  <div>
<?php endif; ?>

    <?php if(get_sub_field('header')){ ?>
      <h2><?php the_sub_field('header') ?></h2>
    <?php } ?>
    <?php if(get_sub_field('subheader')){ ?>
      <h2><?php the_sub_field('subheader') ?></h2>
    <?php } ?>
    <?php if(get_sub_field('text')){ ?>
      <p><?php the_sub_field('text') ?></p>
    <?php } ?>
    <?php if(get_sub_field('call_to_action_button')){ ?>
        <?php $cta = get_sub_field('call_to_action_button'); ?>
        <a class="cta-btn" href="<?php echo $cta['link'] ?>">
          <?php echo $cta['text'] ?>
        </a>
    <?php } ?>
  </div>
  <div class="half-width-image" style="background-image: url('<?php the_sub_field('image') ?>')">
   <h3 style="">Image</h3>
  </div>
</section>

<?php
    endwhile;
else :
endif; ?>