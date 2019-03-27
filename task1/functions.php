<?php

function addFile($dirPath) {
	$fileName = $_FILES['fileUpload']['name'];
	$fileTempName = $_FILES['fileUpload']['tmp_name'];
	$uploadFile = $dirPath . basename($fileName);
	$fileError = $_FILES['fileUpload']['error'];
	global $errorMsg;
	global $successMsg;

	switch ($fileError) {
    case 1:
			return $errorMsg = "File size is too high";
    case 2:
			return $errorMsg = "File size is too high";
    case 3:
			return $errorMsg = "The download file was only partially received";
    case 4:
			return $errorMsg = "The file has not been uploaded";
    case 6:
			return $errorMsg = "There is no temporary folder";
    case 7:
			return $errorMsg = "Could not write file to disk";
    case 8:
			return $errorMsg = "PHP extension stopped file loading";
	}

	if (file_exists($uploadFile)) {
		return $errorMsg = "File $fileName is exist";
	}

	if (is_uploaded_file($fileTempName)) {
		if (move_uploaded_file($fileTempName, $uploadFile)) {
			chmod($uploadFile, 0777);
		}
		return $successMsg = 'File upload!';
	}
}


function getFilesInfo($dirPath) {
	// if (!scandir($dirPath)) {
	// 	return $errorMsg = "error";
	// }
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
	global $deleteMsg;
	global $errorMsg;
	$fileFullPath = $dirPath . $fileName;
	if (file_exists($fileFullPath)) {
		if (unlink($fileFullPath)) {
			return $deleteMsg = "File $fileName was deleted";
		} else {
			return $errorMsg = 'Something went wrong';
		}
	} else {
		return $errorMsg = "File $fileName is no exist";
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

?>
