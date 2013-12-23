<html lang="en">
<head>
	<title><?php echo $pageTitle; ?></title>
	<link rel="stylesheet" href="css/styles.css" type="text/css">
	<link href='http://fonts.googleapis.com/css?family=Lily+Script+One|Karla:400,700,400italic' rel='stylesheet' type='text/css'>
	<link rel="shortcut icon" href="favicon.ico">
</head>
<body>

	<div class="header">

		<div class="wrapper">

			<h1 class="branding-title"><a href="./">Pillow Talk</a></h1>

			<ul class="nav">
				<li class="pillows <?php if ($section == "pillows") { echo "on"; } ?>" ><a href="pillows.php">Pillows</a></li>
				<li class="contact <?php if ($section == "contact") { echo "on"; } ?>" ><a href="contact.php">Contact</a></li>
				<li class="cart"><form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" >
					<input type="hidden" name="cmd" value="_s-xclick">
					<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
					">
					<input class="cart-image" type="image" src="http://jenniferlcalloway.com/pillow_talk/img/shoppingcart.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
					</form>
				</li>
			</ul>

		</div>

	</div>

	