<?php
    include("header.php");	

    //var_dump($_POST);
    
    echo "<h3>Bestelling maken stap 2</h3>";
    
   
    echo "<form action='bestelling_maken_stap_3.php' method='post'>";
    get_medicijnen();
    echo "<input type='hidden' name='naam' value='".$_POST['naam']."'>";
    echo "<input type='hidden' name='datum' value='".$_POST['datum']."'>";
    echo "<input type='hidden' name='tijd' value='".$_POST['tijd']."'>";

function get_medicijnen(){
    global $conn;
    $query = 'select * from medicijnen order by naam';
    $result = mysqli_query($conn, $query);
    //var_dump($result);
    while($record = mysqli_fetch_assoc($result)){
        echo "<label class='nopadding nomargin medicijn_naam' data-toggle='tooltip' title='".$record['types']."--".$record['beschrijving']."'>".$record['naam']."<input name='medicijn[]' value='".$record['id']."' class='checkbox' type='checkbox'></label><br>";
    }
}
/////////////////////////////////////////////////////////////////////////////////wijziginsopdracht///////////////////////////////////////////////////////////////////////////
function get_medicijnen_wijzigingsopdracht(){
    global $conn;
    $query = "select * from `allergieen` where `patient`='".$_POST['naam']."'";
    $result = mysqli_query($conn, $query);
    while($record = mysqli_fetch_assoc($result)){
        $query1 = "select * from medicijnen where not id='".$record['medicijn']."' order by naam";
        $result1 = mysqli_query($conn, $query1);
        $array[] = $record['medicijn'];
    }
    $query2 = 'select * from medicijnen order by naam';
    $result2 = mysqli_query($conn, $query2);
        while($record2 = mysqli_fetch_assoc($result2)){
                if(!in_array($record2['id'],$array)){
                    echo "<label class='nopadding nomargin medicijn_naam' data-toggle='tooltip' title='".$record2['types']."--".$record2['beschrijving']."'>".$record2['naam']."<input name='medicijn[]' value='".$record2['id']."' class='checkbox' type='checkbox'></label><br>";
            }
                
        }
}
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    
    echo "<button type='submit' class='btn login_btn' name='Btn' value='huisarts'>Verder naar stap 3</button>";
    echo "</form>";

include("footer.php");

?>

<script>
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
    });
</script>