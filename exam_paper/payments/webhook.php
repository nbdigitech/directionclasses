<?php

	$data = $_POST;
	$mac_provided = $data['mac'];
	unset($data['mac']);

	$ver explode('.',phpversion());
	$major = (int) $ver[0];
	$minor = (int) $ver[1];

	if($major >=5 and $minor >= 4)
	{
		ksort($data, SORT_STRING | SORT_FLAG_CASE);
	}
	else
	{
		uksort($data, 'strcasecmp');
	}

	$mac_calculated = hash_hmac("shal", implode("|", $data), "8d86f2fd9bf94e6fa906a3766b835cd9");

	if ($mac_provided == $mac_calculated) {
		echo "MAC is fine";

		if ($data['status'] == "Credit") {
			# code...
			$to = 'info@maroonentertainment.in';
			$subject = 'Website Payment Request';
			$message = "<h1>Payment Details</h1>";
			$message = "<hr>";
			$message = '<p><b>ID:/b>'.$data['product_id'].'</p>';
			$message = '<p><b>Amount:/b>'.$data['amount'].'</p>';
			$message = '<p><b>Quantity:/b>'.$data['quantity'].'</p>';
			$message = "<hr>";
			$headers = "MIME-VERSION:1.0\r\n";
			$headers = "Content_Type: text/html:charset=ISO-8859-1\r\n";

			MAIL($to,$subject,$message,$headers);
		}
		else
		{

		}
	}
	else
	{
		echo "Invalid MAC passed";
	}
?>