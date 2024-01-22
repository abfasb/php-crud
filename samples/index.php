<?php
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'dbPhp';

echo 'hello';
$connection = mysqli_connect($host, $user, $password, $database);

if (!$connection) {
   echo 'hello world';
}
if (isset($_POST['submit'])) {
    $realusername = $_POST['username'];
    $realpassword = $_POST['password'];
    $queryUser = "INSERT INTO tblLogin (Username, Password) VALUES ('$realusername', '$realpassword')";
    $con = mysqli_query($connection, $queryUser);
    echo 'Nice job';
}
else {
    echo 'Not a nice job.';
}

$queryUser = "SELECT * FROM tblLogin";
$getRow = mysqli_query($connection, $queryUser);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class='parent'>
        <form action="/CRUD-Login/index.php" method="POST">
            <input type="text" name="username" placeholder="Enter text">
            <input type="password" name="password" placeholder="Enter Password">
            <input type="submit" value="submit" name="submit">
            <a href="/CRUD-Login/update.php">Update here.</a>
        </form>
    </div>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Password</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($results = mysqli_fetch_array($getRow)) {
                echo '<tr>';
                echo '<td>' . $results['Id'] . '</td>';
                echo '<td>' . $results['Username'] . '</td>';
                echo '<td>' . $results['Password'] . '</td>';
                echo '<td class = "flex">
                <form action="#">
                    <input type="submit" value="update" name = "update">
                 </form>
                 <form action="#">
                 <input type="hidden" value="delete" name = "delete">
                    <input type="submit" value="delete" name = "delete">
                 </form>
                </td>'; // You can add action buttons or links here
                echo '</tr>';
            }
            ?>
        </tbody>
    </table>
</body>
</html>



