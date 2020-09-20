<?php defined('BASEPATH') OR exit('No direct script access allowed.');    
    /**     
     * @access public 
     */
    // 


function dateConvert($date,$format)
{
    $date = new DateTime($date);
    return $date->format($format);
}

// get single column value and pass table name , one conditional parameter

function get_single_col_value($table,$col1,$val1,$select_col)
{
    $ci= & get_instance();
    $ci->load->database();
    $ci->db->select($select_col);
    $ci->db->where($col1,$val1);
    $query=$ci->db->get($table);
    $count=$query->num_rows();
    $data = $query->row();  
    if($count > 0)
    {
        return $data->$select_col; 
    }
    else
    {
        return NULL;
    }
}

 function get_user_name($user_id)
  { 
    $ci= & get_instance();
    $ci->load->database();
    $ci->db->select("first_name,last_name");              
    $ci->db->where('id',$user_id);       
    $query=$ci->db->get('user');
    $data = $query->row();
    
        return ucfirst($data->first_name).' '.ucfirst($data->last_name);
    }

function get_fuser_name($user_id)
  { 
    $ci= & get_instance();
    $ci->load->database();
    $ci->db->select("first_name");              
    $ci->db->where('id',$user_id);       
    $query=$ci->db->get('user');
    $data = $query->row();
    
        return ucfirst($data->first_name);
    }

function get_user_role_title($user_role_id)
  { 
    $ci= & get_instance();
    $ci->load->database();
    $ci->db->select("name");              
    $ci->db->where('id',$user_role_id);       
    $query=$ci->db->get('user_role');
    $data = $query->row();
    
        return $data->name;
    }

function reach_idle_limit() {
$idle_period = 60; //20 mins
$CI =& get_instance();


$last_activity = $CI->session->userdata('last_activity');
$now_time = time();

//If $last_activity is not set, don't force a logout
if($last_activity == False || $last_activity == 0){
    return false;
}
//If idle period exceeded: destroy the session and return true
else if($now_time - $last_activity > $idle_period){
    $CI->session->sess_destroy();
    return true;
}
//else, update session's last_activity to current time, return false
else{
    $CI->session->set_userdata('last_activity', $now_time);
    return false;
}
}
  
// get hour and minute

function get_minute($time)
{
    $timesplit=explode(':',$time);
    $min=($timesplit[0]*60)+($timesplit[1])+($timesplit[2]>30?1:0);
    return $min; 
}

// get hour and minutes
function get_hr_min($t)
{
    $h = floor($t/60) ? floor($t/60) .' hours' : '';
    $m = $t%60 ? $t%60 .' minutes' : '';
    return $h && $m ? $h.' and '.$m : $h.$m;
}

// get job status by id

function get_job_status($job_id)
{
    $ci= & get_instance();
    $ci->load->database();
    $ci->db->select('status');
    $ci->db->where('id',$job_id);
    $query = $ci->db->get('job');
    $count = $query->num_rows();    
    if($count > 0)
    {
        $data = $query->row(); 
        return $data->status; 
    }
    else
    {
        return NULL;
    }
}
function get_user_status($mobile)
{
    $ci= & get_instance();
    $ci->load->database();
    $ci->db->select('is_active');
    $ci->db->where('mobile',$mobile);
    $query = $ci->db->get('user');
    $count = $query->num_rows();    
    if($count > 0)
    {
        $data = $query->row(); 
        return $data->is_active; 
    }
    else
    {
        return NULL;
    }
}

// get num rows of table based on single column condition

function get_num_rows_single_col($table,$col1,$val1)
{
    $ci= & get_instance();
    $ci->load->database();
    $ci->db->select('*');
    $ci->db->where($col1,$val1);
    $query=$ci->db->get($table);
    $count = $query->num_rows();    
    if($count > 0)
    {
        return $count; 
    }
    else
    {
        return 0;
    }
}

// get num rows of table based on single column condition

function check_customer_exist_status($mobile)
{
    $ci= & get_instance();
    $ci->load->database();
    $ci->db->select('*');
    // conditions
    $ci->db->where('user_role_id',2);
    $ci->db->where('mobile',$mobile);
    $query=$ci->db->get('user');
    $count = $query->num_rows();    
    if($count > 0)
    {
        return $count; 
    }
    else
    {
        return NULL;
    }
}

