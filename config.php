<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'amblncbking_and_helthmnitring');
 
$db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
if($db === false){
    die("ERROR: Unable to connect to database. " . mysqli_connect_error());
}
?>