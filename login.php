login php
========
<?php

$user = $_REQUEST["username"];
$pass = $_REQUEST["password"];

if(isset($_REQUEST["submit"])) {
    if($user=="me" && $pass=="re") {
       header("Location: welcome.html");
    } else {
        echo "Incorrect Login";
    }
}

?>
