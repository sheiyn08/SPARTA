<?php

$username = 'spartauser';
$password = 'letpaintwin';
$dbname = 'analyticsserver';
$host = '54.250.169.177';
$port = '5432';
$schema = 'public';

$dbc = pg_connect('host='.$host.' port='.$port.' dbname='.$dbname.' user='.$username.' password='.$password);