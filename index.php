<html>
 <head>
  <title>PHP App 1</title>
 </head>
 <body>

<?php
$filename='date.txt';

 // Open the file
$fp = @fopen($filename, 'r'); 

// Add each line to an array
if ($fp) {
   $array = explode("\n", fread($fp, filesize($filename)));
}

print_r(array_values($array));
?>
 </body>
</html>
