<?php
	session_start();
	if (empty($_SESSION['cartVar'])) {
		$_SESSION['cartVar'] = array();
	}
	
	if (!isset($key)){
		$key = $_SESSION['cartVar'][0];
	}
	
	if (isset($_POST['cartRemove' . $key])){
		unset($_SESSION['cartVar'][$key]);
	}
	
	
	include "data.php";
	/* Total of items in cart */
	$itemsTotal = 49.95;
	/* Cost of shipping */
	$shipping = 15.00;
	/* Shipping + Total of items */
	$total = $itemsTotal + $shipping;
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Animals Parts 4 U - Up Your Game!</title>
		<meta charset="UTF-8"> 
		<![if chrome]><link href="css/styleSheetChrome.css" rel="stylesheet" type="text/css" /><![endif]>
		<link rel="stylesheet" type="text/css" href="css/styleSheet.css" />
		<link href='https://fonts.googleapis.com/css?family=Cabin' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Bangers' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400' rel='stylesheet' type='text/css'>
		<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
	</head>
	
<body style="background-color: rgba(133, 173, 255, 0.3)">
	<div class="centering">
		<!-- START NAVIGATION AND HEADER -->
		<div class="topBar">
			<div class="logo">
				<a href="index.php"><img src="img/logo.png" alt="Logo"/></a>
			</div>
			<div class="search">
				<form method="post" action="search.php">
					<input class="searchBar" type="text" name="search" placeholder = "Search our Parts" maxlength="100">
					<input class="searchButton" type="image" alt="Search" name="submit" src="img/search.png">
				</form>
			</div>
			<div class="members">
				<a href="signUp.html">Sign up</a>
				<a href="logIn.html">Log In</a>
			</div>
			<div class="shopping">
					<a class="cart" href="cart.php"><img src="img/cart.png" alt="Cart"/></a>
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
		<!-- END NAVIGATION AND HEADER -->
		
		<div class="yourCart"><h1>Your Cart</h1></div>
		<div class="cartView">
			<div class="cartItem">
				<?php if ($_SESSION['cartId'] == 0){
					?><h2>There isn't anything in this cart yet, ya fuck head!</h2>
					<p><?php echo( $_SESSION['totalCost'] );?></p>
					<?php
				} else {
					?>
				<?php foreach($_SESSION['cartVar'] as $key => $value){ ?>
					<div class="singleCartItem">
						<table>
							<tr>
								<td class="tableImage"><?=$_SESSION['cartVar'][$key]['Image'];?></td>
								<td class="tableName"><?=$_SESSION['cartVar'][$key]['Name'];?></td>
								<td class="tablePrice">$<?=$_SESSION['cartVar'][$key]['Price'];?></td>
								<td class="tableRemove"><form method="post" action="cart.php"><input class="removeFromCart" type="submit" name="cartRemove<?=$key;?>" ></form></td>
							</tr>
						</table>
					</div>
				<?php } ?>
			</div>
			<div class="clearFloat"></div>
			<div class="cartTotal">
				<h2><strong>Shipping:</strong></h2><p>$<?=$shipping?></p>
				<h2><strong>Total:</strong></h2><p>$<?=$total;?></p>
				
			</div>
			<div class="clearFloat"></div>
			<div class="checkoutBtn">
				<a href="index.php">Keep Shoppin'</a>
				<a href="checkout.php">Proceed to Checkout</a>
			</div>
			<div class="clearFloat"></div>
				<?php }?>
		</div>
		<!-- FOOTER -->
		<div class="footer">
			<p>Copyright Nick Kington 2015.</p>
		</div>
	</div>
</body>

</html>