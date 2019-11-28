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

	<title>Surf It Up! Search.</title>

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
      <li class="nav-item active">
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
          <li class="breadcrumb-item active">Search</li>
        </ol>
		
		<!-- Masthead -->
	  <header class="masthead text-white text-center">
		<div class="overlay"></div>
		<div class="container">
		  <div class="row">
			<div class="col-xl-9 mx-auto">
			  <h1 class="mb-5">Search for locations weather.</h1>
			  <p class="mb-3">Enter location and wind speed between two numbers.</p>
			</div>
			<div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
			
			<!-- send input to searchresults.php -->
			  <form action="searchresults.php" method="get">
				<div class="form-row">
				
				  <div class="col-12 col-md-12 mb-2 mb-md-0">
					<input name="county" id="userinput" type="textbox" value="orange-county " class="form-control form-control-lg" required>
				  </div>
				  
				  <div class="col-12 col-md-12 mb-2 mb-md-0">
					<input type="submit" class="btn btn-block btn-lg btn-primary">Search!</input>
					<p class="small text-center text-muted my-5">
						<em>Please use '-' for spaces. Else your results will not display. Fix coming soon.</em>
					</p>
				  </div>
					
				</div>
				<br>
				<div class="form-row">
				  <div class="col-12 col-md-6">
					<p class="inputknot">Knot:</p>
					<input style="text-align: center;" name="knot1" id="knot1" type="textbox" class="form-control form-control-lg" value="15" required></input>
				  </div>
				  
				  <div class="col-12 col-md-6">
					<p class="inputknot">Knot:</p>
					<input style="text-align: center;" name="knot2" id="knot2" type="textbox" class="form-control form-control-lg" value="20" required></input>
				  </div>
				</div>
			  </form>
			</div>
		  </div>
		</div>
	  </header>

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
