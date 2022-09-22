<?php


function saveJson(){
    $json_employees = file_get_contents("../../resources/employees.json");
    return $json_employees;
}

function deleteEmployee($userID){
    echo '<script>console.log("Te borre'.$userID.'")</script>';

//     $json_employees = file_get_contents("../resources/employees.json");
//     $employees = json_decode($json_employees, true);

//     unset($employees[$userID]);
// }




