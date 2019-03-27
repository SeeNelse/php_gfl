<?php
	include 'config.php';
	include 'functions.php';

	$errorMsg = '';
	$successMsg = '';
	$deleteMsg = '';
	
	$dirPerm = str_split(substr(sprintf('%o', fileperms(DIR_PATH)), -4));

	if (isset($_POST['buttonUpload'])) {
		addFile(DIR_PATH);
	}

	if (isset($_POST['fileDelete'])) {
		deleteFile($_POST['fileName'], DIR_PATH);
	}

	if (intval($dirPerm[3]) < 4) {
		$filesArray = 'perm';
	} else {
		$filesArray = getFilesInfo(DIR_PATH);
	}

	include 'templates/index_template.php';
?>
