<?php
/**
* import checksum generation utility
* You can get this utility from https://developer.paytm.com/docs/checksum/
*/
require_once("encdec_paytm.php");
/* initialize an array with request parameters */
$paytmParams = array(
    
	/* Find your MID in your Paytm Dashboard at https://dashboard.paytm.com/next/apikeys */
	"MID" => "YOUR_MID_HERE",
    
	/* Find your WEBSITE in your Paytm Dashboard at https://dashboard.paytm.com/next/apikeys */
	"WEBSITE" => "YOUR_WEBSITE_HERE",
    
	/* Find your INDUSTRY_TYPE_ID in your Paytm Dashboard at https://dashboard.paytm.com/next/apikeys */
	"INDUSTRY_TYPE_ID" => "YOUR_INDUSTRY_TYPE_ID_HERE",
    
	/* WEB for website and WAP for Mobile-websites or App */
	"CHANNEL_ID" => "YOUR_CHANNEL_ID",
    
	/* Enter your unique order id */
	"ORDER_ID" => "YOUR_ORDER_ID",
    
	/* unique id that belongs to your customer */
	"CUST_ID" => "CUSTOMER_ID",
    
	/* customer's mobile number */
	"MOBILE_NO" => "CUSTOMER_MOBILE_NUMBER",
    
	/* customer's email */
	"EMAIL" => "CUSTOMER_EMAIL",
    
	/**
	* Amount in INR that is payble by customer
	* this should be numeric with optionally having two decimal points
	*/
	"TXN_AMOUNT" => "ORDER_TRANSACTION_AMOUNT",
    
	/* on completion of transaction, we will send you the response on this URL */
	"CALLBACK_URL" => "YOUR_CALLBACK_URL",
);

/**
* Generate checksum for parameters we have
* Find your Merchant Key in your Paytm Dashboard at https://dashboard.paytm.com/next/apikeys 
*/
$checksum = getChecksumFromArray($paytmParams, "YOUR_KEY_HERE");

/* for Staging */
$url = "https://securegw-stage.paytm.in/order/process";

/* for Production */
// $url = "https://securegw.paytm.in/order/process";

/* Prepare HTML Form and Submit to Paytm */
?>
<html>
	<head>
		<title>Merchant Checkout Page</title>
	</head>
	<body>
		<center><h1>Please do not refresh this page...</h1></center>
		<form method='post' action='<?php echo $url; ?>' name='paytm_form'>
				<?php
					foreach($paytmParams as $name => $value) {
						echo '<input type="hidden" name="' . $name .'" value="' . $value . '">';
					}
				?>
				<input type="hidden" name="CHECKSUMHASH" value="<?php echo $checksum ?>">
		</form>
		<script type="text/javascript">
			document.paytm_form.submit();
		</script>
	</body>
</html>