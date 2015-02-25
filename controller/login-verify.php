<?php

require_once(__DIR__ . "/../model/config.php");

function authenticateUser() {
    if (!isset($_SESSION["authenticted"])) {
        return false;
    } else {
        if($_SESSION["authenticated"] != true){
            return false;
        }
        else{
            return true;
        }
    }
}
