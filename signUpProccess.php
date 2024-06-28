<?php

include "connection.php";

$fname = $_POST["f"];
$lname = $_POST["l"];
$uname = $_POST["u"];
$email = $_POST["e"];
$password = $_POST["p"];
$mobile = $_POST["m"];




if (empty($fname)) {
    echo ("Please Enter Your First Name");
    } else if (strlen($fname) > 20){
        echo(" Your First Name Should be less than 20 characters ");
    } else if (empty($lname)) {
    echo(" Please Enter Your last Name ");
    } else if (strlen($lname) > 20){
        echo("Your First Name Should be less than 20 characters ");
    } else if (empty($email)) {
        echo ("Please Enter Your Email");
    } else if (strlen($email) > 100) {
        echo ("Your email Should be less than 100 characters ");
    } else if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
        echo("Invalid Youe Email");
    } else if (empty($mobile)) {
        echo("Please Enter Your Mobile Number");
    } else if(strlen($mobile) != 10) {
        echo("Your Mobile Number must contain 10 characters ");
    } else if (!preg_match("/07[0,1,2,4,5,6,7,8]{1}[0-9]{7}/",$mobile)){
        echo("Your Mobile Number Invaleid");   
    } else if (empty($uname)) {
        echo("Please Enter Your username");
    } else if (strlen($uname) > 20){
        echo("Your Usrename Should be less than 20 characters ");
    } else if (empty($password)) {
        echo("Please Enter Your Password");
    } else if (strlen($password) < 5 || strlen($password) > 20){
        echo("Your Password must contain 5 - 45  characters ");
    } else {
       $rs = Database::search("SELECT * FROM `user` WHERE `email` = '".$email."' OR  `username` = '".$uname."' "); 
        $num = $rs->num_rows;

        if ($num > 0){
            echo("you email or username or mobile number Alredy exists");

        }else{
            Database::iud("INSERT INTO `user` (`fname`,`lname`,`username`,`email`,`password`,`mobile`,`user_type_id`)
            VALUES ('".$fname."','".$lname."','".$uname."','".$email."','".$password."','".$mobile."','2')");

            echo("Success");
        }
    }

    

?>