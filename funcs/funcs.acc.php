<?php

function attemptLogin($login, $password) {
    if(!checkLogin($login, $password)){
        header("Location: ./login.php");
        exit();
    }
}
function checkLogin($login, $password) {
    $users = json_decode(file_get_contents("./data/users.json"), true);
    $isValid = false;
    if(isset($users[$login])){
        if($users[$login]["password"] === $password){
            $isValid = true;
        };
    };
    return $isValid;
}
