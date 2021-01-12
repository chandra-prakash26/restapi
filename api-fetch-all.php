<?php


header('Acsess-Control-Allow-Origin: *');
header('Content-Type: application/json');

include "config.php";

$sql = "SELECT * from students";
$result= mysqli_query($conn,$sql) or die("SQL QUERY FAILED");

if(mysqli_num_rows($result) >0){

    $output= mysqli_fetch_all($result,MYSQLI_ASSOC);
    echo json_encode($output);

} else{
    echo json_encode(array('message' => 'No Record Found.', 'status'=>false));
}

?>
