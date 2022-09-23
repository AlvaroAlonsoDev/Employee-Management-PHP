<?php


function saveJson(){
    $json_employees = file_get_contents("../../resources/employees.json");
    return $json_employees;
}

function deleteEmployee($userID){
    echo '<script>console.log("Te borre id = '.$userID.'")</script>';

    $json_employees = file_get_contents("../resources/employees.json");
    $employees = json_decode($json_employees, true);
    
    for($i = 0; $i < count($employees); $i++){
        if ($userID == $employees[$i]['id']) {
            
            array_splice($employees, $i, 1);
            
            $new_employees = $employees;
            
            $new_employees = json_encode($employees);
            
            if(file_put_contents("../resources/employees.json", $new_employees)){
                
                echo '<script>console.log("DONE, ya esta borrado")</script>';
                
            }
            // echo "<pre>";print_r($employees);echo "</pre>";
            // header("LOCATION: dashboard.php");

            break;
        }
        
    }

}




