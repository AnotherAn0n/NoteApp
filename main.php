<?php
    require_once("./funcs/funcs.misc.php");
    require_once("./funcs/funcs.acc.php");
    attemptLogin($_POST["login"], $_POST["password"]);
    session_start();
    $_SESSION["login"]= $_POST["login"];
    $_SESSION["password"]= $_POST["password"];

    // define("USERS", json_decode(file_get_contents("./data/users.json"), true));
    // define("ENCODED_DB", file_get_contents("./data/userNotes/$login.json"));
    // define("DECODED_DB", json_decode(ENCODED_DB, true));
    // define("DEFAULT_SMALL_TEMPLATE", file_get_contents("./templates/note.small.html"));
    // define("DEFAULT_FULL_TEMPLATE", file_get_contents("./templates/note.full.html"));
    require_once("./funcs/constants.php");
    require_once("./funcs/funcs.db.php");
    require_once("./funcs/funcs.extras.php");

    define('USER', USERS[$login]);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NoteApp</title>
    <link rel="shortcut icon" href="./img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./css/main.css">
</head>
<body>
    <div class="container">
        <header>
            <p class="greetings">
            <?php
                greetUser(USER["username"]);
            ?>
            </p>
        </header>
        <main>
            <div class="notes">
                <?php
                    echo generateAllNoteElements();
                ?>
            </div>
        </main>
    </div>
</body>
</html>