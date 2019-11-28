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

  <title>Surf It Up! Info.</title>

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
      <li class="nav-item active">
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

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="index.php">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Info</li>
        </ol>
		
        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Complete Data</div>
          <div class="card-body">
            <!-- Script to get json results and input from search.php form -->
		<?php
		
        $json = file_get_contents('http://api.spitcast.com/api/spot/all');
        $json_decoded = json_decode($json);
		echo '<div class="table-responsive">';
        echo '<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">';
		echo'<thead>';
		echo'<tr>';
		echo'<th>County:</th>';
		echo'<th>Latitude:</th>';
		echo'<th>Longitude:</th>';
		echo'<th>Spot Name:</th>';
		echo'</tr>';
		echo'</thead>';
		
        foreach($json_decoded as $result){
          echo '<tr>';
            echo '<td>'.$result->county_name.'</td>';
			echo '<td>'.$result->latitude.'</td>';
            echo '<td>'.$result->longitude. '</td>';
            echo '<td>'.$result->spot_name. '</td>';
          echo '</tr>';
        }
        echo '</table>';
        echo '</div>';
		?>
      </div>
      <!-- /.container-fluid -->
	  
    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
  
  <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © Thomas Rowe & Falmouth Launchpad</span>
          </div>
        </div>
      </footer>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="vendor/datatables/jquery.dataTables.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="js/demo/datatables-demo.js"></script>

</body>

</html>
