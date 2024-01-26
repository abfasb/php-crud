<?php
    require './samples/database.php';
    session_start();
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'dbPhp';
    $connection = mysqli_connect($host, $user, $password, $database);
    if (isset($_POST['submit'])) {
        $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
        $password = $_POST['password'];
        
        $queryUser = "Select * FROM tblLogin WHERE Username = '$username'";
        $queried = mysqli_query($connection, $queryUser);
        if($queried && mysqli_num_rows($queried) > 0) {
            $result = mysqli_fetch_assoc($queried);

            if(password_verify($password, $result['Password'])) {
                $_SESSION['Username'] = $username;
                header("Location: /CRUD-Login/home.php");
            }
            else {
                echo 'Wrong password';
            }
        }
        else {
            echo 'Wrong Username, please try again later.';
        }
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form {
            display: flex;
            flex-direction: column;
            width: 300px;
        }
        .parent {
            width:100%;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 80vh;
        }
        form input[type= "text"], form input[type= "password"] {
            padding: 8px;
            font-size: 16px;
        }
        form input[type= "text"] {
            margin-bottom: 18px;
        }
        form input[type= "password"] {
            margin-bottom: 40px;
        }
        form input[type= "submit"] {
            padding: 10px 50px;
            background-color: green;
            color: white;
            opacity: 0.8;
            transition: 0.3s ease-in-out;
            border-radius: 3px;
            cursor: pointer;
        }
        form input[type= "submit"]:hover {
            opacity 1;
            transition: 0.3s ease-in-out;
        }
        body {
            height:100vh;
            background: rgb(2,0,36);
            background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,59,121,1) 1%, rgba(8,21,129,1) 52%, rgba(0,212,255,1) 100%);
        }
        label {
            margin-bottom: 5px;
        }
        form p{
            margin-top: 30px;
            text-align: center;
        }
        .child {
            background-color: white;
            border-radius: 8px;
            -webkit-box-shadow: 10px 10px 66px -12px rgba(0,0,0,0.75);
            -moz-box-shadow: 10px 10px 66px -12px rgba(0,0,0,0.75);
            box-shadow: 10px 10px 66px -12px rgba(0,0,0,0.75);
            padding: 80px 50px;
        }
        form label {
            font-weight: bolder;
        }
        form label:hover {
            color: green;
            transtion: 0.3s ease-in-out;
        }
    </style>
</head>
<body>
    <div class = "parent">
        <div class = "child">
            <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>" method = "POST">
            <label for="Username">Username</label>
            <input type="text" name="username" id="">
            <label for="Password">Password</label>
            <input type="password" name="password" id="">
            <input type="submit" value="Submit" name = "submit">
            <p>Don't have an account <a href="./registration.php">Click here</a></p>
    </form>
        </div>
    </div>
</body>
</html>