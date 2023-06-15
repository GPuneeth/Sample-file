<html>
<head>
<style>
body{
background-image:url("img.jpeg");
background-repeat:no-repeat;
background-size: cover;
}

</style>
</head>
<body>
<nav style="background-color:yellow;">
<img src="bee.png" style="width:90px;height:100px">
<ul align="center">
<a href="login.php">Login</a>
&nbsp;&nbsp;&nbsp;
<a href="registration.php">Registration</a>
</ul>
</nav>
<form method="post" action="#">
<ul align="center">
<label>UserName</label>
<br>
<input type="email" name="email"><br><br>
<label>Password</label>
<br>
<input type="Password" name="password"><br><br>
<button type="submit" name="login">submit</button>

</form>
<?php
if(isset($_POST['login']))
{
	error_reporting(1);
	include("config.php");
	
	$email=$_POST['email'];
	$password=$_POST['password'];
	
	$sql = "select * from register where email='".$email."' and password='".$password."'";
	$result = mysqli_query($con,$sql);
	$count=mysqlI_num_rows($result);


	if($count>0)
	{
		session_start();
		$_SESSION['user']=$email;
		$uid=$_SESSION['user'];
		echo "<script>
				alert('Login Successful $id');
			</script>";
		echo "<script> location.href='afterlogin/home1.php'; </script>";
	}
	else
	{
		
		echo "<script>
				alert('Invalid Email or Password');
			</script>";
	}
}

?>

</body>

</html>
