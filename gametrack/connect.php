<?php

$user='root';
$pass='';
$db = 'gametrack';

$db = new mysqli('localhost',$user,$pass,$db) or die("unable to connect");

echo "connected"

?>