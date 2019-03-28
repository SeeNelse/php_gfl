<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link rel="stylesheet" href="css/style.css">
		<title>Php - task 1</title>
	</head>
	<body>
		<nav class="navbar navbar-expand-lg navbar-light bg-light justify-content-between">
			<h3 class="navbar-brand">Task 1 - Upload files</h3>
			<a href="https://github.com/SeeNelse/gfl_php_tasks/tree/master/task1" target="_blank" class="navbar__github"><img src="img/GitHub-Logo.png" alt="github"></a>
		</nav>
		<div class="container main">
			<form enctype="multipart/form-data" action="index.php" method="POST" class="form">
				<input type="hidden" name="MAX_FILE_SIZE" value="2000000" >
				<input name="fileUpload" type="file" class="form__upload">
				<input name="buttonUpload" type="submit" class="btn btn-dark" >
				<?php 
					if (count($filesArray) == 0) {
						$errorMsg = 'No files exist';
					}
					if ($permMsg) {
						$errorMsg = $permMsg;
					}

					if ($deleteMsg) { // Delete message
						?>
							<div class="alert alert-warning form__alert" role="alert">
								<?= $deleteMsg; ?>
							</div>
						<?php
					}

					if ($errorMsg) { // Error message
						?>
							<div class="alert alert-danger form__alert" role="alert">
								<?= $errorMsg; ?>
							</div>
						<?php
					}

					if ($successMsg) { // Success message
						?>
							<div class="alert alert-success form__alert" role="alert">
								<?= $successMsg; ?>
							</div>
						<?php
					}
				?>
			</form>
			<?php if ($filesArray && gettype($filesArray) == 'array') { ?>
			<table class="table table-striped table-hover table-bordered">
				<thead class="table__head">
					<tr>
						<th>№</th>
						<th>File name</th>
						<th>Size</th>
						<th>Delete</th>
					</tr>
				</thead>
				<tbody class="table__body">
					<?php
						forEach($filesArray as $key => $item){
						?>
							<tr>
								<th scope="row"><?= $key ?></th>
								<td><?= $item['name']?> <a class="table__download" href=<?= FILES_PATH . $item['name'] ?> download><img class="table__download-img" src="img/download.png" alt="download"></a></td>
								<td><?= $item['size']?></td>
								<td>
									<form action="index.php" method="POST" class="table__form">
										<input type="hidden" name="fileName" value="<?= $item['name']?>" >
										<button type="submit" name="fileDelete" class="table__btn" >delete</button>
									</form>
								</td>
							</tr>
						<?php
						}
					?>
				</tbody>
			</table>
			<h5 class="footer__name">Student 8, Dovzhenko Vladislav</h5>
			<?php } ?>
		</div>
	</body>
</html>
