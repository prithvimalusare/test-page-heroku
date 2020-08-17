<?php

	//get the params required from request
	$secure_id = $_GET['secure_id'];
	$click_id = $_GET['click_id'];
	//$leadid = $_GET['leadid'];
	
		
?>
<h1>this is click page</h1>

<br>
<?php echo "http://affiliate.trackneo.com/track/conv?m=pb&secure_id=". $secure_id; ?>
<br>
<?php echo "http://testing.host.com:3000/track/conv?m=pb&click_id=". $click_id; ?>
<br>
<?php echo "http://testing.trackneo.com/track/conv?m=pb&click_id=". $secure_id; ?>
<br>

<!-- <img src="http://testing.trackneo.com/track/impr?campaign_id=22&publisher_id=32&pub_click_id=pub_click_id&lp_id=24" /> -->

<!-- <img src="https://affiliate.trackneo.com/track/impr?campaign_id=87&publisher_id=1006&pub_click_id=pub_click_id&lp_id=112" /> -->


