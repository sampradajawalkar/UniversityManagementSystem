 <head>
	<title> Student login</title>
</head>

<body>

<?php
if ($_SERVER['REQUEST_METHOD']=='POST'){

include 'connection.php';

$username = $_POST['stdemail'];
$password = $_POST['stdpass'];

echo "Total username: " . $username;
echo "Total password: " . $password;

$sql= "SELECT count(*) FROM st_info WHERE st_fullname = '$username' AND st_password = '$password' ";
$result = mysqli_query($con,$sql);
$check = mysqli_fetch_array($result);

$total = $check[0];
echo "Total rows: " . $total;


if($total != 0){


	$sql2= "SELECT * FROM st_info WHERE st_fullname = '$username' AND st_password = '$password' ";
	$result2 = $con->query($sql2);

	if ($result2->num_rows > 0) {

			session_start();
	  // output data of each row
	  while($row = $result2->fetch_assoc()) {

	  	$_SESSION["st_id"] = $row["st_id"];
	  	$_SESSION["st_mail"] = $row["st_mail"];
	  	$_SESSION["st_contact"] = $row["st_contact"];
	  	$_SESSION["st_fullname"] = $row["st_fullname"];
	  	$_SESSION["st_password"] = $row["st_password"];
	  	$_SESSION["st_dob"] = $row["st_dob"];
	  	$_SESSION["st_address"] = $row["st_address"];
	  	$_SESSION["st_father"] = $row["st_father"];
	  	$_SESSION["st_mother"] = $row["st_mother"];
	  	$_SESSION["st_parents_contact"] = $row["st_parents_contact"];
	  	$_SESSION["coursename"] = $row["coursename"];
	  	$_SESSION["st_viewgrade"] = $row["st_viewgrade"];
	  	

	  }
	} else {
	  echo "0 results";
	}



header("Location: dist/studentsinfodashboard.php"); 
echo 'success';

exit();

echo 'success';
}else{
echo 'failure';
header("Location: dist/error.html"); 
exit();
}
}
?>
</body> 