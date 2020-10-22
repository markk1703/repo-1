<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<form method="post" action="insertProcess.php" class="form-group">
		Nume:<br>
		<input type="text" name="Nume" required>
		<br>
		Prenume:<br>
		<input type="text" name="Prenume" required>
		<br>
		Varsta:<br>
		<input type="number" min="1" name="Varsta" required>
		<br><br>
		<input type="submit" onclick="index.php" class="btn btn-success" name="save" value="Adauga">
		<button type="button" onclick="window.location.replace('index.php')"class="btn btn-danger">Renunta</button>
	</form>
  </body>
</html>