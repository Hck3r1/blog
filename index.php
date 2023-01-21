<!doctype html>
<html lang="en" class="no-js">


<head>
	<title>Feranmi's Blog</title>

	<meta charset="utf-8">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900,400italic' rel='stylesheet' type='text/css'>
	<link href="../../../maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" media="screen">	
	<link rel="stylesheet" type="text/css" href="css/jquery.bxslider.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/magnific-popup.css" media="screen">	
	<link rel="stylesheet" type="text/css" href="css/owl.carousel.css" media="screen">
    <link rel="stylesheet" type="text/css" href="css/owl.theme.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/ticker-style.css"/>
	<link rel="stylesheet" type="text/css" href="css/style.css" media="screen">

</head>
<body>

	<!-- Container -->
	<div id="container">

    <?php include('header.php'); ?>

		<!-- heading-news-section
			================================================== -->
		<section class="heading-news">

			<div class="iso-call heading-news-box">

				<div class="news-post image-post default-size">
                <?php
                                    include('dataconn.php');
                                    $sql1 = "SELECT * FROM `news` WHERE category='Crime' ORDER BY `id` DESC LIMIT 1";
                                    $result = mysqli_query($conn, $sql1);
                                    if (mysqli_num_rows($result) > 0) {
                                     while($row = mysqli_fetch_array($result)) {
                                          
                                    
                                    ?>
					<img src="io/dashboard/cover/<?php echo $row['cover']; ?>" alt="" height="210px">
					<div class="hover-box">
						<div class="inner-hover">
							<a class="category-post travel" <?php echo "href='cat.php?cat=".$row['category']."'"?>><?php echo $row['category']; ?></a>
							<h2><a <?php echo "href='news.php?a=".$row['a']."'"?>><?php echo $row['headline']; ?></a></h2>
							<ul class="post-tags">
								<li><i class="fa fa-clock-o"></i><span><?php echo $row['date']; ?></span></li>
								<!-- <li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li> -->
							</ul>
							
						</div>
					</div>
                    <?php
                        }
                        }
                                                            
                                                            
                        mysqli_close($conn);
                                        
                        ?>             
				</div>

				<div class="image-slider snd-size">
					<span class="top-stories">TOP STORIES</span>
					<ul class="bxslider">
                    <?php
                                    include('dataconn.php');
                                    $sql1 = "SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as date FROM `news` ORDER BY `id` DESC LIMIT 5";
                                    $result = mysqli_query($conn, $sql1);
                                    if (mysqli_num_rows($result) > 0) {
                                     while($row = mysqli_fetch_array($result)) {
                                          
                                    
                                    ?>
						<li>
                            
							<div class="news-post image-post">
								<img src="io/dashboard/cover/<?php echo $row['cover']; ?>" alt="" height="420px">
								<div class="hover-box">
									<div class="inner-hover">  
										<a class="category-post world" <?php echo "href='cat.php?cat=".$row['category']."'"?>><?php echo $row['category']; ?></a>
										<h2><a <?php echo "href='news.php?a=".$row['a']."'"?>><?php echo $row['headline']; ?></a></h2>
										<ul class="post-tags">
											<li><i class="fa fa-clock-o"></i><?php echo $row['date']; ?></li>
											<li><i class="fa fa-user"></i>by <a href="#">Admin</a></li>
											<!-- <li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li> -->
											<!-- <li><i class="fa fa-eye"></i>872</li> -->
										</ul>
									</div>
                                    
								</div>
							</div>
                            
						</li>
                        <?php
}
}
                                     
                                    
mysqli_close($conn);
                
?>             
					</ul>
				</div>

				<div class="news-post image-post">
                <?php
                                    include('dataconn.php');
                                    $sql1 = "SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as date FROM `news` WHERE category='Health' ORDER BY `id` DESC LIMIT 1";
                                    $result = mysqli_query($conn, $sql1);
                                    if (mysqli_num_rows($result) > 0) {
                                     while($row = mysqli_fetch_array($result)) {
                                          
                                    
                                    ?>
					<img src="io/dashboard/cover/<?php echo $row['cover']; ?>" alt="" height="210px">
					<div class="hover-box">
						<div class="inner-hover">
							<a class="category-post food" <?php echo "href='cat.php?cat=".$row['category']."'"?>><?php echo $row['category']; ?></a>
							<h2><a <?php echo "href='news.php?a=".$row['a']."'"?>><?php echo $row['headline']; ?></a></h2>
							<ul class="post-tags">
								<li><i class="fa fa-clock-o"></i><span><?php echo $row['date']; ?></span></li>
								<!-- <li><a href="#"><i class="fa fa-comments-o"></i><span>20</span></a></li> -->
							</ul>
							
						</div>
					</div>
                    <?php
}
}
                                     
                                    
mysqli_close($conn);
                
?>  
				</div>

				<div class="news-post image-post">
                <?php
                                    include('dataconn.php');
                                    $sql1 = "SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as date FROM `news` WHERE category='Crime' ORDER BY `id` DESC LIMIT 1";
                                    $result = mysqli_query($conn, $sql1);
                                    if (mysqli_num_rows($result) > 0) {
                                     while($row = mysqli_fetch_array($result)) {
                                          
                                    
                                    ?>
					<img src="io/dashboard/cover/<?php echo $row['cover']; ?>" alt="" height="210px">
					<div class="hover-box">
						<div class="inner-hover">
							<a class="category-post travel" <?php echo "href='cat.php?cat=".$row['category']."'"?>><?php echo $row['category']; ?></a>
							<h2><a <?php echo "href='news.php?id=".$row['a']."'"?>><?php echo $row['headline']; ?></a></h2>
							<ul class="post-tags">
								<li><i class="fa fa-clock-o"></i><span><?php echo $row['date']; ?></span></li>
								<!-- <li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li> -->
							</ul>
						
						</div>
					</div>
                    <?php
}
}
                                     
                                    
mysqli_close($conn);
                
