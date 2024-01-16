<?php

function custom_upload_mimes( $existing_mimes ) {
    // Add xml to the list of mime types.
    $existing_mimes['xml'] = 'text/xml'; //You can add as per your requirement like : xml,svg,etc. 

    // Return the array back to the function with our added mime type.
    return $existing_mimes;
}
add_filter( 'mime_types', 'custom_upload_mimes' );