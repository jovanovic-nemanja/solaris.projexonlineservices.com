<?php

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,"http://174.138.76.229/pds-dev/learner/Referralmail/getDataAndSendMail"); 
//send_booking_loop_to_trainer
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$server_output = curl_exec ($ch);
curl_close ($ch);

?>