?>  
				</div>

				<div class="news-post image-post">
                <?php
                                    include('dataconn.php');
                                    $sql1 = "SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as date FROM `news` WHERE category='Nigeria' ORDER BY `id` DESC LIMIT 1";
                                    $result = mysqli_query($conn, $sql1);
                                    if (mysqli_num_rows($result) > 0) {
                                     while($row = mysqli_fetch_array($result)) {
                                          
                                    
                                    ?>
					<img src="io/dashboard/cover/<?php echo $row['cover']; ?>" alt="" height="210px">
					<div class="hover-box">
						<div class="inner-hover">
							<a class="category-post sport" <?php echo "href='cat.php?cat=".$row['category']."'"?>><?php echo $row['category']; ?></a>
							<h2><a <?php echo "href='news.php?a=".$row['a']."'"?>><?php echo $row['headline']; ?> </a></h2>
							<ul class="post-tags">
								<li><i class="fa fa-clock-o"></i><span><?php echo $row['date']; ?></span></li>
								<!-- <li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li> -->
							</ul>
							
						</div>
					</div>
                    <?php
}
}
                                     
                                    
mysqli_close($conn);
                
?>  
				</div>

				<div class="news-post image-post">
                <?php
                                    include('dataconn.php');
                                    $sql1 = "SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as date FROM `news` WHERE category='Politics' ORDER BY `id` DESC LIMIT 1";
                                    $result = mysqli_query($conn, $sql1);
                                    if (mysqli_num_rows($result) > 0) {
                                     while($row = mysqli_fetch_array($result)) {
                                          
                                    
                                    ?>
					<img src="io/dashboard/cover/<?php echo $row['cover']; ?>" alt="" height="210px">
					<div class="hover-box">
						<div class="inner-hover">
							<a class="category-post fashion" <?php echo "href='cat.php?cat=".$row['category']."'"?>><?php echo $row['category']; ?></a>
							<h2><a <?php echo "href='news.php?a=".$row['a']."'"?>><?php echo $row['headline']; ?> </a></h2>
							<ul class="post-tags">
								<li><i class="fa fa-clock-o"></i><span><?php echo $row['date']; ?></span></li>
								<!-- <li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li> -->
							</ul>
						</div>
					</div>
                    <?php
}
}
                                     
                                    
mysqli_close($conn);
                
?>  
				</div>

				<div class="news-post image-post">
                <?php
                                    include('dataconn.php');
                                    $sql1 = "SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as date FROM `news` WHERE category='Sports' ORDER BY `id` DESC LIMIT 1";
                                    $result = mysqli_query($conn, $sql1);
                                    if (mysqli_num_rows($result) > 0) {
                                     while($row = mysqli_fetch_array($result)) {
                                          
                                    
                                    ?>
					<img src="io/dashboard/cover/<?php echo $row['cover']; ?>" alt="" height="210px">
					<div class="hover-box">
						<div class="inner-hover">
							<a class="category-post travel" <?php echo "href='cat.php?cat=".$row['category']."'"?>><?php echo $row['category']; ?></a>
							<h2><a <?php echo "href='news.php?a=".$row['a']."'"?>><?php echo $row['headline']; ?></a></h2>
							<ul class="post-tags">
								<li><i class="fa fa-clock-o"></i><span><?php echo $row['date']; ?></span></li>
								<!-- <li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li> -->
							</ul>
							
						</div>
					</div>
                    <?php
}
}
                                     
                                    
mysqli_close($conn);
                
?>  
				</div>

				<	<div class="news-post image-post">
                <?php
                                    include('dataconn.php');
                                    $sql1 = "SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as date FROM `news` WHERE category='Health' ORDER BY `id` DESC LIMIT 1";
                                    $result = mysqli_query($conn, $sql1);
                                    if (mysqli_num_rows($result) > 0) {
                                     while($row = mysqli_fetch_array($result)) {
                                          
                                    
                                    ?>
					<img src="io/dashboard/cover/<?php echo $row['cover']; ?>" alt="" height="210px">
					<div class="hover-box">
						<div class="inner-hover">
							<a class="category-post food" <?php echo "href='cat.php?cat=".$row['category']."'"?>><?php echo $row['category']; ?></a>
							<h2><a <?php echo "href='news.php?a=".$row['a']."'"?>><?php echo $row['headline']; ?></a></h2>
							<ul class="post-tags">
								<li><i class="fa fa-clock-o"></i><span><?php echo $row['date']; ?></span></li>
								<!-- <li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li> -->
							</ul>
							
						</div>
					</div>
                    <?php
}
}
                                     
                                    
mysqli_close($conn);
                
?>  
				</div>

                <div class="news-post image-post">
                <?php
                                    include('dataconn.php');
                                    $sql1 = "SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as date FROM `news` WHERE category='Health' ORDER BY `id` DESC LIMIT 1";
                                    $result = mysqli_query($conn, $sql1);
                                    if (mysqli_num_rows($result) > 0) {
                                     while($row = mysqli_fetch_array($result)) {
                                          
                                    
                                    ?>
					<img src="io/dashboard/cover/<?php echo $row['cover']; ?>" alt="" height="210px">
					<div class="hover-box">
						<div class="inner-hover">
							<a class="category-post fashion" <?php echo "href='cat.php?cat=".$row['category']."'"?>><?php echo $row['category']; ?></a>
							<h2><a <?php echo "href='news.php?a=".$row['a']."'"?>><?php echo $row['headline']; ?></a></h2>
							<ul class="post-tags">
								<li><i class="fa fa-clock-o"></i><span><?php echo $row['date']; ?></span></li>
								<!-- <li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li> -->
							</ul>
							
						</div>
					</div>
                    <?php
}
}
                                     
                                    
mysqli_close($conn);
                
