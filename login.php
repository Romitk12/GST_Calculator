<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
  
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: white;
}

* {
  box-sizing: border-box;
}


.container {
  padding: 16px;
  background-color: white;
  margin: auto;
  width: 40%;
  position: relative;top: 50px;
  border: groove;
}


input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

.loginbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.loginbtn:hover {
  opacity: 1;
}

a {
  color: dodgerblue;
}

.register {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
</head>
<body>

<form action="login.php" method="post">
  <div class="container">
    <h1 style="text-align: center;">Login</h1>
    <hr>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" id="psw" required>
    <hr>

    <button type="submit" class="loginbtn" name="login">Login</button>
  </div>
  
  <div class="container register">
    <p>Don't have an account? <a href="register.php">Register</a>.</p>
  </div>
</form>
<?php
include("db.php");
if(isset($_POST['login']))
{
        $email=$_POST['email'];
        $password=$_POST['psw'];
        $sql = "SELECT email FROM gst WHERE email='$email'";
        $result = $conn->query($sql);
        if($result->num_rows==1)
        {
          $sql = "SELECT password FROM gst WHERE email='$email'";
          $result = $conn->query($sql);
          $row = $result->fetch_assoc();
          if(password_verify($password, $row['password']))
          {
            session_start();
            $sql = "SELECT id FROM gst WHERE email='$email'";
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();
            $_SESSION['userid'] = $row['id'];
            $_SESSION['loggedin'] = true;
            header("Location:MyAccount1.php");
          }
          else
          {
            echo '<script>alert("Wrong Password")</script>';
          }
        }
        else
        {
          echo '<script>alert("Wrong Email or Email not registered")</script>';
        }
}
?>
</body>
</html>