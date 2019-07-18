<?php

require 'connect.inc.php';
// I should be successfully logged into the server at this point.

// Seeing if the form was successfully retrieved.
if ( isset( $_GET['submit'] ) )
{
echo '<h2>Form successfully submitted.<h2/>';
} else
{
echo '<h2>Form NOT successfully submitted.<h2/>';
}

// Setting temp value for username.
$username = $_GET['username'];

$result = mysql_query("SELECT id FROM users WHERE username = '$username'");
if ($result && mysql_num_rows($result) > 0) {
        echo 'Username Found'; 
    }
else {
    echo 'Username NOT Found';
    }
echo nl2br ("\n");
echo "User name is: $username";

// Do stuff here.
$result= mysql_query("SELECT radio1 FROM users WHERE username = '$username'");


echo nl2br ("\n");
echo nl2br ("\n");
echo "Redirecting...";

?>

<html>
<head>
<meta http-equiv="refresh" content="2;url=http://pendletonstudios.com/access.html">
</head>
</html>