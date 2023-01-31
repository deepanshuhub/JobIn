<?php
  session_start();
  $_SESSION['updvar'] = " ";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <?php
            include 'connection.php';
    ?>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">




    <title>jobin</title>

<style>
    html{
      scroll-behavior:smooth;
    }


    body {
            background: -webkit-linear-gradient(left, #3931af, #00c6ff);
        }
        
        .emp-profile {
            padding: 3%;
            margin-top: 3%;
            margin-bottom: 3%;
            border-radius: 0.5rem;
            background: #fff;
        }
        
        .profile-img {
            text-align: center;
        }
        
        .profile-img img {
            width: 70%;
            height: 100%;
        }
        
        .profile-img .file {
            position: relative;
            overflow: hidden;
            margin-top: -20%;
            width: 70%;
            border: none;
            border-radius: 0;
            font-size: 15px;
            background: #212529b8;
        }
        
        .profile-img .file input {
            position: absolute;
            opacity: 0;
            right: 0;
            top: 0;
        }
        
        .profile-head h5 {
            color: #333;
        }
        
        .profile-head h6 {
            color: #0062cc;
        }
        
        .profile-edit-btn {
            border: none;
            border-radius: 1.5rem;
            width: 70%;
            padding: 2%;
            font-weight: 600;
            color: #6c757d;
            cursor: pointer;
        }
        
        .proile-rating {
            font-size: 12px;
            color: #818182;
            margin-top: 5%;
        }
        
        .proile-rating span {
            color: #495057;
            font-size: 15px;
            font-weight: 600;
        }
        
        .profile-head .nav-tabs {
            margin-bottom: 5%;
        }
        
        .profile-head .nav-tabs .nav-link {
            font-weight: 600;
            border: none;
        }
        
        .profile-head .nav-tabs .nav-link.active {
            border: none;
            border-bottom: 2px solid #0062cc;
        }
        
        .profile-work {
            padding: 14%;
            margin-top: -15%;
        }
        
        .profile-work p {
            font-size: 12px;
            color: #818182;
            font-weight: 600;
            margin-top: 10%;
        }
        
        .profile-work a {
            text-decoration: none;
            color: #495057;
            font-weight: 600;
            font-size: 14px;
        }
        
        .profile-work ul {
            list-style: none;
        }
        
        .profile-tab label {
            font-weight: 600;
        }
        
        .profile-tab p {
            font-weight: 600;
            color: #0062cc;
        }


        #profileImage{
    background-color:#fff;
    border:2px solid white;    
    height:70px;
    border-radius:50%;
    -moz-border-radius:50%;
    -webkit-border-radius:50%;
    width:70px;
    padding-top:14px;
    color: white;
    background-color: green;
    font-size: 25px;
    margin-left: 40px;
}




</style>

</head>

<body>





<!--Navbar-->




<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">jobin</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="firstpage.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#aboutus">About us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#ourservices">Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contactus">Contact us</a>
      </li>      

     

 


    </ul>
      
  </div>
</nav>
<?php  
    $uemail = $_SESSION['email'];
    $uname = $_SESSION['username'];
    

    $details = "select * from workers_info where email='$uemail' ";
    $result = mysqli_query($con,$details);
    $row = mysqli_fetch_assoc($result);



?>
<br>
<br>

<h1 style="text-align: center; color: antiquewhite;"> Welcome <?php echo $row['name']; ?> </h1>
    <div class="container emp-profile">
        <form method="post">
            <div class="row">
                <div class="col-md-4">
                    <div class="profile-img" id="profile_pic">
                        
                    <a> <div id="profileImage"> </div> </a>

        


        
         
        

      
    
    
      <script type="text/javascript">
        $(document).ready(function() {
            var firstName = '<?php echo $row['name'];  ?>';

            var matches = firstName.match(/\b(\w)/g);
            var acronym = matches.join('');

            var profileImage = $('#profileImage').text(acronym);
            
        });
    </script>



                    </div>
                </div>
                <div class="col-md-6">
                    <div class="profile-head">
                        <h5 id=user_name>
                        
                        <?php
                        
                            echo $row['name'];
                        ?>
                        </h5>
                      
                        <br>
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About You</a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="profile-work">
                        <p>Useful link</p>
                        <a href="firstpage.php">Home Page</a><br/>                        
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="tab-content profile-tab" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            

                            <div class="row">
                                <div class="col-md-6">
                                    <label>Name</label>
                                </div>
                                <div class="col-md-6">
                                    <p id="username"> <?php echo $row['name']; ?> </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Email</label>
                                </div>
                                <div class="col-md-6">
                                    <p id="Email"> <?php echo $uemail; ?> </p>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-6">
                                    <label>Phone No</label>
                                </div>
                                <div class="col-md-6">
                                    <p id="Email"> <?php echo $row['phone_number']; ?> </p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <label> Address</label>
                                </div>
                                <div class="col-md-6">
                                    <p id="Email"> <?php echo $row['address']; ?> </p>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-6">
                                    <label>Working Field</label>
                                </div>
                                <div class="col-md-6">
                                <p id="Email"> <?php echo $row['work_field']; ?> </p>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-6">
                                    <label>Interested Users Name</label>
                                </div>
                                <div class="col-md-6">
                                <p id="Name"> <?php
                                            if($row['companyname'] != ''){
                                                echo $row['companyname'];
                                            }
                                            if($row['companyname'] != ''){
                                                echo ',';
                                                echo $row['companyname'];
                                            }

                                        ?></p>
                                </div>
                            </div>              
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Interested Users Phone number</label>
                                </div>
                                <div class="col-md-6">
                                <p id="PhoneNumber"><?php
                                            if($row['companyphonenumber'] != ''){
                                                echo $row['companyphonenumber'];
                                            }
                                            if($row['companyphonenumber'] != ''){
                                                echo ',';
                                                echo $row['companyphonenumber'];
                                            }

                                        ?> </p>
                                </div>
                            </div>             



                            <div class="row" style="text-align: center;">                         
                           
                              
                     
                                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>
</html>