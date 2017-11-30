<?php 
    include("header.php"); 

    $time = date('G:i:s');

    if($time < '13:30:00'){
        $day = date('Y-m-d');
    }else{
        $day= date("Y-m-d", strtotime("+1 day"));
    }
?>

<div class="row">
    <h4 class="col-lg-10">Actieve bestellingen</h4>
</div>
<div class="row">
    <table class="col-lg-12">
        <tr>
            <th class="col-lg-3">Ordernummer</th>
            <th class="col-lg-2">Datum</th>
            <th class="col-lg-2">Tijd</th>
            <th class="col-lg-1"></th>
            <th class="col-lg-2"></th>
            <th class="col-lg-3"></th>
        </tr>
        <?php
            if($_SESSION['rol'] == 'Patient'){
                $query = "select * from `order`, `orderregels` where `order`.`patient`=".$_SESSION['id']." and `order`.`orderstatus` != 2 and `orderregels`.`order`=`order`.`id` group by `order`;";
                $result = mysqli_query($conn, $query);
            }
            elseif($_SESSION['rol'] == 'Huisarts'){
                $query = "select * from `order`, `orderregels`,`patient` where `patient`.`huisarts`=".$_SESSION['id']." and `order`.`orderstatus`!=2 and `order`.`patient`=`patient`.`id` and `orderregels`.`order`=`order`.`id` group by `order`;";
                $result = mysqli_query($conn, $query);
            }
            //var_dump($result);
            while($record = mysqli_fetch_assoc($result)){
                echo "<tr>
                        <td>#".$record['order']."</td>
                        <td>".$record['datum']."</td>
                        <td>".$record['tijd']."</td>
                        <td>Info</td>";
                        if($_SESSION['rol'] == 'Patient' && $record['orderstatus'] == 1){
                echo   "<td><form action='bestelling_wijzigen.php' method='post'>
                                <input type='hidden' name='datum' value='".$record['datum']."'>
                                <input type='hidden' name='tijd' value='".$record['tijd']."'>
                                <button type='submit' class='btn login_btn' name='ordernr' value='".$record['order']."'>Wijzigen</button>
                                </form></td>
                      </tr>";
                        }
                        elseif($_SESSION['rol'] == 'Patient' && $record['orderstatus'] == 3){
                echo   "<td>Medicijnen ophalen bij apotheek</td>
                      </tr>";
                        }
                        elseif($_SESSION['rol'] == 'Huisarts' && $record['orderstatus'] == 3){
                echo   "<td>Medicijnen ophalen bij apotheek</td>
                        <td><form action='bestelling_opgehaald_database.php' method='post'><button type='submit' class='btn login_btn' name='order' value='".$record['order']."'>Opgehaald</button></form></td>
                      </tr>";
                        }
            }
        ?>
    </table>
</div>

<?php 
    include("footer.php"); 
?>