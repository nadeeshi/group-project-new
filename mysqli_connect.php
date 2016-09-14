<?php

DEFINE('DB_USER', 'root');
DEFINE('DB_HOST', 'localhost');
DEFINE('DB_PASSWORD', '');
DEFINE('DB_NAME','newdb');

$dbc= @mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME)
OR die('Coudn`t '.
       mysqli_connect_error());
       




?>