?>  
				</div>
		</section>
		<!-- End heading-news-section -->

		<!-- ticker-news-section
			================================================== -->
		<section class="ticker-news">

			<div class="container">
				<div class="ticker-news-box">
					<span class="breaking-news">breaking news</span>
					<span class="new-news">New</span>
					<ul id="js-news">
                    <?php
                                    include('dataconn.php');
                                    $sql1 = "SELECT * FROM `news` WHERE category='Breaking'";
                                    $result = mysqli_query($conn, $sql1);
                                    if (mysqli_num_rows($result) > 0) {
                                     while($row = mysqli_fetch_array($result)) {
                                          
                                    
                                    ?>
						<li class="news-item"><span class="time-news"><?php echo $row['time']; ?></span>  <a <?php echo "href='news.php?a=".$row['a']."'"?>><?php echo $row['headline']; ?></a></li>
                        <?php
}
}
                                     
                                    
mysqli_close($conn);
                
?>               	
                    </ul>
				</div>
			</div>

		</section>
		<!-- End ticker-news-section -->

		<!-- features-today-section
			================================================== -->
		<section class="features-today">
			<div class="container">

				<div class="title-section">
					<h1><span>Today's Featured</span></h1>
				</div>

				<div class="features-today-box owl-wrapper">
					<div class="owl-carousel" data-num="4">
                    <?php
                                    include('dataconn.php');
                                    $sql1 = "SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as date FROM `news`  ORDER BY `id` DESC LIMIT 4";
                                    $result = mysqli_query($conn, $sql1);
                                    if (mysqli_num_rows($result) > 0) {
                                     while($row = mysqli_fetch_array($result)) {
                                          
                                    
                                    ?>
						<div class="item news-post standard-post">
                       
							<div class="post-gallery">
                           
                            <img src="io/dashboard/cover/<?php echo $row['cover']; ?>" alt="" height="210px">
								<a class="category-post world" <?php echo "href='cat.php?cat=".$row['category']."'"?>><?php echo $row['category']; ?></a>
							</div>
							<div class="post-content">
								<h2><a <?php echo "href='news.php?a=".$row['a']."'"?>><?php echo $row['headline']; ?>.</a></h2>
								<ul class="post-tags">
									<li><i class="fa fa-clock-o"></i><?php echo $row['date']; ?></li>
									<li><i class="fa fa-user"></i>by <a href="#">Admin</a></li>
									<li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
								</ul>
                                
			
							</div>
                            
                           			</div>
                                       <?php
}
}
                                     
                                    
mysqli_close($conn);
                
?>  

					</div>
				</div>

			</div>
		</section>
		<!-- End features-today-section -->

		<!-- block-wrapper-section
			================================================== -->
		<section class="block-wrapper">
			<div class="container">
				<div class="row">
					<div class="col-sm-8">

						<!-- block content -->
						<div class="block-content">

							<!-- carousel box -->
							<div class="carousel-box owl-wrapper">

								<div class="title-section">
									<h1><span class="world">NIGERIA</span></h1>
								</div>

								<div class="owl-carousel" data-num="2">

									<div class="item">
                                    
										<div class="news-post image-post2">
										<?php
                                    include('dataconn.php');
                                    $sql1 = "SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as date FROM `news` WHERE category='Nigeria' ORDER BY `id` DESC LIMIT 1";
                                    $result = mysqli_query($conn, $sql1);
                                    if (mysqli_num_rows($result) > 0) {
                                     while($row = mysqli_fetch_array($result)) {
                                          
                                    
                                    ?>
											<div class="post-gallery">
                                            <img src="io/dashboard/cover/<?php echo $row['cover']; ?>" alt="" height="320px">
												<div class="hover-box">
													<div class="inner-hover">
														<h2><a <?php echo "href='news.php?a=".$row['a']."'"?>><?php echo $row['headline']; ?></a></h2>
														<ul class="post-tags">
															<li><i class="fa fa-clock-o"></i><?php echo $row['date']; ?></li>
															<li><i class="fa fa-user"></i>by <a href="#">Admin</a></li>
															<!-- <li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
															<li><i class="fa fa-eye"></i>872</li> -->
														</ul>
													</div>
												</div>
											</div>
                                            <?php
}
}
                                     
                                    
mysqli_close($conn);
                
?>  						
										</div>

										<ul class="list-posts">
                                        <?php
                                    include('dataconn.php');
                                    $sql1 = "SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as date FROM `news` WHERE category='Nigeria' ORDER BY `id` DESC LIMIT 0, 3";
                                    $result = mysqli_query($conn, $sql1);
                                    if (mysqli_num_rows($result) > 0) {
                                     while($row = mysqli_fetch_array($result)) {
                                          
                                    
                                    ?>
											<li>
                                            <img src="io/dashboard/cover/<?php echo $row['cover']; ?>" alt="" height="70px">
												<div class="post-content">
													<h2><a <?php echo "href='news.php?a=".$row['a']."'"?>><?php echo $row['headline']; ?> </a></h2>
													<ul class="post-tags">
														<li><i class="fa fa-clock-o"></i><?php echo $row['date']; ?></li>
													</ul>
												</div>
											</li>

                                            <?php
}
}
                                     
                                    
mysqli_close($conn);
                
