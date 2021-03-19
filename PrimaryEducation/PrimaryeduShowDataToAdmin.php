<!DOCTYPE html>
<html>
<head>
	<title>DisplayDataIntoDB</title>
	<style type="text/css">
		table{
			border:2px solid red;
			background-color: white;
		}

		th{
			border:5px solid green;
		}
		td{
			border: 2px solid orange;
		}
		p{
			position: relative;
			margin-top: 40px;
			margin-left: 400px;
			font-size: 30px;
			font-weight: bolder;
		}
		div{
			position: relative;
			margin-left: 150px;
		}
		button{
			position: fixed;
			left: 5px;
		}
	</style>
</head>
<body>
	<a href="logout@Primaryedu.php"> <button style="border-radius: 50%; height:50px; width: 65px;" id="btn2">Logout</button></a>
 <?php
$connect=mysqli_connect("localhost","root")or die("enable to connect");
mysqli_select_db($connect,"website1");

//		echo "<script>alert('welcome user');</script>";

$sqlget="select * from SCHOOL";
$sqldata=mysqli_query($connect,$sqlget)or die('error getting');
echo "<p>Data of School Registration</p>";
echo "<div>";
echo "<table>";
echo "<tr><th>School Code</th><th>School Name</th><th>No-of-teacger</th><th>Date</th><th>Email</th><th>Mobile</th><th>Address</th><th>Pin code</th>";
while ($row=mysqli_fetch_array($sqldata,MYSQLI_ASSOC)) {
	# code...
	echo "<tr><td>";
	echo $row['scode'];
	echo "</td><td>";
	echo $row['sname'];
	echo "</td><td>";
	echo $row['no_teacher'];
	echo "</td><td>";
	echo $row['date'];
	echo "</td><td>";
	echo $row['email'];
	echo "</td><td>";
	echo $row['mobile'];
	echo "</td><td>";
	echo $row['add'];
	echo "</td><td>";
	echo $row['pin'];
	echo "</td></tr>";
}
echo "</table>";
echo "</div>";
?>

<?php
$connect=mysqli_connect("localhost","root")or die("enable to connect");
mysqli_select_db($connect,"website1");

//		echo "<script>alert('welcome user');</script>";

$sqlget="select * from teacher";
$sqldata=mysqli_query($connect,$sqlget)or die('error getting');
echo "<p>Data of Teacher registration</p>";
echo "<div>";
echo "<table>";
echo "<tr><th>School Code</th><th>Teacher's Name</th><th>Email</th><th>Password</th><th>Confirm Password</th><th>Data-of-birth</th><th>Mobile No.</th>";
while ($row=mysqli_fetch_array($sqldata,MYSQLI_ASSOC)) {
	# code...
	echo "<tr><td>";
	echo $row['scode'];
	echo "</td><td>";
	echo $row['tname'];
	echo "</td><td>";
	echo $row['email'];
	echo "</td><td>";
	echo $row['password'];
	echo "</td><td>";
	echo $row['cpassword'];
	echo "</td><td>";
	echo $row['dob'];
	echo "</td><td>";
	echo $row['mobile'];
	echo "</td></tr>";
}
echo "</table>";
echo "</div>";
?>

<?php
$connect=mysqli_connect("localhost","root")or die("enable to connect");
mysqli_select_db($connect,"website1");

//		echo "<script>alert('welcome user');</script>";

$sqlget="select * from Primaryedu";
$sqldata=mysqli_query($connect,$sqlget)or die('error getting');
echo "<p>Data of Father/Student Registration</p>";
echo "<div>";
echo "<table>";
echo "<tr><th>Username</th><th>Password</th><th>Confirm Password</th><th>Date-of-birth</th><th>Mobile</th>";
while ($row=mysqli_fetch_array($sqldata,MYSQLI_ASSOC)) {
	# code...
	echo "<tr><td>";
	echo $row['username'];
	echo "</td><td>";
	echo $row['password'];
	echo "</td><td>";
	echo $row['cpassword'];
	echo "</td><td>";
	echo $row['dob'];
	echo "</td><td>";
	echo $row['mobile'];
	echo "</td></tr>";
}
echo "</table>";
echo "</div>";
?>



</body>
</html>
