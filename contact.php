

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="icon" type="image/x-icon" href="images/logo.png">
    <link rel="icon" href="img/logo.jpg" type="image/png">
    <title>DFFH | Contact Us</title>
</head>
<body>
	<?php include('include/header.php');?>
	<div class="contact-container">
		<div class="row">
				<h4 style="text-align:center">We'd love to hear from you!</h4>
		</div>
		<div class="row input-container">
				<div class="col-xs-12">
					<div class="styled-input wide">
						<input type="text" required />
						<label>Name</label> 
					</div>
				</div>
				<div class="col-md-6 col-sm-12">
					<div class="styled-input">
						<input type="text" required />
						<label>Email</label> 
					</div>
				</div>
				<div class="col-md-6 col-sm-12">
					<div class="styled-input" style="float:right;">
						<input type="text" required />
						<label>Phone Number</label> 
					</div>
				</div>
				<div class="col-xs-12">
					<div class="styled-input wide">
						<textarea required></textarea>
						<label>Message</label>
					</div>
				</div>
				<div class="col-xs-12">
					<div class="btn-lrg submit-btn">Send Message</div>
				</div>
		</div>
	</div>


    <?php include('include/footer.php');?>

<script src="js/dashboard.js"></script>
</body>
</html>
