<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>jobin</title>  
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="firstpage.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">



</head>
<body>
    



<!--Navbar-->




<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a href="http://localhost/jobin/jobin/firstpage.php"><img src="http://localhost/deep/img/clients/logo1.jpg" 
	 width="90" 
     height="80" /></a>
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
</li>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/deep/findjob.html">Find Job</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/deep/index.html">Industry Practices</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contactus">Contact us</a>
      </li>      

      <li class="nav-item">
        <a class="nav-link" href="registration.php"><span class="fas fa-user"></span> Register</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php"><span class="fas fa-sign-in-alt"></span> Login</a>
      </li>

 


    </ul>
    <!-- <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form> -->


  
  </div>
</nav>







<!--Cousrsel-->

<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/Couserl 1.jpg" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
        <h4 class="imgdesc">Hey! Welcome to</h4>
        <h2 class="imgdesc">jobin</h2>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/couserl 2.jpg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
        <h4 class="imgdesc">Hey! Welcome to</h4>
        <h2 class="imgdesc">jobin</h2>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/couserl 3.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h4 class="imgdesc">Hey! Welcome to</h4>
        <h2 class="imgdesc">jobin</h2>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>



<!--About us-->

<div class="container" id="aboutus">

<section class="my-5">
  
  <div class="py-5">
    <h2 class="text-center">About us</h2>
  <hr>
  </div>

<div class="container-fluid">
  <div class="row">
    <div class="col-lg-6 col-md-6 col-12">
      <img src="images/Aboutus.jpg" class="img-fluid aboutimg ">
    <br> </br>
	  <br> </br>
	<p>
	<h2 class="display-4" ><b>Our Mission</b></h2>
	<br> </br>
	<p class="desc" >“Our mission is to maintain consistent business growth with an innovative, transparent and sustainable ecosystem”</p>
<p>Founded with a vision to provide the best IT Staff Augmentation service and solution provider, Jobin is achieving new milestones every day to become the most trusted brand in the industry. We emphasize the development of our employees to create future leaders who understand the needs of our clients and offer them a hassle-free business.</p>
<p>We are devoted to administering a world-class computing and marketing experience across the globe through our integral innovative explications. By engaging Jobin, the process automatically enables consistent growth and enhanced capabilities to lure the new businesses.</p> 
	</div>

    <div class="col-lg-6 col-md-6 col-12">
      <h2 class="display-4"><b>jobin</b></h2>
      <p class="py-3">Our website will help people to connect each other so that workers may find the job on time and our users have a choice of workers for a work and they can choose the one who is suitable for them.
        
      </p>
	  <br> </br>
	  <br> </br>
	  
	  <div class="about-content text-justify" >
 <!--<p>
<h2 class="display-4" ><b>Our Mission</b></h2>
<p class="desc" >“Our mission is to maintain consistent business growth with an innovative, transparent and sustainable ecosystem”</p>
<p>Founded with a vision to provide the best IT Staff Augmentation service and solution provider, Jobin is achieving new milestones every day to become the most trusted brand in the industry. We emphasize the development of our employees to create future leaders who understand the needs of our clients and offer them a hassle-free business.</p>
<p>We are devoted to administering a world-class computing and marketing experience across the globe through our integral innovative explications. By engaging Jobin, the process automatically enables consistent growth and enhanced capabilities to lure the new businesses.</p> -->
 <br> </br>
</div>
<div class="col-md-4 col-sm-12">
<img src="images/miss.jpg" alt="" height="500">
</div>
      <!--
      <a href="about.php" class="btn btn-primary"> Want to know more</a>
      -->
    </div>

  </div>
</div>  
</section>

</div>


<!--Our services-->


<div class="container" id="ourservices">

<section class="my-5">
  
  <div class="py-5">
    <h2 class="text-center">Our services</h2>
    <hr>
  </div>
<div class="container-fluid">
  <div class="row">




 <!--Users-->

 
 <div class="col-lg-4 col-md-4 col-12">


  <div class="card">
    <img class="card-img-top servicesimg" src="images/useravater.JPG" alt="Card image">
    <div class="card-body">
      <h4 class="card-title">Users</h4>
      <p class="card-text">Our users have a number of workers for their work</p>
      <a href="home_page.php" class="btn btn-primary">Join us</a>
    </div>
  </div>

</div>


    <!--Workers-->

    <div class="col-lg-4 col-md-4 col-12">


      <div class="card">
        <img class="card-img-top servicesimg" src="images/workeravatar.JPG" alt="Card image">
        <div class="card-body">
          <h4 class="card-title">Workers</h4>
          <p class="card-text">Workers may get work with our website</p>
          <a href="home_page.php" class="btn btn-primary">Join us</a>
        </div>
      </div>

    </div>    
  </div> 

</div>

</section>

</div>




<!--Contact form-->


<div class="container" id="contactus">

