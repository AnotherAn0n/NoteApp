<?php

function getTime() {
    $time = intval(date("H"));
    if($time < 6){
        $timeOfDay = "night";
    }elseif($time < 12){
        $timeOfDay = "morning";
    }elseif($time < 18){
        $timeOfDay = "afternoon";
    }elseif($time < 22){
        $timeOfDay = "evening";
    }else {
        $timeOfDay = "night";
    };
    return $timeOfDay;
};
function greetUser($username) {
    $greetingsDB = json_decode(file_get_contents("./data/greetings.json"), true);
    $useTimed = rand(0,1);
    if($useTimed){
        $timeOfDay = getTime();
        $greetings = $greetingsDB[$timeOfDay];    
    }else {
        $greetings = $greetingsDB["allTime"];
    };
    $randMax = count($greetings) - 1;
    $rand = rand(0, $randMax);
    $text = $greetings[$rand];
    $text = str_replace("<!--username-->", $username, $text);
    echo $text;
};