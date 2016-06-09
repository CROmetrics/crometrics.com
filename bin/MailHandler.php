<?php
	// Email addresses
	$owner_email = 'chris@crometrics.com';
	$sales_discussion_slack_email = 'v2p6g1n7t7z0v6h9@crometrics.slack.com';
	$engineering_email = 'p9j5f7t5w5u2c5b2@crometrics.slack.com';
	$brian_crobot_slack_email = 'l8s3w7k1i4j5t2h8@crometrics.slack.com';
	// Booleans for whom we should email
	$mail_engineering = FALSE;
	$mail_sales = TRUE;

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

    // Email Engineering instead of Sales if somebody's working on the job application
    if (strpos(strtolower($_POST['company']), 'crometrics') !== FALSE) {
	    $mail_engineering = TRUE;
	    $mail_sales = FALSE;
    }

    // Only email Brian's DM with Crobot if it's a test submission
    if (strpos(strtolower($_POST['name']), 'mctesterson') !== FALSE) {
	    $mail_sales = FALSE;
    }
	
	try{
		// Mail Brian's private chat with Crobot (always)
		if(!mail($brian_crobot_slack_email, $subject, $messageBody, $headers)){
			throw new Exception('mail failed');
		}else{
			echo 'mail sent';
		}
		// Mail Chris and sales-discussion if appropriate
		if ($mail_sales) {
			if(!mail($owner_email, $subject, $messageBody, $headers)){
				throw new Exception('mail failed');
			}else{
				echo 'mail sent';
			}
			// Mail Sales Discussion
			if(!mail($sales_discussion_slack_email, $subject, $messageBody, $headers)){
				throw new Exception('mail failed');
			}else{
				echo 'mail sent';
			}
		}
		// Mail Engineering if it's a job application
		if ($mail_engineering) {
			if(!mail($engineering_email, $subject, $messageBody, $headers)){
				throw new Exception('mail failed');
			}else{
				echo 'mail sent';
			}
		}
	}catch(Exception $e){
		echo $e->getMessage() ."\n";
	}
?>
