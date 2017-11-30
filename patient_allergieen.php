<?php
    include("header.php");

    $query = "select * from patient where huisarts =".$_SESSION['id'];
    $result = mysqli_query($conn, $query);
?>

    <h3>Bestelling maken stap 1</h3>
    <br><br>
    <div class="row">
        <form action="patient_allergieen_database.php" method='post'>
            <div class="text-nowrap row">
                <label class='col-lg-1 col-xs-5'>Patiënt:</label>
                <select class='col-lg-2 col-xs-5' name='naam'>
                         <?php foreach($result as $key){
                             echo "<option value='".$key['id']."'>".$key['voornaam']."-".$key['achternaam']."</option>";
                         } ?>
                </select>
            </div>
            <br>
            
            <?php
                $query = 'select * from medicijnen order by naam';
                $result = mysqli_query($conn, $query);
                //var_dump($result);
                while($record = mysqli_fetch_assoc($result)){
                    echo "<label class='nopadding nomargin medicijn_naam' data-toggle='tooltip' title='".$record['types']."--".$record['beschrijving']."'>".$record['naam']."<input name='medicijn[]' value='".$record['id']."' class='checkbox' type='checkbox'></label><br>";
                }
            ?>
            
            <br>
            <button type="submit" class="btn login_btn" id='btn' name='Btn' value='huisarts'>Opslaan</button>
        </form>
    </div>
        </div>
<?php      
    include("footer.php");
?>