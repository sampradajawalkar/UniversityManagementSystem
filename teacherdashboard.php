<html>
<head>

<?php

include ("connection.php");

$username = $_POST['stfname'];
$password = $_POST['stfpass'];

if (isset($_POST['btn'])){
    
        $sql = mysqli_query(SELECT * FROM teacher_info WHERE username= '$username');
        if (mysql_num_rows($sql) ){
            while ($result = mysql_fetch_object($sql)) {
                $dbusername = $result->username;
                $dbpassword = $result->password;
                if ($dbusername == $username && $dbpassword == $password)
                	echo "your in!";
                else 
                	echo "Wrong info";
            }
        } else die ("That username doesnt exist");
    
}

if(isset($_POST['btn'])){

  if(isset($_POST['btn'])){

  $inputresult = $_POST['ipresult'];

  $insertquery = INSERT INTO `st_info`(`st_viewgrade`) VALUES (' $inputresult')

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
