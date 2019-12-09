<?php
//Hard link to read from emedia site
$myFile="https://emedia.rmit.edu.au/bagwanhealth/wp-content/VR/public/static_assets/hello-world.json";
$requestPayload = file_get_contents("php://input");

//$object = json_decode($requestPayload);
var_dump($requestPayload);


if(file_put_contents('\wp-content\VR\public\static_assets\hello-world.json', $requestPayload)) {
	        echo 'Data successfully saved';
	    }
	   else 
	        echo "error in writing the json file";


?>


