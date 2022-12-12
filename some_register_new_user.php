<?php 

$mysqliDebug = true; // velg om SQL feilmelding skal returneres

//******* Koble til DB ****************************************************************

//$con = new mysqli("localhost","someuser","usersome", "SOME");

$con = new mysqli("localhost","admin","oledole", "SOME");


if ($con->connect_errno) {
        echo 'Det var en feil under tilkoblingen til databasen!';
        if ($mysqliDebug) {
         	echo $con->connect_error;
        }

        die(); // stopper hele scriptet
    }


$con->set_charset("utf8");	// for å få med æøå bruker vi utf-8





//******* Parametere fra HTML siden *****************************************************						

$firstname		= $con->real_escape_string($_POST['firstname']);
$lastname 		= $con->real_escape_string($_POST['lastname']);					
$nickname 		= $con->real_escape_string($_POST['nickname']);
$email 			= $con->real_escape_string($_POST['email']);
$passw	 		= $con->real_escape_string($_POST['passw']);

// echo ($_POST['firstname']);	//TEST synlig i console ved debugging





//******* SQL ***********
$sql = "REPLACE INTO users(first_name,last_name,nickname,email,md5_pass) \n"
 		." VALUES(\"".$firstname."\"  ,\"".$lastname."\"   ,\"".$nickname."\"    ,\"".$email."\"      ,\"".$passw."\"  )\n";


$result = $con->query($sql);

if (!$result and $mysqliDebug) {
        // SQL Spørring feilet og debugging er aktivert
        echo "Det var en feil i spørringen: $sql";
        echo $con->error;
	 die();   // dreper programmet
    }


""

//******* CLEANUP ****************************************************************** 

if ($results) {$results->free();}
$con->close();


 
?>