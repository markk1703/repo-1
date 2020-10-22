<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
 -->
</head>
<title>Database lab3</title>
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
<button type="button" id="afis" class="btn btn-primary btn-lg">Ascunde/Afiseaza tabel</button><br><br>

<button type="button" onclick="window.location.replace('insert.php')" class="btn btn-info">Adauga</button>

<form method="post" action="deleteProcess.php" class="form-group">
  <br><label for="ID">ID:</label>
    <input type="number" min="1"  name="ID" placeholder="Stergeti in functie de ID" required>
    <input type="submit" onclick="deleteProcess.php" class="btn btn-danger" name="delete" value="Sterge">
</form>

<form method="post" action="modifyProcess.php" class="form-group">
		<br><label for="ID">ID:</label>
    <input type="number" min="1"  name="ID" placeholder="Introduceti ID-ul" required>
    <label for="Nume">Nume:</label>
		<input type="text" name="Nume" placeholder="Introduceti noul nume" required>
		<label for="Prenume">Prenume:</label>
		<input type="text" name="Prenume" placeholder="Introduceti noul prenume" required>
		<label for="Varsta">Varsta:</label>
		<input type="number" min="1" name="Varsta" placeholder="Introduceti noua varsta" required>
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

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script>
      $(function()
      {
        $('#afis').on('click',function(){
          $('#tabel').toggle();
        });
      });
      </script>
</html>
