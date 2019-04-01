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
		<h1 class="header center">%TITLE%</h1>
		<div class="row justify-content-center">
			<form action="" method="POST" class="form">
				<label>First, Last name<span>*</span></label>
				<div class="error">%ERROR_NAME%</div>
				<input type="text" name="first-last" class="form-control" value="%FORM_NAME%" required>
				<label>Email<span>*</span></label>
				<div class="error">%ERROR_EMAIL%</div>
				<input type="email" name="email" class="form-control" value="%FORM_EMAIL%" required>
				<label>Choose subject<span>*</span></label>
				<div class="error">%ERROR_SELECT%</div>
				<select name="select" class="form-control" required>
					<option value="%SELECT_NONE%" disabled selected>%SELECT_NONE%</option>
					<option value="%SELECT_1%" %SELECT_1_selected%>%SELECT_1%</option>
					<option value="%SELECT_2%" %SELECT_2_selected%>%SELECT_2%</option>
					<option value="%SELECT_3%" %SELECT_3_selected%>%SELECT_3%</option>
				</select>
				<label>Message<span>*</span></label>
				<div class="error">%ERROR_TEXTAREA%</div>
				<textarea name="textarea" cols="30" rows="10" class="form-control" >%FORM_TEXTAREA%</textarea>
				<input type="submit" name="form-button" class="btn btn-dark">
    	</form>
		</div>
	</div>
  </body>
</html>

