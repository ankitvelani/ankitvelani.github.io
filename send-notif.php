<?php
	
    $url = 'https://android.googleapis.com/gcm/send';
    define('RECIPIENT','eLO7GLruS6w:APA91bGzOrMIdV7v1rVqxFKa--7WsklT-hMk87E9HjzJbbDZEXDUpbLH9IPIFzpuN8WupSXqQTBCohrcKOKhEy01pMsKi2BYQCB9e98HVlwoNLQ2aV4pRQcxpW35ScyXQ2npExHJypVo');
    $fields = array(
    	'to' => RECIPIENT,
		'data' => array(
							 'body' => 'Hii this is new notification ',
        'title' => 'Ride Request ',
        'pickupLat'=>'1.12346',
        'pickupLong'=>'2.5441',
        'destLat'=>'3.0235',
        'destLong'=>'4.023',
						)
    );

    define('GOOGLE_API_KEY', 'AIzaSyBjEvN5JpirPHgfl91i6vSxDd3GwOBjBmo');

   $headers = array(
        'Authorization:key=' . GOOGLE_API_KEY,
        'Content-Type: application/json'
    );
    echo json_encode($fields);
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));

    $result = curl_exec($ch);
    if($result === false)
        die('Curl failed');
    echo 'Notification Sent';
    curl_close($ch);
    return $result;


?>