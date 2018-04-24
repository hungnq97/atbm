<?php 

session_start();
require_once __DIR__."/../libraries/databases.php";
require_once __DIR__."/../libraries/functions.php";

	// goi 2 file database va functions vao 
$db = new Database();
define("ROOT",$_SERVER['DOCUMENT_ROOT']."/shop/public/uploads/");

$sqlNew= "SELECT * FROM products WHERE 1 ORDER BY ID DESC LIMIT 4";
$productNew= $db -> fetchsql($sqlNew); // ham nay thuc hien cau truy van


?>