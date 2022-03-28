<?php
header('Content-type: application/json');
include_once '../include_commons.php';
$headers = apache_request_headers();

$array = array();
$errors = array();

if (Utils::IsPost()) {
    $data = new DataModel();
     $jsn = json_decode($_POST['json'],true);
     foreach($json as $key){
         
     }
    
}else{
     $array["status"] = "failure";
    $array["message"] = "GET Request is NOT allowed";
    $array["errors"] = array("request" => "Get is NOT allowed");
    echo json_encode($array);
}


?>