<section class="full-width-module">


                <?php if(get_sub_field('header')){ ?>
                  <h2><?php the_sub_field('header') ?></h2>
                <?php } ?>

                <?php if(get_sub_field('subheader')){ ?>
                  <h3><?php the_sub_field('subheader') ?></h3>
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

</section>
