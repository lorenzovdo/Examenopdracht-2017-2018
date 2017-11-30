<?php
    include("header.php");
    
    if(isset($_POST)){
        
        $queryActivePatient = "update `patient`,`order` set `patient`.`actief` = 0 where `order`.`id` = ".$_POST["order"]." and `order`.`akng` = 2 and `order`.`patient` = `patient`.`id`;";
        $resultActivePatient = mysqli_query($conn, $queryActivePatient);
        
        $queryOrderregels = "update `order`,`orderregels` set `orderregels`.`orderActief` = 0 where `order`.`id` = ".$_POST['order'].";";
        $resultOrderregels = mysqli_query($conn, $queryOrderregels);
        
        $queryOrder = "update `order` set `orderstatus` = 2 where `id` = ".$_POST['order']."";
        $resultOrder = mysqli_query($conn, $queryOrder);
        
        header("location:bestelling_overzicht.php");
    }
    

    include("footer.php");
?>