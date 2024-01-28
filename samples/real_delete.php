<?php
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'dbPhp';
    $connection = mysqli_connect($host, $user, $password, $database);

    if (isset($_POST['delete'])) {
        if (isset($_POST['id'])) {
            $idToDelete = $_POST['id'];

            $sql = "DELETE FROM tblLogin WHERE Id = '$idToDelete'";
            if (mysqli_query($connection, $sql)) {
                sleep(1);
                header("Location: /CRUD-Login/homee.php");
                echo '<script> alert("Deleted Successfully!"); </script>;';
            }
            else {
                echo 'Error you dipshit';
            }
        }
    }else {
        echo 'Error you dipshit';
    }

?>