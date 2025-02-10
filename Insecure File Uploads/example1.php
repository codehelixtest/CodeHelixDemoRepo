<?php

if( isset( $_POST[ 'Upload' ] ) ) {
	// Where are we going to be writing to?
	$target_path  = DVWA_WEB_PAGE_TO_ROOT . "hackable/uploads/";
	$target_path .= basename( $_FILES[ 'uploaded' ][ 'name' ] );

	// Can we move the file to the upload folder?
$fileType = pathinfo($_FILES['uploaded']['name'], PATHINFO_EXTENSION);
if (!in_array($fileType, ['jpg', 'png', 'gif'])) {
    $html .= '<pre>Invalid file type.</pre>';
    exit;
}
if ($_FILES['uploaded']['size'] > 2000000) { // Limit file size to 2MB
    $html .= '<pre>File is too large.</pre>';
    exit;
}
move_uploaded_file($_FILES['uploaded']['tmp_name'], $target_path);
		// No
		$html .= '<pre>Your image was not uploaded.</pre>';
	}
	else {
		// Yes!
		$html .= "<pre>{$target_path} succesfully uploaded!</pre>";
	}
}

?>
