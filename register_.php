<?php
include 'connection.php';
if(isset($_POST['register']))
{
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$DOB = $_POST['DOB'];
$course = $_POST['course'];
$gender = $_POST['gender'];
$Phone= $_POST['phone'];
$add= $_POST['Address'];
$email= $_POST['email'];
$resume= $_POST['userfile'];

  
$sql="insert into register (`fname` ,`lname`, `dob`, `course`, `gender`, `phone`, `caddress`, `email`, `resume`) values ('$firstname','$lastname','$DOB','$course','$gender','$Phone', '$add', '$email', '$resume')";
     
  if(mysqli_query($con, $sql))
{
    echo "<script> alert ('Registration Successful'); </script>"; 
	
}
   else
{
    echo "error". mysqli_error($con);
}
     
//header("Location: firstpage.php");
mysqli_close($con);
}

?> 