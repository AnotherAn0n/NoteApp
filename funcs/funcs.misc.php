<?php

function fillTemplate($tmp, $toFill) {
    $text = $tmp;
    foreach ($toFill as $key => $value) {
        $text = str_replace("<!--$key-->", $value, $text);
    };
    return $text;
}