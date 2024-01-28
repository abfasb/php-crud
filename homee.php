<?php
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'dbPhp';
$connection = mysqli_connect($host, $user, $password, $database);
if (!$connection) {
  die("Connection failed: " . mysqli_connect_error());
}

    session_start();
    $username;
    if (isset($_SESSION['Username'])) {
    $username = $_SESSION['Username'];
    }
    else {
        $username = 'Login First';
    }
    $queryuser = "Select * FROM tblLogin";
    $queried = mysqli_query($connection, $queryuser);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<style>
  td {
    text-align: center;
  }
  th {
    text-align: center;
  }
  .parent {
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: center;
  }
  .parent form {
    margin: 0px 20px;
  }
  .parent form input[type= "submit"]{
    padding: 0px 15px;
  }
    #deleteId {
    background-color: red;
    color: white;
    border: none;
  }
  #updateId {
    background-color: green;
    color: white;
    border: none;
  }
</style>
<body>
        <h1><?php echo $username ?></h1>
        <a href="/CRUD-Login/samples/logout.php">Logout</a>   

        <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Username</th>
      <th scope="col">Password</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
      <?php
          while($result = mysqli_fetch_assoc($queried)) {
           echo '<tr>';
           echo '<th scope="row">'. $result['Id'] .'</th>';
           echo '<td >'. $result['Username'] .'</td>';
           echo '<td >'. $result['Password'] .'</td>';
           echo '<td>
                <div class= "parent">
                <form action="/CRUD-Login/samples/update.php">
                <input type="hidden" value="' .$result['Id']. '" name = "id">
                  <input type="submit" value="Update" name = "update" id = "updateId">
                </form>
                <form action="/CRUD-Login/samples/real_delete.php" method = "POST">
                <input type="hidden" value="' .$result['Id']. '" name = "id">
                  <input type="submit" value="Delete" name = "delete" id = "deleteId">
                </form>
                </div>
              </td> ';
           echo '</tr>';
          }
      
      ?>
  </tbody>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>