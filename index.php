<?php
@ini_set('display_errors', 0);

define("COMPANY_NAME", "Awesome Co.");
define("COMPANY_TAGLINE", "Doing work awesomely");

define("HOMEPAGE_TITLE", COMPANY_NAME . " | " . COMPANY_TAGLINE);
define("HOMEPAGE_DESC", "Awesome Co. is a company like none other. Other companies are companies, but this company is a better company.");

define("COPYRIGHT_TEXT", "&copy; " . date("Y") . " " . COMPANY_NAME);

define("ATTRIBUTION_TEXT", "Site design by Peterscene");
define("ATTRIBUTION_URL", "https://peterscene.com");

$isSecure = false;
if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') {
	$isSecure = true;
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https' || !empty($_SERVER['HTTP_X_FORWARDED_SSL']) && $_SERVER['HTTP_X_FORWARDED_SSL'] == 'on') {
	$isSecure = true;
}

define("THISPAGE", $_SERVER["REQUEST_URI"]);
define("THISPROTOCOL", ($isSecure) ? 'https://' : 'http://');
define("THISDOMAIN", THISPROTOCOL . $_SERVER["HTTP_HOST"]);
define("THISURL", THISDOMAIN . THISPAGE);
define("ESCAPEDURL", htmlspecialchars(THISURL, ENT_QUOTES, 'UTF-8'));
?>
<!DOCTYPE html>
<html lang="en-US">
	<head>
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-XXXXXXXXX-X"></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());
			gtag('config', 'UA-XXXXXXXXX-X');
		</script>
		<meta charset="utf-8">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title><?php echo HOMEPAGE_TITLE; ?></title>
		<meta name="description" content="<?php echo HOMEPAGE_DESC; ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="author" content="<?php echo COMPANY_NAME; ?>">
		<link rel="preload" href="https://fonts.googleapis.com/css?family=Roboto:400,700|Roboto+Slab:700&display=fallback" as="style" onload="this.onload=null;this.rel='stylesheet'">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<link rel="preload" href="/css/main.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
		<meta property="og:title" content="<?php echo HOMEPAGE_TITLE; ?>">
		<meta property="og:description" content="<?php echo HOMEPAGE_DESC; ?>">
		<meta property="og:url" content="<?php echo ESCAPEDURL; ?>">
		<meta property="og:site_name" content="<?php echo COMPANY_NAME; ?>">
		<meta property="og:image" content="<?php echo THISDOMAIN; ?>/img/site-image.png">
		<link rel="apple-touch-icon" sizes="180x180" href="/favicons/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="/favicons/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="/favicons/favicon-16x16.png">
		<link rel="manifest" href="/favicons/site.webmanifest">
		<link rel="mask-icon" href="/favicons/safari-pinned-tab.svg" color="#846716">
		<link rel="shortcut icon" href="/favicons/favicon.ico">
		<meta name="msapplication-TileColor" content="#f09609">
		<meta name="msapplication-config" content="/favicons/browserconfig.xml">
		<meta name="theme-color" content="#f7f1e5">
	</head>
	<body itemscope itemtype="http://schema.org/Organization">
		<header id="header"></header>
		<div id="checkerboard-wrapper"><div id="checkerboard"></div></div>
		<div id="content">
			<div class="container-fluid text-center break-word">
				<div class="row">
					<div class="col-md-12">
						<a itemprop="url" href="<?php echo THISDOMAIN; ?>" onclick="return false;"><img itemprop="logo" src="<?php echo THISDOMAIN; ?>/img/logo-full.png" id="company-logo" class="img-fluid" alt="<?php echo COMPANY_NAME; ?> Logo"></a>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 pl-sm-5 pr-sm-5 text-left">
						<h1>Welcome to <span itemprop="name"><?php echo COMPANY_NAME; ?></span></h1>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 col-lg-4" itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
						<h2>Address</h2>
						<p>
							<span itemprop="streetAddress">123 Main St</span><br />
							<span itemprop="addressLocality">Anywhere</span>, <span itemprop="addressRegion">CA</span> <span itemprop="postalCode">01234</span><br />
							<span itemprop="addressCountry">United States</span>
						</p>
					</div>
					<div class="col-md-12 col-lg-4">
						<h2>Email</h2>
						<p><a href="mailto:hello@awesome.co"><span itemprop="email">hello@awesome.co</span></a></p>
					</div>
					<div class="col-md-12 col-lg-4">
						<h2>Phone</h2>
						<p itemprop="telephone">+1-123-456-7890</p>
					</div>
				</div>
			</div>
		</div>
		<footer id="footer">
			<div id="copyright">
				<p id="copyright-text" class="bold"><?php echo COPYRIGHT_TEXT; ?></p>
				<p id="copyright-attribution" class="smaller"><a href="<?php echo ATTRIBUTION_URL; ?>" rel="noopener noreferrer" target="_blank" ><?php echo ATTRIBUTION_TEXT; ?></a></p>
			</div>
		</footer>
	</body>
</html>
