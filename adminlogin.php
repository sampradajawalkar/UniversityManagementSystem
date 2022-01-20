<head>
	<title> admin login</title>
</head>

<body>

<?php
if ($_SERVER['REQUEST_METHOD']=='POST'){

include 'connection.php';

$username = $_POST['loginUsername'];
$password = $_POST['loginPassword'];



$sql= "SELECT * FROM meadmin WHERE admin_username = '$username' AND admin_password = '$password' ";
$result = mysqli_query($con,$sql);
$check = mysqli_fetch_array($result);
if(isset($check)){

header("Location: dist/admindashboard.html"); 
echo 'success';

exit();

//echo 'success';
}else{
echo 'failure';
header("Location: dist/error.html"); 
exit();
}
}
?>
</body>

</html>