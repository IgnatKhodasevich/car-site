<?php

ini_set(default_charset,"UTF-8");

# include data base
require "setting.php";

switch ($_POST['action']) {

    case "showModelForInsert":
        echo '<label>Модель автомобиля</label><br><select class="f" size="1" name="model" style="width: 150px; height: 33px;">';
        $p = $_POST['id_brand'];
        $query = "SELECT model_name FROM models WHERE brand_id=$p ORDER BY model_name ASC";
        $result = mysqli_query($connect, $query);
        $rows = mysqli_fetch_array($result);

        do{
            $a=$rows["0"];
            printf ("<option>%s</option>",$a);
        }
        while ($rows = mysqli_fetch_array($result));

        echo '</select>';


}

?>