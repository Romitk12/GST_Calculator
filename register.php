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

.registerbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

a {
  color: dodgerblue;
}

.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
</head>
<body>

<form action="register.php" method="post">
  <div class="container">
    <h1 style="text-align: center;">Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="name"><b>Name</b></label>
    <input type="text" placeholder="Enter Name" name="name" id="name" required>

    <label for="business"><b>Name of business</b></label>
    <input type="text" placeholder="Enter name of business" name="business" id="business" required>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" id="psw" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required>
    <hr>
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

    <button type="submit" name="register" class="registerbtn">Register</button>
  </div>
  
  <div class="container signin">
    <p>Already have an account? <a href="login.php">Sign in</a>.</p>
  </div>
</form>
<?php
include("db.php");
if(isset($_POST['register']))
{
        $name=$_POST['name'];
        $business=$_POST['business'];
        $email=$_POST['email'];
        $password=$_POST['psw'];
        $psw_repeat=$_POST['psw-repeat'];
        if(strlen($password)>=6 && strlen($password)<=60)
        {
            if(filter_var($email, FILTER_VALIDATE_EMAIL))
            {
                $sql = "SELECT email FROM gst WHERE email='$email'";
                $result = $conn->query($sql);
                if($result->num_rows==0)
                {
                    if($password==$psw_repeat)
                    {
                      $hash=password_hash($password, PASSWORD_DEFAULT);
                      $sql="insert into gst(name, business, email, password) values ('$name','$business','$email','$hash')";
                      $result = $conn->query($sql);
                      echo ("<script LANGUAGE='JavaScript'>window.alert('Registeration successful. Redirecting to Home page.');window.location.href='index1.php';</script>");
                    }
                    else
                    {
                      echo '<script>alert("Passwords dont match")</script>';
                    }
                }
                else
                {
                   echo '<script>alert("Email already registered")</script>';
                }                       
            }
            else
            {
              echo '<script>alert("Invalid email!")</script>';
            }
        }
        else
        {
          echo '<script>alert("Invalid password")</script>';
        } 
  }
?>
</body>
</html>