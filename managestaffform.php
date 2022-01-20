<head>
	<title>managecollege</title>
</head>

<body>

<?php

   include 'connection.php';

   
  $id = $_POST['stfid'];
  $title = "";
  $name = $_POST['stfname'];
  $qual = $_POST['stfqal'];
  $address = $_POST['stfadd'];
  $email = $_POST['stfemail'];
  $contact = $_POST['stfcno'];
  $college = $_POST['stfclg'];
  $dob = $_POST['stfdob'];
  $depart = $_POST['optionsRadios'];
  $password2 = $_POST['stfpass'];
  
if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}

 $insertquery = "INSERT INTO `teacher_info`(Title, t_id, t_fullname, t_address, t_email, t_pass, t_dob, t_qualification, t_contact, t_college, t_department) VALUES ('$title', '$id', '$name', '$address',       '$email', '$password2', '$dob',' $qual', '$contact', '$college', '$depart')";




if ($con->query($insertquery) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $insertquery . "<br>" . $con->error;
}

$con->close();
?>
</body>

</html>

