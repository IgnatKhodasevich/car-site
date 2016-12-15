<?php

include_once "setting.php";
$query="SELECT brand_name * FROM brands";
$result = mysqli_query($query,$connect) or die("error with sql query");
?>