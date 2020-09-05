<?php
	require_once "stripe-php-master/init.php";
	require_once "products.php";

	$stripeDetails = array(
		"secretKey" => "sk_test_AYW8Pi5lURHF7OQEFyE59pc300cYRXPmXz",
		"publishableKey" => "pk_test_Ng0RHokkPLHojZ3NQz0IDjbG00MDlXspGF"
	);

	// Set your secret key: remember to change this to your live secret key in production
	// See your keys here: https://dashboard.stripe.com/account/apikeys
	\Stripe\Stripe::setApiKey($stripeDetails['secretKey']);
?>
