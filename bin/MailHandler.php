<?php
	$owner_email = 'chris@crometrics.com';
	$sales_discussion_slack_email = 'v2p6g1n7t7z0v6h9@crometrics.slack.com';
	$brian_crobot_slack_email = 'l8s3w7k1i4j5t2h8@crometrics.slack.com';

    // Sanitize input.
    function trim_value(&$value) { $value = trim(strip_tags($value)); }
    array_filter($_POST, 'trim_value');

	$headers = 'From:' . $_POST["email"] . "\r\n";
    $headers .= "Reply-To: " . $_POST["email"] . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
	$subject = 'CROmetrics site lead from ' . $_POST["name"];
	$messageBody = "";

    $messageBody .= '<p>Visitor: ' . $_POST["name"] . '</p>' . "\n";
    $messageBody .= '<p>Email Address: ' . $_POST['email'] . '</p>' . "\n";
    $messageBody .= '<p>Company: ' . $_POST['company'] . '</p>' . "\n";
    $messageBody .= '<p>Website: ' . $_POST['website'] . '</p>' . "\n";
    $messageBody .= '<p>Goals: ' .$_POST['message'] . '</p>' . "\n";
	
	try{
		// Mail Chris
		/*
		if(!mail($owner_email, $subject, $messageBody, $headers)){
			throw new Exception('mail failed');
		}else{
			echo 'mail sent';
		}
		 */
		// Mail Sales Discussion
		/*
		if(!mail($sales_discussion_slack_email, $subject, $messageBody, $headers)){
			throw new Exception('mail failed');
		}else{
			echo 'mail sent';
		}
		 */
		// Mail my private chat with Crobot
		if(!mail($brian_crobot_slack_email, $subject, $messageBody, $headers)){
			throw new Exception('mail failed');
		}else{
			echo 'mail sent';
		}
	}catch(Exception $e){
		echo $e->getMessage() ."\n";
	}
?>
