<head>
	<title> staff login</title>
</head>

<body>

<?php
if ($_SERVER['REQUEST_METHOD']=='POST'){

include 'connection.php';

$username = $_POST['stfname'];
$password = $_POST['stfpass'];



$sql= "SELECT * FROM teacher_info WHERE t_email = '$username' AND t_pass = '$password' ";
$result = mysqli_query($con,$sql);
$check = mysqli_fetch_array($result);

$total = $check[0];
echo "Total rows: " . $total;

if($total != 0){

	$sql2= "SELECT * FROM teacher_info WHERE t_email = '$username' AND t_pass = '$password' ";
	$result2 = $con->query($sql2);

	if ($result2->num_rows > 0) {

			session_start();
	  // output data of each row
	  while($row = $result2->fetch_assoc()) {

	$_SESSION["t_id"] = $row["t_id"];
	$_SESSION["t_qualification"] = $row["t_qualification"];
	$_SESSION["t_address"] = $row["t_address"];
	$_SESSION["t_dob"] = $row["t_dob"];
	$_SESSION["t_email"] = $row["t_email"];
	$_SESSION["t_contact"] = $row["t_contact"];
	$_SESSION["t_id"] = $row["t_id"];
	$_SESSION["t_fullname"] = $row["t_fullname"];


	  }
	} else {
	  echo "0 results";
	}



header("Location: dist/staffinfodashboard.php"); 
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