<?php

$host = 'localhost';
$user = 'root';
$password = '';
$database = 'dbPhp';

echo 'hello';
$connection = mysqli_connect($host, $user, $password, $database);
if(isset($_POST['submit'])) {
    $updatedUser = $_POST['updatedUsername'];
    $updatedPassword = $_POST['updatedPassword'];
    $updatedId = $_POST['id'];
    $query = "Update tblLogin Set Username = '$updatedUser' AND Password = '$updatedPassword' WHERE Id = '$updatedId' ";
}

if (!$connection) {
   echo 'hello world';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
'    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class = 'parent' >
        <form action="/CRUD-Login/update.php" method = "POST">
            <input type="text" name="updateUsername" placeholder = "Enter text">
            <input type="password" name="updatePassword" placeholder = "Enter Password">
            <input type="submit" value="submit" name = "submit">
            <input type="submit" value="id" name = "id">
            <a href="/CRUD-Login/index.php">Go back home.</a>
        </form>
    </div>
</body>
</html>