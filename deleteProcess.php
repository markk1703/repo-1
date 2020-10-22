<?php
$host='remotemysql.com';
$dbname = 'iMCgx6S15o';
$user='iMCgx6S15o';
$pass='tgAwqOlsOx';
$tablename='info';
try {
    $id = $_POST['ID'];

    $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    /* set the PDO error mode to exception */
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "DELETE from $tablename where idinfo=$id";
    $conn->exec($sql);
    header("Location: index.php");
    
    }
catch(PDOException $e)
    {
    	echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>