<?php

session_start();
include "connection.php";

$un = $_POST["un"];
$pw = $_POST["pw"];
$rm = $_POST["rm"];

if (empty($un)) {
    echo("Please Enter Your username");
} else if (strlen($un) > 20){
    echo("Your Usrename Should be less than 20 characters ");
} else if (empty($pw)) {
    echo("Please Enter Your Password");
} else if (strlen($pw) < 5 || strlen($pw) > 45){
    echo("Your Password must contain 5 - 45  characters ");
}else {

    $rs = Database::search("SELECT * FROM `user` WHERE `username`='".$un."' AND `password`='".$pw."'");
    $num = $rs->num_rows;

    if($num == 1){

        echo ("success");
        $data = $rs->fetch_assoc();
        $_SESSION["u"] = $data;

        if($rm == "true"){

            setcookie("un",$un,time()+(60*60*24*365));
            setcookie("pw",$pw,time()+(60*60*24*365));

        }

    }else{
        echo ("Invalid Email Address or Password.");
    }

}

?>