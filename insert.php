<!DOCTYPE html>
<html>

<head>
	<title>managecollege</title>
</head>

<body>

<? php

        include 'connection.php';

if(isset($_POST['btn'])){

  $id = $_POST['clgid'];
  $name = $_POST['clgname'];
  $depart = $_POST['dprt'];
  $address = $_POST['clgadd'];
  $email = $_POST['clgemail'];
  $contact = $_POST['clgcno'];

  $insertquery = "INSERT INTO `clg_info`(`clg_id`, `clg_name`, `clg_departments`, `clg_address`, `clg_contact`, `clg_email`) VALUES ('$id','$name','$depart','$address','$contact','$email')";

  $res = mysqli_query($con, $insertquery);

  if($res){
     ?>
     <script>
       alert("data inserted successfully");
     </script>
     <?php
  }
    
  else{
    ?>
    <script>
      alert("data not inserted ");
    </script>
    <?php
  }
}

mysqli_close($conn);
?>
</body>

</html>