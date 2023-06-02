<?php
//LAMP
// $dbc = mysqli_connect("10.69.42.10","someuser","usersome","SOME" )
// or die ("ERROR CONNECTING");

//XAMP
$dbc = mysqli_connect("localhost","root","","SOME" )
or die ("ERROR CONNECTING");

$dbc->set_charset("utf8");




?>