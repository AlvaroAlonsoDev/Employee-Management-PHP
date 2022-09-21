<?php

// CALL THE JSON
$json_employees = file_get_contents("../resources/employees.json");
$employees = json_decode($json_employees, true);

foreach($employees as $employee) {
    if ($userID == $employee['id']) {
        $user = $employee;
        break;
    }
}

?>