<?php
    require './samples/database.php';
    
    if(isset($_POST['submit'])) {
        $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
        $password = $_POST['password'];
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $confirmPassword = $_POST['confirmpassword'];
        if(empty($username) || empty($password) || empty($confirmPassword)) {
            echo 'Enter something';
        }
        else if ($password != $confirmPassword) {
            echo 'Your password should match';
        }
        else {
            $queryUser = "INSERT INTO tblLogin (Username, Password) VALUES('$username','$hashedPassword')";
            $queried = mysqli_query($connection, $queryUser);
            echo 'success!';
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
            margin-bottom: 18px;
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
            padding: 60px 50px;
        }
        form label {
            font-weight: bolder;
        }
        form label:hover {
            color: green;
            transtion: 0.3s ease-in-out;
        }
        h2 {
            position: absolute;
            top: 65;
            left: 276;
            color: green;
        }
    </style>
</head>
<body>
    <div class = "parent">
        <div class = "child">
            <h2>Registration Form</h2>
            <form action="#" method = "POST">
            <label for="Username">Username</label>
            <input type="text" name="username" id="">
            <label for="Password">Password</label>
            <input type="password" name="password" id="">
            <label for="Confirm Password">Confirm Password</label>
            <input type="password" name="confirmpassword" id="">
            <input type="submit" value="Submit" name = "submit">
            <p>Don't have an account <a href="./registration.php">Click here</a></p>
    </form>
        </div>
    </div>
</body>
</html>