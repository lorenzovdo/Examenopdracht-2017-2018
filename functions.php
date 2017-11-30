<?php
    function get_record($table, $fields, $where = null){
        global $conn;
        
        $lastField = end($fields);
        
        $query = "SELECT ";
        foreach($fields as $field){
            $query .= "".$field."";
            if($field !== $lastField){
                $query .= ", ";
            }
        }
        
        $query .= " FROM `{$table}`";
        
        if($where !== null){
            $lastWhere = end($where);
            $query .= " where ";
            foreach($where as $key){
                $query .= "".$key."";
                if($key !== $lastWhere){
                    $query .= " and ";
                }
            }
        }
        $query .= ";";
        $result = mysqli_query($conn, $query);
        
        while($record = mysqli_fetch_assoc($result)){
            foreach($fields as $field){
                echo $record[$field];
            }
        }
    }

    function get_home_by_role($rol){
        switch($rol){
            case "patient":
                
                break;
                
            case "huisarts":
                echo "<div class=\"row upperHomeRow\">
                        <div class=\"col-lg-6\">
                            <div class=\"col-lg-4 homeButton\" onclick=\"location.href='order_step_1.php';\">Bestelling aanmaken</div>
                            <div class=\"col-lg-1\"></div>
                            <div class=\"col-lg-4 homeButton\" onclick=\"location.href='order_overview.php';\">Bestel overzicht</div>
                            </div>
                            </div>
                            <div class=\"row lowerHomeRow\">
                            <div class=\"col-lg-6\">
                            <div class=\"col-lg-4 homeButton\" onclick=\"location.href='create_patient.php';\">Patiënt aanmaken</div>
                            <div class=\"col-lg-1\"></div>
                            <div class=\"col-lg-4 homeButton\" onclick=\"location.href='patient_overview.php';\">Patiënt overzicht</div>
                        </div>
                     </div>";
                break;
                
            case "apotheek":
                
                break;
                
            case "bezorger":
                
                break;
                
            case "admin":
                
                break;
        }
    }
    
    
    function bestelling_maken_stap_2($i){
        global $conn;
        
        $i = 0;
        
        $query = "SELECT * from `medicijnen`";
        $result = mysqli_query($conn, $query);
		$record = mysqli_fetch_assoc($result);
        
        while($record > $i){
            echo "<h4>hallo</h4>";
            $i++;
        }
    }