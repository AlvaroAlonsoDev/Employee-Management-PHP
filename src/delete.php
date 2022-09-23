<?php
    header('Content-Type: application/json');
    $aResult = array();
    $id = $_POST['id'];

    function deleteEmployee($userID){
        $deleted = false;
        // echo $userID;
        // echo '<script>console.log("Te borre id = '.$userID.'")</script>';
    
        $json_employees = file_get_contents("../resources/employees.json");
        $employees = json_decode($json_employees, true);
        
        for($i = 0; $i < count($employees); $i++){
            if ($userID == $employees[$i]['id']) {
                
                array_splice($employees, $i, 1);
                
                $new_employees = $employees;
                
                $new_employees = json_encode($employees);
                
                // if(file_put_contents("../resources/employees.json", $new_employees)){
                    
                //     echo '<script>console.log("DONE, ya esta borrado")</script>';
                    
                // }
                // echo "<pre>";print_r($employees);echo "</pre>";
                $deleted = true;
                $aResult['result'] = "borrado";
                break;
            }
        }

        return $deleted;
    }
    $isDeleted = deleteEmployee($id);
    
    if($isDeleted){
        echo json_encode($aResult);
    }
    else{
        echo("error - no borro");
    }
    

    
?>