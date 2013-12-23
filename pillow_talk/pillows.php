<?php include("products.php"); ?>
<?php 
$pageTitle = "Pillows";
$section = "pillows";
include('inc/header.php'); 
?>

<div class="pillows">

		<div class="wrapper">

			<h2>Pillow Designs</h2>

			<ul class="products cf">
				<?php foreach($products as $product_id => $product) {
					echo "<li>";
					echo '<a href="pillow.php?id=' . $product_id . '">';
					echo '<img src="' . $product["img"] . '"alt="' . $product["name"] . '">'; 
					echo "<p>View Details</p>";
					echo "</a>"	;
					echo "</li>";
				} 
				?>
			</ul>

		</div> 	

	</div>




</body>

</html>

<?php include('inc/footer.php'); ?>