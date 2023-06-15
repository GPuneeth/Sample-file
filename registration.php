<html>
<head>
<style>
body {
background-image:url("img.jpeg");
background-repeat:no-repeat;
background-size: cover;
}
</style>



<nav style="background-color:yellow;">
<img src="bee.png" style="width:90px;height:100px;padding-left:50px">

<ul align="center">
<a href="login.php">Login</a>
&nbsp;&nbsp;&nbsp;
<a href="registration.php">Registration</a>
</ul></nav>
</head>

<body>

<form action="#" method="post">

<ul style="text-align:center;">
<label>Name</label>
<br>
<input type="text" name="name"><br><br>
<label>Phone</label>
<br>
<input type="tel" name="phone"><br><br>
<label>Email</label>

<br>
<input type="email" name="email"><br><br>
<label>Password</label>
<br>
<input type="password" name="password"><br><br>
<br>
<label>Gender</label>
<br>
<select  name="gender">
<option value="male">male</option>
<option value="female">female</option>
</select>
<br>
<br>
<button type="submit" name="register">submit</button>
</ul>

</form>
<?php
if(isset($_POST['register']))
{
	
	error_reporting(1);
	include("config.php");
	
	$email=$_POST['email'];

	$sql = "select * from register where email='$email'";
	$result = mysqli_query($con,$sql);
	$count=mysqlI_num_rows($result);

	if($count>0)
	{
		echo "<script>
				alert('There is an existing account associated with this email.');
			</script>";
			echo "<script> location.href='registration.php'; </script>";
	}
	else
	{
		
		$name=$_POST['name'];
		$phone=$_POST['phone'];
		
		$email=$_POST['email'];
		
		$password=$_POST['password'];
		$gender=$_POST['gender'];
		

		$query = "INSERT INTO register(name,phone,email,password,gender) VALUES('".$name."','".$phone."','".$email."','".$password."','".$gender."')";
           
            mysqli_query($con,$query) or die(mysqli_error($con));
		
		
		echo "<script>
				alert('Registeration Completed, Please Login.');
			</script>";
			echo "<script> location.href='login.php'; </script>";

	}
}
?>



</body>

</html>
