<?php

$host = 'localhost';
$user = 'root';
$password= '';
$database = 'dbPhp';

echo 'hello';
$connection = mysqli_connect($host, $user, $password, $database);

if (!$connection) {
    echo 'hello world';
 }

 if (isset($_GET['submit'])) {
    $username = $_GET['updatedUsername'];
    $passwordd = $_GET['updatedPassword'];
    $hashedPassword = password_hash($passwordd, PASSWORD_DEFAULT);
    if (!empty($username) && !empty($passwordd)) {
        $currId = $_GET['id'];
        $sql = "Update tblLogin Set Username = '$username', Password = '$hashedPassword' WHERE Id = '$currId'";
        if(mysqli_query($connection, $sql)) {
            echo 'Id: '. $currId. 'is Updated!';
        }
        else {
            echo 'Error: ' .mysqli_error($connection);
        }

    }
    else {
        echo 'Please insert so that we can update as you request!';
    }
 }


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
    <div class = 'parent' >
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
            <input type="text" name="updatedUsername" placeholder = "Enter Updated Username">
            <input type="password" name="updatedPassword" placeholder = "Enter Updated Password">
            <input type="hidden" name="id" value = "<?php  echo $_GET['id']; ?>" placeholder = "Enter Updated Password">
            <input type="submit" value="submit" name = "submit">
        </form>
    </div>
</body>
</html>