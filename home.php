<?php
    session_start();
    $username;
    if (isset($_SESSION['Username'])) {
    $username = $_SESSION['Username'];
    }
    else {
        $username = 'Login First';
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
        <h1><?php echo $username ?></h1>
        <a href="/CRUD-Login/samples/logout.php">Logout</a>    
</body>
</html>