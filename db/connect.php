<?php

$db_server = "localhost";
$db_user = "root";
$db_pass = "MoreDbz";
$db_name = "crud";

$db = new_mysqli($db_server, $db_user, $db_pass, $db_name);

if($db->connect_errno){
	ehco "Problem Connecting to DB";
}

?>