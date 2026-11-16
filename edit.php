<?php
    session_start();
    $noteID = $_GET["noteID"];
    require_once("./funcs/funcs.misc.php");
    require_once("./funcs/constants.php");
    require_once("./funcs/funcs.db.php");

?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NoteApp: Editing Note</title>
    <link rel="shortcut icon" href="./img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./css/main.css">
</head>
<body>
    <?php
        echo generateNoteElement($noteID, DEFAULT_FULL_TEMPLATE);
    ?>
</body>
</html>