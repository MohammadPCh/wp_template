It's a Page <br>
<?php
if ( is_front_page() ) :
    get_header( 'home' );
elseif ( is_page( 'aboutus' ) ) :
    // get_header( 'about' );
    echo "About";
else:
    get_header();
endif;
?>