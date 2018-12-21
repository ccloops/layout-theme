<?php if( have_rows('ffa_modules') ):

while ( have_rows('ffa_modules') ) : the_row();

if( get_row_layout() == 'carousel_module' ):
include 'modules/carousel.php';

elseif( get_row_layout() == 'full-width_module' ):
include 'modules/full-width.php';

elseif( get_row_layout() == 'full-width-image_module' ):
include 'modules/full-width-image.php';

elseif( get_row_layout() == 'half-width_module' ):
include 'modules/half-width.php';

elseif( get_row_layout() == 'four-up_module' ):
include 'modules/four-up.php';

elseif( get_row_layout() == 'slash_module' ):
include 'modules/slash.php';

elseif( get_row_layout() == 'full-width-carousel_module' ):
include 'modules/full-width-carousel.php';

elseif( get_row_layout() == 'typeform_module' ):
include 'modules/typeform.php';

elseif( get_row_layout() == 'four-up-lightbox_module' ):
include 'modules/four-up-lightbox.php';

elseif( get_row_layout() == 'half-width-left-list_module' ):
include 'modules/half-width-left-list.php';

elseif( get_row_layout() == 'four-up-carousel_module' ):
include 'modules/four-up-carousel.php';

elseif( get_row_layout() == 'alternate-header_module' ):
include 'modules/alternate-header.php';

endif;

endwhile;

else :
?>

<?php


endif;

?>
