<?php
include('dataconn.php');
$today = date("d-M-Y");
if (isset($_REQUEST['a'])){

	$view_query= "UPDATE `news` SET postview=postview + " . 1 . " WHERE a = '$_REQUEST[a]'";
	$send_viewquery = mysqli_query($conn, $view_query);

    $sql1 = "SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as newDate FROM news WHERE a='$_REQUEST[a]'";
    $result = mysqli_query($conn, $sql1);
    $row = mysqli_fetch_array($result);
}
?>
<!doctype html>
<html lang="en" class="no-js">

<!-- Mirrored from nunforest.com/hotmagazine/default/single-post.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 13 Jul 2020 02:46:55 GMT -->
<head>
	<title><?php echo $row['headline']; ?></title>
    

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
                        ?>                  	
                    </ul>
				</div>
			</div>

		</section>
		<!-- End ticker-news-section -->

		<!-- block-wrapper-section
			================================================== -->
		<section class="block-wrapper">
			<div class="container">
				<div class="row">
					<div class="col-sm-8">

						<!-- block content -->
						<div class="block-content">

							<!-- single-post box -->
							<div class="single-post-box">
                            <?php
include('dataconn.php');
$today = date("d-M-Y");
if (isset($_REQUEST['a'])){
    $sql1 = "SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as newDate FROM news WHERE a='$_REQUEST[a]'";
    $result = mysqli_query($conn, $sql1);
    $row = mysqli_fetch_array($result);
}
?>
								<div class="title-post">
									<h1><?php echo $row['headline']; ?></h1>
									<ul class="post-tags">
										<li><i class="fa fa-clock-o"></i><?php echo $row['date']; ?></li>
										<li><i class="fa fa-user"></i>by <a href="#">Admin</a></li>
                                        <li><i class="fa fa-tags"></i><?php echo $row['category']; ?></li>
										<li><i class="fa fa-eye"></i><?php echo $row['postview']; ?></li> 
									</ul>
								</div>

								
								<div class="post-gallery">
                                <img src="io/dashboard/cover/<?php echo $row['cover']; ?>" alt="">
									<span class="image-caption"><?php echo $row['credit']; ?></span>
								</div>


								<div class="article-inpost">
									<div class="row">
										
										<div class="col-md-12">
											<div class="text-content">
                                            <p><?php echo $row['content']; ?></p>
											</div>
										</div>
									</div>
								</div>

								<div class="post-tags-box">
									<ul class="tags-box">
										<li><i class="fa fa-tags"></i><span>Tags:</span></li>
										<li><a <?php echo "href='cat.php?cat=".$row['category']."'"?>><?php echo $row['category']; ?></a></li>
										
									</ul>
								</div>

								<div class="share-post-box">
								<script src="https://apps.elfsight.com/p/platform.js" defer></script>
