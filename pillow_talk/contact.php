<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$name = $_POST["name"];
	$email = $_POST["email"];
	$message = $_POST["message"];
	$email_body = "";
	$email_body = $email_body . "Name: " . $name . "\n";
	$email_body = $email_body . "Email: " . $email . "\n";
	$email_body = $email_body . "Message: " . $message . "\n";



	//TODO: Send Email

	header("Location: contact.php?status=thanks");
	exit;
}
?>
<?php 
$pageTitle = "Contact";
$section = "contact";
include('inc/header.php'); 
?>


	<div class="contact">

		<div class="wrapper">

			<h1>Contact Me</h1>
			
			<?php if (isset($_GET["status"]) AND $_GET["status"] == "thanks") { ?>
			<div class="thanks"><p>Thanks for the email!  I&rsquo;ll be in touch as soon as possible.</p></div>
			<?php } else { ?>

			<p>Questions or comments?  I&rsquo;d love to hear from you! Complete the form to send me an email.</p>

			<form method="post" action="contact.php">
					<div class="field">
						<label for="name">Name</label>
						<input type="text" name="name" id="name">
					</div>	
					<div class="field">
						<label for="email">Email</label>
						<input type="text" name="email" id="email" pattern="^\s*[\w\-\+_]+(\.[\w\-\+_]+)*\@[\w\-\+_]+\.[\w\-\+_]+(\.[\w\-\+_]+)*\s*$">
					</div>
					<div class="field message">
						<label for="message">Message</label>
						<textarea name="message" id="message"></textarea>
					</div>
				<input id="submit" class="submit" type="submit" value="Send">	
			</form>

			<?php } ?>
				
		</div>

	</div>	
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript">

	$(document).ready(function() {

		$('#submit').click(function(e) {
			e.preventDefault();
			var name = $('#name').val();
			var email = $('#email').val();
			var message = $('#message').val();
			var emailReg = new RegExp($('#email').attr('pattern'));

				if (!name) {
					$('#name').parent().addClass('error');
					$('#name').parent().append('<div class="tooltip"><span>Please enter your name</span></div>');
				}

				if (!email) {
					$('#email').parent().addClass('error');
					$('#email').parent().append('<div class="tooltip"><span>Please enter your email address</span></div>');
				} else if (!emailReg.test(email)) {
					$('#email').parent().addClass('error');
					$('#email').parent().append('<div class="tooltip"><span>Please enter a valid email address</span></div>');
				}

				if (!message) {
					$('#message').parent().addClass('error');
					$('#message').parent().append('<div class="tooltip2"><span>Please enter a message</span></div>');
				}	
			});	

	}); 
</script>	      
</body>

</html>

<?php include('inc/footer.php'); ?>