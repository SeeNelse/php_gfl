<?php
	include 'config.php';
	include 'functions.php';

	$errorMsg = '';
	$permMsg = '';
	$successMsg = '';
	$deleteMsg = '';
	
	if (isset($_POST['buttonUpload'])) {
		if (addFile(DIR_PATH))
		{
			$successMsg = 'File upload!';
		}
	}

	if (isset($_POST['fileDelete'])) {
		if (deleteFile($_POST['fileName'], DIR_PATH))
		{
			$deleteMsg = "File $fileName was deleted";
		}
	}
	
	$filesArray = getFilesInfo(DIR_PATH);

	include 'templates/index_template.php';
?>
