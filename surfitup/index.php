<!DOCTYPE html>
<html lang="en">

<head>
	<!-- meta data -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Launchpad technical test example for surf data">
	<meta name="author" content="Thomas John Rowe">
	<meta name="keywords" content="SurfItUp, Surf, Date, Time, API">

	<title>Surf It Up! Home.</title>

	<!-- Custom fonts for this template-->
	<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

	<!-- Page level plugin CSS-->
	<link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
	<link href="css/main.css" rel="stylesheet">
	
</head>
<style>
	.navbar{
		background-color: #1f7ecc !important;
	}
	.sidebar{
		background-color: #56a7e6 !important;
	}
	.sidebar-nav{
		font-weight: bold;
	}
    .navbar li a, .navbar .navbar-brand {
     color: #fff !important;
    }
    .navbar-nav li a:hover, .navbar-nav li.active a {
     color: #f4511e !important;
     background-color: #fff !important;
    }
   .navbar-default .navbar-toggle {
     border-color: transparent;
     color: #fff !important;
    }
	.card-header{
		background-color: #56a7e6 !important;
	}
	.breadcrumb-item{
		font-weight: bold;
	}
	.card-header{
		font-weight: bold;
	}
</style>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">
    <a style="text-align:center" class="navbar-brand mr-1" href="index.html">Surf <i>It</i> <b>Up</b></a>
  </nav>

  <div id="wrapper">
  
	<!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">
          <span class="sidebar-nav">Dashboard</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="search.php">
          <span class="sidebar-nav">Search</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="tables.php">
          <span class="sidebar-nav">Location Info</span></a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="searchadvance.php">
          <span class="sidebar-nav">Advanced Search</span></a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="nearme.php">
          <span class="sidebar-nav">Spots Near Me WIP</span></a>
      </li>
    </ul>
  
    <div id="content-wrapper">
      <div class="container-fluid">

        <!-- Breadcrumbs -->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="index.php">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Basic Overview</li>
        </ol>
		
		<!-- -->
		  <section class="features-icons bg-light text-center">
			<div class="container">
			  <div class="row">
				<div class="col-lg-12">
					<h2 class="mb-5">Challenge 2 – Presenting Data; Frontend-Focussed.</h2>
					<em>What we need is a front end to effectively present this data. 
					In order to do this let's create a website that hits the API and presents the information to 
					your customers in effective, eye catching, well designed ways. 
					Take the JSON returns from this API and display it in a pleasing website. 
					Use any frameworks you would like to make this work effectively. </em>
				</div>
			  </div>
			</div>
		  </section>
		  
		<!--  -->
		<section class="testimonials text-center bg-light">
		<div class="container">
		  <h2 class="mb-5">Surf <i>It</i> <b>Up!</b></h2>
		  <div class="row">
			<div class="col-lg-6">
			  <div class="testimonial-item mx-auto mb-5 mb-lg-0">
				<img class="img-fluid rounded-circle mb-3" src="img/surf1.jpg" alt="">
				<h5>Catch a wave.</h5>
				<em class="font-weight-light mb-0">Surf It Up, your one stop site for surfing.</em>
			  </div>
			</div>
			<div class="col-lg-6">
			  <div class="testimonial-item mx-auto mb-5 mb-lg-0">
				<img class="img-fluid rounded-circle mb-3" src="img/surf2.jpg" alt="">
				<h5>Knot to be beaten.</h5>
				<em class="font-weight-light mb-0">Just choose 'Search' or 'Advanced Search' for surfing local.</em>
			  </div>
			</div>
		  </div>
			<div class="col-lg-12">
				<div class="testimonial-item mx-auto mb-5 mb-lg-0">
					<img class="img-fluid rounded-circle mb-3" src="img/wiz.jpg" alt="">
					<h5>Wiz</h5>
					<em class="font-weight-light mb-0">Developer - Please enjoy!</em>
			  </div>
			</div>
		</div>
		</section>

        <!-- Area Chart Example-->
        <div class="card mb-3">
          <div class="card-header" id="getlocation">Location: <i>Click here for location.</i></div>
		  
          <div class="card-body">
			<iframe id="googlemap" width="100%" height="400" src="https://maps.google.co.uk?output=embed" 
			frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="https://www.maps.ie/coordinates.html">latitude longitude finder</a>
			</iframe>
			<script src="js/getlatandlong.js"></script>		
          </div>
		  
          <div class="card-footer small text-muted" id="datetime">Unable to capture time and date -- please enable JavaScript.</div>
		  	<!-- Script for getting clients date and time -->
			 <script src="js/gettimeanddate.js"></script>
        </div>
		
      </div>
      <!-- /.container-fluid -->
	  <section class="testimonials text-center bg-light">
			<div class="col-lg-12">
				<div class="container my-auto">
					<h5>Contact:</h5>
					<div class="col-lg-6">
						<i class="fas fa-envelope"></i><a href="mailto:example@tutorialspark.com"> Email: thomasjohnrowe@gmail.com</a>
					</div>
					<div class="col-lg-6">
						<i class="fas fa-user-circle"></i></i><a href="https://www.linkedin.com/in/thomas-r-747525197/"> Linkedin: Thomas Rowe</a>
					</div>
				</div>
			</div>
		</section>
			
      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © Thomas Rowe & Falmouth Launchpad</span>
          </div>
        </div>
      </footer>

    </div>
    <!-- /.content-wrapper -->
  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  

</body>

</html>