?>  						
										</ul>
                                       			
									</div>
								
									
								
									

								</div>

							</div>
							<!-- End carousel box -->

							<!-- carousel box -->
							<!-- <div class="carousel-box owl-wrapper">
								<div class="title-section">
									<h1><span>Gallery</span></h1>
								</div>
								<div class="owl-carousel" data-num="3">
								
									<div class="item news-post image-post3">
										<img src="upload/news-posts/gal1.jpg" alt="">
										<div class="hover-box">
											<h2><a href="single-post.html">Donec odio. Quisque volutpat mattis eros.</a></h2>
											<ul class="post-tags">
												<li><i class="fa fa-clock-o"></i>27 may 2013</li>
											</ul>
										</div>
									</div>
								
									<div class="item news-post image-post3">
										<img src="upload/news-posts/gal2.jpg" alt="">
										<div class="hover-box">
											<h2><a href="single-post.html">Nullam malesuada erat ut turpis. </a></h2>
											<ul class="post-tags">
												<li><i class="fa fa-clock-o"></i>27 may 2013</li>
											</ul>
										</div>
									</div>
								
									<div class="item news-post image-post3">
										<img src="upload/news-posts/gal3.jpg" alt="">
										<div class="hover-box">
											<h2><a href="single-post.html">Suspendisse urna nibh.</a></h2>
											<ul class="post-tags">
												<li><i class="fa fa-clock-o"></i>27 may 2013</li>
											</ul>
										</div>
									</div>
								
									<div class="item news-post image-post3">
										<img src="upload/news-posts/gal4.jpg" alt="">
										<div class="hover-box">
											<h2><a href="single-post.html">Donec nec justo eget felis facilisis fermentum. Aliquam </a></h2>
											<ul class="post-tags">
												<li><i class="fa fa-clock-o"></i>27 may 2013</li>
											</ul>
										</div>
									</div>
								
									<div class="item news-post image-post3">
										<img src="upload/news-posts/gal1.jpg" alt="">
										<div class="hover-box">
											<h2><a href="single-post.html">Donec odio. Quisque volutpat mattis eros.</a></h2>
											<ul class="post-tags">
												<li><i class="fa fa-clock-o"></i>27 may 2013</li>
											</ul>
										</div>
									</div>

								</div>
							</div> -->
							<!-- End carousel box -->

							<!-- grid box -->
							<div class="grid-box">
								<div class="row">

									<div class="col-md-6">
										<div class="title-section">
											<h1><span class="fashion">Fashion</span></h1>
										</div>
										<div class="image-post-slider">
											<ul class="bxslider">
											<?php
                                    include('dataconn.php');
                                    $sql1 = "SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as date FROM `news` WHERE category='Fashion' ORDER BY `a` DESC LIMIT 0, 3";
                                    $result = mysqli_query($conn, $sql1);
                                    if (mysqli_num_rows($result) > 0) {
                                     while($row = mysqli_fetch_array($result)) {
                                          
                                    
                                    ?>
												<li>
													<div class="news-post image-post2">
														<div class="post-gallery">
															<img src="io/dashboard/cover/<?php echo $row['cover']; ?>" alt="" height="280px">
															<div class="hover-box">
																<div class="inner-hover">
																	<h2><a href="single-post.html"><?php echo $row['headline']; ?> </a></h2>
																	<ul class="post-tags">
																		<li><i class="fa fa-clock-o"></i><?php echo $row['date']; ?></li>
																		<li><i class="fa fa-user"></i>by <a href="#">John Doe</a></li>
																		<!-- <li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
																		<li><i class="fa fa-eye"></i>872</li> -->
																	</ul>
																</div>
															</div>
														</div>
													</div>
												</li>
												
												</li>
												<?php
}
}
                                     
                                    
mysqli_close($conn);
                
?>  						
											</ul>
										</div>
									</div>

									<div class="col-md-6">
										<div class="title-section">
											<h1><span class="world">Lifestyle</span></h1>
										</div>

										<div class="owl-wrapper">
											<div class="owl-carousel" data-num="1">
											
												<div class="item">
													<ul class="list-posts">
													
														<li>
														<?php
                                    include('dataconn.php');
                                    $sql1 = "SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as date FROM `news` WHERE category='Lifestyle' ORDER BY `id` DESC LIMIT 0, 6";
                                    $result = mysqli_query($conn, $sql1);
                                    if (mysqli_num_rows($result) > 0) {
                                     while($row = mysqli_fetch_array($result)) {
                                          
                                    
                                    ?>
															<img src="io/dashboard/cover/<?php echo $row['cover']; ?>"alt="">
															<div class="post-content">
																<h2><a <?php echo "href='news.php?a=".$row['a']."'"?>><?php echo $row['headline']; ?></a></h2>
																<ul class="post-tags">
																	<li><i class="fa fa-clock-o"></i><?php echo $row['date']; ?></li>
																</ul>
															</div>
															<?php
}
}
                                     
                                    
mysqli_close($conn);
                
?>  						
														</li>
														<?php
// }
// }
                                     
                                    
// mysqli_close($conn);
                
