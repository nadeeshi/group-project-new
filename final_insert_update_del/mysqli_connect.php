<?php

DEFINE('DB_USER', 'root');
DEFINE('DB_HOST', 'localhost');
DEFINE('DB_PASSWORD', '');
DEFINE('DB_NAME','project');

$dbc = @mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME)
OR die('Unable to Connect '.
       mysqli_connect_error());





?>