<!DOCTYPE html>
<html lang="en-us" class="no-js">
    <!-- Notes: I chopped out the most of the mobile friendly stuff. -->
	<head>
		<meta charset="utf-8">
        <title>Dustin Horning</title>
        <meta name="description" content="Dustin Horning's Website">
        <meta name="keywords" content="Dustin Horning,Software Engineer,Laravel,php,laravel">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Dustin Horning">

        <!-- ================= Favicon ================== -->
        <!-- Standard -->
        <link rel="shortcut icon" href="img/favicon.png">
        <!-- Retina iPad Touch Icon-->
        <link rel="apple-touch-icon" sizes="144x144" href="img/favicon-retina-ipad.png">
        <!-- Retina iPhone Touch Icon-->
        <link rel="apple-touch-icon" sizes="114x114" href="img/favicon-retina-iphone.png">
        <!-- Standard iPad Touch Icon--> 
        <link rel="apple-touch-icon" sizes="72x72" href="img/favicon-standard-ipad.png">
        <!-- Standard iPhone Touch Icon--> 
        <link rel="apple-touch-icon" sizes="57x57" href="img/favicon-standard-iphone.png">

        <!-- ============== Resources style ============== -->
        <link rel="stylesheet" href="css/style-agency.css" />

		<!-- Modernizr runs quickly on page load to detect features -->
		<script src="js/modernizr.custom.js"></script>
	</head>
	
	<body>

		<!-- Page preloader -->
		<div id="loading">
			<div id="preloader">
				<span></span>
				<span></span>
			</div>
		</div>

		<!-- Overlay and Star effect -->
		<div class="global-overlay">

			<!-- Gravity points -->
			<canvas id="c"></canvas>

			<div class="overlay light-back skew-part"></div>

		</div>

		<!-- START - Home/Left Part -->
		<section id="left-side">

			<!-- Your logo -->
			<img src="img/fave_square.png" alt="" class="brand-logo" />

			<div class="content">

				<h1 class="text-intro opacity-0">Dustin Horning<br>Software Engineer/DevOps<br>
					View on desktop, and click on the right half... </h1>

				<h2 class="text-intro opacity-0">PHP, Laravel, AWS, Azure, Linux</h2>
                <h2 class="text-intro opacity-0">Contact me on Social Media using the links below</h2>

				<nav>
					<ul>
						<li>
							<!-- <a href="#" id="open-more-info" data-target="right-side" class="light-btn text-intro opacity-0">More Information</a> -->
						</li>
						<li>
                            <!-- <a href="https://www.linkedin.com/in/dustin-horning/" data-dialog="somedialog" class="action-btn trigger text-intro opacity-0">Contact me on Linkedin</a> -->
                            <!-- Use the above link if you want to the use the data part -->
							<!-- <a href="https://www.linkedin.com/in/dustin-horning/" class="action-btn trigger text-intro opacity-0">Contact me on Linkedin</a> -->
                            <a href="https://twitter.com/dustinh365" target="_blank"><i class="fa fa-twitter fa-3x"></i></a>
                            <span style='margin-right: 40px'></span>
                            <a href="https://www.linkedin.com/in/dustin-horning/" target="_blank"><i class="fa fa-linkedin fa-3x"></i></a>
                            <span style='margin-right: 40px'></span>
                            <a href="https://stackoverflow.com/users/8221725/dustbuster" target="_blank"><i class="fa fa-stack-overflow fa-3x" aria-hidden="true"></i></a>
                            <span style='margin-right: 40px'></span>
                            <a href="https://github.com/dustbuster" target="_blank"><i class="fa fa-github fa-3x" aria-hidden="true"></i></a>
						</li>
					</ul>
				</nav>

			</div>

			<!-- Social icons -->
			<div class="useful-links">

				<!-- <a href="https://twitter.com/dustinh365" target="_blank"><i class="fa fa-twitter"></i></a>
				<a href="https://www.linkedin.com/in/dustin-horning/" target="_blank"><i class="fa fa-linkedin"></i></a> -->

			</div>

		</section>
		<!-- END - Home/Left Part -->

		<!-- START - More Informations/Right Part -->
		
		<!-- START - More Informations/Right Part -->

		<!-- Button Cross to close the More Informations/Right Part -->
		<button id="close-more-info" class="hide-close"><i class="icon ion-ios-close-outline"></i></button>

		<!-- START - Newsletter Popup -->
		<div id="somedialog" class="dialog">

			<div class="dialog__overlay"></div>
					
			<div class="dialog__content">
						
				<div class="dialog-inner">
							
					<h4>You like taking the lead of line?</h4>
							
					<p>Being the first to know always feels great... Signing up to our newsletter gives you <strong>exclusive access to our Grand Opening!</strong></p>

					<!-- Newsletter Form -->
					
                    <!-- <div id="subscribe">
		                <form action="php/notify-me.php" id="notifyMe" method="POST">
		                    <div class="form-group">
		                        <div class="controls">
		                        	<input type="text" id="mail-sub" name="email" placeholder="Click here to write your email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Click here to write your email'" class="form-control email srequiredField" />
		                        	<i class="fa fa-spinner opacity-0"></i>
		                            <button class="btn btn-lg submit">Get notified</button>
		                            <div class="clear"></div>
		                        </div>
		                    </div>
		                </form>
						<div class="block-message">
							<div class="message">
								<p class="notify-valid"></p>
							</div>
						</div>
        			</div>
				</div> -->

				<!-- Button Cross to close the Newsletter Popup -->
				<button class="close-newsletter" data-dialog-close><i class="icon ion-close-round"></i></button>

			</div>
			<!-- /. dialog__content -->
						
		</div>
		<!-- END - Newsletter Popup -->

		<!-- Root element of PhotoSwipe, the gallery. Must have class pswp. -->
		
		<!-- /. Root element of PhotoSwipe. Must have class pswp. -->

	<!-- ///////////////////\\\\\\\\\\\\\\\\\\\ -->
    <!-- ********** Resources jQuery ********** -->
    <!-- \\\\\\\\\\\\\\\\\\\/////////////////// -->
	
	<!-- * Libraries jQuery, Easing and Bootstrap - Be careful to not remove them * -->
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.easings.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

	<!-- Accelerated JavaScript animation JS file -->
	<script src="js/velocity.min.js"></script> 

	<!-- Accelerated JavaScript animation UI JS file -->
	<script src="js/velocity.ui.min.js"></script> 

	<!-- Newsletter plugin -->
	<script src="js/notifyMe.js"></script>

	<!-- Contact form plugin -->
	<script src="js/contact-me.js"></script>

	<!-- Slideshow/Image plugin -->
	<script src="js/gravity.js"></script>

	<!-- Scroll plugin -->
	<script src="js/jquery.mousewheel.js"></script>

	<!-- Custom Scrollbar plugin -->
	<script src="js/jquery.mCustomScrollbar.js"></script>

	<!-- Popup Newsletter Form -->
	<script src="js/classie.js"></script>
	<script src="js/dialogFx.js"></script>

	<!-- PhotoSwipe Core JS file -->
	<script src="js/photoswipe.js"></script> 

	<!-- PhotoSwipe UI JS file -->
	<script src="js/photoswipe-ui-default.js"></script>

	<!-- Main JS File -->
	<script src="js/main.js"></script>
	
	<!--[if lt IE 10]><script type="text/javascript" src="js/placeholder.js"></script><![endif]-->

	</body>

</html>