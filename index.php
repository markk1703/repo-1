<html>
 <head>
  <title>PHP App 1</title>
 </head>
 <body>

<?php
$filename='date.txt';
$studenti = array (
    array("nume"=>"Pop","prenume"=>"Ion","specializare"=>"CAL","an"=>3,"buget"=>"buget"),
    array("nume"=>"Popescu","prenume"=>"Ana","specializare"=>"TCM","an"=>1,"buget"=>"taxa"),
    array("nume"=>"Bob","prenume"=>"Alina","specializare"=>"CAL","an"=>2,"buget"=>"buget"),
    array("nume"=>"Ionescu","prenume"=>"Ciprian","specializare"=>"TCM","an"=>2,"buget"=>"taxa")
  );

  for ($row = 0; $row < 4; $row++) {
    echo "<p><b>Row number $row</b></p>";
    echo "<ul>";
    for ($col = 0; $col < 3; $col++) {
      echo "<li>".$studenti[$row][$col]."</li>";
    }
    echo "</ul>";
  }

  ?>

 

 </body>
</html>
