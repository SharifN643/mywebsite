<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<!DOCTYPE HTML>

<!--
	Alpha by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Contact - Alpha by HTML5 </title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="/assets/css/main.css" />
<script src="/assets/js/jquery.min.js"></script>
	</head>
	<body class="is-preload">
		<div id="page-wrapper">

			<!-- Header -->
<header id="header" style="height: 4em; display: flex; align-items: center;">
    <h1 style="margin: 0; padding: 0;">
        <a href="index.php" class="logo" style="display: flex; align-items: center; height: 100%;">
            <img src="images/PEN_Logo-removebg-preview (2).png" alt="TruckLogix" style="max-height: 3em; width: auto; vertical-align: middle;">
        </a>
    </h1>
    <nav id="nav" style="margin-left: auto;">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li>
                <a href="#" class="icon solid fa-angle-down">Services</a>
                <ul>
                    <li><a href="freight.php">Freight Transport</a></li>
                    <li><a href="warehousing.php">Warehousing</a></li>
                    <li><a href="logistics.php">Logistics Solutions</a></li>
                    <li>
                        <a href="#">Specialized Services</a>
                        <ul>
                            <li><a href="#">Temperature-Controlled</a></li>
                            <li><a href="#">Hazardous Materials</a></li>
                            <li><a href="#">Oversized Loads</a></li>
                            <li><a href="#">Express Delivery</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><a href="#" class="button">Get a Quote</a></li>
            <li><a href="#" class="button alt">Login</a></li>
        </ul>
    </nav>
</header>
			<!-- Main -->
				<section id="main" class="container medium">
					<header>
						<h2>Contact Us</h2>
						<p>Tell us what you think about our little operation.</p>
					</header>
					<div class="box">
						<form method="post" action="#">
							<div class="row gtr-50 gtr-uniform">
								<div class="col-6 col-12-mobilep">
									<input type="text" name="name" id="name" value="" placeholder="Name" />
								</div>
								<div class="col-6 col-12-mobilep">
									<input type="email" name="email" id="email" value="" placeholder="Email" />
								</div>
								<div class="col-12">
									<input type="text" name="subject" id="subject" value="" placeholder="Subject" />
								</div>
								<div class="col-12">
									<textarea name="message" id="message" placeholder="Enter your message" rows="6"></textarea>
								</div>
								<div class="col-12">
									<ul class="actions special">
										<li><input type="submit" value="Send Message" /></li>
									</ul>
								</div>
							</div>
						</form>
					</div>
				</section>

			<!-- Footer -->
				<footer id="footer">
					<ul class="icons">
						<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="#" class="icon brands fa-github"><span class="label">Github</span></a></li>
						<li><a href="#" class="icon brands fa-dribbble"><span class="label">Dribbble</span></a></li>
						<li><a href="#" class="icon brands fa-google-plus"><span class="label">Google+</span></a></li>
					</ul>
					<ul class="copyright">
						<li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
					</ul>
				</footer>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
<?php
// Update all internal links to use .php extension instead of .php
$content = ob_get_clean();
$content = str_replace('.php"', '.php"', $content);
$content = str_replace('.php#', '.php#', $content);
ob_start();
echo $content;
?>
