
<?php
$filename="date.txt";
$fn = fopen($filename,"r");
$dateStudenti=array();

//citeste linie cu linie si adauga cuv citite in array
     while(! feof($fn))  {
  $line = fgets($fn);
  array_push($dateStudenti,preg_split('/( |,)/',$line,-1, PREG_SPLIT_NO_EMPTY));
  }
  fclose($fn);

echo "Datele din fisierul 'date.txt' sunt memorate intr-un array bidimensional si sunt afisate in tabel.<br><br>";

//creare si afisare cap de tabel
echo"<table id=tabel border=1> 
<tr><th>Nume</th>
<th>Prenume</th>
<th>Specializare</th>
<th>An</th>
<th>Buget/Taxa</th>
</tr>";

//populare tabel cu datele din array
for($i=0;$i<count($dateStudenti);$i+=1)
{
  echo "<tr>
<td>".$dateStudenti[$i][0]."</td>
<td>".$dateStudenti[$i][1]."</td>
<td>".$dateStudenti[$i][2]."</td>
<td>".$dateStudenti[$i][3]."</td>
<td>".$dateStudenti[$i][4]."</td>
</tr>";
}

?>