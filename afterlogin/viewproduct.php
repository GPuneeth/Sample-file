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
<style>
.column {
  float: left;
  width: 33.33%;
  padding: 5px;
}
.row::after {
  content: "";
  clear: both;
  display: table;
}
*{
box-sizing: border-box;
}
</style>

<div class="row" style="padding-left:70px;">
<?php
// error_reporting(1);
  include('config.php');
  $res = mysqli_query($con,'SELECT * FROM aproduct');
  if(mysqlI_num_rows($res) > 0)
  {
    while($row = mysqli_fetch_array($res)){
      ?>
<div class="column">
<img src="img/<?php echo $row['image'];?>" style="width:250px;height:200px;padding-left:50px">
<br><br>
<div class="" style="padding-left:80px;">
<!-- <td>
Serial No: <?php echo $row["pname"]; ?>
</td> -->
<br>
<td>
Product name: <?php echo $row["pname"];?>
</td>
<br>
<td>
Product price:<?php echo $row["price"];?>
</td>
<br>
<td>
Messages:<?php echo $row["message"];?>
</td>
<br>
<button type="submit" >Delete</button>
</div>
</div>

</div>
</div>

      <?php
    }
  }

?>


</body>
</html>