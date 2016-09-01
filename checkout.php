<?php
	$errors = 0;
	$full = 0;
	/*Blank Error Variables*/
	$firstError = '';
	$secondError = '';
	$thirdError = '';
	$fourthError = '';
	$fourthError2 = '';
	$fifthError = '';
	$sixthError = '';
	$seventhError = '';
	$eigthError = '';
	$ninthError = '';
	$tenthError = '';
	
	/*Blank Dropdown Variables*/
	$sessState = '';
	$sessMonth = '';
	$sessYear = '';
	
	
	/*Blank Session Form Values*/
	$sessFname = '';
	$sessLname = '';
	$sessMnum = '';
	$sessAdd1 = '';
	$sessAdd2 = '';
	$sessSub = '';
	$sessPcode = '';
	$sessWrap = '';
	$sessCardType = '';
	$sessCardName = '';
	$sessCardNum = '';
	
	
	/* This line checks if anything has been submitted */
	if (isset($_POST['submitted'])) {
		$full = 1;
		/* This mother fucking line checks if the firstname is bad */
		if (!isset($_POST['firstName']) || $_POST['firstName'] == ''){
			/* This line says, everything bad */
			$errors = 1;
			/* This line saves the error class */
			$firstError = 'class="errorInput"';
		} else{
			$sessFname = $_POST['firstName'];
		}
		if (!isset($_POST['lastName']) || $_POST['lastName'] == ''){
			$errors = 1;
			$secondError = 'class="errorInput"';
		} else{
			$sessLname = $_POST['lastName'];
		}
		if (!isset($_POST['mobileNumber']) || $_POST['mobileNumber'] == '') {
			$errors = 1;
			$thirdError = 'class="errorInput"';
		} else{
			$sessMnum = $_POST['mobileNumber'];
		}
		if (!isset($_POST['address1']) || $_POST['address1'] == ''){
			$errors = 1;
			$fourthError = 'class="errorInput"';
		} else{
				$sessAdd1 = $_POST['address1'];
		}
		if ($fourthError !== ''){
			if (!isset($_POST['address2']) || $_POST['address2'] == ''){
				$errors = 1;
				$fourthError2 = 'class="errorInput"';
			} else{
					$sessAdd2 = $_POST['address2'];
					$fourthError = '';
			} 
		}
		if (!isset($_POST['suburb']) || $_POST['suburb'] == ''){
			$errors = 1;
			$fifthError = 'class="errorInput"';
		}else {
			$sessSub = $_POST['suburb'];
		}
		
		if (!isset($_POST['postCode']) || $_POST['postCode'] == ''){
			$errors =1;
			$sixthError = 'class="errorInput"';
		} else{
				$sessPcode = $_POST['postCode'];
		}
		if (!isset($_POST['wrapping'])){
			$errors = 1;
			$seventhError = 'class="errorInput"';
		} else{
				$sessWrap = $_POST['wrapping'];
		}
		if (!isset($_POST['cardType'])){
			$errors = 1;
			$eigthError = 'class="errorInput"';
		} else{
				$sessCardType = $_POST['cardType'];
		}
		if (!isset($_POST['creditName']) || $_POST['creditName'] == ''){
			$errors = 1;
			$ninthError = 'class="errorInput"';
		} else{
				$sessCardName = $_POST['creditName'];
		}
		if (!isset($_POST['creditNumber']) || $_POST['creditNumber'] == ''){
			$errors = 1;
			$tenthError = 'class="errorInput"';
		} else{
				$sessCardNum = $_POST['creditNumber'];
		}
		
		if (isset($_POST['state'])){
			$sessState = $_POST['state'];
		}
		if (isset($_POST['month'])){
			$sessMonth = $_POST['month'];
		}
		if (isset($_POST['year'])){
			$sessYear = $_POST['year'];
		}
		/* Additional variables to go here */
		
		
		
	} else {
		/* Nothing submitted, they all drank lemonade. The end */
		/*value="<?php =$_POST['firstName'];?>"  */
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Animals Parts 4 U - Up Your Game!</title>
		<meta charset="UTF-8"> 
		<link rel="stylesheet" type="text/css" href="styleSheet.css" />
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,400italic,700' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	</head>
	
<body style="background-color: rgba(133, 173, 255, 0.3)">
	<div class="centering">
		<div class="topBar">
			<div class="logo">
				<a href="index.php"><img src="img/logo.png" alt="Logo"/></a>
			</div>
			<div class="search">
				<form method="post" action="search.php">
					<input class="searchBar" type="text" name="search" size="30" placeholder = "Search our Parts" maxlength="100">
					<input class="searchButton" type="image" alt="Search" name="submit" src="img/search.png">
				</form>
			</div>
			<div class="members">
				<a href="signUp.html">Sign up</a>
				<a href="logIn.html">Log In</a>
			</div>
			<div class="shopping">
					<a class="cart" href="cart.php"><img src="img/cart.png" size="30" alt="Cart"/></a>
			</div>
		</div>
		<div class="navigation">
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="products.php">Products</a></li>
				<li><a href="specials.php">Specials</a></li>
				<li><a href="aboutUs.php">About Us</a></li>
				<li><a href="legal.php">Legal Concerns</a></li>
				<li><a href="requests.php">Requests</a></li>
				<li><a href="checkout.php">Checkout Now</a></li>
			</ul>
		</div>

<!-- ---------------------------------------------LOOK HERE FAE!!! -----------------------------------------------------------//-->
		
		<?php
			if ($errors == 0 && $full == 1){ 
			/* Try this single line first, it will work fine.  Form comes up ok, works fine.  Once completed, will echo out the line below */
				 echo $_POST['firstName']; 
				
			/* Then try this line.  Doesn't fucking work.  Only thing that comes up is everything above this area */
				?>
						<div class="this is a thing">
							<h1>Title!</h1>
						</div>
					<?  

			}else{
			?>	
		
<!-- ---------------------------------------------LOOK UP THERE FAE!!! -----------------------------------------------------------//-->
		
		<div class="checkoutForm">
			<form action="checkout.php" method="POST">
				<fieldset class="personalInfo">
					<legend>Personal information</legend>
					<label class="label">First name:</label>
					<input <?=$firstError?> type="text" name="firstName" placeholder="First Name" size="50" value="<?=$sessFname?>"  >
					<br>
					<label>Last name:</label>
					<input <?=$secondError?> type="text" name="lastName" placeholder="Last Name" size="50" value="<?=$sessLname?>">
					<br>
					<label>Mobile Number:</label>
					<input <?=$thirdError?> type="text" name="mobileNumber" placeholder="Mobile Number" size="50" maxlength="12" value="<?=$sessMnum?>">
					<br>
					<label>Address:</label>
					<input <?=$fourthError?> type="text" name="address1" placeholder="First Line" size="50" value="<?=$sessAdd1?>">
					<br>
					<label><p></p></label>
					<input <?=$fourthError2?> class="suburb" type="text" name="address2" placeholder="Second Line" size="50" value="<?=$sessAdd2?>">
					<br>
					<label><p></p></label>
					<input <?=$fifthError?> class="suburb" type="text" name="suburb" placeholder="Suburb" size="30" value="<?=$sessSub?>">
					<input <?=$sixthError?> type="text" name="postCode" placeholder="Post Code" size="15" maxlength="4" value="<?=$sessPcode?>">
					<br>
					<label><p></p></label>
					<select class="state" name="state" value="<?=$sessState?>">
						<option value="act">Australian Captial Territory</option>
						<option value="nsw">New South Wales</option>
						<option value="nt">Northern Territory</option>
						<option value="qld">Queensland</option>
						<option value="sa">South Australia</option>
						<option value="tas">Tasmania</option>
						<option value="vic">Victoria</option>
						<option value="wa">Western Australia</option>
					</select>
					<br>
					<label>Include free installation manual?</label>
					<input <?=$seventhError?> class="wrapping" type="radio" name="wrapping" value="<?=$sessWrap?>">Yes
					<input <?=$seventhError?> class="wrapping" type="radio" name="wrapping" value="<?=$sessWrap?>">No
				</fieldset>
				<fieldset class="paymentInfo">
					<legend>Payment Details</legend>
					<label>Credit Card Type:</label>
					<input <?=$eigthError?> class="cardSelection" type="radio" name="cardType"><img src="img/visaLogo.png" alt="Visa" height="30px" value="<?=$sessCardType?>"/>
					<input <?=$eigthError?> class="cardSelection" type="radio" name="cardType"><img src="img/mastercardLogo.png" alt="Master Card" height="30" value="<?=$sessCardType?>"/>
					<br>
					<label>Name on Credit Card:</label>
					<input <?=$ninthError?> type="text" name="creditName" placeholder="Name on Credit Card" size="50" value="<?=$sessCardName?>">
					<br>
					<label>Credit Card Number:</label>
					<input <?=$tenthError?> type="text" name="creditNumber" placeholder="Credit Card Number" size="50" maxlength="16" value="<?=$sessCardNum?>">
					<br>
					<label>Expiry Date:</label>
					<select class="state" name="month">
						<option value="Jan">January</option>
						<option value="Fed">Febuary</option>
						<option value="Mar">March</option>
						<option value="Apr">April</option>
						<option value="May">May</option>
						<option value="Jun">June</option>
						<option value="Jul">July</option>
						<option value="Aug">August</option>
						<option value="Sep">September</option>
						<option value="Oct">October</option>
						<option value="Nov">November</option>
						<option value="Dec">December</option>
					</select>
					<select class="state" name="year">
						<option value="15">2015</option>
						<option value="16">2016</option>
						<option value="17">2017</option>
						<option value="18">2018</option>
						<option value="19">2019</option>
						<option value="20">2020</option>
						<option value="21">2021</option>
						<option value="22">2022</option>
						<option value="23">2023</option>
						<option value="24">2024</option>
						<option value="25">2025</option>
					</select>
				</fieldset>
				<div class="submitBtn">
				<input class="submit" type="submit" name="submitted" value="Submit Order">
				</div>
			</form>
			<?php
			}
			?>
		</div>
	</div>
</body>

</html>
