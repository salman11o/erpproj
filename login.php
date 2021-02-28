
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>

</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

	<!-- Goggle Font -->
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">

	<!-- Font Css -->
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">

	<!-- Custom CSS -->
	<link rel="stylesheet" type="text/css" href="css/style.css">

	<!-- Animation Css -->
	<link rel="stylesheet" href="css/animate.css">
</head>
<body>
<div class="header-div">

<nav class="navbar navbar-default">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header logo-div bounceInLeft wow" data-wow-duration="2s">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">ERP Portal</a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse top-right-menu-ul bounceInRight wow" id="bs-example-navbar-collapse-1" data-wow-duration="4s">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#features">Orders</a></li>
        <li><a href="#Services">Products</a></li>
        <li><a href="#Services">Features</a></li>
        <li><a href="login.php">Login</a></li>
      </ul>
    </div><!-- End navbar-collapse -->
  </div><!-- End container -->
</nav>

<div class="container wow bounceInDown" data-wow-duration="5s">
	<div class="row">
		<div class="col-md-offset-2 col-md-8 text-center slide-text">
			<h1>ERP System</h1>
			<p>Here your organization can make all the necessary transactions easily and manage them with minimal effort</p>
		</div><!-- End col-md-8-->
		<div class="col-md-offset-2"></div><!-- End col-md-offset-2 -->
	</div><!-- End Row -->
</div><!-- End Contanier -->

</div><!-- End header-div -->
<div class="jumbotron jumbotron-fluid " id="jum" style="height:150vh">
	<div class="container">
		<div class="row">
			<form action="log11.php" class="was-validated w-50 mx-auto " method="post">
				<div class="form-group">
					<h2 class="text-center">Login</h2>
					<br>
					<label for="email">Email address:</label>
					<input type="email" name="email" class="form-control border-success" placeholder="Enter email" id="email">
				</div>
				<div class="form-group">
					<label for="pwd">Password:</label>
					<input type="password" name="pass" class="form-control" placeholder="Enter password" id="pwd">
				</div>
				
				<button type="submit" class="btn btn-success pull-right">Login</button>
			</form>

		</div>
	</div>
	



	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
