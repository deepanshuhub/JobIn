<?php
session_start();

$fullname = $_POST['fullname'];
$username = $_POST['username'];
$Phone_number= $_POST['Phone_Number'];
$workf= $_POST['Working_field'];
$pass= $_POST['password'];
$add= $_POST['Address'];
$email= $_POST['email'];
// echo"<br>";
$servername = "localhost";
$username = "root";
$password = "";
// $passw = password_hash($pass, PASSWORD_BCRYPT);
$database = "jobin";
$conn = mysqli_connect($servername, $username, $password, $database);
if(!$conn){
die("Failed to connect". mysqli_connect_error());
}
$emailquery = " select * from users where email='$email' " ;
 $query = mysqli_query($conn,$emailquery);
 $emailcount = mysqli_num_rows($query);
 if($emailcount>0){
    ?>
    <script>
 alert("Please try with a different email address"); 
    </script> 
    <?php
                        header('Refresh: 0; URL=http://localhost/jobin/workers_registration.php');

    // include 'apply.html';
    // echo "<br> But email already exists.<br>Sorry, we cannot let you in...<br> Try with a new Email address";
}


     else{

$sql = "INSERT INTO `workers_info` (`name`, `username`, `phone_number`, `address`,`work_field`, `email`, `password`, `companyname`, `companyphonenumber`) VALUES ('$fullname', '$username', '$Phone_number', '$add', '$workf','$email', '$pass', '' , '')";
if(mysqli_query($conn, $sql))
{

    echo "<script> alert ('Registration Successful'); </script>";
    header('Refresh: 0; URL=http://localhost/jobin/firstpage.php');

    /*
    ?>
    <script>
        alert("Data saved");
    </script>
    <?php
    */
    // include 'login2.html';
}


else
{
    echo "error". mysqli_error($conn);
}
     }
mysqli_close($conn);
?> 