<?php

if( isset( $_POST[ 'Upload' ] ) ) {
	// Where are we going to be writing to?
	$target_path  = DVWA_WEB_PAGE_TO_ROOT . "hackable/uploads/";
$allowed_file_types = ['image/jpeg', 'image/png', 'image/gif'];
if (in_array($_FILES['uploaded']['type'], $allowed_file_types) && $_FILES['uploaded']['size'] < 2000000) {
    // Proceed with the upload
    if (!move_uploaded_file($_FILES['uploaded']['tmp_name'], $target_path)) {
        $html .= '<pre>Your image was not uploaded.</pre>';
    } else {
        $html .= "<pre>{$target_path} successfully uploaded!</pre>";
    }
} else {
    $html .= '<pre>Invalid file type or size too large.</pre>';
}

	// Can we move the file to the upload folder?
	if( !move_uploaded_file( $_FILES[ 'uploaded' ][ 'tmp_name' ], $target_path ) ) {
		// No
		$html .= '<pre>Your image was not uploaded.</pre>';
	}
	else {
		// Yes!
		$html .= "<pre>{$target_path} succesfully uploaded!</pre>";
	}
}

?>
