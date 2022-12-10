<?php
$ch = curl_init();
	        $parameters = array(
	            'apikey' => '041c57539a2e2547dab9f7525216a353', //Your API KEY
	            'number' => '09261351318',
	            'message' =>
	              'Good day! This is your department chairperson and your Subject have been Approved',
	            'sendername' => 'SEMAPHORE'
	        );
	        curl_setopt( $ch, CURLOPT_URL,'https://semaphore.co/api/v4/messages' );
	        curl_setopt( $ch, CURLOPT_POST, 1 );

	        //Send the parameters set above with the request
	        curl_setopt( $ch, CURLOPT_POSTFIELDS, http_build_query( $parameters ) );

	        // Receive response from server
	        curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
	        $output = curl_exec( $ch );
	        curl_close ($ch);
?>