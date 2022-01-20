<html>
<head>

<?php

include ("connection.php");

$username = $_POST['stdname'];
$password = $_POST['stdpass'];

if (isset($_POST['btn'])){
    
        $sql = mysqli_query(SELECT * FROM st_info WHERE username= '$username');
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


mysqli_close($conn);
?>


</body>
</html>






