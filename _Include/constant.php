<?php

 
/* Symbolic name for Value */


// DATABASE CONFIG
//define("HOST", "127.7.67.130");
//define("USERNAME", "admins7xRkB3");
//define("PASSWORD", "gwD6N3P-GI39");
//define("DBNAME", "tmvas");


// Example of URL : http://localhost/tmvas  , remove / from the rear end 
define("BASE_URL","http://localhost/tmvas");

define("HOST", "localhost");
define("USERNAME", "root");
define("PASSWORD", "root");
define("DBNAME", "tmvas");

 define('AUTO_GOOGLE_API_KEY', 'AIzaSyBjEvN5JpirPHgfl91i6vSxDd3GwOBjBmo');
 define('GCMURL', "https://android.googleapis.com/gcm/send");
 define('CUSTOMER_GOOGLE_API_KEY', 'AIzaSyDyBvb6gOEqyrT5uzB_FI4Z8Q8eVVluAPs');

define("STATUS_NOT_FOUND", 404);
define("STATUS_BAD_REQUEST", 400);
define("STATUS_SUCCESS", 200);
define("BASE_URL","http://localhost/tmvas");
/* End Symbolic name for Value */




/* Funcation for CURD Operation Error Message */
/*
 *  Author : Ankit Velani
 * 
 *  ID : if id is exists
 *  Message : write message want to display
 *  Code : write Appropriate Code
 * 
 * Ex:
 *  ID : NULL
 *  Message : Bad request
 *  Code : 400
 * 
 *  */

function CURDMessage($id,$message,$code)
{
     $message=array(
      "ID"=>$id,
      "Message"=>$message,
      "Code" => $code
    );
    echo(json_encode($message));
}

/* END Funcation for CURD Operation Error Message */



/* Finding Distance from two points */

/*::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::*/
/*::                                                                         :*/
/*::  This routine calculates the distance between two points (given the     :*/
/*::  latitude/longitude of those points). It is being used to calculate     :*/
/*::  the distance between two locations using GeoDataSource(TM) Products    :*/
/*::                                                                         :*/
/*::  Definitions:                                                           :*/
/*::    South latitudes are negative, east longitudes are positive           :*/
/*::                                                                         :*/
/*::  Passed to function:                                                    :*/
/*::    lat1, lon1 = Latitude and Longitude of point 1 (in decimal degrees)  :*/
/*::    lat2, lon2 = Latitude and Longitude of point 2 (in decimal degrees)  :*/
/*::    unit = the unit you desire for results                               :*/
/*::           where: 'M' is statute miles (default)                         :*/
/*::                  'K' is kilometers                                      :*/
/*::                  'N' is nautical miles                                  :*/
/*::  Worldwide cities and other features databases with latitude longitude  :*/
/*::  are available at http://www.geodatasource.com                          :*/
/*::                                                                         :*/
/*::  For enquiries, please contact sales@geodatasource.com                  :*/
/*::                                                                         :*/
/*::  Official Web site: http://www.geodatasource.com                        :*/
/*::                                                                         :*/
/*::         GeoDataSource.com (C) All Rights Reserved 2015		   		     :*/
/*::                                                                         :*/
/*::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::*/

function distance($lat1, $lon1, $lat2, $lon2, $unit="K") {

  $theta = $lon1 - $lon2;
  $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +  cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
  $dist = acos($dist);
  $dist = rad2deg($dist);
  $miles = $dist * 60 * 1.1515;
  $unit = strtoupper($unit);

  if ($unit == "K") {
    return ($miles * 1.609344);
  } else if ($unit == "N") {
      return ($miles * 0.8684);
    } else {
        return $miles;
      }
}

/* End distance function*/



/* Mail fuction with HTML Format */
function mmail($toemail) {

    
include_once "./_Include/constant.php";
 $email=$toemail;
 
	
  $email_message= "<html>
    <head>
    <!-- Latest compiled and minified CSS -->
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css' integrity='sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7' crossorigin='anonymous'>

<!-- Optional theme -->
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css' integrity='sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r' crossorigin='anonymous'>

<!-- Latest compiled and minified JavaScript -->
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js' integrity='sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS' crossorigin='anonymous'></script>
    </head>
    <body>
        <div class='container'>
            <Div class='row'>
                <div class='col-sm-12'>
                    <br><br> 
                    <h1 class='text-center'>Welcome to WePathIT</h1>
                    
                    <p class='text-center'>
                        Thank you for signing up with us. We are happy you chose a safe and convenient travel experience.
                        <br><br><br><BR>
                        <img src='http://www.campusoption.com/images/colleges/gallery/20_08_14_125526_sit-logo.png' class='img img-circle img-responsive center-block'  style='margin-left:5%'>
                        <br><br><br><BR>
                    </p>
                    
                    <footer class='text-center'>
                        WePathIT.com | Developed By : Siddaganga Institute of Technology
                    </footer>
                </div>
            </Div>
        </div>
    </body>
</html>";
                  
    
        $api_key = "key-cbba876f76372f84bebffef32e2a125e"; /* Api Key got from https://mailgun.com/cp/my_account */
        $domain = "wepathit.com"; /* Domain Name you given to Mailgun */
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        curl_setopt($ch, CURLOPT_USERPWD, 'api:' . $api_key);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
        curl_setopt($ch, CURLOPT_URL, 'https://api.mailgun.net/v2/' . $domain . '/messages');
        curl_setopt($ch, CURLOPT_POSTFIELDS, array(
            'from' => 'WePathIT <info@wepathit.com>',
            'to' => $email,
            'subject' => "WePathIT-Registration",
            'html' =>  $email_message
        ));
        $result = curl_exec($ch);
        curl_close($ch);
        return $result;
}