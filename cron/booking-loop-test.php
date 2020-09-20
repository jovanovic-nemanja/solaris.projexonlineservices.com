<?php

//echo phpinfo(); die();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//set  timezone
date_default_timezone_set('America/New_York'); //America/New_York //Asia/Calcutta

// db connection params
$servername = "localhost";
$username 	= "root";
$password 	= "R@hul123456$";
$dbname 	= "dt_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//  Trainer list

$sql = "SELECT * FROM user where user_role_id = 2"; 	
$result =	mysqli_query($conn, $sql);    

$trainer_data = array();

while($data = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
  //will output all data on each loop.
  $trainer_data[] = array('id'=>$data['id'],'first_name'=>$data['first_name'],'last_name'=>$data['last_name'],'device_token'=>$data['device_token']);  
}

   echo "<pre>";
   print_r($trainer_data);


echo "<br>"; 

//  Booking list

$sql2 = "SELECT * FROM booking where status = 'open' "; 	
$booking_result =	mysqli_query($conn, $sql2);    

$booking_data = array();

while($data2 = mysqli_fetch_array($booking_result,MYSQLI_ASSOC)) {
  //will output all data on each loop.
  $booking_data[] = array('id'=>$data2['id'],
  	'learner'=>$data2['learner'],
  	'schedule_date'=>$data2['schedule_date'],
  	'schedule_start_time'=>$data2['schedule_start_time'],
  	'status'=>$data2['status']
  );  

}

   echo "<pre>";
   print_r($booking_data);

$data = array
  (                             
    'body'=> array(
    'title' => 'Request Booking Cancle',                                                                    
    'bookingid' => '22',                                                                 
    'schedule_date'=>'2019',
    'schedule_time'=>'2:00',
    'shortDetail'=>"Customer:'test', Location :Brisben, zipcode : 20323",                                                       
    )                               
  );    

send_android_notification_to_trainer('test', $data);                     

$conn->close();


// send android notifications for trainer

function send_android_notification_to_trainer($device_token, $data) 
{

$fields = array(
'registration_ids'  => array($device_token),
'data'              => $data,
);

$headers = array(
'Authorization:key=AIzaSyDERwHnUpr5SoG3tw_hApmDnI7_seewCV0', // FIREBASE_API_KEY_FOR_ANDROID_NOTIFICATION
'Content-Type: application/json'
);

// Open connection
$ch = curl_init();
// Set the url, number of POST vars, POST data
curl_setopt( $ch,CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send' );
curl_setopt( $ch,CURLOPT_POST, true );
curl_setopt( $ch,CURLOPT_HTTPHEADER, $headers );
curl_setopt( $ch,CURLOPT_RETURNTRANSFER, true );
// Disabling SSL Certificate support temporarly
curl_setopt( $ch,CURLOPT_SSL_VERIFYPEER, false );
curl_setopt( $ch,CURLOPT_POSTFIELDS, json_encode( $fields ) );
// Execute post
$result = curl_exec($ch );
if($result === false){
die('Curl failed:' .curl_errno($ch));
}
// Close connection
curl_close( $ch );
return $result;

}

?>