<?php 
    include("header.php"); 

    $time = date('G:i:s');

    if($time < '13:30:00'){
        $day = date('Y-m-d');
    }else{
        $day= date("Y-m-d", strtotime("+1 day"));
    }
    
    //var_dump($_POST);
    
?>

    <div class="row">
        <h4 class="col-lg-10">Actieve bestelling: #<?php echo $_POST['ordernr'];?></h4>
    </div>
    <?php
        $opquery = "select * from `orderregels` where `order`='".$_POST['ordernr']."' group by `datum`";
        $opresult = mysqli_query($conn, $opquery);
        $counter = 1;
        while($oprecord = mysqli_fetch_assoc($opresult)){
            //echo $oprecord['datum'];
            
    ?>
    <div class="row">
        <form class="col-lg-12" action="bestelling_wijzigen_database.php" method="POST">
        <table class="col-lg-12">
            <tr>
                <th class="col-lg-3">Naam medicijn</th>
                <th class="col-lg-5">Beschrijving</th>
                <th class="col-lg-2">Datum</th>
                <th class="col-lg-2">Tijd</th>
                <th></th>
            </tr>
            <?php
                $query = "select * from `orderregels`, `medicijnen` where `orderregels`.`order`='".$_POST['ordernr']."' and `datum` ='".$oprecord['datum']."' and `orderregels`.`medicijn`=`medicijnen`.`id`";
                $result = mysqli_query($conn, $query);
                while($record = mysqli_fetch_assoc($result)){
                    echo "<tr>
                            <td>".$record['naam']."</td>
                            <td>".$record['beschrijving']."</td>
                            <td>".$record['datum']."</td>
                            <td>".$record['tijd']."</td>
                            <td><input type='hidden' name='medicijn[]' value='".$record['medicijn']."'></td>
                          </tr>";
                }
            ?>
        </table>
    
    <br>
                <input type='hidden' name='ordernr' value='<?php echo $_POST['ordernr']; ?>'>
                <br>
                <br>
                <div class="text-nowrap row">
                    <label class='col-lg-2 col-xs-5'>Nieuwe datum:</label>
                    <input class='col-lg-2 col-xs-5' id='datum<?php echo $counter;?>' type="date" name="datum" min='<?php echo $day; ?>'>
                </div>

                <br>

                <div class="text-nowrap row">
                    <label class='col-lg-2 col-xs-5'>Nieuwe tijd:</label>
                    <select class='col-lg-2 col-xs-5' id='tijd<?php echo $counter;?>' name='tijd'>
                    </select>
                </div>

                <br>
                <button type="submit" class="btn login_btn" id='btn<?php echo $counter;?>' style="display: none;">Wijziging opslaan</button>
            </form>
        </div>
    <?php      
        include("footer.php");
            
    ?>
     <script>     
        $( function(){
            //$( "#datum" ).datepicker({ dateFormat: 'yy-mm-dd' });
            document.getElementById("datum<?php echo $counter;?>").onchange = function(){
                $.ajax({
                    type: "post",
                     url: "leverdatumophalen.php",
                    data: {datum: this.value}
                }).done( function(msg){
                    //alert(msg);
                    var data = JSON.parse(msg);
                    $("#tijd<?php echo $counter;?>").children().remove();
                    $("#tijd<?php echo $counter;?>").append(data.timeString);

                    if(data.timeBool === "true"){
                        document.getElementById('btn<?php echo $counter;?>').style.display = 'block';
                    }else{
                        document.getElementById('btn<?php echo $counter;?>').style.display = 'none';
                    }


                });
            };
        });
      </script>
<?php
                                            $counter++;
                                            //echo $counter;
                                               }
?>