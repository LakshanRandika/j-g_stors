<?php

include "connection.php";

$color = $_POST["co"];

if (empty ($color)){
    echo("Please Enter Your Color Name");
}else if (strlen ($color) > 20) {
    echo ("Your Color Name Shoud be less than 20 Characters");
}else {
    
    $rs = Database::search("SELECT * FROM `color` WHERE `color_name` = '".$color."'");
    $num = $rs->num_rows;

    //echo($num);

if ($num > 0) {
    echo(" Your Color Name All Ready Exists");
} else {
    Database::iud("INSERT INTO `color` (`color_name`) VALUES ('".$color."') ");
    echo("Success");
}
}

?>