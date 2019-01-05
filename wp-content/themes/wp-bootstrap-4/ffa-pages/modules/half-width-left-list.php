<section class="half-width-left-list">
  <div class="container">


      <?php if(get_sub_field('header_text')){ ?>
          <h2><?php the_sub_field('header_text') ?></h2>
      <?php } ?>


  </div>
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        <ul>
          <?php

// check if the repeater field has rows of data
if( have_rows('left_column_repeater') ):

  // loop through the rows of data
    while ( have_rows('left_column_repeater') ) : the_row();
?>
         <li>

    <?php if(get_sub_field('call_to_action_button')){ ?>
        <?php $cta = get_sub_field('call_to_action_button'); ?>
        <a class="cta-btn" href="<?php echo $cta['link'] ?>">
          <?php echo $cta['text'] ?>
        </a>
    <?php } ?>


     <?php if(get_sub_field('title')){ ?>
       <h6><?php the_sub_field('title') ?></h6>
      <?php } ?>
     <?php if(get_sub_field('city')){ ?>
       <span><?php the_sub_field('city') ?></span>
      <?php } ?>
     <?php if(get_sub_field('date')){ ?>
       <span><?php the_sub_field('date') ?></span>
      <?php } ?>

          </li>

<?php
    endwhile;
else :
endif; ?>
        </ul>
      </div>
      <div class="col-sm-6">

     <?php if(get_sub_field('right_column_body_text')){ ?>
       <p><?php the_sub_field('right_column_body_text') ?></p>
      <?php } ?>

      <?php if( have_rows('call_to_action_repeater') ):
            while ( have_rows('call_to_action_repeater') ) : the_row(); ?>

    <?php if(get_sub_field('call_to_action_button')){ ?>
        <?php $cta = get_sub_field('call_to_action_button'); ?>
        <a class="cta-btn" href="<?php echo $cta['link'] ?>">
          <?php echo $cta['text'] ?>
        </a>
    <?php } ?>

<?php
    endwhile;
else :
endif; ?>

<?php if( get_sub_field('newsletter_signup_field') ): ?>

<div class="sign-up-option-half-width">
  <span>
Stay up to date by signing up for our newsletter:
</span>
        <form action="https://uniontherapy.us19.list-manage.com/subscribe/post-json?u=6ceb192c15e1591eda584fff6&amp;id=58aea1617b&amp;c=?" method="get" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate">
          <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="your email here" required="" data-keeper-lock-id="k-xnpssh6r4v">
          <input type="submit" value="Sign Up" name="subscribe" id="mc-embedded-subscribe" class="mc-button">
            <div id="subscribe-result"></div>
                    <keeper-lock id="k-xnpssh6r4v" style="filter: grayscale(100%); top: 24.5px; left: 186px; z-index: 1; visibility: hidden; height: 16px !important;"></keeper-lock></form>
</div>
<?php else: ?>
<?php endif; ?>



      </div>
    </div>
  </div>
</section>
