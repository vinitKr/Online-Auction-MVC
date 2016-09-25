<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="../view/css/bootstrap.min.css" rel="stylesheet">
<script src="../view/js/jquery.min.js"></script>
<script src="../view/js/bootstrap.min.js"></script>
<style>
	table, th, td {

		font-family: Georgia, 'Times New Roman', Times, serif;
		font-style:italic;
		border: 2px solid black;
		padding: 5px;
	}
		</style>
</head>

<body>
<div align="center">
  <a href="index.php"><h1 class="style2" style="font-family:Georgia, 'Times New Roman', Times, serif">Administrator</h1></a>
  <p>&nbsp;</p>
  <form id="form1" name="form1" method="post" action="">
  	
    <table class="table table-striped table-bordered table-hover table-condensed" style="width: 50%">
      <tr>
        <th><div>Delete Product: </div></th>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <th>
          <input type="text" class="form-control" name="pid" placeholder="Enter product ID" />
        </th>
        <td><input class="form-control" name="dltpr" type="submit" id="dltpr" value="Delete Product" /></td>
      </tr>
      <tr>
        <th><div>Delete User: </div></th>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <th><div>
          <input type="text" class="form-control" name="uid" placeholder="Enter user ID" />
        </div></th>
        <td><input class="form-control" name="dltuser" type="submit" id="dltuser" value="Delete User" /></td>
      </tr>
      <tr>
        <th><div>Bidding time for Product </div></th>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <th><div>
          <label>Product ID:&nbsp; &nbsp; 
          <input type="text" class="form-control" name="prid" placeholder="Enter product ID" style="width: 215px" />
          </label>
          <label>Date &amp; Time:
            <input type="text" class="form-control" name="bidtime" placeholder="YYYY-MM-DD hh:mm:ss" style="width: 305px" />
           </label>
          
        </div></th>
        <td><input class="form-control" name="btime" type="submit" id="btime" value="Update Time" /></td>
      </tr>
    </table>
  </form>
  <hr>
</div>
<div style="width: 100%">
<?php

$conn = new mysqli("localhost", "root", "", "nilamee");
if ($conn -> connect_error) {
die("Connection failed:" . $conn -> connect_error);
}

//------------------delete product----------------------

if (isset($_POST['dltpr'])) {
	echo '<div style="width:49%; float:left;"><h2>Product Table</h2>';
	$id=$_REQUEST['pid'];
	$sql = "DELETE FROM addproducts WHERE pid=$id";
	$conn -> query($sql);
	
	$sql = "SELECT pid,title,price,btime FROM addproducts ORDER BY pid";
	$result = $conn -> query($sql);
	if ($result -> num_rows > 0) {
	echo '
	<table class="table table-striped table-bordered table-hover table-condensed" align="center" style="width:50%">
	<tr class="info">
	<th>ID</th>
	<th>Title</th>
	<th>Price</th>
	<th>Bidtime</th>
	</tr>';

	while ($row = $result -> fetch_assoc()) {
	echo "
	<tr>
		<td>" . $row["pid"] . "</td><td>" . $row["title"] . "</td><td>" . $row["price"] . "</td><td>" . $row["btime"] . "</td>
	</tr>";
	}

	echo "</table></div>";
	} else {
	echo "0 results";
	}
}

//--------------------delete user----------------------

elseif (isset($_POST['dltuser'])) {
	echo '<div style="width=49%; float:left;"><h2>User Table</h2>';
	$id=$_REQUEST['uid'];
	$sql = "DELETE FROM details WHERE uid=$id";
	$result = $conn -> query($sql);
	
	$sql = "SELECT uid,Email,password FROM details ORDER BY uid";
	$result = $conn -> query($sql);
	if ($result -> num_rows > 0) {
	echo '
	<table class="table table-striped table-bordered table-hover table-condensed" align="center" style="width:50%">
	<tr class="info">
	<th>ID</th>
	<th>Username</th>
	<th>Password</th>	
	</tr>';

	while ($row = $result -> fetch_assoc()) {
	echo "
	<tr>
		<td>" . $row["uid"] . "</td><td>" . $row["Email"] . "</td><td>" . $row["password"] . "</td>
	</tr>";
	}

	echo "</table></div>";
	} else {
	echo "0 results";
	}
	
}

//-----------------------update bid time------------------------

elseif (isset($_POST['btime' ])) {
	echo '<div style="width:49%; float:left;"><h2>Product Table</h2>';
	$id=$_REQUEST['prid'];
	$btime=$_REQUEST['bidtime'];	
	
	$sql = "UPDATE addproducts SET btime='$btime' WHERE pid=$id";
	$result = $conn -> query($sql);
	
	$sql = "SELECT pid,title,price,btime FROM addproducts ORDER BY pid";
	$result = $conn -> query($sql);
	if ($result -> num_rows > 0) {
	echo '
	<table class="table table-striped table-bordered table-hover table-condensed" align="center" style="width:50%">
	<tr class="info">
	<th>ID</th>
	<th>Title</th>
	<th>Price</th>
	<th>Bidtime</th>
	</tr>';

	while ($row = $result -> fetch_assoc()) {
	echo "
	<tr>
		<td>" . $row["pid"] . "</td><td>" . $row["title"] . "</td><td>" . $row["price"] . "</td><td>" . $row["btime"] . "</td>
	</tr>";
	}

	echo "</table></div>";
	} else {
	echo "0 results";
	}
	}
	
	
else {
	
	//--------------------------product---------------------------
	
	echo '<div style="width:49%; float:left;"><h2>Product Table</h2>';
	$sql = "SELECT pid,title,price,btime FROM addproducts ORDER BY pid";
	$result = $conn -> query($sql);

	if ($result -> num_rows > 0) {
	echo '
	<table class="table table-striped table-bordered table-hover table-condensed" align="center" style="width:50%">
	<tr class="info">
	<th>ID</th>
	<th>Title</th>
	<th>Price</th>
	<th>Bidtime</th>
	</tr>';

	while ($row = $result -> fetch_assoc()) {
	echo "
	<tr>
		<td>" . $row["pid"] . "</td><td>" . $row["title"] . "</td><td>" . $row["price"] . "</td><td>" . $row["btime"] . "</td>
	</tr>";
	}

	echo "</table></div>";
	} else {
	echo "0 results";
	}
	
	//------------------user----------------------------
	
	echo '<div style="width:49%; float:left;"><h2>User Table</h2>';
	$sql = "SELECT uid,Email,password FROM details ORDER BY uid";
	$result = $conn -> query($sql);

	if ($result -> num_rows > 0) {
	echo '
	<table class="table table-striped table-bordered table-hover table-condensed" align="center" style="width:50%">
	<tr class="info">
	<th>ID</th>
	<th>Username</th>
	<th>Password</th>
	</tr>';

	while ($row = $result -> fetch_assoc()) {
	echo "
	<tr>
		<td>" . $row["uid"] . "</td><td>" . $row["Email"] . "</td><td>" . $row["password"] . "</td>
	</tr>";
	}

	echo "</table></div>";
	} else {
	echo "0 results";
	}
	}
?>
</div>
</body>
</html>