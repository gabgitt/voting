<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1,  user-scalable=yes">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>E-voting</title>
	<link href="../bootstrap-3.3.5-dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="../css/index.css" type="text/css" rel="stylesheet">
</head>
<body>
<div class="contaier-fluid main">
	<div class="container-fluid banner">
		<div class="navbar banner">
			<div class="navbar-brand">
				E-voting
				<mar>the best voting option...</mar>
			</div>
			<div class="navbar-right banner">
				<div class="bannerindex">
					<div id="logindiv" style="display: none">
						<fieldset>
							<span class="glyphicon glyphicon-circle-arrow-right" onclick="showform('logindiv')" style="color: white;"></span>
							<a href="#" onclick="popup('popUpDiv')"><button class="btn-primary">register</button></a>
							<form action="dash1.php" style="display:inline">
								<input type="text" placeholder="Username" required/>
								<input type="password" placeholder="Password" id="password" required/>
<!--								<input type="checkbox" id="showpassword" onclick="showpassword()" />show password-->
								<button class="btn-primary" type="submit">sign-in</button>
							</form>
						</fieldset>
					</div>
					<div id="loginorsignupdiv" style="display: block">
						<a href="#" onclick="popup('popUpDiv')"><button class="btn-primary">register</button> </a>
						<button class="btn-primary" onclick="showform('logindiv')" type="submit"><span class="glyphicon glyphicon-log-in"></span>sign-in</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row home">
		<div id="blanket" style="display: none;">

		</div>
		<div id="fullslide">
			<div class="col-lg-12" >
				<div id="myCarousel" class="carousel slide" data-ride="carousel" >
					<ol class="carousel-indicators">
						<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						<li data-target="#myCarousel" data-slide-to="1"></li>
						<li data-target="#myCarousel" data-slide-to="2"></li>
					</ol>
					<div class="carousel-inner">
						<div class="item active">
							<img src="../images/38104904.cms.jpeg" class="img-responsive" width="100%" height="70" alt="E-voting1">
						</div>
						<div class="item">
							<img src="../images/e-voting.jpg" class="img-responsive" width="100%" height="70" alt="E-voting2">
						</div>
						<div class="item">
							<img src="../images/12e-vote.jpg" class="img-responsive" width="100%" height="70" alt="E-voting3">
						</div>
					</div>
					<a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-circle-arrow-left"></span></a>
					<a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-circle-arrow-right"></span></a>
				</div>
			</div>
		</div>
		<div id="popUpDiv" style="display: none;">
			<div id="closepop">
				Pick one of the options below...
				<a href="#" onclick="popup('popUpDiv')" style="float: right">
					<button class="glyphicon glyphicon-remove" style="color:grey;border:transparent;border-radius:2px;background: transparent"></button>
				</a>
			</div>
			<div id="admin">
				<a href="adminsignup.php"><button class="btn btn-lg btn-primary">Administrator</button></a><br>
				create and manage new election
			</div>
			<div id="voter">
				<a href="adminsignup.php"><button class="btn btn-lg btn-primary">Voter</button></a><br>
				register as a voter for an existing election
			</div>
		</div>
	</div>
</div>
<script src="../bootstrap-3.3.5-dist/jquery/jquery.min.js"></script>
<script src="../bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>

<!--   script for pop screen-->
<script type="text/javascript" src="../js/popup.js"></script>

</body>
</html>