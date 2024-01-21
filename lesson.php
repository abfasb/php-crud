<?php
$host = 'localhost';
$user = 'root';
$pasword = '';
$database = 'dbPhp';


$connection = mysqli_connect($host, $user, $pasword, $database);
$query = "Select * FROM tblLogin";
$callQuery = mysqli_query($connection, $query);
if(isset($_POST['submit'])) {
$name = $_POST['name'];
echo $name;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            width: 100%;
            border: 1px solid red;
        }
        th {
            text-align: center;

        }
        th td {
            text-align: center;
            width: 100%;
            font-weight:bolder;
        }
        tbody {
            width: 100%;
            text-align: center;
            padding-top: 10px;
        }
    </style>
</head>
<body>
    <form action="#" method="post">
        <input type="text" name="name" id="">
        <input type="submit" value="submit" name = "submit">
    </form>
<table>
    <th>
        <td>ID</td>
        <td>Username</td>
        <td>Password</td>
    </th>
    <tbody>
        <?php
        while($result = mysqli_fetch_array($callQuery)) {
            echo '<tr>';
            echo '<td>'.$result['Id']. '<td/>';
            echo '<td>'.$result['Id']. '<td/>';
            echo '<td>'.$result['Username']. '<td/>';
            echo '<td>'.$result['Password']. '<td/>';
            echo '</tr>';

}
        ?>
    </tbody>
</table>
    

</body>
</html>
