<?php
    session_start();
    include("db_connect.php");
        /*$tijd = ['15:00','15:10','15:20','15:30','15:40','15:50','16:00','16:10','16:20','16:30','16:40','16:50','17:00','17:10','17:20','17:30','17:40','17:50','18:00','18:10','18:20','18:30','18:40','18:50','19:00','19:10','19:20','19:30','19:40','19:50','20:00','20:10','20:20','20:30','20:40','20:50','21:00','21:10','21:20','21:30','21:40','21:50','22:00','22:10','22:20','22:30','22:40','22:50','23:00'];*/

        $tijd = ['15:00','16:00','17:00','18:00','19:00','20:00','21:00','22:00','23:00'];

        
        
        $query = "select * from orderregels where datum = '".$_POST["datum"]."'";
        $result = mysqli_query($conn, $query);
        $record = mysqli_fetch_assoc($result);
        $timeString = "";
        $timeBool = 'false';
        $i = 0;
        while($i < count($tijd)){
            $query = "SELECT * FROM `orderregels` WHERE `datum` = '".$_POST['datum']."' and `tijd` = '".$tijd[$i]."' group by `order`";
            $result = mysqli_query($conn, $query);
            if(mysqli_num_rows($result) < 4){
                $timeString .= "<option>".$tijd[$i]."</option>";
                $timeBool = 'true';
            }
            $i++;
        }
        
        if($timeBool == 'false'){
            $timeString .= "<option>niet beschikbaar</option>";
        }

        echo json_encode(array("timeString" => $timeString, "timeBool" => $timeBool), JSON_UNESCAPED_SLASHES);

        //var_dump($_POST);
        //var_dump($result);
        //echo $record['tijd'];
        //var_dump($tijd);
    
?>