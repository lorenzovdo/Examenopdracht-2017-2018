<?php
    include("header.php");	


    echo "<h3>Bestelling maken stap 3</h3>";

    //var_dump($_POST);
    $rows = array();
    foreach($_POST['medicijn'] as $key){
        $query = "select * from medicijnen where id =".$key;
        $result = mysqli_query($conn, $query);
        $record = mysqli_fetch_assoc($result);
        $rows[] = $record;
    }

    $query2 = "select * from patient where id =".$_POST['naam'];
    $result2 = mysqli_query($conn, $query2);
    $record2 = mysqli_fetch_assoc($result2);

    //var_dump($record2);

    $time = date('G:i:s');

    if($time < '13:30:00'){
        $day = date('Y-m-d');
    }else{
        $day= date("Y-m-d", strtotime("+1 day"));
    }
    
    //var_dump($_POST);
    
?>    

     <br><br>
    <div class="row">
        <form action="bestelling_maken_database.php" name='bestelling_maken_stap_3' method='post'>
            <div class="text-nowrap row">
                <label class='col-lg-1 col-xs-5'>Patiënt:</label>
                <p><?php echo $record2['voornaam']."-".$record2['achternaam']; ?></p>
                <input type="text" value="<?php echo $record2['id'];  ?>" class='col-lg-2 col-xs-5' name='naam' hidden>
            </div>

            <br>

            <div class="text-nowrap row">
                <label class='col-lg-1 col-xs-5'>Datum:</label>
                <p><?php echo $_POST['datum']; ?></p>
                <input class='col-lg-2 col-xs-5' type="date" name="datum" value="<?php echo $_POST['datum']; ?>" hidden>
            </div>

            <br>

            <div class="text-nowrap row">
                <label name='tijd' class='col-lg-1 col-xs-5'>Tijd:</label>
                <p><?php echo $_POST['tijd']; ?></p>
                <input class='col-lg-2 col-xs-5' type="time" name="tijd" value="<?php echo $_POST['tijd']; ?>" hidden>
            </div>
            
            
            <br><br>
            
            <div class="text-nowrap row">
                <table class='col-lg-5 col-xs-12'>
                    <tr>
                        <th>Naam</th>
                        <th>Aantal</th>
                    </tr>

                    <?php
                        //var_dump($_POST['medicijn']);
                        $counter = 1;
                        foreach($rows as $key){
                            echo "<tr><td><input name='medicijn[]' value='".$key['id']."' hidden><p>".$key['naam']."</p></td><td><input type='number' id='aantal".$counter."' name='aantal[]' value='1'></td></tr>";  
                            $counter++;
                        }

                    ?>

                </table>

                <table class='col-lg-5 col-xs-12' style='float: right;' id='table'>
                    <tr>
                        <th>Naam</th>
                        <th>Aantal</th>
                    </tr>
                    <?php
                        $counter = 1;
                        foreach($rows as $key){
                            echo "<tr><td class='col-lg-3'><p id='medicijn".$counter."'></p></td><td class='col-lg-1'><p id='aantalen".$counter."'></p></td></tr>";  
                            $counter++;
                        }
                    ?>
                </table>
            </div>    
            
            <br><br>
            <div class="text-nowrap row">
                <label name='tijd' class='col-lg-2 col-xs-5'>Betaal methode:</label>
                <select name='btlmet' class='col-lg-2 col-xs-5'>
                    <option value='1'>Pin</option>
                    <option value='2'>Contant</option>
                </select>
            </div>
            
            <div class="text-nowrap row" style='float: right;'>
                <label class='col-lg-7 col-xs-5'>Nieuwe datum:</label>
                    <input class='col-lg-6 col-xs-5'  id='nieweDInput' name="niewedatum" type='text' value='' hidden>
                    <p class='col-lg-6 col-xs-5' id='niewedatum'></p>
            </div>
            
            <br>
            <br>
            <br>
            
            <div class="text-nowrap row" style='float: right;'>
                <label class='col-lg-7 col-xs-5'>Nieuwe tijd:</label>
                    <select class='col-lg-8 col-xs-5' id='niewetijd' name='niewetijd'>
                    </select>
            </div>
            
            <br>
            <button type="submit" class="btn login_btn" name='Btn' value='huisarts'>Bestelling bevestigen</button>
        </form>
    </div>
<?php
include("footer.php");
$counter = 1;
?>
<script>
    var array = ['0'];
    var teller = 0;
    var d = new Date().getDate();
    var m = new Date().getMonth() + 1;
    var y = new Date().getFullYear();
    var day = '' + y + '-' + (m<=9 ? '0' + m : m) + '-' + (d <= 9 ? '0' + d : d);
    var availableDay = (d <= 9 ? '0' + d : d) + '-' + (m<=9 ? '0' + m : m) + '-' + y;
</script>
<?php
foreach($rows as $key){
?>
<script>  
    $("#aantal<?php echo $counter;?>").bind('keyup mouseup', function () {
        var waarde = this.value;
            if(this.value > <?php echo $key['voorraad']; ?>){
                var overvoorraad = Number(waarde) - Number(<?php echo $key['voorraad']; ?>);
                var naam = '<?php echo $key['naam'] ?>';
                var bbt = parseInt('<?php echo $key['bbt'] ?>');
                if( bbt > array[0]){
                    var index = array.indexOf('<?php echo $key['bbt'] ?>');
                    array.push('<?php echo $key['bbt'] ?>');
                    if(teller === 0){
                            teller = <?php echo $key['bbt'] ?>;
                            var days = '<?php $date = $_POST['datum'];
                                $date1 = str_replace('-', '/', $date);
                                $tomorrow = date('Y-m-d',strtotime($date1 . "+".$key['bbt']." days"));
                                echo $tomorrow; ?>';
                            document.getElementById("niewedatum").innerHTML = days;
                            document.getElementById("nieweDInput").value = days;
                                        $.ajax({
                                            type: "post",
                                             url: "leverdatumophalen.php",
                                            data: {datum: day}
                                        }).done( function(msg){
                                            var data = JSON.parse(msg);
                                            $("#niewetijd").children().remove();
                                            $("#niewetijd").append(data.timeString);
                                        });
                                    }
                        
                    else if(teller < <?php echo $key['bbt'] ?>){
                            teller = <?php echo $key['bbt'] ?>;
                            var days = '<?php $date = $_POST['datum'];
                                $date1 = str_replace('-', '/', $date);
                                $tomorrow = date('Y-m-d',strtotime($date1 . "+".$key['bbt']." days"));
                                echo $tomorrow; ?>';
                            document.getElementById("niewedatum").innerHTML = days;
                            document.getElementById("nieweDInput").value = days;
                                        $.ajax({
                                            type: "post",
                                             url: "leverdatumophalen.php",
                                            data: {datum: day}
                                        }).done( function(msg){
                                            var data = JSON.parse(msg);
                                            $("#niewetijd").children().remove();
                                            $("#niewetijd").append(data.timeString);
                                        });
                        }
                    
                }
                document.getElementById("medicijn<?php echo $counter; ?>").innerHTML = naam;
                document.getElementById("aantalen<?php echo $counter; ?>").innerHTML = String(overvoorraad);
            }
    });
</script>
<?php
                       $counter++;
                      }    
?>
<script>
    $( function(){
        //$( "#datum" ).datepicker({ dateFormat: 'yy-mm-dd' });
        
    });
</script>