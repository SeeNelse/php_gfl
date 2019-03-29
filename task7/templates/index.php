<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link rel="stylesheet" href="css/style.css">
    <title>%TITLE%</title>
  </head>
  <body>
	<div class="container">
		<h1 class="header center">Contact Form</h1>
		<div class="row justify-content-center">
			<form action="" method="POST" class="form">
				<label>
					First, Last name
					<input type="text" name="first-last" class="form-control" required>
				</label>
				<label>
					Email
					<input type="email" name="email" class="form-control" required>
				</label>
				<label>
					Choose subject
					<select name="select" class="form-control" required>
						<option value="%SELECT_NONE%" disabled selected>%SELECT_NONE%</option>
						<option value="%SELECT_1%">%SELECT_1%</option>
						<option value="%SELECT_2%">%SELECT_2%</option>
						<option value="%SELECT_3%">%SELECT_3%</option>
					</select>
				</label>
				<label>
					Message
					<textarea name="textarea" cols="30" rows="10" class="form-control" required></textarea>
				</label>
				<input type="submit" name="form-button" class="btn btn-dark">
    	</form>
		</div>
	</div>
  </body>
</html>
