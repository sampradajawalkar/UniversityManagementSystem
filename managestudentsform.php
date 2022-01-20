<head>
  <title>manage student</title>
</head>

<body>

<?php

   include 'connection.php';

   $id = $_POST['stdid'];
   $title = $_POST['title'];
  $name = $_POST['stdname'];
  $password = $_POST['stdpass'];
  $address = $_POST['stdadd'];
  $email = $_POST['stdemail'];
  $studentcontact = $_POST['stdcno'];
  $college = $_POST['stdclg'];
  $dob = $_POST['stddob'];
  $parentcontact = $_POST['stdpcno'];
  $fname = $_POST['stdfname'];
  $mname = $_POST['stdmname'];
  $subjects = $_POST['stdsub'];
  $depart = $_POST['optionsRadios'];

   

    if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
    } 

      $insertquery = "INSERT INTO `st_info`(Title, st_id, st_fullname,st_mail, st_password, st_dob, st_address, st_contact, st_father, st_mother, st_parents_contact, st_department, st_subjects, st_college) VALUES (' $title',' $id',' $name',' $email',' $password',' $dob',' $address',' $studentcontact',' $fname',' $mname',' $parentcontact',' $depart',' $subjects','$college')";



    if ($con->query($insertquery) === TRUE) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $insertquery . "<br>" . $con->error;
    }

    $con->close();
?>
</body>

</html>






