// send android notifications to customers 

function send_android_notification_to_customer($device_token, $data) {
$fields = array(
'registration_ids'  => array($device_token),
'data'              => $data,
);

$headers = array(
'Authorization:key=AIzaSyDfr1nD-piKJ4epZvB-5eW-5w8orXYa04w', // FIREBASE_API_KEY_FOR_ANDROID_NOTIFICATION
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

function calculate_time_span($date){

    $seconds  = strtotime(date('Y-m-d H:i:s')) - strtotime($date);

        $months     = floor($seconds / (3600*24*30));
        $day        = floor($seconds / (3600*24));
        $hours      = floor($seconds / 3600);
        $mins       = floor(($seconds - ($hours*3600)) / 60);
        $secs       = floor($seconds % 60);

        if($seconds < 60)
            $time = $secs." seconds ago";
        else if($seconds < 60*60 )
            $time = $mins." min ago";
        else if($seconds < 24*60*60)
            $time = $hours." hours ago";
        else if($seconds > 24*60*60)
            $time = $day." day ago";
        else
            $time = $months." month ago";

        return $time;
}


function get_country()
{
    $ci= & get_instance();
    $ci->load->database();
    $ci->db->select('*');
    $query=$ci->db->get('country');
    $count=$query->num_rows();
    if($count > 0)
    {
        return $query->result();
    }
    else
    {
        return 0;
    }
}


function get_state($country_id)
{
    $ci= & get_instance();
    $ci->load->database();
    $ci->db->select('*');
    $ci->db->where('country_id',$country_id);
    $query=$ci->db->get('states');
    $count=$query->num_rows();
    if($count > 0)
    {
        return $query->result();
    }
    else
    {
        return 0;
    }
}

function get_city($state_id)
{
    $ci= & get_instance();
    $ci->load->database();
    $ci->db->select('*');
    $ci->db->where('state_id',$state_id);
    $query=$ci->db->get('cities');
    $count=$query->num_rows();
    if($count > 0)
    {
        return $query->result();
    }
    else
    {
        return 0;
    }
}

function get_package_name($package_id)
{
     $ci= & get_instance();
     $ci->load->database();
     $ci->db->select("package_name");              
     $ci->db->where('id',$package_id);       
     $query=$ci->db->get('package');
     $data = $query->row();
     return ucfirst($data->package_name);
}
function get_lession_name($lession_id)
{
     $ci= & get_instance();
     $ci->load->database();
     $ci->db->select("lession_name");              
     $ci->db->where('id',$lession_id);       
     $query=$ci->db->get('lession');
     $data = $query->row();
     return ucfirst($data->lession_name);
}
function get_task_name($task_id)
{
     $ci= & get_instance();
     $ci->load->database();
     $ci->db->select("task_name");              
     $ci->db->where('id',$task_id);       
     $query=$ci->db->get('task');
     $data = $query->row();
     return ucfirst($data->task_name);
}
function get_package_type_name($package_id)
{
     $ci= & get_instance();
     $ci->load->database();
     $ci->db->select("package_name");              
     $ci->db->where('id',$package_id);       
     $query=$ci->db->get('package_type');
     $data = $query->row();
     return ucfirst($data->package_name);
}
function get_make_name($make_id)
{
     $ci= & get_instance();
     $ci->load->database();
     $ci->db->select("title");              
     $ci->db->where('id',$make_id);       
     $query=$ci->db->get('make');
     $data = $query->row();
     return ucfirst($data->title);
}

function get_language_name($language_id)
{
    $ci = & get_instance();
    $ci->load->database();
    $ci->db->select('name');
    $ci->db->where('id',$language_id);
    $query= $ci->db->get('language');
    $data = $query->row();
    return $data->name;
}



function get_package_list($package_type)
{
    $ci = &get_instance();
    $ci->load->database();
    $ci->db->select('*');
    $ci->db->where('package_type_id',$package_type);
    $query = $ci->db->get('package');
    $count = $query->num_rows();
    if($count > 0)
    {
        return $query->result();
    }
    else
    {
        return 0;
    }
}
function extract_date($date_time_mix)
{
    $date = new DateTime($date_time_mix);
    if($date){
    return $date->format('d-m-Y');
    }
    else {return NULL;}
}

// for Generte random number of dynamic length ---------------------

if (!function_exists('random_po_number')) {

    function random_po_number($length) {
    $chars = "ASDFGHJKLMNBVCXZQWERTYUIOP0123456789asdfghjklqwertyuiopzxcvbnm";
    $password = substr( str_shuffle( $chars ), 0, $length );
    return $password;
    }
}
// for Generte invoice number of dynamic length ---------------------

if (!function_exists('generate_invoice_number')) {

    function generate_invoice_number($length) {
    $chars = "0123456789";
    $password = substr( str_shuffle( $chars ), 0, $length );
    return $password;
    }
}
//---------------------------For Check Duplicate Value Details------------------on 07-06-2018

if (!function_exists('checkDuplicateValue')) {

    function checkDuplicateValue($table,$condition) {
        $CI = get_instance();
        $CI->load->database();
        $CI->load->library('session');
        $CI->load->model('Site_model');
        $CI->db->select("*")->from($table)->where($condition);
        $query = $CI->db->get(); 
       //return $CI->db->last_query();  
         if ($query->num_rows() > 0) {
                return $query->num_rows();;
            } else {
                return 0;
            } 
    
    }
}

// to get login user details ----------
 
if (!function_exists('getLoginUserDetails')) {

    function getLoginUserDetails() {
        $CI = get_instance();
        $CI->load->database();
        $CI->load->library('session');
        $CI->load->model('Site_model');

        $loginId=($CI->session->userdata("userid"));
        $data=array();
        $data['loginUserData']=$CI->Site_model->getRow("user","id='$loginId'");

        return $data; 
    }

}

//------------------For Dynamic Breadcumb------------------------

if(!function_exists('generateBreadcrumb')){
    
    function generateBreadcrumb(){
          $ci = &get_instance();
          $i=1;
          $uri = $ci->uri->segment($i);
          $link = '
          <ol class="breadcrumb pull-right">';

          while($uri != ''){
            $prep_link = '';
          for($j=1; $j<=$i;$j++){
            $prep_link .= $ci->uri->segment($j).'/';
          }

          if($ci->uri->segment($i+1) == ''){
            $link.='<li class="active"><a href="'.site_url($prep_link).'">';
            $link.=$ci->uri->segment($i).'</a></li> ';
          }else{
            $link.='<li><a href="'.site_url($prep_link).'">';
            $link.=$ci->uri->segment($i).'</a></li> ';
          }

          $i++;
          $uri = $ci->uri->segment($i);
          }
            $link .= '</ol>';
            return $link;
        }
    }

if (!function_exists('strip_html_tags')) {

    /**
 * Remove HTML tags, including invisible text such as style and
 * script code, and embedded objects.  Add line breaks around
 * block-level tags to prevent word joining after tag removal.
 */
    function strip_html_tags($text)
    {
        $text = preg_replace(
        array(
          // Remove invisible content
            '@<head[^>]*?>.*?</head>@siu',
            '@<style[^>]*?>.*?</style>@siu',
            '@<script[^>]*?.*?</script>@siu',
            '@<object[^>]*?.*?</object>@siu',
            '@<embed[^>]*?.*?</embed>@siu',
            '@<applet[^>]*?.*?</applet>@siu',
            '@<noframes[^>]*?.*?</noframes>@siu',
            '@<noscript[^>]*?.*?</noscript>@siu',
            '@<noembed[^>]*?.*?</noembed>@siu',
          // Add line breaks before and after blocks
            '@</?((address)|(blockquote)|(center)|(del))@iu',
            '@</?((div)|(h[1-9])|(ins)|(isindex)|(p)|(pre))@iu',
            '@</?((dir)|(dl)|(dt)|(dd)|(li)|(menu)|(ol)|(ul))@iu',
            '@</?((table)|(th)|(td)|(caption))@iu',
            '@</?((form)|(button)|(fieldset)|(legend)|(input))@iu',
            '@</?((label)|(select)|(optgroup)|(option)|(textarea))@iu',
            '@</?((frameset)|(frame)|(iframe))@iu',
          ),
          array(
            ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ',
            "\n\$0", "\n\$0", "\n\$0", "\n\$0", "\n\$0", "\n\$0",
            "\n\$0", "\n\$0",
          ),
           $text );
           return strip_tags( $text );
    }

}

/***********datediff**********/
if (!function_exists('date_difference')) {
    function date_difference($earlierDate, $laterDate) {
        //returns an array of numeric values representing days, hours, minutes & seconds respectively
        $ret = array('days'=>0, 'hours'=>0, 'minutes'=>0, 'seconds'=>0);
        $totalsec = strtotime($laterDate) - strtotime($earlierDate);

        if ($totalsec >= 86400) {
            $ret['days'] = floor($totalsec/86400);
            $totalsec = $totalsec % 86400;
        }
        if ($totalsec >= 3600) {
            $ret['hours'] = floor($totalsec/3600);
            $totalsec = $totalsec % 3600;
        }
        if ($totalsec >= 60) {
            $ret['minutes'] = floor($totalsec/60);
        }
        $ret['seconds'] = $totalsec % 60;
        return $ret;
    }
}

// To get Browser Information--------------

if (!function_exists('browser_info')) {
    function browser_info($agent=null) {
        $known = array('msie', 'firefox', 'safari', 'webkit', 'opera', 'netscape',
        'konqueror', 'gecko');
        $agent = strtolower($agent ? $agent : $_SERVER['HTTP_USER_AGENT']);
        $pattern = '#(?<browser>' . join('|', $known) .
        ')[/ ]+(?<version>[0-9]+(?:\.[0-9]+)?)#';
        if (!preg_match_all($pattern, $agent, $matches)) return array();
        $i = count($matches['browser'])-1;
        $b_info[0] = $matches['browser'][$i];
        $b_info[1] = $matches['version'][$i];
        return $b_info;
        }

    }

    /**

    For encrypt of Selected String
 */

if (!function_exists('encryptor')) {

    function encryptor($string) {
        $output = false;

        $encrypt_method = "AES-256-CBC";
        //pls set your unique hashing key
        $secret_key = 'e@c@l@i@c@k';
        $secret_iv = 'S3cur3';

        // hash
        $key = hash('sha512', $secret_key);

        // iv - encrypt method AES-256-CBC expects 16 bytes - else you will get a warning
        $iv = substr(hash('sha512', $secret_iv), 0, 16);

        //do the encyption given text/string/number

        $output = openssl_encrypt($string, $encrypt_method, $key, 0, $iv);
        $output = base64_encode($output);

        return $output;
    }

}
/**
    For Decrypt of encrypted value
 */
if (!function_exists('decryptor')) {

    function decryptor($string) {
        $output = false;

        $encrypt_method = "AES-256-CBC";
        //pls set your unique hashing key
        $secret_key = 'e@c@l@i@c@k';
        $secret_iv = 'S3cur3';

        // hash
        $key = hash('sha512', $secret_key);

        // iv - encrypt method AES-256-CBC expects 16 bytes - else you will get a warning
        $iv = substr(hash('sha512', $secret_iv), 0, 16);
        $output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);


        return $output;
    }
}
if (!function_exists('printArray')) {
    function printArray($array){
       echo"<pre>";
       print_r($array);
        echo"</pre>";
    }
}

if (!function_exists('allzipcode')) {
    function allzipcode($userid){
        $CI = get_instance();
        $CI->load->database();
        $CI->load->library('session');
        $CI->load->model('Site_model');
        $loginId=($CI->session->userdata("userid"));

        $sql = "SELECT * FROM zip_codes WHERE find_in_set('$userid',trainer_id)";
        $query = $CI->db->query($sql);
            if($query->num_rows() > 0)
            {
              return $query->result_array();
            }
            else
            {
              return false;
            } 

      }      
}

if (!function_exists('getZipcode')) {
    function getZipcode($address){
        if(!empty($address)){
        //Formatted address
        $formattedAddr = str_replace(' ','+',$address);
        //Send request and receive json data by address
        $geocodeFromAddr = file_get_contents('http://maps.googleapis.com/maps/api/geocode/json?address='.$formattedAddr.'&sensor=true_or_false'); 
       // print_r($geocodeFromAddr); exit;
        $output1 = json_decode($geocodeFromAddr);
        //Get latitude and longitute from json data
        $latitude  = $output1->results[0]->geometry->location->lat; 
        $longitude = $output1->results[0]->geometry->location->lng;
        //Send request and receive json data by latitude longitute
        $geocodeFromLatlon = file_get_contents('http://maps.googleapis.com/maps/api/geocode/json?latlng='.$latitude.','.$longitude.'&sensor=true_or_false');
        $output2 = json_decode($geocodeFromLatlon);
        if(!empty($output2)){
            $addressComponents = $output2->results[0]->address_components;
            foreach($addressComponents as $addrComp){
                if($addrComp->types[0] == 'postal_code'){
                    //Return the zipcode
                    return $addrComp->long_name;
                    }
                }
                return false;
            }else{
                return false;
            }
        }else{
            return false;   
        }
    }

}

// to get user details ----------
 
if (!function_exists('getUserDetails')) {

    function getUserDetails($id) {
        $CI = get_instance();
        $CI->load->database();
        $CI->load->library('session');
        $CI->load->model('Site_model');
        $data = array();
        $id = $id;
        $data['userData'] = $CI->Site_model->getRow("user","id='$id'");

        return $data; 
    }

}

// --------To get learner from websit accordig to accepted trainer -----------
 
if (!function_exists('leanerRegisterdFromWebsite')) {

    function leanerRegisterdFromWebsite($user_id) {
        $CI = get_instance();
        $CI->load->database();
        $CI->load->library('session');
        $CI->load->model('Site_model');
        $data = array();
        $learnersFromWebsite = $CI->Site_model->getRow("user","id=referred_by and referral_to_id is null");
       // $user_id = ($CI->session->userdata("userid"));
        $referredFromWebsiteId = [];
        if(count($learnersFromWebsite[0])>0){
            for($a=0;$a<count($learnersFromWebsite); $a++){
                $condition ="learner='".$learnersFromWebsite[$a]['id']."' and accepted_trainer='$user_id'";
                //echo checkDuplicateValue("booking",$condition)."<br>";
                if(checkDuplicateValue("booking",$condition)>0){
                    array_push($referredFromWebsiteId,$learnersFromWebsite[$a]['id']);   
                }
            }   
        }else{
           $referredFromWebsiteId = [];
        }
        return $referredFromWebsiteId; 
    }

}

// --------To get learner from Admin accordig to accepted trainer -----------
 
if (!function_exists('leanerRegisterdFromAdmin')) {
    function leanerRegisterdFromAdmin($user_id) {
        $CI = get_instance();
        $CI->load->database();
        $CI->load->library('session');
        $CI->load->model('Site_model');
        $data = array();
        $learnersFromAdmin = $CI->Site_model->getRow("user","created_by='1' and referral_to_id is null");
        //$user_id = ($CI->session->userdata("userid"));
        $referredFromAdminId = [];
        if(count($learnersFromAdmin[0])>0){
            for($a=0;$a<count($learnersFromAdmin); $a++){
                $condition ="learner='".$learnersFromAdmin[$a]['id']."' and accepted_trainer='$user_id' ";
                if(checkDuplicateValue("booking",$condition)>0){
                    array_push($referredFromAdminId,$learnersFromAdmin[$a]['id']);   
                }
            }   
        }else{
           $referredFromAdminId = [];
        }
        return $referredFromAdminId; 
    }

}

// --------To get learner Referred from login trainter to other trainer -----------
 
if (!function_exists('leanerReferredFromLoginTrainer')) {
    function leanerReferredFromLoginTrainer($user_id) {
        $CI = get_instance();
        $CI->load->database();
        $CI->load->library('session');
        $CI->load->model('Site_model');
        $data = array();
        //$user_id = ($CI->session->userdata("userid"));
        $leanerReferredFromLoginTrainer = $CI->Site_model->getRow("user","referral_from_id='$user_id'");
        $leanerReferredFromLoginTrainerId = [];
        if(count($leanerReferredFromLoginTrainer[0])>0){
            for($a=0;$a<count($leanerReferredFromLoginTrainer); $a++){
                array_push($leanerReferredFromLoginTrainerId,$leanerReferredFromLoginTrainer[$a]['id']); 
            }   
        }else{
           $leanerReferredFromLoginTrainerId = [];
        }
        return $leanerReferredFromLoginTrainerId; 
    }

}

// --------To get learner Referred tp login trainter from other trainer -----------

if (!function_exists('leanerReferredToLoginTrainer')) {
    function leanerReferredToLoginTrainer($user_id) {
        $CI = get_instance();
        $CI->load->database();
        $CI->load->library('session');
        $CI->load->model('Site_model');
        $data = array();
        //$user_id = ($CI->session->userdata("userid"));
        $leanerReferredToLoginTrainer = $CI->Site_model->getRow("user","referral_to_id='$user_id'");
        $leanerReferredToLoginTrainerId = [];
        if(count($leanerReferredToLoginTrainer[0])>0){
            for($a=0;$a<count($leanerReferredToLoginTrainer); $a++){
                array_push($leanerReferredToLoginTrainerId,$leanerReferredToLoginTrainer[$a]['id']); 
            }   
        }else{
           $leanerReferredToLoginTrainerId = [];
        }
        return $leanerReferredToLoginTrainerId; 
    }

}

// --------To get learner Referred to login trainter from other trainer -----------

if (!function_exists('leanerCreatedByLoginTrainer')) {
    function leanerCreatedByLoginTrainer($user_id) {
        $CI = get_instance();
        $CI->load->database();
        $CI->load->library('session');
        $CI->load->model('Site_model');
        $data = array();
       //$user_id = ($CI->session->userdata("userid"));
        $leanerCreatedByLoginTrainer = $CI->Site_model->getRow("user","created_by='$user_id' and referral_to_id is null");
        $leanerCreatedByLoginTrainerId = [];
        if(count($leanerCreatedByLoginTrainer[0])>0){
            for($a=0;$a<count($leanerCreatedByLoginTrainer); $a++){
                array_push($leanerCreatedByLoginTrainerId,$leanerCreatedByLoginTrainer[$a]['id']); 
            }   
        }else{
           $leanerCreatedByLoginTrainerId = [];
        }
        return $leanerCreatedByLoginTrainerId; 
    }

}


// --------To get Earning from learner calculating sum -----------
 
if (!function_exists('calculateEarning')) {

    function calculateEarning($condition) {
        $CI = get_instance();
        $CI->load->database();
        $CI->load->library('session');
        $CI->load->model('Site_model');
        $data = array();
        $learnerEarning = $CI->Site_model->getRow("payment_record",$condition);
        //$user_id = ($CI->session->userdata("userid"));
        $sum = [];
        if(count($learnerEarning[0])>0){
            for($j=0;$j<count($learnerEarning); $j++){
               array_push($sum,$learnerEarning[$j]['total_amount']);
            }   
        }
        return array_sum($sum); 
    }

}

// -------- get created or accepted trainer Id  -----------
 
if (!function_exists('createdAndAcceptedLearnerId')) {

    function createdAndAcceptedLearnerId($trainerId) {
        $CI = get_instance();
        $CI->load->database();
        $CI->load->library('session');
        $CI->load->model('Site_model');
        $data = array();

        $learnerId = [];
        // created By id ---
        $createdBy = $CI->Site_model->getRow("user","created_by='$trainerId'");
        if(count($createdBy[0])>0){
            for($j=0;$j<count($createdBy); $j++){
               array_push($learnerId,$createdBy[$j]['id']);
            }   
        }

        // Accepted By id ---
        $acceptedBy = $CI->Site_model->getRow("booking","accepted_trainer='$trainerId'");
        if(count($acceptedBy[0])>0){
            for($k=0;$k<count($acceptedBy); $k++){
               array_push($learnerId,$acceptedBy[$k]['learner']);
            }   
        }
        return (array_values(array_unique($learnerId))); 
    }

}



