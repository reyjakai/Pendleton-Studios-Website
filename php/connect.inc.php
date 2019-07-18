<?php
$conn_error = 'Could not connect.';

$mysql_host = 'pendletonstudioscom.ipagemysql.com';
$mysql_user = 'reyjakai';
$mysql_pass = 'gay_butts';

$mysql_db = 'ebaytest';

@mysql_connect($mysql_host, $mysql_user, $mysql_pass) or die ("Unable to connect to server.");

@mysql_select_db($mysql_db) or die ("Unable to connect to Database.");

?>