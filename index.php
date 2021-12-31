<?php include('config.php'); ?>
<!DOCTYPE HTML>
<html>
	<head>
		<title><?php echo $config['site_title']; ?> - <?php echo $config['site_description']; ?></title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<h1><a href="index.php"><strong><?php echo $config['site_title']; ?></strong> <?php echo $config['site_description']; ?></a></h1>
						<nav>
							<ul>
								<li><a href="#footer" class="icon solid fa-info-circle"><?php echo $config['about_01']; ?></a></li>
							</ul>
						</nav>
					</header>
				<!-- Main -->
					<div id="main">
						<?php
						function encode_name($str) {
							$revert = array('%21'=>'!', '%2A'=>'*', '%27'=>"'", '%28'=>'(', '%29'=>')');
							return strtr(rawurlencode($str), $revert);
						}
						$path = $config['images_path'];
						$all_files = glob($path."*.*");
						for ($i=0; $i<count($all_files); $i++){
						$image_name = $all_files[$i];
						$image_path = encode_name(basename($all_files[$i]));
						$supported_format = array('gif','jpg','jpeg','png');
						$ext = strtolower(pathinfo($image_name, PATHINFO_EXTENSION));
						if (in_array($ext, $supported_format)){
						?>
						<article class="thumb">
							<a href="<?php echo $path.$image_path; ?>" class="image"><img src="<?php echo $path.$image_path; ?>" alt="<?php echo explode('.',basename($image_name))[0]; ?>" /></a>
							<h2><?php echo explode('.',basename($image_name))[0]; ?></h2>
						</article>
						<?php
						}
						}
						?>
					</div>
				<!-- Footer -->
					<footer id="footer" class="panel">
						<div class="inner">
							<div>
								<section>
									<h2><?php echo $config['about_02']; ?></h2>
									<p><?php echo $config['about_03']; ?></p>
								</section>
								<section>
									<h2><?php echo $config['about_04']; ?></h2>
									<ul class="icons">
										<li><a href="<?php echo $config['imdb']; ?>" class="icon brands fa-imdb" target="_blank"><span class="label">IMDB</span></a></li>
										<li><a href="<?php echo $config['twitter']; ?>" class="icon brands fa-twitter" target="_blank"><span class="label">Twitter</span></a></li>
										<li><a href="<?php echo $config['facebook']; ?>" class="icon brands fa-facebook-f" target="_blank"><span class="label">Facebook</span></a></li>
										<li><a href="<?php echo $config['instagram']; ?>" class="icon brands fa-instagram" target="_blank"><span class="label">Instagram</span></a></li>
										<li><a href="<?php echo $config['linkedin']; ?>" class="icon brands fa-linkedin-in" target="_blank"><span class="label">LinkedIn</span></a></li>
										<li><a href="tel:<?php echo $config['phone']; ?>" class="icon fa fa-phone" target="_blank"><span class="label">Phone</span></a></li>
										<li><a href="https://api.whatsapp.com/send/?phone=<?php echo $config['whatsapp']; ?>" class="icon brands fa-whatsapp" target="_blank"><span class="label">WhatsApp</span></a></li>
										<li><a href="mailto:<?php echo $config['mail']; ?>" class="icon fa fa-envelope" target="_blank"><span class="label">Mail</span></a></li>
									</ul>
								</section>
								<p class="copyright">
									&copy; <?php echo $config['site_title']; ?>. Design: <a href="http://html5up.net" target="_blank">HTML5 UP</a>.
								</p>
							</div>
						</div>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.poptrox.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>