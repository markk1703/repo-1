<html>
 <head>
  <title>PHP App 1</title>
 </head>
 <body>

<?php
$filename='date.txt';

$lines = array();
while (($line = fgets($file)) !== false)
    array_push($lines, $line);

print_r(array_values($lines));
?>
 </body>
</html>
