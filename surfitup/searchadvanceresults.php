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
	<meta http-equiv="refresh" content="120">

	<title>Surf It Up! Advanced Search Results.</title>

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
	.mb-5, .mb-3{
		color: #000;
		font-weight: bold;
	}
	.inputknot{
		color: #000;
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
	  <li class="nav-item active">
        <a class="nav-link" href="searchadvance.php">
          <span class="sidebar-nav">Advanced Search</span></a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="nearme.php">
          <span class="sidebar-nav">Spots Near Me</span></a>
      </li>
    </ul>
  
    <div id="content-wrapper">
      <div class="container-fluid">

        <!-- Breadcrumbs -->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="index.php">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Search</li>
        </ol>
		
		<!-- Script to get json results and input from search.php form -->
		<?php
		
		if (isset($_GET['county'])){
			//get users inputs from search.php
			$usercounty = $_GET['county'];
			$userknot1 = $_GET['knot1'];
			$userknot2 = $_GET['knot2'];
			$usertide = $_GET['tide'];
			
			//get json file and decode
			$json = file_get_contents('http://api.spitcast.com/api/county/wind/' . $usercounty);
			$jsondecoded = json_decode($json);
			
			//get json file and decode
			$jsontide = file_get_contents('http://api.spitcast.com/api/county/tide/' . $usercounty);
			$jsondecodedtide = json_decode($jsontide);
			
			echo '<div class="col-lg-12">';
			echo '<div style="text-align: center;" class="testimonial-item mx-auto mb-5 mb-lg-0">';
			echo '<h5>Table: Knots</h5>';
			echo '</div>';
			echo '</div>';
			
			//create table for wind info
			echo '<div class="table-responsive">';
			echo '<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">';
			echo'<thead>';
			echo'<tr>';
			echo'<th>Date:</th>';
			echo'<th>County:</th>';
			echo'<th>Degrees &#x2103:</th>';
			echo'<th>Knots:</th>';
			echo'<th>Mps:</th>';
			echo'</tr>';
			echo'</thead>';
			
			//print every item in jsondecoded
			foreach($jsondecoded as $result){
				//only print if between knots entered by user
				if($userknot1 <= $result->speed_kts && $userknot2 >= $result->speed_kts){
					echo '<tr>';
					echo '<td>'.$result->date.'</td>';
					echo '<td>'.$result->name.'</td>';
					echo '<td>'.$result->direction_degrees. '&#x2103' .'</td>';
					echo '<td>'.$result->speed_kts. ' kts' .'</td>';
					echo '<td>'.$result->speed_mph. ' mps' . '</td>';
				}//if
			}//foreach
			echo '</table>';
			echo '</div>';
			
			echo '<div class="col-lg-12">';
			echo '<div style="text-align: center;" class="testimonial-item mx-auto mb-5 mb-lg-0">';
			echo '<h5>Table: Tide</h5>';
			echo '</div>';
			echo '</div>';
			
			//create table for tides
			echo '<div class="table-responsive">';
			echo '<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">';
			echo'<thead>';
			echo'<tr>';
			echo'<th>Date:</th>';
			echo'<th>County:</th>';
			echo'<th>Tide:</th>';
			echo'<th>Tide Meter:</th>';
			echo'</tr>';
			echo'</thead>';
			foreach($jsondecodedtide as $tideresult){
				if($usertide <= $tideresult->tide){
					echo '<td>'.$tideresult->date. '</td>';
					echo '<td>'.$tideresult->name. '</td>';
					echo '<td>'.$tideresult->tide. '</td>';
					echo '<td>'.$tideresult->tide_meters. '</td>';
					echo'</tr>';
				}//if
			}//foreach
			echo '</table>';
			echo '</div>';
			
		}//end if (isset($_GET['county']))
		
		?>
		
		<p class="small text-center text-muted my-5">
			<em>Return to previous page for more search?</em>
			<em><a href="searchadvance.php">Click here.</a></em>
        </p>

      </div>
      <!-- /.container-fluid -->

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