<?php

function generateAllNoteElements($tmp = DEFAULT_SMALL_TEMPLATE) {
    $text = "";
    foreach (DECODED_DB as $noteID => $noteArr) {
        $text .= generateNoteElement($noteID, $tmp);
    };
    return $text;
};
function generateNoteElement($noteID = 0, $tmp = DEFAULT_SMALL_TEMPLATE) {
    $noteArr = DECODED_DB[$noteID];
    $noteArr["id"] = $noteID;
    $text = fillTemplate($tmp, $noteArr);
    return $text;
};

function sortHandler($sortType) {
    switch($sortType){
        case "Alphabetical":

            break;
        case "Newest":

            break;
        case "Oldest":

            break;
        default:
            break;
    }
}