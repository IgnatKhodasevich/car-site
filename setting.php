<?php
$host = "127.0.0.1:3306";
$db_name = "cars";
$login = "root";
$password="root";
$connect = mysqli_connect($host, $login, $password);
//if ($connect){
//    echo "Connected";
//}else{
//    echo "Error";
//}

$select_db=mysqli_select_db($connect,$db_name);

//if ($select_db){
//    echo "<br>DB selected";
//}else{
//    echo "<br>Error with db";
//}

?>