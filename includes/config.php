<?php
define('DB_SERVER','localhost');
define('DB_USER','bgr_admin_user');
define('DB_PASS' ,';VkXg[NE]38r');
define('DB_NAME','bgr_admin');

// define('DB_SERVER','localhost');
// define('DB_USER','motion_bgr');
// define('DB_PASS' ,'motion_bgr');
// define('DB_NAME','motion_bgr');

$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}else{
    // echo "connected";
}
?>