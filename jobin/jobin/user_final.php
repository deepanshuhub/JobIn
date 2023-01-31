<?php
    ob_start(); 
    session_start();
?>

<!DOCTYPE html>

<html>

<head>

<title> jobin </title>

<?php
echo "<link rel='stylesheet' type='text/css' href='user_final.css'>";
?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" />
<!-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> -->

</head>

<body>


<div class="main-div">
<h1>Welcome to jobin</h1>
    <h2> List Of Available workers  </h2>

<div class="center-div">
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th> Name </th>
                    <th> Mobile No. </th>
                    <th> Email </th>
                    <th> Working Field</th>
                    
                    <th> Choice </th>
                </tr>
            </thead>

            <tbody>

                <?php
                    include 'connection.php';

                    $_SESSION['updvar'] = "user_final";
    
                    $select_query = "select * from workers_info";
                    $query = mysqli_query($con,$select_query);
                    while($res = mysqli_fetch_array($query)){
                        echo"
                            <tr>
                                <td>  ". $res['name'] ." </td>
                                
                                <td>  ".$res['phone_number'] ."  </td>


                                <td> <span class='email-style'> ". $res['email'] ." </span> </td>
                                
                                <td> ".$res['work_field'] ." </td>

                               
                             <td> <a href='worker_profileforuser.php ?email= $res[email]' data-toggle='tooltip' data-placement='top' title='Interested'><i class='fa fa-handshake-o' aria-hidden='true'></i> </a></td>
                             
                            </tr>
                            ";
                    }
                    
                    // <a  href='delete.php?id= $res[id] '>x</a>



                ?>


            </tbody>

        </table>
    </div>

</div>


<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});
</script>
</body>


</html>

<?
include 'connection.php';

?>