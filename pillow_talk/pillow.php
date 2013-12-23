<?php 
include("products.php"); 

$product_id = $_GET["id"];
$product = $products[$product_id];

$section = "pillows";
$pageTitle = $product["name"];
include('inc/header.php'); 
?>

	<div class="section">

		<div class="wrapper">

			<div class="breadcrumb">
				<a href="pillows.php">Pillows</a> &gt; <?php echo $product["name"]; ?>
			</div>

			<div class="pillow-picture">
				<span>
					<img src="<?php echo $product["img"]; ?>" alt="<?php echo $product["name"]; ?>">
				</span>	
				
			</div>

			<div class="pillow-details">

				<h1>
					<span class="price">$<?php echo $product["price"]; ?></span> <?php echo $product["name"]; ?>
				</h1>
				<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
				<input type="hidden" name="cmd" value="_s-xclick">
				<input type="hidden" name="hosted_button_id" value="<?php echo $product["paypal"]; ?>">
				<input type="submit" name="submit" value="Add to Cart">
				</form>
				<p>* Custom pillow orders will be available soon!</p>
			</div>




	</div>

</body>

</html>

<?php include('inc/footer.php'); ?>