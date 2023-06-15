<html>
<head>
<style>
body{
background-image:url("img.jpeg");
/* background-repeat:no-repeat; */
background-size: cover;
}
</style>
</head>
<body>
<nav style="background-color:yellow;">
<img src="car.jpeg" style="width:90px;height:100px;padding-left:50px">
<ul align="center">
<a href="home1.php">home</a>
&nbsp;&nbsp;&nbsp;
<a href="addproduct.php">add product</a>
&nbsp;&nbsp;&nbsp;
<a href="viewproduct.php">view product</a>
&nbsp;&nbsp;&nbsp;
<a href="viewtable.php">view table</a>
&nbsp;&nbsp;&nbsp;
<a href="logout.php">logout</a>
</ul>
</nav>
<form action="#" method="post" align="center" enctype='multipart/form-data'>
<ul align="center">

<label>product Name</label>
<br>
<input type="text" name="pname"><br><br>
<label>product image</label>
<br><br>
<input type="file" name="image"><br><br>
<label>product price</label>
<br>
<input type="number" name="price"><br><br>
<label>messege</label>
<br>
<input type="text" name="message"><br><br>
<br>
<button type="submit">submit</button>
</ul>
</form>

<?php		
      			 						 
if(isset($_POST['submit']))
{
	error_reporting(1);
	include("config.php");
	    $pname=$_POST['pname'];
      $image=$_POST['image'];
		$price=$_POST['price'];
		$message=$_POST['message'];
		
		$fname = $_FILES["image"]["name"];
		$filename = $name.$fname;
		$tempname = $_FILES["image"]["tmp_name"];   
        $folder = "img/".$filename;
		
        if (move_uploaded_file($tempname, $folder))  
		{
			$query ="INSERT INTO aproduct(image,pname,price,message) VALUES('".$filename."','".$pname."','".$price."','".$message."')";
            mysqli_query($con, $query);
			echo "<script>
					alert(' uploaded Successfully');
				</script>";
			echo "<script> location.href='addproduct.php'; </script>";
        }else{
            echo "<script>
					alert('Upload Failed,IMAGE should be less than 2GB');
				</script>";
		}
}
?>

</body>
</html>

