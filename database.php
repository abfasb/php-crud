<?php
require('./index.php');
$host = 'localhost';
$user = 'root';
$pasword = '';
$database = 'dbPhp';

echo 'hello';
$connection = mysqli_connect($host, $user, $pasword, $database);
if (isset($_POST['submit'])) {
    $realusername = $_POST['username'];
    $realpassword = $_POST['password'];
    $queryUser = "INSERT INTO tblLogin VALUES ('$realusername', '$realpassword')";
    $con = mysqli_query($queryUser, $connection);
    echo 'Nice job';
}
else {
    echo 'Not a nice job.'
}


?>