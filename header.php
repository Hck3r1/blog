<!-- Header
		    ================================================== -->
		<header class="clearfix">
			<!-- Bootstrap navbar -->
			<nav class="navbar navbar-default navbar-static-top" role="navigation">

				<!-- Top line -->
				<div class="top-line">
					<div class="container">
						<div class="row">
							<div class="col-md-9">
								<ul class="top-line-list">
									<li>
										<span class="city-weather">Akure, Ondo</span>
										
									</li>
									<li><span class="time-now"><p> <script language=javascript>
										todaysDate = new Date();
										dayarray = new
										Array("Sun", "Mon", "Tues", "Wed", "Thur", "Fri",
										  "Saturday");
										montharray = new Array("Jan", "Feb", "Mar", "Apr",
										  "May", "Jun", "Jul", "Aug", "Sept", "Oct", "Nov", "Dec");
										document.write(dayarray[todaysDate.getDay()] + ", " +
										  montharray[todaysDate.getMonth()] + " " + todaysDate.getDate() + ", ");
										if (todaysDate.getYear() <
										  1000) {
										  document.write(todaysDate.getYear() + 1900);
										} else {
										  document.write(todaysDate.getYear());
										}
									  </script>
									  </p></span></li>
									  <li><a href="io/" target="blank">Admin</a></li>
									<li><a href="contact.html">Contact</a></li>
								</ul>
							</div>	
							<div class="col-md-3">
								<ul class="social-icons">
									<li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a class="rss" href="#"><i class="fa fa-rss"></i></a></li>
									<li><a class="google" href="#"><i class="fa fa-google-plus"></i></a></li>
									<li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
									<li><a class="pinterest" href="#"><i class="fa fa-pinterest"></i></a></li>
								</ul>
							</div>	
						</div>
					</div>
				</div>
				<!-- End Top line -->

				<!-- Logo & advertisement -->
				<div class="logo-advertisement">
					<div class="container">

						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand" href="index.php"><img src="images/logo.png" alt=""></a>
						</div>

						<div class="advertisement">
							<div class="desktop-advert">
								<span>Advertisement</span>
								<img src="upload/addsense/728x90.jpg" alt="">
							</div>
							<div class="tablet-advert">
								<span>Advertisement</span>
								<img src="upload/addsense/468x60.jpg" alt="">
							</div>
						</div>
					</div>
				</div>
				<!-- End Logo & advertisement -->

				<!-- navbar list container -->
				<div class="nav-list-container">
					<div class="container">
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav navbar-left">

								<li class="drop"><a  href="index.php">Home</a></li>
								<li class="drop"><a class="home" href="cat.php?cat=Politics">Politics</a></li>
								<li class="drop"><a class="home" href="">News</a>
									<ul class="dropdown">
											<li><a href="cat.php?cat=Nigeria">Nigeria News</a></li>
											<li><a href="cat.php?cat=World">World News</a></li>
											<li><a href="cat.php?cat=Crime">Crime</a></li>
											<li><a href="cat.php?cat=Environment">Environment</a></li>
											<li><a href="cat.php?cat=Natural">Natural Disaster</a></li>
											
								</ul>
								</li>
								<li class="drop"><a class="home" href="cat.php?cat=Business">Business</a></li>
								
								<li class="drop"><a class="home" href="">Culture</a>
									<ul class="dropdown">
											<li><a href="cat.php?cat=Lifestyle">Lifestyle</a></li>
											<li><a href="cat.php?cat=Entertainment">Entertainment</a></li>
											<li><a href="cat.php?cat=Tourism">Tourism</a></li>
											<li><a href="cat.php?cat=Fashion">Fashion</a></li>
											</ul>
								</li>
								
											
								<li><a class="sport" href="cat.php?cat=Sports">Sport</a></li>
								<li><a class="food" href="cat.php?cat=Health">Food &amp; Health</a></li>

							
							</ul>
							<form class="navbar-form navbar-right" action="search.php" method="POST" role="search">
								<input type="text" id="search" name="search" placeholder="Search here">
								<button type="submit" id="search-submit"><i class="fa fa-search"></i></button>
							</form>
						</div>
						<!-- /.navbar-collapse -->
					</div>
				</div>
				<!-- End navbar list container -->

			</nav>
			<!-- End Bootstrap navbar -->

		</header>
		<!-- End Header -->