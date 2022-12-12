<?php 

$mysqliDebug = true;

//******* Koble til DB ****************************************************************

//$con = new mysqli("localhost","someuser","usersome", "SOME");

$con = new mysqli("localhost","admin","oledole", "SOME");


if ($con->connect_errno) {
        echo 'There was an error connecting to the database!';
        if ($mysqliDebug) {
         	echo $con->connect_error;
        }

        // drep script
        die();
    }

				    
$con->set_charset("utf8");	// utf-8 for å få med æøå





//******* Parametere fra html side *****************************************************					

$firstname		= $con->real_escape_string($_POST['firstname']);
$lastname 		= $con->real_escape_string($_POST['lastname']);					
$nickname 		= $con->real_escape_string($_POST['nickname']);
$email 			= $con->real_escape_string($_POST['email']);
$passw	 		= $con->real_escape_string($_POST['passw']);


//******* SQL ***********
$sql = "REPLACE INTO users(first_name,last_name,nickname,email,md5_pass) \n"
 		." VALUES(\"".$firstname."\"  ,\"".$lastname."\"   ,\"".$nickname."\"    ,\"".$email."\"      ,\"".$passw."\"  )\n";

$result = $con->query($sql);

if (!$result and $mysqliDebug) {
        // spørringen feilet og debugging er true
        echo "There was an error in query: $sql";
        echo $con->error;
	 die();   // dreper script
    }


//******* CLEANUP ****************************************************************** 

if ($results) {$results->free();}
$con->close();

?>