<section class="slash">
  <div>


    <?php if(get_sub_field('left_header_text')){ ?>
      <h2 class="slash-mobile"><?php the_sub_field('left_header_text') ?></h2>
    <?php } ?>

    <?php if(get_sub_field('left_subheader')){ ?>
      <h3 class="slash-mobile"><?php the_sub_field('left_subheader') ?></h3>
    <?php } ?>

    <?php if(get_sub_field('left_text')){ ?>
      <p class="slash-mobile"><?php the_sub_field('left_text') ?></p>
    <?php } ?>

    <?php if(get_sub_field('left_call_to_action_button')){ ?>
        <?php $cta = get_sub_field('left_call_to_action_button'); ?>
        <a class="cta-btn slash-mobile" href="<?php echo $cta['link'] ?>">
          <?php echo $cta['text'] ?>
        </a>
    <?php } ?>




    <div class="slash-container">
    <?php if(get_sub_field('left_header_text')){ ?>
      <h2><?php the_sub_field('left_header_text') ?></h2>
    <?php } ?>

    <?php if(get_sub_field('left_subheader')){ ?>
      <h3><?php the_sub_field('left_subheader') ?></h3>
    <?php } ?>

    <?php if(get_sub_field('left_text')){ ?>
      <p><?php the_sub_field('left_text') ?></p>
    <?php } ?>

    <?php if(get_sub_field('left_call_to_action_button')){ ?>
        <?php $cta = get_sub_field('left_call_to_action_button'); ?>
        <a class="cta-btn" href="<?php echo $cta['link'] ?>">
          <?php echo $cta['text'] ?>
        </a>
    <?php } ?>
          </div>
  </div>
  <div>
    <?php if(get_sub_field('right_header_text')){ ?>
      <h2><?php the_sub_field('right_header_text') ?></h2>
    <?php } ?>

    <?php if(get_sub_field('right_subheader')){ ?>
      <h3><?php the_sub_field('right_subheader') ?></h3>
    <?php } ?>

    <?php if(get_sub_field('right_text')){ ?>
      <p><?php the_sub_field('right_text') ?></p>
    <?php } ?>

    <?php if(get_sub_field('right_call_to_action_button')){ ?>
        <?php $cta = get_sub_field('right_call_to_action_button'); ?>
        <a class="cta-btn" href="<?php echo $cta['link'] ?>">
          <?php echo $cta['text'] ?>
        </a>
    <?php } ?>
  </div>
</section>