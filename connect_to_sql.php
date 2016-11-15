<?php

$db_host = "utbweb.its.ltu.se";
$db_username = "vikcar-3";
$db_pass = "memes";
$db_name = "vikcar3db";

mysql_connect("$db_host", "$db_username", "$db_pass") or die ("could not connect to mySQL");
mysql_select_db("$db_name") or die ("no database");

?>
