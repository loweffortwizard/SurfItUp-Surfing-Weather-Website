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
      <li class="nav-item">
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
	  <li class="nav-item active">
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
          <li class="breadcrumb-item active">Spots Near Me -- WIP</li>
        </ol>
		
		<!-- 'head' for main content -->
		<section class="text-center">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<h2 class="mb-5">Click 'Submit' and Enable Location. WIP</h2>
					</div>
				</div>	
			</div>
			
		<!-- Form -->
		<form action="" method="GET">
			<div class="form-row">
				<div class="col-12 col-md-12 mb-2 mb-md-0">
					<input id="submitbtn" type="submit" class="btn btn-block btn-lg btn-primary"></input>
				</div>
			</div>
			<br>
			<div class="form-row">
				<div class="col-12 col-md-6">
				<p class="lat">Lat:</p>
				<input style="text-align: center;" name="lat" id="lat" type="textbox" class="form-control form-control-lg" value="0" readonly></input>
				</div>
				<div class="col-12 col-md-6">
				<p class="long">Long</p>
				<input style="text-align: center;" name="long" id="long" type="textbox" class="form-control form-control-lg" value="0" readonly></input>
				</div>
			</div>
			<br>
		</form>
		
		
		<!-- 
		<script type="text/javascript">
			function runScript(){
				var c = function(pos){
				var lat = pos.coords.latitude,
				long = pos.coords.longitude,
				//coords = lat + ', ' + long; 
				
				document.getElementById('lat').value = lat;
				document.getElementById('long').value = long;
				}
				
				document.getElementById('submitbtn').onclick = function(){
					navigator.geolocation.getCurrentPosition(c);
					return false;
				}
			}
			window.onload = runScript();
			
		</script>			
		
		<?php
			if(isset($_GET['lat']) && isset($_GET['long'])){
				$latitude = $_GET['lat'];
				$longitude = $_GET['long'];
				
				$json = file_get_contents('http://api.spitcast.com/api/spot/nearby?longitude=' . $longitude . '&latitude=' . $latitude);
				$jsondecoded = json_decode($json);
				
				//create table with headers
				echo '<div class="table-responsive">';
				echo '<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">';
				echo'<thead>';
				echo'<tr>';
				echo'<th>Coordinates:</th>';
				echo'<th>County:</th>';
				echo'<th>Name:</th>';
				echo'</tr>';
				echo'</thead>';
				
				//print every item in json_decoded
				foreach($jsondecoded as $result){
					//only print if between knots entered by user
					echo '<tr>';
					echo '<td>'.$result->coordinates.'</td>';
					echo '<td>'.$result->spot_id_char.'</td>';
					echo '<td>'.$result->spot_name .'</td>';
					echo '</tr>';
				}
				echo '</table>';
				echo '</div>';
			}//isset
		?>
		-->
		
		</section>
		
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
