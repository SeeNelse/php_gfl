<?php

function addFile($dirPath) {
	global $errorMsg;

	if (!permCheck()) {
		global $permMsg;
		$permMsg = 'Permission denied';
		return false;
	}
	$fileName = $_FILES['fileUpload']['name'];
	$fileTempName = $_FILES['fileUpload']['tmp_name'];
	$uploadFile = $dirPath . basename($fileName);
	$fileError = $_FILES['fileUpload']['error'];

	switch ($fileError) {
		case 1:
			$errorMsg = "File size is too high";
			return false;
    case 2:
			$errorMsg = "File size is too high";
			return false;
    case 3:
			$errorMsg = "The download file was only partially received";
			return false;
    case 4:
			$errorMsg = "The file has not been uploaded";
			return false;
    case 6:
			$errorMsg = "There is no temporary folder";
			return false;
    case 7:
			$errorMsg = "Could not write file to disk";
			return false;
    case 8:
			$errorMsg = "PHP extension stopped file loading";
			return false;
	}

	if (file_exists($uploadFile)) {
		$errorMsg = "File $fileName is exist";
		return false;
	}

	if (is_uploaded_file($fileTempName)) {
		if (move_uploaded_file($fileTempName, $uploadFile)) {
			chmod($uploadFile, 0777);
		}
		return true;
	}
}


function getFilesInfo($dirPath) {
	if (!permCheck()) {
		global $permMsg;
		return $permMsg = 'Permission denied';
	}
	$filesList = scandir($dirPath);
	$filesArray = [];
	$arrayId = 0;
	forEach($filesList as $item) {
		if (!in_array($item,array('.','..'))) {
			$fileFullPath = $dirPath . $item;
			$fileSize = filesize($fileFullPath);
			$arrayId++;
			$filesArray[$arrayId] = ['name' => $item, 'size' => sizeСonversion($fileSize)];
		}
	}
	return $filesArray;
}

function deleteFile($fileName, $dirPath) {
	if (!permCheck()) {
		global $permMsg;
		$permMsg = 'Permission denied';
		return false;
	}
	global $errorMsg;
	$fileFullPath = $dirPath . $fileName;
	if (file_exists($fileFullPath)) {
		if (unlink($fileFullPath)) {
			return true;
		} else {
			$errorMsg = 'Something went wrong';
			return false;
		}
	} else {
		$errorMsg = "File $fileName is no exist";
		return false;
	}
}

function sizeСonversion($size) {
	if ($size > 1048576) { // to mb
		$finalVal = number_format($size / 1048576, 2);
		return $finalVal . ' mb';
	}
	if ($size > 1024) { // to kb
		return $finalVal = number_format($size / 1024, 2) . ' kb';
	}
	return $size . ' b';
}

function permCheck() {
	$dirPerm = substr(decoct(fileperms(DIR_PATH)), -3);
	if (intval($dirPerm[2]) < 5) {
		return false;
	} else {
		return true;
	}
}

?>
