<?php
// If date file exists
if ( file_exists("dat.php") ) {
	// Open it
	require_once "dat.php";
		// Check if pics folder has been modified after last modification date
		shell_exec("ls -la");
			// If modified then, check for new names and insert them in Database
				# Can't delete/rename files from pics folder
				// If error in insert go to ERROR page
			// Change the date and time values in date file
// If it doesn't exists
} else {
	// Upload name and details of photos in folder to Database
		// If error in insert go to ERROR page
	
	// Create date file
	$date_file = fopen("dat.php", "w");
	
		// If error in creating file go to ERROR page
		if ($date_file == FALSE) {
			require_once 'url.php';
			header("Location: $rootURL/ERROR.php");
		}
		// Insert present date and time
		$str = "<?php
				$date = ".date("Y-m-d H:i").";
				?>"
		// Write to date file
		fwrite($date_file, $str);
	// Close file handler
	fclose($date_file);
}

// Search files in Database with no rating
	// Select the first name and open it
		// Rate it
?>