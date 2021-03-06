<!DOCTYPE html>
<html>

<head>
	<title></title>
	<link href="css/owl.carousel.css" rel='stylesheet' type='text/css' />
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script type="application/x-javascript">
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);
	</script>
	<script src="js/jquery.min.js"></script>
	<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
	<script src="js/wow.min.js"></script>
	<script>
		new WOW().init();
	</script>
</head>

<body>

	<?php include('function.php'); ?>

	<?php include('top.php'); ?>
	<?php include('slider.php'); ?>

	<div class="section" id="section-3">
		<div id="portfolio" class="portfolio">
			<div class="top-tours-head text-center">
				<h3>Gallery</h3>
				<span></span><img src="images/star.png" alt=""><span></span>

			</div>
			<ul id="filters" class="clearfix wow bounceIn" data-wow-delay="0.4s">
				<li><span class="filter" data-filter="app">Domestic Travel</span></li>
				<li><span class="filter" data-filter="card">Foreign Travel</span></li>
				<li><span class="filter" data-filter="icon">Short Trips</span></li>
				<li><span class="filter" data-filter="fun">Long Trips</span></li>
			</ul>
			<div id="portfoliolist">
				<div class="portfolio card mix_all" data-cat="card" style="display: inline-block; opacity: 1;">
					<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">
						<a href="#" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
							<img src="images/t1.jpg" class="img-responsive" alt="" /></a>
					</div>
				</div>
				<div class="portfolio app mix_all" data-cat="app" style="display: inline-block; opacity: 1;">
					<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">
						<a href="#" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
							<img src="images/t2.jpg" class="img-responsive" alt="" /></a>
					</div>
				</div>
				<div class="portfolio card mix_all" data-cat="card" style="display: inline-block; opacity: 1;">
					<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">
						<a href="#" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
							<img src="images/t3.jpg" class="img-responsive" alt="" /></a>

					</div>
				</div>
				<div class="portfolio icon mix_all" data-cat="icon" style="display: inline-block; opacity: 1;">
					<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">
						<a href="#" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
							<img src="images/t4.jpg" class="img-responsive" alt="" /></a>

					</div>
				</div>
				<div class="portfolio card mix_all" data-cat="card" style="display: inline-block; opacity: 1;">
					<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">
						<a href="#" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
							<img src="images/t5.jpg" class="img-responsive" alt="" /></a>

					</div>
				</div>
				<div class="portfolio fun mix_all" data-cat="fun" style="display: inline-block; opacity: 1;">
					<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">
						<a href="#" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
							<img src="images/t6.jpg" class="img-responsive" alt="" /></a>

					</div>
				</div>
				<div class="portfolio fun mix_all" data-cat="fun" style="display: inline-block; opacity: 1;">
					<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">
						<a href="#" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
							<img src="images/t7.jpg" class="img-responsive" alt="" /></a>

					</div>
				</div>
				<div class="portfolio icon mix_all" data-cat="fun" style="display: inline-block; opacity: 1;">
					<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">
						<a href="#" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
							<img src="images/t8.jpg" class="img-responsive" alt="" /></a>

					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>

	<script type="text/javascript" src="js/jquery.mixitup.min.js"></script>
	<script type="text/javascript">
		$(function() {
			var filterList = {
				init: function() {
					$('#portfoliolist').mixitup({
						targetSelector: '.portfolio',
						filterSelector: '.filter',
						effects: ['fade'],
						easing: 'snap',
						onMixEnd: filterList.hoverEffect()
					});
				},
				hoverEffect: function() {
					$('#portfoliolist .portfolio').hover(
						function() {
							$(this).find('.label').stop().animate({
								bottom: 0
							}, 200, 'easeOutQuad');
							$(this).find('img').stop().animate({
								top: -30
							}, 500, 'easeOutQuad');
						},
						function() {
							$(this).find('.label').stop().animate({
								bottom: -40
							}, 200, 'easeInQuad');
							$(this).find('img').stop().animate({
								top: 0
							}, 300, 'easeOutQuad');
						}
					);
				}
			};
			filterList.init();
		});
	</script>

	<div class="about section" id="section-2">
		<div class="about-head text-center">
			<h3>Tours</h3>
			<span></span><img src="" alt=""><span></span>
		</div>
		<div class="container">

			<div style="height:50px"></div>
			<div style="width:200px; margin:auto">

				<div style="width:500px; float:center">

					<table cellpadding="0" cellspacing="0" width="1000px">
						<?php


						$s = "select * from tour";
						$result = mysqli_query($cn, $s);
						$r = mysqli_num_rows($result);
						while ($data = mysqli_fetch_array($result)) {

							echo "<tr><td style='font-family:Lucida Calligraphy; padding:10px;font-size:20px;'><b><a href='subcat.php?catid=$data[0]'>$data[1]</a></b></td></tr>";
						}

						?>

					</table>

				</div>

			</div>
		</div>

		<!-- Hotels -->
		<div class="tour-guides section" id="section-4">
			<div class="tour-guides-head text-center">
				<h3>Partner Hotels</h3>
				<span></span><img src="images/guide.png" alt=""><span></span>
				<div class="container">
					<p>Our partner hotels for an amazing stay at every Location!</p>
				</div>
			</div>
			<div class="container">
				<!-- requried-jsfiles-for owl -->
				<link href="css/owl.carousel.css" rel="stylesheet">
				<script src="js/owl.carousel.js"></script>
				<script>
					$(document).ready(function() {
						$("#owl-demo").owlCarousel({
							items: 1,
							lazyLoad: true,
							autoPlay: true,
							navigation: false,
							navigationText: false,
							pagination: true,
						});
					});
				</script>
				<!-- //requried-jsfiles-for owl -->
				<div id="owl-demo" class="owl-carousel">



					<?php
					$s = "select * from hotels";
					$result = mysqli_query($cn, $s);

					$n = 0;
					while ($data = mysqli_fetch_array($result)) {
						if ($n % 4 == 0) {
					?>

							<div class="item text-center guide-sliders">
							<?php } ?>


							<div class="col-md-3 image-grid">
								<img src="Admin/addverimages/<?php echo $data[3]; ?>" width="300px" height="150px">

								<p><a href="#"><?php echo $data[2]; ?></a></p>
							</div>
							<?php if ($n % 4 == 3) { ?>
							</div>

					<?php
							}
							$n = $n + 1;
						}
					?>
				</div>
			</div>
		</div>
		<!-- Hotel -->


		<div id="section-5" class="contact section">
			<div class="contact-head text-center">
				<h3>Contact Us</h3>
				<span></span><img src="images/mail.png" alt=""><span></span><br /><br />
				<h4 style="color:#000">Plan Your Trip Now <br /> Our travel experts can help you book now!</h4>

				<div class="contact-grids">
					<div class="container">
						<div class="col-md-4 address">
							<h4 style="color:#09F">My Tour</h4>
							<p style="color:#000">NEED HELP BOOKING A PACKAGE<br />
								For suggestions you may also call our travel expert</p>
							<h5 style="color:#000"><span class="img1"></span>(+91) 123456789 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(+91) 987654321</h5>
							<h5 style="color:#000"><span class="img2"></span><a href="#">info@mytour.com &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;support@mytour.com</a></h5>
							<h5 style="color:#000"><span class="img3"></span>Bangalore.</h5>
							<br />
							<img src="images/contac.jpg" />
						</div>
						<div class="col-md-8 contact">

							<?php
							if (isset($_POST["sbmt"])) {
								$cn = makeconnection();
								$s = "insert into contactus(Name,Book_id,Phone_no,Email,Message) values('" . $_POST["t1"] . "','" . $_POST["t5"] . "','" . $_POST["t2"] . "','" . $_POST["t3"] . "','" . $_POST["t4"] . "')";
								mysqli_query($cn, $s);
								mysqli_close($cn);
								echo "<script>alert('Record Save');</script>";
							}
							?>
							<form method="post">
								<table border="0" width="700px" height="500px">
									<tr>
										<td align="left"> <input type="text" class="text" value=" Name" name="t1" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Your Name';}" required pattern="[a-z A-Z]{1,50}" title"Please Enter Only Characters"></td>
									</tr>
									<tr>
										<td align="left"> <input type="text" class="text" value=" Booking ID (if applicable)" name="t5" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Booking ID (if applicable)';}"></td>
									</tr>
									<tr>
										<td align="left"><input type="text" class="text" value=" Contact No" name="t2" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Your Contact No.';}" required pattern="[0-9]{8,12}" title"Please Enter Only numbers between 10 to 12"></td>
									</tr>
									<tr>
										<td align="left"> <input type="text" class="text" value="Email" name="t3" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Your mail';}" required></td>
									</tr>
									<tr>
										<td><textarea onFocus="if(this.value == 'Message') this.value='';" name="t4" onFocus="if(this.value == '') this.value='Enter Message Here';" required title"Please Enter Only Characters"></textarea></td>
									</tr>
									<tr>
										<td><input type="submit" value="Send message" name="sbmt"></td>
									</tr>
								</table>
								<div class="clearfix"></div>
							</form>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>




				<?php include('bottom.php'); ?>
</body>

</html>