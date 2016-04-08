<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

 define('RECIPIENT','dFwJMM3eZio:APA91bGcoulk1E4r6klSZuYapF2RCOSeugtDfXoHpuc5ZHq0RJdM6mH8rqeq7n49IlpUVGfyuQittOFEy0kRoiBI7dBVQOtmzf-cge1QPwpy-ALZj2ZDCf8BHhTX3csvy3M2-Zk6Cq-Y');
    $fields = array(
    	'to' => RECIPIENT,
	'data' => array(
							'body' => 'Here\'s some information',
							'title' => 'Important Notification'
                        ),
        "pickupLat"=>13.333906,
        "pickupLong"=>77.12477,
        "destLat"=>13.33471,
        "destLong"=>77.050612 
    );
    
    
    echo json_encode($fields);