<?php

header('Acsess-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: DELETE');
header('Access-Control-Allow-Methods: Access-Control-Allow-Methods,Content-Type,
Access-Control-Allow-Methods,Authorization,X-Requested-with');

$data = json_decode(file_get_contents("php://input"), true);

$student_id= $data['sid'];
include "config.php";

$sql = "DELETE FROM students WHERE id = {$student_id}";

if(mysqli_query($conn,$sql)){

    echo json_encode(array('message' => 'Student Record Deleted.', 'status'=>true));

} else{
    echo json_encode(array('message' => 'Student Record Not Deleted.', 'status'=>false));
}


?>
