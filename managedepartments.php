<head>
	<title>managedepartment</title>
</head>

<body>

<?php

   include 'connection.php';

   $id = $_POST['depid'];
  $name = $_POST['depname'];
  $subjects = $_POST['depsub'];



if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}

$insertquery = "INSERT INTO `department_info`(department_id, department_name, department_subjects) VALUES ('$id','$name','$subjects')";


if ($con->query($insertquery) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $insertquery . "<br>" . $con->error;
}

$con->close();
?>
</body>

</html>



