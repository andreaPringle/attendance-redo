<?php 
//Development connection
//$host="127.0.0.1";
//$db="attendance_redo_db";
//$user="root";
//$pass="";
//$charset="utf8mb4";

//Remore Database Connection
$host="remotemysql.com";
$db="O9gEeab35R";
$user="O9gEeab35R";
$pass="7RapSWKtr3";
$charset="utf8mb4";

$dsn ="mysql:host=$host;dbname=$db;charset=$charset";

try{
$pdo = new PDO($dsn, $user, $pass);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e){
        throw new PDOException($e->getMessage());
        
}

require_once "crud.php";
$crud = new crud($pdo);
?>