?>  						
													</ul>
												</div>

												

											</div>
										</div>

									</div>

								</div>
							</div>
							<!-- End grid box -->

							<!-- google addsense -->
							<div class="advertisement">
								<div class="desktop-advert">
									<span>Advertisement</span>
									<img src="upload/addsense/728x90-white.jpg" alt="">
								</div>
								<div class="tablet-advert">
									<span>Advertisement</span>
									<img src="upload/addsense/468x60-white.jpg" alt="">
								</div>
								<div class="mobile-advert">
									<span>Advertisement</span>
									<img src="upload/addsense/300x250.jpg" alt="">
								</div>
							</div>
							<!-- End google addsense -->

						</div>
						<!-- End block content -->

					</div>

					<div class="col-sm-4">

						<!-- sidebar -->
						<div class="sidebar">

							<div class="widget social-widget">
								<div class="title-section">
									<h1><span>Stay Connected</span></h1>
								</div>
								<ul class="social-share">
									<li>
										<a href="#" class="rss"><i class="fa fa-rss"></i></a>
										<span class="number">9,455</span>
										<span>Subscribers</span>
									</li>
									<li>
										<a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
										<span class="number">56,743</span>
										<span>Fans</span>
									</li>
									<li>
										<a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
										<span class="number">43,501</span>
										<span>Followers</span>
									</li>
									<li>
										<a href="#" class="google"><i class="fa fa-google-plus"></i></a>
										<span class="number">35,003</span>
										<span>Followers</span>
									</li>
								</ul>
							</div>

							<div class="widget features-slide-widget">
								<div class="title-section">
									<h1><span>Featured Posts</span></h1>
								</div>
								<div class="image-post-slider">
									<ul class="bxslider">
									<?php
                                    include('dataconn.php');
                                    $sql1 = "SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as date FROM `news` ORDER BY RAND() ASC LIMIT 3";
                                    $result = mysqli_query($conn, $sql1);
                                    if (mysqli_num_rows($result) > 0) {
                                     while($row = mysqli_fetch_array($result)) {
                                          
                                    
                                    ?>
										<li>
											<div class="news-post image-post2">
												<div class="post-gallery">
												<a <?php echo "href='news.php?a=".$row['a']."'"?>><img src="io/dashboard/cover/<?php echo $row['cover']; ?>" alt="" height="210px"></a>
													<div class="hover-box">
														<div class="inner-hover">
															<h2><a <?php echo "href='news.php?a=".$row['a']."'"?>><?php echo $row['headline']; ?></a></h2>
															<ul class="post-tags">
																<li><i class="fa fa-clock-o"></i><?php echo $row['date']; ?></li>
																<li><i class="fa fa-user"></i>by <?php echo $row['designation']; ?></a></li>
																<!-- <li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li> -->
																<!-- <li><i class="fa fa-eye"></i>872</li> -->
															</ul>
														</div>
													</div>
												</div>
											</div>
										</li>
										<?php
}
}
                                     
                                    
mysqli_close($conn);
                
