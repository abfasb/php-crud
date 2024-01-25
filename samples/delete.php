<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .login-form {
  width: 300px;
  margin: 0 auto;
  padding: 20px;
  border: 1px solid #ccc;
  border-radius: 5px;
  background-color: #f9f9f9;
}

.login-form h2 {
  text-align: center;
  margin-bottom: 20px;
  text-transform: uppercase;
}

.login-form .form-group {
  margin-bottom: 10px;
}

.login-form label {
  display: block;
  margin-bottom: 5px;
}

.login-form input[type="text"],
.login-form input[type="password"] {
  width: 100%;
  padding: 8px;
  border: 1px solid #ccc;
  border-radius: 5px;
}

.login-form button[type="submit"] {
  width: 100%;
  padding: 8px;
  background-color: #4CAF50;
  color: white;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

.login-form .form-links {
  margin-top: 10px;
}

.login-form .form-links a {
  display: block;
  text-align: center;
  text-decoration: none;
  color: #4CAF50;
  margin-bottom: 5px;
}
</style>
<body>
    
<div class="login-form">
  <h2>LOG IN</h2>
  <form>
    <div class="form-group">
      <label for="username">Log-in</label>
      <input type="text" id="username" name="username">
    </div>
    <div class="form-group">
      <label for="password">Password</label>
      <input type="password" id="password" name="password">
    </div>
    <button type="submit">Log in</button>
    <div class="form-links">
      <a href="#" id="forgot-password">Forgot password?</a>
      <a href="#" id="create-account">Click here to create an account</a>
    </div>
  </form>
</div>

</body>
</html>