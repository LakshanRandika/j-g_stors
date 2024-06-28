<?php

include "connection.php";

$cat = $_POST["c"];

if (empty ($cat)){
    echo("Please Enter Your Catagary Name");
}else if (strlen ($cat) > 20) {
    echo ("Your Catagary Name Shoud be less than 20 Characters");
}else {
    
    $rs = Database::search("SELECT * FROM `category` WHERE `category_name` = '".$cat."'");
    $num = $rs->num_rows;

    //echo($num);

if ($num > 0) {
    echo(" Your Catagary Name All Ready Exists");
} else {
    Database::iud("INSERT INTO `category` (`category_name`) VALUES ('".$cat."') ");
    echo("Success");
}
}

?>