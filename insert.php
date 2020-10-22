<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
  <div class="container">
	<form method="post" action="insertProcess.php" class="form-group">
	<div class="form-group">
		<label for="Nume">Nume:</label>
		<input type="text" class="form-control" name="Nume" placeholder="Introduceti numele" required></div>
		<br><div class="form-group">
		<label for="Prenume">Prenume:</label>
		<input type="text" class="form-control" name="Prenume" placeholder="Introduceti prenumele" required></div>
		<br><div class="form-group">
		<label for="Varsta">Varsta:</label>
		<input type="number" class="form-control" min="1" name="Varsta" placeholder="Introduceti varsta" required></div>
		<br><br>
		<input type="submit" onclick="index.php" class="btn btn-success" name="save" value="Adauga">
		<button type="button" onclick="window.location.replace('index.php')"class="btn btn-danger">Renunta</button>
	</form>
	</div>
  </body>
</html>