<section class="my-5">
  
  <div class="py-5">
    <h2 class="text-center">Contact us</h2>
  <br>  </b>  
  <br>  </b>
<div class="information">
<div class="contact-datails">
<div class="text-center">
<h3>ADDRESS</h3>
<div class="col-md-12"  >
<hr>
</div>
<div class="text-left">
	<h1 style="background-color:Tomato;">India Office

</h1>
	<p><strong>D-15, Sector-63 Noida- 201301</p>
	<p>Ph: +91-********** </strong></p>
</div>
<div class="text-left" >
		<h1 style="background-color:Orange;">UK Office

</h1>
	<p><strong>BB12</strong></p>
	<p><strong>186 London road C50 88G</p>
	<p>Ph: 0203-290-9637</strong></p>
</div>
<div class="col-md-12">
<hr>
</div>
<div class="col-md-12">
<p><strong>Email Id:</strong> hr@jobin.com</p>
</div>
</div>
</div>

<form action="contactus.php" method="POST">
<div class="w-50 m-auto">
  <div class="form-group">
    <label for="Name">Fullname:</label>
    <input type="text" class="form-control" placeholder="fullname">
  </div>
  <div class="form-group">
    <label for="phone_number">Phone number:</label>
    <input type="number" class="form-control" placeholder="phone_number">
  </div>
<div class="form-group">
  <label for="email">Email address:</label>
  <input type="email" class="form-control" placeholder="Enter email" id="email">
</div>
<div class="form-group">
  <label for="pwd">Query:</label>
  <textarea class="form-control" placeholder="query">    
  </textarea>
</div>
<button type="submit" class="btn btn-outline-success">Submit</button>
</form>

</div>

</section>

</div>










<!--Footer-->






<div class="footerdiv" id="footerid">

<!-- Footer -->
<footer class="page-footer font-small mdb-color pt-4">

  <!-- Footer Links -->
  <div class="container text-center text-md-left">

    <!-- Footer links -->
    <div class="row text-center text-md-left mt-3 pb-3">

      <!-- Grid column -->
      <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold"> jobin </h6>
		
        <p>Founded in 2021, JOBIN is the leading global IT Staff Augmentation, Solution and Support firm with an outstanding track record and a tremendous workforce. </p>
    
      </div>
      <!-- Grid column -->

      <hr class="w-100 clearfix d-md-none">

      <!-- Grid column -->
       <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
      <!--  <h6 class="text-uppercase mb-4 font-weight-bold"> Services </h6>
        <p>
          <a href=""> Users </a>
        </p>
        <p>
          <a href="cpp_course.php"> Cpp Course </a>
        </p> -->
        <!-- <p>
          <a href="#!">BrandFlow</a>
        </p>
        <p>
          <a href="#!">Bootstrap Angular</a>
        </p> -->
      </div>
      <!-- Grid column -->

      <hr class="w-100 clearfix d-md-none">

      <!-- Grid column -->
      <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold">Useful links</h6>
        <p>
          <a href="firstpage.php"> Home </a>
        </p>
        <p>
          <a href="registration.php"> Register With Us </a>
        </p>
        <p>
          <a href="login.php"> Log in  </a>
        </p>
        <!-- <p>
          <a href="#!"></a>
        </p> -->
      </div>

      <!-- Grid column -->
      <hr class="w-100 clearfix d-md-none">

      <!-- Grid column -->
      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
        <p>
          <i class="fas fa-home mr-3"></i> Gautam budhha Nagar,Greater noida</p>
        <p>
        <p>
          <i class="fas fa-home mr-3"></i> Pratap vihar,Ghaziabad </p>
        <p>
          <i class="fas fa-envelope mr-3"></i> dsaraswat7078@gmail.com</p>
        <p>
          <i class="fas fa-phone mr-3"></i> +91-707811153</p>
        
      </div>
      <!-- Grid column -->

    </div>
    <!-- Footer links -->

    <hr>

    <!-- Grid row -->
    <div class="row d-flex align-items-center">

      <!-- Grid column -->
      <div class="col-md-7 col-lg-8">

        <!--Copyright-->
        <p class="text-center text-md-left">©Copyright:
          <a href="firstpage.php">
            <strong> jobin </strong>
          </a>
        </p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-5 col-lg-4 ml-lg-0">

        <!-- Social buttons -->
        <div class="text-center text-md-right">
          <ul class="list-unstyled list-inline">
            <li class="list-inline-item">
              <a class="btn-floating btn-sm rgba-white-slight mx-1">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn-floating btn-sm rgba-white-slight mx-1" href="#">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn-floating btn-sm rgba-white-slight mx-1">
                <i class="fab fa-google-plus-g"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn-floating btn-sm rgba-white-slight mx-1">
                <i class="fab fa-linkedin-in"></i>
             
			 </a>
            </li>
        		</ul>
        
		</div>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

</footer>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
