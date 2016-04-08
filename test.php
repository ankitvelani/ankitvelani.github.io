<?php

include_once "_Include/DBConfig.php";

$obj = new Connection();

$date = new DateTime();
$todayDate = $date->format('Y-m-d');

$RideID=1;
$filter="r.ID = $RideID and r.autoID = a.ID";
$table=" RideMaster r , AutoMaster a ";
$data=" r.ID , r.autoID , a.gcmID ";
$data=$obj->showData($table, $data, $filter);
print_r();