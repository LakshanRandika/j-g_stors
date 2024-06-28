<?php
session_start();
include "connection.php";

$un = $_POST["u"];
$pw = $_POST["p"];

if (empty($un)) {
    echo ("Please Enter Your UserName");
} else if (empty($pw)) {
    echo ("please Enter Your Password");
} else {
    $rs = Database::search("SELECT * FROM `user` WHERE `username` = '" . $un . "' AND `password` = '" . $pw . "' ");
    $num = $rs->num_rows;

    if ($num == 1) {

        $d = $rs->fetch_assoc();

        if ($d["user_type_id"] == 1) {
            echo ("Success");

            $_SESSION["a"] = $d;
        } else {
            echo ("You Dont have an Admin Account ");
        }

    } else {
        echo ("Invalid Username OR Password");
    }
}
