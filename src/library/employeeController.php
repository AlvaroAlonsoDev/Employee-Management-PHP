<?php

include ("employeeManager.php");

if(isset($_GET["action"]) && $_GET["action"] == "listEmployees"){
    echo saveJson();
}

    if(isset($userID)){
        // CALL THE JSON
        $json_employees = file_get_contents("../resources/employees.json");
        $employees = json_decode($json_employees, true);
    
        foreach($employees as $employee) {
            if ($userID == $employee['id']) {
                $user = $employee;
                break;
            }
        }
    }
    






?>