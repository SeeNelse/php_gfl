<?php
	include 'config.php';
	include 'functions.php';

	$errorMsg = '';
	$successMsg = '';
	$deleteMsg = '';
	

	if (isset($_POST['buttonUpload'])){
		addFile(DIR_PATH);
	}

	if (isset($_POST['fileDelete'])) {
		deleteFile($_POST['fileName'], DIR_PATH);
	}

	$filesArray = getFilesInfo(DIR_PATH);

	include 'templates/index_template.php';
?>
