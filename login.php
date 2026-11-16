<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NoteApp: Log In</title>
    <link rel="shortcut icon" href="./img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./css/main.css">
</head>
<body>
    <div class="container">
        <header>
            <h1>Log in to NoteApp</h1>
        </header>
        <form action="./main.php" class="form-login" method="POST">
            <input class="form-login__input input" type="text" name="login" placeholder="Login">
            <input class="form-login__input input" type="password" name="password" placeholder="Password">
            <input class="form-login__input input" type="submit" value="Log in">
        </form>
    </div>
</body>
</html>