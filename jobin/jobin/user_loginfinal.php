<?php
    session_start();
?>

<!DOCTYPE html>

<html>

<head>

<title> User login </title>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


<style>
h1{
    text-align: center;
    border-bottom: 2px solid green;
}

body {
    font-family: "Open Sans", sans-serif;
    color: #444444;
}

.navbar-nav a{
    font-family: poppins;
    font-size: 16px;
    text-transform: uppercase;
    font-weight: bold;
}

.navbar-nav{
    text-align: center;
}

.navbar-light .navbar-nav .nav-link{
    color:#3FBD2B;
}

.nav-link{
    padding: .2rem 1rem;
}

.navbar-light .navbar-nav .nav-link:focus, .navbar-light .navbar-nav .nav-link:hover{
    color:#a86932 !important;
}

@media only screen and (max-width: 767px){
    
    .navbar-toggler{
        padding: 1px 5px;
        font-size: 18px;
        line-height: 0.3;
    }
}


.input-group-addon{color:#ff0000; background-color: #fff;}

.fa1{
    font-size: 22px;
    cursor: pointer;
    color: #000;
    padding: 8px;
}

.fa{
    font-size: 22px;
    color: #000;
    padding: 8px;
}


.fa.active{
     color: #ff0000;
}

#profileImage{
    background-color:#fff;
    border:2px solid white;    
    height:38px;
    border-radius:50%;
    -moz-border-radius:50%;
    -webkit-border-radius:50%;
    width:38px;
    padding-top:5px;
    color: white;
    background-color: green;
}

.profile-link{
  margin-top: 5px;
}

@media only screen and (max-width: 767px){
    #profileImage{
      margin-left: 162px;
    }    

    .profile-link{
      margin-top: 0;
      margin-right: 20px;
    }

}


</style>

</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">

<div class="container">

  

  
  <div class="justify-content-end">
  <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="firstpage.php">Home</a>
      </li>
  </div>


      <ul class="nav navbar-nav ml-auto">

      <?php if( isset($_SESSION['username']) && !empty($_SESSION['username']) )
      {
      ?>

        <a> <div id="profileImage"> </div> </a>

        <li class="nav-item dropdown profile-link">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">


        
         <?php  $name = $_SESSION['username'] ?>
        

      
    
    
      <script type="text/javascript">
        $(document).ready(function() {
            var firstName = '<?php echo $name;  ?>';

            var matches = firstName.match(/\b(\w)/g);
            var acronym = matches.join('');

            var profileImage = $('#profileImage').text(acronym);
            
        });
    </script>



        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="user_final.php">Dashboard</a>
          <a class="dropdown-item" href="firstpage.php">Log Out</a>
        </div>
      </li>



      <?php }else{ ?>
                    <li class="nav-item">
        <a class="nav-link" href="registration.php"><span class="fas fa-user"></span> Register </a>
      </li>           
        <?php } ?>


    </ul>
  </div>
  </div>
</nav>



<div class="container">

<br> <br> <br> <br>

<h1 class="text-success">
   User Login 
</h1>

<p> <?php
if(isset($_SESSION['msg'])){
    echo $_SESSION['msg']; 
}
else{
    echo $_SESSION['msg'] = "";
}


?>
</p>



<br>

<form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="POST">
    
    <div class="form-group">
        <label for="email"> Enter Your Email </label>
        <input type="email" name="email" id="email" class="form-control" placeholder="Enter Email" value="<?php if(isset($_COOKIE['emailcookie'])) {
            echo $_COOKIE['emailcookie'];} ?>" required>
    </div>

    <div class="form-group">
        <label for="password" class="control-label"> Enter Your Password </label>
        <div class="input-group">
            <input type="password" name="password" id="password" class="form-control" placeholder="Enter Password" value="<?php if(isset($_COOKIE['pwdcookie'])) {
            echo $_COOKIE['pwdcookie'];} ?>"required>
            <div class="input-group-addon">
            <i class= "fa fa-eye fa1" id="eye"></i>
            </div>
        </div>
    </div>

    <div class="form-group">
        <input type="checkbox" name="rememberme"> Remember Me
    </div>




    <button type="submit" name="submit" class="btn btn-primary btn-lg" data-toggle="button" > Login  </button>
    <br>
    <br>

    <p class="text-center"> Forget Your Password? <a href="#"> Click Here </a> </p>

    <p class="text-center"> Don't Have An Account? <a href="user_registration.php"> Register Here </a> </p>

</form>

</body>

<script>
    var pwd = document.getElementById('password');
    var eye = document.getElementById('eye');

    eye.addEventListener('click',togglePass);

    function togglePass(){
        eye.classList.toggle('active');

        (pwd.type == 'password') ? pwd.type = 'text' : pwd.type = 'password' ;        
    }

</script>



</html>

<?php

include 'connection.php';

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $email_search = "select * from users where email='$email'";

    $query = mysqli_query($con,$email_search);

    $email_count = mysqli_num_rows($query);

    if($email_count){
        $email_pass = mysqli_fetch_assoc($query);
        $db_password = $email_pass['password'];

        


        if($password==$db_password){
            $_SESSION['header_name'] = $email_pass['name'];
            $_SESSION['comp_username'] = $email_pass['name'];
            
            $_SESSION['comp_email'] = $email_pass['email'];

            if(isset($_POST['rememberme'])){
                setcookie('emailcookie',$email,time()+(10 * 365 * 24 * 60 * 60));
                setcookie('pwdcookie',$password,time()+(10 * 365 * 24 * 60 * 60));


                header('user_final.php');
            }
            else{
                header('user_final.php');
            }
            ?>
            <script>
                alert('Login Successful');
                location.replace("user_final.php");
            </script>
            <?php
        }
        else{
            ?>
            <script>
                alert('Incorrect Password');
            </script>
            <?php
        }
    }    

    else{
        ?>
        <script>
            alert('Incorrect Email');
        </script>
        <?php
    }
}

?>
