<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" >

  <link rel="stylesheet" https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css>


  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<script type="text/javascript">
	function details(name,business,email)
	{
		document.getElementById("header").style.display = "";

		document.getElementById("logout").style.display = "";

		document.getElementById("name").innerHTML = name;
		document.getElementById("name1").style.display = "";

		document.getElementById("business").innerHTML = business;
		document.getElementById("business1").style.display = "";

		document.getElementById("email").innerHTML = email;
		document.getElementById("email1").style.display = "";

		document.getElementById("viewbill").style.display = "";
		document.getElementById("paybill").style.display = "";

	}
</script>
<style>
	body {

	  background-image: url("myaccount.jpg");
		background-size: 1500px 1500px;
	}
p{
	display: inline-block;
}
</style>
</head>
<body>
<div id="header" style="display: none;">
<div class="jumbotron text-center">
	<h1>MY ACCOUNT</h1>
</div>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
<a class="navbar-brand" href="index1.php">GST</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	<span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
	<ul class="navbar-nav mr-auto">
		<li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				Info
			</a>
			<div class="dropdown-menu" aria-labelledby="navbarDropdown">
				<a class="dropdown-item" href="ViewBill1.php">View Bills</a></p>
					</div>
		</li>
		<li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				Pay
			</a>
			<div class="dropdown-menu" aria-labelledby="navbarDropdown">
				<a class="dropdown-item" href="PayBill1.php">Pay Bill</a></p>
					</div>
		</li>

	</ul>
</div>
</nav>
 <div class="styled-table" style="padding-top: 50px;text-align:center;">
	<p id="name1" style="display: inline-block;">Name : </p>
	<p id="name" style="display: inline-block;"></p>
	<br>
	<p id="business1"style="display: inline-block;">Name of Business : </p>
	<p id="business" style=" display: inline-block;"></p>
	<br>
	<p id="email1" style="display: inline-block;">Email : </p>
	<p id="email" style="display: inline-block;"></p>

</div>
<form action="MyAccount1.php" method="post">
	<button type="submit" id="logout" name="logout" class="btn btn-primary" style="display: none; margin-left: 700px;">Logout</button>
</form>
</div>
</body>
</html>
<?php
include("db.php");
session_start();
if($_SESSION["loggedin"]==true)
{
	$user=$_SESSION["userid"];
	$sql = "SELECT * FROM gst WHERE id='$user' ";
	$result = $conn->query($sql);
	$row = $result->fetch_assoc();
	$name = $row['name'];
	$business = $row['business'];
	$email = $row['email'];
	echo "<script>details('$name', '$business', '$email');</script>";
}
else
{
	echo "User not logged in";
}
if(isset($_POST['logout']))
{
	session_destroy();
	header("Location:index1.php");
}
?>