<div class="elfsight-app-955d5e4b-3f07-4aef-99ab-32235fdf02af"></div>
								</div>

								

								
								<!-- carousel box -->
								<div class="carousel-box owl-wrapper">
									<div class="title-section">
										<h1><span>Related Posts</span></h1>
									</div>
									<div class="owl-carousel" data-num="3">
									<?php
                                    $category = $row['category'];
                                $sql1 = "SELECT *, DATE_FORMAT(date, '%a-%d-%b-%Y') as newDate FROM news WHERE category='$category' ORDER BY `id` DESC LIMIT 0,5";
                                $result = mysqli_query($conn, $sql1);
                                if(mysqli_num_rows($result) > 0){
                                while ($rows = mysqli_fetch_array($result)){
                                ?>
										<div class="item news-post image-post3">
										<img src="io/dashboard/cover/<?php echo $rows['cover']; ?>" alt="" height="150px">
											<div class="hover-box">
											<h2><a <?php echo "href='news.php?a=".$row['a']."'"?>><?php echo $rows['headline']; ?></a></h2>
												<ul class="post-tags">
												<li><i class="fa fa-clock-o"></i><?php echo $rows['date']; ?></li>
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
								<!-- End carousel box -->

								<!-- comment form box -->
								<div class="contact-form-box">
									<div class="title-section">
										<h1><span>Leave a Comment</span> <span class="email-not-published">Your email address will not be published.</span></h1>
									</div>
									<!-- begin wwww.htmlcommentbox.com -->
                                    <div id="HCB_comment_box"><a href="http://www.htmlcommentbox.com">Comment Form</a> is loading comments...</div>
                                    <link rel="stylesheet" type="text/css" href="//www.htmlcommentbox.com/static/skins/bootstrap/twitter-bootstrap.css?v=0" />
                                    <script type="text/javascript" id="hcb">
                                        /*<!--*/
                                        if (!window.hcb_user) {
                                            hcb_user = {};
                                        }(function() {
                                            var s = document.createElement("script"),
                                                l = hcb_user.PAGE || ("" + window.location).replace(/'/g, "%27"),
                                                h = "//www.htmlcommentbox.com";
                                            s.setAttribute("type", "text/javascript");
                                            s.setAttribute("src", h + "/jread?page=" + encodeURIComponent(l).replace("+", "%2B") + "&mod=%241%24wq1rdBcg%244baItRbaNv3yJqDXwdeSy1" + "&opts=16862&num=10&ts=1522069891681");
                                            if (typeof s != "undefined") document.getElementsByTagName("head")[0].appendChild(s);
                                        })(); /*-->*/
                                    </script>
                                    <!-- end www.htmlcommentbox.com -->
								</div >
								<!-- End comment form box -->

									
										
                                			</div>
							<!-- End single-post box -->

						</div>
						<!-- End block content -->

					</div>

					<div class="col-sm-4">

						<!-- sidebar -->
						<div class="sidebar">

						<div class="widget tags-widget">



<div class="title-section">
	<h1><span>Popular Tags</span></h1>
</div>

<ul class="tag-list">
	<li><a href="cat.php?cat=Nigeria">Nigeria</a></li>
	<li><a href="cat.php?cat=Fashion">Fashion</a></li>
	<li><a href="cat.php?cat=Politics">Politics</a></li>
	<li><a href="cat.php?cat=Sports">Sport</a></li>
	<li><a href="cat.php?cat=Health">Health</a></li>
	<li><a href="cat.php?cat=Videos">Videos</a></li>
	<li><a href="cat.php?cat=Business">Business</a></li>
	<li><a href="cat.php?cat=Crime">Crime</a></li>
	<li><a href="cat.php?cat=World">World</a></li>
	<li><a href="cat.php?cat=Lifestyle">Lifestyle</a></li>
	<li><a href="cat.php?cat=Entertainment">Entertainment</a></li>
</ul>

</div>
<div class="widget features-slide-widget">
								<div class="title-section">
									<h1><span>Breaking News</span></h1>
								</div>
								<div class="image-post-slider">
									<ul class="bxslider">
									<?php
                                    include('dataconn.php');
                                    $sql1 = "SELECT * FROM `news` WHERE category='Breaking'";
                                    $result = mysqli_query($conn, $sql1);
                                    if (mysqli_num_rows($result) > 0) {
                                     while($row = mysqli_fetch_array($result)) {
                                          
                                    
                                    ?>
										<li>
											<div class="news-post image-post2">
												<div class="post-gallery">
													<img src="io/dashboard/cover/<?php echo $row['cover']; ?>" alt="">
													<div class="hover-box">
														<div class="inner-hover">
															<h2><a <?php echo "href='news.php?a=".$row['a']."'"?>><?php echo $row['headline']; ?></a></h2>
															<ul class="post-tags">
																<li><i class="fa fa-clock-o"></i><?php echo $row['date']; ?></li>
																<li><i class="fa fa-user"></i>by <a href="#">Admin</a></li>
																<li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
																<li><i class="fa fa-eye"></i>872</li>
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

							<!--<div class="widget tab-posts-widget">-->

							<!--	<ul class="nav nav-tabs" id="myTab">-->
							<!--		<li class="active">-->
							<!--			<a href="#option1" data-toggle="tab">Popular</a>-->
							<!--		</li>-->
							<!--		<li>-->
							<!--			<a href="#option2" data-toggle="tab">Recent</a>-->
							<!--		</li>-->
							<!--		<li>-->
							<!--			<a href="#option3" data-toggle="tab">Top Reviews</a>-->
							<!--		</li>-->
							<!--	</ul>-->

							<!--	<div class="tab-content">-->
							<!--		<div class="tab-pane active" id="option1">-->
							<!--			<ul class="list-posts">-->
							<!--				<li>-->
							<!--					<img src="upload/news-posts/listw1.jpg" alt="">-->
							<!--					<div class="post-content">-->
							<!--						<h2><a href="single-post.html">Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. </a></h2>-->
							<!--						<ul class="post-tags">-->
							<!--							<li><i class="fa fa-clock-o"></i>27 may 2013</li>-->
							<!--						</ul>-->
							<!--					</div>-->
							<!--				</li>-->

										
							<!--			</ul>-->
							<!--		</div>-->
									<!--<div class="tab-pane" id="option2">-->
									<!--	<ul class="list-posts">-->

									<!--		<li>-->
									<!--			<img src="upload/news-posts/listw3.jpg" alt="">-->
									<!--			<div class="post-content">-->
									<!--				<h2><a href="single-post.html">Phasellus ultrices nulla quis nibh. Quisque a lectus. </a></h2>-->
									<!--				<ul class="post-tags">-->
									<!--					<li><i class="fa fa-clock-o"></i>27 may 2013</li>-->
									<!--				</ul>-->
									<!--			</div>-->
									<!--		</li>-->

										
									<!--	</ul>										-->
									<!--</div>-->
									<!--<div class="tab-pane" id="option3">-->
									<!--	<ul class="list-posts">-->

									<!--		<li>-->
									<!--			<img src="upload/news-posts/listw4.jpg" alt="">-->
									<!--			<div class="post-content">-->
									<!--				<h2><a href="single-post.html">Donec consectetuer ligula vulputate sem tristique cursus. </a></h2>-->
									<!--				<ul class="post-tags">-->
									<!--					<li><i class="fa fa-clock-o"></i>27 may 2013</li>-->
									<!--				</ul>-->
									<!--			</div>-->
									<!--		</li>-->

										
									<!--	</ul>										-->
									<!--</div>-->
							<!--	</div>-->
							<!--</div>-->

							<!--<div class="widget post-widget">-->
							<!--	<div class="title-section">-->
							<!--		<h1><span>Featured Video</span></h1>-->
							<!--	</div>-->
							<!--	<div class="news-post video-post">-->
							<!--		<img alt="" src="upload/news-posts/video-sidebar.jpg">-->
							<!--		<a href="https://www.youtube.com/watch?v=LL59es7iy8Q" class="video-link"><i class="fa fa-play-circle-o"></i></a>-->
							<!--		<div class="hover-box">-->
							<!--			<h2><a href="single-post.html">Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. </a></h2>-->
							<!--			<ul class="post-tags">-->
							<!--				<li><i class="fa fa-clock-o"></i>27 may 2013</li>-->
							<!--			</ul>-->
							<!--		</div>-->
							<!--	</div>-->
							<!--	<p>Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis. </p>-->
							<!--</div>-->

							<!--<div class="widget subscribe-widget">-->
							<!--	<form class="subscribe-form">-->
							<!--		<h1>Subscribe to RSS Feeds</h1>-->
							<!--		<input type="text" name="sumbscribe" id="subscribe" placeholder="Email"/>-->
							<!--		<button id="submit-subscribe">-->
							<!--			<i class="fa fa-arrow-circle-right"></i>-->
							<!--		</button>-->
							<!--		<p>Get all latest content delivered to your email a few times a month.</p>-->
							<!--	</form>-->
							<!--</div>-->

							<!--<div class="widget tags-widget">-->

							<!--	<div class="title-section">-->
							<!--		<h1><span>Popular Tags</span></h1>-->
							<!--	</div>-->

							<!--	<ul class="tag-list">-->
							<!--		<li><a href="#">News</a></li>-->
							<!--		<li><a href="#">Fashion</a></li>-->
							<!--		<li><a href="#">Politics</a></li>-->
							<!--		<li><a href="#">Sport</a></li>-->
							<!--		<li><a href="#">Food</a></li>-->
							<!--		<li><a href="#">Videos</a></li>-->
							<!--		<li><a href="#">Business</a></li>-->
							<!--		<li><a href="#">Travel</a></li>-->
							<!--		<li><a href="#">World</a></li>-->
							<!--		<li><a href="#">Music</a></li>-->
							<!--	</ul>-->

							<!--</div>-->

							<!--<div class="advertisement">-->
							<!--	<div class="desktop-advert">-->
							<!--		<span>Advertisement</span>-->
							<!--		<img src="upload/addsense/300x250.jpg" alt="">-->
							<!--	</div>-->
							<!--	<div class="tablet-advert">-->
							<!--		<span>Advertisement</span>-->
							<!--		<img src="upload/addsense/200x200.jpg" alt="">-->
							<!--	</div>-->
							<!--	<div class="mobile-advert">-->
							<!--		<span>Advertisement</span>-->
							<!--		<img src="upload/addsense/300x250.jpg" alt="">-->
							<!--	</div>-->
							<!--</div>-->

						</div>
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

<!-- Mirrored from nunforest.com/hotmagazine/default/single-post.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 13 Jul 2020 02:47:07 GMT -->
</html>