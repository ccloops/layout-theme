<?php if( have_rows('ffa_modules') ):

while ( have_rows('ffa_modules') ) : the_row();

// done
if( get_row_layout() == 'carousel_module' ):
include 'modules/carousel.php';

// done
elseif( get_row_layout() == 'full-width_module' ):
include 'modules/full-width.php';

// done
elseif( get_row_layout() == 'full-width-image_module' ):
include 'modules/full-width-image.php';

// done
elseif( get_row_layout() == 'half-width_module' ):
include 'modules/half-width.php';

// done
elseif( get_row_layout() == 'four-up_module' ):
include 'modules/four-up.php';

// done
elseif( get_row_layout() == 'slash_module' ):
include 'modules/slash.php';

// done
elseif( get_row_layout() == 'full-width-carousel_module' ):
include 'modules/full-width-carousel.php';

// done
elseif( get_row_layout() == 'typeform_module' ):
// include 'modules/typeform.php';

// done
elseif( get_row_layout() == 'four-up-lightbox_module' ):
include 'modules/four-up-lightbox.php';

// done
elseif( get_row_layout() == 'half-width-left-list_module' ):
include 'modules/half-width-left-list.php';


// done
elseif( get_row_layout() == 'four-up-carousel_module' ):
include 'modules/four-up-carousel.php';

// done
elseif( get_row_layout() == 'alternate-header_module' ):
include 'modules/alternate-header.php';

// done
elseif( get_row_layout() == 'past_events_module' ):
include 'modules/past-events-lightbox.php';

// done
elseif( get_row_layout() == 'singular_page' ):
include 'modules/singular-page.php';


// done
elseif( get_row_layout() == 'full-width-alt-background' ):
include 'modules/full-width-alt-background.php';

endif;

endwhile;

else :
?>

<?php


endif;

?>
