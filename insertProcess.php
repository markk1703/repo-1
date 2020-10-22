<?php
$host='remotemysql.com';
$dbname = 'iMCgx6S15o';
$user='iMCgx6S15o';
$pass='tgAwqOlsOx';
try {
    $nume = $_POST['Nume'];
    $prenume = $_POST['Prenume'];
    $varsta = $_POST['Varsta'];

    $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    /* set the PDO error mode to exception */
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO info (nume,prenume,varsta)
    VALUES ('$nume', '$prenume','$varsta')";
    $conn->exec($sql);
    header("Location: index.php");
    
    }
catch(PDOException $e)
    {
    	echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>