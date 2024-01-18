<?php
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'dbPhp';

echo 'hello';
$connection = mysqli_connect($host, $user, $password, $database);
if (isset($_POST['submit'])) {
    $realusername = $_POST['username'];
    $realpassword = $_POST['password'];
    $queryUser = "INSERT INTO tblLogin VALUES ('$realusername', '$realpassword')";
    $con = mysqli_query($connection, $queryUser);
    echo 'Nice job';
}
else {
    echo 'Not a nice job.';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
'    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="stles.css">
</head>
<body>
    <div class = 'parent' class = 'logForm'>
        <form action="/CRUD-Login/index.php" method = 'POST'>
            <input type="text" name="username">
            <input type="password" name="password">
            <input type="submit" value="submit" name = "submit">
        </form>
    </div>
</body>
</html>