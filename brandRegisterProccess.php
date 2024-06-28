<?php

include "connection.php";

$brand = $_POST["b"];

if (empty ($brand)){
    echo("Please Enter Your Brand Name");
}else if (strlen ($brand) > 20) {
    echo ("Your Brand Name Shoud be less than 20 Characters");
}else {
    
    $rs = Database::search("SELECT * FROM `brand` WHERE `brand_name` = '".$brand."'");
    $num = $rs->num_rows;

    //echo($num);

if ($num > 0) {
    echo(" Your Brand Name All Ready Exists");
} else {
    Database::iud("INSERT INTO `brand` (`brand_name`) VALUES ('".$brand."') ");
    echo("Success");
}
}

?>