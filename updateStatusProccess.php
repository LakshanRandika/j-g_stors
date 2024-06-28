<?php

include "connection.php";

$uid = $_POST["u"];

//echo($uid);

if (empty($uid)) {
    echo ("pleas Enter Usre Id");
} else {

    $rs = Database::search("SELECT * FROM `user` WHERE `user_id` = '" . $uid . "' AND `user_type_id` = '2' ");
    $num = $rs->num_rows;
    //echo($num);

    if ($num == 1) {
        $d = $rs->fetch_assoc();

        if ($d["status"] == 1) {
            Database::iud("UPDATE `user` set `status` =  '0' WHERE `user_id` = '".$uid."'");
            echo ("deactive");
        }

        if ($d["status"] == 0) {
            Database::iud("UPDATE `user` set `status` =  '1' WHERE `user_id` = '".$uid."'");
            echo ("active");
        }
    } else{
        echo("Invelid User Id");
    }
}
