<html>
 <head>
  <title>PHP App 1</title>
 </head>
 <body>

<?php
$filename='date.txt';
$studenti = array (
    array("Pop","Ion","CAL",3,"buget"),
    array("Popescu","Ana","TCM",1,"taxa"),
    array("Bob","Alina","CAL",2,"buget"),
    array("Ionescu","Ciprian","TCM",2,"taxa")
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
