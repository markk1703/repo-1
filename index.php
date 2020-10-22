<html>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
 -->

 <body>
<?php
$host='remotemysql.com';
$dbname='iMCgx6S15o';
$user='iMCgx6S15o';
$pass='tgAwqOlsOx';

//conectare la db
try {
    $DBH = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    
    // set the PDO error mode to exception
    $DBH->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully.";
  } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }
  ?>

<br>
<button type="button" onclick="window.location.replace('insert.php')" class="btn btn-info">Adauga</button>

<form method="post" action="deleteProcess.php" class="form-group">
		<br>ID:
    <input type="number" min="1" name="ID" required>
    <input type="submit" onclick="deleteProcess.php" class="btn btn-danger" name="delete" value="Sterge">
</form>

<form method="post" action="modifyProcess.php" class="form-group">
		<br>ID:
    <input type="number" min="1" name="ID" required>
    Nume:
		<input type="text" name="Nume" required>
		Prenume:
		<input type="text" name="Prenume" required>
		Varsta:
		<input type="number" min="1" name="Varsta" required>
    <input type="submit" onclick="modifyProcess.php" class="btn btn-warning" name="modify" value="Modifica">
</form>


<table class="table table-striped table-bordered table-hover" id="tabel">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nume</th>
            <th>Prenume</th>
            <th>Varsta</th>
        </tr>
    </thead>
    <tbody>

<?php
  
  //get data

  $STH=$DBH->query('SELECT idinfo,nume,prenume,varsta from info');

  //set fetch mode
  $STH->setFetchMode(PDO::FETCH_ASSOC);
  while($row=$STH->fetch()){
echo
"<tr>
<td>$row[idinfo]</td>
<td>$row[nume]</td>
<td>$row[prenume]</td>
<td>$row[varsta]</td>
</tr>";

   
  }
?>
    </tbody>
</table>
      </body>
</html>