?>            
									</ul>
								</div>
							</div>

							<div class="widget subscribe-widget">
								<form class="subscribe-form">
									<h1>Subscribe to RSS Feeds</h1>
									<input type="text" name="sumbscribe" id="subscribe" placeholder="Email"/>
									<button id="submit-subscribe">
										<i class="fa fa-arrow-circle-right"></i>
									</button>
									<p>Get all latest content delivered to your email a few times a month.</p>
								</form>
							</div>

							<div class="advertisement">
								<div class="desktop-advert">
									<span>Advertisement</span>
									<img src="upload/addsense/300x250.jpg" alt="">
								</div>
								<div class="tablet-advert">
									<span>Advertisement</span>
									<img src="upload/addsense/200x200.jpg" alt="">
								</div>
								<div class="mobile-advert">
									<span>Advertisement</span>
									<img src="upload/addsense/300x250.jpg" alt="">
								</div>
							</div>

						</div>
						<!-- End sidebar -->

					</div>

				</div>

			</div>
		</section>
		<!-- End block-wrapper-section -->

		<!-- feature-video-section 
			================================================== -->
		<!--<section class="feature-video">-->
		<!--	<div class="container">-->
		<!--		<div class="title-section white">-->
		<!--			<h1><span>Featured Video</span></h1>-->
		<!--		</div>-->

		<!--		<div class="features-video-box owl-wrapper">-->
		<!--			<div class="owl-carousel" data-num="4">-->
					
		<!--				<div class="item news-post video-post">-->
		<!--					<img alt="" src="upload/news-posts/video1.jpg">-->
		<!--					<a href="https://www.youtube.com/watch?v=LL59es7iy8Q" class="video-link"><i class="fa fa-play-circle-o"></i></a>-->
		<!--					<div class="hover-box">-->
		<!--						<h2><a href="single-post.html">Lorem ipsum dolor sit consectetuer adipiscing elit. Donec odio. </a></h2>-->
		<!--						<ul class="post-tags">-->
		<!--							<li><i class="fa fa-clock-o"></i>27 may 2013</li>-->
		<!--						</ul>-->
		<!--					</div>-->
		<!--				</div>-->
					
		<!--				<div class="item news-post video-post">-->
		<!--					<img alt="" src="upload/news-posts/video2.jpg">-->
		<!--					<a href="https://www.youtube.com/watch?v=LL59es7iy8Q" class="video-link"><i class="fa fa-play-circle-o"></i></a>-->
		<!--					<div class="hover-box">-->
		<!--						<h2><a href="single-post.html">Quisque volutpat mattis eros. </a></h2>-->
		<!--						<ul class="post-tags">-->
		<!--							<li><i class="fa fa-clock-o"></i>27 may 2013</li>-->
		<!--						</ul>-->
		<!--					</div>-->
		<!--				</div>-->
					
		<!--				<div class="item news-post video-post">-->
		<!--					<img alt="" src="upload/news-posts/video3.jpg">-->
		<!--					<a href="https://www.youtube.com/watch?v=LL59es7iy8Q" class="video-link"><i class="fa fa-play-circle-o"></i></a>-->
		<!--					<div class="hover-box">-->
		<!--						<h2><a href="single-post.html">Nullam malesuada erat ut turpis. </a></h2>-->
		<!--						<ul class="post-tags">-->
		<!--							<li><i class="fa fa-clock-o"></i>27 may 2013</li>-->
		<!--						</ul>-->
		<!--					</div>-->
		<!--				</div>-->
					
		<!--				<div class="item news-post video-post">-->
		<!--					<img alt="" src="upload/news-posts/video4.jpg">-->
		<!--					<a href="https://www.youtube.com/watch?v=LL59es7iy8Q" class="video-link"><i class="fa fa-play-circle-o"></i></a>-->
		<!--					<div class="hover-box">-->
		<!--						<h2><a href="single-post.html">Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.</a></h2>-->
		<!--						<ul class="post-tags">-->
		<!--							<li><i class="fa fa-clock-o"></i>27 may 2013</li>-->
		<!--						</ul>-->
		<!--					</div>-->
		<!--				</div>-->
					
		<!--				<div class="item news-post video-post">-->
		<!--					<img alt="" src="upload/news-posts/video1.jpg">-->
		<!--					<a href="https://www.youtube.com/watch?v=LL59es7iy8Q" class="video-link"><i class="fa fa-play-circle-o"></i></a>-->
		<!--					<div class="hover-box">-->
		<!--						<h2><a href="single-post.html">Lorem ipsum dolor sit consectetuer adipiscing elit. Donec odio. </a></h2>-->
		<!--						<ul class="post-tags">-->
		<!--							<li><i class="fa fa-clock-o"></i>27 may 2013</li>-->
		<!--						</ul>-->
		<!--					</div>-->
		<!--				</div>-->
					
		<!--				<div class="item news-post video-post">-->
		<!--					<img alt="" src="upload/news-posts/video2.jpg">-->
		<!--					<a href="https://www.youtube.com/watch?v=LL59es7iy8Q" class="video-link"><i class="fa fa-play-circle-o"></i></a>-->
		<!--					<div class="hover-box">-->
		<!--						<h2><a href="single-post.html">Quisque volutpat mattis eros. </a></h2>-->
		<!--						<ul class="post-tags">-->
		<!--							<li><i class="fa fa-clock-o"></i>27 may 2013</li>-->
		<!--						</ul>-->
		<!--					</div>-->
		<!--				</div>-->
					
		<!--				<div class="item news-post video-post">-->
		<!--					<img alt="" src="upload/news-posts/video3.jpg">-->
		<!--					<a href="https://www.youtube.com/watch?v=LL59es7iy8Q" class="video-link"><i class="fa fa-play-circle-o"></i></a>-->
		<!--					<div class="hover-box">-->
		<!--						<h2><a href="single-post.html">Nullam malesuada erat ut turpis. </a></h2>-->
		<!--						<ul class="post-tags">-->
		<!--							<li><i class="fa fa-clock-o"></i>27 may 2013</li>-->
		<!--						</ul>-->
		<!--					</div>-->
		<!--				</div>-->
					
		<!--				<div class="item news-post video-post">-->
		<!--					<img alt="" src="upload/news-posts/video4.jpg">-->
		<!--					<a href="https://www.youtube.com/watch?v=LL59es7iy8Q" class="video-link"><i class="fa fa-play-circle-o"></i></a>-->
		<!--					<div class="hover-box">-->
		<!--						<h2><a href="single-post.html">Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.</a></h2>-->
		<!--						<ul class="post-tags">-->
		<!--							<li><i class="fa fa-clock-o"></i>27 may 2013</li>-->
		<!--						</ul>-->
		<!--					</div>-->
		<!--				</div>-->

		<!--			</div>-->
		<!--		</div>-->
		<!--	</div>-->
		<!--</section>-->
		<!-- End feature-video-section -->

		<!-- block-wrapper-section
			================================================== -->
		<!--<section class="block-wrapper">-->
		<!--	<div class="container">-->
		<!--		<div class="row">-->
		<!--			<div class="col-sm-8">-->

						<!-- block content -->
		<!--				<div class="block-content">-->

							<!-- masonry box -->
		<!--					<div class="masonry-box">-->

		<!--						<div class="title-section">-->
		<!--							<h1><span>Latest Articles</span></h1>-->
		<!--						</div>-->

		<!--						<div class="latest-articles iso-call">-->

		<!--							<div class="news-post standard-post2 default-size">-->
		<!--								<div class="post-gallery">-->
		<!--									<img src="upload/news-posts/1.jpg" alt="">-->
		<!--								</div>-->
		<!--								<div class="post-title">-->
		<!--									<h2><a href="single-post.html">Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. </a></h2>-->
		<!--									<ul class="post-tags">-->
		<!--										<li><i class="fa fa-clock-o"></i>27 may 2013</li>-->
		<!--										<li><i class="fa fa-user"></i>by <a href="#">John Doe</a></li>-->
		<!--										<li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>-->
		<!--									</ul>-->
		<!--								</div>-->
		<!--							</div>-->

		<!--							<div class="news-post standard-post2">-->
		<!--								<div class="post-gallery">-->
		<!--									<img src="upload/news-posts/2.jpg" alt="">-->
		<!--								</div>-->
		<!--								<div class="post-title">-->
		<!--									<h2><a href="single-post.html">Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. </a></h2>-->
		<!--									<ul class="post-tags">-->
		<!--										<li><i class="fa fa-clock-o"></i>27 may 2013</li>-->
		<!--										<li><i class="fa fa-user"></i>by <a href="#">John Doe</a></li>-->
		<!--										<li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>-->
		<!--									</ul>-->
		<!--								</div>-->
		<!--							</div>-->

		<!--							<div class="news-post standard-post2">-->
		<!--								<div class="post-gallery">-->
		<!--									<img src="upload/news-posts/3.jpg" alt="">-->
		<!--								</div>-->
		<!--								<div class="post-title">-->
		<!--									<h2><a href="single-post.html">Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. </a></h2>-->
		<!--									<ul class="post-tags">-->
		<!--										<li><i class="fa fa-clock-o"></i>27 may 2013</li>-->
		<!--										<li><i class="fa fa-user"></i>by <a href="#">John Doe</a></li>-->
		<!--										<li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>-->
		<!--									</ul>-->
		<!--								</div>-->
		<!--							</div>-->

									

		<!--						</div>-->

		<!--					</div>-->
							<!-- End masonry box -->

							

		<!--				</div>-->
						<!-- End block content -->

					<!--</div>-->

					<div class="col-sm-4">

						<!-- sidebar -->
						<!--<div class="sidebar">-->

						<!--	<div class="widget tab-posts-widget">-->

						<!--		<ul class="nav nav-tabs" id="myTab">-->
						<!--			<li class="active">-->
						<!--				<a href="#option1" data-toggle="tab">Popular</a>-->
						<!--			</li>-->
						<!--			<li>-->
						<!--				<a href="#option2" data-toggle="tab">Recent</a>-->
						<!--			</li>-->
						<!--			<li>-->
						<!--				<a href="#option3" data-toggle="tab">Top Reviews</a>-->
						<!--			</li>-->
						<!--		</ul>-->

						<!--		<div class="tab-content">-->
						<!--			<div class="tab-pane active" id="option1">-->
						<!--				<ul class="list-posts">-->
						<!--					<li>-->
						<!--						<img src="upload/news-posts/listw1.jpg" alt="">-->
						<!--						<div class="post-content">-->
						<!--							<h2><a href="single-post.html">Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. </a></h2>-->
						<!--							<ul class="post-tags">-->
						<!--								<li><i class="fa fa-clock-o"></i>27 may 2013</li>-->
						<!--							</ul>-->
						<!--						</div>-->
						<!--					</li>-->

						<!--					<li>-->
						<!--						<img src="upload/news-posts/listw2.jpg" alt="">-->
						<!--						<div class="post-content">-->
						<!--							<h2><a href="single-post.html">Sed arcu. Cras consequat. </a></h2>-->
						<!--							<ul class="post-tags">-->
						<!--								<li><i class="fa fa-clock-o"></i>27 may 2013</li>-->
						<!--							</ul>-->
						<!--						</div>-->
						<!--					</li>-->

						<!--					<li>-->
						<!--						<img src="upload/news-posts/listw3.jpg" alt="">-->
						<!--						<div class="post-content">-->
						<!--							<h2><a href="single-post.html">Phasellus ultrices nulla quis nibh. Quisque a lectus.  </a></h2>-->
						<!--							<ul class="post-tags">-->
						<!--								<li><i class="fa fa-clock-o"></i>27 may 2013</li>-->
						<!--							</ul>-->
						<!--						</div>-->
						<!--					</li>-->

						<!--					<li>-->
						<!--						<img src="upload/news-posts/listw4.jpg" alt="">-->
						<!--						<div class="post-content">-->
						<!--							<h2><a href="single-post.html">Donec consectetuer ligula vulputate sem tristique cursus. </a></h2>-->
						<!--							<ul class="post-tags">-->
						<!--								<li><i class="fa fa-clock-o"></i>27 may 2013</li>-->
						<!--							</ul>-->
						<!--						</div>-->
						<!--					</li>-->

						<!--					<li>-->
						<!--						<img src="upload/news-posts/listw5.jpg" alt="">-->
						<!--						<div class="post-content">-->
						<!--							<h2><a href="single-post.html">Nam nulla quam, gravida non, commodo a, sodales sit amet, nisi. </a></h2>-->
						<!--							<ul class="post-tags">-->
						<!--								<li><i class="fa fa-clock-o"></i>27 may 2013</li>-->
						<!--							</ul>-->
						<!--						</div>-->
						<!--					</li>-->
						<!--				</ul>-->
						<!--			</div>-->
						<!--			<div class="tab-pane" id="option2">-->
						<!--				<ul class="list-posts">-->

						<!--					<li>-->
						<!--						<img src="upload/news-posts/listw3.jpg" alt="">-->
						<!--						<div class="post-content">-->
						<!--							<h2><a href="single-post.html">Phasellus ultrices nulla quis nibh. Quisque a lectus. </a></h2>-->
						<!--							<ul class="post-tags">-->
						<!--								<li><i class="fa fa-clock-o"></i>27 may 2013</li>-->
						<!--							</ul>-->
						<!--						</div>-->
						<!--					</li>-->

						<!--					<li>-->
						<!--						<img src="upload/news-posts/listw4.jpg" alt="">-->
						<!--						<div class="post-content">-->
						<!--							<h2><a href="single-post.html">Donec consectetuer ligula vulputate sem tristique cursus. </a></h2>-->
						<!--							<ul class="post-tags">-->
						<!--								<li><i class="fa fa-clock-o"></i>27 may 2013</li>-->
						<!--							</ul>-->
						<!--						</div>-->
						<!--					</li>-->

						<!--					<li>-->
						<!--						<img src="upload/news-posts/listw5.jpg" alt="">-->
						<!--						<div class="post-content">-->
						<!--							<h2><a href="single-post.html">Nam nulla quam, gravida non, commodo a, sodales sit amet, nisi.</a></h2>-->
						<!--							<ul class="post-tags">-->
						<!--								<li><i class="fa fa-clock-o"></i>27 may 2013</li>-->
						<!--							</ul>-->
						<!--						</div>-->
						<!--					</li>-->
						<!--					<li>-->
						<!--						<img src="upload/news-posts/listw1.jpg" alt="">-->
						<!--						<div class="post-content">-->
						<!--							<h2><a href="single-post.html">Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. </a></h2>-->
						<!--							<ul class="post-tags">-->
						<!--								<li><i class="fa fa-clock-o"></i>27 may 2013</li>-->
						<!--							</ul>-->
						<!--						</div>-->
						<!--					</li>-->

						<!--					<li>-->
						<!--						<img src="upload/news-posts/listw2.jpg" alt="">-->
						<!--						<div class="post-content">-->
						<!--							<h2><a href="single-post.html">Sed arcu. Cras consequat.</a></h2>-->
						<!--							<ul class="post-tags">-->
						<!--								<li><i class="fa fa-clock-o"></i>27 may 2013</li>-->
						<!--							</ul>-->
						<!--						</div>-->
						<!--					</li>-->
						<!--				</ul>										-->
						<!--			</div>-->
						<!--			<div class="tab-pane" id="option3">-->
						<!--				<ul class="list-posts">-->

						<!--					<li>-->
						<!--						<img src="upload/news-posts/listw4.jpg" alt="">-->
						<!--						<div class="post-content">-->
						<!--							<h2><a href="single-post.html">Donec consectetuer ligula vulputate sem tristique cursus. </a></h2>-->
						<!--							<ul class="post-tags">-->
						<!--								<li><i class="fa fa-clock-o"></i>27 may 2013</li>-->
						<!--							</ul>-->
						<!--						</div>-->
						<!--					</li>-->

						<!--					<li>-->
						<!--						<img src="upload/news-posts/listw1.jpg" alt="">-->
						<!--						<div class="post-content">-->
						<!--							<h2><a href="single-post.html">Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. </a></h2>-->
						<!--							<ul class="post-tags">-->
						<!--								<li><i class="fa fa-clock-o"></i>27 may 2013</li>-->
						<!--							</ul>-->
						<!--						</div>-->
						<!--					</li>-->

						<!--					<li>-->
						<!--						<img src="upload/news-posts/listw3.jpg" alt="">-->
						<!--						<div class="post-content">-->
						<!--							<h2><a href="single-post.html">Phasellus ultrices nulla quis nibh. Quisque a lectus.  </a></h2>-->
						<!--							<ul class="post-tags">-->
						<!--								<li><i class="fa fa-clock-o"></i>27 may 2013</li>-->
						<!--							</ul>-->
						<!--						</div>-->
						<!--					</li>-->

						<!--					<li>-->
						<!--						<img src="upload/news-posts/listw2.jpg" alt="">-->
						<!--						<div class="post-content">-->
						<!--							<h2><a href="single-post.html">Sed arcu. Cras consequat.</a></h2>-->
						<!--							<ul class="post-tags">-->
						<!--								<li><i class="fa fa-clock-o"></i>27 may 2013</li>-->
						<!--							</ul>-->
						<!--						</div>-->
						<!--					</li>-->

						<!--					<li>-->
						<!--						<img src="upload/news-posts/listw5.jpg" alt="">-->
						<!--						<div class="post-content">-->
						<!--							<h2><a href="single-post.html">Nam nulla quam, gravida non, commodo a, sodales sit amet, nisi.</a></h2>-->
						<!--							<ul class="post-tags">-->
						<!--								<li><i class="fa fa-clock-o"></i>27 may 2013</li>-->
						<!--							</ul>-->
						<!--						</div>-->
						<!--					</li>-->
						<!--				</ul>										-->
						<!--			</div>-->
						<!--		</div>-->
						<!--	</div>-->

						<!--	<div class="widget tags-widget">-->

						<!--		<div class="title-section">-->
						<!--			<h1><span>Popular Tags</span></h1>-->
						<!--		</div>-->

						<!--		<ul class="tag-list">-->
						<!--			<li><a href="cat.php?cat=Nigeria">Nigeria</a></li>-->
						<!--			<li><a href="cat.php?cat=Fashion">Fashion</a></li>-->
						<!--			<li><a href="cat.php?cat=Politics">Politics</a></li>-->
						<!--			<li><a href="cat.php?cat=Sports">Sport</a></li>-->
						<!--			<li><a href="cat.php?cat=Health">Health</a></li>-->
						<!--			<li><a href="cat.php?cat=Videos">Videos</a></li>-->
						<!--			<li><a href="cat.php?cat=Business">Business</a></li>-->
						<!--			<li><a href="cat.php?cat=Crime">Crime</a></li>-->
						<!--			<li><a href="cat.php?cat=World">World</a></li>-->
						<!--			<li><a href="cat.php?cat=Lifestyle">Lifestyle</a></li>-->
						<!--			<li><a href="cat.php?cat=Entertainment">Entertainment</a></li>-->
						<!--		</ul>-->

						<!--	</div>-->

						<!--	<div class="advertisement">-->
						<!--		<div class="desktop-advert">-->
						<!--			<span>Advertisement</span>-->
						<!--			<img src="upload/addsense/300x250.jpg" alt="">-->
						<!--		</div>-->
						<!--		<div class="tablet-advert">-->
						<!--			<span>Advertisement</span>-->
						<!--			<img src="upload/addsense/200x200.jpg" alt="">-->
						<!--		</div>-->
						<!--		<div class="mobile-advert">-->
						<!--			<span>Advertisement</span>-->
						<!--			<img src="upload/addsense/300x250.jpg" alt="">-->
						<!--		</div>-->
						<!--	</div>-->

						<!--</div>-->
						<!-- End sidebar -->

					</div>

				</div>

			</div>
		</section>
		<!-- End block-wrapper-section -->

		<?php include('footer.php'); ?>

	</div>
	<!-- End Container -->
	
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.migrate.js"></script>
	<script type="text/javascript" src="js/jquery.bxslider.min.js"></script>
	<script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery.ticker.js"></script>
	<script type="text/javascript" src="js/jquery.imagesloaded.min.js"></script>
  	<script type="text/javascript" src="js/jquery.isotope.min.js"></script>
	<script type="text/javascript" src="js/owl.carousel.min.js"></script>
	<script type="text/javascript" src="js/retina-1.1.0.min.js"></script>
	<script type="text/javascript" src="js/plugins-scroll.js"></script>
	<script type="text/javascript" src="js/script.js"></script>

</body>

<!-- Mirrored from nunforest.com/hotmagazine/default/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 13 Jul 2020 02:25:54 GMT -->
</html>