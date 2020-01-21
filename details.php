<?php
	if($_SERVER['REQUEST_METHOD'] === "POST") {
		$lead_id = $_POST['lead_id'];
		$gender = $_POST['sex'];
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$email = $_POST['email'];
		$dob_day = $_POST['dob_day'];
		$dob_month = $_POST['dob_month'];
		$dob_year = $_POST['dob_year'];
		$panels = $_POST['panels'];
	}
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/topten.css">
<style type="text/css">
.icon-money:before, .icon-0:before {
				content: "\e911" !important;
		}
</style>
<style type="text/css">
.marketing input, .marketing label {
	float: left;
}

.marketing input {
	margin: 5px 10px 0 2px;
}

.marketing label {
	width: calc(100% - 25px);
	font-size: 12px;
	letter-spacing: 0.48px;
	color: #939598;
}
</style>
<title>Demo Test Page #3</title>
</head>
<body>
<div class="header">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12 text-center">
<h1 style="
    color: #fff;
">Application Page 2</h1>

			</div>
		</div>
	</div>
</div>
	<div class="banner banner-small">
		<div class="banner-overlay">
			<div class="gradient"></div>
		</div>
	</div>
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-5">
			<form class="details" action="submission.php" method="post">
				<input type="hidden" name="lead_id" value="<?php echo $lead_id; ?>">
				<input type="hidden" name="gender" value="<?php echo $gender; ?>">
				<input type="hidden" name="firstname" value="<?php echo $firstname; ?>">
				<input type="hidden" name="lastname" value="<?php echo $lastname; ?>">
				<input type="hidden" name="email" value="<?php echo $email; ?>">
				<input type="hidden" name="dob_day" value="<?php echo $dob_day; ?>">
				<input type="hidden" name="dob_month" value="<?php echo $dob_month; ?>">
				<input type="hidden" name="dob_year" value="<?php echo $dob_year; ?>">
				<?php foreach ($panels as $value) { ?>
					<input type="hidden" name="panels[]" value="<?php echo($value);?>">
				<?php } ?>
				<div class="card">
					<div class="card-body text-center">
						<h3 class="small">Final details</h3>
						<hr class="dark my-4">
						<h3 class="small pb-1">Enter your address</h3>
							<input class="form-control mt-3" type="text" name="address" placeholder="Address" autocomplete="off">
							<input class="form-control mt-3" type="text" name="towncity" placeholder="Town / City" autocomplete="off">
							<input class="form-control mt-3" type="text" name="postcode" placeholder="Postcode / Zip Code" autocomplete="off">
																				<div class="marketing text-left pt-4">
							<table>
								<tr>
									<td class="align-top"><input id="marketing" type="checkbox" name="marketing"></td>
									<td><label for="marketing">I agree with Terms of Service</label></td>
								</tr>
							</table>
						</div>
					</div>
					<input id="submitform" class="btn btn-primary btn-block disableonsubmit" type="submit" value="Submit">
				</div>
			</form>
		</div>
	</div>
</div>
<div class="footer text-center">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<img src="images/flags/nz.png">
				<div class="row justify-content-center">
					<div class="col-auto">
						<a class="d-block mb-2" href="index.html">
															<img class="logo img-fluid mt-1 mb-2" src="images/logo.png">
													</a>
					</div>
				</div>
				<p>In New Zealand (NZ)</p>
			</div>
		</div>
		<div class="row">
			<div class="col-12 copyright">
				<ul>
					<li><a href="terms-conditions.html">Terms & Conditions</a></li>
					<li><a href="privacy-policy.html">Privacy Policy</a></li>
				</ul>
				<p>&copy; 2020 Top 10 Best Paid Surveys</p>
				<p>*Based on <a class="text-underline" href="possible-earnings.html">possible earnings</a>. These differ due to panelist demographics and survey companies selected, results vary per person.</p>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/scripts.js"></script>
</body>
</html>