<!DOCTYPE html>
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html class=" js no-touch" lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    
    <!-- css -->
    <link href="menuCss/menu.css" rel="stylesheet">
</head>
<body>
	<!-- start header -->
	<header>	
		<div class="container">
				<div class="navbar navbar-static-top">
					<div class="navigation">
						<nav>
						<ul class="nav topnav bold">
							<li class="dropdown active">
							<a href="#">Home <i class="icon-angle-down"></i></a>
							</li>
							<li class="dropdown">
							<a href="#">Features <i class="icon-angle-down"></i></a>
							<ul style="display: none;" class="dropdown-menu bold">
								<li><a href="#">Typography</a></li>
								<li><a href="#">Components</a></li>
								<li><a href="#">Icons</a></li>
								<li><a href="#">Icon variations</a></li>
								<li class="dropdown"><a href="#">4 Sliders <i class="icon-angle-right"></i></a>
								<ul style="display: none;" class="dropdown-menu sub-menu-level1 bold">
									<li><a href="#">Lush slider</a></li>
									<li><a href="#">Layer slider</a></li>
									<li><a href="#"> Flexslider</a></li>
									<li><a href="#">Flexslider</a></li>
								</ul>
								</li>
							</ul>
							</li>
							<li class="dropdown">
							<a href="#">Pages <i class="icon-angle-down"></i></a>
							<ul class="dropdown-menu bold">
								<li><a href="#">About us</a></li>
								<li><a href="#">Pricing boxes</a></li>
								<li><a href="#">404</a></li>
							</ul>
							</li>
							<li class="dropdown">
							<a href="search.php">Search <i class="icon-angle-down"></i></a>
							
							</li>
							<li class="dropdown">
							<a href="#">Setting <i class="icon-angle-down"></i></a>
							<ul class="dropdown-menu bold">
								<li><a href="#">Blog left sidebar</a></li>
								<li><a href="#">Blog right sidebar</a></li>
								<li><a href="changePassword.php">Change Password</a></li>
								<li><a href="#">Account Setting</a></li>
							</ul>
							</li>
							<li>
								<a href="#"><?php $userName = $_POST['userName']; echo $userName;?> </a>
							</li>
						</ul>
						</nav>
					</div>
					<!-- end navigation -->
				</div>
			</div>
			</div>
		</div>
	</header>	
	<!-- end header -->
	

    <!-- javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
	<script src="js/custom.js"></script>

</body></html>