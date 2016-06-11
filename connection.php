<?php

////// DB connection

$con = mysql_connect('localhost', 'root', '');
if(!$con){
die("Database connection failed ".mysql_error());
}

$db = mysql_select_db('code_test', $con);
if(!$db){
die("Database selection failed ".mysql_error());
}

defined("SITE_ROOT")? null : define("SITE_ROOT","http://127.0.0.1/eagle");

?>
