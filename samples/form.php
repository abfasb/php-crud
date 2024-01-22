<?php
session_start();
    echo 'hello world';
if (isset($_POST['submit'])) {
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
    $password = $_POST['password'];

    if ($username == 'matt' && $password == '12345') {
        $_SESSION['name'] = $username;
        header('Location: /CRUD-Login/sessions.php');
    }
    else {
        echo 'Wrong username and password';
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/CRUD-Login/form.php" method = "POST">
        <div>
            <label for="username">Username:</label>
            <input type="text" name="username" id="">
            <label for="Password">Password:</label>
            <input type="password" name="password" id="">
        </div>
        <div>
            <input type="submit" value="Submit" name = "submit">
        </div>
    </form>
</body>
</html>