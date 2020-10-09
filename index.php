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
  $count = 0;

  function array2Html($array, $table = true)
  {
      $out = '';
      foreach ($array as $key => $value) {
          if (is_array($value)) {
              if (!isset($tableHeader)) {
                  $tableHeader =
                      '<th>' .
                      implode('</th><th>', array_keys($value)) .
                      '</th>';
              }
              array_keys($value);
              $out .= '<tr>';
              $out .= array2Html($value, false);
              $out .= '</tr>';
          } else {
              $out .= "<td>$value</td>";
          }
      }
  
      if ($table) {
          return '<table>' . $tableHeader . $out . '</table>';
      } else {
          return $out;
      }
  }

  array2Html($studenti);
  ?>

 

 </body>
</html>
