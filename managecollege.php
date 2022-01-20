

<head>
  <title>manage college</title>
</head>

<body>

<?php

   include 'connection.php';

    $id = $_POST['clgid'];
   $name = $_POST['clgname'];
   $depart = $_POST['dprt'];
   $address = $_POST['clgadd'];
   $email = $_POST['clgemail'];
   $contact = $_POST['clgcno'];


if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}

$insertquery = "INSERT INTO `clg_info`(`clg_id`, `clg_name`, `clg_departments`, `clg_address`, `clg_contact`, `clg_email`) VALUES ('$id','$name','$depart','$address','$contact','$email')";



if ($con->query($insertquery) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $insertquery . "<br>" . $con->error;
}

$con->close();
?>
</body>

</html>


