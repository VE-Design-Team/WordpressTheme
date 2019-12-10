<?php

$myFile="https://emedia.rmit.edu.au/bagwanhealth/VR/public/static_assets/hello-world.json";
$requestPayload = file_get_contents("php://input");

//$object = json_decode($requestPayload);
var_dump($requestPayload);


if(file_put_contents(dirname(__FILE__).'/VR/public/static_assets/hello-world.json', $requestPayload)) {
	        echo 'File written successfully';
	    }
	   else 
	        echo "error in writing the json file";


?>