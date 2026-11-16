<?php

    $login = $_SESSION['login'];
    define("USERS", json_decode(file_get_contents("./data/users.json"), true));
    define("ENCODED_DB", file_get_contents("./data/userNotes/$login.json"));
    define("DECODED_DB", json_decode(ENCODED_DB, true));
    define("DEFAULT_SMALL_TEMPLATE", file_get_contents("./templates/note.small.html"));
    define("DEFAULT_FULL_TEMPLATE", file_get_contents("./templates/note.full.html"));
    define("DISABLED_FULL_TEMPLATE", file_get_contents("./templates/note.full.disabled.html"));